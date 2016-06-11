<?php

/* utilisateur/show.html.twig */
class __TwigTemplate_d7a0f0c9d940653721f34f116830666d2db6660c8d5221b586f22aca44a9ca85 extends Twig_Template
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
        $__internal_e5f8c648987eeaa55991e5b98813434eb0069ef7b65cd153bf369a53e3f462f6 = $this->env->getExtension("native_profiler");
        $__internal_e5f8c648987eeaa55991e5b98813434eb0069ef7b65cd153bf369a53e3f462f6->enter($__internal_e5f8c648987eeaa55991e5b98813434eb0069ef7b65cd153bf369a53e3f462f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5f8c648987eeaa55991e5b98813434eb0069ef7b65cd153bf369a53e3f462f6->leave($__internal_e5f8c648987eeaa55991e5b98813434eb0069ef7b65cd153bf369a53e3f462f6_prof);

    }

    // line 2
    public function block_pageheader($context, array $blocks = array())
    {
        $__internal_b688369902aa55b0ecd385831ef80d49e9f162bfda425387c15ebceae84fb1c5 = $this->env->getExtension("native_profiler");
        $__internal_b688369902aa55b0ecd385831ef80d49e9f162bfda425387c15ebceae84fb1c5->enter($__internal_b688369902aa55b0ecd385831ef80d49e9f162bfda425387c15ebceae84fb1c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        echo "Utilisateur";
        
        $__internal_b688369902aa55b0ecd385831ef80d49e9f162bfda425387c15ebceae84fb1c5->leave($__internal_b688369902aa55b0ecd385831ef80d49e9f162bfda425387c15ebceae84fb1c5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b709aad10d0138bd74284a833752fb52c433a5de635532140a92bc6bcb97458 = $this->env->getExtension("native_profiler");
        $__internal_7b709aad10d0138bd74284a833752fb52c433a5de635532140a92bc6bcb97458->enter($__internal_7b709aad10d0138bd74284a833752fb52c433a5de635532140a92bc6bcb97458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <th>Codepostal</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "codePostal", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mail</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "mail", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tel</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "tel", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Photourl</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "photoUrl", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("utilisateur_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("utilisateur_edit", array("id" => $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 48
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_7b709aad10d0138bd74284a833752fb52c433a5de635532140a92bc6bcb97458->leave($__internal_7b709aad10d0138bd74284a833752fb52c433a5de635532140a92bc6bcb97458_prof);

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
        return array (  129 => 48,  124 => 46,  118 => 43,  112 => 40,  102 => 33,  95 => 29,  88 => 25,  81 => 21,  74 => 17,  67 => 13,  60 => 9,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
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
/*                 <th>Codepostal</th>*/
/*                 <td>{{ utilisateur.codePostal }}</td>*/
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
/*                 <th>Photourl</th>*/
/*                 <td>{{ utilisateur.photoUrl }}</td>*/
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
