<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_a3bc2efb8f6ef0792150dfa88728ae8bc29bfa1229bee78e7bf8a2d0fc874a03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_8053c977ff6128065adc80ec3092d2fa14d44037ac76ab9a51d8661ded3bc7da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8053c977ff6128065adc80ec3092d2fa14d44037ac76ab9a51d8661ded3bc7da->enter($__internal_8053c977ff6128065adc80ec3092d2fa14d44037ac76ab9a51d8661ded3bc7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8053c977ff6128065adc80ec3092d2fa14d44037ac76ab9a51d8661ded3bc7da->leave($__internal_8053c977ff6128065adc80ec3092d2fa14d44037ac76ab9a51d8661ded3bc7da_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_77bc93c1a4eed4ba54e17f42866cff7d23e419a2752ae42d99c6a20aa87f1eb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77bc93c1a4eed4ba54e17f42866cff7d23e419a2752ae42d99c6a20aa87f1eb8->enter($__internal_77bc93c1a4eed4ba54e17f42866cff7d23e419a2752ae42d99c6a20aa87f1eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_77bc93c1a4eed4ba54e17f42866cff7d23e419a2752ae42d99c6a20aa87f1eb8->leave($__internal_77bc93c1a4eed4ba54e17f42866cff7d23e419a2752ae42d99c6a20aa87f1eb8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp\\www\\ecommerce\\app\\Resources\\FOSUserBundle\\views\\Resetting\\request.html.twig");
    }
}
