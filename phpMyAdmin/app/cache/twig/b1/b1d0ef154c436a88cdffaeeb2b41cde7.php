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

/* home/index.twig */
class __TwigTemplate_94fdc14e3f6d804afe56450b66573af4 extends Template
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
        if (($context["is_git_revision"] ?? null)) {
            // line 2
            yield "  <div id=\"is_git_revision\"></div>
";
        }
        // line 4
        yield "
";
        // line 5
        yield ($context["message"] ?? null);
        yield "

";
        // line 7
        yield ($context["partial_logout"] ?? null);
        yield "

<div id=\"maincontainer\">
  ";
        // line 10
        yield ($context["sync_favorite_tables"] ?? null);
        yield "
  <div class=\"container-fluid\">
    <div class=\"row mb-3\">
      <div class=\"col-lg-7 col-12\">
        ";
        // line 14
        if (($context["has_server"] ?? null)) {
            // line 15
            yield "          ";
            if (($context["is_demo"] ?? null)) {
                // line 16
                yield "            <div class=\"card mt-4\">
              <div class=\"card-header\">
                ";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("phpMyAdmin Demo Server"), "html", null, true);
                yield "
              </div>
              <div class=\"card-body\">
                ";
                // line 21
                $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 22
                    yield "                  ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("You are using the demo server. You can do anything here, but please do not change root, debian-sys-maint and pma users. More information is available at %s."), "html", null, true);
                    yield "
                ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 21
                yield Twig\Extension\CoreExtension::sprintf($_v0, (("<a href=\"" . PhpMyAdmin\Url::getFromRoute("/url", ["url" => "https://demo.phpmyadmin.net/"])) . "\" target=\"_blank\" rel=\"noopener noreferrer\">demo.phpmyadmin.net</a>"));
                // line 24
                yield "              </div>
            </div>
          ";
            }
            // line 27
            yield "
            <div class=\"card mt-4\">
              <div class=\"card-header\">
                ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("General settings"), "html", null, true);
            yield "
              </div>
              <ul class=\"list-group list-group-flush\">
                ";
            // line 33
            if (($context["has_server_selection"] ?? null)) {
                // line 34
                yield "                  <li id=\"li_select_server\" class=\"list-group-item\">
                    ";
                // line 35
                yield PhpMyAdmin\Html\Generator::getImage("s_host");
                yield "
                    ";
                // line 36
                yield ($context["server_selection"] ?? null);
                yield "
                  </li>
                ";
            }
            // line 39
            yield "
                ";
            // line 40
            if ((($context["server"] ?? null) > 0)) {
                // line 41
                yield "                  ";
                if (($context["has_change_password_link"] ?? null)) {
                    // line 42
                    yield "                    <li id=\"li_change_password\" class=\"list-group-item\">
                      <a href=\"";
                    // line 43
                    yield PhpMyAdmin\Url::getFromRoute("/user-password");
                    yield "\" id=\"change_password_anchor\" class=\"ajax\">
                        ";
                    // line 44
                    yield PhpMyAdmin\Html\Generator::getIcon("s_passwd", \_gettext("Change password"), true);
                    yield "
                      </a>
                      ";
                    // line 46
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "modals/change_password.twig");
                    yield "
                    </li>
                  ";
                }
                // line 49
                yield "
                  <li id=\"li_select_mysql_collation\" class=\"list-group-item\">
                    <form method=\"post\" action=\"";
                // line 51
                yield PhpMyAdmin\Url::getFromRoute("/collation-connection");
                yield "\" class=\"row row-cols-lg-auto align-items-center disableAjax\">
                      ";
                // line 52
                yield PhpMyAdmin\Url::getHiddenInputs("", "", "collation_connection");
                yield "
                      <div class=\"col-12\">
                        <label for=\"collationConnectionSelect\" class=\"col-form-label\">
                          ";
                // line 55
                yield PhpMyAdmin\Html\Generator::getImage("s_asci");
                yield "
                          ";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Server connection collation:"), "html", null, true);
                yield "
                          ";
                // line 57
                yield PhpMyAdmin\Html\MySQLDocumentation::show("charset-connection");
                yield "
                        </label>
                      </div>
                      ";
                // line 60
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["charsets"] ?? null))) {
                    // line 61
                    yield "                      <div class=\"col-12\">
                        <select lang=\"en\" dir=\"ltr\" name=\"collation_connection\" id=\"collationConnectionSelect\" class=\"form-select autosubmit\">
                          <option value=\"\">";
                    // line 63
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Collation"), "html", null, true);
                    yield "</option>
                          <option value=\"\"></option>
                          ";
                    // line 65
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["charsets"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
                        // line 66
                        yield "                            <optgroup label=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "name", [], "any", false, false, false, 66), "html", null, true);
                        yield "\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "description", [], "any", false, false, false, 66), "html", null, true);
                        yield "\">
                              ";
                        // line 67
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "collations", [], "any", false, false, false, 67));
                        foreach ($context['_seq'] as $context["_key"] => $context["collation"]) {
                            // line 68
                            yield "                                <option value=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 68), "html", null, true);
                            yield "\" title=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "description", [], "any", false, false, false, 68), "html", null, true);
                            yield "\"";
                            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "is_selected", [], "any", false, false, false, 68)) ? (" selected") : (""));
                            yield ">";
                            // line 69
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 69), "html", null, true);
                            // line 70
                            yield "</option>
                              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['collation'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 72
                        yield "                            </optgroup>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['charset'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 74
                    yield "                        </select>
                      </div>
                      ";
                }
                // line 77
                yield "                    </form>
                  </li>

                  <li id=\"li_user_preferences\" class=\"list-group-item\">
                    <a href=\"";
                // line 81
                yield PhpMyAdmin\Url::getFromRoute("/preferences/manage");
                yield "\">
                      ";
                // line 82
                yield PhpMyAdmin\Html\Generator::getIcon("b_tblops", \_gettext("More settings"), true);
                yield "
                    </a>
                  </li>
                ";
            }
            // line 86
            yield "              </ul>
            </div>
          ";
        }
        // line 89
        yield "
            ";
        // line 90
        if (( !Twig\Extension\CoreExtension::testEmpty(($context["available_languages"] ?? null)) || ($context["has_theme_manager"] ?? null))) {
            // line 91
            yield "            <div class=\"card mt-4\">
              <div class=\"card-header\">
                ";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Appearance settings"), "html", null, true);
            yield "
              </div>
              <ul class=\"list-group list-group-flush\">
                ";
            // line 96
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["available_languages"] ?? null))) {
                // line 97
                yield "                  <li id=\"li_select_lang\" class=\"list-group-item\">
                    <form method=\"get\" action=\"";
                // line 98
                yield PhpMyAdmin\Url::getFromRoute("/");
                yield "\" class=\"row row-cols-lg-auto align-items-center disableAjax\">
                      ";
                // line 99
                yield PhpMyAdmin\Url::getHiddenInputs(["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)]);
                yield "
                      <div class=\"col-12\">
                        <label for=\"languageSelect\" class=\"col-form-label text-nowrap\">
                          ";
                // line 102
                yield PhpMyAdmin\Html\Generator::getImage("s_lang");
                yield "
                          ";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Language"), "html", null, true);
                yield "
                          ";
                // line 104
                if ((\_gettext("Language") != "Language")) {
                    // line 105
                    yield "                            ";
                    // line 107
                    yield "                            <i lang=\"en\" dir=\"ltr\">(Language)</i>
                          ";
                }
                // line 109
                yield "                          ";
                yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("faq", "faq7-2");
                yield "
                        </label>
                      </div>
                      <div class=\"col-12\">
                        <select name=\"lang\" class=\"form-select autosubmit w-auto\" lang=\"en\" dir=\"ltr\" id=\"languageSelect\">
                          ";
                // line 114
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["available_languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 115
                    yield "                            <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["language"], "getCode", [], "method", false, false, false, 115)), "html", null, true);
                    yield "\"";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "isActive", [], "method", false, false, false, 115)) ? (" selected") : (""));
                    yield ">";
                    // line 116
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "getName", [], "method", false, false, false, 116);
                    // line 117
                    yield "</option>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 119
                yield "                        </select>
                      </div>
                    </form>
                  </li>
                ";
            }
            // line 124
            yield "
                ";
            // line 125
            if (($context["has_theme_manager"] ?? null)) {
                // line 126
                yield "                  <li id=\"li_select_theme\" class=\"list-group-item\">
                    <form method=\"post\" action=\"";
                // line 127
                yield PhpMyAdmin\Url::getFromRoute("/themes/set");
                yield "\" class=\"row row-cols-lg-auto align-items-center disableAjax\">
                      ";
                // line 128
                yield PhpMyAdmin\Url::getHiddenInputs();
                yield "
                      <div class=\"col-12\">
                        <label for=\"themeSelect\" class=\"col-form-label\">
                          ";
                // line 131
                yield PhpMyAdmin\Html\Generator::getIcon("s_theme", \_gettext("Theme"));
                yield "
                        </label>
                      </div>
                      <div class=\"col-12\">
                        <div class=\"input-group\">
                          <select name=\"set_theme\" class=\"form-select autosubmit\" lang=\"en\" dir=\"ltr\" id=\"themeSelect\">
                            ";
                // line 137
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["themes"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                    // line 138
                    yield "                              <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "id", [], "any", false, false, false, 138), "html", null, true);
                    yield "\"";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "is_active", [], "any", false, false, false, 138)) ? (" selected") : (""));
                    yield ">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "name", [], "any", false, false, false, 138), "html", null, true);
                    yield "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['theme'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 140
                yield "                          </select>
                          <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-toggle=\"modal\" data-bs-target=\"#themesModal\">
                            ";
                // line 142
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("View all themes", "View all"), "html", null, true);
                yield "
                          </button>
                        </div>
                      </div>

                      ";
                // line 147
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["themes"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                    // line 148
                    yield "                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "is_active", [], "any", false, false, false, 148) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "color_modes", [], "any", false, false, false, 148)) > 1))) {
                        // line 149
                        yield "                          <div class=\"col-12\">
                            <select class=\"form-select autosubmit\" name=\"themeColorMode\" aria-label=\"";
                        // line 150
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Color mode for the theme"), "html", null, true);
                        yield "\">
                              ";
                        // line 151
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "color_modes", [], "any", false, false, false, 151));
                        foreach ($context['_seq'] as $context["_key"] => $context["color_mode"]) {
                            // line 152
                            yield "                                <option value=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["color_mode"], "html", null, true);
                            yield "\"";
                            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "color_mode", [], "any", false, false, false, 152) == $context["color_mode"])) ? (" selected") : (""));
                            yield ">";
                            // line 153
                            if (($context["color_mode"] == "light")) {
                                // line 154
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Light color mode of the theme", "Light"), "html", null, true);
                            } elseif ((                            // line 155
$context["color_mode"] == "dark")) {
                                // line 156
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Dark color mode of the theme", "Dark"), "html", null, true);
                            } else {
                                // line 158
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), $context["color_mode"]), "html", null, true);
                            }
                            // line 160
                            yield "</option>
                              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['color_mode'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 162
                        yield "                            </select>
                          </div>
                        ";
                    }
                    // line 165
                    yield "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['theme'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 166
                yield "                    </form>
                  </li>
                ";
            }
            // line 169
            yield "              </ul>
            </div>
            ";
        }
        // line 172
        yield "          </div>

      <div class=\"col-lg-5 col-12\">
        ";
        // line 175
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["database_server"] ?? null))) {
            // line 176
            yield "          <div class=\"card mt-4\">
            <div class=\"card-header\">
              ";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Database server"), "html", null, true);
            yield "
            </div>
            <ul class=\"list-group list-group-flush\">
              <li class=\"list-group-item\">
                ";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Server:"), "html", null, true);
            yield "
                ";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["database_server"] ?? null), "host", [], "any", false, false, false, 183), "html", null, true);
            yield "
              </li>
              <li class=\"list-group-item\">
                ";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Server type:"), "html", null, true);
            yield "
                ";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["database_server"] ?? null), "type", [], "any", false, false, false, 187), "html", null, true);
            yield "
              </li>
              <li class=\"list-group-item\">
                ";
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Server connection:"), "html", null, true);
            yield "
                ";
            // line 191
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["database_server"] ?? null), "connection", [], "any", false, false, false, 191);
            yield "
              </li>
              <li class=\"list-group-item\">
                ";
            // line 194
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Server version:"), "html", null, true);
            yield "
                ";
            // line 195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["database_server"] ?? null), "version", [], "any", false, false, false, 195), "html", null, true);
            yield "
              </li>
              <li class=\"list-group-item\">
                ";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("User:"), "html", null, true);
            yield "
                ";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["database_server"] ?? null), "user", [], "any", false, false, false, 199), "html", null, true);
            yield "
              </li>
              <li class=\"list-group-item\">
                ";
            // line 202
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Server charset:"), "html", null, true);
            yield "
                <span lang=\"en\" dir=\"ltr\">
                  ";
            // line 204
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["database_server"] ?? null), "charset", [], "any", false, false, false, 204), "html", null, true);
            yield "
                </span>
              </li>
            </ul>
          </div>
        ";
        }
        // line 210
        yield "
        ";
        // line 211
        if (( !Twig\Extension\CoreExtension::testEmpty(($context["web_server"] ?? null)) || ($context["show_php_info"] ?? null))) {
            // line 212
            yield "          <div class=\"card mt-4\">
            <div class=\"card-header\">
              ";
            // line 214
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Web server"), "html", null, true);
            yield "
            </div>
            <ul class=\"list-group list-group-flush\">
              ";
            // line 217
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["web_server"] ?? null))) {
                // line 218
                yield "                ";
                if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["web_server"] ?? null), "software", [], "any", false, false, false, 218))) {
                    // line 219
                    yield "                <li class=\"list-group-item\">
                  ";
                    // line 220
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["web_server"] ?? null), "software", [], "any", false, false, false, 220), "html", null, true);
                    yield "
                </li>
                ";
                }
                // line 223
                yield "                <li class=\"list-group-item\" id=\"li_mysql_client_version\">
                  ";
                // line 224
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Database client version:"), "html", null, true);
                yield "
                  ";
                // line 225
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["web_server"] ?? null), "database", [], "any", false, false, false, 225), "html", null, true);
                yield "
                </li>
                <li class=\"list-group-item\">
                  ";
                // line 228
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("PHP extension:"), "html", null, true);
                yield "
                  ";
                // line 229
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["web_server"] ?? null), "php_extensions", [], "any", false, false, false, 229));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 230
                    yield "                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["extension"], "html", null, true);
                    yield "
                    ";
                    // line 231
                    yield PhpMyAdmin\Html\Generator::showPHPDocumentation((("book." . $context["extension"]) . ".php"));
                    yield "
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['extension'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 233
                yield "                </li>
                <li class=\"list-group-item\">
                  ";
                // line 235
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("PHP version:"), "html", null, true);
                yield "
                  ";
                // line 236
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["web_server"] ?? null), "php_version", [], "any", false, false, false, 236), "html", null, true);
                yield "
                </li>
              ";
            }
            // line 239
            yield "              ";
            if (($context["show_php_info"] ?? null)) {
                // line 240
                yield "                <li class=\"list-group-item\">
                  <a href=\"";
                // line 241
                yield PhpMyAdmin\Url::getFromRoute("/phpinfo");
                yield "\" target=\"_blank\" rel=\"noopener noreferrer\">
                    ";
                // line 242
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Show PHP information"), "html", null, true);
                yield "
                  </a>
                </li>
              ";
            }
            // line 246
            yield "            </ul>
          </div>
        ";
        }
        // line 249
        yield "
          <div class=\"card mt-4\">
            <div class=\"card-header\">
              phpMyAdmin
            </div>
            <ul class=\"list-group list-group-flush\">
              <li id=\"li_pma_version\" class=\"list-group-item";
        // line 255
        yield ((($context["is_version_checked"] ?? null)) ? (" jsversioncheck") : (""));
        yield "\">
                ";
        // line 256
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Version information:"), "html", null, true);
        yield "
                <span class=\"version\">";
        // line 257
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pma"] ?? null), "version", [], "any", false, false, false, 257), "html", null, true);
        yield "</span>
              </li>
              <li class=\"list-group-item\">
                <a href=\"";
        // line 260
        yield PhpMyAdmin\Html\MySQLDocumentation::getDocumentationLink("index");
        yield "\" target=\"_blank\" rel=\"noopener noreferrer\">
                  ";
        // line 261
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Documentation"), "html", null, true);
        yield "
                </a>
              </li>
              <li class=\"list-group-item\">
                <a href=\"";
        // line 265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Core::linkURL("https://www.phpmyadmin.net/"), "html", null, true);
        yield "\" target=\"_blank\" rel=\"noopener noreferrer\">
                  ";
        // line 266
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Official Homepage"), "html", null, true);
        yield "
                </a>
              </li>
              <li class=\"list-group-item\">
                <a href=\"";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Core::linkURL("https://www.phpmyadmin.net/contribute/"), "html", null, true);
        yield "\" target=\"_blank\" rel=\"noopener noreferrer\">
                  ";
        // line 271
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Contribute"), "html", null, true);
        yield "
                </a>
              </li>
              <li class=\"list-group-item\">
                <a href=\"";
        // line 275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Core::linkURL("https://www.phpmyadmin.net/support/"), "html", null, true);
        yield "\" target=\"_blank\" rel=\"noopener noreferrer\">
                  ";
        // line 276
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Get support"), "html", null, true);
        yield "
                </a>
              </li>
              <li class=\"list-group-item\">
                <a href=\"";
        // line 280
        yield PhpMyAdmin\Url::getFromRoute("/changelog");
        yield "\" target=\"_blank\">
                  ";
        // line 281
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("List of changes"), "html", null, true);
        yield "
                </a>
              </li>
              <li class=\"list-group-item\">
                <a href=\"";
        // line 285
        yield PhpMyAdmin\Url::getFromRoute("/license");
        yield "\" target=\"_blank\">
                  ";
        // line 286
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("License"), "html", null, true);
        yield "
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      ";
        // line 294
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 295
            yield "        <div class=\"alert ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["error"], "severity", [], "any", false, false, false, 295) == "warning")) ? ("alert-warning") : ("alert-info"));
            yield "\" role=\"alert\">
          ";
            // line 296
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["error"], "severity", [], "any", false, false, false, 296) == "warning")) {
                // line 297
                yield "            ";
                yield PhpMyAdmin\Html\Generator::getImage("s_attention", \_gettext("Warning"));
                yield "
          ";
            } else {
                // line 299
                yield "            ";
                yield PhpMyAdmin\Html\Generator::getImage("s_notice", \_gettext("Notice"));
                yield "
          ";
            }
            // line 301
            yield "          ";
            yield PhpMyAdmin\Sanitize::convertBBCode(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 301));
            yield "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 304
        yield "    </div>
  </div>

";
        // line 307
        if (($context["has_theme_manager"] ?? null)) {
            // line 308
            yield "  <div class=\"modal fade\" id=\"themesModal\" tabindex=\"-1\" aria-labelledby=\"themesModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"themesModalLabel\">";
            // line 312
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("phpMyAdmin Themes"), "html", null, true);
            yield "</h5>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
            // line 313
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
            yield "\"></button>
        </div>
        <div class=\"modal-body\">
          <div class=\"spinner-border\" role=\"status\">
            <span class=\"visually-hidden\">";
            // line 317
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Loading…"), "html", null, true);
            yield "</span>
          </div>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
            // line 321
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
            yield "</button>
          <a href=\"";
            // line 322
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Core::linkURL("https://www.phpmyadmin.net/themes/"), "html", null, true);
            yield "#pma_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(($context["phpmyadmin_major_version"] ?? null), ["." => "_"]), "html", null, true);
            yield "\" class=\"btn btn-primary\" rel=\"noopener noreferrer\" target=\"_blank\">
            ";
            // line 323
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Get more themes!"), "html", null, true);
            yield "
          </a>
        </div>
      </div>
    </div>
  </div>
";
        }
        // line 330
        yield "
";
        // line 331
        yield ($context["config_storage_message"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.twig";
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
        return array (  818 => 331,  815 => 330,  805 => 323,  799 => 322,  795 => 321,  788 => 317,  781 => 313,  777 => 312,  771 => 308,  769 => 307,  764 => 304,  754 => 301,  748 => 299,  742 => 297,  740 => 296,  735 => 295,  731 => 294,  720 => 286,  716 => 285,  709 => 281,  705 => 280,  698 => 276,  694 => 275,  687 => 271,  683 => 270,  676 => 266,  672 => 265,  665 => 261,  661 => 260,  655 => 257,  651 => 256,  647 => 255,  639 => 249,  634 => 246,  627 => 242,  623 => 241,  620 => 240,  617 => 239,  611 => 236,  607 => 235,  603 => 233,  595 => 231,  590 => 230,  586 => 229,  582 => 228,  576 => 225,  572 => 224,  569 => 223,  563 => 220,  560 => 219,  557 => 218,  555 => 217,  549 => 214,  545 => 212,  543 => 211,  540 => 210,  531 => 204,  526 => 202,  520 => 199,  516 => 198,  510 => 195,  506 => 194,  500 => 191,  496 => 190,  490 => 187,  486 => 186,  480 => 183,  476 => 182,  469 => 178,  465 => 176,  463 => 175,  458 => 172,  453 => 169,  448 => 166,  442 => 165,  437 => 162,  430 => 160,  427 => 158,  424 => 156,  422 => 155,  420 => 154,  418 => 153,  412 => 152,  408 => 151,  404 => 150,  401 => 149,  398 => 148,  394 => 147,  386 => 142,  382 => 140,  369 => 138,  365 => 137,  356 => 131,  350 => 128,  346 => 127,  343 => 126,  341 => 125,  338 => 124,  331 => 119,  324 => 117,  322 => 116,  316 => 115,  312 => 114,  303 => 109,  299 => 107,  297 => 105,  295 => 104,  291 => 103,  287 => 102,  281 => 99,  277 => 98,  274 => 97,  272 => 96,  266 => 93,  262 => 91,  260 => 90,  257 => 89,  252 => 86,  245 => 82,  241 => 81,  235 => 77,  230 => 74,  223 => 72,  216 => 70,  214 => 69,  206 => 68,  202 => 67,  195 => 66,  191 => 65,  186 => 63,  182 => 61,  180 => 60,  174 => 57,  170 => 56,  166 => 55,  160 => 52,  156 => 51,  152 => 49,  146 => 46,  141 => 44,  137 => 43,  134 => 42,  131 => 41,  129 => 40,  126 => 39,  120 => 36,  116 => 35,  113 => 34,  111 => 33,  105 => 30,  100 => 27,  95 => 24,  93 => 21,  86 => 22,  84 => 21,  78 => 18,  74 => 16,  71 => 15,  69 => 14,  62 => 10,  56 => 7,  51 => 5,  48 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "home/index.twig", "C:\\Pirulug\\WAMP\\phpMyAdmin\\resources\\templates\\home\\index.twig");
    }
}
