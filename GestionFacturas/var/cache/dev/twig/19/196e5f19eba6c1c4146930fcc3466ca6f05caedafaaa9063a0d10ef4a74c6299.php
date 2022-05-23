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

/* cliente/index.html.twig */
class __TwigTemplate_d983ad448f86de01cfda70eae218997a9c6220ed24b8376659f06d7563af38fd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cliente/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cliente/index.html.twig"));

        $this->parent = $this->loadTemplate("menu.html.twig", "cliente/index.html.twig", 1);
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
\t\t\t\t\t<th scope=\"col\">Nombre</th>
\t\t\t\t\t<th scope=\"col\">Apellidos</th>

\t\t\t\t\t<th scope=\"col\">Telefono</th>

\t\t\t\t\t<th scope=\"col\">Actions</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clientes"]) || array_key_exists("clientes", $context) ? $context["clientes"] : (function () { throw new RuntimeError('Variable "clientes" does not exist.', 47, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
            // line 48
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "nombre", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "apellidos", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>

\t\t\t\t\t\t<td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "telefono", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>

\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cliente_show", ["id" => twig_get_attribute($this->env, $this->source, $context["cliente"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\">Ver /</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cliente_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["cliente"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\">Editar</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 61
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"7\">No records found</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "\t\t\t</tbody>
\t\t</table>

\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cliente/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 65,  155 => 61,  146 => 57,  142 => 56,  136 => 53,  131 => 51,  127 => 50,  123 => 49,  120 => 48,  115 => 47,  79 => 14,  68 => 5,  58 => 4,  35 => 1,);
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
\t\t\t\t\t<th scope=\"col\">Nombre</th>
\t\t\t\t\t<th scope=\"col\">Apellidos</th>

\t\t\t\t\t<th scope=\"col\">Telefono</th>

\t\t\t\t\t<th scope=\"col\">Actions</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for cliente in clientes %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ cliente.id }}</td>
\t\t\t\t\t\t<td>{{ cliente.nombre }}</td>
\t\t\t\t\t\t<td>{{ cliente.apellidos }}</td>

\t\t\t\t\t\t<td>{{ cliente.telefono }}</td>

\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('app_cliente_show', {'id': cliente.id}) }}\">Ver /</a>
\t\t\t\t\t\t\t<a href=\"{{ path('app_cliente_edit', {'id': cliente.id}) }}\">Editar</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% else %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"7\">No records found</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>

\t{% endblock %}
", "cliente/index.html.twig", "C:\\Users\\aleol\\Desktop\\Pedidos\\GestionFacturas\\templates\\cliente\\index.html.twig");
    }
}
