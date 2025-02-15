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

/* table/insert/get_head_and_foot_of_insert_row_table.twig */
class __TwigTemplate_3f41bc10806383841f18a10c964b6610 extends Template
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
        yield "<div class=\"table-responsive-lg\">
  <table class=\"table table-striped align-middle my-3 insertRowTable w-auto\">
    <thead>
    <tr>
      <th>";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Column"), "html", null, true);
        yield "</th>
      ";
        // line 6
        yield (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 6, $this->source); })());
        yield "
      ";
        // line 7
        yield (isset($context["function"]) || array_key_exists("function", $context) ? $context["function"] : (function () { throw new RuntimeError('Variable "function" does not exist.', 7, $this->source); })());
        yield "
      <th>";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Null"), "html", null, true);
        yield "</th>
      <th class=\"w-50\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Value"), "html", null, true);
        yield "</th>
    </tr>
    </thead>
     <tfoot>
    <tr>
      <th colspan=\"5\" class=\"text-end\">
        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
        yield "\">
        </th>
      </tr>
    </tfoot>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "table/insert/get_head_and_foot_of_insert_row_table.twig";
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
        return array (  73 => 15,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"table-responsive-lg\">
  <table class=\"table table-striped align-middle my-3 insertRowTable w-auto\">
    <thead>
    <tr>
      <th>{{ t('Column') }}</th>
      {{ type|raw }}
      {{ function|raw }}
      <th>{{ t('Null') }}</th>
      <th class=\"w-50\">{{ t('Value') }}</th>
    </tr>
    </thead>
     <tfoot>
    <tr>
      <th colspan=\"5\" class=\"text-end\">
        <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ t('Go') }}\">
        </th>
      </tr>
    </tfoot>
", "table/insert/get_head_and_foot_of_insert_row_table.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/table/insert/get_head_and_foot_of_insert_row_table.twig");
    }
}
