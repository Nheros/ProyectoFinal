<?php

/* coordinadores/show.html.twig */
class __TwigTemplate_c9f1422d514c0da4b27a65c43706fd8b4d5fe181892272d0112590873eb69120 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "coordinadores/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e442a35ececcc746f6352ead8259c6881a4b73646eda99f5acb3a99795a21dad = $this->env->getExtension("native_profiler");
        $__internal_e442a35ececcc746f6352ead8259c6881a4b73646eda99f5acb3a99795a21dad->enter($__internal_e442a35ececcc746f6352ead8259c6881a4b73646eda99f5acb3a99795a21dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coordinadores/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e442a35ececcc746f6352ead8259c6881a4b73646eda99f5acb3a99795a21dad->leave($__internal_e442a35ececcc746f6352ead8259c6881a4b73646eda99f5acb3a99795a21dad_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc51fe202e67effbdf401eb536faf4b26069b4395ea5fcb873be36e334dadfd9 = $this->env->getExtension("native_profiler");
        $__internal_dc51fe202e67effbdf401eb536faf4b26069b4395ea5fcb873be36e334dadfd9->enter($__internal_dc51fe202e67effbdf401eb536faf4b26069b4395ea5fcb873be36e334dadfd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Coordinadores</h1>

<table>
    <tbody>
        <tr>
            <th>Idcor</th>
            <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coordinador"]) ? $context["coordinador"] : $this->getContext($context, "coordinador")), "idCor", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Nuip</th>
            <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coordinador"]) ? $context["coordinador"] : $this->getContext($context, "coordinador")), "nuip", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Nomcor</th>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coordinador"]) ? $context["coordinador"] : $this->getContext($context, "coordinador")), "nomCor", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Dir</th>
            <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coordinador"]) ? $context["coordinador"] : $this->getContext($context, "coordinador")), "dir", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Tel</th>
            <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coordinador"]) ? $context["coordinador"] : $this->getContext($context, "coordinador")), "tel", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Movil</th>
            <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coordinador"]) ? $context["coordinador"] : $this->getContext($context, "coordinador")), "movil", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coordinador"]) ? $context["coordinador"] : $this->getContext($context, "coordinador")), "email", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Usuario</th>
            <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["coordinador"]) ? $context["coordinador"] : $this->getContext($context, "coordinador")), "usuario", array()), "id", array()), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<ul>
    <li>
        <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("coordinadores_index");
        echo "\">Back to the list</a>
    </li>
    <li>
        <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coordinadores_edit", array("id" => $this->getAttribute((isset($context["coordinador"]) ? $context["coordinador"] : $this->getContext($context, "coordinador")), "idCor", array()))), "html", null, true);
        echo "\">Edit</a>
    </li>
    <li>
        ";
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input type=\"submit\" value=\"Delete\">
        ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </li>
</ul>
";
        
        $__internal_dc51fe202e67effbdf401eb536faf4b26069b4395ea5fcb873be36e334dadfd9->leave($__internal_dc51fe202e67effbdf401eb536faf4b26069b4395ea5fcb873be36e334dadfd9_prof);

    }

    public function getTemplateName()
    {
        return "coordinadores/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 53,  119 => 51,  113 => 48,  107 => 45,  97 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <h1>Coordinadores</h1>*/
/* */
/* <table>*/
/*     <tbody>*/
/*         <tr>*/
/*             <th>Idcor</th>*/
/*             <td>{{ coordinador.idCor }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Nuip</th>*/
/*             <td>{{ coordinador.nuip }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Nomcor</th>*/
/*             <td>{{ coordinador.nomCor }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Dir</th>*/
/*             <td>{{ coordinador.dir }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Tel</th>*/
/*             <td>{{ coordinador.tel }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Movil</th>*/
/*             <td>{{ coordinador.movil }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Email</th>*/
/*             <td>{{ coordinador.email }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Usuario</th>*/
/*             <td>{{ coordinador.usuario.id }}</td>*/
/*         </tr>*/
/*     </tbody>*/
/* </table>*/
/* */
/* <ul>*/
/*     <li>*/
/*         <a href="{{ path('coordinadores_index') }}">Back to the list</a>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path('coordinadores_edit', { 'id': coordinador.idCor }) }}">Edit</a>*/
/*     </li>*/
/*     <li>*/
/*         {{ form_start(delete_form) }}*/
/*         <input type="submit" value="Delete">*/
/*         {{ form_end(delete_form) }}*/
/*     </li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
