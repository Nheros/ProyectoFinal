<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_6103f88e7e1209116243160a7edbf8ce95c5972bf34b412d04901aae36883de4 extends Twig_Template
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
        $__internal_16b95beb76f44839bc5ce18966e53da249e80d48c4f0f92d3d517d3d2c9977c0 = $this->env->getExtension("native_profiler");
        $__internal_16b95beb76f44839bc5ce18966e53da249e80d48c4f0f92d3d517d3d2c9977c0->enter($__internal_16b95beb76f44839bc5ce18966e53da249e80d48c4f0f92d3d517d3d2c9977c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_16b95beb76f44839bc5ce18966e53da249e80d48c4f0f92d3d517d3d2c9977c0->leave($__internal_16b95beb76f44839bc5ce18966e53da249e80d48c4f0f92d3d517d3d2c9977c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
