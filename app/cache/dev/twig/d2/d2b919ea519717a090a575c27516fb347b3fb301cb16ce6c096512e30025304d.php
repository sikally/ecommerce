<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_05bd3e0e787432d6c58e2b334ae2c70fff1171f4929ab5422463b8c2d5285747 extends Twig_Template
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
        $__internal_3dcc864b38c3df7641dbf389d420f34ec6ee9012b0326ba63aa5024ec16590cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dcc864b38c3df7641dbf389d420f34ec6ee9012b0326ba63aa5024ec16590cc->enter($__internal_3dcc864b38c3df7641dbf389d420f34ec6ee9012b0326ba63aa5024ec16590cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3dcc864b38c3df7641dbf389d420f34ec6ee9012b0326ba63aa5024ec16590cc->leave($__internal_3dcc864b38c3df7641dbf389d420f34ec6ee9012b0326ba63aa5024ec16590cc_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_60503034361573cb77ba8714960fb1d79464a6979b2ec5cf339073bb6b70da6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60503034361573cb77ba8714960fb1d79464a6979b2ec5cf339073bb6b70da6b->enter($__internal_60503034361573cb77ba8714960fb1d79464a6979b2ec5cf339073bb6b70da6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_60503034361573cb77ba8714960fb1d79464a6979b2ec5cf339073bb6b70da6b->leave($__internal_60503034361573cb77ba8714960fb1d79464a6979b2ec5cf339073bb6b70da6b_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d6be65eabce592d0c19b7d746c2b0cea7f9d16a1495f31f8eee21bfda62fbdda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6be65eabce592d0c19b7d746c2b0cea7f9d16a1495f31f8eee21bfda62fbdda->enter($__internal_d6be65eabce592d0c19b7d746c2b0cea7f9d16a1495f31f8eee21bfda62fbdda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d6be65eabce592d0c19b7d746c2b0cea7f9d16a1495f31f8eee21bfda62fbdda->leave($__internal_d6be65eabce592d0c19b7d746c2b0cea7f9d16a1495f31f8eee21bfda62fbdda_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8949ac6674685ed6f36e9213b706cfc3556269b653834d84a9058a47a73fa0af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8949ac6674685ed6f36e9213b706cfc3556269b653834d84a9058a47a73fa0af->enter($__internal_8949ac6674685ed6f36e9213b706cfc3556269b653834d84a9058a47a73fa0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8949ac6674685ed6f36e9213b706cfc3556269b653834d84a9058a47a73fa0af->leave($__internal_8949ac6674685ed6f36e9213b706cfc3556269b653834d84a9058a47a73fa0af_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "C:\\wamp\\www\\ecommerce\\app\\Resources\\FOSUserBundle\\views\\Registration\\email.txt.twig");
    }
}
