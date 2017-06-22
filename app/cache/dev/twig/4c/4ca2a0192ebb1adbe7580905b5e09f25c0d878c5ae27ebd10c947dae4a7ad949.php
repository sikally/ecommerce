<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_e4027cc4ed97d36468129cfb9631c78da096f4addad6063fb388fdec6453b97f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_1069ace3fa1f8de2c69195e2d04bb14e2831837b440126c34d9b9aa157ead70d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1069ace3fa1f8de2c69195e2d04bb14e2831837b440126c34d9b9aa157ead70d->enter($__internal_1069ace3fa1f8de2c69195e2d04bb14e2831837b440126c34d9b9aa157ead70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1069ace3fa1f8de2c69195e2d04bb14e2831837b440126c34d9b9aa157ead70d->leave($__internal_1069ace3fa1f8de2c69195e2d04bb14e2831837b440126c34d9b9aa157ead70d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_99116589c7c686bf4ada42669347fdc79ea2b1b5fce14dee0c0fceaa4ef99f05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99116589c7c686bf4ada42669347fdc79ea2b1b5fce14dee0c0fceaa4ef99f05->enter($__internal_99116589c7c686bf4ada42669347fdc79ea2b1b5fce14dee0c0fceaa4ef99f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_99116589c7c686bf4ada42669347fdc79ea2b1b5fce14dee0c0fceaa4ef99f05->leave($__internal_99116589c7c686bf4ada42669347fdc79ea2b1b5fce14dee0c0fceaa4ef99f05_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
", "FOSUserBundle:Group:show.html.twig", "C:\\wamp\\www\\ecommerce\\app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
