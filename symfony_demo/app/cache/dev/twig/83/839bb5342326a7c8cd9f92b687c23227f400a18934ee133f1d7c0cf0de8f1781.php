<?php

/* default/homepage.html.twig */
class __TwigTemplate_5a2a8a0b678c90707ad11068a77f11266cc4b8ac85907b7055f34f7e81a91e37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/homepage.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'footer' => array($this, 'block_footer'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df2648fbc2c7b823465754ea3f9098eed761bd82d84f5b754aabc097da7be500 = $this->env->getExtension("native_profiler");
        $__internal_df2648fbc2c7b823465754ea3f9098eed761bd82d84f5b754aabc097da7be500->enter($__internal_df2648fbc2c7b823465754ea3f9098eed761bd82d84f5b754aabc097da7be500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df2648fbc2c7b823465754ea3f9098eed761bd82d84f5b754aabc097da7be500->leave($__internal_df2648fbc2c7b823465754ea3f9098eed761bd82d84f5b754aabc097da7be500_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_ffdafd9d055fb5cbe9116ff0d6db73c6a79a37930f088b984d70415915240b42 = $this->env->getExtension("native_profiler");
        $__internal_ffdafd9d055fb5cbe9116ff0d6db73c6a79a37930f088b984d70415915240b42->enter($__internal_ffdafd9d055fb5cbe9116ff0d6db73c6a79a37930f088b984d70415915240b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "homepage";
        
        $__internal_ffdafd9d055fb5cbe9116ff0d6db73c6a79a37930f088b984d70415915240b42->leave($__internal_ffdafd9d055fb5cbe9116ff0d6db73c6a79a37930f088b984d70415915240b42_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_8ee83a98855f6c91ed32d329937be8d82385b8e07c2278f8e3cb3c9d4213ee62 = $this->env->getExtension("native_profiler");
        $__internal_8ee83a98855f6c91ed32d329937be8d82385b8e07c2278f8e3cb3c9d4213ee62->enter($__internal_8ee83a98855f6c91ed32d329937be8d82385b8e07c2278f8e3cb3c9d4213ee62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_8ee83a98855f6c91ed32d329937be8d82385b8e07c2278f8e3cb3c9d4213ee62->leave($__internal_8ee83a98855f6c91ed32d329937be8d82385b8e07c2278f8e3cb3c9d4213ee62_prof);

    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
        $__internal_3cad5af36b8baba1838f208facde2435d0674cf05b58cfbd54f0f91f6d5aeacb = $this->env->getExtension("native_profiler");
        $__internal_3cad5af36b8baba1838f208facde2435d0674cf05b58cfbd54f0f91f6d5aeacb->enter($__internal_3cad5af36b8baba1838f208facde2435d0674cf05b58cfbd54f0f91f6d5aeacb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_3cad5af36b8baba1838f208facde2435d0674cf05b58cfbd54f0f91f6d5aeacb->leave($__internal_3cad5af36b8baba1838f208facde2435d0674cf05b58cfbd54f0f91f6d5aeacb_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_eccf38bcd26e5282263d64309bab3b740d1d2b12d06093bee32660cc522c760c = $this->env->getExtension("native_profiler");
        $__internal_eccf38bcd26e5282263d64309bab3b740d1d2b12d06093bee32660cc522c760c->enter($__internal_eccf38bcd26e5282263d64309bab3b740d1d2b12d06093bee32660cc522c760c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <div class=\"page-header\">
        <h1>";
        // line 14
        echo $this->env->getExtension('translator')->trans("title.homepage");
        echo "</h1>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    ";
        // line 21
        echo $this->env->getExtension('translator')->trans("help.browse_app");
        echo "
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("blog_index");
        echo "\">
                        <i class=\"fa fa-users\"></i> ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.browse_app"), "html", null, true);
        echo "
                    </a>
                </p>
            </div>
        </div>

        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    ";
        // line 34
        echo $this->env->getExtension('translator')->trans("help.browse_admin");
        echo "
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("admin_index");
        echo "\">
                        <i class=\"fa fa-lock\"></i> ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.browse_admin"), "html", null, true);
        echo "
                    </a>
                </p>
            </div>
        </div>
    </div>
";
        
        $__internal_eccf38bcd26e5282263d64309bab3b740d1d2b12d06093bee32660cc522c760c->leave($__internal_eccf38bcd26e5282263d64309bab3b740d1d2b12d06093bee32660cc522c760c_prof);

    }

    public function getTemplateName()
    {
        return "default/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 38,  118 => 37,  112 => 34,  100 => 25,  96 => 24,  90 => 21,  80 => 14,  77 => 13,  71 => 12,  60 => 10,  49 => 9,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body_id 'homepage' %}*/
/* */
/* {#*/
/*     the homepage is a special page which displays neither a header nor a footer.*/
/*     this is done with the 'trick' of defining empty Twig blocks without any content*/
/* #}*/
/* {% block header %}{% endblock %}*/
/* {% block footer %}{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="page-header">*/
/*         <h1>{{ 'title.homepage'|trans|raw }}</h1>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="col-sm-6">*/
/*             <div class="jumbotron">*/
/*                 <p>*/
/*                     {{ 'help.browse_app'|trans|raw }}*/
/*                 </p>*/
/*                 <p>*/
/*                     <a class="btn btn-primary btn-lg" href="{{ path('blog_index') }}">*/
/*                         <i class="fa fa-users"></i> {{ 'action.browse_app'|trans }}*/
/*                     </a>*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="col-sm-6">*/
/*             <div class="jumbotron">*/
/*                 <p>*/
/*                     {{ 'help.browse_admin'|trans|raw }}*/
/*                 </p>*/
/*                 <p>*/
/*                     <a class="btn btn-primary btn-lg" href="{{ path('admin_index') }}">*/
/*                         <i class="fa fa-lock"></i> {{ 'action.browse_admin'|trans }}*/
/*                     </a>*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
