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

/* user/registration.html.twig */
class __TwigTemplate_9d70f2e723e0bfd273f7c3ed2652996a681e9052835ab22222c451225422b729 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/registration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/registration.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

\t\t<title>Inscription - Rendez vous</title>

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
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<img src=\"/images/logo.png\" alt=\"Rendez vous\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"login-form\">
\t\t\t\t\t\t\t\t";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "firstName", [], "any", false, false, false, 42), 'row');
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "lastName", [], "any", false, false, false, 43), 'row');
        echo "
                                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "username", [], "any", false, false, false, 44), 'row');
        echo "
                                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "pass", [], "any", false, false, false, 45), 'row');
        echo "
                                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "passConfirm", [], "any", false, false, false, 46), 'row');
        echo "
\t\t\t\t\t\t\t\t\t<button class=\"au-btn au-btn--block au-btn--green m-b-20\" type=\"submit\">S'inscrire</button>
\t\t\t\t\t\t\t\t";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t<!-- Jquery JS-->
\t\t<script src=\"https://code.jquery.com/jquery-3.3.1.js\"></script>

\t\t<script src=\"/assets/back-end/vendor/bootstrap-4.1/bootstrap.min.js\"></script>
\t
\t</body>
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 48,  105 => 46,  101 => 45,  97 => 44,  93 => 43,  89 => 42,  85 => 41,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

\t\t<title>Inscription - Rendez vous</title>

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
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<img src=\"/images/logo.png\" alt=\"Rendez vous\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"login-form\">
\t\t\t\t\t\t\t\t{{ form_start(form) }}
\t\t\t\t\t\t\t\t\t{{ form_row(form.firstName) }}
\t\t\t\t\t\t\t\t\t{{ form_row(form.lastName) }}
                                    {{ form_row(form.username) }}
                                    {{ form_row(form.pass) }}
                                    {{ form_row(form.passConfirm) }}
\t\t\t\t\t\t\t\t\t<button class=\"au-btn au-btn--block au-btn--green m-b-20\" type=\"submit\">S'inscrire</button>
\t\t\t\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t<!-- Jquery JS-->
\t\t<script src=\"https://code.jquery.com/jquery-3.3.1.js\"></script>

\t\t<script src=\"/assets/back-end/vendor/bootstrap-4.1/bootstrap.min.js\"></script>
\t
\t</body>
</html>

", "user/registration.html.twig", "/home/aosow/symfony/watson/templates/user/registration.html.twig");
    }
}
