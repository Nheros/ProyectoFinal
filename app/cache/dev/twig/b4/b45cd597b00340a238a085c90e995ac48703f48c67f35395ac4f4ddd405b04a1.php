<?php

/* :acudientes:edit.html.twig */
class __TwigTemplate_33714b1e168d1de8c449abf3044dbbd92297d52eebbca8910008bd9928639956 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":acudientes:edit.html.twig", 1);
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
        $__internal_3473e07d4e9fd6bafc005fd25cdaad8b6a7ba3af41efab1ece076933f0a2989b = $this->env->getExtension("native_profiler");
        $__internal_3473e07d4e9fd6bafc005fd25cdaad8b6a7ba3af41efab1ece076933f0a2989b->enter($__internal_3473e07d4e9fd6bafc005fd25cdaad8b6a7ba3af41efab1ece076933f0a2989b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":acudientes:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3473e07d4e9fd6bafc005fd25cdaad8b6a7ba3af41efab1ece076933f0a2989b->leave($__internal_3473e07d4e9fd6bafc005fd25cdaad8b6a7ba3af41efab1ece076933f0a2989b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e061e4ef7edc558146b5fc6b2fcda8b9277e93748a0f6d8ab2453addcbe6ae2 = $this->env->getExtension("native_profiler");
        $__internal_1e061e4ef7edc558146b5fc6b2fcda8b9277e93748a0f6d8ab2453addcbe6ae2->enter($__internal_1e061e4ef7edc558146b5fc6b2fcda8b9277e93748a0f6d8ab2453addcbe6ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Acudientes edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("acudientes_index");
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
        
        $__internal_1e061e4ef7edc558146b5fc6b2fcda8b9277e93748a0f6d8ab2453addcbe6ae2->leave($__internal_1e061e4ef7edc558146b5fc6b2fcda8b9277e93748a0f6d8ab2453addcbe6ae2_prof);

    }

    public function getTemplateName()
    {
        return ":acudientes:edit.html.twig";
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
/*     <h1>Acudientes edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('acudientes_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
