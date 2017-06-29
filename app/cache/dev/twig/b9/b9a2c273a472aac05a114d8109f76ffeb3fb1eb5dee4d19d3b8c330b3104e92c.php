<?php

/* ::layout/layout.html.twig */
class __TwigTemplate_b6b8d79e4049b613c8fa490b886d50dea00f205eb2f6bfb362da128ba2609aba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'motsCles' => array($this, 'block_motsCles'),
            'description' => array($this, 'block_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e116aa41890b1558ddbe2f1a63c0cb2142b533dc1fde50d2441f4b3666896928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e116aa41890b1558ddbe2f1a63c0cb2142b533dc1fde50d2441f4b3666896928->enter($__internal_e116aa41890b1558ddbe2f1a63c0cb2142b533dc1fde50d2441f4b3666896928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('titre', $context, $blocks);
        echo "</title>
    <meta name=\"keywords\" content=\"";
        // line 6
        $this->displayBlock('motsCles', $context, $blocks);
        echo "\" />
    <meta name=\"description\" content=\"";
        // line 7
        $this->displayBlock('description', $context, $blocks);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\"/>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
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
        // line 24
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
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "<hr/>

<footer id=\"footer\" class=\"vspace20\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span4 offset1\">
                <h4>Informations</h4>
                <ul class=\"nav nav-stacked\">
                    ";
        // line 44
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PagesBundle:Pages:menu"), array());
        // line 45
        echo "                </ul>
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
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
</body>
</html>
";
        
        $__internal_e116aa41890b1558ddbe2f1a63c0cb2142b533dc1fde50d2441f4b3666896928->leave($__internal_e116aa41890b1558ddbe2f1a63c0cb2142b533dc1fde50d2441f4b3666896928_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_34803ba50de321b0f5e08d591e699970693c935da1fe2ca26743db19cc58ca60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34803ba50de321b0f5e08d591e699970693c935da1fe2ca26743db19cc58ca60->enter($__internal_34803ba50de321b0f5e08d591e699970693c935da1fe2ca26743db19cc58ca60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "Sikal Store";
        
        $__internal_34803ba50de321b0f5e08d591e699970693c935da1fe2ca26743db19cc58ca60->leave($__internal_34803ba50de321b0f5e08d591e699970693c935da1fe2ca26743db19cc58ca60_prof);

    }

    // line 6
    public function block_motsCles($context, array $blocks = array())
    {
        $__internal_4f48251ecac75c2e14ea18ac8eca9b06fa2ba188054af9f3ca0ed56c9317ac70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f48251ecac75c2e14ea18ac8eca9b06fa2ba188054af9f3ca0ed56c9317ac70->enter($__internal_4f48251ecac75c2e14ea18ac8eca9b06fa2ba188054af9f3ca0ed56c9317ac70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "motsCles"));

        
        $__internal_4f48251ecac75c2e14ea18ac8eca9b06fa2ba188054af9f3ca0ed56c9317ac70->leave($__internal_4f48251ecac75c2e14ea18ac8eca9b06fa2ba188054af9f3ca0ed56c9317ac70_prof);

    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        $__internal_b49c71787ad5382f1e03f66456069df9e75b3eeec1875425c640ff9bf8d63f55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b49c71787ad5382f1e03f66456069df9e75b3eeec1875425c640ff9bf8d63f55->enter($__internal_b49c71787ad5382f1e03f66456069df9e75b3eeec1875425c640ff9bf8d63f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_b49c71787ad5382f1e03f66456069df9e75b3eeec1875425c640ff9bf8d63f55->leave($__internal_b49c71787ad5382f1e03f66456069df9e75b3eeec1875425c640ff9bf8d63f55_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_649517234b8c9774cff60363b443acc299a64c32bfbd3eed878f458278a671c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_649517234b8c9774cff60363b443acc299a64c32bfbd3eed878f458278a671c9->enter($__internal_649517234b8c9774cff60363b443acc299a64c32bfbd3eed878f458278a671c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_649517234b8c9774cff60363b443acc299a64c32bfbd3eed878f458278a671c9->leave($__internal_649517234b8c9774cff60363b443acc299a64c32bfbd3eed878f458278a671c9_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b09017550f7dd91c72f19d87095575e2bbf0547dce9b3fe7dc6b8ba59697863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b09017550f7dd91c72f19d87095575e2bbf0547dce9b3fe7dc6b8ba59697863->enter($__internal_9b09017550f7dd91c72f19d87095575e2bbf0547dce9b3fe7dc6b8ba59697863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9b09017550f7dd91c72f19d87095575e2bbf0547dce9b3fe7dc6b8ba59697863->leave($__internal_9b09017550f7dd91c72f19d87095575e2bbf0547dce9b3fe7dc6b8ba59697863_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_29dc73aa492536bc5c33529e937d333a8d1db6689cd71a08cc62944c54f14a13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29dc73aa492536bc5c33529e937d333a8d1db6689cd71a08cc62944c54f14a13->enter($__internal_29dc73aa492536bc5c33529e937d333a8d1db6689cd71a08cc62944c54f14a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_29dc73aa492536bc5c33529e937d333a8d1db6689cd71a08cc62944c54f14a13->leave($__internal_29dc73aa492536bc5c33529e937d333a8d1db6689cd71a08cc62944c54f14a13_prof);

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
        return array (  205 => 35,  194 => 34,  183 => 12,  172 => 7,  161 => 6,  149 => 5,  136 => 68,  132 => 67,  108 => 45,  106 => 44,  96 => 36,  94 => 35,  92 => 34,  79 => 24,  64 => 13,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  42 => 7,  38 => 6,  34 => 5,  28 => 1,);
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
    <title>{% block titre %}Sikal Store{% endblock %}</title>
    <meta name=\"keywords\" content=\"{% block motsCles %}{% endblock %}\" />
    <meta name=\"description\" content=\"{% block description %}{% endblock %}\" />
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
                    {% render(controller('PagesBundle:Pages:menu')) %}
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
