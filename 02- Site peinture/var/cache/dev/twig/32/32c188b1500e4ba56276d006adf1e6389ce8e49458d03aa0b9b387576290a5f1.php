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

/* peinture/details.html.twig */
class __TwigTemplate_88dc9b34e1125ac2ea54f6a5407f2544ff1f9bba4e25b4dc63f8dfda37f34d97 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "peinture/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "peinture/details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "peinture/details.html.twig", 1);
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

        echo "Détails";
        
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
        echo "    ";
        // line 7
        echo "    <div class=\"container-fluid px-md-0\">
        <div class=\"row justify-content-between gx-0 mx-md-0 mb-6 mb-md-2\">

            <div class=\"col-12 col-md-3 vh-md-100 mx-auto\" style=\"top: 0\">
                <aside class=\"flex-grow-1 py-0 py-md-10\">
                    <div>
                        <h2>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["peinture"]) || array_key_exists("peinture", $context) ? $context["peinture"] : (function () { throw new RuntimeError('Variable "peinture" does not exist.', 13, $this->source); })()), "nom", [], "any", false, false, false, 13), "html", null, true);
        echo "</h2>
                       ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["peinture"]) || array_key_exists("peinture", $context) ? $context["peinture"] : (function () { throw new RuntimeError('Variable "peinture" does not exist.', 14, $this->source); })()), "categorie", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 15
            echo "                            <span class=\"badge bg-secondary\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 15), "html", null, true);
            echo "</span>
                       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                    </div>
                    <p class=\"fs-lg mb-7 text-muted\">
                        ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["peinture"]) || array_key_exists("peinture", $context) ? $context["peinture"] : (function () { throw new RuntimeError('Variable "peinture" does not exist.', 19, $this->source); })()), "description", [], "any", false, false, false, 19), "html", null, true);
        echo "
                    </p>

                    <ul class=\"list-group list-group-flush\">
                        <li class=\"list-group-item\">
                            <h6 class=\"d-flex mb-0 text-uppercase\">
                                Date de réalisations
                                <span class=\"ms-auto\">";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["peinture"]) || array_key_exists("peinture", $context) ? $context["peinture"] : (function () { throw new RuntimeError('Variable "peinture" does not exist.', 26, $this->source); })()), "dateRealisation", [], "any", false, false, false, 26), "d/m/Y"), "html", null, true);
        echo "</span>
                            </h6>
                        </li>
                        <li class=\"list-group item\">
                            <div class=\"d-flex mb-0 text-uppercase\">
                                Largeur
                                <span class=\"ms-auto\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["peinture"]) || array_key_exists("peinture", $context) ? $context["peinture"] : (function () { throw new RuntimeError('Variable "peinture" does not exist.', 32, $this->source); })()), "largeur", [], "any", false, false, false, 32), "html", null, true);
        echo " Cm</span>
                            </div>
                        </li>
                        <li class=\"list-group item\">
                            <div class=\"d-flex mb-0 text-uppercase\">
                                Hauteur
                                <span class=\"ms-auto\">";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["peinture"]) || array_key_exists("peinture", $context) ? $context["peinture"] : (function () { throw new RuntimeError('Variable "peinture" does not exist.', 38, $this->source); })()), "hauteur", [], "any", false, false, false, 38), "html", null, true);
        echo " Cm</span>
                            </div>
                        </li>
                        ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, (isset($context["peinture"]) || array_key_exists("peinture", $context) ? $context["peinture"] : (function () { throw new RuntimeError('Variable "peinture" does not exist.', 41, $this->source); })()), "enVente", [], "any", false, false, false, 41)) {
            // line 42
            echo "                            <li class=\"list-group item\">
                                <div class=\"d-flex mb-0 text-uppercase\">
                                    <strong>Disponible à la vente</strong>
                                    <span class=\"ms-auto\"><strong>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["peinture"]) || array_key_exists("peinture", $context) ? $context["peinture"] : (function () { throw new RuntimeError('Variable "peinture" does not exist.', 45, $this->source); })()), "prix", [], "any", false, false, false, 45), "html", null, true);
            echo " €</strong></span>
                                </div>
                            </li>
                        ";
        }
        // line 49
        echo "                    </ul>
                </aside>
            </div>
            <div class=\"col-12 col-md-8\">
                <section class=\"pt-md-10\">
                    <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["peinture"]) || array_key_exists("peinture", $context) ? $context["peinture"] : (function () { throw new RuntimeError('Variable "peinture" does not exist.', 54, $this->source); })()), "imageFile"), "html", null, true);
        echo "\" alt=\"\" class=\"w-100 h-auto\">
                </section>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "peinture/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 54,  167 => 49,  160 => 45,  155 => 42,  153 => 41,  147 => 38,  138 => 32,  129 => 26,  119 => 19,  115 => 17,  106 => 15,  102 => 14,  98 => 13,  90 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails{% endblock %}

{% block body %}
    {# CONTENT #}
    <div class=\"container-fluid px-md-0\">
        <div class=\"row justify-content-between gx-0 mx-md-0 mb-6 mb-md-2\">

            <div class=\"col-12 col-md-3 vh-md-100 mx-auto\" style=\"top: 0\">
                <aside class=\"flex-grow-1 py-0 py-md-10\">
                    <div>
                        <h2>{{ peinture.nom }}</h2>
                       {% for categorie in peinture.categorie %}
                            <span class=\"badge bg-secondary\">{{ categorie.nom }}</span>
                       {% endfor %}
                    </div>
                    <p class=\"fs-lg mb-7 text-muted\">
                        {{ peinture.description }}
                    </p>

                    <ul class=\"list-group list-group-flush\">
                        <li class=\"list-group-item\">
                            <h6 class=\"d-flex mb-0 text-uppercase\">
                                Date de réalisations
                                <span class=\"ms-auto\">{{ peinture.dateRealisation|date('d/m/Y') }}</span>
                            </h6>
                        </li>
                        <li class=\"list-group item\">
                            <div class=\"d-flex mb-0 text-uppercase\">
                                Largeur
                                <span class=\"ms-auto\">{{ peinture.largeur }} Cm</span>
                            </div>
                        </li>
                        <li class=\"list-group item\">
                            <div class=\"d-flex mb-0 text-uppercase\">
                                Hauteur
                                <span class=\"ms-auto\">{{ peinture.hauteur }} Cm</span>
                            </div>
                        </li>
                        {% if peinture.enVente %}
                            <li class=\"list-group item\">
                                <div class=\"d-flex mb-0 text-uppercase\">
                                    <strong>Disponible à la vente</strong>
                                    <span class=\"ms-auto\"><strong>{{ peinture.prix }} €</strong></span>
                                </div>
                            </li>
                        {% endif %}
                    </ul>
                </aside>
            </div>
            <div class=\"col-12 col-md-8\">
                <section class=\"pt-md-10\">
                    <img src=\"{{ vich_uploader_asset(peinture, 'imageFile') }}\" alt=\"\" class=\"w-100 h-auto\">
                </section>
            </div>
        </div>
    </div>
{% endblock %}
", "peinture/details.html.twig", "C:\\Users\\utilisateur\\Desktop\\Symfony\\sitepeinture\\templates\\peinture\\details.html.twig");
    }
}
