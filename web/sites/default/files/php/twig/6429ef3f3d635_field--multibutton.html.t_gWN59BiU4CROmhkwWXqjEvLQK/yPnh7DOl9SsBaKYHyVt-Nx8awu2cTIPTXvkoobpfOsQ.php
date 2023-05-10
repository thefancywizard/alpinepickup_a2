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

/* themes/custom/ap_dxpr/templates/field/field--multibutton.html.twig */
class __TwigTemplate_a067b40456dd5e50d0cca7e365996b9e extends \Twig\Template
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
        echo "<div class=\"d-flex flex-row justify-content-center space-x-3 mt-16 gap-2 p-003\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 3), "button_style", [], "any", false, false, true, 3) == "dark")) {
                // line 4
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 4), "button_text", [], "any", false, false, true, 4), 4, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 4), "button_link", [], "any", false, false, true, 4), 4, $this->source), ["class" => [0 => "bg-green-dark text-cream py-4 px-8 rounded-md uppercase font-bold"]]), "html", null, true));
                echo "
        ";
            }
            // line 6
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 6), "button_style", [], "any", false, false, true, 6) == "light")) {
                // line 7
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 7), "button_text", [], "any", false, false, true, 7), 7, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 7), "button_link", [], "any", false, false, true, 7), 7, $this->source), ["class" => [0 => "bg-cream text-green-dark py-4 px-8 rounded-md uppercase font-bold"]]), "html", null, true));
                echo "
        ";
            }
            // line 9
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/ap_dxpr/templates/field/field--multibutton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 10,  64 => 9,  58 => 7,  55 => 6,  49 => 4,  46 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"d-flex flex-row justify-content-center space-x-3 mt-16 gap-2 p-003\">
    {% for item in items %}
        {% if item.content.button_style == \"dark\" %}
        {{ link(item.content.button_text, item.content.button_link, { 'class': ['bg-green-dark text-cream py-4 px-8 rounded-md uppercase font-bold'] }) }}
        {% endif %}
        {% if item.content.button_style == \"light\" %}
        {{ link(item.content.button_text, item.content.button_link, { 'class': ['bg-cream text-green-dark py-4 px-8 rounded-md uppercase font-bold'] }) }}
        {% endif %}
    {% endfor %}
</div>
", "themes/custom/ap_dxpr/templates/field/field--multibutton.html.twig", "/home/deepsea1/public_html/alpinepickup/web/themes/custom/ap_dxpr/templates/field/field--multibutton.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 2, "if" => 3);
        static $filters = array("escape" => 4);
        static $functions = array("link" => 4);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape'],
                ['link']
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
