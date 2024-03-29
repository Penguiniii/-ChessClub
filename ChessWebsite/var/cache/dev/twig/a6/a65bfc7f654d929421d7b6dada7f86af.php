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

/* Home/index.html.twig */
class __TwigTemplate_be70160992295561d4d38bfffa578ffc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Home/index.html.twig", 1);
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
        <h1>Rules</h1>
        <ol>
            <li style=\"font-size: 1.5em\"> <h3>When in doubt, ask</h3>
                <p style=\"font-size: .8em\">There is nothing wrong in clarifying your doubts with the tournament director. If <br>
                    you are not really sure about a certain tournament rule, ensure that you get your<br>
                    doubts clarified by the tournament director before the game begins.<br><br>
                    This way, you can save the time that may get wasted if you decide to ask these <br>
                    questions in the middle of a game. Similarly, when the game is in progress, if you <br>
                    and your opponent disagree about something or some rule, the wise thing to do<br>
                    would be to stop the clock and call for the tournament director to clarify it for <br>
                    the two of you. This way, you and your opponent will not waste time by indulging <br>
                    in pointless conversations.</p>
            </li>
            <br>
            <li style=\"font-size: 1.5em\"> <h3>You have to move the piece you touch</h3>
                <p style=\"font-size: .8em\">This is otherwise known as the touch move rule. Going by this rule, you will have <br>
                    to move the piece you actually touch. This is a rule to look out for, especially if you<br>
                    are a beginner. You cannot keep fiddling with your pieces and moves in a <br>
                    tournament. Hence, there is no undoing a careless move so be careful which <br>
                    piece you touch. <br><br>
                    However, if you touch a piece by mistake while reaching out for another piece,<br>
                    your opponent cannot instigate this rule. You are not required to move that piece <br>
                    for touching it accidentally. If you think that you need to adjust a certain piece <br>
                    because it is not placed correctly on the board, you may do so by saying,  “I adjust”<br>
                    before touching the piece. <br><br>
                    This way, your opponent cannot invoke this rule and make you move the piece <br>
                    you just touched. When you say this, you are making it clear that it is not your <br>
                    intention to touch the piece to move it.</p>
            </li>
            <br>
            <li style=\"font-size: 1.5em\"> <h3>Recording the moves </h3>
                <p style=\"font-size: .8em\">This is another common rule across most of the tournaments and very few <br>
                    tournaments do not have this regulation.  Players are expected to write down their<br>
                    moves in most competitions and the purpose of this is that it will serve as a <br>
                    written record of what happened during the course of the game. This can be<br>
                    referred back to in case of the necessity to solve any dispute that may arise later.<br><br>
                    Hence, recording your moves should be done with utmost concentration. Learn <br>
                    how to write them down. If you do a bad job of recording your moves, you will <br>
                    not be able to use it to your advantage when a dispute arises during the course of <br>
                    the game.</p>
            </li>
            <br>

            <li style=\"font-size: 1.5em\"> <h3>Do not interfere with a game</h3>
                <p style=\"font-size: .8em\">Players who do not have a match scheduled are usually permitted to walk around <br>
                    and observe how the other games are going. Remember that your role is<br>
                    restricted to that of an observer. In other words, you cannot interfere in the game <br>
                    at any point of time, no matter what the reason is. For instance, if you find a<br>
                    certain player making an illegal move, it is not your responsibility to report it.Let <br>
                    the players play the game their way and do not meddle with it.<br><br>
                    Similarly, you are not supposed to offer suggestions or hints or tips to any player. <br>
                    You cannot help any player when the game is going on. You may even get<br>
                    disqualified from the tournament for doing so. Henceforth, never interfere with an <br>
                    ongoing game for any reason.</p>
            </li>
            <br>

            <li style=\"font-size: 1.5em\"> <h3>Remember to turn off your cell phone</h3>
                <p style=\"font-size: .8em\">Nothing can be so annoyingly distracting like a cell phone that is ringing loudly <br>
                    in the middle of a game. As we all know, most of these games are clocked. Hence,<br>
                    these loud phones can easily distract players and waste their precious time. This is<br>
                    why tournament rules have been amended to prohibit the usage of cellular <br>
                    phones when the games are going on.<br><br>
                    According to this rule, if your phone rings in the middle of a game, you will be <br>
                    charged with a penalty. And if you thought that was the worst case, then you are wrong.<br>
                    Usage of cell phones may even result in your game getting forfeited.<br>
                    Consequently ensure that you turn off your phone before the tournament begins.</p>
            </li>
            <br>

            <li style=\"font-size: 1.5em\"> <h3>Learn to use the chess clock </h3>
                <p style=\"font-size: .8em\">As I said before, these tournaments are bound by time limits and you are required <br>
                    to finish these games within a stipulated time limit. It might be a challenge to use<br>
                    these clocks when you are a beginner but with enough practice and time, you will <br>
                    find it easier to play the game with the help of the clock. You will realize that your <br>
                    brain will start working in line with the timer.<br>
                    Hit the clock as soon as you have made your move as this is to ensure that you do<br>
                    not waste your limited time over nothing. Remember that you have to hit the<br>
                    clock with the same hand you use to move the pieces. Hence, ensure that<br>
                    you make it a point to practice this hand coordination a few times before the<br>
                    tournament.</p>
            </li>
            <br>

            <li style=\"font-size: 1.5em\"> <h3> Record your result </h3>
                <p style=\"font-size: .8em\">As soon as the game is over, make sure you record the result of the game. It is the  <br>
                    duty of both the players to record the results of the game. If you are not sure <br>
                    about the correct way to record your results, then get in touch with your  <br>
                    tournament director to assist you with it. <br><br>
                    These are some of the important rules in most of the tournaments. Some <br>
                    tournaments have additional rules as well so ensure that you familiar with the<br>
                    different rules of the tournament before it begins. If you fail to do this, you will find<br>
                    yourself at a great disadvantage and in a confused state by the multiple rules<br>
                    announced before your game commences. </p>
            </li>
            <br>
        </ol>

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "Home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends ('base.html.twig') %}

    {% block body %}

        <h1>Rules</h1>
        <ol>
            <li style=\"font-size: 1.5em\"> <h3>When in doubt, ask</h3>
                <p style=\"font-size: .8em\">There is nothing wrong in clarifying your doubts with the tournament director. If <br>
                    you are not really sure about a certain tournament rule, ensure that you get your<br>
                    doubts clarified by the tournament director before the game begins.<br><br>
                    This way, you can save the time that may get wasted if you decide to ask these <br>
                    questions in the middle of a game. Similarly, when the game is in progress, if you <br>
                    and your opponent disagree about something or some rule, the wise thing to do<br>
                    would be to stop the clock and call for the tournament director to clarify it for <br>
                    the two of you. This way, you and your opponent will not waste time by indulging <br>
                    in pointless conversations.</p>
            </li>
            <br>
            <li style=\"font-size: 1.5em\"> <h3>You have to move the piece you touch</h3>
                <p style=\"font-size: .8em\">This is otherwise known as the touch move rule. Going by this rule, you will have <br>
                    to move the piece you actually touch. This is a rule to look out for, especially if you<br>
                    are a beginner. You cannot keep fiddling with your pieces and moves in a <br>
                    tournament. Hence, there is no undoing a careless move so be careful which <br>
                    piece you touch. <br><br>
                    However, if you touch a piece by mistake while reaching out for another piece,<br>
                    your opponent cannot instigate this rule. You are not required to move that piece <br>
                    for touching it accidentally. If you think that you need to adjust a certain piece <br>
                    because it is not placed correctly on the board, you may do so by saying,  “I adjust”<br>
                    before touching the piece. <br><br>
                    This way, your opponent cannot invoke this rule and make you move the piece <br>
                    you just touched. When you say this, you are making it clear that it is not your <br>
                    intention to touch the piece to move it.</p>
            </li>
            <br>
            <li style=\"font-size: 1.5em\"> <h3>Recording the moves </h3>
                <p style=\"font-size: .8em\">This is another common rule across most of the tournaments and very few <br>
                    tournaments do not have this regulation.  Players are expected to write down their<br>
                    moves in most competitions and the purpose of this is that it will serve as a <br>
                    written record of what happened during the course of the game. This can be<br>
                    referred back to in case of the necessity to solve any dispute that may arise later.<br><br>
                    Hence, recording your moves should be done with utmost concentration. Learn <br>
                    how to write them down. If you do a bad job of recording your moves, you will <br>
                    not be able to use it to your advantage when a dispute arises during the course of <br>
                    the game.</p>
            </li>
            <br>

            <li style=\"font-size: 1.5em\"> <h3>Do not interfere with a game</h3>
                <p style=\"font-size: .8em\">Players who do not have a match scheduled are usually permitted to walk around <br>
                    and observe how the other games are going. Remember that your role is<br>
                    restricted to that of an observer. In other words, you cannot interfere in the game <br>
                    at any point of time, no matter what the reason is. For instance, if you find a<br>
                    certain player making an illegal move, it is not your responsibility to report it.Let <br>
                    the players play the game their way and do not meddle with it.<br><br>
                    Similarly, you are not supposed to offer suggestions or hints or tips to any player. <br>
                    You cannot help any player when the game is going on. You may even get<br>
                    disqualified from the tournament for doing so. Henceforth, never interfere with an <br>
                    ongoing game for any reason.</p>
            </li>
            <br>

            <li style=\"font-size: 1.5em\"> <h3>Remember to turn off your cell phone</h3>
                <p style=\"font-size: .8em\">Nothing can be so annoyingly distracting like a cell phone that is ringing loudly <br>
                    in the middle of a game. As we all know, most of these games are clocked. Hence,<br>
                    these loud phones can easily distract players and waste their precious time. This is<br>
                    why tournament rules have been amended to prohibit the usage of cellular <br>
                    phones when the games are going on.<br><br>
                    According to this rule, if your phone rings in the middle of a game, you will be <br>
                    charged with a penalty. And if you thought that was the worst case, then you are wrong.<br>
                    Usage of cell phones may even result in your game getting forfeited.<br>
                    Consequently ensure that you turn off your phone before the tournament begins.</p>
            </li>
            <br>

            <li style=\"font-size: 1.5em\"> <h3>Learn to use the chess clock </h3>
                <p style=\"font-size: .8em\">As I said before, these tournaments are bound by time limits and you are required <br>
                    to finish these games within a stipulated time limit. It might be a challenge to use<br>
                    these clocks when you are a beginner but with enough practice and time, you will <br>
                    find it easier to play the game with the help of the clock. You will realize that your <br>
                    brain will start working in line with the timer.<br>
                    Hit the clock as soon as you have made your move as this is to ensure that you do<br>
                    not waste your limited time over nothing. Remember that you have to hit the<br>
                    clock with the same hand you use to move the pieces. Hence, ensure that<br>
                    you make it a point to practice this hand coordination a few times before the<br>
                    tournament.</p>
            </li>
            <br>

            <li style=\"font-size: 1.5em\"> <h3> Record your result </h3>
                <p style=\"font-size: .8em\">As soon as the game is over, make sure you record the result of the game. It is the  <br>
                    duty of both the players to record the results of the game. If you are not sure <br>
                    about the correct way to record your results, then get in touch with your  <br>
                    tournament director to assist you with it. <br><br>
                    These are some of the important rules in most of the tournaments. Some <br>
                    tournaments have additional rules as well so ensure that you familiar with the<br>
                    different rules of the tournament before it begins. If you fail to do this, you will find<br>
                    yourself at a great disadvantage and in a confused state by the multiple rules<br>
                    announced before your game commences. </p>
            </li>
            <br>
        </ol>

    {% endblock %}
", "Home/index.html.twig", "C:\\Users\\Maxsi\\Documents\\GitHub\\-ChessClub\\ChessWebsite\\templates\\Home\\index.html.twig");
    }
}
