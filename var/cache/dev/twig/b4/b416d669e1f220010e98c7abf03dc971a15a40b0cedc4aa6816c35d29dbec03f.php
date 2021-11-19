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

/* partials/Footer.html.twig */
class __TwigTemplate_eeb51febd8f3c2b0d6d00f66196ecfce566437172db1bcb55d92b806fd019592 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/Footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/Footer.html.twig"));

        // line 1
        echo "<div class=\"section bg_default small_pt small_pb\">
    <div class=\"container\">\t
        <div class=\"row align-items-center\">\t
            <div class=\"col-md-6\">
                <div class=\"heading_s1 mb-md-0 heading_light\">
                    <h3> RECEVOIR DES COMMUNICATIONS COMMERCIALES PERSONNALISÉES DE NOTRE PART</h3>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"newsletter_form\">
                    <form>
                        <input type=\"text\" required=\"\" class=\"form-control rounded-0\" placeholder=\"Enter votre Email\">
                        <button type=\"submit\" class=\"btn btn-dark rounded-0\" name=\"submit\" value=\"Submit\">S'inscrire</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class=\"footer_dark\" style=\"background:black\">
    <div class=\"footer_top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6 col-sm-12\">
                    <div class=\"widget\">
                        <div class=\"footer_logo\">
                            <a href=\"#\"><img src=\"/assets/images/BLE_DOR.png\" alt=\"logo\"/></a>
                        </div>
                        <p>Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.</p>
                    </div>
                    <div class=\"widget\">
                        <ul class=\"social_icons social_white\">
                            <li><a href=\"#\"><i class=\"ion-social-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"ion-social-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"ion-social-googleplus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"ion-social-youtube-outline\"></i></a></li>
                            <li><a href=\"#\"><i class=\"ion-social-instagram-outline\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-3 col-sm-6\">
                    <div class=\"widget\">
                        
                        <ul class=\"widget_links\">
                            
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-3 col-sm-6\">
                    <div class=\"widget\">
                        <h6 class=\"widget_title\">Catégorie</h6>
                        <ul class=\"widget_links\">
                            <li><a href=\"#\">Baguettes</a></li>
                            <li><a href=\"#\">Gateaux</a></li>
                            <li><a href=\"#\">Sandwich</a></li>
                            <li><a href=\"#\">Meilleur produits</a></li>
                            <li><a href=\"#\">Nouveau produit</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-6 col-sm-6\">
                    <div class=\"widget\">
                        <h6 class=\"widget_title\">Mon compte</h6>
                        <ul class=\"widget_links\">
                            <li><a href=\"#\">Mon compte</a></li>
                            <li><a href=\"#\">Réduction</a></li>
                            <li><a href=\"#\">Retour</a></li>

                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-4 col-sm-6\">
                    <div class=\"widget\">
                        <h6 class=\"widget_title\">Coordonnées</h6>
                        <ul class=\"contact_info contact_info_light\">
                            <li>
                                <i class=\"ti-location-pin\"></i>
                                <p> 237 Rue d'Alésia, 75014 Paris</p>
                            </li>
                            <li>
                                <i class=\"ti-email\"></i>
                                <a href=\"mailto:contact@espero-soft.com\">contact@bledor.com</a>
                            </li>
                            <li>
                                <i class=\"ti-mobile\"></i>
                                <p>+ 33 7 52 15 25 60</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"bottom_footer border-top-tran\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <p class=\"mb-md-0 text-center text-md-left\">© 2021 Tous les droits sont réservés</p>
                </div>
                <div class=\"col-md-6\">
                    <ul class=\"footer_payment text-center text-lg-right\">
                        <li><a href=\"#\"><img src=\"assets/images/visa.png\" alt=\"visa\"></a></li>
                        <li><a href=\"#\"><img src=\"assets/images/discover.png\" alt=\"discover\"></a></li>
                        <li><a href=\"#\"><img src=\"assets/images/master_card.png\" alt=\"master_card\"></a></li>
                        <li><a href=\"#\"><img src=\"assets/images/paypal.png\" alt=\"paypal\"></a></li>
                        <li><a href=\"#\"><img src=\"assets/images/amarican_express.png\" alt=\"amarican_express\"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<a href=\"#\" class=\"scrollup\" style=\"display: none;\"><i class=\"ion-ios-arrow-up\"></i></a> 
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/Footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"section bg_default small_pt small_pb\">
    <div class=\"container\">\t
        <div class=\"row align-items-center\">\t
            <div class=\"col-md-6\">
                <div class=\"heading_s1 mb-md-0 heading_light\">
                    <h3> RECEVOIR DES COMMUNICATIONS COMMERCIALES PERSONNALISÉES DE NOTRE PART</h3>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"newsletter_form\">
                    <form>
                        <input type=\"text\" required=\"\" class=\"form-control rounded-0\" placeholder=\"Enter votre Email\">
                        <button type=\"submit\" class=\"btn btn-dark rounded-0\" name=\"submit\" value=\"Submit\">S'inscrire</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class=\"footer_dark\" style=\"background:black\">
    <div class=\"footer_top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6 col-sm-12\">
                    <div class=\"widget\">
                        <div class=\"footer_logo\">
                            <a href=\"#\"><img src=\"/assets/images/BLE_DOR.png\" alt=\"logo\"/></a>
                        </div>
                        <p>Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.</p>
                    </div>
                    <div class=\"widget\">
                        <ul class=\"social_icons social_white\">
                            <li><a href=\"#\"><i class=\"ion-social-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"ion-social-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"ion-social-googleplus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"ion-social-youtube-outline\"></i></a></li>
                            <li><a href=\"#\"><i class=\"ion-social-instagram-outline\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-3 col-sm-6\">
                    <div class=\"widget\">
                        
                        <ul class=\"widget_links\">
                            
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-3 col-sm-6\">
                    <div class=\"widget\">
                        <h6 class=\"widget_title\">Catégorie</h6>
                        <ul class=\"widget_links\">
                            <li><a href=\"#\">Baguettes</a></li>
                            <li><a href=\"#\">Gateaux</a></li>
                            <li><a href=\"#\">Sandwich</a></li>
                            <li><a href=\"#\">Meilleur produits</a></li>
                            <li><a href=\"#\">Nouveau produit</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-6 col-sm-6\">
                    <div class=\"widget\">
                        <h6 class=\"widget_title\">Mon compte</h6>
                        <ul class=\"widget_links\">
                            <li><a href=\"#\">Mon compte</a></li>
                            <li><a href=\"#\">Réduction</a></li>
                            <li><a href=\"#\">Retour</a></li>

                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-4 col-sm-6\">
                    <div class=\"widget\">
                        <h6 class=\"widget_title\">Coordonnées</h6>
                        <ul class=\"contact_info contact_info_light\">
                            <li>
                                <i class=\"ti-location-pin\"></i>
                                <p> 237 Rue d'Alésia, 75014 Paris</p>
                            </li>
                            <li>
                                <i class=\"ti-email\"></i>
                                <a href=\"mailto:contact@espero-soft.com\">contact@bledor.com</a>
                            </li>
                            <li>
                                <i class=\"ti-mobile\"></i>
                                <p>+ 33 7 52 15 25 60</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"bottom_footer border-top-tran\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <p class=\"mb-md-0 text-center text-md-left\">© 2021 Tous les droits sont réservés</p>
                </div>
                <div class=\"col-md-6\">
                    <ul class=\"footer_payment text-center text-lg-right\">
                        <li><a href=\"#\"><img src=\"assets/images/visa.png\" alt=\"visa\"></a></li>
                        <li><a href=\"#\"><img src=\"assets/images/discover.png\" alt=\"discover\"></a></li>
                        <li><a href=\"#\"><img src=\"assets/images/master_card.png\" alt=\"master_card\"></a></li>
                        <li><a href=\"#\"><img src=\"assets/images/paypal.png\" alt=\"paypal\"></a></li>
                        <li><a href=\"#\"><img src=\"assets/images/amarican_express.png\" alt=\"amarican_express\"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<a href=\"#\" class=\"scrollup\" style=\"display: none;\"><i class=\"ion-ios-arrow-up\"></i></a> 
", "partials/Footer.html.twig", "C:\\wamp64\\www\\Eco-ble-v2\\Eco-ble-v2\\templates\\partials\\Footer.html.twig");
    }
}
