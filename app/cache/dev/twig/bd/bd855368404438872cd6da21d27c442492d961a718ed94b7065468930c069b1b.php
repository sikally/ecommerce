<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_f79f01b8b6060076de15064025594508bbc6bab009db30821cb1405f6e74b737 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_a6d913ed2a4e577c6cc629fd6ffdedeed467574a55682494e16e718c368a6dad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6d913ed2a4e577c6cc629fd6ffdedeed467574a55682494e16e718c368a6dad->enter($__internal_a6d913ed2a4e577c6cc629fd6ffdedeed467574a55682494e16e718c368a6dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6d913ed2a4e577c6cc629fd6ffdedeed467574a55682494e16e718c368a6dad->leave($__internal_a6d913ed2a4e577c6cc629fd6ffdedeed467574a55682494e16e718c368a6dad_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8571bced47a832acc1453354c681e7d01b5e771979390e944bcd848173c38c6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8571bced47a832acc1453354c681e7d01b5e771979390e944bcd848173c38c6c->enter($__internal_8571bced47a832acc1453354c681e7d01b5e771979390e944bcd848173c38c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_8571bced47a832acc1453354c681e7d01b5e771979390e944bcd848173c38c6c->leave($__internal_8571bced47a832acc1453354c681e7d01b5e771979390e944bcd848173c38c6c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\wamp\\www\\ecommerce\\app\\Resources\\FOSUserBundle\\views\\Group\\new.html.twig");
    }
}
