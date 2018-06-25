<?php

/* user/profil.html.twig */
class __TwigTemplate_d8660b2a3871650660aa366bcd041a475d1ba02987abcd4bb7bcd0540c49ab1b extends Twig_Template
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
        $__internal_3a1c0db5be326a1683ad214b5ccac90b0d05c1d836bc76ec26986275a6ec87d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a1c0db5be326a1683ad214b5ccac90b0d05c1d836bc76ec26986275a6ec87d4->enter($__internal_3a1c0db5be326a1683ad214b5ccac90b0d05c1d836bc76ec26986275a6ec87d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profil.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->loadTemplate("base.html.twig", "user/profil.html.twig", 2)->display($context);
        // line 3
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 4
            $this->displayBlock('body', $context, $blocks);
        }
        
        $__internal_3a1c0db5be326a1683ad214b5ccac90b0d05c1d836bc76ec26986275a6ec87d4->leave($__internal_3a1c0db5be326a1683ad214b5ccac90b0d05c1d836bc76ec26986275a6ec87d4_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_7ee75dc0a733b6f96639ebea72ae2b775a7863cc41982a5f43d610dd27703696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ee75dc0a733b6f96639ebea72ae2b775a7863cc41982a5f43d610dd27703696->enter($__internal_7ee75dc0a733b6f96639ebea72ae2b775a7863cc41982a5f43d610dd27703696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
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
        // line 23
        $this->loadTemplate("default/header.html.twig", "user/profil.html.twig", 23)->display($context);
        // line 24
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
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/thumbnails/img-20.jpg"), "html", null, true);
        echo "\" alt=\"image description\"></a>
                                    ";
        // line 36
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "verifier", array()) == 1)) {
            // line 37
            echo "                                    <figcaption>
                                        <a class=\"tg-usericon tg-iconvarified\" href=\"#\">
                                            <em class=\"tg-usericonholder\">
                                                <i class=\"fa fa-shield\"></i>
                                                <span>";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("verified"), "html", null, true);
            echo "</span>
                                            </em>
                                        </a>
                                    </figcaption>
                                    ";
        }
        // line 46
        echo "                                </figure>
                                <div class=\"tg-directposthead\">
                                    <h3><a href=\"#\">Dr. ";
        // line 48
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
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profilEdit", array("doctor" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "idTable", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mis à jour"), "html", null, true);
        echo "</a> </div>
                                ";
        // line 56
        $this->loadTemplate("profilDoctorNav.html.twig", "user/profil.html.twig", 56)->display($context);
        // line 57
        echo "                        </div>
                    </div>
                    <div class=\"col-lg-9 col-md-8 col-sm-8 col-xs-12 pull-right\">
                        <div class=\"tg-dashboardtabs\">
                            <ul class=\"tg-dashboardtabnav\" role=\"tablist\">
                                <li role=\"presentation\" class=\"active\"> <a href=\"#overview\" aria-controls=\"overview\" role=\"tab\" data-toggle=\"tab\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Overview"), "html", null, true);
        echo "</a> </li>
                                <li role=\"presentation\"> <a href=\"#services\" aria-controls=\"services\" role=\"tab\" data-toggle=\"tab\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Services"), "html", null, true);
        echo "</a> </li>
                                <li role=\"presentation\"> <a href=\"#addphotos\" aria-controls=\"addphotos\" role=\"tab\" data-toggle=\"tab\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Photos"), "html", null, true);
        echo "(en construction)</a> </li>
                            </ul>
                            <div class=\"tab-content tg-dashboardtabcontent\">
                                <div role=\"tabpanel\" class=\"tab-pane active\" id=\"overview\">
                                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("DoctorsBundle:Doctors:getDoctorSpecialities", array("doctor" => $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "id", array()))));
        echo "
                                    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("DoctorsBundle:Educations:getDoctorEducation", array("doctor" => $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "id", array()))));
        echo "
                                    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("DoctorsBundle:Certifications:getDoctorCertification", array("doctor" => $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "id", array()))));
        echo "
                                    ";
        // line 71
        if ($this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "professionalStatement", array())) {
            // line 72
            echo "                                        <div class=\"tg-dashboardbox\">
                                            <div class=\"tg-dashboardboxtitle\">
                                                <h2><i class=\"fa fa-user\"></i> ";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Professional Statement"), "html", null, true);
            echo "</h2>
                                            </div>
                                            <div class=\"tg-box tg-basicinformation\">
                                                <div class=\"row tg-rowmargin\">
                                                    ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "professionalStatement", array()), "html", null, true);
            echo "
                                                </div>
                                            </div>
                                        </div>
                                    ";
        }
        // line 83
        echo "
                                    <div class=\"tg-updateall\"> <span class=\"tg-note\">* Click sur <strong>Mis à jour</strong> pour modifier ou mettre à jour vos informations.</span>
                                    </div>
                                </div>
                                <div role=\"tabpanel\" class=\"tab-pane\" id=\"services\">
                                    <div class=\"tg-dashboardbox tg-profilesettings\">
                                        ";
        // line 89
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("DoctorsBundle:Services:index", array("doctor" => $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "id", array()))));
        echo "
                                    </div>
                                    <div class=\"tg-updateall\"> <span class=\"tg-note\">* Click <strong>invoices settings</strong> to update latest added detail (s).</span>
                                    </div>
                                </div>
                                <div role=\"tabpanel\" class=\"tab-pane\" id=\"addphotos\">
                                    <div class=\"tg-dashboardbox\">
                                        <div class=\"tg-dashboardboxtitle\">
                                            <h2>Uploaded Photos</h2>
                                        </div>
                                        <div class=\"tg-box tg-uploadedphotos\">
                                            <ul class=\"tg-uploadedimggallery\">
                                                <li>
                                                    <div class=\"tg-galleryimg\">
                                                        <figure> <img src=\"images/thumbnails/img-01.jpg\" alt=\"image description\">
                                                            <figcaption><i class=\"fa fa-close\"></i></figcaption>
                                                        </figure>
                                                        <span class=\"tg-filename\">img-01.jpg</span> </div>
                                                </li>
                                                <li>
                                                    <div class=\"tg-galleryimg tg-uploading\">
                                                        <figure> <img src=\"images/thumbnails/img-15.jpg\" alt=\"image description\"> <span class=\"tg-loader\"><i class=\"fa fa-spinner\"></i></span> <span class=\"tg-uploadingbar\"></span> </figure>
                                                        <span class=\"tg-filename\">file name</span> </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--************************************
            Main End
    *************************************-->

</div>
<!--************************************
        Wrapper End
*************************************-->
";
        // line 133
        $this->loadTemplate("default/footer.html.twig", "user/profil.html.twig", 133)->display($context);
        
        $__internal_7ee75dc0a733b6f96639ebea72ae2b775a7863cc41982a5f43d610dd27703696->leave($__internal_7ee75dc0a733b6f96639ebea72ae2b775a7863cc41982a5f43d610dd27703696_prof);

    }

    public function getTemplateName()
    {
        return "user/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 133,  185 => 89,  177 => 83,  169 => 78,  162 => 74,  158 => 72,  156 => 71,  152 => 70,  148 => 69,  144 => 68,  137 => 64,  133 => 63,  129 => 62,  122 => 57,  120 => 56,  114 => 55,  102 => 48,  98 => 46,  90 => 41,  84 => 37,  82 => 36,  78 => 35,  65 => 24,  63 => 23,  43 => 5,  30 => 4,  28 => 3,  26 => 2,  23 => 1,);
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
                                <a class=\"tg-btn tg-btn-lg\" href=\"{{ path('user_profilEdit', {'doctor': app.user.idTable }) }}\">{{ 'Mis à jour'|trans }}</a> </div>
                                {% include('profilDoctorNav.html.twig') %}
                        </div>
                    </div>
                    <div class=\"col-lg-9 col-md-8 col-sm-8 col-xs-12 pull-right\">
                        <div class=\"tg-dashboardtabs\">
                            <ul class=\"tg-dashboardtabnav\" role=\"tablist\">
                                <li role=\"presentation\" class=\"active\"> <a href=\"#overview\" aria-controls=\"overview\" role=\"tab\" data-toggle=\"tab\">{{ 'Overview'|trans }}</a> </li>
                                <li role=\"presentation\"> <a href=\"#services\" aria-controls=\"services\" role=\"tab\" data-toggle=\"tab\">{{ 'Services'|trans }}</a> </li>
                                <li role=\"presentation\"> <a href=\"#addphotos\" aria-controls=\"addphotos\" role=\"tab\" data-toggle=\"tab\">{{ 'Photos'|trans }}(en construction)</a> </li>
                            </ul>
                            <div class=\"tab-content tg-dashboardtabcontent\">
                                <div role=\"tabpanel\" class=\"tab-pane active\" id=\"overview\">
                                    {{ render(controller('DoctorsBundle:Doctors:getDoctorSpecialities', { 'doctor': doctor.id })) }}
                                    {{ render(controller('DoctorsBundle:Educations:getDoctorEducation', { 'doctor': doctor.id })) }}
                                    {{ render(controller('DoctorsBundle:Certifications:getDoctorCertification', { 'doctor': doctor.id })) }}
                                    {% if doctor.professionalStatement %}
                                        <div class=\"tg-dashboardbox\">
                                            <div class=\"tg-dashboardboxtitle\">
                                                <h2><i class=\"fa fa-user\"></i> {{ 'Professional Statement'|trans }}</h2>
                                            </div>
                                            <div class=\"tg-box tg-basicinformation\">
                                                <div class=\"row tg-rowmargin\">
                                                    {{ doctor.professionalStatement }}
                                                </div>
                                            </div>
                                        </div>
                                    {% endif %}

                                    <div class=\"tg-updateall\"> <span class=\"tg-note\">* Click sur <strong>Mis à jour</strong> pour modifier ou mettre à jour vos informations.</span>
                                    </div>
                                </div>
                                <div role=\"tabpanel\" class=\"tab-pane\" id=\"services\">
                                    <div class=\"tg-dashboardbox tg-profilesettings\">
                                        {{ render(controller('DoctorsBundle:Services:index', {'doctor':doctor.id})) }}
                                    </div>
                                    <div class=\"tg-updateall\"> <span class=\"tg-note\">* Click <strong>invoices settings</strong> to update latest added detail (s).</span>
                                    </div>
                                </div>
                                <div role=\"tabpanel\" class=\"tab-pane\" id=\"addphotos\">
                                    <div class=\"tg-dashboardbox\">
                                        <div class=\"tg-dashboardboxtitle\">
                                            <h2>Uploaded Photos</h2>
                                        </div>
                                        <div class=\"tg-box tg-uploadedphotos\">
                                            <ul class=\"tg-uploadedimggallery\">
                                                <li>
                                                    <div class=\"tg-galleryimg\">
                                                        <figure> <img src=\"images/thumbnails/img-01.jpg\" alt=\"image description\">
                                                            <figcaption><i class=\"fa fa-close\"></i></figcaption>
                                                        </figure>
                                                        <span class=\"tg-filename\">img-01.jpg</span> </div>
                                                </li>
                                                <li>
                                                    <div class=\"tg-galleryimg tg-uploading\">
                                                        <figure> <img src=\"images/thumbnails/img-15.jpg\" alt=\"image description\"> <span class=\"tg-loader\"><i class=\"fa fa-spinner\"></i></span> <span class=\"tg-uploadingbar\"></span> </figure>
                                                        <span class=\"tg-filename\">file name</span> </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--************************************
            Main End
    *************************************-->

</div>
<!--************************************
        Wrapper End
*************************************-->
{% include ('default/footer.html.twig') %}
{% endblock %}
{% endif %}", "user/profil.html.twig", "C:\\xampp\\htdocs\\VaranMedical\\app\\Resources\\views\\user\\profil.html.twig");
    }
}
