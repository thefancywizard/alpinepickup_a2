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

/* themes/contrib/dxpr_theme/templates/html.html.twig */
class __TwigTemplate_9fe020839e7f8ce439a090aa4383d2cb extends \Twig\Template
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
        // line 48
        $context["html_classes"] = [0 => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 49
($context["theme"] ?? null), "settings", [], "any", false, false, true, 49), "sticky_footer", [], "any", false, false, true, 49) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 49), "boxed_layout", [], "any", false, false, true, 49))) ? ("html--dxpr-theme-sticky-footer") : (""))];
        // line 53
        $context["body_classes"] = [0 => "html", 1 => ((        // line 55
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), 2 => (( !        // line 56
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 56, $this->source))))), 3 => ((        // line 57
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 57, $this->source)))) : ("")), 4 => ((        // line 58
($context["db_offline"] ?? null)) ? ("db-offline") : ("")), 5 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 59
($context["theme"] ?? null), "settings", [], "any", false, false, true, 59), "navbar_position", [], "any", false, false, true, 59)) ? (("navbar-is-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 59), "navbar_position", [], "any", false, false, true, 59), 59, $this->source))) : ("")), 6 => ((twig_get_attribute($this->env, $this->source,         // line 60
($context["theme"] ?? null), "has_glyphicons", [], "any", false, false, true, 60)) ? ("has-glyphicons") : ("")), 7 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 61
($context["theme"] ?? null), "settings", [], "any", false, false, true, 61), "header_position", [], "any", false, false, true, 61)) ? ("body--dxpr-theme-header-side") : ("body--dxpr-theme-header-top")), 8 => ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 62
($context["theme"] ?? null), "settings", [], "any", false, false, true, 62), "header_position", [], "any", false, false, true, 62) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 62), "header_style", [], "any", false, false, true, 62) != "overlay"))) ? ("body--dxpr-theme-header-not-overlay") : ("")), 9 => (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 63
($context["theme"] ?? null), "settings", [], "any", false, false, true, 63), "header_position", [], "any", false, false, true, 63)) ? (("body--dxpr-theme-header-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 63), "header_style", [], "any", false, false, true, 63), 63, $this->source)))) : ("")), 10 => (((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 64
($context["theme"] ?? null), "settings", [], "any", false, false, true, 64), "header_position", [], "any", false, false, true, 64) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 64), "header_top_sticky", [], "any", false, false, true, 64)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 64), "header_top_fixed", [], "any", false, false, true, 64))) ? ("body--dxpr-theme-header-fixed") : ("")), 11 => ((twig_in_filter(        // line 65
($context["page_title"] ?? null), twig_get_array_keys_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_dth_hide_regions", [], "any", false, false, true, 65), "getValue", [], "any", false, false, true, 65), 65, $this->source)))) ? ("body--primary-tabs-float") : (""))];
        // line 68
        if (($context["body_bg_image_path"] ?? null)) {
            // line 69
            echo "  ";
            $context["style"] = (("background-image:url(" . $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(($context["body_bg_image_path"] ?? null), 69, $this->source))) . ");");
            // line 70
            echo "  ";
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", [0 => "style", 1 => ($context["style"] ?? null)], "method", false, false, true, 70);
        }
        // line 72
        echo "<!DOCTYPE html>
<html ";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["html_attributes"] ?? null), "addClass", [0 => ($context["html_classes"] ?? null)], "method", false, false, true, 73), 73, $this->source), "html", null, true));
        echo ">
  <head>
    <head-placeholder token=\"";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 75, $this->source)));
        echo "\">
    <title>";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 76, $this->source), " | ")));
        echo "</title>
    <style>ul.dropdown-menu {display: none;}</style>
    <css-placeholder token=\"";
        // line 78
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 78, $this->source)));
        echo "\">
    <js-placeholder token=\"";
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 79, $this->source)));
        echo "\">
  </head>
  <body";
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method", false, false, true, 81), 81, $this->source), "html", null, true));
        echo ">
  ";
        // line 82
        $context["breakpoint"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 82), "header_mobile_breakpoint", [], "any", false, false, true, 82) > 4099)) ? ("99999") : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 82), "header_mobile_breakpoint", [], "any", false, false, true, 82)));
        // line 83
        echo "  <script>
  var dxpr_themeNavBreakpoint = ";
        // line 84
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breakpoint"] ?? null), 84, $this->source), "html", null, true));
        echo ";
  var dxpr_themeWindowWidth = window.innerWidth;
  if (dxpr_themeWindowWidth > dxpr_themeNavBreakpoint) {
    document.body.className += ' body--dxpr-theme-nav-desktop';
  }
  else {
    document.body.className += ' body--dxpr-theme-nav-mobile';
  }
  </script>
    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 94
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content")));
        echo "
    </a>
    ";
        // line 96
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 96, $this->source), "html", null, true));
        echo "
    ";
        // line 97
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 97, $this->source), "html", null, true));
        echo "
    <js-bottom-placeholder token=\"";
        // line 98
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 98, $this->source)));
        echo "\">
    ";
        // line 99
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\gin_lb\TwigExtension\GinLbExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 99, $this->source), "html", null, true));
        echo "
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/dxpr_theme/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 99,  125 => 98,  121 => 97,  117 => 96,  112 => 94,  99 => 84,  96 => 83,  94 => 82,  90 => 81,  85 => 79,  81 => 78,  76 => 76,  72 => 75,  67 => 73,  64 => 72,  60 => 70,  57 => 69,  55 => 68,  53 => 65,  52 => 64,  51 => 63,  50 => 62,  49 => 61,  48 => 60,  47 => 59,  46 => 58,  45 => 57,  44 => 56,  43 => 55,  42 => 53,  40 => 49,  39 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - \$css: An array of CSS files for the current page.
 * - \$language: (object) The language the site is being displayed in.
 *   \$language->language contains its textual representation.
 *   \$language->dir contains the language direction. It will either be 'ltr' or
 *   'rtl'.
 * - \$rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - \$grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - \$head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - \$head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the \$head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - \$head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - \$styles: Style tags necessary to import all CSS files for the page.
 * - \$scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - \$page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - \$page: The rendered page content.
 * - \$page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - \$classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @ingroup templates
 *
 * @see bootstrap_preprocess_html()
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 */
#}
{%
  set html_classes = [
    theme.settings.sticky_footer and not theme.settings.boxed_layout ? 'html--dxpr-theme-sticky-footer',
  ]
%}
{%
  set body_classes = [
    'html',
    logged_in ? 'user-logged-in',
    not root_path ? 'path-frontpage' : 'path-' ~ root_path|clean_class,
    node_type ? 'page-node-type-' ~ node_type|clean_class,
    db_offline ? 'db-offline',
    theme.settings.navbar_position ? 'navbar-is-' ~ theme.settings.navbar_position,
    theme.has_glyphicons ? 'has-glyphicons',
    theme.settings.header_position ? 'body--dxpr-theme-header-side' : 'body--dxpr-theme-header-top',
    not theme.settings.header_position and theme.settings.header_style != 'overlay' ? 'body--dxpr-theme-header-not-overlay',
    not theme.settings.header_position ? 'body--dxpr-theme-header-' ~ theme.settings.header_style|clean_class,
    not theme.settings.header_position and not theme.settings.header_top_sticky and theme.settings.header_top_fixed ? 'body--dxpr-theme-header-fixed',
    page_title in node.field_dth_hide_regions.getValue|keys ? 'body--primary-tabs-float',
  ]
%}
{% if body_bg_image_path %}
  {% set style = 'background-image:url(' ~ file_url(body_bg_image_path) ~ ');' %}
  {% set attributes = attributes.setAttribute('style', style) %}
{% endif %}
<!DOCTYPE html>
<html {{ html_attributes.addClass(html_classes) }}>
  <head>
    <head-placeholder token=\"{{ placeholder_token|raw }}\">
    <title>{{ head_title|safe_join(' | ') }}</title>
    <style>ul.dropdown-menu {display: none;}</style>
    <css-placeholder token=\"{{ placeholder_token|raw }}\">
    <js-placeholder token=\"{{ placeholder_token|raw }}\">
  </head>
  <body{{ attributes.addClass(body_classes) }}>
  {% set breakpoint = theme.settings.header_mobile_breakpoint > 4099 ? '99999' : theme.settings.header_mobile_breakpoint %}
  <script>
  var dxpr_themeNavBreakpoint = {{ breakpoint }};
  var dxpr_themeWindowWidth = window.innerWidth;
  if (dxpr_themeWindowWidth > dxpr_themeNavBreakpoint) {
    document.body.className += ' body--dxpr-theme-nav-desktop';
  }
  else {
    document.body.className += ' body--dxpr-theme-nav-mobile';
  }
  </script>
    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      {{ 'Skip to main content'|t }}
    </a>
    {{ page_top }}
    {{ page }}
    <js-bottom-placeholder token=\"{{ placeholder_token|raw }}\">
    {{ page_bottom }}
  </body>
</html>
", "themes/contrib/dxpr_theme/templates/html.html.twig", "/home/deepsea1/public_html/alpinepickup/web/themes/contrib/dxpr_theme/templates/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 48, "if" => 68);
        static $filters = array("clean_class" => 56, "keys" => 65, "escape" => 73, "raw" => 75, "safe_join" => 76, "t" => 94);
        static $functions = array("file_url" => 69);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'keys', 'escape', 'raw', 'safe_join', 't'],
                ['file_url']
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
