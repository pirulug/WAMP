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

/* recent_favorite_table_favorite.twig */
class __TwigTemplate_a838d823512a6d283b70a5181f1d53c3 extends Template
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
        if (Twig\Extension\CoreExtension::testEmpty(($context["tables"] ?? null))) {
            // line 2
            yield "  <li>
    <span class=\"dropdown-item-text\">";
            // line 3
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("There are no favorite tables."), "html", null, true);
            yield "</span>
  </li>
";
        } else {
            // line 6
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["tables"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["table"]) {
                // line 7
                yield "  <li>
    <span class=\"dropdown-item\">
      <a
        class=\"ajax favorite_table_anchor me-2\"
        href=\"";
                // line 11
                yield PhpMyAdmin\Url::getFromRoute("/database/structure/favorite-table", CoreExtension::getAttribute($this->env, $this->source, $context["table"], "remove_parameters", [], "any", false, false, false, 11));
                yield "\"
        title=\"";
                // line 12
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Remove from Favorites"), "html", null, true);
                yield "\"
        data-favtargetn=\"";
                // line 13
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["table"], "table_parameters", [], "any", false, false, false, 13), "md5", [], "any", false, false, false, 13), "html", null, true);
                yield "\"
      >
        ";
                // line 15
                yield PhpMyAdmin\Html\Generator::getIcon("b_favorite");
                yield "
      </a>
      <a class=\"disableAjax\" href=\"";
                // line 17
                yield PhpMyAdmin\Url::getFromRoute("/table/recent-favorite", CoreExtension::getAttribute($this->env, $this->source, $context["table"], "table_parameters", [], "any", false, false, false, 17));
                yield "\">
        `";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["table"], "table_parameters", [], "any", false, false, false, 18), "db", [], "any", false, false, false, 18), "html", null, true);
                yield "`.`";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["table"], "table_parameters", [], "any", false, false, false, 18), "table", [], "any", false, false, false, 18), "html", null, true);
                yield "`
      </a>
    </span>
  </li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['table'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "recent_favorite_table_favorite.twig";
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
        return array (  86 => 18,  82 => 17,  77 => 15,  72 => 13,  68 => 12,  64 => 11,  58 => 7,  53 => 6,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "recent_favorite_table_favorite.twig", "C:\\Pirulug\\WAMP\\phpMyAdmin\\resources\\templates\\recent_favorite_table_favorite.twig");
    }
}
