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

/* place/index.html.twig */
class __TwigTemplate_510bfdb0781d4381eb0f919caded8482fb0f8e838524b57cbd396989eb11f4ca extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "place/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "place/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "place/index.html.twig", 1);
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

        echo "Clients
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "

\t<!-- MAIN CONTENT-->
\t<div class=\"main-content\">
\t\t<div class=\"section__content section__content--p30\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
                    
\t\t\t\t\t<div class=\"col-md-8 col-lg-8 user-data user-data mb-5 pb-3\">
\t\t\t\t\t\t<!-- DATA TABLE -->
\t\t\t\t\t\t<h3 class=\"title-5 m-b-35\">Tous les lieux</h3>
\t\t\t\t\t\t";
        // line 18
        if (1 === twig_compare(twig_length_filter($this->env, (isset($context["places"]) || array_key_exists("places", $context) ? $context["places"] : (function () { throw new RuntimeError('Variable "places" does not exist.', 18, $this->source); })())), 0)) {
            // line 19
            echo "\t\t\t\t\t\t\t<div class=\"table-responsive table-responsive-data\">
\t\t\t\t\t\t\t\t<table class=\"table table-data2 tablepage\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Adresse</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Code postal</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Ville</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t\t\t\t";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["places"]) || array_key_exists("places", $context) ? $context["places"] : (function () { throw new RuntimeError('Variable "places" does not exist.', 31, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
                // line 32
                echo "
\t\t\t\t\t\t\t\t\t\t\t<tr class=\"tr-shadow\">

\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["place"], "name", [], "any", false, false, false, 35), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["place"], "address", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["place"], "zipCode", [], "any", false, false, false, 37), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["place"], "city", [], "any", false, false, false, 38), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['place'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- END DATA TABLE -->
\t\t\t\t\t\t";
        } else {
            // line 48
            echo "\t\t\t\t\t\t\t<h4>Aucun lieux enregisté</h4>
\t\t\t\t\t\t";
        }
        // line 50
        echo "\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t<strong>Importer des lieux</strong>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t\t\t<div class=\"card-body card-block\">
\t\t\t\t\t\t\t\t";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "file", [], "any", false, false, false, 60), 'row');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
\t\t\t\t\t\t\t\t<button type=\"reset\" class=\"btn btn-danger\">Annuler</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 66
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "place/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 66,  176 => 60,  171 => 58,  161 => 50,  157 => 48,  149 => 42,  139 => 38,  135 => 37,  131 => 36,  127 => 35,  122 => 32,  118 => 31,  104 => 19,  102 => 18,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Clients
{% endblock %}

{% block body %}


\t<!-- MAIN CONTENT-->
\t<div class=\"main-content\">
\t\t<div class=\"section__content section__content--p30\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
                    
\t\t\t\t\t<div class=\"col-md-8 col-lg-8 user-data user-data mb-5 pb-3\">
\t\t\t\t\t\t<!-- DATA TABLE -->
\t\t\t\t\t\t<h3 class=\"title-5 m-b-35\">Tous les lieux</h3>
\t\t\t\t\t\t{% if places | length > 0 %}
\t\t\t\t\t\t\t<div class=\"table-responsive table-responsive-data\">
\t\t\t\t\t\t\t\t<table class=\"table table-data2 tablepage\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Adresse</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Code postal</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Ville</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t\t\t\t{% for place in places %}

\t\t\t\t\t\t\t\t\t\t\t<tr class=\"tr-shadow\">

\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ place.name }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ place.address }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ place.zipCode }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ place.city }}</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- END DATA TABLE -->
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<h4>Aucun lieux enregisté</h4>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t<strong>Importer des lieux</strong>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t{{ form_start(form) }}
\t\t\t\t\t\t\t<div class=\"card-body card-block\">
\t\t\t\t\t\t\t\t{{ form_row(form.file) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
\t\t\t\t\t\t\t\t<button type=\"reset\" class=\"btn btn-danger\">Annuler</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


{% endblock %}

", "place/index.html.twig", "/home/aosow/symfony/watson/templates/place/index.html.twig");
    }
}
