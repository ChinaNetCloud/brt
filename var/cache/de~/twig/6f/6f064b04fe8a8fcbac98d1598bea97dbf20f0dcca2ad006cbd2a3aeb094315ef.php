<?php

/* general.html.twig */
class __TwigTemplate_b3ec8543018053cc118bd0b2bacd50449030ff5d87960e0b95cb86db9225cab3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f21747e459cf590f3e6b60f24d001d8e8d1b14c491fb0ba042860bf783ae003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f21747e459cf590f3e6b60f24d001d8e8d1b14c491fb0ba042860bf783ae003->enter($__internal_7f21747e459cf590f3e6b60f24d001d8e8d1b14c491fb0ba042860bf783ae003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "general.html.twig"));

        $__internal_b14adebd0ccd2e3368e35d89978ea3b7f572423a92124ace8da69b3b359c258f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b14adebd0ccd2e3368e35d89978ea3b7f572423a92124ace8da69b3b359c258f->enter($__internal_b14adebd0ccd2e3368e35d89978ea3b7f572423a92124ace8da69b3b359c258f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "general.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 8
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fddb9b6_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fddb9b6_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/fddb9b6_part_1.css");
            // line 9
            echo "            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
        } else {
            // asset "fddb9b6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fddb9b6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/fddb9b6.css");
            echo "            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 11
        echo "    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a56fa94_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a56fa94_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a56fa94_part_1.js");
            // line 16
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "a56fa94_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a56fa94_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a56fa94_part_2.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "a56fa94"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a56fa94") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a56fa94.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 18
        echo "    </body>
</html>
";
        
        $__internal_7f21747e459cf590f3e6b60f24d001d8e8d1b14c491fb0ba042860bf783ae003->leave($__internal_7f21747e459cf590f3e6b60f24d001d8e8d1b14c491fb0ba042860bf783ae003_prof);

        
        $__internal_b14adebd0ccd2e3368e35d89978ea3b7f572423a92124ace8da69b3b359c258f->leave($__internal_b14adebd0ccd2e3368e35d89978ea3b7f572423a92124ace8da69b3b359c258f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6dffdb6b867cd1f00b7fa5c94723d85a81862ab1ccdaaf3d3b38edaf0e8ff8a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dffdb6b867cd1f00b7fa5c94723d85a81862ab1ccdaaf3d3b38edaf0e8ff8a4->enter($__internal_6dffdb6b867cd1f00b7fa5c94723d85a81862ab1ccdaaf3d3b38edaf0e8ff8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_29ea11d5ebbb417dcf7bf602908359b284a002883ba701530aff0e663ad950fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29ea11d5ebbb417dcf7bf602908359b284a002883ba701530aff0e663ad950fc->enter($__internal_29ea11d5ebbb417dcf7bf602908359b284a002883ba701530aff0e663ad950fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_29ea11d5ebbb417dcf7bf602908359b284a002883ba701530aff0e663ad950fc->leave($__internal_29ea11d5ebbb417dcf7bf602908359b284a002883ba701530aff0e663ad950fc_prof);

        
        $__internal_6dffdb6b867cd1f00b7fa5c94723d85a81862ab1ccdaaf3d3b38edaf0e8ff8a4->leave($__internal_6dffdb6b867cd1f00b7fa5c94723d85a81862ab1ccdaaf3d3b38edaf0e8ff8a4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a177d7608060d8d41e835511e13b59354bc8067d8826a54365c229b7d0b49e88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a177d7608060d8d41e835511e13b59354bc8067d8826a54365c229b7d0b49e88->enter($__internal_a177d7608060d8d41e835511e13b59354bc8067d8826a54365c229b7d0b49e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_362c6df1d84baf9ed7773b81c469b62cb43912477c419cae1f8db4f361299e25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_362c6df1d84baf9ed7773b81c469b62cb43912477c419cae1f8db4f361299e25->enter($__internal_362c6df1d84baf9ed7773b81c469b62cb43912477c419cae1f8db4f361299e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_362c6df1d84baf9ed7773b81c469b62cb43912477c419cae1f8db4f361299e25->leave($__internal_362c6df1d84baf9ed7773b81c469b62cb43912477c419cae1f8db4f361299e25_prof);

        
        $__internal_a177d7608060d8d41e835511e13b59354bc8067d8826a54365c229b7d0b49e88->leave($__internal_a177d7608060d8d41e835511e13b59354bc8067d8826a54365c229b7d0b49e88_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b59a4964f6fcde56ef6d97b4d33ca5d19542c5537f10feb77b14c2acca46ac8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b59a4964f6fcde56ef6d97b4d33ca5d19542c5537f10feb77b14c2acca46ac8->enter($__internal_7b59a4964f6fcde56ef6d97b4d33ca5d19542c5537f10feb77b14c2acca46ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5deec0644ea9469e95e605a9815e7935173c623373956a651c65256b0bf09cf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5deec0644ea9469e95e605a9815e7935173c623373956a651c65256b0bf09cf8->enter($__internal_5deec0644ea9469e95e605a9815e7935173c623373956a651c65256b0bf09cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5deec0644ea9469e95e605a9815e7935173c623373956a651c65256b0bf09cf8->leave($__internal_5deec0644ea9469e95e605a9815e7935173c623373956a651c65256b0bf09cf8_prof);

        
        $__internal_7b59a4964f6fcde56ef6d97b4d33ca5d19542c5537f10feb77b14c2acca46ac8->leave($__internal_7b59a4964f6fcde56ef6d97b4d33ca5d19542c5537f10feb77b14c2acca46ac8_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cca5fdd2c85e100bb0cfdf46384a55c8be62d0a6a0db98fc7c473a2f711bafcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cca5fdd2c85e100bb0cfdf46384a55c8be62d0a6a0db98fc7c473a2f711bafcc->enter($__internal_cca5fdd2c85e100bb0cfdf46384a55c8be62d0a6a0db98fc7c473a2f711bafcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_62487fd41b90c1bc750e50a7941c96a86be9bcb107188c576568e54b7f37cfab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62487fd41b90c1bc750e50a7941c96a86be9bcb107188c576568e54b7f37cfab->enter($__internal_62487fd41b90c1bc750e50a7941c96a86be9bcb107188c576568e54b7f37cfab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_62487fd41b90c1bc750e50a7941c96a86be9bcb107188c576568e54b7f37cfab->leave($__internal_62487fd41b90c1bc750e50a7941c96a86be9bcb107188c576568e54b7f37cfab_prof);

        
        $__internal_cca5fdd2c85e100bb0cfdf46384a55c8be62d0a6a0db98fc7c473a2f711bafcc->leave($__internal_cca5fdd2c85e100bb0cfdf46384a55c8be62d0a6a0db98fc7c473a2f711bafcc_prof);

    }

    public function getTemplateName()
    {
        return "general.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 14,  145 => 13,  128 => 6,  110 => 5,  98 => 18,  78 => 16,  73 => 15,  70 => 14,  68 => 13,  64 => 11,  50 => 9,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        {% stylesheets '@bootstrap_css' %}
            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"{{ asset_url }}\"/>
        {% endstylesheets %}
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
        {% javascripts '@jquery' '@bootstrap_js' %}
            <script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
        {% endjavascripts %}
    </body>
</html>
", "general.html.twig", "/var/www/sites/brt/app/Resources/views/general.html.twig");
    }
}
