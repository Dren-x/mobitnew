<?php

/* BlogBlogBundle::layout.html.twig */
class __TwigTemplate_d778e9f74f3b555ab0b0d94e8cafe69e3fbf9fd09f14b3bfe2feb0989ff23078 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BlogBlogBundle::layout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/blogblog/css/form.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />


";
    }

    // line 8
    public function block_sidebar($context, array $blocks = array())
    {
        // line 9
        echo "    <p>lol</p>
";
    }

    public function getTemplateName()
    {
        return "BlogBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  45 => 8,  37 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link href="{{ asset('bundles/blogblog/css/form.css') }}" type="text/css" rel="stylesheet" />*/
/* */
/* */
/* {% endblock %}*/
/* {% block sidebar %}*/
/*     <p>lol</p>*/
/* {% endblock %}*/
