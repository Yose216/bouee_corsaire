<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3edc72fe19792d250358a3c9643b5fd68f4264083dd8e229c64c72078bb1b939 extends Twig_Template
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
        $__internal_4179a7a42c65265026059973f582f5727de495884c0543ba765a14de6bf8164d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4179a7a42c65265026059973f582f5727de495884c0543ba765a14de6bf8164d->enter($__internal_4179a7a42c65265026059973f582f5727de495884c0543ba765a14de6bf8164d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4179a7a42c65265026059973f582f5727de495884c0543ba765a14de6bf8164d->leave($__internal_4179a7a42c65265026059973f582f5727de495884c0543ba765a14de6bf8164d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c53c385ed90d664251603a4f6897e75eca4a9dc0074b3d08624526ee1f143151 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c53c385ed90d664251603a4f6897e75eca4a9dc0074b3d08624526ee1f143151->enter($__internal_c53c385ed90d664251603a4f6897e75eca4a9dc0074b3d08624526ee1f143151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c53c385ed90d664251603a4f6897e75eca4a9dc0074b3d08624526ee1f143151->leave($__internal_c53c385ed90d664251603a4f6897e75eca4a9dc0074b3d08624526ee1f143151_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a067b871fbe505fbfdf5fc3ed583aed5d64289798186562070df00bf7f07b095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a067b871fbe505fbfdf5fc3ed583aed5d64289798186562070df00bf7f07b095->enter($__internal_a067b871fbe505fbfdf5fc3ed583aed5d64289798186562070df00bf7f07b095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a067b871fbe505fbfdf5fc3ed583aed5d64289798186562070df00bf7f07b095->leave($__internal_a067b871fbe505fbfdf5fc3ed583aed5d64289798186562070df00bf7f07b095_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8045d5be4372d7a2d5af3cb6ec3e49eb21a9ed0c6a5a0415442a4e4d2ea2ff17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8045d5be4372d7a2d5af3cb6ec3e49eb21a9ed0c6a5a0415442a4e4d2ea2ff17->enter($__internal_8045d5be4372d7a2d5af3cb6ec3e49eb21a9ed0c6a5a0415442a4e4d2ea2ff17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8045d5be4372d7a2d5af3cb6ec3e49eb21a9ed0c6a5a0415442a4e4d2ea2ff17->leave($__internal_8045d5be4372d7a2d5af3cb6ec3e49eb21a9ed0c6a5a0415442a4e4d2ea2ff17_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/boue_corsaire/dossiers/specs_fonc/bouée_corsaire/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
