<?php

/* utilisateur/index.html.twig */
class __TwigTemplate_322c9508d834b3ff0b3e8eb3abc6d242cdfb2b6a7cadb6d5874861ba823861d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/index.html.twig", 1);
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
        $__internal_a51e6be07d34b33d2f7d785725f05cfaf7add31984f8a39677763270ffbef544 = $this->env->getExtension("native_profiler");
        $__internal_a51e6be07d34b33d2f7d785725f05cfaf7add31984f8a39677763270ffbef544->enter($__internal_a51e6be07d34b33d2f7d785725f05cfaf7add31984f8a39677763270ffbef544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a51e6be07d34b33d2f7d785725f05cfaf7add31984f8a39677763270ffbef544->leave($__internal_a51e6be07d34b33d2f7d785725f05cfaf7add31984f8a39677763270ffbef544_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cca05f5739e119263181d0ed7ecb2e12ff0fbf6ad17d089cdbef9bdcaba59522 = $this->env->getExtension("native_profiler");
        $__internal_cca05f5739e119263181d0ed7ecb2e12ff0fbf6ad17d089cdbef9bdcaba59522->enter($__internal_cca05f5739e119263181d0ed7ecb2e12ff0fbf6ad17d089cdbef9bdcaba59522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Utilisateur list</h1>

    <table class=\"table table-striped table-bordered table-hover\">
        <thead>
            <tr>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Adresse</th>
                <th>Codepostal</th>
                <th>Mail</th>
                <th>Tel</th>
                <th>Photourl</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("utilisateur_show", array("id" => $this->getAttribute($context["utilisateur"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "prenom", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "codePostal", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "mail", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "tel", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "photoUrl", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("utilisateur_show", array("id" => $this->getAttribute($context["utilisateur"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("utilisateur_edit", array("id" => $this->getAttribute($context["utilisateur"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("utilisateur_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_cca05f5739e119263181d0ed7ecb2e12ff0fbf6ad17d089cdbef9bdcaba59522->leave($__internal_cca05f5739e119263181d0ed7ecb2e12ff0fbf6ad17d089cdbef9bdcaba59522_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 46,  116 => 41,  104 => 35,  98 => 32,  91 => 28,  87 => 27,  83 => 26,  79 => 25,  75 => 24,  71 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Utilisateur list</h1>*/
/* */
/*     <table class="table table-striped table-bordered table-hover">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Prenom</th>*/
/*                 <th>Nom</th>*/
/*                 <th>Adresse</th>*/
/*                 <th>Codepostal</th>*/
/*                 <th>Mail</th>*/
/*                 <th>Tel</th>*/
/*                 <th>Photourl</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for utilisateur in utilisateurs %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('utilisateur_show', { 'id': utilisateur.id }) }}">{{ utilisateur.prenom }}</a></td>*/
/*                 <td>{{ utilisateur.nom }}</td>*/
/*                 <td>{{ utilisateur.adresse }}</td>*/
/*                 <td>{{ utilisateur.codePostal }}</td>*/
/*                 <td>{{ utilisateur.mail }}</td>*/
/*                 <td>{{ utilisateur.tel }}</td>*/
/*                 <td>{{ utilisateur.photoUrl }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('utilisateur_show', { 'id': utilisateur.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('utilisateur_edit', { 'id': utilisateur.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('utilisateur_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
