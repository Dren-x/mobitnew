<?php

/* admin/blog/index.html.twig */
class __TwigTemplate_46e83c69d4b134e4a3695ddcd099f49869b02a18b8e8a93763d269e78a47b4ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/blog/index.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fdf148d721515d7084e85814a9b88032ad1b9208c777ff28e1af1fb236e35139 = $this->env->getExtension("native_profiler");
        $__internal_fdf148d721515d7084e85814a9b88032ad1b9208c777ff28e1af1fb236e35139->enter($__internal_fdf148d721515d7084e85814a9b88032ad1b9208c777ff28e1af1fb236e35139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdf148d721515d7084e85814a9b88032ad1b9208c777ff28e1af1fb236e35139->leave($__internal_fdf148d721515d7084e85814a9b88032ad1b9208c777ff28e1af1fb236e35139_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_475ece5da394ad0f1b41955244ee7cf687e26ab7c22e9a18d7a651e5c256a6a4 = $this->env->getExtension("native_profiler");
        $__internal_475ece5da394ad0f1b41955244ee7cf687e26ab7c22e9a18d7a651e5c256a6a4->enter($__internal_475ece5da394ad0f1b41955244ee7cf687e26ab7c22e9a18d7a651e5c256a6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "admin_post_index";
        
        $__internal_475ece5da394ad0f1b41955244ee7cf687e26ab7c22e9a18d7a651e5c256a6a4->leave($__internal_475ece5da394ad0f1b41955244ee7cf687e26ab7c22e9a18d7a651e5c256a6a4_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_b0f2d26524004a3fac2c4f2fa12801b60c7c1834824eae036605bc9222b61d89 = $this->env->getExtension("native_profiler");
        $__internal_b0f2d26524004a3fac2c4f2fa12801b60c7c1834824eae036605bc9222b61d89->enter($__internal_b0f2d26524004a3fac2c4f2fa12801b60c7c1834824eae036605bc9222b61d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.post_list"), "html", null, true);
        echo "</h1>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.title"), "html", null, true);
        echo "</th>
                <th><i class=\"fa fa-user\"></i> ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.author"), "html", null, true);
        echo "</th>
                <th><i class=\"fa fa-calendar\"></i> ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.published_at"), "html", null, true);
        echo "</th>
                <th><i class=\"fa fa-cogs\"></i> ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.actions"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 19
            echo "            <tr>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "authorEmail", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["post"], "publishedAt", array())) {
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["post"], "publishedAt", array()), "short", "short"), "html", null, true);
            }
            echo "</td>
                <td>
                    <div class=\"item-actions\">
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default\">
                            ";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show"), "html", null, true);
            echo "
                        </a>

                        ";
            // line 29
            if ($this->getAttribute($context["post"], "isAuthor", array(0 => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())), "method")) {
                // line 30
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_post_edit", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">
                                <i class=\"fa fa-edit\"></i> ";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit"), "html", null, true);
                echo "
                            </a>
                        ";
            }
            // line 34
            echo "                    </div>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "            <tr>
                <td colspan=\"4\" align=\"center\">";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("post.no_posts_found"), "html", null, true);
            echo "</td>
           </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>
";
        
        $__internal_b0f2d26524004a3fac2c4f2fa12801b60c7c1834824eae036605bc9222b61d89->leave($__internal_b0f2d26524004a3fac2c4f2fa12801b60c7c1834824eae036605bc9222b61d89_prof);

    }

    // line 46
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_df83fa8e1814977934ad6b647709b671defce4e77fdc027d47e715005ebaea51 = $this->env->getExtension("native_profiler");
        $__internal_df83fa8e1814977934ad6b647709b671defce4e77fdc027d47e715005ebaea51->enter($__internal_df83fa8e1814977934ad6b647709b671defce4e77fdc027d47e715005ebaea51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 47
        echo "    <div class=\"section actions\">
        <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("admin_post_new");
        echo "\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-plus\"></i> ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create_post"), "html", null, true);
        echo "
        </a>
    </div>

    ";
        // line 53
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 55
        echo $this->env->getExtension('code_explorer_source_code')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_df83fa8e1814977934ad6b647709b671defce4e77fdc027d47e715005ebaea51->leave($__internal_df83fa8e1814977934ad6b647709b671defce4e77fdc027d47e715005ebaea51_prof);

    }

    public function getTemplateName()
    {
        return "admin/blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 55,  178 => 53,  171 => 49,  167 => 48,  164 => 47,  158 => 46,  149 => 42,  140 => 39,  137 => 38,  129 => 34,  123 => 31,  118 => 30,  116 => 29,  110 => 26,  106 => 25,  98 => 22,  94 => 21,  90 => 20,  87 => 19,  82 => 18,  75 => 14,  71 => 13,  67 => 12,  63 => 11,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'admin/layout.html.twig' %}*/
/* */
/* {% block body_id 'admin_post_index' %}*/
/* */
/* {% block main %}*/
/*     <h1>{{ 'title.post_list'|trans }}</h1>*/
/* */
/*     <table class="table table-striped">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{ 'label.title'|trans }}</th>*/
/*                 <th><i class="fa fa-user"></i> {{ 'label.author'|trans }}</th>*/
/*                 <th><i class="fa fa-calendar"></i> {{ 'label.published_at'|trans }}</th>*/
/*                 <th><i class="fa fa-cogs"></i> {{ 'label.actions'|trans }}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for post in posts %}*/
/*             <tr>*/
/*                 <td>{{ post.title }}</td>*/
/*                 <td>{{ post.authorEmail }}</td>*/
/*                 <td>{% if post.publishedAt %}{{ post.publishedAt|localizeddate('short', 'short') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <div class="item-actions">*/
/*                         <a href="{{ path('admin_post_show', { id: post.id }) }}" class="btn btn-sm btn-default">*/
/*                             {{ 'action.show'|trans }}*/
/*                         </a>*/
/* */
/*                         {% if post.isAuthor(app.user) %}*/
/*                             <a href="{{ path('admin_post_edit', { id: post.id }) }}" class="btn btn-sm btn-primary">*/
/*                                 <i class="fa fa-edit"></i> {{ 'action.edit'|trans }}*/
/*                             </a>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </td>*/
/*             </tr>*/
/*         {% else %}*/
/*             <tr>*/
/*                 <td colspan="4" align="center">{{ 'post.no_posts_found'|trans }}</td>*/
/*            </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/*     <div class="section actions">*/
/*         <a href="{{ path('admin_post_new') }}" class="btn btn-lg btn-block btn-success">*/
/*             <i class="fa fa-plus"></i> {{ 'action.create_post'|trans }}*/
/*         </a>*/
/*     </div>*/
/* */
/*     {{ parent() }}*/
/* */
/*     {{ show_source_code(_self) }}*/
/* {% endblock %}*/
/* */
