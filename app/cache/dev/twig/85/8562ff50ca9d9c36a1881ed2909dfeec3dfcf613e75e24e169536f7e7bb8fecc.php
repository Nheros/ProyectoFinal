<?php

/* :estudiantes:index.html.twig */
class __TwigTemplate_3f3068100c75aed48cf156465881444c1f3a1c94190b146572b5f720223319af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":estudiantes:index.html.twig", 1);
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
        $__internal_244ee1240e86b68661abcff14951a09e63a6205ba6b87a1da0cb8449cfa421b9 = $this->env->getExtension("native_profiler");
        $__internal_244ee1240e86b68661abcff14951a09e63a6205ba6b87a1da0cb8449cfa421b9->enter($__internal_244ee1240e86b68661abcff14951a09e63a6205ba6b87a1da0cb8449cfa421b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":estudiantes:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_244ee1240e86b68661abcff14951a09e63a6205ba6b87a1da0cb8449cfa421b9->leave($__internal_244ee1240e86b68661abcff14951a09e63a6205ba6b87a1da0cb8449cfa421b9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0898e12655cada21bd85484924d66a145fbc9a2f0705cb1fbccf1074a38ddbc6 = $this->env->getExtension("native_profiler");
        $__internal_0898e12655cada21bd85484924d66a145fbc9a2f0705cb1fbccf1074a38ddbc6->enter($__internal_0898e12655cada21bd85484924d66a145fbc9a2f0705cb1fbccf1074a38ddbc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Estudiantes list</h1>

    <table>
        <thead>
            <tr>
                <th>Idest</th>
                <th>Nuip</th>
                <th>Nomest</th>
                <th>Fechanac</th>
                <th>Tel</th>
                <th>Dir</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["estudiantes"]) ? $context["estudiantes"] : $this->getContext($context, "estudiantes")));
        foreach ($context['_seq'] as $context["_key"] => $context["estudiante"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estudiantes_show", array("id" => $this->getAttribute($context["estudiante"], "idEst", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["estudiante"], "idEst", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["estudiante"], "nuip", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["estudiante"], "nomEst", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["estudiante"], "fechaNac", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["estudiante"], "fechaNac", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["estudiante"], "tel", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["estudiante"], "dir", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estudiantes_show", array("id" => $this->getAttribute($context["estudiante"], "idEst", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estudiantes_edit", array("id" => $this->getAttribute($context["estudiante"], "idEst", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['estudiante'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("estudiantes_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_0898e12655cada21bd85484924d66a145fbc9a2f0705cb1fbccf1074a38ddbc6->leave($__internal_0898e12655cada21bd85484924d66a145fbc9a2f0705cb1fbccf1074a38ddbc6_prof);

    }

    public function getTemplateName()
    {
        return ":estudiantes:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 44,  113 => 39,  101 => 33,  95 => 30,  88 => 26,  84 => 25,  78 => 24,  74 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Estudiantes list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Idest</th>*/
/*                 <th>Nuip</th>*/
/*                 <th>Nomest</th>*/
/*                 <th>Fechanac</th>*/
/*                 <th>Tel</th>*/
/*                 <th>Dir</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for estudiante in estudiantes %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('estudiantes_show', { 'id': estudiante.idEst }) }}">{{ estudiante.idEst }}</a></td>*/
/*                 <td>{{ estudiante.nuip }}</td>*/
/*                 <td>{{ estudiante.nomEst }}</td>*/
/*                 <td>{% if estudiante.fechaNac %}{{ estudiante.fechaNac|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{{ estudiante.tel }}</td>*/
/*                 <td>{{ estudiante.dir }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('estudiantes_show', { 'id': estudiante.idEst }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('estudiantes_edit', { 'id': estudiante.idEst }) }}">edit</a>*/
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
/*             <a href="{{ path('estudiantes_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
