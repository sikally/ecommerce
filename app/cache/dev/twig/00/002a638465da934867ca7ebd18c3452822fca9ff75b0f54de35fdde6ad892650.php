<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_5e3cdd840fef19e7e4725a457a30e5cb9ef651719f04208356372866b76dff3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_8f6abe031311db3f676a46f8269c2521aca3b86b3daead4264e2ebd96d23fe80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f6abe031311db3f676a46f8269c2521aca3b86b3daead4264e2ebd96d23fe80->enter($__internal_8f6abe031311db3f676a46f8269c2521aca3b86b3daead4264e2ebd96d23fe80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f6abe031311db3f676a46f8269c2521aca3b86b3daead4264e2ebd96d23fe80->leave($__internal_8f6abe031311db3f676a46f8269c2521aca3b86b3daead4264e2ebd96d23fe80_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f1fb93f6e54d4c3823334d9415aeb25257d433cad39c02f9b653cf8c80b37916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1fb93f6e54d4c3823334d9415aeb25257d433cad39c02f9b653cf8c80b37916->enter($__internal_f1fb93f6e54d4c3823334d9415aeb25257d433cad39c02f9b653cf8c80b37916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_f1fb93f6e54d4c3823334d9415aeb25257d433cad39c02f9b653cf8c80b37916->leave($__internal_f1fb93f6e54d4c3823334d9415aeb25257d433cad39c02f9b653cf8c80b37916_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp\\www\\ecommerce\\app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
