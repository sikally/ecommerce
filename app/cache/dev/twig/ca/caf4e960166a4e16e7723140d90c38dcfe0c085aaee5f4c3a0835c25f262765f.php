<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_8e496fab4927eebd0f19eb3d47409564aa86d44481000ac84bbdde413648b746 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_74b28c67cca66c134ef92f10afab6236edd0f5f925b8b8c97fe625ed72e9150d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74b28c67cca66c134ef92f10afab6236edd0f5f925b8b8c97fe625ed72e9150d->enter($__internal_74b28c67cca66c134ef92f10afab6236edd0f5f925b8b8c97fe625ed72e9150d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74b28c67cca66c134ef92f10afab6236edd0f5f925b8b8c97fe625ed72e9150d->leave($__internal_74b28c67cca66c134ef92f10afab6236edd0f5f925b8b8c97fe625ed72e9150d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9e5484238ea5c261cd184bff1aa646955f9834d152b64dcc1a50b8fa54c914df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e5484238ea5c261cd184bff1aa646955f9834d152b64dcc1a50b8fa54c914df->enter($__internal_9e5484238ea5c261cd184bff1aa646955f9834d152b64dcc1a50b8fa54c914df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_9e5484238ea5c261cd184bff1aa646955f9834d152b64dcc1a50b8fa54c914df->leave($__internal_9e5484238ea5c261cd184bff1aa646955f9834d152b64dcc1a50b8fa54c914df_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
", "FOSUserBundle:ChangePassword:changePassword.html.twig", "C:\\wamp\\www\\ecommerce\\app/Resources/FOSUserBundle/views/ChangePassword/changePassword.html.twig");
    }
}
