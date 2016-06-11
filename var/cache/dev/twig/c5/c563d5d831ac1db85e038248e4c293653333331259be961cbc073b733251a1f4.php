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
        $__internal_31a349003d2b35ff2765e6ac9e92f00dd47d0eb712fff345d4fd1cb23a4a5f87 = $this->env->getExtension("native_profiler");
        $__internal_31a349003d2b35ff2765e6ac9e92f00dd47d0eb712fff345d4fd1cb23a4a5f87->enter($__internal_31a349003d2b35ff2765e6ac9e92f00dd47d0eb712fff345d4fd1cb23a4a5f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31a349003d2b35ff2765e6ac9e92f00dd47d0eb712fff345d4fd1cb23a4a5f87->leave($__internal_31a349003d2b35ff2765e6ac9e92f00dd47d0eb712fff345d4fd1cb23a4a5f87_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0e2ad864ca9a57f8560200a96d5dd879f7983dfccf11ff1b66563722f8a4f562 = $this->env->getExtension("native_profiler");
        $__internal_0e2ad864ca9a57f8560200a96d5dd879f7983dfccf11ff1b66563722f8a4f562->enter($__internal_0e2ad864ca9a57f8560200a96d5dd879f7983dfccf11ff1b66563722f8a4f562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0e2ad864ca9a57f8560200a96d5dd879f7983dfccf11ff1b66563722f8a4f562->leave($__internal_0e2ad864ca9a57f8560200a96d5dd879f7983dfccf11ff1b66563722f8a4f562_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_045077298ff3e009afd87e109a0bd7e6b687b8c0d4ac45122246bd848e2d1eb2 = $this->env->getExtension("native_profiler");
        $__internal_045077298ff3e009afd87e109a0bd7e6b687b8c0d4ac45122246bd848e2d1eb2->enter($__internal_045077298ff3e009afd87e109a0bd7e6b687b8c0d4ac45122246bd848e2d1eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_045077298ff3e009afd87e109a0bd7e6b687b8c0d4ac45122246bd848e2d1eb2->leave($__internal_045077298ff3e009afd87e109a0bd7e6b687b8c0d4ac45122246bd848e2d1eb2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bd46036db2231dba2bc019b396f8d3d4156d47ecd56c3976ad7d607508df0c78 = $this->env->getExtension("native_profiler");
        $__internal_bd46036db2231dba2bc019b396f8d3d4156d47ecd56c3976ad7d607508df0c78->enter($__internal_bd46036db2231dba2bc019b396f8d3d4156d47ecd56c3976ad7d607508df0c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_bd46036db2231dba2bc019b396f8d3d4156d47ecd56c3976ad7d607508df0c78->leave($__internal_bd46036db2231dba2bc019b396f8d3d4156d47ecd56c3976ad7d607508df0c78_prof);

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
