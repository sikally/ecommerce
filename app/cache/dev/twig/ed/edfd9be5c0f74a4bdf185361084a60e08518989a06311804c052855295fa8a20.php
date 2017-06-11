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
        $__internal_e21bfffe35d0afbe38145745c41f9dab572a2b44e1658e8c8286dbe8556e9133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e21bfffe35d0afbe38145745c41f9dab572a2b44e1658e8c8286dbe8556e9133->enter($__internal_e21bfffe35d0afbe38145745c41f9dab572a2b44e1658e8c8286dbe8556e9133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e21bfffe35d0afbe38145745c41f9dab572a2b44e1658e8c8286dbe8556e9133->leave($__internal_e21bfffe35d0afbe38145745c41f9dab572a2b44e1658e8c8286dbe8556e9133_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d314b5c54464a88aa945fdc0df98f83bea824539af8602e589bfbf576132e346 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d314b5c54464a88aa945fdc0df98f83bea824539af8602e589bfbf576132e346->enter($__internal_d314b5c54464a88aa945fdc0df98f83bea824539af8602e589bfbf576132e346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d314b5c54464a88aa945fdc0df98f83bea824539af8602e589bfbf576132e346->leave($__internal_d314b5c54464a88aa945fdc0df98f83bea824539af8602e589bfbf576132e346_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c74d9dccb427007267d7011c2e641ec9d584c04fff315c9ce323685ee3d9d570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c74d9dccb427007267d7011c2e641ec9d584c04fff315c9ce323685ee3d9d570->enter($__internal_c74d9dccb427007267d7011c2e641ec9d584c04fff315c9ce323685ee3d9d570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c74d9dccb427007267d7011c2e641ec9d584c04fff315c9ce323685ee3d9d570->leave($__internal_c74d9dccb427007267d7011c2e641ec9d584c04fff315c9ce323685ee3d9d570_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6f6bcf74eed452553223a7751de936333657acc53e38c8b4ae98356c61cd8243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f6bcf74eed452553223a7751de936333657acc53e38c8b4ae98356c61cd8243->enter($__internal_6f6bcf74eed452553223a7751de936333657acc53e38c8b4ae98356c61cd8243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6f6bcf74eed452553223a7751de936333657acc53e38c8b4ae98356c61cd8243->leave($__internal_6f6bcf74eed452553223a7751de936333657acc53e38c8b4ae98356c61cd8243_prof);

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
