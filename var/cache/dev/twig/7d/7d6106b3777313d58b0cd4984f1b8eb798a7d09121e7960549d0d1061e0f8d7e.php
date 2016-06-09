<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_48f38731a259a736091b7719342867558dc7e25483892757451bcc25c84ffed4 extends Twig_Template
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
        $__internal_12095c028ceafa68dc23e333fcd46895c530b052f22c3dfdc98aa5dde427f682 = $this->env->getExtension("native_profiler");
        $__internal_12095c028ceafa68dc23e333fcd46895c530b052f22c3dfdc98aa5dde427f682->enter($__internal_12095c028ceafa68dc23e333fcd46895c530b052f22c3dfdc98aa5dde427f682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12095c028ceafa68dc23e333fcd46895c530b052f22c3dfdc98aa5dde427f682->leave($__internal_12095c028ceafa68dc23e333fcd46895c530b052f22c3dfdc98aa5dde427f682_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dae05bcf515fd77f2ef5182e44def5c14904e3671ad6cba1edb820453285a536 = $this->env->getExtension("native_profiler");
        $__internal_dae05bcf515fd77f2ef5182e44def5c14904e3671ad6cba1edb820453285a536->enter($__internal_dae05bcf515fd77f2ef5182e44def5c14904e3671ad6cba1edb820453285a536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dae05bcf515fd77f2ef5182e44def5c14904e3671ad6cba1edb820453285a536->leave($__internal_dae05bcf515fd77f2ef5182e44def5c14904e3671ad6cba1edb820453285a536_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_01bddf741e263c8679d31844bd48ba69637d1f573eeaba632b5be22014df5d80 = $this->env->getExtension("native_profiler");
        $__internal_01bddf741e263c8679d31844bd48ba69637d1f573eeaba632b5be22014df5d80->enter($__internal_01bddf741e263c8679d31844bd48ba69637d1f573eeaba632b5be22014df5d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_01bddf741e263c8679d31844bd48ba69637d1f573eeaba632b5be22014df5d80->leave($__internal_01bddf741e263c8679d31844bd48ba69637d1f573eeaba632b5be22014df5d80_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8af2d1bde40a4319f405a8e006af95afb6497ece49ed5add4f0cd85545c8a455 = $this->env->getExtension("native_profiler");
        $__internal_8af2d1bde40a4319f405a8e006af95afb6497ece49ed5add4f0cd85545c8a455->enter($__internal_8af2d1bde40a4319f405a8e006af95afb6497ece49ed5add4f0cd85545c8a455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8af2d1bde40a4319f405a8e006af95afb6497ece49ed5add4f0cd85545c8a455->leave($__internal_8af2d1bde40a4319f405a8e006af95afb6497ece49ed5add4f0cd85545c8a455_prof);

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
