<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_440aa95ada326c066d3d846cf97248d4533fe50475b2263d1319f1c2f9956c4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_cb5774a82e7fecfef1e295474f1e848933f20f6a7bf0eab76f84f52d36ac02b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb5774a82e7fecfef1e295474f1e848933f20f6a7bf0eab76f84f52d36ac02b8->enter($__internal_cb5774a82e7fecfef1e295474f1e848933f20f6a7bf0eab76f84f52d36ac02b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb5774a82e7fecfef1e295474f1e848933f20f6a7bf0eab76f84f52d36ac02b8->leave($__internal_cb5774a82e7fecfef1e295474f1e848933f20f6a7bf0eab76f84f52d36ac02b8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_16a4293bb62f34413ce51e97c66346d6135ef1f3588a629363f900459d4bec6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16a4293bb62f34413ce51e97c66346d6135ef1f3588a629363f900459d4bec6a->enter($__internal_16a4293bb62f34413ce51e97c66346d6135ef1f3588a629363f900459d4bec6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_16a4293bb62f34413ce51e97c66346d6135ef1f3588a629363f900459d4bec6a->leave($__internal_16a4293bb62f34413ce51e97c66346d6135ef1f3588a629363f900459d4bec6a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\wamp\\www\\ecommerce\\app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
