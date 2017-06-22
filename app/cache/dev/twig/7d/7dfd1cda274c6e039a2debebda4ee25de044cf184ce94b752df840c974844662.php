<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_724d65e6a9975ca6330f933037101689fe8de06dbe042e2398ccd5d2a8020a2a extends Twig_Template
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
        $__internal_872b6b2dda6e7cca6a714510343e27f8d8a2fd602fff9caa850bffd30e73ea9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_872b6b2dda6e7cca6a714510343e27f8d8a2fd602fff9caa850bffd30e73ea9d->enter($__internal_872b6b2dda6e7cca6a714510343e27f8d8a2fd602fff9caa850bffd30e73ea9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_872b6b2dda6e7cca6a714510343e27f8d8a2fd602fff9caa850bffd30e73ea9d->leave($__internal_872b6b2dda6e7cca6a714510343e27f8d8a2fd602fff9caa850bffd30e73ea9d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp\\www\\ecommerce\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
