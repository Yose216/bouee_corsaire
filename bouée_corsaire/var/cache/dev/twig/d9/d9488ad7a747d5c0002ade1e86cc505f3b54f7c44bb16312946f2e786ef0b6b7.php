<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4e5efbf8747fd311c2451ab134c3337efe923667935b53be24c5718de466a33c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_da265ed193203ce67501690c77017956461a9b20144b55bbaa94260d759d2af5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da265ed193203ce67501690c77017956461a9b20144b55bbaa94260d759d2af5->enter($__internal_da265ed193203ce67501690c77017956461a9b20144b55bbaa94260d759d2af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da265ed193203ce67501690c77017956461a9b20144b55bbaa94260d759d2af5->leave($__internal_da265ed193203ce67501690c77017956461a9b20144b55bbaa94260d759d2af5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eab72bb5bb7b80a9856c4ff9393800e7fba317d7d1f5d70fe2c7b0d9650b4d8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eab72bb5bb7b80a9856c4ff9393800e7fba317d7d1f5d70fe2c7b0d9650b4d8d->enter($__internal_eab72bb5bb7b80a9856c4ff9393800e7fba317d7d1f5d70fe2c7b0d9650b4d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_eab72bb5bb7b80a9856c4ff9393800e7fba317d7d1f5d70fe2c7b0d9650b4d8d->leave($__internal_eab72bb5bb7b80a9856c4ff9393800e7fba317d7d1f5d70fe2c7b0d9650b4d8d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_157da14b594ab97c7b556485f9c8c4a416b6ff8fc8f6ab97eb768b8c8d014b81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_157da14b594ab97c7b556485f9c8c4a416b6ff8fc8f6ab97eb768b8c8d014b81->enter($__internal_157da14b594ab97c7b556485f9c8c4a416b6ff8fc8f6ab97eb768b8c8d014b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_157da14b594ab97c7b556485f9c8c4a416b6ff8fc8f6ab97eb768b8c8d014b81->leave($__internal_157da14b594ab97c7b556485f9c8c4a416b6ff8fc8f6ab97eb768b8c8d014b81_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fce06ba6dcd288186855b209090cf4b6057e06c8e8977768854dc5211f7da2d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce06ba6dcd288186855b209090cf4b6057e06c8e8977768854dc5211f7da2d2->enter($__internal_fce06ba6dcd288186855b209090cf4b6057e06c8e8977768854dc5211f7da2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_fce06ba6dcd288186855b209090cf4b6057e06c8e8977768854dc5211f7da2d2->leave($__internal_fce06ba6dcd288186855b209090cf4b6057e06c8e8977768854dc5211f7da2d2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/bouée_corsaire/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
