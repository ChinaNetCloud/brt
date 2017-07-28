<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_f3a4e4fefc781fea7b79e6a42c3ccf2a163350a707e86246afcf514c71a36b79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10067dc79eedb5081cf0eb7af1ba2ce5d3ddc78882b112bd8f362357d6f696f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10067dc79eedb5081cf0eb7af1ba2ce5d3ddc78882b112bd8f362357d6f696f0->enter($__internal_10067dc79eedb5081cf0eb7af1ba2ce5d3ddc78882b112bd8f362357d6f696f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_2ee70c059fc09f511de1ab2d6171e8017b47a4bb22e6028d9d6452ee7ff05af5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ee70c059fc09f511de1ab2d6171e8017b47a4bb22e6028d9d6452ee7ff05af5->enter($__internal_2ee70c059fc09f511de1ab2d6171e8017b47a4bb22e6028d9d6452ee7ff05af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_10067dc79eedb5081cf0eb7af1ba2ce5d3ddc78882b112bd8f362357d6f696f0->leave($__internal_10067dc79eedb5081cf0eb7af1ba2ce5d3ddc78882b112bd8f362357d6f696f0_prof);

        
        $__internal_2ee70c059fc09f511de1ab2d6171e8017b47a4bb22e6028d9d6452ee7ff05af5->leave($__internal_2ee70c059fc09f511de1ab2d6171e8017b47a4bb22e6028d9d6452ee7ff05af5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b4c69392439491a068a32a728bb002f52a31c3cf1dfd3d1cfc5bb37a343b9a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b4c69392439491a068a32a728bb002f52a31c3cf1dfd3d1cfc5bb37a343b9a5->enter($__internal_1b4c69392439491a068a32a728bb002f52a31c3cf1dfd3d1cfc5bb37a343b9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0b6d17255a4975d912fe41733bb3d8c89a8db0af28acbd9010045a3b5566d202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b6d17255a4975d912fe41733bb3d8c89a8db0af28acbd9010045a3b5566d202->enter($__internal_0b6d17255a4975d912fe41733bb3d8c89a8db0af28acbd9010045a3b5566d202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0b6d17255a4975d912fe41733bb3d8c89a8db0af28acbd9010045a3b5566d202->leave($__internal_0b6d17255a4975d912fe41733bb3d8c89a8db0af28acbd9010045a3b5566d202_prof);

        
        $__internal_1b4c69392439491a068a32a728bb002f52a31c3cf1dfd3d1cfc5bb37a343b9a5->leave($__internal_1b4c69392439491a068a32a728bb002f52a31c3cf1dfd3d1cfc5bb37a343b9a5_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ced352dd334df97412b613b5a2870bf42cd7629c9a67cebf591f42e6ee9799e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ced352dd334df97412b613b5a2870bf42cd7629c9a67cebf591f42e6ee9799e2->enter($__internal_ced352dd334df97412b613b5a2870bf42cd7629c9a67cebf591f42e6ee9799e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_35c300507f41afe3fa0560ffeee0f10ceeb523cfcef344138b1800332e03076c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35c300507f41afe3fa0560ffeee0f10ceeb523cfcef344138b1800332e03076c->enter($__internal_35c300507f41afe3fa0560ffeee0f10ceeb523cfcef344138b1800332e03076c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_35c300507f41afe3fa0560ffeee0f10ceeb523cfcef344138b1800332e03076c->leave($__internal_35c300507f41afe3fa0560ffeee0f10ceeb523cfcef344138b1800332e03076c_prof);

        
        $__internal_ced352dd334df97412b613b5a2870bf42cd7629c9a67cebf591f42e6ee9799e2->leave($__internal_ced352dd334df97412b613b5a2870bf42cd7629c9a67cebf591f42e6ee9799e2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c06eaa3f0d9534ee995141d39a820592a70f1dd1a16c8c402b4455d272f12a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c06eaa3f0d9534ee995141d39a820592a70f1dd1a16c8c402b4455d272f12a0->enter($__internal_7c06eaa3f0d9534ee995141d39a820592a70f1dd1a16c8c402b4455d272f12a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_988bd34d686f32be1f6edf008488547e6dd7dfdf38c66d9d8b12343f1d3043f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_988bd34d686f32be1f6edf008488547e6dd7dfdf38c66d9d8b12343f1d3043f5->enter($__internal_988bd34d686f32be1f6edf008488547e6dd7dfdf38c66d9d8b12343f1d3043f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_988bd34d686f32be1f6edf008488547e6dd7dfdf38c66d9d8b12343f1d3043f5->leave($__internal_988bd34d686f32be1f6edf008488547e6dd7dfdf38c66d9d8b12343f1d3043f5_prof);

        
        $__internal_7c06eaa3f0d9534ee995141d39a820592a70f1dd1a16c8c402b4455d272f12a0->leave($__internal_7c06eaa3f0d9534ee995141d39a820592a70f1dd1a16c8c402b4455d272f12a0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/sites/brt/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
