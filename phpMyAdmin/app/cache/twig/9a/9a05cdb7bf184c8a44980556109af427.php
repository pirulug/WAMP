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

/* navigation/tree/node.twig */
class __TwigTemplate_fb3d21b421da0161c606dfae03b7d4a5 extends Template
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
        if (($context["show_node"] ?? null)) {
            // line 2
            yield "  <li class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["li_classes"] ?? null), "html", null, true);
            yield "\">
    <div class=\"block\">
      <i";
            // line 4
            yield (((($context["class"] ?? null) == "first")) ? (" class=\"first\"") : (""));
            yield "></i>
      ";
            // line 5
            if (($context["node_is_group"] ?? null)) {
                // line 6
                yield "        ";
                yield ((!CoreExtension::inFilter("last", ($context["class"] ?? null))) ? ("<b></b>") : (""));
                yield "
        <a class=\"";
                // line 7
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["link_classes"] ?? null), "html", null, true);
                yield "\" href=\"#\">
          <span class=\"hide paths_nav\" data-apath=\"";
                // line 8
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["paths"] ?? null), "a_path", [], "any", false, false, false, 8), "html", null, true);
                yield "\" data-vpath=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["paths"] ?? null), "v_path", [], "any", false, false, false, 8), "html", null, true);
                yield "\" data-pos=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["paths"] ?? null), "pos", [], "any", false, false, false, 8), "html", null, true);
                yield "\"></span>
          ";
                // line 9
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["pagination_params"] ?? null))) {
                    // line 10
                    yield "            <span class=\"hide ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pagination_params"] ?? null), "position", [], "any", false, false, false, 10), "html", null, true);
                    yield "\" data-name=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pagination_params"] ?? null), "data_name", [], "any", false, false, false, 10), "html", null, true);
                    yield "\" data-value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pagination_params"] ?? null), "data_value", [], "any", false, false, false, 10), "html", null, true);
                    yield "\"></span>
          ";
                }
                // line 12
                yield "          ";
                yield ($context["node_icon"] ?? null);
                yield "
        </a>
      ";
            } elseif ( !Twig\Extension\CoreExtension::testEmpty(            // line 14
($context["pagination_params"] ?? null))) {
                // line 15
                yield "        <span class=\"hide ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pagination_params"] ?? null), "position", [], "any", false, false, false, 15), "html", null, true);
                yield "\" data-name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pagination_params"] ?? null), "data_name", [], "any", false, false, false, 15), "html", null, true);
                yield "\" data-value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pagination_params"] ?? null), "data_value", [], "any", false, false, false, 15), "html", null, true);
                yield "\"></span>
      ";
            }
            // line 17
            yield "    </div>
    ";
            // line 18
            if (($context["node_is_container"] ?? null)) {
                // line 19
                yield "      <div class=\"fst-italic\">
    ";
            }
            // line 21
            yield "
    ";
            // line 22
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "isGroup", [], "any", false, false, false, 22)) {
                // line 23
                yield "      <div class=\"block second";
                yield ((($context["has_second_icon"] ?? null)) ? (" double") : (""));
                yield "\">
        <u>";
                // line 24
                yield PhpMyAdmin\Html\Generator::getImage((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "icon", [], "any", false, false, false, 24)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["image"] ?? null) : null), (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "icon", [], "any", false, false, false, 24)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["title"] ?? null) : null));
                yield "</u>
      </div>
      &nbsp;";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "name", [], "any", false, false, false, 26), "html", null, true);
                yield "
    ";
            } else {
                // line 28
                yield "      <div class=\"block second";
                yield ((($context["has_second_icon"] ?? null)) ? (" double") : (""));
                yield "\">
        ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["icon_links"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                    // line 30
                    yield "          <a href=\"";
                    yield PhpMyAdmin\Url::getFromRoute(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "route", [], "any", false, false, false, 30), CoreExtension::getAttribute($this->env, $this->source, $context["link"], "params", [], "any", false, false, false, 30));
                    yield "\" class=\"disableAjax\">";
                    // line 31
                    yield PhpMyAdmin\Html\Generator::getImage(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "image", [], "any", false, false, false, 31), CoreExtension::getAttribute($this->env, $this->source, $context["link"], "title", [], "any", false, false, false, 31));
                    // line 32
                    yield "</a>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                yield "      </div>

      ";
                // line 36
                if (($context["node_is_container"] ?? null)) {
                    // line 37
                    yield "        &nbsp;<a class=\"hover_show_full disableAjax\" href=\"";
                    yield PhpMyAdmin\Url::getFromRoute(CoreExtension::getAttribute($this->env, $this->source, ($context["text_link"] ?? null), "route", [], "any", false, false, false, 37), CoreExtension::getAttribute($this->env, $this->source, ($context["text_link"] ?? null), "params", [], "any", false, false, false, 37));
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "name", [], "any", false, false, false, 37), "html", null, true);
                    yield "</a>
      ";
                } elseif (CoreExtension::inFilter("index", CoreExtension::getAttribute($this->env, $this->source,                 // line 38
($context["node"] ?? null), "classes", [], "any", false, false, false, 38))) {
                    // line 39
                    yield "        <a class=\"hover_show_full disableAjax\" href=\"";
                    yield PhpMyAdmin\Url::getFromRoute(CoreExtension::getAttribute($this->env, $this->source, ($context["text_link"] ?? null), "route", [], "any", false, false, false, 39));
                    yield "\" data-post=\"";
                    yield PhpMyAdmin\Url::getCommon(Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, ($context["text_link"] ?? null), "params", [], "any", false, false, false, 39), ["is_from_nav" => true]));
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["text_link"] ?? null), "title", [], "any", false, false, false, 39), "html", null, true);
                    yield "\">";
                    // line 40
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["displayName"] ?? null), "html", null, true);
                    // line 41
                    yield "</a>
      ";
                } else {
                    // line 43
                    yield "        <a class=\"hover_show_full disableAjax\" href=\"";
                    yield PhpMyAdmin\Url::getFromRoute(CoreExtension::getAttribute($this->env, $this->source, ($context["text_link"] ?? null), "route", [], "any", false, false, false, 43), CoreExtension::getAttribute($this->env, $this->source, ($context["text_link"] ?? null), "params", [], "any", false, false, false, 43));
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["text_link"] ?? null), "title", [], "any", false, false, false, 43), "html", null, true);
                    yield "\">";
                    // line 44
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["displayName"] ?? null), "html", null, true);
                    // line 45
                    yield "</a>
      ";
                }
                // line 47
                yield "    ";
            }
            // line 48
            yield "
    ";
            // line 49
            yield ($context["control_buttons"] ?? null);
            yield "

    ";
            // line 51
            if (($context["node_is_container"] ?? null)) {
                // line 52
                yield "      </div>
    ";
            }
            // line 54
            yield "
    <div class=\"clearfloat\"></div>
";
        } elseif ( !Twig\Extension\CoreExtension::testEmpty(        // line 56
($context["pagination_params"] ?? null))) {
            // line 57
            yield "  <span class=\"hide ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pagination_params"] ?? null), "position", [], "any", false, false, false, 57), "html", null, true);
            yield "\" data-name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pagination_params"] ?? null), "data_name", [], "any", false, false, false, 57), "html", null, true);
            yield "\" data-value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pagination_params"] ?? null), "data_value", [], "any", false, false, false, 57), "html", null, true);
            yield "\"></span>
";
        }
        // line 59
        yield "
";
        // line 60
        if (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["recursive"] ?? null), "html", [], "any", false, false, false, 60)) && CoreExtension::getAttribute($this->env, $this->source, ($context["recursive"] ?? null), "has_wrapper", [], "any", false, false, false, 60))) {
            // line 61
            yield "  <div class=\"list_container\"";
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["recursive"] ?? null), "is_hidden", [], "any", false, false, false, 61)) ? (" style=\"display: none;\"") : (""));
            yield ">
    <ul>
";
        }
        // line 64
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["recursive"] ?? null), "html", [], "any", false, false, false, 64);
        yield "
";
        // line 65
        if (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["recursive"] ?? null), "html", [], "any", false, false, false, 65)) && CoreExtension::getAttribute($this->env, $this->source, ($context["recursive"] ?? null), "has_wrapper", [], "any", false, false, false, 65))) {
            // line 66
            yield "    </ul>
  </div>
";
        }
        // line 69
        yield "
";
        // line 70
        if (($context["has_siblings"] ?? null)) {
            // line 71
            yield "  </li>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "navigation/tree/node.twig";
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
        return array (  256 => 71,  254 => 70,  251 => 69,  246 => 66,  244 => 65,  240 => 64,  233 => 61,  231 => 60,  228 => 59,  218 => 57,  216 => 56,  212 => 54,  208 => 52,  206 => 51,  201 => 49,  198 => 48,  195 => 47,  191 => 45,  189 => 44,  183 => 43,  179 => 41,  177 => 40,  169 => 39,  167 => 38,  160 => 37,  158 => 36,  154 => 34,  147 => 32,  145 => 31,  141 => 30,  137 => 29,  132 => 28,  127 => 26,  122 => 24,  117 => 23,  115 => 22,  112 => 21,  108 => 19,  106 => 18,  103 => 17,  93 => 15,  91 => 14,  85 => 12,  75 => 10,  73 => 9,  65 => 8,  61 => 7,  56 => 6,  54 => 5,  50 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "navigation/tree/node.twig", "C:\\Pirulug\\WAMP\\phpMyAdmin\\resources\\templates\\navigation\\tree\\node.twig");
    }
}
