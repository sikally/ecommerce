<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_4ec40f33924bbf2b13c23a8da97be67eac1f05514aad590712ec995c17e1cb91 extends Twig_Template
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
        $__internal_effe640cb80c1c1ad225ca7bd1f1ae3191fec49cdca19f122f22611bc9f2f433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_effe640cb80c1c1ad225ca7bd1f1ae3191fec49cdca19f122f22611bc9f2f433->enter($__internal_effe640cb80c1c1ad225ca7bd1f1ae3191fec49cdca19f122f22611bc9f2f433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_effe640cb80c1c1ad225ca7bd1f1ae3191fec49cdca19f122f22611bc9f2f433->leave($__internal_effe640cb80c1c1ad225ca7bd1f1ae3191fec49cdca19f122f22611bc9f2f433_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp\\www\\ecommerce\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
