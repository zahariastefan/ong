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

/* security/2fa_form.html.twig */
class __TwigTemplate_7d8b802b68ffce9ae31bd4705556f8e0b43f6ffe38c078cd6e1e7ca3637b8294 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/2fa_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/2fa_form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/2fa_form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Two Factor Auth";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"login-form bg-light mt-4 p-4\">
                <h1 class=\"h3 mb-3 font-weight-normal\">Two Factor Authentication</h1>

                <p>
                    Open your Authenticator app and type in the number.
                </p>
                ";
        // line 16
        echo "
                ";
        // line 18
        echo "                ";
        if ((isset($context["authenticationError"]) || array_key_exists("authenticationError", $context) ? $context["authenticationError"] : (function () { throw new RuntimeError('Variable "authenticationError" does not exist.', 18, $this->source); })())) {
            // line 19
            echo "                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["authenticationError"]) || array_key_exists("authenticationError", $context) ? $context["authenticationError"] : (function () { throw new RuntimeError('Variable "authenticationError" does not exist.', 19, $this->source); })()), (isset($context["authenticationErrorData"]) || array_key_exists("authenticationErrorData", $context) ? $context["authenticationErrorData"] : (function () { throw new RuntimeError('Variable "authenticationErrorData" does not exist.', 19, $this->source); })()), "SchebTwoFactorBundle"), "html", null, true);
            echo "</div>
                ";
        }
        // line 21
        echo "
                <form class=\"form\" action=\"";
        // line 22
        (((isset($context["checkPathUrl"]) || array_key_exists("checkPathUrl", $context) ? $context["checkPathUrl"] : (function () { throw new RuntimeError('Variable "checkPathUrl" does not exist.', 22, $this->source); })())) ? (print (twig_escape_filter($this->env, (isset($context["checkPathUrl"]) || array_key_exists("checkPathUrl", $context) ? $context["checkPathUrl"] : (function () { throw new RuntimeError('Variable "checkPathUrl" does not exist.', 22, $this->source); })()), "html", null, true))) : (print ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["checkPathRoute"]) || array_key_exists("checkPathRoute", $context) ? $context["checkPathRoute"] : (function () { throw new RuntimeError('Variable "checkPathRoute" does not exist.', 22, $this->source); })())))));
        echo "\" method=\"post\">
                    <p class=\"widget\">
                        <input
                                id=\"_auth_code\"
                                type=\"text\"
                                name=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["authCodeParameterName"]) || array_key_exists("authCodeParameterName", $context) ? $context["authCodeParameterName"] : (function () { throw new RuntimeError('Variable "authCodeParameterName" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "\"
                                autocomplete=\"one-time-code\"
                                class=\"form-control\"
                                autofocus
                                ";
        // line 37
        echo "                        />
                    </p>

                    ";
        // line 40
        if ((isset($context["displayTrustedOption"]) || array_key_exists("displayTrustedOption", $context) ? $context["displayTrustedOption"] : (function () { throw new RuntimeError('Variable "displayTrustedOption" does not exist.', 40, $this->source); })())) {
            // line 41
            echo "                        <p class=\"widget\"><label for=\"_trusted\"><input id=\"_trusted\" type=\"checkbox\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["trustedParameterName"]) || array_key_exists("trustedParameterName", $context) ? $context["trustedParameterName"] : (function () { throw new RuntimeError('Variable "trustedParameterName" does not exist.', 41, $this->source); })()), "html", null, true);
            echo "\" /> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("trusted", [], "SchebTwoFactorBundle"), "html", null, true);
            echo "</label></p>
                    ";
        }
        // line 43
        echo "                    ";
        if ((isset($context["isCsrfProtectionEnabled"]) || array_key_exists("isCsrfProtectionEnabled", $context) ? $context["isCsrfProtectionEnabled"] : (function () { throw new RuntimeError('Variable "isCsrfProtectionEnabled" does not exist.', 43, $this->source); })())) {
            // line 44
            echo "                        <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["csrfParameterName"]) || array_key_exists("csrfParameterName", $context) ? $context["csrfParameterName"] : (function () { throw new RuntimeError('Variable "csrfParameterName" does not exist.', 44, $this->source); })()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken((isset($context["csrfTokenId"]) || array_key_exists("csrfTokenId", $context) ? $context["csrfTokenId"] : (function () { throw new RuntimeError('Variable "csrfTokenId" does not exist.', 44, $this->source); })())), "html", null, true);
            echo "\">
                    ";
        }
        // line 46
        echo "                    <a href=\"";
        echo twig_escape_filter($this->env, (isset($context["logoutPath"]) || array_key_exists("logoutPath", $context) ? $context["logoutPath"] : (function () { throw new RuntimeError('Variable "logoutPath" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "\" class=\"btn btn-link\">
                        ";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cancel", [], "SchebTwoFactorBundle"), "html", null, true);
        echo "
                    </a>
                    <button type=\"submit\" class=\"btn btn-primary\">
                        ";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login", [], "SchebTwoFactorBundle"), "html", null, true);
        echo "
                    </button>
                </form>

            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/2fa_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 50,  159 => 47,  154 => 46,  146 => 44,  143 => 43,  135 => 41,  133 => 40,  128 => 37,  121 => 27,  113 => 22,  110 => 21,  104 => 19,  101 => 18,  98 => 16,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Two Factor Auth{% endblock %}
{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"login-form bg-light mt-4 p-4\">
                <h1 class=\"h3 mb-3 font-weight-normal\">Two Factor Authentication</h1>

                <p>
                    Open your Authenticator app and type in the number.
                </p>
                {#
                This is a demo template for the authentication form. Please consider overwriting this with your own template,
                especially when you're using different route names than the ones used here.
                #}

                {# Authentication errors #}
                {% if authenticationError %}
                    <div class=\"alert alert-danger\">{{ authenticationError|trans(authenticationErrorData, 'SchebTwoFactorBundle') }}</div>
                {% endif %}

                <form class=\"form\" action=\"{{ checkPathUrl ? checkPathUrl: path(checkPathRoute) }}\" method=\"post\">
                    <p class=\"widget\">
                        <input
                                id=\"_auth_code\"
                                type=\"text\"
                                name=\"{{ authCodeParameterName }}\"
                                autocomplete=\"one-time-code\"
                                class=\"form-control\"
                                autofocus
                                {#
                                https://www.twilio.com/blog/html-attributes-two-factor-authentication-autocomplete
                                If your 2fa methods are using numeric codes only, add these attributes for better user experience:
                                inputmode=\"numeric\"
                                pattern=\"[0-9]*\"
                                #}
                        />
                    </p>

                    {% if displayTrustedOption %}
                        <p class=\"widget\"><label for=\"_trusted\"><input id=\"_trusted\" type=\"checkbox\" name=\"{{ trustedParameterName }}\" /> {{ \"trusted\"|trans({}, 'SchebTwoFactorBundle') }}</label></p>
                    {% endif %}
                    {% if isCsrfProtectionEnabled %}
                        <input type=\"hidden\" name=\"{{ csrfParameterName }}\" value=\"{{ csrf_token(csrfTokenId) }}\">
                    {% endif %}
                    <a href=\"{{ logoutPath }}\" class=\"btn btn-link\">
                        {{ \"cancel\"|trans({}, 'SchebTwoFactorBundle') }}
                    </a>
                    <button type=\"submit\" class=\"btn btn-primary\">
                        {{ \"login\"|trans({}, 'SchebTwoFactorBundle') }}
                    </button>
                </form>

            </div>
        </div>
    </div>
{% endblock %}", "security/2fa_form.html.twig", "C:\\xampp\\htdocs\\ong5\\templates\\security\\2fa_form.html.twig");
    }
}
