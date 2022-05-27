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

/* pedido/edit.html.twig */
class __TwigTemplate_ab739ca6a3be0ca9c8dbbc73c072e78b050a14ee31aba54ff43bf25c09cf408f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pedido/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pedido/edit.html.twig"));

        $this->parent = $this->loadTemplate("menu.html.twig", "pedido/edit.html.twig", 1);
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
<br>
<br>

\t<div class=\"container containerPedido\">

\t\t<div class=\"posicionAccionesShow\">

\t\t\t<a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedido_index");
        echo "\">Atras
\t\t\t</a>


\t\t</div>

<br>

\t\t<div class=\"posicionDatosEmpresa\">

\t\t\t<h1>Editando
\t\t\t\t";
        // line 24
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 24, $this->source); })()), "estado", [], "any", false, false, false, 24)) ? ("factura") : ("pedido"));
        echo "
\t\t\t\tES-";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 25, $this->source); })()), "getId", [], "any", false, false, false, 25), "html", null, true);
        echo "</h1>

\t\t\t";
        // line 27
        echo twig_include($this->env, $context, "pedido/_form.html.twig", ["button_label" => "Actualizar"]);
        echo "


\t\t</div>

\t\t<br>


\t\t<table class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr>

\t\t\t\t\t<th>Nombre</th>
\t\t\t\t\t<th>Descripción</th>
\t\t\t\t\t<th>Cantidad</th>
\t\t\t\t\t<th>Precio U.</th>
\t\t\t\t\t<th>Precio Total</th>
\t\t\t\t\t<th>Acciones</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t
\t\t\t<tbody>
\t\t\t\t";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["detalles"]) || array_key_exists("detalles", $context) ? $context["detalles"] : (function () { throw new RuntimeError('Variable "detalles" does not exist.', 49, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["detalle"]) {
            // line 50
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detalle"], "pedido", [], "any", false, false, false, 50), "getId", [], "method", false, false, false, 50) == twig_get_attribute($this->env, $this->source, (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new RuntimeError('Variable "pedido" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50))) {
                // line 51
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detalle"], "producto", [], "any", false, false, false, 52), "getNombre", [], "method", false, false, false, 52), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detalle"], "producto", [], "any", false, false, false, 53), "getDescripcion", [], "method", false, false, false, 53), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalle"], "Cantidad", [], "any", false, false, false, 54), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detalle"], "precio", [], "any", false, false, false, 55), "html", null, true);
                echo "
\t\t\t\t\t\t\t€</td>
\t\t\t\t\t\t";
                // line 57
                $context["preciototal"] = (twig_get_attribute($this->env, $this->source, $context["detalle"], "Cantidad", [], "any", false, false, false, 57) * twig_get_attribute($this->env, $this->source, $context["detalle"], "precio", [], "any", false, false, false, 57));
                // line 58
                echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
                // line 59
                echo twig_escape_filter($this->env, (isset($context["preciototal"]) || array_key_exists("preciototal", $context) ? $context["preciototal"] : (function () { throw new RuntimeError('Variable "preciototal" does not exist.', 59, $this->source); })()), "html", null, true);
                echo "
\t\t\t\t\t\t\t€</td>

\t\t\t\t\t\t<td>

\t\t\t\t\t\t\t<a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_detalle_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["detalle"], "id", [], "any", false, false, false, 64)]), "html", null, true);
                echo "\">Editar</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
            }
            // line 67
            echo "\t\t\t\t\t</tr>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 69
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detalle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "\t\t\t</tbody>
\t\t</table>


\t</tbody>
</table>
<div class=\"posicionAccionesShowDelete\">
\t<br>
\t";
        // line 81
        echo twig_include($this->env, $context, "pedido/_delete_form.html.twig");
        echo "
\t<br>
\t<br>
\t<br>
\t<br>
\t<br>
</div></div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pedido/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 81,  188 => 73,  179 => 69,  173 => 67,  167 => 64,  159 => 59,  156 => 58,  154 => 57,  149 => 55,  145 => 54,  141 => 53,  137 => 52,  134 => 51,  131 => 50,  126 => 49,  101 => 27,  96 => 25,  92 => 24,  78 => 13,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'menu.html.twig' %}


{% block contenido %}

<br>
<br>

\t<div class=\"container containerPedido\">

\t\t<div class=\"posicionAccionesShow\">

\t\t\t<a href=\"{{ path('app_pedido_index') }}\">Atras
\t\t\t</a>


\t\t</div>

<br>

\t\t<div class=\"posicionDatosEmpresa\">

\t\t\t<h1>Editando
\t\t\t\t{{ pedido.estado ? 'factura' : 'pedido' }}
\t\t\t\tES-{{pedido.getId}}</h1>

\t\t\t{{ include('pedido/_form.html.twig', {'button_label': 'Actualizar'}) }}


\t\t</div>

\t\t<br>


\t\t<table class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr>

\t\t\t\t\t<th>Nombre</th>
\t\t\t\t\t<th>Descripción</th>
\t\t\t\t\t<th>Cantidad</th>
\t\t\t\t\t<th>Precio U.</th>
\t\t\t\t\t<th>Precio Total</th>
\t\t\t\t\t<th>Acciones</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t
\t\t\t<tbody>
\t\t\t\t{% for detalle in detalles %}
\t\t\t\t\t{% if  detalle.pedido.getId()   ==  pedido.id  %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ detalle.producto.getNombre() }}</td>
\t\t\t\t\t\t<td>{{ detalle.producto.getDescripcion() }}</td>
\t\t\t\t\t\t<td>{{ detalle.Cantidad }}</td>
\t\t\t\t\t\t<td>{{ detalle.precio }}
\t\t\t\t\t\t\t€</td>
\t\t\t\t\t\t{% set preciototal = detalle.Cantidad *  detalle.precio  %}
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{{preciototal}}
\t\t\t\t\t\t\t€</td>

\t\t\t\t\t\t<td>

\t\t\t\t\t\t\t<a href=\"{{ path('app_detalle_edit', {'id': detalle.id}) }}\">Editar</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</tr>
\t\t\t\t{% else %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>


\t</tbody>
</table>
<div class=\"posicionAccionesShowDelete\">
\t<br>
\t{{ include('pedido/_delete_form.html.twig') }}
\t<br>
\t<br>
\t<br>
\t<br>
\t<br>
</div></div>{% endblock %}
", "pedido/edit.html.twig", "C:\\Users\\aleol\\Desktop\\Pedidos\\GestionFacturas\\templates\\pedido\\edit.html.twig");
    }
}
