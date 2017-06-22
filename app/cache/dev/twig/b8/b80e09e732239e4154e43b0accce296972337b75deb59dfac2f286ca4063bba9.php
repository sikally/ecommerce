<?php

/* @Ecommerce/Default/produits/layout/produits.html.twig */
class __TwigTemplate_6e7b305fd31e5704d8bd0559ff121049e0e917b68b6183129b1f6b5802e56765 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Ecommerce/Default/produits/layout/produits.html.twig", 1);
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
        $__internal_92431c2f2709f258fe96574aea4f1a2c421065edd943c4d5ad492c166e1c49e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92431c2f2709f258fe96574aea4f1a2c421065edd943c4d5ad492c166e1c49e0->enter($__internal_92431c2f2709f258fe96574aea4f1a2c421065edd943c4d5ad492c166e1c49e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Ecommerce/Default/produits/layout/produits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92431c2f2709f258fe96574aea4f1a2c421065edd943c4d5ad492c166e1c49e0->leave($__internal_92431c2f2709f258fe96574aea4f1a2c421065edd943c4d5ad492c166e1c49e0_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_dab3887ad8b98203e55feaafbc1843b0e1c6f3dfd8cf2319bea7eb23927f44fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dab3887ad8b98203e55feaafbc1843b0e1c6f3dfd8cf2319bea7eb23927f44fb->enter($__internal_dab3887ad8b98203e55feaafbc1843b0e1c6f3dfd8cf2319bea7eb23927f44fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"container\">
        <div class=\"row\">

            <div class=\"span3\">
            ";
        // line 9
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "@Ecommerce/Default/produits/layout/produits.html.twig", 9)->display($context);
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
                            <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/iphone.png"), "html", null, true);
            echo "\" alt=\"\" width=\"300\" height=\"300\">
                            <div class=\"caption\">
                                <h4>Thumbnail label</h4>
                                <p>100,00 €</p>
                                <a class=\"btn btn-primary\" href=\" ";
            // line 21
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("presentation");
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
        
        $__internal_dab3887ad8b98203e55feaafbc1843b0e1c6f3dfd8cf2319bea7eb23927f44fb->leave($__internal_dab3887ad8b98203e55feaafbc1843b0e1c6f3dfd8cf2319bea7eb23927f44fb_prof);

    }

    public function getTemplateName()
    {
        return "@Ecommerce/Default/produits/layout/produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 27,  73 => 22,  69 => 21,  62 => 17,  58 => 15,  54 => 14,  48 => 10,  46 => 9,  40 => 5,  34 => 4,  11 => 1,);
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
                            <img src=\"{{ asset('img/iphone.png') }}\" alt=\"\" width=\"300\" height=\"300\">
                            <div class=\"caption\">
                                <h4>Thumbnail label</h4>
                                <p>100,00 €</p>
                                <a class=\"btn btn-primary\" href=\" {{path ('presentation')}}\">Plus d'infos</a>
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

", "@Ecommerce/Default/produits/layout/produits.html.twig", "C:\\wamp\\www\\ecommerce\\src\\Ecommerce\\EcommerceBundle\\Resources\\views\\Default\\produits\\layout\\produits.html.twig");
    }
}
