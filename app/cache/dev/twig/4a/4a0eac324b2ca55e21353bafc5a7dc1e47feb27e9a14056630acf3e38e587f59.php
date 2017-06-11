<?php

/* EcommerceBundle:Default:index.html.twig */
class __TwigTemplate_c25b4bba8b3f9db67ac76c29ae54705908ed359bf218db32740e082818cbbfe7 extends Twig_Template
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
        $__internal_41d381c7ef77969bce95122198f56daef8071fc24b059fab9648ecb86fb95c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41d381c7ef77969bce95122198f56daef8071fc24b059fab9648ecb86fb95c45->enter($__internal_41d381c7ef77969bce95122198f56daef8071fc24b059fab9648ecb86fb95c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_41d381c7ef77969bce95122198f56daef8071fc24b059fab9648ecb86fb95c45->leave($__internal_41d381c7ef77969bce95122198f56daef8071fc24b059fab9648ecb86fb95c45_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "EcommerceBundle:Default:index.html.twig", "C:\\wamp\\www\\ecommerce\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/index.html.twig");
    }
}
