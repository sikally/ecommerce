<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_0f7edef4630098d1c5d30e9f4dc42a530cc66a863c5410b150ead5cf17f5218d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1959264ba188bed1493aeadf6a205d1e352cdfd47b3bdcc4f09ca63315d129c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1959264ba188bed1493aeadf6a205d1e352cdfd47b3bdcc4f09ca63315d129c->enter($__internal_a1959264ba188bed1493aeadf6a205d1e352cdfd47b3bdcc4f09ca63315d129c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a1959264ba188bed1493aeadf6a205d1e352cdfd47b3bdcc4f09ca63315d129c->leave($__internal_a1959264ba188bed1493aeadf6a205d1e352cdfd47b3bdcc4f09ca63315d129c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_028e45b13518a64bef9343a2475508b718cb8b25f836a48726a294ca0ab97656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_028e45b13518a64bef9343a2475508b718cb8b25f836a48726a294ca0ab97656->enter($__internal_028e45b13518a64bef9343a2475508b718cb8b25f836a48726a294ca0ab97656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_028e45b13518a64bef9343a2475508b718cb8b25f836a48726a294ca0ab97656->leave($__internal_028e45b13518a64bef9343a2475508b718cb8b25f836a48726a294ca0ab97656_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp\\www\\ecommerce\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
