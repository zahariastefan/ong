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

/* navbar.html.twig */
class __TwigTemplate_1f3fdc5905818174f00f35f40e2082775ef8bae1db4d79e24ec8372946c0b4bd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        echo "<nav
        class=\"navbar navbar-expand-lg navbar-light bg-light px-1\"
";
        // line 4
        echo ">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        echo "\">
            <p class=\"pl-2 d-inline font-weight-bold\" style=\"color: #444;\">
                Organizație Neguvernamentală </p>
        </a>

        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-collapsable\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbar-collapsable\">
            <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
            ";
        // line 17
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 18
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
            echo "\">Admin</a>
                </li>
            ";
        }
        // line 22
        echo "            </ul>
            ";
        // line 23
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 24
            echo "            <a class=\"nav-link text-black-50\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Log Out</a>
            ";
        } else {
            // line 26
            echo "                <a class=\"nav-link text-black-50\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Log In</a>
                <a href=\"#\" class=\"btn btn-dark\">Sign up</a>
            ";
        }
        // line 29
        echo "
        </div>
    </div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 29,  87 => 26,  81 => 24,  79 => 23,  76 => 22,  70 => 19,  67 => 18,  65 => 17,  51 => 6,  47 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav
        class=\"navbar navbar-expand-lg navbar-light bg-light px-1\"
{#        {{ is_granted('ROLE_PREVIOUS_ADMIN') ? 'style=\"background-color: red !important\"' }}#}
>
    <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"{{ path('app_homepage') }}\">
            <p class=\"pl-2 d-inline font-weight-bold\" style=\"color: #444;\">
                Organizație Neguvernamentală </p>
        </a>

        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-collapsable\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbar-collapsable\">
            <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
            {% if is_granted('ROLE_ADMIN') %}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('admin_dashboard') }}\">Admin</a>
                </li>
            {% endif %}
            </ul>
            {% if is_granted('ROLE_USER') %}
            <a class=\"nav-link text-black-50\" href=\"{{ path('app_logout') }}\">Log Out</a>
            {% else %}
                <a class=\"nav-link text-black-50\" href=\"{{ path('app_login') }}\">Log In</a>
                <a href=\"#\" class=\"btn btn-dark\">Sign up</a>
            {% endif %}

        </div>
    </div>
</nav>", "navbar.html.twig", "C:\\good projects\\ONG with stripe\\ONG symfony 5 new\\ong5\\templates\\navbar.html.twig");
    }
}
