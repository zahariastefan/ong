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

/* trip/modal-create-trip.html.twig */
class __TwigTemplate_fea0a7b231f97a26be13c0e6a7b0342f extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trip/modal-create-trip.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trip/modal-create-trip.html.twig"));

        // line 1
        echo "<!-- Modal -->
<div class=\"modal fade\" id=\"fadeInOutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"modal-title\">Choose a City</h5>
                <button type=\"button\" class=\"close close-modal-x-button\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
";
        // line 12
        echo "
            <div class=\"modal-body\">
                <p class=\"datepicker-p\">Select from available date: <input type=\"text\" id=\"datepicker\" required></p>

                <div class=\"cities-listing\"></div>
                <div class=\"activities-list\"></div>
                </div>
                <button type=\"submit\" class=\"hidden-button\" style=\"display: none\"></button>
";
        // line 21
        echo "
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" >Close</button>
                <button type=\"button\" class=\"btn btn-primary\">Next</button>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "trip/modal-create-trip.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  65 => 21,  55 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Modal -->
<div class=\"modal fade\" id=\"fadeInOutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"modal-title\">Choose a City</h5>
                <button type=\"button\" class=\"close close-modal-x-button\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
{#            <form action=\"{{ path('app_trip_create') }}\" id=\"form-modal-body\">#}

            <div class=\"modal-body\">
                <p class=\"datepicker-p\">Select from available date: <input type=\"text\" id=\"datepicker\" required></p>

                <div class=\"cities-listing\"></div>
                <div class=\"activities-list\"></div>
                </div>
                <button type=\"submit\" class=\"hidden-button\" style=\"display: none\"></button>
{#            </form>#}

            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" >Close</button>
                <button type=\"button\" class=\"btn btn-primary\">Next</button>
            </div>
        </div>
    </div>
</div>", "trip/modal-create-trip.html.twig", "C:\\xampp\\htdocs\\ONG\\ong5ultimate\\templates\\trip\\modal-create-trip.html.twig");
    }
}
