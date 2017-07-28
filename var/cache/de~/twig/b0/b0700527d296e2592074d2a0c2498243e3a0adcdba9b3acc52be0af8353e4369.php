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
        $__internal_b9050d30fd786abffd0055bfb592058bfd9c8caad2c5262f17433585e807d2ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9050d30fd786abffd0055bfb592058bfd9c8caad2c5262f17433585e807d2ff->enter($__internal_b9050d30fd786abffd0055bfb592058bfd9c8caad2c5262f17433585e807d2ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_836631c671bd603bb51e7082e79d1c05a6e3a552a6f19d199e404b8573013dae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_836631c671bd603bb51e7082e79d1c05a6e3a552a6f19d199e404b8573013dae->enter($__internal_836631c671bd603bb51e7082e79d1c05a6e3a552a6f19d199e404b8573013dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_b9050d30fd786abffd0055bfb592058bfd9c8caad2c5262f17433585e807d2ff->leave($__internal_b9050d30fd786abffd0055bfb592058bfd9c8caad2c5262f17433585e807d2ff_prof);

        
        $__internal_836631c671bd603bb51e7082e79d1c05a6e3a552a6f19d199e404b8573013dae->leave($__internal_836631c671bd603bb51e7082e79d1c05a6e3a552a6f19d199e404b8573013dae_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6480a134e9655bb4a8bf2cd0f6a48d392db8acd1eb3d8886274b8de7845823d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6480a134e9655bb4a8bf2cd0f6a48d392db8acd1eb3d8886274b8de7845823d8->enter($__internal_6480a134e9655bb4a8bf2cd0f6a48d392db8acd1eb3d8886274b8de7845823d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1211a7a7b429146c915845801973dbca70399eb6a4738d94607ca78be21e45d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1211a7a7b429146c915845801973dbca70399eb6a4738d94607ca78be21e45d7->enter($__internal_1211a7a7b429146c915845801973dbca70399eb6a4738d94607ca78be21e45d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1211a7a7b429146c915845801973dbca70399eb6a4738d94607ca78be21e45d7->leave($__internal_1211a7a7b429146c915845801973dbca70399eb6a4738d94607ca78be21e45d7_prof);

        
        $__internal_6480a134e9655bb4a8bf2cd0f6a48d392db8acd1eb3d8886274b8de7845823d8->leave($__internal_6480a134e9655bb4a8bf2cd0f6a48d392db8acd1eb3d8886274b8de7845823d8_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ab31b1e5105e5a597521547427c287eddfb50f5629461c928167bfb2396e7494 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab31b1e5105e5a597521547427c287eddfb50f5629461c928167bfb2396e7494->enter($__internal_ab31b1e5105e5a597521547427c287eddfb50f5629461c928167bfb2396e7494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a5d922d7d9a18f3e1e9d245a97929ad175506b8264c3bbaa38eb2295f089ebbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5d922d7d9a18f3e1e9d245a97929ad175506b8264c3bbaa38eb2295f089ebbe->enter($__internal_a5d922d7d9a18f3e1e9d245a97929ad175506b8264c3bbaa38eb2295f089ebbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a5d922d7d9a18f3e1e9d245a97929ad175506b8264c3bbaa38eb2295f089ebbe->leave($__internal_a5d922d7d9a18f3e1e9d245a97929ad175506b8264c3bbaa38eb2295f089ebbe_prof);

        
        $__internal_ab31b1e5105e5a597521547427c287eddfb50f5629461c928167bfb2396e7494->leave($__internal_ab31b1e5105e5a597521547427c287eddfb50f5629461c928167bfb2396e7494_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f33d704dbc44cf2904ff8f098fd6685bda6acd53e4c51c2e78afd06b6830415 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f33d704dbc44cf2904ff8f098fd6685bda6acd53e4c51c2e78afd06b6830415->enter($__internal_0f33d704dbc44cf2904ff8f098fd6685bda6acd53e4c51c2e78afd06b6830415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a502db34bfa2924dab6c062d5802e12ec1d308fd5df78289f5477fb92b0eb6fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a502db34bfa2924dab6c062d5802e12ec1d308fd5df78289f5477fb92b0eb6fc->enter($__internal_a502db34bfa2924dab6c062d5802e12ec1d308fd5df78289f5477fb92b0eb6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a502db34bfa2924dab6c062d5802e12ec1d308fd5df78289f5477fb92b0eb6fc->leave($__internal_a502db34bfa2924dab6c062d5802e12ec1d308fd5df78289f5477fb92b0eb6fc_prof);

        
        $__internal_0f33d704dbc44cf2904ff8f098fd6685bda6acd53e4c51c2e78afd06b6830415->leave($__internal_0f33d704dbc44cf2904ff8f098fd6685bda6acd53e4c51c2e78afd06b6830415_prof);

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
