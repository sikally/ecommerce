<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_6006466c56cf192c5367a40dcbbe4c9dcc5788509d97de2be091ea1292e8e61d extends Twig_Template
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
        $__internal_3b85a79788e1ce79f1e5aceb5029fc3a373930086e134001b2430099a66a09d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b85a79788e1ce79f1e5aceb5029fc3a373930086e134001b2430099a66a09d6->enter($__internal_3b85a79788e1ce79f1e5aceb5029fc3a373930086e134001b2430099a66a09d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));

        // line 2
        echo "
<div class=\"row\">
    <div class=\"span12\">
        <h2>Mot de passe perdu</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                    <h4>Récupération du mot de passe ?</h4>
                    <em>
                        Compléter le formulaire, votre mot de passe sera alors réinitialiser.<br /><br />
                        Une fois validé, vous devrez utiliser le nouveau mot de passe que vous avez défini.
                    </em>
                </div>

                <div class=\"span4 offset2\">
                    <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\">
                        ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                        <br />
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_3b85a79788e1ce79f1e5aceb5029fc3a373930086e134001b2430099a66a09d6->leave($__internal_3b85a79788e1ce79f1e5aceb5029fc3a373930086e134001b2430099a66a09d6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 20,  45 => 18,  39 => 17,  22 => 2,);
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
    <div class=\"span12\">
        <h2>Mot de passe perdu</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                    <h4>Récupération du mot de passe ?</h4>
                    <em>
                        Compléter le formulaire, votre mot de passe sera alors réinitialiser.<br /><br />
                        Une fois validé, vous devrez utiliser le nouveau mot de passe que vous avez défini.
                    </em>
                </div>

                <div class=\"span4 offset2\">
                    <form action=\"{{ path('fos_user_resetting_reset', {'token': token}) }}\" {{ form_enctype(form) }} method=\"POST\">
                        {{ form_widget(form) }}
                        <br />
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ 'resetting.reset.submit'|trans }}\" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>", "FOSUserBundle:Resetting:reset_content.html.twig", "C:\\wamp\\www\\ecommerce\\app/Resources/FOSUserBundle/views/Resetting/reset_content.html.twig");
    }
}
