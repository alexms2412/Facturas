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

/* pedido/indexFacturas.html.twig */
class __TwigTemplate_4ace77664096b0fab0a0d660cabb3949bc8ceac9dab99883604e4b317986577f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pedido/indexFacturas.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pedido/indexFacturas.html.twig"));

        $this->parent = $this->loadTemplate("menu.html.twig", "pedido/indexFacturas.html.twig", 1);
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
\t<br>
\t<div>

\t\t<div>
\t\t\t<a href=\"/pedido\" class=\"botonpedido botonesindex\">Pedidos
\t\t\t</a>
\t\t\t<a href=\"/pedido/facturas\" class=\"botonpedido botonesindex\">Facturas</a>

\t\t\t<a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedido_new");
        echo "\" class=\"botonpedido\">
\t\t\t\t<i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
\t\t\t\t<i class=\"fa fa-file-text-o\" aria-hidden=\"true\"></i>
\t\t\t</a>

\t\t\t<a href=\"/cliente\" class=\"botonpedido\">
\t\t\t\t<i class=\"fa fa-user\" aria-hidden=\"true\"></i>
\t\t\t</a>

\t\t\t<a href=\"/producto\" class=\"botonpedido\">

\t\t\t\t<i class=\"fa fa-shopping-basket\" aria-hidden=\"true\"></i>
\t\t\t</a>


\t\t</div>
\t\t<div class=\"hrposicion\">
\t\t\t<hr width=\"100%\" align=\"right\" size=\"30\">
\t\t</div>

\t\t<table class=\"tablePedidos\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"col\">ID</th>
\t\t\t\t\t<th scope=\"col\">Fecha</th>
\t\t\t\t\t<th scope=\"col\">Nombre Factura</th>
\t\t\t\t\t<th scope=\"col\">Estado</th>
\t\t\t\t\t<th scope=\"col\">Cliente</th>
\t\t\t\t\t<th scope=\"col\">Actions</th>

\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pedidos"]) || array_key_exists("pedidos", $context) ? $context["pedidos"] : (function () { throw new RuntimeError('Variable "pedidos" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pedido"]) {
            // line 48
            echo "
\t\t\t\t\t";
            // line 49
            if ((twig_get_attribute($this->env, $this->source, $context["pedido"], "estado", [], "any", false, false, false, 49) == true)) {
                // line 50
                echo "

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pedido"], "id", [], "any", false, false, false, 53), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 54
                ((twig_get_attribute($this->env, $this->source, $context["pedido"], "fecha", [], "any", false, false, false, 54)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pedido"], "fecha", [], "any", false, false, false, 54), "Y-m-d"), "html", null, true))) : (print ("")));
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pedido"], "nombrePedido", [], "any", false, false, false, 55), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 56
                echo ((twig_get_attribute($this->env, $this->source, $context["pedido"], "estado", [], "any", false, false, false, 56)) ? ("Factura") : ("Presupuesto"));
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pedido"], "Cliente", [], "any", false, false, false, 57), "html", null, true);
                echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>

\t\t\t\t\t\t\t\t<a href=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedido_show", ["id" => twig_get_attribute($this->env, $this->source, $context["pedido"], "id", [], "any", false, false, false, 61)]), "html", null, true);
                echo "\">Ver / 
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"/descargar\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-download\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            } else {
                // line 71
                echo "
\t\t\t\t\t";
            }
            // line 73
            echo "
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "\t\t\t</tbody>
\t\t</table>

\t\t<div class=\"posicionpaginado\">
\t\t\t<ul class=\"pagination\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">«</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">1</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a class=\"active\" href=\"#\">2</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">3</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">4</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">5</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">6</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">7</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">»</a>
\t\t\t\t</li>
\t\t\t</ul>

\t\t</div>


\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pedido/indexFacturas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 75,  169 => 73,  165 => 71,  152 => 61,  145 => 57,  141 => 56,  137 => 55,  133 => 54,  129 => 53,  124 => 50,  122 => 49,  119 => 48,  115 => 47,  79 => 14,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'menu.html.twig' %}


{% block contenido %}

\t<br>
\t<div>

\t\t<div>
\t\t\t<a href=\"/pedido\" class=\"botonpedido botonesindex\">Pedidos
\t\t\t</a>
\t\t\t<a href=\"/pedido/facturas\" class=\"botonpedido botonesindex\">Facturas</a>

\t\t\t<a href=\"{{ path('app_pedido_new') }}\" class=\"botonpedido\">
\t\t\t\t<i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
\t\t\t\t<i class=\"fa fa-file-text-o\" aria-hidden=\"true\"></i>
\t\t\t</a>

\t\t\t<a href=\"/cliente\" class=\"botonpedido\">
\t\t\t\t<i class=\"fa fa-user\" aria-hidden=\"true\"></i>
\t\t\t</a>

\t\t\t<a href=\"/producto\" class=\"botonpedido\">

\t\t\t\t<i class=\"fa fa-shopping-basket\" aria-hidden=\"true\"></i>
\t\t\t</a>


\t\t</div>
\t\t<div class=\"hrposicion\">
\t\t\t<hr width=\"100%\" align=\"right\" size=\"30\">
\t\t</div>

\t\t<table class=\"tablePedidos\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"col\">ID</th>
\t\t\t\t\t<th scope=\"col\">Fecha</th>
\t\t\t\t\t<th scope=\"col\">Nombre Factura</th>
\t\t\t\t\t<th scope=\"col\">Estado</th>
\t\t\t\t\t<th scope=\"col\">Cliente</th>
\t\t\t\t\t<th scope=\"col\">Actions</th>

\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for pedido in pedidos %}

\t\t\t\t\t{% if pedido.estado == true %}


\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>{{ pedido.id }}</td>
\t\t\t\t\t\t\t<td>{{ pedido.fecha ? pedido.fecha|date('Y-m-d') : '' }}</td>
\t\t\t\t\t\t\t<td>{{ pedido.nombrePedido }}</td>
\t\t\t\t\t\t\t<td>{{ pedido.estado ? 'Factura' : 'Presupuesto' }}</td>
\t\t\t\t\t\t\t<td>{{ pedido.Cliente}}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>

\t\t\t\t\t\t\t\t<a href=\"{{ path('app_pedido_show', {'id': pedido.id}) }}\">Ver / 
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"/descargar\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-download\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% else %}

\t\t\t\t\t{% endif %}

\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>

\t\t<div class=\"posicionpaginado\">
\t\t\t<ul class=\"pagination\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">«</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">1</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a class=\"active\" href=\"#\">2</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">3</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">4</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">5</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">6</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">7</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">»</a>
\t\t\t\t</li>
\t\t\t</ul>

\t\t</div>


\t{% endblock %}
", "pedido/indexFacturas.html.twig", "C:\\Users\\aleol\\Desktop\\Pedidos\\GestionFacturas\\templates\\pedido\\indexFacturas.html.twig");
    }
}
