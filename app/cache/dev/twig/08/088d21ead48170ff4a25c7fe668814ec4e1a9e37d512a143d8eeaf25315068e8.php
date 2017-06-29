<?php

/* EcommerceBundle:Default:produits/layout/presentation.html.twig */
class __TwigTemplate_7d1eebb4365514fdad230cfd3ceeccba8300c87cdceb79a7f320f7c3c88af7d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:produits/layout/presentation.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'description' => array($this, 'block_description'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe495bc25ecbdb359003b2d24f149611092c074aa0cb21654f3e13b3ac798f33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe495bc25ecbdb359003b2d24f149611092c074aa0cb21654f3e13b3ac798f33->enter($__internal_fe495bc25ecbdb359003b2d24f149611092c074aa0cb21654f3e13b3ac798f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produits/layout/presentation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe495bc25ecbdb359003b2d24f149611092c074aa0cb21654f3e13b3ac798f33->leave($__internal_fe495bc25ecbdb359003b2d24f149611092c074aa0cb21654f3e13b3ac798f33_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_820034483b4c464af608811d48349e515f87fb2511ee64d4b9ef6a2cfb7d79a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_820034483b4c464af608811d48349e515f87fb2511ee64d4b9ef6a2cfb7d79a3->enter($__internal_820034483b4c464af608811d48349e515f87fb2511ee64d4b9ef6a2cfb7d79a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom", array()), "html", null, true);
        
        $__internal_820034483b4c464af608811d48349e515f87fb2511ee64d4b9ef6a2cfb7d79a3->leave($__internal_820034483b4c464af608811d48349e515f87fb2511ee64d4b9ef6a2cfb7d79a3_prof);

    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        $__internal_1e4313df0a3093e53039d876c0eaa05695a4422d4fd7f4e30d42c93bcfe98c83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e4313df0a3093e53039d876c0eaa05695a4422d4fd7f4e30d42c93bcfe98c83->enter($__internal_1e4313df0a3093e53039d876c0eaa05695a4422d4fd7f4e30d42c93bcfe98c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description", array()), "html", null, true);
        
        $__internal_1e4313df0a3093e53039d876c0eaa05695a4422d4fd7f4e30d42c93bcfe98c83->leave($__internal_1e4313df0a3093e53039d876c0eaa05695a4422d4fd7f4e30d42c93bcfe98c83_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_c674485635ee3fef9591cfb26870a28e25d7631cdcd42c32d4169a331b2c3d7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c674485635ee3fef9591cfb26870a28e25d7631cdcd42c32d4169a331b2c3d7e->enter($__internal_c674485635ee3fef9591cfb26870a28e25d7631cdcd42c32d4169a331b2c3d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"container\">
        <div class=\"row\">


            <div class=\"span9\">
                <div class=\"row\">
                    <div class=\"span3\">
                        ";
        // line 14
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:produits/layout/presentation.html.twig", 14)->display($context);
        // line 15
        echo "                    </div>

                    <div class=\"span5\">
                        <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image", array()), "path", array()), "html", null, true);
        echo "\" alt=\"\" width=\"470\" height=\"310\">
                    </div>

                    <div class=\"span4\">
                        <h4>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom", array()), "html", null, true);
        echo "</h4>
                        <h5>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "categorie", array()), "nom", array()), "html", null, true);
        echo "</h5>
                        <p>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description", array()), "html", null, true);
        echo "</p>
                        <h4>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Ecommerce\EcommerceBundle\Twig\Extension\TvaExtension')->calculTva($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix", array()), $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "tva", array()), "multiplicate", array())), "html", null, true);
        echo " €</h4>
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
        
        $__internal_c674485635ee3fef9591cfb26870a28e25d7631cdcd42c32d4169a331b2c3d7e->leave($__internal_c674485635ee3fef9591cfb26870a28e25d7631cdcd42c32d4169a331b2c3d7e_prof);

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
        return array (  101 => 25,  97 => 24,  93 => 23,  89 => 22,  82 => 18,  77 => 15,  75 => 14,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block titre %}{{ produit.nom }}{% endblock %}
{% block description %}{{ produit.description }}{% endblock %}

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
                        <h4>{{ produit.prix|tva(produit.tva.multiplicate) }} €</h4>
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
