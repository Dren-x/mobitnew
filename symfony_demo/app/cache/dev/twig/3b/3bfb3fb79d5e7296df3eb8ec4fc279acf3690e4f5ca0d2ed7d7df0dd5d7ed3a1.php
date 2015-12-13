<?php

/* admin/blog/edit.html.twig */
class __TwigTemplate_40f0d333cfa5cc306fd1a34ca09bd92e07ea0190302ece21e8ea8995fff7daac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/blog/edit.html.twig", 1);
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
        $__internal_47b0897580ae74d1edcc0e7610f0cc1abad15ee27aaff8aa0346289fb1b2afd1 = $this->env->getExtension("native_profiler");
        $__internal_47b0897580ae74d1edcc0e7610f0cc1abad15ee27aaff8aa0346289fb1b2afd1->enter($__internal_47b0897580ae74d1edcc0e7610f0cc1abad15ee27aaff8aa0346289fb1b2afd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47b0897580ae74d1edcc0e7610f0cc1abad15ee27aaff8aa0346289fb1b2afd1->leave($__internal_47b0897580ae74d1edcc0e7610f0cc1abad15ee27aaff8aa0346289fb1b2afd1_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_ae12d79486acd7b0b6cc3f59e80ce690df0a577117997e2ca624cd5fdf300dab = $this->env->getExtension("native_profiler");
        $__internal_ae12d79486acd7b0b6cc3f59e80ce690df0a577117997e2ca624cd5fdf300dab->enter($__internal_ae12d79486acd7b0b6cc3f59e80ce690df0a577117997e2ca624cd5fdf300dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "admin_post_edit";
        
        $__internal_ae12d79486acd7b0b6cc3f59e80ce690df0a577117997e2ca624cd5fdf300dab->leave($__internal_ae12d79486acd7b0b6cc3f59e80ce690df0a577117997e2ca624cd5fdf300dab_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_a958556ecb39d79359716111f2b01cfd0ba6613e2fd6d19098a1cd426e2ada33 = $this->env->getExtension("native_profiler");
        $__internal_a958556ecb39d79359716111f2b01cfd0ba6613e2fd6d19098a1cd426e2ada33->enter($__internal_a958556ecb39d79359716111f2b01cfd0ba6613e2fd6d19098a1cd426e2ada33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit_post", array("%id%" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "</h1>

    ";
        // line 8
        echo twig_include($this->env, $context, "default/_flash_messages.html.twig");
        echo "

    ";
        // line 10
        echo twig_include($this->env, $context, "admin/blog/_form.html.twig", array("form" =>         // line 11
(isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "button_label" => $this->env->getExtension('translator')->trans("action.save"), "include_back_to_home_link" => true), false);
        // line 14
        echo "
";
        
        $__internal_a958556ecb39d79359716111f2b01cfd0ba6613e2fd6d19098a1cd426e2ada33->leave($__internal_a958556ecb39d79359716111f2b01cfd0ba6613e2fd6d19098a1cd426e2ada33_prof);

    }

    // line 17
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_7278b9ed4b0b589d72aca0d61f2d4e86fce8480193583d136c990dc01b811edb = $this->env->getExtension("native_profiler");
        $__internal_7278b9ed4b0b589d72aca0d61f2d4e86fce8480193583d136c990dc01b811edb->enter($__internal_7278b9ed4b0b589d72aca0d61f2d4e86fce8480193583d136c990dc01b811edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 18
        echo "    <div class=\"section actions\">
        ";
        // line 19
        echo twig_include($this->env, $context, "admin/blog/_form.html.twig", array("form" =>         // line 20
(isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "button_label" => $this->env->getExtension('translator')->trans("action.delete_post"), "button_css" => "btn btn-lg btn-block btn-danger", "show_confirmation" => true), false);
        // line 24
        echo "
    </div>

    ";
        // line 27
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 29
        echo $this->env->getExtension('code_explorer_source_code')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_7278b9ed4b0b589d72aca0d61f2d4e86fce8480193583d136c990dc01b811edb->leave($__internal_7278b9ed4b0b589d72aca0d61f2d4e86fce8480193583d136c990dc01b811edb_prof);

    }

    public function getTemplateName()
    {
        return "admin/blog/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 29,  93 => 27,  88 => 24,  86 => 20,  85 => 19,  82 => 18,  76 => 17,  68 => 14,  66 => 11,  65 => 10,  60 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'admin/layout.html.twig' %}*/
/* */
/* {% block body_id 'admin_post_edit' %}*/
/* */
/* {% block main %}*/
/*     <h1>{{ 'title.edit_post'|trans({'%id%': post.id}) }}</h1>*/
/* */
/*     {{ include('default/_flash_messages.html.twig') }}*/
/* */
/*     {{ include('admin/blog/_form.html.twig', {*/
/*         form: edit_form,*/
/*         button_label: 'action.save'|trans,*/
/*         include_back_to_home_link: true,*/
/*     }, with_context = false) }}*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/*     <div class="section actions">*/
/*         {{ include('admin/blog/_form.html.twig', {*/
/*             form: delete_form,*/
/*             button_label: 'action.delete_post'|trans,*/
/*             button_css: 'btn btn-lg btn-block btn-danger',*/
/*             show_confirmation: true,*/
/*         }, with_context = false) }}*/
/*     </div>*/
/* */
/*     {{ parent() }}*/
/* */
/*     {{ show_source_code(_self) }}*/
/* {% endblock %}*/
/* */
