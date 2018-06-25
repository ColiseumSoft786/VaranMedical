<?php

/* locations/comboLocations.html.twig */
class __TwigTemplate_ce7f9a5d3501dbfd19c1d11c9a612e56cedaa49b3f544b62d834248ce1227532 extends Twig_Template
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
        $__internal_b6555cb9b05ae099b3520b6b24267ebfaafc52c42425fc84c61330520b3be69a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6555cb9b05ae099b3520b6b24267ebfaafc52c42425fc84c61330520b3be69a->enter($__internal_b6555cb9b05ae099b3520b6b24267ebfaafc52c42425fc84c61330520b3be69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "locations/comboLocations.html.twig"));

        // line 1
        echo "
<div class=\"col-lg-12\">
    <div class=\"form-group tg-formgroup\">
        <span class=\"tg-select\">
            <select id=\"appointmentsbundle_calendries_location\" name=\"appointmentsbundle_calendries[location]\">
                <option value=\"\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Selectionner"), "html", null, true);
        echo "</option>
                ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? $this->getContext($context, "locations")));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 8
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["location"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["location"], "name", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
            </select>
        </span>
    </div>
</div>";
        
        $__internal_b6555cb9b05ae099b3520b6b24267ebfaafc52c42425fc84c61330520b3be69a->leave($__internal_b6555cb9b05ae099b3520b6b24267ebfaafc52c42425fc84c61330520b3be69a_prof);

    }

    public function getTemplateName()
    {
        return "locations/comboLocations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  37 => 8,  33 => 7,  29 => 6,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<div class=\"col-lg-12\">
    <div class=\"form-group tg-formgroup\">
        <span class=\"tg-select\">
            <select id=\"appointmentsbundle_calendries_location\" name=\"appointmentsbundle_calendries[location]\">
                <option value=\"\">{{ 'Selectionner'|trans }}</option>
                {% for location in locations %}
                <option value=\"{{ location.id }}\">{{ location.name }}</option>
                {% endfor %}

            </select>
        </span>
    </div>
</div>", "locations/comboLocations.html.twig", "C:\\xampp\\htdocs\\VaranMedical\\app\\Resources\\views\\locations\\comboLocations.html.twig");
    }
}
