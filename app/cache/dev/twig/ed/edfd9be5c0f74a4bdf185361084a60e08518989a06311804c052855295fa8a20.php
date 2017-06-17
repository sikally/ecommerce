<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_bb9c50c410d1205064a6291915a0f37285d13ae364ca7d8067ddb7e6938c130e extends Twig_Template
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
        $__internal_3e6cfe28b0e1017f32f8952be4698c2429f7fb6a4b525b44b0d0aa6d1de631ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e6cfe28b0e1017f32f8952be4698c2429f7fb6a4b525b44b0d0aa6d1de631ee->enter($__internal_3e6cfe28b0e1017f32f8952be4698c2429f7fb6a4b525b44b0d0aa6d1de631ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e6cfe28b0e1017f32f8952be4698c2429f7fb6a4b525b44b0d0aa6d1de631ee->leave($__internal_3e6cfe28b0e1017f32f8952be4698c2429f7fb6a4b525b44b0d0aa6d1de631ee_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3545d78d6be4f472fdca426dad5d8fc26d86d5bbb425bf8763cc98e373464ff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3545d78d6be4f472fdca426dad5d8fc26d86d5bbb425bf8763cc98e373464ff5->enter($__internal_3545d78d6be4f472fdca426dad5d8fc26d86d5bbb425bf8763cc98e373464ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3545d78d6be4f472fdca426dad5d8fc26d86d5bbb425bf8763cc98e373464ff5->leave($__internal_3545d78d6be4f472fdca426dad5d8fc26d86d5bbb425bf8763cc98e373464ff5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ee5a57eaad45d2dc45b32202264e33aff2b7a8c483a5315bc1a18d44300c0ac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee5a57eaad45d2dc45b32202264e33aff2b7a8c483a5315bc1a18d44300c0ac2->enter($__internal_ee5a57eaad45d2dc45b32202264e33aff2b7a8c483a5315bc1a18d44300c0ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ee5a57eaad45d2dc45b32202264e33aff2b7a8c483a5315bc1a18d44300c0ac2->leave($__internal_ee5a57eaad45d2dc45b32202264e33aff2b7a8c483a5315bc1a18d44300c0ac2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f707a9d25bbb974219dfa51ee8432bfa1bed380dff34b6f0ffef4a8cbf5827b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f707a9d25bbb974219dfa51ee8432bfa1bed380dff34b6f0ffef4a8cbf5827b7->enter($__internal_f707a9d25bbb974219dfa51ee8432bfa1bed380dff34b6f0ffef4a8cbf5827b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f707a9d25bbb974219dfa51ee8432bfa1bed380dff34b6f0ffef4a8cbf5827b7->leave($__internal_f707a9d25bbb974219dfa51ee8432bfa1bed380dff34b6f0ffef4a8cbf5827b7_prof);

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
