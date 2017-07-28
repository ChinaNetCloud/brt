<?php

/* lucky/number.html.twig */
class __TwigTemplate_2be9d03a0489f506e65dc8c885cf69c29ac9444f71b9a8473afb6a116a00e40d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("general.html.twig", "lucky/number.html.twig", 1);
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
        $__internal_3f821b3818344800aae3191c4827bb5920ab2ad13c948cd29b862cf63a4a482d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f821b3818344800aae3191c4827bb5920ab2ad13c948cd29b862cf63a4a482d->enter($__internal_3f821b3818344800aae3191c4827bb5920ab2ad13c948cd29b862cf63a4a482d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        $__internal_54d80620d3bfbe2a1c29d397088596c42577ee03b0af730b1c9fdc3c9f429204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d80620d3bfbe2a1c29d397088596c42577ee03b0af730b1c9fdc3c9f429204->enter($__internal_54d80620d3bfbe2a1c29d397088596c42577ee03b0af730b1c9fdc3c9f429204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f821b3818344800aae3191c4827bb5920ab2ad13c948cd29b862cf63a4a482d->leave($__internal_3f821b3818344800aae3191c4827bb5920ab2ad13c948cd29b862cf63a4a482d_prof);

        
        $__internal_54d80620d3bfbe2a1c29d397088596c42577ee03b0af730b1c9fdc3c9f429204->leave($__internal_54d80620d3bfbe2a1c29d397088596c42577ee03b0af730b1c9fdc3c9f429204_prof);

    }

    // line 3
    public function block_dynamic_content($context, array $blocks = array())
    {
        $__internal_431f50bbc4abee5ca0855e51fd14dfdb1c4f6fa66925d3e0ed8561cf245c118a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_431f50bbc4abee5ca0855e51fd14dfdb1c4f6fa66925d3e0ed8561cf245c118a->enter($__internal_431f50bbc4abee5ca0855e51fd14dfdb1c4f6fa66925d3e0ed8561cf245c118a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dynamic_content"));

        $__internal_1ab565ba9b48cf5ea55b0d8363e513a92174759aef5d94ffd3d88b28019a2036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab565ba9b48cf5ea55b0d8363e513a92174759aef5d94ffd3d88b28019a2036->enter($__internal_1ab565ba9b48cf5ea55b0d8363e513a92174759aef5d94ffd3d88b28019a2036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dynamic_content"));

        // line 4
        echo "    <div class=\"header\">
        <h1>Your lucky number is ";
        // line 5
        echo twig_escape_filter($this->env, ($context["number"] ?? $this->getContext($context, "number")), "html", null, true);
        echo "</h1>
    </div>
";
        
        $__internal_1ab565ba9b48cf5ea55b0d8363e513a92174759aef5d94ffd3d88b28019a2036->leave($__internal_1ab565ba9b48cf5ea55b0d8363e513a92174759aef5d94ffd3d88b28019a2036_prof);

        
        $__internal_431f50bbc4abee5ca0855e51fd14dfdb1c4f6fa66925d3e0ed8561cf245c118a->leave($__internal_431f50bbc4abee5ca0855e51fd14dfdb1c4f6fa66925d3e0ed8561cf245c118a_prof);

    }

    public function getTemplateName()
    {
        return "lucky/number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
        <h1>Your lucky number is {{ number }}</h1>
    </div>
{% endblock %}
", "lucky/number.html.twig", "/var/www/sites/brt/app/Resources/views/lucky/number.html.twig");
    }
}
