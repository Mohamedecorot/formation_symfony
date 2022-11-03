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

/* portfolio/index.html.twig */
class __TwigTemplate_44c307d76515e4dadf5f47c1dd1be2dafb288469bc425e733a0e0fe9c32b09cc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "portfolio/index.html.twig", 1);
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

        echo "Mon portfolio";
        
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
        echo "    <section class=\"pt-12 pt-md-14 pb-12 pb-pd-15 bg-gray-900\" style=\"margin-top: -87px;\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-12 col-md-10 col-lg-6 text-center\">
                    <h1 class=\"display-2 fw-bold text-white\">
                        Portfolio
                    </h1>
                </div>
            </div>
        </div>
    </section>

    ";
        // line 20
        echo "    <div class=\"position-relative\">
        <div class=\"shape shape-bottom shape-fluide-x svg-shim text-light\">
            <svg viewBox=\"0 0 2000 48\" fill=\"none\" xmins=\"http://www/w3.org/2000/svg\"></svg>
        </div>
    </div>

    ";
        // line 27
        echo "    <section class=\"py-8 py-md-11 mt-n10 mt-md-n14\">
        <div class=\"container\">
            <div class=\"row\" id=\"porfolio\" data-isotope='{\"layoutMode\": \"fitRows\"}'>

                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 32
            echo "                    ";
            $context["peinture"] = twig_last($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "peintures", [], "any", false, false, false, 32));
            // line 33
            echo "                    <div class=\"col-12 col-md-4 us shadow m-0\" data-mdb-ripple-color=\"light\">
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("portfolio_categorie", ["slug" => twig_get_attribute($this->env, $this->source, $context["categorie"], "slug", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" class=\"text-decoration-none card lift lift-lg shadow-light-lg mb-7\">
                            <img src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["peinture"]) || array_key_exists("peinture", $context) ? $context["peinture"] : (function () { throw new RuntimeError('Variable "peinture" does not exist.', 35, $this->source); })()), "imageFile"), "html", null, true);
            echo " \" alt=\"\" class=\"card-img-top\">
                        </a>
                        <div class=\"card-body\">
                            <div class=\"shape shape bottom-100 shape-fluid-x svg-shim text-white\">
                                <svg viewBox=\"0 0 2880 48\" fill=\"none\" xmins=\"http://www.w3.org/2000/svg\"></svg>
                            </div>
                            <h4 class=\"mb-0\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 41), "html", null, true);
            echo "</h4>
                            <small>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "description", [], "any", false, false, false, 42), "html", null, true);
            echo "</small>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "portfolio/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 46,  145 => 42,  141 => 41,  132 => 35,  128 => 34,  125 => 33,  122 => 32,  118 => 31,  112 => 27,  104 => 20,  90 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon portfolio{% endblock %}

{% block body %}
    {# WELCOME #}
    <section class=\"pt-12 pt-md-14 pb-12 pb-pd-15 bg-gray-900\" style=\"margin-top: -87px;\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-12 col-md-10 col-lg-6 text-center\">
                    <h1 class=\"display-2 fw-bold text-white\">
                        Portfolio
                    </h1>
                </div>
            </div>
        </div>
    </section>

    {# SHAPE #}
    <div class=\"position-relative\">
        <div class=\"shape shape-bottom shape-fluide-x svg-shim text-light\">
            <svg viewBox=\"0 0 2000 48\" fill=\"none\" xmins=\"http://www/w3.org/2000/svg\"></svg>
        </div>
    </div>

    {# CONTENT #}
    <section class=\"py-8 py-md-11 mt-n10 mt-md-n14\">
        <div class=\"container\">
            <div class=\"row\" id=\"porfolio\" data-isotope='{\"layoutMode\": \"fitRows\"}'>

                {% for categorie in categories %}
                    {% set peinture = categorie.peintures|last %}
                    <div class=\"col-12 col-md-4 us shadow m-0\" data-mdb-ripple-color=\"light\">
                        <a href=\"{{ path('portfolio_categorie', {'slug': categorie.slug}) }}\" class=\"text-decoration-none card lift lift-lg shadow-light-lg mb-7\">
                            <img src=\"{{ vich_uploader_asset(peinture, 'imageFile') }} \" alt=\"\" class=\"card-img-top\">
                        </a>
                        <div class=\"card-body\">
                            <div class=\"shape shape bottom-100 shape-fluid-x svg-shim text-white\">
                                <svg viewBox=\"0 0 2880 48\" fill=\"none\" xmins=\"http://www.w3.org/2000/svg\"></svg>
                            </div>
                            <h4 class=\"mb-0\">{{ categorie.nom }}</h4>
                            <small>{{ categorie.description }}</small>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </section>
{% endblock %}
", "portfolio/index.html.twig", "C:\\Users\\utilisateur\\Desktop\\Symfony\\sitepeinture\\templates\\portfolio\\index.html.twig");
    }
}
