<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_7ce42bd7eed7dad6631a27bd300d222be7b763f8eae88c33a588857fbbc3294a extends Twig_Template
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
        $__internal_2ac23418cf471882e3ce0f3e4bde3d8dfcd39b07bd7b7d1d5372e8986f0cbe81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ac23418cf471882e3ce0f3e4bde3d8dfcd39b07bd7b7d1d5372e8986f0cbe81->enter($__internal_2ac23418cf471882e3ce0f3e4bde3d8dfcd39b07bd7b7d1d5372e8986f0cbe81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2ac23418cf471882e3ce0f3e4bde3d8dfcd39b07bd7b7d1d5372e8986f0cbe81->leave($__internal_2ac23418cf471882e3ce0f3e4bde3d8dfcd39b07bd7b7d1d5372e8986f0cbe81_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp\\www\\ecommerce\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
