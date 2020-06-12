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

/* reservation/index.html.twig */
class __TwigTemplate_7b9ce2bb8c4e0c96986b4038c4c87035498575f3d2d52a52e0199926fca90916 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/index.html.twig", 1);
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

        echo "Reservation index";
        
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
        echo "    <h1>Reservation index</h1>
    <div class=\"row\">
        <div class=\"col-md-4\">
            <ul class=\"list-group\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 10, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["groups"]) {
            // line 11
            echo "                    <li class=\"list-group-item\">
                        <ul class=\"list-group\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["groups"], 0, [], "any", false, false, false, 12), "user", [], "any", false, false, false, 12), "firstname", [], "any", false, false, false, 12), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["groups"], 0, [], "any", false, false, false, 12), "user", [], "any", false, false, false, 12), "lastname", [], "any", false, false, false, 12), "html", null, true);
            echo "
                        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["groups"]);
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 14
                echo "                            <li class=\"list-group-item\">
                                <div>";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "representation", [], "any", false, false, false, 15), "theShow", [], "any", false, false, false, 15), "title", [], "any", false, false, false, 15), "html", null, true);
                echo "</div> (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "places", [], "any", false, false, false, 15), "html", null, true);
                echo " places)
                                <a href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 16)]), "html", null, true);
                echo "\">show</a>
                                <a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 17)]), "html", null, true);
                echo "\">edit</a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "                        </ul>
                    </li>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "                    <li>no records found</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groups'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "            </ul>
        </div>
    </div>

    <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_new");
        echo "\">Create new</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reservation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 29,  148 => 25,  141 => 23,  134 => 20,  125 => 17,  121 => 16,  115 => 15,  112 => 14,  108 => 13,  102 => 12,  99 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Reservation index{% endblock %}

{% block body %}
    <h1>Reservation index</h1>
    <div class=\"row\">
        <div class=\"col-md-4\">
            <ul class=\"list-group\">
                {% for groups in reservations %}
                    <li class=\"list-group-item\">
                        <ul class=\"list-group\">{{ groups.0.user.firstname }} {{ groups.0.user.lastname }}
                        {% for reservation in groups %}
                            <li class=\"list-group-item\">
                                <div>{{ reservation.representation.theShow.title }}</div> ({{ reservation.places }} places)
                                <a href=\"{{ path('reservation_show', {'id': reservation.id}) }}\">show</a>
                                <a href=\"{{ path('reservation_edit', {'id': reservation.id}) }}\">edit</a>
                            </li>
                        {% endfor %}
                        </ul>
                    </li>
                {% else %}
                    <li>no records found</li>
                {% endfor %}
            </ul>
        </div>
    </div>

    <a href=\"{{ path('reservation_new') }}\">Create new</a>
{% endblock %}
", "reservation/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/reservationsWPWD/templates/reservation/index.html.twig");
    }
}
