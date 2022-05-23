<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* empresa/show.html.twig */
class __TwigTemplate_525530e9e1929f7db9496e80ea577acaffb029a5b8cbe9e57d9050bcedb5ae01 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'contenido' => [$this, 'block_contenido'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "empresa/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "empresa/show.html.twig"));

        $this->parent = $this->loadTemplate("menu.html.twig", "empresa/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        // line 5
        echo "\t
    <h1 class=\"posionTituloShow\"><i class=\"fa fa-building\" aria-hidden=\"true\"></i> Empresa</h1>

\t<table class=\"tableShow\">
\t\t<tbody>

\t\t\t<tr>
\t\t\t\t<th>Username</th>
\t\t\t\t<td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new RuntimeError('Variable "empresa" does not exist.', 13, $this->source); })()), "username", [], "any", false, false, false, 13), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Password</th>
\t\t\t\t<td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new RuntimeError('Variable "empresa" does not exist.', 17, $this->source); })()), "password", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Nombre Empresa</th>
\t\t\t\t<td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new RuntimeError('Variable "empresa" does not exist.', 21, $this->source); })()), "nombreEmpresa", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Correo Electronico</th>
\t\t\t\t<td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new RuntimeError('Variable "empresa" does not exist.', 25, $this->source); })()), "correoElectronico", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Codigo Postal</th>
\t\t\t\t<td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new RuntimeError('Variable "empresa" does not exist.', 29, $this->source); })()), "codigoPostal", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Direccion</th>
\t\t\t\t<td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new RuntimeError('Variable "empresa" does not exist.', 33, $this->source); })()), "direccion", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Telefono</th>
\t\t\t\t<td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new RuntimeError('Variable "empresa" does not exist.', 37, $this->source); })()), "telefono", [], "any", false, false, false, 37), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Dni</th>
\t\t\t\t<td>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new RuntimeError('Variable "empresa" does not exist.', 41, $this->source); })()), "dni", [], "any", false, false, false, 41), "html", null, true);
        echo "</td>
\t\t\t</tr>

\t\t</tbody>
\t</table>


\t<div class=\"posicionBotonesShow\">

\t\t<a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_empresa_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new RuntimeError('Variable "empresa" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50)]), "html", null, true);
        echo "\">Editar /</a>

\t\t<a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_empresa_index");
        echo "\">Back to list</a>

\t</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "empresa/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 52,  139 => 50,  127 => 41,  120 => 37,  113 => 33,  106 => 29,  99 => 25,  92 => 21,  85 => 17,  78 => 13,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'menu.html.twig' %}


{% block contenido %}
\t
    <h1 class=\"posionTituloShow\"><i class=\"fa fa-building\" aria-hidden=\"true\"></i> Empresa</h1>

\t<table class=\"tableShow\">
\t\t<tbody>

\t\t\t<tr>
\t\t\t\t<th>Username</th>
\t\t\t\t<td>{{ empresa.username }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Password</th>
\t\t\t\t<td>{{ empresa.password }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Nombre Empresa</th>
\t\t\t\t<td>{{ empresa.nombreEmpresa }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Correo Electronico</th>
\t\t\t\t<td>{{ empresa.correoElectronico }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Codigo Postal</th>
\t\t\t\t<td>{{ empresa.codigoPostal }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Direccion</th>
\t\t\t\t<td>{{ empresa.direccion }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Telefono</th>
\t\t\t\t<td>{{ empresa.telefono }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Dni</th>
\t\t\t\t<td>{{ empresa.dni }}</td>
\t\t\t</tr>

\t\t</tbody>
\t</table>


\t<div class=\"posicionBotonesShow\">

\t\t<a href=\"{{ path('app_empresa_edit', {'id': empresa.id}) }}\">Editar /</a>

\t\t<a href=\"{{ path('app_empresa_index') }}\">Back to list</a>

\t</div>


{% endblock %}
", "empresa/show.html.twig", "C:\\Users\\aleol\\Desktop\\Pedidos\\GestionFacturas\\templates\\empresa\\show.html.twig");
    }
}
