<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_ce0aa119262902768b4bafea13763bdb1e995f405437159f522b2912d8a1b075 extends Twig_Template
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
        $__internal_a3f04d835897cda1549a77eb1afe4bf112e0c7039ea08f544a8542b65519c24c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3f04d835897cda1549a77eb1afe4bf112e0c7039ea08f544a8542b65519c24c->enter($__internal_a3f04d835897cda1549a77eb1afe4bf112e0c7039ea08f544a8542b65519c24c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_a3f04d835897cda1549a77eb1afe4bf112e0c7039ea08f544a8542b65519c24c->leave($__internal_a3f04d835897cda1549a77eb1afe4bf112e0c7039ea08f544a8542b65519c24c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\wamp\\www\\ecommerce\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
