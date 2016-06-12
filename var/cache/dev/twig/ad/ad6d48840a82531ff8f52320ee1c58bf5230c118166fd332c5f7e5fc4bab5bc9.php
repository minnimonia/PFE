<?php

/* head.html.twig */
class __TwigTemplate_409198b01bf3d951f3796125ca4eab856c8b51ba3d45f55e11323dc7c45eee9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a1d2a913654fb511da9dffdfeb44da7242d7ae30ee2430bc56d303b726e9340 = $this->env->getExtension("native_profiler");
        $__internal_4a1d2a913654fb511da9dffdfeb44da7242d7ae30ee2430bc56d303b726e9340->enter($__internal_4a1d2a913654fb511da9dffdfeb44da7242d7ae30ee2430bc56d303b726e9340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "head.html.twig"));

        // line 1
        echo "<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"description\" content=\"\">
<meta name=\"author\" content=\"\">

<title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bower_components/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- MetisMenu CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bower_components/metisMenu/dist/metisMenu.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/css/sb-admin-2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bower_components/dist/css/bootstrap-multiselect.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bower_components/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->";
        
        $__internal_4a1d2a913654fb511da9dffdfeb44da7242d7ae30ee2430bc56d303b726e9340->leave($__internal_4a1d2a913654fb511da9dffdfeb44da7242d7ae30ee2430bc56d303b726e9340_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9358a3a684644436a78a7a53332d2509698121fbc8ca34f5441c0f3dc798c2af = $this->env->getExtension("native_profiler");
        $__internal_9358a3a684644436a78a7a53332d2509698121fbc8ca34f5441c0f3dc798c2af->enter($__internal_9358a3a684644436a78a7a53332d2509698121fbc8ca34f5441c0f3dc798c2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "
    ";
        
        $__internal_9358a3a684644436a78a7a53332d2509698121fbc8ca34f5441c0f3dc798c2af->leave($__internal_9358a3a684644436a78a7a53332d2509698121fbc8ca34f5441c0f3dc798c2af_prof);

    }

    public function getTemplateName()
    {
        return "head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 8,  75 => 7,  60 => 22,  54 => 19,  50 => 18,  44 => 15,  38 => 12,  33 => 9,  31 => 7,  23 => 1,);
    }
}
/* <meta charset="utf-8">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta name="description" content="">*/
/* <meta name="author" content="">*/
/* */
/* <title>{% block title %}*/
/* */
/*     {% endblock %}</title>*/
/* */
/*     <!-- Bootstrap Core CSS -->*/
/*     <link href="{{ asset('assets/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">*/
/* */
/*     <!-- MetisMenu CSS -->*/
/*     <link href="{{ asset('assets/bower_components/metisMenu/dist/metisMenu.min.css')}}" rel="stylesheet">*/
/* */
/*     <!-- Custom CSS -->*/
/*     <link href="{{ asset('assets/dist/css/sb-admin-2.css')}}" rel="stylesheet">*/
/*     <link href="{{ asset('assets/bower_components/dist/css/bootstrap-multiselect.css')}}" rel="stylesheet">*/
/* */
/*     <!-- Custom Fonts -->*/
/*     <link href="{{ asset('assets/bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">*/
/* */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
