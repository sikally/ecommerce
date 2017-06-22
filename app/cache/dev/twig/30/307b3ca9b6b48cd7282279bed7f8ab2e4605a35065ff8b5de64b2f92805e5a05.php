<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_2b3f846196b7086e7120a7e49be822ca279c244fcf2ddd7d6eadf064d8fe26cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_3c779ef050d0f29784df9334841e3e9efb2fb31c23e403045842ea17d5e1319b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c779ef050d0f29784df9334841e3e9efb2fb31c23e403045842ea17d5e1319b->enter($__internal_3c779ef050d0f29784df9334841e3e9efb2fb31c23e403045842ea17d5e1319b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c779ef050d0f29784df9334841e3e9efb2fb31c23e403045842ea17d5e1319b->leave($__internal_3c779ef050d0f29784df9334841e3e9efb2fb31c23e403045842ea17d5e1319b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d5f319ac7a50bb99af8fe3befa7fff44331bdbcb545750963af963b9194e3c55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f319ac7a50bb99af8fe3befa7fff44331bdbcb545750963af963b9194e3c55->enter($__internal_d5f319ac7a50bb99af8fe3befa7fff44331bdbcb545750963af963b9194e3c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_d5f319ac7a50bb99af8fe3befa7fff44331bdbcb545750963af963b9194e3c55->leave($__internal_d5f319ac7a50bb99af8fe3befa7fff44331bdbcb545750963af963b9194e3c55_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
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
", "@FOSUser/Resetting/checkEmail.html.twig", "C:\\wamp\\www\\ecommerce\\app\\Resources\\FOSUserBundle\\views\\Resetting\\checkEmail.html.twig");
    }
}
