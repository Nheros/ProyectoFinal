<?php

/* matriculas/edit.html.twig */
class __TwigTemplate_2ff9b802230e4bd7203cb49822a88d0982afb87623d57f3a2f52319ccb2a53e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "matriculas/edit.html.twig", 1);
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
        $__internal_93e71fe3f7f2816fa9e4f97d203364d5cc8d3f9f4f033f4155c1b8214ba66179 = $this->env->getExtension("native_profiler");
        $__internal_93e71fe3f7f2816fa9e4f97d203364d5cc8d3f9f4f033f4155c1b8214ba66179->enter($__internal_93e71fe3f7f2816fa9e4f97d203364d5cc8d3f9f4f033f4155c1b8214ba66179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matriculas/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93e71fe3f7f2816fa9e4f97d203364d5cc8d3f9f4f033f4155c1b8214ba66179->leave($__internal_93e71fe3f7f2816fa9e4f97d203364d5cc8d3f9f4f033f4155c1b8214ba66179_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_af235ced23a4f721d76ceb1dec7bd7c84a7928cddd103480696dd71f852d1e7a = $this->env->getExtension("native_profiler");
        $__internal_af235ced23a4f721d76ceb1dec7bd7c84a7928cddd103480696dd71f852d1e7a->enter($__internal_af235ced23a4f721d76ceb1dec7bd7c84a7928cddd103480696dd71f852d1e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Matriculas edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("matriculas_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_af235ced23a4f721d76ceb1dec7bd7c84a7928cddd103480696dd71f852d1e7a->leave($__internal_af235ced23a4f721d76ceb1dec7bd7c84a7928cddd103480696dd71f852d1e7a_prof);

    }

    public function getTemplateName()
    {
        return "matriculas/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Matriculas edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('matriculas_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */