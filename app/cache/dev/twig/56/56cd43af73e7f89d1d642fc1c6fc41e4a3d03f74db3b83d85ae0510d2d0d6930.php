<?php

/* PagesBundle:Default:pages/layout/pages.html.twig */
class __TwigTemplate_73b2b6371bef85cba564e70dd65e1ff6ed1ddd389feb87558d6b589cf1476898 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "PagesBundle:Default:pages/layout/pages.html.twig", 1);
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
        $__internal_22fff91030b0dd4b5faa3df3b994562300eb0e7d04386fcc71a58a5f60379e4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22fff91030b0dd4b5faa3df3b994562300eb0e7d04386fcc71a58a5f60379e4d->enter($__internal_22fff91030b0dd4b5faa3df3b994562300eb0e7d04386fcc71a58a5f60379e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default:pages/layout/pages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22fff91030b0dd4b5faa3df3b994562300eb0e7d04386fcc71a58a5f60379e4d->leave($__internal_22fff91030b0dd4b5faa3df3b994562300eb0e7d04386fcc71a58a5f60379e4d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4220604a724b067b935abc3c2fb52ab4ff704acd3c31a117ceb5d21ecc8c1f37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4220604a724b067b935abc3c2fb52ab4ff704acd3c31a117ceb5d21ecc8c1f37->enter($__internal_4220604a724b067b935abc3c2fb52ab4ff704acd3c31a117ceb5d21ecc8c1f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4220604a724b067b935abc3c2fb52ab4ff704acd3c31a117ceb5d21ecc8c1f37->leave($__internal_4220604a724b067b935abc3c2fb52ab4ff704acd3c31a117ceb5d21ecc8c1f37_prof);

    }

    public function getTemplateName()
    {
        return "PagesBundle:Default:pages/layout/pages.html.twig";
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
{% endblock %}", "PagesBundle:Default:pages/layout/pages.html.twig", "C:\\wamp\\www\\ecommerce\\src\\Pages\\PagesBundle/Resources/views/Default/pages/layout/pages.html.twig");
    }
}
