<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_716e4a698c6a3bac35ab68aa6eac30fa09eda240eb2344140b137df13dffea3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc3fc975dcb53e3090f648ad21e171b03b5663f06b988a0c9c3e3a18b53ac43a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc3fc975dcb53e3090f648ad21e171b03b5663f06b988a0c9c3e3a18b53ac43a->enter($__internal_fc3fc975dcb53e3090f648ad21e171b03b5663f06b988a0c9c3e3a18b53ac43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc3fc975dcb53e3090f648ad21e171b03b5663f06b988a0c9c3e3a18b53ac43a->leave($__internal_fc3fc975dcb53e3090f648ad21e171b03b5663f06b988a0c9c3e3a18b53ac43a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ab86f6090d90be07ac9c42df429c2f51c78f21ef1ac8e0a200011a74733ee793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab86f6090d90be07ac9c42df429c2f51c78f21ef1ac8e0a200011a74733ee793->enter($__internal_ab86f6090d90be07ac9c42df429c2f51c78f21ef1ac8e0a200011a74733ee793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ab86f6090d90be07ac9c42df429c2f51c78f21ef1ac8e0a200011a74733ee793->leave($__internal_ab86f6090d90be07ac9c42df429c2f51c78f21ef1ac8e0a200011a74733ee793_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f89a222e33efb4f396f6167762afd91e7ba8875e89a6b5850904e70247a2f596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f89a222e33efb4f396f6167762afd91e7ba8875e89a6b5850904e70247a2f596->enter($__internal_f89a222e33efb4f396f6167762afd91e7ba8875e89a6b5850904e70247a2f596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f89a222e33efb4f396f6167762afd91e7ba8875e89a6b5850904e70247a2f596->leave($__internal_f89a222e33efb4f396f6167762afd91e7ba8875e89a6b5850904e70247a2f596_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e7c6489c7f510425999f449467b581a09f51769d3941861960e50d68bc0826d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e7c6489c7f510425999f449467b581a09f51769d3941861960e50d68bc0826d->enter($__internal_7e7c6489c7f510425999f449467b581a09f51769d3941861960e50d68bc0826d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7e7c6489c7f510425999f449467b581a09f51769d3941861960e50d68bc0826d->leave($__internal_7e7c6489c7f510425999f449467b581a09f51769d3941861960e50d68bc0826d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/bouée_corsaire/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
