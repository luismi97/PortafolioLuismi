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

/* profiles/druppio_small_business_distribution/themes/contrib/druppio_small_business/templates/node--header--full.html.twig */
class __TwigTemplate_71a0614cbdf89a38fe9cbf9cdddbe6974e5e9fcf09c3f049135d98c0e6093a64 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 67, "if" => 80];
        $filters = ["clean_class" => 68, "escape" => 76];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
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
        // line 67
        $context["classes"] = [0 => \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 68
($context["node"] ?? null), "bundle", []))), 1 => (($this->getAttribute(        // line 69
($context["node"] ?? null), "isPromoted", [], "method")) ? ("is-promoted") : ("")), 2 => (($this->getAttribute(        // line 70
($context["node"] ?? null), "isSticky", [], "method")) ? ("is-sticky") : ("")), 3 => (( !$this->getAttribute(        // line 71
($context["node"] ?? null), "isPublished", [], "method")) ? ("is-unpublished") : ("")), 4 => ((        // line 72
($context["view_mode"] ?? null)) ? (\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null)))) : ("")), 5 => "clearfix"];
        // line 76
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">

  <div";
        // line 78
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "content"], "method")), "html", null, true);
        echo ">
    <div class=\"header content\">
        ";
        // line 80
        if ( !($context["page"] ?? null)) {
            // line 81
            echo "            <h2 class=\"header-title\">
                ";
            // line 82
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "
            </h2>
         ";
        }
        // line 85
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
        echo "
        ";
        // line 86
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_link", [])), "html", null, true);
        echo "

    </div>
    <div class=\"header images\">
    ";
        // line 90
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_background_image_s_", [])), "html", null, true);
        echo "

    </div>
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "profiles/druppio_small_business_distribution/themes/contrib/druppio_small_business/templates/node--header--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 90,  89 => 86,  84 => 85,  78 => 82,  75 => 81,  73 => 80,  68 => 78,  62 => 76,  60 => 72,  59 => 71,  58 => 70,  57 => 69,  56 => 68,  55 => 67,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/druppio_small_business_distribution/themes/contrib/druppio_small_business/templates/node--header--full.html.twig", "/var/www/html/profiles/druppio_small_business_distribution/themes/contrib/druppio_small_business/templates/node--header--full.html.twig");
    }
}
