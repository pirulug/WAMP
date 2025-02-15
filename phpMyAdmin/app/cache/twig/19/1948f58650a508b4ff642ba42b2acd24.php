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

/* navigation/tree/fast_filter.twig */
class __TwigTemplate_2d822ddd32e06836a0874def65484aab extends Template
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
        if (($context["url_params"] ?? null)) {
            // line 2
            yield "    <li class=\"fast_filter";
            if (($context["is_root_node"] ?? null)) {
                yield " db_fast_filter";
            }
            yield "\">
        <form class=\"ajax fast_filter\">
            ";
            // line 4
            yield PhpMyAdmin\Url::getHiddenInputs(($context["url_params"] ?? null));
            yield "
            <div class=\"input-group\">
              <input
                  class=\"searchClause form-control\"
                  type=\"text\"
                  name=\"";
            // line 9
            yield ((($context["is_root_node"] ?? null)) ? ("searchClause") : ("searchClause2"));
            yield "\"
                  accesskey=\"q\"
                  aria-label=\"";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Type to filter these, Enter to search all"), "html", null, true);
            yield "\"
                  placeholder=\"";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Type to filter these, Enter to search all"), "html", null, true);
            yield "\"
              >
              <button
                class=\"btn btn-outline-secondary searchClauseClear\"
                type=\"button\" aria-label=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Clear fast filter"), "html", null, true);
            yield "\">X</button>
            </div>
        </form>
    </li>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "navigation/tree/fast_filter.twig";
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
        return array (  76 => 16,  69 => 12,  65 => 11,  60 => 9,  52 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "navigation/tree/fast_filter.twig", "C:\\Pirulug\\WAMP\\phpMyAdmin\\resources\\templates\\navigation\\tree\\fast_filter.twig");
    }
}
