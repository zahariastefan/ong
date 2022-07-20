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
                    <div class=\"vote-arrows";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 23, $this->source); })()), "html", null, true);
        echo " vote-arrows-alt flex-fill pt-2\" style=\"min-width: 90px;\">
                        ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, ($context["answer"] ?? null), "vote", [], "any", true, true, false, 24)) {
            // line 25
            echo "                        ";
            $context["vote"] = twig_get_attribute($this->env, $this->source, (isset($context["answer"]) || array_key_exists("answer", $context) ? $context["answer"] : (function () { throw new RuntimeError('Variable "answer" does not exist.', 25, $this->source); })()), "vote", [], "any", false, false, false, 25);
            // line 26
            echo "                        ";
        } else {
            // line 27
            echo "                        ";
            $context["vote"] = 0;
            // line 28
            echo "                        ";
        }
        // line 29
        echo "                        <button class=\"vote-up";
        echo twig_escape_filter($this->env, (isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 29, $this->source); })()), "html", null, true);
        echo " btn btn-link\" name=\"direction\" value=\"up\"><i class=\"far fa-arrow-alt-circle-up ";
        if (((0 === twig_compare((isset($context["vote"]) || array_key_exists("vote", $context) ? $context["vote"] : (function () { throw new RuntimeError('Variable "vote" does not exist.', 29, $this->source); })()), 1)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["answer"]) || array_key_exists("answer", $context) ? $context["answer"] : (function () { throw new RuntimeError('Variable "answer" does not exist.', 29, $this->source); })()), "likeNrByUser", [], "any", false, false, false, 29), 1)))) {
            echo " active_arrow ";
        } else {
            echo " disabled_arrow ";
        }
        echo "\"></i></button>
                        <span class=\"total-votes-up";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "\">";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["answer"]) || array_key_exists("answer", $context) ? $context["answer"] : (function () { throw new RuntimeError('Variable "answer" does not exist.', 30, $this->source); })()), "likeNr", [], "any", false, false, false, 30), ""))) {
            echo " 0 ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["answer"]) || array_key_exists("answer", $context) ? $context["answer"] : (function () { throw new RuntimeError('Variable "answer" does not exist.', 30, $this->source); })()), "likeNr", [], "any", false, false, false, 30), "html", null, true);
            echo " ";
        }
        echo "</span>
                        <button class=\"vote-down";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "  btn btn-link\" name=\"direction\" value=\"down\"><i class=\"far fa-arrow-alt-circle-down ";
        if (((0 === twig_compare((isset($context["vote"]) || array_key_exists("vote", $context) ? $context["vote"] : (function () { throw new RuntimeError('Variable "vote" does not exist.', 31, $this->source); })()), 1)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["answer"]) || array_key_exists("answer", $context) ? $context["answer"] : (function () { throw new RuntimeError('Variable "answer" does not exist.', 31, $this->source); })()), "unlikeNrByUser", [], "any", false, false, false, 31), 1)))) {
            echo " active_arrow ";
        } else {
            echo " disabled_arrow ";
        }
        echo "\"></i></button>
                        <span class=\"total-votes-down";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "\">";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["answer"]) || array_key_exists("answer", $context) ? $context["answer"] : (function () { throw new RuntimeError('Variable "answer" does not exist.', 32, $this->source); })()), "unlikeNr", [], "any", false, false, false, 32), ""))) {
            echo " 0 ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["answer"]) || array_key_exists("answer", $context) ? $context["answer"] : (function () { throw new RuntimeError('Variable "answer" does not exist.', 32, $this->source); })()), "unlikeNr", [], "any", false, false, false, 32), "html", null, true);
            echo " ";
        }
        echo "</span>
                    </div>
        </div>
    </div>
</li>
<script>
    \$(document).ready(()=>{
        \$('.vote-up";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 39, $this->source); })()), "html", null, true);
        echo "').click(()=> {
            ajaxRequest('up');
        });
        \$('.vote-down";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "').click(()=> {
            ajaxRequest('down');
        });
        function ajaxRequest(direction) {
            var path = '";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_answer_vote", ["answerId" => twig_get_attribute($this->env, $this->source, (isset($context["answer"]) || array_key_exists("answer", $context) ? $context["answer"] : (function () { throw new RuntimeError('Variable "answer" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)]), "html", null, true);
        echo "';
            var fullUrl   = window.location.origin + path;
            if(";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["checkIfLogged"]) || array_key_exists("checkIfLogged", $context) ? $context["checkIfLogged"] : (function () { throw new RuntimeError('Variable "checkIfLogged" does not exist.', 48, $this->source); })()), "html", null, true);
        echo " === 0) { // redirection if not logged in
                \$('.vote-arrows";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "').click(()=>{
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
                \$currentClass = (\$(\$(this)[0].document.activeElement)[0].className).split(\" \")[0];
                var attributes = \$('.vote-up";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 67, $this->source); })()), "html", null, true);
        echo " i').attr('class');
                var checkClass = attributes.includes('active_arrow');
                var actualNr = (\$('.total-votes-up";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 69, $this->source); })()), "html", null, true);
        echo "').text()).replace(/[+-]/g,'');
                console.log('actualNr');
                console.log(\$('.total-votes-up";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 71, $this->source); })()), "html", null, true);
        echo "').text());
                var actualNrDOWN = (\$('.total-votes-down";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 72, $this->source); })()), "html", null, true);
        echo "').text()).replace(/[+-]/g,'');
                if(checkClass){ // if already voted
                    //up vote
                    \$('.vote-up";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 75, $this->source); })()), "html", null, true);
        echo " i').removeClass('active_arrow');
                    \$('.vote-up";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 76, $this->source); })()), "html", null, true);
        echo " i').addClass('disabled_arrow');
                    //down vote
                    \$('.vote-down";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 78, $this->source); })()), "html", null, true);
        echo " i').addClass('disabled_arrow');
                    \$('.vote-down";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 79, $this->source); })()), "html", null, true);
        echo " i').removeClass('active_arrow');
                    //decrement with 1
                    \$('.total-votes-up";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 81, $this->source); })()), "html", null, true);
        echo "').text(parseInt(actualNr) - 1);
                }else{
                    \$('.vote-up";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 83, $this->source); })()), "html", null, true);
        echo " i').addClass('active_arrow');
                    \$('.vote-up";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 84, $this->source); })()), "html", null, true);
        echo " i').removeClass('disabled_arrow');
                    \$('.vote-down";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 85, $this->source); })()), "html", null, true);
        echo " i').addClass('disabled_arrow');
                    \$('.total-votes-up";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 86, $this->source); })()), "html", null, true);
        echo "').text(parseInt(actualNr) + 1);
                    if( \$('.vote-down";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 87, $this->source); })()), "html", null, true);
        echo " i').hasClass('active_arrow')){
                        \$('.total-votes-down";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 88, $this->source); })()), "html", null, true);
        echo "').text(parseInt(actualNrDOWN) - 1);
                    }
                    \$('.vote-down";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 90, $this->source); })()), "html", null, true);
        echo " i').removeClass('active_arrow');
                }
            }else{
                var attributes = \$('.vote-down";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 93, $this->source); })()), "html", null, true);
        echo " i').attr('class');
                var checkClass = attributes.includes('active_arrow');
                var actualNr = (\$('.total-votes-down";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 95, $this->source); })()), "html", null, true);
        echo "').text()).replace(/[+-]/g,'');
                var actualNrUP = (\$('.total-votes-up";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 96, $this->source); })()), "html", null, true);
        echo "').text()).replace(/[+-]/g,'');

                if(checkClass){
                    \$('.vote-down";
        // line 99
        echo twig_escape_filter($this->env, (isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 99, $this->source); })()), "html", null, true);
        echo " i').removeClass('active_arrow');
                    \$('.vote-down";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 100, $this->source); })()), "html", null, true);
        echo " i').addClass('disabled_arrow');
                    \$('.vote-up";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 101, $this->source); })()), "html", null, true);
        echo " i').removeClass('active_arrow');
                    \$('.vote-up";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 102, $this->source); })()), "html", null, true);
        echo " i').addClass('disabled_arrow');
                    \$('.total-votes-down";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 103, $this->source); })()), "html", null, true);
        echo "').text(parseInt(actualNr) - 1);
                }else{
                    \$('.vote-down";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 105, $this->source); })()), "html", null, true);
        echo " i').addClass('active_arrow');
                    \$('.vote-down";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 106, $this->source); })()), "html", null, true);
        echo " i').removeClass('disabled_arrow');
                    \$('.vote-up";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 107, $this->source); })()), "html", null, true);
        echo " i').addClass('disabled_arrow');
                    \$('.total-votes-down";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 108, $this->source); })()), "html", null, true);
        echo "').text(parseInt(actualNr) + 1);
                    if( \$('.vote-up";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 109, $this->source); })()), "html", null, true);
        echo " i').hasClass('active_arrow')){
                        \$('.total-votes-up";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 110, $this->source); })()), "html", null, true);
        echo "').text(parseInt(actualNrUP) - 1);
                    }
                    \$('.vote-up";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 112, $this->source); })()), "html", null, true);
        echo " i').removeClass('active_arrow');
                }
            }
        }
    });
</script>";
        
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
        return array (  337 => 112,  332 => 110,  328 => 109,  324 => 108,  320 => 107,  316 => 106,  312 => 105,  307 => 103,  303 => 102,  299 => 101,  295 => 100,  291 => 99,  285 => 96,  281 => 95,  276 => 93,  270 => 90,  265 => 88,  261 => 87,  257 => 86,  253 => 85,  249 => 84,  245 => 83,  240 => 81,  235 => 79,  231 => 78,  226 => 76,  222 => 75,  216 => 72,  212 => 71,  207 => 69,  202 => 67,  181 => 49,  177 => 48,  172 => 46,  165 => 42,  159 => 39,  141 => 32,  131 => 31,  119 => 30,  108 => 29,  105 => 28,  102 => 27,  99 => 26,  96 => 25,  94 => 24,  90 => 23,  86 => 22,  80 => 19,  76 => 18,  70 => 15,  66 => 13,  60 => 10,  54 => 6,  52 => 5,  51 => 4,  48 => 3,  46 => 2,  43 => 1,);
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
                    <div class=\"vote-arrows{{ nr}} vote-arrows-alt flex-fill pt-2\" style=\"min-width: 90px;\">
                        {%  if answer.vote is defined %}
                        {% set vote = answer.vote %}
                        {% else %}
                        {% set vote = 0 %}
                        {% endif %}
                        <button class=\"vote-up{{ nr }} btn btn-link\" name=\"direction\" value=\"up\"><i class=\"far fa-arrow-alt-circle-up {% if vote == 1 and answer.likeNrByUser == 1 %} active_arrow {% else %} disabled_arrow {% endif %}\"></i></button>
                        <span class=\"total-votes-up{{ nr }}\">{% if  answer.likeNr == '' %} 0 {% else %} {{ answer.likeNr }} {% endif %}</span>
                        <button class=\"vote-down{{ nr }}  btn btn-link\" name=\"direction\" value=\"down\"><i class=\"far fa-arrow-alt-circle-down {% if vote == 1 and answer.unlikeNrByUser == 1 %} active_arrow {% else %} disabled_arrow {% endif %}\"></i></button>
                        <span class=\"total-votes-down{{ nr }}\">{% if  answer.unlikeNr == '' %} 0 {% else %} {{ answer.unlikeNr }} {% endif %}</span>
                    </div>
        </div>
    </div>
</li>
<script>
    \$(document).ready(()=>{
        \$('.vote-up{{ nr }}').click(()=> {
            ajaxRequest('up');
        });
        \$('.vote-down{{ nr }}').click(()=> {
            ajaxRequest('down');
        });
        function ajaxRequest(direction) {
            var path = '{{ path('app_answer_vote', { answerId: answer.id}) }}';
            var fullUrl   = window.location.origin + path;
            if({{checkIfLogged}} === 0) { // redirection if not logged in
                \$('.vote-arrows{{ nr }}').click(()=>{
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
                \$currentClass = (\$(\$(this)[0].document.activeElement)[0].className).split(\" \")[0];
                var attributes = \$('.vote-up{{ nr }} i').attr('class');
                var checkClass = attributes.includes('active_arrow');
                var actualNr = (\$('.total-votes-up{{ nr }}').text()).replace(/[+-]/g,'');
                console.log('actualNr');
                console.log(\$('.total-votes-up{{ nr }}').text());
                var actualNrDOWN = (\$('.total-votes-down{{ nr }}').text()).replace(/[+-]/g,'');
                if(checkClass){ // if already voted
                    //up vote
                    \$('.vote-up{{nr}} i').removeClass('active_arrow');
                    \$('.vote-up{{nr}} i').addClass('disabled_arrow');
                    //down vote
                    \$('.vote-down{{nr}} i').addClass('disabled_arrow');
                    \$('.vote-down{{nr}} i').removeClass('active_arrow');
                    //decrement with 1
                    \$('.total-votes-up{{nr}}').text(parseInt(actualNr) - 1);
                }else{
                    \$('.vote-up{{nr}} i').addClass('active_arrow');
                    \$('.vote-up{{nr}} i').removeClass('disabled_arrow');
                    \$('.vote-down{{nr}} i').addClass('disabled_arrow');
                    \$('.total-votes-up{{nr}}').text(parseInt(actualNr) + 1);
                    if( \$('.vote-down{{nr}} i').hasClass('active_arrow')){
                        \$('.total-votes-down{{nr}}').text(parseInt(actualNrDOWN) - 1);
                    }
                    \$('.vote-down{{nr}} i').removeClass('active_arrow');
                }
            }else{
                var attributes = \$('.vote-down{{nr}} i').attr('class');
                var checkClass = attributes.includes('active_arrow');
                var actualNr = (\$('.total-votes-down{{nr}}').text()).replace(/[+-]/g,'');
                var actualNrUP = (\$('.total-votes-up{{nr}}').text()).replace(/[+-]/g,'');

                if(checkClass){
                    \$('.vote-down{{nr}} i').removeClass('active_arrow');
                    \$('.vote-down{{nr}} i').addClass('disabled_arrow');
                    \$('.vote-up{{nr}} i').removeClass('active_arrow');
                    \$('.vote-up{{nr}} i').addClass('disabled_arrow');
                    \$('.total-votes-down{{nr}}').text(parseInt(actualNr) - 1);
                }else{
                    \$('.vote-down{{nr}} i').addClass('active_arrow');
                    \$('.vote-down{{nr}} i').removeClass('disabled_arrow');
                    \$('.vote-up{{nr}} i').addClass('disabled_arrow');
                    \$('.total-votes-down{{nr}}').text(parseInt(actualNr) + 1);
                    if( \$('.vote-up{{nr}} i').hasClass('active_arrow')){
                        \$('.total-votes-up{{nr}}').text(parseInt(actualNrUP) - 1);
                    }
                    \$('.vote-up{{nr}} i').removeClass('active_arrow');
                }
            }
        }
    });
</script>", "answer/_answer.html.twig", "C:\\xampp\\htdocs\\ong5\\templates\\answer\\_answer.html.twig");
    }
}
