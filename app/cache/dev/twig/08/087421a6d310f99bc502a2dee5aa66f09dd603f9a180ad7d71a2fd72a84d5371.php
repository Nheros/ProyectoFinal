<?php

/* :matriculas:edit.html.twig */
class __TwigTemplate_2bfea9edc7f55a7c4e297c6e13cf992553a8c70fb68cccc4f18ea9f731ef62f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":matriculas:edit.html.twig", 1);
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
        $__internal_07ff3e4c0fe646150a2f1e4fc7a66a89e984763f01fddeb2833bb5479c4e3584 = $this->env->getExtension("native_profiler");
        $__internal_07ff3e4c0fe646150a2f1e4fc7a66a89e984763f01fddeb2833bb5479c4e3584->enter($__internal_07ff3e4c0fe646150a2f1e4fc7a66a89e984763f01fddeb2833bb5479c4e3584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matriculas:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07ff3e4c0fe646150a2f1e4fc7a66a89e984763f01fddeb2833bb5479c4e3584->leave($__internal_07ff3e4c0fe646150a2f1e4fc7a66a89e984763f01fddeb2833bb5479c4e3584_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_91e6cdd22fe035f5ae4a58692f342ecccff52a13ed8b903f2bb4bd1075004e61 = $this->env->getExtension("native_profiler");
        $__internal_91e6cdd22fe035f5ae4a58692f342ecccff52a13ed8b903f2bb4bd1075004e61->enter($__internal_91e6cdd22fe035f5ae4a58692f342ecccff52a13ed8b903f2bb4bd1075004e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Matriculas edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("matriculas_index");
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
        
        $__internal_91e6cdd22fe035f5ae4a58692f342ecccff52a13ed8b903f2bb4bd1075004e61->leave($__internal_91e6cdd22fe035f5ae4a58692f342ecccff52a13ed8b903f2bb4bd1075004e61_prof);

    }

    public function getTemplateName()
    {
        return ":matriculas:edit.html.twig";
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
/*     <h1>Matriculas edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('matriculas_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */