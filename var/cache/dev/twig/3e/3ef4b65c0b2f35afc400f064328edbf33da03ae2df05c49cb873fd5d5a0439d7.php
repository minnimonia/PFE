<?php

/* login.html.twig */
class __TwigTemplate_aa910cb826e68dac8e05fee9730c9c93e8beb897022ee1933abbb4f95d452f71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af58bd226af18ea368f3811280ef3a8304297b57af41039e2e14b8305fdf7363 = $this->env->getExtension("native_profiler");
        $__internal_af58bd226af18ea368f3811280ef3a8304297b57af41039e2e14b8305fdf7363->enter($__internal_af58bd226af18ea368f3811280ef3a8304297b57af41039e2e14b8305fdf7363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">

    <head>

        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title>Se connecter</title>

        <!-- Bootstrap Core CSS -->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bower_components/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- MetisMenu CSS -->
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bower_components/metisMenu/dist/metisMenu.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Custom CSS -->
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/css/sb-admin-2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bower_components/dist/css/bootstrap-multiselect.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Custom Fonts -->
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bower_components/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
            <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->

    </head>

    <body>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-md-offset-4\">
                    <div class=\"login-panel panel panel-default\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">Entrez vos identifiants</h3>
                        </div>
                        <div class=\"panel-body\">
                            <form role=\"form\" method=\"post\" action=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">
                                ";
        // line 48
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 49
            echo "                                    <div class=\"alert alert-danger\">
                                        ";
            // line 50
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), array("Bad credentials" => "Nom d'utilisateur ou mot de passe incorrecte")), "html", null, true);
            echo "

                                    </div>
                                ";
        }
        // line 54
        echo "                                <fieldset>
                                    <div class=\"form-group\">
                                        <input class=\"form-control\" placeholder=\"E-mail\" id=\"Username\" name=\"_username\" type=\"email\" autofocus>
                                    </div>
                                    <div class=\"form-group\">
                                        <input class=\"form-control\" placeholder=\"Password\" id=\"Password\" name=\"_password\" type=\"password\" value=\"\">
                                    </div>
                                    <div class=\"checkbox\">

                                        <!-- Change this to a button or input when using this as a form -->
                                        <button type=\"submit\" class=\"btn btn-lg btn-success btn-block\">login</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bower_components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bower_components/metisMenu/dist/metisMenu.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bower_components/dist/js/bootstrap-multiselect.js"), "html", null, true);
        echo "\"></script>

        <!-- Custom Theme JavaScript -->
        <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>

    </body>

</html>


";
        
        $__internal_af58bd226af18ea368f3811280ef3a8304297b57af41039e2e14b8305fdf7363->leave($__internal_af58bd226af18ea368f3811280ef3a8304297b57af41039e2e14b8305fdf7363_prof);

    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 83,  138 => 80,  134 => 79,  128 => 76,  123 => 74,  101 => 54,  94 => 50,  91 => 49,  89 => 48,  85 => 47,  61 => 26,  55 => 23,  51 => 22,  45 => 19,  39 => 16,  22 => 1,);
    }
}
/* */
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/*     <head>*/
/* */
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <meta name="description" content="">*/
/*         <meta name="author" content="">*/
/* */
/*         <title>Se connecter</title>*/
/* */
/*         <!-- Bootstrap Core CSS -->*/
/*         <link href="{{ asset('assets/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">*/
/* */
/*         <!-- MetisMenu CSS -->*/
/*         <link href="{{ asset('assets/bower_components/metisMenu/dist/metisMenu.min.css')}}" rel="stylesheet">*/
/* */
/*         <!-- Custom CSS -->*/
/*         <link href="{{ asset('assets/dist/css/sb-admin-2.css')}}" rel="stylesheet">*/
/*         <link href="{{ asset('assets/bower_components/dist/css/bootstrap-multiselect.css')}}" rel="stylesheet">*/
/* */
/*         <!-- Custom Fonts -->*/
/*         <link href="{{ asset('assets/bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">*/
/* */
/*         <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*         <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*         <!--[if lt IE 9]>*/
/*             <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*             <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*         <![endif]-->*/
/* */
/*     </head>*/
/* */
/*     <body>*/
/* */
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-4 col-md-offset-4">*/
/*                     <div class="login-panel panel panel-default">*/
/*                         <div class="panel-heading">*/
/*                             <h3 class="panel-title">Entrez vos identifiants</h3>*/
/*                         </div>*/
/*                         <div class="panel-body">*/
/*                             <form role="form" method="post" action="{{ path('login') }}">*/
/*                                 {% if error %}*/
/*                                     <div class="alert alert-danger">*/
/*                                         {{ error.message| replace({"Bad credentials": "Nom d'utilisateur ou mot de passe incorrecte" }) }}*/
/* */
/*                                     </div>*/
/*                                 {% endif %}*/
/*                                 <fieldset>*/
/*                                     <div class="form-group">*/
/*                                         <input class="form-control" placeholder="E-mail" id="Username" name="_username" type="email" autofocus>*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/*                                         <input class="form-control" placeholder="Password" id="Password" name="_password" type="password" value="">*/
/*                                     </div>*/
/*                                     <div class="checkbox">*/
/* */
/*                                         <!-- Change this to a button or input when using this as a form -->*/
/*                                         <button type="submit" class="btn btn-lg btn-success btn-block">login</button>*/
/*                                 </fieldset>*/
/*                             </form>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <!-- jQuery -->*/
/*         <script src="{{ asset('assets/bower_components/jquery/dist/jquery.min.js')}}"></script>*/
/*         <!-- Bootstrap Core JavaScript -->*/
/*         <script src="{{ asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>*/
/* */
/*         <!-- Metis Menu Plugin JavaScript -->*/
/*         <script src="{{ asset('assets/bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>*/
/*         <script src="{{ asset('assets/bower_components/dist/js/bootstrap-multiselect.js')}}"></script>*/
/* */
/*         <!-- Custom Theme JavaScript -->*/
/*         <script src="{{ asset('assets/dist/js/sb-admin-2.js')}}"></script>*/
/* */
/*     </body>*/
/* */
/* </html>*/
/* */
/* */
/* */
