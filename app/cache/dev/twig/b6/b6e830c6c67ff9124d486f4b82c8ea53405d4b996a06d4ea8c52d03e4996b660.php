<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_bbd03f4c66d234c61d3df15926d8b347142ebece99bc1e501155d570a08f2692 extends Twig_Template
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
        $__internal_f6584a966deb1b1823ddfc391f2ccb7a1d43dda8a7fb56c5ca679017dea49c3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6584a966deb1b1823ddfc391f2ccb7a1d43dda8a7fb56c5ca679017dea49c3f->enter($__internal_f6584a966deb1b1823ddfc391f2ccb7a1d43dda8a7fb56c5ca679017dea49c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_f6584a966deb1b1823ddfc391f2ccb7a1d43dda8a7fb56c5ca679017dea49c3f->leave($__internal_f6584a966deb1b1823ddfc391f2ccb7a1d43dda8a7fb56c5ca679017dea49c3f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp\\www\\ecommerce\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
