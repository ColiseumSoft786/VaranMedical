<?php

/* AppointmentsBundle:Appointments:display.html.twig */
class __TwigTemplate_facef526c60a82ff09d74831815bdb782fd3789f16c0c98c1d3df1315baf7a56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62ac095d99b3a91b5811e21c38ecbb3d075c0acfc6a3b0ed6f13104c5f2939da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62ac095d99b3a91b5811e21c38ecbb3d075c0acfc6a3b0ed6f13104c5f2939da->enter($__internal_62ac095d99b3a91b5811e21c38ecbb3d075c0acfc6a3b0ed6f13104c5f2939da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppointmentsBundle:Appointments:display.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->loadTemplate("base.html.twig", "AppointmentsBundle:Appointments:display.html.twig", 2)->display($context);
        // line 3
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 4
            echo "    ";
            $this->displayBlock('body', $context, $blocks);
        }
        
        $__internal_62ac095d99b3a91b5811e21c38ecbb3d075c0acfc6a3b0ed6f13104c5f2939da->leave($__internal_62ac095d99b3a91b5811e21c38ecbb3d075c0acfc6a3b0ed6f13104c5f2939da_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_f6a3e32d3945c5b50f97e680feefb86b4dc95060d400906b1fff8bfc44917519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6a3e32d3945c5b50f97e680feefb86b4dc95060d400906b1fff8bfc44917519->enter($__internal_f6a3e32d3945c5b50f97e680feefb86b4dc95060d400906b1fff8bfc44917519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
        ";
        // line 7
        echo "        <!--[if lt IE 8]>
        <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div id=\"tg-wrapper\" class=\"tg-wrapper tg-haslayout\">
            ";
        // line 12
        $this->loadTemplate("default/header.html.twig", "AppointmentsBundle:Appointments:display.html.twig", 12)->display($context);
        // line 13
        echo "
            <!--************************************
                Main Start
        *************************************-->
            <main id=\"tg-main\" class=\"tg-main tg-haslayout\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div id=\"tg-content\" class=\"tg-content tg-dashboard\">
                            <div class=\"col-lg-3 col-md-4 col-sm-4 col-xs-12 pull-left\">
                                <div class=\"tg-widgetdashboard\">
                                    <div class=\"tg-widgetprofile\">
                                        <figure class=\"tg-directpostimg\"> <a href=\"#\"><img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/thumbnails/img-20.jpg"), "html", null, true);
        echo "\" alt=\"image description\"></a>
                                            ";
        // line 25
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "verifier", array()) == 1)) {
            // line 26
            echo "                                                <figcaption>
                                                    <a class=\"tg-usericon tg-iconvarified\" href=\"#\">
                                                        <em class=\"tg-usericonholder\">
                                                            <i class=\"fa fa-shield\"></i>
                                                            <span>";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("verified"), "html", null, true);
            echo "</span>
                                                        </em>
                                                    </a>
                                                </figcaption>
                                            ";
        }
        // line 35
        echo "                                        </figure>
                                        <div class=\"tg-directposthead\">
                                            <h3><a href=\"#\">Dr. ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "lastName", array()), "html", null, true);
        echo "</a></h3>
                                            <div class=\"tg-subjects\"></div>
                                            <ul class=\"tg-metadata\">
                                                <li><span class=\"tg-stars\"><span></span></span></li>
                                                <li><a href=\"#\"><i class=\"fa fa-thumbs-o-up\"></i> 99% (1009 votes)</a></li>
                                            </ul>
                                        </div>
                                        <a class=\"tg-btn tg-btn-lg\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profil", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "idTable", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Profile"), "html", null, true);
        echo "</a> </div>
                                    ";
        // line 45
        $this->loadTemplate("profilDoctorNav.html.twig", "AppointmentsBundle:Appointments:display.html.twig", 45)->display($context);
        // line 46
        echo "                                </div>
                            </div>
                            <div class=\"col-lg-9 col-md-8 col-sm-8 col-xs-12 pull-right\">
                                <h2>Appointments</h2>
                                ";
        // line 50
        if ((twig_length_filter($this->env, ($context["appointment"] ?? $this->getContext($context, "appointment"))) != 0)) {
            // line 51
            echo "                                    <h4>Up Coming Appointments</h4>
                                    <table>
                                        ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["appointment"] ?? $this->getContext($context, "appointment")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 54
                echo "                                            ";
                if ((twig_date_format_filter($this->env, "now", "Y-m-d") < twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "seance", array()), "calendrie", array()), "date", array()), "Y-m-d"))) {
                    // line 55
                    echo "                                                <tr>
                                                    <td style=\"width: 15%;vertical-align: middle;text-align: right;padding-right: 10px\">
                                                        <label style=\"font-size: 20px;\">";
                    // line 57
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "seance", array()), "calendrie", array()), "date", array()), "d M"), "html", null, true);
                    echo "</label><label style=\"font-size: 20px;\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "seance", array()), "calendrie", array()), "date", array()), "Y"), "html", null, true);
                    echo "</label> </td>
                                                    <td style=\"padding: 10px;width: 85%;text-align: left;border-left: 10px solid #83c1f4;background-color: #c1e9fe;\">
                                                        <label style=\"font-size: 18px\"><b>";
                    // line 59
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "seance", array()), "heurDebut", array()), "H:i"), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "seance", array()), "heurFin", array()), "H:i"), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "seance", array()), "calendrie", array()), "location", array()), "name", array()), "html", null, true);
                    echo "</b></label>
                                                        <label>";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "seance", array()), "calendrie", array()), "location", array()), "adresse", array()), "html", null, true);
                    echo "</label>
                                                        <label>Patient: ";
                    // line 61
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppointmentsBundle:Appointments:getpatientbyUser", array("id" => $this->getAttribute($this->getAttribute($context["item"], "patient", array()), "idtable", array()))));
                    echo ", Reason: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "reason", array()), "reason", array()), "html", null, true);
                    echo "
                                                        </label>                                                    </td>
                                                </tr>
                                            ";
                } else {
                    // line 65
                    echo "                                            ";
                }
                // line 66
                echo "
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "
                                    </table>
                                    <h4>Old Appointments</h4>
                                    <table>
                                        ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["appointment"] ?? $this->getContext($context, "appointment")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 73
                echo "                                            ";
                if ((twig_date_format_filter($this->env, "now", "Y-m-d") > twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "seance", array()), "calendrie", array()), "date", array()), "Y-m-d"))) {
                    // line 74
                    echo "                                                <tr>
                                                    <td style=\"width: 15%;vertical-align: middle;text-align: right;padding-right: 10px\">
                                                        <label style=\"font-size: 20px;\">";
                    // line 76
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "seance", array()), "calendrie", array()), "date", array()), "d M"), "html", null, true);
                    echo "</label><label style=\"font-size: 20px;\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "seance", array()), "calendrie", array()), "date", array()), "Y"), "html", null, true);
                    echo "</label> </td>
                                                    <td style=\"padding: 10px;width: 85%;text-align: left;border-left: 10px solid #83c1f4;\">
                                                        <label style=\"font-size: 18px\"><b>";
                    // line 78
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "seance", array()), "heurDebut", array()), "H:i"), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "seance", array()), "heurFin", array()), "H:i"), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "seance", array()), "calendrie", array()), "location", array()), "name", array()), "html", null, true);
                    echo "</b></label>
                                                        <label>";
                    // line 79
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "seance", array()), "calendrie", array()), "location", array()), "adresse", array()), "html", null, true);
                    echo "</label>
                                                        <label>Patient: ";
                    // line 80
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppointmentsBundle:Appointments:getpatientbyUser", array("id" => $this->getAttribute($this->getAttribute($context["item"], "patient", array()), "idtable", array()))));
                    echo ", Reason: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "reason", array()), "reason", array()), "html", null, true);
                    echo "
                                                        </label>
                                                    </td>
                                                </tr>
                                                ";
                } else {
                    // line 85
                    echo "                                            ";
                }
                // line 86
                echo "
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "
                                    </table>
                                ";
        } else {
            // line 91
            echo "                                    <p>You have no Appointments till now.</p>
                                ";
        }
        // line 93
        echo "

                                ";
        // line 124
        echo "                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </main>


        ";
        // line 132
        $this->loadTemplate("default/footer.html.twig", "AppointmentsBundle:Appointments:display.html.twig", 132)->display($context);
        // line 133
        echo "    ";
        
        $__internal_f6a3e32d3945c5b50f97e680feefb86b4dc95060d400906b1fff8bfc44917519->leave($__internal_f6a3e32d3945c5b50f97e680feefb86b4dc95060d400906b1fff8bfc44917519_prof);

    }

    public function getTemplateName()
    {
        return "AppointmentsBundle:Appointments:display.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 133,  253 => 132,  243 => 124,  239 => 93,  235 => 91,  230 => 88,  223 => 86,  220 => 85,  210 => 80,  206 => 79,  198 => 78,  191 => 76,  187 => 74,  184 => 73,  180 => 72,  174 => 68,  167 => 66,  164 => 65,  155 => 61,  151 => 60,  143 => 59,  136 => 57,  132 => 55,  129 => 54,  125 => 53,  121 => 51,  119 => 50,  113 => 46,  111 => 45,  105 => 44,  93 => 37,  89 => 35,  81 => 30,  75 => 26,  73 => 25,  69 => 24,  56 => 13,  54 => 12,  47 => 7,  44 => 5,  30 => 4,  28 => 3,  26 => 2,  23 => 1,);
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
{% include ('base.html.twig') %}
{% if is_granted('IS_AUTHENTICATED_FULLY') %}
    {% block body %}

        {#<body class=\"tg-home tg-login\">#}
        <!--[if lt IE 8]>
        <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div id=\"tg-wrapper\" class=\"tg-wrapper tg-haslayout\">
            {% include ('default/header.html.twig') %}

            <!--************************************
                Main Start
        *************************************-->
            <main id=\"tg-main\" class=\"tg-main tg-haslayout\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div id=\"tg-content\" class=\"tg-content tg-dashboard\">
                            <div class=\"col-lg-3 col-md-4 col-sm-4 col-xs-12 pull-left\">
                                <div class=\"tg-widgetdashboard\">
                                    <div class=\"tg-widgetprofile\">
                                        <figure class=\"tg-directpostimg\"> <a href=\"#\"><img src=\"{{ asset('assets/images/thumbnails/img-20.jpg') }}\" alt=\"image description\"></a>
                                            {% if app.user.verifier == 1 %}
                                                <figcaption>
                                                    <a class=\"tg-usericon tg-iconvarified\" href=\"#\">
                                                        <em class=\"tg-usericonholder\">
                                                            <i class=\"fa fa-shield\"></i>
                                                            <span>{{ 'verified'|trans }}</span>
                                                        </em>
                                                    </a>
                                                </figcaption>
                                            {% endif %}
                                        </figure>
                                        <div class=\"tg-directposthead\">
                                            <h3><a href=\"#\">Dr. {{ doctor.firstName }} {{ doctor.lastName }}</a></h3>
                                            <div class=\"tg-subjects\"></div>
                                            <ul class=\"tg-metadata\">
                                                <li><span class=\"tg-stars\"><span></span></span></li>
                                                <li><a href=\"#\"><i class=\"fa fa-thumbs-o-up\"></i> 99% (1009 votes)</a></li>
                                            </ul>
                                        </div>
                                        <a class=\"tg-btn tg-btn-lg\" href=\"{{ path('user_profil', {'id': app.user.idTable }) }}\">{{ 'Profile'|trans }}</a> </div>
                                    {% include('profilDoctorNav.html.twig') %}
                                </div>
                            </div>
                            <div class=\"col-lg-9 col-md-8 col-sm-8 col-xs-12 pull-right\">
                                <h2>Appointments</h2>
                                {% if appointment|length != 0 %}
                                    <h4>Up Coming Appointments</h4>
                                    <table>
                                        {% for item in appointment %}
                                            {% if \"now\"|date(\"Y-m-d\") < item.seance.calendrie.date|date('Y-m-d')  %}
                                                <tr>
                                                    <td style=\"width: 15%;vertical-align: middle;text-align: right;padding-right: 10px\">
                                                        <label style=\"font-size: 20px;\">{{ item.seance.calendrie.date|date('d M') }}</label><label style=\"font-size: 20px;\">{{ item.seance.calendrie.date|date('Y') }}</label> </td>
                                                    <td style=\"padding: 10px;width: 85%;text-align: left;border-left: 10px solid #83c1f4;background-color: #c1e9fe;\">
                                                        <label style=\"font-size: 18px\"><b>{{ item.seance.heurDebut|date('H:i') }} - {{ item.seance.heurFin|date('H:i') }}, {{ item.seance.calendrie.location.name }}</b></label>
                                                        <label>{{ item.seance.calendrie.location.adresse }}</label>
                                                        <label>Patient: {{ render(controller('AppointmentsBundle:Appointments:getpatientbyUser', {'id': item.patient.idtable})) }}, Reason: {{ item.reason.reason }}
                                                        </label>                                                    </td>
                                                </tr>
                                            {% else %}
                                            {% endif %}

                                        {% endfor %}

                                    </table>
                                    <h4>Old Appointments</h4>
                                    <table>
                                        {% for item in appointment %}
                                            {% if \"now\"|date(\"Y-m-d\") > item.seance.calendrie.date|date('Y-m-d')  %}
                                                <tr>
                                                    <td style=\"width: 15%;vertical-align: middle;text-align: right;padding-right: 10px\">
                                                        <label style=\"font-size: 20px;\">{{ item.seance.calendrie.date|date('d M') }}</label><label style=\"font-size: 20px;\">{{ item.seance.calendrie.date|date('Y') }}</label> </td>
                                                    <td style=\"padding: 10px;width: 85%;text-align: left;border-left: 10px solid #83c1f4;\">
                                                        <label style=\"font-size: 18px\"><b>{{ item.seance.heurDebut|date('H:i') }} - {{ item.seance.heurFin|date('H:i') }}, {{ item.seance.calendrie.location.name }}</b></label>
                                                        <label>{{ item.seance.calendrie.location.adresse }}</label>
                                                        <label>Patient: {{ render(controller('AppointmentsBundle:Appointments:getpatientbyUser', {'id': item.patient.idtable})) }}, Reason: {{ item.reason.reason }}
                                                        </label>
                                                    </td>
                                                </tr>
                                                {% else %}
                                            {% endif %}

                                        {% endfor %}

                                    </table>
                                {% else %}
                                    <p>You have no Appointments till now.</p>
                                {% endif %}


                                {#<div class=\"\" style=\"\">
                                    <div class=\"row\">
                                        <div class=\"col-md-1\" style=\"border: 1px solid skyblue;border-top:2px solid skyblue; padding:0px 20px 2px 20px; height: 70px;\">
                                            <p style=\"font-size: 19px; padding: 18px; color: #464e52;\">01</p>
                                        </div>
                                        <div class=\"col-md-11\" style=\"margin: 0px; padding: 0px; height: 70px; background-color: #83c1f4;\">
                                            <div class=\"col-md-12\" style=\"background-color: #c1e9fe; height: 64px; margin-left: 20px; width: 98%;\">
                                                <p style=\"margin: 0px; padding: 0; font-size: 16px; font-weight: bold;\">slakdjf</p>
                                                <p style=\"margin: 0px; padding: 0;\">slakdjf</p>
                                                <p style=\"margin: 0px; padding: 0;\">slakdjf</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"row\">

                                        <div class=\"col-md-1\" style=\"border: 1px solid skyblue; padding:0px 20px 2px 20px; height: 65px;\">
                                            <p style=\"font-size: 19px; padding: 18px; color: #464e52;\">05</p>
                                        </div>
                                        <div class=\"col-md-11\" style=\"margin: 0px; padding: 0px; height: 64px;\">
                                            <div class=\"col-md-12\" style=\"eight: 64px; margin-left: 20px; width: 98%;\">
                                                <p></p>
                                                <p></p>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>

                                </div>#}
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </main>


        {% include ('default/footer.html.twig') %}
    {% endblock %}
{% endif %}
", "AppointmentsBundle:Appointments:display.html.twig", "C:\\xampp\\htdocs\\VaranMedical\\src\\AppointmentsBundle/Resources/views/Appointments/display.html.twig");
    }
}
