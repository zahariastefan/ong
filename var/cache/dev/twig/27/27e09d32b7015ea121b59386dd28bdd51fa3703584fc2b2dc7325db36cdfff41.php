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

/* question/homepage.html.twig */
class __TwigTemplate_785f115197fdf7e92c53f94e65d3f4c3f9b3769c8687bd6f2b72b5964897c19d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/homepage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/homepage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "question/homepage.html.twig", 1);
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
        echo "<div class=\"jumbotron-img p-2 mb-2\">
    <div class=\"container\">
        <h1 class=\"display-4\">Welcome to my Blog</h1>
        ";
        // line 7
        if ((isset($context["alertDisabled2fa"]) || array_key_exists("alertDisabled2fa", $context) ? $context["alertDisabled2fa"] : (function () { throw new RuntimeError('Variable "alertDisabled2fa" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "            <div class=\"alert alert-success\">You Successfully Disabled Two Factors Authentication</div>
        ";
        }
        // line 11
        echo "    </div>
</div>
<div class=\"container\">
    ";
        // line 14
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 15
            echo "    <div class=\"row mb-3\">
        <div class=\"col\">
            <a class=\"btn btn-question\" href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_create");
            echo "\">Create a Post</a>
        </div>
    </div>
    ";
        }
        // line 21
        echo "
    <div class=\"row\">
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 24
            echo "            ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, $context["question"]);
            echo "
        <div class=\"col-12 mb-3 card_preview_post_homepage\">
            <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                <div class=\"q-container p-4\">
                    <div class=\"row\">
                        <div class=\"col-2 text-center\">
                            <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "owner", [], "any", false, false, false, 30), "avatarUri", [], "any", false, false, false, 30), "html", null, true);
            echo "\" width=\"100\" height=\"100\"  alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "owner", [], "any", false, false, false, 30), "avatarUri", [], "any", false, false, false, 30), "html", null, true);
            echo " avatar\">
                            <div class=\"vote-arrows vote-arrows-alt flex-fill pt-2\" style=\"min-width: 90px;\">
                                <span>";
            // line 32
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["question"], "likeNr", [], "any", false, false, false, 32) + twig_get_attribute($this->env, $this->source, $context["question"], "unLikeNr", [], "any", false, false, false, 32)), "html", null, true);
            echo " votes</span>
                            </div>
                            ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["question"], "questionTags", [], "any", false, false, false, 34));
            foreach ($context['_seq'] as $context["_key"] => $context["questionTag"]) {
                // line 35
                echo "                                <span class=\"badge rounded-pill bg-light text-dark\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["questionTag"], "tag", [], "any", false, false, false, 35), "name", [], "any", false, false, false, 35), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['questionTag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                        </div>
                        <div class=\"col\">
                            <a class=\"q-title\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["question"], "slug", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\"><h2>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "name", [], "any", false, false, false, 39), "html", null, true);
            echo "</h2></a>
                            <div class=\"q-display p-3 container_content_hmp\">
                                <i class=\"fa fa-quote-left mr-3\"></i>
                                <p class=\"d-inline paragraph_content_homepage\">";
            // line 42
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "question", [], "any", false, false, false, 42), 0, 250), "html", null, true);
            echo "</p>
                                <i class=\"fa fa-quote-right mr-3\"></i>
                                <p class=\"pt-4\"><strong>--";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "owner", [], "any", false, false, false, 44), "displayName", [], "any", false, false, false, 44), "html", null, true);
            echo "</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class=\"answer-link\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["question"], "slug", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\" >
                    <p class=\"q-display-response text-center p-3\">
                        <i class=\"fa fa-magic magic-wand\"></i> ";
            // line 51
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "approvedAnswers", [], "any", false, false, false, 51)), "html", null, true);
            echo " comments
                    </p>
                </a>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
";
        // line 59
        echo "    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "question/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 59,  182 => 57,  170 => 51,  165 => 49,  157 => 44,  152 => 42,  144 => 39,  140 => 37,  131 => 35,  127 => 34,  122 => 32,  115 => 30,  105 => 24,  101 => 23,  97 => 21,  90 => 17,  86 => 15,  84 => 14,  79 => 11,  75 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"jumbotron-img p-2 mb-2\">
    <div class=\"container\">
        <h1 class=\"display-4\">Welcome to my Blog</h1>
        {% if alertDisabled2fa %}
            <div class=\"alert alert-success\">You Successfully Disabled Two Factors Authentication</div>
        {% endif %}
{#        <div class=\"lead\">And even answers for those questions you didn't think to ask!</div>#}
    </div>
</div>
<div class=\"container\">
    {% if is_granted('ROLE_ADMIN') %}
    <div class=\"row mb-3\">
        <div class=\"col\">
            <a class=\"btn btn-question\" href=\"{{ path('app_post_create') }}\">Create a Post</a>
        </div>
    </div>
    {% endif %}

    <div class=\"row\">
        {% for question in posts %}
            {{ dump(question) }}
        <div class=\"col-12 mb-3 card_preview_post_homepage\">
            <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                <div class=\"q-container p-4\">
                    <div class=\"row\">
                        <div class=\"col-2 text-center\">
                            <img src=\"{{ question.owner.avatarUri }}\" width=\"100\" height=\"100\"  alt=\"{{ question.owner.avatarUri }} avatar\">
                            <div class=\"vote-arrows vote-arrows-alt flex-fill pt-2\" style=\"min-width: 90px;\">
                                <span>{{ question.likeNr + question.unLikeNr }} votes</span>
                            </div>
                            {% for questionTag in question.questionTags %}
                                <span class=\"badge rounded-pill bg-light text-dark\">{{ questionTag.tag.name }}</span>
                            {% endfor %}
                        </div>
                        <div class=\"col\">
                            <a class=\"q-title\" href=\"{{ path('app_question_show', { slug: question.slug }) }}\"><h2>{{ question.name }}</h2></a>
                            <div class=\"q-display p-3 container_content_hmp\">
                                <i class=\"fa fa-quote-left mr-3\"></i>
                                <p class=\"d-inline paragraph_content_homepage\">{{ question.question|slice(0, 250) }}</p>
                                <i class=\"fa fa-quote-right mr-3\"></i>
                                <p class=\"pt-4\"><strong>--{{ question.owner.displayName }}</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class=\"answer-link\" href=\"{{ path('app_question_show', { slug: question.slug }) }}\" >
                    <p class=\"q-display-response text-center p-3\">
                        <i class=\"fa fa-magic magic-wand\"></i> {{ question.approvedAnswers|length }} comments
                    </p>
                </a>
            </div>
        </div>
        {% endfor %}

{#        {{ pagerfanta(pager) }}#}
    </div>
</div>
{% endblock %}

", "question/homepage.html.twig", "C:\\xampp\\htdocs\\ong5\\templates\\question\\homepage.html.twig");
    }
}
