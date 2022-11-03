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

/* base/footer.html.twig */
class __TwigTemplate_8bde7ffe171971b88f478ef56a233b36f646492fb43fd3db266a0017a58af7fe extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/footer.html.twig"));

        // line 1
        echo "<!-- Footer -->
<footer class=\"text-center text-lg-start text-dark\" style=\"background-color: #ECEFF1\">
  <!-- Section: Links  -->
  <section class=\"\">
    <div class=\"container text-center text-md-start mt-5\">
      <!-- Grid row -->
      <div class=\"row mt-3\">
        <!-- Grid column -->
        <div class=\"col-md-3 col-lg-4 col-xl-3 mx-auto mt-4 mb-4\">
          <!-- Content -->
          <h6 class=\"text-uppercase fw-bold\">Mon Site</h6>
          <hr class=\"mb-4 mt-0 d-inline-block mx-auto\" style=\"width: 60px; background-color: #7c4dff; height: 2px\" />
          <p>
            Je suis un artiste peintre
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class=\"col-md-2 col-lg-2 col-xl-2 mx-auto mt-4 mb-4\">
          <!-- Links -->
          <h6 class=\"text-uppercase fw-bold\">Menu</h6>
          <hr class=\"mb-4 mt-0 d-inline-block mx-auto\" style=\"width: 60px; background-color: #7c4dff; height: 2px\" />
          <p>
            <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("realisations");
        echo "\" class=\"text-dark text-decoration-none\">Réalisations</a>
          </p>
          <p>
            <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actualites");
        echo "\" class=\"text-dark text-decoration-none\">Actualités</a>
          </p>
          <p>
            <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("portfolio");
        echo "\" class=\"text-dark text-decoration-none\">Portfolio</a>
          </p>
          <p>
            <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("a_propos");
        echo "\" class=\"text-dark text-decoration-none\">A propos</a>
          </p>
          <p>
            <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"text-dark text-decoration-none\">Me contacter</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class=\"col-md-3 col-lg-2 col-xl-2 mx-auto mt-4 mb-4\">
          <!-- Links -->
          <h6 class=\"text-uppercase fw-bold\">Informations</h6>
          <hr class=\"mb-4 mt-0 d-inline-block mx-auto\" style=\"width: 60px; background-color: #7c4dff; height: 2px\" />
          <p>
            <a href=\"#!\" class=\"text-dark text-decoration-none\">Artiste peintre</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-dark text-decoration-none\">Je réalise mes peintures directement à l'aquarelle ou à l'atelier ou en
              pleine nature</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class=\"col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mt-4 mb-4\">
          <!-- Links -->
          <h6 class=\"text-uppercase fw-bold\">Mentions légales</h6>
          <hr class=\"mb-4 mt-0 d-inline-block mx-auto\" style=\"width: 60px; background-color: #7c4dff; height: 2px\" />
          <p>
            <a href=\"#!\" class=\"text-dark text-decoration-none\">RGPD</a>
          </p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class=\"text-center p-3\" style=\"background-color: rgba(0, 0, 0, 0.2)\">
    © 2020 Copyright:
    <a class=\"text-dark\" href=\"https://mdbootstrap.com/\">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 37,  87 => 34,  81 => 31,  75 => 28,  69 => 25,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer -->
<footer class=\"text-center text-lg-start text-dark\" style=\"background-color: #ECEFF1\">
  <!-- Section: Links  -->
  <section class=\"\">
    <div class=\"container text-center text-md-start mt-5\">
      <!-- Grid row -->
      <div class=\"row mt-3\">
        <!-- Grid column -->
        <div class=\"col-md-3 col-lg-4 col-xl-3 mx-auto mt-4 mb-4\">
          <!-- Content -->
          <h6 class=\"text-uppercase fw-bold\">Mon Site</h6>
          <hr class=\"mb-4 mt-0 d-inline-block mx-auto\" style=\"width: 60px; background-color: #7c4dff; height: 2px\" />
          <p>
            Je suis un artiste peintre
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class=\"col-md-2 col-lg-2 col-xl-2 mx-auto mt-4 mb-4\">
          <!-- Links -->
          <h6 class=\"text-uppercase fw-bold\">Menu</h6>
          <hr class=\"mb-4 mt-0 d-inline-block mx-auto\" style=\"width: 60px; background-color: #7c4dff; height: 2px\" />
          <p>
            <a href=\"{{ path('realisations')}}\" class=\"text-dark text-decoration-none\">Réalisations</a>
          </p>
          <p>
            <a href=\"{{ path('actualites')}}\" class=\"text-dark text-decoration-none\">Actualités</a>
          </p>
          <p>
            <a href=\"{{ path('portfolio')}}\" class=\"text-dark text-decoration-none\">Portfolio</a>
          </p>
          <p>
            <a href=\"{{ path('a_propos')}}\" class=\"text-dark text-decoration-none\">A propos</a>
          </p>
          <p>
            <a href=\"{{ path('contact')}}\" class=\"text-dark text-decoration-none\">Me contacter</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class=\"col-md-3 col-lg-2 col-xl-2 mx-auto mt-4 mb-4\">
          <!-- Links -->
          <h6 class=\"text-uppercase fw-bold\">Informations</h6>
          <hr class=\"mb-4 mt-0 d-inline-block mx-auto\" style=\"width: 60px; background-color: #7c4dff; height: 2px\" />
          <p>
            <a href=\"#!\" class=\"text-dark text-decoration-none\">Artiste peintre</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-dark text-decoration-none\">Je réalise mes peintures directement à l'aquarelle ou à l'atelier ou en
              pleine nature</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class=\"col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mt-4 mb-4\">
          <!-- Links -->
          <h6 class=\"text-uppercase fw-bold\">Mentions légales</h6>
          <hr class=\"mb-4 mt-0 d-inline-block mx-auto\" style=\"width: 60px; background-color: #7c4dff; height: 2px\" />
          <p>
            <a href=\"#!\" class=\"text-dark text-decoration-none\">RGPD</a>
          </p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class=\"text-center p-3\" style=\"background-color: rgba(0, 0, 0, 0.2)\">
    © 2020 Copyright:
    <a class=\"text-dark\" href=\"https://mdbootstrap.com/\">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->", "base/footer.html.twig", "C:\\Users\\utilisateur\\Desktop\\Symfony\\sitepeinture\\templates\\base\\footer.html.twig");
    }
}
