<?php

/* NCbrtBundle:Default:index.html.twig */
class __TwigTemplate_2cd03f109041329877747629949290e58091f7c20a66ae5d70f6c5349cb3c752 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("general.html.twig", "NCbrtBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'dynamic_content' => array($this, 'block_dynamic_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "general.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc91c7861a10694b6dc66992c66ae2d088f9beb3b37b6bdccef576d0e73e2dee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc91c7861a10694b6dc66992c66ae2d088f9beb3b37b6bdccef576d0e73e2dee->enter($__internal_cc91c7861a10694b6dc66992c66ae2d088f9beb3b37b6bdccef576d0e73e2dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NCbrtBundle:Default:index.html.twig"));

        $__internal_c062e07bb66d02d4f6ffdd7e9237e47307d9ab79439f4abfe865542cc02bb975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c062e07bb66d02d4f6ffdd7e9237e47307d9ab79439f4abfe865542cc02bb975->enter($__internal_c062e07bb66d02d4f6ffdd7e9237e47307d9ab79439f4abfe865542cc02bb975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NCbrtBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc91c7861a10694b6dc66992c66ae2d088f9beb3b37b6bdccef576d0e73e2dee->leave($__internal_cc91c7861a10694b6dc66992c66ae2d088f9beb3b37b6bdccef576d0e73e2dee_prof);

        
        $__internal_c062e07bb66d02d4f6ffdd7e9237e47307d9ab79439f4abfe865542cc02bb975->leave($__internal_c062e07bb66d02d4f6ffdd7e9237e47307d9ab79439f4abfe865542cc02bb975_prof);

    }

    // line 3
    public function block_dynamic_content($context, array $blocks = array())
    {
        $__internal_eab9c990a0fd6082ae5c81f4d75f73cccaaeb6a9dd7b3640e387a11001b319f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eab9c990a0fd6082ae5c81f4d75f73cccaaeb6a9dd7b3640e387a11001b319f9->enter($__internal_eab9c990a0fd6082ae5c81f4d75f73cccaaeb6a9dd7b3640e387a11001b319f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dynamic_content"));

        $__internal_792b9879483a1f0b778d1d5a1e7e60a1aa02810ca709ce9f2f7b9a59d44f593e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_792b9879483a1f0b778d1d5a1e7e60a1aa02810ca709ce9f2f7b9a59d44f593e->enter($__internal_792b9879483a1f0b778d1d5a1e7e60a1aa02810ca709ce9f2f7b9a59d44f593e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dynamic_content"));

        // line 4
        echo "    <div class=\"header\">
        <h1>Your lucky number is HELLO</h1>
    </div>
";
        
        $__internal_792b9879483a1f0b778d1d5a1e7e60a1aa02810ca709ce9f2f7b9a59d44f593e->leave($__internal_792b9879483a1f0b778d1d5a1e7e60a1aa02810ca709ce9f2f7b9a59d44f593e_prof);

        
        $__internal_eab9c990a0fd6082ae5c81f4d75f73cccaaeb6a9dd7b3640e387a11001b319f9->leave($__internal_eab9c990a0fd6082ae5c81f4d75f73cccaaeb6a9dd7b3640e387a11001b319f9_prof);

    }

    public function getTemplateName()
    {
        return "NCbrtBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'general.html.twig' %}

{% block dynamic_content %}
    <div class=\"header\">
        <h1>Your lucky number is HELLO</h1>
    </div>
{% endblock %}
", "NCbrtBundle:Default:index.html.twig", "/var/www/sites/brt/src/NCbrtBundle/Resources/views/Default/index.html.twig");
    }
}
