<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_71f11d78c7ec6e78af171de562cc9e632c79a65b2d1f71cb9de1f02d2d720832 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d89b2e1ffc239dc06046c48a5cdf0f07335ccd5e4f2a5c495d8f82cc8fdfcbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d89b2e1ffc239dc06046c48a5cdf0f07335ccd5e4f2a5c495d8f82cc8fdfcbc->enter($__internal_3d89b2e1ffc239dc06046c48a5cdf0f07335ccd5e4f2a5c495d8f82cc8fdfcbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3d89b2e1ffc239dc06046c48a5cdf0f07335ccd5e4f2a5c495d8f82cc8fdfcbc->leave($__internal_3d89b2e1ffc239dc06046c48a5cdf0f07335ccd5e4f2a5c495d8f82cc8fdfcbc_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_29d93084f6bbcf2707b0f1fd1798ebc1ce781ca85f95c62175cbcabca4142ff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29d93084f6bbcf2707b0f1fd1798ebc1ce781ca85f95c62175cbcabca4142ff8->enter($__internal_29d93084f6bbcf2707b0f1fd1798ebc1ce781ca85f95c62175cbcabca4142ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_29d93084f6bbcf2707b0f1fd1798ebc1ce781ca85f95c62175cbcabca4142ff8->leave($__internal_29d93084f6bbcf2707b0f1fd1798ebc1ce781ca85f95c62175cbcabca4142ff8_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f0f1d155ef86f6ec820eac660e5d2dce44eb862dbde65e7077aeaea8eca265d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0f1d155ef86f6ec820eac660e5d2dce44eb862dbde65e7077aeaea8eca265d0->enter($__internal_f0f1d155ef86f6ec820eac660e5d2dce44eb862dbde65e7077aeaea8eca265d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f0f1d155ef86f6ec820eac660e5d2dce44eb862dbde65e7077aeaea8eca265d0->leave($__internal_f0f1d155ef86f6ec820eac660e5d2dce44eb862dbde65e7077aeaea8eca265d0_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b568ef8eb5e72784e3bf21ba2c7a0d8fb7d7131d6aeb467371fddfed34291d59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b568ef8eb5e72784e3bf21ba2c7a0d8fb7d7131d6aeb467371fddfed34291d59->enter($__internal_b568ef8eb5e72784e3bf21ba2c7a0d8fb7d7131d6aeb467371fddfed34291d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b568ef8eb5e72784e3bf21ba2c7a0d8fb7d7131d6aeb467371fddfed34291d59->leave($__internal_b568ef8eb5e72784e3bf21ba2c7a0d8fb7d7131d6aeb467371fddfed34291d59_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "C:\\wamp\\www\\ecommerce\\app\\Resources\\FOSUserBundle\\views\\Resetting\\email.txt.twig");
    }
}
