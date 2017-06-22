<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_9f6a8aa5836e69471d3a936b1175d0352fc2145b717a30003ed98b223db29e2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8ecaf81bf1472c08f68550050e37ef96afc4f6e1d0a12dde87e83d90dde061c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8ecaf81bf1472c08f68550050e37ef96afc4f6e1d0a12dde87e83d90dde061c->enter($__internal_d8ecaf81bf1472c08f68550050e37ef96afc4f6e1d0a12dde87e83d90dde061c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8ecaf81bf1472c08f68550050e37ef96afc4f6e1d0a12dde87e83d90dde061c->leave($__internal_d8ecaf81bf1472c08f68550050e37ef96afc4f6e1d0a12dde87e83d90dde061c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_72d4ff4eba422ee1872bbe962a178f5f20d1a55de1bb406d3182a40da7464845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72d4ff4eba422ee1872bbe962a178f5f20d1a55de1bb406d3182a40da7464845->enter($__internal_72d4ff4eba422ee1872bbe962a178f5f20d1a55de1bb406d3182a40da7464845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 6
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 7
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                <strong>";
                // line 8
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</strong>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 15
        echo "</div>
";
        
        $__internal_72d4ff4eba422ee1872bbe962a178f5f20d1a55de1bb406d3182a40da7464845->leave($__internal_72d4ff4eba422ee1872bbe962a178f5f20d1a55de1bb406d3182a40da7464845_prof);

    }

    // line 13
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5148aa9d7146ce6dd435f39ad4008d9ebe7fe5073ac9c68cbc572eb4b8dd51f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5148aa9d7146ce6dd435f39ad4008d9ebe7fe5073ac9c68cbc572eb4b8dd51f5->enter($__internal_5148aa9d7146ce6dd435f39ad4008d9ebe7fe5073ac9c68cbc572eb4b8dd51f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 14
        echo "    ";
        
        $__internal_5148aa9d7146ce6dd435f39ad4008d9ebe7fe5073ac9c68cbc572eb4b8dd51f5->leave($__internal_5148aa9d7146ce6dd435f39ad4008d9ebe7fe5073ac9c68cbc572eb4b8dd51f5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 14,  86 => 13,  78 => 15,  76 => 13,  73 => 12,  67 => 11,  58 => 8,  53 => 7,  48 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout/layout.html.twig\" %}        

{% block body %}
<div class=\"container\">
    {% for type, messages in app.session.flashbag.all() %}
        {% for message in messages %}
            <div class=\"alert alert-{{ type }}\">
                <strong>{{ message }}</strong>
            </div>
        {% endfor %}
    {% endfor %}

    {% block fos_user_content %}
    {% endblock fos_user_content %}
</div>
{% endblock %}", "FOSUserBundle::layout.html.twig", "C:\\wamp\\www\\ecommerce\\app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
