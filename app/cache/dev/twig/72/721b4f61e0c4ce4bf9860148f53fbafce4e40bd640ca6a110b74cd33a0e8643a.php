<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_fe29ca401609ccd825a26553263cdf267a21aacad46522a07345dd677de8aa16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b89a6da49163168b5b0e1e650f6d5c013aba143f24c4e91092b95c34312ea598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b89a6da49163168b5b0e1e650f6d5c013aba143f24c4e91092b95c34312ea598->enter($__internal_b89a6da49163168b5b0e1e650f6d5c013aba143f24c4e91092b95c34312ea598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b89a6da49163168b5b0e1e650f6d5c013aba143f24c4e91092b95c34312ea598->leave($__internal_b89a6da49163168b5b0e1e650f6d5c013aba143f24c4e91092b95c34312ea598_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b873afeeff22f66e091e57c90988b4597f1d0bed74972987d505d431b7e444af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b873afeeff22f66e091e57c90988b4597f1d0bed74972987d505d431b7e444af->enter($__internal_b873afeeff22f66e091e57c90988b4597f1d0bed74972987d505d431b7e444af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_b873afeeff22f66e091e57c90988b4597f1d0bed74972987d505d431b7e444af->leave($__internal_b873afeeff22f66e091e57c90988b4597f1d0bed74972987d505d431b7e444af_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "C:\\wamp\\www\\ecommerce\\app\\Resources\\FOSUserBundle\\views\\Profile\\show.html.twig");
    }
}
