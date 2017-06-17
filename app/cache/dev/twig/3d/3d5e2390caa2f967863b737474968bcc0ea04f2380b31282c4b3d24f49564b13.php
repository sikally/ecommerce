<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b8f4f20e3d5251b22464e301fe994cc534f29ad8952178940df21c1024766796 extends Twig_Template
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
        $__internal_a18a7ff2b04b73a25891a39f6b7baa608dca708e323592e36b3de94dc5e77e86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a18a7ff2b04b73a25891a39f6b7baa608dca708e323592e36b3de94dc5e77e86->enter($__internal_a18a7ff2b04b73a25891a39f6b7baa608dca708e323592e36b3de94dc5e77e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a18a7ff2b04b73a25891a39f6b7baa608dca708e323592e36b3de94dc5e77e86->leave($__internal_a18a7ff2b04b73a25891a39f6b7baa608dca708e323592e36b3de94dc5e77e86_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2d5a86c623115e9464503e602c99ccd6ebaebe38792a99a450fb99a560fd5e6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d5a86c623115e9464503e602c99ccd6ebaebe38792a99a450fb99a560fd5e6f->enter($__internal_2d5a86c623115e9464503e602c99ccd6ebaebe38792a99a450fb99a560fd5e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2d5a86c623115e9464503e602c99ccd6ebaebe38792a99a450fb99a560fd5e6f->leave($__internal_2d5a86c623115e9464503e602c99ccd6ebaebe38792a99a450fb99a560fd5e6f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d570abae6494a514148242d171f1d3ff17ed3bbe3f21113a9d839ed0df40ce70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d570abae6494a514148242d171f1d3ff17ed3bbe3f21113a9d839ed0df40ce70->enter($__internal_d570abae6494a514148242d171f1d3ff17ed3bbe3f21113a9d839ed0df40ce70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d570abae6494a514148242d171f1d3ff17ed3bbe3f21113a9d839ed0df40ce70->leave($__internal_d570abae6494a514148242d171f1d3ff17ed3bbe3f21113a9d839ed0df40ce70_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bda3ed407fdd235ae6095f3729ddf16c853ee4db76b1d3db3ec4d429701609b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bda3ed407fdd235ae6095f3729ddf16c853ee4db76b1d3db3ec4d429701609b5->enter($__internal_bda3ed407fdd235ae6095f3729ddf16c853ee4db76b1d3db3ec4d429701609b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_bda3ed407fdd235ae6095f3729ddf16c853ee4db76b1d3db3ec4d429701609b5->leave($__internal_bda3ed407fdd235ae6095f3729ddf16c853ee4db76b1d3db3ec4d429701609b5_prof);

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
