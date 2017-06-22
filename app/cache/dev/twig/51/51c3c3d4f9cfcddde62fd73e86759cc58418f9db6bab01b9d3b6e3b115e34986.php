<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4227c3bdfbea1df98147217da6d97e59b716505a337c7e6c8f4e5cefd3238436 extends Twig_Template
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
        $__internal_71a5c0625710224e00c8f23040ac5d21f84d7c80aa58753fab38bb67c89234e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71a5c0625710224e00c8f23040ac5d21f84d7c80aa58753fab38bb67c89234e6->enter($__internal_71a5c0625710224e00c8f23040ac5d21f84d7c80aa58753fab38bb67c89234e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71a5c0625710224e00c8f23040ac5d21f84d7c80aa58753fab38bb67c89234e6->leave($__internal_71a5c0625710224e00c8f23040ac5d21f84d7c80aa58753fab38bb67c89234e6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_35c75de7cde9baa4651b634942dcf5b2fd08e32a0f79862b509147efc5463bf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35c75de7cde9baa4651b634942dcf5b2fd08e32a0f79862b509147efc5463bf8->enter($__internal_35c75de7cde9baa4651b634942dcf5b2fd08e32a0f79862b509147efc5463bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_35c75de7cde9baa4651b634942dcf5b2fd08e32a0f79862b509147efc5463bf8->leave($__internal_35c75de7cde9baa4651b634942dcf5b2fd08e32a0f79862b509147efc5463bf8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b55a940f0ece96d46ca27d80aa51e4f3781a29e5707c79cda58843a66b6d3f73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b55a940f0ece96d46ca27d80aa51e4f3781a29e5707c79cda58843a66b6d3f73->enter($__internal_b55a940f0ece96d46ca27d80aa51e4f3781a29e5707c79cda58843a66b6d3f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b55a940f0ece96d46ca27d80aa51e4f3781a29e5707c79cda58843a66b6d3f73->leave($__internal_b55a940f0ece96d46ca27d80aa51e4f3781a29e5707c79cda58843a66b6d3f73_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3f9c975aab3980366ee7a0f0433f3187d3eff948560bc942909e94c8488888f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f9c975aab3980366ee7a0f0433f3187d3eff948560bc942909e94c8488888f5->enter($__internal_3f9c975aab3980366ee7a0f0433f3187d3eff948560bc942909e94c8488888f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3f9c975aab3980366ee7a0f0433f3187d3eff948560bc942909e94c8488888f5->leave($__internal_3f9c975aab3980366ee7a0f0433f3187d3eff948560bc942909e94c8488888f5_prof);

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
