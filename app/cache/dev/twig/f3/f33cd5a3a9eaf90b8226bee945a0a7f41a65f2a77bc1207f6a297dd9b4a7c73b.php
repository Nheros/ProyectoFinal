<?php

/* :planeadores:show.html.twig */
class __TwigTemplate_1f55c546a39cdbdfc9d77089c3823e19650b378eb63ce2aade092d1433707cb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":planeadores:show.html.twig", 1);
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
        $__internal_9f2c17df3f0833e3859f5a0bb9d472d152c97cca3136d1a66f500e4489ec66af = $this->env->getExtension("native_profiler");
        $__internal_9f2c17df3f0833e3859f5a0bb9d472d152c97cca3136d1a66f500e4489ec66af->enter($__internal_9f2c17df3f0833e3859f5a0bb9d472d152c97cca3136d1a66f500e4489ec66af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":planeadores:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f2c17df3f0833e3859f5a0bb9d472d152c97cca3136d1a66f500e4489ec66af->leave($__internal_9f2c17df3f0833e3859f5a0bb9d472d152c97cca3136d1a66f500e4489ec66af_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8cbc790b13c23c75c29d09ec4f7cdedbccfc5efb7aba2bab0c19907a2d014a5c = $this->env->getExtension("native_profiler");
        $__internal_8cbc790b13c23c75c29d09ec4f7cdedbccfc5efb7aba2bab0c19907a2d014a5c->enter($__internal_8cbc790b13c23c75c29d09ec4f7cdedbccfc5efb7aba2bab0c19907a2d014a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Planeadores</h1>

    <table>
        <tbody>
            <tr>
                <th>Idplan</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planeadore"]) ? $context["planeadore"] : $this->getContext($context, "planeadore")), "idPlan", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("planeadores_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("planeadores_edit", array("id" => $this->getAttribute((isset($context["planeadore"]) ? $context["planeadore"] : $this->getContext($context, "planeadore")), "idPlan", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_8cbc790b13c23c75c29d09ec4f7cdedbccfc5efb7aba2bab0c19907a2d014a5c->leave($__internal_8cbc790b13c23c75c29d09ec4f7cdedbccfc5efb7aba2bab0c19907a2d014a5c_prof);

    }

    public function getTemplateName()
    {
        return ":planeadores:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  70 => 23,  64 => 20,  58 => 17,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Planeadores</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Idplan</th>*/
/*                 <td>{{ planeadore.idPlan }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('planeadores_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('planeadores_edit', { 'id': planeadore.idPlan }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
