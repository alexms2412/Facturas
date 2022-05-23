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

/* pedido/new.html.twig */
class __TwigTemplate_71c145a585ab6c8a54a8ecb48994b84fb6e9d9c23ed4a3d5b5bdb4a8cf0c4f40 extends Template
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
        $this->parent = $this->loadTemplate("menu.html.twig", "pedido/new.html.twig", 1);
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

\t\t\t\t<h1 class=\"tituloLogin\">Nuevo Pedido</h1>

\t\t\t\t";
        // line 12
        echo twig_include($this->env, $context, "pedido/_form.html.twig");
        echo "

\t\t
\t\t\t\t<br>

\t\t\t\t<a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pedido_index");
        echo "\">Back to list</a>

\t\t\t</div>
\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "pedido/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 17,  59 => 12,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pedido/new.html.twig", "C:\\Users\\aleol\\Desktop\\Pedidos\\GestionFacturas\\templates\\pedido\\new.html.twig");
    }
}
