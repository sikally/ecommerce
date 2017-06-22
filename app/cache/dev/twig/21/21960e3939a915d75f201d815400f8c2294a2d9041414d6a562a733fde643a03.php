<?php

/* modulesUsed/utilisateur.html.twig */
class __TwigTemplate_f3d4f06c9c96e0d0cfbe5be41799c0a267b14217cba3b054ebbb551ca7c54080 extends Twig_Template
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
        $__internal_e579ffec39bf1bfd361f035d61b959faf970ccafb42f591928625d2f85ac8a6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e579ffec39bf1bfd361f035d61b959faf970ccafb42f591928625d2f85ac8a6c->enter($__internal_e579ffec39bf1bfd361f035d61b959faf970ccafb42f591928625d2f85ac8a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modulesUsed/utilisateur.html.twig"));

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
        
        $__internal_e579ffec39bf1bfd361f035d61b959faf970ccafb42f591928625d2f85ac8a6c->leave($__internal_e579ffec39bf1bfd361f035d61b959faf970ccafb42f591928625d2f85ac8a6c_prof);

    }

    public function getTemplateName()
    {
        return "modulesUsed/utilisateur.html.twig";
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
</div>", "modulesUsed/utilisateur.html.twig", "C:\\wamp\\www\\ecommerce\\app\\Resources\\views\\modulesUsed\\utilisateur.html.twig");
    }
}
