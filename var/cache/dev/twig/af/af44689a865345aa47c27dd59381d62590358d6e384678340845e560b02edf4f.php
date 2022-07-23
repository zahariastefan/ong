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

/* trip/trip-create.html.twig */
class __TwigTemplate_328c565938cabff75cded3f330d31ac8d351270cd0f19d24df7e9e8168782c96 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trip/trip-create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trip/trip-create.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "trip/trip-create.html.twig", 1);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 4, $this->source); })()));
        echo "
";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 5, $this->source); })()));
        echo "
";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 6, $this->source); })()));
        echo "

    <div class=\"blog_textEditorWrapper\">
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
    </div>

    <div class=\"editor_data\"><a href=\"https://www.jqueryscript.net/tags.php?/Modal/\">Modal</a> flex_c\">
        <div class=\"imgUrl_dataModal_content\">
            <div style=\"margin-bottom:40px;\">Insert image</div>
            <input class=\"img_url_inp\" type=\"url\">
            <p>Only select images that you have confirmed that you have the license to use.</p>
            <div class=\"insert_btns flex_c\">
                <button class=\"img_cancleBtn\" style=\"margin-right:20px\">Cancel</button>
                <button class=\"img_insertBtn\">Insert</button>
            </div>
        </div>
        <div class=\"createUrl_dataModal_content\">
            <div style=\"margin-bottom:40px;\">Insert url</div>
            <input class=\"createUrl_inp\" type=\"url\">
            <p>Please put a valid url</p>
            <div class=\"createUrl_btns flex_c\">
                <button class=\"createUrl_cancleBtn\" style=\"margin-right:20px\">Cancel</button>
                <button class=\"createUrl_insertBtn\">Create</button>
            </div>
        </div>
    </div>
    <script>
        console.log(\$('#blog_editor').html());
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "trip/trip-create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 6,  72 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
{{ dump(location) }}
{{ dump(activity) }}
{{ dump(date) }}

    <div class=\"blog_textEditorWrapper\">
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
    </div>

    <div class=\"editor_data\"><a href=\"https://www.jqueryscript.net/tags.php?/Modal/\">Modal</a> flex_c\">
        <div class=\"imgUrl_dataModal_content\">
            <div style=\"margin-bottom:40px;\">Insert image</div>
            <input class=\"img_url_inp\" type=\"url\">
            <p>Only select images that you have confirmed that you have the license to use.</p>
            <div class=\"insert_btns flex_c\">
                <button class=\"img_cancleBtn\" style=\"margin-right:20px\">Cancel</button>
                <button class=\"img_insertBtn\">Insert</button>
            </div>
        </div>
        <div class=\"createUrl_dataModal_content\">
            <div style=\"margin-bottom:40px;\">Insert url</div>
            <input class=\"createUrl_inp\" type=\"url\">
            <p>Please put a valid url</p>
            <div class=\"createUrl_btns flex_c\">
                <button class=\"createUrl_cancleBtn\" style=\"margin-right:20px\">Cancel</button>
                <button class=\"createUrl_insertBtn\">Create</button>
            </div>
        </div>
    </div>
    <script>
        console.log(\$('#blog_editor').html());
    </script>
{% endblock %}", "trip/trip-create.html.twig", "C:\\xampp\\htdocs\\ong5\\templates\\trip\\trip-create.html.twig");
    }
}
