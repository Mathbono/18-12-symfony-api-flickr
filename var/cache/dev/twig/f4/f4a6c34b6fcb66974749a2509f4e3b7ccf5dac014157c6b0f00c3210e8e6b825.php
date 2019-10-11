<?php

/* flicker.html.twig */
class __TwigTemplate_792eaee1656248e990bbbdd2a1c3cd7b642229d4f5d2a0e9e936f627db1c3501 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "flicker.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "flicker.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "flicker.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2>Recherche de photos sur Flicker</h2>
    <form class=\"form\" method=\"post\" action=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("handle_flicker_form");
        echo "\">
        <fieldset>
            <legend>Recherche de...</legend>
            <ul>
                <li>
                    <label for=\"search\">Photo :</label>
                    <input type=\"text\" id=\"search\" name=\"search\">
                </li>
                <li>
                    <input type=\"submit\" value=\"Envoyer\">
                </li>
            </ul>
        </fieldset>
    </form>
    ";
        // line 19
        if ((isset($context["photos"]) || array_key_exists("photos", $context))) {
            // line 20
            echo "        <ul class=\"photo-gallery\">
            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["photos"]) || array_key_exists("photos", $context) ? $context["photos"] : (function () { throw new Twig_Error_Runtime('Variable "photos" does not exist.', 21, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                // line 22
                echo "                <li>
                    <a data-fancybox=\"gallery\" href=\"";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "getLargeUrl", array()), "html", null, true);
                echo "\">
                        <img src=\"";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "getThumbmailUrl", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "getTitle", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "getTitle", array()), "html", null, true);
                echo "\">
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        </ul>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "flicker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 28,  89 => 24,  85 => 23,  82 => 22,  78 => 21,  75 => 20,  73 => 19,  56 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h2>Recherche de photos sur Flicker</h2>
    <form class=\"form\" method=\"post\" action=\"{{ path('handle_flicker_form') }}\">
        <fieldset>
            <legend>Recherche de...</legend>
            <ul>
                <li>
                    <label for=\"search\">Photo :</label>
                    <input type=\"text\" id=\"search\" name=\"search\">
                </li>
                <li>
                    <input type=\"submit\" value=\"Envoyer\">
                </li>
            </ul>
        </fieldset>
    </form>
    {% if photos is defined %}
        <ul class=\"photo-gallery\">
            {% for photo in photos %}
                <li>
                    <a data-fancybox=\"gallery\" href=\"{{ photo.getLargeUrl }}\">
                        <img src=\"{{ photo.getThumbmailUrl }}\" title=\"{{ photo.getTitle }}\" alt=\"{{ photo.getTitle }}\">
                    </a>
                </li>
            {% endfor %}
        </ul>
    {% endif %}
{% endblock %}", "flicker.html.twig", "C:\\Wampserver64\\www\\23-php-poo-framework-symfony\\templates\\flicker.html.twig");
    }
}
