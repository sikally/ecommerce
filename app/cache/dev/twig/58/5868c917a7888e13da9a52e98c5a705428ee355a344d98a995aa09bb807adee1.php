<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_c6ce694c5842e134dff82583819ac75593527fbf54aabd042e1a00990c9423f7 extends Twig_Template
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
        $__internal_54142165318e8c5cdb15d6a8dfe32a1602dbe92591b5bb918447b629782968c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54142165318e8c5cdb15d6a8dfe32a1602dbe92591b5bb918447b629782968c7->enter($__internal_54142165318e8c5cdb15d6a8dfe32a1602dbe92591b5bb918447b629782968c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54142165318e8c5cdb15d6a8dfe32a1602dbe92591b5bb918447b629782968c7->leave($__internal_54142165318e8c5cdb15d6a8dfe32a1602dbe92591b5bb918447b629782968c7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a39096017d5a939e6e5e059025eb207a4b507f26a8974e19a6ee61e5bb8bc574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a39096017d5a939e6e5e059025eb207a4b507f26a8974e19a6ee61e5bb8bc574->enter($__internal_a39096017d5a939e6e5e059025eb207a4b507f26a8974e19a6ee61e5bb8bc574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_a39096017d5a939e6e5e059025eb207a4b507f26a8974e19a6ee61e5bb8bc574->leave($__internal_a39096017d5a939e6e5e059025eb207a4b507f26a8974e19a6ee61e5bb8bc574_prof);

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
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp\\www\\ecommerce\\app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
