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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "general.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc5d01870b1213ff312c2e91329ad41ba6fe823cecfa9a05402c816b5a5ee802 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc5d01870b1213ff312c2e91329ad41ba6fe823cecfa9a05402c816b5a5ee802->enter($__internal_bc5d01870b1213ff312c2e91329ad41ba6fe823cecfa9a05402c816b5a5ee802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        $__internal_3aa4faeb44b4cf22a91b3c8498a5b06e23b2e2c936c6771ea487f1d3ef357246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aa4faeb44b4cf22a91b3c8498a5b06e23b2e2c936c6771ea487f1d3ef357246->enter($__internal_3aa4faeb44b4cf22a91b3c8498a5b06e23b2e2c936c6771ea487f1d3ef357246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc5d01870b1213ff312c2e91329ad41ba6fe823cecfa9a05402c816b5a5ee802->leave($__internal_bc5d01870b1213ff312c2e91329ad41ba6fe823cecfa9a05402c816b5a5ee802_prof);

        
        $__internal_3aa4faeb44b4cf22a91b3c8498a5b06e23b2e2c936c6771ea487f1d3ef357246->leave($__internal_3aa4faeb44b4cf22a91b3c8498a5b06e23b2e2c936c6771ea487f1d3ef357246_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a4dd92ec715092de5841726d6ac58699f0f5d17d39be7deb012197d8880ab64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a4dd92ec715092de5841726d6ac58699f0f5d17d39be7deb012197d8880ab64->enter($__internal_5a4dd92ec715092de5841726d6ac58699f0f5d17d39be7deb012197d8880ab64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_71c1b7d631244374020c30a91ac6d9365d11ea65cc38f6b8c56fa03cb8e8e383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71c1b7d631244374020c30a91ac6d9365d11ea65cc38f6b8c56fa03cb8e8e383->enter($__internal_71c1b7d631244374020c30a91ac6d9365d11ea65cc38f6b8c56fa03cb8e8e383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "<h1>Your lucky number is ";
        echo twig_escape_filter($this->env, ($context["number"] ?? $this->getContext($context, "number")), "html", null, true);
        echo "</h1>";
        
        $__internal_71c1b7d631244374020c30a91ac6d9365d11ea65cc38f6b8c56fa03cb8e8e383->leave($__internal_71c1b7d631244374020c30a91ac6d9365d11ea65cc38f6b8c56fa03cb8e8e383_prof);

        
        $__internal_5a4dd92ec715092de5841726d6ac58699f0f5d17d39be7deb012197d8880ab64->leave($__internal_5a4dd92ec715092de5841726d6ac58699f0f5d17d39be7deb012197d8880ab64_prof);

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
        return array (  40 => 3,  11 => 1,);
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

{% block body %}<h1>Your lucky number is {{ number }}</h1>{% endblock %}
", "lucky/number.html.twig", "/var/www/sites/brt/app/Resources/views/lucky/number.html.twig");
    }
}
