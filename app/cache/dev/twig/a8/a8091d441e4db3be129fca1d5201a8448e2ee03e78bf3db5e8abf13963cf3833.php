<?php

/* periodos/edit.html.twig */
class __TwigTemplate_dfec5922a4650d25210f17bb54f9b02ba852e8cf34c1cfc898cf2d48d7d1e9a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "periodos/edit.html.twig", 1);
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
        $__internal_8ec7df5f824b0effe5f18b6d880b38c87c6e2ff19ce2654944807ead7eb14a9c = $this->env->getExtension("native_profiler");
        $__internal_8ec7df5f824b0effe5f18b6d880b38c87c6e2ff19ce2654944807ead7eb14a9c->enter($__internal_8ec7df5f824b0effe5f18b6d880b38c87c6e2ff19ce2654944807ead7eb14a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "periodos/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ec7df5f824b0effe5f18b6d880b38c87c6e2ff19ce2654944807ead7eb14a9c->leave($__internal_8ec7df5f824b0effe5f18b6d880b38c87c6e2ff19ce2654944807ead7eb14a9c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee0e0cad67c445aab83d5bd200c89dfb9e76efade8e2a4dda4938d6d39e3fa3f = $this->env->getExtension("native_profiler");
        $__internal_ee0e0cad67c445aab83d5bd200c89dfb9e76efade8e2a4dda4938d6d39e3fa3f->enter($__internal_ee0e0cad67c445aab83d5bd200c89dfb9e76efade8e2a4dda4938d6d39e3fa3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Periodos edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("periodos_index");
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
        
        $__internal_ee0e0cad67c445aab83d5bd200c89dfb9e76efade8e2a4dda4938d6d39e3fa3f->leave($__internal_ee0e0cad67c445aab83d5bd200c89dfb9e76efade8e2a4dda4938d6d39e3fa3f_prof);

    }

    public function getTemplateName()
    {
        return "periodos/edit.html.twig";
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
/*     <h1>Periodos edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('periodos_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
