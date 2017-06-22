<?php

/* PagesBundle:Default/pages/modulesUsed:menu.html.twig */
class __TwigTemplate_9517c6a9b6ba11c364c84c85a8f5f06edfb25e9d06635b4c1d27c96a1d410248 extends Twig_Template
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
        $__internal_852512df8eafb727c4c0eac70d620fd6c68ad8fd3af8aed3d96fbb8c63d0d483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_852512df8eafb727c4c0eac70d620fd6c68ad8fd3af8aed3d96fbb8c63d0d483->enter($__internal_852512df8eafb727c4c0eac70d620fd6c68ad8fd3af8aed3d96fbb8c63d0d483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default/pages/modulesUsed:menu.html.twig"));

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
        
        $__internal_852512df8eafb727c4c0eac70d620fd6c68ad8fd3af8aed3d96fbb8c63d0d483->leave($__internal_852512df8eafb727c4c0eac70d620fd6c68ad8fd3af8aed3d96fbb8c63d0d483_prof);

    }

    public function getTemplateName()
    {
        return "PagesBundle:Default/pages/modulesUsed:menu.html.twig";
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
{% endfor %}", "PagesBundle:Default/pages/modulesUsed:menu.html.twig", "C:\\wamp\\www\\ecommerce\\src\\Pages\\PagesBundle/Resources/views/Default/pages/modulesUsed/menu.html.twig");
    }
}
