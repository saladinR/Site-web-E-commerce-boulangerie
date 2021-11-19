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

/* home/index.html.twig */
class __TwigTemplate_2ad01b8318dd6663d0fd833364af8ac5d79c553752c2d3bc9717cba6c84acc3e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "Home";
        
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

        // line 6
        echo "<div class=\"banner_section slide_medium shop_banner_slider staggered-animation-wrap\">
    <div id=\"carouselExampleControls\" class=\"carousel slide carousel-fade light_arrow\" data-ride=\"carousel\">
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active background_bg\" data-img-src=\"/assets/images/bag-2.jpg\">
                <div class=\"banner_slide_content\">
                    <div class=\"container\"><!-- STRART CONTAINER -->
                        <div class=\"row\">
                            <div class=\"col-lg-7 col-9\">
                                <div class=\"banner_content overflow-hidden\">
                                \t<h5 class=\"mb-3 staggered-animation font-weight-light\" data-animation=\"slideInLeft\" data-animation-delay=\"0.5s\">  </h5>
                                    <h2 class=\"staggered-animation\" data-animation=\"slideInLeft\" data-animation-delay=\"1s\" style=\"color:white\"> Chaque jour, s'engager par amour du pain </h2>
                                    <a class=\"btn btn-fill-out rounded-0 staggered-animation text-uppercase\" href=\"\" data-animation=\"slideInLeft\" style=\"border-radius: 50px !important ;\" data-animation-delay=\"1.5s\">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- END CONTAINER-->
                </div>
            </div>
        </div>
        ";
        // line 27
        echo "    </div>
</div>

<div class=\"container\">
<div class=\"section small_pt pb_70\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-md-6\">
            \t<div class=\"heading_s1 text-center\">
                \t<h2>Exclusive Products</h2>
                </div>
            </div>
\t\t</div>
        <div class=\"row\">
        \t<div class=\"col-12\">
            \t<div class=\"tab-style1\">
                    <ul class=\"nav nav-tabs justify-content-center\" role=\"tablist\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" id=\"arrival-tab\" data-toggle=\"tab\" href=\"#arrival\" role=\"tab\" aria-controls=\"arrival\" aria-selected=\"true\">New Arrival</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"sellers-tab\" data-toggle=\"tab\" href=\"#sellers\" role=\"tab\" aria-controls=\"sellers\" aria-selected=\"false\">Best Sellers</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"featured-tab\" data-toggle=\"tab\" href=\"#featured\" role=\"tab\" aria-controls=\"featured\" aria-selected=\"false\">Featured</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"specialoffre-tab\" data-toggle=\"tab\" href=\"#specialoffre\" role=\"tab\" aria-controls=\"specialoffre\" aria-selected=\"false\">Special Offre</a>
                        </li>

                    </ul>
                </div>
<section id=\"sellers\" class=\"feature-area pt-120 mt-5\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
                ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productNewArrival"]) || array_key_exists("productNewArrival", $context) ? $context["productNewArrival"] : (function () { throw new RuntimeError('Variable "productNewArrival" does not exist.', 62, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 63
            echo "               
                    <div class=\"col-xl-3 col-lg-3 col-md-4\" class=\"tab-pane fade\" id=\"sellers\" role=\"tabpanel\" >
                        <div class=\"single-feature item-";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 65), "html", null, true);
            echo " wow fadeInUp\" data-wow-delay=\".2s\">
                            <div class=\"feature-icon icon-style gradient-";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 66), "html", null, true);
            echo "\">
                                <i class=\"lni lni-protection\"></i>
                            </div>
                            <div class=\"feature-content\" >
                                ";
            // line 70
            echo twig_include($this->env, $context, "partials/Product.html.twig", ["product" => $context["product"]]);
            echo "
                            </div>
                        </div>
                    </div>
                 
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "\t\t\t</div>
\t\t</div>
</section>
                ";
        // line 120
        echo "            </div>
        </div>
    </div>
</div>

    
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 120,  198 => 76,  178 => 70,  171 => 66,  167 => 65,  163 => 63,  146 => 62,  109 => 27,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home{% endblock %}

{% block body %}
<div class=\"banner_section slide_medium shop_banner_slider staggered-animation-wrap\">
    <div id=\"carouselExampleControls\" class=\"carousel slide carousel-fade light_arrow\" data-ride=\"carousel\">
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active background_bg\" data-img-src=\"/assets/images/bag-2.jpg\">
                <div class=\"banner_slide_content\">
                    <div class=\"container\"><!-- STRART CONTAINER -->
                        <div class=\"row\">
                            <div class=\"col-lg-7 col-9\">
                                <div class=\"banner_content overflow-hidden\">
                                \t<h5 class=\"mb-3 staggered-animation font-weight-light\" data-animation=\"slideInLeft\" data-animation-delay=\"0.5s\">  </h5>
                                    <h2 class=\"staggered-animation\" data-animation=\"slideInLeft\" data-animation-delay=\"1s\" style=\"color:white\"> Chaque jour, s'engager par amour du pain </h2>
                                    <a class=\"btn btn-fill-out rounded-0 staggered-animation text-uppercase\" href=\"\" data-animation=\"slideInLeft\" style=\"border-radius: 50px !important ;\" data-animation-delay=\"1.5s\">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- END CONTAINER-->
                </div>
            </div>
        </div>
        {# <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\" style=\"border-radius: 50px;\" ><i class=\"ion-chevron-left\"></i></a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\" style=\"border-radius: 50px;\"><i class=\"ion-chevron-right\"></i></a> #}
    </div>
</div>

<div class=\"container\">
<div class=\"section small_pt pb_70\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-md-6\">
            \t<div class=\"heading_s1 text-center\">
                \t<h2>Exclusive Products</h2>
                </div>
            </div>
\t\t</div>
        <div class=\"row\">
        \t<div class=\"col-12\">
            \t<div class=\"tab-style1\">
                    <ul class=\"nav nav-tabs justify-content-center\" role=\"tablist\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" id=\"arrival-tab\" data-toggle=\"tab\" href=\"#arrival\" role=\"tab\" aria-controls=\"arrival\" aria-selected=\"true\">New Arrival</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"sellers-tab\" data-toggle=\"tab\" href=\"#sellers\" role=\"tab\" aria-controls=\"sellers\" aria-selected=\"false\">Best Sellers</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"featured-tab\" data-toggle=\"tab\" href=\"#featured\" role=\"tab\" aria-controls=\"featured\" aria-selected=\"false\">Featured</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" id=\"specialoffre-tab\" data-toggle=\"tab\" href=\"#specialoffre\" role=\"tab\" aria-controls=\"specialoffre\" aria-selected=\"false\">Special Offre</a>
                        </li>

                    </ul>
                </div>
<section id=\"sellers\" class=\"feature-area pt-120 mt-5\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
                {% for product in productNewArrival %}
               
                    <div class=\"col-xl-3 col-lg-3 col-md-4\" class=\"tab-pane fade\" id=\"sellers\" role=\"tabpanel\" >
                        <div class=\"single-feature item-{{ loop.index }} wow fadeInUp\" data-wow-delay=\".2s\">
                            <div class=\"feature-icon icon-style gradient-{{ loop.index }}\">
                                <i class=\"lni lni-protection\"></i>
                            </div>
                            <div class=\"feature-content\" >
                                {{ include(\"partials/Product.html.twig\",{'product': product}) }}
                            </div>
                        </div>
                    </div>
                 
                {% endfor %}
\t\t\t</div>
\t\t</div>
</section>
                {# <div class=\"tab-content\">
                \t<div aria-labelledby=\"arrival-tab\">
                        
                              {% for product in productNewArrival %}
                                 <div class=\"row\">
                                     <div class=\"col-lg-3\">
                                         <div class=\"card-body\">
                                         {{ include(\"partials/Product.html.twig\",{'product': product}) }} 
                                         </div>
                                    </div> 
                                   
                              {% endfor %} 

                    </div>
                    <div class=\"tab-pane fade\" id=\"sellers\" role=\"tabpanel\" aria-labelledby=\"sellers-tab\">
                      
                             {% for product in productBestSeller %}
                                  {{ include(\"partials/Product.html.twig\",{'product': product}) }}  
                              {% endfor %} 

                      
                    </div>
                    <div class=\"tab-pane fade\" id=\"specialoffre\" role=\"tabpanel\" aria-labelledby=\"specialoffer-tab\">
                        
                             {% for product in productSpecialOffer %}
                                  {{ include(\"partials/Product.html.twig\",{'product': product}) }}  
                              {% endfor %} 

                        
                    </div>
                    <div class=\"tab-pane fade\" id=\"featured\" role=\"tabpanel\" aria-labelledby=\"featured-tab\">
                   
                             {% for product in productFeatured %}
                                  {{ include(\"partials/Product.html.twig\",{'product': product}) }}  
                              {% endfor %} 

                      
                    </div>
                      

                </div> #}
            </div>
        </div>
    </div>
</div>

    
</div>
{% endblock %}
", "home/index.html.twig", "/Applications/MAMP/htdocs/symfony boulangerie/Eco-ble/templates/home/index.html.twig");
    }
}
