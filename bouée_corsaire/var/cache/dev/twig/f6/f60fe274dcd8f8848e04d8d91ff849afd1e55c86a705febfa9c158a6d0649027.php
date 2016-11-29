<?php

/* base.html.twig */
class __TwigTemplate_003a7db4fe1bb9e485a3e1fd31d03fcd52dff8e068fa7cdc888cf8332442f604 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4fbfe6a7464537e4561703116844945df1acd01922bedea367abe8ad1c2572b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fbfe6a7464537e4561703116844945df1acd01922bedea367abe8ad1c2572b4->enter($__internal_4fbfe6a7464537e4561703116844945df1acd01922bedea367abe8ad1c2572b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    <!-- CSS -->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/libre/bootstrap.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/css/style.css\" rel=\"stylesheet\">


    <!--    <link rel=\"stylesheet\" href=\"../../../web/libre/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"../../../web/css/style.css\">-->
    <!-- SCRIPT -->
    <!-- <script src=\"../../../web/libre/jquery-3.1.1.min.js\"></script>
    <script src=\"../../../web/libre/bootstrap.min.js\"></script>-->
    <!-- TYPOGRAPHIE -->
    <!--    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i\" rel=\"stylesheet\">-->
</head>

<body>
    ";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "</body>

</html>";
        
        $__internal_4fbfe6a7464537e4561703116844945df1acd01922bedea367abe8ad1c2572b4->leave($__internal_4fbfe6a7464537e4561703116844945df1acd01922bedea367abe8ad1c2572b4_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_3459e4d585ba74e0cd458f604a2c011bd3c8abe10bdf8cd67047a71579ceb054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3459e4d585ba74e0cd458f604a2c011bd3c8abe10bdf8cd67047a71579ceb054->enter($__internal_3459e4d585ba74e0cd458f604a2c011bd3c8abe10bdf8cd67047a71579ceb054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3459e4d585ba74e0cd458f604a2c011bd3c8abe10bdf8cd67047a71579ceb054->leave($__internal_3459e4d585ba74e0cd458f604a2c011bd3c8abe10bdf8cd67047a71579ceb054_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_01050237bafa1d4b7a7c2da469058668b046e751684fe3b8296cfa9bc53865b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01050237bafa1d4b7a7c2da469058668b046e751684fe3b8296cfa9bc53865b7->enter($__internal_01050237bafa1d4b7a7c2da469058668b046e751684fe3b8296cfa9bc53865b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_01050237bafa1d4b7a7c2da469058668b046e751684fe3b8296cfa9bc53865b7->leave($__internal_01050237bafa1d4b7a7c2da469058668b046e751684fe3b8296cfa9bc53865b7_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_cca11cb9e216ac0a82b00841948ba53ce08792f3761fb4526ea6788c21819879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cca11cb9e216ac0a82b00841948ba53ce08792f3761fb4526ea6788c21819879->enter($__internal_cca11cb9e216ac0a82b00841948ba53ce08792f3761fb4526ea6788c21819879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cca11cb9e216ac0a82b00841948ba53ce08792f3761fb4526ea6788c21819879->leave($__internal_cca11cb9e216ac0a82b00841948ba53ce08792f3761fb4526ea6788c21819879_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_efb62cbb9a7fec81689c6016308e554c0d9efb1af8bd8e0f3168f360d9e78464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efb62cbb9a7fec81689c6016308e554c0d9efb1af8bd8e0f3168f360d9e78464->enter($__internal_efb62cbb9a7fec81689c6016308e554c0d9efb1af8bd8e0f3168f360d9e78464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_efb62cbb9a7fec81689c6016308e554c0d9efb1af8bd8e0f3168f360d9e78464->leave($__internal_efb62cbb9a7fec81689c6016308e554c0d9efb1af8bd8e0f3168f360d9e78464_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 26,  103 => 25,  92 => 7,  80 => 6,  71 => 27,  68 => 26,  66 => 25,  50 => 12,  46 => 11,  39 => 8,  37 => 7,  33 => 6,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

    <!-- CSS -->
    <link href=\"{{ app.request.basepath }}/libre/bootstrap.css\" rel=\"stylesheet\">
    <link href=\"{{ app.request.basepath }}/css/style.css\" rel=\"stylesheet\">


    <!--    <link rel=\"stylesheet\" href=\"../../../web/libre/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"../../../web/css/style.css\">-->
    <!-- SCRIPT -->
    <!-- <script src=\"../../../web/libre/jquery-3.1.1.min.js\"></script>
    <script src=\"../../../web/libre/bootstrap.min.js\"></script>-->
    <!-- TYPOGRAPHIE -->
    <!--    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i\" rel=\"stylesheet\">-->
</head>

<body>
    {% block body %}{% endblock %}
    {% block javascripts %}{% endblock %}
</body>

</html>", "base.html.twig", "/var/www/html/boue_corsaire/dossiers/specs_fonc/bouée_corsaire/app/Resources/views/base.html.twig");
    }
}
