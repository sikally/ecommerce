<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_83d648f6a4dc6519cfcbf940c16d9d3b467eccb048c51cb4ebd1508c1129128c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e53e91d3e88a44b1d8f8030b04949cc6d910360efc69ecf48ea1f2801e55d474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e53e91d3e88a44b1d8f8030b04949cc6d910360efc69ecf48ea1f2801e55d474->enter($__internal_e53e91d3e88a44b1d8f8030b04949cc6d910360efc69ecf48ea1f2801e55d474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_e53e91d3e88a44b1d8f8030b04949cc6d910360efc69ecf48ea1f2801e55d474->leave($__internal_e53e91d3e88a44b1d8f8030b04949cc6d910360efc69ecf48ea1f2801e55d474_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "C:\\wamp\\www\\ecommerce\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
