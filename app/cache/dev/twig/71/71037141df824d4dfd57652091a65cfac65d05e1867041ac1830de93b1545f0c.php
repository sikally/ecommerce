<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_fec4e1ce9dce74c7246697b03edd050295ef10f5a5eb148edc6a1906542b925f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_b2b4fe1a4f8c4e3445ff59740f16eb53d6e3fa4b4cd0db5d8626b226a8822624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2b4fe1a4f8c4e3445ff59740f16eb53d6e3fa4b4cd0db5d8626b226a8822624->enter($__internal_b2b4fe1a4f8c4e3445ff59740f16eb53d6e3fa4b4cd0db5d8626b226a8822624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2b4fe1a4f8c4e3445ff59740f16eb53d6e3fa4b4cd0db5d8626b226a8822624->leave($__internal_b2b4fe1a4f8c4e3445ff59740f16eb53d6e3fa4b4cd0db5d8626b226a8822624_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3cc926f28f1026430d447bcced73e3b30704469a498c437f1816a393558c7fac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cc926f28f1026430d447bcced73e3b30704469a498c437f1816a393558c7fac->enter($__internal_3cc926f28f1026430d447bcced73e3b30704469a498c437f1816a393558c7fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3cc926f28f1026430d447bcced73e3b30704469a498c437f1816a393558c7fac->leave($__internal_3cc926f28f1026430d447bcced73e3b30704469a498c437f1816a393558c7fac_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2dddc3acfb140f6b30c15d8f63696eb3a0effc82f688e13be231c9df9ac086c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dddc3acfb140f6b30c15d8f63696eb3a0effc82f688e13be231c9df9ac086c1->enter($__internal_2dddc3acfb140f6b30c15d8f63696eb3a0effc82f688e13be231c9df9ac086c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2dddc3acfb140f6b30c15d8f63696eb3a0effc82f688e13be231c9df9ac086c1->leave($__internal_2dddc3acfb140f6b30c15d8f63696eb3a0effc82f688e13be231c9df9ac086c1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7983da7cbbea2ff9f0325260213a8383111e9aceaa2ea2c5d57e3539b6c0ae18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7983da7cbbea2ff9f0325260213a8383111e9aceaa2ea2c5d57e3539b6c0ae18->enter($__internal_7983da7cbbea2ff9f0325260213a8383111e9aceaa2ea2c5d57e3539b6c0ae18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7983da7cbbea2ff9f0325260213a8383111e9aceaa2ea2c5d57e3539b6c0ae18->leave($__internal_7983da7cbbea2ff9f0325260213a8383111e9aceaa2ea2c5d57e3539b6c0ae18_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp\\www\\ecommerce\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
