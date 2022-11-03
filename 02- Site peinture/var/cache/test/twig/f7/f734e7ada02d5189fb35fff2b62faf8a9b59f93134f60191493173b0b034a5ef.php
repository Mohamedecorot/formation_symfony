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

/* security/login.html.twig */
class __TwigTemplate_5ae36c9e015e1561a7cdc5cf50a5a303dfd5a51bc60f52ffac9d11e71088947c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor\" crossorigin=\"anonymous\">
    <title>Connexion</title>
</head>
<body>
    <div class=\"containr\">
        <section class=\"vh-100\">
            <div class=\"container-fluid\">
              <div class=\"row\">
                <div class=\"col-sm-6 text-black\">

                  <div class=\"px-5 ms-xl-4\">
                    <i class=\"fas fa-crow fa-2x me-3 pt-5 mt-xl-4\" style=\"color: #709085;\"></i>
                    <span class=\"h1 fw-bold mb-0\">My Artist</span>
                  </div>

                  <div class=\"d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5\">

                    <form method=\"post\">
                      ";
        // line 25
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 25, $this->source); })())) {
            // line 26
            echo "                          <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 26, $this->source); })()), "messageKey", [], "any", false, false, false, 26), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 26, $this->source); })()), "messageData", [], "any", false, false, false, 26), "security"), "html", null, true);
            echo "</div>
                      ";
        }
        // line 28
        echo "
                      ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29)) {
            // line 30
            echo "                          <div class=\"mb-3\">
                              You are logged in as ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "username", [], "any", false, false, false, 31), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                          </div>
                      ";
        }
        // line 34
        echo "
                      <h1 class=\"h3 mb-3 font-weight-normal\">Connexion</h1>
                      <label for=\"inputEmail\">Email</label>
                      <input type=\"email\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control form-control-lg\" autocomplete=\"email\" required autofocus>
                      <label for=\"inputPassword\">Mot de passe</label>
                      <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control form-control-lg mb-3\" autocomplete=\"current-password\" required>

                      <input type=\"hidden\" name=\"_csrf_token\"
                             value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                      >

                      ";
        // line 55
        echo "
                      <button class=\"btn btn-lg btn-primary\" type=\"submit\">
                          Se connecter
                      </button>
                  </form>

                  </div>

                </div>
                <div class=\"col-sm-6 px-0 d-none d-sm-block\">
                  <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img3.webp\"
                    alt=\"Login image\" class=\"w-100 vh-100\" style=\"object-fit: cover; object-position: left;\">
                </div>
              </div>
            </div>
        </section>
    </div>
</body>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2\" crossorigin=\"anonymous\"></script>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 55,  106 => 42,  98 => 37,  93 => 34,  85 => 31,  82 => 30,  80 => 29,  77 => 28,  71 => 26,  69 => 25,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor\" crossorigin=\"anonymous\">
    <title>Connexion</title>
</head>
<body>
    <div class=\"containr\">
        <section class=\"vh-100\">
            <div class=\"container-fluid\">
              <div class=\"row\">
                <div class=\"col-sm-6 text-black\">

                  <div class=\"px-5 ms-xl-4\">
                    <i class=\"fas fa-crow fa-2x me-3 pt-5 mt-xl-4\" style=\"color: #709085;\"></i>
                    <span class=\"h1 fw-bold mb-0\">My Artist</span>
                  </div>

                  <div class=\"d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5\">

                    <form method=\"post\">
                      {% if error %}
                          <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                      {% endif %}

                      {% if app.user %}
                          <div class=\"mb-3\">
                              You are logged in as {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                          </div>
                      {% endif %}

                      <h1 class=\"h3 mb-3 font-weight-normal\">Connexion</h1>
                      <label for=\"inputEmail\">Email</label>
                      <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control form-control-lg\" autocomplete=\"email\" required autofocus>
                      <label for=\"inputPassword\">Mot de passe</label>
                      <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control form-control-lg mb-3\" autocomplete=\"current-password\" required>

                      <input type=\"hidden\" name=\"_csrf_token\"
                             value=\"{{ csrf_token('authenticate') }}\"
                      >

                      {#
                          Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
                          See https://symfony.com/doc/current/security/remember_me.html

                          <div class=\"checkbox mb-3\">
                              <label>
                                  <input type=\"checkbox\" name=\"_remember_me\"> Remember me
                              </label>
                          </div>
                      #}

                      <button class=\"btn btn-lg btn-primary\" type=\"submit\">
                          Se connecter
                      </button>
                  </form>

                  </div>

                </div>
                <div class=\"col-sm-6 px-0 d-none d-sm-block\">
                  <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img3.webp\"
                    alt=\"Login image\" class=\"w-100 vh-100\" style=\"object-fit: cover; object-position: left;\">
                </div>
              </div>
            </div>
        </section>
    </div>
</body>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2\" crossorigin=\"anonymous\"></script>
</html>", "security/login.html.twig", "C:\\Users\\utilisateur\\Desktop\\Symfony\\sitepeinture\\templates\\security\\login.html.twig");
    }
}
