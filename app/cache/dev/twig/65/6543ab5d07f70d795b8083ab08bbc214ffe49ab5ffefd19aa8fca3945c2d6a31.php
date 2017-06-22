<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_19a70e31dac4c4bf9fa8a2cfd88fc0f0d3422ddfdd2729eb11bd43e05444b2a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_c3f7099399e28ec6cbbde2aad72be0b9cbf3618735f5189cd343a76641ca87d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3f7099399e28ec6cbbde2aad72be0b9cbf3618735f5189cd343a76641ca87d1->enter($__internal_c3f7099399e28ec6cbbde2aad72be0b9cbf3618735f5189cd343a76641ca87d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3f7099399e28ec6cbbde2aad72be0b9cbf3618735f5189cd343a76641ca87d1->leave($__internal_c3f7099399e28ec6cbbde2aad72be0b9cbf3618735f5189cd343a76641ca87d1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7f7fd399e44d4e9cb7c51a40abff48a18ab30a82f7963d37da4f421c775dae11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f7fd399e44d4e9cb7c51a40abff48a18ab30a82f7963d37da4f421c775dae11->enter($__internal_7f7fd399e44d4e9cb7c51a40abff48a18ab30a82f7963d37da4f421c775dae11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_7f7fd399e44d4e9cb7c51a40abff48a18ab30a82f7963d37da4f421c775dae11->leave($__internal_7f7fd399e44d4e9cb7c51a40abff48a18ab30a82f7963d37da4f421c775dae11_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/checkEmail.html.twig", "C:\\wamp\\www\\ecommerce\\app\\Resources\\FOSUserBundle\\views\\Registration\\checkEmail.html.twig");
    }
}
