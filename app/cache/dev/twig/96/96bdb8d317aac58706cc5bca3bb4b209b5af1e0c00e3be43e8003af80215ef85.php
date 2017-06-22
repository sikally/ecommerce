<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_86bc06c328c43c52abae4eceab864a9e3cee6233d3385118837e21b298a3ef2d extends Twig_Template
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
        $__internal_19439c101527f1c4bdbef6a58003612a5a914641d3851c7fcf044530734e763a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19439c101527f1c4bdbef6a58003612a5a914641d3851c7fcf044530734e763a->enter($__internal_19439c101527f1c4bdbef6a58003612a5a914641d3851c7fcf044530734e763a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_19439c101527f1c4bdbef6a58003612a5a914641d3851c7fcf044530734e763a->leave($__internal_19439c101527f1c4bdbef6a58003612a5a914641d3851c7fcf044530734e763a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_81cd0966209aaf71f87354d5fc229fb00dfbbf75bfb1b8eea55d00f159fc5ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81cd0966209aaf71f87354d5fc229fb00dfbbf75bfb1b8eea55d00f159fc5ad0->enter($__internal_81cd0966209aaf71f87354d5fc229fb00dfbbf75bfb1b8eea55d00f159fc5ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_81cd0966209aaf71f87354d5fc229fb00dfbbf75bfb1b8eea55d00f159fc5ad0->leave($__internal_81cd0966209aaf71f87354d5fc229fb00dfbbf75bfb1b8eea55d00f159fc5ad0_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_71f973a63b9557f4beb4155c1118ab25b23cfdef4e389b54af301e2a96e83acd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71f973a63b9557f4beb4155c1118ab25b23cfdef4e389b54af301e2a96e83acd->enter($__internal_71f973a63b9557f4beb4155c1118ab25b23cfdef4e389b54af301e2a96e83acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_71f973a63b9557f4beb4155c1118ab25b23cfdef4e389b54af301e2a96e83acd->leave($__internal_71f973a63b9557f4beb4155c1118ab25b23cfdef4e389b54af301e2a96e83acd_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_21e3bde155485634b4d3373da7a186eebeba58f563e87bb4e12ff96b3adcdec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21e3bde155485634b4d3373da7a186eebeba58f563e87bb4e12ff96b3adcdec7->enter($__internal_21e3bde155485634b4d3373da7a186eebeba58f563e87bb4e12ff96b3adcdec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_21e3bde155485634b4d3373da7a186eebeba58f563e87bb4e12ff96b3adcdec7->leave($__internal_21e3bde155485634b4d3373da7a186eebeba58f563e87bb4e12ff96b3adcdec7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\wamp\\www\\ecommerce\\app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
