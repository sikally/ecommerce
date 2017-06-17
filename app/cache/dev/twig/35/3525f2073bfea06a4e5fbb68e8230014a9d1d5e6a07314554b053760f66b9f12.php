<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_260d3c97136343301dfbd5346d0dc3742313552789324eda02cf792a49db46d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_1efe9f9a80053ea1f39340b072f700b952b4a16412d660c335aebdc70c57d09d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1efe9f9a80053ea1f39340b072f700b952b4a16412d660c335aebdc70c57d09d->enter($__internal_1efe9f9a80053ea1f39340b072f700b952b4a16412d660c335aebdc70c57d09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1efe9f9a80053ea1f39340b072f700b952b4a16412d660c335aebdc70c57d09d->leave($__internal_1efe9f9a80053ea1f39340b072f700b952b4a16412d660c335aebdc70c57d09d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dbc15ad401d8b5a8669012f8e330467dcb6d635746be3cf83b50e07019f37544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbc15ad401d8b5a8669012f8e330467dcb6d635746be3cf83b50e07019f37544->enter($__internal_dbc15ad401d8b5a8669012f8e330467dcb6d635746be3cf83b50e07019f37544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_dbc15ad401d8b5a8669012f8e330467dcb6d635746be3cf83b50e07019f37544->leave($__internal_dbc15ad401d8b5a8669012f8e330467dcb6d635746be3cf83b50e07019f37544_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp\\www\\ecommerce\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register.html.twig");
    }
}
