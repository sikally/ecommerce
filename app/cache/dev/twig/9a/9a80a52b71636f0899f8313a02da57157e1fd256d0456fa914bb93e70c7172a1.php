<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_07e5d3dcaf2026e37aba3807a5a724d292cd08364f2bb2f7ff1d73b8c886a909 extends Twig_Template
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
        $__internal_0f35057210efd0309a49b730380504aebc9dd5b5054d16d4c6f72a4eac73cc50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f35057210efd0309a49b730380504aebc9dd5b5054d16d4c6f72a4eac73cc50->enter($__internal_0f35057210efd0309a49b730380504aebc9dd5b5054d16d4c6f72a4eac73cc50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_0f35057210efd0309a49b730380504aebc9dd5b5054d16d4c6f72a4eac73cc50->leave($__internal_0f35057210efd0309a49b730380504aebc9dd5b5054d16d4c6f72a4eac73cc50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp\\www\\ecommerce\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
