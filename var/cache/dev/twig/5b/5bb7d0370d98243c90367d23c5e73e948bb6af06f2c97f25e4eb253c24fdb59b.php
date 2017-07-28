<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_eaa6be072a4bc25b115b0d05e1f4fda591aae943f4b374c5c446f085ff8011e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d52d731cc06018319dc6d1cca7b3b759c2e532fbf00b17a18fe8892b5c1ea23d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d52d731cc06018319dc6d1cca7b3b759c2e532fbf00b17a18fe8892b5c1ea23d->enter($__internal_d52d731cc06018319dc6d1cca7b3b759c2e532fbf00b17a18fe8892b5c1ea23d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_c8b8a6c9c93f9ebe8fcf81d2255d4762be9433c262055c2f77d43e828ba36d2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8b8a6c9c93f9ebe8fcf81d2255d4762be9433c262055c2f77d43e828ba36d2c->enter($__internal_c8b8a6c9c93f9ebe8fcf81d2255d4762be9433c262055c2f77d43e828ba36d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_d52d731cc06018319dc6d1cca7b3b759c2e532fbf00b17a18fe8892b5c1ea23d->leave($__internal_d52d731cc06018319dc6d1cca7b3b759c2e532fbf00b17a18fe8892b5c1ea23d_prof);

        
        $__internal_c8b8a6c9c93f9ebe8fcf81d2255d4762be9433c262055c2f77d43e828ba36d2c->leave($__internal_c8b8a6c9c93f9ebe8fcf81d2255d4762be9433c262055c2f77d43e828ba36d2c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "/var/www/sites/brt/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
