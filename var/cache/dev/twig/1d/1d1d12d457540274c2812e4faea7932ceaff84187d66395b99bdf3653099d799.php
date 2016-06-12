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
        $__internal_ce2ca5a6827c1550c76e8f2d0113132f600c2ae193c139202e917d9e3c73fd26 = $this->env->getExtension("native_profiler");
        $__internal_ce2ca5a6827c1550c76e8f2d0113132f600c2ae193c139202e917d9e3c73fd26->enter($__internal_ce2ca5a6827c1550c76e8f2d0113132f600c2ae193c139202e917d9e3c73fd26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_ce2ca5a6827c1550c76e8f2d0113132f600c2ae193c139202e917d9e3c73fd26->leave($__internal_ce2ca5a6827c1550c76e8f2d0113132f600c2ae193c139202e917d9e3c73fd26_prof);

    }

    // line 25
    public function block_pageheader($context, array $blocks = array())
    {
        $__internal_2ebaf59edf3e9756ec65dbab28cd224693c6b241cec429dab11561c6d6752aca = $this->env->getExtension("native_profiler");
        $__internal_2ebaf59edf3e9756ec65dbab28cd224693c6b241cec429dab11561c6d6752aca->enter($__internal_2ebaf59edf3e9756ec65dbab28cd224693c6b241cec429dab11561c6d6752aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        // line 26
        echo "                                ";
        
        $__internal_2ebaf59edf3e9756ec65dbab28cd224693c6b241cec429dab11561c6d6752aca->leave($__internal_2ebaf59edf3e9756ec65dbab28cd224693c6b241cec429dab11561c6d6752aca_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_fed57ca4257709b98969e69f56a9f01ca1ca1763d82803d974482c3dde4a2966 = $this->env->getExtension("native_profiler");
        $__internal_fed57ca4257709b98969e69f56a9f01ca1ca1763d82803d974482c3dde4a2966->enter($__internal_fed57ca4257709b98969e69f56a9f01ca1ca1763d82803d974482c3dde4a2966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fed57ca4257709b98969e69f56a9f01ca1ca1763d82803d974482c3dde4a2966->leave($__internal_fed57ca4257709b98969e69f56a9f01ca1ca1763d82803d974482c3dde4a2966_prof);

    }

    // line 40
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_d5f0ead0d35fcc721ee406a63be6e5007392534f3c4f0df96422b57c297f8402 = $this->env->getExtension("native_profiler");
        $__internal_d5f0ead0d35fcc721ee406a63be6e5007392534f3c4f0df96422b57c297f8402->enter($__internal_d5f0ead0d35fcc721ee406a63be6e5007392534f3c4f0df96422b57c297f8402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_d5f0ead0d35fcc721ee406a63be6e5007392534f3c4f0df96422b57c297f8402->leave($__internal_d5f0ead0d35fcc721ee406a63be6e5007392534f3c4f0df96422b57c297f8402_prof);

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
