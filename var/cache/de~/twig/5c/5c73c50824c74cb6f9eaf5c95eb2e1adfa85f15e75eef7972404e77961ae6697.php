<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d17d9f74bb44414a8016e89eaee98a747aee1e0a180bfc21c56513057fc5606d extends Twig_Template
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
        $__internal_205c51709362d06a8e23f1f75e658612920a4dd86aaee7b19a4ee86f6f4125f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_205c51709362d06a8e23f1f75e658612920a4dd86aaee7b19a4ee86f6f4125f3->enter($__internal_205c51709362d06a8e23f1f75e658612920a4dd86aaee7b19a4ee86f6f4125f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_8bb2e708db79526ecdcb74e1d88b905d631ddfa3577eb0fa44998c05f37467fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bb2e708db79526ecdcb74e1d88b905d631ddfa3577eb0fa44998c05f37467fa->enter($__internal_8bb2e708db79526ecdcb74e1d88b905d631ddfa3577eb0fa44998c05f37467fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_205c51709362d06a8e23f1f75e658612920a4dd86aaee7b19a4ee86f6f4125f3->leave($__internal_205c51709362d06a8e23f1f75e658612920a4dd86aaee7b19a4ee86f6f4125f3_prof);

        
        $__internal_8bb2e708db79526ecdcb74e1d88b905d631ddfa3577eb0fa44998c05f37467fa->leave($__internal_8bb2e708db79526ecdcb74e1d88b905d631ddfa3577eb0fa44998c05f37467fa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1878b7ba64ccc672b3adb0adad2272a394fdd425718074e6cfa55f499e52de6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1878b7ba64ccc672b3adb0adad2272a394fdd425718074e6cfa55f499e52de6a->enter($__internal_1878b7ba64ccc672b3adb0adad2272a394fdd425718074e6cfa55f499e52de6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1f91e893f81608cb03b51ae8a07f9a97afb1f1aa4d3d55ba9835afb5e0f8b64c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f91e893f81608cb03b51ae8a07f9a97afb1f1aa4d3d55ba9835afb5e0f8b64c->enter($__internal_1f91e893f81608cb03b51ae8a07f9a97afb1f1aa4d3d55ba9835afb5e0f8b64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_1f91e893f81608cb03b51ae8a07f9a97afb1f1aa4d3d55ba9835afb5e0f8b64c->leave($__internal_1f91e893f81608cb03b51ae8a07f9a97afb1f1aa4d3d55ba9835afb5e0f8b64c_prof);

        
        $__internal_1878b7ba64ccc672b3adb0adad2272a394fdd425718074e6cfa55f499e52de6a->leave($__internal_1878b7ba64ccc672b3adb0adad2272a394fdd425718074e6cfa55f499e52de6a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d3b41585cf22af3d89bfc5a778755b46610e30d08d46a414794473ec2e688a32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3b41585cf22af3d89bfc5a778755b46610e30d08d46a414794473ec2e688a32->enter($__internal_d3b41585cf22af3d89bfc5a778755b46610e30d08d46a414794473ec2e688a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_00989d7c81250df8932f9cf9d9e8b733a59d85f6b43159e862b9c9f43e79c565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00989d7c81250df8932f9cf9d9e8b733a59d85f6b43159e862b9c9f43e79c565->enter($__internal_00989d7c81250df8932f9cf9d9e8b733a59d85f6b43159e862b9c9f43e79c565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_00989d7c81250df8932f9cf9d9e8b733a59d85f6b43159e862b9c9f43e79c565->leave($__internal_00989d7c81250df8932f9cf9d9e8b733a59d85f6b43159e862b9c9f43e79c565_prof);

        
        $__internal_d3b41585cf22af3d89bfc5a778755b46610e30d08d46a414794473ec2e688a32->leave($__internal_d3b41585cf22af3d89bfc5a778755b46610e30d08d46a414794473ec2e688a32_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0a77e5f9c15ec112ea1ba6f59d1720b95bfed11c8306378657c8297bfeffbcf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a77e5f9c15ec112ea1ba6f59d1720b95bfed11c8306378657c8297bfeffbcf1->enter($__internal_0a77e5f9c15ec112ea1ba6f59d1720b95bfed11c8306378657c8297bfeffbcf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9d47eb1ee2114cea642c0b2e7defae99bb6a7d8f375540584c93b640d419d7c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d47eb1ee2114cea642c0b2e7defae99bb6a7d8f375540584c93b640d419d7c6->enter($__internal_9d47eb1ee2114cea642c0b2e7defae99bb6a7d8f375540584c93b640d419d7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_9d47eb1ee2114cea642c0b2e7defae99bb6a7d8f375540584c93b640d419d7c6->leave($__internal_9d47eb1ee2114cea642c0b2e7defae99bb6a7d8f375540584c93b640d419d7c6_prof);

        
        $__internal_0a77e5f9c15ec112ea1ba6f59d1720b95bfed11c8306378657c8297bfeffbcf1->leave($__internal_0a77e5f9c15ec112ea1ba6f59d1720b95bfed11c8306378657c8297bfeffbcf1_prof);

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
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/sites/brt/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
