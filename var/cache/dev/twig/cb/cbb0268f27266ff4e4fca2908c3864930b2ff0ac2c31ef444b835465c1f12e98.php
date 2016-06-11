<?php

/* utilisateur/new.html.twig */
class __TwigTemplate_b9e47b25d216cde659951463b993efe4069ced66a652b072741e05349fc8880f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/new.html.twig", 1);
        $this->blocks = array(
            'pageheader' => array($this, 'block_pageheader'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64f1fb8ccd6ca2397ee1a8aedbf51cd26ae6b8096d46c7f898935ca5d8442583 = $this->env->getExtension("native_profiler");
        $__internal_64f1fb8ccd6ca2397ee1a8aedbf51cd26ae6b8096d46c7f898935ca5d8442583->enter($__internal_64f1fb8ccd6ca2397ee1a8aedbf51cd26ae6b8096d46c7f898935ca5d8442583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64f1fb8ccd6ca2397ee1a8aedbf51cd26ae6b8096d46c7f898935ca5d8442583->leave($__internal_64f1fb8ccd6ca2397ee1a8aedbf51cd26ae6b8096d46c7f898935ca5d8442583_prof);

    }

    // line 2
    public function block_pageheader($context, array $blocks = array())
    {
        $__internal_cf6f400523282eaec1798ff5abf43fad8a13f51a1db7af489a34db9f9124f5b6 = $this->env->getExtension("native_profiler");
        $__internal_cf6f400523282eaec1798ff5abf43fad8a13f51a1db7af489a34db9f9124f5b6->enter($__internal_cf6f400523282eaec1798ff5abf43fad8a13f51a1db7af489a34db9f9124f5b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        echo "Ajouter un utilisateur";
        
        $__internal_cf6f400523282eaec1798ff5abf43fad8a13f51a1db7af489a34db9f9124f5b6->leave($__internal_cf6f400523282eaec1798ff5abf43fad8a13f51a1db7af489a34db9f9124f5b6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_18e8e584ff104099000a84aa96e1bbc165aae97e494b21e6987a0aac2278522b = $this->env->getExtension("native_profiler");
        $__internal_18e8e584ff104099000a84aa96e1bbc165aae97e494b21e6987a0aac2278522b->enter($__internal_18e8e584ff104099000a84aa96e1bbc165aae97e494b21e6987a0aac2278522b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

    <form  name=\"adminbundle_personnelmarel\" class=\"form-signup\" id=\"form\" action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("utilisateur_new");
        echo "\" class=\"form-signup\"  method=\"POST\">
        <input type='hidden' id=\"addoredit\" value=\"add\">
        <div class=\"\" id=\"adminbundle_personnelmarel\">

            <div class=\"row form-group\" >
                <div class=\"col-sm-6\">
                    <div class=\"form-group \">
                        

                        <input type=\"text\" id=\"utilisateur_prenom\" name=\"utilisateur[prenom]\" required=\"required\" maxlength=\"255\" placeholder=\"Prénom\" class=\"form-control\" />                            </div>

                </div>
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">

                        <input type=\"text\" id=\"utilisateur_nom\" name=\"utilisateur[nom]\" required=\"required\" maxlength=\"255\" placeholder=\"Nom\" class=\"form-control\" /> 

                    </div>
                </div>
            </div>

            <div class=\"row form-group\">
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">

                        <input type=\"text\" id=\"utilisateur_adresse\" name=\"utilisateur[adresse]\" required=\"required\" maxlength=\"255\" placeholder=\"Adresse\" class=\"form-control\" />
                        <!--<div id=\"keyboard\" style=\"\"></div>-->

                    </div>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\" form-group\">

                        <select class=\"form-control\" id=\"demo2\" multiple=\"multiple\" name=\"code[]\">
                        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["codes"]) ? $context["codes"] : $this->getContext($context, "codes")));
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 41
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["code"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["code"], "departement", array()), "html", null, true);
            echo " </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                        </select>

                    </div>
                </div>
            </div>
            <div class=\"row form-group\" >
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">

                        <input type=\"text\" id=\"utilisateur_mail\" name=\"utilisateur[mail]\" required=\"required\" maxlength=\"255\" placeholder=\"Mail\" class=\"form-control\" />

                    </div>

                </div>
                <div class=\"col-sm-6\">
                    <div class=\" form-group\">

                        <input type=\"text\" id=\"utilisateur_tel\" name=\"utilisateur[tel]\" required=\"required\" maxlength=\"255\" placeholder=\"Téléphone\" class=\"form-control\" />
                        <!--<div id=\"keyboard_lieaunaissance\" style=\"display:none;\"></div>-->

                    </div>
                </div>
            </div>
            <div class=\"row form-group\">
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">

                        <input type=\"file\" id=\"utilisateur_photoUrl\" name=\"utilisateur[photoUrl]\" required=\"required\" maxlength=\"255\" placeholder=\"Lien de la photo\" class=\"form-control\" />

                    </div>
                </div>

                <div class=\"col-sm-6\">
                    <div class=\"form-group\">

                        <input type=\"password\" id=\"utilisateur_password\" name=\"utilisateur[password]\" maxlength=\"255\" placeholder=\"Mot de passe\" class=\"form-control\" />

                    </div>
                </div>
            </div>

            <center>
                <label><input class='radiorole' type=\"radio\"  name=\"role\" value=\"1\" data-radio=\"iradio_minimal-blue\" checked=\"checked\">Particulier</label>
                <label><input class='radiorole' type=\"radio\"  required name=\"role\" value=\"2\" data-radio=\"iradio_minimal-blue\" >Artisan</label>
            </center>

            <div id=\"competence\">
                <label>Compétences</label>
                <select class=\"form-control\" id=\"demo\" multiple=\"multiple\" name=\"comp[]\">
                    ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competences"]) ? $context["competences"] : $this->getContext($context, "competences")));
        foreach ($context['_seq'] as $context["_key"] => $context["comp"]) {
            // line 93
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comp"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comp"], "nom", array()), "html", null, true);
            echo " </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "                </select>
            </div>

            <center>
                <button type=\"submit\" class=\"btn btn-primary\">Créer 
                    <span class=\"ti-save\"></span>
                </button>
                <a href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("utilisateur_index");
        echo "\" id=\"suipelbundle_refgouvernorat_submit\" name=\"suipelbundle_refgouvernorat[submit]\" class=\"btn btn-default btn-wide\">Retour 
                    <span class=\"ti-back-right\"></span>
                </a>
            </center>

        </div>
    </form>
";
        
        $__internal_18e8e584ff104099000a84aa96e1bbc165aae97e494b21e6987a0aac2278522b->leave($__internal_18e8e584ff104099000a84aa96e1bbc165aae97e494b21e6987a0aac2278522b_prof);

    }

    // line 110
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_db1303cd5729e4e45600876f7f4c8126456ce8dffe915d59eae2420b163c26e2 = $this->env->getExtension("native_profiler");
        $__internal_db1303cd5729e4e45600876f7f4c8126456ce8dffe915d59eae2420b163c26e2->enter($__internal_db1303cd5729e4e45600876f7f4c8126456ce8dffe915d59eae2420b163c26e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 111
        echo "    <script>
        \$(document).ready(function () {
            \$(\"#competence\").hide();
            \$('#demo').multiselect();
            \$('#demo2').multiselect();
            \$(\"input[name=role]:radio\").change(function () {

                //  alert(\$(this).val());
                switch (\$(this).val()) {
                    case \"1\":
                        \$(\"#competence\").hide();
                        \$('#demo').multiselect(\"clearSelection\");

                        break;
                    case \"2\":
                        \$(\"#competence\").show();
                        break;
                }

            });
        });

    </script>
";
        
        $__internal_db1303cd5729e4e45600876f7f4c8126456ce8dffe915d59eae2420b163c26e2->leave($__internal_db1303cd5729e4e45600876f7f4c8126456ce8dffe915d59eae2420b163c26e2_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 111,  200 => 110,  185 => 102,  176 => 95,  165 => 93,  161 => 92,  110 => 43,  99 => 41,  95 => 40,  58 => 6,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block pageheader %}Ajouter un utilisateur{% endblock %}*/
/* {% block body %}*/
/* */
/* */
/*     <form  name="adminbundle_personnelmarel" class="form-signup" id="form" action="{{ path('utilisateur_new')}}" class="form-signup"  method="POST">*/
/*         <input type='hidden' id="addoredit" value="add">*/
/*         <div class="" id="adminbundle_personnelmarel">*/
/* */
/*             <div class="row form-group" >*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group ">*/
/*                         */
/* */
/*                         <input type="text" id="utilisateur_prenom" name="utilisateur[prenom]" required="required" maxlength="255" placeholder="Prénom" class="form-control" />                            </div>*/
/* */
/*                 </div>*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/* */
/*                         <input type="text" id="utilisateur_nom" name="utilisateur[nom]" required="required" maxlength="255" placeholder="Nom" class="form-control" /> */
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row form-group">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/* */
/*                         <input type="text" id="utilisateur_adresse" name="utilisateur[adresse]" required="required" maxlength="255" placeholder="Adresse" class="form-control" />*/
/*                         <!--<div id="keyboard" style=""></div>-->*/
/* */
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-sm-6">*/
/*                     <div class=" form-group">*/
/* */
/*                         <select class="form-control" id="demo2" multiple="multiple" name="code[]">*/
/*                         {% for code in codes %}*/
/*                             <option value="{{code.id}}"> {{code.departement}} </option>*/
/*                         {% endfor %}*/
/*                         </select>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row form-group" >*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/* */
/*                         <input type="text" id="utilisateur_mail" name="utilisateur[mail]" required="required" maxlength="255" placeholder="Mail" class="form-control" />*/
/* */
/*                     </div>*/
/* */
/*                 </div>*/
/*                 <div class="col-sm-6">*/
/*                     <div class=" form-group">*/
/* */
/*                         <input type="text" id="utilisateur_tel" name="utilisateur[tel]" required="required" maxlength="255" placeholder="Téléphone" class="form-control" />*/
/*                         <!--<div id="keyboard_lieaunaissance" style="display:none;"></div>-->*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row form-group">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/* */
/*                         <input type="file" id="utilisateur_photoUrl" name="utilisateur[photoUrl]" required="required" maxlength="255" placeholder="Lien de la photo" class="form-control" />*/
/* */
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="col-sm-6">*/
/*                     <div class="form-group">*/
/* */
/*                         <input type="password" id="utilisateur_password" name="utilisateur[password]" maxlength="255" placeholder="Mot de passe" class="form-control" />*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <center>*/
/*                 <label><input class='radiorole' type="radio"  name="role" value="1" data-radio="iradio_minimal-blue" checked="checked">Particulier</label>*/
/*                 <label><input class='radiorole' type="radio"  required name="role" value="2" data-radio="iradio_minimal-blue" >Artisan</label>*/
/*             </center>*/
/* */
/*             <div id="competence">*/
/*                 <label>Compétences</label>*/
/*                 <select class="form-control" id="demo" multiple="multiple" name="comp[]">*/
/*                     {% for comp in competences %}*/
/*                         <option value="{{comp.id}}"> {{comp.nom}} </option>*/
/*                     {% endfor %}*/
/*                 </select>*/
/*             </div>*/
/* */
/*             <center>*/
/*                 <button type="submit" class="btn btn-primary">Créer */
/*                     <span class="ti-save"></span>*/
/*                 </button>*/
/*                 <a href="{{path('utilisateur_index')}}" id="suipelbundle_refgouvernorat_submit" name="suipelbundle_refgouvernorat[submit]" class="btn btn-default btn-wide">Retour */
/*                     <span class="ti-back-right"></span>*/
/*                 </a>*/
/*             </center>*/
/* */
/*         </div>*/
/*     </form>*/
/* {% endblock %}*/
/* {% block javascript %}*/
/*     <script>*/
/*         $(document).ready(function () {*/
/*             $("#competence").hide();*/
/*             $('#demo').multiselect();*/
/*             $('#demo2').multiselect();*/
/*             $("input[name=role]:radio").change(function () {*/
/* */
/*                 //  alert($(this).val());*/
/*                 switch ($(this).val()) {*/
/*                     case "1":*/
/*                         $("#competence").hide();*/
/*                         $('#demo').multiselect("clearSelection");*/
/* */
/*                         break;*/
/*                     case "2":*/
/*                         $("#competence").show();*/
/*                         break;*/
/*                 }*/
/* */
/*             });*/
/*         });*/
/* */
/*     </script>*/
/* {% endblock %}*/
/* */
