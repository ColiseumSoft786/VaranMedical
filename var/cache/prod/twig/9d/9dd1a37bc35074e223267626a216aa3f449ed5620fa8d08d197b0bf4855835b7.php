<?php

/* certifications/listeOfCertifications.html.twig */
class __TwigTemplate_686efab2e7663c57022bd849c0f630b4dc8db7e4f8bb438800e948ca70068e6d extends Twig_Template
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
        $__internal_8b5492d2aa016259c7a8d8bb9450da0018c70bb8efa9d4341a5dec393a85fbc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b5492d2aa016259c7a8d8bb9450da0018c70bb8efa9d4341a5dec393a85fbc7->enter($__internal_8b5492d2aa016259c7a8d8bb9450da0018c70bb8efa9d4341a5dec393a85fbc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "certifications/listeOfCertifications.html.twig"));

        // line 1
        if (($context["certifications"] ?? $this->getContext($context, "certifications"))) {
            // line 2
            echo "    <div class=\"tg-dashboardbox\">
        <div class=\"tg-dashboardboxtitle\">
            <h2><i class=\"fa fa-trophy\"></i> ";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Certifications"), "html", null, true);
            echo "</h2>
        </div>
        <div class=\"tg-box tg-experience tg-uiicons\">
            <ul class=\"tg-themelist tg-liststyledot tg-listdatastyle\">
                ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["certifications"] ?? $this->getContext($context, "certifications")));
            foreach ($context['_seq'] as $context["_key"] => $context["certification"]) {
                // line 9
                echo "                    <li> <span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["certification"], "title", array()), "html", null, true);
                echo "</span> <span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["certification"], "occasion", array()), "html", null, true);
                echo "</span> <span>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["certification"], "date", array()), "d-M-Y"), "html", null, true);
                echo "</span></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['certification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "            </ul>
        </div>
    </div>
";
        }
        
        $__internal_8b5492d2aa016259c7a8d8bb9450da0018c70bb8efa9d4341a5dec393a85fbc7->leave($__internal_8b5492d2aa016259c7a8d8bb9450da0018c70bb8efa9d4341a5dec393a85fbc7_prof);

    }

    public function getTemplateName()
    {
        return "certifications/listeOfCertifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  39 => 9,  35 => 8,  28 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if certifications %}
    <div class=\"tg-dashboardbox\">
        <div class=\"tg-dashboardboxtitle\">
            <h2><i class=\"fa fa-trophy\"></i> {{ 'Certifications'|trans }}</h2>
        </div>
        <div class=\"tg-box tg-experience tg-uiicons\">
            <ul class=\"tg-themelist tg-liststyledot tg-listdatastyle\">
                {% for certification in certifications %}
                    <li> <span>{{ certification.title }}</span> <span>{{ certification.occasion }}</span> <span>{{ certification.date|date('d-M-Y') }}</span></li>
                {% endfor %}
            </ul>
        </div>
    </div>
{% endif %}", "certifications/listeOfCertifications.html.twig", "C:\\xampp\\htdocs\\VaranMedical\\app\\Resources\\views\\certifications\\listeOfCertifications.html.twig");
    }
}
