<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_3e30f7f15f20edf32275b784a453f47dc8c506a916684b7b20d3d5bd7e2db35e extends Twig_Template
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
        $__internal_74fd0bd8c1cdc6d3bb9fc161d94c3ad853fe45d1f6114391822c5d69c5c8c0a1 = $this->env->getExtension("native_profiler");
        $__internal_74fd0bd8c1cdc6d3bb9fc161d94c3ad853fe45d1f6114391822c5d69c5c8c0a1->enter($__internal_74fd0bd8c1cdc6d3bb9fc161d94c3ad853fe45d1f6114391822c5d69c5c8c0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_74fd0bd8c1cdc6d3bb9fc161d94c3ad853fe45d1f6114391822c5d69c5c8c0a1->leave($__internal_74fd0bd8c1cdc6d3bb9fc161d94c3ad853fe45d1f6114391822c5d69c5c8c0a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
