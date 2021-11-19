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

/* account/index.html.twig */
class __TwigTemplate_84bbb1f4fcf1f3d4e43f102cccced6663e11c56cba1fc7771fb74b911c2ce851 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/index.html.twig", 1);
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

        echo "Account";
        
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
        echo twig_include($this->env, $context, "partials/Title.html.twig", ["name" => "Your Account"]);
        echo "
<div class=\"section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-4\">
                <div class=\"dashboard_menu\">
                    <ul class=\"nav nav-tabs flex-column\" role=\"tablist\">
                      <li class=\"nav-item\">
                        <a class=\"nav-link active\" id=\"dashboard-tab\" data-toggle=\"tab\" href=\"#dashboard\" role=\"tab\" aria-controls=\"dashboard\" aria-selected=\"false\"><i class=\"ti-layout-grid2\"></i>Dashboard</a>
                      </li>
                      <li class=\"nav-item\">
                        <a class=\"nav-link\" id=\"orders-tab\" data-toggle=\"tab\" href=\"#orders\" role=\"tab\" aria-controls=\"orders\" aria-selected=\"false\"><i class=\"ti-shopping-cart-full\"></i>Orders</a>
                      </li>
                      <li class=\"nav-item\">
                        <a class=\"nav-link\" id=\"address-tab\" data-toggle=\"tab\" href=\"#address\" role=\"tab\" aria-controls=\"address\" aria-selected=\"true\"><i class=\"ti-location-pin\"></i>My Address</a>
                      </li>
                      <li class=\"nav-item\">
                        <a class=\"nav-link\" id=\"account-detail-tab\" data-toggle=\"tab\" href=\"#account-detail\" role=\"tab\" aria-controls=\"account-detail\" aria-selected=\"true\"><i class=\"ti-id-badge\"></i>Account details</a>
                      </li>
                      <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"><i class=\"ti-lock\"></i>Logout</a>
                      </li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-9 col-md-8\">
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "flashes", [0 => "address_message"], "method", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 33
            echo "                     <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\"> ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                          </button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "


                <div class=\"tab-content dashboard_content\">
                      <div class=\"tab-pane fade active show\" id=\"dashboard\" role=\"tabpanel\" aria-labelledby=\"dashboard-tab\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h3>HELLO ";
        // line 46
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "firstname", [], "any", false, false, false, 46)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "lastname", [], "any", false, false, false, 46)), "html", null, true);
        echo "</h3>
                            </div>
                            <div class=\"card-body\">

                                <p>From your account dashboard. you can easily check &amp; view your <a href=\"javascript:void(0);\" onclick=\"\$('#orders-tab').trigger('click')\">recent orders</a>, manage your <a href=\"javascript:void(0);\" onclick=\"\$('#address-tab').trigger('click')\">shipping and billing addresses</a> and <a href=\"javascript:void(0);\" onclick=\"\$('#account-detail-tab').trigger('click')\">edit your password and account details.</a></p>
                            </div>
                        </div>
                      </div>
                      <div class=\"tab-pane fade\" id=\"orders\" role=\"tabpanel\" aria-labelledby=\"orders-tab\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h3>Orders</h3>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"table-responsive\">
                                    <table class=\"table\">
                                        <thead>
                                            <tr>
                                                <th>Order</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#1234</td>
                                                <td>March 15, 2020</td>
                                                <td>Processing</td>
                                                <td>\$78.00 for 1 item</td>
                                                <td><a href=\"#\" class=\"btn btn-fill-out btn-sm\">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>#2366</td>
                                                <td>June 20, 2020</td>
                                                <td>Completed</td>
                                                <td>\$81.00 for 1 item</td>
                                                <td><a href=\"#\" class=\"btn btn-fill-out btn-sm\">View</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                      </div>
                    <div class=\"tab-pane fade\" id=\"address\" role=\"tabpanel\" aria-labelledby=\"address-tab\">

                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("address_new");
        echo "\" class=\"btn btn-fill-out mb-3\">Add new address</a>
                            </div>
                        </div>
                        <div class=\"row\">
                           ";
        // line 100
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "user", [], "any", false, false, false, 100), "addresses", [], "any", false, false, false, 100)) {
            // line 101
            echo "                               ";
            $context["index"] = 0;
            // line 102
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "user", [], "any", false, false, false, 102), "addresses", [], "any", false, false, false, 102));
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
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                echo " 
                                    ";
                // line 103
                $context["index"] = ((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 103, $this->source); })()) + 1);
                echo " 
                                 <div class=\"col-lg-6\">
                                        <div class=\"card mb-3 mb-lg-0\">
                                            <div class=\"card-header\">
                                                <h3> Your Address ";
                // line 107
                echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 107, $this->source); })()), "html", null, true);
                echo "</h3>
                                            </div>
                                            <div class=\"card-body\">
                                                <address> ";
                // line 110
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "fullname", [], "any", false, false, false, 110), "html", null, true);
                echo "<br>
                                                    ";
                // line 111
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "address", [], "any", false, false, false, 111), "html", null, true);
                echo " <br>
                                                  ";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "complement", [], "any", false, false, false, 112), "html", null, true);
                echo " <br>
                                                    ";
                // line 113
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 113), "html", null, true);
                echo " <br>
                                                    ";
                // line 114
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "codepostal", [], "any", false, false, false, 114), "html", null, true);
                echo "<br>
                                                    ";
                // line 115
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 115), "html", null, true);
                echo "

                                                </address>
                                                <div class=\"btn-group\">
                                                    <a href=\"";
                // line 119
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("address_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 119)]), "html", null, true);
                echo "\" class=\"btn btn-success\">Edit</a>
                                                    ";
                // line 120
                echo twig_include($this->env, $context, "address/_delete_form.html.twig");
                echo "

                                                </div>

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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "                           ";
        } else {
            // line 129
            echo "                                <p>you don't have addresse</p>
                           ";
        }
        // line 131
        echo "
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"account-detail\" role=\"tabpanel\" aria-labelledby=\"account-detail-tab\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h3>Account Details</h3>
                            </div>
                            <div class=\"card-body\">
                                <p>Already have an account? <a href=\"#\">Log in instead!</a></p>
                                <form method=\"post\" name=\"enq\">
                                    <div class=\"row\">
                                        <div class=\"form-group col-md-6\">
                                            <label>First Name <span class=\"required\">*</span></label>
                                            <input required=\"\" value=\"";
        // line 145
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 145, $this->source); })()), "user", [], "any", false, false, false, 145), "firstname", [], "any", false, false, false, 145), "html", null, true);
        echo "\" class=\"form-control\" name=\"name\" type=\"text\">
                                         </div>
                                         <div class=\"form-group col-md-6\">
                                            <label>Last Name <span class=\"required\">*</span></label>
                                            <input required=\"\" value=\"";
        // line 149
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 149, $this->source); })()), "user", [], "any", false, false, false, 149), "lastname", [], "any", false, false, false, 149), "html", null, true);
        echo "\" class=\"form-control\" name=\"phone\">
                                        </div>
                                        <div class=\"form-group col-md-12\">
                                            <label>Display Name <span class=\"required\">*</span></label>
                                            <input required=\"\" class=\"form-control\" name=\"dname\" type=\"text\">
                                        </div>
                                        <div class=\"form-group col-md-12\">
                                            <label>Email Address <span class=\"required\">*</span></label>
                                            <input required=\"\" value=\"";
        // line 157
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 157, $this->source); })()), "user", [], "any", false, false, false, 157), "email", [], "any", false, false, false, 157), "html", null, true);
        echo "\" class=\"form-control\" name=\"email\" type=\"email\">
                                        </div>
                                        <div class=\"form-group col-md-12\">
                                            <label>Current Password <span class=\"required\">*</span></label>
                                            <input required=\"\" class=\"form-control\" name=\"password\" type=\"password\">
                                        </div>
                                        <div class=\"form-group col-md-12\">
                                            <label>New Password <span class=\"required\">*</span></label>
                                            <input required=\"\" class=\"form-control\" name=\"npassword\" type=\"password\">
                                        </div>
                                        <div class=\"form-group col-md-12\">
                                            <label>Confirm Password <span class=\"required\">*</span></label>
                                            <input required=\"\" class=\"form-control\" name=\"cpassword\" type=\"password\">
                                        </div>
                                        <div class=\"col-md-12\">
                                            <button type=\"submit\" class=\"btn btn-fill-out\" name=\"submit\" value=\"Submit\">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
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
        return "account/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 157,  330 => 149,  323 => 145,  307 => 131,  303 => 129,  300 => 128,  278 => 120,  274 => 119,  267 => 115,  263 => 114,  259 => 113,  255 => 112,  251 => 111,  247 => 110,  241 => 107,  234 => 103,  214 => 102,  211 => 101,  209 => 100,  202 => 96,  147 => 46,  138 => 39,  125 => 33,  121 => 32,  112 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Account{% endblock %}

{% block body %}
 {{ include(\"partials/Title.html.twig\",{'name':'Your Account'}) }}
<div class=\"section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-4\">
                <div class=\"dashboard_menu\">
                    <ul class=\"nav nav-tabs flex-column\" role=\"tablist\">
                      <li class=\"nav-item\">
                        <a class=\"nav-link active\" id=\"dashboard-tab\" data-toggle=\"tab\" href=\"#dashboard\" role=\"tab\" aria-controls=\"dashboard\" aria-selected=\"false\"><i class=\"ti-layout-grid2\"></i>Dashboard</a>
                      </li>
                      <li class=\"nav-item\">
                        <a class=\"nav-link\" id=\"orders-tab\" data-toggle=\"tab\" href=\"#orders\" role=\"tab\" aria-controls=\"orders\" aria-selected=\"false\"><i class=\"ti-shopping-cart-full\"></i>Orders</a>
                      </li>
                      <li class=\"nav-item\">
                        <a class=\"nav-link\" id=\"address-tab\" data-toggle=\"tab\" href=\"#address\" role=\"tab\" aria-controls=\"address\" aria-selected=\"true\"><i class=\"ti-location-pin\"></i>My Address</a>
                      </li>
                      <li class=\"nav-item\">
                        <a class=\"nav-link\" id=\"account-detail-tab\" data-toggle=\"tab\" href=\"#account-detail\" role=\"tab\" aria-controls=\"account-detail\" aria-selected=\"true\"><i class=\"ti-id-badge\"></i>Account details</a>
                      </li>
                      <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_logout')}}\"><i class=\"ti-lock\"></i>Logout</a>
                      </li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-9 col-md-8\">
                {% for message in app.flashes('address_message') %}
                     <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\"> {{ message }}
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                          </button>
                    </div>
                {% endfor %}



                <div class=\"tab-content dashboard_content\">
                      <div class=\"tab-pane fade active show\" id=\"dashboard\" role=\"tabpanel\" aria-labelledby=\"dashboard-tab\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h3>HELLO {{app.user.firstname | upper}} {{app.user.lastname | upper }}</h3>
                            </div>
                            <div class=\"card-body\">

                                <p>From your account dashboard. you can easily check &amp; view your <a href=\"javascript:void(0);\" onclick=\"\$('#orders-tab').trigger('click')\">recent orders</a>, manage your <a href=\"javascript:void(0);\" onclick=\"\$('#address-tab').trigger('click')\">shipping and billing addresses</a> and <a href=\"javascript:void(0);\" onclick=\"\$('#account-detail-tab').trigger('click')\">edit your password and account details.</a></p>
                            </div>
                        </div>
                      </div>
                      <div class=\"tab-pane fade\" id=\"orders\" role=\"tabpanel\" aria-labelledby=\"orders-tab\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h3>Orders</h3>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"table-responsive\">
                                    <table class=\"table\">
                                        <thead>
                                            <tr>
                                                <th>Order</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#1234</td>
                                                <td>March 15, 2020</td>
                                                <td>Processing</td>
                                                <td>\$78.00 for 1 item</td>
                                                <td><a href=\"#\" class=\"btn btn-fill-out btn-sm\">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>#2366</td>
                                                <td>June 20, 2020</td>
                                                <td>Completed</td>
                                                <td>\$81.00 for 1 item</td>
                                                <td><a href=\"#\" class=\"btn btn-fill-out btn-sm\">View</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                      </div>
                    <div class=\"tab-pane fade\" id=\"address\" role=\"tabpanel\" aria-labelledby=\"address-tab\">

                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <a href=\"{{path('address_new')}}\" class=\"btn btn-fill-out mb-3\">Add new address</a>
                            </div>
                        </div>
                        <div class=\"row\">
                           {% if app.user.addresses %}
                               {% set index = 0 %}
                                {% for address in app.user.addresses %} 
                                    {% set index = index + 1 %} 
                                 <div class=\"col-lg-6\">
                                        <div class=\"card mb-3 mb-lg-0\">
                                            <div class=\"card-header\">
                                                <h3> Your Address {{index}}</h3>
                                            </div>
                                            <div class=\"card-body\">
                                                <address> {{address.fullname}}<br>
                                                    {{address.address}} <br>
                                                  {{address.complement}} <br>
                                                    {{address.city}} <br>
                                                    {{address.codepostal}}<br>
                                                    {{address.country}}

                                                </address>
                                                <div class=\"btn-group\">
                                                    <a href=\"{{path('address_edit',{'id':address.id})}}\" class=\"btn btn-success\">Edit</a>
                                                    {{include('address/_delete_form.html.twig')}}

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}
                           {% else %}
                                <p>you don't have addresse</p>
                           {% endif %}

                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"account-detail\" role=\"tabpanel\" aria-labelledby=\"account-detail-tab\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h3>Account Details</h3>
                            </div>
                            <div class=\"card-body\">
                                <p>Already have an account? <a href=\"#\">Log in instead!</a></p>
                                <form method=\"post\" name=\"enq\">
                                    <div class=\"row\">
                                        <div class=\"form-group col-md-6\">
                                            <label>First Name <span class=\"required\">*</span></label>
                                            <input required=\"\" value=\"{{ app.user.firstname }}\" class=\"form-control\" name=\"name\" type=\"text\">
                                         </div>
                                         <div class=\"form-group col-md-6\">
                                            <label>Last Name <span class=\"required\">*</span></label>
                                            <input required=\"\" value=\"{{ app.user.lastname }}\" class=\"form-control\" name=\"phone\">
                                        </div>
                                        <div class=\"form-group col-md-12\">
                                            <label>Display Name <span class=\"required\">*</span></label>
                                            <input required=\"\" class=\"form-control\" name=\"dname\" type=\"text\">
                                        </div>
                                        <div class=\"form-group col-md-12\">
                                            <label>Email Address <span class=\"required\">*</span></label>
                                            <input required=\"\" value=\"{{ app.user.email }}\" class=\"form-control\" name=\"email\" type=\"email\">
                                        </div>
                                        <div class=\"form-group col-md-12\">
                                            <label>Current Password <span class=\"required\">*</span></label>
                                            <input required=\"\" class=\"form-control\" name=\"password\" type=\"password\">
                                        </div>
                                        <div class=\"form-group col-md-12\">
                                            <label>New Password <span class=\"required\">*</span></label>
                                            <input required=\"\" class=\"form-control\" name=\"npassword\" type=\"password\">
                                        </div>
                                        <div class=\"form-group col-md-12\">
                                            <label>Confirm Password <span class=\"required\">*</span></label>
                                            <input required=\"\" class=\"form-control\" name=\"cpassword\" type=\"password\">
                                        </div>
                                        <div class=\"col-md-12\">
                                            <button type=\"submit\" class=\"btn btn-fill-out\" name=\"submit\" value=\"Submit\">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}
", "account/index.html.twig", "C:\\wamp64\\www\\Eco-ble\\templates\\account\\index.html.twig");
    }
}
