<?php

/* notas/new.html.twig */
class __TwigTemplate_702e23de2193b21e29278e3734a5e97c0726b24222eac654dc4319654bf64179 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "notas/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69a9696a7d13f0b8e06f587113ca890ef1547513c6fe1d01f248b21196f40785 = $this->env->getExtension("native_profiler");
        $__internal_69a9696a7d13f0b8e06f587113ca890ef1547513c6fe1d01f248b21196f40785->enter($__internal_69a9696a7d13f0b8e06f587113ca890ef1547513c6fe1d01f248b21196f40785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "notas/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69a9696a7d13f0b8e06f587113ca890ef1547513c6fe1d01f248b21196f40785->leave($__internal_69a9696a7d13f0b8e06f587113ca890ef1547513c6fe1d01f248b21196f40785_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_26528f513f0663f4bc4bff86ee35db61ed16ccb0e49cc7e2e57a979fdcbe4b0a = $this->env->getExtension("native_profiler");
        $__internal_26528f513f0663f4bc4bff86ee35db61ed16ccb0e49cc7e2e57a979fdcbe4b0a->enter($__internal_26528f513f0663f4bc4bff86ee35db61ed16ccb0e49cc7e2e57a979fdcbe4b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Notas creation</h1>

<div class=\"row\">
    <div class=\"col-md-12\">
        <form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("notas_new");
        echo "\" method=\"POST\" novalidate role=\"form\">
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "periodo", array()), 'label');
        echo "
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "periodo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            
            ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "asignacion", array()), 'label');
        echo "
            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "asignacion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matricula", array()), 'label');
        echo "
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matricula", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
            <br/>
            <button type=\"submit\" class=\"btn btn-success\">
                Guardar
            </button>
        </form>
    </div>
</div>

";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 87
        echo "<ul>
    <li>
        <a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("notas_index");
        echo "\">Back to the list</a>
    </li>
</ul>
";
        
        $__internal_26528f513f0663f4bc4bff86ee35db61ed16ccb0e49cc7e2e57a979fdcbe4b0a->leave($__internal_26528f513f0663f4bc4bff86ee35db61ed16ccb0e49cc7e2e57a979fdcbe4b0a_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_db59067990e59c618a6d56aab65d90c5f9b9788f5fe303e1b4aca5141008d12d = $this->env->getExtension("native_profiler");
        $__internal_db59067990e59c618a6d56aab65d90c5f9b9788f5fe303e1b4aca5141008d12d->enter($__internal_db59067990e59c618a6d56aab65d90c5f9b9788f5fe303e1b4aca5141008d12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script>
\$(function(){
    selectMatricula()
    selectCompetencia();
    \$(\"#nota_asignacion\").change(function(){
        var data = {
            asignacion_id: \$(this).val()
        };
        if (data[\"asignacion_id\"] === \"\") {
          selectMatricula();
          selectCompetencia();
      } else {
        \$.ajax({
            type: 'post',
            url: '";
        // line 44
        echo $this->env->getExtension('routing')->getPath("select_matriculas");
        echo "',
            data: data,
            success: function(data) {
                var \$matricula_selector = \$('#nota_matricula');
                \$matricula_selector.removeAttr(\"disabled\");
                \$matricula_selector.html('<option>-- Seleccionar un Estudiante --</option>');

                for (var i = 0, total = data.length; i < total; i++) {
                    \$matricula_selector.append('<option value=\"' + data[i][\"id\"]  + '\">'+ data[i][\"id\"]  +' - '+ data[i][\"nombre\"] +'</option>');
                }
            }
        });
        \$.ajax({
            type: 'post',
            url: '";
        // line 58
        echo $this->env->getExtension('routing')->getPath("select_competencias");
        echo "',
            data: data,
            success: function(data) {
                var \$competencia_selector = \$('#nota_competencia');
                \$competencia_selector.removeAttr(\"disabled\");
                \$competencia_selector.html('<option>-- Seleccionar una Competencia --</option>');

                for (var i = 0, total = data.length; i < total; i++) {
                    \$competencia_selector.append('<option value=\"' + data[i][\"id\"]  + '\">'+ data[i][\"id\"]  +' - '+ data[i][\"contenido\"] +'</option>');
                }
            }
        });
    }
});

});

function selectMatricula(){
    \$(\"#nota_matricula\").attr('disabled', 'disabled');
    \$('#nota_matricula').html('<option>-- Seleccione una Asignacion --</option>');
}

function selectCompetencia(){
    \$(\"#nota_competencia\").attr('disabled', 'disabled');
    \$('#nota_competencia').html('<option>-- Seleccione una Asignacion --</option>');
}

</script>
";
        
        $__internal_db59067990e59c618a6d56aab65d90c5f9b9788f5fe303e1b4aca5141008d12d->leave($__internal_db59067990e59c618a6d56aab65d90c5f9b9788f5fe303e1b4aca5141008d12d_prof);

    }

    public function getTemplateName()
    {
        return "notas/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 58,  136 => 44,  118 => 29,  113 => 28,  107 => 27,  96 => 89,  92 => 87,  90 => 27,  78 => 18,  73 => 16,  69 => 15,  64 => 13,  60 => 12,  55 => 10,  51 => 9,  47 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <h1>Notas creation</h1>*/
/* */
/* <div class="row">*/
/*     <div class="col-md-12">*/
/*         <form action="{{ path('notas_new') }}" method="POST" novalidate role="form">*/
/*             {{ form_label(form.periodo) }}*/
/*             {{ form_widget(form.periodo, {'attr': {'class':'form-control'}})}}*/
/*             */
/*             {{ form_label(form.asignacion) }}*/
/*             {{ form_widget(form.asignacion, {'attr': {'class':'form-control'}})}}*/
/* */
/*             {{ form_label(form.matricula) }}*/
/*             {{ form_widget(form.matricula, {'attr': {'class':'form-control'}})}}*/
/* */
/*             {{ form_rest(form) }}*/
/*             <br/>*/
/*             <button type="submit" class="btn btn-success">*/
/*                 Guardar*/
/*             </button>*/
/*         </form>*/
/*     </div>*/
/* </div>*/
/* */
/* {% block javascripts %}*/
/* <script src="{{ asset('public/js/jquery.min.js') }}"></script>*/
/* <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>*/
/* <script>*/
/* $(function(){*/
/*     selectMatricula()*/
/*     selectCompetencia();*/
/*     $("#nota_asignacion").change(function(){*/
/*         var data = {*/
/*             asignacion_id: $(this).val()*/
/*         };*/
/*         if (data["asignacion_id"] === "") {*/
/*           selectMatricula();*/
/*           selectCompetencia();*/
/*       } else {*/
/*         $.ajax({*/
/*             type: 'post',*/
/*             url: '{{ path("select_matriculas") }}',*/
/*             data: data,*/
/*             success: function(data) {*/
/*                 var $matricula_selector = $('#nota_matricula');*/
/*                 $matricula_selector.removeAttr("disabled");*/
/*                 $matricula_selector.html('<option>-- Seleccionar un Estudiante --</option>');*/
/* */
/*                 for (var i = 0, total = data.length; i < total; i++) {*/
/*                     $matricula_selector.append('<option value="' + data[i]["id"]  + '">'+ data[i]["id"]  +' - '+ data[i]["nombre"] +'</option>');*/
/*                 }*/
/*             }*/
/*         });*/
/*         $.ajax({*/
/*             type: 'post',*/
/*             url: '{{ path("select_competencias") }}',*/
/*             data: data,*/
/*             success: function(data) {*/
/*                 var $competencia_selector = $('#nota_competencia');*/
/*                 $competencia_selector.removeAttr("disabled");*/
/*                 $competencia_selector.html('<option>-- Seleccionar una Competencia --</option>');*/
/* */
/*                 for (var i = 0, total = data.length; i < total; i++) {*/
/*                     $competencia_selector.append('<option value="' + data[i]["id"]  + '">'+ data[i]["id"]  +' - '+ data[i]["contenido"] +'</option>');*/
/*                 }*/
/*             }*/
/*         });*/
/*     }*/
/* });*/
/* */
/* });*/
/* */
/* function selectMatricula(){*/
/*     $("#nota_matricula").attr('disabled', 'disabled');*/
/*     $('#nota_matricula').html('<option>-- Seleccione una Asignacion --</option>');*/
/* }*/
/* */
/* function selectCompetencia(){*/
/*     $("#nota_competencia").attr('disabled', 'disabled');*/
/*     $('#nota_competencia').html('<option>-- Seleccione una Asignacion --</option>');*/
/* }*/
/* */
/* </script>*/
/* {% endblock %}*/
/* <ul>*/
/*     <li>*/
/*         <a href="{{ path('notas_index') }}">Back to the list</a>*/
/*     </li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
