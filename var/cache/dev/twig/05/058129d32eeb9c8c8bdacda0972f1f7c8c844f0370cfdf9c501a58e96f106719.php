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
        $__internal_0163f9cdcfd9dd17c4024030e2b92694cf69484bf631911667f7d8f5176e38f5 = $this->env->getExtension("native_profiler");
        $__internal_0163f9cdcfd9dd17c4024030e2b92694cf69484bf631911667f7d8f5176e38f5->enter($__internal_0163f9cdcfd9dd17c4024030e2b92694cf69484bf631911667f7d8f5176e38f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0163f9cdcfd9dd17c4024030e2b92694cf69484bf631911667f7d8f5176e38f5->leave($__internal_0163f9cdcfd9dd17c4024030e2b92694cf69484bf631911667f7d8f5176e38f5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1a619b9b3fc5a2f3ce36f5f660fd73805aa44df4018e363f3e62fd4e9a15ef7f = $this->env->getExtension("native_profiler");
        $__internal_1a619b9b3fc5a2f3ce36f5f660fd73805aa44df4018e363f3e62fd4e9a15ef7f->enter($__internal_1a619b9b3fc5a2f3ce36f5f660fd73805aa44df4018e363f3e62fd4e9a15ef7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1a619b9b3fc5a2f3ce36f5f660fd73805aa44df4018e363f3e62fd4e9a15ef7f->leave($__internal_1a619b9b3fc5a2f3ce36f5f660fd73805aa44df4018e363f3e62fd4e9a15ef7f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d93332629660d538ed0e8a1131d873f6d684e7f6d40c3a94ea9304d800b4c36e = $this->env->getExtension("native_profiler");
        $__internal_d93332629660d538ed0e8a1131d873f6d684e7f6d40c3a94ea9304d800b4c36e->enter($__internal_d93332629660d538ed0e8a1131d873f6d684e7f6d40c3a94ea9304d800b4c36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d93332629660d538ed0e8a1131d873f6d684e7f6d40c3a94ea9304d800b4c36e->leave($__internal_d93332629660d538ed0e8a1131d873f6d684e7f6d40c3a94ea9304d800b4c36e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a72bca40400ed38fd57d0ff4a911c3829ade894623d76fbbce65b79975c0cbfe = $this->env->getExtension("native_profiler");
        $__internal_a72bca40400ed38fd57d0ff4a911c3829ade894623d76fbbce65b79975c0cbfe->enter($__internal_a72bca40400ed38fd57d0ff4a911c3829ade894623d76fbbce65b79975c0cbfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a72bca40400ed38fd57d0ff4a911c3829ade894623d76fbbce65b79975c0cbfe->leave($__internal_a72bca40400ed38fd57d0ff4a911c3829ade894623d76fbbce65b79975c0cbfe_prof);

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
