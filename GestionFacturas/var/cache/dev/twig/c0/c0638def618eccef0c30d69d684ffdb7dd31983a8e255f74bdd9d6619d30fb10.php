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

/* producto/capturarError.html.twig */
class __TwigTemplate_109ec70f6f1a76ed3c9ed298d9cbd6f94133db309b80857bbd91a091b0c90acf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "producto/capturarError.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "producto/capturarError.html.twig"));

        $this->parent = $this->loadTemplate("menu.html.twig", "producto/capturarError.html.twig", 1);
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
\t<br>
\t<br>

\t<h4 class=\"tituloLogin\">¡No se puede eliminar el producto!
\t\t<br>
\t\tPorque que está enlazado con un pedido.
\t\t<br>
\t\tSí desea eliminarlo, tendrá que eliminar antes el pedido.
\t\t<br>
\t</h4>

\t

\t<div class=\" posicionimg tituloLogin \">
\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" data-name=\"Layer 1\" width=\"400\" height=\"512.20805\" viewbox=\"0 0 790 512.20805\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path d=\"M925.56335,704.58909,903,636.49819s24.81818,24.81818,24.81818,45.18181l-4.45454-47.09091s12.72727,17.18182,11.45454,43.27273S925.56335,704.58909,925.56335,704.58909Z\" transform=\"translate(-205 -193.89598)\" fill=\"#e6e6e6\"/><path d=\"M441.02093,642.58909,419,576.13509s24.22155,24.22155,24.22155,44.09565l-4.34745-45.95885s12.42131,16.76877,11.17917,42.23245S441.02093,642.58909,441.02093,642.58909Z\" transform=\"translate(-205 -193.89598)\" fill=\"#e6e6e6\"/><path d=\"M784.72555,673.25478c.03773,43.71478-86.66489,30.26818-192.8092,30.35979s-191.53562,13.68671-191.57335-30.028,86.63317-53.29714,192.77748-53.38876S784.68782,629.54,784.72555,673.25478Z\" transform=\"translate(-205 -193.89598)\" fill=\"#e6e6e6\"/><rect y=\"509.69312\" width=\"790\" height=\"2\" fill=\"#3f3d56\"/><polygon points=\"505.336 420.322 491.459 420.322 484.855 366.797 505.336 366.797 505.336 420.322\" fill=\"#a0616a\"/><path d=\"M480.00587,416.35743H508.3101a0,0,0,0,1,0,0V433.208a0,0,0,0,1,0,0H464.69674a0,0,0,0,1,0,0v-1.54149A15.30912,15.30912,0,0,1,480.00587,416.35743Z\" fill=\"#2f2e41\"/><polygon points=\"607.336 499.322 593.459 499.322 586.855 445.797 607.336 445.797 607.336 499.322\" fill=\"#a0616a\"/><path d=\"M582.00587,495.35743H610.3101a0,0,0,0,1,0,0V512.208a0,0,0,0,1,0,0H566.69674a0,0,0,0,1,0,0v-1.54149A15.30912,15.30912,0,0,1,582.00587,495.35743Z\" fill=\"#2f2e41\"/><path d=\"M876.34486,534.205A10.31591,10.31591,0,0,0,873.449,518.654l-32.23009-131.2928L820.6113,396.2276l38.33533,126.949a10.37185,10.37185,0,0,0,17.39823,11.0284Z\" transform=\"translate(-205 -193.89598)\" fill=\"#a0616a\"/><path d=\"M851.20767,268.85955a11.38227,11.38227,0,0,0-17.41522,1.15247l-49.88538,5.72709,7.58861,19.24141,45.36779-8.49083a11.44393,11.44393,0,0,0,14.3442-17.63014Z\" transform=\"translate(-205 -193.89598)\" fill=\"#a0616a\"/><path d=\"M769,520.58909l21.76811,163.37417,27.09338-5.578s-3.98437-118.98157,9.56238-133.32513S810,505.58909,810,505.58909Z\" transform=\"translate(-205 -193.89598)\" fill=\"#2f2e41\"/><path d=\"M778,475.58909l-10,15s-77-31.99929-77,19-4.40631,85.60944-6,88,18.43762,8.59375,28,7c0,0,11.79687-82.21884,11-87,0,0,75.53355,37.03335,89.87712,33.84591S831.60944,536.964,834,530.58909s-1-57-1-57l-47.81-14.59036Z\" transform=\"translate(-205 -193.89598)\" fill=\"#2f2e41\"/><path d=\"M779.34915,385.52862l-2.85032-3.42039s-31.92361-71.82815-19.3822-91.21035,67.26762-22.23252,68.97783-21.0924-4.08488,15.9428-.09446,22.78361c0,0-42.394,9.19121-45.24435,10.33134s21.96615,43.2737,21.96615,43.2737l-2.85031,25.6529Z\" transform=\"translate(-205 -193.89598)\" fill=\"#ccc\"/><path d=\"M835.21549,350.18459S805.57217,353.605,804.432,353.605s-1.71017-7.41084-1.71017-7.41084l-26.223,35.91406S763.57961,486.29929,767,484.58909s66.50531,8.11165,67.07539,3.55114-.57008-27.3631,1.14014-28.50324,29.64328-71.82811,29.64328-71.82811-2.85032-14.82168-12.54142-19.95227S835.21549,350.18459,835.21549,350.18459Z\" transform=\"translate(-205 -193.89598)\" fill=\"#ccc\"/><path d=\"M855.73783,378.11779l9.121,9.69109S878.41081,499.1687,871,502.58909s-22,3-22,3l-14.35458-52.79286Z\" transform=\"translate(-205 -193.89598)\" fill=\"#ccc\"/><circle cx=\"601.72966\" cy=\"122.9976\" r=\"26.2388\" fill=\"#a0616a\"/><path d=\"M800.57267,320.98789c-.35442-5.44445-7.22306-5.631-12.67878-5.68255s-11.97836.14321-15.0654-4.35543c-2.0401-2.973-1.65042-7.10032.035-10.28779s4.45772-5.639,7.18508-7.99742c7.04139-6.08884,14.29842-12.12936,22.7522-16.02662s18.36045-5.472,27.12788-2.3435c10.77008,3.84307,25.32927,23.62588,26.5865,34.99176s-3.28507,22.95252-10.9419,31.44586-25.18188,5.0665-36.21069,8.088c6.7049-9.48964,2.28541-26.73258-8.45572-31.164Z\" transform=\"translate(-205 -193.89598)\" fill=\"#2f2e41\"/><circle cx=\"361.7217\" cy=\"403.5046\" r=\"62.98931\" fill=\"#6c63ff\"/><path d=\"M524.65625,529.9355a45.15919,45.15919,0,0,1-41.25537-26.78614L383.44873,278.05757a59.83039,59.83039,0,1,1,111.87012-41.86426l72.37744,235.41211a45.07978,45.07978,0,0,1-43.04,58.33008Z\" transform=\"translate(-205 -193.89598)\" fill=\"#6c63ff\"/></svg>
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "producto/capturarError.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'menu.html.twig' %}


{% block contenido %}


\t<br>
\t<br>
\t<br>

\t<h4 class=\"tituloLogin\">¡No se puede eliminar el producto!
\t\t<br>
\t\tPorque que está enlazado con un pedido.
\t\t<br>
\t\tSí desea eliminarlo, tendrá que eliminar antes el pedido.
\t\t<br>
\t</h4>

\t

\t<div class=\" posicionimg tituloLogin \">
\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" data-name=\"Layer 1\" width=\"400\" height=\"512.20805\" viewbox=\"0 0 790 512.20805\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><path d=\"M925.56335,704.58909,903,636.49819s24.81818,24.81818,24.81818,45.18181l-4.45454-47.09091s12.72727,17.18182,11.45454,43.27273S925.56335,704.58909,925.56335,704.58909Z\" transform=\"translate(-205 -193.89598)\" fill=\"#e6e6e6\"/><path d=\"M441.02093,642.58909,419,576.13509s24.22155,24.22155,24.22155,44.09565l-4.34745-45.95885s12.42131,16.76877,11.17917,42.23245S441.02093,642.58909,441.02093,642.58909Z\" transform=\"translate(-205 -193.89598)\" fill=\"#e6e6e6\"/><path d=\"M784.72555,673.25478c.03773,43.71478-86.66489,30.26818-192.8092,30.35979s-191.53562,13.68671-191.57335-30.028,86.63317-53.29714,192.77748-53.38876S784.68782,629.54,784.72555,673.25478Z\" transform=\"translate(-205 -193.89598)\" fill=\"#e6e6e6\"/><rect y=\"509.69312\" width=\"790\" height=\"2\" fill=\"#3f3d56\"/><polygon points=\"505.336 420.322 491.459 420.322 484.855 366.797 505.336 366.797 505.336 420.322\" fill=\"#a0616a\"/><path d=\"M480.00587,416.35743H508.3101a0,0,0,0,1,0,0V433.208a0,0,0,0,1,0,0H464.69674a0,0,0,0,1,0,0v-1.54149A15.30912,15.30912,0,0,1,480.00587,416.35743Z\" fill=\"#2f2e41\"/><polygon points=\"607.336 499.322 593.459 499.322 586.855 445.797 607.336 445.797 607.336 499.322\" fill=\"#a0616a\"/><path d=\"M582.00587,495.35743H610.3101a0,0,0,0,1,0,0V512.208a0,0,0,0,1,0,0H566.69674a0,0,0,0,1,0,0v-1.54149A15.30912,15.30912,0,0,1,582.00587,495.35743Z\" fill=\"#2f2e41\"/><path d=\"M876.34486,534.205A10.31591,10.31591,0,0,0,873.449,518.654l-32.23009-131.2928L820.6113,396.2276l38.33533,126.949a10.37185,10.37185,0,0,0,17.39823,11.0284Z\" transform=\"translate(-205 -193.89598)\" fill=\"#a0616a\"/><path d=\"M851.20767,268.85955a11.38227,11.38227,0,0,0-17.41522,1.15247l-49.88538,5.72709,7.58861,19.24141,45.36779-8.49083a11.44393,11.44393,0,0,0,14.3442-17.63014Z\" transform=\"translate(-205 -193.89598)\" fill=\"#a0616a\"/><path d=\"M769,520.58909l21.76811,163.37417,27.09338-5.578s-3.98437-118.98157,9.56238-133.32513S810,505.58909,810,505.58909Z\" transform=\"translate(-205 -193.89598)\" fill=\"#2f2e41\"/><path d=\"M778,475.58909l-10,15s-77-31.99929-77,19-4.40631,85.60944-6,88,18.43762,8.59375,28,7c0,0,11.79687-82.21884,11-87,0,0,75.53355,37.03335,89.87712,33.84591S831.60944,536.964,834,530.58909s-1-57-1-57l-47.81-14.59036Z\" transform=\"translate(-205 -193.89598)\" fill=\"#2f2e41\"/><path d=\"M779.34915,385.52862l-2.85032-3.42039s-31.92361-71.82815-19.3822-91.21035,67.26762-22.23252,68.97783-21.0924-4.08488,15.9428-.09446,22.78361c0,0-42.394,9.19121-45.24435,10.33134s21.96615,43.2737,21.96615,43.2737l-2.85031,25.6529Z\" transform=\"translate(-205 -193.89598)\" fill=\"#ccc\"/><path d=\"M835.21549,350.18459S805.57217,353.605,804.432,353.605s-1.71017-7.41084-1.71017-7.41084l-26.223,35.91406S763.57961,486.29929,767,484.58909s66.50531,8.11165,67.07539,3.55114-.57008-27.3631,1.14014-28.50324,29.64328-71.82811,29.64328-71.82811-2.85032-14.82168-12.54142-19.95227S835.21549,350.18459,835.21549,350.18459Z\" transform=\"translate(-205 -193.89598)\" fill=\"#ccc\"/><path d=\"M855.73783,378.11779l9.121,9.69109S878.41081,499.1687,871,502.58909s-22,3-22,3l-14.35458-52.79286Z\" transform=\"translate(-205 -193.89598)\" fill=\"#ccc\"/><circle cx=\"601.72966\" cy=\"122.9976\" r=\"26.2388\" fill=\"#a0616a\"/><path d=\"M800.57267,320.98789c-.35442-5.44445-7.22306-5.631-12.67878-5.68255s-11.97836.14321-15.0654-4.35543c-2.0401-2.973-1.65042-7.10032.035-10.28779s4.45772-5.639,7.18508-7.99742c7.04139-6.08884,14.29842-12.12936,22.7522-16.02662s18.36045-5.472,27.12788-2.3435c10.77008,3.84307,25.32927,23.62588,26.5865,34.99176s-3.28507,22.95252-10.9419,31.44586-25.18188,5.0665-36.21069,8.088c6.7049-9.48964,2.28541-26.73258-8.45572-31.164Z\" transform=\"translate(-205 -193.89598)\" fill=\"#2f2e41\"/><circle cx=\"361.7217\" cy=\"403.5046\" r=\"62.98931\" fill=\"#6c63ff\"/><path d=\"M524.65625,529.9355a45.15919,45.15919,0,0,1-41.25537-26.78614L383.44873,278.05757a59.83039,59.83039,0,1,1,111.87012-41.86426l72.37744,235.41211a45.07978,45.07978,0,0,1-43.04,58.33008Z\" transform=\"translate(-205 -193.89598)\" fill=\"#6c63ff\"/></svg>
\t</div>

{% endblock %}
", "producto/capturarError.html.twig", "C:\\Users\\aleol\\Desktop\\Pedidos\\GestionFacturas\\templates\\producto\\capturarError.html.twig");
    }
}
