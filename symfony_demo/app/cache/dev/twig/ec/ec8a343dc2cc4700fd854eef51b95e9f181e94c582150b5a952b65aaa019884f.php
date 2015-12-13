<?php

/* blog/index.html.twig */
class __TwigTemplate_95d6a875e7fed33615f7852651f838c7c9501abbe34a91a85099024e699ae27f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_124572d01f804322267feb62ab089e1414fd810d5c36bc560343a0e77740833e = $this->env->getExtension("native_profiler");
        $__internal_124572d01f804322267feb62ab089e1414fd810d5c36bc560343a0e77740833e->enter($__internal_124572d01f804322267feb62ab089e1414fd810d5c36bc560343a0e77740833e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_124572d01f804322267feb62ab089e1414fd810d5c36bc560343a0e77740833e->leave($__internal_124572d01f804322267feb62ab089e1414fd810d5c36bc560343a0e77740833e_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_5483762a7971c07cdce05ff53894354baf7f8fd34318a5e1a075bb4d96d15849 = $this->env->getExtension("native_profiler");
        $__internal_5483762a7971c07cdce05ff53894354baf7f8fd34318a5e1a075bb4d96d15849->enter($__internal_5483762a7971c07cdce05ff53894354baf7f8fd34318a5e1a075bb4d96d15849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "blog_index";
        
        $__internal_5483762a7971c07cdce05ff53894354baf7f8fd34318a5e1a075bb4d96d15849->leave($__internal_5483762a7971c07cdce05ff53894354baf7f8fd34318a5e1a075bb4d96d15849_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_e4a1cfb1898d4d466703e5d7cc84aa4451989057f891565aa0314aba9607fc01 = $this->env->getExtension("native_profiler");
        $__internal_e4a1cfb1898d4d466703e5d7cc84aa4451989057f891565aa0314aba9607fc01->enter($__internal_e4a1cfb1898d4d466703e5d7cc84aa4451989057f891565aa0314aba9607fc01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "        <article class=\"post\">
            <h2>
                <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_post", array("slug" => $this->getAttribute($context["post"], "slug", array()))), "html", null, true);
            echo "\">
                    ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "
                </a>
            </h2>

            ";
            // line 14
            echo $this->env->getExtension('app.extension')->markdownToHtml($this->getAttribute($context["post"], "summary", array()));
            echo "
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 17
            echo "        <div class=\"well\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("post.no_posts_found"), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
    <div class=\"navigation text-center\">
        ";
        // line 21
        echo $this->env->getExtension('knp_pagination')->render((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        echo "
    </div>
";
        
        $__internal_e4a1cfb1898d4d466703e5d7cc84aa4451989057f891565aa0314aba9607fc01->leave($__internal_e4a1cfb1898d4d466703e5d7cc84aa4451989057f891565aa0314aba9607fc01_prof);

    }

    // line 25
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_86d597366087eaec6baba8e29503bc701f181cd8c278d704d086769921fec9eb = $this->env->getExtension("native_profiler");
        $__internal_86d597366087eaec6baba8e29503bc701f181cd8c278d704d086769921fec9eb->enter($__internal_86d597366087eaec6baba8e29503bc701f181cd8c278d704d086769921fec9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 26
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 28
        echo $this->env->getExtension('code_explorer_source_code')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_86d597366087eaec6baba8e29503bc701f181cd8c278d704d086769921fec9eb->leave($__internal_86d597366087eaec6baba8e29503bc701f181cd8c278d704d086769921fec9eb_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 28,  112 => 26,  106 => 25,  96 => 21,  92 => 19,  83 => 17,  75 => 14,  68 => 10,  64 => 9,  60 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body_id 'blog_index' %}*/
/* */
/* {% block main %}*/
/*     {% for post in posts %}*/
/*         <article class="post">*/
/*             <h2>*/
/*                 <a href="{{ path('blog_post', { slug: post.slug }) }}">*/
/*                     {{ post.title }}*/
/*                 </a>*/
/*             </h2>*/
/* */
/*             {{ post.summary|md2html }}*/
/*         </article>*/
/*     {% else %}*/
/*         <div class="well">{{ 'post.no_posts_found'|trans }}</div>*/
/*     {% endfor %}*/
/* */
/*     <div class="navigation text-center">*/
/*         {{ knp_pagination_render(posts) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/*     {{ parent() }}*/
/* */
/*     {{ show_source_code(_self) }}*/
/* {% endblock %}*/
/* */
