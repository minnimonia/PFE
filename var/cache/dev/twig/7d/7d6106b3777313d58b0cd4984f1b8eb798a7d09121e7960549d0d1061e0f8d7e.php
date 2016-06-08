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
        $__internal_162c86d3d8d964491b89a3cc0203dd62fdd60eb135284b2b8b0e68878dd58868 = $this->env->getExtension("native_profiler");
        $__internal_162c86d3d8d964491b89a3cc0203dd62fdd60eb135284b2b8b0e68878dd58868->enter($__internal_162c86d3d8d964491b89a3cc0203dd62fdd60eb135284b2b8b0e68878dd58868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_162c86d3d8d964491b89a3cc0203dd62fdd60eb135284b2b8b0e68878dd58868->leave($__internal_162c86d3d8d964491b89a3cc0203dd62fdd60eb135284b2b8b0e68878dd58868_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c01d34f5b79bab4f1f7527e1696598788b280d1c1d734a10f7c83c2af6e06cae = $this->env->getExtension("native_profiler");
        $__internal_c01d34f5b79bab4f1f7527e1696598788b280d1c1d734a10f7c83c2af6e06cae->enter($__internal_c01d34f5b79bab4f1f7527e1696598788b280d1c1d734a10f7c83c2af6e06cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c01d34f5b79bab4f1f7527e1696598788b280d1c1d734a10f7c83c2af6e06cae->leave($__internal_c01d34f5b79bab4f1f7527e1696598788b280d1c1d734a10f7c83c2af6e06cae_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fbfb57521dea51a6821aefbf643afc613a8d1aa6399bd81a70f3d36965c2b32b = $this->env->getExtension("native_profiler");
        $__internal_fbfb57521dea51a6821aefbf643afc613a8d1aa6399bd81a70f3d36965c2b32b->enter($__internal_fbfb57521dea51a6821aefbf643afc613a8d1aa6399bd81a70f3d36965c2b32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fbfb57521dea51a6821aefbf643afc613a8d1aa6399bd81a70f3d36965c2b32b->leave($__internal_fbfb57521dea51a6821aefbf643afc613a8d1aa6399bd81a70f3d36965c2b32b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e6fe51cc093669d4d6a8d810f640b95682f22780ab7bd8db28da68242d3dd1bd = $this->env->getExtension("native_profiler");
        $__internal_e6fe51cc093669d4d6a8d810f640b95682f22780ab7bd8db28da68242d3dd1bd->enter($__internal_e6fe51cc093669d4d6a8d810f640b95682f22780ab7bd8db28da68242d3dd1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e6fe51cc093669d4d6a8d810f640b95682f22780ab7bd8db28da68242d3dd1bd->leave($__internal_e6fe51cc093669d4d6a8d810f640b95682f22780ab7bd8db28da68242d3dd1bd_prof);

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
