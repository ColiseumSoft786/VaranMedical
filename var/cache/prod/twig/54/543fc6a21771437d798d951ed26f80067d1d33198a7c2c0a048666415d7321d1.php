<?php

/* specialities/listeOfSpecialities.html.twig */
class __TwigTemplate_ceff9b1c1bbd5799f4bf2b6a4572f33ec390bc54aa4c4c215e660af8056c51b1 extends Twig_Template
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
        $__internal_b351ed2f5d6c0c0dd8f6b99e1c526dcbedb405ac7e4e8c1d18e467ef8a52261d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b351ed2f5d6c0c0dd8f6b99e1c526dcbedb405ac7e4e8c1d18e467ef8a52261d->enter($__internal_b351ed2f5d6c0c0dd8f6b99e1c526dcbedb405ac7e4e8c1d18e467ef8a52261d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "specialities/listeOfSpecialities.html.twig"));

        // line 1
        echo "<div class=\"tg-searchbulder tg-searchprofilesttings\">
    <div class=\"tg-tabcontent\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["specialities"] ?? $this->getContext($context, "specialities")));
        foreach ($context['_seq'] as $context["_key"] => $context["specialitie"]) {
            // line 4
            echo "            <span class=\"tg-checkbox tg-subcategorycheckbox\">
                <input type=\"checkbox\"  name=\"subcategory\" value=\"Dentist\">
                <label for=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["specialitie"], "libelle", array()), "html", null, true);
            echo "\">
                    <span>
                        <img src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-16.png"), "html", null, true);
            echo "\" alt=\"image description\">
                    </span>
                    <span>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["specialitie"], "libelle", array()), "html", null, true);
            echo "</span>
                </label>
\t\t\t</span>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['specialitie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </div>
</div>";
        
        $__internal_b351ed2f5d6c0c0dd8f6b99e1c526dcbedb405ac7e4e8c1d18e467ef8a52261d->leave($__internal_b351ed2f5d6c0c0dd8f6b99e1c526dcbedb405ac7e4e8c1d18e467ef8a52261d_prof);

    }

    public function getTemplateName()
    {
        return "specialities/listeOfSpecialities.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 14,  44 => 10,  39 => 8,  34 => 6,  30 => 4,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"tg-searchbulder tg-searchprofilesttings\">
    <div class=\"tg-tabcontent\">
        {% for specialitie in specialities %}
            <span class=\"tg-checkbox tg-subcategorycheckbox\">
                <input type=\"checkbox\"  name=\"subcategory\" value=\"Dentist\">
                <label for=\"{{ specialitie.libelle }}\">
                    <span>
                        <img src=\"{{ asset('assets/images/icons/icon-16.png') }}\" alt=\"image description\">
                    </span>
                    <span>{{ specialitie.libelle }}</span>
                </label>
\t\t\t</span>
        {% endfor %}
    </div>
</div>", "specialities/listeOfSpecialities.html.twig", "C:\\xampp\\htdocs\\VaranMedical\\app\\Resources\\views\\specialities\\listeOfSpecialities.html.twig");
    }
}
