<?php

/* grados/new.html.twig */
class __TwigTemplate_e6426bfca5c871f87a7e06e1c539995b427117d6e348f193c62bfcc6bf3330db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "grados/new.html.twig", 1);
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
        $__internal_499e22aceb4c67b481cd432c762c3ff6efbb1b4bad6731c7dc16d13e84fabd8f = $this->env->getExtension("native_profiler");
        $__internal_499e22aceb4c67b481cd432c762c3ff6efbb1b4bad6731c7dc16d13e84fabd8f->enter($__internal_499e22aceb4c67b481cd432c762c3ff6efbb1b4bad6731c7dc16d13e84fabd8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "grados/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_499e22aceb4c67b481cd432c762c3ff6efbb1b4bad6731c7dc16d13e84fabd8f->leave($__internal_499e22aceb4c67b481cd432c762c3ff6efbb1b4bad6731c7dc16d13e84fabd8f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_78a68c5ed2542f041429437fa8b1516a2e2b07ed8eed9abe5cc2a3c7177f45cd = $this->env->getExtension("native_profiler");
        $__internal_78a68c5ed2542f041429437fa8b1516a2e2b07ed8eed9abe5cc2a3c7177f45cd->enter($__internal_78a68c5ed2542f041429437fa8b1516a2e2b07ed8eed9abe5cc2a3c7177f45cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Grados creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("grados_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_78a68c5ed2542f041429437fa8b1516a2e2b07ed8eed9abe5cc2a3c7177f45cd->leave($__internal_78a68c5ed2542f041429437fa8b1516a2e2b07ed8eed9abe5cc2a3c7177f45cd_prof);

    }

    public function getTemplateName()
    {
        return "grados/new.html.twig";
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
/*     <h1>Grados creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('grados_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
