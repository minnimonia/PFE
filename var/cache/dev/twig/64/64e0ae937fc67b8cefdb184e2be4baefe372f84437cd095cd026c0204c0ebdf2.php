<?php

/* utilisateur/edit.html.twig */
class __TwigTemplate_125ad635b9cf6b94c8e35599b27536531e39a5433fb1ead91154ccd7bacc3518 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/edit.html.twig", 1);
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
        $__internal_0364365b563091eb2484e0e8dc9d535d53b9888200b3647c201f272f9a8f4393 = $this->env->getExtension("native_profiler");
        $__internal_0364365b563091eb2484e0e8dc9d535d53b9888200b3647c201f272f9a8f4393->enter($__internal_0364365b563091eb2484e0e8dc9d535d53b9888200b3647c201f272f9a8f4393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0364365b563091eb2484e0e8dc9d535d53b9888200b3647c201f272f9a8f4393->leave($__internal_0364365b563091eb2484e0e8dc9d535d53b9888200b3647c201f272f9a8f4393_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_22f6e7f1194992bea0a5cdcbab3dd21032511afb9c8ac355f4ee8ca17af7f404 = $this->env->getExtension("native_profiler");
        $__internal_22f6e7f1194992bea0a5cdcbab3dd21032511afb9c8ac355f4ee8ca17af7f404->enter($__internal_22f6e7f1194992bea0a5cdcbab3dd21032511afb9c8ac355f4ee8ca17af7f404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Utilisateur edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("utilisateur_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_22f6e7f1194992bea0a5cdcbab3dd21032511afb9c8ac355f4ee8ca17af7f404->leave($__internal_22f6e7f1194992bea0a5cdcbab3dd21032511afb9c8ac355f4ee8ca17af7f404_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Utilisateur edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('utilisateur_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
