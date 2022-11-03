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

/* home/welcome.html.twig */
class __TwigTemplate_fcb6a8f1e9b2b1a32fdf4302ef4c94ee1c3ab1a27a8c8bbfb15d3d795c5415fe extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/welcome.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/welcome.html.twig"));

        // line 1
        echo "<!-- Jumbotron -->
<div
  class=\"bg-image p-5 text-center shadow-1-strong rounded mb-5 text-white\"
  style=\"background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/003.webp');\"
>
  <h1 class=\"mb-3 h2\">Moi Artist</h1>
  <p> Je suis un artiste </p>
  <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("portfolio");
        echo "\" class=\"btn btn-primary\">
    <i class=\"fe fe-arrow-right ms-3\">Découvrir mon portfolio</i>
  </a>
</div>
<!-- Jumbotron -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Jumbotron -->
<div
  class=\"bg-image p-5 text-center shadow-1-strong rounded mb-5 text-white\"
  style=\"background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/003.webp');\"
>
  <h1 class=\"mb-3 h2\">Moi Artist</h1>
  <p> Je suis un artiste </p>
  <a href=\"{{ path('portfolio')}}\" class=\"btn btn-primary\">
    <i class=\"fe fe-arrow-right ms-3\">Découvrir mon portfolio</i>
  </a>
</div>
<!-- Jumbotron -->", "home/welcome.html.twig", "C:\\Users\\utilisateur\\Desktop\\Symfony\\sitepeinture\\templates\\home\\welcome.html.twig");
    }
}
