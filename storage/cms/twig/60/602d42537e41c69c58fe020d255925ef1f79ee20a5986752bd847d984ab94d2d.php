<?php

/* C:\xampp\htdocs\acme/themes/acme/layouts/default.htm */
class __TwigTemplate_3a3876e58d44824fbb3e7b7c6ae377c46803a910c40c5f53e480f7694ad33494 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <title>Acme - ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "title", []), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "meta_description", []), "html", null, true);
        echo "\" />
    <link
      rel=\"stylesheet\"
      href=\"https://bootswatch.com/4/flatly/bootstrap.min.css\"
    />
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme.css");
        echo "\" />
    ";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 12
        echo "  </head>
  <body>
    <head>
      ";
        // line 15
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 16
        echo "    </head>

    <div class=\"container mt-3\">
      ";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 20
        echo "    </div>

    <footer>
      ";
        // line 23
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 24
        echo "    </footer>

    <script src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
    <script src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
    <script src=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/app.js");
        echo "\"></script>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme/themes/acme/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 28,  80 => 27,  76 => 26,  72 => 24,  68 => 23,  63 => 20,  61 => 19,  56 => 16,  52 => 15,  47 => 12,  44 => 11,  40 => 10,  32 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <title>Acme - {{ this.page.title }}</title>
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\" />
    <link
      rel=\"stylesheet\"
      href=\"https://bootswatch.com/4/flatly/bootstrap.min.css\"
    />
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/theme.css' | theme }}\" />
    {% styles %}
  </head>
  <body>
    <head>
      {% partial 'site/header' %}
    </head>

    <div class=\"container mt-3\">
      {% page %}
    </div>

    <footer>
      {% partial 'site/footer' %}
    </footer>

    <script src=\"{{ 'assets/vendor/jquery.js' | theme }}\"></script>
    <script src=\"{{ 'assets/vendor/bootstrap.js' | theme }}\"></script>
    <script src=\"{{ 'assets/javascript/app.js' | theme }}\"></script>
  </body>
</html>", "C:\\xampp\\htdocs\\acme/themes/acme/layouts/default.htm", "");
    }
}
