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

/* Home/Competitions.html.twig */
class __TwigTemplate_b3cbcb1394a5d07572eb407387035a68 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Home/Competitions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Home/Competitions.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Home/Competitions.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

        <h2>Competitions</h2>

        <h4>Beginner Competition</h4>
        <p>This Competition is for beginners the entry price is \$5, if you <br>
            are new to this and want to go against other members with the same <br>
            skill rating as you for this <br>
            The Out coming price amount is only small for this one as <br>
            it is for newer players and only requires a small sum to join.<br>
            <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Payment");
        echo "\">Purchase</a>

                <h4>Advanced beginner Competitions</h4>
                <p>This Competition is for Advanced beginner players the entry price is \$10, if you <br>
                    are kinda new to this and want to go against other members with the same <br>
                    skill rating as you then this competition is the one for you <br>
                    <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Payment");
        echo "\">Purchase</a>

                <h4>Proficient Competitions</h4>
                <p>This Competition is for Proficient the entry price is \$20, if you <br>
                    are Proficient to this and want to go against other members with the same <br>
                    skill rating as you then this competition is the one for you<br>
                    <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Payment");
        echo "\">Purchase</a>


                <h4>Expert Competitions</h4>
                <p>This Competition is for beginners the entry price is \$100, if you <br>
                    are an Expert to this and want to go against other members with the same <br>
                    skill rating as you then this competition is the one for you
                </p>
        <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Payment");
        echo "\">Purchase</a>


    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "Home/Competitions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 34,  98 => 26,  89 => 20,  80 => 14,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends ('base.html.twig') %}

    {% block body %}


        <h2>Competitions</h2>

        <h4>Beginner Competition</h4>
        <p>This Competition is for beginners the entry price is \$5, if you <br>
            are new to this and want to go against other members with the same <br>
            skill rating as you for this <br>
            The Out coming price amount is only small for this one as <br>
            it is for newer players and only requires a small sum to join.<br>
            <a href=\"{{ path('Payment') }}\">Purchase</a>

                <h4>Advanced beginner Competitions</h4>
                <p>This Competition is for Advanced beginner players the entry price is \$10, if you <br>
                    are kinda new to this and want to go against other members with the same <br>
                    skill rating as you then this competition is the one for you <br>
                    <a href=\"{{ path('Payment') }}\">Purchase</a>

                <h4>Proficient Competitions</h4>
                <p>This Competition is for Proficient the entry price is \$20, if you <br>
                    are Proficient to this and want to go against other members with the same <br>
                    skill rating as you then this competition is the one for you<br>
                    <a href=\"{{ path('Payment') }}\">Purchase</a>


                <h4>Expert Competitions</h4>
                <p>This Competition is for beginners the entry price is \$100, if you <br>
                    are an Expert to this and want to go against other members with the same <br>
                    skill rating as you then this competition is the one for you
                </p>
        <a href=\"{{ path('Payment') }}\">Purchase</a>


    {% endblock %}
", "Home/Competitions.html.twig", "C:\\Users\\Maxsi\\Documents\\GitHub\\-ChessClub\\ChessWebsite\\templates\\Home\\Competitions.html.twig");
    }
}
