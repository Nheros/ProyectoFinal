<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_da4fdfb277465762ffc60ca6a5bc22ef959afc6845abf29fb608a0c556cdcab2 extends Twig_Template
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
        $__internal_fdd0da9853a2cf5ab90e2a98552dc40fac9d0d208b9ad53a4856108f41942de7 = $this->env->getExtension("native_profiler");
        $__internal_fdd0da9853a2cf5ab90e2a98552dc40fac9d0d208b9ad53a4856108f41942de7->enter($__internal_fdd0da9853a2cf5ab90e2a98552dc40fac9d0d208b9ad53a4856108f41942de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_fdd0da9853a2cf5ab90e2a98552dc40fac9d0d208b9ad53a4856108f41942de7->leave($__internal_fdd0da9853a2cf5ab90e2a98552dc40fac9d0d208b9ad53a4856108f41942de7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
