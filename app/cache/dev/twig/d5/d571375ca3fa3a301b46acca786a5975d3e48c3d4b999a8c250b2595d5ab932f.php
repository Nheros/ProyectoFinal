<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_28b7e1c583f4b48acfb267cb3353299a2d6e36e356910a577a124ec39fe0284b extends Twig_Template
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
        $__internal_ead02b07f2e48b40668a0cbc5bd9147c1f19d14063e20c9e18bd970dc21db3ee = $this->env->getExtension("native_profiler");
        $__internal_ead02b07f2e48b40668a0cbc5bd9147c1f19d14063e20c9e18bd970dc21db3ee->enter($__internal_ead02b07f2e48b40668a0cbc5bd9147c1f19d14063e20c9e18bd970dc21db3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_ead02b07f2e48b40668a0cbc5bd9147c1f19d14063e20c9e18bd970dc21db3ee->leave($__internal_ead02b07f2e48b40668a0cbc5bd9147c1f19d14063e20c9e18bd970dc21db3ee_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
