<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_620d804643b543c2c4cfda67dd370b7ef1be656ba8cecd1a5725fc79ee417a48 extends Twig_Template
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
        $__internal_916c8376c82e56c25138a5552deb4bb9f15ed825373dbc40fcb148ec2fa1fbcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_916c8376c82e56c25138a5552deb4bb9f15ed825373dbc40fcb148ec2fa1fbcb->enter($__internal_916c8376c82e56c25138a5552deb4bb9f15ed825373dbc40fcb148ec2fa1fbcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_916c8376c82e56c25138a5552deb4bb9f15ed825373dbc40fcb148ec2fa1fbcb->leave($__internal_916c8376c82e56c25138a5552deb4bb9f15ed825373dbc40fcb148ec2fa1fbcb_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_025ceb74ef3073d8062ebeea8a8902818f86b48113ace2313209e58cf2e00e63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_025ceb74ef3073d8062ebeea8a8902818f86b48113ace2313209e58cf2e00e63->enter($__internal_025ceb74ef3073d8062ebeea8a8902818f86b48113ace2313209e58cf2e00e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_025ceb74ef3073d8062ebeea8a8902818f86b48113ace2313209e58cf2e00e63->leave($__internal_025ceb74ef3073d8062ebeea8a8902818f86b48113ace2313209e58cf2e00e63_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp\\www\\ecommerce\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
