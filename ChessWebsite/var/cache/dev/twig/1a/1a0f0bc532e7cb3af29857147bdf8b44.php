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

/* Payments/Payment_Form.html.twig */
class __TwigTemplate_3b0210d0562f83d7ea21694ba70d2946 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Payments/Payment_Form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Payments/Payment_Form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Payments/Payment_Form.html.twig", 1);
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
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <form class=\"form-horizontal\" method=\"POST\" action=\"https://www.sandbox.PayPal.com/cgi-bin/webscr \">
                        <fieldset>
                            <!-- Form Name -->
                            <legend>Pay with PayPal</legend>
                            <!-- Text input-->
                            <div class=\"form-group\">
                                <label class=\"col-md-4 control-label\" for=\"amount\">Payment Amount</label>
                                <div class=\"col-md-4\">
                                    <input id=\"amount\" name=\"amount\" type=\"text\" placeholder=\"amount to pay\" class=\"form-control input-md\" required=\"\">
                                </div>
                            </div>
                            <input type='hidden' name='business' value='sb-7j4hl606677@personal.example.com'>
                            <input type='hidden' name='item_name' value='Beginner Competition'>
                            <input type='hidden' name='item_number' value='Comp#N1'>
                            <input type=\"hidden\" name=\"amount\" value=\"5\">
                            <input type='hidden' name='no_shipping' value='1'>
                            <input type='hidden' name='currency_code' value='EUR'>
                            <input type='hidden' name='notify_url' value='<?php echo \$payment->route(\"notify\", \"\") ?>'>
                            <input type='hidden' name='cancel_return' value='<?php echo \$payment->route(\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Competitions");
        echo "\", \"\") ?>'>
                            <input type='hidden' name='return' value='<?php echo \$payment->route(\"return\", \"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Profile");
        echo "\") ?>'>
                            <input type=\"hidden\" name=\"cmd\" value=\"_xclick\">
                            <!-- Button -->
                            <div class=\"form-group\">
                                <label class=\"col-md-4 control-label\" for=\"submit\"></label>
                                <div class=\"col-md-4\">
                                    <button id=\"submit\" name=\"pay_now\" class=\"btn btn-danger\">Pay With PayPal</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "Payments/Payment_Form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 27,  92 => 26,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends ('base.html.twig') %}

    {% block body %}

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <form class=\"form-horizontal\" method=\"POST\" action=\"https://www.sandbox.PayPal.com/cgi-bin/webscr \">
                        <fieldset>
                            <!-- Form Name -->
                            <legend>Pay with PayPal</legend>
                            <!-- Text input-->
                            <div class=\"form-group\">
                                <label class=\"col-md-4 control-label\" for=\"amount\">Payment Amount</label>
                                <div class=\"col-md-4\">
                                    <input id=\"amount\" name=\"amount\" type=\"text\" placeholder=\"amount to pay\" class=\"form-control input-md\" required=\"\">
                                </div>
                            </div>
                            <input type='hidden' name='business' value='sb-7j4hl606677@personal.example.com'>
                            <input type='hidden' name='item_name' value='Beginner Competition'>
                            <input type='hidden' name='item_number' value='Comp#N1'>
                            <input type=\"hidden\" name=\"amount\" value=\"5\">
                            <input type='hidden' name='no_shipping' value='1'>
                            <input type='hidden' name='currency_code' value='EUR'>
                            <input type='hidden' name='notify_url' value='<?php echo \$payment->route(\"notify\", \"\") ?>'>
                            <input type='hidden' name='cancel_return' value='<?php echo \$payment->route(\"{{ path('Competitions') }}\", \"\") ?>'>
                            <input type='hidden' name='return' value='<?php echo \$payment->route(\"return\", \"{{ path('Profile') }}\") ?>'>
                            <input type=\"hidden\" name=\"cmd\" value=\"_xclick\">
                            <!-- Button -->
                            <div class=\"form-group\">
                                <label class=\"col-md-4 control-label\" for=\"submit\"></label>
                                <div class=\"col-md-4\">
                                    <button id=\"submit\" name=\"pay_now\" class=\"btn btn-danger\">Pay With PayPal</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>

    {% endblock %}
", "Payments/Payment_Form.html.twig", "C:\\Users\\Maxsi\\Documents\\GitHub\\-ChessClub\\ChessWebsite\\templates\\Payments\\Payment_Form.html.twig");
    }
}
