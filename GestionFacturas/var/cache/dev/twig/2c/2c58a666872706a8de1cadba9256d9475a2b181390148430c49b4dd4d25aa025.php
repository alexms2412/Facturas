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

/* producto/show.html.twig */
class __TwigTemplate_467b9a1e1106608d8a41b2bca7fa6599559c9a46ae9d89813eba13e7c41f32fe extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "producto/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "producto/show.html.twig"));

        $this->parent = $this->loadTemplate("menu.html.twig", "producto/show.html.twig", 1);
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
<h1 class=\"posionTituloShow\"><i class=\"fa fa-shopping-basket\" aria-hidden=\"true\"></i>
 Producto</h1>

<table class=\"tableShow\">
\t<tbody>
\t\t<tr>
\t\t\t<th>Id</th>
\t\t\t<td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>Nombre</th>
\t\t\t<td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 17, $this->source); })()), "nombre", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>Precio</th>
\t\t\t<td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 21, $this->source); })()), "precio", [], "any", false, false, false, 21), "html", null, true);
        echo "
\t\t\t\t€</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>Descripcion</th>
\t\t\t<td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 26, $this->source); })()), "descripcion", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
\t\t</tr>
\t</tbody>
</table>

<div class=\"posicionBotonesShow\">
\t<a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)]), "html", null, true);
        echo "\">Editar /
\t</a>

\t<a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_index");
        echo "\">Back to list</a>

</div>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "producto/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 35,  109 => 32,  100 => 26,  92 => 21,  85 => 17,  78 => 13,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'menu.html.twig' %}


{% block contenido %}

<h1 class=\"posionTituloShow\"><i class=\"fa fa-shopping-basket\" aria-hidden=\"true\"></i>
 Producto</h1>

<table class=\"tableShow\">
\t<tbody>
\t\t<tr>
\t\t\t<th>Id</th>
\t\t\t<td>{{ producto.id }}</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>Nombre</th>
\t\t\t<td>{{ producto.nombre }}</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>Precio</th>
\t\t\t<td>{{ producto.precio }}
\t\t\t\t€</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>Descripcion</th>
\t\t\t<td>{{ producto.descripcion }}</td>
\t\t</tr>
\t</tbody>
</table>

<div class=\"posicionBotonesShow\">
\t<a href=\"{{ path('app_producto_edit', {'id': producto.id}) }}\">Editar /
\t</a>

\t<a href=\"{{ path('app_producto_index') }}\">Back to list</a>

</div>
 {% endblock %}
", "producto/show.html.twig", "C:\\Users\\aleol\\Desktop\\Pedidos\\GestionFacturas\\templates\\producto\\show.html.twig");
    }
}
