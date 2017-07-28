<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_650fedcf4ce545413cc7315b3ff89393155d9bb002ac7ac70df21c9fb3d99c5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_87306369ed54ac0edd38b27fbebe9afb53ffccc7dd6137fc85fc6641ff98bbe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87306369ed54ac0edd38b27fbebe9afb53ffccc7dd6137fc85fc6641ff98bbe8->enter($__internal_87306369ed54ac0edd38b27fbebe9afb53ffccc7dd6137fc85fc6641ff98bbe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_15dceeb24d3abcae82d68b3adbcad58e22095638afe15ff53d6091bc33e6d217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15dceeb24d3abcae82d68b3adbcad58e22095638afe15ff53d6091bc33e6d217->enter($__internal_15dceeb24d3abcae82d68b3adbcad58e22095638afe15ff53d6091bc33e6d217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87306369ed54ac0edd38b27fbebe9afb53ffccc7dd6137fc85fc6641ff98bbe8->leave($__internal_87306369ed54ac0edd38b27fbebe9afb53ffccc7dd6137fc85fc6641ff98bbe8_prof);

        
        $__internal_15dceeb24d3abcae82d68b3adbcad58e22095638afe15ff53d6091bc33e6d217->leave($__internal_15dceeb24d3abcae82d68b3adbcad58e22095638afe15ff53d6091bc33e6d217_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ca51bdefd9a0af5aa209760f2496efde5e9118b115edd20eb878f2612073c056 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca51bdefd9a0af5aa209760f2496efde5e9118b115edd20eb878f2612073c056->enter($__internal_ca51bdefd9a0af5aa209760f2496efde5e9118b115edd20eb878f2612073c056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2ce7306e0d325ffb6c413083fce975230de4d98d17a895d8503f6ee984c48f3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ce7306e0d325ffb6c413083fce975230de4d98d17a895d8503f6ee984c48f3b->enter($__internal_2ce7306e0d325ffb6c413083fce975230de4d98d17a895d8503f6ee984c48f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2ce7306e0d325ffb6c413083fce975230de4d98d17a895d8503f6ee984c48f3b->leave($__internal_2ce7306e0d325ffb6c413083fce975230de4d98d17a895d8503f6ee984c48f3b_prof);

        
        $__internal_ca51bdefd9a0af5aa209760f2496efde5e9118b115edd20eb878f2612073c056->leave($__internal_ca51bdefd9a0af5aa209760f2496efde5e9118b115edd20eb878f2612073c056_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_01db3fd6a2fa31aefa557d96a84cc860d7eff59dfd36f25c98494ddddde50fb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01db3fd6a2fa31aefa557d96a84cc860d7eff59dfd36f25c98494ddddde50fb7->enter($__internal_01db3fd6a2fa31aefa557d96a84cc860d7eff59dfd36f25c98494ddddde50fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_11f386a9866d0546053a99b462b6238a965b0a455f95047c97911252dce04ead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11f386a9866d0546053a99b462b6238a965b0a455f95047c97911252dce04ead->enter($__internal_11f386a9866d0546053a99b462b6238a965b0a455f95047c97911252dce04ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_11f386a9866d0546053a99b462b6238a965b0a455f95047c97911252dce04ead->leave($__internal_11f386a9866d0546053a99b462b6238a965b0a455f95047c97911252dce04ead_prof);

        
        $__internal_01db3fd6a2fa31aefa557d96a84cc860d7eff59dfd36f25c98494ddddde50fb7->leave($__internal_01db3fd6a2fa31aefa557d96a84cc860d7eff59dfd36f25c98494ddddde50fb7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_760695072b6980c07bf042131d3024e8a7b0b8d9d8196b96e7e2ef6f17e8a471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_760695072b6980c07bf042131d3024e8a7b0b8d9d8196b96e7e2ef6f17e8a471->enter($__internal_760695072b6980c07bf042131d3024e8a7b0b8d9d8196b96e7e2ef6f17e8a471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8532c38d580179e43a7c2f95e6b944c10145213e7ee896e98f0ca61f33c59d74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8532c38d580179e43a7c2f95e6b944c10145213e7ee896e98f0ca61f33c59d74->enter($__internal_8532c38d580179e43a7c2f95e6b944c10145213e7ee896e98f0ca61f33c59d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8532c38d580179e43a7c2f95e6b944c10145213e7ee896e98f0ca61f33c59d74->leave($__internal_8532c38d580179e43a7c2f95e6b944c10145213e7ee896e98f0ca61f33c59d74_prof);

        
        $__internal_760695072b6980c07bf042131d3024e8a7b0b8d9d8196b96e7e2ef6f17e8a471->leave($__internal_760695072b6980c07bf042131d3024e8a7b0b8d9d8196b96e7e2ef6f17e8a471_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/sites/brt/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
