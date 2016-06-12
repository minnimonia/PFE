<?php

/* js.html.twig */
class __TwigTemplate_2e07852430d399d7e790da8f6978790c7b9bc571459bb430c1038141aa021e77 extends Twig_Template
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
        $__internal_1da3d42c927a2ba2fe013f66175e6039fa596a9de4fef533437037f3185fbe85 = $this->env->getExtension("native_profiler");
        $__internal_1da3d42c927a2ba2fe013f66175e6039fa596a9de4fef533437037f3185fbe85->enter($__internal_1da3d42c927a2ba2fe013f66175e6039fa596a9de4fef533437037f3185fbe85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "js.html.twig"));

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
<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bower_components/dist/js/bootstrap-multiselect.js"), "html", null, true);
        echo "\"></script>

<!-- Custom Theme JavaScript -->
<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_1da3d42c927a2ba2fe013f66175e6039fa596a9de4fef533437037f3185fbe85->leave($__internal_1da3d42c927a2ba2fe013f66175e6039fa596a9de4fef533437037f3185fbe85_prof);

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
        return array (  47 => 12,  41 => 9,  37 => 8,  31 => 5,  26 => 3,  22 => 1,);
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
/* <script src="{{ asset('assets/bower_components/dist/js/bootstrap-multiselect.js')}}"></script>*/
/* */
/* <!-- Custom Theme JavaScript -->*/
/* <script src="{{ asset('assets/dist/js/sb-admin-2.js')}}"></script>*/
