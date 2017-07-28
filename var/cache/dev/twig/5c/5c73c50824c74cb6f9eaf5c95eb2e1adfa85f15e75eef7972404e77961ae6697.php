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
        $__internal_45eceb979a06d096cbc57e7a2a945e24832fe4db06127f7b3019fa35bfb13069 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45eceb979a06d096cbc57e7a2a945e24832fe4db06127f7b3019fa35bfb13069->enter($__internal_45eceb979a06d096cbc57e7a2a945e24832fe4db06127f7b3019fa35bfb13069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_67fcc6a1974c2c296e165eecd5dc53c3d342b6f0efeef838dd73476c8079d0fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67fcc6a1974c2c296e165eecd5dc53c3d342b6f0efeef838dd73476c8079d0fa->enter($__internal_67fcc6a1974c2c296e165eecd5dc53c3d342b6f0efeef838dd73476c8079d0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45eceb979a06d096cbc57e7a2a945e24832fe4db06127f7b3019fa35bfb13069->leave($__internal_45eceb979a06d096cbc57e7a2a945e24832fe4db06127f7b3019fa35bfb13069_prof);

        
        $__internal_67fcc6a1974c2c296e165eecd5dc53c3d342b6f0efeef838dd73476c8079d0fa->leave($__internal_67fcc6a1974c2c296e165eecd5dc53c3d342b6f0efeef838dd73476c8079d0fa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7214fc098909804ebb705747ed1fa9c41baf80123109cdc72cc75561e9ce070a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7214fc098909804ebb705747ed1fa9c41baf80123109cdc72cc75561e9ce070a->enter($__internal_7214fc098909804ebb705747ed1fa9c41baf80123109cdc72cc75561e9ce070a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_27ff04580a032c51516506a1ec014056e37fb619869a356949953e027a2f51a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27ff04580a032c51516506a1ec014056e37fb619869a356949953e027a2f51a6->enter($__internal_27ff04580a032c51516506a1ec014056e37fb619869a356949953e027a2f51a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_27ff04580a032c51516506a1ec014056e37fb619869a356949953e027a2f51a6->leave($__internal_27ff04580a032c51516506a1ec014056e37fb619869a356949953e027a2f51a6_prof);

        
        $__internal_7214fc098909804ebb705747ed1fa9c41baf80123109cdc72cc75561e9ce070a->leave($__internal_7214fc098909804ebb705747ed1fa9c41baf80123109cdc72cc75561e9ce070a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_22550cb572eeaf5cefb014a78a09852ded6cb62831a4b09fee7701c7500746f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22550cb572eeaf5cefb014a78a09852ded6cb62831a4b09fee7701c7500746f2->enter($__internal_22550cb572eeaf5cefb014a78a09852ded6cb62831a4b09fee7701c7500746f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e0b98b112c52cba0373eef735a7a053c8c5ff61d8c70d79847093adab644de1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0b98b112c52cba0373eef735a7a053c8c5ff61d8c70d79847093adab644de1b->enter($__internal_e0b98b112c52cba0373eef735a7a053c8c5ff61d8c70d79847093adab644de1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e0b98b112c52cba0373eef735a7a053c8c5ff61d8c70d79847093adab644de1b->leave($__internal_e0b98b112c52cba0373eef735a7a053c8c5ff61d8c70d79847093adab644de1b_prof);

        
        $__internal_22550cb572eeaf5cefb014a78a09852ded6cb62831a4b09fee7701c7500746f2->leave($__internal_22550cb572eeaf5cefb014a78a09852ded6cb62831a4b09fee7701c7500746f2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c2cbca08625202895f41c85b1ddcbf7f6cff5df762cb4a32accc43bd526fcb73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2cbca08625202895f41c85b1ddcbf7f6cff5df762cb4a32accc43bd526fcb73->enter($__internal_c2cbca08625202895f41c85b1ddcbf7f6cff5df762cb4a32accc43bd526fcb73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5df1b4d272c0580dd33a1a01f0b0aa31374d73f9d0bad3dc7e2a25d7cf689aad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5df1b4d272c0580dd33a1a01f0b0aa31374d73f9d0bad3dc7e2a25d7cf689aad->enter($__internal_5df1b4d272c0580dd33a1a01f0b0aa31374d73f9d0bad3dc7e2a25d7cf689aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_5df1b4d272c0580dd33a1a01f0b0aa31374d73f9d0bad3dc7e2a25d7cf689aad->leave($__internal_5df1b4d272c0580dd33a1a01f0b0aa31374d73f9d0bad3dc7e2a25d7cf689aad_prof);

        
        $__internal_c2cbca08625202895f41c85b1ddcbf7f6cff5df762cb4a32accc43bd526fcb73->leave($__internal_c2cbca08625202895f41c85b1ddcbf7f6cff5df762cb4a32accc43bd526fcb73_prof);

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
