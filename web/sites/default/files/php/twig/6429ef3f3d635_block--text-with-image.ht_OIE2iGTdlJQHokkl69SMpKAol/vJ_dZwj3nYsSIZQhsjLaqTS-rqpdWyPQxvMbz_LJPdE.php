<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/ap_dxpr/templates/block/block--text-with-image.html.twig */
class __TwigTemplate_268e253381d2492d7aa36494fd36dae3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["classes"] = [0 => "text-with-image", 1 => "d-flex", 2 => "flex-row"];
        // line 8
        if (((($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_display_style", [], "any", false, false, true, 8)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#markup"] ?? null) : null) == "Image on right")) {
            // line 9
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 9, $this->source), [0 => "image-on-right"]);
        }
        // line 11
        if (((($__internal_compile_2 = (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_display_style", [], "any", false, false, true, 11)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#markup"] ?? null) : null) == "Image on left")) {
            // line 12
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 12, $this->source), [0 => "image-on-left"]);
        }
        // line 14
        if (((($__internal_compile_4 = (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_color_scheme", [], "any", false, false, true, 14)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[0] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#markup"] ?? null) : null) == "Sage background")) {
            // line 15
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 15, $this->source), [0 => "sage-bg"]);
        }
        // line 17
        if (((($__internal_compile_6 = (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_color_scheme", [], "any", false, false, true, 17)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[0] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#markup"] ?? null) : null) == "White background")) {
            // line 18
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 18, $this->source), [0 => "white-bg"]);
        }
        // line 20
        if (((($__internal_compile_8 = (($__internal_compile_9 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_color_scheme", [], "any", false, false, true, 20)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[0] ?? null) : null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#markup"] ?? null) : null) == "Sand background")) {
            // line 21
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 21, $this->source), [0 => "sand-bg"]);
        }
        // line 23
        echo "<div ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 23), 23, $this->source), "html", null, true));
        echo ">
    ";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 24, $this->source), "html", null, true));
        echo "
    ";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 25, $this->source), "html", null, true));
        echo "
    <div class=\"image-field\">
        ";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_featured_image", [], "any", false, false, true, 27), 27, $this->source), "html", null, true));
        echo "
    </div>
    <div class=\"text-info\">
    <h3>";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 30, $this->source), "html", null, true));
        echo "</h3>
    <div class=\"body-text\">
        ";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 32), 32, $this->source), "html", null, true));
        echo "
    </div>
    <div class=\"button\">
        ";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_cta_button", [], "any", false, false, true, 35), 35, $this->source), "html", null, true));
        echo "
    </div>
    </div>
    
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/ap_dxpr/templates/block/block--text-with-image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 35,  91 => 32,  86 => 30,  80 => 27,  75 => 25,  71 => 24,  66 => 23,  63 => 21,  61 => 20,  58 => 18,  56 => 17,  53 => 15,  51 => 14,  48 => 12,  46 => 11,  43 => 9,  41 => 8,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{%
\tset classes = [
\t\t'text-with-image',
\t\t'd-flex',
\t\t'flex-row',
\t]
  %}
{% if content.field_display_style[0]['#markup'] == \"Image on right\" %}
{% set classes = classes|merge([\"image-on-right\"]) %}
{% endif %}
{% if content.field_display_style[0]['#markup'] == \"Image on left\" %}
{% set classes = classes|merge([\"image-on-left\"]) %}
{% endif %}
{% if content.field_color_scheme[0]['#markup'] == \"Sage background\" %}
{% set classes = classes|merge([\"sage-bg\"]) %}
{% endif %}
{% if content.field_color_scheme[0]['#markup'] == \"White background\" %}
{% set classes = classes|merge([\"white-bg\"]) %}
{% endif %}
{% if content.field_color_scheme[0]['#markup'] == \"Sand background\" %}
{% set classes = classes|merge([\"sand-bg\"]) %}
{% endif %}
<div {{ attributes.addClass(classes) }}>
    {{ title_prefix }}
    {{ title_suffix }}
    <div class=\"image-field\">
        {{ content.field_featured_image }}
    </div>
    <div class=\"text-info\">
    <h3>{{ label }}</h3>
    <div class=\"body-text\">
        {{ content.body }}
    </div>
    <div class=\"button\">
        {{ content.field_cta_button }}
    </div>
    </div>
    
</div>", "themes/custom/ap_dxpr/templates/block/block--text-with-image.html.twig", "/home/deepsea1/public_html/alpinepickup/web/themes/custom/ap_dxpr/templates/block/block--text-with-image.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 8);
        static $filters = array("merge" => 9, "escape" => 23);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['merge', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
