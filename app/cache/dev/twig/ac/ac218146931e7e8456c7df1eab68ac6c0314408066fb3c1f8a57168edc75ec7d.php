<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_b9de703e8cc2ce9088c173f3f128cac775ea2b37bcaf8559384d64121a41d191 extends Twig_Template
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
        $__internal_681a0b45d8e8a339a3552fab7cc5c89b67e5c9532a1eccc0515ee01a9c01c65d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_681a0b45d8e8a339a3552fab7cc5c89b67e5c9532a1eccc0515ee01a9c01c65d->enter($__internal_681a0b45d8e8a339a3552fab7cc5c89b67e5c9532a1eccc0515ee01a9c01c65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_681a0b45d8e8a339a3552fab7cc5c89b67e5c9532a1eccc0515ee01a9c01c65d->leave($__internal_681a0b45d8e8a339a3552fab7cc5c89b67e5c9532a1eccc0515ee01a9c01c65d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp\\www\\ecommerce\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
