<?php

/* asignaciones/edit.html.twig */
class __TwigTemplate_0afa50217f67d4bb9c8e0786f6110edd7a27d138d794f971cdc9d0f08903b930 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "asignaciones/edit.html.twig", 1);
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
        $__internal_9609fd6427fcd0d226ead56352ca55d85bf620415bf1f6d7c0f96fb0d9ec4907 = $this->env->getExtension("native_profiler");
        $__internal_9609fd6427fcd0d226ead56352ca55d85bf620415bf1f6d7c0f96fb0d9ec4907->enter($__internal_9609fd6427fcd0d226ead56352ca55d85bf620415bf1f6d7c0f96fb0d9ec4907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "asignaciones/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9609fd6427fcd0d226ead56352ca55d85bf620415bf1f6d7c0f96fb0d9ec4907->leave($__internal_9609fd6427fcd0d226ead56352ca55d85bf620415bf1f6d7c0f96fb0d9ec4907_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d74a18e3ad1f7c2fdc9a1a8fbd87b68ddf8c007eeebe0587a8960dcbaac02f91 = $this->env->getExtension("native_profiler");
        $__internal_d74a18e3ad1f7c2fdc9a1a8fbd87b68ddf8c007eeebe0587a8960dcbaac02f91->enter($__internal_d74a18e3ad1f7c2fdc9a1a8fbd87b68ddf8c007eeebe0587a8960dcbaac02f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Asignaciones edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("asignaciones_index");
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
        
        $__internal_d74a18e3ad1f7c2fdc9a1a8fbd87b68ddf8c007eeebe0587a8960dcbaac02f91->leave($__internal_d74a18e3ad1f7c2fdc9a1a8fbd87b68ddf8c007eeebe0587a8960dcbaac02f91_prof);

    }

    public function getTemplateName()
    {
        return "asignaciones/edit.html.twig";
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
/*     <h1>Asignaciones edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('asignaciones_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */