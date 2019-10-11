<?php

/* customer.html.twig */
class __TwigTemplate_95b2ebace71fd2781a3e4295263d5c173ce0f97e7c0c84813d72d0d6636ad04c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "customer.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "customer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "customer.html.twig"));

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
        echo "    <h2>Recherche de clients en base de données</h2>
    <form class=\"form\" method=\"post\" action=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("handle_customer_form");
        echo "\">
        <fieldset>
            <legend>Recherche par...</legend>
            <ul>
                <li>
                    <label for=\"firstname\">Prénom :</label>
                    <input type=\"text\" id=\"firstname\" name=\"firstname\">
                </li>
                <li>
                    <label for=\"lastname\">Nom :</label>
                    <input type=\"text\" id=\"lastname\" name=\"lastname\">
                </li>
                <li>
                    <label for=\"society\">Société :</label>
                    <input type=\"text\" id=\"society\" name=\"society\">
                </li>
                <li>
                    <label for=\"country\">Pays :</label>
                    <input type=\"text\" id=\"country\" name=\"country\">
                </li>
                <li>
                    <input type=\"submit\">
                </li>
            </ul>
        </fieldset>
    </form>
    ";
        // line 31
        if ((isset($context["customer"]) || array_key_exists("customer", $context))) {
            // line 32
            echo "        ";
            if ((twig_length_filter($this->env, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 32, $this->source); })())) == 0)) {
                // line 33
                echo "            ";
                echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 33, $this->source); })()), "html", null, true);
                echo "
        ";
            } else {
                // line 35
                echo "            <table>
                <thead>
                <tr>
                    <th>Nom de l'entreprise</th>
                    <th>Prénom et nom du contact</th>
                    <th>Ville</th>
                    <th>Pays</th>
                </tr>
                </thead>
                <tbody>
                ";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 45, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom"]) {
                    // line 46
                    echo "                    <tr>
                        <td>";
                    // line 47
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom"], "customerName", array()), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 48
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom"], "contactFirstName", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom"], "contactLastName", array())), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 49
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom"], "city", array()), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 50
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom"], "country", array()), "html", null, true);
                    echo "</td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "                </tbody>
            </table>
        ";
            }
            // line 56
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "customer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 56,  138 => 53,  129 => 50,  125 => 49,  119 => 48,  115 => 47,  112 => 46,  108 => 45,  96 => 35,  90 => 33,  87 => 32,  85 => 31,  56 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h2>Recherche de clients en base de données</h2>
    <form class=\"form\" method=\"post\" action=\"{{ path('handle_customer_form') }}\">
        <fieldset>
            <legend>Recherche par...</legend>
            <ul>
                <li>
                    <label for=\"firstname\">Prénom :</label>
                    <input type=\"text\" id=\"firstname\" name=\"firstname\">
                </li>
                <li>
                    <label for=\"lastname\">Nom :</label>
                    <input type=\"text\" id=\"lastname\" name=\"lastname\">
                </li>
                <li>
                    <label for=\"society\">Société :</label>
                    <input type=\"text\" id=\"society\" name=\"society\">
                </li>
                <li>
                    <label for=\"country\">Pays :</label>
                    <input type=\"text\" id=\"country\" name=\"country\">
                </li>
                <li>
                    <input type=\"submit\">
                </li>
            </ul>
        </fieldset>
    </form>
    {% if customer is defined %}
        {% if customer|length == 0 %}
            {{ message }}
        {% else %}
            <table>
                <thead>
                <tr>
                    <th>Nom de l'entreprise</th>
                    <th>Prénom et nom du contact</th>
                    <th>Ville</th>
                    <th>Pays</th>
                </tr>
                </thead>
                <tbody>
                {% for custom in customer %}
                    <tr>
                        <td>{{ custom.customerName }}</td>
                        <td>{{ custom.contactFirstName }} {{ custom.contactLastName|upper }}</td>
                        <td>{{ custom.city }}</td>
                        <td>{{ custom.country }}</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        {% endif %}
    {% endif %}
{% endblock %}", "customer.html.twig", "C:\\Wampserver64\\www\\23-php-poo-framework-symfony\\templates\\customer.html.twig");
    }
}
