<?php

/* ::modulesUsed/navigation.html.twig */
class __TwigTemplate_ab6656d2b5258d10a9fda8c876d0cc849722f9616c8514b2f210b92eaef0cb6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd70387ec80fe2118a00aeb9a25393358c3c0e345f18d5ec83c6041fe541a80d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd70387ec80fe2118a00aeb9a25393358c3c0e345f18d5ec83c6041fe541a80d->enter($__internal_bd70387ec80fe2118a00aeb9a25393358c3c0e345f18d5ec83c6041fe541a80d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/navigation.html.twig"));

        // line 1
        echo "<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li class=\"nav-header\">Nos produits</li>
        ";
        // line 4
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("EcommerceBundle:Categories:menu"), array());
        // line 5
        echo "    </ul>
</div>
";
        
        $__internal_bd70387ec80fe2118a00aeb9a25393358c3c0e345f18d5ec83c6041fe541a80d->leave($__internal_bd70387ec80fe2118a00aeb9a25393358c3c0e345f18d5ec83c6041fe541a80d_prof);

    }

    public function getTemplateName()
    {
        return "::modulesUsed/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  27 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li class=\"nav-header\">Nos produits</li>
        {% render (controller('EcommerceBundle:Categories:menu')) %}
    </ul>
</div>
", "::modulesUsed/navigation.html.twig", "C:\\wamp\\www\\ecommerce\\app/Resources\\views/modulesUsed/navigation.html.twig");
    }
}
