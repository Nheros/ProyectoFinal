<?php

/* :grupos:edit.html.twig */
class __TwigTemplate_f7234741615261fe89443ef4c2102c205053751255ef85f8c0f3a646b9effa49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":grupos:edit.html.twig", 1);
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
        $__internal_4130e69669b82f38f67cfb90d03c4dc03ee87810fbf371dd7c1f810e0b03007a = $this->env->getExtension("native_profiler");
        $__internal_4130e69669b82f38f67cfb90d03c4dc03ee87810fbf371dd7c1f810e0b03007a->enter($__internal_4130e69669b82f38f67cfb90d03c4dc03ee87810fbf371dd7c1f810e0b03007a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":grupos:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4130e69669b82f38f67cfb90d03c4dc03ee87810fbf371dd7c1f810e0b03007a->leave($__internal_4130e69669b82f38f67cfb90d03c4dc03ee87810fbf371dd7c1f810e0b03007a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ed69f57c6fe72a5798354d3c19c64779470910be2cd2cf1e223e6df04563f7f = $this->env->getExtension("native_profiler");
        $__internal_8ed69f57c6fe72a5798354d3c19c64779470910be2cd2cf1e223e6df04563f7f->enter($__internal_8ed69f57c6fe72a5798354d3c19c64779470910be2cd2cf1e223e6df04563f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Grupos edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("grupos_index");
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
        
        $__internal_8ed69f57c6fe72a5798354d3c19c64779470910be2cd2cf1e223e6df04563f7f->leave($__internal_8ed69f57c6fe72a5798354d3c19c64779470910be2cd2cf1e223e6df04563f7f_prof);

    }

    public function getTemplateName()
    {
        return ":grupos:edit.html.twig";
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
/*     <h1>Grupos edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('grupos_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
