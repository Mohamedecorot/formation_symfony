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

/* home/realisation.html.twig */
class __TwigTemplate_bd3d078490c946421226cfa262b5d5c6ac97abc76ae67f5484c860d0554f354f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/realisation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/realisation.html.twig"));

        // line 1
        echo "<div class=\"container\">
  <h2>Dernières réalisations</h2>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, quisquam?</p>
  <div class=\"row\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["peintures"]) || array_key_exists("peintures", $context) ? $context["peintures"] : (function () { throw new RuntimeError('Variable "peintures" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["peinture"]) {
            // line 6
            echo "    <div class=\"col-lg-6 mb-4\">
      <div class=\"card mb-3\" style=\"max-width: 540px;\">
        <div class=\"row g-0\">
          <div class=\"col-md-4\">
            <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("realisations_details", ["slug" => twig_get_attribute($this->env, $this->source, $context["peinture"], "slug", [], "any", false, false, false, 10)]), "html", null, true);
            echo "\" >
              <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["peinture"], "imageFile"), "html", null, true);
            echo "\" class=\"img-fluid rounded-start\" alt=\"...\">
            </a>
          </div>
          <div class=\"col-md-8\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["peinture"], "nom", [], "any", false, false, false, 16), "html", null, true);
            echo "</h5>
              <p class=\"card-text\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["peinture"], "description", [], "any", false, false, false, 17)), "truncate", [0 => 100, 1 => "...", 2 => false], "method", false, false, false, 17), "html", null, true);
            echo "</p>
              <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("realisations_details", ["slug" => twig_get_attribute($this->env, $this->source, $context["peinture"], "slug", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\" class=\"card-meta text-decoration-none\">
                <p class=\"h6 text-uppercase text-muted mb-0 ms-auto\">
                  <time>Ajoutée le ";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["peinture"], "createdAt", [], "any", false, false, false, 20), "d/m/Y"), "html", null, true);
            echo "</time>
                </p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['peinture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "  </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/realisation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 29,  84 => 20,  79 => 18,  75 => 17,  71 => 16,  63 => 11,  59 => 10,  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
  <h2>Dernières réalisations</h2>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, quisquam?</p>
  <div class=\"row\">
    {% for peinture in peintures %}
    <div class=\"col-lg-6 mb-4\">
      <div class=\"card mb-3\" style=\"max-width: 540px;\">
        <div class=\"row g-0\">
          <div class=\"col-md-4\">
            <a href=\"{{ path('realisations_details', {'slug': peinture.slug}) }}\" >
              <img src=\"{{ vich_uploader_asset(peinture, 'imageFile') }}\" class=\"img-fluid rounded-start\" alt=\"...\">
            </a>
          </div>
          <div class=\"col-md-8\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">{{ peinture.nom }}</h5>
              <p class=\"card-text\">{{ peinture.description|u.truncate(100, '...', false) }}</p>
              <a href=\"{{ path('realisations_details', {'slug': peinture.slug}) }}\" class=\"card-meta text-decoration-none\">
                <p class=\"h6 text-uppercase text-muted mb-0 ms-auto\">
                  <time>Ajoutée le {{ peinture.createdAt|date('d/m/Y') }}</time>
                </p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    {% endfor %}
  </div>
</div>", "home/realisation.html.twig", "C:\\Users\\utilisateur\\Desktop\\Symfony\\sitepeinture\\templates\\home\\realisation.html.twig");
    }
}
