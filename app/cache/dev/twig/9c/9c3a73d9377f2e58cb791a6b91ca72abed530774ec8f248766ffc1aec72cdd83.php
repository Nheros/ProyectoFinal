<?php

/* base.html.twig */
class __TwigTemplate_23b3576cccc4c935ca7dc55b64786e23368edce5fc63d852939f39a11fd2890f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b837be4af0cb723b22eb433dcf28f2c2773370b61cb2b36be48be7435ef6f985 = $this->env->getExtension("native_profiler");
        $__internal_b837be4af0cb723b22eb433dcf28f2c2773370b61cb2b36be48be7435ef6f985->enter($__internal_b837be4af0cb723b22eb433dcf28f2c2773370b61cb2b36be48be7435ef6f985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
  <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "  ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "  <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/icono.ico"), "html", null, true);
        echo "\" />
</head>
<body>
  ";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "</body>
</html>
";
        
        $__internal_b837be4af0cb723b22eb433dcf28f2c2773370b61cb2b36be48be7435ef6f985->leave($__internal_b837be4af0cb723b22eb433dcf28f2c2773370b61cb2b36be48be7435ef6f985_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d45f36fb22600ac7f70f285a6c1c0a2b32bc43604fb23c707befe5a50a9698e = $this->env->getExtension("native_profiler");
        $__internal_3d45f36fb22600ac7f70f285a6c1c0a2b32bc43604fb23c707befe5a50a9698e->enter($__internal_3d45f36fb22600ac7f70f285a6c1c0a2b32bc43604fb23c707befe5a50a9698e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sistema de Gestión Académica";
        
        $__internal_3d45f36fb22600ac7f70f285a6c1c0a2b32bc43604fb23c707befe5a50a9698e->leave($__internal_3d45f36fb22600ac7f70f285a6c1c0a2b32bc43604fb23c707befe5a50a9698e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_30420df79f53b134bd9ba31d449b9a9029bfc3d1d8e6381437db77421d75029a = $this->env->getExtension("native_profiler");
        $__internal_30420df79f53b134bd9ba31d449b9a9029bfc3d1d8e6381437db77421d75029a->enter($__internal_30420df79f53b134bd9ba31d449b9a9029bfc3d1d8e6381437db77421d75029a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/panel/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  ";
        
        $__internal_30420df79f53b134bd9ba31d449b9a9029bfc3d1d8e6381437db77421d75029a->leave($__internal_30420df79f53b134bd9ba31d449b9a9029bfc3d1d8e6381437db77421d75029a_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0c51d324c62155626756167bdc10f8659acab98ef028ad4c472d0395b1fa7041 = $this->env->getExtension("native_profiler");
        $__internal_0c51d324c62155626756167bdc10f8659acab98ef028ad4c472d0395b1fa7041->enter($__internal_0c51d324c62155626756167bdc10f8659acab98ef028ad4c472d0395b1fa7041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.maskedinput.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
  ";
        
        $__internal_0c51d324c62155626756167bdc10f8659acab98ef028ad4c472d0395b1fa7041->leave($__internal_0c51d324c62155626756167bdc10f8659acab98ef028ad4c472d0395b1fa7041_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c44e1e52555e79ced74c99360a6d607f321cb4ccb0ddfac3141f3dabb103413 = $this->env->getExtension("native_profiler");
        $__internal_4c44e1e52555e79ced74c99360a6d607f321cb4ccb0ddfac3141f3dabb103413->enter($__internal_4c44e1e52555e79ced74c99360a6d607f321cb4ccb0ddfac3141f3dabb103413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "
  ";
        
        $__internal_4c44e1e52555e79ced74c99360a6d607f321cb4ccb0ddfac3141f3dabb103413->leave($__internal_4c44e1e52555e79ced74c99360a6d607f321cb4ccb0ddfac3141f3dabb103413_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 25,  130 => 24,  121 => 19,  117 => 18,  113 => 17,  109 => 16,  104 => 15,  98 => 14,  89 => 12,  85 => 11,  80 => 10,  74 => 9,  62 => 7,  53 => 27,  51 => 24,  44 => 21,  41 => 14,  39 => 9,  34 => 7,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*   <meta http-equiv="content-type" content="text/html; charset=UTF-8">*/
/*   <meta charset="utf-8">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">*/
/*   <title>{% block title %}Sistema de Gestión Académica{% endblock %}</title>*/
/* */
/*   {% block stylesheets %}*/
/*   <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet" />*/
/*   <link href="{{ asset('public/css/panel/styles.css') }}" rel="stylesheet" />*/
/*   <link href="{{ asset('public/css/font-awesome.css') }}" rel="stylesheet" />*/
/*   {% endblock %}*/
/*   {% block javascripts %}*/
/*   <script src="{{ asset('public/js/jquery.js') }}"></script>*/
/*   <script src="{{ asset('public/js/jquery.maskedinput.js') }}"></script>*/
/*   <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>*/
/*   <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*   <script src="{{ path('fos_js_routing_js', {"callback": "fos.Router.setData"}) }}"></script>*/
/*   {% endblock %}*/
/*   <link rel="icon" type="image/x-icon" href="{{ asset('public/img/icono.ico') }}" />*/
/* </head>*/
/* <body>*/
/*   {% block body %}*/
/* */
/*   {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
