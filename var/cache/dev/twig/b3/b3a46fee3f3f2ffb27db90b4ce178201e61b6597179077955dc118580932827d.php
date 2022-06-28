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

/* answer/_answer.html.twig */
class __TwigTemplate_5091503e6ac0c5b973f2d94ce3f8c62ec81909895cafaaef783c3449d09211e2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "answer/_answer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "answer/_answer.html.twig"));

        // line 1
        echo "<li class=\"mb-4\">
    ";
        // line 2
        if (((array_key_exists("showQuestion", $context)) ? (_twig_default_filter((isset($context["showQuestion"]) || array_key_exists("showQuestion", $context) ? $context["showQuestion"] : (function () { throw new RuntimeError('Variable "showQuestion" does not exist.', 2, $this->source); })()), false)) : (false))) {
            // line 3
            echo "        <a
                href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_show", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 5
(isset($context["answer"]) || array_key_exists("answer", $context) ? $context["answer"] : (function () { throw new RuntimeError('Variable "answer" does not exist.', 5, $this->source); })()), "question", [], "any", false, false, false, 5), "slug", [], "any", false, false, false, 5)]), "html", null, true);
            // line 6
            echo "\"
                class=\"mb-1 link-secondary\"
        >
            <strong>Question:</strong>
            ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, (isset($context["answer"]) || array_key_exists("answer", $context) ? $context["answer"] : (function () { throw new RuntimeError('Variable "answer" does not exist.', 10, $this->source); })()), "questionText", [], "any", false, false, false, 10)), "truncate", [0 => 80, 1 => "..."], "method", false, false, false, 10), "html", null, true);
            echo "
        </a>
    ";
        }
        // line 13
        echo "    <div class=\"row\">
        <div class=\"col-1\">
            <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/tisha.png"), "html", null, true);
        echo "\" width=\"50\" height=\"50\" alt=\"Tisha avatar\">
        </div>
        <div class=\"col-9\">
            ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["answer"]) || array_key_exists("answer", $context) ? $context["answer"] : (function () { throw new RuntimeError('Variable "answer" does not exist.', 18, $this->source); })()), "content", [], "any", false, false, false, 18), "html", null, true);
        echo "
            <p>-- ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["answer"]) || array_key_exists("answer", $context) ? $context["answer"] : (function () { throw new RuntimeError('Variable "answer" does not exist.', 19, $this->source); })()), "username", [], "any", false, false, false, 19), "html", null, true);
        echo "</p>
        </div>
        <div class=\"col-2 text-end\">
            <small>";
        // line 22
        echo $this->extensions['Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension']->diff(twig_get_attribute($this->env, $this->source, (isset($context["answer"]) || array_key_exists("answer", $context) ? $context["answer"] : (function () { throw new RuntimeError('Variable "answer" does not exist.', 22, $this->source); })()), "createdAt", [], "any", false, false, false, 22));
        echo "</small>
            ";
        // line 23
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 24
            echo "                <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("answer_vote", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["answer"]) || array_key_exists("answer", $context) ? $context["answer"] : (function () { throw new RuntimeError('Variable "answer" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24), "slug" => twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 24, $this->source); })()), "slug", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\" method=\"POST\">
                    <div class=\"vote-arrows vote-arrows-alt flex-fill pt-2\" style=\"min-width: 90px;\">
                        <button class=\"vote-up btn btn-link\" name=\"direction\" value=\"up\"><i class=\"far fa-arrow-alt-circle-up\"></i></button>
                        <button class=\"vote-down btn btn-link\" name=\"direction\" value=\"down\"><i class=\"far fa-arrow-alt-circle-down\"></i></button>
                        <span>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["answer"]) || array_key_exists("answer", $context) ? $context["answer"] : (function () { throw new RuntimeError('Variable "answer" does not exist.', 28, $this->source); })()), "votes", [], "any", false, false, false, 28), "html", null, true);
            echo "</span>
                    </div>
                </form>
            ";
        }
        // line 32
        echo "        </div>
    </div>
</li>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "answer/_answer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 32,  100 => 28,  92 => 24,  90 => 23,  86 => 22,  80 => 19,  76 => 18,  70 => 15,  66 => 13,  60 => 10,  54 => 6,  52 => 5,  51 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<li class=\"mb-4\">
    {% if showQuestion|default(false) %}
        <a
                href=\"{{ path('app_question_show', {
                    slug: answer.question.slug
                }) }}\"
                class=\"mb-1 link-secondary\"
        >
            <strong>Question:</strong>
            {{ answer.questionText|u.truncate(80, '...') }}
        </a>
    {% endif %}
    <div class=\"row\">
        <div class=\"col-1\">
            <img src=\"{{ asset('images/tisha.png') }}\" width=\"50\" height=\"50\" alt=\"Tisha avatar\">
        </div>
        <div class=\"col-9\">
            {{ answer.content }}
            <p>-- {{ answer.username }}</p>
        </div>
        <div class=\"col-2 text-end\">
            <small>{{ answer.createdAt|ago }}</small>
            {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
                <form action=\"{{ path('answer_vote', { id: answer.id, slug: question.slug }) }}\" method=\"POST\">
                    <div class=\"vote-arrows vote-arrows-alt flex-fill pt-2\" style=\"min-width: 90px;\">
                        <button class=\"vote-up btn btn-link\" name=\"direction\" value=\"up\"><i class=\"far fa-arrow-alt-circle-up\"></i></button>
                        <button class=\"vote-down btn btn-link\" name=\"direction\" value=\"down\"><i class=\"far fa-arrow-alt-circle-down\"></i></button>
                        <span>{{ answer.votes }}</span>
                    </div>
                </form>
            {% endif %}
        </div>
    </div>
</li>
", "answer/_answer.html.twig", "C:\\ONG symfony 5 new\\ong5\\templates\\answer\\_answer.html.twig");
    }
}
