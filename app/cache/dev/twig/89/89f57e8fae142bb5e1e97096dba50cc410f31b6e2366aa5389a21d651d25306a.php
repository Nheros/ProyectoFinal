<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_0b962d90288e4146c279bbd777c61fb7889571fe1b401dc939a7fb0bd1c42a92 extends Twig_Template
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
        $__internal_abb31a7bea0d8716ab240c43527d4ef074d4f41cf1d898995c4d37265a31cbb1 = $this->env->getExtension("native_profiler");
        $__internal_abb31a7bea0d8716ab240c43527d4ef074d4f41cf1d898995c4d37265a31cbb1->enter($__internal_abb31a7bea0d8716ab240c43527d4ef074d4f41cf1d898995c4d37265a31cbb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_abb31a7bea0d8716ab240c43527d4ef074d4f41cf1d898995c4d37265a31cbb1->leave($__internal_abb31a7bea0d8716ab240c43527d4ef074d4f41cf1d898995c4d37265a31cbb1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */