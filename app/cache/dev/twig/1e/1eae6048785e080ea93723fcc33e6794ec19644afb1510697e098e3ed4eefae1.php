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
        $__internal_2a8bc364f150355945f189f22ad64929713432a77ff978bb1167fd33ddeb3153 = $this->env->getExtension("native_profiler");
        $__internal_2a8bc364f150355945f189f22ad64929713432a77ff978bb1167fd33ddeb3153->enter($__internal_2a8bc364f150355945f189f22ad64929713432a77ff978bb1167fd33ddeb3153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_2a8bc364f150355945f189f22ad64929713432a77ff978bb1167fd33ddeb3153->leave($__internal_2a8bc364f150355945f189f22ad64929713432a77ff978bb1167fd33ddeb3153_prof);

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
