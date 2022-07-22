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
        <h1 class=\"display-4 text-center\">Welcome to my Blog</h1>
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
            echo "        <div class=\"col mb-3\">
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
        echo "    <div class=\"row\">
        <div class=\"col-2\">
            <div class=\"btn-group\">
                <!-- Button trigger modal -->
                <button type=\"button\" id=\"new-trip\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#fadeInOutModal\">
                    New Activity
                </button>            </div>
        </div>

        <div class=\"col-8\">
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pager"]) || array_key_exists("pager", $context) ? $context["pager"] : (function () { throw new RuntimeError('Variable "pager" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 32
            echo "                <div class=\"col-12 mb-3 card_preview_post_homepage\">
                    <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                        <div class=\"q-container p-4\">
                            <div class=\"row\">
                                <div class=\"col-3 text-center\">
                                    <img src=\"";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "owner", [], "any", false, false, false, 37), "avatarUri", [], "any", false, false, false, 37), "html", null, true);
            echo "\" width=\"100\" height=\"100\"  alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "owner", [], "any", false, false, false, 37), "avatarUri", [], "any", false, false, false, 37), "html", null, true);
            echo " avatar\">
                                    <div class=\"vote-arrows vote-arrows-alt flex-fill pt-2\" style=\"min-width: 90px;\">
                                        <span>";
            // line 39
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["question"], "likeNr", [], "any", false, false, false, 39) + twig_get_attribute($this->env, $this->source, $context["question"], "unLikeNr", [], "any", false, false, false, 39)), "html", null, true);
            echo " votes</span>
                                    </div>
                                    ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["question"], "questionTags", [], "any", false, false, false, 41));
            foreach ($context['_seq'] as $context["_key"] => $context["questionTag"]) {
                // line 42
                echo "                                        <span class=\"badge rounded-pill bg-light text-dark\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["questionTag"], "tag", [], "any", false, false, false, 42), "name", [], "any", false, false, false, 42), "html", null, true);
                echo "</span>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['questionTag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                                </div>
                                <div class=\"col-9\">
                                    <a class=\"q-title\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["question"], "slug", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\"><h2>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "name", [], "any", false, false, false, 46), "html", null, true);
            echo "</h2></a>
                                    <div class=\"q-display p-3 container_content_hmp\">
                                        <i class=\"fa fa-quote-left mr-3\"></i>
                                        <p class=\"d-inline paragraph_content_homepage\">";
            // line 49
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "question", [], "any", false, false, false, 49), 0, 250), "html", null, true);
            echo "</p>
                                        <i class=\"fa fa-quote-right mr-3\"></i>
                                        <p class=\"pt-4\"><strong>--";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "owner", [], "any", false, false, false, 51), "displayName", [], "any", false, false, false, 51), "html", null, true);
            echo "</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class=\"answer-link\" href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["question"], "slug", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\" >
                            <p class=\"q-display-response bg-info text-center p-3\">
                                <i class=\"fa fa-magic magic-wand\"></i> ";
            // line 58
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "approvedAnswers", [], "any", false, false, false, 58)), "html", null, true);
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
        // line 64
        echo "
            ";
        // line 65
        echo $this->env->getRuntime('Pagerfanta\Twig\Extension\PagerfantaRuntime')->renderPagerfanta((isset($context["pager"]) || array_key_exists("pager", $context) ? $context["pager"] : (function () { throw new RuntimeError('Variable "pager" does not exist.', 65, $this->source); })()));
        echo "
        </div>

        <div class=\"col-2\">Hello</div>

    </div>

    ";
        // line 72
        echo twig_include($this->env, $context, "trip/modal-create-trip.html.twig");
        echo "

</div>
    <script>

        \$('#myModal').on('shown.bs.modal', function () {
            \$('#myInput').trigger('focus')
        });
        var path = '";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_locations");
        echo "';
        var fullUrl   = window.location.origin + path;

        \$('.datepicker-p').hide();
        \$('.activities-list').hide();

        \$('#new-trip').click(()=>{
            \$.ajax({
                type: \"POST\",
                url: fullUrl,
                complete: function (data) {
                    \$('#new-trip').unbind('click'); // use unbind because click was called each time and incremented the ajax request
                    var array = data.responseJSON;
                    for(var x = 0;x < array.length; x++){
                        \$('.cities-listing').append('' +
                            '<div class=\"design_cities-listing'+x+'\" id=\"design_cities-listing'+x+'\">' +
                            '<img src=\"/images/country.png\" alt=\"\" width=\"200\" height=\"100\" id=\"city-location'+x+'\">' +
                            '<p class=\"city-location\" id=\"city-location'+x+'\">'+array[x]['city']+' ('+array[x]['country']+')</p>' +
                            '<input name=\"location_name\" type=\"hidden\" class=\"city-location'+x+'\" value=\\'{\"city\":\"'+array[x]['city']+ '\",\"country\":\"' +array[x]['country'] +'\"}\\' >' +
                            '<button type=\"submit\" class=\"city-location'+x+'\" style=\"display:none\"></button>' +
                            '</div>');
                    }
                    \$('div[class^=\"design_cities\"] img').click((e)=> {
                        var idDiv = \$(e.target).attr('id');
                        console.log(idDiv);
                        \$('p#'+ idDiv).click();
                    });

                    getCities();
                    //get current element and pass the data to the action page from form
                    function getCities(){ //created function to use unbind because click was called each time and incremented the ajax request

                        \$('p[class^=\"city\"]').click((event)=>{
                            var id = \$(event.target).attr('id');
                            //Choose Location for the trip
                            var locationName = \$(event.target).text();
                            \$('#modal-title').text(locationName);
                            \$('.modal-footer .btn-secondary').text('Back');
                            \$('.cities-listing').hide();
                            \$('.activities-list').show();

                            //click Back time
                            \$('.modal-footer .btn-secondary').click(()=>{
                                \$('.cities-listing').show();
                                \$('#modal-title').text('Choose City');
                                \$('.activity-name-p').hide();
                                \$('.activities-list').hide();
                                \$('.datepicker-p').hide();
                                \$('.activities-list').empty();


                            });
                            //clicking the X for close the modal
                            \$('.close-modal-x-button').click(()=>{
                                \$('.cities-listing').show();
                                \$('#modal-title').text('Choose City');
                                \$('.activity-name-p').hide();
                                \$('.activities-list').hide();
                                \$('.datepicker-p').hide();
                                \$('.activities-list').empty();

                            });
                            // //clicking on outside modal => app.js
                            var path = '";
        // line 143
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activities");
        echo "';
                            var fullUrl   = window.location.origin + path;
                            var jsonLocation = \$('.'+id).val();
                            \$.ajax({
                                type: \"POST\",
                                url: fullUrl,
                                data: {jsonLocation: jsonLocation},
                                complete: function (data) {
                                    jQuery.event.trigger( \"ajaxStop\" );
                                    \$('p[class^=\"city\"]').unbind('click');
                                    getCities();
                                    for(var y=0;y<data.responseJSON.length;y++){
                                        \$('.activities-list').append('' +
                                            '<div class=\"design_cities-listing'+x+'\" id=\"design_cities-listing'+x+'\">' +
                                            '<img src=\"/images/activity.png\" alt=\"\" width=\"200\" height=\"100\" id=\"activity-details'+y+'\">' +
                                            '<p class=\"activity-name-p activity-details-p'+y+'\" id=\"activity-details'+y+'\">'+data.responseJSON[y].activity+' Price: '+data.responseJSON[y].price+'\$</p>' +
                                            '<input name=\"activity_det\" type=\"hidden\" class=\"activity-details'+y+'\" value=\\'{\"activity\":\"'+data.responseJSON[y].activity+ '\",\"price\":\"' +data.responseJSON[y].price +'\"}\\' >' +
                                            '</div>');
                                    }
                                    var activityValue;
                                    var date;
                                    \$('p[id^=\"activity-details\"]').click((e)=>{
                                        var activityName = \$(e.target).text();
                                        var activityId = \$(e.target).attr('id');
                                        activityValue = \$('.'+activityId).val();
                                        //TODO => get the available dates from API!!!
                                        if(activityName === 'football Price: 95\$'){
                                            availableData = ['2022-07-23'];
                                        }else if(activityName === 'football Price: 95\$'){
                                            availableData = ['2022-07-28'];
                                        }else if(activityName === 'karate Price: 51\$'){
                                            availableData = ['2022-07-26'];
                                        }else if(activityName === 'weight lifting Price: 38\$'){
                                            availableData = ['2022-07-25'];
                                        }
                                        else{
                                            availableData = [\"2022-07-29\",\"2022-07-27\"];
                                        }
                                        \$('#modal-title').html('<p>'+locationName + '</p><br><p class=\"css-p-generated\"> Choosen activity: <span>' + activityName+'</span></p>');
                                        \$('.datepicker-p').show();
                                        date = \$('#datepicker').val();
                                        console.log(date);
                                    });
                                    \$('.modal-footer .btn-primary').click(()=>{
                                        date = \$('#datepicker').val();
                                        if(date !== ''){
                                            window.location.replace(window.location.origin+'/create-trip?location='+jsonLocation+'&activity='+activityValue+'&date='+date);
                                        }else{
                                            alert('Please select a desired date');
                                        }
                                    });

                                    \$('div[class^=\"design_cities\"] img').click((e)=> {
                                        var idDiv = \$(e.target).attr('id');
                                        console.log(idDiv);
                                        \$('p#'+ idDiv).click();
                                    });

                                    // todo => get this data from API for each clicked Activity!
                                    var availableData;

                                    \$( function() {
                                        \$('#datepicker').datepicker({
                                            dateFormat: \"yy-mm-dd\",
                                            beforeShowDay: function(date) {
                                                if(\$.inArray(\$.datepicker.formatDate('yy-mm-dd', date ), availableData) > -1)
                                                {
                                                    return [true,\"\",\"Booked out\"];
                                                }
                                                else
                                                {
                                                    return [false,'',\"available\"];
                                                }
                                            }
                                        });
                                    });
                                }
                            });
                        });
                    }
                }
            });
        });
    </script>
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
        return array (  277 => 143,  211 => 80,  200 => 72,  190 => 65,  187 => 64,  175 => 58,  170 => 56,  162 => 51,  157 => 49,  149 => 46,  145 => 44,  136 => 42,  132 => 41,  127 => 39,  120 => 37,  113 => 32,  109 => 31,  97 => 21,  90 => 17,  86 => 15,  84 => 14,  79 => 11,  75 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"jumbotron-img p-2 mb-2\">
    <div class=\"container\">
        <h1 class=\"display-4 text-center\">Welcome to my Blog</h1>
        {% if alertDisabled2fa %}
            <div class=\"alert alert-success\">You Successfully Disabled Two Factors Authentication</div>
        {% endif %}
{#        <div class=\"lead\">And even answers for those questions you didn't think to ask!</div>#}
    </div>
</div>
<div class=\"container\">
    {% if is_granted('ROLE_ADMIN') %}
        <div class=\"col mb-3\">
            <div class=\"col\">
                <a class=\"btn btn-question\" href=\"{{ path('app_post_create') }}\">Create a Post</a>
            </div>
        </div>
    {% endif %}
    <div class=\"row\">
        <div class=\"col-2\">
            <div class=\"btn-group\">
                <!-- Button trigger modal -->
                <button type=\"button\" id=\"new-trip\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#fadeInOutModal\">
                    New Activity
                </button>            </div>
        </div>

        <div class=\"col-8\">
            {% for question in pager %}
                <div class=\"col-12 mb-3 card_preview_post_homepage\">
                    <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                        <div class=\"q-container p-4\">
                            <div class=\"row\">
                                <div class=\"col-3 text-center\">
                                    <img src=\"{{ question.owner.avatarUri }}\" width=\"100\" height=\"100\"  alt=\"{{ question.owner.avatarUri }} avatar\">
                                    <div class=\"vote-arrows vote-arrows-alt flex-fill pt-2\" style=\"min-width: 90px;\">
                                        <span>{{ question.likeNr + question.unLikeNr }} votes</span>
                                    </div>
                                    {% for questionTag in question.questionTags %}
                                        <span class=\"badge rounded-pill bg-light text-dark\">{{ questionTag.tag.name }}</span>
                                    {% endfor %}
                                </div>
                                <div class=\"col-9\">
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
                            <p class=\"q-display-response bg-info text-center p-3\">
                                <i class=\"fa fa-magic magic-wand\"></i> {{ question.approvedAnswers|length }} comments
                            </p>
                        </a>
                    </div>
                </div>
            {% endfor %}

            {{ pagerfanta(pager) }}
        </div>

        <div class=\"col-2\">Hello</div>

    </div>

    {{ include('trip/modal-create-trip.html.twig') }}

</div>
    <script>

        \$('#myModal').on('shown.bs.modal', function () {
            \$('#myInput').trigger('focus')
        });
        var path = '{{ path('app_locations') }}';
        var fullUrl   = window.location.origin + path;

        \$('.datepicker-p').hide();
        \$('.activities-list').hide();

        \$('#new-trip').click(()=>{
            \$.ajax({
                type: \"POST\",
                url: fullUrl,
                complete: function (data) {
                    \$('#new-trip').unbind('click'); // use unbind because click was called each time and incremented the ajax request
                    var array = data.responseJSON;
                    for(var x = 0;x < array.length; x++){
                        \$('.cities-listing').append('' +
                            '<div class=\"design_cities-listing'+x+'\" id=\"design_cities-listing'+x+'\">' +
                            '<img src=\"/images/country.png\" alt=\"\" width=\"200\" height=\"100\" id=\"city-location'+x+'\">' +
                            '<p class=\"city-location\" id=\"city-location'+x+'\">'+array[x]['city']+' ('+array[x]['country']+')</p>' +
                            '<input name=\"location_name\" type=\"hidden\" class=\"city-location'+x+'\" value=\\'{\"city\":\"'+array[x]['city']+ '\",\"country\":\"' +array[x]['country'] +'\"}\\' >' +
                            '<button type=\"submit\" class=\"city-location'+x+'\" style=\"display:none\"></button>' +
                            '</div>');
                    }
                    \$('div[class^=\"design_cities\"] img').click((e)=> {
                        var idDiv = \$(e.target).attr('id');
                        console.log(idDiv);
                        \$('p#'+ idDiv).click();
                    });

                    getCities();
                    //get current element and pass the data to the action page from form
                    function getCities(){ //created function to use unbind because click was called each time and incremented the ajax request

                        \$('p[class^=\"city\"]').click((event)=>{
                            var id = \$(event.target).attr('id');
                            //Choose Location for the trip
                            var locationName = \$(event.target).text();
                            \$('#modal-title').text(locationName);
                            \$('.modal-footer .btn-secondary').text('Back');
                            \$('.cities-listing').hide();
                            \$('.activities-list').show();

                            //click Back time
                            \$('.modal-footer .btn-secondary').click(()=>{
                                \$('.cities-listing').show();
                                \$('#modal-title').text('Choose City');
                                \$('.activity-name-p').hide();
                                \$('.activities-list').hide();
                                \$('.datepicker-p').hide();
                                \$('.activities-list').empty();


                            });
                            //clicking the X for close the modal
                            \$('.close-modal-x-button').click(()=>{
                                \$('.cities-listing').show();
                                \$('#modal-title').text('Choose City');
                                \$('.activity-name-p').hide();
                                \$('.activities-list').hide();
                                \$('.datepicker-p').hide();
                                \$('.activities-list').empty();

                            });
                            // //clicking on outside modal => app.js
                            var path = '{{ path('app_activities') }}';
                            var fullUrl   = window.location.origin + path;
                            var jsonLocation = \$('.'+id).val();
                            \$.ajax({
                                type: \"POST\",
                                url: fullUrl,
                                data: {jsonLocation: jsonLocation},
                                complete: function (data) {
                                    jQuery.event.trigger( \"ajaxStop\" );
                                    \$('p[class^=\"city\"]').unbind('click');
                                    getCities();
                                    for(var y=0;y<data.responseJSON.length;y++){
                                        \$('.activities-list').append('' +
                                            '<div class=\"design_cities-listing'+x+'\" id=\"design_cities-listing'+x+'\">' +
                                            '<img src=\"/images/activity.png\" alt=\"\" width=\"200\" height=\"100\" id=\"activity-details'+y+'\">' +
                                            '<p class=\"activity-name-p activity-details-p'+y+'\" id=\"activity-details'+y+'\">'+data.responseJSON[y].activity+' Price: '+data.responseJSON[y].price+'\$</p>' +
                                            '<input name=\"activity_det\" type=\"hidden\" class=\"activity-details'+y+'\" value=\\'{\"activity\":\"'+data.responseJSON[y].activity+ '\",\"price\":\"' +data.responseJSON[y].price +'\"}\\' >' +
                                            '</div>');
                                    }
                                    var activityValue;
                                    var date;
                                    \$('p[id^=\"activity-details\"]').click((e)=>{
                                        var activityName = \$(e.target).text();
                                        var activityId = \$(e.target).attr('id');
                                        activityValue = \$('.'+activityId).val();
                                        //TODO => get the available dates from API!!!
                                        if(activityName === 'football Price: 95\$'){
                                            availableData = ['2022-07-23'];
                                        }else if(activityName === 'football Price: 95\$'){
                                            availableData = ['2022-07-28'];
                                        }else if(activityName === 'karate Price: 51\$'){
                                            availableData = ['2022-07-26'];
                                        }else if(activityName === 'weight lifting Price: 38\$'){
                                            availableData = ['2022-07-25'];
                                        }
                                        else{
                                            availableData = [\"2022-07-29\",\"2022-07-27\"];
                                        }
                                        \$('#modal-title').html('<p>'+locationName + '</p><br><p class=\"css-p-generated\"> Choosen activity: <span>' + activityName+'</span></p>');
                                        \$('.datepicker-p').show();
                                        date = \$('#datepicker').val();
                                        console.log(date);
                                    });
                                    \$('.modal-footer .btn-primary').click(()=>{
                                        date = \$('#datepicker').val();
                                        if(date !== ''){
                                            window.location.replace(window.location.origin+'/create-trip?location='+jsonLocation+'&activity='+activityValue+'&date='+date);
                                        }else{
                                            alert('Please select a desired date');
                                        }
                                    });

                                    \$('div[class^=\"design_cities\"] img').click((e)=> {
                                        var idDiv = \$(e.target).attr('id');
                                        console.log(idDiv);
                                        \$('p#'+ idDiv).click();
                                    });

                                    // todo => get this data from API for each clicked Activity!
                                    var availableData;

                                    \$( function() {
                                        \$('#datepicker').datepicker({
                                            dateFormat: \"yy-mm-dd\",
                                            beforeShowDay: function(date) {
                                                if(\$.inArray(\$.datepicker.formatDate('yy-mm-dd', date ), availableData) > -1)
                                                {
                                                    return [true,\"\",\"Booked out\"];
                                                }
                                                else
                                                {
                                                    return [false,'',\"available\"];
                                                }
                                            }
                                        });
                                    });
                                }
                            });
                        });
                    }
                }
            });
        });
    </script>
{% endblock %}

", "question/homepage.html.twig", "C:\\xampp\\htdocs\\ong5\\templates\\question\\homepage.html.twig");
    }
}
