<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_b76ea3982ccd7b475cce1ec23cab4a4d83c0af1d968175c7490662b1664d52ed extends Twig_Template
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
        $__internal_ddfc6b4d0f5400491ff2c04818dc4083bb31491454aabf35694eb6b221e4bea6 = $this->env->getExtension("native_profiler");
        $__internal_ddfc6b4d0f5400491ff2c04818dc4083bb31491454aabf35694eb6b221e4bea6->enter($__internal_ddfc6b4d0f5400491ff2c04818dc4083bb31491454aabf35694eb6b221e4bea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_ddfc6b4d0f5400491ff2c04818dc4083bb31491454aabf35694eb6b221e4bea6->leave($__internal_ddfc6b4d0f5400491ff2c04818dc4083bb31491454aabf35694eb6b221e4bea6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
