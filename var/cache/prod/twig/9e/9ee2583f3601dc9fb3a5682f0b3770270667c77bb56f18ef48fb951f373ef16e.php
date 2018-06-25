<?php

/* DoctorsBundle:Patient:display.html.twig */
class __TwigTemplate_a04adc18f55e1df1d8a4eb47fd47c91b91780c8989b1edef1448f373c2fdc18b extends Twig_Template
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
        $__internal_a98b6d1df95637919c8b2b241e6600020be0105bde5b8dffa5447da89528bdfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a98b6d1df95637919c8b2b241e6600020be0105bde5b8dffa5447da89528bdfd->enter($__internal_a98b6d1df95637919c8b2b241e6600020be0105bde5b8dffa5447da89528bdfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DoctorsBundle:Patient:display.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->loadTemplate("base.html.twig", "DoctorsBundle:Patient:display.html.twig", 2)->display($context);
        // line 3
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 4
            echo "    ";
            $this->displayBlock('body', $context, $blocks);
        }
        
        $__internal_a98b6d1df95637919c8b2b241e6600020be0105bde5b8dffa5447da89528bdfd->leave($__internal_a98b6d1df95637919c8b2b241e6600020be0105bde5b8dffa5447da89528bdfd_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_5227441f46e3f282f6b133c9ea9ed54affc20d69063d879d4759027eee679cf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5227441f46e3f282f6b133c9ea9ed54affc20d69063d879d4759027eee679cf4->enter($__internal_5227441f46e3f282f6b133c9ea9ed54affc20d69063d879d4759027eee679cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("default/header.html.twig", "DoctorsBundle:Patient:display.html.twig", 12)->display($context);
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
        $this->loadTemplate("profilDoctorNav.html.twig", "DoctorsBundle:Patient:display.html.twig", 45)->display($context);
        // line 46
        echo "                                </div>
                            </div>
                            <div class=\"col-lg-9 col-md-8 col-sm-8 col-xs-12 pull-right\">
                                <h3>Your Patients</h3>
                                    ";
        // line 50
        if ((twig_length_filter($this->env, ($context["dp"] ?? $this->getContext($context, "dp"))) != 0)) {
            // line 51
            echo "                                      <table>
                                          <thead>
                                            <tr>
                                              <th>#</th>
                                              <th>Patient Name</th>
                                              <th>Review</th>
                                              <th>Status</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            ";
            // line 61
            $context["count"] = 1;
            // line 62
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["dp"] ?? $this->getContext($context, "dp")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 63
                echo "                                            <tr>
                                              <td>";
                // line 64
                echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                echo "</td>
                                              <td>";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "patient", array()), "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "patient", array()), "lastname", array()), "html", null, true);
                echo "</td>
                                              <td>";
                // line 66
                if (($this->getAttribute($context["item"], "review", array()) == "")) {
                    echo " <label class=\"label label-warning\">Review not given</label> ";
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "review", array()), "html", null, true);
                    echo " ";
                }
                echo " </td>
                                              <td> <a href=\"";
                // line 67
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("patient_doctor_display_changestatus");
                echo "?id=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\">";
                if (($this->getAttribute($context["item"], "block", array()) == 1)) {
                    echo "unblock";
                } else {
                    echo "block";
                }
                echo "</a></td>
                                            </tr>
                                            ";
                // line 69
                $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) + 1);
                // line 70
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "
                                          </tbody>
                                      </table>

                                    ";
        }
        // line 76
        echo "
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </main>


        ";
        // line 85
        $this->loadTemplate("default/footer.html.twig", "DoctorsBundle:Patient:display.html.twig", 85)->display($context);
        // line 86
        echo "    ";
        
        $__internal_5227441f46e3f282f6b133c9ea9ed54affc20d69063d879d4759027eee679cf4->leave($__internal_5227441f46e3f282f6b133c9ea9ed54affc20d69063d879d4759027eee679cf4_prof);

    }

    public function getTemplateName()
    {
        return "DoctorsBundle:Patient:display.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 86,  202 => 85,  191 => 76,  184 => 71,  178 => 70,  176 => 69,  163 => 67,  153 => 66,  147 => 65,  143 => 64,  140 => 63,  135 => 62,  133 => 61,  121 => 51,  119 => 50,  113 => 46,  111 => 45,  105 => 44,  93 => 37,  89 => 35,  81 => 30,  75 => 26,  73 => 25,  69 => 24,  56 => 13,  54 => 12,  47 => 7,  44 => 5,  30 => 4,  28 => 3,  26 => 2,  23 => 1,);
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
                                <h3>Your Patients</h3>
                                    {% if dp|length != 0 %}
                                      <table>
                                          <thead>
                                            <tr>
                                              <th>#</th>
                                              <th>Patient Name</th>
                                              <th>Review</th>
                                              <th>Status</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            {% set count = 1 %}
                                            {% for item in dp %}
                                            <tr>
                                              <td>{{ count }}</td>
                                              <td>{{ item.patient.firstname }} {{ item.patient.lastname }}</td>
                                              <td>{% if item.review == \"\" %} <label class=\"label label-warning\">Review not given</label> {% else %} {{ item.review }} {% endif %} </td>
                                              <td> <a href=\"{{ path('patient_doctor_display_changestatus') }}?id={{ item.id }}\">{% if item.block == 1 %}unblock{% else %}block{% endif %}</a></td>
                                            </tr>
                                            {% set count = count + 1 %}
                                            {% endfor %}

                                          </tbody>
                                      </table>

                                    {% endif %}

                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </main>


        {% include ('default/footer.html.twig') %}
    {% endblock %}
{% endif %}
", "DoctorsBundle:Patient:display.html.twig", "C:\\xampp\\htdocs\\VaranMedical\\src\\DoctorsBundle/Resources/views/Patient/display.html.twig");
    }
}
