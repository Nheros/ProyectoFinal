<?php

/* docentes/edit.html.twig */
class __TwigTemplate_5a5aae8c4e763b212cc8b1221a3409feec016b57a18ec291542aabd7dcb4a7d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "docentes/edit.html.twig", 1);
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
        $__internal_d6c0157f9dc7649c628c6493b516528b2577e5db4ba6585f0a8f8c5b7549aac3 = $this->env->getExtension("native_profiler");
        $__internal_d6c0157f9dc7649c628c6493b516528b2577e5db4ba6585f0a8f8c5b7549aac3->enter($__internal_d6c0157f9dc7649c628c6493b516528b2577e5db4ba6585f0a8f8c5b7549aac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "docentes/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6c0157f9dc7649c628c6493b516528b2577e5db4ba6585f0a8f8c5b7549aac3->leave($__internal_d6c0157f9dc7649c628c6493b516528b2577e5db4ba6585f0a8f8c5b7549aac3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_419b287882e25a79dd57f64295d9cf4e17728d3116a1ec32d36fcdfc53125e85 = $this->env->getExtension("native_profiler");
        $__internal_419b287882e25a79dd57f64295d9cf4e17728d3116a1ec32d36fcdfc53125e85->enter($__internal_419b287882e25a79dd57f64295d9cf4e17728d3116a1ec32d36fcdfc53125e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Docentes edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("docentes_index");
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
        
        $__internal_419b287882e25a79dd57f64295d9cf4e17728d3116a1ec32d36fcdfc53125e85->leave($__internal_419b287882e25a79dd57f64295d9cf4e17728d3116a1ec32d36fcdfc53125e85_prof);

    }

    public function getTemplateName()
    {
        return "docentes/edit.html.twig";
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
/*     <h1>Docentes edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('docentes_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
