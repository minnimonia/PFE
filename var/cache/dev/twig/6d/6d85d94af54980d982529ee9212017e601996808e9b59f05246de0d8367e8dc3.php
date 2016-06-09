<?php

/* js.html.twig */
class __TwigTemplate_f80172c1cb4bbdac69efa0b9780ee5bf55476e5dcca66d2ce47689b824e75665 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15518c59cc687109bcd475bd811a731f2d612432c16a74b64ef5ed72b1e4ebfe = $this->env->getExtension("native_profiler");
        $__internal_15518c59cc687109bcd475bd811a731f2d612432c16a74b64ef5ed72b1e4ebfe->enter($__internal_15518c59cc687109bcd475bd811a731f2d612432c16a74b64ef5ed72b1e4ebfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "js.html.twig"));

        // line 1
        echo "<!-- jQuery -->

<script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bower_components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap Core JavaScript -->
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bower_components/metisMenu/dist/metisMenu.min.js"), "html", null, true);
        echo "\"></script>

<!-- Custom Theme JavaScript -->
<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_15518c59cc687109bcd475bd811a731f2d612432c16a74b64ef5ed72b1e4ebfe->leave($__internal_15518c59cc687109bcd475bd811a731f2d612432c16a74b64ef5ed72b1e4ebfe_prof);

    }

    public function getTemplateName()
    {
        return "js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,  37 => 8,  31 => 5,  26 => 3,  22 => 1,);
    }
}
/* <!-- jQuery -->*/
/* */
/* <script src="{{ asset('assets/bower_components/jquery/dist/jquery.min.js')}}"></script>*/
/* <!-- Bootstrap Core JavaScript -->*/
/* <script src="{{ asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>*/
/* */
/* <!-- Metis Menu Plugin JavaScript -->*/
/* <script src="{{ asset('assets/bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>*/
/* */
/* <!-- Custom Theme JavaScript -->*/
/* <script src="{{ asset('assets/dist/js/sb-admin-2.js')}}"></script>*/
