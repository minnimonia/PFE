<?php

/* utilisateur/recherche.html.twig */
class __TwigTemplate_2c3f4eaa01f3bcac614298726e7147760a79797d5a6a6d908760cf8103212161 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/recherche.html.twig", 1);
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
        $__internal_f42a2eb1610a276e0b26e7b5b10cc5b486a993b3c797e85fd9bf6c5473709382 = $this->env->getExtension("native_profiler");
        $__internal_f42a2eb1610a276e0b26e7b5b10cc5b486a993b3c797e85fd9bf6c5473709382->enter($__internal_f42a2eb1610a276e0b26e7b5b10cc5b486a993b3c797e85fd9bf6c5473709382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/recherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f42a2eb1610a276e0b26e7b5b10cc5b486a993b3c797e85fd9bf6c5473709382->leave($__internal_f42a2eb1610a276e0b26e7b5b10cc5b486a993b3c797e85fd9bf6c5473709382_prof);

    }

    // line 2
    public function block_pageheader($context, array $blocks = array())
    {
        $__internal_ab90356f37dc4fb5442a506b8429528e69ba7632a0bff7060489d007799fac97 = $this->env->getExtension("native_profiler");
        $__internal_ab90356f37dc4fb5442a506b8429528e69ba7632a0bff7060489d007799fac97->enter($__internal_ab90356f37dc4fb5442a506b8429528e69ba7632a0bff7060489d007799fac97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        echo "Recherche d'artisans";
        
        $__internal_ab90356f37dc4fb5442a506b8429528e69ba7632a0bff7060489d007799fac97->leave($__internal_ab90356f37dc4fb5442a506b8429528e69ba7632a0bff7060489d007799fac97_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4abeab42c877a002808e3b7bb9fc0f87c7248e3fd11de39d098722e368a0014 = $this->env->getExtension("native_profiler");
        $__internal_b4abeab42c877a002808e3b7bb9fc0f87c7248e3fd11de39d098722e368a0014->enter($__internal_b4abeab42c877a002808e3b7bb9fc0f87c7248e3fd11de39d098722e368a0014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h3>Formulaire de recherche d'artisan</h3>

    <form method=\"post\" >

        <table class=\"table table-striped table-bordered table-hover\">
            <tbody>
                <tr>
                    <th>Choisissez une compétence dans la liste suivante :</th>
                </tr>
            <td>
                <select class=\"form-control\" multiple=\"multiple\">
                    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competences"]) ? $context["competences"] : $this->getContext($context, "competences")));
        foreach ($context['_seq'] as $context["_key"] => $context["comp"]) {
            // line 16
            echo "                        <option> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comp"], "nom", array()), "html", null, true);
            echo " </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                </select>
            </td>
            <tr>
                <th>Entrez votre code postal :</th>
            </tr>
            <td>
                <input type=\"tel\" placeholder=\"75000...\" />
            </td>
            </tbody>
        </table>

        <ul>
            <input type=\"submit\" value=\"Recherche\" class=\"btn btn-primary\">
        </ul>

    </form>

";
        
        $__internal_b4abeab42c877a002808e3b7bb9fc0f87c7248e3fd11de39d098722e368a0014->leave($__internal_b4abeab42c877a002808e3b7bb9fc0f87c7248e3fd11de39d098722e368a0014_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 18,  70 => 16,  66 => 15,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block pageheader %}Recherche d'artisans{% endblock %}*/
/* {% block body %}*/
/*     <h3>Formulaire de recherche d'artisan</h3>*/
/* */
/*     <form method="post" >*/
/* */
/*         <table class="table table-striped table-bordered table-hover">*/
/*             <tbody>*/
/*                 <tr>*/
/*                     <th>Choisissez une compétence dans la liste suivante :</th>*/
/*                 </tr>*/
/*             <td>*/
/*                 <select class="form-control" multiple="multiple">*/
/*                     {% for comp in competences %}*/
/*                         <option> {{comp.nom}} </option>*/
/*                     {% endfor %}*/
/*                 </select>*/
/*             </td>*/
/*             <tr>*/
/*                 <th>Entrez votre code postal :</th>*/
/*             </tr>*/
/*             <td>*/
/*                 <input type="tel" placeholder="75000..." />*/
/*             </td>*/
/*             </tbody>*/
/*         </table>*/
/* */
/*         <ul>*/
/*             <input type="submit" value="Recherche" class="btn btn-primary">*/
/*         </ul>*/
/* */
/*     </form>*/
/* */
/* {% endblock %}*/
/* */
