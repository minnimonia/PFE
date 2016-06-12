<?php

/* utilisateur/index.html.twig */
class __TwigTemplate_14143aa7ba812d9986c4715d7d1489b85ba3a5fab3b5fb45f30ff610483c9135 extends Twig_Template
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
        $__internal_048659885370a832c6dd54b0cf3ce6fe571018de3b74f90796c434280e335760 = $this->env->getExtension("native_profiler");
        $__internal_048659885370a832c6dd54b0cf3ce6fe571018de3b74f90796c434280e335760->enter($__internal_048659885370a832c6dd54b0cf3ce6fe571018de3b74f90796c434280e335760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_048659885370a832c6dd54b0cf3ce6fe571018de3b74f90796c434280e335760->leave($__internal_048659885370a832c6dd54b0cf3ce6fe571018de3b74f90796c434280e335760_prof);

    }

    // line 2
    public function block_pageheader($context, array $blocks = array())
    {
        $__internal_b6d2cb7751e1860e39e60a3e9871aacce475bc1f3d8d9dd8336f642c4b90c2f8 = $this->env->getExtension("native_profiler");
        $__internal_b6d2cb7751e1860e39e60a3e9871aacce475bc1f3d8d9dd8336f642c4b90c2f8->enter($__internal_b6d2cb7751e1860e39e60a3e9871aacce475bc1f3d8d9dd8336f642c4b90c2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        echo "Liste des utilisateurs";
        
        $__internal_b6d2cb7751e1860e39e60a3e9871aacce475bc1f3d8d9dd8336f642c4b90c2f8->leave($__internal_b6d2cb7751e1860e39e60a3e9871aacce475bc1f3d8d9dd8336f642c4b90c2f8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fe2d4dddea31b363b0a5c55354613db73ba9be3df334979ef58d6b5db0acdb2 = $this->env->getExtension("native_profiler");
        $__internal_6fe2d4dddea31b363b0a5c55354613db73ba9be3df334979ef58d6b5db0acdb2->enter($__internal_6fe2d4dddea31b363b0a5c55354613db73ba9be3df334979ef58d6b5db0acdb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <table class=\"table table-striped table-bordered table-hover\">
        <thead>
            <tr>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Adresse</th>
                <th>Mail</th>
                <th>Tel</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("utilisateur_show", array("id" => $this->getAttribute($context["utilisateur"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "prenom", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "mail", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "tel", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("utilisateur_show", array("id" => $this->getAttribute($context["utilisateur"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 30
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
        // line 36
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("utilisateur_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_6fe2d4dddea31b363b0a5c55354613db73ba9be3df334979ef58d6b5db0acdb2->leave($__internal_6fe2d4dddea31b363b0a5c55354613db73ba9be3df334979ef58d6b5db0acdb2_prof);

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
        return array (  125 => 41,  118 => 36,  106 => 30,  100 => 27,  93 => 23,  89 => 22,  85 => 21,  81 => 20,  75 => 19,  72 => 18,  68 => 17,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
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
/*                 <th>Mail</th>*/
/*                 <th>Tel</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for utilisateur in utilisateurs %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('utilisateur_show', { 'id': utilisateur.id }) }}">{{ utilisateur.prenom }}</a></td>*/
/*                 <td>{{ utilisateur.nom }}</td>*/
/*                 <td>{{ utilisateur.adresse }}</td>*/
/*                 <td>{{ utilisateur.mail }}</td>*/
/*                 <td>{{ utilisateur.tel }}</td>*/
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
