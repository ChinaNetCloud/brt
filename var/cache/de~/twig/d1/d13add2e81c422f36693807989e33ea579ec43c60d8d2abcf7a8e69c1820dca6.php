<?php

/* @Twig/Exception/exception.html.twig */
class __TwigTemplate_6d105e1adc5de3148b0f34b15ee9a77134b2af185ec86c6518cf799ebcca94cd extends Twig_Template
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
        $__internal_a868402d4af8f72f432f7134523e025be0c16a3ff0c6b4901445092f7587f027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a868402d4af8f72f432f7134523e025be0c16a3ff0c6b4901445092f7587f027->enter($__internal_a868402d4af8f72f432f7134523e025be0c16a3ff0c6b4901445092f7587f027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.html.twig"));

        $__internal_0b55268ec7974cfffa380a1c6a3765e9e69b1540af4f2a14cdee4accb34d89ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b55268ec7974cfffa380a1c6a3765e9e69b1540af4f2a14cdee4accb34d89ec->enter($__internal_0b55268ec7974cfffa380a1c6a3765e9e69b1540af4f2a14cdee4accb34d89ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.html.twig"));

        // line 1
        echo "<div class=\"exception-summary\">
    <div class=\"exception-metadata\">
        <div class=\"container\">
            <h2 class=\"exception-hierarchy\">
                ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "allPrevious", array())));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["previousException"]) {
            // line 6
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass($this->getAttribute($context["previousException"], "class", array()));
            echo "
                    <span class=\"icon\">";
            // line 7
            echo twig_include($this->env, $context, "@Twig/images/chevron-right.svg");
            echo "</span>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['previousException'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "class", array()));
        echo "
            </h2>
            <h2 class=\"exception-http\">
                HTTP ";
        // line 12
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " <small>";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "</small>
            </h2>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"exception-message-wrapper\">
            <h1 class=\"break-long-words exception-message ";
        // line 18
        echo (((twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array())) > 180)) ? ("long") : (""));
        echo "\">";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFileFromText(nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true)));
        // line 20
        echo "</h1>

            <div class=\"exception-illustration hidden-xs-down\">
                ";
        // line 23
        echo twig_include($this->env, $context, "@Twig/images/symfony-ghost.svg");
        echo "
            </div>
        </div>
    </div>
</div>

<div class=\"container\">
    <div class=\"sf-tabs\">
        <div class=\"tab\">
            ";
        // line 32
        $context["exception_as_array"] = $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array());
        // line 33
        echo "            ";
        $context["_exceptions_with_user_code"] = array();
        // line 34
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exception_as_array"] ?? $this->getContext($context, "exception_as_array")));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 35
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["e"], "trace", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 36
                echo "                    ";
                if (((( !twig_test_empty($this->getAttribute($context["trace"], "file", array())) && !twig_in_filter("/vendor/", $this->getAttribute($context["trace"], "file", array()))) && !twig_in_filter("/var/cache/", $this->getAttribute($context["trace"], "file", array()))) &&  !$this->getAttribute($context["loop"], "last", array()))) {
                    // line 37
                    echo "                        ";
                    $context["_exceptions_with_user_code"] = twig_array_merge(($context["_exceptions_with_user_code"] ?? $this->getContext($context, "_exceptions_with_user_code")), array(0 => $context["i"]));
                    // line 38
                    echo "                    ";
                }
                // line 39
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "            <h3 class=\"tab-title\">
                ";
        // line 42
        if ((twig_length_filter($this->env, ($context["exception_as_array"] ?? $this->getContext($context, "exception_as_array"))) > 1)) {
            // line 43
            echo "                    Exceptions <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["exception_as_array"] ?? $this->getContext($context, "exception_as_array"))), "html", null, true);
            echo "</span>
                ";
        } else {
            // line 45
            echo "                    Exception
                ";
        }
        // line 47
        echo "            </h3>

            <div class=\"tab-content\">
                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exception_as_array"] ?? $this->getContext($context, "exception_as_array")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 51
            echo "                    ";
            echo twig_include($this->env, $context, "@Twig/Exception/traces.html.twig", array("exception" => $context["e"], "index" => $this->getAttribute($context["loop"], "index", array()), "expand" => (twig_in_filter($context["i"], ($context["_exceptions_with_user_code"] ?? $this->getContext($context, "_exceptions_with_user_code"))) || (twig_test_empty(($context["_exceptions_with_user_code"] ?? $this->getContext($context, "_exceptions_with_user_code"))) && $this->getAttribute($context["loop"], "first", array())))), false);
            echo "
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "            </div>
        </div>

        <div class=\"tab ";
        // line 56
        echo ((twig_test_empty(($context["logger"] ?? $this->getContext($context, "logger")))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">
                Logs
                ";
        // line 59
        if (((($this->getAttribute(($context["logger"] ?? null), "counterrors", array(), "any", true, true) &&  !(null === $this->getAttribute(($context["logger"] ?? null), "counterrors", array())))) ? ($this->getAttribute(($context["logger"] ?? null), "counterrors", array())) : (false))) {
            echo "<span class=\"badge status-error\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["logger"] ?? $this->getContext($context, "logger")), "counterrors", array()), "html", null, true);
            echo "</span>";
        }
        // line 60
        echo "            </h3>

            <div class=\"tab-content\">
                ";
        // line 63
        if (($context["logger"] ?? $this->getContext($context, "logger"))) {
            // line 64
            echo "                    ";
            echo twig_include($this->env, $context, "@Twig/Exception/logs.html.twig", array("logs" => $this->getAttribute(($context["logger"] ?? $this->getContext($context, "logger")), "logs", array())), false);
            echo "
                ";
        } else {
            // line 66
            echo "                    <div class=\"empty\">
                        <p>No log messages</p>
                    </div>
                ";
        }
        // line 70
        echo "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">
                ";
        // line 75
        if ((twig_length_filter($this->env, ($context["exception_as_array"] ?? $this->getContext($context, "exception_as_array"))) > 1)) {
            // line 76
            echo "                    Stack Traces <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["exception_as_array"] ?? $this->getContext($context, "exception_as_array"))), "html", null, true);
            echo "</span>
                ";
        } else {
            // line 78
            echo "                    Stack Trace
                ";
        }
        // line 80
        echo "            </h3>

            <div class=\"tab-content\">
                ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exception_as_array"] ?? $this->getContext($context, "exception_as_array")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 84
            echo "                    ";
            echo twig_include($this->env, $context, "@Twig/Exception/traces_text.html.twig", array("exception" => $context["e"], "index" => $this->getAttribute($context["loop"], "index", array()), "num_exceptions" => $this->getAttribute($context["loop"], "length", array())), false);
            echo "
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "            </div>
        </div>

        ";
        // line 89
        if ( !twig_test_empty(($context["currentContent"] ?? $this->getContext($context, "currentContent")))) {
            // line 90
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">Output content</h3>

            <div class=\"tab-content\">
                ";
            // line 94
            echo twig_escape_filter($this->env, ($context["currentContent"] ?? $this->getContext($context, "currentContent")), "html", null, true);
            echo "
            </div>
        </div>
        ";
        }
        // line 98
        echo "    </div>
</div>
";
        
        $__internal_a868402d4af8f72f432f7134523e025be0c16a3ff0c6b4901445092f7587f027->leave($__internal_a868402d4af8f72f432f7134523e025be0c16a3ff0c6b4901445092f7587f027_prof);

        
        $__internal_0b55268ec7974cfffa380a1c6a3765e9e69b1540af4f2a14cdee4accb34d89ec->leave($__internal_0b55268ec7974cfffa380a1c6a3765e9e69b1540af4f2a14cdee4accb34d89ec_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 98,  327 => 94,  321 => 90,  319 => 89,  314 => 86,  297 => 84,  280 => 83,  275 => 80,  271 => 78,  265 => 76,  263 => 75,  256 => 70,  250 => 66,  244 => 64,  242 => 63,  237 => 60,  231 => 59,  225 => 56,  220 => 53,  203 => 51,  186 => 50,  181 => 47,  177 => 45,  171 => 43,  169 => 42,  166 => 41,  160 => 40,  146 => 39,  143 => 38,  140 => 37,  137 => 36,  119 => 35,  114 => 34,  111 => 33,  109 => 32,  97 => 23,  92 => 20,  90 => 19,  87 => 18,  76 => 12,  69 => 9,  53 => 7,  48 => 6,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"exception-summary\">
    <div class=\"exception-metadata\">
        <div class=\"container\">
            <h2 class=\"exception-hierarchy\">
                {% for previousException in exception.allPrevious|reverse %}
                    {{ previousException.class|abbr_class }}
                    <span class=\"icon\">{{ include('@Twig/images/chevron-right.svg') }}</span>
                {% endfor %}
                {{ exception.class|abbr_class }}
            </h2>
            <h2 class=\"exception-http\">
                HTTP {{ status_code }} <small>{{ status_text }}</small>
            </h2>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"exception-message-wrapper\">
            <h1 class=\"break-long-words exception-message {{ exception.message|length > 180 ? 'long' }}\">
                {{- exception.message|nl2br|format_file_from_text -}}
            </h1>

            <div class=\"exception-illustration hidden-xs-down\">
                {{ include('@Twig/images/symfony-ghost.svg') }}
            </div>
        </div>
    </div>
</div>

<div class=\"container\">
    <div class=\"sf-tabs\">
        <div class=\"tab\">
            {% set exception_as_array = exception.toarray %}
            {% set _exceptions_with_user_code = [] %}
            {% for i, e in exception_as_array %}
                {% for trace in e.trace %}
                    {% if (trace.file is not empty) and ('/vendor/' not in trace.file) and ('/var/cache/' not in trace.file) and not loop.last %}
                        {% set _exceptions_with_user_code = _exceptions_with_user_code|merge([i]) %}
                    {% endif %}
                {% endfor %}
            {% endfor %}
            <h3 class=\"tab-title\">
                {% if exception_as_array|length > 1 %}
                    Exceptions <span class=\"badge\">{{ exception_as_array|length }}</span>
                {% else %}
                    Exception
                {% endif %}
            </h3>

            <div class=\"tab-content\">
                {% for i, e in exception_as_array %}
                    {{ include('@Twig/Exception/traces.html.twig', { exception: e, index: loop.index, expand: i in _exceptions_with_user_code or (_exceptions_with_user_code is empty and loop.first) }, with_context = false) }}
                {% endfor %}
            </div>
        </div>

        <div class=\"tab {{ logger is empty ? 'disabled' }}\">
            <h3 class=\"tab-title\">
                Logs
                {% if logger.counterrors ?? false %}<span class=\"badge status-error\">{{ logger.counterrors }}</span>{% endif %}
            </h3>

            <div class=\"tab-content\">
                {% if logger %}
                    {{ include('@Twig/Exception/logs.html.twig', { logs: logger.logs }, with_context = false)  }}
                {% else %}
                    <div class=\"empty\">
                        <p>No log messages</p>
                    </div>
                {% endif %}
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">
                {% if exception_as_array|length > 1 %}
                    Stack Traces <span class=\"badge\">{{ exception_as_array|length }}</span>
                {% else %}
                    Stack Trace
                {% endif %}
            </h3>

            <div class=\"tab-content\">
                {% for e in exception_as_array %}
                    {{ include('@Twig/Exception/traces_text.html.twig', { exception: e, index: loop.index, num_exceptions: loop.length }, with_context = false) }}
                {% endfor %}
            </div>
        </div>

        {% if currentContent is not empty %}
        <div class=\"tab\">
            <h3 class=\"tab-title\">Output content</h3>

            <div class=\"tab-content\">
                {{ currentContent }}
            </div>
        </div>
        {% endif %}
    </div>
</div>
", "@Twig/Exception/exception.html.twig", "/var/www/sites/brt/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.html.twig");
    }
}
