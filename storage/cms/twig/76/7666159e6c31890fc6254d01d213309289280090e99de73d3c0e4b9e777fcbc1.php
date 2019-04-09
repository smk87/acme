<?php

/* C:\xampp\htdocs\acme/themes/responsiv-clean/partials/site/sidebar.htm */
class __TwigTemplate_36dd4c407b6c52c5349a6d96474313220536d6fd4d34b14a484ca5b564bf334d extends Twig_Template
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
        echo "[blogPosts] postsPerPage = \"5\" categoryPage = \"blog/category\" postPage =
\"blog/post\" sortOrder = \"published_at desc\" ==

<div class=\"sidebar-close visible-sm visible-xs\">
  <a href=\"javascript:;\" onclick=\"toggleSidebar()\" class=\"close\">&times;</a>
</div>

<div class=\"sidebar-segment hidden-sm hidden-xs\">
  <h1 class=\"site-name\">
    <a href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "site_name", []), "html", null, true);
        echo "</a>
  </h1>
  <p class=\"site-motto\">
    ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "site_motto", []), "html", null, true);
        echo "
  </p>
</div>

<div class=\"sidebar-segment\">
  <h2 class=\"segment-title\">Main Menu</h2>
  <ul class=\"segment-list\">
    <li><a href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home</a></li>
    <li><a href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contact</a></li>
  </ul>
</div>

<div class=\"sidebar-segment\">
  <h2 class=\"segment-title\">Recent posts</h2>
  <ul class=\"segment-list\">
    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", []));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 29
            echo "    <li>
      <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", []), "html", null, true);
            echo "</a>
    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "  </ul>
</div>

<div class=\"sidebar-segment\">
  <h2 class=\"segment-title\">Follow me</h2>
  <ul class=\"segment-list\">
    ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "twitter_url", [])) {
            // line 40
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "twitter_url", []), "html", null, true);
            echo "\" target=\"_blank\">Twitter</a></li>
    ";
        }
        // line 41
        echo " ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "facebook_url", [])) {
            // line 42
            echo "    <li>
      <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "facebook_url", []), "html", null, true);
            echo "\" target=\"_blank\">Facebook</a>
    </li>
    ";
        }
        // line 46
        echo "    <li><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/rss");
        echo "\">RSS Feed</a></li>
  </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme/themes/responsiv-clean/partials/site/sidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 46,  106 => 43,  103 => 42,  100 => 41,  94 => 40,  92 => 39,  84 => 33,  73 => 30,  70 => 29,  66 => 28,  56 => 21,  52 => 20,  42 => 13,  34 => 10,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("[blogPosts] postsPerPage = \"5\" categoryPage = \"blog/category\" postPage =
\"blog/post\" sortOrder = \"published_at desc\" ==

<div class=\"sidebar-close visible-sm visible-xs\">
  <a href=\"javascript:;\" onclick=\"toggleSidebar()\" class=\"close\">&times;</a>
</div>

<div class=\"sidebar-segment hidden-sm hidden-xs\">
  <h1 class=\"site-name\">
    <a href=\"{{ 'home' | page }}\">{{ this.theme.site_name }}</a>
  </h1>
  <p class=\"site-motto\">
    {{ this.theme.site_motto }}
  </p>
</div>

<div class=\"sidebar-segment\">
  <h2 class=\"segment-title\">Main Menu</h2>
  <ul class=\"segment-list\">
    <li><a href=\"{{ 'home' | page }}\">Home</a></li>
    <li><a href=\"{{ 'contact' | page }}\">Contact</a></li>
  </ul>
</div>

<div class=\"sidebar-segment\">
  <h2 class=\"segment-title\">Recent posts</h2>
  <ul class=\"segment-list\">
    {% for post in blogPosts.posts %}
    <li>
      <a href=\"{{ post.url }}\">{{ post.title }}</a>
    </li>
    {% endfor %}
  </ul>
</div>

<div class=\"sidebar-segment\">
  <h2 class=\"segment-title\">Follow me</h2>
  <ul class=\"segment-list\">
    {% if this.theme.twitter_url %}
    <li><a href=\"{{ this.theme.twitter_url }}\" target=\"_blank\">Twitter</a></li>
    {% endif %} {% if this.theme.facebook_url %}
    <li>
      <a href=\"{{ this.theme.facebook_url }}\" target=\"_blank\">Facebook</a>
    </li>
    {% endif %}
    <li><a href=\"{{ 'blog/rss' | page }}\">RSS Feed</a></li>
  </ul>
</div>", "C:\\xampp\\htdocs\\acme/themes/responsiv-clean/partials/site/sidebar.htm", "");
    }
}
