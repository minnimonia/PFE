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
        $__internal_3ee9b3752541723b1f442d4952d8546c3ba49e905228b345fe23a4f196ce676b = $this->env->getExtension("native_profiler");
        $__internal_3ee9b3752541723b1f442d4952d8546c3ba49e905228b345fe23a4f196ce676b->enter($__internal_3ee9b3752541723b1f442d4952d8546c3ba49e905228b345fe23a4f196ce676b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ee9b3752541723b1f442d4952d8546c3ba49e905228b345fe23a4f196ce676b->leave($__internal_3ee9b3752541723b1f442d4952d8546c3ba49e905228b345fe23a4f196ce676b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b6236b8ad9e71cbcce8830c6f262329d4820c44540627e45529db599924dc004 = $this->env->getExtension("native_profiler");
        $__internal_b6236b8ad9e71cbcce8830c6f262329d4820c44540627e45529db599924dc004->enter($__internal_b6236b8ad9e71cbcce8830c6f262329d4820c44540627e45529db599924dc004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b6236b8ad9e71cbcce8830c6f262329d4820c44540627e45529db599924dc004->leave($__internal_b6236b8ad9e71cbcce8830c6f262329d4820c44540627e45529db599924dc004_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c245a68b4b952edee800a1cd824b535fdfadf1f9692628581263d62946b4e27 = $this->env->getExtension("native_profiler");
        $__internal_1c245a68b4b952edee800a1cd824b535fdfadf1f9692628581263d62946b4e27->enter($__internal_1c245a68b4b952edee800a1cd824b535fdfadf1f9692628581263d62946b4e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1c245a68b4b952edee800a1cd824b535fdfadf1f9692628581263d62946b4e27->leave($__internal_1c245a68b4b952edee800a1cd824b535fdfadf1f9692628581263d62946b4e27_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_36e113485314d1ebddd1d21d3169740966fd3ccffcd78b4dc63b64793279df1e = $this->env->getExtension("native_profiler");
        $__internal_36e113485314d1ebddd1d21d3169740966fd3ccffcd78b4dc63b64793279df1e->enter($__internal_36e113485314d1ebddd1d21d3169740966fd3ccffcd78b4dc63b64793279df1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_36e113485314d1ebddd1d21d3169740966fd3ccffcd78b4dc63b64793279df1e->leave($__internal_36e113485314d1ebddd1d21d3169740966fd3ccffcd78b4dc63b64793279df1e_prof);

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
