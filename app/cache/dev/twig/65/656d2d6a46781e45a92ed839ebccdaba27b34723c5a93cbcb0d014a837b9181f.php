<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_892e0b7304fa2ad999e94c05dc87f0f694ab94d5189108ea5afe1b1cc434b314 extends Twig_Template
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
        $__internal_686af84e2ea89180243f9e43d78693e4a658a3fcb70a68ea760c77b038eee3c1 = $this->env->getExtension("native_profiler");
        $__internal_686af84e2ea89180243f9e43d78693e4a658a3fcb70a68ea760c77b038eee3c1->enter($__internal_686af84e2ea89180243f9e43d78693e4a658a3fcb70a68ea760c77b038eee3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_686af84e2ea89180243f9e43d78693e4a658a3fcb70a68ea760c77b038eee3c1->leave($__internal_686af84e2ea89180243f9e43d78693e4a658a3fcb70a68ea760c77b038eee3c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
