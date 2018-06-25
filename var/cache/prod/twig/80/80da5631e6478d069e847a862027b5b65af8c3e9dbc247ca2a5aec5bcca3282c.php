<?php

/* appointments/appointmentsByUser.html.twig */
class __TwigTemplate_b6f751306a5d2d36ebe859cecd68f1e2b5bf16c234ecaef5389bd884d82a8d47 extends Twig_Template
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
        $__internal_61186f245995d6870f01509115192dffc940a59712b87eb5d001c35238a7e506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61186f245995d6870f01509115192dffc940a59712b87eb5d001c35238a7e506->enter($__internal_61186f245995d6870f01509115192dffc940a59712b87eb5d001c35238a7e506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "appointments/appointmentsByUser.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->loadTemplate("base.html.twig", "appointments/appointmentsByUser.html.twig", 2)->display($context);
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_61186f245995d6870f01509115192dffc940a59712b87eb5d001c35238a7e506->leave($__internal_61186f245995d6870f01509115192dffc940a59712b87eb5d001c35238a7e506_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_6ec3c40cdbfcb8a9833aaa768ec9dcbd6847dac2a24e6e592a3a1fdd230ee246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ec3c40cdbfcb8a9833aaa768ec9dcbd6847dac2a24e6e592a3a1fdd230ee246->enter($__internal_6ec3c40cdbfcb8a9833aaa768ec9dcbd6847dac2a24e6e592a3a1fdd230ee246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

    <body class=\"tg-home tg-login\">
    <!--[if lt IE 8]>
    <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!--************************************
            Preloader Start
    *************************************-->

    <!--************************************
            Preloader End
    *************************************-->

    <!--************************************
            Wrapper Start
    *************************************-->
    <div id=\"tg-wrapper\" class=\"tg-wrapper tg-haslayout\">
        ";
        // line 22
        $this->loadTemplate("default/header.html.twig", "appointments/appointmentsByUser.html.twig", 22)->display($context);
        // line 23
        echo "
        <!--************************************
            Main Start
    *************************************-->
        <main id=\"tg-main\" class=\"tg-main tg-haslayout\">
            <div class=\"container\">
                <div class=\"row\">
                    <div id=\"tg-twocolumns\" class=\"tg-twocolumns\">
                        <div class=\"col-lg-3 col-md-4 col-sm-4 col-xs-12 pull-left\">
                            <div class=\"tg-widgetdashboard\">
                                <div class=\"tg-widgetprofile\">
                                    <figure class=\"tg-directpostimg\"> <a href=\"#\"><img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/thumbnails/img-20.jpg"), "html", null, true);
        echo "\" alt=\"image description\"></a>
                                        ";
        // line 35
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "verifier", array()) == 1)) {
            // line 36
            echo "                                            <figcaption>
                                                <a class=\"tg-usericon tg-iconvarified\" href=\"#\">
                                                    <em class=\"tg-usericonholder\">
                                                        <i class=\"fa fa-shield\"></i>
                                                        <span>";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("verified"), "html", null, true);
            echo "</span>
                                                    </em>
                                                </a>
                                            </figcaption>
                                        ";
        }
        // line 45
        echo "                                    </figure>
                                    <div class=\"tg-directposthead\">
                                        <h3><a href=\"#\">Dr. ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["patient"] ?? $this->getContext($context, "patient")), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["patient"] ?? $this->getContext($context, "patient")), "lastName", array()), "html", null, true);
        echo "</a></h3>
                                        <div class=\"tg-subjects\"></div>
                                        <ul class=\"tg-metadata\">
                                            <li><span class=\"tg-stars\"><span></span></span></li>
                                            <li><a href=\"#\"><i class=\"fa fa-thumbs-o-up\"></i> 99% (1009 votes)</a></li>
                                        </ul>
                                    </div>
                                    <a class=\"tg-btn tg-btn-lg\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profil", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "idTable", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Profile"), "html", null, true);
        echo "</a> </div>
                                ";
        // line 55
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_DOCTOR")) {
            // line 56
            echo "                                    ";
            $this->loadTemplate("profilDoctorNav.html.twig", "appointments/appointmentsByUser.html.twig", 56)->display($context);
            // line 57
            echo "                                ";
        }
        // line 58
        echo "                                ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PATIENT")) {
            // line 59
            echo "                                    ";
            $this->loadTemplate("profilPatientNav.html.twig", "appointments/appointmentsByUser.html.twig", 59)->display($context);
            // line 60
            echo "                                ";
        }
        // line 61
        echo "                            </div>
                        </div>
                        <div class=\"col-lg-9 col-md-8 col-sm-8 col-xs-12 pull-right\">
                          <h4>Up Coming Appointments</h4>
                          <table>
                              ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["appointments"] ?? $this->getContext($context, "appointments")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 67
            echo "                                  ";
            if ((twig_date_format_filter($this->env, "now", "Y-m-d") < twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "seance", array()), "calendrie", array()), "date", array()), "Y-m-d"))) {
                // line 68
                echo "                                      <tr>
                                          <td style=\"width: 15%;vertical-align: middle;text-align: right;padding-right: 10px\">
                                              <label style=\"font-size: 20px;\">";
                // line 70
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "seance", array()), "calendrie", array()), "date", array()), "d M"), "html", null, true);
                echo "</label><label style=\"font-size: 20px;\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "seance", array()), "calendrie", array()), "date", array()), "Y"), "html", null, true);
                echo "</label> </td>
                                          <td style=\"padding: 10px;width: 85%;text-align: left;border-left: 10px solid #83c1f4;background-color: #c1e9fe;\">
                                              <label style=\"font-size: 18px\"><b>";
                // line 72
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "seance", array()), "heurDebut", array()), "H:i"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "seance", array()), "heurFin", array()), "H:i"), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "seance", array()), "calendrie", array()), "location", array()), "name", array()), "html", null, true);
                echo "</b></label>
                                              <label>";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "seance", array()), "calendrie", array()), "location", array()), "adresse", array()), "html", null, true);
                echo "</label>
                                              <label>";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "reason", array()), "reason", array()), "html", null, true);
                echo " - </label>
                                          </td>
                                      </tr>
                                  ";
            } else {
                // line 78
                echo "                                  ";
            }
            // line 79
            echo "
                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "
                          </table>
                            <div class=\"tg-dashboardappointments\">
                                <div class=\"tg-dashboardbox\">
                                    <div class=\"tg-dashboardboxtitle\">
                                        <h2>";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your Appointments"), "html", null, true);
        echo "</h2>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-lg-4 text-center\" style=\"background-color: #6cbf6d; color: #ffffff\">
                                            Confirmer
                                        </div>
                                        <div class=\"col-lg-4 text-center\" style=\"background-color: #f1b55f; color: #ffffff\">
                                            Non confirmer
                                        </div>
                                        <div class=\"col-lg-4 text-center\" style=\"background-color: #db6460; color: #ffffff\">
                                            Annuler
                                        </div>
                                    </div>
                                    <div class=\"tg-favoritlistingbox monthly\" id=\"mycalendar\">

                                    </div>
                                    <script type=\"text/javascript\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/Calendar/js/jquery.js"), "html", null, true);
        echo "\"></script>
                                    <script type=\"text/javascript\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/Calendar/js/monthly.js"), "html", null, true);
        echo "\"></script>
                                    <script type=\"text/javascript\">

                                        var sampleEvents = {
                                            \"monthly\": [
                                                ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["appointments"] ?? $this->getContext($context, "appointments")));
        foreach ($context['_seq'] as $context["_key"] => $context["appointment"]) {
            // line 109
            echo "                                                {
                                                    \"id\": ";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["appointment"], "id", array()), "html", null, true);
            echo ",
                                                    \"name\": \"";
            // line 111
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["appointment"], "seance", array()), "heurDebut", array()), "H:i"), "html", null, true);
            echo " <br> Docteur : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["appointment"], "seance", array()), "calendrie", array()), "location", array()), "doctor", array()), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["appointment"], "seance", array()), "calendrie", array()), "location", array()), "doctor", array()), "lastName", array()), "html", null, true);
            echo " <br> Raison: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["appointment"], "reason", array()), "reason", array()), "html", null, true);
            echo "\",
                                                    \"startdate\": \"";
            // line 112
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["appointment"], "seance", array()), "calendrie", array()), "date", array()), "Y-m-d"), "html", null, true);
            echo "\",
                                                    \"enddate\": \"\",
                                                    ";
            // line 114
            if ((twig_date_format_filter($this->env, "now", "Y-m-d") > twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["appointment"], "seance", array()), "calendrie", array()), "date", array()), "Y-m-d"))) {
                // line 115
                echo "                                                    \"color\": \"#dfe0d8\",
                                                    ";
            } else {
                // line 117
                echo "                                                        ";
                if (($this->getAttribute($context["appointment"], "etat", array()) == "annuler")) {
                    // line 118
                    echo "                                                        \"color\": \"#db6460\",
                                                        ";
                } elseif (($this->getAttribute(                // line 119
$context["appointment"], "etat", array()) == "confirme")) {
                    // line 120
                    echo "                                                        \"color\": \"#6cbf6d\",
                                                        ";
                } elseif (($this->getAttribute(                // line 121
$context["appointment"], "etat", array()) == "non confirmer")) {
                    // line 122
                    echo "                                                        \"color\": \"#f1b55f\",
                                                        ";
                }
                // line 124
                echo "                                                    ";
            }
            // line 125
            echo "
                                                ";
            // line 126
            if ((($this->getAttribute($context["appointment"], "etat", array()) != "annuler") && (twig_date_format_filter($this->env, "now", "Y-m-d") <= twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["appointment"], "seance", array()), "calendrie", array()), "date", array()), "Y-m-d")))) {
                // line 127
                echo "                                                    \"url\": \"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appointments_show", array("id" => $this->getAttribute($context["appointment"], "id", array()))), "html", null, true);
                echo "\",
                                                ";
            } else {
                // line 129
                echo "                                                    \"url\": \"\",
                                                ";
            }
            // line 131
            echo "                                                },
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appointment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "                                            ]
                                        };
                                    </script>
                                </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <!--************************************
            Main End
    *************************************-->
    <!--************************************
            Light Box Start
    *************************************-->


    <!--************************************
                Light Box End
    *************************************-->

    </div>
    <!--************************************
            Wrapper End
    *************************************-->
    </body>
    ";
        // line 164
        $this->loadTemplate("default/footer.html.twig", "appointments/appointmentsByUser.html.twig", 164)->display($context);
        // line 165
        echo "
    <script>
        \$(document).ready(function () {
            \$('#mycalendar').monthly({
                mode: 'event',
                dataType: 'json',
                events: sampleEvents
            });

            \$(\".annuler\").click(function () {
                if (!confirm('Vous voulez vraiment annuler se rendez-vous')) return false;
                var appointment = \$(this).attr('id');
                var type = \$(this).attr('type');
                var URL = \"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appointments_cancel", array("id" => "sss", "type" => "fff")), "html", null, true);
        echo "\";
                URL = URL.replace(/sss/g, appointment);
                URL = URL.replace(/fff/g, type);
                console.log(URL);
                \$.ajax({
                    type: \"GET\",
                    url: URL,
                    cache: false,
                    success: function (response) {
                        location.reload();
                        return true;
                    }
                });
            });
        });
    </script>

";
        
        $__internal_6ec3c40cdbfcb8a9833aaa768ec9dcbd6847dac2a24e6e592a3a1fdd230ee246->leave($__internal_6ec3c40cdbfcb8a9833aaa768ec9dcbd6847dac2a24e6e592a3a1fdd230ee246_prof);

    }

    public function getTemplateName()
    {
        return "appointments/appointmentsByUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 178,  335 => 165,  333 => 164,  300 => 133,  293 => 131,  289 => 129,  283 => 127,  281 => 126,  278 => 125,  275 => 124,  271 => 122,  269 => 121,  266 => 120,  264 => 119,  261 => 118,  258 => 117,  254 => 115,  252 => 114,  247 => 112,  237 => 111,  233 => 110,  230 => 109,  226 => 108,  218 => 103,  214 => 102,  195 => 86,  188 => 81,  181 => 79,  178 => 78,  171 => 74,  167 => 73,  159 => 72,  152 => 70,  148 => 68,  145 => 67,  141 => 66,  134 => 61,  131 => 60,  128 => 59,  125 => 58,  122 => 57,  119 => 56,  117 => 55,  111 => 54,  99 => 47,  95 => 45,  87 => 40,  81 => 36,  79 => 35,  75 => 34,  62 => 23,  60 => 22,  40 => 4,  28 => 3,  26 => 2,  23 => 1,);
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
{% block body %}


    <body class=\"tg-home tg-login\">
    <!--[if lt IE 8]>
    <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!--************************************
            Preloader Start
    *************************************-->

    <!--************************************
            Preloader End
    *************************************-->

    <!--************************************
            Wrapper Start
    *************************************-->
    <div id=\"tg-wrapper\" class=\"tg-wrapper tg-haslayout\">
        {% include ('default/header.html.twig') %}

        <!--************************************
            Main Start
    *************************************-->
        <main id=\"tg-main\" class=\"tg-main tg-haslayout\">
            <div class=\"container\">
                <div class=\"row\">
                    <div id=\"tg-twocolumns\" class=\"tg-twocolumns\">
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
                                        <h3><a href=\"#\">Dr. {{ patient.firstName }} {{ patient.lastName }}</a></h3>
                                        <div class=\"tg-subjects\"></div>
                                        <ul class=\"tg-metadata\">
                                            <li><span class=\"tg-stars\"><span></span></span></li>
                                            <li><a href=\"#\"><i class=\"fa fa-thumbs-o-up\"></i> 99% (1009 votes)</a></li>
                                        </ul>
                                    </div>
                                    <a class=\"tg-btn tg-btn-lg\" href=\"{{ path('user_profil', {'id': app.user.idTable }) }}\">{{ 'Profile'|trans }}</a> </div>
                                {% if is_granted('ROLE_DOCTOR') %}
                                    {% include('profilDoctorNav.html.twig') %}
                                {% endif %}
                                {% if is_granted('ROLE_PATIENT') %}
                                    {% include('profilPatientNav.html.twig') %}
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"col-lg-9 col-md-8 col-sm-8 col-xs-12 pull-right\">
                          <h4>Up Coming Appointments</h4>
                          <table>
                              {% for item in appointments %}
                                  {% if \"now\"|date(\"Y-m-d\") < item.seance.calendrie.date|date('Y-m-d')  %}
                                      <tr>
                                          <td style=\"width: 15%;vertical-align: middle;text-align: right;padding-right: 10px\">
                                              <label style=\"font-size: 20px;\">{{ item.seance.calendrie.date|date('d M') }}</label><label style=\"font-size: 20px;\">{{ item.seance.calendrie.date|date('Y') }}</label> </td>
                                          <td style=\"padding: 10px;width: 85%;text-align: left;border-left: 10px solid #83c1f4;background-color: #c1e9fe;\">
                                              <label style=\"font-size: 18px\"><b>{{ item.seance.heurDebut|date('H:i') }} - {{ item.seance.heurFin|date('H:i') }}, {{ item.seance.calendrie.location.name }}</b></label>
                                              <label>{{ item.seance.calendrie.location.adresse }}</label>
                                              <label>{{ item.reason.reason }} - </label>
                                          </td>
                                      </tr>
                                  {% else %}
                                  {% endif %}

                              {% endfor %}

                          </table>
                            <div class=\"tg-dashboardappointments\">
                                <div class=\"tg-dashboardbox\">
                                    <div class=\"tg-dashboardboxtitle\">
                                        <h2>{{ 'Your Appointments'|trans }}</h2>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-lg-4 text-center\" style=\"background-color: #6cbf6d; color: #ffffff\">
                                            Confirmer
                                        </div>
                                        <div class=\"col-lg-4 text-center\" style=\"background-color: #f1b55f; color: #ffffff\">
                                            Non confirmer
                                        </div>
                                        <div class=\"col-lg-4 text-center\" style=\"background-color: #db6460; color: #ffffff\">
                                            Annuler
                                        </div>
                                    </div>
                                    <div class=\"tg-favoritlistingbox monthly\" id=\"mycalendar\">

                                    </div>
                                    <script type=\"text/javascript\" src=\"{{ asset('assets/Calendar/js/jquery.js') }}\"></script>
                                    <script type=\"text/javascript\" src=\"{{ asset('assets/Calendar/js/monthly.js') }}\"></script>
                                    <script type=\"text/javascript\">

                                        var sampleEvents = {
                                            \"monthly\": [
                                                {% for appointment in appointments %}
                                                {
                                                    \"id\": {{ appointment.id }},
                                                    \"name\": \"{{ appointment.seance.heurDebut|date('H:i') }} <br> Docteur : {{ appointment.seance.calendrie.location.doctor.firstName }} {{ appointment.seance.calendrie.location.doctor.lastName }} <br> Raison: {{ appointment.reason.reason }}\",
                                                    \"startdate\": \"{{ appointment.seance.calendrie.date|date('Y-m-d') }}\",
                                                    \"enddate\": \"\",
                                                    {% if \"now\"|date('Y-m-d')  > appointment.seance.calendrie.date|date('Y-m-d') %}
                                                    \"color\": \"#dfe0d8\",
                                                    {% else %}
                                                        {% if appointment.etat == 'annuler' %}
                                                        \"color\": \"#db6460\",
                                                        {% elseif appointment.etat == 'confirme' %}
                                                        \"color\": \"#6cbf6d\",
                                                        {% elseif appointment.etat == 'non confirmer' %}
                                                        \"color\": \"#f1b55f\",
                                                        {% endif %}
                                                    {% endif %}

                                                {% if appointment.etat != 'annuler' and \"now\"|date('Y-m-d')  <= appointment.seance.calendrie.date|date('Y-m-d') %}
                                                    \"url\": \"{{ path('appointments_show', {'id': appointment.id}) }}\",
                                                {% else %}
                                                    \"url\": \"\",
                                                {% endif %}
                                                },
                                                {% endfor %}
                                            ]
                                        };
                                    </script>
                                </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <!--************************************
            Main End
    *************************************-->
    <!--************************************
            Light Box Start
    *************************************-->


    <!--************************************
                Light Box End
    *************************************-->

    </div>
    <!--************************************
            Wrapper End
    *************************************-->
    </body>
    {% include ('default/footer.html.twig') %}

    <script>
        \$(document).ready(function () {
            \$('#mycalendar').monthly({
                mode: 'event',
                dataType: 'json',
                events: sampleEvents
            });

            \$(\".annuler\").click(function () {
                if (!confirm('Vous voulez vraiment annuler se rendez-vous')) return false;
                var appointment = \$(this).attr('id');
                var type = \$(this).attr('type');
                var URL = \"{{ path('appointments_cancel', {'id' : 'sss', 'type':'fff'}) }}\";
                URL = URL.replace(/sss/g, appointment);
                URL = URL.replace(/fff/g, type);
                console.log(URL);
                \$.ajax({
                    type: \"GET\",
                    url: URL,
                    cache: false,
                    success: function (response) {
                        location.reload();
                        return true;
                    }
                });
            });
        });
    </script>

{% endblock %}
", "appointments/appointmentsByUser.html.twig", "C:\\xampp\\htdocs\\VaranMedical\\app\\Resources\\views\\appointments\\appointmentsByUser.html.twig");
    }
}
