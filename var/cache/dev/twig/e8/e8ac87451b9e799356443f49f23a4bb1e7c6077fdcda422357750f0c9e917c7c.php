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

/* home/single_product.html.twig */
class __TwigTemplate_70baa9cd5b97acc72efe9dd176c5507e3ff51a26fe08e310edd376c58db9df01 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/single_product.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/single_product.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/single_product.html.twig", 1);
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

        echo "product";
        
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
        echo " ";
        echo twig_include($this->env, $context, "partials/Title.html.twig", ["name" => "Produit détail"]);
        echo "

<div class=\"container\">


<div class=\"section\">
\t<div class=\"container\">
\t\t<div class=\"row\">
            <div class=\"col-lg-6 col-md-6 mb-4 mb-md-0\">
              <div class=\"product-image\">
                    <div class=\"product_img_box\">
                        <img id=\"product_img\" src='/assets/uploads/product/";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 17, $this->source); })()), "image", [], "any", false, false, false, 17), "html", null, true);
        echo "' data-zoom-image=\"/assets/uploads/product/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 17, $this->source); })()), "image", [], "any", false, false, false, 17), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "\" />
                        <a href=\"#\" class=\"product_img_zoom\" title=\"Zoom\">
                            <span class=\"linearicons-zoom-in\"></span>
                        </a>
                    </div>

                </div>
            </div>
            <div class=\"col-lg-6 col-md-6\">
                <div class=\"pr_detail\">
                    <div class=\"product_description\">
                        <h4 class=\"product_title\"><a href=\"#\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28), "html", null, true);
        echo "</a></h4>
                        <div class=\"product_price\">
                            <span class=\"price\">";
        // line 30
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 30, $this->source); })()), "price", [], "any", false, false, false, 30) / 100), "html", null, true);
        echo "</span>
                            <del>";
        // line 31
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 31, $this->source); })()), "price", [], "any", false, false, false, 31) * 1.35) / 100), "html", null, true);
        echo "</del>
                            <div class=\"on_sale\">
                                <span>35% Off</span>
                            </div>
                        </div>
                        <div class=\"rating_wrap\">
                                <div class=\"rating\">
                                    <div class=\"product_rate\" style=\"width:80%\"></div>
                                </div>
                                <span class=\"rating_num\">(21)</span>
                            </div>
                        <div class=\"pr_desc\">
                            <p>";
        // line 43
        echo twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 43, $this->source); })()), "description", [], "any", false, false, false, 43);
        echo "</p>
                        </div>
                        <div class=\"product_sort_info\">
                            <ul>
                                <li><i class=\"linearicons-shield-check\"></i> Sécurisé</li>
                                <li><i class=\"linearicons-sync\"></i> Livraison et retours gratuits</li>
                                <li><i class=\"linearicons-bag-dollar\"></i> Paiement à la livraison disponible</li>
                            </ul>
                        </div>
                    </div>
                    <hr />
                    <div class=\"cart_extra\">
           
                        </div>
                        <div class=\"cart_btn\">
                            <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58)]), "html", null, true);
        echo "\" class=\"btn btn-fill-out btn-addtocart\" type=\"button\"><i class=\"icon-basket-loaded\"></i> Ajouter au panier</a>
                            <a class=\"add_compare\" href=\"\"><i class=\"icon-shuffle\"></i></a>
                            <a class=\"add_wishlist\" href=\"#\"><i class=\"icon-heart\"></i></a>
                        </div>
                    </div>
                    <hr />
                    <ul class=\"product-meta\">
                        
                        <li>Catégorie <a href=\"#\">
                         ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
            // line 68
            echo "                             ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "name", [], "any", false, false, false, 68), "html", null, true);
            echo ",
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                        
                        </a></li>
                        <li>Tags: ";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 72, $this->source); })()), "tags", [], "any", false, false, false, 72), "html", null, true);
        echo " </li>

                    <div class=\"product_share\">
       
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
        \t<div class=\"col-12\">
            \t<div class=\"large_divider clearfix\"></div>
            </div>
        </div>
        <div class=\"row\">
        \t<div class=\"col-12\">
            \t<div class=\"tab-style3\">
\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" id=\"Description-tab\" data-toggle=\"tab\" href=\"#Description\" role=\"tab\" aria-controls=\"Description\" aria-selected=\"true\">Description</a>
                      \t</li>
                      \t<li class=\"nav-item\">
                        \t<a class=\"nav-link\" id=\"Additional-info-tab\" data-toggle=\"tab\" href=\"#Additional-info\" role=\"tab\" aria-controls=\"Additional-info\" aria-selected=\"false\">information additionnelle</a>
                      \t</li>
                      \t<li class=\"nav-item\">
                        \t<a class=\"nav-link\" id=\"Reviews-tab\" data-toggle=\"tab\" href=\"#Reviews\" role=\"tab\" aria-controls=\"Reviews\" aria-selected=\"false\">Avis</a>
                      \t</li>
                    </ul>
                \t<div class=\"tab-content shop_info_tab\">
                      \t<div class=\"tab-pane fade show active\" id=\"Description\" role=\"tabpanel\" aria-labelledby=\"Description-tab\">
                        \t";
        // line 101
        echo twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 101, $this->source); })()), "description", [], "any", false, false, false, 101);
        echo "
                      \t</div>

                      \t<div class=\"tab-pane fade\" id=\"Reviews\" role=\"tabpanel\" aria-labelledby=\"Reviews-tab\">
                        \t<div class=\"comments\">
                            \t<h5 class=\"product_tab_title\">2 Review For <span>Blue Dress For Woman</span></h5>
                                <ul class=\"list_none comment_list mt-4\">
                                    <li>
                                        <div class=\"comment_img\">
                                            <img src=\"http://placehold.it/50\" alt=\"user1\"/>
                                        </div>
                                        <div class=\"comment_block\">
                                            <div class=\"rating_wrap\">
                                                <div class=\"rating\">
                                                    <div class=\"product_rate\" style=\"width:80%\"></div>
                                                </div>
                                            </div>
                                            <p class=\"customer_meta\">
                                                <span class=\"review_author\">Alea Brooks</span>
                                                <span class=\"comment-date\">March 5, 2018</span>
                                            </p>
                                            <div class=\"description\">
                                                <p>Lorem Ipsumin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"comment_img\">
                                            <img src=\"http://placehold.it/300\" alt=\"user2\"/>
                                        </div>
                                        <div class=\"comment_block\">
                                            <div class=\"rating_wrap\">
                                                <div class=\"rating\">
                                                    <div class=\"product_rate\" style=\"width:60%\"></div>
                                                </div>
                                            </div>
                                            <p class=\"customer_meta\">
                                                <span class=\"review_author\">Grace Wong</span>
                                                <span class=\"comment-date\">June 17, 2018</span>
                                            </p>
                                            <div class=\"description\">
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                        \t</div>
                            <div class=\"review_form field_form\">
                                <h5>Add a review</h5>
                                <form class=\"row mt-3\">
                                    <div class=\"form-group col-12\">
                                        <div class=\"star_rating\">
                                            <span data-value=\"1\"><i class=\"far fa-star\"></i></span>
                                            <span data-value=\"2\"><i class=\"far fa-star\"></i></span>
                                            <span data-value=\"3\"><i class=\"far fa-star\"></i></span>
                                            <span data-value=\"4\"><i class=\"far fa-star\"></i></span>
                                            <span data-value=\"5\"><i class=\"far fa-star\"></i></span>
                                        </div>
                                    </div>
                                    <div class=\"form-group col-12\">
                                        <textarea required=\"required\" placeholder=\"Your review *\" class=\"form-control\" name=\"message\" rows=\"4\"></textarea>
                                    </div>
                                    <div class=\"form-group col-md-6\">
                                        <input required=\"required\" placeholder=\"Enter Name *\" class=\"form-control\" name=\"name\" type=\"text\">
                                     </div>
                                    <div class=\"form-group col-md-6\">
                                        <input required=\"required\" placeholder=\"Enter Email *\" class=\"form-control\" name=\"email\" type=\"email\">
                                    </div>

                                    <div class=\"form-group col-12\">
                                        <button type=\"submit\" class=\"btn btn-fill-out\" name=\"submit\" value=\"Submit\">Avis</button>
                                    </div>
                                </form>
                            </div>
                      \t</div>
                \t</div>
                </div>
            </div>
        </div>
        <div class=\"row\">
        \t<div class=\"col-12\">
            \t<div class=\"small_divider\"></div>
            \t<div class=\"divider\"></div>
                <div class=\"medium_divider\"></div>
            </div>
        </div>
        <div class=\"row\">
        \t<div class=\"col-12\">
            \t<div class=\"heading_s1\">
                \t<h3>Vous aimez également</h3>
                </div>
            \t<div class=\"releted_product_slider carousel_slider owl-carousel owl-theme\" data-margin=\"20\" data-responsive='{\"0\":{\"items\": \"1\"}, \"481\":{\"items\": \"2\"}, \"768\":{\"items\": \"3\"}, \"1199\":{\"items\": \"4\"}}'>
                   ";
        // line 193
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 193, $this->source); })()), "category", [], "any", false, false, false, 193));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 194
            echo "                       ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 194));
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
            foreach ($context['_seq'] as $context["_key"] => $context["productreleated"]) {
                // line 195
                echo "                           ";
                if ( !((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 195, $this->source); })()) === $context["productreleated"])) {
                    // line 196
                    echo "                               ";
                    echo twig_include($this->env, $context, "partials/product_item.html.twig", ["product" => $context["productreleated"]]);
                    echo "
                           ";
                }
                // line 198
                echo "                           
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productreleated'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 200
            echo "                   ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        echo "
                </div>
            </div>
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
        return "home/single_product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 201,  378 => 200,  363 => 198,  357 => 196,  354 => 195,  336 => 194,  319 => 193,  224 => 101,  192 => 72,  188 => 70,  179 => 68,  175 => 67,  163 => 58,  145 => 43,  130 => 31,  126 => 30,  121 => 28,  103 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}product{% endblock %}

{% block body %}
 {{ include(\"partials/Title.html.twig\",{'name':'Produit détail'}) }}

<div class=\"container\">


<div class=\"section\">
\t<div class=\"container\">
\t\t<div class=\"row\">
            <div class=\"col-lg-6 col-md-6 mb-4 mb-md-0\">
              <div class=\"product-image\">
                    <div class=\"product_img_box\">
                        <img id=\"product_img\" src='/assets/uploads/product/{{product.image}}' data-zoom-image=\"/assets/uploads/product/{{product.image}}\" alt=\"{{product.name}}\" />
                        <a href=\"#\" class=\"product_img_zoom\" title=\"Zoom\">
                            <span class=\"linearicons-zoom-in\"></span>
                        </a>
                    </div>

                </div>
            </div>
            <div class=\"col-lg-6 col-md-6\">
                <div class=\"pr_detail\">
                    <div class=\"product_description\">
                        <h4 class=\"product_title\"><a href=\"#\">{{product.name}}</a></h4>
                        <div class=\"product_price\">
                            <span class=\"price\">{{product.price/100}}</span>
                            <del>{{product.price*1.35/100}}</del>
                            <div class=\"on_sale\">
                                <span>35% Off</span>
                            </div>
                        </div>
                        <div class=\"rating_wrap\">
                                <div class=\"rating\">
                                    <div class=\"product_rate\" style=\"width:80%\"></div>
                                </div>
                                <span class=\"rating_num\">(21)</span>
                            </div>
                        <div class=\"pr_desc\">
                            <p>{{product.description  | raw}}</p>
                        </div>
                        <div class=\"product_sort_info\">
                            <ul>
                                <li><i class=\"linearicons-shield-check\"></i> Sécurisé</li>
                                <li><i class=\"linearicons-sync\"></i> Livraison et retours gratuits</li>
                                <li><i class=\"linearicons-bag-dollar\"></i> Paiement à la livraison disponible</li>
                            </ul>
                        </div>
                    </div>
                    <hr />
                    <div class=\"cart_extra\">
           
                        </div>
                        <div class=\"cart_btn\">
                            <a href=\"{{ path('cart_add',{'id':product.id})}}\" class=\"btn btn-fill-out btn-addtocart\" type=\"button\"><i class=\"icon-basket-loaded\"></i> Ajouter au panier</a>
                            <a class=\"add_compare\" href=\"\"><i class=\"icon-shuffle\"></i></a>
                            <a class=\"add_wishlist\" href=\"#\"><i class=\"icon-heart\"></i></a>
                        </div>
                    </div>
                    <hr />
                    <ul class=\"product-meta\">
                        
                        <li>Catégorie <a href=\"#\">
                         {% for Category in product %}
                             {{Category.name}},
                         {% endfor %}
                        
                        </a></li>
                        <li>Tags: {{product.tags}} </li>

                    <div class=\"product_share\">
       
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
        \t<div class=\"col-12\">
            \t<div class=\"large_divider clearfix\"></div>
            </div>
        </div>
        <div class=\"row\">
        \t<div class=\"col-12\">
            \t<div class=\"tab-style3\">
\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" id=\"Description-tab\" data-toggle=\"tab\" href=\"#Description\" role=\"tab\" aria-controls=\"Description\" aria-selected=\"true\">Description</a>
                      \t</li>
                      \t<li class=\"nav-item\">
                        \t<a class=\"nav-link\" id=\"Additional-info-tab\" data-toggle=\"tab\" href=\"#Additional-info\" role=\"tab\" aria-controls=\"Additional-info\" aria-selected=\"false\">information additionnelle</a>
                      \t</li>
                      \t<li class=\"nav-item\">
                        \t<a class=\"nav-link\" id=\"Reviews-tab\" data-toggle=\"tab\" href=\"#Reviews\" role=\"tab\" aria-controls=\"Reviews\" aria-selected=\"false\">Avis</a>
                      \t</li>
                    </ul>
                \t<div class=\"tab-content shop_info_tab\">
                      \t<div class=\"tab-pane fade show active\" id=\"Description\" role=\"tabpanel\" aria-labelledby=\"Description-tab\">
                        \t{{product.description | raw}}
                      \t</div>

                      \t<div class=\"tab-pane fade\" id=\"Reviews\" role=\"tabpanel\" aria-labelledby=\"Reviews-tab\">
                        \t<div class=\"comments\">
                            \t<h5 class=\"product_tab_title\">2 Review For <span>Blue Dress For Woman</span></h5>
                                <ul class=\"list_none comment_list mt-4\">
                                    <li>
                                        <div class=\"comment_img\">
                                            <img src=\"http://placehold.it/50\" alt=\"user1\"/>
                                        </div>
                                        <div class=\"comment_block\">
                                            <div class=\"rating_wrap\">
                                                <div class=\"rating\">
                                                    <div class=\"product_rate\" style=\"width:80%\"></div>
                                                </div>
                                            </div>
                                            <p class=\"customer_meta\">
                                                <span class=\"review_author\">Alea Brooks</span>
                                                <span class=\"comment-date\">March 5, 2018</span>
                                            </p>
                                            <div class=\"description\">
                                                <p>Lorem Ipsumin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"comment_img\">
                                            <img src=\"http://placehold.it/300\" alt=\"user2\"/>
                                        </div>
                                        <div class=\"comment_block\">
                                            <div class=\"rating_wrap\">
                                                <div class=\"rating\">
                                                    <div class=\"product_rate\" style=\"width:60%\"></div>
                                                </div>
                                            </div>
                                            <p class=\"customer_meta\">
                                                <span class=\"review_author\">Grace Wong</span>
                                                <span class=\"comment-date\">June 17, 2018</span>
                                            </p>
                                            <div class=\"description\">
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                        \t</div>
                            <div class=\"review_form field_form\">
                                <h5>Add a review</h5>
                                <form class=\"row mt-3\">
                                    <div class=\"form-group col-12\">
                                        <div class=\"star_rating\">
                                            <span data-value=\"1\"><i class=\"far fa-star\"></i></span>
                                            <span data-value=\"2\"><i class=\"far fa-star\"></i></span>
                                            <span data-value=\"3\"><i class=\"far fa-star\"></i></span>
                                            <span data-value=\"4\"><i class=\"far fa-star\"></i></span>
                                            <span data-value=\"5\"><i class=\"far fa-star\"></i></span>
                                        </div>
                                    </div>
                                    <div class=\"form-group col-12\">
                                        <textarea required=\"required\" placeholder=\"Your review *\" class=\"form-control\" name=\"message\" rows=\"4\"></textarea>
                                    </div>
                                    <div class=\"form-group col-md-6\">
                                        <input required=\"required\" placeholder=\"Enter Name *\" class=\"form-control\" name=\"name\" type=\"text\">
                                     </div>
                                    <div class=\"form-group col-md-6\">
                                        <input required=\"required\" placeholder=\"Enter Email *\" class=\"form-control\" name=\"email\" type=\"email\">
                                    </div>

                                    <div class=\"form-group col-12\">
                                        <button type=\"submit\" class=\"btn btn-fill-out\" name=\"submit\" value=\"Submit\">Avis</button>
                                    </div>
                                </form>
                            </div>
                      \t</div>
                \t</div>
                </div>
            </div>
        </div>
        <div class=\"row\">
        \t<div class=\"col-12\">
            \t<div class=\"small_divider\"></div>
            \t<div class=\"divider\"></div>
                <div class=\"medium_divider\"></div>
            </div>
        </div>
        <div class=\"row\">
        \t<div class=\"col-12\">
            \t<div class=\"heading_s1\">
                \t<h3>Vous aimez également</h3>
                </div>
            \t<div class=\"releted_product_slider carousel_slider owl-carousel owl-theme\" data-margin=\"20\" data-responsive='{\"0\":{\"items\": \"1\"}, \"481\":{\"items\": \"2\"}, \"768\":{\"items\": \"3\"}, \"1199\":{\"items\": \"4\"}}'>
                   {% for category in product.category %}
                       {% for productreleated in category.products %}
                           {% if product is not same as(productreleated) %}
                               {{ include('partials/product_item.html.twig',{'product': productreleated})}}
                           {% endif %}
                           
                       {% endfor %}
                   {% endfor %}

                </div>
            </div>
        </div>
    </div>
</div>

</div>
{% endblock %}", "home/single_product.html.twig", "C:\\wamp64\\www\\Eco-ble-v2\\Eco-ble-v2\\templates\\home\\single_product.html.twig");
    }
}
