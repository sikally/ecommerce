<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_f16d7b52cb66a478070db57a4acdf7aba25b0fc72e3a80137ec27a7e2bbecf9c extends Twig_Template
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
        $__internal_3137ad360ceb5db71072f4c546dc84cea1833099bd9a6ca92d3c011db9d374db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3137ad360ceb5db71072f4c546dc84cea1833099bd9a6ca92d3c011db9d374db->enter($__internal_3137ad360ceb5db71072f4c546dc84cea1833099bd9a6ca92d3c011db9d374db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_3137ad360ceb5db71072f4c546dc84cea1833099bd9a6ca92d3c011db9d374db->leave($__internal_3137ad360ceb5db71072f4c546dc84cea1833099bd9a6ca92d3c011db9d374db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp\\www\\ecommerce\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
