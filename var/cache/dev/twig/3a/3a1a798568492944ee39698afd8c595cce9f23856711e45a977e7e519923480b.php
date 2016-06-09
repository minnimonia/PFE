<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0277e0f1ee642217a630b9d08f38d67987b995e4263ed229a74a882bd5a9c27d extends Twig_Template
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
        $__internal_4f69798553d4f29107d35759dbab22c38e9afb37e46ddeb149587ddc8baeaf41 = $this->env->getExtension("native_profiler");
        $__internal_4f69798553d4f29107d35759dbab22c38e9afb37e46ddeb149587ddc8baeaf41->enter($__internal_4f69798553d4f29107d35759dbab22c38e9afb37e46ddeb149587ddc8baeaf41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f69798553d4f29107d35759dbab22c38e9afb37e46ddeb149587ddc8baeaf41->leave($__internal_4f69798553d4f29107d35759dbab22c38e9afb37e46ddeb149587ddc8baeaf41_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d46aa12a60ee1f53d138df4422ccabf4cfe1bab47b0e751bc36805ab7fa93c86 = $this->env->getExtension("native_profiler");
        $__internal_d46aa12a60ee1f53d138df4422ccabf4cfe1bab47b0e751bc36805ab7fa93c86->enter($__internal_d46aa12a60ee1f53d138df4422ccabf4cfe1bab47b0e751bc36805ab7fa93c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d46aa12a60ee1f53d138df4422ccabf4cfe1bab47b0e751bc36805ab7fa93c86->leave($__internal_d46aa12a60ee1f53d138df4422ccabf4cfe1bab47b0e751bc36805ab7fa93c86_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d2cf3b191d56ab3f0480816a0d75035f149b827097fe73c139ea2b6c3a88925 = $this->env->getExtension("native_profiler");
        $__internal_3d2cf3b191d56ab3f0480816a0d75035f149b827097fe73c139ea2b6c3a88925->enter($__internal_3d2cf3b191d56ab3f0480816a0d75035f149b827097fe73c139ea2b6c3a88925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3d2cf3b191d56ab3f0480816a0d75035f149b827097fe73c139ea2b6c3a88925->leave($__internal_3d2cf3b191d56ab3f0480816a0d75035f149b827097fe73c139ea2b6c3a88925_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_42f98ea60dc93663e57738098cf35455f97da0aecc397d8a18716a917b16062d = $this->env->getExtension("native_profiler");
        $__internal_42f98ea60dc93663e57738098cf35455f97da0aecc397d8a18716a917b16062d->enter($__internal_42f98ea60dc93663e57738098cf35455f97da0aecc397d8a18716a917b16062d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_42f98ea60dc93663e57738098cf35455f97da0aecc397d8a18716a917b16062d->leave($__internal_42f98ea60dc93663e57738098cf35455f97da0aecc397d8a18716a917b16062d_prof);

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
