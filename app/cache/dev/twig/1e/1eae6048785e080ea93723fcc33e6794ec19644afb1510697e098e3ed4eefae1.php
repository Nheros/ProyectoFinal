<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_333f8d9ad40bd8c299171f11d6f23975b8583b51e372979bc63e2686394f42e6 extends Twig_Template
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
        $__internal_8de28bac5fbdbf0c411b05471d3aa86efe4106cdef9a8e853d62e90819d9f82a = $this->env->getExtension("native_profiler");
        $__internal_8de28bac5fbdbf0c411b05471d3aa86efe4106cdef9a8e853d62e90819d9f82a->enter($__internal_8de28bac5fbdbf0c411b05471d3aa86efe4106cdef9a8e853d62e90819d9f82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_8de28bac5fbdbf0c411b05471d3aa86efe4106cdef9a8e853d62e90819d9f82a->leave($__internal_8de28bac5fbdbf0c411b05471d3aa86efe4106cdef9a8e853d62e90819d9f82a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
