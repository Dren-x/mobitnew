<?php

/* form/fields.html.twig */
class __TwigTemplate_187fc84e2fd6043c59138ed2c1e61e4125e26a673fd35b385fcaf4b9780963a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'app_datetimepicker_widget' => array($this, 'block_app_datetimepicker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33179b88630364cda959f9f73ba84b94a69cd66f591f5e36ac3a6479559fcf2d = $this->env->getExtension("native_profiler");
        $__internal_33179b88630364cda959f9f73ba84b94a69cd66f591f5e36ac3a6479559fcf2d->enter($__internal_33179b88630364cda959f9f73ba84b94a69cd66f591f5e36ac3a6479559fcf2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 7
        echo "
";
        // line 8
        $this->displayBlock('app_datetimepicker_widget', $context, $blocks);
        
        $__internal_33179b88630364cda959f9f73ba84b94a69cd66f591f5e36ac3a6479559fcf2d->leave($__internal_33179b88630364cda959f9f73ba84b94a69cd66f591f5e36ac3a6479559fcf2d_prof);

    }

    public function block_app_datetimepicker_widget($context, array $blocks = array())
    {
        $__internal_80a9cd6c4848fc6ab8c544501622d77f63ebd3b8657b7656366e8284bd7b155c = $this->env->getExtension("native_profiler");
        $__internal_80a9cd6c4848fc6ab8c544501622d77f63ebd3b8657b7656366e8284bd7b155c->enter($__internal_80a9cd6c4848fc6ab8c544501622d77f63ebd3b8657b7656366e8284bd7b155c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "app_datetimepicker_widget"));

        // line 9
        echo "    ";
        ob_start();
        // line 10
        echo "        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            ";
        // line 11
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
            <span class=\"input-group-addon\">
                <span class=\"fa fa-calendar\"></span>
            </span>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_80a9cd6c4848fc6ab8c544501622d77f63ebd3b8657b7656366e8284bd7b155c->leave($__internal_80a9cd6c4848fc6ab8c544501622d77f63ebd3b8657b7656366e8284bd7b155c_prof);

    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 11,  41 => 10,  38 => 9,  26 => 8,  23 => 7,);
    }
}
/* {#*/
/*    Each field type is rendered by a template fragment, which is determined*/
/*    by the value of your getName() method and the suffix _widget.*/
/* */
/*    See http://symfony.com/doc/current/cookbook/form/create_custom_field_type.html#creating-a-template-for-the-field*/
/* #}*/
/* */
/* {% block app_datetimepicker_widget %}*/
/*     {% spaceless %}*/
/*         <div class="input-group date" data-toggle="datetimepicker">*/
/*             {{ block('datetime_widget') }}*/
/*             <span class="input-group-addon">*/
/*                 <span class="fa fa-calendar"></span>*/
/*             </span>*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock %}*/
/* */
