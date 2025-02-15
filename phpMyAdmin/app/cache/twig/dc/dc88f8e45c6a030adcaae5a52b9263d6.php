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

/* columns_definitions/table_fields_definitions.twig */
class __TwigTemplate_4fe665f0546700487eb2a9a108e211fe extends Template
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
        yield "<div class=\"responsivetable\">
<table id=\"table_columns\" class=\"table table-striped caption-top align-middle mb-0 noclick\">
    <caption>
        ";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Structure"), "html", null, true);
        yield "
        ";
        // line 5
        yield PhpMyAdmin\Html\MySQLDocumentation::show("CREATE_TABLE");
        yield "
    </caption>
    <tr>
        <th>
            ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Name"), "html", null, true);
        yield "
        </th>
        <th>
            ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Type"), "html", null, true);
        yield "
            ";
        // line 13
        yield PhpMyAdmin\Html\MySQLDocumentation::show("data-types");
        yield "
        </th>
        <th>
            ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Length/Values"), "html", null, true);
        yield "
            ";
        // line 17
        yield PhpMyAdmin\Html\Generator::showHint(\_gettext("If column type is \"enum\" or \"set\", please enter the values using this format: 'a','b','c'…<br>If you ever need to put a backslash (\"\\\") or a single quote (\"'\") amongst those values, precede it with a backslash (for example '\\\\xyz' or 'a\\'b')."));
        yield "
        </th>
        <th>
            ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Default"), "html", null, true);
        yield "
            ";
        // line 21
        yield PhpMyAdmin\Html\Generator::showHint(\_gettext("For default values, please enter just a single value, without backslash escaping or quotes, using this format: a"));
        yield "
        </th>
        <th>
            ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Collation"), "html", null, true);
        yield "
        </th>
        <th>
            ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Attributes"), "html", null, true);
        yield "
        </th>
        <th>
            ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Null"), "html", null, true);
        yield "
        </th>

        ";
        // line 34
        yield "        ";
        if ((array_key_exists("change_column", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["change_column"]) || array_key_exists("change_column", $context) ? $context["change_column"] : (function () { throw new RuntimeError('Variable "change_column" does not exist.', 34, $this->source); })())))) {
            // line 35
            yield "            <th>
                ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Adjust privileges"), "html", null, true);
            yield "
                ";
            // line 37
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("faq", "faq6-39");
            yield "
            </th>
        ";
        }
        // line 40
        yield "
        ";
        // line 44
        yield "        ";
        if ( !(isset($context["is_backup"]) || array_key_exists("is_backup", $context) ? $context["is_backup"] : (function () { throw new RuntimeError('Variable "is_backup" does not exist.', 44, $this->source); })())) {
            // line 45
            yield "            <th>
                ";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Index"), "html", null, true);
            yield "
            </th>
        ";
        }
        // line 49
        yield "
        <th>
            <abbr title=\"AUTO_INCREMENT\">A_I</abbr>
        </th>
        <th>
            ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Comments"), "html", null, true);
        yield "
        </th>

        ";
        // line 57
        if ((isset($context["is_virtual_columns_supported"]) || array_key_exists("is_virtual_columns_supported", $context) ? $context["is_virtual_columns_supported"] : (function () { throw new RuntimeError('Variable "is_virtual_columns_supported" does not exist.', 57, $this->source); })())) {
            // line 58
            yield "            <th>
                ";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Virtuality"), "html", null, true);
            yield "
            </th>
        ";
        }
        // line 62
        yield "
        ";
        // line 63
        if (array_key_exists("fields_meta", $context)) {
            // line 64
            yield "            <th>
                ";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Move column"), "html", null, true);
            yield "
            </th>
        ";
        }
        // line 68
        yield "
        ";
        // line 69
        if (( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 69, $this->source); })()), "browserTransformationFeature", [], "any", false, false, false, 69)) && (isset($context["browse_mime"]) || array_key_exists("browse_mime", $context) ? $context["browse_mime"] : (function () { throw new RuntimeError('Variable "browse_mime" does not exist.', 69, $this->source); })()))) {
            // line 70
            yield "            <th>
                ";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Media type"), "html", null, true);
            yield "
            </th>
            <th>
                <a href=\"";
            // line 74
            yield PhpMyAdmin\Url::getFromRoute("/transformation/overview");
            yield "#transformation\" title=\"";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("List of available transformations and their options"), "html", null, true);
            // line 76
            yield "\" target=\"_blank\">
                    ";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Browser display transformation"), "html", null, true);
            yield "
                </a>
            </th>
            <th>
                ";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Browser display transformation options"), "html", null, true);
            yield "
                ";
            // line 82
            yield PhpMyAdmin\Html\Generator::showHint(\_gettext("Please enter the values for transformation options using this format: 'a', 100, b,'c'…<br>If you ever need to put a backslash (\"\\\") or a single quote (\"'\") amongst those values, precede it with a backslash (for example '\\\\xyz' or 'a\\'b')."));
            yield "
            </th>
            <th>
                <a href=\"";
            // line 85
            yield PhpMyAdmin\Url::getFromRoute("/transformation/overview");
            yield "#input_transformation\"
                   title=\"";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("List of available transformations and their options"), "html", null, true);
            yield "\"
                   target=\"_blank\">
                    ";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Input transformation"), "html", null, true);
            yield "
                </a>
            </th>
            <th>
                ";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Input transformation options"), "html", null, true);
            yield "
                ";
            // line 93
            yield PhpMyAdmin\Html\Generator::showHint(\_gettext("Please enter the values for transformation options using this format: 'a', 100, b,'c'…<br>If you ever need to put a backslash (\"\\\") or a single quote (\"'\") amongst those values, precede it with a backslash (for example '\\\\xyz' or 'a\\'b')."));
            yield "
            </th>
        ";
        }
        // line 96
        yield "    </tr>
    ";
        // line 97
        $context["options"] = ["" => "", "VIRTUAL" => "VIRTUAL"];
        // line 98
        yield "    ";
        if ((isset($context["supports_stored_keyword"]) || array_key_exists("supports_stored_keyword", $context) ? $context["supports_stored_keyword"] : (function () { throw new RuntimeError('Variable "supports_stored_keyword" does not exist.', 98, $this->source); })())) {
            // line 99
            yield "        ";
            $context["options"] = Twig\Extension\CoreExtension::merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 99, $this->source); })()), ["STORED" => "STORED"]);
            // line 100
            yield "    ";
        } else {
            // line 101
            yield "        ";
            $context["options"] = Twig\Extension\CoreExtension::merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 101, $this->source); })()), ["PERSISTENT" => "PERSISTENT"]);
            // line 102
            yield "    ";
        }
        // line 103
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["content_cells"]) || array_key_exists("content_cells", $context) ? $context["content_cells"] : (function () { throw new RuntimeError('Variable "content_cells" does not exist.', 103, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["content_row"]) {
            // line 104
            yield "        <tr>
            ";
            // line 105
            yield from $this->loadTemplate("columns_definitions/column_attributes.twig", "columns_definitions/table_fields_definitions.twig", 105)->unwrap()->yield(CoreExtension::toArray(Twig\Extension\CoreExtension::merge($context["content_row"], ["options" =>             // line 106
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 106, $this->source); })()), "change_column" =>             // line 107
(isset($context["change_column"]) || array_key_exists("change_column", $context) ? $context["change_column"] : (function () { throw new RuntimeError('Variable "change_column" does not exist.', 107, $this->source); })()), "is_virtual_columns_supported" =>             // line 108
(isset($context["is_virtual_columns_supported"]) || array_key_exists("is_virtual_columns_supported", $context) ? $context["is_virtual_columns_supported"] : (function () { throw new RuntimeError('Variable "is_virtual_columns_supported" does not exist.', 108, $this->source); })()), "browse_mime" =>             // line 109
(isset($context["browse_mime"]) || array_key_exists("browse_mime", $context) ? $context["browse_mime"] : (function () { throw new RuntimeError('Variable "browse_mime" does not exist.', 109, $this->source); })()), "max_rows" =>             // line 110
(isset($context["max_rows"]) || array_key_exists("max_rows", $context) ? $context["max_rows"] : (function () { throw new RuntimeError('Variable "max_rows" does not exist.', 110, $this->source); })()), "char_editing" =>             // line 111
(isset($context["char_editing"]) || array_key_exists("char_editing", $context) ? $context["char_editing"] : (function () { throw new RuntimeError('Variable "char_editing" does not exist.', 111, $this->source); })()), "attribute_types" =>             // line 112
(isset($context["attribute_types"]) || array_key_exists("attribute_types", $context) ? $context["attribute_types"] : (function () { throw new RuntimeError('Variable "attribute_types" does not exist.', 112, $this->source); })()), "privs_available" =>             // line 113
(isset($context["privs_available"]) || array_key_exists("privs_available", $context) ? $context["privs_available"] : (function () { throw new RuntimeError('Variable "privs_available" does not exist.', 113, $this->source); })()), "max_length" =>             // line 114
(isset($context["max_length"]) || array_key_exists("max_length", $context) ? $context["max_length"] : (function () { throw new RuntimeError('Variable "max_length" does not exist.', 114, $this->source); })()), "charsets" =>             // line 115
(isset($context["charsets"]) || array_key_exists("charsets", $context) ? $context["charsets"] : (function () { throw new RuntimeError('Variable "charsets" does not exist.', 115, $this->source); })()), "relation_parameters" =>             // line 116
(isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 116, $this->source); })())])));
            // line 118
            yield "        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['content_row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        yield "</table>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "columns_definitions/table_fields_definitions.twig";
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
        return array (  294 => 120,  287 => 118,  285 => 116,  284 => 115,  283 => 114,  282 => 113,  281 => 112,  280 => 111,  279 => 110,  278 => 109,  277 => 108,  276 => 107,  275 => 106,  274 => 105,  271 => 104,  266 => 103,  263 => 102,  260 => 101,  257 => 100,  254 => 99,  251 => 98,  249 => 97,  246 => 96,  240 => 93,  236 => 92,  229 => 88,  224 => 86,  220 => 85,  214 => 82,  210 => 81,  203 => 77,  200 => 76,  198 => 75,  195 => 74,  189 => 71,  186 => 70,  184 => 69,  181 => 68,  175 => 65,  172 => 64,  170 => 63,  167 => 62,  161 => 59,  158 => 58,  156 => 57,  150 => 54,  143 => 49,  137 => 46,  134 => 45,  131 => 44,  128 => 40,  122 => 37,  118 => 36,  115 => 35,  112 => 34,  106 => 30,  100 => 27,  94 => 24,  88 => 21,  84 => 20,  78 => 17,  74 => 16,  68 => 13,  64 => 12,  58 => 9,  51 => 5,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"responsivetable\">
<table id=\"table_columns\" class=\"table table-striped caption-top align-middle mb-0 noclick\">
    <caption>
        {{ t('Structure') }}
        {{ show_mysql_docu('CREATE_TABLE') }}
    </caption>
    <tr>
        <th>
            {{ t('Name') }}
        </th>
        <th>
            {{ t('Type') }}
            {{ show_mysql_docu('data-types') }}
        </th>
        <th>
            {{ t('Length/Values') }}
            {{ show_hint(t('If column type is \"enum\" or \"set\", please enter the values using this format: \\'a\\',\\'b\\',\\'c\\'…<br>If you ever need to put a backslash (\"\\\\\") or a single quote (\"\\'\") amongst those values, precede it with a backslash (for example \\'\\\\\\\\xyz\\' or \\'a\\\\\\'b\\').')) }}
        </th>
        <th>
            {{ t('Default') }}
            {{ show_hint(t('For default values, please enter just a single value, without backslash escaping or quotes, using this format: a')) }}
        </th>
        <th>
            {{ t('Collation') }}
        </th>
        <th>
            {{ t('Attributes') }}
        </th>
        <th>
            {{ t('Null') }}
        </th>

        {# Only for 'Edit' Column(s) #}
        {% if change_column is defined and change_column is not empty %}
            <th>
                {{ t('Adjust privileges') }}
                {{ show_docu('faq', 'faq6-39') }}
            </th>
        {% endif %}

        {# We could remove this 'if' and let the key information be shown and
           editable. However, for this to work, structure.lib.php must be
           modified to use the key fields, as tbl_addfield does. #}
        {% if not is_backup %}
            <th>
                {{ t('Index') }}
            </th>
        {% endif %}

        <th>
            <abbr title=\"AUTO_INCREMENT\">A_I</abbr>
        </th>
        <th>
            {{ t('Comments') }}
        </th>

        {% if is_virtual_columns_supported %}
            <th>
                {{ t('Virtuality') }}
            </th>
        {% endif %}

        {% if fields_meta is defined %}
            <th>
                {{ t('Move column') }}
            </th>
        {% endif %}

        {% if relation_parameters.browserTransformationFeature is not null and browse_mime %}
            <th>
                {{ t('Media type') }}
            </th>
            <th>
                <a href=\"{{ url('/transformation/overview') }}#transformation\" title=\"
                    {{- t('List of available transformations and their options') -}}
                    \" target=\"_blank\">
                    {{ t('Browser display transformation') }}
                </a>
            </th>
            <th>
                {{ t('Browser display transformation options') }}
                {{ show_hint(t('Please enter the values for transformation options using this format: \\'a\\', 100, b,\\'c\\'…<br>If you ever need to put a backslash (\"\\\\\") or a single quote (\"\\'\") amongst those values, precede it with a backslash (for example \\'\\\\\\\\xyz\\' or \\'a\\\\\\'b\\').')) }}
            </th>
            <th>
                <a href=\"{{ url('/transformation/overview') }}#input_transformation\"
                   title=\"{{ t('List of available transformations and their options') }}\"
                   target=\"_blank\">
                    {{ t('Input transformation') }}
                </a>
            </th>
            <th>
                {{ t('Input transformation options') }}
                {{ show_hint(t('Please enter the values for transformation options using this format: \\'a\\', 100, b,\\'c\\'…<br>If you ever need to put a backslash (\"\\\\\") or a single quote (\"\\'\") amongst those values, precede it with a backslash (for example \\'\\\\\\\\xyz\\' or \\'a\\\\\\'b\\').')) }}
            </th>
        {% endif %}
    </tr>
    {% set options = {'': '', 'VIRTUAL': 'VIRTUAL'} %}
    {% if supports_stored_keyword %}
        {% set options = options|merge({'STORED': 'STORED'}) %}
    {% else %}
        {% set options = options|merge({'PERSISTENT': 'PERSISTENT'}) %}
    {% endif %}
    {% for content_row in content_cells %}
        <tr>
            {% include 'columns_definitions/column_attributes.twig' with content_row|merge({
                'options': options,
                'change_column': change_column,
                'is_virtual_columns_supported': is_virtual_columns_supported,
                'browse_mime': browse_mime,
                'max_rows': max_rows,
                'char_editing': char_editing,
                'attribute_types': attribute_types,
                'privs_available': privs_available,
                'max_length': max_length,
                'charsets': charsets,
                'relation_parameters': relation_parameters
            }) only %}
        </tr>
    {% endfor %}
</table>
</div>
", "columns_definitions/table_fields_definitions.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/columns_definitions/table_fields_definitions.twig");
    }
}
