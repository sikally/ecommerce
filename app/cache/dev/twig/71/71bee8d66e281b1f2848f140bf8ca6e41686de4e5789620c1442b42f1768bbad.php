<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_7675a6f5a7f6b8f0365acd8f44afe6ac6be75e869d17e2437b083a5ecfbd5fca extends Twig_Template
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
        $__internal_3e1cbdbe54c3d25c99399164a4e06c7f96d69ea8248ee0a545d877f5c60c8051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e1cbdbe54c3d25c99399164a4e06c7f96d69ea8248ee0a545d877f5c60c8051->enter($__internal_3e1cbdbe54c3d25c99399164a4e06c7f96d69ea8248ee0a545d877f5c60c8051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_3e1cbdbe54c3d25c99399164a4e06c7f96d69ea8248ee0a545d877f5c60c8051->leave($__internal_3e1cbdbe54c3d25c99399164a4e06c7f96d69ea8248ee0a545d877f5c60c8051_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp\\www\\ecommerce\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
