<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_84d492e5e14c993a3c2e19d290648291aa6e646b3f5d8ec6f8f8cffbc6c317a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_46b7402218dd2445ebf652262b3515f58888ca961e6dff6f06ed0147081e17c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46b7402218dd2445ebf652262b3515f58888ca961e6dff6f06ed0147081e17c7->enter($__internal_46b7402218dd2445ebf652262b3515f58888ca961e6dff6f06ed0147081e17c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46b7402218dd2445ebf652262b3515f58888ca961e6dff6f06ed0147081e17c7->leave($__internal_46b7402218dd2445ebf652262b3515f58888ca961e6dff6f06ed0147081e17c7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_00959913ca40528afbfb73f354dd0081c4594df07dd783cc243cd293502239e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00959913ca40528afbfb73f354dd0081c4594df07dd783cc243cd293502239e9->enter($__internal_00959913ca40528afbfb73f354dd0081c4594df07dd783cc243cd293502239e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_00959913ca40528afbfb73f354dd0081c4594df07dd783cc243cd293502239e9->leave($__internal_00959913ca40528afbfb73f354dd0081c4594df07dd783cc243cd293502239e9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb7f7248e6a8900ccf9936ac93004daa14dc4fdf4ab374e35b8d76924ddb3b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb7f7248e6a8900ccf9936ac93004daa14dc4fdf4ab374e35b8d76924ddb3b4f->enter($__internal_bb7f7248e6a8900ccf9936ac93004daa14dc4fdf4ab374e35b8d76924ddb3b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bb7f7248e6a8900ccf9936ac93004daa14dc4fdf4ab374e35b8d76924ddb3b4f->leave($__internal_bb7f7248e6a8900ccf9936ac93004daa14dc4fdf4ab374e35b8d76924ddb3b4f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp\\www\\ecommerce\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
