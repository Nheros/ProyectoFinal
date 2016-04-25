<?php

/* @AdonaiUnico/Security/login.html.twig */
class __TwigTemplate_5f9a85e6282dc8a79347948ca7a848d18cd748c737b262301d251128ba3e258d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de175f250440f976e4692b9735c8b25732ae5b3d0672549e6b8e1b8532b5a000 = $this->env->getExtension("native_profiler");
        $__internal_de175f250440f976e4692b9735c8b25732ae5b3d0672549e6b8e1b8532b5a000->enter($__internal_de175f250440f976e4692b9735c8b25732ae5b3d0672549e6b8e1b8532b5a000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AdonaiUnico/Security/login.html.twig"));

        // line 1
        echo "<html>
<head>
\t";
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "</head>
<body>
\t";
        // line 9
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 10
            echo "\t<div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
\t";
        }
        // line 12
        echo "
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<center><img class=\"img-responsive\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/logo2.png"), "html", null, true);
        echo "\" /></center>
\t\t\t\t<br/>
\t\t\t\t<div class=\"col-md-6 col-md-offset-3\">
\t\t\t\t\t<div class=\"panel panel-login\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t<a class=\"active\" id=\"login-form-link\">Sistema de Registro Académico - ADONAI</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t<form id=\"login-form\" action=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" role=\"form\" style=\"display: block;\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"_username\" id=\"username\" tabindex=\"1\" class=\"form-control\" placeholder=\"Usuario\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"_password\" id=\"password\" tabindex=\"2\" class=\"form-control\" placeholder=\"Contraseña\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group text-center\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" tabindex=\"3\" class=\"\" name=\"remember\" id=\"remember\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"remember\">Recordar</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-sm-offset-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"login-submit\" id=\"login-submit\" tabindex=\"4\" class=\"form-control btn btn-login\" value=\"Ingresar\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" tabindex=\"5\" class=\"forgot-password\">Olvidaste tu contraseña?</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 67
        $this->displayBlock('javascripts', $context, $blocks);
        // line 71
        echo "</body>
</html>

";
        
        $__internal_de175f250440f976e4692b9735c8b25732ae5b3d0672549e6b8e1b8532b5a000->leave($__internal_de175f250440f976e4692b9735c8b25732ae5b3d0672549e6b8e1b8532b5a000_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b696ddf1970a1bddabed9dcccfb86d7ed5084df43369a984cf4d09f723d8e582 = $this->env->getExtension("native_profiler");
        $__internal_b696ddf1970a1bddabed9dcccfb86d7ed5084df43369a984cf4d09f723d8e582->enter($__internal_b696ddf1970a1bddabed9dcccfb86d7ed5084df43369a984cf4d09f723d8e582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t";
        
        $__internal_b696ddf1970a1bddabed9dcccfb86d7ed5084df43369a984cf4d09f723d8e582->leave($__internal_b696ddf1970a1bddabed9dcccfb86d7ed5084df43369a984cf4d09f723d8e582_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_38d2d1578df66d256958522df03be49174857903e6a8e207d1ad9ef3f94f7225 = $this->env->getExtension("native_profiler");
        $__internal_38d2d1578df66d256958522df03be49174857903e6a8e207d1ad9ef3f94f7225->enter($__internal_38d2d1578df66d256958522df03be49174857903e6a8e207d1ad9ef3f94f7225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/login.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_38d2d1578df66d256958522df03be49174857903e6a8e207d1ad9ef3f94f7225->leave($__internal_38d2d1578df66d256958522df03be49174857903e6a8e207d1ad9ef3f94f7225_prof);

    }

    public function getTemplateName()
    {
        return "@AdonaiUnico/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 69,  146 => 68,  140 => 67,  131 => 5,  126 => 4,  120 => 3,  110 => 71,  108 => 67,  71 => 33,  66 => 31,  48 => 16,  42 => 12,  36 => 10,  34 => 9,  30 => 7,  28 => 3,  24 => 1,);
    }
}
/* <html>*/
/* <head>*/
/* 	{% block stylesheets %}*/
/* 	<link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet" />*/
/* 	<link href="{{ asset('public/css/login.css') }}" rel="stylesheet" />*/
/* 	{% endblock %}*/
/* </head>*/
/* <body>*/
/* 	{% if error %}*/
/* 	<div>{{ error.message }}</div>*/
/* 	{% endif %}*/
/* */
/* 	<div class="container">*/
/* 		<div class="row">*/
/* 			<div class="col-md-12">*/
/* 				<center><img class="img-responsive" src="{{ asset('public/img/logo2.png') }}" /></center>*/
/* 				<br/>*/
/* 				<div class="col-md-6 col-md-offset-3">*/
/* 					<div class="panel panel-login">*/
/* 						<div class="panel-heading">*/
/* 							<div class="row">*/
/* 								<div class="col-xs-12">*/
/* 									<a class="active" id="login-form-link">Sistema de Registro Académico - ADONAI</a>*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr>*/
/* 						</div>*/
/* 						<div class="panel-body">*/
/* 							<div class="row">*/
/* 								<div class="col-lg-12">*/
/* 									<form id="login-form" action="{{ path('login_check') }}" method="post" role="form" style="display: block;">*/
/* 										<div class="form-group">*/
/* 											<input type="text" name="_username" id="username" tabindex="1" class="form-control" placeholder="Usuario" value="{{ last_username }}">*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<input type="password" name="_password" id="password" tabindex="2" class="form-control" placeholder="Contraseña">*/
/* 										</div>*/
/* 										<div class="form-group text-center">*/
/* 											<input type="checkbox" tabindex="3" class="" name="remember" id="remember">*/
/* 											<label for="remember">Recordar</label>*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<div class="row">*/
/* 												<div class="col-sm-6 col-sm-offset-3">*/
/* 													<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Ingresar">*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<div class="row">*/
/* 												<div class="col-lg-12">*/
/* 													<div class="text-center">*/
/* 														<a href="#" tabindex="5" class="forgot-password">Olvidaste tu contraseña?</a>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</form>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 	<script src="{{ asset('public/js/bootstrap.min.js') }}"></script>*/
/* 	<script src="{{ asset('public/js/login.js') }}"></script>*/
/* 	{% endblock %}*/
/* </body>*/
/* </html>*/
/* */
/* */