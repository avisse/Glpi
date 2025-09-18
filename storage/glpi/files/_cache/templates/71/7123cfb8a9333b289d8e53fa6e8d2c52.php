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

/* pages/setup/apiclient.html.twig */
class __TwigTemplate_074cdf45cf80e7005e6a39ab892241c3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'more_fields' => [$this, 'block_more_fields'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 33
        return "generic_show_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "pages/setup/apiclient.html.twig", 34)->unwrap();
        // line 35
        $context["params"] = (($context["params"]) ?? ([]));
        // line 33
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "pages/setup/apiclient.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 37
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        yield "    ";
        yield CoreExtension::callMacro($macros["fields"], "macro_dropdownArrayField", ["dolog_method", (($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source,         // line 40
($context["item"] ?? null), "fields", [], "any", false, false, false, 40)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["dolog_method"] ?? null) : null),         // line 41
($context["log_methods"] ?? null), __("Log connections")], 38, $context, $this->getSourceContext());
        // line 43
        yield "

    <div class=\"hr-text\">
        <i class=\"ti ti-filter\"></i>
        <span>";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Filter access"), "html", null, true);
        yield "</span>
    </div>
    <p><em>";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Leave these parameters empty to disable API access restriction"), "html", null, true);
        yield "</em></p>


    ";
        // line 52
        yield CoreExtension::callMacro($macros["fields"], "macro_textField", ["ipv4_range_start", (( !Twig\Extension\CoreExtension::testEmpty((($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source,         // line 54
($context["item"] ?? null), "fields", [], "any", false, false, false, 54)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["ipv4_range_start"] ?? null) : null))) ? (long2ip((($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 54)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["ipv4_range_start"] ?? null) : null))) : ("")), __("IPv4 address range start")], 52, $context, $this->getSourceContext());
        // line 56
        yield "

    ";
        // line 58
        yield CoreExtension::callMacro($macros["fields"], "macro_textField", ["ipv4_range_end", (( !Twig\Extension\CoreExtension::testEmpty((($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source,         // line 60
($context["item"] ?? null), "fields", [], "any", false, false, false, 60)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["ipv4_range_end"] ?? null) : null))) ? (long2ip((($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 60)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["ipv4_range_end"] ?? null) : null))) : ("")), __("IPv4 address range end")], 58, $context, $this->getSourceContext());
        // line 62
        yield "

    ";
        // line 64
        yield CoreExtension::callMacro($macros["fields"], "macro_textField", ["ipv6", (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source,         // line 66
($context["item"] ?? null), "fields", [], "any", false, false, false, 66)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["ipv6"] ?? null) : null), __("IPv6 address")], 64, $context, $this->getSourceContext());
        // line 68
        yield "

    ";
        // line 70
        $context["reset_btn"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 71
            yield "        ";
            yield CoreExtension::callMacro($macros["fields"], "macro_checkboxField", ["_reset_app_token", ((CoreExtension::getAttribute($this->env, $this->source,             // line 73
($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 73)) ? (1) : (0)), __("Regenerate"), ["full_width" => true]], 71, $context, $this->getSourceContext());
            // line 78
            yield "
    ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 80
        yield "
    ";
        // line 81
        yield CoreExtension::callMacro($macros["fields"], "macro_textField", ["app_token", (($__internal_compile_6 = CoreExtension::getAttribute($this->env, $this->source,         // line 83
($context["item"] ?? null), "fields", [], "any", false, false, false, 83)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["app_token"] ?? null) : null), Twig\Extension\CoreExtension::sprintf(__("%1\$s (%2\$s)"), __("Application token"), "app_token"), ["add_field_html" =>         // line 86
($context["reset_btn"] ?? null)]], 81, $context, $this->getSourceContext());
        // line 88
        yield "

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/setup/apiclient.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  117 => 88,  115 => 86,  114 => 83,  113 => 81,  110 => 80,  105 => 78,  103 => 73,  101 => 71,  99 => 70,  95 => 68,  93 => 66,  92 => 64,  88 => 62,  86 => 60,  85 => 58,  81 => 56,  79 => 54,  78 => 52,  72 => 49,  67 => 47,  61 => 43,  59 => 41,  58 => 40,  56 => 38,  52 => 37,  47 => 33,  45 => 35,  43 => 34,  36 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/setup/apiclient.html.twig", "/var/www/glpi/templates/pages/setup/apiclient.html.twig");
    }
}
