<?php
/**
 * Classes to create relation schema in EPS format.
 */

declare(strict_types=1);

namespace PhpMyAdmin\Plugins\Schema\Eps;

use PhpMyAdmin\ConfigStorage\Relation;
use PhpMyAdmin\Identifiers\DatabaseName;
use PhpMyAdmin\Plugins\Schema\ExportRelationSchema;
use PhpMyAdmin\Version;

use function __;
use function date;
use function in_array;
use function max;
use function sprintf;

/**
 * EPS Relation Schema Class
 *
 * Purpose of this class is to generate the EPS Document
 * which is used for representing the database diagrams.
 * This class uses post script commands and with
 * the combination of these commands actually helps in preparing EPS Document.
 *
 * This class inherits ExportRelationSchema class has common functionality added
 * to this class
 */
class EpsRelationSchema extends ExportRelationSchema
{
    /** @var TableStatsEps[] */
    private array $tables = [];

    /** @var RelationStatsEps[] Relations */
    private array $relations = [];

    private int|float $tablewidth = 0;

    private Eps $eps;

    /**
     * Upon instantiation This starts writing the EPS document
     * user will be prompted for download as .eps extension
     *
     * @see Eps
     */
    public function __construct(Relation $relation, DatabaseName $db)
    {
        parent::__construct($relation, $db);

        $this->eps = new Eps();

        $this->setShowColor(isset($_REQUEST['eps_show_color']));
        $this->setShowKeys(isset($_REQUEST['eps_show_keys']));
        $this->setTableDimension(isset($_REQUEST['eps_show_table_dimension']));
        $this->setAllTablesSameWidth(isset($_REQUEST['eps_all_tables_same_width']));
        $this->setOrientation((string) $_REQUEST['eps_orientation']);

        $this->eps->setTitle(
            sprintf(
                __('Schema of the %s database - Page %s'),
                $this->db->getName(),
                $this->pageNumber,
            ),
        );
        $this->eps->setAuthor('phpMyAdmin ' . Version::VERSION);
        $this->eps->setDate(date('j F Y, g:i a'));
        $this->eps->setOrientation($this->orientation);
        $this->eps->setFont('Verdana', 10);

        $alltables = $this->getTablesFromRequest();

        foreach ($alltables as $table) {
            if (! isset($this->tables[$table])) {
                $this->tables[$table] = new TableStatsEps(
                    $this->eps,
                    $this->db->getName(),
                    $table,
                    $this->eps->getFont(),
                    $this->eps->getFontSize(),
                    $this->pageNumber,
                    $this->showKeys,
                    $this->tableDimension,
                    $this->offline,
                );
                $this->tablewidth = max($this->tablewidth, $this->tables[$table]->width);
            }

            if (! $this->sameWide) {
                continue;
            }

            $this->tables[$table]->width = $this->tablewidth;
        }

        $seenARelation = false;
        foreach ($alltables as $oneTable) {
            $existRel = $this->relation->getForeignersInternal($this->db->getName(), $oneTable);

            $seenARelation = true;
            foreach ($existRel as $masterField => $rel) {
                // put the foreign table on the schema only if selected by the user
                if (! in_array($rel['foreign_table'], $alltables, true)) {
                    continue;
                }

                $this->addRelation(
                    $oneTable,
                    $this->eps->getFont(),
                    $this->eps->getFontSize(),
                    $masterField,
                    $rel['foreign_table'],
                    $rel['foreign_field'],
                    $this->tableDimension,
                );
            }

            foreach ($this->relation->getForeignKeysData($this->db->getName(), $oneTable) as $oneKey) {
                if (! in_array($oneKey->refTableName, $alltables, true)) {
                    continue;
                }

                foreach ($oneKey->indexList as $index => $oneField) {
                    $this->addRelation(
                        $oneTable,
                        $this->eps->getFont(),
                        $this->eps->getFontSize(),
                        $oneField,
                        $oneKey->refTableName,
                        $oneKey->refIndexList[$index],
                        $this->tableDimension,
                    );
                }
            }
        }

        if ($seenARelation) {
            $this->drawRelations();
        }

        $this->drawTables();
        $this->eps->endEpsDoc();
    }

    /** @return array{fileName: non-empty-string, fileData: string} */
    public function getExportInfo(): array
    {
        return ['fileName' => $this->getFileName('.eps'), 'fileData' => $this->eps->getOutputData()];
    }

    /**
     * Defines relation objects
     *
     * @see _setMinMax
     * @see TableStatsEps::__construct()
     * @see RelationStatsEps::__construct
     *
     * @param string $masterTable    The master table name
     * @param string $font           The font
     * @param int    $fontSize       The font size
     * @param string $masterField    The relation field in the master table
     * @param string $foreignTable   The foreign table name
     * @param string $foreignField   The relation field in the foreign table
     * @param bool   $tableDimension Whether to display table position or not
     */
    private function addRelation(
        string $masterTable,
        string $font,
        int $fontSize,
        string $masterField,
        string $foreignTable,
        string $foreignField,
        bool $tableDimension,
    ): void {
        if (! isset($this->tables[$masterTable])) {
            $this->tables[$masterTable] = new TableStatsEps(
                $this->eps,
                $this->db->getName(),
                $masterTable,
                $font,
                $fontSize,
                $this->pageNumber,
                false,
                $tableDimension,
            );
            $this->tablewidth = max($this->tablewidth, $this->tables[$masterTable]->width);
        }

        if (! isset($this->tables[$foreignTable])) {
            $this->tables[$foreignTable] = new TableStatsEps(
                $this->eps,
                $this->db->getName(),
                $foreignTable,
                $font,
                $fontSize,
                $this->pageNumber,
                false,
                $tableDimension,
            );
            $this->tablewidth = max($this->tablewidth, $this->tables[$foreignTable]->width);
        }

        $this->relations[] = new RelationStatsEps(
            $this->eps,
            $this->tables[$masterTable],
            $masterField,
            $this->tables[$foreignTable],
            $foreignField,
        );
    }

    /**
     * Draws relation arrows and lines connects master table's master field to
     * foreign table's foreign field
     *
     * @see RelationStatsEps::relationDraw()
     */
    private function drawRelations(): void
    {
        foreach ($this->relations as $relation) {
            $relation->relationDraw();
        }
    }

    /**
     * Draws tables
     */
    private function drawTables(): void
    {
        foreach ($this->tables as $table) {
            $table->tableDraw();
        }
    }
}
