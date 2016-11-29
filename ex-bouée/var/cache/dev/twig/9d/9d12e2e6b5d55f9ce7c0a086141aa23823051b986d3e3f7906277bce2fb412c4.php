<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e7caff4e4395f0836daa64a927ba4571e2b55395249695160d97c6e0d52b006b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3608c6e2e5e0ec4eb6094e7c62e802cf6a63b4935d86883ac356a05580301452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3608c6e2e5e0ec4eb6094e7c62e802cf6a63b4935d86883ac356a05580301452->enter($__internal_3608c6e2e5e0ec4eb6094e7c62e802cf6a63b4935d86883ac356a05580301452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3608c6e2e5e0ec4eb6094e7c62e802cf6a63b4935d86883ac356a05580301452->leave($__internal_3608c6e2e5e0ec4eb6094e7c62e802cf6a63b4935d86883ac356a05580301452_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6e0ccdfc7c06157fae48249520297b871c6199b5c3b59bdac45f47e2ec156fa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e0ccdfc7c06157fae48249520297b871c6199b5c3b59bdac45f47e2ec156fa4->enter($__internal_6e0ccdfc7c06157fae48249520297b871c6199b5c3b59bdac45f47e2ec156fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6e0ccdfc7c06157fae48249520297b871c6199b5c3b59bdac45f47e2ec156fa4->leave($__internal_6e0ccdfc7c06157fae48249520297b871c6199b5c3b59bdac45f47e2ec156fa4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9bc49c1847f5211cb19bfc81b5ced8dab96a8e2064fb1891989d0534e75255e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bc49c1847f5211cb19bfc81b5ced8dab96a8e2064fb1891989d0534e75255e9->enter($__internal_9bc49c1847f5211cb19bfc81b5ced8dab96a8e2064fb1891989d0534e75255e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9bc49c1847f5211cb19bfc81b5ced8dab96a8e2064fb1891989d0534e75255e9->leave($__internal_9bc49c1847f5211cb19bfc81b5ced8dab96a8e2064fb1891989d0534e75255e9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0147fc84eea31934551aff51bf371e11813cf5a9ab49bf07819ba3e9fdb742c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0147fc84eea31934551aff51bf371e11813cf5a9ab49bf07819ba3e9fdb742c9->enter($__internal_0147fc84eea31934551aff51bf371e11813cf5a9ab49bf07819ba3e9fdb742c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0147fc84eea31934551aff51bf371e11813cf5a9ab49bf07819ba3e9fdb742c9->leave($__internal_0147fc84eea31934551aff51bf371e11813cf5a9ab49bf07819ba3e9fdb742c9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/bouée_corsaire/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
