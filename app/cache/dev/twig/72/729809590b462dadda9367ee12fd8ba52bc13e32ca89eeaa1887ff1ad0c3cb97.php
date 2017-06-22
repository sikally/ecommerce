<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_83619a231bc3dfed2fa586fc1790fa7cfc7a37613b300cd596c77f0858c840a9 extends Twig_Template
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
        $__internal_6707ca1ec7f5fe3ae6f3f33f9ec3fd0b9a90d04424162e94483327a62f529b84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6707ca1ec7f5fe3ae6f3f33f9ec3fd0b9a90d04424162e94483327a62f529b84->enter($__internal_6707ca1ec7f5fe3ae6f3f33f9ec3fd0b9a90d04424162e94483327a62f529b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_6707ca1ec7f5fe3ae6f3f33f9ec3fd0b9a90d04424162e94483327a62f529b84->leave($__internal_6707ca1ec7f5fe3ae6f3f33f9ec3fd0b9a90d04424162e94483327a62f529b84_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp\\www\\ecommerce\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
