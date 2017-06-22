<?php

/* @Ecommerce/Default/produits/layout/presentation.html.twig */
class __TwigTemplate_910ce175ec88d3f3631eaa1523a0b54a0741735e71e258bfb84a984ec515d6e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Ecommerce/Default/produits/layout/presentation.html.twig", 1);
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
        $__internal_4e8c23d763e008d75c74db25fc1da3aa62c3e895e30cc26c84f32b545ee264c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e8c23d763e008d75c74db25fc1da3aa62c3e895e30cc26c84f32b545ee264c9->enter($__internal_4e8c23d763e008d75c74db25fc1da3aa62c3e895e30cc26c84f32b545ee264c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Ecommerce/Default/produits/layout/presentation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e8c23d763e008d75c74db25fc1da3aa62c3e895e30cc26c84f32b545ee264c9->leave($__internal_4e8c23d763e008d75c74db25fc1da3aa62c3e895e30cc26c84f32b545ee264c9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5a84b450a795b97ca5a3d70091f879c8b8c64eee261af078e61fc32f08e8507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5a84b450a795b97ca5a3d70091f879c8b8c64eee261af078e61fc32f08e8507->enter($__internal_e5a84b450a795b97ca5a3d70091f879c8b8c64eee261af078e61fc32f08e8507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">


        <div class=\"span9\">
            <div class=\"row\">
                <div class=\"span3\">
                    ";
        // line 11
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "@Ecommerce/Default/produits/layout/presentation.html.twig", 11)->display($context);
        // line 12
        echo "                </div>

                <div class=\"span5\">
                    <img src=\"../img/holder.png\" alt=\"\" width=\"470\" height=\"310\">
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
        
        $__internal_e5a84b450a795b97ca5a3d70091f879c8b8c64eee261af078e61fc32f08e8507->leave($__internal_e5a84b450a795b97ca5a3d70091f879c8b8c64eee261af078e61fc32f08e8507_prof);

    }

    public function getTemplateName()
    {
        return "@Ecommerce/Default/produits/layout/presentation.html.twig";
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
                    <img src=\"../img/holder.png\" alt=\"\" width=\"470\" height=\"310\">
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
{% endblock %}", "@Ecommerce/Default/produits/layout/presentation.html.twig", "C:\\wamp\\www\\ecommerce\\src\\Ecommerce\\EcommerceBundle\\Resources\\views\\Default\\produits\\layout\\presentation.html.twig");
    }
}
