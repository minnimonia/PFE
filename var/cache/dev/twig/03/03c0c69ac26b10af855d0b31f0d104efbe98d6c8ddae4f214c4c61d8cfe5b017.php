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
        $__internal_2e82cb54530e5dfd23d6933ac1639830bb0c7f238ffeb93e5be2250477ffb039 = $this->env->getExtension("native_profiler");
        $__internal_2e82cb54530e5dfd23d6933ac1639830bb0c7f238ffeb93e5be2250477ffb039->enter($__internal_2e82cb54530e5dfd23d6933ac1639830bb0c7f238ffeb93e5be2250477ffb039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e82cb54530e5dfd23d6933ac1639830bb0c7f238ffeb93e5be2250477ffb039->leave($__internal_2e82cb54530e5dfd23d6933ac1639830bb0c7f238ffeb93e5be2250477ffb039_prof);

    }

    // line 2
    public function block_pageheader($context, array $blocks = array())
    {
        $__internal_eee2fe71689361b1630eb434902b22d58ea6a38d85c4d4f596264c1f643f4803 = $this->env->getExtension("native_profiler");
        $__internal_eee2fe71689361b1630eb434902b22d58ea6a38d85c4d4f596264c1f643f4803->enter($__internal_eee2fe71689361b1630eb434902b22d58ea6a38d85c4d4f596264c1f643f4803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        echo "Utilisateur";
        
        $__internal_eee2fe71689361b1630eb434902b22d58ea6a38d85c4d4f596264c1f643f4803->leave($__internal_eee2fe71689361b1630eb434902b22d58ea6a38d85c4d4f596264c1f643f4803_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8a4e8bfc7ec507e1bf31ddccbe01692d76d18a6c2ba4e4cd23fa99eaff95a67 = $this->env->getExtension("native_profiler");
        $__internal_a8a4e8bfc7ec507e1bf31ddccbe01692d76d18a6c2ba4e4cd23fa99eaff95a67->enter($__internal_a8a4e8bfc7ec507e1bf31ddccbe01692d76d18a6c2ba4e4cd23fa99eaff95a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a8a4e8bfc7ec507e1bf31ddccbe01692d76d18a6c2ba4e4cd23fa99eaff95a67->leave($__internal_a8a4e8bfc7ec507e1bf31ddccbe01692d76d18a6c2ba4e4cd23fa99eaff95a67_prof);

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
