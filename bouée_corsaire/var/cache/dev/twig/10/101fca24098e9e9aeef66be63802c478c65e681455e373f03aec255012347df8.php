<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0cbd488f23589e41bcd752d45e9ba66b6639d042a3a45d204995bfbb7bee6bad extends Twig_Template
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
        $__internal_829dbd6bbc14b7dd85a76af421cfc87bfc6b96db5bfd5d5be6be0ec463f3bf5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_829dbd6bbc14b7dd85a76af421cfc87bfc6b96db5bfd5d5be6be0ec463f3bf5a->enter($__internal_829dbd6bbc14b7dd85a76af421cfc87bfc6b96db5bfd5d5be6be0ec463f3bf5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_829dbd6bbc14b7dd85a76af421cfc87bfc6b96db5bfd5d5be6be0ec463f3bf5a->leave($__internal_829dbd6bbc14b7dd85a76af421cfc87bfc6b96db5bfd5d5be6be0ec463f3bf5a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6ead4b5cf640a6e666760228d36fa579689a2362a37a63d8b2d840bcafd6d936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ead4b5cf640a6e666760228d36fa579689a2362a37a63d8b2d840bcafd6d936->enter($__internal_6ead4b5cf640a6e666760228d36fa579689a2362a37a63d8b2d840bcafd6d936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6ead4b5cf640a6e666760228d36fa579689a2362a37a63d8b2d840bcafd6d936->leave($__internal_6ead4b5cf640a6e666760228d36fa579689a2362a37a63d8b2d840bcafd6d936_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7f2fa5292078f3f5b1a0b2d11101698f30587800a4176e93c7960f306b599497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f2fa5292078f3f5b1a0b2d11101698f30587800a4176e93c7960f306b599497->enter($__internal_7f2fa5292078f3f5b1a0b2d11101698f30587800a4176e93c7960f306b599497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7f2fa5292078f3f5b1a0b2d11101698f30587800a4176e93c7960f306b599497->leave($__internal_7f2fa5292078f3f5b1a0b2d11101698f30587800a4176e93c7960f306b599497_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_55f176f7a6671bab39211cb5dc77e74f3a66b923532a9a4268c7259f36317564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55f176f7a6671bab39211cb5dc77e74f3a66b923532a9a4268c7259f36317564->enter($__internal_55f176f7a6671bab39211cb5dc77e74f3a66b923532a9a4268c7259f36317564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_55f176f7a6671bab39211cb5dc77e74f3a66b923532a9a4268c7259f36317564->leave($__internal_55f176f7a6671bab39211cb5dc77e74f3a66b923532a9a4268c7259f36317564_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/boue_corsaire/dossiers/specs_fonc/bouée_corsaire/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
