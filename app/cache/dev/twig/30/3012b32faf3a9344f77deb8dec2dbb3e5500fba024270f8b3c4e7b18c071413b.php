<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_1ee7e18661cded70fbe56b907ee95860f36f4fd5fd86e5858b688f7d340a1c3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f159915c8d59d6943c1a187f26e829467e0298a467d5e8e39dac914a134b3b94 = $this->env->getExtension("native_profiler");
        $__internal_f159915c8d59d6943c1a187f26e829467e0298a467d5e8e39dac914a134b3b94->enter($__internal_f159915c8d59d6943c1a187f26e829467e0298a467d5e8e39dac914a134b3b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f159915c8d59d6943c1a187f26e829467e0298a467d5e8e39dac914a134b3b94->leave($__internal_f159915c8d59d6943c1a187f26e829467e0298a467d5e8e39dac914a134b3b94_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_09dcd27356d625eb10d91da1905dbe7920dc449351b32b54cdf4fa7d3db57681 = $this->env->getExtension("native_profiler");
        $__internal_09dcd27356d625eb10d91da1905dbe7920dc449351b32b54cdf4fa7d3db57681->enter($__internal_09dcd27356d625eb10d91da1905dbe7920dc449351b32b54cdf4fa7d3db57681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_09dcd27356d625eb10d91da1905dbe7920dc449351b32b54cdf4fa7d3db57681->leave($__internal_09dcd27356d625eb10d91da1905dbe7920dc449351b32b54cdf4fa7d3db57681_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_df359df3a9ba826edf6400b882f438d961a27f842058f9067ccfd80931003e80 = $this->env->getExtension("native_profiler");
        $__internal_df359df3a9ba826edf6400b882f438d961a27f842058f9067ccfd80931003e80->enter($__internal_df359df3a9ba826edf6400b882f438d961a27f842058f9067ccfd80931003e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_df359df3a9ba826edf6400b882f438d961a27f842058f9067ccfd80931003e80->leave($__internal_df359df3a9ba826edf6400b882f438d961a27f842058f9067ccfd80931003e80_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_597879c35c711071a90ed3278dc01d9fd8a06f277986d90fed933bb5f9ab0d31 = $this->env->getExtension("native_profiler");
        $__internal_597879c35c711071a90ed3278dc01d9fd8a06f277986d90fed933bb5f9ab0d31->enter($__internal_597879c35c711071a90ed3278dc01d9fd8a06f277986d90fed933bb5f9ab0d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_597879c35c711071a90ed3278dc01d9fd8a06f277986d90fed933bb5f9ab0d31->leave($__internal_597879c35c711071a90ed3278dc01d9fd8a06f277986d90fed933bb5f9ab0d31_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
