<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_80a8b14c6a58ed13a10fd4550d4126ed59ff79a397e3fd1103b3ae34436e8368 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_e49a498e42cf494159866be032dbc2d36b87f9868d740e19abad41f19546578f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e49a498e42cf494159866be032dbc2d36b87f9868d740e19abad41f19546578f->enter($__internal_e49a498e42cf494159866be032dbc2d36b87f9868d740e19abad41f19546578f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e49a498e42cf494159866be032dbc2d36b87f9868d740e19abad41f19546578f->leave($__internal_e49a498e42cf494159866be032dbc2d36b87f9868d740e19abad41f19546578f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9bb8787b51c30d89eed22cfd472fb631c02a3559598432f21e75cc90e4d55740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bb8787b51c30d89eed22cfd472fb631c02a3559598432f21e75cc90e4d55740->enter($__internal_9bb8787b51c30d89eed22cfd472fb631c02a3559598432f21e75cc90e4d55740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_9bb8787b51c30d89eed22cfd472fb631c02a3559598432f21e75cc90e4d55740->leave($__internal_9bb8787b51c30d89eed22cfd472fb631c02a3559598432f21e75cc90e4d55740_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\wamp\\www\\ecommerce\\app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
