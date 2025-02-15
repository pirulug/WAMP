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

/* navigation/item_unhide_dialog.twig */
class __TwigTemplate_50f32c875a96d24486043387e6058263 extends Template
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
        yield "<form class=\"ajax\" action=\"";
        yield PhpMyAdmin\Url::getFromRoute("/navigation");
        yield "\" method=\"post\">
  ";
        // line 2
        yield PhpMyAdmin\Url::getHiddenInputs((isset($context["database"]) || array_key_exists("database", $context) ? $context["database"] : (function () { throw new RuntimeError('Variable "database" does not exist.', 2, $this->source); })()));
        yield "

  ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 4, $this->source); })()));
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
        foreach ($context['_seq'] as $context["type"] => $context["label"]) {
            // line 5
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["hidden"] ?? null), $context["type"], [], "array", true, true, false, 5) && is_iterable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hidden"]) || array_key_exists("hidden", $context) ? $context["hidden"] : (function () { throw new RuntimeError('Variable "hidden" does not exist.', 5, $this->source); })()), $context["type"], [], "array", false, false, false, 5)))) {
                // line 6
                yield "      ";
                yield (( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 6)) ? ("<br>") : (""));
                yield "
      <strong>";
                // line 7
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "</strong>
      <table class=\"table w-100\">
        <tbody>
          ";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hidden"]) || array_key_exists("hidden", $context) ? $context["hidden"] : (function () { throw new RuntimeError('Variable "hidden" does not exist.', 10, $this->source); })()), $context["type"], [], "array", false, false, false, 10));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 11
                    yield "            <tr>
              <td>";
                    // line 12
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"], "html", null, true);
                    yield "</td>
              <td class=\"text-end\">
                <a class=\"unhideNavItem ajax\" href=\"";
                    // line 14
                    yield PhpMyAdmin\Url::getFromRoute("/navigation");
                    yield "\" data-post=\"";
                    yield PhpMyAdmin\Url::getCommon(["unhideNavItem" => true, "itemType" =>                     // line 16
$context["type"], "itemName" =>                     // line 17
$context["item"], "dbName" =>                     // line 18
(isset($context["database"]) || array_key_exists("database", $context) ? $context["database"] : (function () { throw new RuntimeError('Variable "database" does not exist.', 18, $this->source); })())], "", false);
                    // line 19
                    yield "\">";
                    yield PhpMyAdmin\Html\Generator::getIcon("show", \_gettext("Unhide"));
                    yield "</a>
              </td>
            </tr>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                yield "        </tbody>
      </table>
    ";
            }
            // line 26
            yield "  ";
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
        unset($context['_seq'], $context['type'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "navigation/item_unhide_dialog.twig";
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
        return array (  132 => 27,  118 => 26,  113 => 23,  102 => 19,  100 => 18,  99 => 17,  98 => 16,  95 => 14,  90 => 12,  87 => 11,  83 => 10,  77 => 7,  72 => 6,  69 => 5,  52 => 4,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form class=\"ajax\" action=\"{{ url('/navigation') }}\" method=\"post\">
  {{ get_hidden_inputs(database) }}

  {% for type, label in types %}
    {% if hidden[type] is defined and hidden[type] is iterable %}
      {{ not loop.first ? '<br>' }}
      <strong>{{ label }}</strong>
      <table class=\"table w-100\">
        <tbody>
          {% for item in hidden[type] %}
            <tr>
              <td>{{ item }}</td>
              <td class=\"text-end\">
                <a class=\"unhideNavItem ajax\" href=\"{{ url('/navigation') }}\" data-post=\"{{ get_common({
                  'unhideNavItem': true,
                  'itemType': type,
                  'itemName': item,
                  'dbName': database
                }, '', false) }}\">{{ get_icon('show', t('Unhide')) }}</a>
              </td>
            </tr>
          {% endfor %}
        </tbody>
      </table>
    {% endif %}
  {% endfor %}
</form>
", "navigation/item_unhide_dialog.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/navigation/item_unhide_dialog.twig");
    }
}
