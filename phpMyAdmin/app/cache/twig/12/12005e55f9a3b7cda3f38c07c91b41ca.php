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

/* base.twig */
class __TwigTemplate_2aa23f2ca413643dad3b69bc33a6c5b8 extends Template
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
<html lang=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "lang", [], "any", false, false, false, 2), "html", null, true);
        yield "\" dir=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pma"] ?? null), "text_dir", [], "any", false, false, false, 2), "html", null, true);
        yield "\" data-bs-theme=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "theme_color_mode", [], "any", false, false, false, 2), "html", null, true);
        yield "\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta name=\"referrer\" content=\"same-origin\">
  <meta name=\"robots\" content=\"noindex,nofollow,notranslate\">
  <meta name=\"google\" content=\"notranslate\">
  <script>window.allowThirdPartyFraming = ";
        // line 9
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "allow_third_party_framing", [], "any", false, false, false, 9) == "sameorigin")) ? ("\"sameorigin\"") : (((CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "allow_third_party_framing", [], "any", false, false, false, 9)) ? ("1") : ("0"))));
        yield ";</script>
  ";
        // line 10
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "allow_third_party_framing", [], "any", false, false, false, 10)) {
            // line 11
            yield "<style id=\"cfs-style\">html{display: none;}</style>";
        }
        // line 13
        yield "
  <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">
  <link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "theme_path", [], "any", false, false, false, 16), "html", null, true);
        yield "/jquery/jquery-ui.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "base_dir", [], "any", false, false, false, 17), "html", null, true);
        yield "js/vendor/codemirror/lib/codemirror.css?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, ($context["pma"] ?? null), "version", [], "any", false, false, false, 17)), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "base_dir", [], "any", false, false, false, 18), "html", null, true);
        yield "js/vendor/codemirror/addon/hint/show-hint.css?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, ($context["pma"] ?? null), "version", [], "any", false, false, false, 18)), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "base_dir", [], "any", false, false, false, 19), "html", null, true);
        yield "js/vendor/codemirror/addon/lint/lint.css?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, ($context["pma"] ?? null), "version", [], "any", false, false, false, 19)), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "theme_path", [], "any", false, false, false, 20), "html", null, true);
        yield "/css/theme";
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["pma"] ?? null), "text_dir", [], "any", false, false, false, 20) == "rtl")) ? (".rtl") : (""));
        yield ".css?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, ($context["pma"] ?? null), "version", [], "any", false, false, false, 20)), "html", null, true);
        yield "\">
  <title>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "title", [], "any", false, false, false, 21), "html", null, true);
        yield "</title>
  ";
        // line 22
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "scripts", [], "any", false, false, false, 22);
        yield "
  <noscript><style>html{display:block}</style></noscript>
</head>
<body";
        // line 25
        yield (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "body_id", [], "any", false, false, false, 25))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((" id=" . CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "body_id", [], "any", false, false, false, 25)), "html", null, true)) : (""));
        yield ">
";
        // line 26
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "navigation", [], "any", false, false, false, 26);
        yield "
";
        // line 27
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "custom_header", [], "any", false, false, false, 27);
        yield "
";
        // line 28
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "load_user_preferences", [], "any", false, false, false, 28);
        yield "

";
        // line 30
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "show_hint", [], "any", false, false, false, 30)) {
            // line 31
            yield "  <span id=\"no_hint\" class=\"hide\"></span>
";
        }
        // line 33
        yield "
";
        // line 34
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "is_warnings_enabled", [], "any", false, false, false, 34)) {
            // line 35
            yield "  <noscript>
    ";
            // line 36
            yield $this->env->getFilter('error')->getCallable()(\_gettext("Javascript must be enabled past this point!"));
            yield "
  </noscript>
";
        }
        // line 39
        yield "
";
        // line 40
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "is_menu_enabled", [], "any", false, false, false, 40) && (CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "server", [], "any", false, false, false, 40) > 0))) {
            // line 41
            yield "  ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "menu", [], "any", false, false, false, 41);
            yield "
  <div id=\"page_nav_icons\" class=\"row row-cols-sm-auto align-items-center d-print-none me-3 p-1\">
    <div class=\"col-12\">
      <div id=\"userAccountDropdown\" class=\"dropdown\">
        <button class=\"btn btn-sm btn-outline-secondary dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">";
            // line 46
            yield PhpMyAdmin\Html\Generator::getImage("user", \_gettext("Open user account menu"));
            // line 47
            yield "</button>
        <ul class=\"dropdown-menu\">
          <li>
            <a class=\"dropdown-item text-nowrap disableAjax\" href=\"";
            // line 50
            yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ["username" => (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "current_user", [], "any", false, false, false, 50)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null), "hostname" => (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "current_user", [], "any", false, false, false, 50)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[1] ?? null) : null)]);
            yield "\">
              ";
            // line 51
            yield PhpMyAdmin\Html\Generator::getImage("user", "", ["aria-hidden" => "true"]);
            yield " <span dir=\"ltr\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "current_user", [], "any", false, false, false, 51), "@"), "html", null, true);
            yield "</span>
            </a>
          </li>
          <li><hr class=\"dropdown-divider\"></li>
          <li>
            <a class=\"dropdown-item disableAjax\" href=\"";
            // line 56
            yield PhpMyAdmin\Html\MySQLDocumentation::getDocumentationLink("index");
            yield "\" target=\"_blank\" rel=\"noopener noreferrer\">
              ";
            // line 57
            yield PhpMyAdmin\Html\Generator::getIcon("b_docs", \_gettext("phpMyAdmin documentation"));
            yield "
            </a>
          </li>
          <li>
            <a class=\"dropdown-item disableAjax\" href=\"";
            // line 61
            yield PhpMyAdmin\Util::getDocuURL(CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "is_mariadb", [], "any", false, false, false, 61));
            yield "\" target=\"_blank\" rel=\"noopener noreferrer\">
              ";
            // line 62
            yield PhpMyAdmin\Html\Generator::getIcon("b_sqlhelp", ((CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "is_mariadb", [], "any", false, false, false, 62)) ? (\_gettext("MariaDB documentation")) : (\_gettext("MySQL documentation"))));
            yield "
            </a>
          </li>
          <li><hr class=\"dropdown-divider\"></li>
          ";
            // line 66
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "theme_color_modes", [], "any", false, false, false, 66)) > 1)) {
                // line 67
                yield "            <li>
              <form method=\"post\" action=\"";
                // line 68
                yield PhpMyAdmin\Url::getFromRoute("/themes/set");
                yield "\" class=\"dropdown-item py-0 disableAjax\">
                ";
                // line 69
                yield PhpMyAdmin\Url::getHiddenInputs();
                yield "
                <input type=\"hidden\" name=\"set_theme\" value=\"";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "theme_id", [], "any", false, false, false, 70), "html", null, true);
                yield "\">
                <div class=\"row row-cols-lg-auto align-items-center flex-nowrap\">
                  <div class=\"col-12\">
                    <label class=\"col-form-label\" for=\"themeColorModeToggle\">";
                // line 73
                yield PhpMyAdmin\Html\Generator::getIcon("s_theme", \_gettext("Appearance:"));
                yield "</label>
                  </div>
                  <div class=\"col-12\">
                    <select class=\"form-select form-select-sm\" name=\"themeColorMode\" id=\"themeColorModeToggle\" aria-label=\"";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Color mode for the theme"), "html", null, true);
                yield "\">
                      ";
                // line 77
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "theme_color_modes", [], "any", false, false, false, 77));
                foreach ($context['_seq'] as $context["_key"] => $context["color_mode"]) {
                    // line 78
                    yield "                        <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["color_mode"], "html", null, true);
                    yield "\"";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "theme_color_mode", [], "any", false, false, false, 78) == $context["color_mode"])) ? (" selected") : (""));
                    yield ">";
                    // line 79
                    if (($context["color_mode"] == "light")) {
                        // line 80
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Light color mode of the theme", "Light"), "html", null, true);
                    } elseif ((                    // line 81
$context["color_mode"] == "dark")) {
                        // line 82
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Dark color mode of the theme", "Dark"), "html", null, true);
                    } else {
                        // line 84
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), $context["color_mode"]), "html", null, true);
                    }
                    // line 86
                    yield "</option>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['color_mode'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                yield "                    </select>
                  </div>
                </div>
              </form>
            </li>
          ";
            }
            // line 94
            yield "          <li>
            <a class=\"dropdown-item disableAjax\" href=\"";
            // line 95
            yield PhpMyAdmin\Url::getFromRoute("/preferences/manage");
            yield "\">";
            yield PhpMyAdmin\Html\Generator::getIcon("s_cog", \_gettext("Settings"));
            yield "</a>
          </li>
          <li><hr class=\"dropdown-divider\"></li>
          <li>
            <a class=\"dropdown-item logout disableAjax\" href=\"";
            // line 99
            yield PhpMyAdmin\Url::getFromRoute("/logout");
            yield "\">";
            yield PhpMyAdmin\Html\Generator::getIcon("s_loggoff", \_gettext("Log out"));
            yield "</a>
          </li>
        </ul>
      </div>
    </div>

    <div class=\"col-12\">
      <span id=\"lock_page_icon\"></span>
      <span id=\"page_settings_icon\">
          ";
            // line 108
            yield PhpMyAdmin\Html\Generator::getImage("s_cog", \_gettext("Page-related settings"));
            yield "
        </span>
      <a id=\"goto_pagetop\" href=\"#\">";
            // line 110
            yield PhpMyAdmin\Html\Generator::getImage("s_top", \_gettext("Click on the bar to scroll to top of page"));
            yield "</a>
    </div>
  </div>
";
        }
        // line 114
        yield "
";
        // line 115
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "console", [], "any", false, false, false, 115);
        yield "

<div id=\"page_content\">
  ";
        // line 118
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "messages", [], "any", false, false, false, 118);
        // line 120
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "is_logged_in", [], "any", false, false, false, 120)) {
            // line 121
            yield Twig\Extension\CoreExtension::include($this->env, $context, "modals/preview_sql_modal.twig");
            yield "
    ";
            // line 122
            yield Twig\Extension\CoreExtension::include($this->env, $context, "modals/enum_set_editor.twig");
            yield "
    ";
            // line 123
            yield Twig\Extension\CoreExtension::include($this->env, $context, "modals/create_view.twig");
        }
        // line 126
        yield ($context["content"] ?? null);
        yield "
</div>

";
        // line 129
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["footer"] ?? null), "is_minimal", [], "any", false, false, false, 129)) {
            // line 130
            yield "  ";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["footer"] ?? null), "self_url", [], "any", false, false, false, 130))) {
                // line 131
                yield "    <div id=\"selflink\" class=\"d-print-none\">
      <a href=\"";
                // line 132
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["footer"] ?? null), "self_url", [], "any", false, false, false, 132), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Open new phpMyAdmin window"), "html", null, true);
                yield "\" target=\"_blank\" rel=\"noopener noreferrer\">
        ";
                // line 133
                if (PhpMyAdmin\Util::showIcons("TabsMode")) {
                    // line 134
                    yield "          ";
                    yield PhpMyAdmin\Html\Generator::getImage("window-new", \_gettext("Open new phpMyAdmin window"));
                    yield "
        ";
                } else {
                    // line 136
                    yield "          ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Open new phpMyAdmin window"), "html", null, true);
                    yield "
        ";
                }
                // line 138
                yield "      </a>
    </div>
  ";
            }
            // line 141
            yield "
  <div class=\"clearfloat d-print-none\" id=\"pma_errors\">
    ";
            // line 143
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["footer"] ?? null), "error_messages", [], "any", false, false, false, 143);
            yield "
  </div>

  ";
            // line 146
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["footer"] ?? null), "scripts", [], "any", false, false, false, 146);
            yield "

  ";
            // line 148
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["footer"] ?? null), "is_demo", [], "any", false, false, false, 148)) {
                // line 149
                yield "    <div id=\"pma_demo\" class=\"d-print-none\">
      ";
                // line 150
                $_v2 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 151
                    yield "        <a href=\"";
                    yield PhpMyAdmin\Url::getFromRoute("/");
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("phpMyAdmin Demo Server"), "html", null, true);
                    yield ":</a>
        ";
                    // line 152
                    if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["footer"] ?? null), "git_revision_info", [], "any", false, false, false, 152))) {
                        // line 153
                        yield "          ";
                        $context["revision_info"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                            // line 154
                            yield "<a target=\"_blank\" rel=\"noopener noreferrer\" href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Core::linkURL(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["footer"] ?? null), "git_revision_info", [], "any", false, false, false, 154), "revisionUrl", [], "any", false, false, false, 154)), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["footer"] ?? null), "git_revision_info", [], "any", false, false, false, 154), "revision", [], "any", false, false, false, 154), "html", null, true);
                            yield "</a>";
                            yield from [];
                        })())) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 156
                        yield "          ";
                        $context["branch_info"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                            // line 157
                            yield "<a target=\"_blank\" rel=\"noopener noreferrer\" href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Core::linkURL(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["footer"] ?? null), "git_revision_info", [], "any", false, false, false, 157), "branchUrl", [], "any", false, false, false, 157)), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["footer"] ?? null), "git_revision_info", [], "any", false, false, false, 157), "branch", [], "any", false, false, false, 157), "html", null, true);
                            yield "</a>";
                            yield from [];
                        })())) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 159
                        yield "          ";
                        yield Twig\Extension\CoreExtension::sprintf(\_gettext("Currently running Git revision %1\$s from the %2\$s branch."), ($context["revision_info"] ?? null), ($context["branch_info"] ?? null));
                        yield "
        ";
                    } else {
                        // line 161
                        yield "          ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Git information missing!"), "html", null, true);
                        yield "
        ";
                    }
                    // line 163
                    yield "      ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 150
                yield $this->env->getFilter('notice')->getCallable()($_v2);
                // line 164
                yield "    </div>
  ";
            }
            // line 166
            yield "
  ";
            // line 167
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["footer"] ?? null), "footer", [], "any", false, false, false, 167);
            yield "
";
        }
        // line 169
        yield "</body>
</html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.twig";
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
        return array (  456 => 169,  451 => 167,  448 => 166,  444 => 164,  442 => 150,  438 => 163,  432 => 161,  426 => 159,  418 => 157,  415 => 156,  407 => 154,  404 => 153,  402 => 152,  395 => 151,  393 => 150,  390 => 149,  388 => 148,  383 => 146,  377 => 143,  373 => 141,  368 => 138,  362 => 136,  356 => 134,  354 => 133,  348 => 132,  345 => 131,  342 => 130,  340 => 129,  334 => 126,  331 => 123,  327 => 122,  323 => 121,  321 => 120,  319 => 118,  313 => 115,  310 => 114,  303 => 110,  298 => 108,  284 => 99,  275 => 95,  272 => 94,  264 => 88,  257 => 86,  254 => 84,  251 => 82,  249 => 81,  247 => 80,  245 => 79,  239 => 78,  235 => 77,  231 => 76,  225 => 73,  219 => 70,  215 => 69,  211 => 68,  208 => 67,  206 => 66,  199 => 62,  195 => 61,  188 => 57,  184 => 56,  174 => 51,  170 => 50,  165 => 47,  163 => 46,  155 => 41,  153 => 40,  150 => 39,  144 => 36,  141 => 35,  139 => 34,  136 => 33,  132 => 31,  130 => 30,  125 => 28,  121 => 27,  117 => 26,  113 => 25,  107 => 22,  103 => 21,  95 => 20,  89 => 19,  83 => 18,  77 => 17,  73 => 16,  68 => 13,  65 => 11,  63 => 10,  59 => 9,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base.twig", "C:\\Pirulug\\WAMP\\phpMyAdmin\\resources\\templates\\base.twig");
    }
}
