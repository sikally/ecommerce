<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_4bb405cb40e72c08527079164d2a9591f56863d9f066cfdcf058df88be222c80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f877fe50559b36a0c3eb2977dea077e77e2dc1616fcee49d42b419d760e5730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f877fe50559b36a0c3eb2977dea077e77e2dc1616fcee49d42b419d760e5730->enter($__internal_5f877fe50559b36a0c3eb2977dea077e77e2dc1616fcee49d42b419d760e5730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f877fe50559b36a0c3eb2977dea077e77e2dc1616fcee49d42b419d760e5730->leave($__internal_5f877fe50559b36a0c3eb2977dea077e77e2dc1616fcee49d42b419d760e5730_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f38162cfc8fe6949779412faad7f4d348b2a9cd13f60a10abcd73f5c62d81f14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f38162cfc8fe6949779412faad7f4d348b2a9cd13f60a10abcd73f5c62d81f14->enter($__internal_f38162cfc8fe6949779412faad7f4d348b2a9cd13f60a10abcd73f5c62d81f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 6
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 7
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                <strong>";
                // line 8
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</strong>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 15
        echo "</div>
";
        
        $__internal_f38162cfc8fe6949779412faad7f4d348b2a9cd13f60a10abcd73f5c62d81f14->leave($__internal_f38162cfc8fe6949779412faad7f4d348b2a9cd13f60a10abcd73f5c62d81f14_prof);

    }

    // line 13
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5f0a1d63ed7105cea82e6ef4f652fdcf9a0e5730fa8744c75b58506458343ffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f0a1d63ed7105cea82e6ef4f652fdcf9a0e5730fa8744c75b58506458343ffa->enter($__internal_5f0a1d63ed7105cea82e6ef4f652fdcf9a0e5730fa8744c75b58506458343ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 14
        echo "    ";
        
        $__internal_5f0a1d63ed7105cea82e6ef4f652fdcf9a0e5730fa8744c75b58506458343ffa->leave($__internal_5f0a1d63ed7105cea82e6ef4f652fdcf9a0e5730fa8744c75b58506458343ffa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 14,  86 => 13,  78 => 15,  76 => 13,  73 => 12,  67 => 11,  58 => 8,  53 => 7,  48 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
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
    {% for type, messages in app.session.flashbag.all() %}
        {% for message in messages %}
            <div class=\"alert alert-{{ type }}\">
                <strong>{{ message }}</strong>
            </div>
        {% endfor %}
    {% endfor %}

    {% block fos_user_content %}
    {% endblock fos_user_content %}
</div>
{% endblock %}", "FOSUserBundle::layout.html.twig", "C:\\wamp\\www\\ecommerce\\app\\Resources\\FOSUserBundle\\views\\layout.html.twig");
    }
}
