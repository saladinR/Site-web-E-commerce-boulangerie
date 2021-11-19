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

/* security/login.html.twig */
class __TwigTemplate_105d9819ceee2a2618bdfabfe6d204ca291e8c24c418cac496af036d6caaca89 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        echo "Log in!";
        
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
        echo twig_include($this->env, $context, "partials/Title.html.twig", ["name" => "Login"]);
        echo "
    <div class=\"login_register_wrap section\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-xl-6 col-md-10\">
                    <div class=\"login_wrap\">
                        <div class=\"padding_eight_all bg-white\">
                            <div class=\"heading_s1\">
                                <h3>Login</h3>
                            </div>
                            <form method=\"post\">
                                ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17)) {
            // line 18
            echo "                                  <div class=\"mb-3\">
                                  You are logged in as ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "username", [], "any", false, false, false, 19), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                                  </div>
                               ";
        }
        // line 22
        echo "                            <div class=\"message-flash\">
                                ";
        // line 23
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 23, $this->source); })())) {
            // line 24
            echo "                                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 24, $this->source); })()), "messageKey", [], "any", false, false, false, 24), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 24, $this->source); })()), "messageData", [], "any", false, false, false, 24), "security"), "html", null, true);
            echo "</div>
                                ";
        }
        // line 26
        echo "                            </div>
                                <div class=\"form-group\">
                                   <label for=\"inputEmail\">Email</label>
                                   <input type=\"email\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                                </div>
                                <div class=\"form-group\">
                                   <label for=\"inputPassword\">Password</label>
                                   <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
                                </div>
                                    <input type=\"hidden\" name=\"_csrf_token\"
                                    value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                                     >
                                <div class=\"login_footer form-group\">
                                    <div class=\"chek-form\">
                                        <div class=\"custome-checkbox\">
                                            <input class=\"form-check-input\" type=\"checkbox\" name=\"checkbox\" id=\"exampleCheckbox1\" value=\"\">
                                            <label class=\"form-check-label\" for=\"exampleCheckbox1\"><span>Remember me</span></label>
                                        </div>
                                    </div>
                                    <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reset_password");
        echo "\">Forgot password?</a>
                                </div>
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-fill-out btn-block\" name=\"login\">Log in</button>
                                </div>
                            </form>
                            <div class=\"different_login\">
                                <span> or</span>
                            </div>
                            <ul class=\"btn-login list_none text-center\">
                                <li><a href=\"#\" class=\"btn btn-facebook\"><i class=\"ion-social-facebook\"></i>Facebook</a></li>
                                <li><a href=\"#\" class=\"btn btn-google\"><i class=\"ion-social-googleplus\"></i>Google</a></li>
                            </ul>
                            <div class=\"form-note text-center\">Don't Have an Account? <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Sign up now</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<form method=\"post\">


    ";
        // line 69
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69)) {
            // line 70
            echo "        <div class=\"mb-3\">
            You are logged in as ";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71), "username", [], "any", false, false, false, 71), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
        </div>
    ";
        }
        // line 74
        echo "

    >

    ";
        // line 88
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 88,  196 => 74,  188 => 71,  185 => 70,  183 => 69,  169 => 58,  153 => 45,  141 => 36,  131 => 29,  126 => 26,  120 => 24,  118 => 23,  115 => 22,  107 => 19,  104 => 18,  102 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block body %}
{{ include(\"partials/Title.html.twig\",{'name':'Login'}) }}
    <div class=\"login_register_wrap section\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-xl-6 col-md-10\">
                    <div class=\"login_wrap\">
                        <div class=\"padding_eight_all bg-white\">
                            <div class=\"heading_s1\">
                                <h3>Login</h3>
                            </div>
                            <form method=\"post\">
                                {% if app.user %}
                                  <div class=\"mb-3\">
                                  You are logged in as {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                                  </div>
                               {% endif %}
                            <div class=\"message-flash\">
                                {% if error %}
                                        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                {% endif %}
                            </div>
                                <div class=\"form-group\">
                                   <label for=\"inputEmail\">Email</label>
                                   <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                                </div>
                                <div class=\"form-group\">
                                   <label for=\"inputPassword\">Password</label>
                                   <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
                                </div>
                                    <input type=\"hidden\" name=\"_csrf_token\"
                                    value=\"{{ csrf_token('authenticate') }}\"
                                     >
                                <div class=\"login_footer form-group\">
                                    <div class=\"chek-form\">
                                        <div class=\"custome-checkbox\">
                                            <input class=\"form-check-input\" type=\"checkbox\" name=\"checkbox\" id=\"exampleCheckbox1\" value=\"\">
                                            <label class=\"form-check-label\" for=\"exampleCheckbox1\"><span>Remember me</span></label>
                                        </div>
                                    </div>
                                    <a href=\"{{path('app_reset_password')}}\">Forgot password?</a>
                                </div>
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-fill-out btn-block\" name=\"login\">Log in</button>
                                </div>
                            </form>
                            <div class=\"different_login\">
                                <span> or</span>
                            </div>
                            <ul class=\"btn-login list_none text-center\">
                                <li><a href=\"#\" class=\"btn btn-facebook\"><i class=\"ion-social-facebook\"></i>Facebook</a></li>
                                <li><a href=\"#\" class=\"btn btn-google\"><i class=\"ion-social-googleplus\"></i>Google</a></li>
                            </ul>
                            <div class=\"form-note text-center\">Don't Have an Account? <a href=\"{{path('app_register')}}\">Sign up now</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<form method=\"post\">


    {% if app.user %}
        <div class=\"mb-3\">
            You are logged in as {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
        </div>
    {% endif %}


    >

    {#
        Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
        See https://symfony.com/doc/current/security/remember_me.html

        <div class=\"checkbox mb-3\">
            <label>
                <input type=\"checkbox\" name=\"_remember_me\"> Remember me
            </label>
        </div>
    #}


{% endblock %}
", "security/login.html.twig", "C:\\wamp64\\www\\Eco-ble\\templates\\security\\login.html.twig");
    }
}
