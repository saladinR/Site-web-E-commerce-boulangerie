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

/* about/index.html.twig */
class __TwigTemplate_9496c09c8712a8eb29bec3fe3b36df86a956a82ef2be276214833b43c88c5ca1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "about/index.html.twig", 1);
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

        echo "Hello AboutController!";
        
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

        echo "\t
 ";
        // line 6
        echo twig_include($this->env, $context, "partials/Title.html.twig", ["name" => "About "]);
        echo "

<!-- Title page -->
\t<section class=\"bg-img1 txt-center p-lr-15 p-tb-92\" style=\"background-image: url('assets/images/bag-2.jpg');\">
\t\t<h2 class=\"ltext-105 cl0 txt-center\">
\t\t\tAbout
\t\t</h2>
\t</section>\t


\t<!-- Content page -->
\t<section class=\"bg0 p-t-75 p-b-120\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row p-b-148\">
\t\t\t\t<div class=\"col-md-7 col-lg-8\">
\t\t\t\t\t<div class=\"p-t-7 p-r-85 p-r-15-lg p-r-0-md\">
\t\t\t\t\t\t<h3 class=\"mtext-111 cl2 p-b-16\">
\t\t\t\t\t\t\tOur Story
\t\t\t\t\t\t</h3>

\t\t\t\t\t\t<p class=\"stext-113 cl6 p-b-26\">
\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consequat consequat enim, non auctor massa ultrices non. Morbi sed odio massa. Quisque at vehicula tellus, sed tincidunt augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas varius egestas diam, eu sodales metus scelerisque congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas gravida justo eu arcu egestas convallis. Nullam eu erat bibendum, tempus ipsum eget, dictum enim. Donec non neque ut enim dapibus tincidunt vitae nec augue. Suspendisse potenti. Proin ut est diam. Donec condimentum euismod tortor, eget facilisis diam faucibus et. Morbi a tempor elit.
\t\t\t\t\t\t</p>

\t\t\t\t\t\t<p class=\"stext-113 cl6 p-b-26\">
\t\t\t\t\t\t\tDonec gravida lorem elit, quis condimentum ex semper sit amet. Fusce eget ligula magna. Aliquam aliquam imperdiet sodales. Ut fringilla turpis in vehicula vehicula. Pellentesque congue ac orci ut gravida. Aliquam erat volutpat. Donec iaculis lectus a arcu facilisis, eu sodales lectus sagittis. Etiam pellentesque, magna vel dictum rutrum, neque justo eleifend elit, vel tincidunt erat arcu ut sem. Sed rutrum, turpis ut commodo efficitur, quam velit convallis ipsum, et maximus enim ligula ac ligula. 
\t\t\t\t\t\t</p>

\t\t\t\t\t\t<p class=\"stext-113 cl6 p-b-26\">
\t\t\t\t\t\t\tAny questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-11 col-md-5 col-lg-4 m-lr-auto\">
\t\t\t\t\t<div class=\"how-bor1 \">
\t\t\t\t\t\t<div class=\"hov-img0\">
\t\t\t\t\t\t\t<img src=\"assets/images/bag-2.jpg\" alt=\"IMG\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"order-md-2 col-md-7 col-lg-8 p-b-30\">
\t\t\t\t\t<div class=\"p-t-7 p-l-85 p-l-15-lg p-l-0-md\">
\t\t\t\t\t\t<h3 class=\"mtext-111 cl2 p-b-16\">
\t\t\t\t\t\t\tOur Mission
\t\t\t\t\t\t</h3>

\t\t\t\t\t\t<p class=\"stext-113 cl6 p-b-26\">
\t\t\t\t\t\t\tMauris non lacinia magna. Sed nec lobortis dolor. Vestibulum rhoncus dignissim risus, sed consectetur erat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam maximus mauris sit amet odio convallis, in pharetra magna gravida. Praesent sed nunc fermentum mi molestie tempor. Morbi vitae viverra odio. Pellentesque ac velit egestas, luctus arcu non, laoreet mauris. Sed in ipsum tempor, consequat odio in, porttitor ante. Ut mauris ligula, volutpat in sodales in, porta non odio. Pellentesque tempor urna vitae mi vestibulum, nec venenatis nulla lobortis. Proin at gravida ante. Mauris auctor purus at lacus maximus euismod. Pellentesque vulputate massa ut nisl hendrerit, eget elementum libero iaculis.
\t\t\t\t\t\t</p>

\t\t\t\t\t\t<div class=\"bor16 p-l-29 p-b-9 m-t-22\">
\t\t\t\t\t\t\t<p class=\"stext-114 cl6 p-r-40 p-b-11\">
\t\t\t\t\t\t\t\tCreativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn't really do it, they just saw something. It seemed obvious to them after a while.
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t<span class=\"stext-111 cl8\">
\t\t\t\t\t\t\t\t- Steve Job’s 
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30\">
\t\t\t\t\t<div class=\"how-bor2\">
\t\t\t\t\t\t<div class=\"hov-img0\">
\t\t\t\t\t\t\t<img src=\"assets/images/bag-2.jpg\" alt=\"IMG\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>\t
\t

\t
</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "about/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello AboutController!{% endblock %}

{% block body %}\t
 {{ include(\"partials/Title.html.twig\",{'name':'About '}) }}

<!-- Title page -->
\t<section class=\"bg-img1 txt-center p-lr-15 p-tb-92\" style=\"background-image: url('assets/images/bag-2.jpg');\">
\t\t<h2 class=\"ltext-105 cl0 txt-center\">
\t\t\tAbout
\t\t</h2>
\t</section>\t


\t<!-- Content page -->
\t<section class=\"bg0 p-t-75 p-b-120\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row p-b-148\">
\t\t\t\t<div class=\"col-md-7 col-lg-8\">
\t\t\t\t\t<div class=\"p-t-7 p-r-85 p-r-15-lg p-r-0-md\">
\t\t\t\t\t\t<h3 class=\"mtext-111 cl2 p-b-16\">
\t\t\t\t\t\t\tOur Story
\t\t\t\t\t\t</h3>

\t\t\t\t\t\t<p class=\"stext-113 cl6 p-b-26\">
\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consequat consequat enim, non auctor massa ultrices non. Morbi sed odio massa. Quisque at vehicula tellus, sed tincidunt augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas varius egestas diam, eu sodales metus scelerisque congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas gravida justo eu arcu egestas convallis. Nullam eu erat bibendum, tempus ipsum eget, dictum enim. Donec non neque ut enim dapibus tincidunt vitae nec augue. Suspendisse potenti. Proin ut est diam. Donec condimentum euismod tortor, eget facilisis diam faucibus et. Morbi a tempor elit.
\t\t\t\t\t\t</p>

\t\t\t\t\t\t<p class=\"stext-113 cl6 p-b-26\">
\t\t\t\t\t\t\tDonec gravida lorem elit, quis condimentum ex semper sit amet. Fusce eget ligula magna. Aliquam aliquam imperdiet sodales. Ut fringilla turpis in vehicula vehicula. Pellentesque congue ac orci ut gravida. Aliquam erat volutpat. Donec iaculis lectus a arcu facilisis, eu sodales lectus sagittis. Etiam pellentesque, magna vel dictum rutrum, neque justo eleifend elit, vel tincidunt erat arcu ut sem. Sed rutrum, turpis ut commodo efficitur, quam velit convallis ipsum, et maximus enim ligula ac ligula. 
\t\t\t\t\t\t</p>

\t\t\t\t\t\t<p class=\"stext-113 cl6 p-b-26\">
\t\t\t\t\t\t\tAny questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-11 col-md-5 col-lg-4 m-lr-auto\">
\t\t\t\t\t<div class=\"how-bor1 \">
\t\t\t\t\t\t<div class=\"hov-img0\">
\t\t\t\t\t\t\t<img src=\"assets/images/bag-2.jpg\" alt=\"IMG\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"order-md-2 col-md-7 col-lg-8 p-b-30\">
\t\t\t\t\t<div class=\"p-t-7 p-l-85 p-l-15-lg p-l-0-md\">
\t\t\t\t\t\t<h3 class=\"mtext-111 cl2 p-b-16\">
\t\t\t\t\t\t\tOur Mission
\t\t\t\t\t\t</h3>

\t\t\t\t\t\t<p class=\"stext-113 cl6 p-b-26\">
\t\t\t\t\t\t\tMauris non lacinia magna. Sed nec lobortis dolor. Vestibulum rhoncus dignissim risus, sed consectetur erat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam maximus mauris sit amet odio convallis, in pharetra magna gravida. Praesent sed nunc fermentum mi molestie tempor. Morbi vitae viverra odio. Pellentesque ac velit egestas, luctus arcu non, laoreet mauris. Sed in ipsum tempor, consequat odio in, porttitor ante. Ut mauris ligula, volutpat in sodales in, porta non odio. Pellentesque tempor urna vitae mi vestibulum, nec venenatis nulla lobortis. Proin at gravida ante. Mauris auctor purus at lacus maximus euismod. Pellentesque vulputate massa ut nisl hendrerit, eget elementum libero iaculis.
\t\t\t\t\t\t</p>

\t\t\t\t\t\t<div class=\"bor16 p-l-29 p-b-9 m-t-22\">
\t\t\t\t\t\t\t<p class=\"stext-114 cl6 p-r-40 p-b-11\">
\t\t\t\t\t\t\t\tCreativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn't really do it, they just saw something. It seemed obvious to them after a while.
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t<span class=\"stext-111 cl8\">
\t\t\t\t\t\t\t\t- Steve Job’s 
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30\">
\t\t\t\t\t<div class=\"how-bor2\">
\t\t\t\t\t\t<div class=\"hov-img0\">
\t\t\t\t\t\t\t<img src=\"assets/images/bag-2.jpg\" alt=\"IMG\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>\t
\t

\t
</body>
{% endblock %}
", "about/index.html.twig", "C:\\wamp64\\www\\Eco-ble\\templates\\about\\index.html.twig");
    }
}
