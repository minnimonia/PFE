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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41c0e27014c3826ceb36bd51b7af185461f9a35bb0a1d13b74e5e528a2c92249 = $this->env->getExtension("native_profiler");
        $__internal_41c0e27014c3826ceb36bd51b7af185461f9a35bb0a1d13b74e5e528a2c92249->enter($__internal_41c0e27014c3826ceb36bd51b7af185461f9a35bb0a1d13b74e5e528a2c92249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41c0e27014c3826ceb36bd51b7af185461f9a35bb0a1d13b74e5e528a2c92249->leave($__internal_41c0e27014c3826ceb36bd51b7af185461f9a35bb0a1d13b74e5e528a2c92249_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a05d51d60027fc5712ad7739b9f45d5360672c7d3f84c3078412b2466b693e3b = $this->env->getExtension("native_profiler");
        $__internal_a05d51d60027fc5712ad7739b9f45d5360672c7d3f84c3078412b2466b693e3b->enter($__internal_a05d51d60027fc5712ad7739b9f45d5360672c7d3f84c3078412b2466b693e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Utilisateur creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("placeholder" => "Prenom", "class" => "form-control")));
        echo "
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("placeholder" => "Nom", "class" => "form-control")));
        echo " 
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("placeholder" => "Adresse", "class" => "form-control")));
        echo "
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codePostal", array()), 'widget', array("attr" => array("placeholder" => "Code Postal", "class" => "form-control")));
        echo "
    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'widget', array("attr" => array("placeholder" => "Mail", "class" => "form-control")));
        echo "
    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tel", array()), 'widget', array("attr" => array("placeholder" => "Téléphone", "class" => "form-control")));
        echo "
    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "photoUrl", array()), 'widget', array("attr" => array("placeholder" => "Lien de la photo", "class" => "form-control")));
        echo "
    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("placeholder" => "Mot de passe", "class" => "form-control")));
        echo "
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("utilisateur_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_a05d51d60027fc5712ad7739b9f45d5360672c7d3f84c3078412b2466b693e3b->leave($__internal_a05d51d60027fc5712ad7739b9f45d5360672c7d3f84c3078412b2466b693e3b_prof);

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
        return array (  92 => 21,  85 => 17,  80 => 15,  76 => 14,  72 => 13,  68 => 12,  64 => 11,  60 => 10,  56 => 9,  52 => 8,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Utilisateur creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*     {{ form_widget(form.prenom, {'attr': {'placeholder': 'Prenom', 'class' : 'form-control'}}) }}*/
/*     {{ form_widget(form.nom, {'attr': {'placeholder': 'Nom', 'class' : 'form-control'}}) }} */
/*     {{ form_widget(form.adresse, {'attr': {'placeholder': 'Adresse', 'class' : 'form-control'}}) }}*/
/*     {{ form_widget(form.codePostal, {'attr': {'placeholder': 'Code Postal', 'class' : 'form-control'}}) }}*/
/*     {{ form_widget(form.mail, {'attr': {'placeholder': 'Mail', 'class' : 'form-control'}}) }}*/
/*     {{ form_widget(form.tel, {'attr': {'placeholder': 'Téléphone', 'class' : 'form-control'}}) }}*/
/*     {{ form_widget(form.photoUrl, {'attr': {'placeholder': 'Lien de la photo', 'class' : 'form-control'}}) }}*/
/*     {{ form_widget(form.password, {'attr': {'placeholder': 'Mot de passe', 'class' : 'form-control'}}) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('utilisateur_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
