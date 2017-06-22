<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_9c0d019ad60a531c595dac7f26956e1b415c0a4effa6861245b1767d74648e4f extends Twig_Template
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
        $__internal_6d61cd0a3a4d0bb546ccacd7e903169e952d1639552a003809e6c20fdee88dc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d61cd0a3a4d0bb546ccacd7e903169e952d1639552a003809e6c20fdee88dc0->enter($__internal_6d61cd0a3a4d0bb546ccacd7e903169e952d1639552a003809e6c20fdee88dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_6d61cd0a3a4d0bb546ccacd7e903169e952d1639552a003809e6c20fdee88dc0->leave($__internal_6d61cd0a3a4d0bb546ccacd7e903169e952d1639552a003809e6c20fdee88dc0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp\\www\\ecommerce\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
