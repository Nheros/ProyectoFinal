<?php

/* :temas:new.html.twig */
class __TwigTemplate_4626c3fa7829f922343fbc4daa92d3cb3e23928348855f401e7dea4eb01ed9e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":temas:new.html.twig", 1);
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
        $__internal_d051d1db36676b60e903ed613cd07fd1a0541337821666d2e9d991b540e6fe50 = $this->env->getExtension("native_profiler");
        $__internal_d051d1db36676b60e903ed613cd07fd1a0541337821666d2e9d991b540e6fe50->enter($__internal_d051d1db36676b60e903ed613cd07fd1a0541337821666d2e9d991b540e6fe50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":temas:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d051d1db36676b60e903ed613cd07fd1a0541337821666d2e9d991b540e6fe50->leave($__internal_d051d1db36676b60e903ed613cd07fd1a0541337821666d2e9d991b540e6fe50_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb91b7e71e44e1287071761d2cf268be9e49ce2ed991d9c604a272fd49b14c2b = $this->env->getExtension("native_profiler");
        $__internal_bb91b7e71e44e1287071761d2cf268be9e49ce2ed991d9c604a272fd49b14c2b->enter($__internal_bb91b7e71e44e1287071761d2cf268be9e49ce2ed991d9c604a272fd49b14c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Temas creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("temas_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_bb91b7e71e44e1287071761d2cf268be9e49ce2ed991d9c604a272fd49b14c2b->leave($__internal_bb91b7e71e44e1287071761d2cf268be9e49ce2ed991d9c604a272fd49b14c2b_prof);

    }

    public function getTemplateName()
    {
        return ":temas:new.html.twig";
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
/*     <h1>Temas creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('temas_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
