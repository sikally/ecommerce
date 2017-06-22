<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_bdf236eaac84dae7268160f89e87aa1a6b9e97104a2038c7467d624822c72f6e extends Twig_Template
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
        $__internal_3c2d78bfa55c465a4a26b3fa459e3e3c2072242c99f19bf5a57c1db4c08bf361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c2d78bfa55c465a4a26b3fa459e3e3c2072242c99f19bf5a57c1db4c08bf361->enter($__internal_3c2d78bfa55c465a4a26b3fa459e3e3c2072242c99f19bf5a57c1db4c08bf361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_3c2d78bfa55c465a4a26b3fa459e3e3c2072242c99f19bf5a57c1db4c08bf361->leave($__internal_3c2d78bfa55c465a4a26b3fa459e3e3c2072242c99f19bf5a57c1db4c08bf361_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp\\www\\ecommerce\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
