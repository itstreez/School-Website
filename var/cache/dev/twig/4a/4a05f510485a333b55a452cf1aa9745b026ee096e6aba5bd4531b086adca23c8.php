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

/* controller_beast/homepage.html.twig */
class __TwigTemplate_34bf7e2d8b892ae23112ee1fd0df7f5b6ba8d49abcffba1f8aad6173fb3f9780 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "controller_beast/homepage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "controller_beast/homepage.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
 <link rel=\"stylesheet\" href= \" ";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
    <!-- Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x\" crossorigin=\"anonymous\">

    <title>OB-SOFT SCHOOL</title>
  </head>
  <body>
   

   
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4\" crossorigin=\"anonymous\"></script>
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
      <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"https://berytech.org/companies/ob-soft/\">OB-SOFT SCHOOL</a> 
        <img src=\"https://berytech.org/wp-content/uploads/2017/05/OB-SOFT.jpg\"  style=\"max-height: 50px;\" </img>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
          <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Home</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list-classes");
        echo "\"> List-Classes</a>
            </li>
             <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add-classes");
        echo "\"> Add-Classes</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list-students");
        echo "\" >List-Students</a>
            </li>
             <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add-students");
        echo "\" >Add-Students</a>
            </li>
             <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list-courses");
        echo "\">List-Courses</a>
            </li>
             <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add-courses");
        echo "\" >Add-Courses</a>
            </li>
             <li 
              <a class=\"nav-link\" href=\"\" ></a>
            </li>
             <li 
              <a class=\"nav-link\" href=\"\" ></a>
            </li>
             <li 
              <a class=\"nav-link\" href=\"\" ></a>
            </li>
             <li 
              <a class=\"nav-link\" href=\"\" ></a>
            </li>
             <li 
              <a class=\"nav-link\" href=\"\" ></a>
            </li>
             <li 
              <a class=\"nav-link\" href=\"\" ></a>
            </li>
             <li 
              <a class=\"nav-link\" href=\"\" ></a>
            </li>
             <li 
              <a class=\"nav-link\" href=\"\" ></a>
            </li>
             <li 
              <a class=\"nav-link\" href=\"\" ></a>
            </li>
             <li 
              <a class=\"nav-link\" href=\"\" ></a>
            </li>
             <li 
              <a class=\"nav-link\" href=\"\" ></a>
            </li>
             <li 
              <a class=\"nav-link\" href=\"\" ></a>
            </li>
             <li 
              <a class=\"nav-link\" href=\"\" ></a>
            </li>
             <li 
              <a class=\"nav-link\" href=\"\" ></a>
            </li>
             <li 
              <a class=\"nav-link\" href=\"\" ></a>
            </li>
            
            <li class=\"nav-item \">
              <a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Login </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 101));
        foreach ($context['_seq'] as $context["_key"] => $context["messages"]) {
            // line 102
            echo "        <div class=\"alert alert-success\">
        ";
            // line 103
            echo twig_escape_filter($this->env, $context["messages"], "html", null, true);
            echo "
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "  
  
   
  </div>
</div>

<div class=\"p-3 mb-2 bg-success text-white text-center mw-100 mh-100\">Welcome to our OB School</div>
<div class=\"p-3 mb-2 bg-primary text-white text-center\">Login system will be developed soon</div>
<div class=\"p-3 mb-2 bg-info text-dark text-center\">Otherwise</div>
<div class=\"p-3 mb-2 bg-dark text-white text-center\">Exercice yourself by adding and searching data</div>
   
  </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "controller_beast/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 106,  173 => 103,  170 => 102,  166 => 101,  108 => 46,  102 => 43,  96 => 40,  90 => 37,  84 => 34,  78 => 31,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
 <link rel=\"stylesheet\" href= \" {{ asset('css/app.css') }}\">
    <!-- Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x\" crossorigin=\"anonymous\">

    <title>OB-SOFT SCHOOL</title>
  </head>
  <body>
   

   
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4\" crossorigin=\"anonymous\"></script>
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
      <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"https://berytech.org/companies/ob-soft/\">OB-SOFT SCHOOL</a> 
        <img src=\"https://berytech.org/wp-content/uploads/2017/05/OB-SOFT.jpg\"  style=\"max-height: 50px;\" </img>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
          <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Home</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('list-classes') }}\"> List-Classes</a>
            </li>
             <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('add-classes') }}\"> Add-Classes</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('list-students') }}\" >List-Students</a>
            </li>
             <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('add-students') }}\" >Add-Students</a>
            </li>
             <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('list-courses') }}\">List-Courses</a>
            </li>
             <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('add-courses') }}\" >Add-Courses</a>
            </li>
             <li 
              <a class=\"nav-link\" href=\"\" ></a>
            </li>
             <li 
              <a class=\"nav-link\" href=\"\" ></a>
            </li>
             <li 
              <a class=\"nav-link\" href=\"\" ></a>
            </li>
             <li 
              <a class=\"nav-link\" href=\"\" ></a>
            </li>
             <li 
              <a class=\"nav-link\" href=\"\" ></a>
            </li>
             <li 
              <a class=\"nav-link\" href=\"\" ></a>
            </li>
             <li 
              <a class=\"nav-link\" href=\"\" ></a>
            </li>
             <li 
              <a class=\"nav-link\" href=\"\" ></a>
            </li>
             <li 
              <a class=\"nav-link\" href=\"\" ></a>
            </li>
             <li 
              <a class=\"nav-link\" href=\"\" ></a>
            </li>
             <li 
              <a class=\"nav-link\" href=\"\" ></a>
            </li>
             <li 
              <a class=\"nav-link\" href=\"\" ></a>
            </li>
             <li 
              <a class=\"nav-link\" href=\"\" ></a>
            </li>
             <li 
              <a class=\"nav-link\" href=\"\" ></a>
            </li>
             <li 
              <a class=\"nav-link\" href=\"\" ></a>
            </li>
            
            <li class=\"nav-item \">
              <a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Login </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    {% for messages in app.flashes('success') %}
        <div class=\"alert alert-success\">
        {{ messages }}
        </div>
        {% endfor %}
  
  
   
  </div>
</div>

<div class=\"p-3 mb-2 bg-success text-white text-center mw-100 mh-100\">Welcome to our OB School</div>
<div class=\"p-3 mb-2 bg-primary text-white text-center\">Login system will be developed soon</div>
<div class=\"p-3 mb-2 bg-info text-dark text-center\">Otherwise</div>
<div class=\"p-3 mb-2 bg-dark text-white text-center\">Exercice yourself by adding and searching data</div>
   
  </body>
</html>", "controller_beast/homepage.html.twig", "/Users/eliomouhasseb3/school-website/templates/controller_beast/homepage.html.twig");
    }
}
