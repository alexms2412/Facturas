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

/* pedido/show.html.twig */
class __TwigTemplate_dcf789272ce8774423fecdbc2afdad591c2e10d1454011746a10c140bb40c7b8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pedido/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pedido/show.html.twig"));

        $this->parent = $this->loadTemplate("menu.html.twig", "pedido/show.html.twig", 1);
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
        echo "

\t<a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedido_index");
        echo "\">Atras /</a>

\t<a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedido_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)]), "html", null, true);
        echo "\">Editar</a>

\t<div class=\"container\">

\t\t<div class=\"nombreEmpresaFactura\">
\t\t\t<h1>
\t\t\t\t<i class=\"fa fa-file-text-o\" aria-hidden=\"true\"></i>
\t\t\t\t";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 16, $this->source); })()), "empresa", [], "any", false, false, false, 16), "getNombreEmpresa", [], "method", false, false, false, 16), "html", null, true);
        echo "

\t\t\t</h1>

\t\t\t<h5>
\t\t\t\t(";
        // line 21
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 21, $this->source); })()), "estado", [], "any", false, false, false, 21)) ? ("Factura") : ("Pedido"));
        echo ")</h5>

\t\t</div>

\t\t<div class=\"posicionDatosFactura\">

\t\t\t<p>
\t\t\t\tN.
\t\t\t\t";
        // line 29
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 29, $this->source); })()), "estado", [], "any", false, false, false, 29)) ? ("Factura") : ("Pedido"));
        echo "
\t\t\t\t: ES-";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 30, $this->source); })()), "getId", [], "any", false, false, false, 30), "html", null, true);
        echo "</p>

\t\t\t<p>
\t\t\t\tFecha:
\t\t\t\t";
        // line 34
        ((twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 34, $this->source); })()), "fecha", [], "any", false, false, false, 34)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 34, $this->source); })()), "fecha", [], "any", false, false, false, 34), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</p>

\t\t</div>


\t\t<div class=\"posicionDatosEmpresa\">

\t\t\t<h6>
\t\t\t\tDatos fiscales:
\t\t\t</h6>

\t\t\t<p>
\t\t\t\tDirección:
\t\t\t\t";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 47, $this->source); })()), "empresa", [], "any", false, false, false, 47), "getDireccion", [], "method", false, false, false, 47), "html", null, true);
        echo "</p>
\t\t\t<p></p>
\t\t\t<p>
\t\t\t\tGmail:
\t\t\t\t";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 51, $this->source); })()), "empresa", [], "any", false, false, false, 51), "getCorreoElectronico", [], "method", false, false, false, 51), "html", null, true);
        echo "</p>


\t\t\t<p>
\t\t\t\tCodigo postal:
\t\t\t\t";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 56, $this->source); })()), "empresa", [], "any", false, false, false, 56), "getCodigoPostal", [], "method", false, false, false, 56), "html", null, true);
        echo "</p>

\t\t\t<p>
\t\t\t\tTelefono:
\t\t\t\t";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 60, $this->source); })()), "empresa", [], "any", false, false, false, 60), "getTelefono", [], "method", false, false, false, 60), "html", null, true);
        echo "</p>

\t\t\tNIF:
\t\t\t";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 63, $this->source); })()), "empresa", [], "any", false, false, false, 63), "getDni", [], "method", false, false, false, 63), "html", null, true);
        echo "</p>


\t</div>

\t<div class=\"clienteFactura\">


\t\t<h6>
\t\t\t";
        // line 72
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 72, $this->source); })()), "estado", [], "any", false, false, false, 72)) ? ("Factura") : ("Presupuesto"));
        echo "
\t\t\ta:
\t\t</h6>

\t\t<p>
\t\t\tNombre:
\t\t\t";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 78, $this->source); })()), "Cliente", [], "any", false, false, false, 78), "getNombre", [], "any", false, false, false, 78), "html", null, true);
        echo "</p>

\t\t<p>
\t\t\tApellidos:
\t\t\t";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 82, $this->source); })()), "Cliente", [], "any", false, false, false, 82), "getApellidos", [], "any", false, false, false, 82), "html", null, true);
        echo "</p>

\t\t<p>
\t\t\tDirreccion:
\t\t\t";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 86, $this->source); })()), "Cliente", [], "any", false, false, false, 86), "getDireccion", [], "any", false, false, false, 86), "html", null, true);
        echo "</p>
\t\t<p>
\t\t\tTelefono:
\t\t\t";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 89, $this->source); })()), "Cliente", [], "any", false, false, false, 89), "getTelefono", [], "any", false, false, false, 89), "html", null, true);
        echo "</p>

\t\t<p>
\t\t\tDNI:
\t\t\t";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 93, $this->source); })()), "Cliente", [], "any", false, false, false, 93), "getDni", [], "any", false, false, false, 93), "html", null, true);
        echo "</p>

\t</div>

\t<br>


\t<table class=\"tablaVer\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Cantidad</th>
\t\t\t\t<th>Descripción</th>
\t\t\t\t<th>Nombre</th>

\t\t\t\t<th>Precio</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>

\t\t\t";
        // line 112
        $context["total"] = 0;
        // line 113
        echo "
\t\t\t";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["detalles"]) || array_key_exists("detalles", $context) ? $context["detalles"] : (function () { throw new RuntimeError('Variable "detalles" does not exist.', 114, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["detalle"]) {
            // line 115
            echo "
\t\t\t\t";
            // line 116
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detalle"], "pedido", [], "any", false, false, false, 116), "getId", [], "method", false, false, false, 116) == twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 116, $this->source); })()), "id", [], "any", false, false, false, 116))) {
                // line 117
                echo "
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                // line 119
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalle"], "Cantidad", [], "any", false, false, false, 119), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 120
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detalle"], "producto", [], "any", false, false, false, 120), "getDescripcion", [], "method", false, false, false, 120), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 121
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detalle"], "producto", [], "any", false, false, false, 121), "getNombre", [], "method", false, false, false, 121), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 122
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalle"], "precio", [], "any", false, false, false, 122), "html", null, true);
                echo "
\t\t\t\t\t\t\t€</td>

\t\t\t\t\t</tr>

\t\t\t\t\t";
                // line 127
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 127, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["detalle"], "Cantidad", [], "any", false, false, false, 127) * twig_get_attribute($this->env, $this->source, $context["detalle"], "precio", [], "any", false, false, false, 127)));
                // line 128
                echo "
\t\t\t\t";
            }
            // line 130
            echo "

\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 133
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detalle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "

\t\t</tbody>

\t</div>


</tbody></table><h5 class=\"posicionPrecioTotal\">
Total
";
        // line 146
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 146, $this->source); })()), "estado", [], "any", false, false, false, 146)) ? ("factura") : ("presupuesto"));
        echo ":
\t\t\t\t   &nbsp;&nbsp;";
        // line 147
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 147, $this->source); })()), "html", null, true);
        echo "
€</h5><h6 class=\"firma\">Firma:</h6><hr class=\"firmaHr\"></div>";
        // line 148
        echo twig_include($this->env, $context, "pedido/_delete_form.html.twig");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pedido/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 148,  307 => 147,  303 => 146,  292 => 137,  283 => 133,  276 => 130,  272 => 128,  270 => 127,  262 => 122,  258 => 121,  254 => 120,  250 => 119,  246 => 117,  244 => 116,  241 => 115,  236 => 114,  233 => 113,  231 => 112,  209 => 93,  202 => 89,  196 => 86,  189 => 82,  182 => 78,  173 => 72,  161 => 63,  155 => 60,  148 => 56,  140 => 51,  133 => 47,  117 => 34,  110 => 30,  106 => 29,  95 => 21,  87 => 16,  77 => 9,  72 => 7,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'menu.html.twig' %}


{% block contenido %}


\t<a href=\"{{ path('app_pedido_index') }}\">Atras /</a>

\t<a href=\"{{ path('app_pedido_edit', {'id': pedido.id}) }}\">Editar</a>

\t<div class=\"container\">

\t\t<div class=\"nombreEmpresaFactura\">
\t\t\t<h1>
\t\t\t\t<i class=\"fa fa-file-text-o\" aria-hidden=\"true\"></i>
\t\t\t\t{{ pedido.empresa.getNombreEmpresa() }}

\t\t\t</h1>

\t\t\t<h5>
\t\t\t\t({{ pedido.estado ? 'Factura' : 'Pedido' }})</h5>

\t\t</div>

\t\t<div class=\"posicionDatosFactura\">

\t\t\t<p>
\t\t\t\tN.
\t\t\t\t{{ pedido.estado ? 'Factura' : 'Pedido' }}
\t\t\t\t: ES-{{pedido.getId}}</p>

\t\t\t<p>
\t\t\t\tFecha:
\t\t\t\t{{ pedido.fecha ? pedido.fecha|date('Y-m-d') : '' }}</p>

\t\t</div>


\t\t<div class=\"posicionDatosEmpresa\">

\t\t\t<h6>
\t\t\t\tDatos fiscales:
\t\t\t</h6>

\t\t\t<p>
\t\t\t\tDirección:
\t\t\t\t{{ pedido.empresa.getDireccion() }}</p>
\t\t\t<p></p>
\t\t\t<p>
\t\t\t\tGmail:
\t\t\t\t{{ pedido.empresa.getCorreoElectronico() }}</p>


\t\t\t<p>
\t\t\t\tCodigo postal:
\t\t\t\t{{ pedido.empresa.getCodigoPostal() }}</p>

\t\t\t<p>
\t\t\t\tTelefono:
\t\t\t\t{{ pedido.empresa.getTelefono() }}</p>

\t\t\tNIF:
\t\t\t{{ pedido.empresa.getDni() }}</p>


\t</div>

\t<div class=\"clienteFactura\">


\t\t<h6>
\t\t\t{{ pedido.estado ? 'Factura' : 'Presupuesto' }}
\t\t\ta:
\t\t</h6>

\t\t<p>
\t\t\tNombre:
\t\t\t{{ pedido.Cliente.getNombre }}</p>

\t\t<p>
\t\t\tApellidos:
\t\t\t{{ pedido.Cliente.getApellidos }}</p>

\t\t<p>
\t\t\tDirreccion:
\t\t\t{{ pedido.Cliente.getDireccion }}</p>
\t\t<p>
\t\t\tTelefono:
\t\t\t{{ pedido.Cliente.getTelefono }}</p>

\t\t<p>
\t\t\tDNI:
\t\t\t{{ pedido.Cliente.getDni }}</p>

\t</div>

\t<br>


\t<table class=\"tablaVer\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Cantidad</th>
\t\t\t\t<th>Descripción</th>
\t\t\t\t<th>Nombre</th>

\t\t\t\t<th>Precio</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>

\t\t\t{% set total = 0 %}

\t\t\t{% for detalle in detalles %}

\t\t\t\t{% if  detalle.pedido.getId()   ==  pedido.id  %}

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ detalle.Cantidad }}</td>
\t\t\t\t\t\t<td>{{ detalle.producto.getDescripcion() }}</td>
\t\t\t\t\t\t<td>{{ detalle.producto.getNombre() }}</td>
\t\t\t\t\t\t<td>{{ detalle.precio }}
\t\t\t\t\t\t\t€</td>

\t\t\t\t\t</tr>

\t\t\t\t\t{% set total = total + detalle.Cantidad *  detalle.precio  %}

\t\t\t\t{% endif %}


\t\t\t{% else %}
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}


\t\t</tbody>

\t</div>


</tbody></table><h5 class=\"posicionPrecioTotal\">
Total
{{ pedido.estado ? 'factura' : 'presupuesto' }}:
\t\t\t\t   &nbsp;&nbsp;{{ total }}
€</h5><h6 class=\"firma\">Firma:</h6><hr class=\"firmaHr\"></div>{{ include('pedido/_delete_form.html.twig') }}{% endblock %}
", "pedido/show.html.twig", "C:\\Users\\aleol\\Desktop\\Pedidos\\GestionFacturas\\templates\\pedido\\show.html.twig");
    }
}
