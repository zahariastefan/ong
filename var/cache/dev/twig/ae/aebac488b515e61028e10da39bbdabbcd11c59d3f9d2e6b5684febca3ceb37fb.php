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
class __TwigTemplate_692e07fe2a53d31dea65120d560a4de721a68b776050947b78a5e4d750c951fb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trip/modal-create-trip.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trip/modal-create-trip.html.twig"));

        // line 1
        echo "<!-- Modal -->
<div class=\"modal fade\" id=\"fadeInOutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"modal-title\">Choose a City <span></span></h5>
                <button type=\"button\" class=\"close close-modal-x-button\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
";
        // line 12
        echo "                <div class=\"modal-body\">
                    <div class=\"cities-listing\"></div>
                    <div class=\"activities-list\"></div>
                </div>
                <p>Date: <input type=\"text\" id=\"datepicker\"></p>
                <button type=\"submit\" class=\"hidden-button\" style=\"display: none\"></button>
";
        // line 19
        echo "
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" >Close</button>
                <button type=\"button\" class=\"btn btn-primary\">Next</button>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "trip/modal-create-trip.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 19,  55 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Modal -->
<div class=\"modal fade\" id=\"fadeInOutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"modal-title\">Choose a City <span></span></h5>
                <button type=\"button\" class=\"close close-modal-x-button\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
{#            <form action=\"{{ path('app_trip_create') }}\" id=\"form-modal-body\">#}
                <div class=\"modal-body\">
                    <div class=\"cities-listing\"></div>
                    <div class=\"activities-list\"></div>
                </div>
                <p>Date: <input type=\"text\" id=\"datepicker\"></p>
                <button type=\"submit\" class=\"hidden-button\" style=\"display: none\"></button>
{#            </form>#}

            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" >Close</button>
                <button type=\"button\" class=\"btn btn-primary\">Next</button>
            </div>
        </div>
    </div>
</div>", "trip/modal-create-trip.html.twig", "C:\\xampp\\htdocs\\ong5\\templates\\trip\\modal-create-trip.html.twig");
    }
}
