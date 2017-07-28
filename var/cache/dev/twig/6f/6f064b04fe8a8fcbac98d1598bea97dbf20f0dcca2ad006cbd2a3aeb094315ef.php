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
            'header' => array($this, 'block_header'),
            'dynamic_content' => array($this, 'block_dynamic_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8cc7b8043ca5a30f2db28c241bd2f87bae229925b08eae14c89bfb7578b930a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cc7b8043ca5a30f2db28c241bd2f87bae229925b08eae14c89bfb7578b930a9->enter($__internal_8cc7b8043ca5a30f2db28c241bd2f87bae229925b08eae14c89bfb7578b930a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "general.html.twig"));

        $__internal_7cc15f05bc4de35d27df16d435c391f0a9859bfd030aba17f529404e82a74343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cc15f05bc4de35d27df16d435c391f0a9859bfd030aba17f529404e82a74343->enter($__internal_7cc15f05bc4de35d27df16d435c391f0a9859bfd030aba17f529404e82a74343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "general.html.twig"));

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
        // line 10
        echo "     
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a56fa94_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a56fa94_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a56fa94_part_1.js");
            // line 35
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
        // line 37
        echo "    </body>
</html>
";
        
        $__internal_8cc7b8043ca5a30f2db28c241bd2f87bae229925b08eae14c89bfb7578b930a9->leave($__internal_8cc7b8043ca5a30f2db28c241bd2f87bae229925b08eae14c89bfb7578b930a9_prof);

        
        $__internal_7cc15f05bc4de35d27df16d435c391f0a9859bfd030aba17f529404e82a74343->leave($__internal_7cc15f05bc4de35d27df16d435c391f0a9859bfd030aba17f529404e82a74343_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_613ea369b939085c8f6992bc23dda471d704378b4b58083a482922452378632b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_613ea369b939085c8f6992bc23dda471d704378b4b58083a482922452378632b->enter($__internal_613ea369b939085c8f6992bc23dda471d704378b4b58083a482922452378632b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_43df800f145a3e50e0d8e20c7fd9c57abc17616b53479bb213b94cbc0c802659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43df800f145a3e50e0d8e20c7fd9c57abc17616b53479bb213b94cbc0c802659->enter($__internal_43df800f145a3e50e0d8e20c7fd9c57abc17616b53479bb213b94cbc0c802659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_43df800f145a3e50e0d8e20c7fd9c57abc17616b53479bb213b94cbc0c802659->leave($__internal_43df800f145a3e50e0d8e20c7fd9c57abc17616b53479bb213b94cbc0c802659_prof);

        
        $__internal_613ea369b939085c8f6992bc23dda471d704378b4b58083a482922452378632b->leave($__internal_613ea369b939085c8f6992bc23dda471d704378b4b58083a482922452378632b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ed417a1dd3bc4f170643c77b37befce0e905e45d5029366fe3aabfc4d5d5e441 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed417a1dd3bc4f170643c77b37befce0e905e45d5029366fe3aabfc4d5d5e441->enter($__internal_ed417a1dd3bc4f170643c77b37befce0e905e45d5029366fe3aabfc4d5d5e441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a4d9e56f8223565cf6c5323d28d724e56fc8f38b5ef61274966f4fb2d14bec17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4d9e56f8223565cf6c5323d28d724e56fc8f38b5ef61274966f4fb2d14bec17->enter($__internal_a4d9e56f8223565cf6c5323d28d724e56fc8f38b5ef61274966f4fb2d14bec17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a4d9e56f8223565cf6c5323d28d724e56fc8f38b5ef61274966f4fb2d14bec17->leave($__internal_a4d9e56f8223565cf6c5323d28d724e56fc8f38b5ef61274966f4fb2d14bec17_prof);

        
        $__internal_ed417a1dd3bc4f170643c77b37befce0e905e45d5029366fe3aabfc4d5d5e441->leave($__internal_ed417a1dd3bc4f170643c77b37befce0e905e45d5029366fe3aabfc4d5d5e441_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_021a0e9afc0c0047f5bd62d61e3b15f02329c686542f3d47674e58e586705843 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_021a0e9afc0c0047f5bd62d61e3b15f02329c686542f3d47674e58e586705843->enter($__internal_021a0e9afc0c0047f5bd62d61e3b15f02329c686542f3d47674e58e586705843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e0cf025a12aa59e41b6b597a86cac4ee9996de1124b95cc40b79167bc54ce35f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0cf025a12aa59e41b6b597a86cac4ee9996de1124b95cc40b79167bc54ce35f->enter($__internal_e0cf025a12aa59e41b6b597a86cac4ee9996de1124b95cc40b79167bc54ce35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "        <div class=\"\">
            ";
        // line 15
        $this->displayBlock('header', $context, $blocks);
        // line 25
        echo "            ";
        $this->displayBlock('dynamic_content', $context, $blocks);
        // line 26
        echo "            ";
        $this->displayBlock('footer', $context, $blocks);
        // line 31
        echo "        </div>
        ";
        
        $__internal_e0cf025a12aa59e41b6b597a86cac4ee9996de1124b95cc40b79167bc54ce35f->leave($__internal_e0cf025a12aa59e41b6b597a86cac4ee9996de1124b95cc40b79167bc54ce35f_prof);

        
        $__internal_021a0e9afc0c0047f5bd62d61e3b15f02329c686542f3d47674e58e586705843->leave($__internal_021a0e9afc0c0047f5bd62d61e3b15f02329c686542f3d47674e58e586705843_prof);

    }

    // line 15
    public function block_header($context, array $blocks = array())
    {
        $__internal_f7c0a199ddc98d01be327fa1afccb296d549a938a4663d2338fa337eaee12fe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7c0a199ddc98d01be327fa1afccb296d549a938a4663d2338fa337eaee12fe5->enter($__internal_f7c0a199ddc98d01be327fa1afccb296d549a938a4663d2338fa337eaee12fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_2d219df7fcb0006fae4a81fe27e4f63a5ef293f35e7bebd9a3ef315eaa58013e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d219df7fcb0006fae4a81fe27e4f63a5ef293f35e7bebd9a3ef315eaa58013e->enter($__internal_2d219df7fcb0006fae4a81fe27e4f63a5ef293f35e7bebd9a3ef315eaa58013e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 16
        echo "                <nav class=\"center-block\">
                    <ul class=\"nav nav-justified\">
                        <li class=\"\">Logo</li>
                        <li class=\"\">Dashboard</li>
                        <li class=\"\">Reports&filters</li>
                        <li class=\"\">About/Authors</li>
                    </ul>
                </nav>
            ";
        
        $__internal_2d219df7fcb0006fae4a81fe27e4f63a5ef293f35e7bebd9a3ef315eaa58013e->leave($__internal_2d219df7fcb0006fae4a81fe27e4f63a5ef293f35e7bebd9a3ef315eaa58013e_prof);

        
        $__internal_f7c0a199ddc98d01be327fa1afccb296d549a938a4663d2338fa337eaee12fe5->leave($__internal_f7c0a199ddc98d01be327fa1afccb296d549a938a4663d2338fa337eaee12fe5_prof);

    }

    // line 25
    public function block_dynamic_content($context, array $blocks = array())
    {
        $__internal_77ca037d0ba49af70461bfaf234549d25305656da8af1c495e738fd37a69183c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77ca037d0ba49af70461bfaf234549d25305656da8af1c495e738fd37a69183c->enter($__internal_77ca037d0ba49af70461bfaf234549d25305656da8af1c495e738fd37a69183c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dynamic_content"));

        $__internal_eb471007a1d0ae0fd9e5a51f3190183d09cd5ffe4c0d582b3281b21a32af8d7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb471007a1d0ae0fd9e5a51f3190183d09cd5ffe4c0d582b3281b21a32af8d7c->enter($__internal_eb471007a1d0ae0fd9e5a51f3190183d09cd5ffe4c0d582b3281b21a32af8d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dynamic_content"));

        
        $__internal_eb471007a1d0ae0fd9e5a51f3190183d09cd5ffe4c0d582b3281b21a32af8d7c->leave($__internal_eb471007a1d0ae0fd9e5a51f3190183d09cd5ffe4c0d582b3281b21a32af8d7c_prof);

        
        $__internal_77ca037d0ba49af70461bfaf234549d25305656da8af1c495e738fd37a69183c->leave($__internal_77ca037d0ba49af70461bfaf234549d25305656da8af1c495e738fd37a69183c_prof);

    }

    // line 26
    public function block_footer($context, array $blocks = array())
    {
        $__internal_11998d45bd2be2351496ce7561cce705f1607c8c06fd8666e62d3c3e113bdba8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11998d45bd2be2351496ce7561cce705f1607c8c06fd8666e62d3c3e113bdba8->enter($__internal_11998d45bd2be2351496ce7561cce705f1607c8c06fd8666e62d3c3e113bdba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6575feee25e4e70355db635a7f8b9c31855dea05b3f730a0fb724d1f07c0ebb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6575feee25e4e70355db635a7f8b9c31855dea05b3f730a0fb724d1f07c0ebb7->enter($__internal_6575feee25e4e70355db635a7f8b9c31855dea05b3f730a0fb724d1f07c0ebb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 27
        echo "                <nav class=\"nav nav-justified center-block\">
                    <div class=\"text-bold text-center\"><h6>Backup report tool <a>about</a></h6></div>          
                </nav>
            ";
        
        $__internal_6575feee25e4e70355db635a7f8b9c31855dea05b3f730a0fb724d1f07c0ebb7->leave($__internal_6575feee25e4e70355db635a7f8b9c31855dea05b3f730a0fb724d1f07c0ebb7_prof);

        
        $__internal_11998d45bd2be2351496ce7561cce705f1607c8c06fd8666e62d3c3e113bdba8->leave($__internal_11998d45bd2be2351496ce7561cce705f1607c8c06fd8666e62d3c3e113bdba8_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e09c1e5a1bc51ab1fda698a4a450a6c60d817c322d1b643e31c641aa764628dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e09c1e5a1bc51ab1fda698a4a450a6c60d817c322d1b643e31c641aa764628dc->enter($__internal_e09c1e5a1bc51ab1fda698a4a450a6c60d817c322d1b643e31c641aa764628dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0277f7da164fea819d6859de0f121c046b430c0117980f5dd3ad313e2ad7766d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0277f7da164fea819d6859de0f121c046b430c0117980f5dd3ad313e2ad7766d->enter($__internal_0277f7da164fea819d6859de0f121c046b430c0117980f5dd3ad313e2ad7766d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0277f7da164fea819d6859de0f121c046b430c0117980f5dd3ad313e2ad7766d->leave($__internal_0277f7da164fea819d6859de0f121c046b430c0117980f5dd3ad313e2ad7766d_prof);

        
        $__internal_e09c1e5a1bc51ab1fda698a4a450a6c60d817c322d1b643e31c641aa764628dc->leave($__internal_e09c1e5a1bc51ab1fda698a4a450a6c60d817c322d1b643e31c641aa764628dc_prof);

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
        return array (  246 => 33,  233 => 27,  224 => 26,  207 => 25,  189 => 16,  180 => 15,  169 => 31,  166 => 26,  163 => 25,  161 => 15,  158 => 14,  149 => 13,  132 => 6,  114 => 5,  102 => 37,  82 => 35,  77 => 34,  74 => 33,  72 => 13,  67 => 10,  53 => 9,  49 => 8,  44 => 7,  42 => 6,  38 => 5,  32 => 1,);
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
        {% block body %}
        <div class=\"\">
            {% block header %}
                <nav class=\"center-block\">
                    <ul class=\"nav nav-justified\">
                        <li class=\"\">Logo</li>
                        <li class=\"\">Dashboard</li>
                        <li class=\"\">Reports&filters</li>
                        <li class=\"\">About/Authors</li>
                    </ul>
                </nav>
            {% endblock %}
            {% block dynamic_content %}{% endblock %}
            {% block footer %}
                <nav class=\"nav nav-justified center-block\">
                    <div class=\"text-bold text-center\"><h6>Backup report tool <a>about</a></h6></div>          
                </nav>
            {% endblock %}
        </div>
        {% endblock %}
        {% block javascripts %}{% endblock %}
        {% javascripts '@jquery' '@bootstrap_js' %}
            <script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
        {% endjavascripts %}
    </body>
</html>
", "general.html.twig", "/var/www/sites/brt/app/Resources/views/general.html.twig");
    }
}
