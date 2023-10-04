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

/* modules/custom/greyfrut_module4/templates/form-table.html.twig */
class __TwigTemplate_76e6bf22035fda86799231999de62399 extends Template
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
        echo "<table class=\"greyfrut-table\">
  <thead>
  <tr>
    <th>Year</th>
    <th>Jan</th>
    <th>Feb</th>
    <th>Mar</th>
    <th>Q1</th>
    <th>Apr</th>
    <th>May</th>
    <th>Jun</th>
    <th>Q2</th>
    <th>Jul</th>
    <th>Aug</th>
    <th>Sep</th>
    <th>Q3</th>
    <th>Oct</th>
    <th>Nov</th>
    <th>Dec</th>
    <th>Q4</th>
    <th>YTD</th>
  </tr>
  </thead>
  <tbody>
    <tr>
      <td>";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "row", [], "any", false, false, true, 26)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["year"] ?? null) : null), 26, $this->source), "html", null, true);
        echo "</td>
      <td>";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "row", [], "any", false, false, true, 27)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[1] ?? null) : null), 27, $this->source), "html", null, true);
        echo "</td>
      <td>";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "row", [], "any", false, false, true, 28)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[2] ?? null) : null), 28, $this->source), "html", null, true);
        echo "</td>
      <td>";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "row", [], "any", false, false, true, 29)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[3] ?? null) : null), 29, $this->source), "html", null, true);
        echo "</td>
      <td>Q1</td>
      <td>";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "row", [], "any", false, false, true, 31)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[4] ?? null) : null), 31, $this->source), "html", null, true);
        echo "</td>
      <td>";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "row", [], "any", false, false, true, 32)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[5] ?? null) : null), 32, $this->source), "html", null, true);
        echo "</td>
      <td>";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "row", [], "any", false, false, true, 33)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[6] ?? null) : null), 33, $this->source), "html", null, true);
        echo "</td>
      <td>Q2</td>
      <td>";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "row", [], "any", false, false, true, 35)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[7] ?? null) : null), 35, $this->source), "html", null, true);
        echo "</td>
      <td>";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_8 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "row", [], "any", false, false, true, 36)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[8] ?? null) : null), 36, $this->source), "html", null, true);
        echo "</td>
      <td>";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_9 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "row", [], "any", false, false, true, 37)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[9] ?? null) : null), 37, $this->source), "html", null, true);
        echo "</td>
      <td>Q3</td>
      <td>";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_10 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "row", [], "any", false, false, true, 39)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[10] ?? null) : null), 39, $this->source), "html", null, true);
        echo "</td>
      <td>";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_11 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "row", [], "any", false, false, true, 40)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[11] ?? null) : null), 40, $this->source), "html", null, true);
        echo "</td>
      <td>";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_12 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "row", [], "any", false, false, true, 41)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[12] ?? null) : null), 41, $this->source), "html", null, true);
        echo "</td>
      <td>Q4</td>
      <td>YTD</td>
    </tr>
  </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/greyfrut_module4/templates/form-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 41,  113 => 40,  109 => 39,  104 => 37,  100 => 36,  96 => 35,  91 => 33,  87 => 32,  83 => 31,  78 => 29,  74 => 28,  70 => 27,  66 => 26,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/greyfrut_module4/templates/form-table.html.twig", "/var/www/web/modules/custom/greyfrut_module4/templates/form-table.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 26);
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
