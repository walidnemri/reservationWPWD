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
        echo "    <h1>Liste des ";
        echo twig_escape_filter($this->env, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</h1>
    <div class=\"row\">
    <div class=\"col-md-4\">
    <ul class=\"list-group\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["shows"]) || array_key_exists("shows", $context) ? $context["shows"] : (function () { throw new RuntimeError('Variable "shows" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["show"]) {
            // line 11
            echo "        <li class=\"list-group-item\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["show"], "title", [], "any", false, false, false, 11), "html", null, true);
            echo "
            ";
            // line 12
            if (twig_get_attribute($this->env, $this->source, $context["show"], "bookable", [], "any", false, false, false, 12)) {
                // line 13
                echo "            <span>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["show"], "price", [], "any", false, false, false, 13), "html", null, true);
                echo " €</span>
            ";
            }
            // line 15
            echo "            
            ";
            // line 16
            if (0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["show"], "representations", [], "any", false, false, false, 16)), 1)) {
                // line 17
                echo "            - <span>1 représentation</span>
            ";
            } elseif (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 18
$context["show"], "representations", [], "any", false, false, false, 18)), 1)) {
                // line 19
                echo "            - <span>";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["show"], "representations", [], "any", false, false, false, 19)), "html", null, true);
                echo " représentations</span>
            ";
            } else {
                // line 21
                echo "            - <em>aucune représentation</em>
            ";
            }
            // line 23
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_show", ["id" => twig_get_attribute($this->env, $this->source, $context["show"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">detail</a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['show'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </ul>
    </div>
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
        return array (  143 => 26,  133 => 23,  129 => 21,  123 => 19,  121 => 18,  118 => 17,  116 => 16,  113 => 15,  107 => 13,  105 => 12,  100 => 11,  96 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des spectacles{% endblock %}

{% block body %}
    <h1>Liste des {{ resource }}</h1>
    <div class=\"row\">
    <div class=\"col-md-4\">
    <ul class=\"list-group\">
    {% for show in shows %}
        <li class=\"list-group-item\">{{ show.title }}
            {% if show.bookable %}
            <span>{{ show.price }} €</span>
            {% endif %}
            
            {% if show.representations|length==1 %}
            - <span>1 représentation</span>
            {% elseif show.representations|length>1 %}
            - <span>{{ show.representations|length }} représentations</span>
            {% else %}
            - <em>aucune représentation</em>
            {% endif %}
            <a href=\"{{path('show_show',{id:show.id})}}\" class=\"btn btn-primary\">detail</a>
        </li>
    {% endfor %}
    </ul>
    </div>
    </div>
{% endblock %}
", "show/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/reservationsWPWD/templates/show/index.html.twig");
    }
}
