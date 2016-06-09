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
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2a9423a8a133c3c13196bf334eb746742970a079b23178e498d710635fc19d3 = $this->env->getExtension("native_profiler");
        $__internal_e2a9423a8a133c3c13196bf334eb746742970a079b23178e498d710635fc19d3->enter($__internal_e2a9423a8a133c3c13196bf334eb746742970a079b23178e498d710635fc19d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                    <!-- /.container-fluid -->
                    ";
        // line 33
        $this->loadTemplate("js.html.twig", "base.html.twig", 33)->display($context);
        // line 34
        echo "                </div>
                <!-- /#page-wrapper -->

            </div>
            <!-- /#wrapper -->

        </body>

    </html>
";
        
        $__internal_e2a9423a8a133c3c13196bf334eb746742970a079b23178e498d710635fc19d3->leave($__internal_e2a9423a8a133c3c13196bf334eb746742970a079b23178e498d710635fc19d3_prof);

    }

    // line 25
    public function block_pageheader($context, array $blocks = array())
    {
        $__internal_a3c98e3a23437e8b911ec10792acbeb6765e8e8a5486a34c754d79db049fad06 = $this->env->getExtension("native_profiler");
        $__internal_a3c98e3a23437e8b911ec10792acbeb6765e8e8a5486a34c754d79db049fad06->enter($__internal_a3c98e3a23437e8b911ec10792acbeb6765e8e8a5486a34c754d79db049fad06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        // line 26
        echo "                                ";
        
        $__internal_a3c98e3a23437e8b911ec10792acbeb6765e8e8a5486a34c754d79db049fad06->leave($__internal_a3c98e3a23437e8b911ec10792acbeb6765e8e8a5486a34c754d79db049fad06_prof);

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
        return array (  92 => 26,  86 => 25,  70 => 34,  68 => 33,  59 => 26,  57 => 25,  47 => 17,  44 => 16,  42 => 15,  31 => 6,  29 => 5,  23 => 1,);
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
/*                     <!-- /.container-fluid -->*/
/*                     {% include 'js.html.twig' %}*/
/*                 </div>*/
/*                 <!-- /#page-wrapper -->*/
/* */
/*             </div>*/
/*             <!-- /#wrapper -->*/
/* */
/*         </body>*/
/* */
/*     </html>*/
/* */
