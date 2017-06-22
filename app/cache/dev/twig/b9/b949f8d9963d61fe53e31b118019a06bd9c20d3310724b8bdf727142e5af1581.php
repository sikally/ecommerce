<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_82c69a1cb9728ee9f18ee53b150a343b996d95d19a9764e572600daa3a6ca90d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_ffd1bca6af51215524068eca19cee2dc3971c498d5694b60cf5c793c3c8a4c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffd1bca6af51215524068eca19cee2dc3971c498d5694b60cf5c793c3c8a4c92->enter($__internal_ffd1bca6af51215524068eca19cee2dc3971c498d5694b60cf5c793c3c8a4c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffd1bca6af51215524068eca19cee2dc3971c498d5694b60cf5c793c3c8a4c92->leave($__internal_ffd1bca6af51215524068eca19cee2dc3971c498d5694b60cf5c793c3c8a4c92_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c5f6e8906622ae2b8975046d3be147cbff276ed3efce2b053f0fedf84478632f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5f6e8906622ae2b8975046d3be147cbff276ed3efce2b053f0fedf84478632f->enter($__internal_c5f6e8906622ae2b8975046d3be147cbff276ed3efce2b053f0fedf84478632f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_c5f6e8906622ae2b8975046d3be147cbff276ed3efce2b053f0fedf84478632f->leave($__internal_c5f6e8906622ae2b8975046d3be147cbff276ed3efce2b053f0fedf84478632f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp\\www\\ecommerce\\app\\Resources\\FOSUserBundle\\views\\Profile\\edit.html.twig");
    }
}
