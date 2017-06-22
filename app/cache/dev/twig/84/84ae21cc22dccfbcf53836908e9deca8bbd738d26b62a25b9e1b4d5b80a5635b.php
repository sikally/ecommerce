<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_70acc2947872601c5e5197ae618cd99cf33dc847570853580f539db0c19527cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_26255517b715ea1df1cff7e0cdcceccfcac365d2da496c0f2ac8150ab0611fe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26255517b715ea1df1cff7e0cdcceccfcac365d2da496c0f2ac8150ab0611fe4->enter($__internal_26255517b715ea1df1cff7e0cdcceccfcac365d2da496c0f2ac8150ab0611fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26255517b715ea1df1cff7e0cdcceccfcac365d2da496c0f2ac8150ab0611fe4->leave($__internal_26255517b715ea1df1cff7e0cdcceccfcac365d2da496c0f2ac8150ab0611fe4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a65bdc000dab39d6a318420b5278d6cd2b8a0e2f26b457810d7803369e7e0ed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a65bdc000dab39d6a318420b5278d6cd2b8a0e2f26b457810d7803369e7e0ed7->enter($__internal_a65bdc000dab39d6a318420b5278d6cd2b8a0e2f26b457810d7803369e7e0ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a65bdc000dab39d6a318420b5278d6cd2b8a0e2f26b457810d7803369e7e0ed7->leave($__internal_a65bdc000dab39d6a318420b5278d6cd2b8a0e2f26b457810d7803369e7e0ed7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
", "FOSUserBundle:Registration:checkEmail.html.twig", "C:\\wamp\\www\\ecommerce\\app/Resources/FOSUserBundle/views/Registration/checkEmail.html.twig");
    }
}
