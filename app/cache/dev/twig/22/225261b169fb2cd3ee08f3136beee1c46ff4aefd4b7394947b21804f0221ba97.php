<?php

/* UtilisateursBundle:Default:index.html.twig */
class __TwigTemplate_205920765814a332e74ba883d35bda1d4ecdfd81d5fa906f7bea1fb68b26566c extends Twig_Template
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
        $__internal_e4ef1eb4194f009bce30aa06adbc19e918f88b814218d24d5a680ac2f7bdf6b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4ef1eb4194f009bce30aa06adbc19e918f88b814218d24d5a680ac2f7bdf6b5->enter($__internal_e4ef1eb4194f009bce30aa06adbc19e918f88b814218d24d5a680ac2f7bdf6b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_e4ef1eb4194f009bce30aa06adbc19e918f88b814218d24d5a680ac2f7bdf6b5->leave($__internal_e4ef1eb4194f009bce30aa06adbc19e918f88b814218d24d5a680ac2f7bdf6b5_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("Hello {{ name }}!
", "UtilisateursBundle:Default:index.html.twig", "C:\\wamp\\www\\ecommerce\\src\\Utilisateurs\\UtilisateursBundle/Resources/views/Default/index.html.twig");
    }
}
