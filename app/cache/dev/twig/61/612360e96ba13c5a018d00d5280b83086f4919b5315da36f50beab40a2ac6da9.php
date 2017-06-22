<?php

/* PagesBundle:Default/pages/layout:pages.html.twig */
class __TwigTemplate_caccbba1d00a3116dbe8cb058d37b3524e380534a6e2a69c163e317455453093 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "PagesBundle:Default/pages/layout:pages.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7fd2f34d87da9fcbb6586e2ebb9f816116add726b27a544ae09a99ffa5a201fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fd2f34d87da9fcbb6586e2ebb9f816116add726b27a544ae09a99ffa5a201fe->enter($__internal_7fd2f34d87da9fcbb6586e2ebb9f816116add726b27a544ae09a99ffa5a201fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default/pages/layout:pages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fd2f34d87da9fcbb6586e2ebb9f816116add726b27a544ae09a99ffa5a201fe->leave($__internal_7fd2f34d87da9fcbb6586e2ebb9f816116add726b27a544ae09a99ffa5a201fe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f9367e430e02a7892f448f5232443bf24ffd25e40caee4caa54fab0c02e0809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f9367e430e02a7892f448f5232443bf24ffd25e40caee4caa54fab0c02e0809->enter($__internal_8f9367e430e02a7892f448f5232443bf24ffd25e40caee4caa54fab0c02e0809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        <h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "titre", array()), "html", null, true);
        echo "</h1>
        <div class=\"span12\">
            ";
        // line 8
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "contenu", array());
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_8f9367e430e02a7892f448f5232443bf24ffd25e40caee4caa54fab0c02e0809->leave($__internal_8f9367e430e02a7892f448f5232443bf24ffd25e40caee4caa54fab0c02e0809_prof);

    }

    public function getTemplateName()
    {
        return "PagesBundle:Default/pages/layout:pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout/layout.html.twig\" %}

{% block body %}
<div class=\"container\">
    <div class=\"row\">
        <h1>{{ page.titre }}</h1>
        <div class=\"span12\">
            {{ page.contenu|raw }}
        </div>
    </div>
</div>
{% endblock %}", "PagesBundle:Default/pages/layout:pages.html.twig", "C:\\wamp\\www\\ecommerce\\src\\Pages\\PagesBundle/Resources/views/Default/pages/layout/pages.html.twig");
    }
}
