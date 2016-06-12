<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_61b65a16d8cbf11d191e08e721953ab2f5f6beaa5ce5752731e07157bb9d309c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_c1441b475d9112122589652e82c285a68b73b270129cea481733b7b7c1d77c56 = $this->env->getExtension("native_profiler");
        $__internal_c1441b475d9112122589652e82c285a68b73b270129cea481733b7b7c1d77c56->enter($__internal_c1441b475d9112122589652e82c285a68b73b270129cea481733b7b7c1d77c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1441b475d9112122589652e82c285a68b73b270129cea481733b7b7c1d77c56->leave($__internal_c1441b475d9112122589652e82c285a68b73b270129cea481733b7b7c1d77c56_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_854a011b5655e8662709fd47b142b5159ebb576630b304a726b0cd9860dc1a60 = $this->env->getExtension("native_profiler");
        $__internal_854a011b5655e8662709fd47b142b5159ebb576630b304a726b0cd9860dc1a60->enter($__internal_854a011b5655e8662709fd47b142b5159ebb576630b304a726b0cd9860dc1a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_854a011b5655e8662709fd47b142b5159ebb576630b304a726b0cd9860dc1a60->leave($__internal_854a011b5655e8662709fd47b142b5159ebb576630b304a726b0cd9860dc1a60_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_de7abf601762800c5e6f41c4a1a522f096c1eed7b3b0ccbdea4d8195faed2072 = $this->env->getExtension("native_profiler");
        $__internal_de7abf601762800c5e6f41c4a1a522f096c1eed7b3b0ccbdea4d8195faed2072->enter($__internal_de7abf601762800c5e6f41c4a1a522f096c1eed7b3b0ccbdea4d8195faed2072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_de7abf601762800c5e6f41c4a1a522f096c1eed7b3b0ccbdea4d8195faed2072->leave($__internal_de7abf601762800c5e6f41c4a1a522f096c1eed7b3b0ccbdea4d8195faed2072_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d128c534502a8b67b4cd15c04f0e0fd78d593597ec6a27352120f9a27d557399 = $this->env->getExtension("native_profiler");
        $__internal_d128c534502a8b67b4cd15c04f0e0fd78d593597ec6a27352120f9a27d557399->enter($__internal_d128c534502a8b67b4cd15c04f0e0fd78d593597ec6a27352120f9a27d557399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d128c534502a8b67b4cd15c04f0e0fd78d593597ec6a27352120f9a27d557399->leave($__internal_d128c534502a8b67b4cd15c04f0e0fd78d593597ec6a27352120f9a27d557399_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
