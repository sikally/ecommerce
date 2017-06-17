<?php

/* ::layout/layout.html.twig */
class __TwigTemplate_a2550ade0295026c6ff18466b5b719979686e7fe640043dba8f67bd919ca44cb extends Twig_Template
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
        $__internal_6d0da546ed9a2def67efdda47bbe009c616be1375347767b3a8f8e37cdcbe09d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d0da546ed9a2def67efdda47bbe009c616be1375347767b3a8f8e37cdcbe09d->enter($__internal_6d0da546ed9a2def67efdda47bbe009c616be1375347767b3a8f8e37cdcbe09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\"/>
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>
<body>
<div class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"navbar-inner\">
        <div class=\"container\">
            <button class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"brand\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit");
        echo "\">SikalStore</a>
            <div class=\"nav-collapse collapse\">
                <form class=\"navbar-form form-search pull-right\">
                    <input id=\"Search\" name=\"Search\" type=\"text\" class=\"input-medium search-query\">
                    <button type=\"submit\" class=\"btn\">Rechercher</button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 33
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "<hr/>

<footer id=\"footer\" class=\"vspace20\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span4 offset1\">
                <h4>Informations</h4>
                <ul class=\"nav nav-stacked\">
                    <li><a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page", array("id" => 1));
        echo "\">CGV</a>
                    <li><a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page", array("id" => 2));
        echo "\">Mentions légales</a>
                </ul>
            </div>

            <div class=\"span4\">
                <h4>Notre entrepôt</h4>
                <p><i class=\"icon-map-marker\"></i>&nbsp;Paris 75 000 - 3 rue des jardins</p>
            </div>

            <div class=\"span2\">
                <h4>Nous contacter</h4>
                <p><i class=\"icon-phone\"></i>&nbsp;Tel: 02 35 00 00 00</p>
                <p><i class=\"icon-print\"></i>&nbsp;Fax: 02 35 00 00 00</p>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"span4\">
                <p>&copy; Copyright 2017 - Sikal</p>
            </div>
        </div>
    </div>
</footer>
<script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
</body>
</html>
";
        
        $__internal_6d0da546ed9a2def67efdda47bbe009c616be1375347767b3a8f8e37cdcbe09d->leave($__internal_6d0da546ed9a2def67efdda47bbe009c616be1375347767b3a8f8e37cdcbe09d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ee0248a305afc6ca6f632be51dee673fac3754c40ec3817b02865084ab68613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ee0248a305afc6ca6f632be51dee673fac3754c40ec3817b02865084ab68613->enter($__internal_7ee0248a305afc6ca6f632be51dee673fac3754c40ec3817b02865084ab68613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7ee0248a305afc6ca6f632be51dee673fac3754c40ec3817b02865084ab68613->leave($__internal_7ee0248a305afc6ca6f632be51dee673fac3754c40ec3817b02865084ab68613_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e2efd2bb0413d5f6a5ebfb95da9cbce5aa3afdeb5eb4413e5fdf47d73f6bafac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2efd2bb0413d5f6a5ebfb95da9cbce5aa3afdeb5eb4413e5fdf47d73f6bafac->enter($__internal_e2efd2bb0413d5f6a5ebfb95da9cbce5aa3afdeb5eb4413e5fdf47d73f6bafac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e2efd2bb0413d5f6a5ebfb95da9cbce5aa3afdeb5eb4413e5fdf47d73f6bafac->leave($__internal_e2efd2bb0413d5f6a5ebfb95da9cbce5aa3afdeb5eb4413e5fdf47d73f6bafac_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6267208f18efaf2eee7b65ed950b2006fd2eaf5c29b329fc27d8f33a44c768a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6267208f18efaf2eee7b65ed950b2006fd2eaf5c29b329fc27d8f33a44c768a->enter($__internal_b6267208f18efaf2eee7b65ed950b2006fd2eaf5c29b329fc27d8f33a44c768a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b6267208f18efaf2eee7b65ed950b2006fd2eaf5c29b329fc27d8f33a44c768a->leave($__internal_b6267208f18efaf2eee7b65ed950b2006fd2eaf5c29b329fc27d8f33a44c768a_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2ea92d5d2aa8d67c6a1513c6d3aaba90fd7e0bbe21b5fecabd200efd5352e638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ea92d5d2aa8d67c6a1513c6d3aaba90fd7e0bbe21b5fecabd200efd5352e638->enter($__internal_2ea92d5d2aa8d67c6a1513c6d3aaba90fd7e0bbe21b5fecabd200efd5352e638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2ea92d5d2aa8d67c6a1513c6d3aaba90fd7e0bbe21b5fecabd200efd5352e638->leave($__internal_2ea92d5d2aa8d67c6a1513c6d3aaba90fd7e0bbe21b5fecabd200efd5352e638_prof);

    }

    public function getTemplateName()
    {
        return "::layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 33,  166 => 32,  155 => 10,  143 => 5,  130 => 67,  126 => 66,  100 => 43,  96 => 42,  86 => 34,  84 => 33,  82 => 32,  69 => 22,  54 => 11,  52 => 10,  48 => 9,  44 => 8,  40 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
    <meta charset=\"UTF-8\"/>
    <title>{% block title %}Welcome!{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-responsive.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.css') }}\"/>
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>
<body>
<div class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"navbar-inner\">
        <div class=\"container\">
            <button class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"brand\" href=\"{{  path ('produit') }}\">SikalStore</a>
            <div class=\"nav-collapse collapse\">
                <form class=\"navbar-form form-search pull-right\">
                    <input id=\"Search\" name=\"Search\" type=\"text\" class=\"input-medium search-query\">
                    <button type=\"submit\" class=\"btn\">Rechercher</button>
                </form>
            </div>
        </div>
    </div>
</div>
{% block body %}{% endblock %}
{% block javascripts %}{% endblock %}
<hr/>

<footer id=\"footer\" class=\"vspace20\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span4 offset1\">
                <h4>Informations</h4>
                <ul class=\"nav nav-stacked\">
                    <li><a href=\"{{ path ('page', {'id' : 1}) }}\">CGV</a>
                    <li><a href=\"{{ path ('page', {'id' : 2}) }}\">Mentions légales</a>
                </ul>
            </div>

            <div class=\"span4\">
                <h4>Notre entrepôt</h4>
                <p><i class=\"icon-map-marker\"></i>&nbsp;Paris 75 000 - 3 rue des jardins</p>
            </div>

            <div class=\"span2\">
                <h4>Nous contacter</h4>
                <p><i class=\"icon-phone\"></i>&nbsp;Tel: 02 35 00 00 00</p>
                <p><i class=\"icon-print\"></i>&nbsp;Fax: 02 35 00 00 00</p>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"span4\">
                <p>&copy; Copyright 2017 - Sikal</p>
            </div>
        </div>
    </div>
</footer>
<script src=\"{{ asset('js/jquery-1.10.0.min.js') }}\"></script>
<script src=\"{{ asset('js/bootstrap.js') }}\"></script>
</body>
</html>
</body>
</html>
", "::layout/layout.html.twig", "C:\\wamp\\www\\ecommerce\\app/Resources\\views/layout/layout.html.twig");
    }
}
