<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_4aaaa9b2952670677b25b30447499b2cc31adcc4986ee36d35e31c2fdc0b9b0b extends Twig_Template
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
        $__internal_8ab9e9579133889d3307a3e8cc36bece4a3e98dc810064643949562c275e8571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ab9e9579133889d3307a3e8cc36bece4a3e98dc810064643949562c275e8571->enter($__internal_8ab9e9579133889d3307a3e8cc36bece4a3e98dc810064643949562c275e8571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8ab9e9579133889d3307a3e8cc36bece4a3e98dc810064643949562c275e8571->leave($__internal_8ab9e9579133889d3307a3e8cc36bece4a3e98dc810064643949562c275e8571_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8c7886b6ad55215a0dcd94d635ada9d40d746ac70eb0fb57d849c41630221033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c7886b6ad55215a0dcd94d635ada9d40d746ac70eb0fb57d849c41630221033->enter($__internal_8c7886b6ad55215a0dcd94d635ada9d40d746ac70eb0fb57d849c41630221033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8c7886b6ad55215a0dcd94d635ada9d40d746ac70eb0fb57d849c41630221033->leave($__internal_8c7886b6ad55215a0dcd94d635ada9d40d746ac70eb0fb57d849c41630221033_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_570bcd47c848d7cc1000cdec87a02884e610c483e58cbef151aa556a242184fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_570bcd47c848d7cc1000cdec87a02884e610c483e58cbef151aa556a242184fe->enter($__internal_570bcd47c848d7cc1000cdec87a02884e610c483e58cbef151aa556a242184fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_570bcd47c848d7cc1000cdec87a02884e610c483e58cbef151aa556a242184fe->leave($__internal_570bcd47c848d7cc1000cdec87a02884e610c483e58cbef151aa556a242184fe_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_aa419dd819739a7487551da4e271be2c759deb0be6d10cebb30c953fb5a59426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa419dd819739a7487551da4e271be2c759deb0be6d10cebb30c953fb5a59426->enter($__internal_aa419dd819739a7487551da4e271be2c759deb0be6d10cebb30c953fb5a59426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_aa419dd819739a7487551da4e271be2c759deb0be6d10cebb30c953fb5a59426->leave($__internal_aa419dd819739a7487551da4e271be2c759deb0be6d10cebb30c953fb5a59426_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
", "FOSUserBundle:Registration:email.txt.twig", "C:\\wamp\\www\\ecommerce\\app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
