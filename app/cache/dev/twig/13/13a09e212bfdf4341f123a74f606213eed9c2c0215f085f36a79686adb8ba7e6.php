<?php

/* :periodos:show.html.twig */
class __TwigTemplate_6f07b87fbf63d5a87cf31cce5ab128e20e29aea559187934f2bb714afdf7deaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":periodos:show.html.twig", 1);
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
        $__internal_f0dabd7b66b790304a7937968444ec1f8372077650fc413fa13353e1f5ffef61 = $this->env->getExtension("native_profiler");
        $__internal_f0dabd7b66b790304a7937968444ec1f8372077650fc413fa13353e1f5ffef61->enter($__internal_f0dabd7b66b790304a7937968444ec1f8372077650fc413fa13353e1f5ffef61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":periodos:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0dabd7b66b790304a7937968444ec1f8372077650fc413fa13353e1f5ffef61->leave($__internal_f0dabd7b66b790304a7937968444ec1f8372077650fc413fa13353e1f5ffef61_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0b0a7c0742b0b6474435a1dbb80bdd8789f0399266dccbc2f6c6dc1147baecc = $this->env->getExtension("native_profiler");
        $__internal_b0b0a7c0742b0b6474435a1dbb80bdd8789f0399266dccbc2f6c6dc1147baecc->enter($__internal_b0b0a7c0742b0b6474435a1dbb80bdd8789f0399266dccbc2f6c6dc1147baecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Periodos</h1>

    <table>
        <tbody>
            <tr>
                <th>Idperiodo</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "idPeriodo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechainper</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "fechaInPer", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "fechaInPer", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Fechafinper</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "fechaFinPer", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "fechaFinPer", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Numero</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "numero", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("periodos_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("periodos_edit", array("id" => $this->getAttribute((isset($context["periodo"]) ? $context["periodo"] : $this->getContext($context, "periodo")), "idPeriodo", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_b0b0a7c0742b0b6474435a1dbb80bdd8789f0399266dccbc2f6c6dc1147baecc->leave($__internal_b0b0a7c0742b0b6474435a1dbb80bdd8789f0399266dccbc2f6c6dc1147baecc_prof);

    }

    public function getTemplateName()
    {
        return ":periodos:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 37,  95 => 35,  89 => 32,  83 => 29,  73 => 22,  64 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Periodos</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Idperiodo</th>*/
/*                 <td>{{ periodo.idPeriodo }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fechainper</th>*/
/*                 <td>{% if periodo.fechaInPer %}{{ periodo.fechaInPer|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fechafinper</th>*/
/*                 <td>{% if periodo.fechaFinPer %}{{ periodo.fechaFinPer|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Numero</th>*/
/*                 <td>{{ periodo.numero }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('periodos_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('periodos_edit', { 'id': periodo.idPeriodo }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
