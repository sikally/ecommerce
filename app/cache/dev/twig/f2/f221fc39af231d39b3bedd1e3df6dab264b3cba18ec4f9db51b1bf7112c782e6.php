<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_9474e9a968c8e465df3c2fb59fcb42b3c8912a8ca583d70f8f97554c972af12e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_fefa9ecb6f2e98b497a651017bd05fba8d28305cc306ced6b6f908a85b310602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fefa9ecb6f2e98b497a651017bd05fba8d28305cc306ced6b6f908a85b310602->enter($__internal_fefa9ecb6f2e98b497a651017bd05fba8d28305cc306ced6b6f908a85b310602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fefa9ecb6f2e98b497a651017bd05fba8d28305cc306ced6b6f908a85b310602->leave($__internal_fefa9ecb6f2e98b497a651017bd05fba8d28305cc306ced6b6f908a85b310602_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a99af29380448a6ceabaea50b42e5faa179489950157b1bbd17803b58a2b5920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a99af29380448a6ceabaea50b42e5faa179489950157b1bbd17803b58a2b5920->enter($__internal_a99af29380448a6ceabaea50b42e5faa179489950157b1bbd17803b58a2b5920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_a99af29380448a6ceabaea50b42e5faa179489950157b1bbd17803b58a2b5920->leave($__internal_a99af29380448a6ceabaea50b42e5faa179489950157b1bbd17803b58a2b5920_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\wamp\\www\\ecommerce\\app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
