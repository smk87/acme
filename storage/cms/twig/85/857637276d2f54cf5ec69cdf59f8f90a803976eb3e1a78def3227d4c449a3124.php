<?php

/* C:\xampp\htdocs\acme/themes/acme/partials/site/header.htm */
class __TwigTemplate_88d91af731d12d607980dafb1979019f2cf24f686e866738076e53412c4035c5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
  <a class=\"navbar-brand\" href=\"#\">";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "site_name", []), "html", null, true);
        echo "</a>
  <button
    class=\"navbar-toggler\"
    type=\"button\"
    data-toggle=\"collapse\"
    data-target=\"#navbarColor01\"
    aria-controls=\"navbarColor01\"
    aria-expanded=\"false\"
    aria-label=\"Toggle navigation\"
  >
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item ";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) == "home")) {
            echo "active";
        }
        echo "\">
        <a class=\"nav-link\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home</a>
      </li>
      <li class=\"nav-item ";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) == "about")) {
            echo "active";
        }
        echo "\">
        <a class=\"nav-link\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">About</a>
      </li>
      <li class=\"nav-item ";
        // line 23
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) == "blog")) {
            echo "active";
        }
        echo "\">
        <a class=\"nav-link\" href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\">Blog</a>
      </li>
      <li class=\"nav-item ";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) == "contact")) {
            echo "active";
        }
        echo "\">
        <a class=\"nav-link\" href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contact</a>
      </li>
    </ul>
    <form class=\"form-inline my-2 my-lg-0\">
      <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" />
      <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">
        Search
      </button>
    </form>
  </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme/themes/acme/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 27,  77 => 26,  72 => 24,  66 => 23,  61 => 21,  55 => 20,  50 => 18,  44 => 17,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
  <a class=\"navbar-brand\" href=\"#\">{{ this.theme.site_name }}</a>
  <button
    class=\"navbar-toggler\"
    type=\"button\"
    data-toggle=\"collapse\"
    data-target=\"#navbarColor01\"
    aria-controls=\"navbarColor01\"
    aria-expanded=\"false\"
    aria-label=\"Toggle navigation\"
  >
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item {% if this.page.id=='home' %}active{% endif %}\">
        <a class=\"nav-link\" href=\"{{ 'home' | page }}\">Home</a>
      </li>
      <li class=\"nav-item {% if this.page.id=='about' %}active{% endif %}\">
        <a class=\"nav-link\" href=\"{{ 'about' | page }}\">About</a>
      </li>
      <li class=\"nav-item {% if this.page.id=='blog' %}active{% endif %}\">
        <a class=\"nav-link\" href=\"{{ 'blog' | page }}\">Blog</a>
      </li>
      <li class=\"nav-item {% if this.page.id=='contact' %}active{% endif %}\">
        <a class=\"nav-link\" href=\"{{ 'contact' | page }}\">Contact</a>
      </li>
    </ul>
    <form class=\"form-inline my-2 my-lg-0\">
      <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" />
      <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">
        Search
      </button>
    </form>
  </div>
</nav>", "C:\\xampp\\htdocs\\acme/themes/acme/partials/site/header.htm", "");
    }
}
