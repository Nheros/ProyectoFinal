<?php

/* :docentes:new.html.twig */
class __TwigTemplate_bb970b02aba215b4e93dfa8b36a412d0ea16018a5f11fd2908066d7c50cbcb0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":docentes:new.html.twig", 1);
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
        $__internal_6b045a8722b2f9183c0855b83bed6a9d2a6eb126f0e4775fc46a9b599acac1cd = $this->env->getExtension("native_profiler");
        $__internal_6b045a8722b2f9183c0855b83bed6a9d2a6eb126f0e4775fc46a9b599acac1cd->enter($__internal_6b045a8722b2f9183c0855b83bed6a9d2a6eb126f0e4775fc46a9b599acac1cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":docentes:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b045a8722b2f9183c0855b83bed6a9d2a6eb126f0e4775fc46a9b599acac1cd->leave($__internal_6b045a8722b2f9183c0855b83bed6a9d2a6eb126f0e4775fc46a9b599acac1cd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_940a66b6996dbf734c1bcfad793fb7f4437f6cc1d7452d4245f1199bc540f6a4 = $this->env->getExtension("native_profiler");
        $__internal_940a66b6996dbf734c1bcfad793fb7f4437f6cc1d7452d4245f1199bc540f6a4->enter($__internal_940a66b6996dbf734c1bcfad793fb7f4437f6cc1d7452d4245f1199bc540f6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Docentes creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("docentes_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_940a66b6996dbf734c1bcfad793fb7f4437f6cc1d7452d4245f1199bc540f6a4->leave($__internal_940a66b6996dbf734c1bcfad793fb7f4437f6cc1d7452d4245f1199bc540f6a4_prof);

    }

    public function getTemplateName()
    {
        return ":docentes:new.html.twig";
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
/*     <h1>Docentes creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('docentes_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
