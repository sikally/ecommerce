<?php

/* modulesUsed/navigation.html.twig */
class __TwigTemplate_e1f69be3471ed8e699de23d589c15fad9def8d51395744a0fe3da8b7436cee67 extends Twig_Template
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
        $__internal_b242c67bd5912fce288fecbf298f460f7ce23e7905aac1cd0aaf42773f246d18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b242c67bd5912fce288fecbf298f460f7ce23e7905aac1cd0aaf42773f246d18->enter($__internal_b242c67bd5912fce288fecbf298f460f7ce23e7905aac1cd0aaf42773f246d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modulesUsed/navigation.html.twig"));

        // line 1
        echo "<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li class=\"nav-header\">Nos produits</li>
        <li class=\"active\">
            <a href=\"index.php\">TV</a>
        </li>
        <li>
            <a href=\"index.php\">Smartphone</a>
        </li>
    </ul>
</div>
";
        
        $__internal_b242c67bd5912fce288fecbf298f460f7ce23e7905aac1cd0aaf42773f246d18->leave($__internal_b242c67bd5912fce288fecbf298f460f7ce23e7905aac1cd0aaf42773f246d18_prof);

    }

    public function getTemplateName()
    {
        return "modulesUsed/navigation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
        <li class=\"active\">
            <a href=\"index.php\">TV</a>
        </li>
        <li>
            <a href=\"index.php\">Smartphone</a>
        </li>
    </ul>
</div>
", "modulesUsed/navigation.html.twig", "C:\\wamp\\www\\ecommerce\\app\\Resources\\views\\modulesUsed\\navigation.html.twig");
    }
}
