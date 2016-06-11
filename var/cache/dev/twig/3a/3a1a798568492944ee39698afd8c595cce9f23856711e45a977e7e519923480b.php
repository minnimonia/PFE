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
        $__internal_3811b66f3edc6cd8231dcc2c8ecc6a6294eb24b9090916a24d94c643f21aadb2 = $this->env->getExtension("native_profiler");
        $__internal_3811b66f3edc6cd8231dcc2c8ecc6a6294eb24b9090916a24d94c643f21aadb2->enter($__internal_3811b66f3edc6cd8231dcc2c8ecc6a6294eb24b9090916a24d94c643f21aadb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3811b66f3edc6cd8231dcc2c8ecc6a6294eb24b9090916a24d94c643f21aadb2->leave($__internal_3811b66f3edc6cd8231dcc2c8ecc6a6294eb24b9090916a24d94c643f21aadb2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1543921001838b5039793629dc4dcb4d5f6a517374c61a719b81d26848f7d468 = $this->env->getExtension("native_profiler");
        $__internal_1543921001838b5039793629dc4dcb4d5f6a517374c61a719b81d26848f7d468->enter($__internal_1543921001838b5039793629dc4dcb4d5f6a517374c61a719b81d26848f7d468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1543921001838b5039793629dc4dcb4d5f6a517374c61a719b81d26848f7d468->leave($__internal_1543921001838b5039793629dc4dcb4d5f6a517374c61a719b81d26848f7d468_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_80d741558d62673851b0cb5277e3dc0e5cb51fc4d8697a841b5731350bba4c4a = $this->env->getExtension("native_profiler");
        $__internal_80d741558d62673851b0cb5277e3dc0e5cb51fc4d8697a841b5731350bba4c4a->enter($__internal_80d741558d62673851b0cb5277e3dc0e5cb51fc4d8697a841b5731350bba4c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_80d741558d62673851b0cb5277e3dc0e5cb51fc4d8697a841b5731350bba4c4a->leave($__internal_80d741558d62673851b0cb5277e3dc0e5cb51fc4d8697a841b5731350bba4c4a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bdb8ce3a57c1eaa70fcafff2e1099f9b80d1502418b10b2effa181029bbc0702 = $this->env->getExtension("native_profiler");
        $__internal_bdb8ce3a57c1eaa70fcafff2e1099f9b80d1502418b10b2effa181029bbc0702->enter($__internal_bdb8ce3a57c1eaa70fcafff2e1099f9b80d1502418b10b2effa181029bbc0702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_bdb8ce3a57c1eaa70fcafff2e1099f9b80d1502418b10b2effa181029bbc0702->leave($__internal_bdb8ce3a57c1eaa70fcafff2e1099f9b80d1502418b10b2effa181029bbc0702_prof);

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
