<?php

/* :notas:show.html.twig */
class __TwigTemplate_a2051abf97cb7c54d11bdcf002361ec174eb91e50c455893bfd490ad273f5215 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":notas:show.html.twig", 1);
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
        $__internal_399bce53f0816fcfa41631dcc0163b5c585ac8e6c8ada1f08602e4e1000ba93d = $this->env->getExtension("native_profiler");
        $__internal_399bce53f0816fcfa41631dcc0163b5c585ac8e6c8ada1f08602e4e1000ba93d->enter($__internal_399bce53f0816fcfa41631dcc0163b5c585ac8e6c8ada1f08602e4e1000ba93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":notas:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_399bce53f0816fcfa41631dcc0163b5c585ac8e6c8ada1f08602e4e1000ba93d->leave($__internal_399bce53f0816fcfa41631dcc0163b5c585ac8e6c8ada1f08602e4e1000ba93d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4507a95cc3dfa6f6cfff3c1be745d1dec50bb1b1f65f591f7e66029d2f3861e0 = $this->env->getExtension("native_profiler");
        $__internal_4507a95cc3dfa6f6cfff3c1be745d1dec50bb1b1f65f591f7e66029d2f3861e0->enter($__internal_4507a95cc3dfa6f6cfff3c1be745d1dec50bb1b1f65f591f7e66029d2f3861e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Notas</h1>

    <table>
        <tbody>
            <tr>
                <th>Idnota</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nota"]) ? $context["nota"] : $this->getContext($context, "nota")), "idNota", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nota</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nota"]) ? $context["nota"] : $this->getContext($context, "nota")), "nota", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("notas_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("notas_edit", array("id" => $this->getAttribute((isset($context["nota"]) ? $context["nota"] : $this->getContext($context, "nota")), "idNota", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_4507a95cc3dfa6f6cfff3c1be745d1dec50bb1b1f65f591f7e66029d2f3861e0->leave($__internal_4507a95cc3dfa6f6cfff3c1be745d1dec50bb1b1f65f591f7e66029d2f3861e0_prof);

    }

    public function getTemplateName()
    {
        return ":notas:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  77 => 27,  71 => 24,  65 => 21,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Notas</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Idnota</th>*/
/*                 <td>{{ nota.idNota }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nota</th>*/
/*                 <td>{{ nota.nota }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('notas_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('notas_edit', { 'id': nota.idNota }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
