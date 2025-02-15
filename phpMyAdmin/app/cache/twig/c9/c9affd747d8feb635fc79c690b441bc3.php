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

/* database/routines/row.twig */
class __TwigTemplate_4a1b963ef15e5b0ef5e57dfbaa24bc74 extends Template
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
        yield "<tr";
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 1, $this->source); })()))) {
            yield " class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 1, $this->source); })()), "html", null, true);
            yield "\"";
        }
        yield " data-filter-row=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["routine"]) || array_key_exists("routine", $context) ? $context["routine"] : (function () { throw new RuntimeError('Variable "routine" does not exist.', 1, $this->source); })()), "name", [], "any", false, false, false, 1)), "html", null, true);
        yield "\">
  <td>
    <input type=\"checkbox\" class=\"checkall\" name=\"item_name[]\" value=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["routine"]) || array_key_exists("routine", $context) ? $context["routine"] : (function () { throw new RuntimeError('Variable "routine" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        yield "\">
  </td>
  <td>
    <span class=\"drop_sql hide\">";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sql_drop"]) || array_key_exists("sql_drop", $context) ? $context["sql_drop"] : (function () { throw new RuntimeError('Variable "sql_drop" does not exist.', 6, $this->source); })()), "html", null, true);
        yield "</span>
    <strong>";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["routine"]) || array_key_exists("routine", $context) ? $context["routine"] : (function () { throw new RuntimeError('Variable "routine" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
        yield "</strong>
  </td>
  <td>";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["routine"]) || array_key_exists("routine", $context) ? $context["routine"] : (function () { throw new RuntimeError('Variable "routine" does not exist.', 9, $this->source); })()), "type", [], "any", false, false, false, 9), "html", null, true);
        yield "</td>
  <td dir=\"ltr\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["routine"]) || array_key_exists("routine", $context) ? $context["routine"] : (function () { throw new RuntimeError('Variable "routine" does not exist.', 10, $this->source); })()), "returns", [], "any", false, false, false, 10), "html", null, true);
        yield "</td>
  <td>
    ";
        // line 12
        if ((isset($context["has_edit_privilege"]) || array_key_exists("has_edit_privilege", $context) ? $context["has_edit_privilege"] : (function () { throw new RuntimeError('Variable "has_edit_privilege" does not exist.', 12, $this->source); })())) {
            // line 13
            yield "      <a class=\"ajax edit_anchor\" href=\"";
            yield PhpMyAdmin\Url::getFromRoute("/database/routines", ["db" =>             // line 14
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 14, $this->source); })()), "table" =>             // line 15
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 15, $this->source); })()), "edit_item" => true, "item_name" => CoreExtension::getAttribute($this->env, $this->source,             // line 17
(isset($context["routine"]) || array_key_exists("routine", $context) ? $context["routine"] : (function () { throw new RuntimeError('Variable "routine" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "item_type" => CoreExtension::getAttribute($this->env, $this->source,             // line 18
(isset($context["routine"]) || array_key_exists("routine", $context) ? $context["routine"] : (function () { throw new RuntimeError('Variable "routine" does not exist.', 18, $this->source); })()), "type", [], "any", false, false, false, 18)]);
            // line 19
            yield "\">
        ";
            // line 20
            yield PhpMyAdmin\Html\Generator::getIcon("b_edit", \_gettext("Edit"));
            yield "
      </a>
    ";
        } else {
            // line 23
            yield "      ";
            yield PhpMyAdmin\Html\Generator::getIcon("bd_edit", \_gettext("Edit"));
            yield "
    ";
        }
        // line 25
        yield "  </td>
  <td>
    ";
        // line 27
        if (((isset($context["has_execute_privilege"]) || array_key_exists("has_execute_privilege", $context) ? $context["has_execute_privilege"] : (function () { throw new RuntimeError('Variable "has_execute_privilege" does not exist.', 27, $this->source); })()) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["execute_action"]) || array_key_exists("execute_action", $context) ? $context["execute_action"] : (function () { throw new RuntimeError('Variable "execute_action" does not exist.', 27, $this->source); })())))) {
            // line 28
            yield "      ";
            if (((isset($context["execute_action"]) || array_key_exists("execute_action", $context) ? $context["execute_action"] : (function () { throw new RuntimeError('Variable "execute_action" does not exist.', 28, $this->source); })()) == "execute_routine")) {
                // line 29
                yield "        <a class=\"ajax exec_anchor\" href=\"";
                yield PhpMyAdmin\Url::getFromRoute("/database/routines", ["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 29, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 29, $this->source); })())]);
                yield "\" data-post=\"";
                yield PhpMyAdmin\Url::getCommon(["execute_routine" => true, "item_name" => CoreExtension::getAttribute($this->env, $this->source,                 // line 31
(isset($context["routine"]) || array_key_exists("routine", $context) ? $context["routine"] : (function () { throw new RuntimeError('Variable "routine" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31), "item_type" => CoreExtension::getAttribute($this->env, $this->source,                 // line 32
(isset($context["routine"]) || array_key_exists("routine", $context) ? $context["routine"] : (function () { throw new RuntimeError('Variable "routine" does not exist.', 32, $this->source); })()), "type", [], "any", false, false, false, 32)], "");
                // line 33
                yield "\">
          ";
                // line 34
                yield PhpMyAdmin\Html\Generator::getIcon("b_nextpage", \_gettext("Execute"));
                yield "
        </a>
      ";
            } else {
                // line 37
                yield "        <a class=\"ajax exec_anchor\" href=\"";
                yield PhpMyAdmin\Url::getFromRoute("/database/routines", ["db" =>                 // line 38
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 38, $this->source); })()), "table" =>                 // line 39
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 39, $this->source); })()), "execute_dialog" => true, "item_name" => CoreExtension::getAttribute($this->env, $this->source,                 // line 41
(isset($context["routine"]) || array_key_exists("routine", $context) ? $context["routine"] : (function () { throw new RuntimeError('Variable "routine" does not exist.', 41, $this->source); })()), "name", [], "any", false, false, false, 41), "item_type" => CoreExtension::getAttribute($this->env, $this->source,                 // line 42
(isset($context["routine"]) || array_key_exists("routine", $context) ? $context["routine"] : (function () { throw new RuntimeError('Variable "routine" does not exist.', 42, $this->source); })()), "type", [], "any", false, false, false, 42)]);
                // line 43
                yield "\">
          ";
                // line 44
                yield PhpMyAdmin\Html\Generator::getIcon("b_nextpage", \_gettext("Execute"));
                yield "
        </a>
      ";
            }
            // line 47
            yield "    ";
        } else {
            // line 48
            yield "      ";
            yield PhpMyAdmin\Html\Generator::getIcon("bd_nextpage", \_gettext("Execute"));
            yield "
    ";
        }
        // line 50
        yield "  </td>
  <td>
    ";
        // line 52
        if ((isset($context["has_export_privilege"]) || array_key_exists("has_export_privilege", $context) ? $context["has_export_privilege"] : (function () { throw new RuntimeError('Variable "has_export_privilege" does not exist.', 52, $this->source); })())) {
            // line 53
            yield "      <a class=\"ajax export_anchor\" href=\"";
            yield PhpMyAdmin\Url::getFromRoute("/database/routines", ["db" =>             // line 54
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 54, $this->source); })()), "table" =>             // line 55
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 55, $this->source); })()), "export_item" => true, "item_name" => CoreExtension::getAttribute($this->env, $this->source,             // line 57
(isset($context["routine"]) || array_key_exists("routine", $context) ? $context["routine"] : (function () { throw new RuntimeError('Variable "routine" does not exist.', 57, $this->source); })()), "name", [], "any", false, false, false, 57), "item_type" => CoreExtension::getAttribute($this->env, $this->source,             // line 58
(isset($context["routine"]) || array_key_exists("routine", $context) ? $context["routine"] : (function () { throw new RuntimeError('Variable "routine" does not exist.', 58, $this->source); })()), "type", [], "any", false, false, false, 58)]);
            // line 59
            yield "\">
        ";
            // line 60
            yield PhpMyAdmin\Html\Generator::getIcon("b_export", \_gettext("Export"));
            yield "
      </a>
    ";
        } else {
            // line 63
            yield "      ";
            yield PhpMyAdmin\Html\Generator::getIcon("bd_export", \_gettext("Export"));
            yield "
    ";
        }
        // line 65
        yield "  </td>
  <td>
    ";
        // line 67
        yield PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/sql"), ["db" =>         // line 70
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 70, $this->source); })()), "table" =>         // line 71
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 71, $this->source); })()), "sql_query" =>         // line 72
(isset($context["sql_drop"]) || array_key_exists("sql_drop", $context) ? $context["sql_drop"] : (function () { throw new RuntimeError('Variable "sql_drop" does not exist.', 72, $this->source); })()), "goto" => PhpMyAdmin\Url::getFromRoute("/database/routines", ["db" =>         // line 73
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 73, $this->source); })())])], PhpMyAdmin\Html\Generator::getIcon("b_drop", \_gettext("Drop")), ["class" => "ajax drop_anchor"]);
        // line 77
        yield "
  </td>
</tr>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "database/routines/row.twig";
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
        return array (  190 => 77,  188 => 73,  187 => 72,  186 => 71,  185 => 70,  184 => 67,  180 => 65,  174 => 63,  168 => 60,  165 => 59,  163 => 58,  162 => 57,  161 => 55,  160 => 54,  158 => 53,  156 => 52,  152 => 50,  146 => 48,  143 => 47,  137 => 44,  134 => 43,  132 => 42,  131 => 41,  130 => 39,  129 => 38,  127 => 37,  121 => 34,  118 => 33,  116 => 32,  115 => 31,  111 => 29,  108 => 28,  106 => 27,  102 => 25,  96 => 23,  90 => 20,  87 => 19,  85 => 18,  84 => 17,  83 => 15,  82 => 14,  80 => 13,  78 => 12,  73 => 10,  69 => 9,  64 => 7,  60 => 6,  54 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<tr{% if row_class is not empty %} class=\"{{ row_class }}\"{% endif %} data-filter-row=\"{{ routine.name|upper }}\">
  <td>
    <input type=\"checkbox\" class=\"checkall\" name=\"item_name[]\" value=\"{{ routine.name }}\">
  </td>
  <td>
    <span class=\"drop_sql hide\">{{ sql_drop }}</span>
    <strong>{{ routine.name }}</strong>
  </td>
  <td>{{ routine.type }}</td>
  <td dir=\"ltr\">{{ routine.returns }}</td>
  <td>
    {% if has_edit_privilege %}
      <a class=\"ajax edit_anchor\" href=\"{{ url('/database/routines', {
        'db': db,
        'table': table,
        'edit_item': true,
        'item_name': routine.name,
        'item_type': routine.type
      }) }}\">
        {{ get_icon('b_edit', t('Edit')) }}
      </a>
    {% else %}
      {{ get_icon('bd_edit', t('Edit')) }}
    {% endif %}
  </td>
  <td>
    {% if has_execute_privilege and execute_action is not empty %}
      {% if execute_action == 'execute_routine' %}
        <a class=\"ajax exec_anchor\" href=\"{{ url('/database/routines', {'db': db, 'table': table}) }}\" data-post=\"{{ get_common({
          'execute_routine': true,
          'item_name': routine.name,
          'item_type': routine.type
        }, '') }}\">
          {{ get_icon('b_nextpage', t('Execute')) }}
        </a>
      {% else %}
        <a class=\"ajax exec_anchor\" href=\"{{ url('/database/routines', {
          'db': db,
          'table': table,
          'execute_dialog': true,
          'item_name': routine.name,
          'item_type': routine.type
        }) }}\">
          {{ get_icon('b_nextpage', t('Execute')) }}
        </a>
      {% endif %}
    {% else %}
      {{ get_icon('bd_nextpage', t('Execute')) }}
    {% endif %}
  </td>
  <td>
    {% if has_export_privilege %}
      <a class=\"ajax export_anchor\" href=\"{{ url('/database/routines', {
        'db': db,
        'table': table,
        'export_item': true,
        'item_name': routine.name,
        'item_type': routine.type
      }) }}\">
        {{ get_icon('b_export', t('Export')) }}
      </a>
    {% else %}
      {{ get_icon('bd_export', t('Export')) }}
    {% endif %}
  </td>
  <td>
    {{ link_or_button(
      url('/sql'),
      {
        'db': db,
        'table': table,
        'sql_query': sql_drop,
        'goto': url('/database/routines', {'db': db})
      },
      get_icon('b_drop', t('Drop')),
      {'class': 'ajax drop_anchor'}
    ) }}
  </td>
</tr>
", "database/routines/row.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/database/routines/row.twig");
    }
}
