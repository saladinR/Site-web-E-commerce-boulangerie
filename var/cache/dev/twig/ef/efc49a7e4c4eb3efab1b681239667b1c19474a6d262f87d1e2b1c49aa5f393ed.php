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

/* checkout/index.html.twig */
class __TwigTemplate_395bdd060ef10a37935551835338c336451d9d6ce633887133b0bb571b05413a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "checkout/index.html.twig", 1);
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

        echo " Checkout ";
        
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
        echo twig_include($this->env, $context, "partials/Title.html.twig", ["name" => "Checkout "]);
        echo "

<div class=\"section\">
\t<div class=\"container\">
      ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["checkout"]) || array_key_exists("checkout", $context) ? $context["checkout"] : (function () { throw new RuntimeError('Variable "checkout" does not exist.', 10, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout_confirm")]);
        echo "
        <div class=\"row\">
        \t<div class=\"col-md-6\">
                <div class=\"heading_s1\">
                        <h4>Your delivery Address</h4>
                        <div class=\"content\">
                            
                             ";
        // line 17
        echo twig_replace_filter($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["checkout"]) || array_key_exists("checkout", $context) ? $context["checkout"] : (function () { throw new RuntimeError('Variable "checkout" does not exist.', 17, $this->source); })()), "address", [], "any", false, false, false, 17), 'widget'), ["[spr]" => "<br>"]);
        echo "
                        
                               ";
        // line 19
        if ((0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "addresses", [], "any", false, false, false, 19)), 0))) {
            // line 20
            echo "                                Vous n'avez pas encore ajouter adress dans votre compte
                                ";
        } else {
            // line 22
            echo "
                                ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["addres"]) {
                // line 24
                echo "
                                <h5>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addres"], "fullname", [], "any", false, false, false, 25), "html", null, true);
                echo " <br>
                                    ";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addres"], "company", [], "any", false, false, false, 26), "html", null, true);
                echo "<br>
                                    ";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addres"], "address", [], "any", false, false, false, 27), "html", null, true);
                echo "<br>
                                    ";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addres"], "phone", [], "any", false, false, false, 28), "html", null, true);
                echo "<br>
                                    ";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addres"], "city", [], "any", false, false, false, 29), "html", null, true);
                echo "<br>
                                    ";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addres"], "codepostal", [], "any", false, false, false, 30), "html", null, true);
                echo "<br>
                                    ";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addres"], "country", [], "any", false, false, false, 31), "html", null, true);
                echo "<br></h5>
                                <br>
                                <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("address_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["addres"], "id", [], "any", false, false, false, 33)]), "html", null, true);
                echo "\"
                                    class=\"btn btn-fill-out btn-blick-mt-1\">modifier l'adresse </a>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['addres'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "  

                            </div>
                            ";
        }
        // line 39
        echo "

                        </div>
                        <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("address_new");
        echo "\" class=\"btn btn-fill-out btn-blick-mt-1\">ajouter une address </a>
                </div>
                <div class=\"heading_s1\">
                    <h4>Your carrier</h4>
                    <div class=\"content\">
                      ";
        // line 47
        echo twig_replace_filter($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["checkout"]) || array_key_exists("checkout", $context) ? $context["checkout"] : (function () { throw new RuntimeError('Variable "checkout" does not exist.', 47, $this->source); })()), "carrier", [], "any", false, false, false, 47), 'widget'), ["[spr]" => "<br>"]);
        echo "

                    </div><br>
                </div>
                <div class=\"heading_s1\">
                    <h4>Additional information</h4>
                    <div class=\"form-group mb-0\">
                       ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["checkout"]) || array_key_exists("checkout", $context) ? $context["checkout"] : (function () { throw new RuntimeError('Variable "checkout" does not exist.', 54, $this->source); })()), "informations", [], "any", false, false, false, 54), 'widget');
        echo "
                    </div>
                </div>
          </div>

          <div class=\"col-md-6\">
                <div class=\"order_review\">
                    <div class=\"heading_s1\">
                        <h4>Your Orders</h4>
                    </div>
                    <div class=\"table-responsive order_table\">
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                            ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 73, $this->source); })()), "products", [], "any", false, false, false, 73));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 74
            echo "                                <tr>
                                        <td> ";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 75), "name", [], "any", false, false, false, 75), "html", null, true);
            echo "<span class=\"product-qty\"> X ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "quantity", [], "any", false, false, false, 75), "html", null, true);
            echo "</span></td>
                                        <td>\$ ";
            // line 76
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 76), "price", [], "any", false, false, false, 76) / 100), "html", null, true);
            echo "</td>
                                    </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>SubTotal HT</th>
                                    <td class=\"product-subtotal\">";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 83, $this->source); })()), "data", [], "any", false, false, false, 83), "subTotalHT", [], "any", false, false, false, 83), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Taxe</th>
                                    <td class=\"product-subtotal\">";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 87, $this->source); })()), "data", [], "any", false, false, false, 87), "Taxe", [], "any", false, false, false, 87), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <td class=\"product-subtotal\">";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 91, $this->source); })()), "data", [], "any", false, false, false, 91), "subTotalTTC", [], "any", false, false, false, 91), "html", null, true);
        echo "</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class=\"payment_method\">
                        <div class=\"heading_s1\">
                            <h4>Payment</h4>
                        </div>

                    </div>
                    <button type=\"submit\" id=\"checkout-button\" class=\"btn btn-fill-out btn-block\">Place Order</button>
                </div>
          </div>
        </div>
      ";
        // line 106
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["checkout"]) || array_key_exists("checkout", $context) ? $context["checkout"] : (function () { throw new RuntimeError('Variable "checkout" does not exist.', 106, $this->source); })()), 'form_end');
        echo "
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "checkout/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 106,  258 => 91,  251 => 87,  244 => 83,  238 => 79,  229 => 76,  223 => 75,  220 => 74,  216 => 73,  194 => 54,  184 => 47,  176 => 42,  171 => 39,  165 => 35,  156 => 33,  151 => 31,  147 => 30,  143 => 29,  139 => 28,  135 => 27,  131 => 26,  127 => 25,  124 => 24,  120 => 23,  117 => 22,  113 => 20,  111 => 19,  106 => 17,  96 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Checkout {% endblock %}

{% block body %}
 {{ include(\"partials/Title.html.twig\",{'name':'Checkout '}) }}

<div class=\"section\">
\t<div class=\"container\">
      {{form_start(checkout, {action: path('checkout_confirm')}) }}
        <div class=\"row\">
        \t<div class=\"col-md-6\">
                <div class=\"heading_s1\">
                        <h4>Your delivery Address</h4>
                        <div class=\"content\">
                            
                             {{ form_widget(checkout.address) | replace({'[spr]': '<br>'}) | raw }}
                        
                               {% if app.user.addresses|length == 0 %}
                                Vous n'avez pas encore ajouter adress dans votre compte
                                {% else %}

                                {% for addres in address %}

                                <h5>{{addres.fullname}} <br>
                                    {{addres.company}}<br>
                                    {{addres.address}}<br>
                                    {{addres.phone}}<br>
                                    {{addres.city}}<br>
                                    {{addres.codepostal}}<br>
                                    {{addres.country}}<br></h5>
                                <br>
                                <a href=\"{{ path('address_edit',{'id':addres.id })}}\"
                                    class=\"btn btn-fill-out btn-blick-mt-1\">modifier l'adresse </a>
                                {% endfor %}  

                            </div>
                            {% endif %}


                        </div>
                        <a href=\"{{ path('address_new')}}\" class=\"btn btn-fill-out btn-blick-mt-1\">ajouter une address </a>
                </div>
                <div class=\"heading_s1\">
                    <h4>Your carrier</h4>
                    <div class=\"content\">
                      {{ form_widget(checkout.carrier) | replace({'[spr]': '<br>'}) | raw}}

                    </div><br>
                </div>
                <div class=\"heading_s1\">
                    <h4>Additional information</h4>
                    <div class=\"form-group mb-0\">
                       {{ form_widget(checkout.informations)}}
                    </div>
                </div>
          </div>

          <div class=\"col-md-6\">
                <div class=\"order_review\">
                    <div class=\"heading_s1\">
                        <h4>Your Orders</h4>
                    </div>
                    <div class=\"table-responsive order_table\">
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                            {% for element in cart.products %}
                                <tr>
                                        <td> {{element.product.name}}<span class=\"product-qty\"> X {{element.quantity}}</span></td>
                                        <td>\$ {{element.product.price/100 }}</td>
                                    </tr>
                            {% endfor %}
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>SubTotal HT</th>
                                    <td class=\"product-subtotal\">{{cart.data.subTotalHT}}</td>
                                </tr>
                                <tr>
                                    <th>Taxe</th>
                                    <td class=\"product-subtotal\">{{cart.data.Taxe}}</td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <td class=\"product-subtotal\">{{cart.data.subTotalTTC}}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class=\"payment_method\">
                        <div class=\"heading_s1\">
                            <h4>Payment</h4>
                        </div>

                    </div>
                    <button type=\"submit\" id=\"checkout-button\" class=\"btn btn-fill-out btn-block\">Place Order</button>
                </div>
          </div>
        </div>
      {{form_end(checkout)}}
    </div>
</div>

{% endblock %}
", "checkout/index.html.twig", "/Applications/MAMP/htdocs/symfony boulangerie/Eco-ble/templates/checkout/index.html.twig");
    }
}
