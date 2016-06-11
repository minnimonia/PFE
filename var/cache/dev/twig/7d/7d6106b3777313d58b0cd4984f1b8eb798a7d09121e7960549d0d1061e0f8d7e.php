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
        $__internal_d81839e068f3477ce35f5441357c5cfb99906ea44d4bdd07f139a7e37935beaf = $this->env->getExtension("native_profiler");
        $__internal_d81839e068f3477ce35f5441357c5cfb99906ea44d4bdd07f139a7e37935beaf->enter($__internal_d81839e068f3477ce35f5441357c5cfb99906ea44d4bdd07f139a7e37935beaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d81839e068f3477ce35f5441357c5cfb99906ea44d4bdd07f139a7e37935beaf->leave($__internal_d81839e068f3477ce35f5441357c5cfb99906ea44d4bdd07f139a7e37935beaf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8f2b551abba19a92980569b391590aafc9c6694de7c3393a2ebaab4c6506bb37 = $this->env->getExtension("native_profiler");
        $__internal_8f2b551abba19a92980569b391590aafc9c6694de7c3393a2ebaab4c6506bb37->enter($__internal_8f2b551abba19a92980569b391590aafc9c6694de7c3393a2ebaab4c6506bb37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8f2b551abba19a92980569b391590aafc9c6694de7c3393a2ebaab4c6506bb37->leave($__internal_8f2b551abba19a92980569b391590aafc9c6694de7c3393a2ebaab4c6506bb37_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7006ebac7111ef231428154eb55f12eef3ae6579f0ab5382397eecd58cc43fd2 = $this->env->getExtension("native_profiler");
        $__internal_7006ebac7111ef231428154eb55f12eef3ae6579f0ab5382397eecd58cc43fd2->enter($__internal_7006ebac7111ef231428154eb55f12eef3ae6579f0ab5382397eecd58cc43fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7006ebac7111ef231428154eb55f12eef3ae6579f0ab5382397eecd58cc43fd2->leave($__internal_7006ebac7111ef231428154eb55f12eef3ae6579f0ab5382397eecd58cc43fd2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_94cb9f309613a26bc2a72edaf196dbebf3654716733cd71d1d132826e99be0dd = $this->env->getExtension("native_profiler");
        $__internal_94cb9f309613a26bc2a72edaf196dbebf3654716733cd71d1d132826e99be0dd->enter($__internal_94cb9f309613a26bc2a72edaf196dbebf3654716733cd71d1d132826e99be0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_94cb9f309613a26bc2a72edaf196dbebf3654716733cd71d1d132826e99be0dd->leave($__internal_94cb9f309613a26bc2a72edaf196dbebf3654716733cd71d1d132826e99be0dd_prof);

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
