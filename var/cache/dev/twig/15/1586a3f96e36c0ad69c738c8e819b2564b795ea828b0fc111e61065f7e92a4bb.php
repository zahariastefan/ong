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

/* create_post.html.twig */
class __TwigTemplate_4d079d3fc12b6ea19fe54e8bfaf19cc63ddd6921915ed83e137da5c244975337 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "create_post.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "create_post.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "create_post.html.twig", 1);
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
    <div class=\"blog_textEditorWrapper\">
        <input type=\"text\" name=\"title-text-post\" class=\"title-text-post\" placeholder=\"Enter Title\">
        <div class=\"blog_textEditor_toolbar\">
            <div class=\"toolbar_btn_wrap flex_c\">
                <button class=\"toolbar_btn flex_c\" data-cmd=\"bold\" tooltip=\"Bold\"><i class=\"fa fa-bold\"></i></button>
                <button class=\"toolbar_btn flex_c\" data-cmd=\"italic\" tooltip=\"Italic\"><i class=\"fa fa-italic\"></i>
                </button>
                <button class=\"toolbar_btn flex_c\" data-cmd=\"underline\" tooltip=\"Underline\"><i
                            class=\"fa fa-underline\"></i></button>
            </div>
            <div class=\"toolbar_btn_wrap flex_c\">
                <button class=\"toolbar_btn flex_c\" data-cmd=\"strikeThrough\" tooltip=\"Strike Through\"><i
                            class=\"fa fa-strikethrough\"></i></button>
                <button class=\"toolbar_btn flex_c\" data-cmd=\"insertParagraph\" tooltip=\"Paragraph\"><i
                            class=\"fa fa-paragraph\"></i></button>
            </div>
            <div class=\"toolbar_btn_wrap flex_c\">
                <button class=\"toolbar_btn flex_c\" data-cmd=\"H1\" tooltip=\"Heading 1\" style=\"font-size:18px\"><i
                            class=\"fa fa-h1\"></i></button>
                <div class=\"toolbar_btn_wrapSpace\"></div>
                <button class=\"toolbar_btn flex_c\" data-cmd=\"H2\" tooltip=\"Heading 2\" style=\"font-size:18px\"><i
                            class=\"fa fa-h2\"></i></button>
                <div class=\"toolbar_btn_wrapSpace\"></div>
                <button class=\"toolbar_btn flex_c\" data-cmd=\"H3\" tooltip=\"Heading 3\" style=\"font-size:18px\"><i
                            class=\"fa fa-h3\"></i></button>
                <div class=\"toolbar_btn_wrapSpace\"></div>
            </div>
            <div class=\"toolbar_btn_wrap flex_c\">
                <button class=\"toolbar_btn flex_c\" data-cmd=\"justifyLeft\" tooltip=\"Align Left\"><i
                            class=\"fa fa-align-left\"></i></button>
                <button class=\"toolbar_btn flex_c\" data-cmd=\"justifyCenter\" tooltip=\"Align Center\"><i
                            class=\"fa fa-align-center\"></i></button>
                <button class=\"toolbar_btn flex_c\" data-cmd=\"justifyFull\" tooltip=\"Justify\"><i
                            class=\"fa fa-align-justify\"></i></button>
                <button class=\"toolbar_btn flex_c\" data-cmd=\"justifyRight\" tooltip=\"Align Right\"><i
                            class=\"fa fa-align-right\"></i></button>
            </div>
            <div class=\"toolbar_btn_wrap flex_c\">
                <button class=\"toolbar_btn flex_c\" data-cmd=\"insertUnorderedList\" tooltip=\"Unordered List\"><i
                            class=\"fa fa-list\"></i></button>
                <button class=\"toolbar_btn flex_c\" data-cmd=\"insertOrderedList\" tooltip=\"Ordered List\"><i
                            class=\"fa fa-list-ol\"></i></button>
            </div>
            <div class=\"toolbar_btn_wrap flex_c\">
                <button class=\"toolbar_btn flex_c\" data-cmd=\"insertImage\" tooltip=\"Insert Image\" status=\"off\"><i
                            class=\"fa fa-image\"></i></button>
                <button class=\"toolbar_btn flex_c\" data-cmd=\"createLink\" tooltip=\"Create Link\"><i
                            class=\"fa fa-link\"></i></button>
                <div class=\"insertImg_btn_dropdown\">
                    <div class=\"img_dropdown_menu imgFile flex_c\" style=\"border-bottom: 2px solid #b378ff;\">
                        <div class=\"menu_text\">Upload from PC</div>
                        <div class=\"menu_icon\"><i class=\"fa fa-arrow-to-top\"></i></div>
                    </div>
                    <div class=\"img_dropdown_menu imgUrl flex_c\">
                        <div class=\"menu_text\">Insert by url</div>
                        <div class=\"menu_icon\"><i class=\"fa fa-link\"></i></div>
                    </div>
                </div>
            </div>
            <div class=\"toolbar_btn flex_c\" data-cmd=\"veiwCode\" status=\"off\" tooltip=\"HTML Code\"><i
                        class=\"fa fa-code\"></i></div>
            <div class=\"toolbar_btn_wrap flex_c\">
                <button class=\"toolbar_btn flex_c\" data-cmd=\"undo\" tooltip=\"Undo\"><i class=\"fa fa-undo\"></i></button>
                <button class=\"toolbar_btn flex_c\" data-cmd=\"redo\" tooltip=\"Redo\"><i class=\"fa fa-redo\"></i></button>
            </div>
        </div>
        <div class=\"editor_container flex_c\">
            <div class=\"lineNumber\"></div>
            <div class=\"editor_body\" id=\"blog_editor\" contenteditable=\"true\"></div>
        </div>
        <button class=\"get_text_button\">Save</button>

    </div>

";
        // line 99
        echo "    <script>
        \$('.get_text_button').click(() => {
            var textHTML = \$('#blog_editor').html();
            var path = '";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_html");
        echo "';
            var fullUrl   = window.location.origin + path;

            var titleText;

            if(titleText !== '') {
                titleText = \$('.title-text-post').val();
            }else{
                titleText = 'no_title';
            }

            \$.ajax({
                type: \"POST\",
                url: fullUrl,
                data: {textHTML: textHTML, titleText:titleText},
                complete: function (data) {
                    // \$('.blog_textEditorWrapper').empty();
                    ";
        // line 120
        echo "                }
            });
        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "create_post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 120,  150 => 102,  145 => 99,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"blog_textEditorWrapper\">
        <input type=\"text\" name=\"title-text-post\" class=\"title-text-post\" placeholder=\"Enter Title\">
        <div class=\"blog_textEditor_toolbar\">
            <div class=\"toolbar_btn_wrap flex_c\">
                <button class=\"toolbar_btn flex_c\" data-cmd=\"bold\" tooltip=\"Bold\"><i class=\"fa fa-bold\"></i></button>
                <button class=\"toolbar_btn flex_c\" data-cmd=\"italic\" tooltip=\"Italic\"><i class=\"fa fa-italic\"></i>
                </button>
                <button class=\"toolbar_btn flex_c\" data-cmd=\"underline\" tooltip=\"Underline\"><i
                            class=\"fa fa-underline\"></i></button>
            </div>
            <div class=\"toolbar_btn_wrap flex_c\">
                <button class=\"toolbar_btn flex_c\" data-cmd=\"strikeThrough\" tooltip=\"Strike Through\"><i
                            class=\"fa fa-strikethrough\"></i></button>
                <button class=\"toolbar_btn flex_c\" data-cmd=\"insertParagraph\" tooltip=\"Paragraph\"><i
                            class=\"fa fa-paragraph\"></i></button>
            </div>
            <div class=\"toolbar_btn_wrap flex_c\">
                <button class=\"toolbar_btn flex_c\" data-cmd=\"H1\" tooltip=\"Heading 1\" style=\"font-size:18px\"><i
                            class=\"fa fa-h1\"></i></button>
                <div class=\"toolbar_btn_wrapSpace\"></div>
                <button class=\"toolbar_btn flex_c\" data-cmd=\"H2\" tooltip=\"Heading 2\" style=\"font-size:18px\"><i
                            class=\"fa fa-h2\"></i></button>
                <div class=\"toolbar_btn_wrapSpace\"></div>
                <button class=\"toolbar_btn flex_c\" data-cmd=\"H3\" tooltip=\"Heading 3\" style=\"font-size:18px\"><i
                            class=\"fa fa-h3\"></i></button>
                <div class=\"toolbar_btn_wrapSpace\"></div>
            </div>
            <div class=\"toolbar_btn_wrap flex_c\">
                <button class=\"toolbar_btn flex_c\" data-cmd=\"justifyLeft\" tooltip=\"Align Left\"><i
                            class=\"fa fa-align-left\"></i></button>
                <button class=\"toolbar_btn flex_c\" data-cmd=\"justifyCenter\" tooltip=\"Align Center\"><i
                            class=\"fa fa-align-center\"></i></button>
                <button class=\"toolbar_btn flex_c\" data-cmd=\"justifyFull\" tooltip=\"Justify\"><i
                            class=\"fa fa-align-justify\"></i></button>
                <button class=\"toolbar_btn flex_c\" data-cmd=\"justifyRight\" tooltip=\"Align Right\"><i
                            class=\"fa fa-align-right\"></i></button>
            </div>
            <div class=\"toolbar_btn_wrap flex_c\">
                <button class=\"toolbar_btn flex_c\" data-cmd=\"insertUnorderedList\" tooltip=\"Unordered List\"><i
                            class=\"fa fa-list\"></i></button>
                <button class=\"toolbar_btn flex_c\" data-cmd=\"insertOrderedList\" tooltip=\"Ordered List\"><i
                            class=\"fa fa-list-ol\"></i></button>
            </div>
            <div class=\"toolbar_btn_wrap flex_c\">
                <button class=\"toolbar_btn flex_c\" data-cmd=\"insertImage\" tooltip=\"Insert Image\" status=\"off\"><i
                            class=\"fa fa-image\"></i></button>
                <button class=\"toolbar_btn flex_c\" data-cmd=\"createLink\" tooltip=\"Create Link\"><i
                            class=\"fa fa-link\"></i></button>
                <div class=\"insertImg_btn_dropdown\">
                    <div class=\"img_dropdown_menu imgFile flex_c\" style=\"border-bottom: 2px solid #b378ff;\">
                        <div class=\"menu_text\">Upload from PC</div>
                        <div class=\"menu_icon\"><i class=\"fa fa-arrow-to-top\"></i></div>
                    </div>
                    <div class=\"img_dropdown_menu imgUrl flex_c\">
                        <div class=\"menu_text\">Insert by url</div>
                        <div class=\"menu_icon\"><i class=\"fa fa-link\"></i></div>
                    </div>
                </div>
            </div>
            <div class=\"toolbar_btn flex_c\" data-cmd=\"veiwCode\" status=\"off\" tooltip=\"HTML Code\"><i
                        class=\"fa fa-code\"></i></div>
            <div class=\"toolbar_btn_wrap flex_c\">
                <button class=\"toolbar_btn flex_c\" data-cmd=\"undo\" tooltip=\"Undo\"><i class=\"fa fa-undo\"></i></button>
                <button class=\"toolbar_btn flex_c\" data-cmd=\"redo\" tooltip=\"Redo\"><i class=\"fa fa-redo\"></i></button>
            </div>
        </div>
        <div class=\"editor_container flex_c\">
            <div class=\"lineNumber\"></div>
            <div class=\"editor_body\" id=\"blog_editor\" contenteditable=\"true\"></div>
        </div>
        <button class=\"get_text_button\">Save</button>

    </div>

{#        <div class=\"editor_data\"><a href=\"https://www.jqueryscript.net/tags.php?/Modal/\">Modal</a> flex_c\">#}
{#            <div class=\"imgUrl_dataModal_content\">#}
{#                <div style=\"margin-bottom:40px;\">Insert image</div>#}
{#                <input class=\"img_url_inp\" type=\"url\">#}
{#                <p>Only select images that you have confirmed that you have the license to use.</p>#}
{#                <div class=\"insert_btns flex_c\">#}
{#                    <button class=\"img_cancleBtn\" style=\"margin-right:20px\">Cancel</button>#}
{#                    <button class=\"img_insertBtn\">Insert</button>#}
{#                </div>#}
{#            </div>#}
{#            <div class=\"createUrl_dataModal_content\">#}
{#                <div style=\"margin-bottom:40px;\">Insert url</div>#}
{#                <input class=\"createUrl_inp\" type=\"url\">#}
{#                <p>Please put a valid url</p>#}
{#                <div class=\"createUrl_btns flex_c\">#}
{#                    <button class=\"createUrl_cancleBtn\" style=\"margin-right:20px\">Cancel</button>#}
{#                    <button class=\"createUrl_insertBtn\">Create</button>#}
{#                </div>#}
{#            </div>#}
{#        </div>#}
    <script>
        \$('.get_text_button').click(() => {
            var textHTML = \$('#blog_editor').html();
            var path = '{{ path('app_post_html') }}';
            var fullUrl   = window.location.origin + path;

            var titleText;

            if(titleText !== '') {
                titleText = \$('.title-text-post').val();
            }else{
                titleText = 'no_title';
            }

            \$.ajax({
                type: \"POST\",
                url: fullUrl,
                data: {textHTML: textHTML, titleText:titleText},
                complete: function (data) {
                    // \$('.blog_textEditorWrapper').empty();
                    {#\$('.blog_textEditorWrapper').append('<a href=\"{{ path('app_post_create') }}\">Create an other post</a>');#}
                }
            });
        });
    </script>

{% endblock %}

", "create_post.html.twig", "C:\\xampp\\htdocs\\ong5\\templates\\create_post.html.twig");
    }
}
