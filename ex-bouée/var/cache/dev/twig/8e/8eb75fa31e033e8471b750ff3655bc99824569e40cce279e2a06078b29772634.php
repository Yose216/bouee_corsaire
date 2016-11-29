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
        $__internal_5eac40798ded5ea594ee56e678551ac5bfd740cfbf96d66f1be5d5115e258cda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eac40798ded5ea594ee56e678551ac5bfd740cfbf96d66f1be5d5115e258cda->enter($__internal_5eac40798ded5ea594ee56e678551ac5bfd740cfbf96d66f1be5d5115e258cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html> ";
        // line 2
        echo "<html>

<head>
\t<meta charset=\"UTF-8\" />
\t<title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>

<body>
\t";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        echo " ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "
</body>

</html>";
        
        $__internal_5eac40798ded5ea594ee56e678551ac5bfd740cfbf96d66f1be5d5115e258cda->leave($__internal_5eac40798ded5ea594ee56e678551ac5bfd740cfbf96d66f1be5d5115e258cda_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_353a716c3f532678830c694d2b7beb955f8a233f3551bc6a2c549e9941840600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_353a716c3f532678830c694d2b7beb955f8a233f3551bc6a2c549e9941840600->enter($__internal_353a716c3f532678830c694d2b7beb955f8a233f3551bc6a2c549e9941840600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_353a716c3f532678830c694d2b7beb955f8a233f3551bc6a2c549e9941840600->leave($__internal_353a716c3f532678830c694d2b7beb955f8a233f3551bc6a2c549e9941840600_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_52a6a9ef588dc1643139e50eeafc3cdc3e60b874c5b5837643a0f2223554cc43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52a6a9ef588dc1643139e50eeafc3cdc3e60b874c5b5837643a0f2223554cc43->enter($__internal_52a6a9ef588dc1643139e50eeafc3cdc3e60b874c5b5837643a0f2223554cc43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_52a6a9ef588dc1643139e50eeafc3cdc3e60b874c5b5837643a0f2223554cc43->leave($__internal_52a6a9ef588dc1643139e50eeafc3cdc3e60b874c5b5837643a0f2223554cc43_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_5834f8b68b3e362540485d390f443d14407d64f33fd530c947f41a33f4fd2bb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5834f8b68b3e362540485d390f443d14407d64f33fd530c947f41a33f4fd2bb0->enter($__internal_5834f8b68b3e362540485d390f443d14407d64f33fd530c947f41a33f4fd2bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5834f8b68b3e362540485d390f443d14407d64f33fd530c947f41a33f4fd2bb0->leave($__internal_5834f8b68b3e362540485d390f443d14407d64f33fd530c947f41a33f4fd2bb0_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4c5f5056c30b0dce39c13eb73e9775e8ce09c97c068f8819fb9f089ebb719c60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c5f5056c30b0dce39c13eb73e9775e8ce09c97c068f8819fb9f089ebb719c60->enter($__internal_4c5f5056c30b0dce39c13eb73e9775e8ce09c97c068f8819fb9f089ebb719c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4c5f5056c30b0dce39c13eb73e9775e8ce09c97c068f8819fb9f089ebb719c60->leave($__internal_4c5f5056c30b0dce39c13eb73e9775e8ce09c97c068f8819fb9f089ebb719c60_prof);

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
        return array (  85 => 12,  74 => 7,  62 => 6,  52 => 13,  48 => 12,  40 => 8,  38 => 7,  34 => 6,  28 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html> {# app/Resources/views/base.html.twig #}
<html>

<head>
\t<meta charset=\"UTF-8\" />
\t<title>{% block title %}Welcome!{% endblock %}</title>
\t{% block stylesheets %}{% endblock %}
\t<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>

<body>
\t{% block body %}{% endblock %} {% block javascripts %}{% endblock %}

</body>

</html>", "base.html.twig", "/var/www/html/bouée_corsaire/app/Resources/views/base.html.twig");
    }
}
