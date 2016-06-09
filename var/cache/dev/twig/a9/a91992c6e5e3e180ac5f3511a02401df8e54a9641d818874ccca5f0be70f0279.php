<?php

/* base.html.twig */
class __TwigTemplate_16edf0f43457d8ac3f4348db670b77285ad34ae3c917881f1e6b41cf7a923e1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pageheader' => array($this, 'block_pageheader'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe262a3dd607c03f56cb7cdc70288c45649955a82dd2d97eea0f773f77b368fd = $this->env->getExtension("native_profiler");
        $__internal_fe262a3dd607c03f56cb7cdc70288c45649955a82dd2d97eea0f773f77b368fd->enter($__internal_fe262a3dd607c03f56cb7cdc70288c45649955a82dd2d97eea0f773f77b368fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

    <head>
        ";
        // line 5
        $this->loadTemplate("head.html.twig", "base.html.twig", 5)->display($context);
        // line 6
        echo "    </head>

    <body>

        <div id=\"wrapper\">

            <!-- Navigation -->
            <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
                <!-- /.navbar-top-links -->
                ";
        // line 15
        $this->loadTemplate("header.html.twig", "base.html.twig", 15)->display($context);
        // line 16
        echo "                ";
        $this->loadTemplate("sidebar.html.twig", "base.html.twig", 16)->display($context);
        // line 17
        echo "                <!-- /.navbar-static-side -->
            </nav>

            <!-- Page Content -->
            <div id=\"page-wrapper\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <h1 class=\"page-header\">";
        // line 25
        $this->displayBlock('pageheader', $context, $blocks);
        // line 26
        echo "</h1>
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        echo "        
                    <!-- /.container-fluid -->
                    ";
        // line 34
        $this->loadTemplate("js.html.twig", "base.html.twig", 34)->display($context);
        // line 35
        echo "            </div>
                <!-- /#page-wrapper -->

            </div>
            <!-- /#wrapper -->

        </body>

    </html>
";
        
        $__internal_fe262a3dd607c03f56cb7cdc70288c45649955a82dd2d97eea0f773f77b368fd->leave($__internal_fe262a3dd607c03f56cb7cdc70288c45649955a82dd2d97eea0f773f77b368fd_prof);

    }

    // line 25
    public function block_pageheader($context, array $blocks = array())
    {
        $__internal_0b565e8f7c498d55ba641301c16a417f4729eaf7bf1b2382bb65c596a081bd6f = $this->env->getExtension("native_profiler");
        $__internal_0b565e8f7c498d55ba641301c16a417f4729eaf7bf1b2382bb65c596a081bd6f->enter($__internal_0b565e8f7c498d55ba641301c16a417f4729eaf7bf1b2382bb65c596a081bd6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        // line 26
        echo "                                ";
        
        $__internal_0b565e8f7c498d55ba641301c16a417f4729eaf7bf1b2382bb65c596a081bd6f->leave($__internal_0b565e8f7c498d55ba641301c16a417f4729eaf7bf1b2382bb65c596a081bd6f_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_d34e5fbeac203611526a7576106013d90e75c9e23ffae6f207ca2b419165f081 = $this->env->getExtension("native_profiler");
        $__internal_d34e5fbeac203611526a7576106013d90e75c9e23ffae6f207ca2b419165f081->enter($__internal_d34e5fbeac203611526a7576106013d90e75c9e23ffae6f207ca2b419165f081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d34e5fbeac203611526a7576106013d90e75c9e23ffae6f207ca2b419165f081->leave($__internal_d34e5fbeac203611526a7576106013d90e75c9e23ffae6f207ca2b419165f081_prof);

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
        return array (  104 => 32,  97 => 26,  91 => 25,  75 => 35,  73 => 34,  68 => 32,  60 => 26,  58 => 25,  48 => 17,  45 => 16,  43 => 15,  32 => 6,  30 => 5,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/*     <head>*/
/*         {% include 'head.html.twig' %}*/
/*     </head>*/
/* */
/*     <body>*/
/* */
/*         <div id="wrapper">*/
/* */
/*             <!-- Navigation -->*/
/*             <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">*/
/*                 <!-- /.navbar-top-links -->*/
/*                 {% include 'header.html.twig' %}*/
/*                 {% include 'sidebar.html.twig' %}*/
/*                 <!-- /.navbar-static-side -->*/
/*             </nav>*/
/* */
/*             <!-- Page Content -->*/
/*             <div id="page-wrapper">*/
/*                 <div class="container-fluid">*/
/*                     <div class="row">*/
/*                         <div class="col-lg-12">*/
/*                             <h1 class="page-header">{% block pageheader %}*/
/*                                 {% endblock %}</h1>*/
/*                             </div>*/
/*                             <!-- /.col-lg-12 -->*/
/*                         </div>*/
/*                         <!-- /.row -->*/
/*                     </div>*/
/*                     {% block body %}{% endblock %}        */
/*                     <!-- /.container-fluid -->*/
/*                     {% include 'js.html.twig' %}*/
/*             </div>*/
/*                 <!-- /#page-wrapper -->*/
/* */
/*             </div>*/
/*             <!-- /#wrapper -->*/
/* */
/*         </body>*/
/* */
/*     </html>*/
/* */
