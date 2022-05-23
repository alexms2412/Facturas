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

/* cliente/edit.html.twig */
class __TwigTemplate_b25ad5fd0db6909a10d6c089757359addca87e2689c12f8d708ee2f59979b4cd extends Template
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
        $this->parent = $this->loadTemplate("menu.html.twig", "cliente/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "

\t<div class=\"container h-100 \">
\t\t<div class=\"row h-100 justify-content-center aling-items-center\">
\t\t\t<div class=\"col-sm-12 col-md-12 col-lg-9 bg-white rounded my-3 p-5\">

\t\t\t\t<h1 class=\"tituloLogin\">Editar Cliente
\t\t\t\t\t<a class=\"tituloLoginBotonCerrar\" href=\"/pedido\">
\t\t\t\t\t\t<i class=\"fa fa-times\" aria-hidden=\"true\"></i>

\t\t\t\t\t</a>
\t\t\t\t</h1>

\t\t\t\t";
        // line 18
        echo twig_include($this->env, $context, "cliente/_form.html.twig", ["button_label" => "Update"]);
        echo "

                <br>

\t\t\t\t";
        // line 22
        echo twig_include($this->env, $context, "cliente/_delete_form.html.twig");
        echo "

                \t<a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cliente_index");
        echo "\">Back to list</a>

\t\t\t</div>
\t\t</div>
\t</div>


";
    }

    public function getTemplateName()
    {
        return "cliente/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 24,  72 => 22,  65 => 18,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cliente/edit.html.twig", "C:\\Users\\aleol\\Desktop\\Pedidos\\GestionFacturas\\templates\\cliente\\edit.html.twig");
    }
}
