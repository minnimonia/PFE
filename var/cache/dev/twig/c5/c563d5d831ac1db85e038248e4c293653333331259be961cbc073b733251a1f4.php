<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_62d1146145d146cbe2db36ab6d68d09e2e635bca9ba9c2e872416b06c0b4ac03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4406f50f51a0dbe147d562ab4bb4c3c108b77a978108834c9faff34bc99b5e1 = $this->env->getExtension("native_profiler");
        $__internal_d4406f50f51a0dbe147d562ab4bb4c3c108b77a978108834c9faff34bc99b5e1->enter($__internal_d4406f50f51a0dbe147d562ab4bb4c3c108b77a978108834c9faff34bc99b5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4406f50f51a0dbe147d562ab4bb4c3c108b77a978108834c9faff34bc99b5e1->leave($__internal_d4406f50f51a0dbe147d562ab4bb4c3c108b77a978108834c9faff34bc99b5e1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ad8dc03a9c31be4a5f6e310ee1ff0a0c079dc768e4ec5ee0a8864f0c086d83c1 = $this->env->getExtension("native_profiler");
        $__internal_ad8dc03a9c31be4a5f6e310ee1ff0a0c079dc768e4ec5ee0a8864f0c086d83c1->enter($__internal_ad8dc03a9c31be4a5f6e310ee1ff0a0c079dc768e4ec5ee0a8864f0c086d83c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ad8dc03a9c31be4a5f6e310ee1ff0a0c079dc768e4ec5ee0a8864f0c086d83c1->leave($__internal_ad8dc03a9c31be4a5f6e310ee1ff0a0c079dc768e4ec5ee0a8864f0c086d83c1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fae2b81c2f37d7558f0a009b088b1cf6b8b213fd8375fe7a4bf471f9c9389dd6 = $this->env->getExtension("native_profiler");
        $__internal_fae2b81c2f37d7558f0a009b088b1cf6b8b213fd8375fe7a4bf471f9c9389dd6->enter($__internal_fae2b81c2f37d7558f0a009b088b1cf6b8b213fd8375fe7a4bf471f9c9389dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_fae2b81c2f37d7558f0a009b088b1cf6b8b213fd8375fe7a4bf471f9c9389dd6->leave($__internal_fae2b81c2f37d7558f0a009b088b1cf6b8b213fd8375fe7a4bf471f9c9389dd6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4218bbd0e03bbc9f1a5f776cf4e8816e0d37e63346373856d039bea297f9dbdb = $this->env->getExtension("native_profiler");
        $__internal_4218bbd0e03bbc9f1a5f776cf4e8816e0d37e63346373856d039bea297f9dbdb->enter($__internal_4218bbd0e03bbc9f1a5f776cf4e8816e0d37e63346373856d039bea297f9dbdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_4218bbd0e03bbc9f1a5f776cf4e8816e0d37e63346373856d039bea297f9dbdb->leave($__internal_4218bbd0e03bbc9f1a5f776cf4e8816e0d37e63346373856d039bea297f9dbdb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
