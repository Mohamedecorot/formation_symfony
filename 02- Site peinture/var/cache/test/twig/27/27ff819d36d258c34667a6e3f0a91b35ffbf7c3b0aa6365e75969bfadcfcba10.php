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

/* peinture/realisations.html.twig */
class __TwigTemplate_a69c4aacededa2c195a19e45dc966d72d14afdaa05df11401e697b9985866013 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "peinture/realisations.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "peinture/realisations.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "peinture/realisations.html.twig", 1);
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

        echo "Réalisations";
        
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
        echo "    <section class=\"pt-7 pt-md-10\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h2 class=\"mb-0\">
                        Dernières réalisations
                    </h2>
                    <p class=\"mb-5 text-muted\">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, maxime. Iste ratione sed unde tempora!
                    </p>
                </div>

                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["peintures"]) || array_key_exists("peintures", $context) ? $context["peintures"] : (function () { throw new RuntimeError('Variable "peintures" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["peinture"]) {
            // line 19
            echo "                    <div class=\"col-12 col-md-6 d-flex mb-4\">
                        <div class=\"card mb-6 shadow-light-lg lift lift-lg\">
                            <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("realisations_details", ["slug" => twig_get_attribute($this->env, $this->source, $context["peinture"], "slug", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\" class=\"card-img-top text-decoration-none\">
                                <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["peinture"], "imageFile"), "html", null, true);
            echo "\" alt=\"\" class=\"card-img-top\">
                            </a>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("realisations_details", ["slug" => twig_get_attribute($this->env, $this->source, $context["peinture"], "slug", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\" class=\"card-body text-decoration-none\">
                                <h3>
                                    ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["peinture"], "nom", [], "any", false, false, false, 26), "html", null, true);
            echo "
                                </h3>
                                <p class=\"mb-0 text-muted\">
                                    ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["peinture"], "description", [], "any", false, false, false, 29)), "truncate", [0 => 200, 1 => "...", 2 => false], "method", false, false, false, 29), "html", null, true);
            echo "
                                </p>
                            </a>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("realisations_details", ["slug" => twig_get_attribute($this->env, $this->source, $context["peinture"], "slug", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" class=\"cart-meta mt-auto text-decoration-none\">
                                <hr class=\"card-meta-divider\">
                                <p class=\"h6 text-uppercase text-muted mb-0 ms-auto\">
                                    <time>Ajoutée le ";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["peinture"], "createdAt", [], "any", false, false, false, 35), "d/m/Y"), "html", null, true);
            echo "</time>
                                </p>
                            </a>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['peinture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                <div class=\"d-flex justify-content-center\">
                    ";
        // line 42
        twig_get_attribute($this->env, $this->source, (isset($context["peintures"]) || array_key_exists("peintures", $context) ? $context["peintures"] : (function () { throw new RuntimeError('Variable "peintures" does not exist.', 42, $this->source); })()), "setPageRange", [0 => 2], "method", false, false, false, 42);
        // line 43
        echo "                    ";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["peintures"]) || array_key_exists("peintures", $context) ? $context["peintures"] : (function () { throw new RuntimeError('Variable "peintures" does not exist.', 43, $this->source); })()), "base/pagination.html.twig");
        echo "
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "peinture/realisations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 43,  157 => 42,  154 => 41,  142 => 35,  136 => 32,  130 => 29,  124 => 26,  119 => 24,  114 => 22,  110 => 21,  106 => 19,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Réalisations{% endblock %}

{% block body %}
    <section class=\"pt-7 pt-md-10\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h2 class=\"mb-0\">
                        Dernières réalisations
                    </h2>
                    <p class=\"mb-5 text-muted\">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, maxime. Iste ratione sed unde tempora!
                    </p>
                </div>

                {% for peinture in peintures %}
                    <div class=\"col-12 col-md-6 d-flex mb-4\">
                        <div class=\"card mb-6 shadow-light-lg lift lift-lg\">
                            <a href=\"{{ path('realisations_details', {'slug': peinture.slug}) }}\" class=\"card-img-top text-decoration-none\">
                                <img src=\"{{ vich_uploader_asset(peinture, 'imageFile') }}\" alt=\"\" class=\"card-img-top\">
                            </a>
                            <a href=\"{{ path('realisations_details', {'slug': peinture.slug}) }}\" class=\"card-body text-decoration-none\">
                                <h3>
                                    {{ peinture.nom }}
                                </h3>
                                <p class=\"mb-0 text-muted\">
                                    {{ peinture.description|u.truncate(200, '...', false) }}
                                </p>
                            </a>
                            <a href=\"{{ path('realisations_details', {'slug': peinture.slug}) }}\" class=\"cart-meta mt-auto text-decoration-none\">
                                <hr class=\"card-meta-divider\">
                                <p class=\"h6 text-uppercase text-muted mb-0 ms-auto\">
                                    <time>Ajoutée le {{ peinture.createdAt|date('d/m/Y') }}</time>
                                </p>
                            </a>
                        </div>
                    </div>
                {% endfor %}
                <div class=\"d-flex justify-content-center\">
                    {% do peintures.setPageRange(2) %}
                    {{ knp_pagination_render(peintures, 'base/pagination.html.twig') }}
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "peinture/realisations.html.twig", "C:\\Users\\utilisateur\\Desktop\\Symfony\\sitepeinture\\templates\\peinture\\realisations.html.twig");
    }
}
