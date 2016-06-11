<?php

/* head.html.twig */
class __TwigTemplate_860436b60bbfc12e931ecaf0c5296eb2cb8b939dae6e1cba57598242564abf5c extends Twig_Template
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
        $__internal_bb8174dbfa6c0d5ca6d54602f1e211194ea101c3e678b15e004261628014c434 = $this->env->getExtension("native_profiler");
        $__internal_bb8174dbfa6c0d5ca6d54602f1e211194ea101c3e678b15e004261628014c434->enter($__internal_bb8174dbfa6c0d5ca6d54602f1e211194ea101c3e678b15e004261628014c434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "head.html.twig"));

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

    <!-- Custom Fonts -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bower_components/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->";
        
        $__internal_bb8174dbfa6c0d5ca6d54602f1e211194ea101c3e678b15e004261628014c434->leave($__internal_bb8174dbfa6c0d5ca6d54602f1e211194ea101c3e678b15e004261628014c434_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9cf3748157dca61d37498a4052acde8f4c3081194485559ca847429ff63c637 = $this->env->getExtension("native_profiler");
        $__internal_f9cf3748157dca61d37498a4052acde8f4c3081194485559ca847429ff63c637->enter($__internal_f9cf3748157dca61d37498a4052acde8f4c3081194485559ca847429ff63c637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "
    ";
        
        $__internal_f9cf3748157dca61d37498a4052acde8f4c3081194485559ca847429ff63c637->leave($__internal_f9cf3748157dca61d37498a4052acde8f4c3081194485559ca847429ff63c637_prof);

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
        return array (  77 => 8,  71 => 7,  56 => 21,  50 => 18,  44 => 15,  38 => 12,  33 => 9,  31 => 7,  23 => 1,);
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
