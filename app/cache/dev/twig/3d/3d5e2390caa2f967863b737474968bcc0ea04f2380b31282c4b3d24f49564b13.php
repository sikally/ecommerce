<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b8f4f20e3d5251b22464e301fe994cc534f29ad8952178940df21c1024766796 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce22f7eb93c630aa02a7eabc63f12ecf7ede98a7b283f07e95e2826df4ec4273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce22f7eb93c630aa02a7eabc63f12ecf7ede98a7b283f07e95e2826df4ec4273->enter($__internal_ce22f7eb93c630aa02a7eabc63f12ecf7ede98a7b283f07e95e2826df4ec4273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce22f7eb93c630aa02a7eabc63f12ecf7ede98a7b283f07e95e2826df4ec4273->leave($__internal_ce22f7eb93c630aa02a7eabc63f12ecf7ede98a7b283f07e95e2826df4ec4273_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_440b71bdb866a41bad4cd556e153a9a976b0c9b76a9d102d379dd4c2dd13c0dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_440b71bdb866a41bad4cd556e153a9a976b0c9b76a9d102d379dd4c2dd13c0dd->enter($__internal_440b71bdb866a41bad4cd556e153a9a976b0c9b76a9d102d379dd4c2dd13c0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_440b71bdb866a41bad4cd556e153a9a976b0c9b76a9d102d379dd4c2dd13c0dd->leave($__internal_440b71bdb866a41bad4cd556e153a9a976b0c9b76a9d102d379dd4c2dd13c0dd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_53803f125b376c406ddaab7bf2498659b08fe404616beddf86f9475f52f227df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53803f125b376c406ddaab7bf2498659b08fe404616beddf86f9475f52f227df->enter($__internal_53803f125b376c406ddaab7bf2498659b08fe404616beddf86f9475f52f227df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_53803f125b376c406ddaab7bf2498659b08fe404616beddf86f9475f52f227df->leave($__internal_53803f125b376c406ddaab7bf2498659b08fe404616beddf86f9475f52f227df_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_de0be975fe6625e5523bde474d4a9711066cecda79798811ec059bd0837812e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de0be975fe6625e5523bde474d4a9711066cecda79798811ec059bd0837812e5->enter($__internal_de0be975fe6625e5523bde474d4a9711066cecda79798811ec059bd0837812e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_de0be975fe6625e5523bde474d4a9711066cecda79798811ec059bd0837812e5->leave($__internal_de0be975fe6625e5523bde474d4a9711066cecda79798811ec059bd0837812e5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\ecommerce\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
