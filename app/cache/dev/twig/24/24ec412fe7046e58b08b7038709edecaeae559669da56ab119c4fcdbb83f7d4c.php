<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_29bbabd4ed3ed7979bcb4e6cc961a912dce52da30d663d53909f84ce9556be0c extends Twig_Template
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
        $__internal_75934d23c801cd2b46e3a713416a4a5dfdbb8af7b03d46bbb7299b772b0d3a8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75934d23c801cd2b46e3a713416a4a5dfdbb8af7b03d46bbb7299b772b0d3a8c->enter($__internal_75934d23c801cd2b46e3a713416a4a5dfdbb8af7b03d46bbb7299b772b0d3a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75934d23c801cd2b46e3a713416a4a5dfdbb8af7b03d46bbb7299b772b0d3a8c->leave($__internal_75934d23c801cd2b46e3a713416a4a5dfdbb8af7b03d46bbb7299b772b0d3a8c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_19d933f6028ee7b8b8dc2ec90cf228116e2cf5533ccf6ac576ba5837f713a40d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19d933f6028ee7b8b8dc2ec90cf228116e2cf5533ccf6ac576ba5837f713a40d->enter($__internal_19d933f6028ee7b8b8dc2ec90cf228116e2cf5533ccf6ac576ba5837f713a40d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_19d933f6028ee7b8b8dc2ec90cf228116e2cf5533ccf6ac576ba5837f713a40d->leave($__internal_19d933f6028ee7b8b8dc2ec90cf228116e2cf5533ccf6ac576ba5837f713a40d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_417d6dae8e375d23eadaa16b4687335b05806dff2767a73d2da0f5c76026b38e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_417d6dae8e375d23eadaa16b4687335b05806dff2767a73d2da0f5c76026b38e->enter($__internal_417d6dae8e375d23eadaa16b4687335b05806dff2767a73d2da0f5c76026b38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_417d6dae8e375d23eadaa16b4687335b05806dff2767a73d2da0f5c76026b38e->leave($__internal_417d6dae8e375d23eadaa16b4687335b05806dff2767a73d2da0f5c76026b38e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a90328db0b21d5c52b3e7a2b02cdf7b5958b5a3af13d5207f512628f2f4575c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a90328db0b21d5c52b3e7a2b02cdf7b5958b5a3af13d5207f512628f2f4575c->enter($__internal_9a90328db0b21d5c52b3e7a2b02cdf7b5958b5a3af13d5207f512628f2f4575c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9a90328db0b21d5c52b3e7a2b02cdf7b5958b5a3af13d5207f512628f2f4575c->leave($__internal_9a90328db0b21d5c52b3e7a2b02cdf7b5958b5a3af13d5207f512628f2f4575c_prof);

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
