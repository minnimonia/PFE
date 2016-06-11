<?php

/* competence/new.html.twig */
class __TwigTemplate_fda1dccf76192cfea56605b5a7a41c16d5416e347ea44ca0332806a0272ac87f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "competence/new.html.twig", 1);
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
        $__internal_cdfcc147f18214c41d4850af3bdf98845ddc943b405bbdb5dbed99109e97dee9 = $this->env->getExtension("native_profiler");
        $__internal_cdfcc147f18214c41d4850af3bdf98845ddc943b405bbdb5dbed99109e97dee9->enter($__internal_cdfcc147f18214c41d4850af3bdf98845ddc943b405bbdb5dbed99109e97dee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "competence/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdfcc147f18214c41d4850af3bdf98845ddc943b405bbdb5dbed99109e97dee9->leave($__internal_cdfcc147f18214c41d4850af3bdf98845ddc943b405bbdb5dbed99109e97dee9_prof);

    }

    // line 2
    public function block_pageheader($context, array $blocks = array())
    {
        $__internal_468e8ccd6edcf18e9f9712f6306c894f3ecc8d3501afe7d8dc7520227c3da93f = $this->env->getExtension("native_profiler");
        $__internal_468e8ccd6edcf18e9f9712f6306c894f3ecc8d3501afe7d8dc7520227c3da93f->enter($__internal_468e8ccd6edcf18e9f9712f6306c894f3ecc8d3501afe7d8dc7520227c3da93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        echo "Ajouter une compétence";
        
        $__internal_468e8ccd6edcf18e9f9712f6306c894f3ecc8d3501afe7d8dc7520227c3da93f->leave($__internal_468e8ccd6edcf18e9f9712f6306c894f3ecc8d3501afe7d8dc7520227c3da93f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_17e702433d6a4684da7229f4d398de9c5e85f6e6c0307bb1d24c15063448260f = $this->env->getExtension("native_profiler");
        $__internal_17e702433d6a4684da7229f4d398de9c5e85f6e6c0307bb1d24c15063448260f->enter($__internal_17e702433d6a4684da7229f4d398de9c5e85f6e6c0307bb1d24c15063448260f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("placeholder" => "Nom de la compétence", "class" => "form-control")));
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("placeholder" => "Description", "class" => "form-control")));
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Créer\" class=\"btn btn-primary\"/>
    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("competence_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_17e702433d6a4684da7229f4d398de9c5e85f6e6c0307bb1d24c15063448260f->leave($__internal_17e702433d6a4684da7229f4d398de9c5e85f6e6c0307bb1d24c15063448260f_prof);

    }

    public function getTemplateName()
    {
        return "competence/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 14,  73 => 10,  68 => 8,  64 => 7,  60 => 6,  56 => 5,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block pageheader %}Ajouter une compétence{% endblock %}*/
/* {% block body %}*/
/* */
/*     {{ form_start(form) }}*/
/*     {{ form_widget(form.nom, {'attr': {'placeholder': 'Nom de la compétence', 'class' : 'form-control'}}) }}*/
/*     {{ form_widget(form.description, {'attr': {'placeholder': 'Description', 'class' : 'form-control'}}) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Créer" class="btn btn-primary"/>*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('competence_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
