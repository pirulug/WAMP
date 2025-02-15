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

/* changelog.twig */
class __TwigTemplate_790e897a0214f6ace85b914287bc2ee2 extends Template
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
        yield "<!doctype html>
<html lang=\"en\" dir=\"ltr\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta name=\"robots\" content=\"noindex,nofollow\">
  <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">
  <link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">
  <title>phpMyAdmin - ChangeLog</title>
</head>
<body>
<h1>phpMyAdmin - ChangeLog</h1>
<pre>";
        // line 13
        yield (isset($context["changelog"]) || array_key_exists("changelog", $context) ? $context["changelog"] : (function () { throw new RuntimeError('Variable "changelog" does not exist.', 13, $this->source); })());
        yield "</pre>
</body>
</html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "changelog.twig";
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
        return array (  56 => 13,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!doctype html>
<html lang=\"en\" dir=\"ltr\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta name=\"robots\" content=\"noindex,nofollow\">
  <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">
  <link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">
  <title>phpMyAdmin - ChangeLog</title>
</head>
<body>
<h1>phpMyAdmin - ChangeLog</h1>
<pre>{{ changelog|raw }}</pre>
</body>
</html>
", "changelog.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/changelog.twig");
    }
}
