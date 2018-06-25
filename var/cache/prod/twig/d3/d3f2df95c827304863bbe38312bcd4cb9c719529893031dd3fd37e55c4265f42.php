<?php

/* services/index.html.twig */
class __TwigTemplate_f350b041ff089b3a1872f819efcceedb272a2d97619ee46d39f3c7b88dbeb602 extends Twig_Template
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
        $__internal_845503dab1eefbc625e3b00ec186d4b5bb3652bb349cbca69113c69326d4cc8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_845503dab1eefbc625e3b00ec186d4b5bb3652bb349cbca69113c69326d4cc8c->enter($__internal_845503dab1eefbc625e3b00ec186d4b5bb3652bb349cbca69113c69326d4cc8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "services/index.html.twig"));

        // line 1
        echo "<div class=\"tg-box tg-dashboardservices tg-uiicons\">
    <div class=\"tg-dashboardboxtitle tg-margin\">
        <h2>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Services"), "html", null, true);
        echo "</h2>
    </div>
    <div class=\"tg-dashboardboxtitle tg-feetitle tg-margin\">
        <h2>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Fee Per Patient"), "html", null, true);
        echo "</h2>
    </div>
    <div class=\"tg-servicesbox\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["services"] ?? $this->getContext($context, "services")));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 10
            echo "        <div class=\"tg-servicesholder\">
            <div class=\"tg-mainservice\"> <em>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "service", array()), "html", null, true);
            echo "</em> <i class=\"fa fa-pencil\"></i> <i class=\"fa fa-close\"></i> </div>
            ";
            // line 12
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("DoctorsBundle:Invoices:index", array("doctor" => ($context["doctor"] ?? $this->getContext($context, "doctor")), "service" => $this->getAttribute($context["service"], "id", array()))));
            echo "
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </div>
</div>";
        
        $__internal_845503dab1eefbc625e3b00ec186d4b5bb3652bb349cbca69113c69326d4cc8c->leave($__internal_845503dab1eefbc625e3b00ec186d4b5bb3652bb349cbca69113c69326d4cc8c_prof);

    }

    public function getTemplateName()
    {
        return "services/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 15,  49 => 12,  45 => 11,  42 => 10,  38 => 9,  32 => 6,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"tg-box tg-dashboardservices tg-uiicons\">
    <div class=\"tg-dashboardboxtitle tg-margin\">
        <h2>{{ 'Services'|trans }}</h2>
    </div>
    <div class=\"tg-dashboardboxtitle tg-feetitle tg-margin\">
        <h2>{{ 'Fee Per Patient'|trans }}</h2>
    </div>
    <div class=\"tg-servicesbox\">
        {% for service in services %}
        <div class=\"tg-servicesholder\">
            <div class=\"tg-mainservice\"> <em>{{ service.service }}</em> <i class=\"fa fa-pencil\"></i> <i class=\"fa fa-close\"></i> </div>
            {{ render(controller('DoctorsBundle:Invoices:index', {'doctor':doctor, 'service':service.id})) }}
        </div>
        {% endfor %}
    </div>
</div>", "services/index.html.twig", "C:\\xampp\\htdocs\\VaranMedical\\app\\Resources\\views\\services\\index.html.twig");
    }
}
