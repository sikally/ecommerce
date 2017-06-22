<?php

/* @SensioDistribution/Configurator/steps.html.twig */
class __TwigTemplate_97983a09c8022b7f0db6c67cdb973250cfcb1734aa0e80471542c197f766e424 extends Twig_Template
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
        $__internal_5193b5014a24d81c7aa478ba8d26fe865786ffce9dbf26d6f70f0a8d8aa10adb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5193b5014a24d81c7aa478ba8d26fe865786ffce9dbf26d6f70f0a8d8aa10adb->enter($__internal_5193b5014a24d81c7aa478ba8d26fe865786ffce9dbf26d6f70f0a8d8aa10adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/steps.html.twig"));

        // line 1
        echo "<div class=\"symfony-block-steps\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 3
            echo "
      ";
            // line 4
            if (($context["i"] == ((isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")) + 1))) {
                // line 5
                echo "          <span class=\"selected\">Step ";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</span>
      ";
            } else {
                // line 7
                echo "          <span>Step ";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</span>
      ";
            }
            // line 9
            echo "
      ";
            // line 10
            if (($context["i"] != (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))) {
                // line 11
                echo "        &gt;
      ";
            }
            // line 13
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</div>
";
        
        $__internal_5193b5014a24d81c7aa478ba8d26fe865786ffce9dbf26d6f70f0a8d8aa10adb->leave($__internal_5193b5014a24d81c7aa478ba8d26fe865786ffce9dbf26d6f70f0a8d8aa10adb_prof);

    }

    public function getTemplateName()
    {
        return "@SensioDistribution/Configurator/steps.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  55 => 13,  51 => 11,  49 => 10,  46 => 9,  40 => 7,  34 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"symfony-block-steps\">
    {% for i in 1..count %}

      {% if i == index + 1 %}
          <span class=\"selected\">Step {{ i }}</span>
      {% else %}
          <span>Step {{ i }}</span>
      {% endif %}

      {% if i != count %}
        &gt;
      {% endif %}
    {% endfor %}
</div>
", "@SensioDistribution/Configurator/steps.html.twig", "C:\\wamp\\www\\ecommerce\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle\\Resources\\views\\Configurator\\steps.html.twig");
    }
}
