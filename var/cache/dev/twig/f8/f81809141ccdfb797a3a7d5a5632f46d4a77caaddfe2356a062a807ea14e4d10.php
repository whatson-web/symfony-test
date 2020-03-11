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

/* home.html.twig */
class __TwigTemplate_df52d5e8085203ba06c957db503016ac0ac5868026b65ef74dba4b65bee586c5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

\t\t<title>Accueil - Rendez vous</title>

\t\t<link
\t\trel=\"shortcut icon\" href=\"/images/favicon.png\">

\t\t<!-- Fontfaces CSS-->
\t\t<link href=\"/assets/css/font-face.css\" rel=\"stylesheet\" media=\"all\">
\t\t<link href=\"/assets/vendor/font-awesome-4.7/css/font-awesome.min.css\" rel=\"stylesheet\" media=\"all\">
\t\t<link href=\"/assets/vendor/font-awesome-5/css/fontawesome-all.min.css\" rel=\"stylesheet\" media=\"all\">
\t\t<link
\t\thref=\"/assets/vendor/mdi-font/css/material-design-iconic-font.min.css\" rel=\"stylesheet\" media=\"all\">

\t\t<!-- Bootstrap CSS-->
\t\t<link href=\"/assets/vendor/bootstrap-4.1/bootstrap.min.css\" rel=\"stylesheet\" media=\"all\">

\t\t<link
\t\thref=\"/assets/vendor/perfect-scrollbar/perfect-scrollbar.css\" rel=\"stylesheet\" media=\"all\">

\t\t<!-- Main CSS-->
\t\t<link href=\"/assets/css/theme.css\" rel=\"stylesheet\" media=\"all\">

\t</head>
\t<body class=\"animsition\">

\t\t<div class=\"page-wrapper\">
\t\t\t<div class=\"page-content--bge5\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"login-wrap\">
\t\t\t\t\t\t<div class=\"login-content\">
\t\t\t\t\t\t\t<h4 class=\"text-center\">Bienvenue sur</h4>
\t\t\t\t\t\t\t<div class=\"login-logo\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">
\t\t\t\t\t\t\t\t\t<img src=\"/images/logo.png\" alt=\"Rendez vous\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t";
        // line 43
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43)) {
            // line 44
            echo "\t\t\t\t\t\t\t\t\t<p class=\"mb-4\">Bonjour ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "firstName", [], "any", false, false, false, 44), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
            echo "\" class=\"au-btn au-btn--green m-b-20\" type=\"submit\">Dashboard</a>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_logout");
            echo "\" class=\"au-btn au-btn--green m-b-20\" type=\"submit\">Se deconnecter</a>
\t\t\t\t\t\t\t\t";
        } else {
            // line 48
            echo "\t\t\t\t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_login");
            echo "\" class=\"au-btn au-btn--green m-b-20\" type=\"submit\">Se connecter</a>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration");
            echo "\" class=\"au-btn au-btn--green m-b-20\" type=\"submit\">S'inscrire</a>
\t\t\t\t\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Jquery JS-->
\t\t<script src=\"https://code.jquery.com/jquery-3.3.1.js\"></script>

\t\t<script src=\"/assets/back-end/vendor/bootstrap-4.1/bootstrap.min.js\"></script>

\t\t<!-- sweet Alert -->
\t\t<script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>


\t</body>
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 51,  111 => 49,  106 => 48,  101 => 46,  97 => 45,  92 => 44,  90 => 43,  82 => 38,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

\t\t<title>Accueil - Rendez vous</title>

\t\t<link
\t\trel=\"shortcut icon\" href=\"/images/favicon.png\">

\t\t<!-- Fontfaces CSS-->
\t\t<link href=\"/assets/css/font-face.css\" rel=\"stylesheet\" media=\"all\">
\t\t<link href=\"/assets/vendor/font-awesome-4.7/css/font-awesome.min.css\" rel=\"stylesheet\" media=\"all\">
\t\t<link href=\"/assets/vendor/font-awesome-5/css/fontawesome-all.min.css\" rel=\"stylesheet\" media=\"all\">
\t\t<link
\t\thref=\"/assets/vendor/mdi-font/css/material-design-iconic-font.min.css\" rel=\"stylesheet\" media=\"all\">

\t\t<!-- Bootstrap CSS-->
\t\t<link href=\"/assets/vendor/bootstrap-4.1/bootstrap.min.css\" rel=\"stylesheet\" media=\"all\">

\t\t<link
\t\thref=\"/assets/vendor/perfect-scrollbar/perfect-scrollbar.css\" rel=\"stylesheet\" media=\"all\">

\t\t<!-- Main CSS-->
\t\t<link href=\"/assets/css/theme.css\" rel=\"stylesheet\" media=\"all\">

\t</head>
\t<body class=\"animsition\">

\t\t<div class=\"page-wrapper\">
\t\t\t<div class=\"page-content--bge5\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"login-wrap\">
\t\t\t\t\t\t<div class=\"login-content\">
\t\t\t\t\t\t\t<h4 class=\"text-center\">Bienvenue sur</h4>
\t\t\t\t\t\t\t<div class=\"login-logo\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('homepage') }}\">
\t\t\t\t\t\t\t\t\t<img src=\"/images/logo.png\" alt=\"Rendez vous\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t\t<p class=\"mb-4\">Bonjour {{ app.user.firstName }}</p>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('dashboard') }}\" class=\"au-btn au-btn--green m-b-20\" type=\"submit\">Dashboard</a>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('user_logout') }}\" class=\"au-btn au-btn--green m-b-20\" type=\"submit\">Se deconnecter</a>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<a href=\"{{ path('user_login') }}\" class=\"au-btn au-btn--green m-b-20\" type=\"submit\">Se connecter</a>
\t\t\t\t\t\t\t\t<a href=\"{{ path('registration') }}\" class=\"au-btn au-btn--green m-b-20\" type=\"submit\">S'inscrire</a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Jquery JS-->
\t\t<script src=\"https://code.jquery.com/jquery-3.3.1.js\"></script>

\t\t<script src=\"/assets/back-end/vendor/bootstrap-4.1/bootstrap.min.js\"></script>

\t\t<!-- sweet Alert -->
\t\t<script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>


\t</body>
</html>

", "home.html.twig", "/home/aosow/symfony/watson/templates/home.html.twig");
    }
}
