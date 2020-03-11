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

/* customer/index.html.twig */
class __TwigTemplate_760b60536a473c94565a3569c612b6fa7bce6de24aad28474b0e62e01dbbb786 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "customer/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "customer/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "customer/index.html.twig", 1);
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
\t
    <!-- MAIN CONTENT-->
    <div class=\"main-content\">
        <div class=\"section__content section__content--p30\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div
                        class=\"col-md-8 col-lg-8 user-data user-data mb-5 pb-3\">
                        <!-- DATA TABLE -->
                        <h3 class=\"title-5 m-b-35\">Liste des clients</h3>
                        ";
        // line 18
        if (1 === twig_compare(twig_length_filter($this->env, (isset($context["customers"]) || array_key_exists("customers", $context) ? $context["customers"] : (function () { throw new RuntimeError('Variable "customers" does not exist.', 18, $this->source); })())), 0)) {
            // line 19
            echo "                            <div class=\"table-responsive table-responsive-data\">
                                <table class=\"table table-data2 tablepage\">
                                    <thead>
                                        <tr>
                                            <th>Prénom</th>
                                            <th>Nom</th>
                                            <th>Naissance</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customers"]) || array_key_exists("customers", $context) ? $context["customers"] : (function () { throw new RuntimeError('Variable "customers" does not exist.', 31, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 32
                echo "
                                            <tr class=\"tr-shadow\">
                                                
                                                <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "firstName", [], "any", false, false, false, 35), "html", null, true);
                echo "</td>
                                                <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "lastName", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
                                                <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "birthDate", [], "any", false, false, false, 37), "d/m/Y"), "html", null, true);
                echo "</td>
                                                <td>
                                                    <div class=\"table-data-feature\">
                                                        <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customer_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["customer"], "id", [], "any", false, false, false, 40)]), "html", null, true);
                echo "\" class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Modifier\">
                                                            <i class=\"zmdi zmdi-edit\"></i>
                                                        </a>

                                                        <button type=\"button\" class=\"item\" data-toggle=\"modal\" data-target=\"#";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "id", [], "any", false, false, false, 44), "html", null, true);
                echo "\">
                                                            <i class=\"zmdi zmdi-delete\"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>

                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "
                                    </tbody>
                                </table>
                            </div>
                            <!-- END DATA TABLE -->
                        ";
        } else {
            // line 58
            echo "                            <h4>Aucun client enrégistré</h4>
                        ";
        }
        // line 60
        echo "                    </div>
                    
                    <div class=\"col-md-4\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <strong>Ajouter un client</strong>
                            </div>

                            ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), 'form_start');
        echo "
                            <div class=\"card-body card-block\">
                                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "firstName", [], "any", false, false, false, 70), 'row');
        echo "
                                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "lastName", [], "any", false, false, false, 71), 'row');
        echo "
                                ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "birthDate", [], "any", false, false, false, 72), 'row');
        echo "
                            </div>
                            <div class=\"card-footer\">
                                <button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
                                <button type=\"reset\" class=\"btn btn-danger\">Annuler</button>
                            </div>
                            ";
        // line 78
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), 'form_end');
        echo "
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>


    ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customers"]) || array_key_exists("customers", $context) ? $context["customers"] : (function () { throw new RuntimeError('Variable "customers" does not exist.', 88, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
            // line 89
            echo "
\t<!-- modal static delete -->
\t<div class=\"modal fade\" id=\"";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "id", [], "any", false, false, false, 91), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "id", [], "any", false, false, false, 91), "html", null, true);
            echo "ModalLabel\" aria-hidden=\"true\" data-backdrop=\"static\">
\t\t<div class=\"modal-dialog modal-md\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\" id=\"";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "id", [], "any", false, false, false, 95), "html", null, true);
            echo "ModalLabel\">Suppression d'un client</h5>
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<p>
\t\t\t\t\t\tSouhaitez vous supprimer ";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "firstName", [], "any", false, false, false, 102), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "lastName", [], "any", false, false, false, 102), "html", null, true);
            echo " ?
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Non, annuler</button>
\t\t\t\t\t<a type=\"button\" href=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customer_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["customer"], "id", [], "any", false, false, false, 107)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Oui, Supprimer</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- end modal static -->

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "customer/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 115,  256 => 107,  246 => 102,  236 => 95,  227 => 91,  223 => 89,  219 => 88,  206 => 78,  197 => 72,  193 => 71,  189 => 70,  184 => 68,  174 => 60,  170 => 58,  162 => 52,  148 => 44,  141 => 40,  135 => 37,  131 => 36,  127 => 35,  122 => 32,  118 => 31,  104 => 19,  102 => 18,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Clients
{% endblock %}

{% block body %}

\t
    <!-- MAIN CONTENT-->
    <div class=\"main-content\">
        <div class=\"section__content section__content--p30\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div
                        class=\"col-md-8 col-lg-8 user-data user-data mb-5 pb-3\">
                        <!-- DATA TABLE -->
                        <h3 class=\"title-5 m-b-35\">Liste des clients</h3>
                        {% if customers | length > 0 %}
                            <div class=\"table-responsive table-responsive-data\">
                                <table class=\"table table-data2 tablepage\">
                                    <thead>
                                        <tr>
                                            <th>Prénom</th>
                                            <th>Nom</th>
                                            <th>Naissance</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        {% for customer in customers %}

                                            <tr class=\"tr-shadow\">
                                                
                                                <td>{{ customer.firstName }}</td>
                                                <td>{{ customer.lastName }}</td>
                                                <td>{{ customer.birthDate | date(\"d/m/Y\") }}</td>
                                                <td>
                                                    <div class=\"table-data-feature\">
                                                        <a href=\"{{ path('customer_edit', {'id': customer.id}) }}\" class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Modifier\">
                                                            <i class=\"zmdi zmdi-edit\"></i>
                                                        </a>

                                                        <button type=\"button\" class=\"item\" data-toggle=\"modal\" data-target=\"#{{ customer.id }}\">
                                                            <i class=\"zmdi zmdi-delete\"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>

                                        {% endfor %}

                                    </tbody>
                                </table>
                            </div>
                            <!-- END DATA TABLE -->
                        {% else %}
                            <h4>Aucun client enrégistré</h4>
                        {% endif %}
                    </div>
                    
                    <div class=\"col-md-4\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <strong>Ajouter un client</strong>
                            </div>

                            {{ form_start(form) }}
                            <div class=\"card-body card-block\">
                                {{ form_row(form.firstName) }}
                                {{ form_row(form.lastName) }}
                                {{ form_row(form.birthDate) }}
                            </div>
                            <div class=\"card-footer\">
                                <button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
                                <button type=\"reset\" class=\"btn btn-danger\">Annuler</button>
                            </div>
                            {{ form_end(form) }}
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>


    {% for customer in customers %}

\t<!-- modal static delete -->
\t<div class=\"modal fade\" id=\"{{ customer.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"{{ customer.id }}ModalLabel\" aria-hidden=\"true\" data-backdrop=\"static\">
\t\t<div class=\"modal-dialog modal-md\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\" id=\"{{ customer.id }}ModalLabel\">Suppression d'un client</h5>
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<p>
\t\t\t\t\t\tSouhaitez vous supprimer {{ customer.firstName }} {{ customer.lastName }} ?
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Non, annuler</button>
\t\t\t\t\t<a type=\"button\" href=\"{{ path('customer_delete', {'id': customer.id}) }}\" class=\"btn btn-primary\">Oui, Supprimer</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- end modal static -->

{% endfor %}



{% endblock %}

", "customer/index.html.twig", "/home/aosow/symfony/watson/templates/customer/index.html.twig");
    }
}
