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

/* scripts.twig */
class __TwigTemplate_f9ebaf15902189f0760a4db117c3b0fa extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 2
            yield "  <script data-cfasync=\"false\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["base_dir"]) || array_key_exists("base_dir", $context) ? $context["base_dir"] : (function () { throw new RuntimeError('Variable "base_dir" does not exist.', 2, $this->source); })()), "html", null, true);
            yield (( !(is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 2)) && is_string($_v1 = "index.php") && str_starts_with($_v0, $_v1))) ? ("js/") : (""));
            // line 3
            yield ((((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 3)) && is_string($_v3 = "vendor/") && str_starts_with($_v2, $_v3)) || (is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 3)) && is_string($_v5 = "index.php") && str_starts_with($_v4, $_v5)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 3), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("dist/" . CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 3)), "html", null, true)));
            // line 4
            yield ((CoreExtension::inFilter(".php", CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 4))) ? (PhpMyAdmin\Url::getCommon(Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "params", [], "any", false, false, false, 4), ["v" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["pma"]) || array_key_exists("pma", $context) ? $context["pma"] : (function () { throw new RuntimeError('Variable "pma" does not exist.', 4, $this->source); })()), "version", [], "any", false, false, false, 4)]))) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("?v=" . Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pma"]) || array_key_exists("pma", $context) ? $context["pma"] : (function () { throw new RuntimeError('Variable "pma" does not exist.', 4, $this->source); })()), "version", [], "any", false, false, false, 4))), "html", null, true)));
            yield "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['file'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        yield "
<script data-cfasync=\"false\">
// <![CDATA[
";
        // line 9
        yield (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 9, $this->source); })());
        yield "
";
        // line 10
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 10, $this->source); })()))) {
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 11, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 12
                yield "window.AJAX.scriptHandler.add('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 12), "js"), "html", null, true);
                yield "', ";
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["file"], "has_onload", [], "any", false, false, false, 12)) ? ("true") : ("false"));
                yield ");
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['file'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            yield "
\$(function() {
";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 17
                yield "  ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["file"], "has_onload", [], "any", false, false, false, 17)) {
                    // line 18
                    yield "  window.AJAX.fireOnload('";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 18), "js"), "html", null, true);
                    yield "');
  ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['file'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            yield "});
";
        }
        // line 23
        yield "// ]]>
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "scripts.twig";
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
        return array (  111 => 23,  107 => 21,  97 => 18,  94 => 17,  90 => 16,  86 => 14,  75 => 12,  71 => 11,  69 => 10,  65 => 9,  60 => 6,  52 => 4,  50 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% for file in files %}
  <script data-cfasync=\"false\" src=\"{{ base_dir }}{{ not (file.filename starts with 'index.php') ? 'js/' -}}
    {{- file.filename starts with 'vendor/' or file.filename starts with 'index.php' ? file.filename : 'dist/' ~ file.filename -}}
    {{- '.php' in file.filename ? get_common(file.params|merge({'v': pma.version})) : '?v=' ~ pma.version|url_encode }}\"></script>
{% endfor %}

<script data-cfasync=\"false\">
// <![CDATA[
{{ code|raw }}
{% if files is not empty %}
{% for file in files %}
window.AJAX.scriptHandler.add('{{ file.filename|escape('js') }}', {{ file.has_onload ? 'true' : 'false' }});
{% endfor %}

\$(function() {
{% for file in files %}
  {% if file.has_onload %}
  window.AJAX.fireOnload('{{ file.filename|escape('js') }}');
  {% endif %}
{% endfor %}
});
{% endif %}
// ]]>
</script>
", "scripts.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/scripts.twig");
    }
}
