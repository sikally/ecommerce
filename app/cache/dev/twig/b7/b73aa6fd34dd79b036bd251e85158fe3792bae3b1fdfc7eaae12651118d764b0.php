<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_5dca9012ddcde776071c4de4c5a85c7bd7c947f9e878ad61a434850df20846fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_618378dc0d37e3d5c42571de257f3a6c34b5388ffe77fe3cef1d08620af81f0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_618378dc0d37e3d5c42571de257f3a6c34b5388ffe77fe3cef1d08620af81f0b->enter($__internal_618378dc0d37e3d5c42571de257f3a6c34b5388ffe77fe3cef1d08620af81f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_618378dc0d37e3d5c42571de257f3a6c34b5388ffe77fe3cef1d08620af81f0b->leave($__internal_618378dc0d37e3d5c42571de257f3a6c34b5388ffe77fe3cef1d08620af81f0b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a8f2c8af1f7b90a811ec23404d354bfddb506e050625c7ba8da5006ce0fe3a49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8f2c8af1f7b90a811ec23404d354bfddb506e050625c7ba8da5006ce0fe3a49->enter($__internal_a8f2c8af1f7b90a811ec23404d354bfddb506e050625c7ba8da5006ce0fe3a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_a8f2c8af1f7b90a811ec23404d354bfddb506e050625c7ba8da5006ce0fe3a49->leave($__internal_a8f2c8af1f7b90a811ec23404d354bfddb506e050625c7ba8da5006ce0fe3a49_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/changePassword.html.twig", "C:\\wamp\\www\\ecommerce\\app\\Resources\\FOSUserBundle\\views\\ChangePassword\\changePassword.html.twig");
    }
}
