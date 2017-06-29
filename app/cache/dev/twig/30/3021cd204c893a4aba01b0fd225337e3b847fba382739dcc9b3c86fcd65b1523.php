<?php

/* EcommerceBundle:Default:categories/modulesUsed/menu.html.twig */
class __TwigTemplate_f32a19d4dc598195fc343d11becdd6279f589fc5abe4901c9b4da6dc899b1a92 extends Twig_Template
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
        $__internal_c3a6c3ba2335cde01f587c8b21a40dc89387c32473bfc18593f3b9f8ae75c447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3a6c3ba2335cde01f587c8b21a40dc89387c32473bfc18593f3b9f8ae75c447->enter($__internal_c3a6c3ba2335cde01f587c8b21a40dc89387c32473bfc18593f3b9f8ae75c447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:categories/modulesUsed/menu.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 2
            echo "    <li>
       <a href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorieProduits", array("categorie" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
            echo "</a>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_c3a6c3ba2335cde01f587c8b21a40dc89387c32473bfc18593f3b9f8ae75c447->leave($__internal_c3a6c3ba2335cde01f587c8b21a40dc89387c32473bfc18593f3b9f8ae75c447_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:categories/modulesUsed/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for categorie in categories %}
    <li>
       <a href=\"{{ path('categorieProduits',{ 'categorie' : categorie.id }) }}\">{{ categorie.nom }}</a>
    </li>
{% endfor %}", "EcommerceBundle:Default:categories/modulesUsed/menu.html.twig", "C:\\wamp\\www\\ecommerce\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/categories/modulesUsed/menu.html.twig");
    }
}
