<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_bf4b67c5e9eae6bca0cfd29404e5f932ba06bd19eab9b476ff5a6e2aacb10d39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_3d67853669cf05317f341d110713a72593fc4f25d0501591360fd3290294d16a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d67853669cf05317f341d110713a72593fc4f25d0501591360fd3290294d16a->enter($__internal_3d67853669cf05317f341d110713a72593fc4f25d0501591360fd3290294d16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d67853669cf05317f341d110713a72593fc4f25d0501591360fd3290294d16a->leave($__internal_3d67853669cf05317f341d110713a72593fc4f25d0501591360fd3290294d16a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fde44c533ae8ba53ccd04b775260073da45a35dc6870a210817ac93a5819c187 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde44c533ae8ba53ccd04b775260073da45a35dc6870a210817ac93a5819c187->enter($__internal_fde44c533ae8ba53ccd04b775260073da45a35dc6870a210817ac93a5819c187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_fde44c533ae8ba53ccd04b775260073da45a35dc6870a210817ac93a5819c187->leave($__internal_fde44c533ae8ba53ccd04b775260073da45a35dc6870a210817ac93a5819c187_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\wamp\\www\\ecommerce\\app\\Resources\\FOSUserBundle\\views\\Group\\edit.html.twig");
    }
}
