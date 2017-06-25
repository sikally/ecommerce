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
        $__internal_39fdec5eeaf6ecd9afb9f31eb33ba8a1b7e0af659841cfcb77d677d83cb21108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39fdec5eeaf6ecd9afb9f31eb33ba8a1b7e0af659841cfcb77d677d83cb21108->enter($__internal_39fdec5eeaf6ecd9afb9f31eb33ba8a1b7e0af659841cfcb77d677d83cb21108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produits/layout/produits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39fdec5eeaf6ecd9afb9f31eb33ba8a1b7e0af659841cfcb77d677d83cb21108->leave($__internal_39fdec5eeaf6ecd9afb9f31eb33ba8a1b7e0af659841cfcb77d677d83cb21108_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a549483175bb1ff4025e5992fe235c954a6012e6400604a78625baf9e76e633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a549483175bb1ff4025e5992fe235c954a6012e6400604a78625baf9e76e633->enter($__internal_5a549483175bb1ff4025e5992fe235c954a6012e6400604a78625baf9e76e633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 15
            echo "                    <li class=\"span3\">
                        <div class=\"thumbnail\">
                            <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "image", array()), "path", array()), "html", null, true);
            echo "\" alt=\"Sikal\" width=\"300\" height=\"300\">
                            <div class=\"caption\">
                                <h4>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "</h4>
                                <p>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo " €</p>
                                <a class=\"btn btn-primary\" href=\" ";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\">Plus d'infos</a>
                                <a class=\"btn btn-success\" href=\"";
            // line 22
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
            echo "\">Ajouter au panier</a>
                            </div>
                        </div>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
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
        
        $__internal_5a549483175bb1ff4025e5992fe235c954a6012e6400604a78625baf9e76e633->leave($__internal_5a549483175bb1ff4025e5992fe235c954a6012e6400604a78625baf9e76e633_prof);

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
        return array (  90 => 27,  79 => 22,  75 => 21,  71 => 20,  67 => 19,  62 => 17,  58 => 15,  54 => 14,  48 => 10,  46 => 9,  40 => 5,  34 => 4,  11 => 1,);
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
                    {% for produit in produits %}
                    <li class=\"span3\">
                        <div class=\"thumbnail\">
                            <img src=\"{{ produit.image.path }}\" alt=\"Sikal\" width=\"300\" height=\"300\">
                            <div class=\"caption\">
                                <h4>{{ produit.nom }}</h4>
                                <p>{{ produit.prix }} €</p>
                                <a class=\"btn btn-primary\" href=\" {{path ('presentation',{'id' : produit.id}) }}\">Plus d'infos</a>
                                <a class=\"btn btn-success\" href=\"{{path ('panier')}}\">Ajouter au panier</a>
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
