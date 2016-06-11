<?php

/* Utilisateur/recherche.html.twig */
class __TwigTemplate_2c3f4eaa01f3bcac614298726e7147760a79797d5a6a6d908760cf8103212161 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Utilisateur/recherche.html.twig", 1);
        $this->blocks = array(
            'pageheader' => array($this, 'block_pageheader'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30b80d5f6847c8a664f7e572a508a492d49b6d2c9727a9d7994974ec6ef5261a = $this->env->getExtension("native_profiler");
        $__internal_30b80d5f6847c8a664f7e572a508a492d49b6d2c9727a9d7994974ec6ef5261a->enter($__internal_30b80d5f6847c8a664f7e572a508a492d49b6d2c9727a9d7994974ec6ef5261a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Utilisateur/recherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30b80d5f6847c8a664f7e572a508a492d49b6d2c9727a9d7994974ec6ef5261a->leave($__internal_30b80d5f6847c8a664f7e572a508a492d49b6d2c9727a9d7994974ec6ef5261a_prof);

    }

    // line 2
    public function block_pageheader($context, array $blocks = array())
    {
        $__internal_f813bd56b5fa3a102adcf0453166cee3e715b48ee55f03a26b8b5c4c5e325abc = $this->env->getExtension("native_profiler");
        $__internal_f813bd56b5fa3a102adcf0453166cee3e715b48ee55f03a26b8b5c4c5e325abc->enter($__internal_f813bd56b5fa3a102adcf0453166cee3e715b48ee55f03a26b8b5c4c5e325abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        echo "Recherche d'artisans";
        
        $__internal_f813bd56b5fa3a102adcf0453166cee3e715b48ee55f03a26b8b5c4c5e325abc->leave($__internal_f813bd56b5fa3a102adcf0453166cee3e715b48ee55f03a26b8b5c4c5e325abc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4acf36d9cba2e8cebca0f81d47ea26274373e563c5f99a0c2688049b13942c9 = $this->env->getExtension("native_profiler");
        $__internal_b4acf36d9cba2e8cebca0f81d47ea26274373e563c5f99a0c2688049b13942c9->enter($__internal_b4acf36d9cba2e8cebca0f81d47ea26274373e563c5f99a0c2688049b13942c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <form method=\"post\">
        

            <table class=\"table table-striped table-bordered table-hover\">
        <tbody>
            <tr>
                <th>Choisissez une compétence dans la liste suivante :</th>
            </tr>
            <td>
            <select class=\"form-control\" id=\"demo\" multiple=\"multiple\" name=\"comp[]\">
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competences"]) ? $context["competences"] : $this->getContext($context, "competences")));
        foreach ($context['_seq'] as $context["_key"] => $context["comp"]) {
            // line 16
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comp"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comp"], "nom", array()), "html", null, true);
            echo " </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            </select>
            </td>
            <tr>
                <th>Entrez votre code postal :</th>
            </tr>
            <td>
                <select class=\"form-control\" id=\"demo2\" multiple=\"multiple\" name=\"code[]\">
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["codes"]) ? $context["codes"] : $this->getContext($context, "codes")));
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 26
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["code"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["code"], "departement", array()), "html", null, true);
            echo " </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </select>
            </td>
        </tbody>
    </table>

    <ul>
            <input type=\"submit\" value=\"Recherche\" class=\"btn btn-primary\">
    </ul>

    </form>
    <table class=\"table table-striped table-bordered table-hover\">
        <tbody>
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tableau"]) ? $context["tableau"] : $this->getContext($context, "tableau")));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 41
            echo "            <tr>
                <th>Prenom</th>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["tab"], "prenom", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["tab"], "nom", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["tab"], "adresse", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Codepostal</th>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["tab"], "codePostal", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Mail</th>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["tab"], "mail", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Tel</th>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["tab"], "tel", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Photourl</th>
                <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["tab"], "photoUrl", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "        </tbody>
    </table>

";
        
        $__internal_b4acf36d9cba2e8cebca0f81d47ea26274373e563c5f99a0c2688049b13942c9->leave($__internal_b4acf36d9cba2e8cebca0f81d47ea26274373e563c5f99a0c2688049b13942c9_prof);

    }

    // line 74
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_0ee222c1de5dcc134d72b604f0c488622e53b3e82e20ba58e34ade5087cd7c82 = $this->env->getExtension("native_profiler");
        $__internal_0ee222c1de5dcc134d72b604f0c488622e53b3e82e20ba58e34ade5087cd7c82->enter($__internal_0ee222c1de5dcc134d72b604f0c488622e53b3e82e20ba58e34ade5087cd7c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 75
        echo "    <script>
        \$(document).ready(function() {
        \$('#demo').multiselect();\$('#demo2').multiselect();
        });
</script>
";
        
        $__internal_0ee222c1de5dcc134d72b604f0c488622e53b3e82e20ba58e34ade5087cd7c82->leave($__internal_0ee222c1de5dcc134d72b604f0c488622e53b3e82e20ba58e34ade5087cd7c82_prof);

    }

    public function getTemplateName()
    {
        return "Utilisateur/recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 75,  189 => 74,  179 => 70,  170 => 67,  163 => 63,  156 => 59,  149 => 55,  142 => 51,  135 => 47,  128 => 43,  124 => 41,  120 => 40,  106 => 28,  95 => 26,  91 => 25,  82 => 18,  71 => 16,  67 => 15,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block pageheader %}Recherche d'artisans{% endblock %}*/
/* {% block body %}*/
/* */
/*     <form method="post">*/
/*         */
/* */
/*             <table class="table table-striped table-bordered table-hover">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Choisissez une compétence dans la liste suivante :</th>*/
/*             </tr>*/
/*             <td>*/
/*             <select class="form-control" id="demo" multiple="multiple" name="comp[]">*/
/*                 {% for comp in competences %}*/
/*                     <option value="{{comp.id}}"> {{comp.nom}} </option>*/
/*                 {% endfor %}*/
/*             </select>*/
/*             </td>*/
/*             <tr>*/
/*                 <th>Entrez votre code postal :</th>*/
/*             </tr>*/
/*             <td>*/
/*                 <select class="form-control" id="demo2" multiple="multiple" name="code[]">*/
/*                 {% for code in codes %}*/
/*                     <option value="{{code.id}}"> {{code.departement}} </option>*/
/*                 {% endfor %}*/
/*             </select>*/
/*             </td>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*             <input type="submit" value="Recherche" class="btn btn-primary">*/
/*     </ul>*/
/* */
/*     </form>*/
/*     <table class="table table-striped table-bordered table-hover">*/
/*         <tbody>*/
/*         {% for tab in tableau %}*/
/*             <tr>*/
/*                 <th>Prenom</th>*/
/*                 <td>{{ tab.prenom }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nom</th>*/
/*                 <td>{{ tab.nom }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Adresse</th>*/
/*                 <td>{{ tab.adresse }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Codepostal</th>*/
/*                 <td>{{ tab.codePostal }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Mail</th>*/
/*                 <td>{{ tab.mail }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Tel</th>*/
/*                 <td>{{ tab.tel }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Photourl</th>*/
/*                 <td>{{ tab.photoUrl }}</td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/* {% endblock %}*/
/* {% block javascript %}*/
/*     <script>*/
/*         $(document).ready(function() {*/
/*         $('#demo').multiselect();$('#demo2').multiselect();*/
/*         });*/
/* </script>*/
/* {% endblock %}*/
/* */
