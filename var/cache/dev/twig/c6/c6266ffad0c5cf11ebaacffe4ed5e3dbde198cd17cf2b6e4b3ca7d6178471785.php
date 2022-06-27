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

/* question/show.html.twig */
class __TwigTemplate_0ca8673967afbe9070e4e758a097e9b6b53a0dccbd12c3672e56fd0df8199edb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "question/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Question: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-12\">
            <h2 class=\"my-4\">Question:</h2>
            <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                <div class=\"q-container-show p-4\">
                    <div class=\"row\">
                        <div class=\"col-2 text-center\">
                            <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 14, $this->source); })()), "owner", [], "any", false, false, false, 14), "avatarUri", [], "any", false, false, false, 14), "html", null, true);
        echo "\" width=\"100\" height=\"100\"  alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 14, $this->source); })()), "owner", [], "any", false, false, false, 14), "avatarUri", [], "any", false, false, false, 14), "html", null, true);
        echo " avatar\">
                            <div class=\"mt-3\">
                                <small>
                                    ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 17, $this->source); })()), "askedAt", [], "any", false, false, false, 17)) {
            // line 18
            echo "                                        Asked <br>
                                        ";
            // line 19
            echo $this->extensions['Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension']->diff(twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 19, $this->source); })()), "askedAt", [], "any", false, false, false, 19));
            echo "
                                    ";
        } else {
            // line 21
            echo "                                        (unpublished)
                                    ";
        }
        // line 23
        echo "                                </small>

                                <form action=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_vote", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 25, $this->source); })()), "slug", [], "any", false, false, false, 25)]), "html", null, true);
        echo "\" method=\"POST\">
                                    <div class=\"vote-arrows vote-arrows-alt flex-fill pt-2\" style=\"min-width: 90px;\">
                                        <button class=\"vote-up btn btn-link\" name=\"direction\" value=\"up\"><i class=\"far fa-arrow-alt-circle-up\"></i></button>
                                        <button class=\"vote-down btn btn-link\" name=\"direction\" value=\"down\"><i class=\"far fa-arrow-alt-circle-down\"></i></button>
                                        <span>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 29, $this->source); })()), "votesString", [], "any", false, false, false, 29), "html", null, true);
        echo "</span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class=\"col\">
                            <div class=\"d-flex justify-content-between\">
                                <h1 class=\"q-title-show\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 36, $this->source); })()), "name", [], "any", false, false, false, 36), "html", null, true);
        echo "</h1>
                                ";
        // line 37
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("EDIT", (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 37, $this->source); })()))) {
            // line 38
            echo "                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_edit", ["slug" => twig_get_attribute($this->env, $this->source,             // line 39
(isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 39, $this->source); })()), "slug", [], "any", false, false, false, 39)]), "html", null, true);
            // line 40
            echo "\" class=\"btn btn-secondary btn-sm mb-2\">Edit</a>
                                ";
        }
        // line 42
        echo "                            </div>
                            <div class=\"q-display p-3\">
                                <i class=\"fa fa-quote-left mr-3\"></i>
                                <p class=\"d-inline\">";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 45, $this->source); })()), "question", [], "any", false, false, false, 45), "html", null, true);
        echo "</p>
                                <p class=\"pt-4\"><strong>--";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 46, $this->source); })()), "owner", [], "any", false, false, false, 46), "displayName", [], "any", false, false, false, 46), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 46, $this->source); })()), "owner", [], "any", false, false, false, 46), "email", [], "any", false, false, false, 46), "html", null, true);
        echo ")</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"d-flex justify-content-between my-4\">
        <h2 class=\"\">Answers <span style=\"font-size:1.2rem;\">(";
        // line 56
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 56, $this->source); })()), "approvedAnswers", [], "any", false, false, false, 56)), "html", null, true);
        echo ")</span></h2>
        <button class=\"btn btn-sm btn-secondary\">Submit an Answer</button>
    </div>



    <ul class=\"list-unstyled\">
        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 63, $this->source); })()), "approvedAnswers", [], "any", false, false, false, 63));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
            // line 64
            echo "            ";
            echo twig_include($this->env, $context, "answer/_answer.html.twig");
            echo "
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "    </ul>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "question/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 66,  207 => 64,  190 => 63,  180 => 56,  165 => 46,  161 => 45,  156 => 42,  152 => 40,  150 => 39,  148 => 38,  146 => 37,  142 => 36,  132 => 29,  125 => 25,  121 => 23,  117 => 21,  112 => 19,  109 => 18,  107 => 17,  99 => 14,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Question: {{ question.name }}{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-12\">
            <h2 class=\"my-4\">Question:</h2>
            <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                <div class=\"q-container-show p-4\">
                    <div class=\"row\">
                        <div class=\"col-2 text-center\">
                            <img src=\"{{ question.owner.avatarUri }}\" width=\"100\" height=\"100\"  alt=\"{{ question.owner.avatarUri }} avatar\">
                            <div class=\"mt-3\">
                                <small>
                                    {% if question.askedAt %}
                                        Asked <br>
                                        {{ question.askedAt|ago }}
                                    {% else %}
                                        (unpublished)
                                    {% endif %}
                                </small>

                                <form action=\"{{ path('app_question_vote', { slug: question.slug }) }}\" method=\"POST\">
                                    <div class=\"vote-arrows vote-arrows-alt flex-fill pt-2\" style=\"min-width: 90px;\">
                                        <button class=\"vote-up btn btn-link\" name=\"direction\" value=\"up\"><i class=\"far fa-arrow-alt-circle-up\"></i></button>
                                        <button class=\"vote-down btn btn-link\" name=\"direction\" value=\"down\"><i class=\"far fa-arrow-alt-circle-down\"></i></button>
                                        <span>{{ question.votesString }}</span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class=\"col\">
                            <div class=\"d-flex justify-content-between\">
                                <h1 class=\"q-title-show\">{{ question.name }}</h1>
                                {% if is_granted('EDIT', question) %}
                                    <a href=\"{{ path('app_question_edit', {
                                        slug: question.slug
                                    }) }}\" class=\"btn btn-secondary btn-sm mb-2\">Edit</a>
                                {% endif %}
                            </div>
                            <div class=\"q-display p-3\">
                                <i class=\"fa fa-quote-left mr-3\"></i>
                                <p class=\"d-inline\">{{ question.question }}</p>
                                <p class=\"pt-4\"><strong>--{{ question.owner.displayName }} ({{ question.owner.email }})</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"d-flex justify-content-between my-4\">
        <h2 class=\"\">Answers <span style=\"font-size:1.2rem;\">({{ question.approvedAnswers|length }})</span></h2>
        <button class=\"btn btn-sm btn-secondary\">Submit an Answer</button>
    </div>



    <ul class=\"list-unstyled\">
        {% for answer in question.approvedAnswers %}
            {{ include('answer/_answer.html.twig') }}
        {% endfor %}
    </ul>
</div>

{#    {% block javascripts %}#}
{#        {{ parent() }}#}
{#        <script src=\"{{ asset('js/question_show.js') }}\"></script>#}
{#    {% endblock %}#}
{% endblock %}
", "question/show.html.twig", "C:\\ONG symfony 5 new\\ong5\\templates\\question\\show.html.twig");
    }
}
