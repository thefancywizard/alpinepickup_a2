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

/* themes/custom/ap_dxpr/templates/block/block--hero-block.html.twig */
class __TwigTemplate_ffa32aef67a142538583b6cef0bc249c extends \Twig\Template
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
        // line 1
        echo "<div class=\"hero\">
    ";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 2, $this->source), "html", null, true));
        echo "
    ";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 3, $this->source), "html", null, true));
        echo "
        ";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_background_image", [], "any", false, false, true, 4), 4, $this->source), "html", null, true));
        echo "
    <h1 class=\"d-flex flex-row flex-wrap justify-content-center text-cream text-h1 text-center max-w-screen-xl mx-auto mt-32 mb-5\">
        ";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_title", [], "any", false, false, true, 6), 6, $this->source), "html", null, true));
        echo "
    </h1>
    <h3 class=\"d-flex flex-row flex-wrap justify-content-center text-white text-lg text-center max-w-screen-xl mx-auto\">
        ";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_subtitle", [], "any", false, false, true, 9), 9, $this->source), "html", null, true));
        echo "
    </h3>
    <div>
        ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_buttons", [], "any", false, false, true, 12), 12, $this->source), "html", null, true));
        echo "
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/ap_dxpr/templates/block/block--hero-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 12,  61 => 9,  55 => 6,  50 => 4,  46 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"hero\">
    {{ title_prefix }}
    {{ title_suffix }}
        {{ content.field_background_image }}
    <h1 class=\"d-flex flex-row flex-wrap justify-content-center text-cream text-h1 text-center max-w-screen-xl mx-auto mt-32 mb-5\">
        {{ content.field_hero_title }}
    </h1>
    <h3 class=\"d-flex flex-row flex-wrap justify-content-center text-white text-lg text-center max-w-screen-xl mx-auto\">
        {{ content.field_hero_subtitle }}
    </h3>
    <div>
        {{ content.field_hero_buttons }}
    </div>
</div>", "themes/custom/ap_dxpr/templates/block/block--hero-block.html.twig", "/home/deepsea1/public_html/alpinepickup/web/themes/custom/ap_dxpr/templates/block/block--hero-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 2);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
