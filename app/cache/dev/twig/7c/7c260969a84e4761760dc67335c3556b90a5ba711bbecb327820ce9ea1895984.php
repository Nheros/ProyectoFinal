<?php

/* :competencias:new.html.twig */
class __TwigTemplate_8a8004a4b8d12806b4b73b6fe4ad0b053106013aa3e19d73701b49d970e1cde2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":competencias:new.html.twig", 1);
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
        $__internal_a1a6fb1dde5b16d22768ed27c43f1df3affe74d2cc8f1d7e6bc620db5f8db61f = $this->env->getExtension("native_profiler");
        $__internal_a1a6fb1dde5b16d22768ed27c43f1df3affe74d2cc8f1d7e6bc620db5f8db61f->enter($__internal_a1a6fb1dde5b16d22768ed27c43f1df3affe74d2cc8f1d7e6bc620db5f8db61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":competencias:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1a6fb1dde5b16d22768ed27c43f1df3affe74d2cc8f1d7e6bc620db5f8db61f->leave($__internal_a1a6fb1dde5b16d22768ed27c43f1df3affe74d2cc8f1d7e6bc620db5f8db61f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_65353fdbee63c055aecb3c78e9d479a9e957f5af7bca9d8fc152be5855c7fb5b = $this->env->getExtension("native_profiler");
        $__internal_65353fdbee63c055aecb3c78e9d479a9e957f5af7bca9d8fc152be5855c7fb5b->enter($__internal_65353fdbee63c055aecb3c78e9d479a9e957f5af7bca9d8fc152be5855c7fb5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Competencias creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("competencias_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_65353fdbee63c055aecb3c78e9d479a9e957f5af7bca9d8fc152be5855c7fb5b->leave($__internal_65353fdbee63c055aecb3c78e9d479a9e957f5af7bca9d8fc152be5855c7fb5b_prof);

    }

    public function getTemplateName()
    {
        return ":competencias:new.html.twig";
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
/*     <h1>Competencias creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('competencias_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
