<?php

/* :estudiantes:edit.html.twig */
class __TwigTemplate_185cea0211f3f3a811903e08ea8f168b52a21bc5cea5db7abb5d46f639ef71c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":estudiantes:edit.html.twig", 1);
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
        $__internal_144ff69f79ec4cbc059d058580e400b5d21f389227e3291dea7496afa5dd619e = $this->env->getExtension("native_profiler");
        $__internal_144ff69f79ec4cbc059d058580e400b5d21f389227e3291dea7496afa5dd619e->enter($__internal_144ff69f79ec4cbc059d058580e400b5d21f389227e3291dea7496afa5dd619e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":estudiantes:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_144ff69f79ec4cbc059d058580e400b5d21f389227e3291dea7496afa5dd619e->leave($__internal_144ff69f79ec4cbc059d058580e400b5d21f389227e3291dea7496afa5dd619e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7f8d10ec0c1510ddcfb1ccf3825cbfab166c9191a0790ea5eff06d50f8d911a = $this->env->getExtension("native_profiler");
        $__internal_b7f8d10ec0c1510ddcfb1ccf3825cbfab166c9191a0790ea5eff06d50f8d911a->enter($__internal_b7f8d10ec0c1510ddcfb1ccf3825cbfab166c9191a0790ea5eff06d50f8d911a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Estudiantes edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("estudiantes_index");
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
        
        $__internal_b7f8d10ec0c1510ddcfb1ccf3825cbfab166c9191a0790ea5eff06d50f8d911a->leave($__internal_b7f8d10ec0c1510ddcfb1ccf3825cbfab166c9191a0790ea5eff06d50f8d911a_prof);

    }

    public function getTemplateName()
    {
        return ":estudiantes:edit.html.twig";
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
/*     <h1>Estudiantes edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('estudiantes_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
