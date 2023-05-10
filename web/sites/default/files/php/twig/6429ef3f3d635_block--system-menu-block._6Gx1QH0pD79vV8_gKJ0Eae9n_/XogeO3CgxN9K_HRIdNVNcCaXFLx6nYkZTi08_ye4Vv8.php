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

/* themes/contrib/dxpr_theme/templates/block--system-menu-block.html.twig */
class __TwigTemplate_8431d23282c81409a4e6449389e0edea extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        $context["designRegions"] = [];
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 29), "block_design_regions", [], "any", false, false, true, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 30
            echo "   ";
            if ($context["name"]) {
                // line 31
                echo "   ";
                $context["designRegions"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["designRegions"] ?? null), 31, $this->source), [0 => $context["name"]]);
                // line 32
                echo "   ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 37
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 37), 37, $this->source))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 38
($context["plugin_id"] ?? null), 38, $this->source))), 3 => "clearfix", 4 => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 40
($context["theme"] ?? null), "settings", [], "any", false, false, true, 40), "block_card", [], "any", false, false, true, 40) && twig_in_filter(($context["region"] ?? null), ($context["designRegions"] ?? null)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 40), "block_card", [], "any", false, false, true, 40)) : (""))];
        // line 44
        $context["title_classes"] = [0 => "block-title", 1 => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 46
($context["theme"] ?? null), "settings", [], "any", false, false, true, 46), "title_card", [], "any", false, false, true, 46) && twig_in_filter(($context["region"] ?? null), ($context["designRegions"] ?? null)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 46), "title_card", [], "any", false, false, true, 46)) : (""))];
        // line 49
        echo "
<section";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 50), 50, $this->source), "html", null, true));
        echo ">
  ";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 51, $this->source), "html", null, true));
        echo "
  ";
        // line 52
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 52), "title_sticker", [], "any", false, false, true, 52) && twig_in_filter(($context["region"] ?? null), ($context["designRegions"] ?? null)))) {
            // line 53
            echo "    <div class=\"wrap-block-title\">
  ";
        }
        // line 55
        echo "  ";
        if (($context["label"] ?? null)) {
            // line 56
            echo "    <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 56), 56, $this->source), "html", null, true));
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 56, $this->source), "html", null, true));
            echo "</h2>
  ";
        }
        // line 58
        echo "  ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 58), "title_sticker", [], "any", false, false, true, 58) && twig_in_filter(($context["region"] ?? null), ($context["designRegions"] ?? null)))) {
            // line 59
            echo "    </div>
  ";
        }
        // line 61
        echo "  ";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 61), "block_divider", [], "any", false, false, true, 61) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 61), "block_divider_thickness", [], "any", false, false, true, 61)) && twig_in_filter(($context["region"] ?? null), ($context["designRegions"] ?? null)))) {
            // line 62
            echo "    <hr class=\"block-hr\">
  ";
        }
        // line 64
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 64, $this->source), "html", null, true));
        echo "

  ";
        // line 66
        $this->displayBlock('content', $context, $blocks);
        // line 69
        echo "</section>
";
    }

    // line 66
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 67, $this->source), "html", null, true));
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/dxpr_theme/templates/block--system-menu-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 67,  122 => 66,  117 => 69,  115 => 66,  109 => 64,  105 => 62,  102 => 61,  98 => 59,  95 => 58,  87 => 56,  84 => 55,  80 => 53,  78 => 52,  74 => 51,  70 => 50,  67 => 49,  65 => 46,  64 => 44,  62 => 40,  61 => 38,  60 => 37,  59 => 35,  52 => 32,  49 => 31,  46 => 30,  42 => 29,  40 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - content: The content of this block.
 * - attributes: array of HTML attributes populated by modules, intended to
 *   be added to the main container tag of this template.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * @see template_preprocess_block()
 */
#}
{% set designRegions = [] %}
{% for name in theme.settings.block_design_regions %}
   {% if name %}
   {% set designRegions = designRegions|merge([name]) %}
   {% endif %}
{% endfor %}
{%
  set classes = [
    'block',
    'block-' ~ configuration.provider|clean_class,
    'block-' ~ plugin_id|clean_class,
    'clearfix',
    theme.settings.block_card and region in designRegions ? theme.settings.block_card,
  ]
%}
{%
  set title_classes = [
    'block-title',
    theme.settings.title_card and region in designRegions ? theme.settings.title_card,
  ]
%}

<section{{ attributes.addClass(classes) }}>
  {{ title_prefix }}
  {% if theme.settings.title_sticker and region in designRegions %}
    <div class=\"wrap-block-title\">
  {% endif %}
  {% if label %}
    <h2{{ title_attributes.addClass(title_classes) }}>{{ label }}</h2>
  {% endif %}
  {% if theme.settings.title_sticker and region in designRegions %}
    </div>
  {% endif %}
  {% if theme.settings.block_divider and theme.settings.block_divider_thickness and region in designRegions %}
    <hr class=\"block-hr\">
  {% endif %}
  {{ title_suffix }}

  {% block content %}
    {{ content }}
  {% endblock %}
</section>
", "themes/contrib/dxpr_theme/templates/block--system-menu-block.html.twig", "/home/deepsea1/public_html/alpinepickup/web/themes/contrib/dxpr_theme/templates/block--system-menu-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 28, "for" => 29, "if" => 30, "block" => 66);
        static $filters = array("merge" => 31, "clean_class" => 37, "escape" => 50);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'block'],
                ['merge', 'clean_class', 'escape'],
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
