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
        $__internal_fd1ba70093b48a42b4fda2118cbcc2a250b7d041594425a5bb9eb9021721872a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd1ba70093b48a42b4fda2118cbcc2a250b7d041594425a5bb9eb9021721872a->enter($__internal_fd1ba70093b48a42b4fda2118cbcc2a250b7d041594425a5bb9eb9021721872a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produits/layout/presentation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd1ba70093b48a42b4fda2118cbcc2a250b7d041594425a5bb9eb9021721872a->leave($__internal_fd1ba70093b48a42b4fda2118cbcc2a250b7d041594425a5bb9eb9021721872a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1356b06e1bef26f0559255611394a3723eec67f39b3ad5c387e2a7ada54b953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1356b06e1bef26f0559255611394a3723eec67f39b3ad5c387e2a7ada54b953->enter($__internal_b1356b06e1bef26f0559255611394a3723eec67f39b3ad5c387e2a7ada54b953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <img src=\"../img/holder.png\" alt=\"DevAndClick\" width=\"470\" height=\"310\">
                </div>

                <div class=\"span4\">
                    <h4>Item Brand and Category</h4>
                    <h5>AB29837 Item Model</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <h4>3.33€</h4>
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
        
        $__internal_b1356b06e1bef26f0559255611394a3723eec67f39b3ad5c387e2a7ada54b953->leave($__internal_b1356b06e1bef26f0559255611394a3723eec67f39b3ad5c387e2a7ada54b953_prof);

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
        return array (  51 => 12,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
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
                    <img src=\"../img/holder.png\" alt=\"DevAndClick\" width=\"470\" height=\"310\">
                </div>

                <div class=\"span4\">
                    <h4>Item Brand and Category</h4>
                    <h5>AB29837 Item Model</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <h4>3.33€</h4>
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
