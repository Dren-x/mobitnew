<?php

/* base.html.twig */
class __TwigTemplate_f42abae2badb0f929f02ba8a42fd48f8659f8c98bc84783e074d1503ec6a0c1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'header_navigation_links' => array($this, 'block_header_navigation_links'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7922964ddef177061b27713f29e461d79fd259dc063003d4d2752cd6d39ab6a1 = $this->env->getExtension("native_profiler");
        $__internal_7922964ddef177061b27713f29e461d79fd259dc063003d4d2752cd6d39ab6a1->enter($__internal_7922964ddef177061b27713f29e461d79fd259dc063003d4d2752cd6d39ab6a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body id=\"";
        // line 30
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

        ";
        // line 32
        $this->displayBlock('header', $context, $blocks);
        // line 96
        echo "
        <div class=\"container body-container\">
            ";
        // line 98
        $this->displayBlock('body', $context, $blocks);
        // line 122
        echo "        </div>

        ";
        // line 124
        $this->displayBlock('footer', $context, $blocks);
        // line 143
        echo "
        ";
        // line 144
        $this->displayBlock('javascripts', $context, $blocks);
        // line 159
        echo "    </body>
</html>
";
        
        $__internal_7922964ddef177061b27713f29e461d79fd259dc063003d4d2752cd6d39ab6a1->leave($__internal_7922964ddef177061b27713f29e461d79fd259dc063003d4d2752cd6d39ab6a1_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_d3c34b7fcbf555f14726a99f89f33f447eee689c6b664cadef7ac0c2f463f4a7 = $this->env->getExtension("native_profiler");
        $__internal_d3c34b7fcbf555f14726a99f89f33f447eee689c6b664cadef7ac0c2f463f4a7->enter($__internal_d3c34b7fcbf555f14726a99f89f33f447eee689c6b664cadef7ac0c2f463f4a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony Demo application";
        
        $__internal_d3c34b7fcbf555f14726a99f89f33f447eee689c6b664cadef7ac0c2f463f4a7->leave($__internal_d3c34b7fcbf555f14726a99f89f33f447eee689c6b664cadef7ac0c2f463f4a7_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ce3c265696de875319011b392155a72025635ccb20ef178c872e264d0e41cb6a = $this->env->getExtension("native_profiler");
        $__internal_ce3c265696de875319011b392155a72025635ccb20ef178c872e264d0e41cb6a->enter($__internal_ce3c265696de875319011b392155a72025635ccb20ef178c872e264d0e41cb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        ";
        // line 24
        echo "
            <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_ce3c265696de875319011b392155a72025635ccb20ef178c872e264d0e41cb6a->leave($__internal_ce3c265696de875319011b392155a72025635ccb20ef178c872e264d0e41cb6a_prof);

    }

    // line 30
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_c48e3addfdee1c1be9f39a6fc84a3de4735f4612d689186253ba917ca3c8116a = $this->env->getExtension("native_profiler");
        $__internal_c48e3addfdee1c1be9f39a6fc84a3de4735f4612d689186253ba917ca3c8116a->enter($__internal_c48e3addfdee1c1be9f39a6fc84a3de4735f4612d689186253ba917ca3c8116a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_c48e3addfdee1c1be9f39a6fc84a3de4735f4612d689186253ba917ca3c8116a->leave($__internal_c48e3addfdee1c1be9f39a6fc84a3de4735f4612d689186253ba917ca3c8116a_prof);

    }

    // line 32
    public function block_header($context, array $blocks = array())
    {
        $__internal_8cfabb6280442b5a2247529040c3ffc53b4de34dc7feb3389c4c0298c283936d = $this->env->getExtension("native_profiler");
        $__internal_8cfabb6280442b5a2247529040c3ffc53b4de34dc7feb3389c4c0298c283936d->enter($__internal_8cfabb6280442b5a2247529040c3ffc53b4de34dc7feb3389c4c0298c283936d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 33
        echo "            <header>
                <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header\">
                            <a class=\"navbar-brand\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">
                                Symfony Demo
                            </a>

                            <button type=\"button\" class=\"navbar-toggle\"
                                    data-toggle=\"collapse\"
                                    data-target=\".navbar-collapse\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav navbar-right\">

                                ";
        // line 53
        $this->displayBlock('header_navigation_links', $context, $blocks);
        // line 73
        echo "
                                ";
        // line 74
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 75
            echo "                                    <li>
                                        <a href=\"";
            // line 76
            echo $this->env->getExtension('routing')->getPath("security_logout");
            echo "\">
                                            <i class=\"fa fa-sign-out\"></i> ";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.logout"), "html", null, true);
            echo "
                                        </a>
                                    </li>
                                ";
        }
        // line 81
        echo "
                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-globe\"></i> <span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu locales\" role=\"menu\">
                                        ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('app.extension')->getLocales());
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 86
            echo "                                            <li ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == $this->getAttribute($context["locale"], "code", array()))) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route", 1 => "blog_index"), "method"), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params", 1 => array()), "method"), array("_locale" => $this->getAttribute($context["locale"], "code", array())))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["locale"], "name", array())), "html", null, true);
            echo "</a></li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        ";
        
        $__internal_8cfabb6280442b5a2247529040c3ffc53b4de34dc7feb3389c4c0298c283936d->leave($__internal_8cfabb6280442b5a2247529040c3ffc53b4de34dc7feb3389c4c0298c283936d_prof);

    }

    // line 53
    public function block_header_navigation_links($context, array $blocks = array())
    {
        $__internal_73d79c2fb2392b4e0ef5adfce8d350566bb76cb15711ed95a88819126e27591b = $this->env->getExtension("native_profiler");
        $__internal_73d79c2fb2392b4e0ef5adfce8d350566bb76cb15711ed95a88819126e27591b->enter($__internal_73d79c2fb2392b4e0ef5adfce8d350566bb76cb15711ed95a88819126e27591b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        // line 54
        echo "                                    <li>
                                        <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("blog_index");
        echo "\">
                                            <i class=\"fa fa-home\"></i> ";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.homepage"), "html", null, true);
        echo "
                                        </a>
                                    </li>

                                    ";
        // line 65
        echo "                                    ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 66
            echo "                                        <li>
                                            <a href=\"";
            // line 67
            echo $this->env->getExtension('routing')->getPath("admin_post_index");
            echo "\">
                                                <i class=\"fa fa-lock\"></i> ";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.admin"), "html", null, true);
            echo "
                                            </a>
                                        </li>
                                    ";
        }
        // line 72
        echo "                                ";
        
        $__internal_73d79c2fb2392b4e0ef5adfce8d350566bb76cb15711ed95a88819126e27591b->leave($__internal_73d79c2fb2392b4e0ef5adfce8d350566bb76cb15711ed95a88819126e27591b_prof);

    }

    // line 98
    public function block_body($context, array $blocks = array())
    {
        $__internal_a28845a2ea91984523bfa52508f4588bb98a54dbc807054c3ffb23aadf95c754 = $this->env->getExtension("native_profiler");
        $__internal_a28845a2ea91984523bfa52508f4588bb98a54dbc807054c3ffb23aadf95c754->enter($__internal_a28845a2ea91984523bfa52508f4588bb98a54dbc807054c3ffb23aadf95c754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 99
        echo "                <div class=\"row\">
                    <div id=\"main\" class=\"col-sm-9\">
                        ";
        // line 101
        echo twig_include($this->env, $context, "default/_flash_messages.html.twig");
        echo "

                        ";
        // line 103
        $this->displayBlock('main', $context, $blocks);
        // line 104
        echo "                    </div>

                    <div id=\"sidebar\" class=\"col-sm-3\">
                        ";
        // line 107
        $this->displayBlock('sidebar', $context, $blocks);
        // line 119
        echo "                    </div>
                </div>
            ";
        
        $__internal_a28845a2ea91984523bfa52508f4588bb98a54dbc807054c3ffb23aadf95c754->leave($__internal_a28845a2ea91984523bfa52508f4588bb98a54dbc807054c3ffb23aadf95c754_prof);

    }

    // line 103
    public function block_main($context, array $blocks = array())
    {
        $__internal_5ddcdbbbca038ac7facd0db697869950ff47d6895c5a9ed6d3a37858ddd3ef3b = $this->env->getExtension("native_profiler");
        $__internal_5ddcdbbbca038ac7facd0db697869950ff47d6895c5a9ed6d3a37858ddd3ef3b->enter($__internal_5ddcdbbbca038ac7facd0db697869950ff47d6895c5a9ed6d3a37858ddd3ef3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_5ddcdbbbca038ac7facd0db697869950ff47d6895c5a9ed6d3a37858ddd3ef3b->leave($__internal_5ddcdbbbca038ac7facd0db697869950ff47d6895c5a9ed6d3a37858ddd3ef3b_prof);

    }

    // line 107
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_1eb368cbe162c74a916e63fe1e5a9737f8a004512165bd67198c8fc1c7186a9c = $this->env->getExtension("native_profiler");
        $__internal_1eb368cbe162c74a916e63fe1e5a9737f8a004512165bd67198c8fc1c7186a9c->enter($__internal_1eb368cbe162c74a916e63fe1e5a9737f8a004512165bd67198c8fc1c7186a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 108
        echo "                            <div class=\"section about\">
                                <div class=\"well well-lg\">
                                    <p>
                                        ";
        // line 111
        echo $this->env->getExtension('translator')->trans("help.app_description");
        echo "
                                    </p>
                                    <p>
                                        ";
        // line 114
        echo $this->env->getExtension('translator')->trans("help.more_information");
        echo "
                                    </p>
                                </div>
                            </div>
                        ";
        
        $__internal_1eb368cbe162c74a916e63fe1e5a9737f8a004512165bd67198c8fc1c7186a9c->leave($__internal_1eb368cbe162c74a916e63fe1e5a9737f8a004512165bd67198c8fc1c7186a9c_prof);

    }

    // line 124
    public function block_footer($context, array $blocks = array())
    {
        $__internal_111e31da489e5cd053eae82c6c43c3d204447e8e44f27f6a5c37e6e89ec74ecf = $this->env->getExtension("native_profiler");
        $__internal_111e31da489e5cd053eae82c6c43c3d204447e8e44f27f6a5c37e6e89ec74ecf->enter($__internal_111e31da489e5cd053eae82c6c43c3d204447e8e44f27f6a5c37e6e89ec74ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 125
        echo "            <footer>
                <div class=\"container\">
                    <div class=\"row\">
                        <div id=\"footer-copyright\" class=\"col-md-6\">
                            <p>&copy; ";
        // line 129
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - The Symfony Project</p>
                            <p>";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("mit_license"), "html", null, true);
        echo "</p>
                        </div>
                        <div id=\"footer-resources\" class=\"col-md-6\">
                            <p>
                                <a href=\"https://twitter.com/symfony\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"https://www.facebook.com/SensioLabs\"><i class=\"fa fa-facebook\"></i></a>
                                <a href=\"http://symfony.com/blog\"><i class=\"fa fa-rss\"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        ";
        
        $__internal_111e31da489e5cd053eae82c6c43c3d204447e8e44f27f6a5c37e6e89ec74ecf->leave($__internal_111e31da489e5cd053eae82c6c43c3d204447e8e44f27f6a5c37e6e89ec74ecf_prof);

    }

    // line 144
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a39a03c19eaf59e13fd6ed8deb44b11f2a06ec93fd2932bcd4729cbbb6c0ab4d = $this->env->getExtension("native_profiler");
        $__internal_a39a03c19eaf59e13fd6ed8deb44b11f2a06ec93fd2932bcd4729cbbb6c0ab4d->enter($__internal_a39a03c19eaf59e13fd6ed8deb44b11f2a06ec93fd2932bcd4729cbbb6c0ab4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 145
        echo "        ";
        // line 156
        echo "
            <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_a39a03c19eaf59e13fd6ed8deb44b11f2a06ec93fd2932bcd4729cbbb6c0ab4d->leave($__internal_a39a03c19eaf59e13fd6ed8deb44b11f2a06ec93fd2932bcd4729cbbb6c0ab4d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 157,  380 => 156,  378 => 145,  372 => 144,  352 => 130,  348 => 129,  342 => 125,  336 => 124,  324 => 114,  318 => 111,  313 => 108,  307 => 107,  296 => 103,  287 => 119,  285 => 107,  280 => 104,  278 => 103,  273 => 101,  269 => 99,  263 => 98,  256 => 72,  249 => 68,  245 => 67,  242 => 66,  239 => 65,  232 => 56,  228 => 55,  225 => 54,  219 => 53,  205 => 88,  190 => 86,  186 => 85,  180 => 81,  173 => 77,  169 => 76,  166 => 75,  164 => 74,  161 => 73,  159 => 53,  140 => 37,  134 => 33,  128 => 32,  117 => 30,  108 => 25,  105 => 24,  103 => 13,  97 => 12,  85 => 10,  76 => 159,  74 => 144,  71 => 143,  69 => 124,  65 => 122,  63 => 98,  59 => 96,  57 => 32,  52 => 30,  45 => 27,  43 => 12,  38 => 10,  32 => 6,);
    }
}
/* {#*/
/*    This is the base template used as the application layout which contains the*/
/*    common elements and decorates all the other templates.*/
/*    See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts*/
/* #}*/
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Symfony Demo application{% endblock %}</title>*/
/* */
/*         {% block stylesheets %}*/
/*         {# uncomment the following lines to compile SCSS assets with Assetic*/
/* */
/*             {% stylesheets filter="scssphp" output="css/app.css"*/
/*                 "%kernel.root_dir%/Resources/assets/scss/bootstrap.scss"*/
/*                 "%kernel.root_dir%/Resources/assets/scss/font-awesome.scss"*/
/*                 "%kernel.root_dir%/Resources/assets/css/*.css"*/
/*                 "%kernel.root_dir%/Resources/assets/scss/main.scss"*/
/*             %}*/
/*                 <link rel="stylesheet" href="{{ asset_url }}" />*/
/*             {% endstylesheets %}*/
/*         #}*/
/* */
/*             <link rel="stylesheet" href="{{ asset('css/app.css') }}">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/* */
/*     <body id="{% block body_id %}{% endblock %}">*/
/* */
/*         {% block header %}*/
/*             <header>*/
/*                 <div class="navbar navbar-default navbar-static-top" role="navigation">*/
/*                     <div class="container">*/
/*                         <div class="navbar-header">*/
/*                             <a class="navbar-brand" href="{{ path('homepage') }}">*/
/*                                 Symfony Demo*/
/*                             </a>*/
/* */
/*                             <button type="button" class="navbar-toggle"*/
/*                                     data-toggle="collapse"*/
/*                                     data-target=".navbar-collapse">*/
/*                                 <span class="sr-only">Toggle navigation</span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                             </button>*/
/*                         </div>*/
/*                         <div class="navbar-collapse collapse">*/
/*                             <ul class="nav navbar-nav navbar-right">*/
/* */
/*                                 {% block header_navigation_links %}*/
/*                                     <li>*/
/*                                         <a href="{{ path('blog_index') }}">*/
/*                                             <i class="fa fa-home"></i> {{ 'menu.homepage'|trans }}*/
/*                                         </a>*/
/*                                     </li>*/
/* */
/*                                     {# The 'app.user' condition is required to avoid issues in 404 and 500 error pages*/
/*                                        As routing is done before security, error pages are not covered by any firewall.*/
/*                                        This means you can't use is_granted() directly on these pages.*/
/*                                        See http://symfony.com/doc/current/cookbook/security/form_login_setup.html#avoid-common-pitfalls*/
/*                                     #}*/
/*                                     {% if app.user and is_granted('ROLE_ADMIN') %}*/
/*                                         <li>*/
/*                                             <a href="{{ path('admin_post_index') }}">*/
/*                                                 <i class="fa fa-lock"></i> {{ 'menu.admin'|trans }}*/
/*                                             </a>*/
/*                                         </li>*/
/*                                     {% endif %}*/
/*                                 {% endblock %}*/
/* */
/*                                 {% if app.user %}*/
/*                                     <li>*/
/*                                         <a href="{{ path('security_logout') }}">*/
/*                                             <i class="fa fa-sign-out"></i> {{ 'menu.logout'|trans }}*/
/*                                         </a>*/
/*                                     </li>*/
/*                                 {% endif %}*/
/* */
/*                                 <li class="dropdown">*/
/*                                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-globe"></i> <span class="caret"></span></a>*/
/*                                     <ul class="dropdown-menu locales" role="menu">*/
/*                                         {% for locale in locales() %}*/
/*                                             <li {% if app.request.locale == locale.code %}class="active"{% endif %}><a href="{{ path(app.request.get('_route', 'blog_index'), app.request.get('_route_params', [])|merge({ _locale: locale.code })) }}">{{ locale.name|capitalize }}</a></li>*/
/*                                         {% endfor %}*/
/*                                     </ul>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </header>*/
/*         {% endblock %}*/
/* */
/*         <div class="container body-container">*/
/*             {% block body %}*/
/*                 <div class="row">*/
/*                     <div id="main" class="col-sm-9">*/
/*                         {{ include('default/_flash_messages.html.twig') }}*/
/* */
/*                         {% block main %}{% endblock %}*/
/*                     </div>*/
/* */
/*                     <div id="sidebar" class="col-sm-3">*/
/*                         {% block sidebar %}*/
/*                             <div class="section about">*/
/*                                 <div class="well well-lg">*/
/*                                     <p>*/
/*                                         {{ 'help.app_description'|trans|raw }}*/
/*                                     </p>*/
/*                                     <p>*/
/*                                         {{ 'help.more_information'|trans|raw }}*/
/*                                     </p>*/
/*                                 </div>*/
/*                             </div>*/
/*                         {% endblock %}*/
/*                     </div>*/
/*                 </div>*/
/*             {% endblock %}*/
/*         </div>*/
/* */
/*         {% block footer %}*/
/*             <footer>*/
/*                 <div class="container">*/
/*                     <div class="row">*/
/*                         <div id="footer-copyright" class="col-md-6">*/
/*                             <p>&copy; {{ 'now'|date('Y') }} - The Symfony Project</p>*/
/*                             <p>{{ 'mit_license'|trans }}</p>*/
/*                         </div>*/
/*                         <div id="footer-resources" class="col-md-6">*/
/*                             <p>*/
/*                                 <a href="https://twitter.com/symfony"><i class="fa fa-twitter"></i></a>*/
/*                                 <a href="https://www.facebook.com/SensioLabs"><i class="fa fa-facebook"></i></a>*/
/*                                 <a href="http://symfony.com/blog"><i class="fa fa-rss"></i></a>*/
/*                             </p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </footer>*/
/*         {% endblock %}*/
/* */
/*         {% block javascripts %}*/
/*         {# uncomment the following lines to combine and minimize JavaScript assets with Assetic*/
/*             {% javascripts filter="?jsqueeze" output="js/app.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/jquery-2.1.4.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/moment.min.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/bootstrap-3.3.4.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/highlight.pack.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/bootstrap-datetimepicker.min.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/main.js" %}*/
/*                 <script src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/*         #}*/
/* */
/*             <script src="{{ asset('js/app.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
