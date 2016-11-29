<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_8221ec9024e9a0e911ba88ca87ba85e58059b66a4c8680b8f58f73f1c38849a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9511c9524d9908093b293f956ccdb55940d6970fc6a8c81654b781d9c7c53aa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9511c9524d9908093b293f956ccdb55940d6970fc6a8c81654b781d9c7c53aa9->enter($__internal_9511c9524d9908093b293f956ccdb55940d6970fc6a8c81654b781d9c7c53aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9511c9524d9908093b293f956ccdb55940d6970fc6a8c81654b781d9c7c53aa9->leave($__internal_9511c9524d9908093b293f956ccdb55940d6970fc6a8c81654b781d9c7c53aa9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_53603115d52765ec02cd7086fdc926c75a9d5cc68c38dbd97dfc3236a1111e64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53603115d52765ec02cd7086fdc926c75a9d5cc68c38dbd97dfc3236a1111e64->enter($__internal_53603115d52765ec02cd7086fdc926c75a9d5cc68c38dbd97dfc3236a1111e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_53603115d52765ec02cd7086fdc926c75a9d5cc68c38dbd97dfc3236a1111e64->leave($__internal_53603115d52765ec02cd7086fdc926c75a9d5cc68c38dbd97dfc3236a1111e64_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/var/www/html/bouée_corsaire/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
