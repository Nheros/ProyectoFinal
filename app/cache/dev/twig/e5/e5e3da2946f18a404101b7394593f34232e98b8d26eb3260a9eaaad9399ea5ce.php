<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_3229f68cca84e773c8d54e190fd64fb8b62bd0d8ca0a11c5a08d38b607ffb468 extends Twig_Template
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
        $__internal_568203ddff01d5328bb1068e4aec1ed27d03d6e7d4f80914830540f731e9081b = $this->env->getExtension("native_profiler");
        $__internal_568203ddff01d5328bb1068e4aec1ed27d03d6e7d4f80914830540f731e9081b->enter($__internal_568203ddff01d5328bb1068e4aec1ed27d03d6e7d4f80914830540f731e9081b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_568203ddff01d5328bb1068e4aec1ed27d03d6e7d4f80914830540f731e9081b->leave($__internal_568203ddff01d5328bb1068e4aec1ed27d03d6e7d4f80914830540f731e9081b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
