<?php

/* competence/show.html.twig */
class __TwigTemplate_c1f955d3ca7143493d17f6713f095a3b42c7e5a69761a9564eb2cc80f1dfcec0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "competence/show.html.twig", 1);
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
        $__internal_66c9edb7e47c4238cbc87d231eba76111041568ac6eab8e59dfa984439c5d8ed = $this->env->getExtension("native_profiler");
        $__internal_66c9edb7e47c4238cbc87d231eba76111041568ac6eab8e59dfa984439c5d8ed->enter($__internal_66c9edb7e47c4238cbc87d231eba76111041568ac6eab8e59dfa984439c5d8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "competence/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66c9edb7e47c4238cbc87d231eba76111041568ac6eab8e59dfa984439c5d8ed->leave($__internal_66c9edb7e47c4238cbc87d231eba76111041568ac6eab8e59dfa984439c5d8ed_prof);

    }

    // line 2
    public function block_pageheader($context, array $blocks = array())
    {
        $__internal_31d0e7ed9abe43613eb61f7c1b4f8ee378bbfb9bdd53771dbe4dee1315df1910 = $this->env->getExtension("native_profiler");
        $__internal_31d0e7ed9abe43613eb61f7c1b4f8ee378bbfb9bdd53771dbe4dee1315df1910->enter($__internal_31d0e7ed9abe43613eb61f7c1b4f8ee378bbfb9bdd53771dbe4dee1315df1910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        echo "Compétence";
        
        $__internal_31d0e7ed9abe43613eb61f7c1b4f8ee378bbfb9bdd53771dbe4dee1315df1910->leave($__internal_31d0e7ed9abe43613eb61f7c1b4f8ee378bbfb9bdd53771dbe4dee1315df1910_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_75a40e2bd21a963a74878f9d9ecb184b451fbd671bd27e5bf6f957d6c1c89126 = $this->env->getExtension("native_profiler");
        $__internal_75a40e2bd21a963a74878f9d9ecb184b451fbd671bd27e5bf6f957d6c1c89126->enter($__internal_75a40e2bd21a963a74878f9d9ecb184b451fbd671bd27e5bf6f957d6c1c89126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <table class=\"table table-striped table-bordered table-hover\">
        <tbody>
            <tr>
                <th>Nom</th>
                <td>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competence"]) ? $context["competence"] : $this->getContext($context, "competence")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competence"]) ? $context["competence"] : $this->getContext($context, "competence")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("competence_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("competence_edit", array("id" => $this->getAttribute((isset($context["competence"]) ? $context["competence"] : $this->getContext($context, "competence")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_75a40e2bd21a963a74878f9d9ecb184b451fbd671bd27e5bf6f957d6c1c89126->leave($__internal_75a40e2bd21a963a74878f9d9ecb184b451fbd671bd27e5bf6f957d6c1c89126_prof);

    }

    public function getTemplateName()
    {
        return "competence/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 28,  89 => 26,  83 => 23,  77 => 20,  67 => 13,  60 => 9,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block pageheader %}Compétence{% endblock %}*/
/* {% block body %}*/
/* */
/*     <table class="table table-striped table-bordered table-hover">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Nom</th>*/
/*                 <td>{{ competence.nom }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Description</th>*/
/*                 <td>{{ competence.description }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('competence_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('competence_edit', { 'id': competence.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
