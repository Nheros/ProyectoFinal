<?php

/* grupos/new.html.twig */
class __TwigTemplate_b64d5446b7d319d4561cb6852374b2d94b78ab848d1ec941039f04b92943324a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "grupos/new.html.twig", 1);
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
        $__internal_32e304dd585761c1fe884821d0f8f80c71c0fc13e5de4e5535a3dd8b4e6a3929 = $this->env->getExtension("native_profiler");
        $__internal_32e304dd585761c1fe884821d0f8f80c71c0fc13e5de4e5535a3dd8b4e6a3929->enter($__internal_32e304dd585761c1fe884821d0f8f80c71c0fc13e5de4e5535a3dd8b4e6a3929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "grupos/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32e304dd585761c1fe884821d0f8f80c71c0fc13e5de4e5535a3dd8b4e6a3929->leave($__internal_32e304dd585761c1fe884821d0f8f80c71c0fc13e5de4e5535a3dd8b4e6a3929_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_773bb46de57c0667c91778d2414f38dcb294f4610fe5115eda2f88fdcd07085a = $this->env->getExtension("native_profiler");
        $__internal_773bb46de57c0667c91778d2414f38dcb294f4610fe5115eda2f88fdcd07085a->enter($__internal_773bb46de57c0667c91778d2414f38dcb294f4610fe5115eda2f88fdcd07085a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Grupos creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("grupos_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_773bb46de57c0667c91778d2414f38dcb294f4610fe5115eda2f88fdcd07085a->leave($__internal_773bb46de57c0667c91778d2414f38dcb294f4610fe5115eda2f88fdcd07085a_prof);

    }

    public function getTemplateName()
    {
        return "grupos/new.html.twig";
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
/*     <h1>Grupos creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('grupos_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
