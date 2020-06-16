<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* profiles/druppio_small_business_distribution/themes/contrib/druppio_small_business/templates/page--front.html.twig */
class __TwigTemplate_f551a5d3125b41f4cda84e18a07cfd204d0a600152f44883422707d2929a6de6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 79];
        $filters = ["escape" => 76];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 75
        echo "
<div id=\"page\" class=\"";
        // line 76
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_classes"] ?? null)), "html", null, true);
        echo "\">

\t<header id=\"navigation\">
        ";
        // line 79
        if ($this->getAttribute(($context["page"] ?? null), "branding", [])) {
            // line 80
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "branding", [])), "html", null, true);
            echo "
        ";
        }
        // line 82
        echo "
        ";
        // line 83
        if ($this->getAttribute(($context["page"] ?? null), "navigation", [])) {
            // line 84
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
            echo "
        ";
        }
        // line 86
        echo "\t</header>

\t";
        // line 88
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 89
            echo "\t\t<section id=\"header\">
\t\t\t<div class=\"container\">";
            // line 90
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "</div>
\t\t</section>
\t";
        }
        // line 93
        echo "
    ";
        // line 94
        if ($this->getAttribute(($context["page"] ?? null), "helper", [])) {
            // line 95
            echo "\t\t<section id=\"helper\" class=\"clearfix\">
\t\t\t<div class=\"container\">";
            // line 96
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "helper", [])), "html", null, true);
            echo "</div>
\t\t</section>
\t";
        }
        // line 99
        echo "
\t";
        // line 100
        if ($this->getAttribute(($context["page"] ?? null), "section_first", [])) {
            // line 101
            echo "\t\t<section id=\"section_first\" class=\"page-section clearfix\" ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "bg_images", []), "section_first", [])) {
                echo " style=\"background-image: url('";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["page"] ?? null), "bg_images", []), "section_first", [])), "html", null, true);
                echo "')\" ";
            }
            echo ">
\t\t\t<div class=\"container\">
\t\t  \t";
            // line 103
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "section_first", [])), "html", null, true);
            echo "
\t\t\t</div>
\t\t\t<div class=\"section-first-separator\">
\t\t    <img src=\"";
            // line 106
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
            echo "/images/section-separators/section-first.svg\" id=\"section-first-separator-image\" class=\"svg\">
\t\t  </div>
\t\t</section>
\t";
        }
        // line 110
        echo "
\t";
        // line 111
        if ($this->getAttribute(($context["page"] ?? null), "section_second", [])) {
            // line 112
            echo "\t\t<section id=\"section_second\" class=\"page-section clearfix\" ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "bg_images", []), "section_second", [])) {
                echo " style=\"background-image: url('";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["page"] ?? null), "bg_images", []), "section_second", [])), "html", null, true);
                echo "')\" ";
            }
            echo ">
\t\t\t<div class=\"container\">";
            // line 113
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "section_second", [])), "html", null, true);
            echo "</div>
\t\t\t<div class=\"section-second-separator\">
\t\t    <img src=\"";
            // line 115
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
            echo "/images/section-separators/section-second.svg\" id=\"section-second-separator-image\" class=\"svg\">
\t\t  </div>
\t\t</section>
\t";
        }
        // line 119
        echo "
\t";
        // line 120
        if ($this->getAttribute(($context["page"] ?? null), "section_third", [])) {
            // line 121
            echo "\t\t<section id=\"section_third\" class=\"page-section clearfix\" ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "bg_images", []), "section_third", [])) {
                echo " style=\"background-image: url('";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["page"] ?? null), "bg_images", []), "section_third", [])), "html", null, true);
                echo "')\" ";
            }
            echo ">
\t\t\t<div class=\"container\">";
            // line 122
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "section_third", [])), "html", null, true);
            echo "</div>
\t\t\t<div class=\"section-third-separator\">
\t\t    <img src=\"";
            // line 124
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
            echo "/images/section-separators/section-third.svg\" id=\"section-third-separator-image\" class=\"svg\">
\t\t  </div>
\t\t</section>
\t";
        }
        // line 128
        echo "
\t";
        // line 129
        if ($this->getAttribute(($context["page"] ?? null), "section_fourth", [])) {
            // line 130
            echo "\t\t<section id=\"section_fourth\" class=\"page-section clearfix\" ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "bg_images", []), "section_fourth", [])) {
                echo " style=\"background-image: url('";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["page"] ?? null), "bg_images", []), "section_fourth", [])), "html", null, true);
                echo "')\" ";
            }
            echo ">
\t\t\t<div class=\"container\">";
            // line 131
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "section_fourth", [])), "html", null, true);
            echo "</div>
\t\t\t<div class=\"section-fourth-separator\">
\t\t    <img src=\"";
            // line 133
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
            echo "/images/section-separators/section-fourth.svg\" id=\"section-fourth-separator-image\" class=\"svg\">
\t\t  </div>
\t\t</section>
\t";
        }
        // line 137
        echo "\t
\t";
        // line 138
        if ($this->getAttribute(($context["page"] ?? null), "section_fifth", [])) {
            // line 139
            echo "\t\t<section id=\"section_fifth\" class=\"page-section clearfix\" ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "bg_images", []), "section_fifth", [])) {
                echo " style=\"background-image: url('";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["page"] ?? null), "bg_images", []), "section_fifth", [])), "html", null, true);
                echo "')\" ";
            }
            echo ">
\t\t\t<div class=\"container\">";
            // line 140
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "section_fifth", [])), "html", null, true);
            echo "</div>
\t\t</section>
\t";
        }
        // line 143
        echo "
\t";
        // line 144
        if ((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", []))) {
            // line 145
            echo "\t\t<footer id=\"footer\" class=\"clearfix\">
\t\t\t<div role=\"contentinfo\" class=\"";
            // line 146
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["region_classes"] ?? null), "footer", [])), "html", null, true);
            echo " container\">
\t\t\t\t";
            // line 147
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 148
                echo "\t\t\t\t\t";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
\t\t\t\t";
            }
            // line 150
            echo "
\t\t\t\t";
            // line 151
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 152
                echo "\t\t\t\t\t";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
\t\t\t\t";
            }
            // line 154
            echo "\t\t\t</div>
\t\t</footer>
\t";
        }
        // line 157
        echo "
</div>
<div class=\"js-menu-screen sliding-panel-fade-screen\"></div>
";
    }

    public function getTemplateName()
    {
        return "profiles/druppio_small_business_distribution/themes/contrib/druppio_small_business/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 157,  269 => 154,  263 => 152,  261 => 151,  258 => 150,  252 => 148,  250 => 147,  246 => 146,  243 => 145,  241 => 144,  238 => 143,  232 => 140,  223 => 139,  221 => 138,  218 => 137,  211 => 133,  206 => 131,  197 => 130,  195 => 129,  192 => 128,  185 => 124,  180 => 122,  171 => 121,  169 => 120,  166 => 119,  159 => 115,  154 => 113,  145 => 112,  143 => 111,  140 => 110,  133 => 106,  127 => 103,  117 => 101,  115 => 100,  112 => 99,  106 => 96,  103 => 95,  101 => 94,  98 => 93,  92 => 90,  89 => 89,  87 => 88,  83 => 86,  77 => 84,  75 => 83,  72 => 82,  66 => 80,  64 => 79,  58 => 76,  55 => 75,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/druppio_small_business_distribution/themes/contrib/druppio_small_business/templates/page--front.html.twig", "/var/www/html/profiles/druppio_small_business_distribution/themes/contrib/druppio_small_business/templates/page--front.html.twig");
    }
}
