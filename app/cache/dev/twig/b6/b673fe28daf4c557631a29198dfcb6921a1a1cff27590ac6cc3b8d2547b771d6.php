<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_32e657e9a938795ec629674374a27bc28b6bd7b7a018e0802eaf9a05da83ed75 extends Twig_Template
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
        $__internal_976cd1b25c9b72aae9aaad18fee0b89c08f44a4558e25cb91181da76ec5e5f5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_976cd1b25c9b72aae9aaad18fee0b89c08f44a4558e25cb91181da76ec5e5f5c->enter($__internal_976cd1b25c9b72aae9aaad18fee0b89c08f44a4558e25cb91181da76ec5e5f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_976cd1b25c9b72aae9aaad18fee0b89c08f44a4558e25cb91181da76ec5e5f5c->leave($__internal_976cd1b25c9b72aae9aaad18fee0b89c08f44a4558e25cb91181da76ec5e5f5c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp\\www\\ecommerce\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
