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

/* login/twofactor/key-https-warning.twig */
class __TwigTemplate_9905b263bf39bcc8ab95f0112e1bf4ff extends Template
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
        if ( !(isset($context["is_https"]) || array_key_exists("is_https", $context) ? $context["is_https"] : (function () { throw new RuntimeError('Variable "is_https" does not exist.', 1, $this->source); })())) {
            // line 2
            yield "  <div class=\"alert alert-danger\" role=\"alert\">
    ";
            // line 3
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("You are not using https to access phpMyAdmin, therefore FIDO U2F device will most likely refuse to authenticate you."), "html", null, true);
            yield "
  </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "login/twofactor/key-https-warning.twig";
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
        return array (  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if not is_https %}
  <div class=\"alert alert-danger\" role=\"alert\">
    {{ t('You are not using https to access phpMyAdmin, therefore FIDO U2F device will most likely refuse to authenticate you.') }}
  </div>
{% endif %}
", "login/twofactor/key-https-warning.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/login/twofactor/key-https-warning.twig");
    }
}
