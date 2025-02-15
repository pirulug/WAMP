<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* table/operations/index.twig */
class __TwigTemplate_e8db9ad9674864608330623b5388172d extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"container my-3\">
  <h2>";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table operations"), "html", null, true);
        yield "</h2>

";
        // line 4
        if ( !(isset($context["hide_order_table"]) || array_key_exists("hide_order_table", $context) ? $context["hide_order_table"] : (function () { throw new RuntimeError('Variable "hide_order_table" does not exist.', 4, $this->source); })())) {
            // line 5
            yield "  <form method=\"post\" id=\"alterTableOrderby\" action=\"";
            yield PhpMyAdmin\Url::getFromRoute("/table/operations");
            yield "\">
    ";
            // line 6
            yield PhpMyAdmin\Url::getHiddenInputs((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 6, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 6, $this->source); })()));
            yield "
    <input type=\"hidden\" name=\"submitorderby\" value=\"1\">

    <div class=\"card mb-2\">
      <div class=\"card-header\">";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Alter table order by"), "html", null, true);
            yield "</div>
      <div class=\"card-body\">
        <div class=\"row g-3\">
          <div class=\"col-auto\">
            <label class=\"visually-hidden\" for=\"tableOrderFieldSelect\">";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Column"), "html", null, true);
            yield "</label>
            <select id=\"tableOrderFieldSelect\" class=\"form-select\" name=\"order_field\" aria-describedby=\"tableOrderFieldSelectHelp\">
              ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 17
                yield "                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "field", [], "any", false, false, false, 17), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "field", [], "any", false, false, false, 17), "html", null, true);
                yield "</option>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['column'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            yield "            </select>
            <small id=\"tableOrderFieldSelectHelp\" class=\"form-text text-body-secondary\">
              ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Alter table order by a single field.", "(singly)"), "html", null, true);
            yield "
            </small>
          </div>

          <div class=\"col-auto\">
            <div class=\"form-check\">
              <input class=\"form-check-input\" id=\"tableOrderAscRadio\" name=\"order_order\" type=\"radio\" value=\"asc\" checked>
              <label class=\"form-check-label\" for=\"tableOrderAscRadio\">";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Ascending"), "html", null, true);
            yield "</label>
            </div>
            <div class=\"form-check\">
              <input class=\"form-check-input\" id=\"tableOrderDescRadio\" name=\"order_order\" type=\"radio\" value=\"desc\">
              <label class=\"form-check-label\" for=\"tableOrderDescRadio\">";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Descending"), "html", null, true);
            yield "</label>
            </div>
          </div>
        </div>
      </div>

      <div class=\"card-footer text-end\">
        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
            yield "\">
      </div>
    </div>
  </form>
";
        }
        // line 44
        yield "
<form method=\"post\" action=\"";
        // line 45
        yield PhpMyAdmin\Url::getFromRoute("/table/operations");
        yield "\" id=\"moveTableForm\" class=\"ajax\" onsubmit=\"return window.pmaEmptyCheckTheField(this, 'new_name')\">
  ";
        // line 46
        yield PhpMyAdmin\Url::getHiddenInputs((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 46, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 46, $this->source); })()));
        yield "
  <input type=\"hidden\" name=\"reload\" value=\"1\">
  <input type=\"hidden\" name=\"what\" value=\"data\">

  <div class=\"card mb-2\">
    <div class=\"card-header\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Move table to (database.table)"), "html", null, true);
        yield "</div>
    <div class=\"card-body\">
      <div class=\"mb-3 row g-3\">
        <div class=\"col-auto\">
          <div class=\"input-group\">
            ";
        // line 56
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["database_list"]) || array_key_exists("database_list", $context) ? $context["database_list"] : (function () { throw new RuntimeError('Variable "database_list" does not exist.', 56, $this->source); })()))) {
            // line 57
            yield "              <select id=\"moveTableDatabaseInput\" class=\"form-select\" name=\"target_db\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Database"), "html", null, true);
            yield "\">
                ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["database_list"]) || array_key_exists("database_list", $context) ? $context["database_list"] : (function () { throw new RuntimeError('Variable "database_list" does not exist.', 58, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["each_db"]) {
                // line 59
                yield "                  <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["each_db"], "name", [], "any", false, false, false, 59), "html", null, true);
                yield "\"";
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["each_db"], "is_selected", [], "any", false, false, false, 59)) ? (" selected") : (""));
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["each_db"], "name", [], "any", false, false, false, 59), "html", null, true);
                yield "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['each_db'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            yield "              </select>
            ";
        } else {
            // line 63
            yield "              <input id=\"moveTableDatabaseInput\" class=\"form-control\" type=\"text\" maxlength=\"100\" name=\"target_db\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 63, $this->source); })()), "html", null, true);
            yield "\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Database"), "html", null, true);
            yield "\">
            ";
        }
        // line 65
        yield "            <span class=\"input-group-text\">.</span>
            <input class=\"form-control\" type=\"text\" required name=\"new_name\" maxlength=\"64\" value=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 66, $this->source); })()), "html", null, true);
        yield "\" aria-label=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table"), "html", null, true);
        yield "\">
          </div>
        </div>
      </div>

      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\" name=\"sql_auto_increment\" value=\"1\" id=\"checkbox_auto_increment_mv\">
        <label class=\"form-check-label\" for=\"checkbox_auto_increment_mv\">";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add AUTO_INCREMENT value"), "html", null, true);
        yield "</label>
      </div>
      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\" name=\"adjust_privileges\" value=\"1\" id=\"checkbox_privileges_tables_move\"";
        // line 77
        if ((isset($context["has_privileges"]) || array_key_exists("has_privileges", $context) ? $context["has_privileges"] : (function () { throw new RuntimeError('Variable "has_privileges" does not exist.', 77, $this->source); })())) {
            yield " checked";
        } else {
            yield " title=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("You don't have sufficient privileges to perform this operation; Please refer to the documentation for more details."), "html", null, true);
            yield "\" disabled";
        }
        yield ">
        <label class=\"form-check-label\" for=\"checkbox_privileges_tables_move\">
          ";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Adjust privileges"), "html", null, true);
        yield "
          ";
        // line 81
        yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("faq", "faq6-39");
        yield "
        </label>
      </div>
    </div>

    <div class=\"card-footer text-end\">
      <input class=\"btn btn-primary\" type=\"submit\" name=\"submit_move\" value=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
        yield "\">
    </div>
  </div>
</form>

<form method=\"post\" action=\"";
        // line 92
        yield PhpMyAdmin\Url::getFromRoute("/table/operations");
        yield "\" id=\"tableOptionsForm\" class=\"ajax\">
  ";
        // line 93
        yield PhpMyAdmin\Url::getHiddenInputs((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 93, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 93, $this->source); })()));
        yield "
  <input type=\"hidden\" name=\"reload\" value=\"1\">
  <input type=\"hidden\" name=\"submitoptions\" value=\"1\">
  <input type=\"hidden\" name=\"prev_comment\" value=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["table_comment"]) || array_key_exists("table_comment", $context) ? $context["table_comment"] : (function () { throw new RuntimeError('Variable "table_comment" does not exist.', 96, $this->source); })()), "html", null, true);
        yield "\">
  ";
        // line 97
        if ((isset($context["has_auto_increment"]) || array_key_exists("has_auto_increment", $context) ? $context["has_auto_increment"] : (function () { throw new RuntimeError('Variable "has_auto_increment" does not exist.', 97, $this->source); })())) {
            // line 98
            yield "    <input type=\"hidden\" name=\"hidden_auto_increment\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["auto_increment"]) || array_key_exists("auto_increment", $context) ? $context["auto_increment"] : (function () { throw new RuntimeError('Variable "auto_increment" does not exist.', 98, $this->source); })()), "html", null, true);
            yield "\">
  ";
        }
        // line 100
        yield "
  <div class=\"card mb-2\">
    <div class=\"card-header\">";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table options"), "html", null, true);
        yield "</div>
    <div class=\"card-body\">
      <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
        <div class=\"col-6\">
          <label for=\"renameTableInput\">";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Rename table to"), "html", null, true);
        yield "</label>
        </div>
        <div class=\"col-6\">
          <input class=\"form-control\" id=\"renameTableInput\" type=\"text\" name=\"new_name\" maxlength=\"64\" value=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 109, $this->source); })()), "html", null, true);
        yield "\" required>
        </div>
        <div class=\"form-check col-12\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"adjust_privileges\" value=\"1\" id=\"checkbox_privileges_table_options\"";
        // line 113
        if ((isset($context["has_privileges"]) || array_key_exists("has_privileges", $context) ? $context["has_privileges"] : (function () { throw new RuntimeError('Variable "has_privileges" does not exist.', 113, $this->source); })())) {
            yield " checked";
        } else {
            yield " title=\"";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("You don't have sufficient privileges to perform this operation; Please refer to the documentation for more details."), "html", null, true);
            yield "\" disabled";
        }
        yield ">
          <label class=\"form-check-label\" for=\"checkbox_privileges_table_options\">
            ";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Adjust privileges"), "html", null, true);
        yield "
            ";
        // line 117
        yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("faq", "faq6-39");
        yield "
          </label>
        </div>
      </div>

      <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
        <div class=\"col-6\">
          <label for=\"tableCommentsInput\">";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table comments"), "html", null, true);
        yield "</label>
        </div>
        <div class=\"col-6\">
          <input class=\"form-control\" id=\"tableCommentsInput\" type=\"text\" name=\"comment\" maxlength=\"2048\" value=\"";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["table_comment"]) || array_key_exists("table_comment", $context) ? $context["table_comment"] : (function () { throw new RuntimeError('Variable "table_comment" does not exist.', 127, $this->source); })()), "html", null, true);
        yield "\">
        </div>
      </div>

      <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
        <div class=\"col-6\">
          <label class=\"text-nowrap\" for=\"newTableStorageEngineSelect\">
            ";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Storage engine"), "html", null, true);
        yield "
            ";
        // line 135
        yield PhpMyAdmin\Html\MySQLDocumentation::show("Storage_engines");
        yield "
          </label>
        </div>
        <div class=\"col-6\">
          <select class=\"form-select\" name=\"new_tbl_storage_engine\" id=\"newTableStorageEngineSelect\">
            ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["storage_engines"]) || array_key_exists("storage_engines", $context) ? $context["storage_engines"] : (function () { throw new RuntimeError('Variable "storage_engines" does not exist.', 140, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["engine"]) {
            // line 141
            yield "              <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 141), "html", null, true);
            yield "\"";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "comment", [], "any", false, false, false, 141))) {
                yield " title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "comment", [], "any", false, false, false, 141), "html", null, true);
                yield "\"";
            }
            // line 142
            yield ((((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 142)) == Twig\Extension\CoreExtension::lower($this->env->getCharset(), (isset($context["storage_engine"]) || array_key_exists("storage_engine", $context) ? $context["storage_engine"] : (function () { throw new RuntimeError('Variable "storage_engine" does not exist.', 142, $this->source); })()))) || (Twig\Extension\CoreExtension::testEmpty((isset($context["storage_engine"]) || array_key_exists("storage_engine", $context) ? $context["storage_engine"] : (function () { throw new RuntimeError('Variable "storage_engine" does not exist.', 142, $this->source); })())) && CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "is_default", [], "any", false, false, false, 142)))) ? (" selected") : (""));
            yield ">";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 143), "html", null, true);
            // line 144
            yield "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['engine'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        yield "          </select>
        </div>
      </div>

      <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
        <div class=\"col-6\">
          <label for=\"collationSelect\">";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Collation"), "html", null, true);
        yield "</label>
        </div>
        <div class=\"col-6\">
          <select class=\"form-select\" id=\"collationSelect\" lang=\"en\" dir=\"ltr\" name=\"tbl_collation\">
            <option value=\"\"></option>
            ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["charsets"]) || array_key_exists("charsets", $context) ? $context["charsets"] : (function () { throw new RuntimeError('Variable "charsets" does not exist.', 157, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
            // line 158
            yield "              <optgroup label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "getName", [], "method", false, false, false, 158), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "getDescription", [], "method", false, false, false, 158), "html", null, true);
            yield "\">
                ";
            // line 159
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collations"]) || array_key_exists("collations", $context) ? $context["collations"] : (function () { throw new RuntimeError('Variable "collations" does not exist.', 159, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "getName", [], "method", false, false, false, 159), [], "array", false, false, false, 159));
            foreach ($context['_seq'] as $context["_key"] => $context["collation"]) {
                // line 160
                yield "                  <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "getName", [], "method", false, false, false, 160), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "getDescription", [], "method", false, false, false, 160), "html", null, true);
                yield "\"";
                yield ((((isset($context["tbl_collation"]) || array_key_exists("tbl_collation", $context) ? $context["tbl_collation"] : (function () { throw new RuntimeError('Variable "tbl_collation" does not exist.', 160, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "getName", [], "method", false, false, false, 160))) ? (" selected") : (""));
                yield ">
                    ";
                // line 161
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "getName", [], "method", false, false, false, 161), "html", null, true);
                yield "
                  </option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['collation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            yield "              </optgroup>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['charset'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        yield "          </select>
        </div>

        <div class=\"form-check col-12 ms-3\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"change_all_collations\" value=\"1\" id=\"checkbox_change_all_collations\">
          <label class=\"form-check-label\" for=\"checkbox_change_all_collations\">";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Change all column collations"), "html", null, true);
        yield "</label>
        </div>
      </div>

      ";
        // line 175
        if ((isset($context["has_pack_keys"]) || array_key_exists("has_pack_keys", $context) ? $context["has_pack_keys"] : (function () { throw new RuntimeError('Variable "has_pack_keys" does not exist.', 175, $this->source); })())) {
            // line 176
            yield "        <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-6\">
            <label for=\"new_pack_keys\">PACK_KEYS</label>
          </div>
          <div class=\"col-6\">
            <select class=\"form-select\" name=\"new_pack_keys\" id=\"new_pack_keys\">
              <option value=\"DEFAULT\"";
            // line 182
            yield ((((isset($context["pack_keys"]) || array_key_exists("pack_keys", $context) ? $context["pack_keys"] : (function () { throw new RuntimeError('Variable "pack_keys" does not exist.', 182, $this->source); })()) == "DEFAULT")) ? (" selected") : (""));
            yield ">DEFAULT</option>
              <option value=\"0\"";
            // line 183
            yield ((((isset($context["pack_keys"]) || array_key_exists("pack_keys", $context) ? $context["pack_keys"] : (function () { throw new RuntimeError('Variable "pack_keys" does not exist.', 183, $this->source); })()) == "0")) ? (" selected") : (""));
            yield ">0</option>
              <option value=\"1\"";
            // line 184
            yield ((((isset($context["pack_keys"]) || array_key_exists("pack_keys", $context) ? $context["pack_keys"] : (function () { throw new RuntimeError('Variable "pack_keys" does not exist.', 184, $this->source); })()) == "1")) ? (" selected") : (""));
            yield ">1</option>
            </select>
          </div>
        </div>
      ";
        }
        // line 189
        yield "
      ";
        // line 190
        if ((isset($context["has_checksum_and_delay_key_write"]) || array_key_exists("has_checksum_and_delay_key_write", $context) ? $context["has_checksum_and_delay_key_write"] : (function () { throw new RuntimeError('Variable "has_checksum_and_delay_key_write" does not exist.', 190, $this->source); })())) {
            // line 191
            yield "        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"new_checksum\" id=\"new_checksum\" value=\"1\"";
            // line 192
            yield ((((isset($context["checksum"]) || array_key_exists("checksum", $context) ? $context["checksum"] : (function () { throw new RuntimeError('Variable "checksum" does not exist.', 192, $this->source); })()) == "1")) ? (" checked") : (""));
            yield ">
          <label class=\"form-check-label\" for=\"new_checksum\">CHECKSUM</label>
        </div>

        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"new_delay_key_write\" id=\"new_delay_key_write\" value=\"1\"";
            // line 197
            yield ((((isset($context["delay_key_write"]) || array_key_exists("delay_key_write", $context) ? $context["delay_key_write"] : (function () { throw new RuntimeError('Variable "delay_key_write" does not exist.', 197, $this->source); })()) == "1")) ? (" checked") : (""));
            yield ">
          <label class=\"form-check-label\" for=\"new_delay_key_write\">DELAY_KEY_WRITE</label>
        </div>
      ";
        }
        // line 201
        yield "
      ";
        // line 202
        if ((isset($context["has_transactional_and_page_checksum"]) || array_key_exists("has_transactional_and_page_checksum", $context) ? $context["has_transactional_and_page_checksum"] : (function () { throw new RuntimeError('Variable "has_transactional_and_page_checksum" does not exist.', 202, $this->source); })())) {
            // line 203
            yield "        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"new_transactional\" id=\"new_transactional\" value=\"1\"";
            // line 204
            yield ((((isset($context["transactional"]) || array_key_exists("transactional", $context) ? $context["transactional"] : (function () { throw new RuntimeError('Variable "transactional" does not exist.', 204, $this->source); })()) == "1")) ? (" checked") : (""));
            yield ">
          <label class=\"form-check-label\" for=\"new_transactional\">TRANSACTIONAL</label>
        </div>

        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"new_page_checksum\" id=\"new_page_checksum\" value=\"1\"";
            // line 209
            yield ((((isset($context["page_checksum"]) || array_key_exists("page_checksum", $context) ? $context["page_checksum"] : (function () { throw new RuntimeError('Variable "page_checksum" does not exist.', 209, $this->source); })()) == "1")) ? (" checked") : (""));
            yield ">
          <label class=\"form-check-label\" for=\"new_page_checksum\">PAGE_CHECKSUM</label>
        </div>
      ";
        }
        // line 213
        yield "
      ";
        // line 214
        if ((isset($context["has_auto_increment"]) || array_key_exists("has_auto_increment", $context) ? $context["has_auto_increment"] : (function () { throw new RuntimeError('Variable "has_auto_increment" does not exist.', 214, $this->source); })())) {
            // line 215
            yield "        <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-12\">
            <label for=\"auto_increment_opt\">AUTO_INCREMENT</label>
          </div>
          <div class=\"col-12\">
            <input class=\"form-control\" id=\"auto_increment_opt\" type=\"number\" name=\"new_auto_increment\" value=\"";
            // line 220
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["auto_increment"]) || array_key_exists("auto_increment", $context) ? $context["auto_increment"] : (function () { throw new RuntimeError('Variable "auto_increment" does not exist.', 220, $this->source); })()), "html", null, true);
            yield "\">
          </div>
        </div>
      ";
        }
        // line 224
        yield "
      ";
        // line 225
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["row_formats"]) || array_key_exists("row_formats", $context) ? $context["row_formats"] : (function () { throw new RuntimeError('Variable "row_formats" does not exist.', 225, $this->source); })()))) {
            // line 226
            yield "        <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-12\">
            <label for=\"new_row_format\">ROW_FORMAT</label>
          </div>
          <div class=\"col-12\">
            <select class=\"form-select\" id=\"new_row_format\" name=\"new_row_format\">
              ";
            // line 232
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["row_formats"]) || array_key_exists("row_formats", $context) ? $context["row_formats"] : (function () { throw new RuntimeError('Variable "row_formats" does not exist.', 232, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row_format"]) {
                // line 233
                yield "                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["row_format"], "html", null, true);
                yield "\"";
                yield ((($context["row_format"] == Twig\Extension\CoreExtension::upper($this->env->getCharset(), (isset($context["row_format_current"]) || array_key_exists("row_format_current", $context) ? $context["row_format_current"] : (function () { throw new RuntimeError('Variable "row_format_current" does not exist.', 233, $this->source); })())))) ? (" selected") : (""));
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["row_format"], "html", null, true);
                yield "</option>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row_format'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 235
            yield "            </select>
          </div>
        </div>
      ";
        }
        // line 239
        yield "    </div>

    <div class=\"card-footer text-end\">
      <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 242
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
        yield "\">
    </div>
  </div>
</form>

<form method=\"post\" action=\"";
        // line 247
        yield PhpMyAdmin\Url::getFromRoute("/table/operations");
        yield "\" name=\"copyTable\" id=\"copyTable\" class=\"ajax\" onsubmit=\"return window.pmaEmptyCheckTheField(this, 'new_name')\">
  ";
        // line 248
        yield PhpMyAdmin\Url::getHiddenInputs((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 248, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 248, $this->source); })()));
        yield "
  <input type=\"hidden\" name=\"reload\" value=\"1\">

  <div class=\"card mb-2\">
    <div class=\"card-header\">";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Copy table to (database.table)"), "html", null, true);
        yield "</div>
    <div class=\"card-body\">
      <div class=\"mb-3 row g-3\">
        <div class=\"col-auto\">
          <div class=\"input-group\">
            ";
        // line 257
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["database_list"]) || array_key_exists("database_list", $context) ? $context["database_list"] : (function () { throw new RuntimeError('Variable "database_list" does not exist.', 257, $this->source); })()))) {
            // line 258
            yield "              <select class=\"form-select\" name=\"target_db\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Database"), "html", null, true);
            yield "\">
                ";
            // line 259
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["database_list"]) || array_key_exists("database_list", $context) ? $context["database_list"] : (function () { throw new RuntimeError('Variable "database_list" does not exist.', 259, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["each_db"]) {
                // line 260
                yield "                  <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["each_db"], "name", [], "any", false, false, false, 260), "html", null, true);
                yield "\"";
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["each_db"], "is_selected", [], "any", false, false, false, 260)) ? (" selected") : (""));
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["each_db"], "name", [], "any", false, false, false, 260), "html", null, true);
                yield "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['each_db'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 262
            yield "              </select>
            ";
        } else {
            // line 264
            yield "              <input class=\"form-control\" type=\"text\" maxlength=\"100\" name=\"target_db\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 264, $this->source); })()), "html", null, true);
            yield "\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Database"), "html", null, true);
            yield "\">
            ";
        }
        // line 266
        yield "            <span class=\"input-group-text\">.</span>
            <input class=\"form-control\" type=\"text\" name=\"new_name\" maxlength=\"64\" value=\"";
        // line 267
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 267, $this->source); })()), "html", null, true);
        yield "\" aria-label=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table"), "html", null, true);
        yield "\" required>
          </div>
        </div>
      </div>

      <div class=\"mb-3\">
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"what\" id=\"whatRadio1\" value=\"structure\">
          <label class=\"form-check-label\" for=\"whatRadio1\">
            ";
        // line 276
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Structure only"), "html", null, true);
        yield "
          </label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"what\" id=\"whatRadio2\" value=\"data\" checked>
          <label class=\"form-check-label\" for=\"whatRadio2\">
            ";
        // line 282
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Structure and data"), "html", null, true);
        yield "
          </label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"what\" id=\"whatRadio3\" value=\"dataonly\">
          <label class=\"form-check-label\" for=\"whatRadio3\">
            ";
        // line 288
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Data only"), "html", null, true);
        yield "
          </label>
        </div>
      </div>

      <div class=\"mb-3\">
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"drop_if_exists\" value=\"true\" id=\"checkbox_drop\">
          <label class=\"form-check-label\" for=\"checkbox_drop\">";
        // line 296
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_gettext("Add %s"), "DROP TABLE"), "html", null, true);
        yield "</label>
        </div>

        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"sql_auto_increment\" value=\"1\" id=\"checkbox_auto_increment_cp\">
          <label class=\"form-check-label\" for=\"checkbox_auto_increment_cp\">";
        // line 301
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add AUTO_INCREMENT value"), "html", null, true);
        yield "</label>
        </div>

        ";
        // line 304
        if ((isset($context["has_foreign_keys"]) || array_key_exists("has_foreign_keys", $context) ? $context["has_foreign_keys"] : (function () { throw new RuntimeError('Variable "has_foreign_keys" does not exist.', 304, $this->source); })())) {
            // line 305
            yield "          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"checkbox\" name=\"add_constraints\" value=\"1\" id=\"checkbox_constraints\" checked>
            <label class=\"form-check-label\" for=\"checkbox_constraints\">";
            // line 307
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add constraints"), "html", null, true);
            yield "</label>
          </div>
        ";
        }
        // line 310
        yield "
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"adjust_privileges\" value=\"1\" id=\"checkbox_adjust_privileges\"";
        // line 313
        if ((isset($context["has_privileges"]) || array_key_exists("has_privileges", $context) ? $context["has_privileges"] : (function () { throw new RuntimeError('Variable "has_privileges" does not exist.', 313, $this->source); })())) {
            yield " checked";
        } else {
            yield " title=\"";
            // line 314
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("You don't have sufficient privileges to perform this operation; Please refer to the documentation for more details."), "html", null, true);
            yield "\" disabled";
        }
        yield ">
          <label class=\"form-check-label\" for=\"checkbox_adjust_privileges\">
            ";
        // line 316
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Adjust privileges"), "html", null, true);
        yield "
            ";
        // line 317
        yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("faq", "faq6-39");
        yield "
          </label>
        </div>

        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"switch_to_new\" value=\"true\" id=\"checkbox_switch\"";
        // line 322
        yield (((isset($context["switch_to_new"]) || array_key_exists("switch_to_new", $context) ? $context["switch_to_new"] : (function () { throw new RuntimeError('Variable "switch_to_new" does not exist.', 322, $this->source); })())) ? (" checked") : (""));
        yield ">
          <label class=\"form-check-label\" for=\"checkbox_switch\">";
        // line 323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Switch to copied table"), "html", null, true);
        yield "</label>
        </div>
      </div>
    </div>

    <div class=\"card-footer text-end\">
      <input class=\"btn btn-primary\" type=\"submit\" name=\"submit_copy\" value=\"";
        // line 329
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
        yield "\">
    </div>
  </div>
</form>

<div class=\"card mb-2\">
  <div class=\"card-header\">";
        // line 335
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table maintenance"), "html", null, true);
        yield "</div>
  <ul class=\"list-group list-group-flush\" id=\"tbl_maintenance\">
    ";
        // line 337
        if (CoreExtension::inFilter((isset($context["storage_engine"]) || array_key_exists("storage_engine", $context) ? $context["storage_engine"] : (function () { throw new RuntimeError('Variable "storage_engine" does not exist.', 337, $this->source); })()), ["MYISAM", "ARIA", "INNODB", "BERKELEYDB", "TOKUDB"])) {
            // line 338
            yield "      <li class=\"list-group-item\">
        <a href=\"";
            // line 339
            yield PhpMyAdmin\Url::getFromRoute("/table/maintenance/analyze");
            yield "\" data-post=\"";
            yield PhpMyAdmin\Url::getCommon(["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 339, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 339, $this->source); })()), "selected_tbl" => [(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 339, $this->source); })())]], "", false);
            yield "\">
          ";
            // line 340
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Analyze table"), "html", null, true);
            yield "
        </a>
        ";
            // line 342
            yield PhpMyAdmin\Html\MySQLDocumentation::show("ANALYZE_TABLE");
            yield "
      </li>
    ";
        }
        // line 345
        yield "
    ";
        // line 346
        if (CoreExtension::inFilter((isset($context["storage_engine"]) || array_key_exists("storage_engine", $context) ? $context["storage_engine"] : (function () { throw new RuntimeError('Variable "storage_engine" does not exist.', 346, $this->source); })()), ["MYISAM", "ARIA", "INNODB", "TOKUDB"])) {
            // line 347
            yield "      <li class=\"list-group-item\">
        <a href=\"";
            // line 348
            yield PhpMyAdmin\Url::getFromRoute("/table/maintenance/check");
            yield "\" data-post=\"";
            yield PhpMyAdmin\Url::getCommon(["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 348, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 348, $this->source); })()), "selected_tbl" => [(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 348, $this->source); })())]], "", false);
            yield "\">
          ";
            // line 349
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Check table"), "html", null, true);
            yield "
        </a>
        ";
            // line 351
            yield PhpMyAdmin\Html\MySQLDocumentation::show("CHECK_TABLE");
            yield "
      </li>
    ";
        }
        // line 354
        yield "
    <li class=\"list-group-item\">
      <a href=\"";
        // line 356
        yield PhpMyAdmin\Url::getFromRoute("/table/maintenance/checksum");
        yield "\" data-post=\"";
        yield PhpMyAdmin\Url::getCommon(["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 356, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 356, $this->source); })()), "selected_tbl" => [(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 356, $this->source); })())]], "", false);
        yield "\">
        ";
        // line 357
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Checksum table"), "html", null, true);
        yield "
      </a>
      ";
        // line 359
        yield PhpMyAdmin\Html\MySQLDocumentation::show("CHECKSUM_TABLE");
        yield "
    </li>

    ";
        // line 362
        if (((isset($context["storage_engine"]) || array_key_exists("storage_engine", $context) ? $context["storage_engine"] : (function () { throw new RuntimeError('Variable "storage_engine" does not exist.', 362, $this->source); })()) == "INNODB")) {
            // line 363
            yield "      <li class=\"list-group-item\">
        <a class=\"maintain_action ajax\" href=\"";
            // line 364
            yield PhpMyAdmin\Url::getFromRoute("/sql");
            yield "\" data-post=\"";
            yield PhpMyAdmin\Url::getCommon(Twig\Extension\CoreExtension::merge((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 364, $this->source); })()), ["sql_query" => (("ALTER TABLE " . PhpMyAdmin\Util::backquote((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 364, $this->source); })()))) . " ENGINE = InnoDB;")]), "", false);
            yield "\">
          ";
            // line 365
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Defragment table"), "html", null, true);
            yield "
        </a>
        ";
            // line 367
            yield PhpMyAdmin\Html\MySQLDocumentation::show("InnoDB_File_Defragmenting");
            yield "
      </li>
    ";
        }
        // line 370
        yield "
    <li class=\"list-group-item\">
      <a class=\"maintain_action ajax\" href=\"";
        // line 372
        yield PhpMyAdmin\Url::getFromRoute("/sql");
        yield "\" data-post=\"";
        yield PhpMyAdmin\Url::getCommon(Twig\Extension\CoreExtension::merge((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 372, $this->source); })()), ["sql_query" => ("FLUSH TABLE " . PhpMyAdmin\Util::backquote(        // line 373
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 373, $this->source); })()))), "message_to_show" => Twig\Extension\CoreExtension::sprintf(\_gettext("Table %s has been flushed."), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(        // line 374
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 374, $this->source); })()))), "reload" => true]), "", false);
        // line 376
        yield "\">
        ";
        // line 377
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Flush the table (FLUSH)"), "html", null, true);
        yield "
      </a>
      ";
        // line 379
        yield PhpMyAdmin\Html\MySQLDocumentation::show("FLUSH");
        yield "
    </li>

    ";
        // line 382
        if (CoreExtension::inFilter((isset($context["storage_engine"]) || array_key_exists("storage_engine", $context) ? $context["storage_engine"] : (function () { throw new RuntimeError('Variable "storage_engine" does not exist.', 382, $this->source); })()), ["MYISAM", "ARIA", "INNODB", "BERKELEYDB", "TOKUDB"])) {
            // line 383
            yield "      <li class=\"list-group-item\">
        <a href=\"";
            // line 384
            yield PhpMyAdmin\Url::getFromRoute("/table/maintenance/optimize");
            yield "\" data-post=\"";
            yield PhpMyAdmin\Url::getCommon(["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 384, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 384, $this->source); })()), "selected_tbl" => [(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 384, $this->source); })())]], "", false);
            yield "\">
          ";
            // line 385
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Optimize table"), "html", null, true);
            yield "
        </a>
        ";
            // line 387
            yield PhpMyAdmin\Html\MySQLDocumentation::show("OPTIMIZE_TABLE");
            yield "
      </li>
    ";
        }
        // line 390
        yield "
    ";
        // line 391
        if (CoreExtension::inFilter((isset($context["storage_engine"]) || array_key_exists("storage_engine", $context) ? $context["storage_engine"] : (function () { throw new RuntimeError('Variable "storage_engine" does not exist.', 391, $this->source); })()), ["MYISAM", "ARIA"])) {
            // line 392
            yield "      <li class=\"list-group-item\">
        <a href=\"";
            // line 393
            yield PhpMyAdmin\Url::getFromRoute("/table/maintenance/repair");
            yield "\" data-post=\"";
            yield PhpMyAdmin\Url::getCommon(["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 393, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 393, $this->source); })()), "selected_tbl" => [(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 393, $this->source); })())]], "", false);
            yield "\">
          ";
            // line 394
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Repair table"), "html", null, true);
            yield "
        </a>
        ";
            // line 396
            yield PhpMyAdmin\Html\MySQLDocumentation::show("REPAIR_TABLE");
            yield "
      </li>
    ";
        }
        // line 399
        yield "  </ul>
</div>

";
        // line 402
        if ( !(isset($context["is_system_schema"]) || array_key_exists("is_system_schema", $context) ? $context["is_system_schema"] : (function () { throw new RuntimeError('Variable "is_system_schema" does not exist.', 402, $this->source); })())) {
            // line 403
            yield "  <div class=\"card mb-2\">
    <div class=\"card-header\">";
            // line 404
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Delete data or table"), "html", null, true);
            yield "</div>
    <ul class=\"list-group list-group-flush\">
      ";
            // line 406
            if ( !(isset($context["is_view"]) || array_key_exists("is_view", $context) ? $context["is_view"] : (function () { throw new RuntimeError('Variable "is_view" does not exist.', 406, $this->source); })())) {
                // line 407
                yield "        <li class=\"list-group-item\">
          ";
                // line 408
                yield PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/sql"), Twig\Extension\CoreExtension::merge(                // line 410
(isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 410, $this->source); })()), ["sql_query" => ((("TRUNCATE TABLE " . PhpMyAdmin\Util::backquote(                // line 411
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 411, $this->source); })()))) . ".") . PhpMyAdmin\Util::backquote((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 411, $this->source); })()))), "goto" => PhpMyAdmin\Url::getFromRoute("/table/structure"), "reload" => true, "message_to_show" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_gettext("Table %s has been emptied."),                 // line 414
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 414, $this->source); })())))]), \_gettext("Empty the table (TRUNCATE)"), ["id" => "truncate_tbl_anchor", "class" => "text-danger ajax", "data-query" => ((("TRUNCATE TABLE " . PhpMyAdmin\Util::backquote(                // line 420
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 420, $this->source); })()))) . ".") . PhpMyAdmin\Util::backquote((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 420, $this->source); })())))]);
                // line 422
                yield "
          ";
                // line 423
                yield PhpMyAdmin\Html\MySQLDocumentation::show("TRUNCATE_TABLE");
                yield "
        </li>
        <li class=\"list-group-item\">
          ";
                // line 426
                yield PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/sql"), Twig\Extension\CoreExtension::merge(                // line 428
(isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 428, $this->source); })()), ["sql_query" => ((("DELETE FROM " . PhpMyAdmin\Util::backquote(                // line 429
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 429, $this->source); })()))) . ".") . PhpMyAdmin\Util::backquote((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 429, $this->source); })()))), "goto" => PhpMyAdmin\Url::getFromRoute("/table/structure"), "reload" => true, "message_to_show" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_gettext("Table %s has been emptied."),                 // line 432
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 432, $this->source); })())))]), \_gettext("Empty the table (DELETE FROM)"), ["id" => "delete_tbl_anchor", "class" => "text-danger ajax", "data-query" => ((("DELETE FROM " . PhpMyAdmin\Util::backquote(                // line 438
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 438, $this->source); })()))) . ".") . PhpMyAdmin\Util::backquote((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 438, $this->source); })())))]);
                // line 440
                yield "
          ";
                // line 441
                yield PhpMyAdmin\Html\MySQLDocumentation::show("DELETE");
                yield "
        </li>
      ";
            }
            // line 444
            yield "      <li class=\"list-group-item\">
        ";
            // line 445
            yield PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/sql"), Twig\Extension\CoreExtension::merge(            // line 447
(isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 447, $this->source); })()), ["sql_query" => ((("DROP TABLE " . PhpMyAdmin\Util::backquote(            // line 448
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 448, $this->source); })()))) . ".") . PhpMyAdmin\Util::backquote((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 448, $this->source); })()))), "goto" => PhpMyAdmin\Url::getFromRoute("/database/operations"), "reload" => true, "purge" => true, "message_to_show" => ((            // line 452
(isset($context["is_view"]) || array_key_exists("is_view", $context) ? $context["is_view"] : (function () { throw new RuntimeError('Variable "is_view" does not exist.', 452, $this->source); })())) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_gettext("View %s has been dropped."), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 452, $this->source); })())))) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_gettext("Table %s has been dropped."), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 452, $this->source); })()))))), "table" =>             // line 453
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 453, $this->source); })())]), \_gettext("Delete the table (DROP)"), ["id" => "drop_tbl_anchor", "class" => "text-danger ajax", "data-query" => ((("DROP TABLE " . PhpMyAdmin\Util::backquote(            // line 459
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 459, $this->source); })()))) . ".") . PhpMyAdmin\Util::backquote((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 459, $this->source); })())))]);
            // line 461
            yield "
        ";
            // line 462
            yield PhpMyAdmin\Html\MySQLDocumentation::show("DROP_TABLE");
            yield "
      </li>
    </ul>
  </div>
";
        }
        // line 467
        yield "
";
        // line 468
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["partitions"]) || array_key_exists("partitions", $context) ? $context["partitions"] : (function () { throw new RuntimeError('Variable "partitions" does not exist.', 468, $this->source); })()))) {
            // line 469
            yield "  <form id=\"partitionsForm\" class=\"ajax\" method=\"post\" action=\"";
            yield PhpMyAdmin\Url::getFromRoute("/table/operations");
            yield "\">
    ";
            // line 470
            yield PhpMyAdmin\Url::getHiddenInputs((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 470, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 470, $this->source); })()));
            yield "
    <input type=\"hidden\" name=\"submit_partition\" value=\"1\">

    <div class=\"card mb-2\">
      <div class=\"card-header\">
        ";
            // line 475
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Partition maintenance"), "html", null, true);
            yield "
        ";
            // line 476
            yield PhpMyAdmin\Html\MySQLDocumentation::show("partitioning_maintenance");
            yield "
      </div>

      <div class=\"card-body\">
        <div class=\"mb-3\">
          <label for=\"partition_name\">";
            // line 481
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Partition"), "html", null, true);
            yield "</label>
          <select class=\"form-select resize-vertical\" id=\"partition_name\" name=\"partition_name[]\" multiple required>
            ";
            // line 483
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["partitions"]) || array_key_exists("partitions", $context) ? $context["partitions"] : (function () { throw new RuntimeError('Variable "partitions" does not exist.', 483, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["partition"]) {
                // line 484
                yield "              <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["partition"], "html", null, true);
                yield "\"";
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 484)) ? (" selected") : (""));
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["partition"], "html", null, true);
                yield "</option>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['partition'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 486
            yield "          </select>
        </div>

        <div class=\"mb-3 form-check-inline\">
          ";
            // line 490
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["partitions_choices"]) || array_key_exists("partitions_choices", $context) ? $context["partitions_choices"] : (function () { throw new RuntimeError('Variable "partitions_choices" does not exist.', 490, $this->source); })()));
            foreach ($context['_seq'] as $context["value"] => $context["description"]) {
                // line 491
                yield "            <div class=\"form-check\">
              <input class=\"form-check-input\" type=\"radio\" name=\"partition_operation\" id=\"partitionOperationRadio";
                // line 492
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["value"]), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "\"";
                yield ((($context["value"] == "ANALYZE")) ? (" checked") : (""));
                yield ">
              <label class=\"form-check-label\" for=\"partitionOperationRadio";
                // line 493
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["value"]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["description"], "html", null, true);
                yield "</label>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['value'], $context['description'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 496
            yield "        </div>

        <div class=\"form-text\">
          <a href=\"";
            // line 499
            yield PhpMyAdmin\Url::getFromRoute("/sql", Twig\Extension\CoreExtension::merge((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 499, $this->source); })()), ["sql_query" => (("ALTER TABLE " . PhpMyAdmin\Util::backquote(            // line 500
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 500, $this->source); })()))) . " REMOVE PARTITIONING;")]));
            // line 501
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Remove partitioning"), "html", null, true);
            yield "</a>
        </div>
      </div>

      <div class=\"card-footer text-end\">
        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
            // line 506
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
            yield "\">
      </div>
    </div>
  </form>
";
        }
        // line 511
        yield "
";
        // line 512
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["foreigners"]) || array_key_exists("foreigners", $context) ? $context["foreigners"] : (function () { throw new RuntimeError('Variable "foreigners" does not exist.', 512, $this->source); })()))) {
            // line 513
            yield "  <div class=\"card mb-2\">
    <div class=\"card-header\">";
            // line 514
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Check referential integrity"), "html", null, true);
            yield "</div>
    <ul class=\"list-group list-group-flush\">
      ";
            // line 516
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["foreigners"]) || array_key_exists("foreigners", $context) ? $context["foreigners"] : (function () { throw new RuntimeError('Variable "foreigners" does not exist.', 516, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["foreign"]) {
                // line 517
                yield "        <li class=\"list-group-item\">
          <a class=\"text-nowrap\" href=\"";
                // line 518
                yield PhpMyAdmin\Url::getFromRoute("/sql", CoreExtension::getAttribute($this->env, $this->source, $context["foreign"], "params", [], "any", false, false, false, 518));
                yield "\">
            ";
                // line 519
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["foreign"], "master", [], "any", false, false, false, 519), "html", null, true);
                yield " -> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["foreign"], "db", [], "any", false, false, false, 519), "html", null, true);
                yield ".";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["foreign"], "table", [], "any", false, false, false, 519), "html", null, true);
                yield ".";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["foreign"], "field", [], "any", false, false, false, 519), "html", null, true);
                yield "
          </a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['foreign'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 523
            yield "    </ul>
  </div>
";
        }
        // line 526
        yield "
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "table/operations/index.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  1166 => 526,  1161 => 523,  1145 => 519,  1141 => 518,  1138 => 517,  1134 => 516,  1129 => 514,  1126 => 513,  1124 => 512,  1121 => 511,  1113 => 506,  1104 => 501,  1102 => 500,  1101 => 499,  1096 => 496,  1085 => 493,  1077 => 492,  1074 => 491,  1070 => 490,  1064 => 486,  1043 => 484,  1026 => 483,  1021 => 481,  1013 => 476,  1009 => 475,  1001 => 470,  996 => 469,  994 => 468,  991 => 467,  983 => 462,  980 => 461,  978 => 459,  977 => 453,  976 => 452,  975 => 448,  974 => 447,  973 => 445,  970 => 444,  964 => 441,  961 => 440,  959 => 438,  958 => 432,  957 => 429,  956 => 428,  955 => 426,  949 => 423,  946 => 422,  944 => 420,  943 => 414,  942 => 411,  941 => 410,  940 => 408,  937 => 407,  935 => 406,  930 => 404,  927 => 403,  925 => 402,  920 => 399,  914 => 396,  909 => 394,  903 => 393,  900 => 392,  898 => 391,  895 => 390,  889 => 387,  884 => 385,  878 => 384,  875 => 383,  873 => 382,  867 => 379,  862 => 377,  859 => 376,  857 => 374,  856 => 373,  853 => 372,  849 => 370,  843 => 367,  838 => 365,  832 => 364,  829 => 363,  827 => 362,  821 => 359,  816 => 357,  810 => 356,  806 => 354,  800 => 351,  795 => 349,  789 => 348,  786 => 347,  784 => 346,  781 => 345,  775 => 342,  770 => 340,  764 => 339,  761 => 338,  759 => 337,  754 => 335,  745 => 329,  736 => 323,  732 => 322,  724 => 317,  720 => 316,  713 => 314,  708 => 313,  704 => 310,  698 => 307,  694 => 305,  692 => 304,  686 => 301,  678 => 296,  667 => 288,  658 => 282,  649 => 276,  635 => 267,  632 => 266,  624 => 264,  620 => 262,  607 => 260,  603 => 259,  598 => 258,  596 => 257,  588 => 252,  581 => 248,  577 => 247,  569 => 242,  564 => 239,  558 => 235,  545 => 233,  541 => 232,  533 => 226,  531 => 225,  528 => 224,  521 => 220,  514 => 215,  512 => 214,  509 => 213,  502 => 209,  494 => 204,  491 => 203,  489 => 202,  486 => 201,  479 => 197,  471 => 192,  468 => 191,  466 => 190,  463 => 189,  455 => 184,  451 => 183,  447 => 182,  439 => 176,  437 => 175,  430 => 171,  423 => 166,  416 => 164,  407 => 161,  398 => 160,  394 => 159,  387 => 158,  383 => 157,  375 => 152,  367 => 146,  360 => 144,  358 => 143,  355 => 142,  346 => 141,  342 => 140,  334 => 135,  330 => 134,  320 => 127,  314 => 124,  304 => 117,  300 => 116,  293 => 114,  288 => 113,  282 => 109,  276 => 106,  269 => 102,  265 => 100,  259 => 98,  257 => 97,  253 => 96,  247 => 93,  243 => 92,  235 => 87,  226 => 81,  222 => 80,  215 => 78,  210 => 77,  204 => 73,  192 => 66,  189 => 65,  181 => 63,  177 => 61,  164 => 59,  160 => 58,  155 => 57,  153 => 56,  145 => 51,  137 => 46,  133 => 45,  130 => 44,  122 => 39,  112 => 32,  105 => 28,  95 => 21,  91 => 19,  80 => 17,  76 => 16,  71 => 14,  64 => 10,  57 => 6,  52 => 5,  50 => 4,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"container my-3\">
  <h2>{{ t('Table operations') }}</h2>

{% if not hide_order_table %}
  <form method=\"post\" id=\"alterTableOrderby\" action=\"{{ url('/table/operations') }}\">
    {{ get_hidden_inputs(db, table) }}
    <input type=\"hidden\" name=\"submitorderby\" value=\"1\">

    <div class=\"card mb-2\">
      <div class=\"card-header\">{{ t('Alter table order by') }}</div>
      <div class=\"card-body\">
        <div class=\"row g-3\">
          <div class=\"col-auto\">
            <label class=\"visually-hidden\" for=\"tableOrderFieldSelect\">{{ t('Column') }}</label>
            <select id=\"tableOrderFieldSelect\" class=\"form-select\" name=\"order_field\" aria-describedby=\"tableOrderFieldSelectHelp\">
              {% for column in columns %}
                <option value=\"{{ column.field }}\">{{ column.field }}</option>
              {% endfor %}
            </select>
            <small id=\"tableOrderFieldSelectHelp\" class=\"form-text text-body-secondary\">
              {{ t('(singly)', context = 'Alter table order by a single field.') }}
            </small>
          </div>

          <div class=\"col-auto\">
            <div class=\"form-check\">
              <input class=\"form-check-input\" id=\"tableOrderAscRadio\" name=\"order_order\" type=\"radio\" value=\"asc\" checked>
              <label class=\"form-check-label\" for=\"tableOrderAscRadio\">{{ t('Ascending') }}</label>
            </div>
            <div class=\"form-check\">
              <input class=\"form-check-input\" id=\"tableOrderDescRadio\" name=\"order_order\" type=\"radio\" value=\"desc\">
              <label class=\"form-check-label\" for=\"tableOrderDescRadio\">{{ t('Descending') }}</label>
            </div>
          </div>
        </div>
      </div>

      <div class=\"card-footer text-end\">
        <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ t('Go') }}\">
      </div>
    </div>
  </form>
{% endif %}

<form method=\"post\" action=\"{{ url('/table/operations') }}\" id=\"moveTableForm\" class=\"ajax\" onsubmit=\"return window.pmaEmptyCheckTheField(this, 'new_name')\">
  {{ get_hidden_inputs(db, table) }}
  <input type=\"hidden\" name=\"reload\" value=\"1\">
  <input type=\"hidden\" name=\"what\" value=\"data\">

  <div class=\"card mb-2\">
    <div class=\"card-header\">{{ t('Move table to (database.table)') }}</div>
    <div class=\"card-body\">
      <div class=\"mb-3 row g-3\">
        <div class=\"col-auto\">
          <div class=\"input-group\">
            {% if database_list is not empty %}
              <select id=\"moveTableDatabaseInput\" class=\"form-select\" name=\"target_db\" aria-label=\"{{ t('Database') }}\">
                {% for each_db in database_list %}
                  <option value=\"{{ each_db.name }}\"{{ each_db.is_selected ? ' selected' }}>{{ each_db.name }}</option>
                {% endfor %}
              </select>
            {% else %}
              <input id=\"moveTableDatabaseInput\" class=\"form-control\" type=\"text\" maxlength=\"100\" name=\"target_db\" value=\"{{ db }}\" aria-label=\"{{ t('Database') }}\">
            {% endif %}
            <span class=\"input-group-text\">.</span>
            <input class=\"form-control\" type=\"text\" required name=\"new_name\" maxlength=\"64\" value=\"{{ table }}\" aria-label=\"{{ t('Table') }}\">
          </div>
        </div>
      </div>

      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\" name=\"sql_auto_increment\" value=\"1\" id=\"checkbox_auto_increment_mv\">
        <label class=\"form-check-label\" for=\"checkbox_auto_increment_mv\">{{ t('Add AUTO_INCREMENT value') }}</label>
      </div>
      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\" name=\"adjust_privileges\" value=\"1\" id=\"checkbox_privileges_tables_move\"
          {%- if has_privileges %} checked{% else %} title=\"
          {{- t(\"You don't have sufficient privileges to perform this operation; Please refer to the documentation for more details.\") }}\" disabled{% endif %}>
        <label class=\"form-check-label\" for=\"checkbox_privileges_tables_move\">
          {{ t('Adjust privileges') }}
          {{ show_docu('faq', 'faq6-39') }}
        </label>
      </div>
    </div>

    <div class=\"card-footer text-end\">
      <input class=\"btn btn-primary\" type=\"submit\" name=\"submit_move\" value=\"{{ t('Go') }}\">
    </div>
  </div>
</form>

<form method=\"post\" action=\"{{ url('/table/operations') }}\" id=\"tableOptionsForm\" class=\"ajax\">
  {{ get_hidden_inputs(db, table) }}
  <input type=\"hidden\" name=\"reload\" value=\"1\">
  <input type=\"hidden\" name=\"submitoptions\" value=\"1\">
  <input type=\"hidden\" name=\"prev_comment\" value=\"{{ table_comment }}\">
  {% if has_auto_increment %}
    <input type=\"hidden\" name=\"hidden_auto_increment\" value=\"{{ auto_increment }}\">
  {% endif %}

  <div class=\"card mb-2\">
    <div class=\"card-header\">{{ t('Table options') }}</div>
    <div class=\"card-body\">
      <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
        <div class=\"col-6\">
          <label for=\"renameTableInput\">{{ t('Rename table to') }}</label>
        </div>
        <div class=\"col-6\">
          <input class=\"form-control\" id=\"renameTableInput\" type=\"text\" name=\"new_name\" maxlength=\"64\" value=\"{{ table }}\" required>
        </div>
        <div class=\"form-check col-12\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"adjust_privileges\" value=\"1\" id=\"checkbox_privileges_table_options\"
            {%- if has_privileges %} checked{% else %} title=\"
            {{- t(\"You don't have sufficient privileges to perform this operation; Please refer to the documentation for more details.\") }}\" disabled{% endif %}>
          <label class=\"form-check-label\" for=\"checkbox_privileges_table_options\">
            {{ t('Adjust privileges') }}
            {{ show_docu('faq', 'faq6-39') }}
          </label>
        </div>
      </div>

      <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
        <div class=\"col-6\">
          <label for=\"tableCommentsInput\">{{ t('Table comments') }}</label>
        </div>
        <div class=\"col-6\">
          <input class=\"form-control\" id=\"tableCommentsInput\" type=\"text\" name=\"comment\" maxlength=\"2048\" value=\"{{ table_comment }}\">
        </div>
      </div>

      <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
        <div class=\"col-6\">
          <label class=\"text-nowrap\" for=\"newTableStorageEngineSelect\">
            {{ t('Storage engine') }}
            {{ show_mysql_docu('Storage_engines') }}
          </label>
        </div>
        <div class=\"col-6\">
          <select class=\"form-select\" name=\"new_tbl_storage_engine\" id=\"newTableStorageEngineSelect\">
            {% for engine in storage_engines %}
              <option value=\"{{ engine.name }}\"{% if engine.comment is not empty %} title=\"{{ engine.comment }}\"{% endif %}
                {{- engine.name|lower == storage_engine|lower or (storage_engine is empty and engine.is_default) ? ' selected' }}>
                {{- engine.name -}}
              </option>
            {% endfor %}
          </select>
        </div>
      </div>

      <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
        <div class=\"col-6\">
          <label for=\"collationSelect\">{{ t('Collation') }}</label>
        </div>
        <div class=\"col-6\">
          <select class=\"form-select\" id=\"collationSelect\" lang=\"en\" dir=\"ltr\" name=\"tbl_collation\">
            <option value=\"\"></option>
            {% for charset in charsets %}
              <optgroup label=\"{{ charset.getName() }}\" title=\"{{ charset.getDescription() }}\">
                {% for collation in collations[charset.getName()] %}
                  <option value=\"{{ collation.getName() }}\" title=\"{{ collation.getDescription() }}\"{{ tbl_collation == collation.getName() ? ' selected' }}>
                    {{ collation.getName() }}
                  </option>
                {% endfor %}
              </optgroup>
            {% endfor %}
          </select>
        </div>

        <div class=\"form-check col-12 ms-3\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"change_all_collations\" value=\"1\" id=\"checkbox_change_all_collations\">
          <label class=\"form-check-label\" for=\"checkbox_change_all_collations\">{{ t('Change all column collations') }}</label>
        </div>
      </div>

      {% if has_pack_keys %}
        <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-6\">
            <label for=\"new_pack_keys\">PACK_KEYS</label>
          </div>
          <div class=\"col-6\">
            <select class=\"form-select\" name=\"new_pack_keys\" id=\"new_pack_keys\">
              <option value=\"DEFAULT\"{{ pack_keys == 'DEFAULT' ? ' selected' }}>DEFAULT</option>
              <option value=\"0\"{{ pack_keys == '0' ? ' selected' }}>0</option>
              <option value=\"1\"{{ pack_keys == '1' ? ' selected' }}>1</option>
            </select>
          </div>
        </div>
      {% endif %}

      {% if has_checksum_and_delay_key_write %}
        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"new_checksum\" id=\"new_checksum\" value=\"1\"{{ checksum == '1' ? ' checked' }}>
          <label class=\"form-check-label\" for=\"new_checksum\">CHECKSUM</label>
        </div>

        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"new_delay_key_write\" id=\"new_delay_key_write\" value=\"1\"{{ delay_key_write == '1' ? ' checked' }}>
          <label class=\"form-check-label\" for=\"new_delay_key_write\">DELAY_KEY_WRITE</label>
        </div>
      {% endif %}

      {% if has_transactional_and_page_checksum %}
        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"new_transactional\" id=\"new_transactional\" value=\"1\"{{ transactional == '1' ? ' checked' }}>
          <label class=\"form-check-label\" for=\"new_transactional\">TRANSACTIONAL</label>
        </div>

        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"new_page_checksum\" id=\"new_page_checksum\" value=\"1\"{{ page_checksum == '1' ? ' checked' }}>
          <label class=\"form-check-label\" for=\"new_page_checksum\">PAGE_CHECKSUM</label>
        </div>
      {% endif %}

      {% if has_auto_increment %}
        <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-12\">
            <label for=\"auto_increment_opt\">AUTO_INCREMENT</label>
          </div>
          <div class=\"col-12\">
            <input class=\"form-control\" id=\"auto_increment_opt\" type=\"number\" name=\"new_auto_increment\" value=\"{{ auto_increment }}\">
          </div>
        </div>
      {% endif %}

      {% if row_formats is not empty %}
        <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-12\">
            <label for=\"new_row_format\">ROW_FORMAT</label>
          </div>
          <div class=\"col-12\">
            <select class=\"form-select\" id=\"new_row_format\" name=\"new_row_format\">
              {% for row_format in row_formats %}
                <option value=\"{{ row_format }}\"{{ row_format == row_format_current|upper ? ' selected' }}>{{ row_format }}</option>
              {% endfor %}
            </select>
          </div>
        </div>
      {% endif %}
    </div>

    <div class=\"card-footer text-end\">
      <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ t('Go') }}\">
    </div>
  </div>
</form>

<form method=\"post\" action=\"{{ url('/table/operations') }}\" name=\"copyTable\" id=\"copyTable\" class=\"ajax\" onsubmit=\"return window.pmaEmptyCheckTheField(this, 'new_name')\">
  {{ get_hidden_inputs(db, table) }}
  <input type=\"hidden\" name=\"reload\" value=\"1\">

  <div class=\"card mb-2\">
    <div class=\"card-header\">{{ t('Copy table to (database.table)') }}</div>
    <div class=\"card-body\">
      <div class=\"mb-3 row g-3\">
        <div class=\"col-auto\">
          <div class=\"input-group\">
            {% if database_list is not empty %}
              <select class=\"form-select\" name=\"target_db\" aria-label=\"{{ t('Database') }}\">
                {% for each_db in database_list %}
                  <option value=\"{{ each_db.name }}\"{{ each_db.is_selected ? ' selected' }}>{{ each_db.name }}</option>
                {% endfor %}
              </select>
            {% else %}
              <input class=\"form-control\" type=\"text\" maxlength=\"100\" name=\"target_db\" value=\"{{ db }}\" aria-label=\"{{ t('Database') }}\">
            {% endif %}
            <span class=\"input-group-text\">.</span>
            <input class=\"form-control\" type=\"text\" name=\"new_name\" maxlength=\"64\" value=\"{{ table }}\" aria-label=\"{{ t('Table') }}\" required>
          </div>
        </div>
      </div>

      <div class=\"mb-3\">
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"what\" id=\"whatRadio1\" value=\"structure\">
          <label class=\"form-check-label\" for=\"whatRadio1\">
            {{ t('Structure only') }}
          </label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"what\" id=\"whatRadio2\" value=\"data\" checked>
          <label class=\"form-check-label\" for=\"whatRadio2\">
            {{ t('Structure and data') }}
          </label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"what\" id=\"whatRadio3\" value=\"dataonly\">
          <label class=\"form-check-label\" for=\"whatRadio3\">
            {{ t('Data only') }}
          </label>
        </div>
      </div>

      <div class=\"mb-3\">
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"drop_if_exists\" value=\"true\" id=\"checkbox_drop\">
          <label class=\"form-check-label\" for=\"checkbox_drop\">{{ t('Add %s')|format('DROP TABLE') }}</label>
        </div>

        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"sql_auto_increment\" value=\"1\" id=\"checkbox_auto_increment_cp\">
          <label class=\"form-check-label\" for=\"checkbox_auto_increment_cp\">{{ t('Add AUTO_INCREMENT value') }}</label>
        </div>

        {% if has_foreign_keys %}
          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"checkbox\" name=\"add_constraints\" value=\"1\" id=\"checkbox_constraints\" checked>
            <label class=\"form-check-label\" for=\"checkbox_constraints\">{{ t('Add constraints') }}</label>
          </div>
        {% endif %}

        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"adjust_privileges\" value=\"1\" id=\"checkbox_adjust_privileges\"
            {%- if has_privileges %} checked{% else %} title=\"
          {{- t(\"You don't have sufficient privileges to perform this operation; Please refer to the documentation for more details.\") }}\" disabled{% endif %}>
          <label class=\"form-check-label\" for=\"checkbox_adjust_privileges\">
            {{ t('Adjust privileges') }}
            {{ show_docu('faq', 'faq6-39') }}
          </label>
        </div>

        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"switch_to_new\" value=\"true\" id=\"checkbox_switch\"{{ switch_to_new ? ' checked' }}>
          <label class=\"form-check-label\" for=\"checkbox_switch\">{{ t('Switch to copied table') }}</label>
        </div>
      </div>
    </div>

    <div class=\"card-footer text-end\">
      <input class=\"btn btn-primary\" type=\"submit\" name=\"submit_copy\" value=\"{{ t('Go') }}\">
    </div>
  </div>
</form>

<div class=\"card mb-2\">
  <div class=\"card-header\">{{ t('Table maintenance') }}</div>
  <ul class=\"list-group list-group-flush\" id=\"tbl_maintenance\">
    {% if storage_engine in ['MYISAM', 'ARIA', 'INNODB', 'BERKELEYDB', 'TOKUDB'] %}
      <li class=\"list-group-item\">
        <a href=\"{{ url('/table/maintenance/analyze') }}\" data-post=\"{{ get_common({'db': db, 'table': table, 'selected_tbl': [table]}, '', false) }}\">
          {{ t('Analyze table') }}
        </a>
        {{ show_mysql_docu('ANALYZE_TABLE') }}
      </li>
    {% endif %}

    {% if storage_engine in ['MYISAM', 'ARIA', 'INNODB', 'TOKUDB'] %}
      <li class=\"list-group-item\">
        <a href=\"{{ url('/table/maintenance/check') }}\" data-post=\"{{ get_common({'db': db, 'table': table, 'selected_tbl': [table]}, '', false) }}\">
          {{ t('Check table') }}
        </a>
        {{ show_mysql_docu('CHECK_TABLE') }}
      </li>
    {% endif %}

    <li class=\"list-group-item\">
      <a href=\"{{ url('/table/maintenance/checksum') }}\" data-post=\"{{ get_common({'db': db, 'table': table, 'selected_tbl': [table]}, '', false) }}\">
        {{ t('Checksum table') }}
      </a>
      {{ show_mysql_docu('CHECKSUM_TABLE') }}
    </li>

    {% if storage_engine == 'INNODB' %}
      <li class=\"list-group-item\">
        <a class=\"maintain_action ajax\" href=\"{{ url('/sql') }}\" data-post=\"{{ get_common(url_params|merge({'sql_query': 'ALTER TABLE ' ~ backquote(table) ~ ' ENGINE = InnoDB;'}), '', false) }}\">
          {{ t('Defragment table') }}
        </a>
        {{ show_mysql_docu('InnoDB_File_Defragmenting') }}
      </li>
    {% endif %}

    <li class=\"list-group-item\">
      <a class=\"maintain_action ajax\" href=\"{{ url('/sql') }}\" data-post=\"{{ get_common(url_params|merge({
        'sql_query': 'FLUSH TABLE ' ~ backquote(table),
        'message_to_show': t('Table %s has been flushed.')|format(table|e),
        'reload': true
      }), '', false) }}\">
        {{ t('Flush the table (FLUSH)') }}
      </a>
      {{ show_mysql_docu('FLUSH') }}
    </li>

    {% if storage_engine in ['MYISAM', 'ARIA', 'INNODB', 'BERKELEYDB', 'TOKUDB'] %}
      <li class=\"list-group-item\">
        <a href=\"{{ url('/table/maintenance/optimize') }}\" data-post=\"{{ get_common({'db': db, 'table': table, 'selected_tbl': [table]}, '', false) }}\">
          {{ t('Optimize table') }}
        </a>
        {{ show_mysql_docu('OPTIMIZE_TABLE') }}
      </li>
    {% endif %}

    {% if storage_engine in ['MYISAM', 'ARIA'] %}
      <li class=\"list-group-item\">
        <a href=\"{{ url('/table/maintenance/repair') }}\" data-post=\"{{ get_common({'db': db, 'table': table, 'selected_tbl': [table]}, '', false) }}\">
          {{ t('Repair table') }}
        </a>
        {{ show_mysql_docu('REPAIR_TABLE') }}
      </li>
    {% endif %}
  </ul>
</div>

{% if not is_system_schema %}
  <div class=\"card mb-2\">
    <div class=\"card-header\">{{ t('Delete data or table') }}</div>
    <ul class=\"list-group list-group-flush\">
      {% if not is_view %}
        <li class=\"list-group-item\">
          {{ link_or_button(
            url('/sql'),
            url_params|merge({
              'sql_query': 'TRUNCATE TABLE ' ~ backquote(db) ~ '.' ~ backquote(table),
              'goto': url('/table/structure'),
              'reload': true,
              'message_to_show': t('Table %s has been emptied.')|format(table)|e
            }),
            t('Empty the table (TRUNCATE)'),
            {
              'id': 'truncate_tbl_anchor',
              'class': 'text-danger ajax',
              'data-query': 'TRUNCATE TABLE ' ~ backquote(db) ~ '.' ~ backquote(table)
            }
          ) }}
          {{ show_mysql_docu('TRUNCATE_TABLE') }}
        </li>
        <li class=\"list-group-item\">
          {{ link_or_button(
            url('/sql'),
            url_params|merge({
              'sql_query': 'DELETE FROM ' ~ backquote(db) ~ '.' ~ backquote(table),
              'goto': url('/table/structure'),
              'reload': true,
              'message_to_show': t('Table %s has been emptied.')|format(table)|e
            }),
            t('Empty the table (DELETE FROM)'),
            {
              'id': 'delete_tbl_anchor',
              'class': 'text-danger ajax',
              'data-query': 'DELETE FROM ' ~ backquote(db) ~ '.' ~ backquote(table)
            }
          ) }}
          {{ show_mysql_docu('DELETE') }}
        </li>
      {% endif %}
      <li class=\"list-group-item\">
        {{ link_or_button(
          url('/sql'),
          url_params|merge({
            'sql_query': 'DROP TABLE ' ~ backquote(db) ~ '.' ~ backquote(table),
            'goto': url('/database/operations'),
            'reload': true,
            'purge': true,
            'message_to_show': is_view ? t('View %s has been dropped.')|format(table)|e : t('Table %s has been dropped.')|format(table)|e,
            'table': table
          }),
          t('Delete the table (DROP)'),
          {
            'id': 'drop_tbl_anchor',
            'class': 'text-danger ajax',
            'data-query': 'DROP TABLE ' ~ backquote(db) ~ '.' ~ backquote(table)
          }
        ) }}
        {{ show_mysql_docu('DROP_TABLE') }}
      </li>
    </ul>
  </div>
{% endif %}

{% if partitions is not empty %}
  <form id=\"partitionsForm\" class=\"ajax\" method=\"post\" action=\"{{ url('/table/operations') }}\">
    {{ get_hidden_inputs(db, table) }}
    <input type=\"hidden\" name=\"submit_partition\" value=\"1\">

    <div class=\"card mb-2\">
      <div class=\"card-header\">
        {{ t('Partition maintenance') }}
        {{ show_mysql_docu('partitioning_maintenance') }}
      </div>

      <div class=\"card-body\">
        <div class=\"mb-3\">
          <label for=\"partition_name\">{{ t('Partition') }}</label>
          <select class=\"form-select resize-vertical\" id=\"partition_name\" name=\"partition_name[]\" multiple required>
            {% for partition in partitions %}
              <option value=\"{{ partition }}\"{{ loop.first ? ' selected' }}>{{ partition }}</option>
            {% endfor %}
          </select>
        </div>

        <div class=\"mb-3 form-check-inline\">
          {% for value, description in partitions_choices %}
            <div class=\"form-check\">
              <input class=\"form-check-input\" type=\"radio\" name=\"partition_operation\" id=\"partitionOperationRadio{{ value|capitalize }}\" value=\"{{ value }}\"{{ value == 'ANALYZE' ? ' checked' }}>
              <label class=\"form-check-label\" for=\"partitionOperationRadio{{ value|capitalize }}\">{{ description }}</label>
            </div>
          {% endfor %}
        </div>

        <div class=\"form-text\">
          <a href=\"{{ url('/sql', url_params|merge({
            'sql_query': 'ALTER TABLE ' ~ backquote(table) ~ ' REMOVE PARTITIONING;'
          })) }}\">{{ t('Remove partitioning') }}</a>
        </div>
      </div>

      <div class=\"card-footer text-end\">
        <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ t('Go') }}\">
      </div>
    </div>
  </form>
{% endif %}

{% if foreigners is not empty %}
  <div class=\"card mb-2\">
    <div class=\"card-header\">{{ t('Check referential integrity') }}</div>
    <ul class=\"list-group list-group-flush\">
      {% for foreign in foreigners %}
        <li class=\"list-group-item\">
          <a class=\"text-nowrap\" href=\"{{ url('/sql', foreign.params) }}\">
            {{ foreign.master }} -> {{ foreign.db }}.{{ foreign.table }}.{{ foreign.field }}
          </a>
        </li>
      {% endfor %}
    </ul>
  </div>
{% endif %}

</div>
", "table/operations/index.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/table/operations/index.twig");
    }
}
