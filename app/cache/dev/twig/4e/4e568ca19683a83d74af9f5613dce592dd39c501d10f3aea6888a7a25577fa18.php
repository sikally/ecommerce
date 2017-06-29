<?php

/* UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig */
class __TwigTemplate_c8e830809a8cf5f98b38135fe1c52e49066a5023da8f964d7a25473dd45f1614 extends Twig_Template
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
        $__internal_2d2735ddc47a0f5800e67f541d665ec795678e5d8123d6b549af4b75079bcc0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d2735ddc47a0f5800e67f541d665ec795678e5d8123d6b549af4b75079bcc0c->enter($__internal_2d2735ddc47a0f5800e67f541d665ec795678e5d8123d6b549af4b75079bcc0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig"));

        // line 1
        echo "<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li>
            <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Se connecter</a>
        </li>
        <li>
            <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a>
        </li>
    </ul>
</div>";
        
        $__internal_2d2735ddc47a0f5800e67f541d665ec795678e5d8123d6b549af4b75079bcc0c->leave($__internal_2d2735ddc47a0f5800e67f541d665ec795678e5d8123d6b549af4b75079bcc0c_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  27 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li>
            <a href=\"{{ path('fos_user_security_login') }}\">Se connecter</a>
        </li>
        <li>
            <a href=\"{{ path('fos_user_registration_register') }}\">S'inscrire</a>
        </li>
    </ul>
</div>", "UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig", "C:\\wamp\\www\\ecommerce\\src\\Utilisateurs\\UtilisateursBundle/Resources/views/Default/modulesUsed/utilisateurs.html.twig");
    }
}
