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

/* skills_list.html.twig */
class __TwigTemplate_297c2b82f2e78c17f4fa57b5c3d61b4d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "skills_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "skills_list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "skills_list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <ul>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Calculator Ruta</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Inchiriaza o Camera</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Social Network</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Create a Tour for your WebSite</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Trip Designer</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Automatic Tags</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Convert a Photo</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Newsletter</a>
        </li>
    </ul>
    <div class=\"container\">
        <p>
            trip designer:

            calendar and map sync

            Book a taxi and see route and sync with Calendar

            create a card that appear on Map relationated with history list of trips

            Make a Summary

            Datepicker && Clockpicker

            Search and Join Activity




            Social Network:

            generate a demo user

            sorting what to load and export pdf func (Upload Docs && Avatar pics) and Dimension restriction

            in social network filter by family or single etc

            Search User by filters

            Match button?? Am I capable to do that?

            Create a membership?


            Auto-scripts:

            check if video list are still available

            automatic tags




            E-Commerce:

            Luxury Shop

            Automatic invoice system??
        </p>
    </div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "skills_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <ul>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Calculator Ruta</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Inchiriaza o Camera</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Social Network</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Create a Tour for your WebSite</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Trip Designer</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Automatic Tags</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Convert a Photo</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Newsletter</a>
        </li>
    </ul>
    <div class=\"container\">
        <p>
            trip designer:

            calendar and map sync

            Book a taxi and see route and sync with Calendar

            create a card that appear on Map relationated with history list of trips

            Make a Summary

            Datepicker && Clockpicker

            Search and Join Activity




            Social Network:

            generate a demo user

            sorting what to load and export pdf func (Upload Docs && Avatar pics) and Dimension restriction

            in social network filter by family or single etc

            Search User by filters

            Match button?? Am I capable to do that?

            Create a membership?


            Auto-scripts:

            check if video list are still available

            automatic tags




            E-Commerce:

            Luxury Shop

            Automatic invoice system??
        </p>
    </div>


{% endblock %}

", "skills_list.html.twig", "C:\\xampp\\htdocs\\ONG\\ong5ultimate\\templates\\skills_list.html.twig");
    }
}
