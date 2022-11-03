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

/* home/blogpost.html.twig */
class __TwigTemplate_edb715dcde98242166e17c577af11d348bb216edf82387cf7395cc082960d483 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/blogpost.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/blogpost.html.twig"));

        // line 1
        echo "<div class=\"container\">
  <h2>Actualités</h2>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, quisquam?</p>
  <div class=\"row row-cols-1 row-cols-md-3 g-4\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blogposts"]) || array_key_exists("blogposts", $context) ? $context["blogposts"] : (function () { throw new RuntimeError('Variable "blogposts" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["blogpost"]) {
            // line 6
            echo "    <div class=\"col\">
      <div class=\"card\">
        <div class=\"card-body\">
          <h5 class=\"card-title\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blogpost"], "titre", [], "any", false, false, false, 9), "html", null, true);
            echo "</h5>
          <p class=\"card-text\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["blogpost"], "contenu", [], "any", false, false, false, 10)), "truncate", [0 => 200, 1 => "...", 2 => false], "method", false, false, false, 10), "html", null, true);
            echo "</p>
          <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actualites_detail", ["slug" => twig_get_attribute($this->env, $this->source, $context["blogpost"], "slug", [], "any", false, false, false, 11)]), "html", null, true);
            echo "\" class=\"card-meta text-decoration-none\">
            <hr class=\"card-meta-divider\">
            <p class=\"h6 text-uppercase text-muted mb-0 ms-auto\">
              <time>Publiée le ";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blogpost"], "createdAt", [], "any", false, false, false, 14), "d/m/Y"), "html", null, true);
            echo "</time>
            </p>
          </a>
        </div>
      </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blogpost'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "  </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/blogpost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 21,  72 => 14,  66 => 11,  62 => 10,  58 => 9,  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
  <h2>Actualités</h2>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, quisquam?</p>
  <div class=\"row row-cols-1 row-cols-md-3 g-4\">
    {% for blogpost in blogposts %}
    <div class=\"col\">
      <div class=\"card\">
        <div class=\"card-body\">
          <h5 class=\"card-title\">{{ blogpost.titre }}</h5>
          <p class=\"card-text\">{{ blogpost.contenu|u.truncate(200, '...', false) }}</p>
          <a href=\"{{ path('actualites_detail', {'slug': blogpost.slug}) }}\" class=\"card-meta text-decoration-none\">
            <hr class=\"card-meta-divider\">
            <p class=\"h6 text-uppercase text-muted mb-0 ms-auto\">
              <time>Publiée le {{ blogpost.createdAt|date('d/m/Y') }}</time>
            </p>
          </a>
        </div>
      </div>
    </div>
    {% endfor %}
  </div>
</div>", "home/blogpost.html.twig", "C:\\Users\\utilisateur\\Desktop\\Symfony\\sitepeinture\\templates\\home\\blogpost.html.twig");
    }
}
