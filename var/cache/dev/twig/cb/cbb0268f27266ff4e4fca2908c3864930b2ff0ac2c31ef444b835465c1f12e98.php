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
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8db224f832f8ac004c76000c56ba9e7a56968f97399316b2075880a7a8760439 = $this->env->getExtension("native_profiler");
        $__internal_8db224f832f8ac004c76000c56ba9e7a56968f97399316b2075880a7a8760439->enter($__internal_8db224f832f8ac004c76000c56ba9e7a56968f97399316b2075880a7a8760439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8db224f832f8ac004c76000c56ba9e7a56968f97399316b2075880a7a8760439->leave($__internal_8db224f832f8ac004c76000c56ba9e7a56968f97399316b2075880a7a8760439_prof);

    }

    // line 2
    public function block_pageheader($context, array $blocks = array())
    {
        $__internal_27714e0b2592aef76a2ead34f1a3bbfb0ee044472579e1095546c13da52df34a = $this->env->getExtension("native_profiler");
        $__internal_27714e0b2592aef76a2ead34f1a3bbfb0ee044472579e1095546c13da52df34a->enter($__internal_27714e0b2592aef76a2ead34f1a3bbfb0ee044472579e1095546c13da52df34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        echo "Ajouter un utilisateur";
        
        $__internal_27714e0b2592aef76a2ead34f1a3bbfb0ee044472579e1095546c13da52df34a->leave($__internal_27714e0b2592aef76a2ead34f1a3bbfb0ee044472579e1095546c13da52df34a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a3f9ef7dc21398aeeb68a5671f25e894740936b9ba589c5aa78a621ba6da13d = $this->env->getExtension("native_profiler");
        $__internal_7a3f9ef7dc21398aeeb68a5671f25e894740936b9ba589c5aa78a621ba6da13d->enter($__internal_7a3f9ef7dc21398aeeb68a5671f25e894740936b9ba589c5aa78a621ba6da13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("placeholder" => "Prénom", "class" => "form-control")));
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("placeholder" => "Nom", "class" => "form-control")));
        echo " 
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("placeholder" => "Adresse", "class" => "form-control")));
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codePostal", array()), 'widget', array("attr" => array("placeholder" => "Code Postal", "class" => "form-control")));
        echo "
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'widget', array("attr" => array("placeholder" => "Mail", "class" => "form-control")));
        echo "
    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tel", array()), 'widget', array("attr" => array("placeholder" => "Téléphone", "class" => "form-control")));
        echo "
    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "photoUrl", array()), 'widget', array("attr" => array("placeholder" => "Lien de la photo", "class" => "form-control")));
        echo "
    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("placeholder" => "Mot de passe", "class" => "form-control")));
        echo "
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Créer\" class=\"btn btn-primary\"/>
    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("utilisateur_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_7a3f9ef7dc21398aeeb68a5671f25e894740936b9ba589c5aa78a621ba6da13d->leave($__internal_7a3f9ef7dc21398aeeb68a5671f25e894740936b9ba589c5aa78a621ba6da13d_prof);

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
        return array (  104 => 20,  97 => 16,  92 => 14,  88 => 13,  84 => 12,  80 => 11,  76 => 10,  72 => 9,  68 => 8,  64 => 7,  60 => 6,  56 => 5,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block pageheader %}Ajouter un utilisateur{% endblock %}*/
/* {% block body %}*/
/* */
/*     {{ form_start(form) }}*/
/*     {{ form_widget(form.prenom, {'attr': {'placeholder': 'Prénom', 'class' : 'form-control'}}) }}*/
/*     {{ form_widget(form.nom, {'attr': {'placeholder': 'Nom', 'class' : 'form-control'}}) }} */
/*     {{ form_widget(form.adresse, {'attr': {'placeholder': 'Adresse', 'class' : 'form-control'}}) }}*/
/*     {{ form_widget(form.codePostal, {'attr': {'placeholder': 'Code Postal', 'class' : 'form-control'}}) }}*/
/*     {{ form_widget(form.mail, {'attr': {'placeholder': 'Mail', 'class' : 'form-control'}}) }}*/
/*     {{ form_widget(form.tel, {'attr': {'placeholder': 'Téléphone', 'class' : 'form-control'}}) }}*/
/*     {{ form_widget(form.photoUrl, {'attr': {'placeholder': 'Lien de la photo', 'class' : 'form-control'}}) }}*/
/*     {{ form_widget(form.password, {'attr': {'placeholder': 'Mot de passe', 'class' : 'form-control'}}) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Créer" class="btn btn-primary"/>*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('utilisateur_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
