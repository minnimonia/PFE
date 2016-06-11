<?php

/* competence/index.html.twig */
class __TwigTemplate_176894e7c629b5eb9c9e740105387428dba8fcaadff63652178ed460e225a8c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "competence/index.html.twig", 1);
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
        $__internal_bb36179ef3921e1fb4f5909c40284c882cb2e00b10bc4c7db9301e95708a2846 = $this->env->getExtension("native_profiler");
        $__internal_bb36179ef3921e1fb4f5909c40284c882cb2e00b10bc4c7db9301e95708a2846->enter($__internal_bb36179ef3921e1fb4f5909c40284c882cb2e00b10bc4c7db9301e95708a2846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "competence/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb36179ef3921e1fb4f5909c40284c882cb2e00b10bc4c7db9301e95708a2846->leave($__internal_bb36179ef3921e1fb4f5909c40284c882cb2e00b10bc4c7db9301e95708a2846_prof);

    }

    // line 2
    public function block_pageheader($context, array $blocks = array())
    {
        $__internal_b1db716bb56f437703e0779c1d09d6124d6621390f7bf5c3b33735cae8b1d9ed = $this->env->getExtension("native_profiler");
        $__internal_b1db716bb56f437703e0779c1d09d6124d6621390f7bf5c3b33735cae8b1d9ed->enter($__internal_b1db716bb56f437703e0779c1d09d6124d6621390f7bf5c3b33735cae8b1d9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        echo "Liste des compétences";
        
        $__internal_b1db716bb56f437703e0779c1d09d6124d6621390f7bf5c3b33735cae8b1d9ed->leave($__internal_b1db716bb56f437703e0779c1d09d6124d6621390f7bf5c3b33735cae8b1d9ed_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e415662f62f92c7bc9ced7a4bcb12aa0ea0f8d4a8401a6e961bba856b7ed2ea = $this->env->getExtension("native_profiler");
        $__internal_2e415662f62f92c7bc9ced7a4bcb12aa0ea0f8d4a8401a6e961bba856b7ed2ea->enter($__internal_2e415662f62f92c7bc9ced7a4bcb12aa0ea0f8d4a8401a6e961bba856b7ed2ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <table class=\"table table-striped table-bordered table-hover\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competences"]) ? $context["competences"] : $this->getContext($context, "competences")));
        foreach ($context['_seq'] as $context["_key"] => $context["competence"]) {
            // line 15
            echo "            <tr>
                <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("competence_show", array("id" => $this->getAttribute($context["competence"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["competence"], "nom", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["competence"], "description", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("competence_show", array("id" => $this->getAttribute($context["competence"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("competence_edit", array("id" => $this->getAttribute($context["competence"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("competence_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_2e415662f62f92c7bc9ced7a4bcb12aa0ea0f8d4a8401a6e961bba856b7ed2ea->leave($__internal_2e415662f62f92c7bc9ced7a4bcb12aa0ea0f8d4a8401a6e961bba856b7ed2ea_prof);

    }

    public function getTemplateName()
    {
        return "competence/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 35,  103 => 30,  91 => 24,  85 => 21,  78 => 17,  72 => 16,  69 => 15,  65 => 14,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block pageheader %}Liste des compétences{% endblock %}*/
/* {% block body %}*/
/* */
/*     <table class="table table-striped table-bordered table-hover">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Nom</th>*/
/*                 <th>Description</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for competence in competences %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('competence_show', { 'id': competence.id }) }}">{{ competence.nom }}</a></td>*/
/*                 <td>{{ competence.description }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('competence_show', { 'id': competence.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('competence_edit', { 'id': competence.id }) }}">edit</a>*/
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
/*             <a href="{{ path('competence_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
