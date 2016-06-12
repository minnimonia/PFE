<?php

/* base.html.twig */
class __TwigTemplate_da43b238089eb4ee81288567aee3608b4f676efac80d0f4630290049d090169d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pageheader' => array($this, 'block_pageheader'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6e9e5e93f1f2445d8977417e075ece9d4801735651a841ef0dfd5fdcccffe20 = $this->env->getExtension("native_profiler");
        $__internal_b6e9e5e93f1f2445d8977417e075ece9d4801735651a841ef0dfd5fdcccffe20->enter($__internal_b6e9e5e93f1f2445d8977417e075ece9d4801735651a841ef0dfd5fdcccffe20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                            <h2 class=\"page-header\">";
        // line 25
        $this->displayBlock('pageheader', $context, $blocks);
        // line 26
        echo "</h2>
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
             ";
        // line 40
        $this->displayBlock('javascript', $context, $blocks);
        // line 41
        echo "
        </body>

    </html>
";
        
        $__internal_b6e9e5e93f1f2445d8977417e075ece9d4801735651a841ef0dfd5fdcccffe20->leave($__internal_b6e9e5e93f1f2445d8977417e075ece9d4801735651a841ef0dfd5fdcccffe20_prof);

    }

    // line 25
    public function block_pageheader($context, array $blocks = array())
    {
        $__internal_b8f2e8b7e3c600ad8bb444f7a1da78f5f5aa3e8a5049971b4611210cbe63e996 = $this->env->getExtension("native_profiler");
        $__internal_b8f2e8b7e3c600ad8bb444f7a1da78f5f5aa3e8a5049971b4611210cbe63e996->enter($__internal_b8f2e8b7e3c600ad8bb444f7a1da78f5f5aa3e8a5049971b4611210cbe63e996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        // line 26
        echo "                                ";
        
        $__internal_b8f2e8b7e3c600ad8bb444f7a1da78f5f5aa3e8a5049971b4611210cbe63e996->leave($__internal_b8f2e8b7e3c600ad8bb444f7a1da78f5f5aa3e8a5049971b4611210cbe63e996_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2a44331537c6568f475b38344bffd4153bd447c9a6c390bd9c803504fcb5c59 = $this->env->getExtension("native_profiler");
        $__internal_e2a44331537c6568f475b38344bffd4153bd447c9a6c390bd9c803504fcb5c59->enter($__internal_e2a44331537c6568f475b38344bffd4153bd447c9a6c390bd9c803504fcb5c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e2a44331537c6568f475b38344bffd4153bd447c9a6c390bd9c803504fcb5c59->leave($__internal_e2a44331537c6568f475b38344bffd4153bd447c9a6c390bd9c803504fcb5c59_prof);

    }

    // line 40
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_2092841ac5b947bbc0b4f9a46bfd70f044c6e93192d43270f4959f8d824250dd = $this->env->getExtension("native_profiler");
        $__internal_2092841ac5b947bbc0b4f9a46bfd70f044c6e93192d43270f4959f8d824250dd->enter($__internal_2092841ac5b947bbc0b4f9a46bfd70f044c6e93192d43270f4959f8d824250dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_2092841ac5b947bbc0b4f9a46bfd70f044c6e93192d43270f4959f8d824250dd->leave($__internal_2092841ac5b947bbc0b4f9a46bfd70f044c6e93192d43270f4959f8d824250dd_prof);

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
        return array (  120 => 40,  109 => 32,  102 => 26,  96 => 25,  85 => 41,  83 => 40,  76 => 35,  74 => 34,  69 => 32,  61 => 26,  59 => 25,  49 => 17,  46 => 16,  44 => 15,  33 => 6,  31 => 5,  25 => 1,);
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
/*                             <h2 class="page-header">{% block pageheader %}*/
/*                                 {% endblock %}</h2>*/
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
/*              {% block javascript %}{% endblock %}*/
/* */
/*         </body>*/
/* */
/*     </html>*/
/* */
