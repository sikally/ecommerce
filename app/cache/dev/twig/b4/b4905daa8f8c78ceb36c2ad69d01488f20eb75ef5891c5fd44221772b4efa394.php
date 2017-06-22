<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_a96c3f1c069a23c6406ae4bac4c3cab6ff9e95a453684827d2ed0814a5940e6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_8cf0cc808eba1af86fa5df61e896684accc4f3df2f935fe6fa92553b6ced5d8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cf0cc808eba1af86fa5df61e896684accc4f3df2f935fe6fa92553b6ced5d8e->enter($__internal_8cf0cc808eba1af86fa5df61e896684accc4f3df2f935fe6fa92553b6ced5d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cf0cc808eba1af86fa5df61e896684accc4f3df2f935fe6fa92553b6ced5d8e->leave($__internal_8cf0cc808eba1af86fa5df61e896684accc4f3df2f935fe6fa92553b6ced5d8e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5d7d3dc65d2e720f959d390f27038d0147519a54eb1a40d9e279701b6212ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5d7d3dc65d2e720f959d390f27038d0147519a54eb1a40d9e279701b6212ef4->enter($__internal_f5d7d3dc65d2e720f959d390f27038d0147519a54eb1a40d9e279701b6212ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f5d7d3dc65d2e720f959d390f27038d0147519a54eb1a40d9e279701b6212ef4->leave($__internal_f5d7d3dc65d2e720f959d390f27038d0147519a54eb1a40d9e279701b6212ef4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f202fa8ad5b8abae38caae2d7d51822e801ddc186f47a7cdd89df1c3cae60ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f202fa8ad5b8abae38caae2d7d51822e801ddc186f47a7cdd89df1c3cae60ed->enter($__internal_2f202fa8ad5b8abae38caae2d7d51822e801ddc186f47a7cdd89df1c3cae60ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_2f202fa8ad5b8abae38caae2d7d51822e801ddc186f47a7cdd89df1c3cae60ed->leave($__internal_2f202fa8ad5b8abae38caae2d7d51822e801ddc186f47a7cdd89df1c3cae60ed_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp\\www\\ecommerce\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
