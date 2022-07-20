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

/* profile.html.twig */
class __TwigTemplate_bd9927f308500cdc508a642aa59f754b21c0d807dcf408bc30aa53d4c35e4d28 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile.html.twig", 1);
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
    <div class=\"jumbotron-img p-2 mb-2\">
        <div class=\"container\">
            <h1 class=\"display-4\">My Posts</h1>
        </div>
    </div>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ownedPosts"]) || array_key_exists("ownedPosts", $context) ? $context["ownedPosts"] : (function () { throw new RuntimeError('Variable "ownedPosts" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 11
            echo "    <div class=\"col-12 mb-3\">
        <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
            <div class=\"q-container p-4\">
                <div class=\"row\">
                    <div class=\"col-2 text-center\">
                        <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "owner", [], "any", false, false, false, 16), "avatarUri", [], "any", false, false, false, 16), "html", null, true);
            echo "\" width=\"100\" height=\"100\"  alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "owner", [], "any", false, false, false, 16), "avatarUri", [], "any", false, false, false, 16), "html", null, true);
            echo " avatar\">
                        <div class=\"vote-arrows vote-arrows-alt flex-fill pt-2\" style=\"min-width: 90px;\">
                            <span>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "votesString", [], "any", false, false, false, 18), "html", null, true);
            echo " votes</span>
                        </div>
                        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "questionTags", [], "any", false, false, false, 20));
            foreach ($context['_seq'] as $context["_key"] => $context["questionTag"]) {
                // line 21
                echo "                            <span class=\"badge rounded-pill bg-light text-dark\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["questionTag"], "tag", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21), "html", null, true);
                echo "</span>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['questionTag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                    </div>
                    <div class=\"col\">
                        <div class=\"d-flex justify-content-between\">

                        <a class=\"q-title\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\"><h2>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 27), "html", null, true);
            echo "</h2></a>
                            ";
            // line 29
            echo "                            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("EDIT", $context["post"])) {
                // line 30
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_edit", ["slug" => twig_get_attribute($this->env, $this->source,                 // line 31
$context["post"], "slug", [], "any", false, false, false, 31)]), "html", null, true);
                // line 32
                echo "\" class=\"btn btn-secondary btn-sm mb-2\">Edit</a>
                            ";
            }
            // line 34
            echo "                        </div>
                        <div class=\"q-display p-3\">
                            <i class=\"fa fa-quote-left mr-3\"></i>
                            <p class=\"d-inline\">";
            // line 37
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "question", [], "any", false, false, false, 37), 0, 250), "html", null, true);
            echo "</p>
                            <p class=\"pt-4\"><strong>--";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "owner", [], "any", false, false, false, 38), "displayName", [], "any", false, false, false, 38), "html", null, true);
            echo "</strong></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class=\"answer-link\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\" style=\"color: #fff;\">
                <p class=\"q-display-response text-center p-3\">
                    <i class=\"fa fa-magic magic-wand\"></i> ";
            // line 45
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "approvedAnswers", [], "any", false, false, false, 45)), "html", null, true);
            echo " answers
                </p>
            </a>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 51,  157 => 45,  152 => 43,  144 => 38,  140 => 37,  135 => 34,  131 => 32,  129 => 31,  127 => 30,  124 => 29,  118 => 27,  112 => 23,  103 => 21,  99 => 20,  94 => 18,  87 => 16,  80 => 11,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"jumbotron-img p-2 mb-2\">
        <div class=\"container\">
            <h1 class=\"display-4\">My Posts</h1>
        </div>
    </div>
    {% for post in ownedPosts %}
    <div class=\"col-12 mb-3\">
        <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
            <div class=\"q-container p-4\">
                <div class=\"row\">
                    <div class=\"col-2 text-center\">
                        <img src=\"{{ post.owner.avatarUri }}\" width=\"100\" height=\"100\"  alt=\"{{ post.owner.avatarUri }} avatar\">
                        <div class=\"vote-arrows vote-arrows-alt flex-fill pt-2\" style=\"min-width: 90px;\">
                            <span>{{ post.votesString}} votes</span>
                        </div>
                        {% for questionTag in post.questionTags %}
                            <span class=\"badge rounded-pill bg-light text-dark\">{{ questionTag.tag.name }}</span>
                        {% endfor %}
                    </div>
                    <div class=\"col\">
                        <div class=\"d-flex justify-content-between\">

                        <a class=\"q-title\" href=\"{{ path('app_question_show', { slug: post.slug }) }}\"><h2>{{ post.name }}</h2></a>
                            {#                            <h1 class=\"q-title-show\">{{ post.name }}</h1>#}
                            {% if is_granted('EDIT', post) %}
                                <a href=\"{{ path('app_question_edit', {
                                    slug: post.slug
                                }) }}\" class=\"btn btn-secondary btn-sm mb-2\">Edit</a>
                            {% endif %}
                        </div>
                        <div class=\"q-display p-3\">
                            <i class=\"fa fa-quote-left mr-3\"></i>
                            <p class=\"d-inline\">{{ post.question|slice(0, 250) }}</p>
                            <p class=\"pt-4\"><strong>--{{ post.owner.displayName }}</strong></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class=\"answer-link\" href=\"{{ path('app_question_show', { slug: post.slug }) }}\" style=\"color: #fff;\">
                <p class=\"q-display-response text-center p-3\">
                    <i class=\"fa fa-magic magic-wand\"></i> {{ post.approvedAnswers|length }} answers
                </p>
            </a>
        </div>
    </div>
    {% endfor %}

{% endblock %}", "profile.html.twig", "C:\\ONG symfony 5 new\\ong5\\templates\\profile.html.twig");
    }
}
