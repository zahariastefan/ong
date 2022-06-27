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

/* donations.html.twig */
class __TwigTemplate_de1969e36bcc86b0754f37f66154c3c9885a79f98bf271c0ae6be68c6dc10dcc extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "donations.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "donations.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "donations.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dataCauze"]) || array_key_exists("dataCauze", $context) ? $context["dataCauze"] : (function () { throw new RuntimeError('Variable "dataCauze" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 5
            echo "        <table class=\"table table-dark\">
            <tr>
                <th scope=\"col\">Name of Product</th>
                <th scope=\"col\">Date of purchase</th>
                <th scope=\"col\">Amount of Payment</th>
            </tr>
            <tr>
                <th scope=\"col\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "name", [], "any", false, false, false, 12), "html", null, true);
            echo "</th>
                <th scope=\"col\">";
            // line 13
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "date", [], "any", false, false, false, 13), "Y-m-d"), "html", null, true);
            echo "</th>
                <th scope=\"col\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "amount", [], "any", false, false, false, 14), "html", null, true);
            echo "</th>
            </tr>

        </table>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 20
            echo "        <div class=\"product\">
            <div class=\"description\">
                <h3>Name : ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 22), "html", null, true);
            echo "</h3>
                ";
            // line 24
            echo "            </div>
        </div>
        <form action=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_checkout");
            echo "\" method=\"POST\">
            <input type=\"hidden\" name=\"price\" value=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "default_price", [], "any", false, false, false, 27), "html", null, true);
            echo "\">
            <h5>Cat doresti sa donezi? : <input type=\"number\" name=\"quantity\"></h5>


            <label for=\"femei\">Femei in dificultati</label>
            <input type=\"checkbox\" name=\"cauza\" value=\"0\">

            <button type=\"submit\" id=\"checkout-button\">Checkout</button>
        </form>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "donations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 27,  118 => 26,  114 => 24,  110 => 22,  106 => 20,  101 => 19,  90 => 14,  86 => 13,  82 => 12,  73 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {% for data in dataCauze %}
        <table class=\"table table-dark\">
            <tr>
                <th scope=\"col\">Name of Product</th>
                <th scope=\"col\">Date of purchase</th>
                <th scope=\"col\">Amount of Payment</th>
            </tr>
            <tr>
                <th scope=\"col\">{{data.name}}</th>
                <th scope=\"col\">{{data.date|date('Y-m-d')}}</th>
                <th scope=\"col\">{{data.amount}}</th>
            </tr>

        </table>
    {% endfor %}
    {% for product in products %}
        <div class=\"product\">
            <div class=\"description\">
                <h3>Name : {{product.name }}</h3>
                {#                <h5>Price : {{product.fPrice / 100 }} RON</h5>#}
            </div>
        </div>
        <form action=\"{{ path('app_checkout') }}\" method=\"POST\">
            <input type=\"hidden\" name=\"price\" value=\"{{product.default_price}}\">
            <h5>Cat doresti sa donezi? : <input type=\"number\" name=\"quantity\"></h5>


            <label for=\"femei\">Femei in dificultati</label>
            <input type=\"checkbox\" name=\"cauza\" value=\"0\">

            <button type=\"submit\" id=\"checkout-button\">Checkout</button>
        </form>
    {% endfor %}
{% endblock %}", "donations.html.twig", "C:\\ONG symfony 5 new\\ong5\\templates\\donations.html.twig");
    }
}
