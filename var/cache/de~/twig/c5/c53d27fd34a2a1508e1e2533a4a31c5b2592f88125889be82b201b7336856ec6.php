<?php

/* @Twig/Exception/traces.html.twig */
class __TwigTemplate_ea2787ab8ef47dc467c5e8e3958c6b337eea4f51f84127fb99e00eabe2584cb6 extends Twig_Template
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
        $__internal_57c42e60ec9a2fbdf480d647e2f80fb2b3afd72e182eca6e0ae43d372a7d1bd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57c42e60ec9a2fbdf480d647e2f80fb2b3afd72e182eca6e0ae43d372a7d1bd4->enter($__internal_57c42e60ec9a2fbdf480d647e2f80fb2b3afd72e182eca6e0ae43d372a7d1bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.html.twig"));

        $__internal_7b1255b8d0e48580629881299b6bfaed24a457b88d280e3e71401bfd6ceb0dc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b1255b8d0e48580629881299b6bfaed24a457b88d280e3e71401bfd6ceb0dc5->enter($__internal_7b1255b8d0e48580629881299b6bfaed24a457b88d280e3e71401bfd6ceb0dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.html.twig"));

        // line 1
        echo "<div class=\"trace trace-as-html\">
    <table class=\"trace-details\">
        <thead class=\"trace-head\">
            <tr>
                <th class=\"sf-toggle\" data-toggle-selector=\"#trace-html-";
        // line 5
        echo twig_escape_filter($this->env, ($context["index"] ?? $this->getContext($context, "index")), "html", null, true);
        echo "\" data-toggle-initial=\"";
        echo ((($context["expand"] ?? $this->getContext($context, "expand"))) ? ("display") : (""));
        echo "\">
                    <h3 class=\"trace-class\">
                        <span class=\"trace-namespace\">
                            ";
        // line 8
        echo twig_escape_filter($this->env, twig_join_filter(twig_slice($this->env, twig_split_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "class", array()), "\\"), 0,  -1), "\\"), "html", null, true);
        // line 9
        echo (((twig_length_filter($this->env, twig_split_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "class", array()), "\\")) > 1)) ? ("\\") : (""));
        echo "
                        </span>
                        ";
        // line 11
        echo twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "class", array()), "\\")), "html", null, true);
        echo "

                        <span class=\"icon icon-close\">";
        // line 13
        echo twig_include($this->env, $context, "@Twig/images/icon-minus-square-o.svg");
        echo "</span>
                        <span class=\"icon icon-open\">";
        // line 14
        echo twig_include($this->env, $context, "@Twig/images/icon-plus-square-o.svg");
        echo "</span>
                    </h3>

                    ";
        // line 17
        if (( !twig_test_empty($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array())) && (($context["index"] ?? $this->getContext($context, "index")) > 1))) {
            // line 18
            echo "                        <p class=\"break-long-words trace-message\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
            echo "</p>
                    ";
        }
        // line 20
        echo "                </th>
            </tr>
        </thead>

        <tbody id=\"trace-html-";
        // line 24
        echo twig_escape_filter($this->env, ($context["index"] ?? $this->getContext($context, "index")), "html", null, true);
        echo "\" class=\"sf-toggle-content\">
        ";
        // line 25
        $context["_is_first_user_code"] = true;
        // line 26
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["i"] => $context["trace"]) {
            // line 27
            echo "            ";
            $context["_display_code_snippet"] = (((($context["_is_first_user_code"] ?? $this->getContext($context, "_is_first_user_code")) && !twig_in_filter("/vendor/", $this->getAttribute($context["trace"], "file", array()))) && !twig_in_filter("/var/cache/", $this->getAttribute($context["trace"], "file", array()))) &&  !twig_test_empty($this->getAttribute($context["trace"], "file", array())));
            // line 28
            echo "            ";
            if (($context["_display_code_snippet"] ?? $this->getContext($context, "_display_code_snippet"))) {
                $context["_is_first_user_code"] = false;
            }
            // line 29
            echo "            <tr>
                <td class=\"trace-line ";
            // line 30
            echo (((($this->getAttribute($context["trace"], "file", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["trace"], "file", array()), false)) : (false))) ? ("sf-toggle") : (""));
            echo "\" data-toggle-selector=\"#trace-html-";
            echo twig_escape_filter($this->env, ($context["index"] ?? $this->getContext($context, "index")), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" data-toggle-initial=\"";
            echo ((($context["_display_code_snippet"] ?? $this->getContext($context, "_display_code_snippet"))) ? ("display") : (""));
            echo "\">
                    ";
            // line 31
            echo twig_include($this->env, $context, "@Twig/Exception/trace.html.twig", array("prefix" => ($context["index"] ?? $this->getContext($context, "index")), "i" => $context["i"], "trace" => $context["trace"]), false);
            echo "
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_57c42e60ec9a2fbdf480d647e2f80fb2b3afd72e182eca6e0ae43d372a7d1bd4->leave($__internal_57c42e60ec9a2fbdf480d647e2f80fb2b3afd72e182eca6e0ae43d372a7d1bd4_prof);

        
        $__internal_7b1255b8d0e48580629881299b6bfaed24a457b88d280e3e71401bfd6ceb0dc5->leave($__internal_7b1255b8d0e48580629881299b6bfaed24a457b88d280e3e71401bfd6ceb0dc5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 35,  107 => 31,  97 => 30,  94 => 29,  89 => 28,  86 => 27,  81 => 26,  79 => 25,  75 => 24,  69 => 20,  63 => 18,  61 => 17,  55 => 14,  51 => 13,  46 => 11,  41 => 9,  39 => 8,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"trace trace-as-html\">
    <table class=\"trace-details\">
        <thead class=\"trace-head\">
            <tr>
                <th class=\"sf-toggle\" data-toggle-selector=\"#trace-html-{{ index }}\" data-toggle-initial=\"{{ expand ? 'display' }}\">
                    <h3 class=\"trace-class\">
                        <span class=\"trace-namespace\">
                            {{ exception.class|split('\\\\')|slice(0, -1)|join('\\\\') }}
                            {{- exception.class|split('\\\\')|length > 1 ? '\\\\' }}
                        </span>
                        {{ exception.class|split('\\\\')|last }}

                        <span class=\"icon icon-close\">{{ include('@Twig/images/icon-minus-square-o.svg') }}</span>
                        <span class=\"icon icon-open\">{{ include('@Twig/images/icon-plus-square-o.svg') }}</span>
                    </h3>

                    {% if exception.message is not empty and index > 1 %}
                        <p class=\"break-long-words trace-message\">{{ exception.message }}</p>
                    {% endif %}
                </th>
            </tr>
        </thead>

        <tbody id=\"trace-html-{{ index }}\" class=\"sf-toggle-content\">
        {% set _is_first_user_code = true %}
        {% for i, trace in exception.trace %}
            {% set _display_code_snippet = _is_first_user_code and ('/vendor/' not in trace.file) and ('/var/cache/' not in trace.file) and (trace.file is not empty) %}
            {% if _display_code_snippet %}{% set _is_first_user_code = false %}{% endif %}
            <tr>
                <td class=\"trace-line {{ trace.file|default(false) ? 'sf-toggle' }}\" data-toggle-selector=\"#trace-html-{{ index }}-{{ i }}\" data-toggle-initial=\"{{ _display_code_snippet ? 'display' }}\">
                    {{ include('@Twig/Exception/trace.html.twig', { prefix: index, i: i, trace: trace }, with_context = false) }}
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
", "@Twig/Exception/traces.html.twig", "/var/www/sites/brt/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.html.twig");
    }
}
