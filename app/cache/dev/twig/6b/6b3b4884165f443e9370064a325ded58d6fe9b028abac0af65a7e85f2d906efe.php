<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_b7ab7d57e5295f464c7f478925bfc08024bfb1f1bc89272b3b6bb177ec3475af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_ebae179e7afdf3be0c896b9bf7c4a535a046de8737655c1289adcdeb89cb7c8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebae179e7afdf3be0c896b9bf7c4a535a046de8737655c1289adcdeb89cb7c8d->enter($__internal_ebae179e7afdf3be0c896b9bf7c4a535a046de8737655c1289adcdeb89cb7c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebae179e7afdf3be0c896b9bf7c4a535a046de8737655c1289adcdeb89cb7c8d->leave($__internal_ebae179e7afdf3be0c896b9bf7c4a535a046de8737655c1289adcdeb89cb7c8d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_07d10c280087827bab787ba2e776adb1b8e31fe34af4c07e59f8312cd281238f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07d10c280087827bab787ba2e776adb1b8e31fe34af4c07e59f8312cd281238f->enter($__internal_07d10c280087827bab787ba2e776adb1b8e31fe34af4c07e59f8312cd281238f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_07d10c280087827bab787ba2e776adb1b8e31fe34af4c07e59f8312cd281238f->leave($__internal_07d10c280087827bab787ba2e776adb1b8e31fe34af4c07e59f8312cd281238f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
", "@FOSUser/Registration/register.html.twig", "C:\\wamp\\www\\ecommerce\\app\\Resources\\FOSUserBundle\\views\\Registration\\register.html.twig");
    }
}
