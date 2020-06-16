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

/* profiles/druppio_small_business_distribution/themes/contrib/druppio_small_business/templates/page.html.twig */
class __TwigTemplate_6a716afa6469aa51d6c9ac87f567103b3a830a9a5c8bc37db860991cf852e735 extends \Twig\Template
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
\t<section id=\"content\" class=\"clearfix\">
\t\t<div class=\"";
        // line 101
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["region_classes"] ?? null), "main", [])), "html", null, true);
        echo " container\">
\t\t\t";
        // line 102
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 103
            echo "\t\t\t\t";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
\t\t\t";
        }
        // line 105
        echo "\t\t</div>
\t</section>

\t";
        // line 108
        if ((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", []))) {
            // line 109
            echo "\t\t<footer id=\"footer\" class=\"clearfix\">
\t\t\t<div role=\"contentinfo\" class=\"";
            // line 110
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["region_classes"] ?? null), "footer", [])), "html", null, true);
            echo " container\">
\t\t\t\t";
            // line 111
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 112
                echo "\t\t\t\t\t";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
\t\t\t\t";
            }
            // line 114
            echo "
\t\t\t\t";
            // line 115
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 116
                echo "\t\t\t\t\t";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
\t\t\t\t";
            }
            // line 118
            echo "\t\t\t</div>
\t\t</footer>
\t";
        }
        // line 121
        echo "
</div>
<div class=\"js-menu-screen sliding-panel-fade-screen\"></div>
";
    }

    public function getTemplateName()
    {
        return "profiles/druppio_small_business_distribution/themes/contrib/druppio_small_business/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 121,  161 => 118,  155 => 116,  153 => 115,  150 => 114,  144 => 112,  142 => 111,  138 => 110,  135 => 109,  133 => 108,  128 => 105,  122 => 103,  120 => 102,  116 => 101,  112 => 99,  106 => 96,  103 => 95,  101 => 94,  98 => 93,  92 => 90,  89 => 89,  87 => 88,  83 => 86,  77 => 84,  75 => 83,  72 => 82,  66 => 80,  64 => 79,  58 => 76,  55 => 75,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/druppio_small_business_distribution/themes/contrib/druppio_small_business/templates/page.html.twig", "/var/www/html/profiles/druppio_small_business_distribution/themes/contrib/druppio_small_business/templates/page.html.twig");
    }
}
