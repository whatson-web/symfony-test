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

/* user/login.html.twig */
class __TwigTemplate_faf23f2ecaeb1ecc993ebcb4f588b8d84b6c9e226572e16d0076265780607386 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

\t\t<title>Connexion - Rendez vous</title>

\t\t<link rel=\"shortcut icon\" href=\"/images/favicon.png\">

        <!-- Fontfaces CSS-->
        <link href=\"/assets/css/font-face.css\" rel=\"stylesheet\" media=\"all\">
        <link href=\"/assets/vendor/font-awesome-4.7/css/font-awesome.min.css\" rel=\"stylesheet\" media=\"all\">
        <link href=\"/assets/vendor/font-awesome-5/css/fontawesome-all.min.css\" rel=\"stylesheet\" media=\"all\">
        <link href=\"/assets/vendor/mdi-font/css/material-design-iconic-font.min.css\" rel=\"stylesheet\" media=\"all\">

        <!-- Bootstrap CSS-->
        <link href=\"/assets/vendor/bootstrap-4.1/bootstrap.min.css\" rel=\"stylesheet\" media=\"all\">

        <link href=\"/assets/vendor/perfect-scrollbar/perfect-scrollbar.css\" rel=\"stylesheet\" media=\"all\">

        <!-- Main CSS-->
        <link href=\"/assets/css/theme.css\" rel=\"stylesheet\" media=\"all\">

\t</head>
\t<body class=\"animsition\">

\t\t<div class=\"page-wrapper\">
\t\t\t<div class=\"page-content--bge5\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"login-wrap\">
\t\t\t\t\t\t<div class=\"login-content\">
\t\t\t\t\t\t\t<div class=\"login-logo\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">
\t\t\t\t\t\t\t\t\t<img src=\"/images/logo.png\" alt=\"Rendez vous\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 38
        if (((isset($context["hasError"]) || array_key_exists("hasError", $context)) && (isset($context["hasError"]) || array_key_exists("hasError", $context) ? $context["hasError"] : (function () { throw new RuntimeError('Variable "hasError" does not exist.', 38, $this->source); })()))) {
            // line 39
            echo "\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\t\t\t\t\t<h4 class=\"alert-heading\">Erreur de connexion!</h4>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tLa connexion a échoué, le nom d'utilisateur ou le mot de 
\t\t\t\t\t\t\t\t\t\tpasse n'est incorect.
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\tVeillez réessayer
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 49
        echo "\t\t\t\t\t\t\t<div class=\"login-form\">
\t\t\t\t\t\t\t\t<form action=\"\" method=\"post\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label>Nom d'utilisateur</label>
\t\t\t\t\t\t\t\t\t\t<input class=\"au-input au-input--full\" type=\"text\" name=\"_username\" value=\"\" placeholder=\"Votre pseudo ou numéro de téléphone\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label>Mot de passe</label>
\t\t\t\t\t\t\t\t\t\t<input class=\"au-input au-input--full\" type=\"password\" name=\"_password\" placeholder=\"Votre mot de passe\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button class=\"au-btn au-btn--block au-btn--green m-b-20\" type=\"submit\">Connexion</button>
\t\t\t\t\t\t\t\t</form>
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

\t\t

\t\t";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "flashes", [], "any", false, false, false, 78));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 79
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 80
                echo "
\t\t\t\t<script>
\t\t\t\t\tswal(\"\", \"";
                // line 82
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
            // line 86
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "\t
\t</body>
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 87,  155 => 86,  143 => 82,  139 => 80,  134 => 79,  130 => 78,  99 => 49,  87 => 39,  85 => 38,  78 => 34,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

\t\t<title>Connexion - Rendez vous</title>

\t\t<link rel=\"shortcut icon\" href=\"/images/favicon.png\">

        <!-- Fontfaces CSS-->
        <link href=\"/assets/css/font-face.css\" rel=\"stylesheet\" media=\"all\">
        <link href=\"/assets/vendor/font-awesome-4.7/css/font-awesome.min.css\" rel=\"stylesheet\" media=\"all\">
        <link href=\"/assets/vendor/font-awesome-5/css/fontawesome-all.min.css\" rel=\"stylesheet\" media=\"all\">
        <link href=\"/assets/vendor/mdi-font/css/material-design-iconic-font.min.css\" rel=\"stylesheet\" media=\"all\">

        <!-- Bootstrap CSS-->
        <link href=\"/assets/vendor/bootstrap-4.1/bootstrap.min.css\" rel=\"stylesheet\" media=\"all\">

        <link href=\"/assets/vendor/perfect-scrollbar/perfect-scrollbar.css\" rel=\"stylesheet\" media=\"all\">

        <!-- Main CSS-->
        <link href=\"/assets/css/theme.css\" rel=\"stylesheet\" media=\"all\">

\t</head>
\t<body class=\"animsition\">

\t\t<div class=\"page-wrapper\">
\t\t\t<div class=\"page-content--bge5\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"login-wrap\">
\t\t\t\t\t\t<div class=\"login-content\">
\t\t\t\t\t\t\t<div class=\"login-logo\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('homepage') }}\">
\t\t\t\t\t\t\t\t\t<img src=\"/images/logo.png\" alt=\"Rendez vous\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% if hasError is defined and hasError %}
\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\t\t\t\t\t<h4 class=\"alert-heading\">Erreur de connexion!</h4>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tLa connexion a échoué, le nom d'utilisateur ou le mot de 
\t\t\t\t\t\t\t\t\t\tpasse n'est incorect.
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\tVeillez réessayer
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<div class=\"login-form\">
\t\t\t\t\t\t\t\t<form action=\"\" method=\"post\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label>Nom d'utilisateur</label>
\t\t\t\t\t\t\t\t\t\t<input class=\"au-input au-input--full\" type=\"text\" name=\"_username\" value=\"\" placeholder=\"Votre pseudo ou numéro de téléphone\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label>Mot de passe</label>
\t\t\t\t\t\t\t\t\t\t<input class=\"au-input au-input--full\" type=\"password\" name=\"_password\" placeholder=\"Votre mot de passe\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button class=\"au-btn au-btn--block au-btn--green m-b-20\" type=\"submit\">Connexion</button>
\t\t\t\t\t\t\t\t</form>
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

\t\t

\t\t{% for label, messages in app.flashes %}
\t\t\t{% for message in messages %}

\t\t\t\t<script>
\t\t\t\t\tswal(\"\", \"{{ message | raw }}\", \"{{ label }}\");
\t\t\t\t</script>

\t\t\t{% endfor %}
\t\t{% endfor %}
\t
\t</body>
</html>

", "user/login.html.twig", "/home/aosow/symfony/watson/templates/user/login.html.twig");
    }
}
