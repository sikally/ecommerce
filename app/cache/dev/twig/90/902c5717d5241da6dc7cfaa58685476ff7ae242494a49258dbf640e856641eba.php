<?php

/* EcommerceBundle:Default:produits/layout/produits.html.twig */
class __TwigTemplate_9299fd9821ac569b16dc2a7268bb23fb3e74e430ba0433a94a7928073226ca58 extends Twig_Template
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
        $__internal_f6f0104bda31ebc5f6049146e61ec2da07db4b56996f7b35ca03149e952b58dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6f0104bda31ebc5f6049146e61ec2da07db4b56996f7b35ca03149e952b58dc->enter($__internal_f6f0104bda31ebc5f6049146e61ec2da07db4b56996f7b35ca03149e952b58dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produits/layout/produits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6f0104bda31ebc5f6049146e61ec2da07db4b56996f7b35ca03149e952b58dc->leave($__internal_f6f0104bda31ebc5f6049146e61ec2da07db4b56996f7b35ca03149e952b58dc_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_4733b441f27cfed51268c81090e3cb27e3668e37d121e135c72bbcf9c865e54a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4733b441f27cfed51268c81090e3cb27e3668e37d121e135c72bbcf9c865e54a->enter($__internal_4733b441f27cfed51268c81090e3cb27e3668e37d121e135c72bbcf9c865e54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"container\">
        <div class=\"row\">

            <div class=\"span3\">
                ";
        // line 9
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:produits/layout/produits.html.twig", 9)->display($context);
        // line 10
        echo "                ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 11
            echo "                    ";
            $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig", "EcommerceBundle:Default:produits/layout/produits.html.twig", 11)->display($context);
            // line 12
            echo "                ";
        } else {
            // line 13
            echo "                    ";
            $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig", "EcommerceBundle:Default:produits/layout/produits.html.twig", 13)->display($context);
            // line 14
            echo "                ";
        }
        // line 15
        echo "            </div>
            <div class=\"span9\">

                <ul class=\"thumbnails\">
                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 20
            echo "                    <li class=\"span3\">
                        <div class=\"thumbnail\">
                            <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "image", array()), "path", array()), "html", null, true);
            echo "\" alt=\"Sikal\" width=\"300\" height=\"300\">
                            <div class=\"caption\">
                                <h4>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "</h4>
                                <p>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo " €</p>
                                <a class=\"btn btn-primary\" href=\" ";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\">Plus d'infos</a>
                                <a class=\"btn btn-success\" href=\"";
            // line 27
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
        // line 32
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
        
        $__internal_4733b441f27cfed51268c81090e3cb27e3668e37d121e135c72bbcf9c865e54a->leave($__internal_4733b441f27cfed51268c81090e3cb27e3668e37d121e135c72bbcf9c865e54a_prof);

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
        return array (  105 => 32,  94 => 27,  90 => 26,  86 => 25,  82 => 24,  77 => 22,  73 => 20,  69 => 19,  63 => 15,  60 => 14,  57 => 13,  54 => 12,  51 => 11,  48 => 10,  46 => 9,  40 => 5,  34 => 4,  11 => 1,);
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
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    {% include 'UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig' %}
                {% else %}
                    {% include 'UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig' %}
                {% endif %}
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
