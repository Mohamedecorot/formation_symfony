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

/* blogpost/actualites.html.twig */
class __TwigTemplate_7e978c3c651559b99c8a35b7a740c95a3598e38adfa94f4052bc6c260826a786 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blogpost/actualites.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blogpost/actualites.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blogpost/actualites.html.twig", 1);
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

        echo "Actualités";
        
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
        echo "    <section class=\"pb-8 pt-7 pb-md-11 pt-md-10\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h2 class=\"mb-0\">
                        Dernières actualités
                    </h2>
                    <p class=\"mb-5 text-muted\">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, maxime. Iste ratione sed unde tempora!
                    </p>
                </div>

                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blogposts"]) || array_key_exists("blogposts", $context) ? $context["blogposts"] : (function () { throw new RuntimeError('Variable "blogposts" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["blogpost"]) {
            // line 19
            echo "                    <div class=\"col-12 col-lg-4 d-flex mb-4\">
                        <div class=\"card shadow-light-lg lift lift-lg m-2\">
                            <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actualites_detail", ["slug" => twig_get_attribute($this->env, $this->source, $context["blogpost"], "slug", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\" class=\"card-body my-auto text-decoration-none\">
                                <h3 class=\"mt-auto\">
                                    ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blogpost"], "titre", [], "any", false, false, false, 23), "html", null, true);
            echo "
                                </h3>
                                <p class=\"mb-0 text-muted\">
                                    ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["blogpost"], "contenu", [], "any", false, false, false, 26)), "truncate", [0 => 150, 1 => "...", 2 => false], "method", false, false, false, 26), "html", null, true);
            echo "
                                </p>
                            </a>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actualites_detail", ["slug" => twig_get_attribute($this->env, $this->source, $context["blogpost"], "slug", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\" class=\"cart-meta text-decoration-none\">
                                <hr class=\"card-meta-divider\">
                                <p class=\"h6 text-uppercase text-muted mb-0 ms-auto\">
                                    <time>Publiée le ";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blogpost"], "createdAt", [], "any", false, false, false, 32), "d/m/Y"), "html", null, true);
            echo "</time>
                                </p>
                            </a>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blogpost'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                <div class=\"d-flex justify-content-center\">
                    ";
        // line 39
        twig_get_attribute($this->env, $this->source, (isset($context["blogposts"]) || array_key_exists("blogposts", $context) ? $context["blogposts"] : (function () { throw new RuntimeError('Variable "blogposts" does not exist.', 39, $this->source); })()), "setPageRange", [0 => 2], "method", false, false, false, 39);
        // line 40
        echo "                    ";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["blogposts"]) || array_key_exists("blogposts", $context) ? $context["blogposts"] : (function () { throw new RuntimeError('Variable "blogposts" does not exist.', 40, $this->source); })()), "base/pagination.html.twig");
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
        return "blogpost/actualites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 40,  148 => 39,  145 => 38,  133 => 32,  127 => 29,  121 => 26,  115 => 23,  110 => 21,  106 => 19,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Actualités{% endblock %}

{% block body %}
    <section class=\"pb-8 pt-7 pb-md-11 pt-md-10\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h2 class=\"mb-0\">
                        Dernières actualités
                    </h2>
                    <p class=\"mb-5 text-muted\">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, maxime. Iste ratione sed unde tempora!
                    </p>
                </div>

                {% for blogpost in blogposts %}
                    <div class=\"col-12 col-lg-4 d-flex mb-4\">
                        <div class=\"card shadow-light-lg lift lift-lg m-2\">
                            <a href=\"{{ path('actualites_detail', {'slug': blogpost.slug}) }}\" class=\"card-body my-auto text-decoration-none\">
                                <h3 class=\"mt-auto\">
                                    {{ blogpost.titre }}
                                </h3>
                                <p class=\"mb-0 text-muted\">
                                    {{ blogpost.contenu|u.truncate(150, '...', false) }}
                                </p>
                            </a>
                            <a href=\"{{ path('actualites_detail', {'slug': blogpost.slug}) }}\" class=\"cart-meta text-decoration-none\">
                                <hr class=\"card-meta-divider\">
                                <p class=\"h6 text-uppercase text-muted mb-0 ms-auto\">
                                    <time>Publiée le {{ blogpost.createdAt|date('d/m/Y') }}</time>
                                </p>
                            </a>
                        </div>
                    </div>
                {% endfor %}
                <div class=\"d-flex justify-content-center\">
                    {% do blogposts.setPageRange(2) %}
                    {{ knp_pagination_render(blogposts, 'base/pagination.html.twig') }}
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "blogpost/actualites.html.twig", "C:\\Users\\utilisateur\\Desktop\\Symfony\\sitepeinture\\templates\\blogpost\\actualites.html.twig");
    }
}
