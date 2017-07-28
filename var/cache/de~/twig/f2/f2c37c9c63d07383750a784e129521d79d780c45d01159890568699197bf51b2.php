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
        $__internal_82bba2afb4121bf7ce272649cdd4a9225916b88ca1e3135a2ec8c28c41046a7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82bba2afb4121bf7ce272649cdd4a9225916b88ca1e3135a2ec8c28c41046a7c->enter($__internal_82bba2afb4121bf7ce272649cdd4a9225916b88ca1e3135a2ec8c28c41046a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0df8f46ff189eb77402da50dcd90b27b70a26af2ea311e02ca613ce034b57ef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0df8f46ff189eb77402da50dcd90b27b70a26af2ea311e02ca613ce034b57ef1->enter($__internal_0df8f46ff189eb77402da50dcd90b27b70a26af2ea311e02ca613ce034b57ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82bba2afb4121bf7ce272649cdd4a9225916b88ca1e3135a2ec8c28c41046a7c->leave($__internal_82bba2afb4121bf7ce272649cdd4a9225916b88ca1e3135a2ec8c28c41046a7c_prof);

        
        $__internal_0df8f46ff189eb77402da50dcd90b27b70a26af2ea311e02ca613ce034b57ef1->leave($__internal_0df8f46ff189eb77402da50dcd90b27b70a26af2ea311e02ca613ce034b57ef1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c07d65f121f1e0cb62c9bf9e7745973afdc56a74985eaefd735c0bc6bb0a8eec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c07d65f121f1e0cb62c9bf9e7745973afdc56a74985eaefd735c0bc6bb0a8eec->enter($__internal_c07d65f121f1e0cb62c9bf9e7745973afdc56a74985eaefd735c0bc6bb0a8eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_33f71132d8ce708781bcf48356081cb695b1d11d411d907b3042d6da43a6e9a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33f71132d8ce708781bcf48356081cb695b1d11d411d907b3042d6da43a6e9a8->enter($__internal_33f71132d8ce708781bcf48356081cb695b1d11d411d907b3042d6da43a6e9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_33f71132d8ce708781bcf48356081cb695b1d11d411d907b3042d6da43a6e9a8->leave($__internal_33f71132d8ce708781bcf48356081cb695b1d11d411d907b3042d6da43a6e9a8_prof);

        
        $__internal_c07d65f121f1e0cb62c9bf9e7745973afdc56a74985eaefd735c0bc6bb0a8eec->leave($__internal_c07d65f121f1e0cb62c9bf9e7745973afdc56a74985eaefd735c0bc6bb0a8eec_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3a3da7256d765fb2795689a2f4275abd8b54b88e012e3bac966853974c1d7029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a3da7256d765fb2795689a2f4275abd8b54b88e012e3bac966853974c1d7029->enter($__internal_3a3da7256d765fb2795689a2f4275abd8b54b88e012e3bac966853974c1d7029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0e019af35588388cb2584407048de5697fee2b138d9d533bb29c5ff6d70e040a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e019af35588388cb2584407048de5697fee2b138d9d533bb29c5ff6d70e040a->enter($__internal_0e019af35588388cb2584407048de5697fee2b138d9d533bb29c5ff6d70e040a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0e019af35588388cb2584407048de5697fee2b138d9d533bb29c5ff6d70e040a->leave($__internal_0e019af35588388cb2584407048de5697fee2b138d9d533bb29c5ff6d70e040a_prof);

        
        $__internal_3a3da7256d765fb2795689a2f4275abd8b54b88e012e3bac966853974c1d7029->leave($__internal_3a3da7256d765fb2795689a2f4275abd8b54b88e012e3bac966853974c1d7029_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e0d65c5bdcfb009e7660332ef0274b8184c046db2edcd8a8812e81c92be503d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0d65c5bdcfb009e7660332ef0274b8184c046db2edcd8a8812e81c92be503d2->enter($__internal_e0d65c5bdcfb009e7660332ef0274b8184c046db2edcd8a8812e81c92be503d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4efca7d625155e7f298e41ebe3cfdc861be4fc46c86c020bcb11387c3a46da04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4efca7d625155e7f298e41ebe3cfdc861be4fc46c86c020bcb11387c3a46da04->enter($__internal_4efca7d625155e7f298e41ebe3cfdc861be4fc46c86c020bcb11387c3a46da04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4efca7d625155e7f298e41ebe3cfdc861be4fc46c86c020bcb11387c3a46da04->leave($__internal_4efca7d625155e7f298e41ebe3cfdc861be4fc46c86c020bcb11387c3a46da04_prof);

        
        $__internal_e0d65c5bdcfb009e7660332ef0274b8184c046db2edcd8a8812e81c92be503d2->leave($__internal_e0d65c5bdcfb009e7660332ef0274b8184c046db2edcd8a8812e81c92be503d2_prof);

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
