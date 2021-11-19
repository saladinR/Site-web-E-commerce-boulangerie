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

/* cart/index.html.twig */
class __TwigTemplate_79fdf03ac1b7002ab0bf233428e5dae368c59805c8e2e9197630f2eb727820e0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        echo "cart test";
        
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
        echo twig_include($this->env, $context, "partials/Title.html.twig", ["name" => "Cart "]);
        echo "


<div class=\"section\">
\t<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"table-responsive shop_cart_table\">
                \t<table class=\"table\">
                    \t<thead>
                        \t<tr>
                            \t<th class=\"product-thumbnail\">&nbsp;</th>
                                <th class=\"product-name\">Product</th>
                                <th class=\"product-price\">Price</th>
                                <th class=\"product-quantity\">Quantity</th>
                                <th class=\"product-subtotal\">Total</th>
                                <th class=\"product-remove\">Remove</th>
                            </tr>
                        </thead>
                        <tbody>

                        \t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 27, $this->source); })()), "products", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 28
            echo "                             
                                <tr>
                                
                            \t<td class=\"product-thumbnail\"><a href=\"#\"><img src=\"/assets/uploads/product/";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 31), "image", [], "any", false, false, false, 31), "html", null, true);
            echo "\" alt=\"product1\"></a></td>
                                <td class=\"product-name\" data-title=\"Product\"><a href=\"#\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32), "html", null, true);
            echo "</a></td>
                                <td class=\"product-price\" data-title=\"Price\">";
            // line 33
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 33), "price", [], "any", false, false, false, 33) / 100), "html", null, true);
            echo "</td>
                                <td class=\"product-quantity\" data-title=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "quantity", [], "any", false, false, false, 34), "html", null, true);
            echo "\"><div class=\"quantity\">
                                <a type=\"button\"  href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\" class=\"minus\">-</a>
                                <input type=\"text\" name=\"quantity\" value=\"";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "quantity", [], "any", false, false, false, 36), "html", null, true);
            echo "\" title=\"Qty\" class=\"qty\" size=\"4\">
                                <a type=\"button\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\" class=\"plus\">+</a>
                              </div></td>
                              \t<td class=\"product-subtotal\" data-title=\"Total\">";
            // line 39
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["element"], "quantity", [], "any", false, false, false, 39) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 39), "price", [], "any", false, false, false, 39)) / 100), "html", null, true);
            echo "</td>
                                <td class=\"product-remove\" data-title=\"Remove\"><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_delete_all", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\"><i class=\"ti-close\"></i></a></td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                          
                        </tbody>
                 
                    </table>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12\">
            \t<div class=\"medium_divider\"></div>
            \t<div class=\"divider center_icon\"><i class=\"ti-shopping-cart-full\"></i></div>
            \t<div class=\"medium_divider\"></div>
            </div>
        </div>
        <div class=\"row\">
        \t  <div class=\"col-md-6\">


            </div>
            <div class=\"col-md-6\">
            \t<div class=\"border p-3 p-md-4\">
                    <div class=\"heading_s1 mb-3\">
                        <h6>Cart Totals</h6>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table\">
                            <tbody>
                                <tr>
                                    <td class=\"cart_total_label\">Cart Subtotal HT</td>
                                    <td class=\"cart_total_amount\">";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 72, $this->source); })()), "data", [], "any", false, false, false, 72), "subTotalHT", [], "any", false, false, false, 72), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td class=\"cart_total_label\">Taxe (20%)</td>
                                    <td class=\"cart_total_amount\">";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 76, $this->source); })()), "data", [], "any", false, false, false, 76), "Taxe", [], "any", false, false, false, 76), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td class=\"cart_total_label\">Total TT</td>
                                    <td class=\"cart_total_amount\"><strong>";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 80, $this->source); })()), "data", [], "any", false, false, false, 80), "subTotalTTC", [], "any", false, false, false, 80), "html", null, true);
        echo "</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout");
        echo "\" class=\"btn btn-fill-out\">Proceed To CheckOut</a>
                </div>
            </div>
        </div>
    </div>
</div>
>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 85,  209 => 80,  202 => 76,  195 => 72,  164 => 43,  155 => 40,  151 => 39,  146 => 37,  142 => 36,  138 => 35,  134 => 34,  130 => 33,  126 => 32,  122 => 31,  117 => 28,  113 => 27,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}cart test{% endblock %}

{% block body %}
 {{ include(\"partials/Title.html.twig\",{'name':'Cart '}) }}


<div class=\"section\">
\t<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"table-responsive shop_cart_table\">
                \t<table class=\"table\">
                    \t<thead>
                        \t<tr>
                            \t<th class=\"product-thumbnail\">&nbsp;</th>
                                <th class=\"product-name\">Product</th>
                                <th class=\"product-price\">Price</th>
                                <th class=\"product-quantity\">Quantity</th>
                                <th class=\"product-subtotal\">Total</th>
                                <th class=\"product-remove\">Remove</th>
                            </tr>
                        </thead>
                        <tbody>

                        \t{% for element in cart.products %}
                             
                                <tr>
                                
                            \t<td class=\"product-thumbnail\"><a href=\"#\"><img src=\"/assets/uploads/product/{{element.product.image}}\" alt=\"product1\"></a></td>
                                <td class=\"product-name\" data-title=\"Product\"><a href=\"#\">{{element.product.name}}</a></td>
                                <td class=\"product-price\" data-title=\"Price\">{{element.product.price/100}}</td>
                                <td class=\"product-quantity\" data-title=\"{{element.quantity}}\"><div class=\"quantity\">
                                <a type=\"button\"  href=\"{{ path('cart_delete',{'id':element.product.id})}}\" class=\"minus\">-</a>
                                <input type=\"text\" name=\"quantity\" value=\"{{element.quantity}}\" title=\"Qty\" class=\"qty\" size=\"4\">
                                <a type=\"button\" href=\"{{ path('cart_add',{'id':element.product.id})}}\" class=\"plus\">+</a>
                              </div></td>
                              \t<td class=\"product-subtotal\" data-title=\"Total\">{{ element.quantity * element.product.price/100 }}</td>
                                <td class=\"product-remove\" data-title=\"Remove\"><a href=\"{{ path('cart_delete_all',{'id':element.product.id})}}\"><i class=\"ti-close\"></i></a></td>
                            </tr>
                            {% endfor %}
                          
                        </tbody>
                 
                    </table>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12\">
            \t<div class=\"medium_divider\"></div>
            \t<div class=\"divider center_icon\"><i class=\"ti-shopping-cart-full\"></i></div>
            \t<div class=\"medium_divider\"></div>
            </div>
        </div>
        <div class=\"row\">
        \t  <div class=\"col-md-6\">


            </div>
            <div class=\"col-md-6\">
            \t<div class=\"border p-3 p-md-4\">
                    <div class=\"heading_s1 mb-3\">
                        <h6>Cart Totals</h6>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table\">
                            <tbody>
                                <tr>
                                    <td class=\"cart_total_label\">Cart Subtotal HT</td>
                                    <td class=\"cart_total_amount\">{{cart.data.subTotalHT}}</td>
                                </tr>
                                <tr>
                                    <td class=\"cart_total_label\">Taxe (20%)</td>
                                    <td class=\"cart_total_amount\">{{cart.data.Taxe}}</td>
                                </tr>
                                <tr>
                                    <td class=\"cart_total_label\">Total TT</td>
                                    <td class=\"cart_total_amount\"><strong>{{cart.data.subTotalTTC}}</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href=\"{{ path('checkout')}}\" class=\"btn btn-fill-out\">Proceed To CheckOut</a>
                </div>
            </div>
        </div>
    </div>
</div>
>
{% endblock %}
", "cart/index.html.twig", "C:\\wamp64\\www\\Eco-ble-v2\\Eco-ble-v2\\templates\\cart\\index.html.twig");
    }
}
