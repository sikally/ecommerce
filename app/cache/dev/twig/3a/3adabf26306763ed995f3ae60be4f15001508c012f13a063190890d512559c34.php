<?php

/* @Pages/Default/pages/layout/pages.html.twig */
class __TwigTemplate_44840e45839c9103a5d17600627c214dd6cf7449501d05d569a5a47a0d3ca72e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Pages/Default/pages/layout/pages.html.twig", 1);
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
        $__internal_a9774e61ab3af7471c5ab6d5c38c44716fe2cb15b1fb56e7dcb3f6581548d201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9774e61ab3af7471c5ab6d5c38c44716fe2cb15b1fb56e7dcb3f6581548d201->enter($__internal_a9774e61ab3af7471c5ab6d5c38c44716fe2cb15b1fb56e7dcb3f6581548d201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Pages/Default/pages/layout/pages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9774e61ab3af7471c5ab6d5c38c44716fe2cb15b1fb56e7dcb3f6581548d201->leave($__internal_a9774e61ab3af7471c5ab6d5c38c44716fe2cb15b1fb56e7dcb3f6581548d201_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b27ab4053d500a67d7aca34c40e8545ebf545799e6998b1dba5c1de100a1528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b27ab4053d500a67d7aca34c40e8545ebf545799e6998b1dba5c1de100a1528->enter($__internal_5b27ab4053d500a67d7aca34c40e8545ebf545799e6998b1dba5c1de100a1528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5b27ab4053d500a67d7aca34c40e8545ebf545799e6998b1dba5c1de100a1528->leave($__internal_5b27ab4053d500a67d7aca34c40e8545ebf545799e6998b1dba5c1de100a1528_prof);

    }

    public function getTemplateName()
    {
        return "@Pages/Default/pages/layout/pages.html.twig";
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
{% endblock %}", "@Pages/Default/pages/layout/pages.html.twig", "C:\\wamp\\www\\ecommerce\\src\\Pages\\PagesBundle\\Resources\\views\\Default\\pages\\layout\\pages.html.twig");
    }
}
