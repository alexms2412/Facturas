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

/* menu.html.twig */
class __TwigTemplate_a5b9e8d6554d07ebf27c69fa563a8cbab66a9179f149071bef5c30db4a2c6fd3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'contenido' => [$this, 'block_contenido'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "menu.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
\t<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
\t\t<a class=\" titulo\" href=\"/pedido\">N. Empresa
\t\t</a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cliente_new");
        echo "\">
\t\t\t\t\t\t<i class=\"fa fa-user-plus fa-2x\" aria-hidden=\"true\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\" nav-link \" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_new");
        echo "\">
\t\t\t\t\t\t<i class=\"fa fa-shopping-basket fa-2x\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<i class=\"fa fa-plus fa-1x\" aria-hidden=\"true\"></i>
\t\t\t\t\t</a>

\t\t\t\t</li>
\t\t\t

\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t<i class=\"fa fa-cog fa-2x\" aria-hidden=\"true\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Ajustes empresa</a>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Ajustes usuario</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t<a class=\"nav-link\" href=\"/logout\">
\t\t\t\t\t\t<i class=\"fa fa-sign-out fa-2x \" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</li>
\t\t</ul>
\t</div>
</nav>


";
        // line 49
        $this->displayBlock('contenido', $context, $blocks);
    }

    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 49,  71 => 20,  63 => 15,  51 => 5,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "menu.html.twig", "C:\\Users\\aleol\\Desktop\\Pedidos\\GestionFacturas\\templates\\menu.html.twig");
    }
}
