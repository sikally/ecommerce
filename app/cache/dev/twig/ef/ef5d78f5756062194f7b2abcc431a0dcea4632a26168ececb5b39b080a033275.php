<?php

/* ::base.html.twig */
class __TwigTemplate_f354de73037a30564b93bee9155f656eae521e9edb0c88af77b47f3b8bec6ed7 extends Twig_Template
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
        $__internal_4f223c00ff7844eda3989a3db2f5798f93b8c3c8c317e11f08b92b35c3d32d00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f223c00ff7844eda3989a3db2f5798f93b8c3c8c317e11f08b92b35c3d32d00->enter($__internal_4f223c00ff7844eda3989a3db2f5798f93b8c3c8c317e11f08b92b35c3d32d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
            <a class=\"brand\" href=\"index.php\">Sikal</a>
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
                    <li><a href=\"texte.php\">CGV</a>
                    <li><a href=\"texte.php\">Mentions légales</a>
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
        
        $__internal_4f223c00ff7844eda3989a3db2f5798f93b8c3c8c317e11f08b92b35c3d32d00->leave($__internal_4f223c00ff7844eda3989a3db2f5798f93b8c3c8c317e11f08b92b35c3d32d00_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bcfe4c345183bb1312d0f311afbf631910017e1b091feb26bef97f12b45caf5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcfe4c345183bb1312d0f311afbf631910017e1b091feb26bef97f12b45caf5d->enter($__internal_bcfe4c345183bb1312d0f311afbf631910017e1b091feb26bef97f12b45caf5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bcfe4c345183bb1312d0f311afbf631910017e1b091feb26bef97f12b45caf5d->leave($__internal_bcfe4c345183bb1312d0f311afbf631910017e1b091feb26bef97f12b45caf5d_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e06f3ed7d2089ad86c50f5b60b15042bf89305c3972176160c48d258e25f4507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e06f3ed7d2089ad86c50f5b60b15042bf89305c3972176160c48d258e25f4507->enter($__internal_e06f3ed7d2089ad86c50f5b60b15042bf89305c3972176160c48d258e25f4507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e06f3ed7d2089ad86c50f5b60b15042bf89305c3972176160c48d258e25f4507->leave($__internal_e06f3ed7d2089ad86c50f5b60b15042bf89305c3972176160c48d258e25f4507_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_a19e6e1caaf1d678304e301a85e97660bac53ef36701a950fda2ca368820b8be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a19e6e1caaf1d678304e301a85e97660bac53ef36701a950fda2ca368820b8be->enter($__internal_a19e6e1caaf1d678304e301a85e97660bac53ef36701a950fda2ca368820b8be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a19e6e1caaf1d678304e301a85e97660bac53ef36701a950fda2ca368820b8be->leave($__internal_a19e6e1caaf1d678304e301a85e97660bac53ef36701a950fda2ca368820b8be_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c2c84c9154e1bb24881b691873aa620637b1adc1998b0ab1268bc7d7204bdc85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2c84c9154e1bb24881b691873aa620637b1adc1998b0ab1268bc7d7204bdc85->enter($__internal_c2c84c9154e1bb24881b691873aa620637b1adc1998b0ab1268bc7d7204bdc85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c2c84c9154e1bb24881b691873aa620637b1adc1998b0ab1268bc7d7204bdc85->leave($__internal_c2c84c9154e1bb24881b691873aa620637b1adc1998b0ab1268bc7d7204bdc85_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 33,  157 => 32,  146 => 10,  134 => 5,  121 => 67,  117 => 66,  83 => 34,  81 => 33,  79 => 32,  54 => 11,  52 => 10,  48 => 9,  44 => 8,  40 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
            <a class=\"brand\" href=\"index.php\">Sikal</a>
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
                    <li><a href=\"texte.php\">CGV</a>
                    <li><a href=\"texte.php\">Mentions légales</a>
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
", "::base.html.twig", "C:\\wamp\\www\\ecommerce\\app/Resources\\views/base.html.twig");
    }
}
