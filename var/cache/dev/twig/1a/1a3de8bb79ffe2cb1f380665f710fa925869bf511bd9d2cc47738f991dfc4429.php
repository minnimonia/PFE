<?php

/* utilisateur/recherche.html.twig */
class __TwigTemplate_7d706e643a9518461fee893793d5e4082457f2e73b593ea10c21d3a4e655261a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/recherche.html.twig", 1);
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
        $__internal_25f2a62fb7119c44803c8ea8894f4e72ce1b524eaa70cc94400b01b3a6a576a4 = $this->env->getExtension("native_profiler");
        $__internal_25f2a62fb7119c44803c8ea8894f4e72ce1b524eaa70cc94400b01b3a6a576a4->enter($__internal_25f2a62fb7119c44803c8ea8894f4e72ce1b524eaa70cc94400b01b3a6a576a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/recherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25f2a62fb7119c44803c8ea8894f4e72ce1b524eaa70cc94400b01b3a6a576a4->leave($__internal_25f2a62fb7119c44803c8ea8894f4e72ce1b524eaa70cc94400b01b3a6a576a4_prof);

    }

    // line 2
    public function block_pageheader($context, array $blocks = array())
    {
        $__internal_fccf08b99e5f5578b5e96dc99063fd5ef2dc65af53dc84373509168777d591e6 = $this->env->getExtension("native_profiler");
        $__internal_fccf08b99e5f5578b5e96dc99063fd5ef2dc65af53dc84373509168777d591e6->enter($__internal_fccf08b99e5f5578b5e96dc99063fd5ef2dc65af53dc84373509168777d591e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        echo "Recherche d'artisans";
        
        $__internal_fccf08b99e5f5578b5e96dc99063fd5ef2dc65af53dc84373509168777d591e6->leave($__internal_fccf08b99e5f5578b5e96dc99063fd5ef2dc65af53dc84373509168777d591e6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_38f31da7fad21bde185249568319787ebec56714c9768e51cc775e4328b189ea = $this->env->getExtension("native_profiler");
        $__internal_38f31da7fad21bde185249568319787ebec56714c9768e51cc775e4328b189ea->enter($__internal_38f31da7fad21bde185249568319787ebec56714c9768e51cc775e4328b189ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            ";
        // line 38
        if (array_key_exists("tableau", $context)) {
            // line 39
            echo "    <table class=\"table table-striped table-bordered table-hover\">
        <tbody>
        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tableau"]) ? $context["tableau"] : $this->getContext($context, "tableau")));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 42
                echo "            <tr>
                <th>Prenom</th>
                <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["tab"], "prenom", array()), "html", null, true);
                echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["tab"], "nom", array()), "html", null, true);
                echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["tab"], "adresse", array()), "html", null, true);
                echo "</td>
            </tr>
            <tr>
                <th>Codepostal</th>
                <td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["tab"], "codePostal", array()), "html", null, true);
                echo "</td>
            </tr>
            <tr>
                <th>Mail</th>
                <td>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["tab"], "mail", array()), "html", null, true);
                echo "</td>
            </tr>
            <tr>
                <th>Tel</th>
                <td>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["tab"], "tel", array()), "html", null, true);
                echo "</td>
            </tr>
            <tr>
                <th>Photourl</th>
                <td>";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["tab"], "photoUrl", array()), "html", null, true);
                echo "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "        </tbody>
    </table>
        ";
        }
        // line 74
        echo "
";
        
        $__internal_38f31da7fad21bde185249568319787ebec56714c9768e51cc775e4328b189ea->leave($__internal_38f31da7fad21bde185249568319787ebec56714c9768e51cc775e4328b189ea_prof);

    }

    // line 76
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_3f2835f9ad25927ae01126f9c13b0491e355065082c253c7b7deff23bbc9003d = $this->env->getExtension("native_profiler");
        $__internal_3f2835f9ad25927ae01126f9c13b0491e355065082c253c7b7deff23bbc9003d->enter($__internal_3f2835f9ad25927ae01126f9c13b0491e355065082c253c7b7deff23bbc9003d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 77
        echo "    <script>
        \$(document).ready(function() {
        \$('#demo').multiselect();\$('#demo2').multiselect();
        });
</script>
";
        
        $__internal_3f2835f9ad25927ae01126f9c13b0491e355065082c253c7b7deff23bbc9003d->leave($__internal_3f2835f9ad25927ae01126f9c13b0491e355065082c253c7b7deff23bbc9003d_prof);

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
        return array (  202 => 77,  196 => 76,  188 => 74,  183 => 71,  174 => 68,  167 => 64,  160 => 60,  153 => 56,  146 => 52,  139 => 48,  132 => 44,  128 => 42,  124 => 41,  120 => 39,  118 => 38,  106 => 28,  95 => 26,  91 => 25,  82 => 18,  71 => 16,  67 => 15,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
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
/*             {% if tableau is defined %}*/
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
/*         {% endif %}*/
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
