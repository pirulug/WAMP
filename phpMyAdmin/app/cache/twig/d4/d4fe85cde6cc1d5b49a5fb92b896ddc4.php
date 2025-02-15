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

/* table/insert/value_column_for_other_datatype.twig */
class __TwigTemplate_7df3cb98ee024991ae0f351818da60db extends Template
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
        yield (isset($context["backup_field"]) || array_key_exists("backup_field", $context) ? $context["backup_field"] : (function () { throw new RuntimeError('Variable "backup_field" does not exist.', 1, $this->source); })());
        yield "
";
        // line 2
        if ((isset($context["is_textarea"]) || array_key_exists("is_textarea", $context) ? $context["is_textarea"] : (function () { throw new RuntimeError('Variable "is_textarea" does not exist.', 2, $this->source); })())) {
            // line 3
            yield (isset($context["html_field"]) || array_key_exists("html_field", $context) ? $context["html_field"] : (function () { throw new RuntimeError('Variable "html_field" does not exist.', 3, $this->source); })());
        } else {
            // line 5
            yield (isset($context["html_field"]) || array_key_exists("html_field", $context) ? $context["html_field"] : (function () { throw new RuntimeError('Variable "html_field" does not exist.', 5, $this->source); })());
            // line 6
            if ((CoreExtension::matches("/(VIRTUAL|PERSISTENT|GENERATED)/", (isset($context["extra"]) || array_key_exists("extra", $context) ? $context["extra"] : (function () { throw new RuntimeError('Variable "extra" does not exist.', 6, $this->source); })())) && !CoreExtension::inFilter("DEFAULT_GENERATED", (isset($context["extra"]) || array_key_exists("extra", $context) ? $context["extra"] : (function () { throw new RuntimeError('Variable "extra" does not exist.', 6, $this->source); })())))) {
                // line 7
                yield "<input type=\"hidden\" name=\"virtual";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["columnNameAppendix"]) || array_key_exists("columnNameAppendix", $context) ? $context["columnNameAppendix"] : (function () { throw new RuntimeError('Variable "columnNameAppendix" does not exist.', 7, $this->source); })()), "html", null, true);
                yield "\" value=\"1\">";
            }
            // line 9
            if (((isset($context["extra"]) || array_key_exists("extra", $context) ? $context["extra"] : (function () { throw new RuntimeError('Variable "extra" does not exist.', 9, $this->source); })()) == "auto_increment")) {
                // line 10
                yield "<input type=\"hidden\" name=\"auto_increment";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["columnNameAppendix"]) || array_key_exists("columnNameAppendix", $context) ? $context["columnNameAppendix"] : (function () { throw new RuntimeError('Variable "columnNameAppendix" does not exist.', 10, $this->source); })()), "html", null, true);
                yield "\" value=\"1\">";
            }
            // line 12
            if (((((((isset($context["trueType"]) || array_key_exists("trueType", $context) ? $context["trueType"] : (function () { throw new RuntimeError('Variable "trueType" does not exist.', 12, $this->source); })()) == "bit") || ((isset($context["trueType"]) || array_key_exists("trueType", $context) ? $context["trueType"] : (function () { throw new RuntimeError('Variable "trueType" does not exist.', 12, $this->source); })()) == "uuid")) || ((isset($context["trueType"]) || array_key_exists("trueType", $context) ? $context["trueType"] : (function () { throw new RuntimeError('Variable "trueType" does not exist.', 12, $this->source); })()) == "timestamp")) || ((isset($context["trueType"]) || array_key_exists("trueType", $context) ? $context["trueType"] : (function () { throw new RuntimeError('Variable "trueType" does not exist.', 12, $this->source); })()) == "datetime")) || ((isset($context["trueType"]) || array_key_exists("trueType", $context) ? $context["trueType"] : (function () { throw new RuntimeError('Variable "trueType" does not exist.', 12, $this->source); })()) == "date"))) {
                // line 13
                yield "<input type=\"hidden\" name=\"fields_type";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["columnNameAppendix"]) || array_key_exists("columnNameAppendix", $context) ? $context["columnNameAppendix"] : (function () { throw new RuntimeError('Variable "columnNameAppendix" does not exist.', 13, $this->source); })()), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["trueType"]) || array_key_exists("trueType", $context) ? $context["trueType"] : (function () { throw new RuntimeError('Variable "trueType" does not exist.', 13, $this->source); })()), "html", null, true);
                yield "\">";
            }
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "table/insert/value_column_for_other_datatype.twig";
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
        return array (  69 => 13,  67 => 12,  62 => 10,  60 => 9,  55 => 7,  53 => 6,  51 => 5,  48 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ backup_field|raw }}
{% if is_textarea %}
  {{- html_field|raw -}}
{% else %}
  {{- html_field|raw -}}
  {%- if extra matches '/(VIRTUAL|PERSISTENT|GENERATED)/' and 'DEFAULT_GENERATED' not in extra -%}
    <input type=\"hidden\" name=\"virtual{{ columnNameAppendix }}\" value=\"1\">
  {%- endif -%}
  {%- if extra == 'auto_increment' -%}
    <input type=\"hidden\" name=\"auto_increment{{ columnNameAppendix }}\" value=\"1\">
  {%- endif -%}
  {%- if trueType == 'bit' or trueType == 'uuid' or trueType == 'timestamp' or trueType == 'datetime' or trueType == 'date' -%}
    <input type=\"hidden\" name=\"fields_type{{ columnNameAppendix }}\" value=\"{{ trueType }}\">
  {%- endif -%}
{% endif %}
", "table/insert/value_column_for_other_datatype.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/table/insert/value_column_for_other_datatype.twig");
    }
}
