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

/* base.html.twig */
class __TwigTemplate_0658daca68c3fc78bca0871d2fe8edf801a14761037cb32cc5ce2748129d1c87 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head_css' => [$this, 'block_head_css'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
            'head_js' => [$this, 'block_head_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\"></html>

    <head>
        <meta charset=\"UTF-8\">
        <!-- Bootstrap CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
        <link rel=\"shortcut icon\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css\" type=\"image/x-icon\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
        ";
        // line 11
        echo "        ";
        $this->displayBlock('head_css', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 17
        echo "


    </head>
    <body>
    <div class=\"body\">
        <div class=\"bg\">
            <div class=\"html\">
        
        <div class=\"example-wrapper\">
            <h1 class=\"display-4\">Bienvenue sur THE GOOD ONE!</h1>
        
            <div class=\"login_form_wrapper\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-8 col-md-offset-2\">

                                                        <!-- LOGIN FB : GOOGLE -->
                        
                            <div class=\"login_wrapper\">
                                <div class=\"row\">
                                    <div class=\"col-lg-6 col-md-6 col-xs-12 col-sm-6\"> <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\"
                                            class=\"btn btn-primary facebook\"a>
                                            <span>Connecte toi avec Facebook</span> <i class=\"fa fa-facebook\"></i> </a> </div>
                                    <div class=\"col-lg-6 col-md-6 col-xs-12 col-sm-6\"> <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\"
                                            class=\"btn btn-primary google-plus\"> Connecte toi avec Google <i
                                                class=\"fa fa-google-plus\"></i>
                                        </a> </div>
                                </div>
                                <h2>or</h2>
                                <div class=\"formsix-pos\">
                                    <div class=\"form-group i-email\"> <input type=\"email\" class=\"form-control\" required=\"\"
                                            id=\"email2\" placeholder=\"Email Address *\"> </div>
                                </div>
                                <div class=\"formsix-e\">
                                    <div class=\"form-group i-password\"> <input type=\"password\" class=\"form-control\" required=\"\"
                                            id=\"password2\" placeholder=\"Password *\"> </div>
                                </div>
                                <div class=\"login_remember_box\"> <label class=\"control control--checkbox\">Remember me <input
                                            type=\"checkbox\"> <span class=\"control__indicator\"></span> </label> <a href=\"#\"
                                        class=\"forget_password\"> Forgot Password </a> </div>
                                <div class=\"login_btn_wrapper\"> <a href=\"#\" class=\"btn btn-primary login_btn\"> Login </a> </div>
                                <div class=\"login_message\">
                                    <p>Don’t have an account ? <a href=\"#\"> Sign up </a> </p>
                                </div>
                            </div> <!-- /.login_wrapper-->
                        </div>
                    </div>
                </div>
           </div>  </div>
        </div>
       </div>
            <ul>
                <div id=\"right\">
                   
                    <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_add");
        echo "\" class=\"btn btn-danger\">Poser une question</a>
                
                </div>
                </nav>
                
                <hr>
                
                ";
        // line 80
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "flashes", [], "any", false, false, false, 80));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 81
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 82
                echo "                <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
                    ";
                // line 83
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "            </ul>
        </div>
        ";
        // line 89
        $this->displayBlock('body', $context, $blocks);
        // line 90
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 93
        echo "        ";
        $this->displayBlock('head_js', $context, $blocks);
        // line 96
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_head_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_css"));

        // line 12
        echo "        <!-- Copy CSS from https://getbootstrap.com/docs/4.4/getting-started/introduction/#css -->
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "THE GOOD ONE";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 89
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
        echo "        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script> 
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 93
    public function block_head_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_js"));

        // line 94
        echo "        <!-- Copy JavaScript from https://getbootstrap.com/docs/4.4/getting-started/introduction/#js -->
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 94,  298 => 93,  287 => 91,  277 => 90,  259 => 89,  240 => 15,  222 => 14,  211 => 12,  201 => 11,  189 => 96,  186 => 93,  183 => 90,  181 => 89,  177 => 87,  171 => 86,  162 => 83,  157 => 82,  152 => 81,  147 => 80,  137 => 72,  103 => 41,  97 => 38,  74 => 17,  69 => 15,  66 => 14,  63 => 11,  59 => 9,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\"></html>

    <head>
        <meta charset=\"UTF-8\">
        <!-- Bootstrap CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
        <link rel=\"shortcut icon\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css\" type=\"image/x-icon\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/app.css') }}\">
        {# beware that the blocks in your template may be named different #}
        {% block head_css %}
        <!-- Copy CSS from https://getbootstrap.com/docs/4.4/getting-started/introduction/#css -->
        {% endblock %}
        {% block stylesheets %}{% endblock %}
        <title>{% block title %}THE GOOD ONE{% endblock %}</title>
        {# templates/base.html.twig #}



    </head>
    <body>
    <div class=\"body\">
        <div class=\"bg\">
            <div class=\"html\">
        
        <div class=\"example-wrapper\">
            <h1 class=\"display-4\">Bienvenue sur THE GOOD ONE!</h1>
        
            <div class=\"login_form_wrapper\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-8 col-md-offset-2\">

                                                        <!-- LOGIN FB : GOOGLE -->
                        
                            <div class=\"login_wrapper\">
                                <div class=\"row\">
                                    <div class=\"col-lg-6 col-md-6 col-xs-12 col-sm-6\"> <a href=\"{{ path('login') }}\"
                                            class=\"btn btn-primary facebook\"a>
                                            <span>Connecte toi avec Facebook</span> <i class=\"fa fa-facebook\"></i> </a> </div>
                                    <div class=\"col-lg-6 col-md-6 col-xs-12 col-sm-6\"> <a href=\"{{ path('login') }}\"
                                            class=\"btn btn-primary google-plus\"> Connecte toi avec Google <i
                                                class=\"fa fa-google-plus\"></i>
                                        </a> </div>
                                </div>
                                <h2>or</h2>
                                <div class=\"formsix-pos\">
                                    <div class=\"form-group i-email\"> <input type=\"email\" class=\"form-control\" required=\"\"
                                            id=\"email2\" placeholder=\"Email Address *\"> </div>
                                </div>
                                <div class=\"formsix-e\">
                                    <div class=\"form-group i-password\"> <input type=\"password\" class=\"form-control\" required=\"\"
                                            id=\"password2\" placeholder=\"Password *\"> </div>
                                </div>
                                <div class=\"login_remember_box\"> <label class=\"control control--checkbox\">Remember me <input
                                            type=\"checkbox\"> <span class=\"control__indicator\"></span> </label> <a href=\"#\"
                                        class=\"forget_password\"> Forgot Password </a> </div>
                                <div class=\"login_btn_wrapper\"> <a href=\"#\" class=\"btn btn-primary login_btn\"> Login </a> </div>
                                <div class=\"login_message\">
                                    <p>Don’t have an account ? <a href=\"#\"> Sign up </a> </p>
                                </div>
                            </div> <!-- /.login_wrapper-->
                        </div>
                    </div>
                </div>
           </div>  </div>
        </div>
       </div>
            <ul>
                <div id=\"right\">
                   
                    <a href=\"{{ path('question_add') }}\" class=\"btn btn-danger\">Poser une question</a>
                
                </div>
                </nav>
                
                <hr>
                
                {# display every flash message available #}
                {% for label, messages in app.flashes %}
                {% for message in messages %}
                <div class=\"alert alert-{{ label }}\">
                    {{ message }}
                </div>
                {% endfor %}
                {% endfor %}
            </ul>
        </div>
        {% block body %}{% endblock %}
        {% block javascripts %}
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script> 
        {% endblock %}
        {% block head_js %}
        <!-- Copy JavaScript from https://getbootstrap.com/docs/4.4/getting-started/introduction/#js -->
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/Atlantis/exercice/Projet-Solo-THE-GOOD-ONE-master/templates/base.html.twig");
    }
}
