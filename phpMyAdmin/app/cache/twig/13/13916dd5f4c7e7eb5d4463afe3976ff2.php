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

/* server/user_groups/tab_list.twig */
class __TwigTemplate_e525558d39ea9d8ca142733e5c433b90 extends Template
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
        yield "<fieldset class=\"mb-3 col\">
  <legend>";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 2, $this->source); })()), "html", null, true);
        yield "</legend>
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tab_details"]) || array_key_exists("tab_details", $context) ? $context["tab_details"] : (function () { throw new RuntimeError('Variable "tab_details" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tab_detail"]) {
            // line 4
            yield "    <div class=\"form-check\">
      <input class=\"form-check-input checkall\" type=\"checkbox\"";
            // line 5
            yield CoreExtension::getAttribute($this->env, $this->source, $context["tab_detail"], "in_array", [], "any", false, false, false, 5);
            yield " name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 5, $this->source); })()), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab_detail"], "tab", [], "any", false, false, false, 5), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 5, $this->source); })()), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab_detail"], "tab", [], "any", false, false, false, 5), "html", null, true);
            yield "\" value=\"Y\">
      <label class=\"form-check-label\" for=\"";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 6, $this->source); })()), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab_detail"], "tab", [], "any", false, false, false, 6), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab_detail"], "tab_name", [], "any", false, false, false, 6), "html", null, true);
            yield "</label>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tab_detail'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        yield "</fieldset>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/user_groups/tab_list.twig";
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
        return array (  81 => 9,  68 => 6,  56 => 5,  53 => 4,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<fieldset class=\"mb-3 col\">
  <legend>{{ title }}</legend>
  {% for tab_detail in tab_details %}
    <div class=\"form-check\">
      <input class=\"form-check-input checkall\" type=\"checkbox\"{{ tab_detail.in_array|raw }} name=\"{{ level }}_{{ tab_detail.tab }}\" id=\"{{ level }}_{{ tab_detail.tab }}\" value=\"Y\">
      <label class=\"form-check-label\" for=\"{{ level }}_{{ tab_detail.tab }}\">{{ tab_detail.tab_name }}</label>
    </div>
  {% endfor %}
</fieldset>
", "server/user_groups/tab_list.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/server/user_groups/tab_list.twig");
    }
}
