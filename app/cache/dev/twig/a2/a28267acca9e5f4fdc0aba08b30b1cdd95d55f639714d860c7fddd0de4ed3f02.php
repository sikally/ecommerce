<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_6cf17d135710a45990930489dff1a79c5b1374f0684bbdc222be7c1cbe56eda4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff3ba7f9180eef4e96a339a25798635aacc6ea76b4bd42859c2926ee8c9da971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff3ba7f9180eef4e96a339a25798635aacc6ea76b4bd42859c2926ee8c9da971->enter($__internal_ff3ba7f9180eef4e96a339a25798635aacc6ea76b4bd42859c2926ee8c9da971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"row\">
    <div class=\"span3\">
        ";
        // line 5
        $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig", "FOSUserBundle:Profile:show_content.html.twig", 5)->display($context);
        // line 6
        echo "    </div>

    <div class=\"span9\">
        <h2>Mes informations</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                    <p>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"fos_user_user_show\">
    
</div>
";
        
        $__internal_ff3ba7f9180eef4e96a339a25798635aacc6ea76b4bd42859c2926ee8c9da971->leave($__internal_ff3ba7f9180eef4e96a339a25798635aacc6ea76b4bd42859c2926ee8c9da971_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 14,  38 => 13,  29 => 6,  27 => 5,  22 => 2,);
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

<div class=\"row\">
    <div class=\"span3\">
        {% include 'UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig' %}
    </div>

    <div class=\"span9\">
        <h2>Mes informations</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
                    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"fos_user_user_show\">
    
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "C:\\wamp\\www\\ecommerce\\app\\Resources\\FOSUserBundle\\views\\Profile\\show_content.html.twig");
    }
}
