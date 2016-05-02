<?php

/* matriculas/index.html.twig */
class __TwigTemplate_f87f4d3b1587859c0b6efd45a1c0c8f18b40b317ac764f9c05e09331c72c1ca2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "matriculas/index.html.twig", 1);
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
        $__internal_3efb90910e0ee3561751670d9d0fdac140bb907e149d9f7386f412673bf552e4 = $this->env->getExtension("native_profiler");
        $__internal_3efb90910e0ee3561751670d9d0fdac140bb907e149d9f7386f412673bf552e4->enter($__internal_3efb90910e0ee3561751670d9d0fdac140bb907e149d9f7386f412673bf552e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matriculas/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3efb90910e0ee3561751670d9d0fdac140bb907e149d9f7386f412673bf552e4->leave($__internal_3efb90910e0ee3561751670d9d0fdac140bb907e149d9f7386f412673bf552e4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4d463c7a8b787b311e495f9618baeeeea39e3892c2b08d8865e45c3a0776be3 = $this->env->getExtension("native_profiler");
        $__internal_a4d463c7a8b787b311e495f9618baeeeea39e3892c2b08d8865e45c3a0776be3->enter($__internal_a4d463c7a8b787b311e495f9618baeeeea39e3892c2b08d8865e45c3a0776be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a4d463c7a8b787b311e495f9618baeeeea39e3892c2b08d8865e45c3a0776be3->leave($__internal_a4d463c7a8b787b311e495f9618baeeeea39e3892c2b08d8865e45c3a0776be3_prof);

    }

    public function getTemplateName()
    {
        return "matriculas/index.html.twig";
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
