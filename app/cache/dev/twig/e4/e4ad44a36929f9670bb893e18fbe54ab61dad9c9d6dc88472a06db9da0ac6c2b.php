<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_0c8606c4b698161d98ae489fd241f6797ff58a1dd155cae0802afcd9c5f20417 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_0587ead97ce4b0f7254638b4032131f26017bcc9c3344c8d72dd7d2ea4bcea1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0587ead97ce4b0f7254638b4032131f26017bcc9c3344c8d72dd7d2ea4bcea1d->enter($__internal_0587ead97ce4b0f7254638b4032131f26017bcc9c3344c8d72dd7d2ea4bcea1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0587ead97ce4b0f7254638b4032131f26017bcc9c3344c8d72dd7d2ea4bcea1d->leave($__internal_0587ead97ce4b0f7254638b4032131f26017bcc9c3344c8d72dd7d2ea4bcea1d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9b678b507f6565acda0bf01edfc5539ab0a86dd22022541c0ef44ce2405cd56b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b678b507f6565acda0bf01edfc5539ab0a86dd22022541c0ef44ce2405cd56b->enter($__internal_9b678b507f6565acda0bf01edfc5539ab0a86dd22022541c0ef44ce2405cd56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9b678b507f6565acda0bf01edfc5539ab0a86dd22022541c0ef44ce2405cd56b->leave($__internal_9b678b507f6565acda0bf01edfc5539ab0a86dd22022541c0ef44ce2405cd56b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_30106358a1a5b211827e6373bc34cbf3f33c54b650be671e16bb4528d0d6a5da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30106358a1a5b211827e6373bc34cbf3f33c54b650be671e16bb4528d0d6a5da->enter($__internal_30106358a1a5b211827e6373bc34cbf3f33c54b650be671e16bb4528d0d6a5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_30106358a1a5b211827e6373bc34cbf3f33c54b650be671e16bb4528d0d6a5da->leave($__internal_30106358a1a5b211827e6373bc34cbf3f33c54b650be671e16bb4528d0d6a5da_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d599e663ef0f7cf735a1298fde9ad217780712909285e121b50887bc496d7ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d599e663ef0f7cf735a1298fde9ad217780712909285e121b50887bc496d7ab->enter($__internal_6d599e663ef0f7cf735a1298fde9ad217780712909285e121b50887bc496d7ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6d599e663ef0f7cf735a1298fde9ad217780712909285e121b50887bc496d7ab->leave($__internal_6d599e663ef0f7cf735a1298fde9ad217780712909285e121b50887bc496d7ab_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp\\www\\ecommerce\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
