<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_dcdceb948a0533cef4db330b2c9c582ee2557cf0600a0a6d5424e2954ae69a69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b00ec2b39ee6095847ea39eadfa626fff4ea850bea264b0bd71c573cee95db38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b00ec2b39ee6095847ea39eadfa626fff4ea850bea264b0bd71c573cee95db38->enter($__internal_b00ec2b39ee6095847ea39eadfa626fff4ea850bea264b0bd71c573cee95db38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_e6b15c843bd73edf96d1ed1849bd49b6cf4d4f6153e13c53f8647ff71ca88834 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6b15c843bd73edf96d1ed1849bd49b6cf4d4f6153e13c53f8647ff71ca88834->enter($__internal_e6b15c843bd73edf96d1ed1849bd49b6cf4d4f6153e13c53f8647ff71ca88834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b00ec2b39ee6095847ea39eadfa626fff4ea850bea264b0bd71c573cee95db38->leave($__internal_b00ec2b39ee6095847ea39eadfa626fff4ea850bea264b0bd71c573cee95db38_prof);

        
        $__internal_e6b15c843bd73edf96d1ed1849bd49b6cf4d4f6153e13c53f8647ff71ca88834->leave($__internal_e6b15c843bd73edf96d1ed1849bd49b6cf4d4f6153e13c53f8647ff71ca88834_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b61576a359536fb532f49ac33a711115ea89ba41b718e95b654e7160356a97a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b61576a359536fb532f49ac33a711115ea89ba41b718e95b654e7160356a97a7->enter($__internal_b61576a359536fb532f49ac33a711115ea89ba41b718e95b654e7160356a97a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c137f0e5e4de1588fdad856b246af984a146cd881e63ea3181b4be49e074aa98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c137f0e5e4de1588fdad856b246af984a146cd881e63ea3181b4be49e074aa98->enter($__internal_c137f0e5e4de1588fdad856b246af984a146cd881e63ea3181b4be49e074aa98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_c137f0e5e4de1588fdad856b246af984a146cd881e63ea3181b4be49e074aa98->leave($__internal_c137f0e5e4de1588fdad856b246af984a146cd881e63ea3181b4be49e074aa98_prof);

        
        $__internal_b61576a359536fb532f49ac33a711115ea89ba41b718e95b654e7160356a97a7->leave($__internal_b61576a359536fb532f49ac33a711115ea89ba41b718e95b654e7160356a97a7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_90ef6479d0b80e06df98bbb1ffd50353b1fbb9ad62f713b6720a90ad0dec4df5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90ef6479d0b80e06df98bbb1ffd50353b1fbb9ad62f713b6720a90ad0dec4df5->enter($__internal_90ef6479d0b80e06df98bbb1ffd50353b1fbb9ad62f713b6720a90ad0dec4df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_db419ef64b869db75b2c449335ff6088ace1d55c63c8dd870853bde3c21982d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db419ef64b869db75b2c449335ff6088ace1d55c63c8dd870853bde3c21982d2->enter($__internal_db419ef64b869db75b2c449335ff6088ace1d55c63c8dd870853bde3c21982d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_db419ef64b869db75b2c449335ff6088ace1d55c63c8dd870853bde3c21982d2->leave($__internal_db419ef64b869db75b2c449335ff6088ace1d55c63c8dd870853bde3c21982d2_prof);

        
        $__internal_90ef6479d0b80e06df98bbb1ffd50353b1fbb9ad62f713b6720a90ad0dec4df5->leave($__internal_90ef6479d0b80e06df98bbb1ffd50353b1fbb9ad62f713b6720a90ad0dec4df5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/var/www/sites/brt/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
