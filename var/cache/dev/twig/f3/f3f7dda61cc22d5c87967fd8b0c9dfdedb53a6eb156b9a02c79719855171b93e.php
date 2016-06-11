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
        $__internal_9141622eb40e2934ad00a197fc1bb812ddfda1105de923a9fce73723a0f1bf13 = $this->env->getExtension("native_profiler");
        $__internal_9141622eb40e2934ad00a197fc1bb812ddfda1105de923a9fce73723a0f1bf13->enter($__internal_9141622eb40e2934ad00a197fc1bb812ddfda1105de923a9fce73723a0f1bf13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9141622eb40e2934ad00a197fc1bb812ddfda1105de923a9fce73723a0f1bf13->leave($__internal_9141622eb40e2934ad00a197fc1bb812ddfda1105de923a9fce73723a0f1bf13_prof);

    }

    // line 2
    public function block_pageheader($context, array $blocks = array())
    {
        $__internal_8be7e134306cc616863dda8a18a8a0e413c84331c529866c2b1dd74a0299c79c = $this->env->getExtension("native_profiler");
        $__internal_8be7e134306cc616863dda8a18a8a0e413c84331c529866c2b1dd74a0299c79c->enter($__internal_8be7e134306cc616863dda8a18a8a0e413c84331c529866c2b1dd74a0299c79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        echo "Liste des utilisateurs";
        
        $__internal_8be7e134306cc616863dda8a18a8a0e413c84331c529866c2b1dd74a0299c79c->leave($__internal_8be7e134306cc616863dda8a18a8a0e413c84331c529866c2b1dd74a0299c79c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_41bdf2d117a603d15f58628cd7497be2184c746310d3bc8ef891ec560a2692ad = $this->env->getExtension("native_profiler");
        $__internal_41bdf2d117a603d15f58628cd7497be2184c746310d3bc8ef891ec560a2692ad->enter($__internal_41bdf2d117a603d15f58628cd7497be2184c746310d3bc8ef891ec560a2692ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
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
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("utilisateur_show", array("id" => $this->getAttribute($context["utilisateur"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "prenom", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "codePostal", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "mail", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "tel", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "photoUrl", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("utilisateur_show", array("id" => $this->getAttribute($context["utilisateur"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 34
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
        // line 40
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("utilisateur_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_41bdf2d117a603d15f58628cd7497be2184c746310d3bc8ef891ec560a2692ad->leave($__internal_41bdf2d117a603d15f58628cd7497be2184c746310d3bc8ef891ec560a2692ad_prof);

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
        return array (  135 => 45,  128 => 40,  116 => 34,  110 => 31,  103 => 27,  99 => 26,  95 => 25,  91 => 24,  87 => 23,  83 => 22,  77 => 21,  74 => 20,  70 => 19,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block pageheader %}Liste des utilisateurs{% endblock %}*/
/* {% block body %}*/
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
