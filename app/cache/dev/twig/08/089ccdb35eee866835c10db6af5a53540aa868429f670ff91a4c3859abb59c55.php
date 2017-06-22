<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_48e377b9489feb4f77d31261987a4d64e46818bd52fbc8e7f3b3841d64033271 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_37497b0958608f7af7b21c0c1c147d049d52ae7e31589ee0df4cde134d90a854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37497b0958608f7af7b21c0c1c147d049d52ae7e31589ee0df4cde134d90a854->enter($__internal_37497b0958608f7af7b21c0c1c147d049d52ae7e31589ee0df4cde134d90a854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37497b0958608f7af7b21c0c1c147d049d52ae7e31589ee0df4cde134d90a854->leave($__internal_37497b0958608f7af7b21c0c1c147d049d52ae7e31589ee0df4cde134d90a854_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a746871a678bab2ca852c80e1a6c804b68bfad5a937cbc1793c157693d9d9464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a746871a678bab2ca852c80e1a6c804b68bfad5a937cbc1793c157693d9d9464->enter($__internal_a746871a678bab2ca852c80e1a6c804b68bfad5a937cbc1793c157693d9d9464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_a746871a678bab2ca852c80e1a6c804b68bfad5a937cbc1793c157693d9d9464->leave($__internal_a746871a678bab2ca852c80e1a6c804b68bfad5a937cbc1793c157693d9d9464_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\wamp\\www\\ecommerce\\app\\Resources\\FOSUserBundle\\views\\Group\\show.html.twig");
    }
}
