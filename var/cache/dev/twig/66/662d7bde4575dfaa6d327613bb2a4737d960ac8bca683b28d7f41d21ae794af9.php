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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a537e5dc7e13884cd54d8f4b654fb0175ddaa41d10087ac775c6b73e9e6b32f = $this->env->getExtension("native_profiler");
        $__internal_5a537e5dc7e13884cd54d8f4b654fb0175ddaa41d10087ac775c6b73e9e6b32f->enter($__internal_5a537e5dc7e13884cd54d8f4b654fb0175ddaa41d10087ac775c6b73e9e6b32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a537e5dc7e13884cd54d8f4b654fb0175ddaa41d10087ac775c6b73e9e6b32f->leave($__internal_5a537e5dc7e13884cd54d8f4b654fb0175ddaa41d10087ac775c6b73e9e6b32f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc5c1fe268acc58df15fb84c6b91141e6fc96192b1cbbcb71a6be2903808268c = $this->env->getExtension("native_profiler");
        $__internal_dc5c1fe268acc58df15fb84c6b91141e6fc96192b1cbbcb71a6be2903808268c->enter($__internal_dc5c1fe268acc58df15fb84c6b91141e6fc96192b1cbbcb71a6be2903808268c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Utilisateur</h1>

    <table class=\"table table-striped table-bordered table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "adresse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Codepostal</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "codePostal", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mail</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "mail", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tel</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "tel", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Photourl</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "photoUrl", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("utilisateur_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("utilisateur_edit", array("id" => $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_dc5c1fe268acc58df15fb84c6b91141e6fc96192b1cbbcb71a6be2903808268c->leave($__internal_dc5c1fe268acc58df15fb84c6b91141e6fc96192b1cbbcb71a6be2903808268c_prof);

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
        return array (  124 => 53,  119 => 51,  113 => 48,  107 => 45,  97 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Utilisateur</h1>*/
/* */
/*     <table class="table table-striped table-bordered table-hover">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ utilisateur.id }}</td>*/
/*             </tr>*/
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
