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

/* modules/contrib/faqfield/templates/faqfield-jquery-accordion-formatter.html.twig */
class __TwigTemplate_3d2b63c46559b2f72fc2581bc4b86483 extends \Twig\Template
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
        // line 18
        ob_start();
        // line 19
        echo "  <div id=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 19, $this->source), "html", null, true));
        echo "\">
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 21
            echo "      <h3 class=\"faqfield-question\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "question", [], "any", false, false, true, 21), 21, $this->source), "html", null, true));
            echo "</h3>
      <div class=\"faqfield-answer\">";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "answer", [], "any", false, false, true, 22), 22, $this->source), "html", null, true));
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "  </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "modules/contrib/faqfield/templates/faqfield-jquery-accordion-formatter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 24,  55 => 22,  50 => 21,  46 => 20,  41 => 19,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation of a FAQ Field accordion formatter.
 *
 * Available variables:
 * - items: An array of objects with the following fields.
 *   - question: Prefiltered question value by check_plain.
 *   - answer: Prefiltered answer value by field setting format.
 * - id: Id to wrap the accordion markup in.
 *
 * @see template_preprocess()
 * @see template_preprocess_faqfield_jquery_accordion_formatter()
 *
 * @ingroup themeable
 */
#}
{% spaceless %}
  <div id=\"{{ id }}\">
    {% for item in items %}
      <h3 class=\"faqfield-question\">{{ item.question }}</h3>
      <div class=\"faqfield-answer\">{{ item.answer }}</div>
    {% endfor %}
  </div>
{% endspaceless %}
", "modules/contrib/faqfield/templates/faqfield-jquery-accordion-formatter.html.twig", "/home/deepsea1/public_html/alpinepickup/web/modules/contrib/faqfield/templates/faqfield-jquery-accordion-formatter.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("spaceless" => 18, "for" => 20);
        static $filters = array("escape" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['spaceless', 'for'],
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
