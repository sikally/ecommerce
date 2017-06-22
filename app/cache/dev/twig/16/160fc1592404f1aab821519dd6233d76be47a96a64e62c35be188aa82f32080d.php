<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_0844bcf7131cef7ec8e9d4d1acc43325b114312d1e0766228167bee1572139dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
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
        $__internal_4b40fc6d419a388144cafc94be942007245302597107baccad983da977d5db28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b40fc6d419a388144cafc94be942007245302597107baccad983da977d5db28->enter($__internal_4b40fc6d419a388144cafc94be942007245302597107baccad983da977d5db28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b40fc6d419a388144cafc94be942007245302597107baccad983da977d5db28->leave($__internal_4b40fc6d419a388144cafc94be942007245302597107baccad983da977d5db28_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_acba92da260eec027acb068921bae8595a0b1a6c68635dabbd13b89ed992406d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acba92da260eec027acb068921bae8595a0b1a6c68635dabbd13b89ed992406d->enter($__internal_acba92da260eec027acb068921bae8595a0b1a6c68635dabbd13b89ed992406d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_acba92da260eec027acb068921bae8595a0b1a6c68635dabbd13b89ed992406d->leave($__internal_acba92da260eec027acb068921bae8595a0b1a6c68635dabbd13b89ed992406d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ba8cdd2d73c4768a8009f5ece279dad3a94cfffcf68cac41708526ca76b052e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ba8cdd2d73c4768a8009f5ece279dad3a94cfffcf68cac41708526ca76b052e->enter($__internal_8ba8cdd2d73c4768a8009f5ece279dad3a94cfffcf68cac41708526ca76b052e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_8ba8cdd2d73c4768a8009f5ece279dad3a94cfffcf68cac41708526ca76b052e->leave($__internal_8ba8cdd2d73c4768a8009f5ece279dad3a94cfffcf68cac41708526ca76b052e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_274194c8a47b162c8c7b478e073eb0d5292f210b9733146ae3de2ae16deff6ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_274194c8a47b162c8c7b478e073eb0d5292f210b9733146ae3de2ae16deff6ed->enter($__internal_274194c8a47b162c8c7b478e073eb0d5292f210b9733146ae3de2ae16deff6ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_274194c8a47b162c8c7b478e073eb0d5292f210b9733146ae3de2ae16deff6ed->leave($__internal_274194c8a47b162c8c7b478e073eb0d5292f210b9733146ae3de2ae16deff6ed_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_d7b1d7be6782a780288b4b739f07d2a9f6d5cb92d1d47ad25002b59908c46802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7b1d7be6782a780288b4b739f07d2a9f6d5cb92d1d47ad25002b59908c46802->enter($__internal_d7b1d7be6782a780288b4b739f07d2a9f6d5cb92d1d47ad25002b59908c46802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_d7b1d7be6782a780288b4b739f07d2a9f6d5cb92d1d47ad25002b59908c46802->leave($__internal_d7b1d7be6782a780288b4b739f07d2a9f6d5cb92d1d47ad25002b59908c46802_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
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
", "SensioDistributionBundle::Configurator/layout.html.twig", "C:\\wamp\\www\\ecommerce\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
