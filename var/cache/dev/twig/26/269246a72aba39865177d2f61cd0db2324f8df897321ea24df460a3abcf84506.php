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

/* partials/Header.html.twig */
class __TwigTemplate_d4793178b8fe17a098abd1e54323bb093baf275375ddd38f3102817a7f78f503 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/Header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/Header.html.twig"));

        // line 1
        echo "<div class=\"preloader\">
    <div class=\"preloader-content\">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>

<header class=\"header_wrap fixed-top header_with_topbar\">
    <div class=\"top-header\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-6\">
                    <div class=\"d-flex align-items-center justify-content-center justify-content-md-start\">
                        <div class=\"lng_dropdown mr-2\">
                            
                        </div>
                        <div class=\"mr-3\">
                           
                        </div>
                        <ul class=\"contact_detail text-center text-lg-left\">
                            
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"text-center text-md-right\">
                           <ul class=\"header_list\">

                              ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30)) {
            // line 31
            echo "                              <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"><i class=\"ti-user\"></i>Déconnexion</span></a></li>
                              ";
        } else {
            // line 33
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"><i class=\"ti-user\"></i><span>Se connecter</span></a></li>
                            <li><a href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\"><i class=\"fas fa-sign-in-alt\"></i><span>S'inscrire</span></a></li>
                              ";
        }
        // line 36
        echo "                                  
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"bottom_header dark_skin main_menu_uppercase\">
        <div class=\"container\">
            <nav class=\"navbar navbar-expand-lg\"> 
                <a class=\"navbar-brand\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
                    <img class=\"logo_light\" src=\"/assets/images/LOGO.png\" alt=\"logo\" />
                    <img class=\"logo_dark\" src=\"/assets/images/LOGO.png\" alt=\"logo\"  />
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-expanded=\"false\"> 
                    <span class=\"ion-android-menu\"></span>
                </button>
                <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav\">
                        <li class=\"dropdown\">
                            <a  class=\"nav-link\" href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a>   
                        </li>
                 
                        ";
        // line 63
        echo "        
               
                        <li><a class=\"nav-link nav_item\" href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Nous contacter</a></li> 
                    </ul>
                </div>
                <ul class=\"navbar-nav attr-nav align-items-center\">
                    <li><a href=\"javascript:void(0);\" class=\"nav-link search_trigger\"><i class=\"linearicons-magnifier\"></i></a>
                        <div class=\"search_wrap\">
                            <span class=\"close-search\"><i class=\"ion-ios-close-empty\"></i></span>
                            <form>
                                <input type=\"text\" placeholder=\"Search\" class=\"form-control\" id=\"search_input\">
                                <button type=\"submit\" class=\"search_icon\"><i class=\"ion-ios-search-strong\"></i></button>
                            </form>
                        </div><div class=\"search_overlay\"></div>
                    </li>
                    <li class=\"dropdown cart_dropdown\"><a class=\"nav-link cart_trigger\" href=\"#\" data-toggle=\"dropdown\"><i class=\"linearicons-cart\"></i><span class=\"cart_count\">
                    ";
        // line 79
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "session", [], "any", false, false, false, 79), "get", [0 => "cart"], "method", false, false, false, 79)) {
            // line 80
            echo "                       ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "session", [], "any", false, false, false, 80), "get", [0 => "cartData"], "method", false, false, false, 80), "data", [], "any", false, false, false, 80), "quantity", [], "any", false, false, false, 80), "html", null, true);
            echo "
                    ";
        } else {
            // line 82
            echo "                        0
                    ";
        }
        // line 84
        echo "                    
                    </span></a>
                        <div class=\"cart_box dropdown-menu dropdown-menu-right\">
                            <ul class=\"cart_list\">
                            ";
        // line 88
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "session", [], "any", false, false, false, 88), "get", [0 => "cart"], "method", false, false, false, 88)) {
            // line 89
            echo "                                             
                                                ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "session", [], "any", false, false, false, 90), "get", [0 => "cartData"], "method", false, false, false, 90), "products", [], "any", false, false, false, 90));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 91
                echo "                                                  
                                                    <li>
                                                        <a href=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_delete_all", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 93), "id", [], "any", false, false, false, 93)]), "html", null, true);
                echo "\" class=\"item_remove\"><i class=\"ion-close\"></i></a>
                                                        <a href=\"#\"><img src=\"/assets/uploads/product/";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 94), "image", [], "any", false, false, false, 94), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 94), "name", [], "any", false, false, false, 94), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 94), "name", [], "any", false, false, false, 94), "html", null, true);
                echo "</a>
                                                        <span class=\"cart_quantity\"> ";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "quantity", [], "any", false, false, false, 95), "html", null, true);
                echo " <span class=\"cart_amount\"> <span class=\"price_symbole\">\$</span></span>";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 95), "price", [], "any", false, false, false, 95) / 100), "html", null, true);
                echo "</span>
                                                    </li>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "                            
                            </ul>
                            <div class=\"cart_footer\">
                                        <p class=\"cart_total\"><strong>Subtotal HT:</strong> <span class=\"cart_price\"> <span class=\"price_symbole\">\$</span></span>";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "session", [], "any", false, false, false, 101), "get", [0 => "cartData"], "method", false, false, false, 101), "data", [], "any", false, false, false, 101), "subTotalTTC", [], "any", false, false, false, 101), "html", null, true);
            echo "</p>
                                        <p class=\"cart_buttons\"><a href=\"";
            // line 102
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
            echo "\" class=\"btn btn-fill-line rounded-0 view-cart\">View Cart</a><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout");
            echo "\" class=\"btn btn-fill-out rounded-0 checkout\">Checkout</a></p>
                            </div>

                            ";
        } else {
            // line 106
            echo "                                <li> Votre panier est vide  </li>
                                </ul>
                            ";
        }
        // line 109
        echo "                            

                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/Header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 109,  216 => 106,  207 => 102,  203 => 101,  198 => 98,  187 => 95,  179 => 94,  175 => 93,  171 => 91,  167 => 90,  164 => 89,  162 => 88,  156 => 84,  152 => 82,  146 => 80,  144 => 79,  127 => 65,  123 => 63,  117 => 56,  104 => 46,  92 => 36,  87 => 34,  82 => 33,  76 => 31,  74 => 30,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"preloader\">
    <div class=\"preloader-content\">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>

<header class=\"header_wrap fixed-top header_with_topbar\">
    <div class=\"top-header\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-6\">
                    <div class=\"d-flex align-items-center justify-content-center justify-content-md-start\">
                        <div class=\"lng_dropdown mr-2\">
                            
                        </div>
                        <div class=\"mr-3\">
                           
                        </div>
                        <ul class=\"contact_detail text-center text-lg-left\">
                            
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"text-center text-md-right\">
                           <ul class=\"header_list\">

                              {% if app.user %}
                              <li><a href=\"{{path('app_logout')}}\"><i class=\"ti-user\"></i>Déconnexion</span></a></li>
                              {% else %}
                            <li><a href=\"{{path('app_login')}}\"><i class=\"ti-user\"></i><span>Se connecter</span></a></li>
                            <li><a href=\"{{path('app_register')}}\"><i class=\"fas fa-sign-in-alt\"></i><span>S'inscrire</span></a></li>
                              {% endif %}
                                  
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"bottom_header dark_skin main_menu_uppercase\">
        <div class=\"container\">
            <nav class=\"navbar navbar-expand-lg\"> 
                <a class=\"navbar-brand\" href=\"{{ path('home')}}\">
                    <img class=\"logo_light\" src=\"/assets/images/LOGO.png\" alt=\"logo\" />
                    <img class=\"logo_dark\" src=\"/assets/images/LOGO.png\" alt=\"logo\"  />
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-expanded=\"false\"> 
                    <span class=\"ion-android-menu\"></span>
                </button>
                <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav\">
                        <li class=\"dropdown\">
                            <a  class=\"nav-link\" href=\"{{ path('home')}}\">Accueil</a>   
                        </li>
                 
                        {# <li class=\"\">
                            <a class=\" nav-link\" href=\"#\" data-toggle=\"dropdown\">Produits</a>
                           
                        </li> #}
        
               
                        <li><a class=\"nav-link nav_item\" href=\"{{ path('contact')}}\">Nous contacter</a></li> 
                    </ul>
                </div>
                <ul class=\"navbar-nav attr-nav align-items-center\">
                    <li><a href=\"javascript:void(0);\" class=\"nav-link search_trigger\"><i class=\"linearicons-magnifier\"></i></a>
                        <div class=\"search_wrap\">
                            <span class=\"close-search\"><i class=\"ion-ios-close-empty\"></i></span>
                            <form>
                                <input type=\"text\" placeholder=\"Search\" class=\"form-control\" id=\"search_input\">
                                <button type=\"submit\" class=\"search_icon\"><i class=\"ion-ios-search-strong\"></i></button>
                            </form>
                        </div><div class=\"search_overlay\"></div>
                    </li>
                    <li class=\"dropdown cart_dropdown\"><a class=\"nav-link cart_trigger\" href=\"#\" data-toggle=\"dropdown\"><i class=\"linearicons-cart\"></i><span class=\"cart_count\">
                    {% if app.session.get('cart') %}
                       {{ app.session.get('cartData').data.quantity }}
                    {% else %}
                        0
                    {% endif %}
                    
                    </span></a>
                        <div class=\"cart_box dropdown-menu dropdown-menu-right\">
                            <ul class=\"cart_list\">
                            {% if app.session.get('cart') %}
                                             
                                                {% for element in app.session.get('cartData').products %}
                                                  
                                                    <li>
                                                        <a href=\"{{ path('cart_delete_all',{'id':element.product.id})}}\" class=\"item_remove\"><i class=\"ion-close\"></i></a>
                                                        <a href=\"#\"><img src=\"/assets/uploads/product/{{element.product.image}}\" alt=\"{{element.product.name}}\">{{element.product.name}}</a>
                                                        <span class=\"cart_quantity\"> {{element.quantity}} <span class=\"cart_amount\"> <span class=\"price_symbole\">\$</span></span>{{element.product.price/100}}</span>
                                                    </li>
                                                {% endfor %}
                            
                            </ul>
                            <div class=\"cart_footer\">
                                        <p class=\"cart_total\"><strong>Subtotal HT:</strong> <span class=\"cart_price\"> <span class=\"price_symbole\">\$</span></span>{{app.session.get('cartData').data.subTotalTTC}}</p>
                                        <p class=\"cart_buttons\"><a href=\"{{ path('cart')}}\" class=\"btn btn-fill-line rounded-0 view-cart\">View Cart</a><a href=\"{{ path('checkout')}}\" class=\"btn btn-fill-out rounded-0 checkout\">Checkout</a></p>
                            </div>

                            {% else %}
                                <li> Votre panier est vide  </li>
                                </ul>
                            {% endif %}
                            

                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
", "partials/Header.html.twig", "C:\\wamp64\\www\\Eco-ble-v2\\Eco-ble-v2\\templates\\partials\\Header.html.twig");
    }
}
