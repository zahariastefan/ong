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
class __TwigTemplate_3ff9cf160257a355befae39da22f4d758fa349264b256e3b7b6b5ce1552a9e12 extends Template
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
        // line 3
        echo (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PREVIOUS_ADMIN")) ? ("style=\"background-color: red !important\"") : (""));
        echo "
>
    <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        echo "\">
            <p class=\"pl-2 d-inline font-weight-bold\" style=\"color: #444;\">
                Stefan Zaharia Portfolio
            </p>
        </a>

        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-collapsable\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbar-collapsable\">
            <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
            ";
        // line 18
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 19
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 20
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
            echo "\">Admin</a>
                </li>
            ";
        }
        // line 23
        echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_dashboard");
        echo "\">My Profile</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_donations");
        echo "\">Donations</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_skills_page");
        echo "\">Skills</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Contact</a>
                </li>
            </ul>




            ";
        // line 40
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 41
            echo "                <div class=\"dropdown\">
                    <button
                            class=\"dropdown-toggle btn\"
                            type=\"button\"
                            id=\"user-dropdown\"
                            data-bs-toggle=\"dropdown\"
                            aria-expanded=\"false\"
                    >
                        <img
                                src=\"https://ui-avatars.com/api/?name=";
            // line 50
            echo twig_escape_filter($this->env, twig_urlencode_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "firstName", [], "any", false, false, false, 50)), "html", null, true);
            echo "&size=32&background=random\"
                                alt=\"";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "firstName", [], "any", false, false, false, 51), "html", null, true);
            echo " Doe Avatar\">
                    </button>
                    <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"user-dropdown\">
                        ";
            // line 54
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PREVIOUS_ADMIN")) {
                // line 55
                echo "                            <li>
                                <a class=\"dropdown-item\" href=\"";
                // line 56
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage", ["_switch_user" => "_exit"]);
                // line 58
                echo "\">Exit Impersonation</a>
                            </li>
                        ";
            } else {
                // line 61
                echo "                            <li>
                                <a class=\"dropdown-item\" href=\"";
                // line 62
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_2fa_enable");
                echo "\">Enable 2fa</a>
                            </li>
                            <li>
                                <a class=\"dropdown-item\" href=\"";
                // line 65
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_2fa_disable");
                echo "\">Disable 2fa</a>
                            </li>
                            <li>
                                <a class=\"dropdown-item\" href=\"";
                // line 68
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
                echo "\">Log Out</a>
                            </li>
                        ";
            }
            // line 71
            echo "                    </ul>
                </div>
                ";
        } else {
            // line 74
            echo "                <a class=\"nav-link text-black-50\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Log In</a>
                <a href=\"";
            // line 75
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" class=\"btn btn-dark\">Sign up</a>
            ";
        }
        // line 77
        echo "
        </div>
    </div>
</nav>


";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 83));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 84
            echo "    <div class=\"alert alert-success\">
        ";
            // line 85
            echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
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
        return array (  193 => 85,  190 => 84,  186 => 83,  178 => 77,  173 => 75,  168 => 74,  163 => 71,  157 => 68,  151 => 65,  145 => 62,  142 => 61,  137 => 58,  135 => 56,  132 => 55,  130 => 54,  124 => 51,  120 => 50,  109 => 41,  107 => 40,  94 => 30,  88 => 27,  82 => 24,  79 => 23,  73 => 20,  70 => 19,  68 => 18,  53 => 6,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav
        class=\"navbar navbar-expand-lg navbar-light bg-light px-1\"
        {{ is_granted('ROLE_PREVIOUS_ADMIN') ? 'style=\"background-color: red !important\"' }}
>
    <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"{{ path('app_homepage') }}\">
            <p class=\"pl-2 d-inline font-weight-bold\" style=\"color: #444;\">
                Stefan Zaharia Portfolio
            </p>
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
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('user_dashboard') }}\">My Profile</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_donations') }}\">Donations</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_skills_page') }}\">Skills</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Contact</a>
                </li>
            </ul>




            {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
                <div class=\"dropdown\">
                    <button
                            class=\"dropdown-toggle btn\"
                            type=\"button\"
                            id=\"user-dropdown\"
                            data-bs-toggle=\"dropdown\"
                            aria-expanded=\"false\"
                    >
                        <img
                                src=\"https://ui-avatars.com/api/?name={{ app.user.firstName|url_encode }}&size=32&background=random\"
                                alt=\"{{ app.user.firstName }} Doe Avatar\">
                    </button>
                    <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"user-dropdown\">
                        {% if is_granted('ROLE_PREVIOUS_ADMIN') %}
                            <li>
                                <a class=\"dropdown-item\" href=\"{{ path('app_homepage' , {
                                    '_switch_user':'_exit'
                                }) }}\">Exit Impersonation</a>
                            </li>
                        {% else %}
                            <li>
                                <a class=\"dropdown-item\" href=\"{{ path('app_2fa_enable') }}\">Enable 2fa</a>
                            </li>
                            <li>
                                <a class=\"dropdown-item\" href=\"{{ path('app_2fa_disable') }}\">Disable 2fa</a>
                            </li>
                            <li>
                                <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Log Out</a>
                            </li>
                        {% endif %}
                    </ul>
                </div>
                {%else%}
                <a class=\"nav-link text-black-50\" href=\"{{ path('app_login') }}\">Log In</a>
                <a href=\"{{ path('app_register') }}\" class=\"btn btn-dark\">Sign up</a>
            {% endif %}

        </div>
    </div>
</nav>


{% for flash in app.flashes('success') %}
    <div class=\"alert alert-success\">
        {{ flash }}
    </div>
{% endfor %}", "navbar.html.twig", "C:\\ONG symfony 5 new\\ong5\\templates\\navbar.html.twig");
    }
}
