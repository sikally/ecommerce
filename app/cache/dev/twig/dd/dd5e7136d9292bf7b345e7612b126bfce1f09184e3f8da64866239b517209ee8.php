<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_fe2867874257d9860ce007bba73296a3081bfb26af92ad1feb29e285e1218926 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_8fb84b68b74a7b62ca4e935b95ca415390f5b6e9d3216ba77ee3d859c83cb1df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fb84b68b74a7b62ca4e935b95ca415390f5b6e9d3216ba77ee3d859c83cb1df->enter($__internal_8fb84b68b74a7b62ca4e935b95ca415390f5b6e9d3216ba77ee3d859c83cb1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fb84b68b74a7b62ca4e935b95ca415390f5b6e9d3216ba77ee3d859c83cb1df->leave($__internal_8fb84b68b74a7b62ca4e935b95ca415390f5b6e9d3216ba77ee3d859c83cb1df_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f19e45a67795715cb9bd9c1d859d4d855a637fe3bf06f771ff38b49f5b6c98b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f19e45a67795715cb9bd9c1d859d4d855a637fe3bf06f771ff38b49f5b6c98b9->enter($__internal_f19e45a67795715cb9bd9c1d859d4d855a637fe3bf06f771ff38b49f5b6c98b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f19e45a67795715cb9bd9c1d859d4d855a637fe3bf06f771ff38b49f5b6c98b9->leave($__internal_f19e45a67795715cb9bd9c1d859d4d855a637fe3bf06f771ff38b49f5b6c98b9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>{{ 'resetting.password_already_requested'|trans }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", "C:\\wamp\\www\\ecommerce\\app/Resources/FOSUserBundle/views/Resetting/passwordAlreadyRequested.html.twig");
    }
}
