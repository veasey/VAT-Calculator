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

/* vat_calculator/form.html.twig */
class __TwigTemplate_928ae49b6eb389b82f3c0893d35c311d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vat_calculator/form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vat_calculator/form.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>VAT Calculator</h1>

";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'form');
        echo "

<p><a href=\"/export\" target=\"_blank\">Export as CSV</a></p>
<p><a href=\"/clear\">Clear History</a></p>

";
        // line 11
        if ((isset($context["history"]) || array_key_exists("history", $context) ? $context["history"] : (function () { throw new RuntimeError('Variable "history" does not exist.', 11, $this->source); })())) {
            // line 12
            echo "    <table class=\"table\">
        <thead>
            <tr>
                <th>Amount</th>
                <th>rate</th>
                <th>Amount Excluding VAT</th>
                <th>Amount Including VAT</th>
                <th>VAT Amount</th>           
            </tr>
        </thead>
    ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["history"]) || array_key_exists("history", $context) ? $context["history"] : (function () { throw new RuntimeError('Variable "history" does not exist.', 22, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 23
                echo "        <tr>
            <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "amount", [], "any", false, false, false, 24), "html", null, true);
                echo "</td>
            <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "rate", [], "any", false, false, false, 25), "html", null, true);
                echo "</td>
            <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "inc_vat", [], "any", false, false, false, 26), "html", null, true);
                echo "</td>
            <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "exl_vat", [], "any", false, false, false, 27), "html", null, true);
                echo "</td>
            <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "vat", [], "any", false, false, false, 28), "html", null, true);
                echo "</td>
        </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "    </table>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "vat_calculator/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 31,  108 => 28,  104 => 27,  100 => 26,  96 => 25,  92 => 24,  89 => 23,  85 => 22,  73 => 12,  71 => 11,  63 => 6,  59 => 4,  52 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/vat-calculator/form.html.twig #}
{% extends 'base.html.twig' %}
{% block body %}
<h1>VAT Calculator</h1>

{{ form(form) }}

<p><a href=\"/export\" target=\"_blank\">Export as CSV</a></p>
<p><a href=\"/clear\">Clear History</a></p>

{% if history %}
    <table class=\"table\">
        <thead>
            <tr>
                <th>Amount</th>
                <th>rate</th>
                <th>Amount Excluding VAT</th>
                <th>Amount Including VAT</th>
                <th>VAT Amount</th>           
            </tr>
        </thead>
    {% for row in history %}
        <tr>
            <td>{{ row.amount }}</td>
            <td>{{ row.rate }}</td>
            <td>{{ row.inc_vat }}</td>
            <td>{{ row.exl_vat }}</td>
            <td>{{ row.vat }}</td>
        </tr>
    {% endfor %}
    </table>
{% endif %}
{% endblock %}
", "vat_calculator/form.html.twig", "C:\\Users\\Clint\\Documents\\Repos\\vat_calc\\templates\\vat_calculator\\form.html.twig");
    }
}
