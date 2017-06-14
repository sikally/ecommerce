<?php

/* EcommerceBundle:Default:produits/layout/produits.html.twig */
class __TwigTemplate_8a8dd374507d8d4475efe588fcb10d4ad2a5faab7f590a29f1f91f9408ffe96a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:produits/layout/produits.html.twig", 1);
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
        $__internal_6b32a0bf28d64b78509ca0a054a1c3ddf5c299d9d4ef798f22403598b33405df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b32a0bf28d64b78509ca0a054a1c3ddf5c299d9d4ef798f22403598b33405df->enter($__internal_6b32a0bf28d64b78509ca0a054a1c3ddf5c299d9d4ef798f22403598b33405df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produits/layout/produits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b32a0bf28d64b78509ca0a054a1c3ddf5c299d9d4ef798f22403598b33405df->leave($__internal_6b32a0bf28d64b78509ca0a054a1c3ddf5c299d9d4ef798f22403598b33405df_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_08113e83634939eb9077d99b99321338c5b97f970c909f4de4b2444455b5985e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08113e83634939eb9077d99b99321338c5b97f970c909f4de4b2444455b5985e->enter($__internal_08113e83634939eb9077d99b99321338c5b97f970c909f4de4b2444455b5985e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"container\">
        <div class=\"row\">

            <div class=\"span3\">
            ";
        // line 9
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:produits/layout/produits.html.twig", 9)->display($context);
        // line 10
        echo "            </div>
            <div class=\"span9\">

                <ul class=\"thumbnails\">
                    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 15
            echo "                    <li class=\"span3\">
                        <div class=\"thumbnail\">
                            <img src=\"../img/holder.png\" alt=\"\" width=\"300\" height=\"300\">
                            <div class=\"caption\">
                                <h4>Thumbnail label</h4>
                                <p>100,00 €</p>
                                <a class=\"btn btn-primary\" href=\" ";
            // line 21
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("presentation");
            echo "\">Plus d'infos</a>
                                <a class=\"btn btn-success\" href=\"panier.php\">Ajouter au panier</a>
                            </div>
                        </div>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                </ul>

                <div class=\"pagination\">
                    <ul>
                        <li class=\"disabled\"><span>Précédent</span></li>
                        <li class=\"disabled\"><span>1</span></li>
                        <li><a href=\"#\">2</a></li>
                        <li><a href=\"#\">3</a></li>
                        <li><a href=\"#\">4</a></li>
                        <li><a href=\"#\">5</a></li>
                        <li><a href=\"#\">Suivant</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
";
        
        $__internal_08113e83634939eb9077d99b99321338c5b97f970c909f4de4b2444455b5985e->leave($__internal_08113e83634939eb9077d99b99321338c5b97f970c909f4de4b2444455b5985e_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:produits/layout/produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 27,  66 => 21,  58 => 15,  54 => 14,  48 => 10,  46 => 9,  40 => 5,  34 => 4,  11 => 1,);
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

            <div class=\"span3\">
            {% include '::modulesUsed/navigation.html.twig' %}
            </div>
            <div class=\"span9\">

                <ul class=\"thumbnails\">
                    {% for i in 0..10 %}
                    <li class=\"span3\">
                        <div class=\"thumbnail\">
                            <img src=\"../img/holder.png\" alt=\"\" width=\"300\" height=\"300\">
                            <div class=\"caption\">
                                <h4>Thumbnail label</h4>
                                <p>100,00 €</p>
                                <a class=\"btn btn-primary\" href=\" {{path ('presentation')}}\">Plus d'infos</a>
                                <a class=\"btn btn-success\" href=\"panier.php\">Ajouter au panier</a>
                            </div>
                        </div>
                    </li>
                    {% endfor %}
                </ul>

                <div class=\"pagination\">
                    <ul>
                        <li class=\"disabled\"><span>Précédent</span></li>
                        <li class=\"disabled\"><span>1</span></li>
                        <li><a href=\"#\">2</a></li>
                        <li><a href=\"#\">3</a></li>
                        <li><a href=\"#\">4</a></li>
                        <li><a href=\"#\">5</a></li>
                        <li><a href=\"#\">Suivant</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
{% endblock %}

", "EcommerceBundle:Default:produits/layout/produits.html.twig", "C:\\wamp\\www\\ecommerce\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/produits/layout/produits.html.twig");
    }
}
