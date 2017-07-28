<?php

/* TwigBundle:Exception:exception.html.twig */
class __TwigTemplate_2080089632aa1f2807ce729ea3626db4d8713130e2c4ef9773a380e9285d3e8a extends Twig_Template
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
        // line 1
        echo "<div class=\"exception-summary\">
    <div class=\"exception-metadata\">
        <div class=\"container\">
            <h2 class=\"exception-hierarchy\">
                ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $this->getAttribute(($context["exception"] ?? null), "allPrevious", array())));
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass($this->getAttribute(($context["exception"] ?? null), "class", array()));
        echo "
            </h2>
            <h2 class=\"exception-http\">
                HTTP ";
        // line 12
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
        echo " <small>";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "html", null, true);
        echo "</small>
            </h2>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"exception-message-wrapper\">
            <h1 class=\"break-long-words exception-message ";
        // line 18
        echo (((twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? null), "message", array())) > 180)) ? ("long") : (""));
        echo "\">";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFileFromText(nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? null), "message", array()), "html", null, true)));
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
        $context["exception_as_array"] = $this->getAttribute(($context["exception"] ?? null), "toarray", array());
        // line 33
        echo "            ";
        $context["_exceptions_with_user_code"] = array();
        // line 34
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exception_as_array"] ?? null));
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
                    $context["_exceptions_with_user_code"] = twig_array_merge(($context["_exceptions_with_user_code"] ?? null), array(0 => $context["i"]));
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
        if ((twig_length_filter($this->env, ($context["exception_as_array"] ?? null)) > 1)) {
            // line 43
            echo "                    Exceptions <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["exception_as_array"] ?? null)), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["exception_as_array"] ?? null));
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
            echo twig_include($this->env, $context, "@Twig/Exception/traces.html.twig", array("exception" => $context["e"], "index" => $this->getAttribute($context["loop"], "index", array()), "expand" => (twig_in_filter($context["i"], ($context["_exceptions_with_user_code"] ?? null)) || (twig_test_empty(($context["_exceptions_with_user_code"] ?? null)) && $this->getAttribute($context["loop"], "first", array())))), false);
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
        echo ((twig_test_empty(($context["logger"] ?? null))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">
                Logs
                ";
        // line 59
        if (((($this->getAttribute(($context["logger"] ?? null), "counterrors", array(), "any", true, true) &&  !(null === $this->getAttribute(($context["logger"] ?? null), "counterrors", array())))) ? ($this->getAttribute(($context["logger"] ?? null), "counterrors", array())) : (false))) {
            echo "<span class=\"badge status-error\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["logger"] ?? null), "counterrors", array()), "html", null, true);
            echo "</span>";
        }
        // line 60
        echo "            </h3>

            <div class=\"tab-content\">
                ";
        // line 63
        if (($context["logger"] ?? null)) {
            // line 64
            echo "                    ";
            echo twig_include($this->env, $context, "@Twig/Exception/logs.html.twig", array("logs" => $this->getAttribute(($context["logger"] ?? null), "logs", array())), false);
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
        if ((twig_length_filter($this->env, ($context["exception_as_array"] ?? null)) > 1)) {
            // line 76
            echo "                    Stack Traces <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["exception_as_array"] ?? null)), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["exception_as_array"] ?? null));
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
        if ( !twig_test_empty(($context["currentContent"] ?? null))) {
            // line 90
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">Output content</h3>

            <div class=\"tab-content\">
                ";
            // line 94
            echo twig_escape_filter($this->env, ($context["currentContent"] ?? null), "html", null, true);
            echo "
            </div>
        </div>
        ";
        }
        // line 98
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 98,  321 => 94,  315 => 90,  313 => 89,  308 => 86,  291 => 84,  274 => 83,  269 => 80,  265 => 78,  259 => 76,  257 => 75,  250 => 70,  244 => 66,  238 => 64,  236 => 63,  231 => 60,  225 => 59,  219 => 56,  214 => 53,  197 => 51,  180 => 50,  175 => 47,  171 => 45,  165 => 43,  163 => 42,  160 => 41,  154 => 40,  140 => 39,  137 => 38,  134 => 37,  131 => 36,  113 => 35,  108 => 34,  105 => 33,  103 => 32,  91 => 23,  86 => 20,  84 => 19,  81 => 18,  70 => 12,  63 => 9,  47 => 7,  42 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TwigBundle:Exception:exception.html.twig", "/var/www/sites/brt/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.html.twig");
    }
}
