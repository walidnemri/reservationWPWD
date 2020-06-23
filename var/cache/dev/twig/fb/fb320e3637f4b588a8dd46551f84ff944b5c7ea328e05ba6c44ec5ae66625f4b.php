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

/* show/show.html.twig */
class __TwigTemplate_3dde5dce1689990784deed6fa60ee3ac228d960a7c6e11e7faf7c9e28dcbed75 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "show/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "show/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "show/show.html.twig", 1);
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

        echo "Fiche d'un spectacle";
        
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
        <h1>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["show"]) || array_key_exists("show", $context) ? $context["show"] : (function () { throw new RuntimeError('Variable "show" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>

        ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, (isset($context["show"]) || array_key_exists("show", $context) ? $context["show"] : (function () { throw new RuntimeError('Variable "show" does not exist.', 9, $this->source); })()), "posterUrl", [], "any", false, false, false, 9)) {
            // line 10
            echo "        <p><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, (isset($context["show"]) || array_key_exists("show", $context) ? $context["show"] : (function () { throw new RuntimeError('Variable "show" does not exist.', 10, $this->source); })()), "posterUrl", [], "any", false, false, false, 10))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["show"]) || array_key_exists("show", $context) ? $context["show"] : (function () { throw new RuntimeError('Variable "show" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
            echo "\" width=\"200\"></p>
        ";
        } else {
            // line 12
            echo "        <canvas width=\"200\" height=\"100\" style=\"border:1px solid #000000;\"></canvas>
        ";
        }
        // line 14
        echo "
        ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, (isset($context["show"]) || array_key_exists("show", $context) ? $context["show"] : (function () { throw new RuntimeError('Variable "show" does not exist.', 15, $this->source); })()), "location", [], "any", false, false, false, 15)) {
            // line 16
            echo "        <p><strong>Lieu de création:</strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["show"]) || array_key_exists("show", $context) ? $context["show"] : (function () { throw new RuntimeError('Variable "show" does not exist.', 16, $this->source); })()), "location", [], "any", false, false, false, 16), "designation", [], "any", false, false, false, 16), "html", null, true);
            echo "</p>
        ";
        }
        // line 18
        echo "        
        <p><strong>Prix:</strong> ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["show"]) || array_key_exists("show", $context) ? $context["show"] : (function () { throw new RuntimeError('Variable "show" does not exist.', 19, $this->source); })()), "price", [], "any", false, false, false, 19), "html", null, true);
        echo " €</p>
        
        ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, (isset($context["show"]) || array_key_exists("show", $context) ? $context["show"] : (function () { throw new RuntimeError('Variable "show" does not exist.', 21, $this->source); })()), "bookable", [], "any", false, false, false, 21)) {
            // line 22
            echo "        <p><em>Réservable</em></p>
        ";
        } else {
            // line 24
            echo "        <p><em>Non réservable</em></p>
        ";
        }
        // line 26
        echo "        
        <h2>Liste des représentations</h2>
        ";
        // line 28
        if (0 <= twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["show"]) || array_key_exists("show", $context) ? $context["show"] : (function () { throw new RuntimeError('Variable "show" does not exist.', 28, $this->source); })()), "representations", [], "any", false, false, false, 28)), 1)) {
            // line 29
            echo "        <ul>
            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["show"]) || array_key_exists("show", $context) ? $context["show"] : (function () { throw new RuntimeError('Variable "show" does not exist.', 30, $this->source); })()), "representations", [], "any", false, false, false, 30));
            foreach ($context['_seq'] as $context["_key"] => $context["representation"]) {
                // line 31
                echo "                <li>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["representation"], "schedule", [], "any", false, false, false, 31), "d/m/Y G:i:s"), "html", null, true);
                echo "</li>
               <form action='";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["show"]) || array_key_exists("show", $context) ? $context["show"] : (function () { throw new RuntimeError('Variable "show" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)]), "html", null, true);
                echo "' method=\"POST\">
                <div class=\"form-group\">
                        <input type=\"number\" id=\"reservation_places\" name=\"reservation[places]\">
                        <input type=\"hidden\" id=\"reservation_representation\" name=\"reservation[representation]\" 
                               value=\"";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["representation"], "id", [], "any", false, false, false, 36), "html", null, true);
                echo "\">
                        <input type=\"hidden\" id=\"reservation__token\" name=\"reservation[_token]\" 
                               value=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("reservation"), "html", null, true);
                echo "\">
                        <button class=\"btn btn-primary\">Réserver</button>
                </div>
                </form>          
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['representation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "        </ul>
        ";
        } else {
            // line 45
            echo "        <p>Aucune représentation</p>
        ";
        }
        // line 47
        echo "        
         <h2>Liste des artistes</h2>
        ";
        // line 49
        if (0 <= twig_compare(twig_length_filter($this->env, (isset($context["collaborateurs"]) || array_key_exists("collaborateurs", $context) ? $context["collaborateurs"] : (function () { throw new RuntimeError('Variable "collaborateurs" does not exist.', 49, $this->source); })())), 1)) {
            // line 50
            echo "        
        ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["collaborateurs"]) || array_key_exists("collaborateurs", $context) ? $context["collaborateurs"] : (function () { throw new RuntimeError('Variable "collaborateurs" does not exist.', 51, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                // line 52
                echo "        <p>";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["key"]), "html", null, true);
                echo ": 
            ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collaborateurs"]) || array_key_exists("collaborateurs", $context) ? $context["collaborateurs"] : (function () { throw new RuntimeError('Variable "collaborateurs" does not exist.', 53, $this->source); })()), $context["key"], [], "array", false, false, false, 53));
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
                foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                    // line 54
                    echo "                ";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 54), (twig_get_attribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, false, 54) - 1))) {
                        echo " et 
            ";
                    } elseif ( !twig_get_attribute($this->env, $this->source,                     // line 55
$context["loop"], "last", [], "any", false, false, false, 55)) {
                        echo ", ";
                    }
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "        </p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "        ";
        } else {
            // line 60
            echo "        <p>Aucun artiste</p>
        ";
        }
        // line 62
        echo "        
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "show/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 62,  257 => 60,  254 => 59,  247 => 57,  229 => 55,  223 => 54,  206 => 53,  201 => 52,  197 => 51,  194 => 50,  192 => 49,  188 => 47,  184 => 45,  180 => 43,  169 => 38,  164 => 36,  157 => 32,  152 => 31,  148 => 30,  145 => 29,  143 => 28,  139 => 26,  135 => 24,  131 => 22,  129 => 21,  124 => 19,  121 => 18,  115 => 16,  113 => 15,  110 => 14,  106 => 12,  98 => 10,  96 => 9,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Fiche d'un spectacle{% endblock %}

{% block body %}
    <article>
        <h1>{{ show.title }}</h1>

        {% if show.posterUrl %}
        <p><img src=\"{{ asset('images/' ~ show.posterUrl) }}\" alt=\"{{ show.title }}\" width=\"200\"></p>
        {% else %}
        <canvas width=\"200\" height=\"100\" style=\"border:1px solid #000000;\"></canvas>
        {% endif %}

        {% if show.location %}
        <p><strong>Lieu de création:</strong> {{ show.location.designation }}</p>
        {% endif %}
        
        <p><strong>Prix:</strong> {{ show.price }} €</p>
        
        {% if show.bookable %}
        <p><em>Réservable</em></p>
        {% else %}
        <p><em>Non réservable</em></p>
        {% endif %}
        
        <h2>Liste des représentations</h2>
        {% if show.representations|length>=1 %}
        <ul>
            {% for representation in show.representations %}
                <li>{{ representation.schedule|date('d/m/Y G:i:s') }}</li>
               <form action='{{ path('show_show',{'id':show.id}) }}' method=\"POST\">
                <div class=\"form-group\">
                        <input type=\"number\" id=\"reservation_places\" name=\"reservation[places]\">
                        <input type=\"hidden\" id=\"reservation_representation\" name=\"reservation[representation]\" 
                               value=\"{{ representation.id }}\">
                        <input type=\"hidden\" id=\"reservation__token\" name=\"reservation[_token]\" 
                               value=\"{{ csrf_token('reservation') }}\">
                        <button class=\"btn btn-primary\">Réserver</button>
                </div>
                </form>          
            {% endfor %}
        </ul>
        {% else %}
        <p>Aucune représentation</p>
        {% endif %}
        
         <h2>Liste des artistes</h2>
        {% if collaborateurs|length>=1 %}
        
        {% for key in collaborateurs|keys %}
        <p>{{ key|capitalize }}: 
            {% for value in collaborateurs[key] %}
                {{ value }}{% if loop.index == loop.length-1 %} et 
            {% elseif not loop.last %}, {% endif %}           
            {% endfor %}
        </p>
        {% endfor %}
        {% else %}
        <p>Aucun artiste</p>
        {% endif %}
        
{% endblock %}
", "show/show.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/reservationsWPWD/templates/show/show.html.twig");
    }
}
