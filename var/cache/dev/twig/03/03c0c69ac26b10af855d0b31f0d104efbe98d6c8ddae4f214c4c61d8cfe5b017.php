<?php

/* utilisateur/show.html.twig */
class __TwigTemplate_f37fc46f8fd220a3e4f3ee38c270755b60c404965e680c3e2762d7675ac2694f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/show.html.twig", 1);
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
        $__internal_1ac04425c86e618249fd3677746c1f0e39e1a4b4f96ed8906cb478f98e4c9322 = $this->env->getExtension("native_profiler");
        $__internal_1ac04425c86e618249fd3677746c1f0e39e1a4b4f96ed8906cb478f98e4c9322->enter($__internal_1ac04425c86e618249fd3677746c1f0e39e1a4b4f96ed8906cb478f98e4c9322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ac04425c86e618249fd3677746c1f0e39e1a4b4f96ed8906cb478f98e4c9322->leave($__internal_1ac04425c86e618249fd3677746c1f0e39e1a4b4f96ed8906cb478f98e4c9322_prof);

    }

    // line 2
    public function block_pageheader($context, array $blocks = array())
    {
        $__internal_e43138f8e088627ec36f95617f83b6ab560b1a8bdbe35f3969bf786fb0b94527 = $this->env->getExtension("native_profiler");
        $__internal_e43138f8e088627ec36f95617f83b6ab560b1a8bdbe35f3969bf786fb0b94527->enter($__internal_e43138f8e088627ec36f95617f83b6ab560b1a8bdbe35f3969bf786fb0b94527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        echo "Utilisateur";
        
        $__internal_e43138f8e088627ec36f95617f83b6ab560b1a8bdbe35f3969bf786fb0b94527->leave($__internal_e43138f8e088627ec36f95617f83b6ab560b1a8bdbe35f3969bf786fb0b94527_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_de234d65afbc8a7e3192fbd5aa6266d410b189edb249d9e30e275175eb5782f4 = $this->env->getExtension("native_profiler");
        $__internal_de234d65afbc8a7e3192fbd5aa6266d410b189edb249d9e30e275175eb5782f4->enter($__internal_de234d65afbc8a7e3192fbd5aa6266d410b189edb249d9e30e275175eb5782f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <table class=\"table table-striped table-bordered table-hover\">
        <tbody>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "adresse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mail</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "mail", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tel</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "tel", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Photo</th>
                <td>
                    <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "photourl", array())), "html", null, true);
        echo "\">
                </td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("utilisateur_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("utilisateur_edit", array("id" => $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_de234d65afbc8a7e3192fbd5aa6266d410b189edb249d9e30e275175eb5782f4->leave($__internal_de234d65afbc8a7e3192fbd5aa6266d410b189edb249d9e30e275175eb5782f4_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 46,  119 => 44,  113 => 41,  107 => 38,  96 => 30,  88 => 25,  81 => 21,  74 => 17,  67 => 13,  60 => 9,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block pageheader %}Utilisateur{% endblock %}*/
/* {% block body %}*/
/* */
/*     <table class="table table-striped table-bordered table-hover">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Prenom</th>*/
/*                 <td>{{ utilisateur.prenom }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nom</th>*/
/*                 <td>{{ utilisateur.nom }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Adresse</th>*/
/*                 <td>{{ utilisateur.adresse }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Mail</th>*/
/*                 <td>{{ utilisateur.mail }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Tel</th>*/
/*                 <td>{{ utilisateur.tel }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Photo</th>*/
/*                 <td>*/
/*                     <img src="{{ asset(utilisateur.photourl) }}">*/
/*                 </td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('utilisateur_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('utilisateur_edit', { 'id': utilisateur.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
