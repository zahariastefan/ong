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
class __TwigTemplate_ef886ddc2af527677ec04e18954bbc0efc0ac61b3b8729af70594bcb5983361f extends Template
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
                <li class=\"nav-item\">
";
        // line 19
        echo "                </li>
";
        // line 25
        echo "            </ul>
            ";
        // line 27
        echo "            ";
        // line 42
        echo "
";
        // line 54
        echo "
";
        // line 58
        echo "                <a class=\"nav-link text-black-50\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Log In</a>
                <a href=\"#\" class=\"btn btn-dark\">Sign up</a>
";
        // line 61
        echo "        </div>
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
        return array (  86 => 61,  80 => 58,  77 => 54,  74 => 42,  72 => 27,  69 => 25,  66 => 19,  51 => 6,  47 => 4,  43 => 1,);
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
                <li class=\"nav-item\">
{#                    <a class=\"nav-link\" href=\"{{ path('app_popular_answers') }}\">Answers</a>#}
                </li>
{#                {% if is_granted('ROLE_ADMIN') %}#}
{#                    <li class=\"nav-item\">#}
{#                        <a class=\"nav-link\" href=\"{{ path('admin_dashboard') }}\">Admin</a>#}
{#                    </li>#}
{#                {% endif %}#}
            </ul>
            {#                    {% if is_granted('ROLE_USER') %}  FIRST WAY TO DO AUTH #}
            {#                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}#}
{#            {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}#}
{#                <div class=\"dropdown\">#}
{#                    <button#}
{#                            class=\"dropdown-toggle btn\"#}
{#                            type=\"button\"#}
{#                            id=\"user-dropdown\"#}
{#                            data-bs-toggle=\"dropdown\"#}
{#                            aria-expanded=\"false\"#}
{#                    >#}
{#                        <img#}
{#                                src=\"{{ app.user.avatarUri }}\"#}
{#                                alt=\"{{ app.user.displayName }} Avatar\">#}
{#                    </button>#}
{#                    <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"user-dropdown\">#}

{#                        {% if is_granted('ROLE_PREVIOUS_ADMIN') %}#}
{#                            <li>#}
{#                                <a class=\"dropdown-item\" href=\"{{ path('app_homepage' , {#}
{#                                    '_switch_user':'_exit'#}
{#                                }) }}\">Exit Impersonation</a>#}
{#                            </li>#}
{#                        {% else %}#}
{#                            <li>#}
{#                                <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Log Out</a>#}
{#                            </li>#}
{#                        {% endif %}#}

{#                    </ul>#}
{#                </div>#}
{#            {% else %}#}
                <a class=\"nav-link text-black-50\" href=\"{{ path('app_login') }}\">Log In</a>
                <a href=\"#\" class=\"btn btn-dark\">Sign up</a>
{#            {% endif %}#}
        </div>
    </div>
</nav>", "navbar.html.twig", "C:\\good projects\\ONG with stripe\\ONG symfony 5 new\\ong5\\templates\\navbar.html.twig");
    }
}
