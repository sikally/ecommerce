<?php

/* EcommerceBundle:Default:produits/layout/presentation.html.twig */
class __TwigTemplate_b2e7bd3923e7e29397b6046a525965c1ed08e9cfd8fd930d00eeca4e6baae244 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:produits/layout/presentation.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09b8c7abd10a4fb2346031073b9e332a92b974a2d87b9be1f508086a2056007c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09b8c7abd10a4fb2346031073b9e332a92b974a2d87b9be1f508086a2056007c->enter($__internal_09b8c7abd10a4fb2346031073b9e332a92b974a2d87b9be1f508086a2056007c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produits/layout/presentation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09b8c7abd10a4fb2346031073b9e332a92b974a2d87b9be1f508086a2056007c->leave($__internal_09b8c7abd10a4fb2346031073b9e332a92b974a2d87b9be1f508086a2056007c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd174dc997510954f1b04f091b682759dc51ac8e5f9db5070e208d06d9a2221e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd174dc997510954f1b04f091b682759dc51ac8e5f9db5070e208d06d9a2221e->enter($__internal_cd174dc997510954f1b04f091b682759dc51ac8e5f9db5070e208d06d9a2221e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">


        <div class=\"span9\">
            <div class=\"row\">
                <div class=\"span3\">
                    ";
        // line 11
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:produits/layout/presentation.html.twig", 11)->display($context);
        // line 12
        echo "                </div>

                <div class=\"span5\">
                    <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image", array()), "path", array()), "html", null, true);
        echo "\" alt=\"\" width=\"470\" height=\"310\">
                </div>

                <div class=\"span4\">
                    <h4>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom", array()), "html", null, true);
        echo "</h4>
                    <h5>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "categorie", array()), "nom", array()), "html", null, true);
        echo "</h5>
                    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description", array()), "html", null, true);
        echo "</p>
                    <h4>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix", array()), "html", null, true);
        echo "</h4>
                    <form action=\"panier.php\">


                        <select name=\"qte\" class=\"span1\">
                            <option>1</option>
                        </select>

                        <div>
                            <button class=\"btn btn-primary\">Ajouter au panier</button>
                        </div>
                    </form>

                </div>
            </div>


        </div>
    </div>
</div>
";
        
        $__internal_cd174dc997510954f1b04f091b682759dc51ac8e5f9db5070e208d06d9a2221e->leave($__internal_cd174dc997510954f1b04f091b682759dc51ac8e5f9db5070e208d06d9a2221e_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:produits/layout/presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 22,  71 => 21,  67 => 20,  63 => 19,  56 => 15,  51 => 12,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout/layout.html.twig\" %}

{% block body %}
<div class=\"container\">
    <div class=\"row\">


        <div class=\"span9\">
            <div class=\"row\">
                <div class=\"span3\">
                    {% include '::modulesUsed/navigation.html.twig' %}
                </div>

                <div class=\"span5\">
                    <img src=\"{{ produit.image.path }}\" alt=\"\" width=\"470\" height=\"310\">
                </div>

                <div class=\"span4\">
                    <h4>{{ produit.nom }}</h4>
                    <h5>{{ produit.categorie.nom }}</h5>
                    <p>{{ produit.description }}</p>
                    <h4>{{ produit.prix }}</h4>
                    <form action=\"panier.php\">


                        <select name=\"qte\" class=\"span1\">
                            <option>1</option>
                        </select>

                        <div>
                            <button class=\"btn btn-primary\">Ajouter au panier</button>
                        </div>
                    </form>

                </div>
            </div>


        </div>
    </div>
</div>
{% endblock %}", "EcommerceBundle:Default:produits/layout/presentation.html.twig", "C:\\wamp\\www\\ecommerce\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/produits/layout/presentation.html.twig");
    }
}
