<?php

/* planeadores/new.html.twig */
class __TwigTemplate_b92bbf76dba7b3f0cf4e5d8764be9a30d66d19972af2a33da4338afc03ef8ff3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "planeadores/new.html.twig", 1);
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
        $__internal_5ef96ce42274deadabd94803520c958c145cb4f94ca327a54d0da14b975b7129 = $this->env->getExtension("native_profiler");
        $__internal_5ef96ce42274deadabd94803520c958c145cb4f94ca327a54d0da14b975b7129->enter($__internal_5ef96ce42274deadabd94803520c958c145cb4f94ca327a54d0da14b975b7129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "planeadores/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ef96ce42274deadabd94803520c958c145cb4f94ca327a54d0da14b975b7129->leave($__internal_5ef96ce42274deadabd94803520c958c145cb4f94ca327a54d0da14b975b7129_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_96f4556e8afe3b63406f683e6331e99d34070f1c439b662723ddcea19f552ee2 = $this->env->getExtension("native_profiler");
        $__internal_96f4556e8afe3b63406f683e6331e99d34070f1c439b662723ddcea19f552ee2->enter($__internal_96f4556e8afe3b63406f683e6331e99d34070f1c439b662723ddcea19f552ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Planeadores creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("planeadores_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_96f4556e8afe3b63406f683e6331e99d34070f1c439b662723ddcea19f552ee2->leave($__internal_96f4556e8afe3b63406f683e6331e99d34070f1c439b662723ddcea19f552ee2_prof);

    }

    public function getTemplateName()
    {
        return "planeadores/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Planeadores creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('planeadores_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
