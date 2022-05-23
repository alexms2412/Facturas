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

/* registration/register.html.twig */
class __TwigTemplate_5a3a48a642bd67d3438e7ef6ece1fca2903a92739d6659478875c9028684df4f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Register";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    



\t<div class=\"container h-100 \">
\t\t\t<div class=\"row h-100 justify-content-center aling-items-center\">
\t\t\t\t<div class=\"col-sm-9 col-md-7 col-lg-5 bg-white rounded my-3 p-5\">

\t\t\t\t\t<h1 class=\"tituloLogin\">
\t\t\t\t\t\tGestor Pedidos
\t\t\t\t\t</h1>
                    <h4>Register</h4>
\t\t\t\t\t
    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_start');
        echo "
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "username", [], "any", false, false, false, 20), 'row');
        echo "
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 21), 'row', ["label" => "Password"]);
        // line 23
        echo "
        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "agreeTerms", [], "any", false, false, false, 24), 'row');
        echo "

        <button type=\"submit\" class=\"btn\">Register</button>
    ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_end');
        echo "


\t\t\t\t\t<br>
\t\t\t\t\t<br>
\t\t\t\t\t<a href=\"/login\">Login</a>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>










";
    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 27,  86 => 24,  83 => 23,  81 => 21,  77 => 20,  73 => 19,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "registration/register.html.twig", "C:\\Users\\aleol\\Desktop\\Pedidos\\GestionFacturas\\templates\\registration\\register.html.twig");
    }
}
