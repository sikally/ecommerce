<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_1a43f55b2d9eace02f265b510e3bec22c59d35d037417cbe17b9e64e0dd6e6b4 extends Twig_Template
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
        $__internal_67fdad6d164eff1c4ec24e2aac9aee4a6ee5b40867f32e96d36bdec003da86f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67fdad6d164eff1c4ec24e2aac9aee4a6ee5b40867f32e96d36bdec003da86f4->enter($__internal_67fdad6d164eff1c4ec24e2aac9aee4a6ee5b40867f32e96d36bdec003da86f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_67fdad6d164eff1c4ec24e2aac9aee4a6ee5b40867f32e96d36bdec003da86f4->leave($__internal_67fdad6d164eff1c4ec24e2aac9aee4a6ee5b40867f32e96d36bdec003da86f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp\\www\\ecommerce\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
