<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6a37798f427ad3e2d8c6d545a177d33fdfb15a51c49d7878fd087d573740fd12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_321b689ae71a4fe804c0927b1198256be83bc4b53242995c262ee24d020eee8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_321b689ae71a4fe804c0927b1198256be83bc4b53242995c262ee24d020eee8d->enter($__internal_321b689ae71a4fe804c0927b1198256be83bc4b53242995c262ee24d020eee8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_321b689ae71a4fe804c0927b1198256be83bc4b53242995c262ee24d020eee8d->leave($__internal_321b689ae71a4fe804c0927b1198256be83bc4b53242995c262ee24d020eee8d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_16d8337422f89c26e7e6b80ac319ee1429c226c88ca5bd13755bf755f8277e26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16d8337422f89c26e7e6b80ac319ee1429c226c88ca5bd13755bf755f8277e26->enter($__internal_16d8337422f89c26e7e6b80ac319ee1429c226c88ca5bd13755bf755f8277e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_16d8337422f89c26e7e6b80ac319ee1429c226c88ca5bd13755bf755f8277e26->leave($__internal_16d8337422f89c26e7e6b80ac319ee1429c226c88ca5bd13755bf755f8277e26_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b8d5e98cdda8e98e25a7bc601539a244644be649717c5bad28b58dca2f3b768a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8d5e98cdda8e98e25a7bc601539a244644be649717c5bad28b58dca2f3b768a->enter($__internal_b8d5e98cdda8e98e25a7bc601539a244644be649717c5bad28b58dca2f3b768a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b8d5e98cdda8e98e25a7bc601539a244644be649717c5bad28b58dca2f3b768a->leave($__internal_b8d5e98cdda8e98e25a7bc601539a244644be649717c5bad28b58dca2f3b768a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b1fe5e8a972573dc562f337c9eac66589dfaf0bcd882225eddb31a9caa9bcbef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1fe5e8a972573dc562f337c9eac66589dfaf0bcd882225eddb31a9caa9bcbef->enter($__internal_b1fe5e8a972573dc562f337c9eac66589dfaf0bcd882225eddb31a9caa9bcbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b1fe5e8a972573dc562f337c9eac66589dfaf0bcd882225eddb31a9caa9bcbef->leave($__internal_b1fe5e8a972573dc562f337c9eac66589dfaf0bcd882225eddb31a9caa9bcbef_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\ecommerce\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
