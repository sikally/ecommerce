<?php

/* @SensioDistribution/Configurator/layout.html.twig */
class __TwigTemplate_eae7d44f9f57bd5def202fb537f4b34643d366cc48cfbff21a513ba02466bb51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "@SensioDistribution/Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94c1972dd3ab02cdd7da2f60eefc806ecbf8782efc36084ad8eabfd622035ede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94c1972dd3ab02cdd7da2f60eefc806ecbf8782efc36084ad8eabfd622035ede->enter($__internal_94c1972dd3ab02cdd7da2f60eefc806ecbf8782efc36084ad8eabfd622035ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94c1972dd3ab02cdd7da2f60eefc806ecbf8782efc36084ad8eabfd622035ede->leave($__internal_94c1972dd3ab02cdd7da2f60eefc806ecbf8782efc36084ad8eabfd622035ede_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3c4d1b887bff8cb31cd48d0080af6237d0bd2cb5bc96a12d39aecb4dea4b0cea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c4d1b887bff8cb31cd48d0080af6237d0bd2cb5bc96a12d39aecb4dea4b0cea->enter($__internal_3c4d1b887bff8cb31cd48d0080af6237d0bd2cb5bc96a12d39aecb4dea4b0cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_3c4d1b887bff8cb31cd48d0080af6237d0bd2cb5bc96a12d39aecb4dea4b0cea->leave($__internal_3c4d1b887bff8cb31cd48d0080af6237d0bd2cb5bc96a12d39aecb4dea4b0cea_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e7b721321402508243d398cc070ac757c35e7eeddfe857184ecfb668cfe9928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e7b721321402508243d398cc070ac757c35e7eeddfe857184ecfb668cfe9928->enter($__internal_0e7b721321402508243d398cc070ac757c35e7eeddfe857184ecfb668cfe9928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_0e7b721321402508243d398cc070ac757c35e7eeddfe857184ecfb668cfe9928->leave($__internal_0e7b721321402508243d398cc070ac757c35e7eeddfe857184ecfb668cfe9928_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_57502569008442046ead1e1d457f8068b76ad167c8e65c1a41e9ef26b01cccbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57502569008442046ead1e1d457f8068b76ad167c8e65c1a41e9ef26b01cccbe->enter($__internal_57502569008442046ead1e1d457f8068b76ad167c8e65c1a41e9ef26b01cccbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_57502569008442046ead1e1d457f8068b76ad167c8e65c1a41e9ef26b01cccbe->leave($__internal_57502569008442046ead1e1d457f8068b76ad167c8e65c1a41e9ef26b01cccbe_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_a8a57126a56fff592b4fc06655f1a09714958f9ea85bc11e21904619a872534d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8a57126a56fff592b4fc06655f1a09714958f9ea85bc11e21904619a872534d->enter($__internal_a8a57126a56fff592b4fc06655f1a09714958f9ea85bc11e21904619a872534d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_a8a57126a56fff592b4fc06655f1a09714958f9ea85bc11e21904619a872534d->leave($__internal_a8a57126a56fff592b4fc06655f1a09714958f9ea85bc11e21904619a872534d_prof);

    }

    public function getTemplateName()
    {
        return "@SensioDistribution/Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "@SensioDistribution/Configurator/layout.html.twig", "C:\\wamp\\www\\ecommerce\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle\\Resources\\views\\Configurator\\layout.html.twig");
    }
}
