<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_abdec9791d914d391c60630bc6fc355acce87b7bb0327d1c4e7a1807a548db6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_beea2228544b8c8300815b6169d30558483428d18ba4a48128c947154308e944 = $this->env->getExtension("native_profiler");
        $__internal_beea2228544b8c8300815b6169d30558483428d18ba4a48128c947154308e944->enter($__internal_beea2228544b8c8300815b6169d30558483428d18ba4a48128c947154308e944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_beea2228544b8c8300815b6169d30558483428d18ba4a48128c947154308e944->leave($__internal_beea2228544b8c8300815b6169d30558483428d18ba4a48128c947154308e944_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_19a8e77a1887f2c91b8fefa011c2a4ae130405224c6a3a2207a198a2504301f1 = $this->env->getExtension("native_profiler");
        $__internal_19a8e77a1887f2c91b8fefa011c2a4ae130405224c6a3a2207a198a2504301f1->enter($__internal_19a8e77a1887f2c91b8fefa011c2a4ae130405224c6a3a2207a198a2504301f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_19a8e77a1887f2c91b8fefa011c2a4ae130405224c6a3a2207a198a2504301f1->leave($__internal_19a8e77a1887f2c91b8fefa011c2a4ae130405224c6a3a2207a198a2504301f1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e0f78dcf0f638b656adf37842d8047f78f469b11f1736829ff85e01b228241e8 = $this->env->getExtension("native_profiler");
        $__internal_e0f78dcf0f638b656adf37842d8047f78f469b11f1736829ff85e01b228241e8->enter($__internal_e0f78dcf0f638b656adf37842d8047f78f469b11f1736829ff85e01b228241e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e0f78dcf0f638b656adf37842d8047f78f469b11f1736829ff85e01b228241e8->leave($__internal_e0f78dcf0f638b656adf37842d8047f78f469b11f1736829ff85e01b228241e8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_834ad8ccbb84dd82c786b7bd40878b0f39d4d33c31bacbb4b8817049f08ab954 = $this->env->getExtension("native_profiler");
        $__internal_834ad8ccbb84dd82c786b7bd40878b0f39d4d33c31bacbb4b8817049f08ab954->enter($__internal_834ad8ccbb84dd82c786b7bd40878b0f39d4d33c31bacbb4b8817049f08ab954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_834ad8ccbb84dd82c786b7bd40878b0f39d4d33c31bacbb4b8817049f08ab954->leave($__internal_834ad8ccbb84dd82c786b7bd40878b0f39d4d33c31bacbb4b8817049f08ab954_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
