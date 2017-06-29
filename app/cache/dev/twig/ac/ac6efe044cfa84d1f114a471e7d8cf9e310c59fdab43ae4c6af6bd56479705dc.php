<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_4b9b8067353856bd2dbea1c596b51dcbfd8aabd9faa6e2d74263bba996f4d0e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3fc8352adcf765495bc0949b2350793d2fee6420826528e7c836094ad34c5e1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fc8352adcf765495bc0949b2350793d2fee6420826528e7c836094ad34c5e1c->enter($__internal_3fc8352adcf765495bc0949b2350793d2fee6420826528e7c836094ad34c5e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fc8352adcf765495bc0949b2350793d2fee6420826528e7c836094ad34c5e1c->leave($__internal_3fc8352adcf765495bc0949b2350793d2fee6420826528e7c836094ad34c5e1c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f26e165f6a5454f5056020fe95b002656faf14688c7d8b310fb619bab94d9e88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f26e165f6a5454f5056020fe95b002656faf14688c7d8b310fb619bab94d9e88->enter($__internal_f26e165f6a5454f5056020fe95b002656faf14688c7d8b310fb619bab94d9e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "<div class=\"row\">
    <div class=\"span12\">
        <h2>Connexion</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                    <h4>Pas encore inscrit ?</h4>
                    <em>
                        nous vous invitons à vous inscrire<br />
                        afin de passer votre commande et de manger équilibré.
                    </em>
                    <br /><br />
                    <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" class=\"btn btn-primary\">S'inscrire</a>

                </div>

                <div class=\"span4 offset2\">
                    <h4>Connexion</h4>
                    <form action=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                    <label for=\"username\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

                    <label for=\"password\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                    <br />
                    <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    </form>
                </div>
                <div class=\"span10\">
                    <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe perdu ?</a>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_f26e165f6a5454f5056020fe95b002656faf14688c7d8b310fb619bab94d9e88->leave($__internal_f26e165f6a5454f5056020fe95b002656faf14688c7d8b310fb619bab94d9e88_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 40,  95 => 36,  89 => 33,  84 => 31,  80 => 30,  75 => 28,  71 => 27,  62 => 21,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
{% if error %}
    <div>{{ error|trans }}</div>
{% endif %}
<div class=\"row\">
    <div class=\"span12\">
        <h2>Connexion</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                    <h4>Pas encore inscrit ?</h4>
                    <em>
                        nous vous invitons à vous inscrire<br />
                        afin de passer votre commande et de manger équilibré.
                    </em>
                    <br /><br />
                    <a href=\"{{ path('fos_user_registration_register') }}\" class=\"btn btn-primary\">S'inscrire</a>

                </div>

                <div class=\"span4 offset2\">
                    <h4>Connexion</h4>
                    <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />

                    <label for=\"username\">{{ 'security.login.username'|trans }}</label>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />

                    <label for=\"password\">{{ 'security.login.password'|trans }}</label>
                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                    <br />
                    <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ 'security.login.submit'|trans }}\" />
                    </form>
                </div>
                <div class=\"span10\">
                    <a href=\"{{ path('fos_user_resetting_request') }}\">Mot de passe perdu ?</a>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "C:\\wamp\\www\\ecommerce\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
