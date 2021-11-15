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

/* homepage.html.twig */
class __TwigTemplate_61f3c597a535b908cd797c6a010ea9cf94b363ae43b00bbcfc5845c78f1d2178 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "homepage.html.twig", 1);
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

        $this->displayParentBlock("title", $context, $blocks);
        echo " THE GOOD ONE ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "                                                <!-- GESTION DES PACKAGES -->
<div class=\"example-wrapper\">
    <h1 class=\"display-3\">Gestion des PACKAGES</h1>

    <div class=\"wcontent clearfix\">

        <section class=\"featured-listing  \">
    
            <div class=\"listing-wrapper\">
                <div class=\"intro-text\">Ne soyez pas timide votre futur partenaire vous attends</div>
    
    
                <div class=\"hr\"></div>
                <div class=\"content-block4\">
                    <div class=\"content\">
                        <div class=\"top\"></div>
                        <div class=\"subtitle\"></div>
                                                
                                                <!-- ACTIVITES & QUIZ -->
                        
                        <h1>ACTIVITES & QUIZ</h1>
                        <a href=\"/packagebase\" class=\"packagebase\"> 
                            <span>PACKAGE de BASE</span>
    
                            <span class=\"package1\"></span>
                            <span class=\"package2\"></span>
                           
    
                        </a>
                        <div class=\"cboth\"></div>
                    </div>
                    <div class=\"bottom\"></div>
                </div>
               
                            </span>
    
                            <a class=\"more\" href=\"/pledge/Packages/Avenger-Titan-Starter-Pack\">more info</a>
                            <a class=\"holosmallbtn add-cart add-cart ty-js-add-to-cart\"
                                href=\"/pledge/Packages/Avenger-Titan-Starter-Pack\" data-sku=\"13318\"
                                data-tracking-infos=\"{&quot;id&quot;:&quot;SCP6-PP-AVENGER-TITAN-STARTER-EVERGREEN&quot;,&quot;name&quot;:&quot;Avenger Titan Starter Pack&quot;,&quot;brand&quot;:&quot;pledge&quot;,&quot;category&quot;:&quot;Package&quot;,&quot;price&quot;:&quot;59.15&quot;,&quot;dimension1&quot;:&quot;-1&quot;,&quot;stockLevel&quot;:&quot;high&quot;}\"
                                data-name=\"13318\">
                                <span class=\"holosmallbtn-top abs-overlay trans-02s js-label\">Add to cart</span>
                                <span class=\"holosmallbtn-bottom abs-overlay trans-02s\"></span>
                            </a>
                        </div>
                        <div class=\"customize-button-block customize-button-block--inactive\"></div>
                    </div>
                                                            <!-- PREMIER PACKAGES -->

                    <div class=\"product-item js-ecommerce-tracking-sku  huge trans-02s\">
                        <a href=\"/pledge/Packages/Mustang-Alpha-Starter-Pack\"><img
                                src=\"\"
                                class=\"trans-02s\"></a>
                        <div class=\"info clearfix trans-02s\">
                            <div class=\"title\">
                                Mustang Alpha Starter Pack<span>
                                    - Package </span>
                                <p class=\"excerpt\"> </p>
    
                            </div>
                            <div class=\"price \"> <strong class=\"final-price\" data-value=\"4914\" data-currency=\"EUR\">€49<span
                                        class=\"super\">.14 <span class=\"currency\">EUR</span></span></strong>
                                <div class=\"taxes js-taxes\">
                                    <div class=\"taxes-details trans-02s\">
                                        <div class=\"arrow\"></div>
                                        Tax Included: <br>
                                        <ul>
                                            <li>VAT 20%</li>
                                        </ul>
                                    </div>
                                </div>
                            </div> <span class=\"state h-stock-level--high\">
                                In stock
                            </span>
                                             
                            <a class=\"more\" href=\"/pledge/Packages/Mustang-Alpha-Starter-Pack\">more info</a>
                            <a class=\"holosmallbtn add-cart add-cart ty-js-add-to-cart\"
                                href=\"/pledge/Packages/Mustang-Alpha-Starter-Pack\" data-sku=\"3579\"
                                data-tracking-infos=\"{&quot;id&quot;:&quot;SCP6-PP-MUSTANG-SC-STARTER&quot;,&quot;name&quot;:&quot;Mustang Alpha Starter Pack&quot;,&quot;brand&quot;:&quot;pledge&quot;,&quot;category&quot;:&quot;Package&quot;,&quot;price&quot;:&quot;40.95&quot;,&quot;dimension1&quot;:&quot;-1&quot;,&quot;stockLevel&quot;:&quot;high&quot;}\"
                                data-name=\"3579\">
                                <span class=\"holosmallbtn-top abs-overlay trans-02s js-label\">Add to cart</span>
                                <span class=\"holosmallbtn-bottom abs-overlay trans-02s\"></span>
                            </a>
                        </div>
                        <div class=\"customize-button-block customize-button-block--inactive\"></div>
                    </div>
    
                </div>
            </div>
        </section>
    
    
    
</section>
    
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ parent() }} THE GOOD ONE {% endblock %}


{% block body %}
                                                <!-- GESTION DES PACKAGES -->
<div class=\"example-wrapper\">
    <h1 class=\"display-3\">Gestion des PACKAGES</h1>

    <div class=\"wcontent clearfix\">

        <section class=\"featured-listing  \">
    
            <div class=\"listing-wrapper\">
                <div class=\"intro-text\">Ne soyez pas timide votre futur partenaire vous attends</div>
    
    
                <div class=\"hr\"></div>
                <div class=\"content-block4\">
                    <div class=\"content\">
                        <div class=\"top\"></div>
                        <div class=\"subtitle\"></div>
                                                
                                                <!-- ACTIVITES & QUIZ -->
                        
                        <h1>ACTIVITES & QUIZ</h1>
                        <a href=\"/packagebase\" class=\"packagebase\"> 
                            <span>PACKAGE de BASE</span>
    
                            <span class=\"package1\"></span>
                            <span class=\"package2\"></span>
                           
    
                        </a>
                        <div class=\"cboth\"></div>
                    </div>
                    <div class=\"bottom\"></div>
                </div>
               
                            </span>
    
                            <a class=\"more\" href=\"/pledge/Packages/Avenger-Titan-Starter-Pack\">more info</a>
                            <a class=\"holosmallbtn add-cart add-cart ty-js-add-to-cart\"
                                href=\"/pledge/Packages/Avenger-Titan-Starter-Pack\" data-sku=\"13318\"
                                data-tracking-infos=\"{&quot;id&quot;:&quot;SCP6-PP-AVENGER-TITAN-STARTER-EVERGREEN&quot;,&quot;name&quot;:&quot;Avenger Titan Starter Pack&quot;,&quot;brand&quot;:&quot;pledge&quot;,&quot;category&quot;:&quot;Package&quot;,&quot;price&quot;:&quot;59.15&quot;,&quot;dimension1&quot;:&quot;-1&quot;,&quot;stockLevel&quot;:&quot;high&quot;}\"
                                data-name=\"13318\">
                                <span class=\"holosmallbtn-top abs-overlay trans-02s js-label\">Add to cart</span>
                                <span class=\"holosmallbtn-bottom abs-overlay trans-02s\"></span>
                            </a>
                        </div>
                        <div class=\"customize-button-block customize-button-block--inactive\"></div>
                    </div>
                                                            <!-- PREMIER PACKAGES -->

                    <div class=\"product-item js-ecommerce-tracking-sku  huge trans-02s\">
                        <a href=\"/pledge/Packages/Mustang-Alpha-Starter-Pack\"><img
                                src=\"\"
                                class=\"trans-02s\"></a>
                        <div class=\"info clearfix trans-02s\">
                            <div class=\"title\">
                                Mustang Alpha Starter Pack<span>
                                    - Package </span>
                                <p class=\"excerpt\"> </p>
    
                            </div>
                            <div class=\"price \"> <strong class=\"final-price\" data-value=\"4914\" data-currency=\"EUR\">€49<span
                                        class=\"super\">.14 <span class=\"currency\">EUR</span></span></strong>
                                <div class=\"taxes js-taxes\">
                                    <div class=\"taxes-details trans-02s\">
                                        <div class=\"arrow\"></div>
                                        Tax Included: <br>
                                        <ul>
                                            <li>VAT 20%</li>
                                        </ul>
                                    </div>
                                </div>
                            </div> <span class=\"state h-stock-level--high\">
                                In stock
                            </span>
                                             
                            <a class=\"more\" href=\"/pledge/Packages/Mustang-Alpha-Starter-Pack\">more info</a>
                            <a class=\"holosmallbtn add-cart add-cart ty-js-add-to-cart\"
                                href=\"/pledge/Packages/Mustang-Alpha-Starter-Pack\" data-sku=\"3579\"
                                data-tracking-infos=\"{&quot;id&quot;:&quot;SCP6-PP-MUSTANG-SC-STARTER&quot;,&quot;name&quot;:&quot;Mustang Alpha Starter Pack&quot;,&quot;brand&quot;:&quot;pledge&quot;,&quot;category&quot;:&quot;Package&quot;,&quot;price&quot;:&quot;40.95&quot;,&quot;dimension1&quot;:&quot;-1&quot;,&quot;stockLevel&quot;:&quot;high&quot;}\"
                                data-name=\"3579\">
                                <span class=\"holosmallbtn-top abs-overlay trans-02s js-label\">Add to cart</span>
                                <span class=\"holosmallbtn-bottom abs-overlay trans-02s\"></span>
                            </a>
                        </div>
                        <div class=\"customize-button-block customize-button-block--inactive\"></div>
                    </div>
    
                </div>
            </div>
        </section>
    
    
    
</section>
    
    </div>
</div>
{% endblock %}
", "homepage.html.twig", "/var/www/html/Atlantis/exercice/ProjetProTGO/templates/homepage.html.twig");
    }
}
