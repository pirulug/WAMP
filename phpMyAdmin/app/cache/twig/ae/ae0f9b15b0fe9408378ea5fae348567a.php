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

/* columns_definitions/column_attributes.twig */
class __TwigTemplate_3804f058f40ff7db85625ded3fa989a2 extends Template
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
        // line 2
        $context["ci"] = 0;
        // line 3
        yield "
";
        // line 6
        $context["ci_offset"] =  -1;
        // line 7
        yield "
<td class=\"text-center\">
    ";
        // line 10
        yield "    ";
        yield from $this->loadTemplate("columns_definitions/column_name.twig", "columns_definitions/column_attributes.twig", 10)->unwrap()->yield(CoreExtension::toArray(["column_number" =>         // line 11
(isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 11, $this->source); })()), "ci" =>         // line 12
(isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 12, $this->source); })()), "ci_offset" =>         // line 13
(isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 13, $this->source); })()), "column_meta" =>         // line 14
(isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 14, $this->source); })()), "has_central_columns_feature" =>  !(null === CoreExtension::getAttribute($this->env, $this->source,         // line 15
(isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 15, $this->source); })()), "centralColumnsFeature", [], "any", false, false, false, 15)), "max_rows" =>         // line 16
(isset($context["max_rows"]) || array_key_exists("max_rows", $context) ? $context["max_rows"] : (function () { throw new RuntimeError('Variable "max_rows" does not exist.', 16, $this->source); })())]));
        // line 18
        yield "    ";
        $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 18, $this->source); })()) + 1);
        // line 19
        yield "</td>
<td class=\"text-center\">
  <select class=\"column_type\" name=\"field_type[";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 21, $this->source); })()), "html", null, true);
        yield "]\" id=\"field_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 21, $this->source); })()), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 21, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 21, $this->source); })())), "html", null, true);
        yield "\"";
        // line 22
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "column_status", [], "array", true, true, false, 22) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 22, $this->source); })()), "column_status", [], "array", false, false, false, 22), "isEditable", [], "array", false, false, false, 22))) ? (" disabled") : (""));
        yield ">
    ";
        // line 23
        yield PhpMyAdmin\Html\Generator::getSupportedDatatypes((isset($context["type_upper"]) || array_key_exists("type_upper", $context) ? $context["type_upper"] : (function () { throw new RuntimeError('Variable "type_upper" does not exist.', 23, $this->source); })()));
        yield "
  </select>
  ";
        // line 25
        $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 25, $this->source); })()) + 1);
        // line 26
        yield "</td>
<td class=\"text-center\">
  <input id=\"field_";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 28, $this->source); })()), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 28, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 28, $this->source); })())), "html", null, true);
        yield "\" type=\"text\" name=\"field_length[";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 28, $this->source); })()), "html", null, true);
        yield "]\" size=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["length_values_input_size"]) || array_key_exists("length_values_input_size", $context) ? $context["length_values_input_size"] : (function () { throw new RuntimeError('Variable "length_values_input_size" does not exist.', 29, $this->source); })()), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["length"]) || array_key_exists("length", $context) ? $context["length"] : (function () { throw new RuntimeError('Variable "length" does not exist.', 29, $this->source); })()), "html", null, true);
        yield "\" class=\"textfield\">
  <p class=\"enum_notice\" id=\"enum_notice_";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 30, $this->source); })()), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 30, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 30, $this->source); })())), "html", null, true);
        yield "\">
    <a href=\"#\" class=\"open_enum_editor\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Edit ENUM/SET values"), "html", null, true);
        yield "</a>
  </p>
  ";
        // line 33
        $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 33, $this->source); })()) + 1);
        // line 34
        yield "</td>
<td class=\"text-center\">
  <select name=\"field_default_type[";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 36, $this->source); })()), "html", null, true);
        yield "]\" id=\"field_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 36, $this->source); })()), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 36, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 36, $this->source); })())), "html", null, true);
        yield "\" class=\"default_type\">
    <option value=\"NONE\"";
        // line 37
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "DefaultType", [], "array", true, true, false, 37) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 37, $this->source); })()), "DefaultType", [], "array", false, false, false, 37) == "NONE"))) ? (" selected") : (""));
        yield ">
      ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("for default", "None"), "html", null, true);
        yield "
    </option>
    <option value=\"USER_DEFINED\"";
        // line 40
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "DefaultType", [], "array", true, true, false, 40) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 40, $this->source); })()), "DefaultType", [], "array", false, false, false, 40) == "USER_DEFINED"))) ? (" selected") : (""));
        yield ">
      ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("As defined:"), "html", null, true);
        yield "
    </option>
    <option value=\"NULL\"";
        // line 43
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "DefaultType", [], "array", true, true, false, 43) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 43, $this->source); })()), "DefaultType", [], "array", false, false, false, 43) == "NULL"))) ? (" selected") : (""));
        yield ">
      NULL
    </option>
    <option value=\"CURRENT_TIMESTAMP\"";
        // line 46
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "DefaultType", [], "array", true, true, false, 46) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 46, $this->source); })()), "DefaultType", [], "array", false, false, false, 46) == "CURRENT_TIMESTAMP"))) ? (" selected") : (""));
        yield ">
      CURRENT_TIMESTAMP
    </option>
    ";
        // line 49
        if (PhpMyAdmin\Util::isUUIDSupported()) {
            // line 50
            yield "    <option value=\"UUID\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "DefaultType", [], "array", true, true, false, 50) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 50, $this->source); })()), "DefaultType", [], "array", false, false, false, 50) == "UUID"))) ? (" selected") : (""));
            yield ">
      UUID
    </option>
    ";
        }
        // line 54
        yield "  </select>
  ";
        // line 55
        if (((isset($context["char_editing"]) || array_key_exists("char_editing", $context) ? $context["char_editing"] : (function () { throw new RuntimeError('Variable "char_editing" does not exist.', 55, $this->source); })()) == "textarea")) {
            // line 56
            yield "    <textarea name=\"field_default_value[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 56, $this->source); })()), "html", null, true);
            yield "]\" cols=\"15\" class=\"textfield default_value\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["default_value"]) || array_key_exists("default_value", $context) ? $context["default_value"] : (function () { throw new RuntimeError('Variable "default_value" does not exist.', 56, $this->source); })()), "html", null, true);
            yield "</textarea>
  ";
        } else {
            // line 58
            yield "    <input type=\"text\" name=\"field_default_value[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 58, $this->source); })()), "html", null, true);
            yield "]\" size=\"12\" value=\"";
            yield (((array_key_exists("default_value", $context) &&  !(null === $context["default_value"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["default_value"], "html", null, true)) : (""));
            yield "\" class=\"textfield default_value\">
  ";
        }
        // line 60
        yield "  ";
        $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 60, $this->source); })()) + 1);
        // line 61
        yield "</td>
<td class=\"text-center\">
  ";
        // line 64
        yield "  <select lang=\"en\" dir=\"ltr\" name=\"field_collation[";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 64, $this->source); })()), "html", null, true);
        yield "]\" id=\"field_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 64, $this->source); })()), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 64, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 64, $this->source); })())), "html", null, true);
        yield "\">
    <option value=\"\"></option>
    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["charsets"]) || array_key_exists("charsets", $context) ? $context["charsets"] : (function () { throw new RuntimeError('Variable "charsets" does not exist.', 66, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
            // line 67
            yield "      <optgroup label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "name", [], "any", false, false, false, 67), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "description", [], "any", false, false, false, 67), "html", null, true);
            yield "\">
        ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "collations", [], "any", false, false, false, 68));
            foreach ($context['_seq'] as $context["_key"] => $context["collation"]) {
                // line 69
                yield "          <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 69), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "description", [], "any", false, false, false, 69), "html", null, true);
                yield "\"";
                // line 70
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Collation", [], "array", true, true, false, 70) && (CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 70) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 70, $this->source); })()), "Collation", [], "array", false, false, false, 70)))) ? (" selected") : (""));
                yield ">";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 71), "html", null, true);
                // line 72
                yield "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['collation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            yield "      </optgroup>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['charset'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "  </select>
  ";
        // line 77
        $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 77, $this->source); })()) + 1);
        // line 78
        yield "</td>
<td class=\"text-center\">
    ";
        // line 81
        yield "    ";
        yield from $this->loadTemplate("columns_definitions/column_attribute.twig", "columns_definitions/column_attributes.twig", 81)->unwrap()->yield(CoreExtension::toArray(["column_number" =>         // line 82
(isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 82, $this->source); })()), "ci" =>         // line 83
(isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 83, $this->source); })()), "ci_offset" =>         // line 84
(isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 84, $this->source); })()), "column_meta" =>         // line 85
(isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 85, $this->source); })()), "extracted_columnspec" =>         // line 86
(isset($context["extracted_columnspec"]) || array_key_exists("extracted_columnspec", $context) ? $context["extracted_columnspec"] : (function () { throw new RuntimeError('Variable "extracted_columnspec" does not exist.', 86, $this->source); })()), "submit_attribute" =>         // line 87
(isset($context["submit_attribute"]) || array_key_exists("submit_attribute", $context) ? $context["submit_attribute"] : (function () { throw new RuntimeError('Variable "submit_attribute" does not exist.', 87, $this->source); })()), "attribute_types" =>         // line 88
(isset($context["attribute_types"]) || array_key_exists("attribute_types", $context) ? $context["attribute_types"] : (function () { throw new RuntimeError('Variable "attribute_types" does not exist.', 88, $this->source); })())]));
        // line 90
        yield "    ";
        $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 90, $this->source); })()) + 1);
        // line 91
        yield "</td>
<td class=\"text-center\">
    <input name=\"field_null[";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 93, $this->source); })()), "html", null, true);
        yield "]\" id=\"field_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 93, $this->source); })()), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 93, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 93, $this->source); })())), "html", null, true);
        yield "\" type=\"checkbox\" value=\"YES\" class=\"allow_null\"";
        // line 94
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Null", [], "array", true, true, false, 94) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 94, $this->source); })()), "Null", [], "array", false, false, false, 94))) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 94, $this->source); })()), "Null", [], "array", false, false, false, 94) != "NO")) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 94, $this->source); })()), "Null", [], "array", false, false, false, 94) != "NOT NULL"))) ? (" checked") : (""));
        yield ">
    ";
        // line 95
        $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 95, $this->source); })()) + 1);
        // line 96
        yield "</td>
";
        // line 97
        if ((array_key_exists("change_column", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["change_column"]) || array_key_exists("change_column", $context) ? $context["change_column"] : (function () { throw new RuntimeError('Variable "change_column" does not exist.', 97, $this->source); })())))) {
            // line 98
            yield "    ";
            // line 99
            yield "    <td class=\"text-center\">
      <input name=\"field_adjust_privileges[";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 100, $this->source); })()), "html", null, true);
            yield "]\" id=\"field_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 100, $this->source); })()), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 100, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 100, $this->source); })())), "html", null, true);
            yield "\" type=\"checkbox\" value=\"NULL\" class=\"allow_null\"";
            // line 101
            if ((isset($context["privs_available"]) || array_key_exists("privs_available", $context) ? $context["privs_available"] : (function () { throw new RuntimeError('Variable "privs_available" does not exist.', 101, $this->source); })())) {
                yield " checked>";
            } else {
                // line 102
                yield " title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("You don't have sufficient privileges to perform this operation; Please refer to the documentation for more details"), "html", null, true);
                yield "\" disabled>";
            }
            // line 104
            yield "      ";
            $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 104, $this->source); })()) + 1);
            // line 105
            yield "    </td>
";
        }
        // line 107
        if ( !(isset($context["is_backup"]) || array_key_exists("is_backup", $context) ? $context["is_backup"] : (function () { throw new RuntimeError('Variable "is_backup" does not exist.', 107, $this->source); })())) {
            // line 108
            yield "    ";
            // line 109
            yield "    <td class=\"text-center\">
      <select name=\"field_key[";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 110, $this->source); })()), "html", null, true);
            yield "]\" id=\"field_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 110, $this->source); })()), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 110, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 110, $this->source); })())), "html", null, true);
            yield "\" data-index=\"\">
        <option value=\"none_";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 111, $this->source); })()), "html", null, true);
            yield "\">---</option>
        <option value=\"primary_";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 112, $this->source); })()), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Primary"), "html", null, true);
            yield "\"";
            // line 113
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Key", [], "array", true, true, false, 113) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 113, $this->source); })()), "Key", [], "array", false, false, false, 113) == "PRI"))) ? (" selected") : (""));
            yield ">
          PRIMARY
        </option>
        <option value=\"unique_";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 116, $this->source); })()), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Unique"), "html", null, true);
            yield "\"";
            // line 117
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Key", [], "array", true, true, false, 117) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 117, $this->source); })()), "Key", [], "array", false, false, false, 117) == "UNI"))) ? (" selected") : (""));
            yield ">
          UNIQUE
        </option>
        <option value=\"index_";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 120, $this->source); })()), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Index"), "html", null, true);
            yield "\"";
            // line 121
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Key", [], "array", true, true, false, 121) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 121, $this->source); })()), "Key", [], "array", false, false, false, 121) == "MUL"))) ? (" selected") : (""));
            yield ">
          INDEX
        </option>
        <option value=\"fulltext_";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 124, $this->source); })()), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Fulltext"), "html", null, true);
            yield "\"";
            // line 125
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Key", [], "array", true, true, false, 125) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 125, $this->source); })()), "Key", [], "array", false, false, false, 125) == "FULLTEXT"))) ? (" selected") : (""));
            yield ">
          FULLTEXT
        </option>
        <option value=\"spatial_";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 128, $this->source); })()), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Spatial"), "html", null, true);
            yield "\"";
            // line 129
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Key", [], "array", true, true, false, 129) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 129, $this->source); })()), "Key", [], "array", false, false, false, 129) == "SPATIAL"))) ? (" selected") : (""));
            yield ">
          SPATIAL
        </option>
      </select>
      ";
            // line 133
            $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 133, $this->source); })()) + 1);
            // line 134
            yield "    </td>
";
        }
        // line 136
        yield "<td class=\"text-center\">
  <input name=\"field_extra[";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 137, $this->source); })()), "html", null, true);
        yield "]\" id=\"field_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 137, $this->source); })()), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 137, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 137, $this->source); })())), "html", null, true);
        yield "\" type=\"checkbox\" value=\"AUTO_INCREMENT\"";
        // line 138
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Extra", [], "array", true, true, false, 138) && (Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 138, $this->source); })()), "Extra", [], "array", false, false, false, 138)) == "auto_increment"))) ? (" checked") : (""));
        yield ">
  ";
        // line 139
        $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 139, $this->source); })()) + 1);
        // line 140
        yield "</td>
<td class=\"text-center\">
  <textarea id=\"field_";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 142, $this->source); })()), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 142, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 142, $this->source); })())), "html", null, true);
        yield "\" rows=\"1\" name=\"field_comments[";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 142, $this->source); })()), "html", null, true);
        yield "]\" maxlength=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["max_length"]) || array_key_exists("max_length", $context) ? $context["max_length"] : (function () { throw new RuntimeError('Variable "max_length" does not exist.', 142, $this->source); })()), "html", null, true);
        yield "\">";
        // line 143
        yield ((((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 143) && is_iterable((isset($context["comments_map"]) || array_key_exists("comments_map", $context) ? $context["comments_map"] : (function () { throw new RuntimeError('Variable "comments_map" does not exist.', 143, $this->source); })()))) && CoreExtension::getAttribute($this->env, $this->source, ($context["comments_map"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 143, $this->source); })()), "Field", [], "array", false, false, false, 143), [], "array", true, true, false, 143))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["comments_map"]) || array_key_exists("comments_map", $context) ? $context["comments_map"] : (function () { throw new RuntimeError('Variable "comments_map" does not exist.', 143, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 143, $this->source); })()), "Field", [], "array", false, false, false, 143), [], "array", false, false, false, 143), "html", null, true)) : (""));
        // line 144
        yield "</textarea>
  ";
        // line 145
        $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 145, $this->source); })()) + 1);
        // line 146
        yield "</td>
 ";
        // line 148
        if ((isset($context["is_virtual_columns_supported"]) || array_key_exists("is_virtual_columns_supported", $context) ? $context["is_virtual_columns_supported"] : (function () { throw new RuntimeError('Variable "is_virtual_columns_supported" does not exist.', 148, $this->source); })())) {
            // line 149
            yield "    <td class=\"text-center\">
      <select name=\"field_virtuality[";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 150, $this->source); })()), "html", null, true);
            yield "]\" id=\"field_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 150, $this->source); })()), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 150, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 150, $this->source); })())), "html", null, true);
            yield "\" class=\"virtuality\">
        ";
            // line 151
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 151, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 152
                yield "          ";
                $context["virtuality"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Extra", [], "array", true, true, false, 152)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 152, $this->source); })()), "Extra", [], "array", false, false, false, 152)) : (null));
                // line 153
                yield "          ";
                // line 154
                yield "          ";
                $context["virtuality"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Virtuality", [], "array", true, true, false, 154)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 154, $this->source); })()), "Virtuality", [], "array", false, false, false, 154)) : ((isset($context["virtuality"]) || array_key_exists("virtuality", $context) ? $context["virtuality"] : (function () { throw new RuntimeError('Variable "virtuality" does not exist.', 154, $this->source); })())));
                // line 155
                yield "
          <option value=\"";
                // line 156
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\"";
                yield (((( !(null === (isset($context["virtuality"]) || array_key_exists("virtuality", $context) ? $context["virtuality"] : (function () { throw new RuntimeError('Variable "virtuality" does not exist.', 156, $this->source); })())) && ($context["key"] != "")) && (Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["virtuality"]) || array_key_exists("virtuality", $context) ? $context["virtuality"] : (function () { throw new RuntimeError('Variable "virtuality" does not exist.', 156, $this->source); })()), 0, Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["key"])) === $context["key"]))) ? (" selected") : (""));
                yield ">
            ";
                // line 157
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "
          </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            yield "      </select>

      ";
            // line 162
            if (((isset($context["char_editing"]) || array_key_exists("char_editing", $context) ? $context["char_editing"] : (function () { throw new RuntimeError('Variable "char_editing" does not exist.', 162, $this->source); })()) == "textarea")) {
                // line 163
                yield "        <textarea name=\"field_expression[";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 163, $this->source); })()), "html", null, true);
                yield "]\" cols=\"15\" class=\"textfield expression\">";
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Expression", [], "array", true, true, false, 163)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 163, $this->source); })()), "Expression", [], "array", false, false, false, 163), "html", null, true)) : (""));
                yield "</textarea>
      ";
            } else {
                // line 165
                yield "        <input type=\"text\" name=\"field_expression[";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 165, $this->source); })()), "html", null, true);
                yield "]\" size=\"12\" value=\"";
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Expression", [], "array", true, true, false, 165)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 165, $this->source); })()), "Expression", [], "array", false, false, false, 165), "html", null, true)) : (""));
                yield "\" placeholder=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Expression"), "html", null, true);
                yield "\" class=\"textfield expression\">
      ";
            }
            // line 167
            yield "      ";
            $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 167, $this->source); })()) + 1);
            // line 168
            yield "    </td>
";
        }
        // line 171
        if (array_key_exists("fields_meta", $context)) {
            // line 172
            yield "    ";
            $context["current_index"] = 0;
            // line 173
            yield "    ";
            $context["break"] = false;
            // line 174
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["move_columns"]) || array_key_exists("move_columns", $context) ? $context["move_columns"] : (function () { throw new RuntimeError('Variable "move_columns" does not exist.', 174, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["move_column"]) {
                // line 175
                yield "      ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["move_column"], "name", [], "any", false, false, false, 175) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 175, $this->source); })()), "Field", [], "array", false, false, false, 175)) &&  !(isset($context["break"]) || array_key_exists("break", $context) ? $context["break"] : (function () { throw new RuntimeError('Variable "break" does not exist.', 175, $this->source); })()))) {
                    // line 176
                    yield "        ";
                    $context["current_index"] = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 176);
                    // line 177
                    yield "        ";
                    $context["break"] = true;
                    // line 178
                    yield "      ";
                }
                // line 179
                yield "    ";
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
            unset($context['_seq'], $context['_key'], $context['move_column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 180
            yield "
    <td class=\"text-center\">
      <select id=\"field_";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 182, $this->source); })()), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 182, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 182, $this->source); })())), "html", null, true);
            yield "\" name=\"field_move_to[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 182, $this->source); })()), "html", null, true);
            yield "]\" size=\"1\" width=\"5em\">
        <option value=\"\" selected>&nbsp;</option>
        <option value=\"-first\"";
            // line 184
            yield ((((isset($context["current_index"]) || array_key_exists("current_index", $context) ? $context["current_index"] : (function () { throw new RuntimeError('Variable "current_index" does not exist.', 184, $this->source); })()) == 0)) ? (" disabled") : (""));
            yield ">
          ";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("first"), "html", null, true);
            yield "
        </option>
        ";
            // line 187
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["move_columns"]) || array_key_exists("move_columns", $context) ? $context["move_columns"] : (function () { throw new RuntimeError('Variable "move_columns" does not exist.', 187, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["move_column"]) {
                // line 188
                yield "          <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["move_column"], "name", [], "any", false, false, false, 188), "html", null, true);
                yield "\"";
                // line 189
                yield (((((isset($context["current_index"]) || array_key_exists("current_index", $context) ? $context["current_index"] : (function () { throw new RuntimeError('Variable "current_index" does not exist.', 189, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 189)) || ((isset($context["current_index"]) || array_key_exists("current_index", $context) ? $context["current_index"] : (function () { throw new RuntimeError('Variable "current_index" does not exist.', 189, $this->source); })()) == (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 189) + 1)))) ? (" disabled") : (""));
                yield ">
            ";
                // line 190
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_gettext("after %s"), PhpMyAdmin\Util::backquote($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["move_column"], "name", [], "any", false, false, false, 190)))), "html", null, true);
                yield "
          </option>
        ";
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
            unset($context['_seq'], $context['_key'], $context['move_column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 193
            yield "      </select>
      ";
            // line 194
            $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 194, $this->source); })()) + 1);
            // line 195
            yield "    </td>
";
        }
        // line 197
        yield "
";
        // line 198
        if ((( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 198, $this->source); })()), "browserTransformationFeature", [], "any", false, false, false, 198)) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["relation_parameters"]) || array_key_exists("relation_parameters", $context) ? $context["relation_parameters"] : (function () { throw new RuntimeError('Variable "relation_parameters" does not exist.', 198, $this->source); })()), "columnCommentsFeature", [], "any", false, false, false, 198))) && (isset($context["browse_mime"]) || array_key_exists("browse_mime", $context) ? $context["browse_mime"] : (function () { throw new RuntimeError('Variable "browse_mime" does not exist.', 198, $this->source); })()))) {
            // line 199
            yield "    <td class=\"text-center\">
      <select id=\"field_";
            // line 200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 200, $this->source); })()), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 200, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 200, $this->source); })())), "html", null, true);
            yield "\" size=\"1\" name=\"field_mimetype[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 200, $this->source); })()), "html", null, true);
            yield "]\">
        <option value=\"\">&nbsp;</option>
        ";
            // line 202
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["available_mime"] ?? null), "mimetype", [], "array", true, true, false, 202) && is_iterable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 202, $this->source); })()), "mimetype", [], "array", false, false, false, 202)))) {
                // line 203
                yield "          ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 203, $this->source); })()), "mimetype", [], "array", false, false, false, 203));
                foreach ($context['_seq'] as $context["_key"] => $context["media_type"]) {
                    // line 204
                    yield "            <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($context["media_type"], ["/" => "_"]), "html", null, true);
                    yield "\"";
                    // line 205
                    yield ((((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 205) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mime_map"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 205, $this->source); })()), "Field", [], "array", false, false, false, 205), [], "array", false, true, false, 205), "mimetype", [], "array", true, true, false, 205)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 206
(isset($context["mime_map"]) || array_key_exists("mime_map", $context) ? $context["mime_map"] : (function () { throw new RuntimeError('Variable "mime_map" does not exist.', 206, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 206, $this->source); })()), "Field", [], "array", false, false, false, 206), [], "array", false, false, false, 206), "mimetype", [], "array", false, false, false, 206) == Twig\Extension\CoreExtension::replace($context["media_type"], ["/" => "_"])))) ? (" selected") : (""));
                    yield ">
              ";
                    // line 207
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $context["media_type"]), "html", null, true);
                    yield "
            </option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['media_type'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 210
                yield "        ";
            }
            // line 211
            yield "      </select>
      ";
            // line 212
            $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 212, $this->source); })()) + 1);
            // line 213
            yield "    </td>
    <td class=\"text-center\">
      <select id=\"field_";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 215, $this->source); })()), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 215, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 215, $this->source); })())), "html", null, true);
            yield "\" size=\"1\" name=\"field_transformation[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 215, $this->source); })()), "html", null, true);
            yield "]\">
        <option value=\"\" title=\"";
            // line 216
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("None"), "html", null, true);
            yield "\"></option>
        ";
            // line 217
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["available_mime"] ?? null), "transformation", [], "array", true, true, false, 217) && is_iterable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 217, $this->source); })()), "transformation", [], "array", false, false, false, 217)))) {
                // line 218
                yield "          ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 218, $this->source); })()), "transformation", [], "array", false, false, false, 218));
                foreach ($context['_seq'] as $context["mimekey"] => $context["transform"]) {
                    // line 219
                    yield "            ";
                    $context["parts"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), $context["transform"], ":");
                    // line 220
                    yield "            <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 220, $this->source); })()), "transformation_file", [], "array", false, false, false, 220), $context["mimekey"], [], "array", false, false, false, 220), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('get_description')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 220, $this->source); })()), "transformation_file", [], "array", false, false, false, 220), $context["mimekey"], [], "array", false, false, false, 220)), "html", null, true);
                    yield "\"";
                    // line 221
                    yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 221) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 222
($context["mime_map"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 222, $this->source); })()), "Field", [], "array", false, false, false, 222), [], "array", false, true, false, 222), "transformation", [], "array", true, true, false, 222)) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 223
(isset($context["mime_map"]) || array_key_exists("mime_map", $context) ? $context["mime_map"] : (function () { throw new RuntimeError('Variable "mime_map" does not exist.', 223, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 223, $this->source); })()), "Field", [], "array", false, false, false, 223), [], "array", false, false, false, 223), "transformation", [], "array", false, false, false, 223))) && CoreExtension::matches((("@" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 224
(isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 224, $this->source); })()), "transformation_file_quoted", [], "array", false, false, false, 224), $context["mimekey"], [], "array", false, false, false, 224)) . "3?@i"), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mime_map"]) || array_key_exists("mime_map", $context) ? $context["mime_map"] : (function () { throw new RuntimeError('Variable "mime_map" does not exist.', 224, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 224, $this->source); })()), "Field", [], "array", false, false, false, 224), [], "array", false, false, false, 224), "transformation", [], "array", false, false, false, 224)))) ? (" selected") : (""));
                    yield ">
              ";
                    // line 225
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((($this->env->getFunction('get_name')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 225, $this->source); })()), "transformation_file", [], "array", false, false, false, 225), $context["mimekey"], [], "array", false, false, false, 225)) . " (") . Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 225, $this->source); })()), 0, [], "array", false, false, false, 225))) . ":") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 225, $this->source); })()), 1, [], "array", false, false, false, 225)) . ")"), "html", null, true);
                    yield "
            </option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['mimekey'], $context['transform'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 228
                yield "        ";
            }
            // line 229
            yield "      </select>
      ";
            // line 230
            $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 230, $this->source); })()) + 1);
            // line 231
            yield "    </td>
    <td class=\"text-center\">
      <input id=\"field_";
            // line 233
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 233, $this->source); })()), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 233, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 233, $this->source); })())), "html", null, true);
            yield "\" type=\"text\" name=\"field_transformation_options[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 233, $this->source); })()), "html", null, true);
            yield "]\" size=\"16\" class=\"textfield\" value=\"";
            // line 234
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 234) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mime_map"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 234, $this->source); })()), "Field", [], "array", false, false, false, 234), [], "array", false, true, false, 234), "transformation_options", [], "array", true, true, false, 234))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mime_map"]) || array_key_exists("mime_map", $context) ? $context["mime_map"] : (function () { throw new RuntimeError('Variable "mime_map" does not exist.', 234, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 234, $this->source); })()), "Field", [], "array", false, false, false, 234), [], "array", false, false, false, 234), "transformation_options", [], "array", false, false, false, 234), "html", null, true)) : (""));
            yield "\">
      ";
            // line 235
            $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 235, $this->source); })()) + 1);
            // line 236
            yield "    </td>
    <td class=\"text-center\">
      <select id=\"field_";
            // line 238
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 238, $this->source); })()), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 238, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 238, $this->source); })())), "html", null, true);
            yield "\" size=\"1\" name=\"field_input_transformation[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 238, $this->source); })()), "html", null, true);
            yield "]\">
        <option value=\"\" title=\"";
            // line 239
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("None"), "html", null, true);
            yield "\"></option>
        ";
            // line 240
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["available_mime"] ?? null), "input_transformation", [], "array", true, true, false, 240) && is_iterable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 240, $this->source); })()), "input_transformation", [], "array", false, false, false, 240)))) {
                // line 241
                yield "          ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 241, $this->source); })()), "input_transformation", [], "array", false, false, false, 241));
                foreach ($context['_seq'] as $context["mimekey"] => $context["transform"]) {
                    // line 242
                    yield "            ";
                    $context["parts"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), $context["transform"], ":");
                    // line 243
                    yield "            <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 243, $this->source); })()), "input_transformation_file", [], "array", false, false, false, 243), $context["mimekey"], [], "array", false, false, false, 243), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('get_description')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 243, $this->source); })()), "input_transformation_file", [], "array", false, false, false, 243), $context["mimekey"], [], "array", false, false, false, 243)), "html", null, true);
                    yield "\"";
                    // line 244
                    yield ((((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 244) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mime_map"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 244, $this->source); })()), "Field", [], "array", false, false, false, 244), [], "array", false, true, false, 244), "input_transformation", [], "array", true, true, false, 244)) && CoreExtension::matches((("@" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 245
(isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 245, $this->source); })()), "input_transformation_file_quoted", [], "array", false, false, false, 245), $context["mimekey"], [], "array", false, false, false, 245)) . "3?@i"), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mime_map"]) || array_key_exists("mime_map", $context) ? $context["mime_map"] : (function () { throw new RuntimeError('Variable "mime_map" does not exist.', 245, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 245, $this->source); })()), "Field", [], "array", false, false, false, 245), [], "array", false, false, false, 245), "input_transformation", [], "array", false, false, false, 245)))) ? (" selected") : (""));
                    yield ">
              ";
                    // line 246
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((($this->env->getFunction('get_name')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["available_mime"]) || array_key_exists("available_mime", $context) ? $context["available_mime"] : (function () { throw new RuntimeError('Variable "available_mime" does not exist.', 246, $this->source); })()), "input_transformation_file", [], "array", false, false, false, 246), $context["mimekey"], [], "array", false, false, false, 246)) . " (") . Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 246, $this->source); })()), 0, [], "array", false, false, false, 246))) . ":") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 246, $this->source); })()), 1, [], "array", false, false, false, 246)) . ")"), "html", null, true);
                    yield "
            </option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['mimekey'], $context['transform'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 249
                yield "        ";
            }
            // line 250
            yield "      </select>
      ";
            // line 251
            $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 251, $this->source); })()) + 1);
            // line 252
            yield "    </td>
    <td class=\"text-center\">
      <input id=\"field_";
            // line 254
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 254, $this->source); })()), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 254, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 254, $this->source); })())), "html", null, true);
            yield "\" type=\"text\" name=\"field_input_transformation_options[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 254, $this->source); })()), "html", null, true);
            yield "]\" size=\"16\" class=\"textfield\" value=\"";
            // line 255
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 255) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mime_map"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 255, $this->source); })()), "Field", [], "array", false, false, false, 255), [], "array", false, true, false, 255), "input_transformation_options", [], "array", true, true, false, 255))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mime_map"]) || array_key_exists("mime_map", $context) ? $context["mime_map"] : (function () { throw new RuntimeError('Variable "mime_map" does not exist.', 255, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 255, $this->source); })()), "Field", [], "array", false, false, false, 255), [], "array", false, false, false, 255), "input_transformation_options", [], "array", false, false, false, 255), "html", null, true)) : (""));
            yield "\">
      ";
            // line 256
            $context["ci"] = ((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 256, $this->source); })()) + 1);
            // line 257
            yield "    </td>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "columns_definitions/column_attributes.twig";
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
        return array (  832 => 257,  830 => 256,  826 => 255,  819 => 254,  815 => 252,  813 => 251,  810 => 250,  807 => 249,  798 => 246,  794 => 245,  793 => 244,  787 => 243,  784 => 242,  779 => 241,  777 => 240,  773 => 239,  765 => 238,  761 => 236,  759 => 235,  755 => 234,  748 => 233,  744 => 231,  742 => 230,  739 => 229,  736 => 228,  727 => 225,  723 => 224,  722 => 223,  721 => 222,  720 => 221,  714 => 220,  711 => 219,  706 => 218,  704 => 217,  700 => 216,  692 => 215,  688 => 213,  686 => 212,  683 => 211,  680 => 210,  671 => 207,  667 => 206,  666 => 205,  662 => 204,  657 => 203,  655 => 202,  646 => 200,  643 => 199,  641 => 198,  638 => 197,  634 => 195,  632 => 194,  629 => 193,  612 => 190,  608 => 189,  604 => 188,  587 => 187,  582 => 185,  578 => 184,  569 => 182,  565 => 180,  551 => 179,  548 => 178,  545 => 177,  542 => 176,  539 => 175,  521 => 174,  518 => 173,  515 => 172,  513 => 171,  509 => 168,  506 => 167,  496 => 165,  488 => 163,  486 => 162,  482 => 160,  473 => 157,  467 => 156,  464 => 155,  461 => 154,  459 => 153,  456 => 152,  452 => 151,  444 => 150,  441 => 149,  439 => 148,  436 => 146,  434 => 145,  431 => 144,  429 => 143,  420 => 142,  416 => 140,  414 => 139,  410 => 138,  403 => 137,  400 => 136,  396 => 134,  394 => 133,  387 => 129,  382 => 128,  376 => 125,  371 => 124,  365 => 121,  360 => 120,  354 => 117,  349 => 116,  343 => 113,  338 => 112,  334 => 111,  326 => 110,  323 => 109,  321 => 108,  319 => 107,  315 => 105,  312 => 104,  307 => 102,  303 => 101,  296 => 100,  293 => 99,  291 => 98,  289 => 97,  286 => 96,  284 => 95,  280 => 94,  273 => 93,  269 => 91,  266 => 90,  264 => 88,  263 => 87,  262 => 86,  261 => 85,  260 => 84,  259 => 83,  258 => 82,  256 => 81,  252 => 78,  250 => 77,  247 => 76,  240 => 74,  233 => 72,  231 => 71,  228 => 70,  222 => 69,  218 => 68,  211 => 67,  207 => 66,  197 => 64,  193 => 61,  190 => 60,  182 => 58,  174 => 56,  172 => 55,  169 => 54,  161 => 50,  159 => 49,  153 => 46,  147 => 43,  142 => 41,  138 => 40,  133 => 38,  129 => 37,  121 => 36,  117 => 34,  115 => 33,  110 => 31,  104 => 30,  98 => 29,  91 => 28,  87 => 26,  85 => 25,  80 => 23,  76 => 22,  69 => 21,  65 => 19,  62 => 18,  60 => 16,  59 => 15,  58 => 14,  57 => 13,  56 => 12,  55 => 11,  53 => 10,  49 => 7,  47 => 6,  44 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Cell index: If certain fields get left out, the counter shouldn't change. #}
{% set ci = 0 %}

{# Every time a cell shall be left out the STRG-jumping feature, \$ci_offset has
   to be incremented (\$ci_offset++) #}
{% set ci_offset = -1 %}

<td class=\"text-center\">
    {# column name #}
    {% include 'columns_definitions/column_name.twig' with {
        'column_number': column_number,
        'ci': ci,
        'ci_offset': ci_offset,
        'column_meta': column_meta,
        'has_central_columns_feature': relation_parameters.centralColumnsFeature is not null,
        'max_rows': max_rows
    } only %}
    {% set ci = ci + 1 %}
</td>
<td class=\"text-center\">
  <select class=\"column_type\" name=\"field_type[{{ column_number }}]\" id=\"field_{{ column_number }}_{{ ci - ci_offset }}\"
    {{- column_meta['column_status'] is defined and not column_meta['column_status']['isEditable'] ? ' disabled' }}>
    {{ get_supported_datatypes(type_upper) }}
  </select>
  {% set ci = ci + 1 %}
</td>
<td class=\"text-center\">
  <input id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" type=\"text\" name=\"field_length[{{ column_number }}]\" size=\"
    {{- length_values_input_size }}\" value=\"{{ length }}\" class=\"textfield\">
  <p class=\"enum_notice\" id=\"enum_notice_{{ column_number }}_{{ ci - ci_offset }}\">
    <a href=\"#\" class=\"open_enum_editor\">{{ t('Edit ENUM/SET values') }}</a>
  </p>
  {% set ci = ci + 1 %}
</td>
<td class=\"text-center\">
  <select name=\"field_default_type[{{ column_number }}]\" id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" class=\"default_type\">
    <option value=\"NONE\"{{ column_meta['DefaultType'] is defined and column_meta['DefaultType'] == 'NONE' ? ' selected' }}>
      {{ t('None', context = 'for default') }}
    </option>
    <option value=\"USER_DEFINED\"{{ column_meta['DefaultType'] is defined and column_meta['DefaultType'] == 'USER_DEFINED' ? ' selected' }}>
      {{ t('As defined:') }}
    </option>
    <option value=\"NULL\"{{ column_meta['DefaultType'] is defined and column_meta['DefaultType'] == 'NULL' ? ' selected' }}>
      NULL
    </option>
    <option value=\"CURRENT_TIMESTAMP\"{{ column_meta['DefaultType'] is defined and column_meta['DefaultType'] == 'CURRENT_TIMESTAMP' ? ' selected' }}>
      CURRENT_TIMESTAMP
    </option>
    {% if is_uuid_supported() %}
    <option value=\"UUID\"{{ column_meta['DefaultType'] is defined and column_meta['DefaultType'] == 'UUID' ? ' selected' }}>
      UUID
    </option>
    {% endif %}
  </select>
  {% if char_editing == 'textarea' %}
    <textarea name=\"field_default_value[{{ column_number }}]\" cols=\"15\" class=\"textfield default_value\">{{ default_value }}</textarea>
  {% else %}
    <input type=\"text\" name=\"field_default_value[{{ column_number }}]\" size=\"12\" value=\"{{ default_value ?? '' }}\" class=\"textfield default_value\">
  {% endif %}
  {% set ci = ci + 1 %}
</td>
<td class=\"text-center\">
  {# column collation #}
  <select lang=\"en\" dir=\"ltr\" name=\"field_collation[{{ column_number }}]\" id=\"field_{{ column_number }}_{{ ci - ci_offset }}\">
    <option value=\"\"></option>
    {% for charset in charsets %}
      <optgroup label=\"{{ charset.name }}\" title=\"{{ charset.description }}\">
        {% for collation in charset.collations %}
          <option value=\"{{ collation.name }}\" title=\"{{ collation.description }}\"
            {{- column_meta['Collation'] is defined and collation.name == column_meta['Collation'] ? ' selected' }}>
            {{- collation.name -}}
          </option>
        {% endfor %}
      </optgroup>
    {% endfor %}
  </select>
  {% set ci = ci + 1 %}
</td>
<td class=\"text-center\">
    {# column attribute #}
    {% include 'columns_definitions/column_attribute.twig' with {
        'column_number': column_number,
        'ci': ci,
        'ci_offset': ci_offset,
        'column_meta': column_meta,
        'extracted_columnspec': extracted_columnspec,
        'submit_attribute': submit_attribute,
        'attribute_types': attribute_types
    } only %}
    {% set ci = ci + 1 %}
</td>
<td class=\"text-center\">
    <input name=\"field_null[{{ column_number }}]\" id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" type=\"checkbox\" value=\"YES\" class=\"allow_null\"
      {{- column_meta['Null'] is defined and column_meta['Null'] is not empty and column_meta['Null'] != 'NO' and column_meta['Null'] != 'NOT NULL' ? ' checked' }}>
    {% set ci = ci + 1 %}
</td>
{% if change_column is defined and change_column is not empty %}
    {# column Adjust privileges, Only for 'Edit' Column(s) #}
    <td class=\"text-center\">
      <input name=\"field_adjust_privileges[{{ column_number }}]\" id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" type=\"checkbox\" value=\"NULL\" class=\"allow_null\"
        {%- if privs_available %} checked>
        {%- else %} title=\"{{ t(\"You don't have sufficient privileges to perform this operation; Please refer to the documentation for more details\") }}\" disabled>
        {%- endif %}
      {% set ci = ci + 1 %}
    </td>
{% endif %}
{% if not is_backup %}
    {# column indexes, See my other comment about  this 'if'. #}
    <td class=\"text-center\">
      <select name=\"field_key[{{ column_number }}]\" id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" data-index=\"\">
        <option value=\"none_{{ column_number }}\">---</option>
        <option value=\"primary_{{ column_number }}\" title=\"{{ t('Primary') }}\"
          {{- column_meta['Key'] is defined and column_meta['Key'] == 'PRI' ? ' selected' }}>
          PRIMARY
        </option>
        <option value=\"unique_{{ column_number }}\" title=\"{{ t('Unique') }}\"
          {{- column_meta['Key'] is defined and column_meta['Key'] == 'UNI' ? ' selected' }}>
          UNIQUE
        </option>
        <option value=\"index_{{ column_number }}\" title=\"{{ t('Index') }}\"
          {{- column_meta['Key'] is defined and column_meta['Key'] == 'MUL' ? ' selected' }}>
          INDEX
        </option>
        <option value=\"fulltext_{{ column_number }}\" title=\"{{ t('Fulltext') }}\"
          {{- column_meta['Key'] is defined and column_meta['Key'] == 'FULLTEXT' ? ' selected' }}>
          FULLTEXT
        </option>
        <option value=\"spatial_{{ column_number }}\" title=\"{{ t('Spatial') }}\"
          {{- column_meta['Key'] is defined and column_meta['Key'] == 'SPATIAL' ? ' selected' }}>
          SPATIAL
        </option>
      </select>
      {% set ci = ci + 1 %}
    </td>
{% endif %}
<td class=\"text-center\">
  <input name=\"field_extra[{{ column_number }}]\" id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" type=\"checkbox\" value=\"AUTO_INCREMENT\"
    {{- column_meta['Extra'] is defined and column_meta['Extra']|lower == 'auto_increment' ? ' checked' }}>
  {% set ci = ci + 1 %}
</td>
<td class=\"text-center\">
  <textarea id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" rows=\"1\" name=\"field_comments[{{ column_number }}]\" maxlength=\"{{ max_length }}\">
    {{- column_meta['Field'] is defined and comments_map is iterable and comments_map[column_meta['Field']] is defined ? comments_map[column_meta['Field']] -}}
  </textarea>
  {% set ci = ci + 1 %}
</td>
 {# column virtuality #}
{% if is_virtual_columns_supported %}
    <td class=\"text-center\">
      <select name=\"field_virtuality[{{ column_number }}]\" id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" class=\"virtuality\">
        {% for key, value in options %}
          {% set virtuality = column_meta['Extra'] is defined ? column_meta['Extra'] : null %}
          {# Creating a new row on create table sends a Virtuality field #}
          {% set virtuality = column_meta['Virtuality'] is defined ? column_meta['Virtuality'] : virtuality %}

          <option value=\"{{ key }}\"{{ virtuality is not null and key != '' and virtuality|slice(0, key|length) is same as (key) ? ' selected' }}>
            {{ value }}
          </option>
        {% endfor %}
      </select>

      {% if char_editing == 'textarea' %}
        <textarea name=\"field_expression[{{ column_number }}]\" cols=\"15\" class=\"textfield expression\">{{ column_meta['Expression'] is defined ? column_meta['Expression'] }}</textarea>
      {% else %}
        <input type=\"text\" name=\"field_expression[{{ column_number }}]\" size=\"12\" value=\"{{ column_meta['Expression'] is defined ? column_meta['Expression'] }}\" placeholder=\"{{ t('Expression') }}\" class=\"textfield expression\">
      {% endif %}
      {% set ci = ci + 1 %}
    </td>
{% endif %}
{# move column #}
{% if fields_meta is defined %}
    {% set current_index = 0 %}
    {% set break = false %}
    {% for move_column in move_columns %}
      {% if move_column.name == column_meta['Field'] and not break %}
        {% set current_index = loop.index0 %}
        {% set break = true %}
      {% endif %}
    {% endfor %}

    <td class=\"text-center\">
      <select id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" name=\"field_move_to[{{ column_number }}]\" size=\"1\" width=\"5em\">
        <option value=\"\" selected>&nbsp;</option>
        <option value=\"-first\"{{ current_index == 0 ? ' disabled' }}>
          {{ t('first') }}
        </option>
        {% for move_column in move_columns %}
          <option value=\"{{ move_column.name }}\"
            {{- current_index == loop.index0 or current_index == loop.index0 + 1 ? ' disabled' }}>
            {{ t('after %s')|format(backquote(move_column.name|e)) }}
          </option>
        {% endfor %}
      </select>
      {% set ci = ci + 1 %}
    </td>
{% endif %}

{% if relation_parameters.browserTransformationFeature is not null and relation_parameters.columnCommentsFeature is not null and browse_mime %}
    <td class=\"text-center\">
      <select id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" size=\"1\" name=\"field_mimetype[{{ column_number }}]\">
        <option value=\"\">&nbsp;</option>
        {% if available_mime['mimetype'] is defined and available_mime['mimetype'] is iterable %}
          {% for media_type in available_mime['mimetype'] %}
            <option value=\"{{ media_type|replace({'/': '_'}) }}\"
              {{- column_meta['Field'] is defined and mime_map[column_meta['Field']]['mimetype'] is defined
                and mime_map[column_meta['Field']]['mimetype'] == media_type|replace({'/': '_'}) ? ' selected' }}>
              {{ media_type|lower }}
            </option>
          {% endfor %}
        {% endif %}
      </select>
      {% set ci = ci + 1 %}
    </td>
    <td class=\"text-center\">
      <select id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" size=\"1\" name=\"field_transformation[{{ column_number }}]\">
        <option value=\"\" title=\"{{ t('None') }}\"></option>
        {% if available_mime['transformation'] is defined and available_mime['transformation'] is iterable %}
          {% for mimekey, transform in available_mime['transformation'] %}
            {% set parts = transform|split(':') %}
            <option value=\"{{ available_mime['transformation_file'][mimekey] }}\" title=\"{{ get_description(available_mime['transformation_file'][mimekey]) }}\"
              {{- column_meta['Field'] is defined
                and mime_map[column_meta['Field']]['transformation'] is defined
                and mime_map[column_meta['Field']]['transformation'] is not null
                and mime_map[column_meta['Field']]['transformation'] matches '@' ~ available_mime['transformation_file_quoted'][mimekey] ~ '3?@i' ? ' selected' }}>
              {{ get_name(available_mime['transformation_file'][mimekey]) ~ ' (' ~ parts[0]|lower ~ ':' ~ parts[1] ~ ')' }}
            </option>
          {% endfor %}
        {% endif %}
      </select>
      {% set ci = ci + 1 %}
    </td>
    <td class=\"text-center\">
      <input id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" type=\"text\" name=\"field_transformation_options[{{ column_number }}]\" size=\"16\" class=\"textfield\" value=\"
        {{- column_meta['Field'] is defined and mime_map[column_meta['Field']]['transformation_options'] is defined ? mime_map[column_meta['Field']]['transformation_options'] }}\">
      {% set ci = ci + 1 %}
    </td>
    <td class=\"text-center\">
      <select id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" size=\"1\" name=\"field_input_transformation[{{ column_number }}]\">
        <option value=\"\" title=\"{{ t('None') }}\"></option>
        {% if available_mime['input_transformation'] is defined and available_mime['input_transformation'] is iterable %}
          {% for mimekey, transform in available_mime['input_transformation'] %}
            {% set parts = transform|split(':') %}
            <option value=\"{{ available_mime['input_transformation_file'][mimekey] }}\" title=\"{{ get_description(available_mime['input_transformation_file'][mimekey]) }}\"
              {{- column_meta['Field'] is defined and mime_map[column_meta['Field']]['input_transformation'] is defined
                and mime_map[column_meta['Field']]['input_transformation'] matches '@' ~ available_mime['input_transformation_file_quoted'][mimekey] ~ '3?@i' ? ' selected' }}>
              {{ get_name(available_mime['input_transformation_file'][mimekey]) ~ ' (' ~ parts[0]|lower ~ ':' ~ parts[1] ~ ')' }}
            </option>
          {% endfor %}
        {% endif %}
      </select>
      {% set ci = ci + 1 %}
    </td>
    <td class=\"text-center\">
      <input id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" type=\"text\" name=\"field_input_transformation_options[{{ column_number }}]\" size=\"16\" class=\"textfield\" value=\"
        {{- column_meta['Field'] is defined and mime_map[column_meta['Field']]['input_transformation_options'] is defined ? mime_map[column_meta['Field']]['input_transformation_options'] }}\">
      {% set ci = ci + 1 %}
    </td>
{% endif %}
", "columns_definitions/column_attributes.twig", "/home/files/phpmyadmin/release/phpMyAdmin-6.0+snapshot/resources/templates/columns_definitions/column_attributes.twig");
    }
}
