<?php

/* :matriculas:index.html.twig */
class __TwigTemplate_7392be0eac8218d9d37f2389be3b4596d435bccba56251f7881c85faf107d7eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":matriculas:index.html.twig", 1);
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
        $__internal_a623a37a7e31e75311fb6691ae11b591c16ce89785bfa3f98a683ea098b23609 = $this->env->getExtension("native_profiler");
        $__internal_a623a37a7e31e75311fb6691ae11b591c16ce89785bfa3f98a683ea098b23609->enter($__internal_a623a37a7e31e75311fb6691ae11b591c16ce89785bfa3f98a683ea098b23609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matriculas:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a623a37a7e31e75311fb6691ae11b591c16ce89785bfa3f98a683ea098b23609->leave($__internal_a623a37a7e31e75311fb6691ae11b591c16ce89785bfa3f98a683ea098b23609_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7100d3ad1adabed60cfbcc731e1586f60d1c55719a41a531bf37eed9b7f868fc = $this->env->getExtension("native_profiler");
        $__internal_7100d3ad1adabed60cfbcc731e1586f60d1c55719a41a531bf37eed9b7f868fc->enter($__internal_7100d3ad1adabed60cfbcc731e1586f60d1c55719a41a531bf37eed9b7f868fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Matriculas list</h1>

    <table>
        <thead>
            <tr>
                <th>Idmat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matriculas"]) ? $context["matriculas"] : $this->getContext($context, "matriculas")));
        foreach ($context['_seq'] as $context["_key"] => $context["matricula"]) {
            // line 15
            echo "            <tr>
                <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matriculas_show", array("id" => $this->getAttribute($context["matricula"], "idMat", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["matricula"], "estudiante", array()), "nomEst", array()), "html", null, true);
            echo "</a></td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matriculas_show", array("id" => $this->getAttribute($context["matricula"], "idMat", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matriculas_edit", array("id" => $this->getAttribute($context["matricula"], "idMat", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matricula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("matriculas_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_7100d3ad1adabed60cfbcc731e1586f60d1c55719a41a531bf37eed9b7f868fc->leave($__internal_7100d3ad1adabed60cfbcc731e1586f60d1c55719a41a531bf37eed9b7f868fc_prof);

    }

    public function getTemplateName()
    {
        return ":matriculas:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 34,  86 => 29,  74 => 23,  68 => 20,  59 => 16,  56 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Matriculas list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Idmat</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for matricula in matriculas %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('matriculas_show', { 'id': matricula.idMat }) }}">{{ matricula.estudiante.nomEst }}</a></td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('matriculas_show', { 'id': matricula.idMat }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('matriculas_edit', { 'id': matricula.idMat }) }}">edit</a>*/
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
/*             <a href="{{ path('matriculas_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
