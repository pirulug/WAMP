<?php

declare(strict_types=1);

namespace PhpMyAdmin\Controllers\Normalization;

use PhpMyAdmin\Controllers\InvocableController;
use PhpMyAdmin\Current;
use PhpMyAdmin\Http\Response;
use PhpMyAdmin\Http\ServerRequest;
use PhpMyAdmin\Normalization;
use PhpMyAdmin\ResponseRenderer;

use function __;
use function _pgettext;

final class GetColumnsController implements InvocableController
{
    public function __construct(
        private readonly ResponseRenderer $response,
        private readonly Normalization $normalization,
    ) {
    }

    public function __invoke(ServerRequest $request): Response
    {
        $html = '<option selected disabled>' . __('Select one…') . '</option>'
            . '<option value="no_such_col">' . __('No such column') . '</option>';
        //get column whose datatype falls under string category
        $html .= $this->normalization->getHtmlForColumnsList(
            Current::$database,
            Current::$table,
            _pgettext('string types', 'String'),
        );
        $this->response->addHTML($html);

        return $this->response->response();
    }
}
