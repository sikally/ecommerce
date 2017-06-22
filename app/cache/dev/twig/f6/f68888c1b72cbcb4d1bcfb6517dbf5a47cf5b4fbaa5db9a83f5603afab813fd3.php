<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_c2b7cdb715bdc158ed6478c14f3e958d5067286f61ebe14cc1297cab90090683 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_d4d47fe872d8c9fa2fb29b3725e6fa841c881beddf6724e280ea49c4093b89db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4d47fe872d8c9fa2fb29b3725e6fa841c881beddf6724e280ea49c4093b89db->enter($__internal_d4d47fe872d8c9fa2fb29b3725e6fa841c881beddf6724e280ea49c4093b89db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4d47fe872d8c9fa2fb29b3725e6fa841c881beddf6724e280ea49c4093b89db->leave($__internal_d4d47fe872d8c9fa2fb29b3725e6fa841c881beddf6724e280ea49c4093b89db_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9265cdd24e545b4000e345fc9570128878aa2d6645456dbe088865431d25a0ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9265cdd24e545b4000e345fc9570128878aa2d6645456dbe088865431d25a0ea->enter($__internal_9265cdd24e545b4000e345fc9570128878aa2d6645456dbe088865431d25a0ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_9265cdd24e545b4000e345fc9570128878aa2d6645456dbe088865431d25a0ea->leave($__internal_9265cdd24e545b4000e345fc9570128878aa2d6645456dbe088865431d25a0ea_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\wamp\\www\\ecommerce\\app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
