<?php

/* AdonaiUnicoBundle:Default:docente.html.twig */
class __TwigTemplate_b398984ba1b3bb6ec979d3e1c2765fdd3215ce9f939356e6ad57e5abf3ddee4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AdonaiUnicoBundle:Default:docente.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<!-- Header -->
<div id=\"top-nav\" class=\"navbar navbar-inverse navbar-static-top\">
  <div class=\"container\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
        <span class=\"icon-toggle\"></span>
      </button>

      <a style=\"color: white;\" class=\"navbar-brand\" href=\"#\">Sistema de Gestión Académica - ADONAI</a>
    </div>

    <div class=\"navbar-collapse collapse\">
      <ul class=\"nav navbar-nav navbar-right\">
        <li class=\"dropdown\">
          <a style=\"color: white;\"  class=\"dropdown-toggle\" role=\"button\" data-toggle=\"dropdown\" href=\"#\">
            <i class=\"glyphicon glyphicon-user\"></i>  ";
        // line 19
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
        }
        // line 20
        echo "            <span class=\"caret\"></span></a>
            <ul id=\"g-account-menu\" class=\"dropdown-menu\" role=\"menu\">
              <li><a href=\"#\"><i class=\"glyphicon glyphicon-home\"></i>  Ir al Inicio</a></li>
              <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\"><i class=\"glyphicon glyphicon-lock\"></i> Desconectarse</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div><!-- /container -->
  </div>
  <!-- /Header -->

  <!-- Main -->
  <div class=\"container\">

    <!-- upper section -->
    <div class=\"row\">
      <div class=\"col-sm-3\">
        <!-- left -->
        <h3><i class=\"glyphicon glyphicon-menu-hamburger\"></i>    Menú</h3>
        <hr>

        <ul class=\"nav nav-pills nav-stacked\">
          <li class=\"nav-item\"><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("AdonaiUsuarios_docente");
        echo "\"><i class=\"glyphicon glyphicon-home\"></i>   Inicio</a></li>
          <li class=\"nav-item\"><a href=\"#\"><i class=\"glyphicon glyphicon-education\"></i>   Competencias</a></li>
          <li class=\"nav-item\"><a href=\"http://www.bootply.com/85861\"><i class=\"glyphicon glyphicon-th-list\"></i>   Planeadores</a></li>
          <li class=\"nav-item\"><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("AdonaiUsuarios_docente_notas");
        echo "\"><i class=\"glyphicon glyphicon-pencil\"></i>   Notas Estudiantes</a></li>
          <li class=\"nav-item\"><a href=\"#\"><i class=\"glyphicon glyphicon-folder-open\"></i>     Observador Grupo</a></li>
        </ul>
        
        <hr>

      </div><!-- /span-3 -->
      <div class=\"col-sm-9\">

        <!-- column 2 --> 
        <h3></i>Bienvenido al Panel de Gestión Docente: ";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["docente"]) ? $context["docente"] : null), "nomDoc", array()), "html", null, true);
        echo " </h3>  

        <hr>

        <div class=\"row\">
          <!-- center left--> 
          <div class=\"col-md-7\">
            <div class=\"panel panel-default\">
              <div class=\"panel-heading\"><h4><i class=\"glyphicon glyphicon-info-sign\"></i> Información General</h4></div>
              <div class=\"panel-body\">

                <h4 id=\"subtitulo\"><i class=\"glyphicon glyphicon-calendar\"></i>  Año Lectivo Actual: </h4><medium>";
        // line 67
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["al_actual"]) ? $context["al_actual"] : null), "fechaInicio", array()), "d/m/Y"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["al_actual"]) ? $context["al_actual"] : null), "fechaFinal", array()), "d/m/Y"), "html", null, true);
        echo "</medium>

                <h4 id=\"subtitulo\"><i class=\"glyphicon glyphicon-calendar\"></i>  Periodo Actual: </h4><medium>";
        // line 69
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["periodo_actual"]) ? $context["periodo_actual"] : null), "fechaInPer", array()), "d/m/Y"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["periodo_actual"]) ? $context["periodo_actual"] : null), "fechaFinPer", array()), "d/m/Y"), "html", null, true);
        echo " -- </medium><medium style=\"font-weight: bold;\">Número: </medium><medium>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["periodo_actual"]) ? $context["periodo_actual"] : null), "numero", array()), "html", null, true);
        echo "</medium>


              </div><!--/panel-body-->

              <div class=\"panel-heading\"><h4><i class=\"glyphicon glyphicon-eye-open\"></i>  Dirección de Grupo</h4></div>
              <div class=\"panel-body\">
                ";
        // line 76
        if (((isset($context["grupo_dir"]) ? $context["grupo_dir"] : null) != null)) {
            // line 77
            echo "                <medium>Actualmente eres el director de grupo de: <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grupo_dir"]) ? $context["grupo_dir"] : null), "grado", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grupo_dir"]) ? $context["grupo_dir"] : null), "nomenclatura", array()), "html", null, true);
            echo "</strong></medium><br/>
                <strong><medium><a href=\"#\">Ver lista de estudiantes</a></medium></strong>
                ";
        }
        // line 80
        echo "              </div><!--/panel-body-->
            </div><!--/panel-->                     

          </div><!--/col-->

          <!--center-right-->
          <div class=\"col-md-5\">
            <img style=\"margin: 0 auto;\" class=\"img-responsive\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/logo2.png"), "html", null, true);
        echo "\">

            <hr>
            <p class=\"text-justify\">
              Bienvenido al panel de docentes, aqui puedes realizar las acciones de registro y modificacion de tus planeadores académicos, de igual manera puedes registrar tus listas de notas para generar los boletines académicos cuando el administrador habilite la opción y si eres director de grupo, tienes la posibilidad de registrar los incidentes del 
              observador de clase.
            </p>

          </div><!--/col-span-6-->

        </div><!--/row-->
      </div><!--/col-span-9-->

    </div><!--/row-->
    <!-- /upper section -->

    <hr>
    <!-- lower section -->
    <div class=\"row\">
      <div class=\"col-md-7\">
        <strong><i class=\"glyphicon glyphicon-list-alt\"></i>  Lista de Asignaciones</strong>
        <hr>
        <div class=\"table-responsive\">
          <table class=\"table table-hover text-center\">
            <thead>
              <tr>
                <th>ID</th>
                <th>Asignatura</th>
                <th>Docente</th>
                <th>Grupo</th>
                <th>Año Lectivo</th>
                <th>Estudiantes</th>
              </tr>
            </thead>
            <tbody id=\"body_asignaciones\">
              ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lista_asignaciones"]) ? $context["lista_asignaciones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["asignacion"]) {
            // line 123
            echo "              <tr id=\"asignacion_activa_";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["asignacion"], "grupo", array()), "idGrupo", array()), "html", null, true);
            echo "\">
                <td>";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($context["asignacion"], "idAsignacion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["asignacion"], "asignatura", array()), "nomAsig", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["asignacion"], "docente", array()), "nomDoc", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["asignacion"], "grupo", array()), "grado", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["asignacion"], "grupo", array()), "nomenclatura", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 128
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["asignacion"], "grupo", array()), "aLectivo", array()), "fechaInicio", array()), "d/m/Y"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["asignacion"], "grupo", array()), "aLectivo", array()), "fechaFinal", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>
                  <button id=\"grupo";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["asignacion"], "grupo", array()), "idGrupo", array()), "html", null, true);
            echo "\" onclick=\"verListaMats(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["asignacion"], "grupo", array()), "idGrupo", array()), "html", null, true);
            echo ")\" type=\"button\" class=\"btn btn-info glyphicon glyphicon-search\"></button>
                </td>
              </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asignacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "            </tbody>
          </table>
        </div> 
        <div class=\"alert alert-info\">
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
          Recuerda <a href=\"#\">Cerrar Sesión</a> cuando termines tu trabajo.
        </div>   
      </div>
      <div class=\"col-md-5  table-responsive\">
        <strong><i class=\"glyphicon glyphicon-list-alt\"></i>  Lista de Estudiantes</strong>  
        <hr> 
        <div id=\"listaEst\" class=\"col-md-12\">
          <div class=\"table-responsive\">
          <table id=\"tabla_mats\" class=\"table table-hover\">
            <thead id=\"head_tabla_mats\" class=\"hidden\">
              <tr>
                <th>ID Matricula</th>
                <th>Nombre Estudiante</th>
                <th>Grupo</th>
              </tr>
            </thead>
            <tbody id=\"body_tabla_mats\">
            </tbody>
          </table>
          </div>
        </div>  
      </div>
    </div> <!-- /Row -->

  </div><!--/container-->
  <!-- /Main -->


  <footer class=\"text-center\">Copyright &copy; 2016 | Colegio Bautista Ebenezer - <a href=\"http://google.com\"><strong>Creador: Carlos Caicedo</strong></a></footer>

  <!-- script references -->
  ";
        // line 170
        $this->displayBlock('scripts', $context, $blocks);
        // line 219
        echo "  ";
    }

    // line 170
    public function block_scripts($context, array $blocks = array())
    {
        // line 171
        echo "  <script>

  \$('#body_tabla_mats').append(\"<h4>\"+\"<span class='label label-info'>\"+\"Selecciona alguna lista de la tabla asignaciones\"+\"</span>\"+\"</h4>\");

  function verListaMats(id_grupo){
    \$.ajax({
      url: \"";
        // line 177
        echo $this->env->getExtension('routing')->getPath("buscarListaMats");
        echo "\",
      data: ({'id': id_grupo }),
      method: 'POST',
      dataType: \"json\",
      success: function (data) {
        if (data == null) {
          alert(\"No se ha encontrado Datos\");
        } else {
          \$('#head_tabla_mats').removeClass(\"hidden\");
          \$('#body_tabla_mats').empty();
          \$('#body_tabla_mats').append(rowEntity(data));

          ";
        // line 189
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lista_asignaciones"]) ? $context["lista_asignaciones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["asignacion"]) {
            // line 190
            echo "          if(\$('#asignacion_activa_";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["asignacion"], "grupo", array()), "idGrupo", array()), "html", null, true);
            echo "').hasClass(\"info\")){
            \$('#asignacion_activa_";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["asignacion"], "grupo", array()), "idGrupo", array()), "html", null, true);
            echo "').removeClass(\"info\");
          }
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asignacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "          \$('#asignacion_activa_' + id_grupo).addClass(\"info\");
          
        }
      }
    });

  }

  function rowEntity(data) {
    var matriculasProcesar = new Array();

    //obviamente esto se hace luego de realizar la busqueda en la bd, en este caso \$encontrada representa el usuario encontrado
    for(i = 0; i < data.length; i++){
      fila = \"<tr>\" +
      \"<td>\" + data[i][\"id\"] + \"</td>\" +
      \"<td>\" + data[i][\"nombre\"] + \"</td>\" +
      \"<td>\" + data[i][\"grado\"] +' - '+ data[i][\"grupo\"] + \"</td>\" +
      \"</tr>\";
      matriculasProcesar.push(fila);
    }
    return matriculasProcesar;
  }

  </script>
  ";
    }

    public function getTemplateName()
    {
        return "AdonaiUnicoBundle:Default:docente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 194,  318 => 191,  313 => 190,  309 => 189,  294 => 177,  286 => 171,  283 => 170,  279 => 219,  277 => 170,  239 => 134,  227 => 130,  220 => 128,  214 => 127,  210 => 126,  206 => 125,  202 => 124,  197 => 123,  193 => 122,  155 => 87,  146 => 80,  137 => 77,  135 => 76,  121 => 69,  114 => 67,  100 => 56,  87 => 46,  81 => 43,  58 => 23,  53 => 20,  49 => 19,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <!-- Header -->*/
/* <div id="top-nav" class="navbar navbar-inverse navbar-static-top">*/
/*   <div class="container">*/
/*     <div class="navbar-header">*/
/*       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*         <span class="icon-toggle"></span>*/
/*       </button>*/
/* */
/*       <a style="color: white;" class="navbar-brand" href="#">Sistema de Gestión Académica - ADONAI</a>*/
/*     </div>*/
/* */
/*     <div class="navbar-collapse collapse">*/
/*       <ul class="nav navbar-nav navbar-right">*/
/*         <li class="dropdown">*/
/*           <a style="color: white;"  class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">*/
/*             <i class="glyphicon glyphicon-user"></i>  {% if app.user %}{{ app.user.username }}{% endif %}*/
/*             <span class="caret"></span></a>*/
/*             <ul id="g-account-menu" class="dropdown-menu" role="menu">*/
/*               <li><a href="#"><i class="glyphicon glyphicon-home"></i>  Ir al Inicio</a></li>*/
/*               <li><a href="{{ path('logout') }}"><i class="glyphicon glyphicon-lock"></i> Desconectarse</a></li>*/
/*             </ul>*/
/*           </li>*/
/*         </ul>*/
/*       </div>*/
/*     </div><!-- /container -->*/
/*   </div>*/
/*   <!-- /Header -->*/
/* */
/*   <!-- Main -->*/
/*   <div class="container">*/
/* */
/*     <!-- upper section -->*/
/*     <div class="row">*/
/*       <div class="col-sm-3">*/
/*         <!-- left -->*/
/*         <h3><i class="glyphicon glyphicon-menu-hamburger"></i>    Menú</h3>*/
/*         <hr>*/
/* */
/*         <ul class="nav nav-pills nav-stacked">*/
/*           <li class="nav-item"><a href="{{ path('AdonaiUsuarios_docente') }}"><i class="glyphicon glyphicon-home"></i>   Inicio</a></li>*/
/*           <li class="nav-item"><a href="#"><i class="glyphicon glyphicon-education"></i>   Competencias</a></li>*/
/*           <li class="nav-item"><a href="http://www.bootply.com/85861"><i class="glyphicon glyphicon-th-list"></i>   Planeadores</a></li>*/
/*           <li class="nav-item"><a href="{{ path('AdonaiUsuarios_docente_notas') }}"><i class="glyphicon glyphicon-pencil"></i>   Notas Estudiantes</a></li>*/
/*           <li class="nav-item"><a href="#"><i class="glyphicon glyphicon-folder-open"></i>     Observador Grupo</a></li>*/
/*         </ul>*/
/*         */
/*         <hr>*/
/* */
/*       </div><!-- /span-3 -->*/
/*       <div class="col-sm-9">*/
/* */
/*         <!-- column 2 --> */
/*         <h3></i>Bienvenido al Panel de Gestión Docente: {{ docente.nomDoc }} </h3>  */
/* */
/*         <hr>*/
/* */
/*         <div class="row">*/
/*           <!-- center left--> */
/*           <div class="col-md-7">*/
/*             <div class="panel panel-default">*/
/*               <div class="panel-heading"><h4><i class="glyphicon glyphicon-info-sign"></i> Información General</h4></div>*/
/*               <div class="panel-body">*/
/* */
/*                 <h4 id="subtitulo"><i class="glyphicon glyphicon-calendar"></i>  Año Lectivo Actual: </h4><medium>{{ al_actual.fechaInicio|date("d/m/Y") }} - {{ al_actual.fechaFinal|date("d/m/Y") }}</medium>*/
/* */
/*                 <h4 id="subtitulo"><i class="glyphicon glyphicon-calendar"></i>  Periodo Actual: </h4><medium>{{ periodo_actual.fechaInPer|date("d/m/Y") }} - {{ periodo_actual.fechaFinPer|date("d/m/Y") }} -- </medium><medium style="font-weight: bold;">Número: </medium><medium>{{ periodo_actual.numero }}</medium>*/
/* */
/* */
/*               </div><!--/panel-body-->*/
/* */
/*               <div class="panel-heading"><h4><i class="glyphicon glyphicon-eye-open"></i>  Dirección de Grupo</h4></div>*/
/*               <div class="panel-body">*/
/*                 {% if grupo_dir != null %}*/
/*                 <medium>Actualmente eres el director de grupo de: <strong>{{ grupo_dir.grado }}-{{ grupo_dir.nomenclatura }}</strong></medium><br/>*/
/*                 <strong><medium><a href="#">Ver lista de estudiantes</a></medium></strong>*/
/*                 {% endif %}*/
/*               </div><!--/panel-body-->*/
/*             </div><!--/panel-->                     */
/* */
/*           </div><!--/col-->*/
/* */
/*           <!--center-right-->*/
/*           <div class="col-md-5">*/
/*             <img style="margin: 0 auto;" class="img-responsive" src="{{ asset('public/img/logo2.png') }}">*/
/* */
/*             <hr>*/
/*             <p class="text-justify">*/
/*               Bienvenido al panel de docentes, aqui puedes realizar las acciones de registro y modificacion de tus planeadores académicos, de igual manera puedes registrar tus listas de notas para generar los boletines académicos cuando el administrador habilite la opción y si eres director de grupo, tienes la posibilidad de registrar los incidentes del */
/*               observador de clase.*/
/*             </p>*/
/* */
/*           </div><!--/col-span-6-->*/
/* */
/*         </div><!--/row-->*/
/*       </div><!--/col-span-9-->*/
/* */
/*     </div><!--/row-->*/
/*     <!-- /upper section -->*/
/* */
/*     <hr>*/
/*     <!-- lower section -->*/
/*     <div class="row">*/
/*       <div class="col-md-7">*/
/*         <strong><i class="glyphicon glyphicon-list-alt"></i>  Lista de Asignaciones</strong>*/
/*         <hr>*/
/*         <div class="table-responsive">*/
/*           <table class="table table-hover text-center">*/
/*             <thead>*/
/*               <tr>*/
/*                 <th>ID</th>*/
/*                 <th>Asignatura</th>*/
/*                 <th>Docente</th>*/
/*                 <th>Grupo</th>*/
/*                 <th>Año Lectivo</th>*/
/*                 <th>Estudiantes</th>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody id="body_asignaciones">*/
/*               {% for asignacion in lista_asignaciones %}*/
/*               <tr id="asignacion_activa_{{ asignacion.grupo.idGrupo }}">*/
/*                 <td>{{ asignacion.idAsignacion }}</td>*/
/*                 <td>{{ asignacion.asignatura.nomAsig }}</td>*/
/*                 <td>{{ asignacion.docente.nomDoc }}</td>*/
/*                 <td>{{ asignacion.grupo.grado }} - {{ asignacion.grupo.nomenclatura }}</td>*/
/*                 <td>{{ asignacion.grupo.aLectivo.fechaInicio|date("d/m/Y") }} - {{ asignacion.grupo.aLectivo.fechaFinal|date("d/m/Y") }}</td>*/
/*                 <td>*/
/*                   <button id="grupo{{ asignacion.grupo.idGrupo }}" onclick="verListaMats({{ asignacion.grupo.idGrupo }})" type="button" class="btn btn-info glyphicon glyphicon-search"></button>*/
/*                 </td>*/
/*               </tr>*/
/*               {% endfor %}*/
/*             </tbody>*/
/*           </table>*/
/*         </div> */
/*         <div class="alert alert-info">*/
/*           <button type="button" class="close" data-dismiss="alert">×</button>*/
/*           Recuerda <a href="#">Cerrar Sesión</a> cuando termines tu trabajo.*/
/*         </div>   */
/*       </div>*/
/*       <div class="col-md-5  table-responsive">*/
/*         <strong><i class="glyphicon glyphicon-list-alt"></i>  Lista de Estudiantes</strong>  */
/*         <hr> */
/*         <div id="listaEst" class="col-md-12">*/
/*           <div class="table-responsive">*/
/*           <table id="tabla_mats" class="table table-hover">*/
/*             <thead id="head_tabla_mats" class="hidden">*/
/*               <tr>*/
/*                 <th>ID Matricula</th>*/
/*                 <th>Nombre Estudiante</th>*/
/*                 <th>Grupo</th>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody id="body_tabla_mats">*/
/*             </tbody>*/
/*           </table>*/
/*           </div>*/
/*         </div>  */
/*       </div>*/
/*     </div> <!-- /Row -->*/
/* */
/*   </div><!--/container-->*/
/*   <!-- /Main -->*/
/* */
/* */
/*   <footer class="text-center">Copyright &copy; 2016 | Colegio Bautista Ebenezer - <a href="http://google.com"><strong>Creador: Carlos Caicedo</strong></a></footer>*/
/* */
/*   <!-- script references -->*/
/*   {% block scripts %}*/
/*   <script>*/
/* */
/*   $('#body_tabla_mats').append("<h4>"+"<span class='label label-info'>"+"Selecciona alguna lista de la tabla asignaciones"+"</span>"+"</h4>");*/
/* */
/*   function verListaMats(id_grupo){*/
/*     $.ajax({*/
/*       url: "{{ path('buscarListaMats') }}",*/
/*       data: ({'id': id_grupo }),*/
/*       method: 'POST',*/
/*       dataType: "json",*/
/*       success: function (data) {*/
/*         if (data == null) {*/
/*           alert("No se ha encontrado Datos");*/
/*         } else {*/
/*           $('#head_tabla_mats').removeClass("hidden");*/
/*           $('#body_tabla_mats').empty();*/
/*           $('#body_tabla_mats').append(rowEntity(data));*/
/* */
/*           {% for asignacion in lista_asignaciones %}*/
/*           if($('#asignacion_activa_{{ asignacion.grupo.idGrupo }}').hasClass("info")){*/
/*             $('#asignacion_activa_{{ asignacion.grupo.idGrupo }}').removeClass("info");*/
/*           }*/
/*           {% endfor %}*/
/*           $('#asignacion_activa_' + id_grupo).addClass("info");*/
/*           */
/*         }*/
/*       }*/
/*     });*/
/* */
/*   }*/
/* */
/*   function rowEntity(data) {*/
/*     var matriculasProcesar = new Array();*/
/* */
/*     //obviamente esto se hace luego de realizar la busqueda en la bd, en este caso $encontrada representa el usuario encontrado*/
/*     for(i = 0; i < data.length; i++){*/
/*       fila = "<tr>" +*/
/*       "<td>" + data[i]["id"] + "</td>" +*/
/*       "<td>" + data[i]["nombre"] + "</td>" +*/
/*       "<td>" + data[i]["grado"] +' - '+ data[i]["grupo"] + "</td>" +*/
/*       "</tr>";*/
/*       matriculasProcesar.push(fila);*/
/*     }*/
/*     return matriculasProcesar;*/
/*   }*/
/* */
/*   </script>*/
/*   {% endblock %}*/
/*   {% endblock %}*/
/* */