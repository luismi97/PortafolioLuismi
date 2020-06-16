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

/* profiles/druppio_small_business_distribution/themes/contrib/druppio_small_business/templates/node--work--full.html.twig */
class __TwigTemplate_f649a5328c886adb6113b6427d825aab569628787cb50026ed49b3321c7faaa1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 67, "trans" => 96];
        $filters = ["clean_class" => 68, "escape" => 77];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
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
        echo "
<article";
        // line 77
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
 <div class=\"node-work-left\">
   ";
        // line 79
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_lead_image", [])), "html", null, true);
        echo "
 </div>
<div class=\"node-work-right\">
  <div class=\"node-work-right-container\">
    <h1 class=\"js-quickedit-page-title page-title\">
      ";
        // line 84
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
        echo "
    </h1>
    <h2 class=\"page-sub-title\">
      ";
        // line 87
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_sub_title", [])), "html", null, true);
        echo "
    </h2>
    ";
        // line 89
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
        echo "
  </div>
</div>
<div class=\"node-work-left bottom clearfix\">
  ";
        // line 93
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_gallery", [])), "html", null, true);
        echo "
</div>
<div class=\"node-work-right bottom clearfix\">
  <h2 class=\"page-sub-title\">";
        // line 96
        echo t("Project details", array());
        echo "</h2>
  <div class=\"node-work-right-bottom-container\">
    ";
        // line 98
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_client", [])), "html", null, true);
        echo "
    ";
        // line 99
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_project_url", [])), "html", null, true);
        echo "
    ";
        // line 100
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_tags", [])), "html", null, true);
        echo "
    ";
        // line 101
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "share_everywhere", [])), "html", null, true);
        echo "
  </div>
</div>
</article>
";
    }

    public function getTemplateName()
    {
        return "profiles/druppio_small_business_distribution/themes/contrib/druppio_small_business/templates/node--work--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 101,  115 => 100,  111 => 99,  107 => 98,  102 => 96,  96 => 93,  89 => 89,  84 => 87,  78 => 84,  70 => 79,  65 => 77,  62 => 76,  60 => 72,  59 => 71,  58 => 70,  57 => 69,  56 => 68,  55 => 67,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/druppio_small_business_distribution/themes/contrib/druppio_small_business/templates/node--work--full.html.twig", "/var/www/html/profiles/druppio_small_business_distribution/themes/contrib/druppio_small_business/templates/node--work--full.html.twig");
    }
}
