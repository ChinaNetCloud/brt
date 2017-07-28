<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_10c655f3109ad76fadc16109c8d51996220afd5b182e8327ed819e323ad88e49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f53280bdfde20d3c06abc158f73bb2a352f9c7fff80e61b023c55e1d91c84834 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f53280bdfde20d3c06abc158f73bb2a352f9c7fff80e61b023c55e1d91c84834->enter($__internal_f53280bdfde20d3c06abc158f73bb2a352f9c7fff80e61b023c55e1d91c84834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_acddf642b0ff2f39b42f09db76bfe1323d64290b30ace18714088ea980c16ee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acddf642b0ff2f39b42f09db76bfe1323d64290b30ace18714088ea980c16ee6->enter($__internal_acddf642b0ff2f39b42f09db76bfe1323d64290b30ace18714088ea980c16ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f53280bdfde20d3c06abc158f73bb2a352f9c7fff80e61b023c55e1d91c84834->leave($__internal_f53280bdfde20d3c06abc158f73bb2a352f9c7fff80e61b023c55e1d91c84834_prof);

        
        $__internal_acddf642b0ff2f39b42f09db76bfe1323d64290b30ace18714088ea980c16ee6->leave($__internal_acddf642b0ff2f39b42f09db76bfe1323d64290b30ace18714088ea980c16ee6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2ee861682b1f3c0599b0d1a2e4b142c4e269927fa230f3a59c252e74c9db97ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ee861682b1f3c0599b0d1a2e4b142c4e269927fa230f3a59c252e74c9db97ec->enter($__internal_2ee861682b1f3c0599b0d1a2e4b142c4e269927fa230f3a59c252e74c9db97ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ee0d1de6696003f529ddbea09239627cf29f2394b852d09871fd0f8d76c912fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee0d1de6696003f529ddbea09239627cf29f2394b852d09871fd0f8d76c912fe->enter($__internal_ee0d1de6696003f529ddbea09239627cf29f2394b852d09871fd0f8d76c912fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_ee0d1de6696003f529ddbea09239627cf29f2394b852d09871fd0f8d76c912fe->leave($__internal_ee0d1de6696003f529ddbea09239627cf29f2394b852d09871fd0f8d76c912fe_prof);

        
        $__internal_2ee861682b1f3c0599b0d1a2e4b142c4e269927fa230f3a59c252e74c9db97ec->leave($__internal_2ee861682b1f3c0599b0d1a2e4b142c4e269927fa230f3a59c252e74c9db97ec_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/sites/brt/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
