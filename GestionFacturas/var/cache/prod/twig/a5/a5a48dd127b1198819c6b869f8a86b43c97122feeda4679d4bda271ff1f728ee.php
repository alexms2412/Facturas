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

/* security/login.html.twig */
class __TwigTemplate_3f9a989a2983ac2de781751d8f7a4ff8420d64f4df0c4c015046a36fd9d8b9e6 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Log in!
";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t<form method=\"post\">
\t\t";
        // line 8
        if (($context["error"] ?? null)) {
            // line 9
            echo "\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 9), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 9), "security"), "html", null, true);
            echo "</div>
\t\t";
        }
        // line 11
        echo "

\t\t<div class=\"container h-100 \">
\t\t\t<div class=\"row h-100 justify-content-center aling-items-center\">
\t\t\t\t<div class=\"col-sm-9 col-md-7 col-lg-5 bg-white rounded my-3 p-5\">

\t\t\t\t\t<h1 class=\"tituloLogin\">
\t\t\t\t\t\tGestor Pedidos
\t\t\t\t\t</h1>
\t\t\t\t\t<h4 >Please sign in</h4>
\t\t\t\t\t<label for=\"inputUsername\">Username</label>
\t\t\t\t\t<input type=\"text\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"username\" id=\"inputUsername\" class=\"form-control\" autocomplete=\"username\" required autofocus>
\t\t\t\t\t<label for=\"inputPassword\">Password</label>
\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

\t\t\t\t\t";
        // line 28
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 28)) {
            // line 29
            echo "\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\tYou are logged in as
\t\t\t\t\t\t\t";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 31), "username", [], "any", false, false, false, 31), "html", null, true);
            echo ",
\t\t\t\t\t\t\t<a href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
\t\t\t\t\t\t
\t\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t\t<br>
\t\t\t\t\t<button class=\"btn btn-lg btn-primary\" type=\"submit\">
\t\t\t\t\t\tSign in
\t\t\t\t\t</button>
\t\t\t\t\t<br>
\t\t\t\t\t<br>
\t\t\t\t\t<a href=\"/register\">Registrarse</a>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 57
        echo "
\t</form>

 
";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 57,  111 => 35,  105 => 32,  101 => 31,  97 => 29,  95 => 28,  90 => 26,  83 => 22,  70 => 11,  64 => 9,  62 => 8,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "C:\\Users\\aleol\\Desktop\\Pedidos\\GestionFacturas\\templates\\security\\login.html.twig");
    }
}
