<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_b57ea82b283209292f8494618386fcdc399a0fbf6e4ce0c6c40168a393363468 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_913a178a7436ea1c3a34912199df202cf3be968658cfa088302358fb4383527e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_913a178a7436ea1c3a34912199df202cf3be968658cfa088302358fb4383527e->enter($__internal_913a178a7436ea1c3a34912199df202cf3be968658cfa088302358fb4383527e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_913a178a7436ea1c3a34912199df202cf3be968658cfa088302358fb4383527e->leave($__internal_913a178a7436ea1c3a34912199df202cf3be968658cfa088302358fb4383527e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2c6ae2fcd60bfd5e47605051cea08737925b12be8db064bd759b71f7440c88c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c6ae2fcd60bfd5e47605051cea08737925b12be8db064bd759b71f7440c88c2->enter($__internal_2c6ae2fcd60bfd5e47605051cea08737925b12be8db064bd759b71f7440c88c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_2c6ae2fcd60bfd5e47605051cea08737925b12be8db064bd759b71f7440c88c2->leave($__internal_2c6ae2fcd60bfd5e47605051cea08737925b12be8db064bd759b71f7440c88c2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\wamp\\www\\ecommerce\\app\\Resources\\FOSUserBundle\\views\\Profile\\show.html.twig");
    }
}
