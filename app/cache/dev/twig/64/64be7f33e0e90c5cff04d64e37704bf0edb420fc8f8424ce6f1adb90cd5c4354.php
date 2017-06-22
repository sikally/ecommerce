<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_bf8fafaedc0c958772f0bfe13e354991103b801bad12a2f2cc9f9708e18981ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_176c0c135ba6d918eea0c9ebab9121286db5758f305e455972ec0db2a68aa81d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_176c0c135ba6d918eea0c9ebab9121286db5758f305e455972ec0db2a68aa81d->enter($__internal_176c0c135ba6d918eea0c9ebab9121286db5758f305e455972ec0db2a68aa81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_176c0c135ba6d918eea0c9ebab9121286db5758f305e455972ec0db2a68aa81d->leave($__internal_176c0c135ba6d918eea0c9ebab9121286db5758f305e455972ec0db2a68aa81d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fd38ca4b246eab04d3199b1daa0a1b2a1fec7dc526e01f513aedf7dcaa33ef21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd38ca4b246eab04d3199b1daa0a1b2a1fec7dc526e01f513aedf7dcaa33ef21->enter($__internal_fd38ca4b246eab04d3199b1daa0a1b2a1fec7dc526e01f513aedf7dcaa33ef21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_fd38ca4b246eab04d3199b1daa0a1b2a1fec7dc526e01f513aedf7dcaa33ef21->leave($__internal_fd38ca4b246eab04d3199b1daa0a1b2a1fec7dc526e01f513aedf7dcaa33ef21_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\wamp\\www\\ecommerce\\app\\Resources\\FOSUserBundle\\views\\Resetting\\reset.html.twig");
    }
}
