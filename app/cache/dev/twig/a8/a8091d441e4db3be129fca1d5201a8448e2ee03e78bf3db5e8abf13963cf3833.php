<?php

/* periodos/edit.html.twig */
class __TwigTemplate_dfec5922a4650d25210f17bb54f9b02ba852e8cf34c1cfc898cf2d48d7d1e9a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "periodos/edit.html.twig", 1);
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
        $__internal_03e659145bf702fab218f2f5a86ebf328889c32bd64c57db7941ccb9ebd7d273 = $this->env->getExtension("native_profiler");
        $__internal_03e659145bf702fab218f2f5a86ebf328889c32bd64c57db7941ccb9ebd7d273->enter($__internal_03e659145bf702fab218f2f5a86ebf328889c32bd64c57db7941ccb9ebd7d273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "periodos/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03e659145bf702fab218f2f5a86ebf328889c32bd64c57db7941ccb9ebd7d273->leave($__internal_03e659145bf702fab218f2f5a86ebf328889c32bd64c57db7941ccb9ebd7d273_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_18a9edc51bf83fd744491361b330da3172116d1452be40ea8a835fecc42f9a26 = $this->env->getExtension("native_profiler");
        $__internal_18a9edc51bf83fd744491361b330da3172116d1452be40ea8a835fecc42f9a26->enter($__internal_18a9edc51bf83fd744491361b330da3172116d1452be40ea8a835fecc42f9a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Periodos edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("periodos_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_18a9edc51bf83fd744491361b330da3172116d1452be40ea8a835fecc42f9a26->leave($__internal_18a9edc51bf83fd744491361b330da3172116d1452be40ea8a835fecc42f9a26_prof);

    }

    public function getTemplateName()
    {
        return "periodos/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Periodos edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('periodos_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
