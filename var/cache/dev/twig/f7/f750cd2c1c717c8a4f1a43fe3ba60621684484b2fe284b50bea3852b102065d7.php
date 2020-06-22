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

/* show/index.html.twig */
class __TwigTemplate_b67345cb78b92c415f6bc45612cc0d1dab406a8fb1cf4ad0b87e9428596140e1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "show/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "show/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "show/index.html.twig", 1);
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

        echo "Liste des spectacles";
        
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
        echo "    <div class=\"container mt-4\">
        <form class=\"form-inline my-2 my-lg-0\" method=\"GET\" name=\"searchForm\">
            <input class=\"form-control mr-sm-2\" type=\"search\" name=\"search\" placeholder=\"Search\">
            <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
        </form>
    </div>
    <div class=\"container mt-4\">
        <div class=\"row flex\">
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["shows"]) || array_key_exists("shows", $context) ? $context["shows"] : (function () { throw new RuntimeError('Variable "shows" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["show"]) {
            // line 15
            echo "            <div class=\"col-3\">
                <div class=\"card\" style=\"width: 15rem; height: 336px\">
                    <img class=\"card-img-top\" src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["show"], "posterUrl", [], "any", false, false, false, 17))), "html", null, true);
            echo "\" alt=\"Card image cap\" style=\"height: 180px\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["show"], "title", [], "any", false, false, false, 19), "html", null, true);
            echo "</h5>
                        ";
            // line 20
            if (0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["show"], "representations", [], "any", false, false, false, 20)), 1)) {
                // line 21
                echo "                        <p class=\"card-text\"> 1 representation</p>
                        ";
            }
            // line 23
            echo "                        ";
            if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["show"], "representations", [], "any", false, false, false, 23)), 1)) {
                // line 24
                echo "                        <p class=\"card-text\"> ";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["show"], "representations", [], "any", false, false, false, 24)), "html", null, true);
                echo " representations</p>
                        ";
            }
            // line 26
            echo "                        ";
            if (-1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["show"], "representations", [], "any", false, false, false, 26)), 1)) {
                // line 27
                echo "                        <p class=\"card-text\"> aucune representation</p>
                        ";
            }
            // line 29
            echo "                        <div class=\"container\">
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_show", ["id" => twig_get_attribute($this->env, $this->source, $context["show"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">detail</a>
                            <a href=\"#\" class=\"btn btn-primary\">reserver</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['show'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "show/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 38,  140 => 30,  137 => 29,  133 => 27,  130 => 26,  124 => 24,  121 => 23,  117 => 21,  115 => 20,  111 => 19,  106 => 17,  102 => 15,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des spectacles{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <form class=\"form-inline my-2 my-lg-0\" method=\"GET\" name=\"searchForm\">
            <input class=\"form-control mr-sm-2\" type=\"search\" name=\"search\" placeholder=\"Search\">
            <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
        </form>
    </div>
    <div class=\"container mt-4\">
        <div class=\"row flex\">
            {% for show in shows %}
            <div class=\"col-3\">
                <div class=\"card\" style=\"width: 15rem; height: 336px\">
                    <img class=\"card-img-top\" src=\"{{  asset('images/' ~ show.posterUrl )}}\" alt=\"Card image cap\" style=\"height: 180px\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ show.title }}</h5>
                        {% if show.representations|length == 1 %}
                        <p class=\"card-text\"> 1 representation</p>
                        {% endif %}
                        {% if show.representations|length > 1 %}
                        <p class=\"card-text\"> {{show.representations|length}} representations</p>
                        {% endif %}
                        {% if show.representations|length < 1 %}
                        <p class=\"card-text\"> aucune representation</p>
                        {% endif %}
                        <div class=\"container\">
                            <a href=\"{{path('show_show',{id:show.id})}}\" class=\"btn btn-primary\">detail</a>
                            <a href=\"#\" class=\"btn btn-primary\">reserver</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
    </div>

{% endblock %}
", "show/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/reservationsWPWD/templates/show/index.html.twig");
    }
}
