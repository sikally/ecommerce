<?php

/* @Pages/Default/pages/modulesUsed/menu.html.twig */
class __TwigTemplate_ac7f35d4a6fee24c0562ce11422adc16db9cb4ca3bbf17140c1bc99127091dc4 extends Twig_Template
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
        $__internal_430598d5dcb6072a8eebd3e7f13494998e58be9530ca08f5ca7dbfb76582286e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_430598d5dcb6072a8eebd3e7f13494998e58be9530ca08f5ca7dbfb76582286e->enter($__internal_430598d5dcb6072a8eebd3e7f13494998e58be9530ca08f5ca7dbfb76582286e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Pages/Default/pages/modulesUsed/menu.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 2
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "titre", array()), "html", null, true);
            echo "</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_430598d5dcb6072a8eebd3e7f13494998e58be9530ca08f5ca7dbfb76582286e->leave($__internal_430598d5dcb6072a8eebd3e7f13494998e58be9530ca08f5ca7dbfb76582286e_prof);

    }

    public function getTemplateName()
    {
        return "@Pages/Default/pages/modulesUsed/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for page in pages %}
    <li><a href=\"{{ path('page', { 'id' : page.id }) }}\">{{ page.titre }}</a>
{% endfor %}", "@Pages/Default/pages/modulesUsed/menu.html.twig", "C:\\wamp\\www\\ecommerce\\src\\Pages\\PagesBundle\\Resources\\views\\Default\\pages\\modulesUsed\\menu.html.twig");
    }
}
