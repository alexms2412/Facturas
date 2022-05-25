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

/* pedido/descarga.html.twig */
class __TwigTemplate_ac0a736da549e36c1cf6b7480e4141b09de675658eefb46ba50bdbbeb08af0b9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pedido/descarga.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pedido/descarga.html.twig"));

        $this->parent = $this->loadTemplate("menu.html.twig", "pedido/descarga.html.twig", 1);
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
\t<div class=\"posicionAccionesShow\">

\t\t<a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedido_index");
        echo "\">Atras /</a>

\t\t<a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedido_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
        echo "\">Editar</a>

\t</div>

\t<div class=\"container containerPedido\">

\t\t<div class=\"nombreEmpresaFactura\">
\t\t\t<h1>
\t\t\t\t<i class=\"fa fa-file-text-o\" aria-hidden=\"true\"></i>
\t\t\t\t";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 23, $this->source); })()), "empresa", [], "any", false, false, false, 23), "getNombreEmpresa", [], "method", false, false, false, 23), "html", null, true);
        echo "

\t\t\t</h1>

\t\t\t<h5>
\t\t\t\t(";
        // line 28
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 28, $this->source); })()), "estado", [], "any", false, false, false, 28)) ? ("Factura") : ("Pedido"));
        echo ")</h5>

\t\t</div>

\t\t<div class=\"posicionDatosFactura\">

\t\t\t<p>
\t\t\t\tN.
\t\t\t\t";
        // line 36
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 36, $this->source); })()), "estado", [], "any", false, false, false, 36)) ? ("Factura") : ("Pedido"));
        echo "
\t\t\t\t: ES-";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 37, $this->source); })()), "getId", [], "any", false, false, false, 37), "html", null, true);
        echo "</p>

\t\t\t<p>
\t\t\t\tFecha:
\t\t\t\t";
        // line 41
        ((twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 41, $this->source); })()), "fecha", [], "any", false, false, false, 41)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 41, $this->source); })()), "fecha", [], "any", false, false, false, 41), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</p>

\t\t</div>


\t\t<div class=\"posicionDatosEmpresa\">

\t\t\t<h6>
\t\t\t\tDatos fiscales:
\t\t\t</h6>

\t\t\t<p>

\t\t\t\t";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 54, $this->source); })()), "empresa", [], "any", false, false, false, 54), "getDireccion", [], "method", false, false, false, 54), "html", null, true);
        echo "

\t\t\t</p>
\t\t\t<p>
\t\t\t\t";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 58, $this->source); })()), "empresa", [], "any", false, false, false, 58), "getCodigoPostal", [], "method", false, false, false, 58), "html", null, true);
        echo "
\t\t\t\t";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 59, $this->source); })()), "empresa", [], "any", false, false, false, 59), "getCiudad", [], "method", false, false, false, 59), "html", null, true);
        echo "</p>
\t\t\t<p>

\t\t\t\t";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 62, $this->source); })()), "empresa", [], "any", false, false, false, 62), "getCorreoElectronico", [], "method", false, false, false, 62), "html", null, true);
        echo "</p>

\t\t\t<p>

\t\t\t\t";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 66, $this->source); })()), "empresa", [], "any", false, false, false, 66), "getTelefono", [], "method", false, false, false, 66), "html", null, true);
        echo "</p>


\t\t\t<p>";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 69, $this->source); })()), "empresa", [], "any", false, false, false, 69), "getDni", [], "method", false, false, false, 69), "html", null, true);
        echo "</p>


\t\t</div>

\t\t<div class=\"clienteFactura\">


\t\t\t<h6>
\t\t\t\t";
        // line 78
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 78, $this->source); })()), "estado", [], "any", false, false, false, 78)) ? ("Factura") : ("Presupuesto"));
        echo "
\t\t\t\ta:
\t\t\t</h6>

\t\t\t<p>

\t\t\t\t";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 84, $this->source); })()), "Cliente", [], "any", false, false, false, 84), "getNombre", [], "any", false, false, false, 84), "html", null, true);
        echo "
\t\t\t\t";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 85, $this->source); })()), "Cliente", [], "any", false, false, false, 85), "getApellidos", [], "any", false, false, false, 85), "html", null, true);
        echo "</p>

\t\t\t<p>


\t\t\t\t";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 90, $this->source); })()), "Cliente", [], "any", false, false, false, 90), "getDireccion", [], "any", false, false, false, 90), "html", null, true);
        echo "</p>

\t\t\t<p>
\t\t\t\t";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 93, $this->source); })()), "Cliente", [], "any", false, false, false, 93), "getCodigoPostal", [], "method", false, false, false, 93), "html", null, true);
        echo "
\t\t\t\t";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 94, $this->source); })()), "Cliente", [], "any", false, false, false, 94), "getCiudad", [], "method", false, false, false, 94), "html", null, true);
        echo "</p>
\t\t\t<p></p>
\t\t\t<p>

\t\t\t\t";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 98, $this->source); })()), "Cliente", [], "any", false, false, false, 98), "getTelefono", [], "any", false, false, false, 98), "html", null, true);
        echo "</p>

\t\t\t<p>

\t\t\t\t";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 102, $this->source); })()), "Cliente", [], "any", false, false, false, 102), "getDni", [], "any", false, false, false, 102), "html", null, true);
        echo "</p>

\t\t</div>

\t\t<br>


\t\t<table class=\"tablaVer\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Cantidad</th>
\t\t\t\t\t<th>Nombre</th>
\t\t\t\t\t<th>Descripción</th>
\t\t\t\t\t<th>Precio U.</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>


\t\t\t\t";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["detalles"]) || array_key_exists("detalles", $context) ? $context["detalles"] : (function () { throw new RuntimeError('Variable "detalles" does not exist.', 121, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["detalle"]) {
            // line 122
            echo "
\t\t\t\t\t";
            // line 123
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detalle"], "pedido", [], "any", false, false, false, 123), "getId", [], "method", false, false, false, 123) == twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 123, $this->source); })()), "id", [], "any", false, false, false, 123))) {
                // line 124
                echo "
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
                // line 126
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalle"], "Cantidad", [], "any", false, false, false, 126), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 127
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detalle"], "producto", [], "any", false, false, false, 127), "getNombre", [], "method", false, false, false, 127), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 128
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detalle"], "producto", [], "any", false, false, false, 128), "getDescripcion", [], "method", false, false, false, 128), "html", null, true);
                echo "</td>

\t\t\t\t\t\t\t<td>";
                // line 130
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalle"], "precio", [], "any", false, false, false, 130), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t€</td>

\t\t\t\t\t\t</tr>

\t\t\t\t\t\t";
                // line 135
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 135, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["detalle"], "Cantidad", [], "any", false, false, false, 135) * twig_get_attribute($this->env, $this->source, $context["detalle"], "precio", [], "any", false, false, false, 135)));
                // line 136
                echo "
\t\t\t\t\t";
            }
            // line 138
            echo "

\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 141
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detalle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "

\t\t\t</tbody>

\t\t</div>

\t</div>

</tbody>

</table>

<h5 class=\"posicionPrecioTotal\">

Base importe: &nbsp;";
        // line 159
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 159, $this->source); })()), "html", null, true);
        echo " €

</h5>

";
        // line 163
        $context["iva"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 163, $this->source); })()) * 0.21);
        // line 164
        echo "
<h6 class=\"posicionPrecioTotalIVA\">
\tIVA 21%: &nbsp; ";
        // line 166
        echo twig_escape_filter($this->env, (isset($context["iva"]) || array_key_exists("iva", $context) ? $context["iva"] : (function () { throw new RuntimeError('Variable "iva" does not exist.', 166, $this->source); })()), "html", null, true);
        echo "  €</h6>

\t ";
        // line 168
        $context["totalFinal"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 168, $this->source); })()) + (isset($context["iva"]) || array_key_exists("iva", $context) ? $context["iva"] : (function () { throw new RuntimeError('Variable "iva" does not exist.', 168, $this->source); })()));
        // line 169
        echo "
\t<h6 class=\"posicionPrecioTotalTotal\">
\tTotal: &nbsp; ";
        // line 171
        echo twig_escape_filter($this->env, (isset($context["totalFinal"]) || array_key_exists("totalFinal", $context) ? $context["totalFinal"] : (function () { throw new RuntimeError('Variable "totalFinal" does not exist.', 171, $this->source); })()), "html", null, true);
        echo " €</h6>
\t
\t<h6 class=\"firma\">Firma:</h6>
\t
\t<hr class=\"firmaHr\">
\t
\t</div>
\t
\t<div class=\"posicionAccionesShowDelete\">
\t
\t";
        // line 181
        echo twig_include($this->env, $context, "pedido/_delete_form.html.twig");
        echo "
\t
\t</div>
\t
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pedido/descarga.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 181,  352 => 171,  348 => 169,  346 => 168,  341 => 166,  337 => 164,  335 => 163,  328 => 159,  312 => 145,  303 => 141,  296 => 138,  292 => 136,  290 => 135,  282 => 130,  277 => 128,  273 => 127,  269 => 126,  265 => 124,  263 => 123,  260 => 122,  255 => 121,  233 => 102,  226 => 98,  219 => 94,  215 => 93,  209 => 90,  201 => 85,  197 => 84,  188 => 78,  176 => 69,  170 => 66,  163 => 62,  157 => 59,  153 => 58,  146 => 54,  130 => 41,  123 => 37,  119 => 36,  108 => 28,  100 => 23,  88 => 14,  83 => 12,  78 => 9,  76 => 8,  73 => 7,  71 => 6,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'menu.html.twig' %}


{% block contenido %}

\t{% set total = 0 %}

\t{% set iva = 0 %}

\t<div class=\"posicionAccionesShow\">

\t\t<a href=\"{{ path('app_pedido_index') }}\">Atras /</a>

\t\t<a href=\"{{ path('app_pedido_edit', {'id': pedido.id}) }}\">Editar</a>

\t</div>

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
\t\t\t\tDatos fiscales:
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
\t\t\t\t\t<th>Cantidad</th>
\t\t\t\t\t<th>Nombre</th>
\t\t\t\t\t<th>Descripción</th>
\t\t\t\t\t<th>Precio U.</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>


\t\t\t\t{% for detalle in detalles %}

\t\t\t\t\t{% if  detalle.pedido.getId()   ==  pedido.id  %}

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>{{ detalle.Cantidad }}</td>
\t\t\t\t\t\t\t<td>{{ detalle.producto.getNombre() }}</td>
\t\t\t\t\t\t\t<td>{{ detalle.producto.getDescripcion() }}</td>

\t\t\t\t\t\t\t<td>{{ detalle.precio }}
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

</tbody>

</table>

<h5 class=\"posicionPrecioTotal\">

Base importe: &nbsp;{{ total }} €

</h5>

{% set iva = total * 0.21 %}

<h6 class=\"posicionPrecioTotalIVA\">
\tIVA 21%: &nbsp; {{ iva }}  €</h6>

\t {% set totalFinal = total + iva %}

\t<h6 class=\"posicionPrecioTotalTotal\">
\tTotal: &nbsp; {{totalFinal}} €</h6>
\t
\t<h6 class=\"firma\">Firma:</h6>
\t
\t<hr class=\"firmaHr\">
\t
\t</div>
\t
\t<div class=\"posicionAccionesShowDelete\">
\t
\t{{ include('pedido/_delete_form.html.twig') }}
\t
\t</div>
\t
\t{% endblock %}
", "pedido/descarga.html.twig", "C:\\Users\\aleol\\Desktop\\Pedidos\\GestionFacturas\\templates\\pedido\\descarga.html.twig");
    }
}
