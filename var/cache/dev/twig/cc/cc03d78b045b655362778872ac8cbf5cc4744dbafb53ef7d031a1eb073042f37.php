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

/* base.html.twig */
class __TwigTemplate_b8c55721a463f0f635caa5d9d5c3c0f8228e32d7bda5daa5b0a5bf570a798c85 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

\t\t<title>
\t\t\t";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "\t\t\t- Rendez vous
        </title>

\t\t<link rel=\"shortcut icon\" href=\"/images/favicon.png\">

        <!-- Fontfaces CSS-->
        <link href=\"/assets/css/font-face.css\" rel=\"stylesheet\" media=\"all\">
        <link href=\"/assets/vendor/font-awesome-4.7/css/font-awesome.min.css\" rel=\"stylesheet\" media=\"all\">
        <link href=\"/assets/vendor/font-awesome-5/css/fontawesome-all.min.css\" rel=\"stylesheet\" media=\"all\">
        <link href=\"/assets/vendor/mdi-font/css/material-design-iconic-font.min.css\" rel=\"stylesheet\" media=\"all\">
\t\t<link href=\"/assets/vendor/slick/slick.css\" rel=\"stylesheet\" media=\"all\">

        <!-- Bootstrap CSS-->
        <link href=\"/assets/vendor/bootstrap-4.1/bootstrap.min.css\" rel=\"stylesheet\" media=\"all\">

        <link href=\"/assets/vendor/perfect-scrollbar/perfect-scrollbar.css\" rel=\"stylesheet\" media=\"all\">

        <!-- Main CSS-->
        <link href=\"/assets/css/theme.css\" rel=\"stylesheet\" media=\"all\">
        <!-- Bootstrap table-filter CSS -->
        <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css\">

        ";
        // line 31
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "
\t\t
\t</head>
\t<body>

\t\t<div class=\"page-wrapper\">
\t\t\t";
        // line 38
        $this->loadTemplate("_partials/menu.html.twig", "base.html.twig", 38)->display($context);
        // line 39
        echo "
\t\t\t<!-- PAGE CONTAINER-->
\t\t\t<div class=\"page-container\">
\t\t\t\t";
        // line 42
        $this->loadTemplate("_partials/header.html.twig", "base.html.twig", 42)->display($context);
        // line 43
        echo "
\t\t\t\t";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "
\t\t\t</div>
\t\t</div>


\t\t<!-- Jquery JS-->
\t\t<script src=\"https://code.jquery.com/jquery-3.3.1.js\"></script>
\t\t<!-- Bootstrap JS-->
\t\t<script src=\"/assets/vendor/bootstrap-4.1/popper.min.js\"></script>
\t\t<script src=\"/assets/vendor/bootstrap-4.1/bootstrap.min.js\"></script>
\t\t

\t\t<!-- Main JS-->
\t\t<script src=\"/assets/js/main.js\"></script>

\t\t<!-- Bootstrap Table JS -->
\t\t<script src=\"https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js\"></script>
\t\t<script src=\"https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js\"></script>

\t\t<!-- sweet Alert -->
\t\t<script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>

\t\t

\t\t";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "flashes", [], "any", false, false, false, 69));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 70
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 71
                echo "
\t\t\t\t<script>
\t\t\t\t\tswal(\"\", \"";
                // line 73
                echo $context["message"];
                echo "\", \"";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\");
\t\t\t\t</script>

\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "
\t\t<script>
\t\t\t\$(document).ready(function () {
            \$('.tablepage').DataTable();
            });
\t\t</script>

\t\t";
        // line 85
        $this->displayBlock('javascripts', $context, $blocks);
        // line 86
        echo "
\t</body>
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 85
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 85,  224 => 44,  206 => 31,  188 => 8,  174 => 86,  172 => 85,  163 => 78,  157 => 77,  145 => 73,  141 => 71,  136 => 70,  132 => 69,  106 => 45,  104 => 44,  101 => 43,  99 => 42,  94 => 39,  92 => 38,  84 => 32,  82 => 31,  58 => 9,  56 => 8,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

\t\t<title>
\t\t\t{% block title %}{% endblock %}
\t\t\t- Rendez vous
        </title>

\t\t<link rel=\"shortcut icon\" href=\"/images/favicon.png\">

        <!-- Fontfaces CSS-->
        <link href=\"/assets/css/font-face.css\" rel=\"stylesheet\" media=\"all\">
        <link href=\"/assets/vendor/font-awesome-4.7/css/font-awesome.min.css\" rel=\"stylesheet\" media=\"all\">
        <link href=\"/assets/vendor/font-awesome-5/css/fontawesome-all.min.css\" rel=\"stylesheet\" media=\"all\">
        <link href=\"/assets/vendor/mdi-font/css/material-design-iconic-font.min.css\" rel=\"stylesheet\" media=\"all\">
\t\t<link href=\"/assets/vendor/slick/slick.css\" rel=\"stylesheet\" media=\"all\">

        <!-- Bootstrap CSS-->
        <link href=\"/assets/vendor/bootstrap-4.1/bootstrap.min.css\" rel=\"stylesheet\" media=\"all\">

        <link href=\"/assets/vendor/perfect-scrollbar/perfect-scrollbar.css\" rel=\"stylesheet\" media=\"all\">

        <!-- Main CSS-->
        <link href=\"/assets/css/theme.css\" rel=\"stylesheet\" media=\"all\">
        <!-- Bootstrap table-filter CSS -->
        <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css\">

        {% block stylesheets %}{% endblock %}

\t\t
\t</head>
\t<body>

\t\t<div class=\"page-wrapper\">
\t\t\t{% include '_partials/menu.html.twig' %}

\t\t\t<!-- PAGE CONTAINER-->
\t\t\t<div class=\"page-container\">
\t\t\t\t{% include '_partials/header.html.twig' %}

\t\t\t\t{% block body %}{% endblock %}

\t\t\t</div>
\t\t</div>


\t\t<!-- Jquery JS-->
\t\t<script src=\"https://code.jquery.com/jquery-3.3.1.js\"></script>
\t\t<!-- Bootstrap JS-->
\t\t<script src=\"/assets/vendor/bootstrap-4.1/popper.min.js\"></script>
\t\t<script src=\"/assets/vendor/bootstrap-4.1/bootstrap.min.js\"></script>
\t\t

\t\t<!-- Main JS-->
\t\t<script src=\"/assets/js/main.js\"></script>

\t\t<!-- Bootstrap Table JS -->
\t\t<script src=\"https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js\"></script>
\t\t<script src=\"https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js\"></script>

\t\t<!-- sweet Alert -->
\t\t<script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>

\t\t

\t\t{% for label, messages in app.flashes %}
\t\t\t{% for message in messages %}

\t\t\t\t<script>
\t\t\t\t\tswal(\"\", \"{{ message | raw }}\", \"{{ label }}\");
\t\t\t\t</script>

\t\t\t{% endfor %}
\t\t{% endfor %}

\t\t<script>
\t\t\t\$(document).ready(function () {
            \$('.tablepage').DataTable();
            });
\t\t</script>

\t\t{% block javascripts %}{% endblock %}

\t</body>
</html>

", "base.html.twig", "/home/aosow/symfony/watson/templates/base.html.twig");
    }
}
