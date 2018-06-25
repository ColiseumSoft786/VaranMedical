<?php

/* seances/listeSeancesCalendar.html.twig */
class __TwigTemplate_aa5dc8e05d562a50fa9bf0227a5ca63fe0bab81a3eb2905bca856636b8801926 extends Twig_Template
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
        $__internal_00ca12ec8d6a4c6fd0643eeb072694dbe5c48d84ad4caed33bd298f2aa050a79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ca12ec8d6a4c6fd0643eeb072694dbe5c48d84ad4caed33bd298f2aa050a79->enter($__internal_00ca12ec8d6a4c6fd0643eeb072694dbe5c48d84ad4caed33bd298f2aa050a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "seances/listeSeancesCalendar.html.twig"));

        // line 1
        echo "
";
        // line 2
        if ((null === $this->getAttribute(($context["calendrie"] ?? $this->getContext($context, "calendrie")), "deleatedAt", array()))) {
            // line 3
            echo "    {
    \"id\": ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute(($context["calendrie"] ?? $this->getContext($context, "calendrie")), "id", array()), "html", null, true);
            echo ",
    \"name\": \"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["calendrie"] ?? $this->getContext($context, "calendrie")), "location", array()), "name", array()), "html", null, true);
            echo "\",
    \"startdate\": \"";
            // line 6
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["calendrie"] ?? $this->getContext($context, "calendrie")), "date", array()), "Y-m-d"), "html", null, true);
            echo "\",
    \"enddate\": \"\",
    \"color\": \"#787601\",
    \"url\": \"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("seances_index", array("calendrie" => $this->getAttribute(($context["calendrie"] ?? $this->getContext($context, "calendrie")), "id", array()))), "html", null, true);
            echo "\"
    },
    ";
            // line 11
            if ((($this->getAttribute(($context["calendrie"] ?? $this->getContext($context, "calendrie")), "absence", array()) == 1) && (twig_date_format_filter($this->env, "now", "Y-m-d") <= twig_date_format_filter($this->env, $this->getAttribute(($context["calendrie"] ?? $this->getContext($context, "calendrie")), "date", array()), "Y-m-d")))) {
                // line 12
                echo "        {
        \"id\": ";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute(($context["calendrie"] ?? $this->getContext($context, "calendrie")), "id", array()), "html", null, true);
                echo ",
        \"name\": \"Absent\",
        \"startdate\": \"";
                // line 15
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["calendrie"] ?? $this->getContext($context, "calendrie")), "date", array()), "Y-m-d"), "html", null, true);
                echo "\",
        \"enddate\": \"\",
        \"color\": \"#787683\",
        \"url\": \"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("seances_index", array("calendrie" => $this->getAttribute(($context["calendrie"] ?? $this->getContext($context, "calendrie")), "id", array()))), "html", null, true);
                echo "\"
        },
    ";
            } else {
                // line 21
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["seances"] ?? $this->getContext($context, "seances")));
                foreach ($context['_seq'] as $context["_key"] => $context["seance"]) {
                    // line 22
                    echo "            {
            \"id\": ";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["calendrie"] ?? $this->getContext($context, "calendrie")), "id", array()), "html", null, true);
                    echo ",
            \"name\": \"";
                    // line 24
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["seance"], "heurDebut", array()), "H:i"), "html", null, true);
                    echo "\",
            \"startdate\": \"";
                    // line 25
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["calendrie"] ?? $this->getContext($context, "calendrie")), "date", array()), "Y-m-d"), "html", null, true);
                    echo "\",
            \"enddate\": \"\",
            ";
                    // line 27
                    if (($this->getAttribute($context["seance"], "dispo", array()) == 0)) {
                        // line 28
                        echo "                \"color\": \"#b21c27\",
                \"url\": \"";
                        // line 29
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("calendries_appoitment_update", array("id" => $this->getAttribute($context["seance"], "id", array()))), "html", null, true);
                        echo "\"
            ";
                    } else {
                        // line 31
                        echo "                \"color\": \"#dfe0d8\",
                \"url\": \"\"
            ";
                    }
                    // line 34
                    echo "
            },
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seance'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "    ";
            }
            // line 38
            echo "    ";
            if ((twig_date_format_filter($this->env, "now", "Y-m-d") <= twig_date_format_filter($this->env, $this->getAttribute(($context["calendrie"] ?? $this->getContext($context, "calendrie")), "date", array()), "Y-m-d"))) {
                // line 39
                echo "        {
        \"id\": ";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute(($context["calendrie"] ?? $this->getContext($context, "calendrie")), "id", array()), "html", null, true);
                echo ",
        \"name\": \"Planifier...\",
        \"startdate\": \"";
                // line 42
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["calendrie"] ?? $this->getContext($context, "calendrie")), "date", array()), "Y-m-d"), "html", null, true);
                echo "\",
        \"enddate\": \"\",
        \"color\": \"#484848\",
        \"url\": \"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("seances_index", array("calendrie" => $this->getAttribute(($context["calendrie"] ?? $this->getContext($context, "calendrie")), "id", array()))), "html", null, true);
                echo "\"
        },
    ";
            }
            // line 48
            echo "
";
        }
        
        $__internal_00ca12ec8d6a4c6fd0643eeb072694dbe5c48d84ad4caed33bd298f2aa050a79->leave($__internal_00ca12ec8d6a4c6fd0643eeb072694dbe5c48d84ad4caed33bd298f2aa050a79_prof);

    }

    public function getTemplateName()
    {
        return "seances/listeSeancesCalendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 48,  135 => 45,  129 => 42,  124 => 40,  121 => 39,  118 => 38,  115 => 37,  107 => 34,  102 => 31,  97 => 29,  94 => 28,  92 => 27,  87 => 25,  83 => 24,  79 => 23,  76 => 22,  71 => 21,  65 => 18,  59 => 15,  54 => 13,  51 => 12,  49 => 11,  44 => 9,  38 => 6,  34 => 5,  30 => 4,  27 => 3,  25 => 2,  22 => 1,);
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
{% if calendrie.deleatedAt is null %}
    {
    \"id\": {{ calendrie.id }},
    \"name\": \"{{ calendrie.location.name }}\",
    \"startdate\": \"{{ calendrie.date|date('Y-m-d') }}\",
    \"enddate\": \"\",
    \"color\": \"#787601\",
    \"url\": \"{{ path('seances_index', {'calendrie':calendrie.id}) }}\"
    },
    {% if calendrie.absence == 1 and \"now\"|date('Y-m-d')  <= calendrie.date|date('Y-m-d') %}
        {
        \"id\": {{ calendrie.id }},
        \"name\": \"Absent\",
        \"startdate\": \"{{ calendrie.date|date('Y-m-d') }}\",
        \"enddate\": \"\",
        \"color\": \"#787683\",
        \"url\": \"{{ path('seances_index', {'calendrie':calendrie.id}) }}\"
        },
    {% else %}
        {% for seance in seances  %}
            {
            \"id\": {{ calendrie.id }},
            \"name\": \"{{ seance.heurDebut|date('H:i') }}\",
            \"startdate\": \"{{ calendrie.date|date('Y-m-d') }}\",
            \"enddate\": \"\",
            {% if seance.dispo == 0 %}
                \"color\": \"#b21c27\",
                \"url\": \"{{ path('calendries_appoitment_update', {'id' : seance.id}) }}\"
            {% else %}
                \"color\": \"#dfe0d8\",
                \"url\": \"\"
            {% endif %}

            },
        {% endfor %}
    {% endif %}
    {% if \"now\"|date('Y-m-d')  <= calendrie.date|date('Y-m-d') %}
        {
        \"id\": {{ calendrie.id }},
        \"name\": \"Planifier...\",
        \"startdate\": \"{{ calendrie.date|date('Y-m-d') }}\",
        \"enddate\": \"\",
        \"color\": \"#484848\",
        \"url\": \"{{ path('seances_index', {'calendrie':calendrie.id}) }}\"
        },
    {% endif %}

{% endif %}
", "seances/listeSeancesCalendar.html.twig", "C:\\xampp\\htdocs\\VaranMedical\\app\\Resources\\views\\seances\\listeSeancesCalendar.html.twig");
    }
}
