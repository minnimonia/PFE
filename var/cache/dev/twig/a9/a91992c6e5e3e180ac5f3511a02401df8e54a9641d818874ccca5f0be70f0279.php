<?php

/* base.html.twig */
class __TwigTemplate_16edf0f43457d8ac3f4348db670b77285ad34ae3c917881f1e6b41cf7a923e1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0f28b4c0d7ddb4a0ede51dd063ecdd851378107676f7b2d81f11a0a5bae61d7 = $this->env->getExtension("native_profiler");
        $__internal_e0f28b4c0d7ddb4a0ede51dd063ecdd851378107676f7b2d81f11a0a5bae61d7->enter($__internal_e0f28b4c0d7ddb4a0ede51dd063ecdd851378107676f7b2d81f11a0a5bae61d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e0f28b4c0d7ddb4a0ede51dd063ecdd851378107676f7b2d81f11a0a5bae61d7->leave($__internal_e0f28b4c0d7ddb4a0ede51dd063ecdd851378107676f7b2d81f11a0a5bae61d7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b3c223952262681ce316a33180afe2d6458b91fa785d888712b04388c7e5459 = $this->env->getExtension("native_profiler");
        $__internal_6b3c223952262681ce316a33180afe2d6458b91fa785d888712b04388c7e5459->enter($__internal_6b3c223952262681ce316a33180afe2d6458b91fa785d888712b04388c7e5459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6b3c223952262681ce316a33180afe2d6458b91fa785d888712b04388c7e5459->leave($__internal_6b3c223952262681ce316a33180afe2d6458b91fa785d888712b04388c7e5459_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cbdfaaf0230e87eaac9480ac64afd8ad23cf6162f419743eeadfaf1a8058f19c = $this->env->getExtension("native_profiler");
        $__internal_cbdfaaf0230e87eaac9480ac64afd8ad23cf6162f419743eeadfaf1a8058f19c->enter($__internal_cbdfaaf0230e87eaac9480ac64afd8ad23cf6162f419743eeadfaf1a8058f19c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cbdfaaf0230e87eaac9480ac64afd8ad23cf6162f419743eeadfaf1a8058f19c->leave($__internal_cbdfaaf0230e87eaac9480ac64afd8ad23cf6162f419743eeadfaf1a8058f19c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc49cc4067f63c5b324d992f9dc831a2be3a46b472ee9f13085d9ac16a338cef = $this->env->getExtension("native_profiler");
        $__internal_fc49cc4067f63c5b324d992f9dc831a2be3a46b472ee9f13085d9ac16a338cef->enter($__internal_fc49cc4067f63c5b324d992f9dc831a2be3a46b472ee9f13085d9ac16a338cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fc49cc4067f63c5b324d992f9dc831a2be3a46b472ee9f13085d9ac16a338cef->leave($__internal_fc49cc4067f63c5b324d992f9dc831a2be3a46b472ee9f13085d9ac16a338cef_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_040386b7158b69fa9b24878d6e8ebb2ba00aa8311f6e3bfcc0e19a7fd7b51153 = $this->env->getExtension("native_profiler");
        $__internal_040386b7158b69fa9b24878d6e8ebb2ba00aa8311f6e3bfcc0e19a7fd7b51153->enter($__internal_040386b7158b69fa9b24878d6e8ebb2ba00aa8311f6e3bfcc0e19a7fd7b51153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_040386b7158b69fa9b24878d6e8ebb2ba00aa8311f6e3bfcc0e19a7fd7b51153->leave($__internal_040386b7158b69fa9b24878d6e8ebb2ba00aa8311f6e3bfcc0e19a7fd7b51153_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
