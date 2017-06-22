<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_62e4f898dcfb00e26551b46cd6529a98b423e6739ccdbeedacaf85b2c2495076 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_21abe16c97176ca50e1720689418937006bd9c5a6c66ef428addf8c741132556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21abe16c97176ca50e1720689418937006bd9c5a6c66ef428addf8c741132556->enter($__internal_21abe16c97176ca50e1720689418937006bd9c5a6c66ef428addf8c741132556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21abe16c97176ca50e1720689418937006bd9c5a6c66ef428addf8c741132556->leave($__internal_21abe16c97176ca50e1720689418937006bd9c5a6c66ef428addf8c741132556_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a857922e77b85128cfe419b070af440fd848783238f9841b82afa79f275bee9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a857922e77b85128cfe419b070af440fd848783238f9841b82afa79f275bee9f->enter($__internal_a857922e77b85128cfe419b070af440fd848783238f9841b82afa79f275bee9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_a857922e77b85128cfe419b070af440fd848783238f9841b82afa79f275bee9f->leave($__internal_a857922e77b85128cfe419b070af440fd848783238f9841b82afa79f275bee9f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\wamp\\www\\ecommerce\\app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
