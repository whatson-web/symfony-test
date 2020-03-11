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

/* appointment/index.html.twig */
class __TwigTemplate_2ad9020406396c2c39747500f448384cf25df8ea44b96ad2454b3769576ed171 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "appointment/index.html.twig", 1);
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

        echo "Rendez vous
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
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"col-md-8 col-lg-8 user-data user-data mb-5 pb-3\">
\t\t\t\t\t\t<!-- DATA TABLE -->
\t\t\t\t\t\t<h3 class=\"title-5 m-b-35\">Liste des rendez vous</h3>
\t\t\t\t\t\t";
        // line 18
        if (1 === twig_compare(twig_length_filter($this->env, (isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 18, $this->source); })())), 0)) {
            // line 19
            echo "\t\t\t\t\t\t\t<div class=\"table-responsive table-responsive-data\">
\t\t\t\t\t\t\t\t<table class=\"table table-data2 tablepage\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Client</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Lieu</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Options</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t\t\t\t";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 31, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["appointment"]) {
                // line 32
                echo "
\t\t\t\t\t\t\t\t\t\t\t<tr class=\"tr-shadow\">

\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["appointment"], "customer", [], "any", false, false, false, 35), "firstName", [], "any", false, false, false, 35), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["appointment"], "customer", [], "any", false, false, false, 35), "lastName", [], "any", false, false, false, 35), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["appointment"], "place", [], "any", false, false, false, 36), "name", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 37
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "date", [], "any", false, false, false, 37), "d/m/Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-data-feature\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("appointment_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 40)]), "html", null, true);
                echo "\" class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Modifier\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"item\" data-toggle=\"modal\" data-target=\"#";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 44), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-delete\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appointment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- END DATA TABLE -->
\t\t\t\t\t\t";
        } else {
            // line 58
            echo "\t\t\t\t\t\t\t<h4>Aucun client enrégistré</h4>
\t\t\t\t\t\t";
        }
        // line 60
        echo "\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t<strong>Ajouter un client</strong>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t\t\t<div class=\"card-body card-block\">
\t\t\t\t\t\t\t\t";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "customer", [], "any", false, false, false, 70), 'row');
        echo "
\t\t\t\t\t\t\t\t";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "place", [], "any", false, false, false, 71), 'row');
        echo "
\t\t\t\t\t\t\t\t";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "date", [], "any", false, false, false, 72), 'row');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
\t\t\t\t\t\t\t\t<button type=\"reset\" class=\"btn btn-danger\">Annuler</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 78
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


\t";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 88, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["appointment"]) {
            // line 89
            echo "
\t\t<!-- modal static delete -->
\t\t<div class=\"modal fade\" id=\"";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 91), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 91), "html", null, true);
            echo "ModalLabel\" aria-hidden=\"true\" data-backdrop=\"static\">
\t\t\t<div class=\"modal-dialog modal-md\" role=\"document\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 95), "html", null, true);
            echo "ModalLabel\">Suppression d'un client</h5>
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tSouhaitez vous supprimer le rendez vous avec 
\t\t\t\t\t\t\t";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["appointment"], "customer", [], "any", false, false, false, 103), "firstName", [], "any", false, false, false, 103), "html", null, true);
            echo " le
\t\t\t\t\t\t\t";
            // line 104
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "date", [], "any", false, false, false, 104), "m/d/Y"), "html", null, true);
            echo "
\t\t\t\t\t\t\t?
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Non, annuler</button>
\t\t\t\t\t\t<a type=\"button\" href=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("appointment_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 110)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Oui, Supprimer</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- end modal static -->

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appointment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "appointment/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 118,  262 => 110,  253 => 104,  249 => 103,  238 => 95,  229 => 91,  225 => 89,  221 => 88,  208 => 78,  199 => 72,  195 => 71,  191 => 70,  186 => 68,  176 => 60,  172 => 58,  164 => 52,  150 => 44,  143 => 40,  137 => 37,  133 => 36,  127 => 35,  122 => 32,  118 => 31,  104 => 19,  102 => 18,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Rendez vous
{% endblock %}

{% block body %}


\t<!-- MAIN CONTENT-->
\t<div class=\"main-content\">
\t\t<div class=\"section__content section__content--p30\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"col-md-8 col-lg-8 user-data user-data mb-5 pb-3\">
\t\t\t\t\t\t<!-- DATA TABLE -->
\t\t\t\t\t\t<h3 class=\"title-5 m-b-35\">Liste des rendez vous</h3>
\t\t\t\t\t\t{% if appointments | length > 0 %}
\t\t\t\t\t\t\t<div class=\"table-responsive table-responsive-data\">
\t\t\t\t\t\t\t\t<table class=\"table table-data2 tablepage\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Client</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Lieu</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Options</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t\t\t\t{% for appointment in appointments %}

\t\t\t\t\t\t\t\t\t\t\t<tr class=\"tr-shadow\">

\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ appointment.customer.firstName }} {{ appointment.customer.lastName }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ appointment.place.name }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ appointment.date | date(\"d/m/Y\") }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-data-feature\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('appointment_edit', {'id': appointment.id}) }}\" class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Modifier\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"item\" data-toggle=\"modal\" data-target=\"#{{ appointment.id }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-delete\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- END DATA TABLE -->
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<h4>Aucun client enrégistré</h4>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t<strong>Ajouter un client</strong>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t{{ form_start(form) }}
\t\t\t\t\t\t\t<div class=\"card-body card-block\">
\t\t\t\t\t\t\t\t{{ form_row(form.customer) }}
\t\t\t\t\t\t\t\t{{ form_row(form.place) }}
\t\t\t\t\t\t\t\t{{ form_row(form.date) }}
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


\t{% for appointment in appointments %}

\t\t<!-- modal static delete -->
\t\t<div class=\"modal fade\" id=\"{{ appointment.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"{{ appointment.id }}ModalLabel\" aria-hidden=\"true\" data-backdrop=\"static\">
\t\t\t<div class=\"modal-dialog modal-md\" role=\"document\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"{{ appointment.id }}ModalLabel\">Suppression d'un client</h5>
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tSouhaitez vous supprimer le rendez vous avec 
\t\t\t\t\t\t\t{{ appointment.customer.firstName }} le
\t\t\t\t\t\t\t{{ appointment.date | date(\"m/d/Y\") }}
\t\t\t\t\t\t\t?
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Non, annuler</button>
\t\t\t\t\t\t<a type=\"button\" href=\"{{ path('appointment_delete', {'id': appointment.id}) }}\" class=\"btn btn-primary\">Oui, Supprimer</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- end modal static -->

\t{% endfor %}


{% endblock %}

", "appointment/index.html.twig", "/home/aosow/symfony/watson/templates/appointment/index.html.twig");
    }
}
