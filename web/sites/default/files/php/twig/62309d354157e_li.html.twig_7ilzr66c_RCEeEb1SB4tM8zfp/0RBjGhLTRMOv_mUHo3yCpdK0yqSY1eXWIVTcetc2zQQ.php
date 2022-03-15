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

/* modules/custom/li/templates/li.html.twig */
class __TwigTemplate_c1768c22003a48f0c7c77d0abe0217ffe56eb6a2c8a3d146b680af4307e881bf extends \Twig\Template
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
        // line 17
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 17, $this->source), "html", null, true);
        echo ">
  ";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 18, $this->source), "html", null, true);
        echo "
  <div class=\"feedback-user-info\">
    ";
        // line 20
        if ((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "avatar", [], "any", false, false, true, 20)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null)) {
            // line 21
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "avatar", [], "any", false, false, true, 21)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), 21, $this->source), "html", null, true);
            echo "
    ";
        } else {
            // line 23
            echo "      <img
              class=\"img-fluid image-style-thumbnail\"
              src=\"/modules/custom/li/img/default/user-default.png\"
              alt=\"default user avatar\"
              title=";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = (($__internal_compile_3 = (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "name", [], "any", false, false, true, 27)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[0] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#context"] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["value"] ?? null) : null), 27, $this->source), "html", null, true);
            echo "
      />
    ";
        }
        // line 30
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "name", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
        echo "
    ";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "created", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo "
  </div>
  <div class=\"feedback-user-review\">
    ";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "text", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
        echo "
    ";
        // line 35
        if ((($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "image", [], "any", false, false, true, 35)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[0] ?? null) : null)) {
            // line 36
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "image", [], "any", false, false, true, 36)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[0] ?? null) : null), 36, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 38
        echo "  </div>
  <div class=\"feedback-user-contacts\">
    ";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "phone", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
        echo "
    ";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "email", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        echo "
  </div>
  <div class=\"option-links\">
    ";
        // line 44
        if (twig_in_filter("/li/1/", ($context["url"] ?? null))) {
            // line 45
            echo "    <a class=\"btn btn-primary rounded-sm\" href=\"/li\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to form page"));
            echo "\" rel=\"next\">Return to form</a>
    ";
        }
        // line 47
        echo "  </div>
</article>";
    }

    public function getTemplateName()
    {
        return "modules/custom/li/templates/li.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 47,  108 => 45,  106 => 44,  100 => 41,  96 => 40,  92 => 38,  86 => 36,  84 => 35,  80 => 34,  74 => 31,  69 => 30,  63 => 27,  57 => 23,  51 => 21,  49 => 20,  44 => 18,  39 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/li/templates/li.html.twig", "/var/www/web/modules/custom/li/templates/li.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 20);
        static $filters = array("escape" => 17, "t" => 45);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
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
