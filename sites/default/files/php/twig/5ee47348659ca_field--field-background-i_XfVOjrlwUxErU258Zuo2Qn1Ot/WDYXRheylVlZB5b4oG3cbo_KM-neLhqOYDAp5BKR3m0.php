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

/* profiles/druppio_small_business_distribution/themes/contrib/druppio_small_business/templates/field--field-background-image-s-.html.twig */
class __TwigTemplate_e18b20dbb3f199094072968b5591ba5aa5afc1df067da7416f510475e744b8e3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 41, "if" => 56, "for" => 58];
        $filters = ["clean_class" => 43, "escape" => 55];
        $functions = ["file_url" => 62];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['clean_class', 'escape'],
                ['file_url']
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
        // line 41
        $context["classes"] = [0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 43
($context["field_name"] ?? null)))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 44
($context["field_type"] ?? null)))), 3 => ("field--label-" . $this->sandbox->ensureToStringAllowed(        // line 45
($context["label_display"] ?? null)))];
        // line 49
        $context["title_classes"] = [0 => "field__label", 1 => (((        // line 51
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : (""))];
        // line 54
        echo "
<div";
        // line 55
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
\t";
        // line 56
        if (($context["multiple"] ?? null)) {
            // line 57
            echo "\t<div class=\"field__items\">
\t\t";
        }
        // line 58
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 59
            echo "      <div class=\"extra-container\">
      <div class=\"slide-item\">
\t\t    <div class=\"slide-container\">
          <div class=\"slide\" style=\"background-image:url(";
            // line 62
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", []), "#item", [], "array"), "entity", []), "uri", []), "value", []))]), "html", null, true);
            echo ");\" data-rellax-speed=\"-8\">
          </div>
      </div>
\t\t</div>
        </div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo " ";
        if (($context["multiple"] ?? null)) {
            // line 68
            echo "\t</div>
\t";
        }
        // line 70
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "profiles/druppio_small_business_distribution/themes/contrib/druppio_small_business/templates/field--field-background-image-s-.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 70,  101 => 68,  98 => 67,  86 => 62,  81 => 59,  76 => 58,  72 => 57,  70 => 56,  66 => 55,  63 => 54,  61 => 51,  60 => 49,  58 => 45,  57 => 44,  56 => 43,  55 => 41,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/druppio_small_business_distribution/themes/contrib/druppio_small_business/templates/field--field-background-image-s-.html.twig", "/var/www/html/profiles/druppio_small_business_distribution/themes/contrib/druppio_small_business/templates/field--field-background-image-s-.html.twig");
    }
}
