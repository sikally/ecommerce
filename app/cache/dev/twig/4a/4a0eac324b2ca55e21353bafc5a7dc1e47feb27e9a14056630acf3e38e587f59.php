<?php

/* EcommerceBundle:Default:index.html.twig */
class __TwigTemplate_c25b4bba8b3f9db67ac76c29ae54705908ed359bf218db32740e082818cbbfe7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:index.html.twig", 1);
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
        $__internal_21a6d59071942d386fc61c05fbc3927dc40597e9ec0aa0cc1d91999c3ae326a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21a6d59071942d386fc61c05fbc3927dc40597e9ec0aa0cc1d91999c3ae326a0->enter($__internal_21a6d59071942d386fc61c05fbc3927dc40597e9ec0aa0cc1d91999c3ae326a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21a6d59071942d386fc61c05fbc3927dc40597e9ec0aa0cc1d91999c3ae326a0->leave($__internal_21a6d59071942d386fc61c05fbc3927dc40597e9ec0aa0cc1d91999c3ae326a0_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_42fd955853534dbd80284eefd85702810c7c4e96bc4ea7ea143b9a932d9b549c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42fd955853534dbd80284eefd85702810c7c4e96bc4ea7ea143b9a932d9b549c->enter($__internal_42fd955853534dbd80284eefd85702810c7c4e96bc4ea7ea143b9a932d9b549c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"container\">
        <div class=\"row\">

            <div class=\"span3\">
            ";
        // line 9
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:index.html.twig", 9)->display($context);
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
                            <img src=\"../img/holder.png\" alt=\"DevAndClick\" width=\"300\" height=\"300\">
                            <div class=\"caption\">
                                <h4>Thumbnail label</h4>
                                <p>100,00 €</p>
                                <a class=\"btn btn-primary\" href=\"produit.php\">Plus d'infos</a>
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
        
        $__internal_42fd955853534dbd80284eefd85702810c7c4e96bc4ea7ea143b9a932d9b549c->leave($__internal_42fd955853534dbd80284eefd85702810c7c4e96bc4ea7ea143b9a932d9b549c_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 27,  58 => 15,  54 => 14,  48 => 10,  46 => 9,  40 => 5,  34 => 4,  11 => 1,);
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
                            <img src=\"../img/holder.png\" alt=\"DevAndClick\" width=\"300\" height=\"300\">
                            <div class=\"caption\">
                                <h4>Thumbnail label</h4>
                                <p>100,00 €</p>
                                <a class=\"btn btn-primary\" href=\"produit.php\">Plus d'infos</a>
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

", "EcommerceBundle:Default:index.html.twig", "C:\\wamp\\www\\ecommerce\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/index.html.twig");
    }
}
