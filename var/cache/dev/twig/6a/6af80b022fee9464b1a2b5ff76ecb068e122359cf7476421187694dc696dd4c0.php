<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fc5059924611ccde1502a7dba6bb497f3d191812d2edd06cff8f79515c5c5cb1 extends Twig_Template
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
        $__internal_7a1ddecb76bf18fabb0cb7bda954f485a1acb29cbed00f7ae650e57acc62e0bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a1ddecb76bf18fabb0cb7bda954f485a1acb29cbed00f7ae650e57acc62e0bf->enter($__internal_7a1ddecb76bf18fabb0cb7bda954f485a1acb29cbed00f7ae650e57acc62e0bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_9e2579facc80d32abf5956ab24b777d71076828b358619143b8a29247994fbb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e2579facc80d32abf5956ab24b777d71076828b358619143b8a29247994fbb3->enter($__internal_9e2579facc80d32abf5956ab24b777d71076828b358619143b8a29247994fbb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a1ddecb76bf18fabb0cb7bda954f485a1acb29cbed00f7ae650e57acc62e0bf->leave($__internal_7a1ddecb76bf18fabb0cb7bda954f485a1acb29cbed00f7ae650e57acc62e0bf_prof);

        
        $__internal_9e2579facc80d32abf5956ab24b777d71076828b358619143b8a29247994fbb3->leave($__internal_9e2579facc80d32abf5956ab24b777d71076828b358619143b8a29247994fbb3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1e43fa08a0acfa3eab299d5262bcfdad4b5a238e2f748452d45aaf64ede502f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e43fa08a0acfa3eab299d5262bcfdad4b5a238e2f748452d45aaf64ede502f5->enter($__internal_1e43fa08a0acfa3eab299d5262bcfdad4b5a238e2f748452d45aaf64ede502f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_887adea3986aeb4f55a36bacf190c09ac61f7e00bd637f68375b92541a4d4b1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_887adea3986aeb4f55a36bacf190c09ac61f7e00bd637f68375b92541a4d4b1d->enter($__internal_887adea3986aeb4f55a36bacf190c09ac61f7e00bd637f68375b92541a4d4b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_887adea3986aeb4f55a36bacf190c09ac61f7e00bd637f68375b92541a4d4b1d->leave($__internal_887adea3986aeb4f55a36bacf190c09ac61f7e00bd637f68375b92541a4d4b1d_prof);

        
        $__internal_1e43fa08a0acfa3eab299d5262bcfdad4b5a238e2f748452d45aaf64ede502f5->leave($__internal_1e43fa08a0acfa3eab299d5262bcfdad4b5a238e2f748452d45aaf64ede502f5_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5b6a2853ed6851e00f87f4d388f264f5d35aca6b9ddf5327e31aecf8270cfe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5b6a2853ed6851e00f87f4d388f264f5d35aca6b9ddf5327e31aecf8270cfe0->enter($__internal_d5b6a2853ed6851e00f87f4d388f264f5d35aca6b9ddf5327e31aecf8270cfe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_124f3cf1af49dfc7fb907e3e5c0f43d2abb5418ac3e6eb5e9fcfa4cfcab58a76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_124f3cf1af49dfc7fb907e3e5c0f43d2abb5418ac3e6eb5e9fcfa4cfcab58a76->enter($__internal_124f3cf1af49dfc7fb907e3e5c0f43d2abb5418ac3e6eb5e9fcfa4cfcab58a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_124f3cf1af49dfc7fb907e3e5c0f43d2abb5418ac3e6eb5e9fcfa4cfcab58a76->leave($__internal_124f3cf1af49dfc7fb907e3e5c0f43d2abb5418ac3e6eb5e9fcfa4cfcab58a76_prof);

        
        $__internal_d5b6a2853ed6851e00f87f4d388f264f5d35aca6b9ddf5327e31aecf8270cfe0->leave($__internal_d5b6a2853ed6851e00f87f4d388f264f5d35aca6b9ddf5327e31aecf8270cfe0_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5aea7072f92e6e2ce872c06b8dd56062d6af9b1a411ea0edbef7e69c9a354e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5aea7072f92e6e2ce872c06b8dd56062d6af9b1a411ea0edbef7e69c9a354e0->enter($__internal_d5aea7072f92e6e2ce872c06b8dd56062d6af9b1a411ea0edbef7e69c9a354e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_53dfb36db9e990c50f050408495afb2e0b11273369a4c202bd41627207dba94d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53dfb36db9e990c50f050408495afb2e0b11273369a4c202bd41627207dba94d->enter($__internal_53dfb36db9e990c50f050408495afb2e0b11273369a4c202bd41627207dba94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_53dfb36db9e990c50f050408495afb2e0b11273369a4c202bd41627207dba94d->leave($__internal_53dfb36db9e990c50f050408495afb2e0b11273369a4c202bd41627207dba94d_prof);

        
        $__internal_d5aea7072f92e6e2ce872c06b8dd56062d6af9b1a411ea0edbef7e69c9a354e0->leave($__internal_d5aea7072f92e6e2ce872c06b8dd56062d6af9b1a411ea0edbef7e69c9a354e0_prof);

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
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/sites/brt/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
