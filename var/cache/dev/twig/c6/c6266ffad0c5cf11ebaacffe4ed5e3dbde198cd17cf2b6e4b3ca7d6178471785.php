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
";
        // line 25
        echo "                                    <div class=\"vote-arrows vote-arrows-alt flex-fill pt-2\" style=\"min-width: 90px;\">
                                        <button class=\"vote-up btn btn-link\" name=\"direction\" value=\"up\"><i class=\"far fa-arrow-alt-circle-up vote-direction  ";
        // line 26
        if (((0 === twig_compare((isset($context["votes"]) || array_key_exists("votes", $context) ? $context["votes"] : (function () { throw new RuntimeError('Variable "votes" does not exist.', 26, $this->source); })()), 1)) && (0 === twig_compare((isset($context["likes"]) || array_key_exists("likes", $context) ? $context["likes"] : (function () { throw new RuntimeError('Variable "likes" does not exist.', 26, $this->source); })()), 1)))) {
            echo " active_arrow ";
        } else {
            echo " disabled_arrow ";
        }
        echo "\"></i></button>
                                        <span class=\"total-votes-up\">";
        // line 27
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 27, $this->source); })()), "likeNr", [], "any", false, false, false, 27), ""))) {
            echo " 0 ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 27, $this->source); })()), "likeNr", [], "any", false, false, false, 27), "html", null, true);
            echo " ";
        }
        echo "</span>
                                        <button class=\"vote-down btn btn-link\" name=\"direction\" value=\"down\"><i class=\"far fa-arrow-alt-circle-down vote-direction ";
        // line 28
        if (((0 === twig_compare((isset($context["votes"]) || array_key_exists("votes", $context) ? $context["votes"] : (function () { throw new RuntimeError('Variable "votes" does not exist.', 28, $this->source); })()), 1)) && (0 === twig_compare((isset($context["unlikes"]) || array_key_exists("unlikes", $context) ? $context["unlikes"] : (function () { throw new RuntimeError('Variable "unlikes" does not exist.', 28, $this->source); })()), 1)))) {
            echo " active_arrow ";
        } else {
            echo " disabled_arrow ";
        }
        echo "\"></i></button>
                                        <span class=\"total-votes-down\">";
        // line 29
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 29, $this->source); })()), "unlikeNr", [], "any", false, false, false, 29), ""))) {
            echo " 0 ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 29, $this->source); })()), "unlikeNr", [], "any", false, false, false, 29), "html", null, true);
        }
        echo "</span>
                                    </div>
";
        // line 32
        echo "                            </div>
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
                                <p class=\"d-inline question_content\">";
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
        <form action=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comment_create");
        echo "\">
            <p><label for=\"post-comment\">Post a Comment:</label></p>
            <textarea id=\"post-comment\" name=\"post-comment\" rows=\"4\" cols=\"50\" placeholder=\"Type your comment here\"></textarea>
            <br>
            <button type=\"submit\" value=\"Submit\" class=\"btn btn-sm btn-secondary\">Post the Comment</button>
        </form>
    </div>

    <ul class=\"list-unstyled\">

        ";
        // line 65
        $context["myVal"] = 0;
        // line 66
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 66, $this->source); })()), "approvedAnswers", [], "any", false, false, false, 66));
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
            // line 67
            echo "            ";
            $context["myVal"] = ((isset($context["myVal"]) || array_key_exists("myVal", $context) ? $context["myVal"] : (function () { throw new RuntimeError('Variable "myVal" does not exist.', 67, $this->source); })()) + 1);
            // line 69
            echo "            ";
            echo twig_include($this->env, $context, "answer/_answer.html.twig", ["nr" =>             // line 70
(isset($context["myVal"]) || array_key_exists("myVal", $context) ? $context["myVal"] : (function () { throw new RuntimeError('Variable "myVal" does not exist.', 70, $this->source); })())]);
            // line 71
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
        // line 73
        echo "    </ul>
</div>
    <script>
        \$(document).ready(()=>{
            \$('.vote-up').click(()=> {
                ajaxRequest('up');
            });
            \$('.vote-down').click(()=> {
                ajaxRequest('down');
            });
            function ajaxRequest(direction) {
                var path = '";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_vote", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 84, $this->source); })()), "slug", [], "any", false, false, false, 84), "question_id" => twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 84, $this->source); })()), "id", [], "any", false, false, false, 84)]), "html", null, true);
        echo "';
                var fullUrl   = window.location.origin + path;
                console.log('Hello from question page');
                if(";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["checkIfLogged"]) || array_key_exists("checkIfLogged", $context) ? $context["checkIfLogged"] : (function () { throw new RuntimeError('Variable "checkIfLogged" does not exist.', 87, $this->source); })()), "html", null, true);
        echo " === 0) { // redirection if not logged in
                    \$('.vote-arrows').click(()=>{
                        window.location.replace(window.location.origin + '/login');
                    });
                }else{ //if logged , DB changes
                    \$.ajax({
                        type: \"POST\",
                        url: fullUrl,
                        data: {direction:direction},
                        complete: function (data) {
                           console.log(fullUrl);
                        }
                    });
                    likeAndDislike(direction); //front-end temporary changed, usefull until first reload
                }
            }
            function likeAndDislike(direction){
                if(direction === 'up'){
                    var attributes = \$('.vote-up i').attr('class');
                    var checkClass = attributes.includes('active_arrow');
                    var actualNr = (\$('.total-votes-up').text()).replace(/[+-]/g,'');
                    var actualNrDOWN = (\$('.total-votes-down').text()).replace(/[+-]/g,'');
                    if(checkClass){ // if already voted
                        //up vote
                        \$('.vote-up i').removeClass('active_arrow');
                        \$('.vote-up i').addClass('disabled_arrow');
                        //down vote
                        \$('.vote-down i').addClass('disabled_arrow');
                        \$('.vote-down i').removeClass('active_arrow');
                        //decrement with 1
                        \$('.total-votes-up').text(parseInt(actualNr) - 1);
                    }else{
                        \$('.vote-up i').addClass('active_arrow');
                        \$('.vote-up i').removeClass('disabled_arrow');
                        \$('.vote-down i').addClass('disabled_arrow');
                        \$('.total-votes-up').text(parseInt(actualNr) + 1);
                        if( \$('.vote-down i').hasClass('active_arrow')){
                            \$('.total-votes-down').text(parseInt(actualNrDOWN) - 1);
                        }
                        \$('.vote-down i').removeClass('active_arrow');
                    }
                }else{
                    var attributes = \$('.vote-down i').attr('class');
                    var checkClass = attributes.includes('active_arrow');
                    var actualNr = (\$('.total-votes-down').text()).replace(/[+-]/g,'');
                    var actualNrUP = (\$('.total-votes-up').text()).replace(/[+-]/g,'');

                    if(checkClass){
                        \$('.vote-down i').removeClass('active_arrow');
                        \$('.vote-down i').addClass('disabled_arrow');
                        \$('.vote-up i').removeClass('active_arrow');
                        \$('.vote-up i').addClass('disabled_arrow');
                        \$('.total-votes-down').text(parseInt(actualNr) - 1);
                    }else{
                        \$('.vote-down i').addClass('active_arrow');
                        \$('.vote-down i').removeClass('disabled_arrow');
                        \$('.vote-up i').addClass('disabled_arrow');
                        \$('.total-votes-down').text(parseInt(actualNr) + 1);
                        if( \$('.vote-up i').hasClass('active_arrow')){
                            \$('.total-votes-up').text(parseInt(actualNrUP) - 1);
                        }
                        \$('.vote-up i').removeClass('active_arrow');
                    }
                }
            }
            });

        var question = \$('.question_content').text();
        var result = question.indexOf(\"<\");
        console.log(result);
        if(result === 0){//that means are containing tags
            var question_content = \$('.question_content').text();
            \$('.question_content').html(question_content);
        }

    </script>
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
        return array (  280 => 87,  274 => 84,  261 => 73,  246 => 71,  244 => 70,  242 => 69,  239 => 67,  221 => 66,  219 => 65,  206 => 55,  192 => 46,  188 => 45,  183 => 42,  179 => 40,  177 => 39,  175 => 38,  173 => 37,  169 => 36,  163 => 32,  153 => 29,  145 => 28,  135 => 27,  127 => 26,  124 => 25,  121 => 23,  117 => 21,  112 => 19,  109 => 18,  107 => 17,  99 => 14,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
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
{#                                <form action=\"{{ path('app_question_vote', { slug: question.slug, question_id: question.id }) }}\" method=\"POST\">#}
                                    <div class=\"vote-arrows vote-arrows-alt flex-fill pt-2\" style=\"min-width: 90px;\">
                                        <button class=\"vote-up btn btn-link\" name=\"direction\" value=\"up\"><i class=\"far fa-arrow-alt-circle-up vote-direction  {% if votes == 1 and likes == 1 %} active_arrow {% else %} disabled_arrow {% endif %}\"></i></button>
                                        <span class=\"total-votes-up\">{% if question.likeNr == '' %} 0 {% else %} {{ question.likeNr }} {% endif %}</span>
                                        <button class=\"vote-down btn btn-link\" name=\"direction\" value=\"down\"><i class=\"far fa-arrow-alt-circle-down vote-direction {% if votes == 1 and unlikes == 1 %} active_arrow {% else %} disabled_arrow {% endif %}\"></i></button>
                                        <span class=\"total-votes-down\">{% if question.unlikeNr == '' %} 0 {% else %} {{ question.unlikeNr }}{% endif %}</span>
                                    </div>
{#                                </form>#}
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
                                <p class=\"d-inline question_content\">{{ question.question }}</p>
                                <p class=\"pt-4\"><strong>--{{ question.owner.displayName }} ({{ question.owner.email }})</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"d-flex justify-content-between my-4\">
        <form action=\"{{ path('app_comment_create') }}\">
            <p><label for=\"post-comment\">Post a Comment:</label></p>
            <textarea id=\"post-comment\" name=\"post-comment\" rows=\"4\" cols=\"50\" placeholder=\"Type your comment here\"></textarea>
            <br>
            <button type=\"submit\" value=\"Submit\" class=\"btn btn-sm btn-secondary\">Post the Comment</button>
        </form>
    </div>

    <ul class=\"list-unstyled\">

        {% set myVal = 0 %}
        {% for answer in question.approvedAnswers %}
            {% set myVal = myVal + 1 %}
{#            {{ dump(answer.likeNrByUser) }}#}
            {{ include('answer/_answer.html.twig', {
                nr: myVal
            }) }}
        {% endfor %}
    </ul>
</div>
    <script>
        \$(document).ready(()=>{
            \$('.vote-up').click(()=> {
                ajaxRequest('up');
            });
            \$('.vote-down').click(()=> {
                ajaxRequest('down');
            });
            function ajaxRequest(direction) {
                var path = '{{ path('app_question_vote', { slug: question.slug, question_id: question.id }) }}';
                var fullUrl   = window.location.origin + path;
                console.log('Hello from question page');
                if({{checkIfLogged}} === 0) { // redirection if not logged in
                    \$('.vote-arrows').click(()=>{
                        window.location.replace(window.location.origin + '/login');
                    });
                }else{ //if logged , DB changes
                    \$.ajax({
                        type: \"POST\",
                        url: fullUrl,
                        data: {direction:direction},
                        complete: function (data) {
                           console.log(fullUrl);
                        }
                    });
                    likeAndDislike(direction); //front-end temporary changed, usefull until first reload
                }
            }
            function likeAndDislike(direction){
                if(direction === 'up'){
                    var attributes = \$('.vote-up i').attr('class');
                    var checkClass = attributes.includes('active_arrow');
                    var actualNr = (\$('.total-votes-up').text()).replace(/[+-]/g,'');
                    var actualNrDOWN = (\$('.total-votes-down').text()).replace(/[+-]/g,'');
                    if(checkClass){ // if already voted
                        //up vote
                        \$('.vote-up i').removeClass('active_arrow');
                        \$('.vote-up i').addClass('disabled_arrow');
                        //down vote
                        \$('.vote-down i').addClass('disabled_arrow');
                        \$('.vote-down i').removeClass('active_arrow');
                        //decrement with 1
                        \$('.total-votes-up').text(parseInt(actualNr) - 1);
                    }else{
                        \$('.vote-up i').addClass('active_arrow');
                        \$('.vote-up i').removeClass('disabled_arrow');
                        \$('.vote-down i').addClass('disabled_arrow');
                        \$('.total-votes-up').text(parseInt(actualNr) + 1);
                        if( \$('.vote-down i').hasClass('active_arrow')){
                            \$('.total-votes-down').text(parseInt(actualNrDOWN) - 1);
                        }
                        \$('.vote-down i').removeClass('active_arrow');
                    }
                }else{
                    var attributes = \$('.vote-down i').attr('class');
                    var checkClass = attributes.includes('active_arrow');
                    var actualNr = (\$('.total-votes-down').text()).replace(/[+-]/g,'');
                    var actualNrUP = (\$('.total-votes-up').text()).replace(/[+-]/g,'');

                    if(checkClass){
                        \$('.vote-down i').removeClass('active_arrow');
                        \$('.vote-down i').addClass('disabled_arrow');
                        \$('.vote-up i').removeClass('active_arrow');
                        \$('.vote-up i').addClass('disabled_arrow');
                        \$('.total-votes-down').text(parseInt(actualNr) - 1);
                    }else{
                        \$('.vote-down i').addClass('active_arrow');
                        \$('.vote-down i').removeClass('disabled_arrow');
                        \$('.vote-up i').addClass('disabled_arrow');
                        \$('.total-votes-down').text(parseInt(actualNr) + 1);
                        if( \$('.vote-up i').hasClass('active_arrow')){
                            \$('.total-votes-up').text(parseInt(actualNrUP) - 1);
                        }
                        \$('.vote-up i').removeClass('active_arrow');
                    }
                }
            }
            });

        var question = \$('.question_content').text();
        var result = question.indexOf(\"<\");
        console.log(result);
        if(result === 0){//that means are containing tags
            var question_content = \$('.question_content').text();
            \$('.question_content').html(question_content);
        }

    </script>
{% endblock %}

", "question/show.html.twig", "C:\\xampp\\htdocs\\ong5\\templates\\question\\show.html.twig");
    }
}
