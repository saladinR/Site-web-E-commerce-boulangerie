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
class __TwigTemplate_a4b0eb984f5865f4c7be559d9092308fc4aa3038563498d3e5697929fa429a4f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
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
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"BLE-D'OR\" name=\"author\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"Exclusively for all! Take advantage of up to -50% on these offers during our smart days. Shop smart with discounts on electronics, phones and home goods. Up to -50% Buyer Protection. Free Shipping. Summer promo. Great Value. A multitude of sellers.\">
        <meta name=\"keywords\" content=\"\">

        <title>BLE D'OR|WELCOME</title>
        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"/assets/images/favicon2.png\">

        <link rel=\"stylesheet\" href=\"/assets/style.css\">
        
        ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "
    </head>
    <body>
        ";
        // line 20
        $this->loadTemplate("partials/Header.html.twig", "base.html.twig", 20)->display($context);
        // line 21
        echo "
        ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "
        ";
        // line 24
        $this->loadTemplate("partials/Footer.html.twig", "base.html.twig", 24)->display($context);
        // line 25
        echo "
        ";
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "        <script src=\"/assets/js/jquery-1.12.4.min.js\"></script> 
        <script src=\"/assets/js/popper.min.js\"></script>
        <script src=\"/assets/bootstrap/js/bootstrap.min.js\"></script>
        <script src=\"/assets/owlcarousel/js/owl.carousel.min.js\"></script>
        <script src=\"/assets/js/magnific-popup.min.js\"></script>
        <script src=\"/assets/js/waypoints.min.js\"></script> 
        <script src=\"/assets/js/parallax.js\"></script> 
        <script src=\"/assets/js/jquery.countdown.min.js\"></script> 
        <script src=\"/assets/js/imagesloaded.pkgd.min.js\"></script>
        <script src=\"/assets/js/isotope.min.js\"></script>
        <script src=\"/assets/js/jquery.dd.min.js\"></script>
        <script src=\"/assets/js/slick.min.js\"></script>
        <script src=\"/assets/js/jquery.elevatezoom.js\"></script>
        <script src=\"/assets/js/scripts.js\"></script>
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
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

    // line 26
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
        return array (  150 => 26,  132 => 22,  113 => 16,  87 => 27,  85 => 26,  82 => 25,  80 => 24,  77 => 23,  75 => 22,  72 => 21,  70 => 20,  65 => 17,  63 => 16,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"BLE-D'OR\" name=\"author\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"Exclusively for all! Take advantage of up to -50% on these offers during our smart days. Shop smart with discounts on electronics, phones and home goods. Up to -50% Buyer Protection. Free Shipping. Summer promo. Great Value. A multitude of sellers.\">
        <meta name=\"keywords\" content=\"\">

        <title>BLE D'OR|WELCOME</title>
        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"/assets/images/favicon2.png\">

        <link rel=\"stylesheet\" href=\"/assets/style.css\">
        
        {% block stylesheets %} {% endblock %}

    </head>
    <body>
        {% include \"partials/Header.html.twig\" %}

        {% block body %}{% endblock %}

        {% include \"partials/Footer.html.twig\" %}

        {% block javascripts %}{% endblock %}
        <script src=\"/assets/js/jquery-1.12.4.min.js\"></script> 
        <script src=\"/assets/js/popper.min.js\"></script>
        <script src=\"/assets/bootstrap/js/bootstrap.min.js\"></script>
        <script src=\"/assets/owlcarousel/js/owl.carousel.min.js\"></script>
        <script src=\"/assets/js/magnific-popup.min.js\"></script>
        <script src=\"/assets/js/waypoints.min.js\"></script> 
        <script src=\"/assets/js/parallax.js\"></script> 
        <script src=\"/assets/js/jquery.countdown.min.js\"></script> 
        <script src=\"/assets/js/imagesloaded.pkgd.min.js\"></script>
        <script src=\"/assets/js/isotope.min.js\"></script>
        <script src=\"/assets/js/jquery.dd.min.js\"></script>
        <script src=\"/assets/js/slick.min.js\"></script>
        <script src=\"/assets/js/jquery.elevatezoom.js\"></script>
        <script src=\"/assets/js/scripts.js\"></script>
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\Eco-ble\\templates\\base.html.twig");
    }
}
