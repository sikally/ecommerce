<?php

/* ::modulesUsed/navigation.html.twig */
class __TwigTemplate_14e208d8e60a5351203fadbe895ca9e2df45467f4e7798afc58686dd4afd640c extends Twig_Template
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
        $__internal_87d3f34db8c178d5a7250a0ad7ecde9c7e7902988ca1646755a9dec8e344a345 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87d3f34db8c178d5a7250a0ad7ecde9c7e7902988ca1646755a9dec8e344a345->enter($__internal_87d3f34db8c178d5a7250a0ad7ecde9c7e7902988ca1646755a9dec8e344a345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/navigation.html.twig"));

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
        
        $__internal_87d3f34db8c178d5a7250a0ad7ecde9c7e7902988ca1646755a9dec8e344a345->leave($__internal_87d3f34db8c178d5a7250a0ad7ecde9c7e7902988ca1646755a9dec8e344a345_prof);

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
