<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_4cb16c18bdd435182da7c1bf9953ebd8e46bd71f76904094fb1e20c5d72e2c08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@FOSUser/layout.html.twig", 1);
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
        $__internal_ac6290cb4d1c3f444fbc51a93c39d0d3535ec74be5060e760ef55eb7d17b2d0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac6290cb4d1c3f444fbc51a93c39d0d3535ec74be5060e760ef55eb7d17b2d0b->enter($__internal_ac6290cb4d1c3f444fbc51a93c39d0d3535ec74be5060e760ef55eb7d17b2d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac6290cb4d1c3f444fbc51a93c39d0d3535ec74be5060e760ef55eb7d17b2d0b->leave($__internal_ac6290cb4d1c3f444fbc51a93c39d0d3535ec74be5060e760ef55eb7d17b2d0b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbfc1c0ac4b73e9935cfc245ad1185c1d529c4c33bbe8e926035662028c09f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbfc1c0ac4b73e9935cfc245ad1185c1d529c4c33bbe8e926035662028c09f80->enter($__internal_cbfc1c0ac4b73e9935cfc245ad1185c1d529c4c33bbe8e926035662028c09f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cbfc1c0ac4b73e9935cfc245ad1185c1d529c4c33bbe8e926035662028c09f80->leave($__internal_cbfc1c0ac4b73e9935cfc245ad1185c1d529c4c33bbe8e926035662028c09f80_prof);

    }

    // line 13
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d06b324226736472309da7c4e2951a9085da49dc771f27926bbb60f632c14f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d06b324226736472309da7c4e2951a9085da49dc771f27926bbb60f632c14f40->enter($__internal_d06b324226736472309da7c4e2951a9085da49dc771f27926bbb60f632c14f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 14
        echo "    ";
        
        $__internal_d06b324226736472309da7c4e2951a9085da49dc771f27926bbb60f632c14f40->leave($__internal_d06b324226736472309da7c4e2951a9085da49dc771f27926bbb60f632c14f40_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
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
{% endblock %}", "@FOSUser/layout.html.twig", "C:\\wamp\\www\\ecommerce\\app\\Resources\\FOSUserBundle\\views\\layout.html.twig");
    }
}
