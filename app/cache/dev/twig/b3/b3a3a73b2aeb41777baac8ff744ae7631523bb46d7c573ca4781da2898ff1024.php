<?php

/* @Utilisateurs/Default/index.html.twig */
class __TwigTemplate_43c0d045462fd8282f40c456949b7619cd8b6d91b32e761e2415fc6aa1da5912 extends Twig_Template
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
        $__internal_48f9211fd6cf0d51ba83e123c4703bdd4f844f4a7dd3b59a006f684f777d6ebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48f9211fd6cf0d51ba83e123c4703bdd4f844f4a7dd3b59a006f684f777d6ebc->enter($__internal_48f9211fd6cf0d51ba83e123c4703bdd4f844f4a7dd3b59a006f684f777d6ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Utilisateurs/Default/index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_48f9211fd6cf0d51ba83e123c4703bdd4f844f4a7dd3b59a006f684f777d6ebc->leave($__internal_48f9211fd6cf0d51ba83e123c4703bdd4f844f4a7dd3b59a006f684f777d6ebc_prof);

    }

    public function getTemplateName()
    {
        return "@Utilisateurs/Default/index.html.twig";
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
", "@Utilisateurs/Default/index.html.twig", "C:\\wamp\\www\\ecommerce\\src\\Utilisateurs\\UtilisateursBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
