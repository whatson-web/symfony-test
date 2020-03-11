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

/* _partials/menu.html.twig */
class __TwigTemplate_79948cdccf5904a9ba2e07daee8f3343ad9d17d20e61432f7507c3362d9ec8ef extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/menu.html.twig"));

        // line 1
        echo "<!-- HEADER MOBILE-->
<header class=\"header-mobile d-block d-lg-none\">
\t<div class=\"header-mobile__bar\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"header-mobile-inner\">
\t\t\t\t<a class=\"logo\" href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\">
\t\t\t\t\t<img src=\"/images/logo.png\" alt=\"Rendez vous\"/>
\t\t\t\t</a>
\t\t\t\t<button class=\"hamburger hamburger--slider\" type=\"button\">
\t\t\t\t\t<span class=\"hamburger-box\">
\t\t\t\t\t\t<span class=\"hamburger-inner\"></span>
\t\t\t\t\t</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>
\t</div>
\t<nav class=\"navbar-mobile\">
\t\t<div class=\"container-fluid\">
\t\t\t<ul class=\"navbar-mobile__list list-unstyled\">
\t\t\t\t<li class=\"has-sub\">
\t\t\t\t\t<a class=\"js-arrow\" href=\"#\">
\t\t\t\t\t\t<i class=\"fas fa-user\"></i>Guides</a>
\t\t\t\t\t<ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
\t\t\t\t\t\t<li ";
        // line 24
        if (((isset($context["menu"]) || array_key_exists("menu", $context)) && 0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 24, $this->source); })()), "customers"))) {
            echo "class=\"active\"";
        }
        echo ">
\t\t\t\t\t\t\t<a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customers");
        echo "\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-users\"></i>Clients</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li ";
        // line 28
        if (((isset($context["menu"]) || array_key_exists("menu", $context)) && 0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 28, $this->source); })()), "places"))) {
            echo "class=\"active\"";
        }
        echo ">
\t\t\t\t\t\t\t<a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("places");
        echo "\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt\"></i>Lieux</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li ";
        // line 32
        if (((isset($context["menu"]) || array_key_exists("menu", $context)) && 0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 32, $this->source); })()), "appointments"))) {
            echo "class=\"active\"";
        }
        echo ">
\t\t\t\t\t\t\t<a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("appointments");
        echo "\">
\t\t\t\t\t\t\t\t<i class=\"far fa-calendar-check\"></i>Rendez vous</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_logout");
        echo "\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-sign-out-alt\"></i>Déconnexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</nav>
</header>
<!-- END HEADER MOBILE-->


<!-- MENU SIDEBAR-->
<aside class=\"menu-sidebar d-none d-lg-block\">
\t<div class=\"logo\">
\t\t<a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">
\t\t\t<img src=\"/images/logo.png\" alt=\"Rendez vous\"/>
\t\t</a>
\t</div>
\t<div class=\"menu-sidebar__content js-scrollbar1\">
\t\t<nav class=\"navbar-sidebar\">
\t\t\t<ul class=\"list-unstyled navbar__list\">
\t\t\t\t<li ";
        // line 59
        if (((isset($context["menu"]) || array_key_exists("menu", $context)) && 0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 59, $this->source); })()), "customers"))) {
            echo "class=\"active\"";
        }
        echo ">
\t\t\t\t\t<a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customers");
        echo "\">
\t\t\t\t\t\t<i class=\"fas fa-users\"></i>Clients</a>
\t\t\t\t</li>
\t\t\t\t<li ";
        // line 63
        if (((isset($context["menu"]) || array_key_exists("menu", $context)) && 0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 63, $this->source); })()), "places"))) {
            echo "class=\"active\"";
        }
        echo ">
\t\t\t\t\t<a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("places");
        echo "\">
\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt\"></i>Lieux</a>
\t\t\t\t</li>
                <li ";
        // line 67
        if (((isset($context["menu"]) || array_key_exists("menu", $context)) && 0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 67, $this->source); })()), "appointements"))) {
            echo "class=\"active\"";
        }
        echo ">
\t\t\t\t\t<a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("appointments");
        echo "\">
\t\t\t\t\t\t<i class=\"far fa-calendar-check\"></i>Rendez vous</a>
\t\t\t\t</li>
                 <li>
\t\t\t\t\t<a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_logout");
        echo "\">
\t\t\t\t\t\t<i class=\"fas fa-sign-out-alt\"></i>Déconnexion</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</li>
\t</ul>
</nav></div></aside><!-- END MENU SIDEBAR-->

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "_partials/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 72,  166 => 68,  160 => 67,  154 => 64,  148 => 63,  142 => 60,  136 => 59,  126 => 52,  108 => 37,  101 => 33,  95 => 32,  89 => 29,  83 => 28,  77 => 25,  71 => 24,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- HEADER MOBILE-->
<header class=\"header-mobile d-block d-lg-none\">
\t<div class=\"header-mobile__bar\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"header-mobile-inner\">
\t\t\t\t<a class=\"logo\" href=\"{{ path('dashboard') }}\">
\t\t\t\t\t<img src=\"/images/logo.png\" alt=\"Rendez vous\"/>
\t\t\t\t</a>
\t\t\t\t<button class=\"hamburger hamburger--slider\" type=\"button\">
\t\t\t\t\t<span class=\"hamburger-box\">
\t\t\t\t\t\t<span class=\"hamburger-inner\"></span>
\t\t\t\t\t</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>
\t</div>
\t<nav class=\"navbar-mobile\">
\t\t<div class=\"container-fluid\">
\t\t\t<ul class=\"navbar-mobile__list list-unstyled\">
\t\t\t\t<li class=\"has-sub\">
\t\t\t\t\t<a class=\"js-arrow\" href=\"#\">
\t\t\t\t\t\t<i class=\"fas fa-user\"></i>Guides</a>
\t\t\t\t\t<ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
\t\t\t\t\t\t<li {% if menu is defined and menu == 'customers' %}class=\"active\"{% endif %}>
\t\t\t\t\t\t\t<a href=\"{{ path('customers') }}\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-users\"></i>Clients</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li {% if menu is defined and menu == 'places' %}class=\"active\"{% endif %}>
\t\t\t\t\t\t\t<a href=\"{{ path('places') }}\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt\"></i>Lieux</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li {% if menu is defined and menu == 'appointments' %}class=\"active\"{% endif %}>
\t\t\t\t\t\t\t<a href=\"{{ path('appointments') }}\">
\t\t\t\t\t\t\t\t<i class=\"far fa-calendar-check\"></i>Rendez vous</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{ path('user_logout') }}\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-sign-out-alt\"></i>Déconnexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</nav>
</header>
<!-- END HEADER MOBILE-->


<!-- MENU SIDEBAR-->
<aside class=\"menu-sidebar d-none d-lg-block\">
\t<div class=\"logo\">
\t\t<a href=\"{{ path('homepage') }}\">
\t\t\t<img src=\"/images/logo.png\" alt=\"Rendez vous\"/>
\t\t</a>
\t</div>
\t<div class=\"menu-sidebar__content js-scrollbar1\">
\t\t<nav class=\"navbar-sidebar\">
\t\t\t<ul class=\"list-unstyled navbar__list\">
\t\t\t\t<li {% if menu is defined and menu == 'customers' %}class=\"active\"{% endif %}>
\t\t\t\t\t<a href=\"{{ path('customers') }}\">
\t\t\t\t\t\t<i class=\"fas fa-users\"></i>Clients</a>
\t\t\t\t</li>
\t\t\t\t<li {% if menu is defined and menu == 'places' %}class=\"active\"{% endif %}>
\t\t\t\t\t<a href=\"{{ path('places') }}\">
\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt\"></i>Lieux</a>
\t\t\t\t</li>
                <li {% if menu is defined and menu == 'appointements' %}class=\"active\"{% endif %}>
\t\t\t\t\t<a href=\"{{ path('appointments') }}\">
\t\t\t\t\t\t<i class=\"far fa-calendar-check\"></i>Rendez vous</a>
\t\t\t\t</li>
                 <li>
\t\t\t\t\t<a href=\"{{ path('user_logout') }}\">
\t\t\t\t\t\t<i class=\"fas fa-sign-out-alt\"></i>Déconnexion</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</li>
\t</ul>
</nav></div></aside><!-- END MENU SIDEBAR-->

", "_partials/menu.html.twig", "/home/aosow/symfony/watson/templates/_partials/menu.html.twig");
    }
}
