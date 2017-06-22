<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_407143b2c94b0ff2b9853c7d7e81f68107b9684ad2656046ec4abdce8487464c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_fa406ede7e159cd79b0535d14e458680059bab23b76e2b68f7731bebdf9873df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa406ede7e159cd79b0535d14e458680059bab23b76e2b68f7731bebdf9873df->enter($__internal_fa406ede7e159cd79b0535d14e458680059bab23b76e2b68f7731bebdf9873df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa406ede7e159cd79b0535d14e458680059bab23b76e2b68f7731bebdf9873df->leave($__internal_fa406ede7e159cd79b0535d14e458680059bab23b76e2b68f7731bebdf9873df_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bfc33a636e3106ca72f34f2f693657172ec341256aefd6a169d8da81e30e5b39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfc33a636e3106ca72f34f2f693657172ec341256aefd6a169d8da81e30e5b39->enter($__internal_bfc33a636e3106ca72f34f2f693657172ec341256aefd6a169d8da81e30e5b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <div class=\"row\">
        <div class=\"span12\">
            <h2>Mot de passe perdu</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    <div class=\"span10 offset1\">
                        <p>
                            <br />
                            ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_bfc33a636e3106ca72f34f2f693657172ec341256aefd6a169d8da81e30e5b39->leave($__internal_bfc33a636e3106ca72f34f2f693657172ec341256aefd6a169d8da81e30e5b39_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  40 => 6,  34 => 5,  11 => 1,);
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
    <div class=\"row\">
        <div class=\"span12\">
            <h2>Mot de passe perdu</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    <div class=\"span10 offset1\">
                        <p>
                            <br />
                            {{ 'resetting.check_email'|trans({'%email%': email}) }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "FOSUserBundle:Resetting:checkEmail.html.twig", "C:\\wamp\\www\\ecommerce\\app/Resources/FOSUserBundle/views/Resetting/checkEmail.html.twig");
    }
}
