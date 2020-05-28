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

/* representation/show.html.twig */
class __TwigTemplate_e0831b4cca14cb502ecd48e36a42cc2c51ac581a914d0623669656114d64de61 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "representation/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "representation/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "representation/show.html.twig", 1);
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

        echo "Fiche d'une représentation";
        
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
        echo "    <article>
        <h1>Représentation du ";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["representation"]) || array_key_exists("representation", $context) ? $context["representation"] : (function () { throw new RuntimeError('Variable "representation" does not exist.', 7, $this->source); })()), "schedule", [], "any", false, false, false, 7), "d/m/Y"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["representation"]) || array_key_exists("representation", $context) ? $context["representation"] : (function () { throw new RuntimeError('Variable "representation" does not exist.', 7, $this->source); })()), "schedule", [], "any", false, false, false, 7), "G:i"), "html", null, true);
        echo "</h1>
        <p><strong>Spectacle:</strong> ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["representation"]) || array_key_exists("representation", $context) ? $context["representation"] : (function () { throw new RuntimeError('Variable "representation" does not exist.', 8, $this->source); })()), "theShow", [], "any", false, false, false, 8), "title", [], "any", false, false, false, 8), "html", null, true);
        echo "</p>

        <p><strong>Lieu:</strong> 
        ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, (isset($context["representation"]) || array_key_exists("representation", $context) ? $context["representation"] : (function () { throw new RuntimeError('Variable "representation" does not exist.', 11, $this->source); })()), "theLocation", [], "any", false, false, false, 11)) {
            // line 12
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["representation"]) || array_key_exists("representation", $context) ? $context["representation"] : (function () { throw new RuntimeError('Variable "representation" does not exist.', 12, $this->source); })()), "theLocation", [], "any", false, false, false, 12), "designation", [], "any", false, false, false, 12), "html", null, true);
            echo "
        ";
        } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 13
(isset($context["representation"]) || array_key_exists("representation", $context) ? $context["representation"] : (function () { throw new RuntimeError('Variable "representation" does not exist.', 13, $this->source); })()), "theShow", [], "any", false, false, false, 13), "location", [], "any", false, false, false, 13)) {
            // line 14
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["representation"]) || array_key_exists("representation", $context) ? $context["representation"] : (function () { throw new RuntimeError('Variable "representation" does not exist.', 14, $this->source); })()), "theShow", [], "any", false, false, false, 14), "theLocation", [], "any", false, false, false, 14), "designation", [], "any", false, false, false, 14), "html", null, true);
            echo "
        ";
        } else {
            // line 16
            echo "        <em>à déterminer</em>
        ";
        }
        // line 18
        echo "        </p>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "representation/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 18,  118 => 16,  112 => 14,  110 => 13,  105 => 12,  103 => 11,  97 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Fiche d'une représentation{% endblock %}

{% block body %}
    <article>
        <h1>Représentation du {{ representation.schedule|date('d/m/Y') }} à {{ representation.schedule|date('G:i') }}</h1>
        <p><strong>Spectacle:</strong> {{ representation.theShow.title }}</p>

        <p><strong>Lieu:</strong> 
        {% if representation.theLocation %}
        {{ representation.theLocation.designation }}
        {% elseif representation.theShow.location %}
        {{ representation.theShow.theLocation.designation }}
        {% else %}
        <em>à déterminer</em>
        {% endif %}
        </p>
{% endblock %}
", "representation/show.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/reservationsWPWD/templates/representation/show.html.twig");
    }
}
