<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_c550c42bc5a956fe105d27ec43e86ed2ea412397629f39473a3fba2099c03790 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_680a8c285c97a5df428af91839b79da783a63f8a5edb8cec231220f20e833651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_680a8c285c97a5df428af91839b79da783a63f8a5edb8cec231220f20e833651->enter($__internal_680a8c285c97a5df428af91839b79da783a63f8a5edb8cec231220f20e833651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_680a8c285c97a5df428af91839b79da783a63f8a5edb8cec231220f20e833651->leave($__internal_680a8c285c97a5df428af91839b79da783a63f8a5edb8cec231220f20e833651_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_88dcac5ac95f4f7eb9899352e5c0b41af08bd9742676abd00763caf82e1932e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88dcac5ac95f4f7eb9899352e5c0b41af08bd9742676abd00763caf82e1932e1->enter($__internal_88dcac5ac95f4f7eb9899352e5c0b41af08bd9742676abd00763caf82e1932e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_88dcac5ac95f4f7eb9899352e5c0b41af08bd9742676abd00763caf82e1932e1->leave($__internal_88dcac5ac95f4f7eb9899352e5c0b41af08bd9742676abd00763caf82e1932e1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\wamp\\www\\ecommerce\\app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
