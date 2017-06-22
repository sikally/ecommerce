<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4a6afc3d5b67fc850a0412f67f338fa56cd0b32c1c4d196a7fdd6ce2499b43f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_ae20bbe9c5376771f55eec5c73d26b2f5eca9c9a3836897851094fc92aae78b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae20bbe9c5376771f55eec5c73d26b2f5eca9c9a3836897851094fc92aae78b4->enter($__internal_ae20bbe9c5376771f55eec5c73d26b2f5eca9c9a3836897851094fc92aae78b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae20bbe9c5376771f55eec5c73d26b2f5eca9c9a3836897851094fc92aae78b4->leave($__internal_ae20bbe9c5376771f55eec5c73d26b2f5eca9c9a3836897851094fc92aae78b4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_434794470f3831633add0e3ab2537a9c78c194c07314164a755471e04864c663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_434794470f3831633add0e3ab2537a9c78c194c07314164a755471e04864c663->enter($__internal_434794470f3831633add0e3ab2537a9c78c194c07314164a755471e04864c663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_434794470f3831633add0e3ab2537a9c78c194c07314164a755471e04864c663->leave($__internal_434794470f3831633add0e3ab2537a9c78c194c07314164a755471e04864c663_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b111de4d233dca5ec54126a272ec199d04cf6961ea50b7ad98fa821a32ab02d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b111de4d233dca5ec54126a272ec199d04cf6961ea50b7ad98fa821a32ab02d->enter($__internal_1b111de4d233dca5ec54126a272ec199d04cf6961ea50b7ad98fa821a32ab02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1b111de4d233dca5ec54126a272ec199d04cf6961ea50b7ad98fa821a32ab02d->leave($__internal_1b111de4d233dca5ec54126a272ec199d04cf6961ea50b7ad98fa821a32ab02d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba3334dbf6a5fe7df587133c2bfe007e9a58f5bfb64e2b034490517e3763b744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba3334dbf6a5fe7df587133c2bfe007e9a58f5bfb64e2b034490517e3763b744->enter($__internal_ba3334dbf6a5fe7df587133c2bfe007e9a58f5bfb64e2b034490517e3763b744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ba3334dbf6a5fe7df587133c2bfe007e9a58f5bfb64e2b034490517e3763b744->leave($__internal_ba3334dbf6a5fe7df587133c2bfe007e9a58f5bfb64e2b034490517e3763b744_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\ecommerce\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
