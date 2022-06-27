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
class __TwigTemplate_0475203979d8e3090294a8017763b81c1197a7170dd4c7d3165abd66a8c5167a extends Template
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
        <h1 class=\"display-4\">Your Questions Answered</h1>
        <div class=\"lead\">And even answers for those questions you didn't think to ask!</div>
    </div>
</div>
<div class=\"container\">
    <div class=\"row mb-3\">
        <div class=\"col\">
            <button class=\"btn btn-question\">Ask a Question</button>
        </div>
    </div>
    <div class=\"row\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pager"]) || array_key_exists("pager", $context) ? $context["pager"] : (function () { throw new RuntimeError('Variable "pager" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 18
            echo "        <div class=\"col-12 mb-3\">
            <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                <div class=\"q-container p-4\">
                    <div class=\"row\">
                        <div class=\"col-2 text-center\">
                            <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "owner", [], "any", false, false, false, 23), "avatarUri", [], "any", false, false, false, 23), "html", null, true);
            echo "\" width=\"100\" height=\"100\"  alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "owner", [], "any", false, false, false, 23), "avatarUri", [], "any", false, false, false, 23), "html", null, true);
            echo " avatar\">
                            <div class=\"vote-arrows vote-arrows-alt flex-fill pt-2\" style=\"min-width: 90px;\">
                                <span>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "votesString", [], "any", false, false, false, 25), "html", null, true);
            echo " votes</span>
                            </div>
                            ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["question"], "questionTags", [], "any", false, false, false, 27));
            foreach ($context['_seq'] as $context["_key"] => $context["questionTag"]) {
                // line 28
                echo "                                <span class=\"badge rounded-pill bg-light text-dark\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["questionTag"], "tag", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['questionTag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                        </div>
                        <div class=\"col\">
                            <a class=\"q-title\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["question"], "slug", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\"><h2>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "name", [], "any", false, false, false, 32), "html", null, true);
            echo "</h2></a>
                            <div class=\"q-display p-3\">
                                <i class=\"fa fa-quote-left mr-3\"></i>
                                <p class=\"d-inline\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "question", [], "any", false, false, false, 35), "html", null, true);
            echo "</p>
                                <p class=\"pt-4\"><strong>--";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "owner", [], "any", false, false, false, 36), "displayName", [], "any", false, false, false, 36), "html", null, true);
            echo "</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class=\"answer-link\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["question"], "slug", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\" style=\"color: #fff;\">
                    <p class=\"q-display-response text-center p-3\">
                        <i class=\"fa fa-magic magic-wand\"></i> ";
            // line 43
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "approvedAnswers", [], "any", false, false, false, 43)), "html", null, true);
            echo " answers
                    </p>
                </a>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
        ";
        // line 50
        echo $this->env->getRuntime('Pagerfanta\Twig\Extension\PagerfantaRuntime')->renderPagerfanta((isset($context["pager"]) || array_key_exists("pager", $context) ? $context["pager"] : (function () { throw new RuntimeError('Variable "pager" does not exist.', 50, $this->source); })()));
        echo "
    </div>
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
        return array (  163 => 50,  160 => 49,  148 => 43,  143 => 41,  135 => 36,  131 => 35,  123 => 32,  119 => 30,  110 => 28,  106 => 27,  101 => 25,  94 => 23,  87 => 18,  83 => 17,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"jumbotron-img p-2 mb-2\">
    <div class=\"container\">
        <h1 class=\"display-4\">Your Questions Answered</h1>
        <div class=\"lead\">And even answers for those questions you didn't think to ask!</div>
    </div>
</div>
<div class=\"container\">
    <div class=\"row mb-3\">
        <div class=\"col\">
            <button class=\"btn btn-question\">Ask a Question</button>
        </div>
    </div>
    <div class=\"row\">
        {% for question in pager %}
        <div class=\"col-12 mb-3\">
            <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                <div class=\"q-container p-4\">
                    <div class=\"row\">
                        <div class=\"col-2 text-center\">
                            <img src=\"{{ question.owner.avatarUri }}\" width=\"100\" height=\"100\"  alt=\"{{ question.owner.avatarUri }} avatar\">
                            <div class=\"vote-arrows vote-arrows-alt flex-fill pt-2\" style=\"min-width: 90px;\">
                                <span>{{ question.votesString}} votes</span>
                            </div>
                            {% for questionTag in question.questionTags %}
                                <span class=\"badge rounded-pill bg-light text-dark\">{{ questionTag.tag.name }}</span>
                            {% endfor %}
                        </div>
                        <div class=\"col\">
                            <a class=\"q-title\" href=\"{{ path('app_question_show', { slug: question.slug }) }}\"><h2>{{ question.name }}</h2></a>
                            <div class=\"q-display p-3\">
                                <i class=\"fa fa-quote-left mr-3\"></i>
                                <p class=\"d-inline\">{{ question.question }}</p>
                                <p class=\"pt-4\"><strong>--{{ question.owner.displayName }}</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class=\"answer-link\" href=\"{{ path('app_question_show', { slug: question.slug }) }}\" style=\"color: #fff;\">
                    <p class=\"q-display-response text-center p-3\">
                        <i class=\"fa fa-magic magic-wand\"></i> {{ question.approvedAnswers|length}} answers
                    </p>
                </a>
            </div>
        </div>
        {% endfor %}

        {{ pagerfanta(pager) }}
    </div>
</div>
{% endblock %}

", "question/homepage.html.twig", "C:\\ONG symfony 5 new\\ong5\\templates\\question\\homepage.html.twig");
    }
}
