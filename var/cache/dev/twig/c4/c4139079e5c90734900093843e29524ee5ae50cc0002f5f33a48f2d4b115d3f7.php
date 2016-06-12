<?php

/* UserBundle:Login:login.html.twig */
class __TwigTemplate_35cb6b75e10fa4dbb241f3068f2d6317fe713e9960e5eecc77c4a5239728e1e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("login.html.twig", "UserBundle:Login:login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e98b24a07137fa8d13f3079e0557b711710f1103a47bb38ba9159d434361e1f0 = $this->env->getExtension("native_profiler");
        $__internal_e98b24a07137fa8d13f3079e0557b711710f1103a47bb38ba9159d434361e1f0->enter($__internal_e98b24a07137fa8d13f3079e0557b711710f1103a47bb38ba9159d434361e1f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Login:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e98b24a07137fa8d13f3079e0557b711710f1103a47bb38ba9159d434361e1f0->leave($__internal_e98b24a07137fa8d13f3079e0557b711710f1103a47bb38ba9159d434361e1f0_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_78557b1411cf1e27955650607f4b28a8bcc0aa5ca180e2768b0fe214fd2f1105 = $this->env->getExtension("native_profiler");
        $__internal_78557b1411cf1e27955650607f4b28a8bcc0aa5ca180e2768b0fe214fd2f1105->enter($__internal_78557b1411cf1e27955650607f4b28a8bcc0aa5ca180e2768b0fe214fd2f1105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"row\">
        <div class=\"main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4\">
            <div class=\"logo margin-top-30\" style=\"text-align:center\">
                <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"وزارة الشؤون الدين\" />
            </div>
            <!-- start: LOGIN BOX -->
            <div class=\"box-login\">
                <form class=\"form-login\" method=\"post\" action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("login_candid_check");
        echo "\">
                    <fieldset>
                        <legend>
                      تسجيل الدخول  (خاص بالمترشح) 
                        </legend>
                        <p>
                           الرجاء ادخال المعرف الوحيد وكلمة العبور
                        </p>
                        <div class=\"form-group\">
                            <span class=\"input-icon\">
                                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" placeholder=\"المعرف الوحيد\">
                                <i class=\"fa fa-user\"></i> 
                            </span>
                        </div>
                        <div class=\"form-group\">
                            <span class=\"input-icon\">
                                <input type=\"password\" id=\"Password\" name=\"_password\" placeholder=\"كلمة السر\" class=\"form-control\">
                                <i class=\"fa fa-lock\"></i>
                            </span>
                        </div>
                        <div class=\"form-actions\">
                            <button type=\"submit\" class=\"btn btn-primary pull-left\">
                                الدخول <i class=\"fa fa-arrow-circle-left\"></i>
                            </button>
                            ";
        // line 34
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 35
            echo "                                <div class=\"alert alert-danger\">
                                ";
            // line 36
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), array("Bad credentials" => "المعرف الوحيد أو كلمة السر خاطئ.")), "html", null, true);
            echo "
                            
                                </div>
                            ";
        }
        // line 40
        echo "                        </div>
                    </fieldset>
                </form>
                <!-- start: COPYRIGHT -->
                <div class=\"copyright\">
                    &copy; <span class=\"current-year\"></span><span class=\"text-bold text-uppercase\"> Cynapsys</span>. <span><a href=\"http://www.cynapsys.de/\">www.cynapsys.de</a></span>
                </div>
                <!-- end: COPYRIGHT -->
            </div>
            <!-- end: LOGIN BOX -->
        </div>
    </div>



    ";
        // line 56
        echo "

";
        
        $__internal_78557b1411cf1e27955650607f4b28a8bcc0aa5ca180e2768b0fe214fd2f1105->leave($__internal_78557b1411cf1e27955650607f4b28a8bcc0aa5ca180e2768b0fe214fd2f1105_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 56,  91 => 40,  84 => 36,  81 => 35,  79 => 34,  52 => 10,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "login.html.twig" %}*/
/* {% block body -%}*/
/*     <div class="row">*/
/*         <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">*/
/*             <div class="logo margin-top-30" style="text-align:center">*/
/*                 <img src="{{ asset('assets/images/logo.png') }}" alt="وزارة الشؤون الدين" />*/
/*             </div>*/
/*             <!-- start: LOGIN BOX -->*/
/*             <div class="box-login">*/
/*                 <form class="form-login" method="post" action="{{ path('login_candid_check') }}">*/
/*                     <fieldset>*/
/*                         <legend>*/
/*                       تسجيل الدخول  (خاص بالمترشح) */
/*                         </legend>*/
/*                         <p>*/
/*                            الرجاء ادخال المعرف الوحيد وكلمة العبور*/
/*                         </p>*/
/*                         <div class="form-group">*/
/*                             <span class="input-icon">*/
/*                                 <input type="text" class="form-control" id="username" name="_username" placeholder="المعرف الوحيد">*/
/*                                 <i class="fa fa-user"></i> */
/*                             </span>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <span class="input-icon">*/
/*                                 <input type="password" id="Password" name="_password" placeholder="كلمة السر" class="form-control">*/
/*                                 <i class="fa fa-lock"></i>*/
/*                             </span>*/
/*                         </div>*/
/*                         <div class="form-actions">*/
/*                             <button type="submit" class="btn btn-primary pull-left">*/
/*                                 الدخول <i class="fa fa-arrow-circle-left"></i>*/
/*                             </button>*/
/*                             {% if error %}*/
/*                                 <div class="alert alert-danger">*/
/*                                 {{ error.message | replace({"Bad credentials": "المعرف الوحيد أو كلمة السر خاطئ." }) }}*/
/*                             */
/*                                 </div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </fieldset>*/
/*                 </form>*/
/*                 <!-- start: COPYRIGHT -->*/
/*                 <div class="copyright">*/
/*                     &copy; <span class="current-year"></span><span class="text-bold text-uppercase"> Cynapsys</span>. <span><a href="http://www.cynapsys.de/">www.cynapsys.de</a></span>*/
/*                 </div>*/
/*                 <!-- end: COPYRIGHT -->*/
/*             </div>*/
/*             <!-- end: LOGIN BOX -->*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* */
/*     {# S'il y a une erreur, on l'affiche dans un joli cadre #}*/
/* */
/* */
/* {% endblock %} */
/* {# Le formulaire, avec URL de soumission vers la route « login_check » comme on l'a vu #}*/
/* */
/* */
/* */
/* */
