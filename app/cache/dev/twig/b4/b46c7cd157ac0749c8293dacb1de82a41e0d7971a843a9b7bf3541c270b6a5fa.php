<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_c4829515fcbc3c8c26db2efbdf04b4a137645262028e79b63d54e44e1fd8e9b6 extends Twig_Template
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
        $__internal_c45f8c5ef867aa954c3e79b8122fb9f4f27c481237cbff76bb730f31d23aeed5 = $this->env->getExtension("native_profiler");
        $__internal_c45f8c5ef867aa954c3e79b8122fb9f4f27c481237cbff76bb730f31d23aeed5->enter($__internal_c45f8c5ef867aa954c3e79b8122fb9f4f27c481237cbff76bb730f31d23aeed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c45f8c5ef867aa954c3e79b8122fb9f4f27c481237cbff76bb730f31d23aeed5->leave($__internal_c45f8c5ef867aa954c3e79b8122fb9f4f27c481237cbff76bb730f31d23aeed5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
