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

/* portfolio/categorie.html.twig */
class __TwigTemplate_fa703fd4eb0067b1b1778f547547296edce179c9d446ef01e6e7cec96c93c712 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio/categorie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "portfolio/categorie.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "portfolio/categorie.html.twig", 1);
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

        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        
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
        echo "    ";
        $context["img"] = twig_last($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 7, $this->source); })()), "peintures", [], "any", false, false, false, 7));
        // line 8
        echo "    <section class=\"pt-12 pt-md-14 pb-12 pb-pd-15 overlay overlay-black\" data-jarallax data-speed=\".8\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-12 col-md-10 col-lg-6 text-center\">
                    <h1 class=\"display-2 fw-bold text-white\">
                        ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 13, $this->source); })()), "nom", [], "any", false, false, false, 13), "html", null, true);
        echo "
                    </h1>
                    <p class=\"lead text-white-75 mb-4\">
                        ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 16, $this->source); })()), "description", [], "any", false, false, false, 16), "html", null, true);
        echo "
                    </p>
                </div>
            </div>
        </div>
    </section>

    ";
        // line 24
        echo "    <div class=\"position-relative\">
        <div class=\"shape shape-bottom shape-fluide-x svg-shim text-light\">
            <svg viewBox=\"0 0 2000 48\" fill=\"none\" xmins=\"http://www/w3.org/2000/svg\"></svg>
        </div>
    </div>

    ";
        // line 31
        echo "    <section class=\"py-8 py-md-11 mt-n10 mt-md-n14\">
        <div class=\"container\">
            <div class=\"row\" id=\"porfolio\" data-isotope='{\"layoutMode\": \"fitRows\"}'>

                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["peintures"]) || array_key_exists("peintures", $context) ? $context["peintures"] : (function () { throw new RuntimeError('Variable "peintures" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["peinture"]) {
            // line 36
            echo "                    <div class=\"col-12 col-md-4\">
                        <a href=\"\" class=\"text-decoration-none card shadow-light-lg mb-7\" data-big=\"{\"imgSrc\": \"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["peinture"], "imageFile"), "html", null, true);
            echo "\"}\">
                            <div class=\"card-zoom\">
                                <img src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["peinture"], "imageFile"), "html", null, true);
            echo " \" alt=\"...\" class=\"card-img\">
                            </div>
                        </a>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['peinture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "portfolio/categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 44,  144 => 39,  139 => 37,  136 => 36,  132 => 35,  126 => 31,  118 => 24,  108 => 16,  102 => 13,  95 => 8,  92 => 7,  90 => 6,  80 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} {{ categorie.nom }} {% endblock %}

{% block body %}
    {# WELCOME #}
    {% set img = categorie.peintures|last %}
    <section class=\"pt-12 pt-md-14 pb-12 pb-pd-15 overlay overlay-black\" data-jarallax data-speed=\".8\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-12 col-md-10 col-lg-6 text-center\">
                    <h1 class=\"display-2 fw-bold text-white\">
                        {{ categorie.nom }}
                    </h1>
                    <p class=\"lead text-white-75 mb-4\">
                        {{ categorie.description }}
                    </p>
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

                {% for peinture in peintures %}
                    <div class=\"col-12 col-md-4\">
                        <a href=\"\" class=\"text-decoration-none card shadow-light-lg mb-7\" data-big=\"{\"imgSrc\": \"{{ vich_uploader_asset(peinture, 'imageFile') }}\"}\">
                            <div class=\"card-zoom\">
                                <img src=\"{{ vich_uploader_asset(peinture, 'imageFile') }} \" alt=\"...\" class=\"card-img\">
                            </div>
                        </a>
                    </div>
                {% endfor %}
            </div>
        </div>
    </section>
{% endblock %}
", "portfolio/categorie.html.twig", "C:\\Users\\utilisateur\\Desktop\\Symfony\\sitepeinture\\templates\\portfolio\\categorie.html.twig");
    }
}
