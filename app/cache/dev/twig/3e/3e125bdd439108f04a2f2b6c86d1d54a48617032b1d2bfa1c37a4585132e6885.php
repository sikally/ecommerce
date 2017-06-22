<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_deed3220a0eb24924ac84340b59be2b9e52e8fd8548125556dd2254c5cc62bd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_08a6ce4c2a88e9c22bf4752efc7859195c7bb95c58127182e927a7347f806a4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08a6ce4c2a88e9c22bf4752efc7859195c7bb95c58127182e927a7347f806a4f->enter($__internal_08a6ce4c2a88e9c22bf4752efc7859195c7bb95c58127182e927a7347f806a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08a6ce4c2a88e9c22bf4752efc7859195c7bb95c58127182e927a7347f806a4f->leave($__internal_08a6ce4c2a88e9c22bf4752efc7859195c7bb95c58127182e927a7347f806a4f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_48a35ddd4b9392ca33160da1104acd2f98b4ba423a3388f77cc40159e929c1a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48a35ddd4b9392ca33160da1104acd2f98b4ba423a3388f77cc40159e929c1a5->enter($__internal_48a35ddd4b9392ca33160da1104acd2f98b4ba423a3388f77cc40159e929c1a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_48a35ddd4b9392ca33160da1104acd2f98b4ba423a3388f77cc40159e929c1a5->leave($__internal_48a35ddd4b9392ca33160da1104acd2f98b4ba423a3388f77cc40159e929c1a5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
", "@FOSUser/Group/list.html.twig", "C:\\wamp\\www\\ecommerce\\app\\Resources\\FOSUserBundle\\views\\Group\\list.html.twig");
    }
}
