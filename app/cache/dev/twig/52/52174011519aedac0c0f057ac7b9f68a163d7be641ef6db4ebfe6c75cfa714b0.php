<?php

/* UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig */
class __TwigTemplate_5d296dfc0605e7e7081782070a4ccc3bbb355460eef6f8454dca923854833fc1 extends Twig_Template
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
        $__internal_e097cc987c36f566668f2a85c71c47d72cc06eaf28294d635e87fc3f3b30ce1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e097cc987c36f566668f2a85c71c47d72cc06eaf28294d635e87fc3f3b30ce1a->enter($__internal_e097cc987c36f566668f2a85c71c47d72cc06eaf28294d635e87fc3f3b30ce1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig"));

        // line 1
        echo "<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li>
            <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\">Mes informations</a>
        </li>
        <li>
            <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\">Editer mes informations</a>
        </li>
        <li>
            <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\">Changer mon mot de passe</a>
        </li>
        <li>
            <a href=\"#\">Mes factures</a>
        </li>
        <li>
            <a href=\"#\">Mes adresses</a>
        </li>
        <li>
            <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">deconnexion</a>
        </li>
    </ul>
</div>";
        
        $__internal_e097cc987c36f566668f2a85c71c47d72cc06eaf28294d635e87fc3f3b30ce1a->leave($__internal_e097cc987c36f566668f2a85c71c47d72cc06eaf28294d635e87fc3f3b30ce1a_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 19,  39 => 10,  33 => 7,  27 => 4,  22 => 1,);
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
            <a href=\"{{ path('fos_user_profile_show') }}\">Mes informations</a>
        </li>
        <li>
            <a href=\"{{ path('fos_user_profile_edit') }}\">Editer mes informations</a>
        </li>
        <li>
            <a href=\"{{ path('fos_user_change_password') }}\">Changer mon mot de passe</a>
        </li>
        <li>
            <a href=\"#\">Mes factures</a>
        </li>
        <li>
            <a href=\"#\">Mes adresses</a>
        </li>
        <li>
            <a href=\"{{ path('fos_user_security_logout') }}\">deconnexion</a>
        </li>
    </ul>
</div>", "UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig", "C:\\wamp\\www\\ecommerce\\src\\Utilisateurs\\UtilisateursBundle/Resources/views/Default/modulesUsed/utilisateursConnecte.html.twig");
    }
}
