<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_37adadc7491f1ca92dc6c8ca733286212efe71cf7d7d13cdf2f11c496d6bd036 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_272f71deb97598c3677542cf22957dac04a248eb28bd79efbef76e089cb79ba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_272f71deb97598c3677542cf22957dac04a248eb28bd79efbef76e089cb79ba8->enter($__internal_272f71deb97598c3677542cf22957dac04a248eb28bd79efbef76e089cb79ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_272f71deb97598c3677542cf22957dac04a248eb28bd79efbef76e089cb79ba8->leave($__internal_272f71deb97598c3677542cf22957dac04a248eb28bd79efbef76e089cb79ba8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2ca2ac936634df39a2a4d9507ad74c621697fc2eea9371d5348febe7e8120edd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ca2ac936634df39a2a4d9507ad74c621697fc2eea9371d5348febe7e8120edd->enter($__internal_2ca2ac936634df39a2a4d9507ad74c621697fc2eea9371d5348febe7e8120edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_2ca2ac936634df39a2a4d9507ad74c621697fc2eea9371d5348febe7e8120edd->leave($__internal_2ca2ac936634df39a2a4d9507ad74c621697fc2eea9371d5348febe7e8120edd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "C:\\wamp\\www\\ecommerce\\app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
