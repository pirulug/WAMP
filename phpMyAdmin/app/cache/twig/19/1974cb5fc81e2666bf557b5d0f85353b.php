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

/* server/status/monitor/index.twig */
class __TwigTemplate_348c007f191cd219b36002316b8a9201 extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "server/status/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $context["active"] = "monitor";
        // line 1
        $this->parent = $this->loadTemplate("server/status/base.twig", "server/status/monitor/index.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "  <h2 class=\"mb-3\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("System monitor"), "html", null, true);
        yield "</h2>

  <div class=\"mb-3 d-print-none\">
    <button type=\"button\" class=\"btn btn-primary\" id=\"monitorPauseResumeButton\">";
        // line 7
        yield PhpMyAdmin\Html\Generator::getIcon("play", \_gettext("Start monitor"));
        yield "</button>
    <button type=\"button\" class=\"btn btn-secondary\" data-bs-toggle=\"collapse\" data-bs-target=\"#monitorSettingsContent\" aria-expanded=\"false\" aria-controls=\"monitorSettingsContent\">";
        // line 8
        yield PhpMyAdmin\Html\Generator::getIcon("s_cog", \_gettext("Settings"));
        yield "</button>
    <button type=\"button\" class=\"btn btn-secondary\" id=\"monitorInstructionsButton\">";
        // line 9
        yield PhpMyAdmin\Html\Generator::getIcon("b_help", \_gettext("Instructions/Setup"));
        yield "</button>
  </div>

  <div class=\"collapse\" id=\"monitorSettingsContent\">
    <div class=\"card mb-3 d-print-none\">
      <div class=\"card-body\">
        <div class=\"mb-3\">
          <button type=\"button\" class=\"btn btn-secondary\" id=\"monitorAddNewChartButton\">";
        // line 16
        yield PhpMyAdmin\Html\Generator::getIcon("b_chart", \_gettext("Add chart"));
        yield "</button>
          <button type=\"button\" class=\"btn btn-secondary\" id=\"monitorRearrangeChartButton\">";
        // line 17
        yield PhpMyAdmin\Html\Generator::getIcon("b_tblops", \_gettext("Enable charts dragging"));
        yield "</button>
          <button type=\"button\" class=\"btn btn-primary d-none\" id=\"monitorDoneRearrangeChartButton\">";
        // line 18
        yield PhpMyAdmin\Html\Generator::getIcon("s_okay", \_gettext("Done dragging (rearranging) charts"));
        yield "</button>
        </div>

        <div class=\"row mb-3\">
          <div class=\"col-auto\">
            <label class=\"form-label\" for=\"monitorChartRefreshRateSelect\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Refresh rate"), "html", null, true);
        yield "</label>
            <select class=\"form-select\" id=\"monitorChartRefreshRateSelect\" name=\"monitorChartRefreshRate\">
              ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([2, 3, 4, 5, 10, 20, 40, 60, 120, 300, 600, 1200]);
        foreach ($context['_seq'] as $context["_key"] => $context["rate"]) {
            // line 26
            yield "                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["rate"], "html", null, true);
            yield "\"";
            yield ((($context["rate"] == 5)) ? (" selected") : (""));
            yield ">";
            // line 27
            if (($context["rate"] < 60)) {
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_ngettext("%d second", "%d seconds", $context["rate"]), $context["rate"]), "html", null, true);
            } else {
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_ngettext("%d minute", "%d minutes", ($context["rate"] / 60)), ($context["rate"] / 60)), "html", null, true);
            }
            // line 32
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['rate'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "            </select>
          </div>

          <div class=\"col-auto\">
            <label class=\"form-label\" for=\"monitorChartColumnsSelect\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Chart columns"), "html", null, true);
        yield "</label>
            <select class=\"form-select\" id=\"monitorChartColumnsSelect\" name=\"monitorChartColumns\">
              ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["number_of_columns"]) {
            // line 41
            yield "                <option>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["number_of_columns"], "html", null, true);
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['number_of_columns'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "            </select>
          </div>
        </div>

        <div>
          <p class=\"card-text\">
            <strong>";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Chart arrangement"), "html", null, true);
        yield "</strong><br>
            <span class=\"text-body-secondary\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("The arrangement of the charts is stored to the browsers local storage. You may want to export it if you have a complicated set up."), "html", null, true);
        yield "</span>
          </p>
          <div>
            <button type=\"button\" class=\"btn btn-secondary\" id=\"monitorImportConfigButton\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Import"), "html", null, true);
        yield "</button>
            <button type=\"button\" class=\"btn btn-secondary\" id=\"monitorExportConfigButton\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Export"), "html", null, true);
        yield "</button>
            <button type=\"button\" class=\"btn btn-secondary\" id=\"monitorResetConfigButton\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Reset to default"), "html", null, true);
        yield "</button>
          </div>
        </div>
      </div>
    </div>
  </div>

<div id=\"monitorInstructionsDialog\" title=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Monitor Instructions"), "html", null, true);
        yield "\" class=\"hide\">
  <p>
    ";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("The phpMyAdmin Monitor can assist you in optimizing the server configuration and track down time intensive queries. For the latter you will need to set log_output to 'TABLE' and have either the slow_query_log or general_log enabled. Note however, that the general_log produces a lot of data and increases server load by up to 15%."), "html", null, true);
        yield "
  </p>
  <img class=\"ajaxIcon\" src=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("ajax_clock_small.gif"), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Loading…"), "html", null, true);
        yield "\">

  <div class=\"ajaxContent\"></div>
  <br>

  <div class=\"monitorUse hide\">
    <p><strong>";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Using the monitor:"), "html", null, true);
        yield "</strong></p>
    <p>
      ";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Your browser will refresh all displayed charts in a regular interval. You may add charts and change the refresh rate under 'Settings', or remove any chart using the cog icon on each respective chart."), "html", null, true);
        yield "
    </p>
    <p>
      ";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("To display queries from the logs, click on any chart. Once confirmed, this will load a table of grouped queries, there you may click on any occurring SELECT statements to further analyze them."), "html", null, true);
        yield "
    </p>
    <p>
      ";
        // line 80
        yield PhpMyAdmin\Html\Generator::getImage("s_attention");
        yield "
      <strong>";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Please note:"), "html", null, true);
        yield "</strong>
    </p>
    <p>
      ";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Enabling the general_log may increase the server load by 5-15%. Also be aware that generating statistics from the logs is a load intensive task, so it is advisable to select only a small time span and to disable the general_log and empty its table once monitoring is not required any more."), "html", null, true);
        yield "
    </p>
  </div>
</div>

<div class=\"modal fade\" id=\"addChartModal\" tabindex=\"-1\" aria-labelledby=\"addChartModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"addChartModalLabel\">";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Chart Title"), "html", null, true);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "\"></button>
      </div>
      <div class=\"modal-body\">
        <div id=\"tabGridVariables\">
          <p>
            <input type=\"text\" name=\"chartTitle\" value=\"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Chart Title"), "html", null, true);
        yield "\">
          </p>
          <input type=\"radio\" name=\"chartType\" value=\"preset\" id=\"chartPreset\">

          <label for=\"chartPreset\">";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Preset chart"), "html", null, true);
        yield "</label>
          <select name=\"presetCharts\"></select>
          <br>

          <input type=\"radio\" name=\"chartType\" value=\"variable\" id=\"chartStatusVar\" checked>
          <label for=\"chartStatusVar\">
            ";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Status variable(s)"), "html", null, true);
        yield "
          </label>
          <br>

          <div id=\"chartVariableSettings\">
            <label for=\"chartSeries\">";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Select series:"), "html", null, true);
        yield "</label>
            <br>
            <select id=\"chartSeries\" name=\"varChartList\" size=\"1\">
              <option>";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Commonly monitored"), "html", null, true);
        yield "</option>
              <option>Processes</option>
              <option>Questions</option>
              <option>Connections</option>
              <option>Bytes_sent</option>
              <option>Bytes_received</option>
              <option>Threads_connected</option>
              <option>Created_tmp_disk_tables</option>
              <option>Handler_read_first</option>
              <option>Innodb_buffer_pool_wait_free</option>
              <option>Key_reads</option>
              <option>Open_tables</option>
              <option>Select_full_join</option>
              <option>Slow_queries</option>
            </select>
            <br>

            <label for=\"variableInput\">
              ";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("or type variable name:"), "html", null, true);
        yield "
            </label>
            <input type=\"text\" name=\"variableInput\" id=\"variableInput\">
            <br>

            <input type=\"checkbox\" name=\"differentialValue\" id=\"differentialValue\" value=\"differential\" checked>
            <label for=\"differentialValue\">
              ";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Display as differential value"), "html", null, true);
        yield "
            </label>
            <br>

            <input type=\"checkbox\" id=\"useDivisor\" name=\"useDivisor\" value=\"1\">
            <label for=\"useDivisor\">";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Apply a divisor"), "html", null, true);
        yield "</label>

            <span class=\"divisorInput hide\">
              <input type=\"text\" name=\"valueDivisor\" size=\"4\" value=\"1\">
              (<a href=\"#kibDivisor\">";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("KiB"), "html", null, true);
        yield "</a>,
              <a href=\"#mibDivisor\">";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("MiB"), "html", null, true);
        yield "</a>)
            </span>
            <br>

            <input type=\"checkbox\" id=\"useUnit\" name=\"useUnit\" value=\"1\">
            <label for=\"useUnit\">
              ";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Append unit to data values"), "html", null, true);
        yield "
            </label>
            <span class=\"unitInput hide\">
              <input type=\"text\" name=\"valueUnit\" size=\"4\" value=\"\">
            </span>

            <p>
              <a href=\"#submitAddSeries\">
                <strong>";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add this series"), "html", null, true);
        yield "</strong>
              </a>
              <span id=\"clearSeriesLink\" class=\"hide\">
                | <a href=\"#submitClearSeries\">";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Clear series"), "html", null, true);
        yield "</a>
              </span>
            </p>

            ";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Series in chart:"), "html", null, true);
        yield "
            <br>
            <span id=\"seriesPreview\">
              <em>";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("None"), "html", null, true);
        yield "</em>
            </span>
          </div>
        </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"addChartButton\" data-bs-dismiss=\"modal\">";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add chart to grid"), "html", null, true);
        yield "</button>
        <button type=\"button\" class=\"btn btn-secondary\" id=\"closeModalButton\" data-bs-dismiss=\"modal\">";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "</button>
      </div>
    </div>
  </div>
</div>

<div id=\"logAnalyseDialog\" title=\"";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Log statistics"), "html", null, true);
        yield "\" class=\"hide\">
  <p>
    ";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Selected time range:"), "html", null, true);
        yield "
    <input type=\"text\" name=\"dateStart\" class=\"datetimefield\" value=\"\">
    -
    <input type=\"text\" name=\"dateEnd\" class=\"datetimefield\" value=\"\">
  </p>

  <input type=\"checkbox\" id=\"limitTypes\" value=\"1\" checked>
  <label for=\"limitTypes\">
    ";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Only retrieve SELECT,INSERT,UPDATE and DELETE Statements"), "html", null, true);
        yield "
  </label>
  <br>

  <input type=\"checkbox\" id=\"removeVariables\" value=\"1\" checked>
  <label for=\"removeVariables\">
    ";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Remove variable data in INSERT statements for better grouping"), "html", null, true);
        yield "
  </label>

  <p>
    ";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Choose from which log you want the statistics to be generated from."), "html", null, true);
        yield "
  </p>
  <p>
    ";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Results are grouped by query text."), "html", null, true);
        yield "
  </p>
</div>

<div id=\"queryAnalyzerDialog\" title=\"";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Query analyzer"), "html", null, true);
        yield "\" class=\"overflow-y-scroll hide\">
  <textarea id=\"sqlquery\"></textarea>
  <br>
  <div class=\"placeHolder\"></div>
</div>

<div class=\"clearfloat\"></div>
<div><table class=\"clearfloat tdblock\" id=\"chartGrid\"></table></div>
<div id=\"logTable\"><br></div>

<script>
  var variableNames = [
    ";
        // line 228
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["javascript_variable_names"]) || array_key_exists("javascript_variable_names", $context) ? $context["javascript_variable_names"] : (function () { throw new RuntimeError('Variable "javascript_variable_names" does not exist.', 228, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["variable_name"]) {
            // line 229
            yield "      \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["variable_name"], "js"), "html", null, true);
            yield "\",
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['variable_name'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 231
        yield "  ];
</script>

<form id=\"js_data\" class=\"hide\">
  ";
        // line 235
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 235, $this->source); })()));
        foreach ($context['_seq'] as $context["name"] => $context["value"]) {
            // line 236
            yield "    <input type=\"hidden\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\">
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['name'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 238
        yield "</form>

<div id=\"profiling_docu\" class=\"hide\">
  ";
        // line 241
        yield PhpMyAdmin\Html\MySQLDocumentation::show("general-thread-states");
        yield "
</div>

<div id=\"explain_docu\" class=\"hide\">
  ";
        // line 245
        yield PhpMyAdmin\Html\MySQLDocumentation::show("explain-output");
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
        return "server/status/monitor/index.twig";
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
        return array (  511 => 245,  504 => 241,  499 => 238,  488 => 236,  484 => 235,  478 => 231,  469 => 229,  465 => 228,  450 => 216,  443 => 212,  437 => 209,  430 => 205,  421 => 199,  410 => 191,  405 => 189,  396 => 183,  392 => 182,  383 => 176,  377 => 173,  370 => 169,  364 => 166,  353 => 158,  344 => 152,  340 => 151,  333 => 147,  325 => 142,  315 => 135,  294 => 117,  288 => 114,  280 => 109,  271 => 103,  264 => 99,  256 => 94,  252 => 93,  240 => 84,  234 => 81,  230 => 80,  224 => 77,  218 => 74,  213 => 72,  202 => 66,  197 => 64,  192 => 62,  182 => 55,  178 => 54,  174 => 53,  168 => 50,  164 => 49,  156 => 43,  147 => 41,  143 => 40,  138 => 38,  132 => 34,  125 => 32,  122 => 30,  119 => 28,  117 => 27,  111 => 26,  107 => 25,  102 => 23,  94 => 18,  90 => 17,  86 => 16,  76 => 9,  72 => 8,  68 => 7,  61 => 4,  54 => 3,  49 => 1,  47 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'server/status/base.twig' %}
{% set active = 'monitor' %}
{% block content %}
  <h2 class=\"mb-3\">{{ t('System monitor') }}</h2>

  <div class=\"mb-3 d-print-none\">
    <button type=\"button\" class=\"btn btn-primary\" id=\"monitorPauseResumeButton\">{{ get_icon('play', t('Start monitor')) }}</button>
    <button type=\"button\" class=\"btn btn-secondary\" data-bs-toggle=\"collapse\" data-bs-target=\"#monitorSettingsContent\" aria-expanded=\"false\" aria-controls=\"monitorSettingsContent\">{{ get_icon('s_cog', t('Settings')) }}</button>
    <button type=\"button\" class=\"btn btn-secondary\" id=\"monitorInstructionsButton\">{{ get_icon('b_help', t('Instructions/Setup')) }}</button>
  </div>

  <div class=\"collapse\" id=\"monitorSettingsContent\">
    <div class=\"card mb-3 d-print-none\">
      <div class=\"card-body\">
        <div class=\"mb-3\">
          <button type=\"button\" class=\"btn btn-secondary\" id=\"monitorAddNewChartButton\">{{ get_icon('b_chart', t('Add chart')) }}</button>
          <button type=\"button\" class=\"btn btn-secondary\" id=\"monitorRearrangeChartButton\">{{ get_icon('b_tblops', t('Enable charts dragging')) }}</button>
          <button type=\"button\" class=\"btn btn-primary d-none\" id=\"monitorDoneRearrangeChartButton\">{{ get_icon('s_okay', t('Done dragging (rearranging) charts')) }}</button>
        </div>

        <div class=\"row mb-3\">
          <div class=\"col-auto\">
            <label class=\"form-label\" for=\"monitorChartRefreshRateSelect\">{{ t('Refresh rate') }}</label>
            <select class=\"form-select\" id=\"monitorChartRefreshRateSelect\" name=\"monitorChartRefreshRate\">
              {% for rate in [2, 3, 4, 5, 10, 20, 40, 60, 120, 300, 600, 1200] %}
                <option value=\"{{ rate }}\"{{ rate == 5 ? ' selected' }}>
                  {%- if rate < 60 -%}
                    {{- t('%d second', '%d seconds', rate)|format(rate) -}}
                  {%- else -%}
                    {{- t('%d minute', '%d minutes', rate / 60)|format(rate / 60) -}}
                  {%- endif -%}
                </option>
              {% endfor %}
            </select>
          </div>

          <div class=\"col-auto\">
            <label class=\"form-label\" for=\"monitorChartColumnsSelect\">{{ t('Chart columns') }}</label>
            <select class=\"form-select\" id=\"monitorChartColumnsSelect\" name=\"monitorChartColumns\">
              {% for number_of_columns in 1..6 %}
                <option>{{ number_of_columns }}</option>
              {% endfor %}
            </select>
          </div>
        </div>

        <div>
          <p class=\"card-text\">
            <strong>{{ t('Chart arrangement') }}</strong><br>
            <span class=\"text-body-secondary\">{{ t('The arrangement of the charts is stored to the browsers local storage. You may want to export it if you have a complicated set up.') }}</span>
          </p>
          <div>
            <button type=\"button\" class=\"btn btn-secondary\" id=\"monitorImportConfigButton\">{{ t('Import') }}</button>
            <button type=\"button\" class=\"btn btn-secondary\" id=\"monitorExportConfigButton\">{{ t('Export') }}</button>
            <button type=\"button\" class=\"btn btn-secondary\" id=\"monitorResetConfigButton\">{{ t('Reset to default') }}</button>
          </div>
        </div>
      </div>
    </div>
  </div>

<div id=\"monitorInstructionsDialog\" title=\"{{ t('Monitor Instructions') }}\" class=\"hide\">
  <p>
    {{ t(\"The phpMyAdmin Monitor can assist you in optimizing the server configuration and track down time intensive queries. For the latter you will need to set log_output to 'TABLE' and have either the slow_query_log or general_log enabled. Note however, that the general_log produces a lot of data and increases server load by up to 15%.\") }}
  </p>
  <img class=\"ajaxIcon\" src=\"{{ image('ajax_clock_small.gif') }}\" alt=\"{{ t('Loading…') }}\">

  <div class=\"ajaxContent\"></div>
  <br>

  <div class=\"monitorUse hide\">
    <p><strong>{{ t('Using the monitor:') }}</strong></p>
    <p>
      {{ t(\"Your browser will refresh all displayed charts in a regular interval. You may add charts and change the refresh rate under 'Settings', or remove any chart using the cog icon on each respective chart.\") }}
    </p>
    <p>
      {{ t('To display queries from the logs, click on any chart. Once confirmed, this will load a table of grouped queries, there you may click on any occurring SELECT statements to further analyze them.') }}
    </p>
    <p>
      {{ get_image('s_attention') }}
      <strong>{{ t('Please note:') }}</strong>
    </p>
    <p>
      {{ t('Enabling the general_log may increase the server load by 5-15%. Also be aware that generating statistics from the logs is a load intensive task, so it is advisable to select only a small time span and to disable the general_log and empty its table once monitoring is not required any more.') }}
    </p>
  </div>
</div>

<div class=\"modal fade\" id=\"addChartModal\" tabindex=\"-1\" aria-labelledby=\"addChartModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"addChartModalLabel\">{{ t('Chart Title') }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{{ t('Close') }}\"></button>
      </div>
      <div class=\"modal-body\">
        <div id=\"tabGridVariables\">
          <p>
            <input type=\"text\" name=\"chartTitle\" value=\"{{ t('Chart Title') }}\">
          </p>
          <input type=\"radio\" name=\"chartType\" value=\"preset\" id=\"chartPreset\">

          <label for=\"chartPreset\">{{ t('Preset chart') }}</label>
          <select name=\"presetCharts\"></select>
          <br>

          <input type=\"radio\" name=\"chartType\" value=\"variable\" id=\"chartStatusVar\" checked>
          <label for=\"chartStatusVar\">
            {{ t('Status variable(s)') }}
          </label>
          <br>

          <div id=\"chartVariableSettings\">
            <label for=\"chartSeries\">{{ t('Select series:') }}</label>
            <br>
            <select id=\"chartSeries\" name=\"varChartList\" size=\"1\">
              <option>{{ t('Commonly monitored') }}</option>
              <option>Processes</option>
              <option>Questions</option>
              <option>Connections</option>
              <option>Bytes_sent</option>
              <option>Bytes_received</option>
              <option>Threads_connected</option>
              <option>Created_tmp_disk_tables</option>
              <option>Handler_read_first</option>
              <option>Innodb_buffer_pool_wait_free</option>
              <option>Key_reads</option>
              <option>Open_tables</option>
              <option>Select_full_join</option>
              <option>Slow_queries</option>
            </select>
            <br>

            <label for=\"variableInput\">
              {{ t('or type variable name:') }}
            </label>
            <input type=\"text\" name=\"variableInput\" id=\"variableInput\">
            <br>

            <input type=\"checkbox\" name=\"differentialValue\" id=\"differentialValue\" value=\"differential\" checked>
            <label for=\"differentialValue\">
              {{ t('Display as differential value') }}
            </label>
            <br>

            <input type=\"checkbox\" id=\"useDivisor\" name=\"useDivisor\" value=\"1\">
            <label for=\"useDivisor\">{{ t('Apply a divisor') }}</label>

            <span class=\"divisorInput hide\">
              <input type=\"text\" name=\"valueDivisor\" size=\"4\" value=\"1\">
              (<a href=\"#kibDivisor\">{{ t('KiB') }}</a>,
              <a href=\"#mibDivisor\">{{ t('MiB') }}</a>)
            </span>
            <br>

            <input type=\"checkbox\" id=\"useUnit\" name=\"useUnit\" value=\"1\">
            <label for=\"useUnit\">
              {{ t('Append unit to data values') }}
            </label>
            <span class=\"unitInput hide\">
              <input type=\"text\" name=\"valueUnit\" size=\"4\" value=\"\">
            </span>

            <p>
              <a href=\"#submitAddSeries\">
                <strong>{{ t('Add this series') }}</strong>
              </a>
              <span id=\"clearSeriesLink\" class=\"hide\">
                | <a href=\"#submitClearSeries\">{{ t('Clear series') }}</a>
              </span>
            </p>

            {{ t('Series in chart:') }}
            <br>
            <span id=\"seriesPreview\">
              <em>{{ t('None') }}</em>
            </span>
          </div>
        </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"addChartButton\" data-bs-dismiss=\"modal\">{{ t('Add chart to grid') }}</button>
        <button type=\"button\" class=\"btn btn-secondary\" id=\"closeModalButton\" data-bs-dismiss=\"modal\">{{ t('Close') }}</button>
      </div>
    </div>
  </div>
</div>

<div id=\"logAnalyseDialog\" title=\"{{ t('Log statistics') }}\" class=\"hide\">
  <p>
    {{ t('Selected time range:') }}
    <input type=\"text\" name=\"dateStart\" class=\"datetimefield\" value=\"\">
    -
    <input type=\"text\" name=\"dateEnd\" class=\"datetimefield\" value=\"\">
  </p>

  <input type=\"checkbox\" id=\"limitTypes\" value=\"1\" checked>
  <label for=\"limitTypes\">
    {{ t('Only retrieve SELECT,INSERT,UPDATE and DELETE Statements') }}
  </label>
  <br>

  <input type=\"checkbox\" id=\"removeVariables\" value=\"1\" checked>
  <label for=\"removeVariables\">
    {{ t('Remove variable data in INSERT statements for better grouping') }}
  </label>

  <p>
    {{ t('Choose from which log you want the statistics to be generated from.') }}
  </p>
  <p>
    {{ t('Results are grouped by query text.') }}
  </p>
</div>

<div id=\"queryAnalyzerDialog\" title=\"{{ t('Query analyzer') }}\" class=\"overflow-y-scroll hide\">
  <textarea id=\"sqlquery\"></textarea>
  <br>
  <div class=\"placeHolder\"></div>
</div>

<div class=\"clearfloat\"></div>
<div><table class=\"clearfloat tdblock\" id=\"chartGrid\"></table></div>
<div id=\"logTable\"><br></div>

<script>
  var variableNames = [
    {% for variable_name in javascript_variable_names %}
      \"{{ variable_name|e('js') }}\",
    {% endfor %}
  ];
</script>

<form id=\"js_data\" class=\"hide\">
  {% for name, value in form %}
    <input type=\"hidden\" name=\"{{ name }}\" value=\"{{ value }}\">
  {% endfor %}
</form>

<div id=\"profiling_docu\" class=\"hide\">
  {{ show_mysql_docu('general-thread-states') }}
</div>

<div id=\"explain_docu\" class=\"hide\">
  {{ show_mysql_docu('explain-output') }}
</div>

{% endblock %}
", "server/status/monitor/index.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/server/status/monitor/index.twig");
    }
}
