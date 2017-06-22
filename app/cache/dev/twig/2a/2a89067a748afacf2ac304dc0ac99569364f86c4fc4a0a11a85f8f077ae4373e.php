<?php

/* :modulesUsed:utilisateur.html.twig */
class __TwigTemplate_9fdb77544411dcddedec46fd688d179df98b1b85dcf4c359cb9462926ee1175b extends Twig_Template
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
        $__internal_9129df6fbf04fcf248112fd03ef150a4d11b9a80164af018c3e1f2307bcf8cf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9129df6fbf04fcf248112fd03ef150a4d11b9a80164af018c3e1f2307bcf8cf7->enter($__internal_9129df6fbf04fcf248112fd03ef150a4d11b9a80164af018c3e1f2307bcf8cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":modulesUsed:utilisateur.html.twig"));

        // line 1
        echo "<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li>
            <a href=\"connexion.php\">Se connecter</a>
        </li>
        <li>
            <a href=\"inscription.php\">S'inscrire</a>
        </li>
    </ul>
</div>";
        
        $__internal_9129df6fbf04fcf248112fd03ef150a4d11b9a80164af018c3e1f2307bcf8cf7->leave($__internal_9129df6fbf04fcf248112fd03ef150a4d11b9a80164af018c3e1f2307bcf8cf7_prof);

    }

    public function getTemplateName()
    {
        return ":modulesUsed:utilisateur.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
            <a href=\"connexion.php\">Se connecter</a>
        </li>
        <li>
            <a href=\"inscription.php\">S'inscrire</a>
        </li>
    </ul>
</div>", ":modulesUsed:utilisateur.html.twig", "C:\\wamp\\www\\ecommerce\\app/Resources\\views/modulesUsed/utilisateur.html.twig");
    }
}
