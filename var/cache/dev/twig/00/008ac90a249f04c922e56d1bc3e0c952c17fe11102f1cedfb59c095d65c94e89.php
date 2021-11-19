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

/* checkout/confirm.html.twig */
class __TwigTemplate_058a78a6ba5606ba1a66f4f1950a0fe7be2f7b404e0762bb83c4f244eed676fb extends Template
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
            'script' => [$this, 'block_script'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/confirm.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/confirm.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "checkout/confirm.html.twig", 1);
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

        echo " Validation de la commande ";
        
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
        echo " <script src=\"https://js.stripe.com/v3/\"></script>
";
        // line 7
        echo twig_include($this->env, $context, "partials/Title.html.twig", ["name" => "Validation de la commande "]);
        echo "

<div class=\"section\">
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"heading_s1\">
                    <h4>Svp verifiez votre address</h4><br>
                    <div class=\"content\">

                        <div>
                            <div class=\"liste-adress\">
                                ";
        // line 20
        echo (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 20, $this->source); })());
        echo " 
                            </div>
                          
                        </div>
                    </div>
                </div>

                ";
        // line 28
        echo "            </div>
            <div class=\"heading_s1\">
                <h4>Mode de livraison</h4>
                <div class=\"content\">
                    ";
        // line 32
        echo twig_replace_filter((isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 32, $this->source); })()), ["[spr]" => "<br>"]);
        echo "
                    ";
        // line 34
        echo "                </div>
            </div>
            ";
        // line 36
        if ((isset($context["informations"]) || array_key_exists("informations", $context) ? $context["informations"] : (function () { throw new RuntimeError('Variable "informations" does not exist.', 36, $this->source); })())) {
            // line 37
            echo "
            <div class=\"heading_s1\">
                <h4>Information additionnelle</h4>
                <div class=\"form-group mb-0\">
                    ";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["informations"]) || array_key_exists("informations", $context) ? $context["informations"] : (function () { throw new RuntimeError('Variable "informations" does not exist.', 41, $this->source); })()), "html", null, true);
            echo "
                </div>
            </div>

            ";
        }
        // line 46
        echo "

        </div>

        <div class=\"col-md-12\">
            <div class=\"order_review \">
                <div class=\"heading_s1\">
                    <h4>Votre commande</h4>
                </div>

                <div class=\"table-responsive order_table\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Produit</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 65, $this->source); })()), "products", [], "any", false, false, false, 65));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 66
            echo "                            <tr>
                                <td> ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 67), "name", [], "any", false, false, false, 67), "html", null, true);
            echo "<span class=\"product-qty\"> X ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "quantity", [], "any", false, false, false, 67), "html", null, true);
            echo "</span>
                                </td>
                                <td>\$ ";
            // line 69
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 69), "price", [], "any", false, false, false, 69) / 100), "html", null, true);
            echo "</td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                        </tbody>
                        <tfoot>
                            <tr>
                                <th>SubTotal HT</th>
                                <td class=\"product-subtotal\">";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 76, $this->source); })()), "data", [], "any", false, false, false, 76), "subTotalHT", [], "any", false, false, false, 76), "html", null, true);
        echo " \$</td>
                            </tr>
                            <tr>
                                <th>Taxe</th>
                                <td class=\"product-subtotal\">";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 80, $this->source); })()), "data", [], "any", false, false, false, 80), "Taxe", [], "any", false, false, false, 80), "html", null, true);
        echo " \$</td>
                            </tr>
                            ";
        // line 82
        if ( !(null === (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 82, $this->source); })()))) {
            // line 83
            echo "                            <tr>

                                <th>livraison ";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 85, $this->source); })()), "name", [], "any", false, false, false, 85), "html", null, true);
            echo "</th>

                                <td class=\"product-subtotal\">";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 87, $this->source); })()), "price", [], "any", false, false, false, 87), "html", null, true);
            echo " \$</td>

                            </tr>
                            <tr>
                                <th>Total</th>
                                <td class=\"product-subtotal\">";
            // line 92
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 92, $this->source); })()), "data", [], "any", false, false, false, 92), "subTotalTTC", [], "any", false, false, false, 92) + (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 92, $this->source); })()), "price", [], "any", false, false, false, 92) / 100)), "html", null, true);
            echo " \$</td>
                            </tr>
                            ";
        }
        // line 95
        echo "                        </tfoot>
                    </table>
                </div>
                <div class=\"payment_method\">
                    <div class=\"heading_s1\">
                        <h4>Paiement</h4>
                    </div>
                    ";
        // line 102
        if ( !(null === (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 102, $this->source); })()))) {
            // line 103
            echo "                    <a class=\"btn btn-fill-out btn-block\" id=\"checkout-button-payement\">valider la commande:
                        ";
            // line 104
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 104, $this->source); })()), "data", [], "any", false, false, false, 104), "subTotalTTC", [], "any", false, false, false, 104) + (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 104, $this->source); })()), "price", [], "any", false, false, false, 104) / 100)), "html", null, true);
            echo " \$</a>
                    ";
        }
        // line 106
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

    // line 116
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 117
        echo "<style>
    .order_review {
        background-color: #f7f8fb;
        padding: 30px;
        width: 60%;
        margin-left: 40%;
    }
</style>

<script type=\"text/javascript\">
   // var stripe = Stripe(\"pk_test_WKH0LC8TYPJR7xG6q5cvwfjF00hbP92C5A\");
   var clestripepk = \"pk_test_WKH0LC8TYPJR7xG6q5cvwfjF00hbP92C5A\";
   
    var stripe = Stripe(clestripepk);

    var checkoutButton = document.getElementById(\"checkout-button-payement\");
    console.log(checkoutButton);
    checkoutButton.addEventListener(\"click\", function () {
        fetch(\"/commande/create-session/";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["reference"]) || array_key_exists("reference", $context) ? $context["reference"] : (function () { throw new RuntimeError('Variable "reference" does not exist.', 135, $this->source); })()), "html", null, true);
        echo "\", {
            method: \"POST\"
        }).then(function (response) {
            return response.json();
        }).then(function (session) {
            if (session.error == 'order') {
                window.location.replace('";
        // line 141
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order");
        echo "');
            } else {
                return stripe.redirectToCheckout({
                    sessionId: session.id
                });
            }

        }).then(function (result) { 
            if (result.error) {
                alert(result.error.message);
            }
        }).catch(function (error) {
            console.error(\"Error:\", error);
        });
    });
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "checkout/confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 141,  304 => 135,  284 => 117,  274 => 116,  254 => 106,  249 => 104,  246 => 103,  244 => 102,  235 => 95,  229 => 92,  221 => 87,  216 => 85,  212 => 83,  210 => 82,  205 => 80,  198 => 76,  192 => 72,  183 => 69,  176 => 67,  173 => 66,  169 => 65,  148 => 46,  140 => 41,  134 => 37,  132 => 36,  128 => 34,  124 => 32,  118 => 28,  108 => 20,  92 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Validation de la commande {% endblock %}

{% block body %}
 <script src=\"https://js.stripe.com/v3/\"></script>
{{ include(\"partials/Title.html.twig\",{'name':'Validation de la commande '}) }}

<div class=\"section\">
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"heading_s1\">
                    <h4>Svp verifiez votre address</h4><br>
                    <div class=\"content\">

                        <div>
                            <div class=\"liste-adress\">
                                {{address | raw}} 
                            </div>
                          
                        </div>
                    </div>
                </div>

                {# <a href=\"{{ path('checkout')}}\" class=\"btn btn-fill-out btn-blick-mt-1\">changer l'adresse </a> #}
            </div>
            <div class=\"heading_s1\">
                <h4>Mode de livraison</h4>
                <div class=\"content\">
                    {{ carrier | replace({'[spr]': '<br>'}) | raw}}
                    {# <a href=\"{{ path('checkout')}}\" class=\"btn btn-fill-out btn-blick-mt-1\">changer livraison </a> #}
                </div>
            </div>
            {% if informations %}

            <div class=\"heading_s1\">
                <h4>Information additionnelle</h4>
                <div class=\"form-group mb-0\">
                    {{ informations}}
                </div>
            </div>

            {% endif %}


        </div>

        <div class=\"col-md-12\">
            <div class=\"order_review \">
                <div class=\"heading_s1\">
                    <h4>Votre commande</h4>
                </div>

                <div class=\"table-responsive order_table\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Produit</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for element in cart.products %}
                            <tr>
                                <td> {{element.product.name}}<span class=\"product-qty\"> X {{element.quantity}}</span>
                                </td>
                                <td>\$ {{element.product.price/100 }}</td>
                            </tr>
                            {% endfor %}
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>SubTotal HT</th>
                                <td class=\"product-subtotal\">{{cart.data.subTotalHT}} \$</td>
                            </tr>
                            <tr>
                                <th>Taxe</th>
                                <td class=\"product-subtotal\">{{cart.data.Taxe}} \$</td>
                            </tr>
                            {% if carrier is not null%}
                            <tr>

                                <th>livraison {{carrier.name}}</th>

                                <td class=\"product-subtotal\">{{carrier.price}} \$</td>

                            </tr>
                            <tr>
                                <th>Total</th>
                                <td class=\"product-subtotal\">{{cart.data.subTotalTTC + carrier.price/100}} \$</td>
                            </tr>
                            {% endif %}
                        </tfoot>
                    </table>
                </div>
                <div class=\"payment_method\">
                    <div class=\"heading_s1\">
                        <h4>Paiement</h4>
                    </div>
                    {% if carrier is not null%}
                    <a class=\"btn btn-fill-out btn-block\" id=\"checkout-button-payement\">valider la commande:
                        {{cart.data.subTotalTTC + carrier.price/100}} \$</a>
                    {% endif %}
                    
                </div>

            </div>
        </div>
    </div>

</div>

</div>
{% endblock %} {% block script %}
<style>
    .order_review {
        background-color: #f7f8fb;
        padding: 30px;
        width: 60%;
        margin-left: 40%;
    }
</style>

<script type=\"text/javascript\">
   // var stripe = Stripe(\"pk_test_WKH0LC8TYPJR7xG6q5cvwfjF00hbP92C5A\");
   var clestripepk = \"pk_test_WKH0LC8TYPJR7xG6q5cvwfjF00hbP92C5A\";
   
    var stripe = Stripe(clestripepk);

    var checkoutButton = document.getElementById(\"checkout-button-payement\");
    console.log(checkoutButton);
    checkoutButton.addEventListener(\"click\", function () {
        fetch(\"/commande/create-session/{{ reference }}\", {
            method: \"POST\"
        }).then(function (response) {
            return response.json();
        }).then(function (session) {
            if (session.error == 'order') {
                window.location.replace('{{ path('order') }}');
            } else {
                return stripe.redirectToCheckout({
                    sessionId: session.id
                });
            }

        }).then(function (result) { 
            if (result.error) {
                alert(result.error.message);
            }
        }).catch(function (error) {
            console.error(\"Error:\", error);
        });
    });
</script>
{% endblock %}
", "checkout/confirm.html.twig", "C:\\wamp64\\www\\Eco-ble-v2\\Eco-ble-v2\\templates\\checkout\\confirm.html.twig");
    }
}
