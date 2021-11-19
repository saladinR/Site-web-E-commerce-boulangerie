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

/* contact/index.html.twig */
class __TwigTemplate_4a808fc5efc6868c36259ba968f4221f3bcba2e844fd2150abf1870d1dc572e6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
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

        echo "Hello ContactController!";
        
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
        echo twig_include($this->env, $context, "partials/Title.html.twig", ["name" => "Contact  "]);
        echo "
<div class=\"section pb_70\">
\t<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-4 col-md-6\">
            \t<div class=\"contact_wrap contact_style3\">
                    <div class=\"contact_icon\">
                        <i class=\"linearicons-map2\"></i>
                    </div>
                    <div class=\"contact_text\">
                        <span>Address</span>
                        <p>237 Rue d'Alésia, 75014 Paris</p>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-4 col-md-6\">
            \t<div class=\"contact_wrap contact_style3\">
                    <div class=\"contact_icon\">
                        <i class=\"linearicons-envelope-open\"></i>
                    </div>
                    <div class=\"contact_text\">
                        <span>Email Address</span>
                        <a href=\"mailto:info@sitename.com\">contact@bledor.fr </a>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-4 col-md-6\">
            \t<div class=\"contact_wrap contact_style3\">
                    <div class=\"contact_icon\">
                        <i class=\"linearicons-tablet2\"></i>
                    </div>
                    <div class=\"contact_text\">
                        <span>Téléphone</span>
                        <p>(+33) 7 52 15 25 60</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class=\"section pt-0\">
\t<div class=\"container\">
    \t<div class=\"row\">
        \t<div class=\"col-lg-12\">
            \t<div class=\"heading_s1\">
                \t<h2>Nous contacter</h2>
                </div>
                <p class=\"leads\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                <div class=\"field_form\">
                    <form>
                        <div class=\"row\">
                            <div class=\"form-group col-md-6\">
                                <input required placeholder=\"Tapez votre nom *\" id=\"first-name\" class=\"form-control\" name=\"name\" type=\"text\">
                             </div>
                            <div class=\"form-group col-md-6\">
                                <input required placeholder=\"Tapez votre Email *\" id=\"email\" class=\"form-control\" name=\"email\" type=\"email\">
                            </div>
                            <div class=\"form-group col-md-6\">
                                <input required placeholder=\"Tapez votre numéro de téléphone *\" id=\"phone\" class=\"form-control\" name=\"phone\">
                            </div>
                            <div class=\"form-group col-md-6\">
                                <input placeholder=\"sujet *\" id=\"subject\" class=\"form-control\" name=\"subject\">
                            </div>
                            <div class=\"form-group col-md-12\">
                                <textarea required placeholder=\"Message *\" id=\"description\" class=\"form-control\" name=\"message\" rows=\"4\"></textarea>
                            </div>
                            <div class=\"col-md-12\">
                                <button type=\"submit\" title=\"Envoyer\" class=\"btn btn-fill-out\" name=\"submit\" value=\"Submit\">Envoyer</button>
                            </div>

                        </div>
                    </form>
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
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ContactController!{% endblock %}

{% block body %}
{{ include(\"partials/Title.html.twig\",{'name':'Contact  '}) }}
<div class=\"section pb_70\">
\t<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-4 col-md-6\">
            \t<div class=\"contact_wrap contact_style3\">
                    <div class=\"contact_icon\">
                        <i class=\"linearicons-map2\"></i>
                    </div>
                    <div class=\"contact_text\">
                        <span>Address</span>
                        <p>237 Rue d'Alésia, 75014 Paris</p>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-4 col-md-6\">
            \t<div class=\"contact_wrap contact_style3\">
                    <div class=\"contact_icon\">
                        <i class=\"linearicons-envelope-open\"></i>
                    </div>
                    <div class=\"contact_text\">
                        <span>Email Address</span>
                        <a href=\"mailto:info@sitename.com\">contact@bledor.fr </a>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-4 col-md-6\">
            \t<div class=\"contact_wrap contact_style3\">
                    <div class=\"contact_icon\">
                        <i class=\"linearicons-tablet2\"></i>
                    </div>
                    <div class=\"contact_text\">
                        <span>Téléphone</span>
                        <p>(+33) 7 52 15 25 60</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class=\"section pt-0\">
\t<div class=\"container\">
    \t<div class=\"row\">
        \t<div class=\"col-lg-12\">
            \t<div class=\"heading_s1\">
                \t<h2>Nous contacter</h2>
                </div>
                <p class=\"leads\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                <div class=\"field_form\">
                    <form>
                        <div class=\"row\">
                            <div class=\"form-group col-md-6\">
                                <input required placeholder=\"Tapez votre nom *\" id=\"first-name\" class=\"form-control\" name=\"name\" type=\"text\">
                             </div>
                            <div class=\"form-group col-md-6\">
                                <input required placeholder=\"Tapez votre Email *\" id=\"email\" class=\"form-control\" name=\"email\" type=\"email\">
                            </div>
                            <div class=\"form-group col-md-6\">
                                <input required placeholder=\"Tapez votre numéro de téléphone *\" id=\"phone\" class=\"form-control\" name=\"phone\">
                            </div>
                            <div class=\"form-group col-md-6\">
                                <input placeholder=\"sujet *\" id=\"subject\" class=\"form-control\" name=\"subject\">
                            </div>
                            <div class=\"form-group col-md-12\">
                                <textarea required placeholder=\"Message *\" id=\"description\" class=\"form-control\" name=\"message\" rows=\"4\"></textarea>
                            </div>
                            <div class=\"col-md-12\">
                                <button type=\"submit\" title=\"Envoyer\" class=\"btn btn-fill-out\" name=\"submit\" value=\"Submit\">Envoyer</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

{% endblock %}
", "contact/index.html.twig", "C:\\wamp64\\www\\Eco-ble-v2\\Eco-ble-v2\\templates\\contact\\index.html.twig");
    }
}
