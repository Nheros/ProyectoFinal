<?php

/* :grupos:lista_mats.html.twig */
class __TwigTemplate_3df18588fa25a96f1268e86fe148ca3a7d57469eb77fe7e0755bebcf0f2ff936 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":grupos:lista_mats.html.twig", 1);
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
        $__internal_bb39f3b1b83b32ed699ad829264e228edddf695b7fbcc58f80f0de665333b070 = $this->env->getExtension("native_profiler");
        $__internal_bb39f3b1b83b32ed699ad829264e228edddf695b7fbcc58f80f0de665333b070->enter($__internal_bb39f3b1b83b32ed699ad829264e228edddf695b7fbcc58f80f0de665333b070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":grupos:lista_mats.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb39f3b1b83b32ed699ad829264e228edddf695b7fbcc58f80f0de665333b070->leave($__internal_bb39f3b1b83b32ed699ad829264e228edddf695b7fbcc58f80f0de665333b070_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d15fe8c1ae2ece4e0f625f67d46f328c7aa1900101c088c642706a0363fe4045 = $this->env->getExtension("native_profiler");
        $__internal_d15fe8c1ae2ece4e0f625f67d46f328c7aa1900101c088c642706a0363fe4045->enter($__internal_d15fe8c1ae2ece4e0f625f67d46f328c7aa1900101c088c642706a0363fe4045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <table class=\"table\">
        <thead>
            <tr>
                <th>Nuip</th>
                <th>Nombre</th>
                <th>Grupo</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lista_mats"]) ? $context["lista_mats"] : $this->getContext($context, "lista_mats")));
        foreach ($context['_seq'] as $context["_key"] => $context["matricula"]) {
            // line 14
            echo "            <tr>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["matricula"], "estudiante", array()), "nuip", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["matricula"], "estudiante", array()), "nomEst", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["matricula"], "grupo", array()), "grado", array()), "grado", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["matricula"], "grupo", array()), "nomenclatura", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matricula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </tbody>
    </table>
";
        
        $__internal_d15fe8c1ae2ece4e0f625f67d46f328c7aa1900101c088c642706a0363fe4045->leave($__internal_d15fe8c1ae2ece4e0f625f67d46f328c7aa1900101c088c642706a0363fe4045_prof);

    }

    public function getTemplateName()
    {
        return ":grupos:lista_mats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 20,  66 => 17,  62 => 16,  58 => 15,  55 => 14,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <table class="table">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Nuip</th>*/
/*                 <th>Nombre</th>*/
/*                 <th>Grupo</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for matricula in lista_mats %}*/
/*             <tr>*/
/*                 <td>{{ matricula.estudiante.nuip }}</td>*/
/*                 <td>{{ matricula.estudiante.nomEst }}</td>*/
/*                 <td>{{ matricula.grupo.grado.grado }}-{{ matricula.grupo.nomenclatura }}</td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
/* */
