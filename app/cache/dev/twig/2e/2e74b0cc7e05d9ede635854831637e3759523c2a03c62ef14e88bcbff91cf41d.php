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
        $__internal_498379db9bd694991ecc5c8b94fad3870d8272bad331c815bb2beb4085b431b8 = $this->env->getExtension("native_profiler");
        $__internal_498379db9bd694991ecc5c8b94fad3870d8272bad331c815bb2beb4085b431b8->enter($__internal_498379db9bd694991ecc5c8b94fad3870d8272bad331c815bb2beb4085b431b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_498379db9bd694991ecc5c8b94fad3870d8272bad331c815bb2beb4085b431b8->leave($__internal_498379db9bd694991ecc5c8b94fad3870d8272bad331c815bb2beb4085b431b8_prof);

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
