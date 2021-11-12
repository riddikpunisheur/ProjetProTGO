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

/* question/_detail.html.twig */
class __TwigTemplate_4dae7c54397823597343da80218a77527e57f9f6ec87b1e3c8c61590a95e5c5b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/_detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/_detail.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $context["questionClass"] = ((twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 10, $this->source); })()), "isblocked", [], "any", false, false, false, 10)) ? ("blocked") : (""));
        // line 11
        echo "
<div class=\"question-container ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["questionClass"]) || array_key_exists("questionClass", $context) ? $context["questionClass"] : (function () { throw new RuntimeError('Variable "questionClass" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "\">
    <h2>
        ";
        // line 14
        if ((isset($context["detail"]) || array_key_exists("detail", $context))) {
            // line 15
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 15, $this->source); })()), "title", [], "any", false, false, false, 15), "html", null, true);
            echo "
        ";
        } else {
            // line 17
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 17, $this->source); })()), "title", [], "any", false, false, false, 17), "html", null, true);
            echo "</a>
        ";
        }
        // line 19
        echo "        <span class=\"badge badge-";
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 19, $this->source); })()), "isSolved", [], "any", false, false, false, 19)) ? ("success") : ("warning"));
        echo "\">
            ";
        // line 20
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 20, $this->source); })()), "isSolved", [], "any", false, false, false, 20)) ? ("Résolue") : ("En attente"));
        echo "
        </span>
    </h2>

    <p class=\"small-grey-text\">
        Posée par
        <strong>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "username", [], "any", false, false, false, 26), "html", null, true);
        echo "</strong> le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 26, $this->source); })()), "createdAt", [], "any", false, false, false, 26), "d/m/Y à h:i"), "html", null, true);
        echo "
        <br>
        <i><b>";
        // line 28
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 28, $this->source); })()), "answers", [], "any", false, false, false, 28)), "html", null, true);
        echo "</b> réponse(s)</i>
    </p>

    ";
        // line 31
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 31, $this->source); })()))) {
            // line 32
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" class=\"btn btn-warning btn-sm\">Modifier la question</a>
    ";
        }
        // line 34
        echo "
    ";
        // line 35
        if ((isset($context["detail"]) || array_key_exists("detail", $context))) {
            // line 36
            echo "    <p>
        ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 37, $this->source); })()), "body", [], "any", false, false, false, 37), "html", null, true);
            echo "
    </p>
    ";
        }
        // line 40
        echo "
    <div class=\"tags\">
        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 42, $this->source); })()), "tags", [], "any", false, false, false, 42));
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
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 43
            echo "        ";
            $this->loadTemplate("question/_tags.html.twig", "question/_detail.html.twig", 43)->display($context);
            // line 44
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        echo "<h1>User Sign Up:</h1>
";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "question/_detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 7,  188 => 6,  178 => 5,  167 => 45,  153 => 44,  150 => 43,  133 => 42,  129 => 40,  123 => 37,  120 => 36,  118 => 35,  115 => 34,  109 => 32,  107 => 31,  101 => 28,  94 => 26,  85 => 20,  80 => 19,  72 => 17,  66 => 15,  64 => 14,  59 => 12,  56 => 11,  54 => 10,  51 => 9,  49 => 5,  46 => 4,  44 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# ... #}
{# this tag only applies to the forms defined in this template #}
{% form_theme form 'bootstrap_4_layout.html.twig' %}

{% block body %}
<h1>User Sign Up:</h1>
{{ form(form) }}
{% endblock %}

{% set questionClass = question.isblocked ? 'blocked' : '' %}

<div class=\"question-container {{ questionClass }}\">
    <h2>
        {% if detail is defined %}
        {{ question.title }}
        {% else %}
        <a href=\"{{ path('question_show', {'id': question.id}) }}\">{{ question.title }}</a>
        {% endif %}
        <span class=\"badge badge-{{ question.isSolved ? 'success' : 'warning' }}\">
            {{ question.isSolved ? 'Résolue' : 'En attente' }}
        </span>
    </h2>

    <p class=\"small-grey-text\">
        Posée par
        <strong>{{ question.user.username }}</strong> le {{ question.createdAt|date(\"d/m/Y à h:i\") }}
        <br>
        <i><b>{{ question.answers|length }}</b> réponse(s)</i>
    </p>

    {% if is_granted('edit', question) %}
    <a href=\"{{ path('question_edit', {id: question.id}) }}\" class=\"btn btn-warning btn-sm\">Modifier la question</a>
    {% endif %}

    {% if detail is defined %}
    <p>
        {{ question.body }}
    </p>
    {% endif %}

    <div class=\"tags\">
        {% for tag in question.tags %}
        {% include 'question/_tags.html.twig' %}
        {% endfor %}
    </div>
</div>", "question/_detail.html.twig", "/var/www/html/Atlantis/exercice/Projet-Solo-THE-GOOD-ONE-master/templates/question/_detail.html.twig");
    }
}
