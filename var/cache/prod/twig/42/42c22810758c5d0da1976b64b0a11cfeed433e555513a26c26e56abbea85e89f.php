<?php

/* calendries/listeCalendries.html.twig */
class __TwigTemplate_362dea2b7f6e3c51df597d32a15d4edf3fd6ecfb89a887cae5cb59b6cf8fdc7b extends Twig_Template
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
        $__internal_42f5257f9e5fb9a4487438d2129306b3f7a55c1fc5974b19b1536b1e7748f9d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42f5257f9e5fb9a4487438d2129306b3f7a55c1fc5974b19b1536b1e7748f9d1->enter($__internal_42f5257f9e5fb9a4487438d2129306b3f7a55c1fc5974b19b1536b1e7748f9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "calendries/listeCalendries.html.twig"));

        // line 1
        echo "
<div class=\"tg-favoritlistingbox monthly\" id=\"mycalendar\">

</div>
    <script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/Calendar/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/Calendar/js/monthly.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">

        var sampleEvents = {
            \"monthly\": [
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["calendries"] ?? $this->getContext($context, "calendries")));
        foreach ($context['_seq'] as $context["_key"] => $context["calendrie"]) {
            // line 12
            echo "                ";
            $context["check"] = 0;
            // line 13
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pha"] ?? $this->getContext($context, "pha")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 14
                echo "                ";
                if ((twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", array()), "Y-m-d") == twig_date_format_filter($this->env, $this->getAttribute($context["calendrie"], "date", array()), "Y-m-d"))) {
                    // line 15
                    echo "                ";
                    $context["check"] = 1;
                    // line 16
                    echo "                ";
                }
                // line 17
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "                ";
            if ((($context["check"] ?? $this->getContext($context, "check")) == 0)) {
                // line 19
                echo "                    ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppointmentsBundle:Seances:getSeacesByCalendar", array("calendar" => $this->getAttribute($context["calendrie"], "id", array()))));
                echo "
                ";
            }
            // line 21
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['calendrie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weekends"] ?? $this->getContext($context, "weekends")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 23
            echo "                {
                    \"id\": \"\",
                    \"name\": \"Weekend\",
                    \"startdate\": \"";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $context["item"], "Y-m-d"), "html", null, true);
            echo "\",
                    \"enddate\": \"\",
                    \"color\": \"#178300\",
                    \"url\": \"\"
                },
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pha"] ?? $this->getContext($context, "pha")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 33
            echo "                {
                    \"id\": ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo ",
                    \"name\": \"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "reason", array()), "html", null, true);
            echo "\",
                    \"startdate\": \"";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", array()), "Y-m-d"), "html", null, true);
            echo "\",
                    \"enddate\": \"\",
                    \"color\": \"#832c1f\",
                    \"url\": \"\"
                },
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
            ]
        };
    </script>
</div>

<script>

    \$(document).ready(function () {
        \$('#mycalendar').monthly({
            mode: 'event',
            dataType: 'json',
            events: sampleEvents
        });
    });
</script>

";
        
        $__internal_42f5257f9e5fb9a4487438d2129306b3f7a55c1fc5974b19b1536b1e7748f9d1->leave($__internal_42f5257f9e5fb9a4487438d2129306b3f7a55c1fc5974b19b1536b1e7748f9d1_prof);

    }

    public function getTemplateName()
    {
        return "calendries/listeCalendries.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 42,  120 => 36,  116 => 35,  112 => 34,  109 => 33,  104 => 32,  92 => 26,  87 => 23,  82 => 22,  76 => 21,  70 => 19,  67 => 18,  61 => 17,  58 => 16,  55 => 15,  52 => 14,  47 => 13,  44 => 12,  40 => 11,  32 => 6,  28 => 5,  22 => 1,);
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
<div class=\"tg-favoritlistingbox monthly\" id=\"mycalendar\">

</div>
    <script type=\"text/javascript\" src=\"{{ asset('assets/Calendar/js/jquery.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/Calendar/js/monthly.js') }}\"></script>
    <script type=\"text/javascript\">

        var sampleEvents = {
            \"monthly\": [
                {% for calendrie in calendries %}
                {% set check = 0 %}
                {% for item in pha %}
                {% if item.date|date('Y-m-d') == calendrie.date|date('Y-m-d') %}
                {% set check = 1 %}
                {% endif %}
                {% endfor %}
                {% if check == 0 %}
                    {{ render(controller('AppointmentsBundle:Seances:getSeacesByCalendar', {'calendar':calendrie.id})) }}
                {% endif %}
                {% endfor %}
                {% for item in weekends %}
                {
                    \"id\": \"\",
                    \"name\": \"Weekend\",
                    \"startdate\": \"{{ item|date('Y-m-d') }}\",
                    \"enddate\": \"\",
                    \"color\": \"#178300\",
                    \"url\": \"\"
                },
                {% endfor %}
                {% for item in pha %}
                {
                    \"id\": {{ item.id }},
                    \"name\": \"{{ item.reason }}\",
                    \"startdate\": \"{{ item.date|date('Y-m-d') }}\",
                    \"enddate\": \"\",
                    \"color\": \"#832c1f\",
                    \"url\": \"\"
                },
                {% endfor %}

            ]
        };
    </script>
</div>

<script>

    \$(document).ready(function () {
        \$('#mycalendar').monthly({
            mode: 'event',
            dataType: 'json',
            events: sampleEvents
        });
    });
</script>

", "calendries/listeCalendries.html.twig", "C:\\xampp\\htdocs\\VaranMedical\\app\\Resources\\views\\calendries\\listeCalendries.html.twig");
    }
}
