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

/* homepage.html.twig */
class __TwigTemplate_637a2dadbbd60153f325dccf34a8db221b18d0dc4a1ab55c944509b7f29dfe08 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "homepage.html.twig", 1);
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
        echo "    <div class=\"jumbotron-img p-2 mb-2\">
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
        // line 18
        echo "                <div class=\"col-12 mb-3\">
                    <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                        <div class=\"q-container p-4\">
                            <div class=\"row\">
                                <div class=\"col-2 text-center\">
";
        // line 24
        echo "                                    <div class=\"vote-arrows vote-arrows-alt flex-fill pt-2\" style=\"min-width: 90px;\">
";
        // line 26
        echo "                                    </div>
";
        // line 30
        echo "                                </div>
                                <div class=\"col\">
";
        // line 33
        echo "                                    <div class=\"q-display p-3\">
                                        <i class=\"fa fa-quote-left mr-3\"></i>
";
        // line 37
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
";
        // line 46
        echo "                    </div>
                </div>
";
        // line 49
        echo "
";
        // line 51
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 51,  114 => 49,  110 => 46,  104 => 37,  100 => 33,  96 => 30,  93 => 26,  90 => 24,  83 => 18,  68 => 4,  58 => 3,  35 => 1,);
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
{#            {% for question in pager %}#}
                <div class=\"col-12 mb-3\">
                    <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                        <div class=\"q-container p-4\">
                            <div class=\"row\">
                                <div class=\"col-2 text-center\">
{#                                    <img src=\"{{ question.owner.avatarUri }}\" width=\"100\" height=\"100\"  alt=\"{{ question.owner.avatarUri }} avatar\">#}
                                    <div class=\"vote-arrows vote-arrows-alt flex-fill pt-2\" style=\"min-width: 90px;\">
{#                                        <span>{{ question.votesString}} votes</span>#}
                                    </div>
{#                                    {% for questionTag in question.questionTags %}#}
{#                                        <span class=\"badge rounded-pill bg-light text-dark\">{{ questionTag.tag.name }}</span>#}
{#                                    {% endfor %}#}
                                </div>
                                <div class=\"col\">
{#                                    <a class=\"q-title\" href=\"{{ path('app_question_show', { slug: question.slug }) }}\"><h2>{{ question.name }}</h2></a>#}
                                    <div class=\"q-display p-3\">
                                        <i class=\"fa fa-quote-left mr-3\"></i>
{#                                        <p class=\"d-inline\">{{ question.question|parse_markdown }}</p>#}
{#                                        <p class=\"pt-4\"><strong>--{{ question.owner.displayName }}</strong></p>#}
                                    </div>
                                </div>
                            </div>
                        </div>
{#                        <a class=\"answer-link\" href=\"{{ path('app_question_show', { slug: question.slug }) }}\" style=\"color: #fff;\">#}
{#                            <p class=\"q-display-response text-center p-3\">#}
{#                                <i class=\"fa fa-magic magic-wand\"></i> {{ question.approvedAnswers|length}} answers#}
{#                            </p>#}
{#                        </a>#}
                    </div>
                </div>
{#            {% endfor %}#}

{#            {{ pagerfanta(pager) }}#}
        </div>
    </div>
{% endblock %}

", "homepage.html.twig", "C:\\ONG symfony 5 new\\ong5\\templates\\homepage.html.twig");
    }
}
