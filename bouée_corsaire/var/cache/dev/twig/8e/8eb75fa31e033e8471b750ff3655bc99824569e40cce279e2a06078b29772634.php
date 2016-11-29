<?php

/* base.html.twig */
class __TwigTemplate_56206323557a87cb341dcaf64f31a631eba2843230ea4f0bb3ac0fff2f5b6c9e extends Twig_Template
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
        $__internal_be8e109b9b86335f5089247fda1dd6cae3cc876cdbea83387ba3566858f5b3ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be8e109b9b86335f5089247fda1dd6cae3cc876cdbea83387ba3566858f5b3ab->enter($__internal_be8e109b9b86335f5089247fda1dd6cae3cc876cdbea83387ba3566858f5b3ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/lib/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
   <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/css/style.css\" rel=\"stylesheet\">
    <!-- CSS -->
    

<!--    <link rel=\"stylesheet\" href=\"../../../web/libre/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"../../../web/css/style.css\">-->
    <!-- SCRIPT -->
   <!-- <script src=\"../../../web/libre/jquery-3.1.1.min.js\"></script>
    <script src=\"../../../web/libre/bootstrap.min.js\"></script>-->
    <!-- TYPOGRAPHIE -->
<!--    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i\" rel=\"stylesheet\">-->
</head>

<body>
   <!-- ";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        echo "-->
    ";
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "    <h1>trololo</h1>
</body>

</html>";
        
        $__internal_be8e109b9b86335f5089247fda1dd6cae3cc876cdbea83387ba3566858f5b3ab->leave($__internal_be8e109b9b86335f5089247fda1dd6cae3cc876cdbea83387ba3566858f5b3ab_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8ceff8e204f34e1ef19b6952f7cf6796db7ac3efbc6b8c90f8a73ec54d7e248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8ceff8e204f34e1ef19b6952f7cf6796db7ac3efbc6b8c90f8a73ec54d7e248->enter($__internal_c8ceff8e204f34e1ef19b6952f7cf6796db7ac3efbc6b8c90f8a73ec54d7e248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c8ceff8e204f34e1ef19b6952f7cf6796db7ac3efbc6b8c90f8a73ec54d7e248->leave($__internal_c8ceff8e204f34e1ef19b6952f7cf6796db7ac3efbc6b8c90f8a73ec54d7e248_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_30048edf1fa38576f9c0f0b7000d053c70842665bad054a304d9f0f978bc9aed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30048edf1fa38576f9c0f0b7000d053c70842665bad054a304d9f0f978bc9aed->enter($__internal_30048edf1fa38576f9c0f0b7000d053c70842665bad054a304d9f0f978bc9aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_30048edf1fa38576f9c0f0b7000d053c70842665bad054a304d9f0f978bc9aed->leave($__internal_30048edf1fa38576f9c0f0b7000d053c70842665bad054a304d9f0f978bc9aed_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_69dac79ed4b889fd1c764a6072b558507502627f6080604c5881171d21b5ff06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69dac79ed4b889fd1c764a6072b558507502627f6080604c5881171d21b5ff06->enter($__internal_69dac79ed4b889fd1c764a6072b558507502627f6080604c5881171d21b5ff06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_69dac79ed4b889fd1c764a6072b558507502627f6080604c5881171d21b5ff06->leave($__internal_69dac79ed4b889fd1c764a6072b558507502627f6080604c5881171d21b5ff06_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d7d6b31b4b1abd56d59c767f2277cdd343a910bd301b28580c238fbd0b73e849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7d6b31b4b1abd56d59c767f2277cdd343a910bd301b28580c238fbd0b73e849->enter($__internal_d7d6b31b4b1abd56d59c767f2277cdd343a910bd301b28580c238fbd0b73e849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d7d6b31b4b1abd56d59c767f2277cdd343a910bd301b28580c238fbd0b73e849->leave($__internal_d7d6b31b4b1abd56d59c767f2277cdd343a910bd301b28580c238fbd0b73e849_prof);

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
        return array (  116 => 26,  105 => 25,  94 => 7,  82 => 6,  72 => 27,  70 => 26,  66 => 25,  49 => 11,  45 => 10,  39 => 8,  37 => 7,  33 => 6,  26 => 1,);
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
    
    <link href=\"{{ app.request.basepath }}/lib/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
   <link href=\"{{ app.request.basepath }}/css/style.css\" rel=\"stylesheet\">
    <!-- CSS -->
    

<!--    <link rel=\"stylesheet\" href=\"../../../web/libre/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"../../../web/css/style.css\">-->
    <!-- SCRIPT -->
   <!-- <script src=\"../../../web/libre/jquery-3.1.1.min.js\"></script>
    <script src=\"../../../web/libre/bootstrap.min.js\"></script>-->
    <!-- TYPOGRAPHIE -->
<!--    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i\" rel=\"stylesheet\">-->
</head>

<body>
   <!-- {% block body %}{% endblock %}-->
    {% block javascripts %}{% endblock %}
    <h1>trololo</h1>
</body>

</html>", "base.html.twig", "/var/www/html/bouée_corsaire/app/Resources/views/base.html.twig");
    }
}
