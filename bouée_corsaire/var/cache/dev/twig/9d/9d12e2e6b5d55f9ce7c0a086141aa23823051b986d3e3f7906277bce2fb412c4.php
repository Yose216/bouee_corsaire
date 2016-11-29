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
        $__internal_f6e5f9f09e61383387d4e292034941b700ca963ce810aaec026660d11bde1552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6e5f9f09e61383387d4e292034941b700ca963ce810aaec026660d11bde1552->enter($__internal_f6e5f9f09e61383387d4e292034941b700ca963ce810aaec026660d11bde1552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6e5f9f09e61383387d4e292034941b700ca963ce810aaec026660d11bde1552->leave($__internal_f6e5f9f09e61383387d4e292034941b700ca963ce810aaec026660d11bde1552_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a74182a5ab6a885c882b2f0a08727c7054c239d87626323674bf54c47a7e167f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a74182a5ab6a885c882b2f0a08727c7054c239d87626323674bf54c47a7e167f->enter($__internal_a74182a5ab6a885c882b2f0a08727c7054c239d87626323674bf54c47a7e167f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a74182a5ab6a885c882b2f0a08727c7054c239d87626323674bf54c47a7e167f->leave($__internal_a74182a5ab6a885c882b2f0a08727c7054c239d87626323674bf54c47a7e167f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4d1ad57e3d5e82ee85db3e9b127b6cc6bcdd81aea444204b4e21f77b429fe438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d1ad57e3d5e82ee85db3e9b127b6cc6bcdd81aea444204b4e21f77b429fe438->enter($__internal_4d1ad57e3d5e82ee85db3e9b127b6cc6bcdd81aea444204b4e21f77b429fe438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4d1ad57e3d5e82ee85db3e9b127b6cc6bcdd81aea444204b4e21f77b429fe438->leave($__internal_4d1ad57e3d5e82ee85db3e9b127b6cc6bcdd81aea444204b4e21f77b429fe438_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3af611174071977dac5de155796ab765cd2288218129674b3fd0f3f59d8f65d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3af611174071977dac5de155796ab765cd2288218129674b3fd0f3f59d8f65d7->enter($__internal_3af611174071977dac5de155796ab765cd2288218129674b3fd0f3f59d8f65d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3af611174071977dac5de155796ab765cd2288218129674b3fd0f3f59d8f65d7->leave($__internal_3af611174071977dac5de155796ab765cd2288218129674b3fd0f3f59d8f65d7_prof);

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
