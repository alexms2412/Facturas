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
\t";
        // line 6
        $context["total"] = 0;
        // line 7
        echo "
\t";
        // line 8
        $context["iva"] = 0;
        // line 9
        echo "

\t<div class=\"container containerPedido\">

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
\t\t\t\tDatos:
\t\t\t</h6>

\t\t\t<p>

\t\t\t\t";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 47, $this->source); })()), "empresa", [], "any", false, false, false, 47), "getDireccion", [], "method", false, false, false, 47), "html", null, true);
        echo "

\t\t\t</p>
\t\t\t<p>
\t\t\t\t";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 51, $this->source); })()), "empresa", [], "any", false, false, false, 51), "getCodigoPostal", [], "method", false, false, false, 51), "html", null, true);
        echo "
\t\t\t\t";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 52, $this->source); })()), "empresa", [], "any", false, false, false, 52), "getCiudad", [], "method", false, false, false, 52), "html", null, true);
        echo "</p>
\t\t\t<p>

\t\t\t\t";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 55, $this->source); })()), "empresa", [], "any", false, false, false, 55), "getCorreoElectronico", [], "method", false, false, false, 55), "html", null, true);
        echo "</p>

\t\t\t<p>

\t\t\t\t";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 59, $this->source); })()), "empresa", [], "any", false, false, false, 59), "getTelefono", [], "method", false, false, false, 59), "html", null, true);
        echo "</p>


\t\t\t<p>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 62, $this->source); })()), "empresa", [], "any", false, false, false, 62), "getDni", [], "method", false, false, false, 62), "html", null, true);
        echo "</p>


\t\t</div>

\t\t<div class=\"clienteFactura\">


\t\t\t<h6>
\t\t\t\t";
        // line 71
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 71, $this->source); })()), "estado", [], "any", false, false, false, 71)) ? ("Factura") : ("Presupuesto"));
        echo "
\t\t\t\ta:
\t\t\t</h6>

\t\t\t<p>

\t\t\t\t";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 77, $this->source); })()), "Cliente", [], "any", false, false, false, 77), "getNombre", [], "any", false, false, false, 77), "html", null, true);
        echo "
\t\t\t\t";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 78, $this->source); })()), "Cliente", [], "any", false, false, false, 78), "getApellidos", [], "any", false, false, false, 78), "html", null, true);
        echo "</p>

\t\t\t<p>


\t\t\t\t";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 83, $this->source); })()), "Cliente", [], "any", false, false, false, 83), "getDireccion", [], "any", false, false, false, 83), "html", null, true);
        echo "</p>

\t\t\t<p>
\t\t\t\t";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 86, $this->source); })()), "Cliente", [], "any", false, false, false, 86), "getCodigoPostal", [], "method", false, false, false, 86), "html", null, true);
        echo "
\t\t\t\t";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 87, $this->source); })()), "Cliente", [], "any", false, false, false, 87), "getCiudad", [], "method", false, false, false, 87), "html", null, true);
        echo "</p>
\t\t\t<p></p>
\t\t\t<p>

\t\t\t\t";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 91, $this->source); })()), "Cliente", [], "any", false, false, false, 91), "getTelefono", [], "any", false, false, false, 91), "html", null, true);
        echo "</p>

\t\t\t<p>

\t\t\t\t";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 95, $this->source); })()), "Cliente", [], "any", false, false, false, 95), "getDni", [], "any", false, false, false, 95), "html", null, true);
        echo "</p>

\t\t</div>

\t\t<br>


\t\t<table class=\"tablaVer\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Nombre</th>
\t\t\t\t\t<th>Descripción</th>
\t\t\t\t\t<th>Cantidad</th>
\t\t\t\t\t<th>Precio U.</th>
\t\t\t\t\t<th>Precio Total</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>


\t\t\t\t";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["detalles"]) || array_key_exists("detalles", $context) ? $context["detalles"] : (function () { throw new RuntimeError('Variable "detalles" does not exist.', 115, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["detalle"]) {
            // line 116
            echo "
\t\t\t\t\t";
            // line 117
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detalle"], "pedido", [], "any", false, false, false, 117), "getId", [], "method", false, false, false, 117) == twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 117, $this->source); })()), "id", [], "any", false, false, false, 117))) {
                // line 118
                echo "
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
                // line 120
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detalle"], "producto", [], "any", false, false, false, 120), "getNombre", [], "method", false, false, false, 120), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 121
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detalle"], "producto", [], "any", false, false, false, 121), "getDescripcion", [], "method", false, false, false, 121), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 122
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalle"], "Cantidad", [], "any", false, false, false, 122), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 123
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalle"], "precio", [], "any", false, false, false, 123), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t€</td>
\t\t\t\t\t\t\t";
                // line 125
                $context["preciototal"] = (twig_get_attribute($this->env, $this->source, $context["detalle"], "Cantidad", [], "any", false, false, false, 125) * twig_get_attribute($this->env, $this->source, $context["detalle"], "precio", [], "any", false, false, false, 125));
                // line 126
                echo "\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                // line 127
                echo twig_escape_filter($this->env, (isset($context["preciototal"]) || array_key_exists("preciototal", $context) ? $context["preciototal"] : (function () { throw new RuntimeError('Variable "preciototal" does not exist.', 127, $this->source); })()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t€</td>

\t\t\t\t\t\t</tr>

\t\t\t\t\t\t";
                // line 132
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 132, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["detalle"], "Cantidad", [], "any", false, false, false, 132) * twig_get_attribute($this->env, $this->source, $context["detalle"], "precio", [], "any", false, false, false, 132)));
                // line 133
                echo "
\t\t\t\t\t";
            }
            // line 135
            echo "

\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 138
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detalle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "

\t\t\t</tbody>

\t\t</div>

\t</div>

</tbody></table><h5 class=\"posicionPrecioTotal\">

Base importe: &nbsp;";
        // line 152
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 152, $this->source); })()), "html", null, true);
        echo "
€</h5>";
        // line 153
        $context["iva"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 153, $this->source); })()) * 0.21);
        echo "<h6 class=\"posicionPrecioTotalIVA\">
IVA 21%: &nbsp;
";
        // line 155
        echo twig_escape_filter($this->env, (isset($context["iva"]) || array_key_exists("iva", $context) ? $context["iva"] : (function () { throw new RuntimeError('Variable "iva" does not exist.', 155, $this->source); })()), "html", null, true);
        echo "
€</h6>";
        // line 156
        $context["totalFinal"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 156, $this->source); })()) + (isset($context["iva"]) || array_key_exists("iva", $context) ? $context["iva"] : (function () { throw new RuntimeError('Variable "iva" does not exist.', 156, $this->source); })()));
        echo "<h6 class=\"posicionPrecioTotalTotal\">
Total: &nbsp;
";
        // line 158
        echo twig_escape_filter($this->env, (isset($context["totalFinal"]) || array_key_exists("totalFinal", $context) ? $context["totalFinal"] : (function () { throw new RuntimeError('Variable "totalFinal" does not exist.', 158, $this->source); })()), "html", null, true);
        echo "
€</h6><h6 class=\"firma\">Firma:</h6><hr class=\"firmaHr\"></div>";
        
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
        return array (  339 => 158,  334 => 156,  330 => 155,  325 => 153,  321 => 152,  309 => 142,  300 => 138,  293 => 135,  289 => 133,  287 => 132,  279 => 127,  276 => 126,  274 => 125,  269 => 123,  265 => 122,  261 => 121,  257 => 120,  253 => 118,  251 => 117,  248 => 116,  243 => 115,  220 => 95,  213 => 91,  206 => 87,  202 => 86,  196 => 83,  188 => 78,  184 => 77,  175 => 71,  163 => 62,  157 => 59,  150 => 55,  144 => 52,  140 => 51,  133 => 47,  117 => 34,  110 => 30,  106 => 29,  95 => 21,  87 => 16,  78 => 9,  76 => 8,  73 => 7,  71 => 6,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'menu.html.twig' %}


{% block contenido %}

\t{% set total = 0 %}

\t{% set iva = 0 %}


\t<div class=\"container containerPedido\">

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
\t\t\t\tDatos:
\t\t\t</h6>

\t\t\t<p>

\t\t\t\t{{ pedido.empresa.getDireccion() }}

\t\t\t</p>
\t\t\t<p>
\t\t\t\t{{ pedido.empresa.getCodigoPostal() }}
\t\t\t\t{{ pedido.empresa.getCiudad() }}</p>
\t\t\t<p>

\t\t\t\t{{ pedido.empresa.getCorreoElectronico() }}</p>

\t\t\t<p>

\t\t\t\t{{ pedido.empresa.getTelefono() }}</p>


\t\t\t<p>{{ pedido.empresa.getDni() }}</p>


\t\t</div>

\t\t<div class=\"clienteFactura\">


\t\t\t<h6>
\t\t\t\t{{ pedido.estado ? 'Factura' : 'Presupuesto' }}
\t\t\t\ta:
\t\t\t</h6>

\t\t\t<p>

\t\t\t\t{{ pedido.Cliente.getNombre }}
\t\t\t\t{{ pedido.Cliente.getApellidos }}</p>

\t\t\t<p>


\t\t\t\t{{ pedido.Cliente.getDireccion }}</p>

\t\t\t<p>
\t\t\t\t{{ pedido.Cliente.getCodigoPostal() }}
\t\t\t\t{{ pedido.Cliente.getCiudad() }}</p>
\t\t\t<p></p>
\t\t\t<p>

\t\t\t\t{{ pedido.Cliente.getTelefono }}</p>

\t\t\t<p>

\t\t\t\t{{ pedido.Cliente.getDni }}</p>

\t\t</div>

\t\t<br>


\t\t<table class=\"tablaVer\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Nombre</th>
\t\t\t\t\t<th>Descripción</th>
\t\t\t\t\t<th>Cantidad</th>
\t\t\t\t\t<th>Precio U.</th>
\t\t\t\t\t<th>Precio Total</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>


\t\t\t\t{% for detalle in detalles %}

\t\t\t\t\t{% if  detalle.pedido.getId()   ==  pedido.id  %}

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>{{ detalle.producto.getNombre() }}</td>
\t\t\t\t\t\t\t<td>{{ detalle.producto.getDescripcion() }}</td>
\t\t\t\t\t\t\t<td>{{ detalle.Cantidad }}</td>
\t\t\t\t\t\t\t<td>{{ detalle.precio }}
\t\t\t\t\t\t\t\t€</td>
\t\t\t\t\t\t\t{% set preciototal = detalle.Cantidad *  detalle.precio  %}
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{{preciototal}}
\t\t\t\t\t\t\t\t€</td>

\t\t\t\t\t\t</tr>

\t\t\t\t\t\t{% set total = total + detalle.Cantidad *  detalle.precio  %}

\t\t\t\t\t{% endif %}


\t\t\t\t{% else %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}


\t\t\t</tbody>

\t\t</div>

\t</div>

</tbody></table><h5 class=\"posicionPrecioTotal\">

Base importe: &nbsp;{{ total }}
€</h5>{% set iva = total * 0.21 %}<h6 class=\"posicionPrecioTotalIVA\">
IVA 21%: &nbsp;
{{ iva }}
€</h6>{% set totalFinal = total + iva %}<h6 class=\"posicionPrecioTotalTotal\">
Total: &nbsp;
{{totalFinal}}
€</h6><h6 class=\"firma\">Firma:</h6><hr class=\"firmaHr\"></div>{% endblock %}
", "pedido/show.html.twig", "C:\\Users\\aleol\\Desktop\\Pedidos\\GestionFacturas\\templates\\pedido\\show.html.twig");
    }
}
