<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_0875af5ca63a546a5085ce2e2aaf28f790f5173dabb502002443c06ba53bae38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6fa0edaf141f08aed33ed691d1a368a3d390aedaf29d41a7b6a0f5f38f4a568 = $this->env->getExtension("native_profiler");
        $__internal_a6fa0edaf141f08aed33ed691d1a368a3d390aedaf29d41a7b6a0f5f38f4a568->enter($__internal_a6fa0edaf141f08aed33ed691d1a368a3d390aedaf29d41a7b6a0f5f38f4a568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_a6fa0edaf141f08aed33ed691d1a368a3d390aedaf29d41a7b6a0f5f38f4a568->leave($__internal_a6fa0edaf141f08aed33ed691d1a368a3d390aedaf29d41a7b6a0f5f38f4a568_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
