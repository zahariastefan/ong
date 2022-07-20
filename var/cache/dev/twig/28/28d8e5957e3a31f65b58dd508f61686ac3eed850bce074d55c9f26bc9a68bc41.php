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
class __TwigTemplate_70c8b0b158c78b98d3d55d4779ff1599eced45546813cabc2428789fd9edb842 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "skills_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "skills_list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "skills_list.html.twig", 1);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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

", "skills_list.html.twig", "C:\\xampp\\htdocs\\ong5\\templates\\skills_list.html.twig");
    }
}
