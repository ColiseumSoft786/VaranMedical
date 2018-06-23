<?php

/* default/header.html.twig */
class __TwigTemplate_cd2cf9c0a3e92be90bcb0514dd9f854d0385cc59de44853d70994e3ff8e7bdf3 extends Twig_Template
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
        $__internal_2101ab99c08887bf60e3dc3eccbf558f5782e7920a3332e33205b133094f722d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2101ab99c08887bf60e3dc3eccbf558f5782e7920a3332e33205b133094f722d->enter($__internal_2101ab99c08887bf60e3dc3eccbf558f5782e7920a3332e33205b133094f722d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/header.html.twig"));

        $__internal_6e2caab5fdf5f0e7a75cfe65c4224428f2be276d877097cebc644554618a0193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e2caab5fdf5f0e7a75cfe65c4224428f2be276d877097cebc644554618a0193->enter($__internal_6e2caab5fdf5f0e7a75cfe65c4224428f2be276d877097cebc644554618a0193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/header.html.twig"));

        // line 1
        echo "<!--************************************
\t\t\t\tHeader Start
\t\t*************************************-->
<header id=\"tg-header\" class=\"tg-header tg-haslayout\">
    <div class=\"tg-topbar\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-12\">
                    <span class=\"tg-quickadvice\">Obtenez un conseil rapide: <strong>(+33) 05 25 25 25 25</strong></span>
                    <ul class=\"tg-contactinfo\">
                        <li><a href=\"#\">contact@e-zeedoc.com</a></li>
                        <li><address>12 rue des Hetres 31100 Toulouse</address></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-xs-12\">
                <strong class=\"tg-logo\">
                    <a href=\"#\"><img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"image description\"></a>
                </strong>
                <div class=\"tg-navigationarea\">
                    <nav id=\"tg-nav\" class=\"tg-nav\">
                        <div class=\"navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#tg-navigation\" aria-expanded=\"false\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>
                        <div id=\"tg-navigation\" class=\"tg-navigation collapse navbar-collapse\">
                            <ul>
                                <li class=\"tg-hasdropdown\">
                                    <a href=\"#\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Categories"), "html", null, true);
        echo "</a>
                                    <ul class=\"tg-dropdownmenu\">
                                        <li><a href=\"#\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Doctors"), "html", null, true);
        echo "</a></li>
                                        <li><a href=\"#\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Hospitals"), "html", null, true);
        echo "</a></li>
                                        <li><a href=\"#\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Spas"), "html", null, true);
        echo "</a></li>
                                        <li><a href=\"#\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Pharmacies"), "html", null, true);
        echo "</a></li>
                                        <li><a href=\"#\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Labs"), "html", null, true);
        echo "</a></li>
                                        <li><a href=\"#\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Fitness"), "html", null, true);
        echo "</a></li>
                                        <li><a href=\"#\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Clinics"), "html", null, true);
        echo "</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"#\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("About"), "html", null, true);
        echo "</a></li>
                                <li><a href=\"#\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("How It Works"), "html", null, true);
        echo "?</a></li>
                                <li class=\"tg-hasdropdown\">

                                </li>
                            </ul>
                        </div>
                    </nav>
                    ";
        // line 56
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PATIENT") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_DOCTOR"))) {
            // line 57
            echo "                    <div class=\"tg-admin\">
                        <div class=\"tg-user\">
                            <div class=\"tg-dropdown\">
                                <figure class=\"tg-adminpic\">
                                    <a href=\"#\">
                                        ";
            // line 62
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PATIENT")) {
                // line 63
                echo "
                                                <img src=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/user.svg"), "html", null, true);
                echo "\" alt=\"\">

                                        ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_DOCTOR")) {
                // line 67
                echo "
                                        <img src=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/user.svg"), "html", null, true);
                echo "\" alt=\"\">
                                        ";
            }
            // line 70
            echo "                                    </a>
                                </figure>
                                <a href=\"javascript:void(0);\" class=\"tg-usermenu tg-btndropdown\">
                                    ";
            // line 73
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PATIENT")) {
                // line 74
                echo "                                        <em>";
                if ( !(null === $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()))) {
                    echo " ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("UserBundle:User:getPatientName", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "idTable", array()))));
                    echo " ";
                }
                echo "</em>

                                    ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_DOCTOR")) {
                // line 77
                echo "                                        <em>";
                if ( !(null === $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()))) {
                    echo " ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("UserBundle:User:getDoctorName", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "idTable", array()))));
                    echo " ";
                }
                echo "</em>

                                    ";
            }
            // line 80
            echo "                                </a>
                                <div class=\"dropdown-menu tg-dropdownbox tg-usermenu\">
                                    <ul>
                                        ";
            // line 83
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PATIENT")) {
                // line 84
                echo "                                        <li>
                                            <a href=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("patient_profil", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
                echo "\">
                                                <i class=\"fa fa-user\"></i>
                                                <span>";
                // line 87
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Profile"), "html", null, true);
                echo "</span>
                                            </a>
                                        </li>
                                        ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_DOCTOR")) {
                // line 91
                echo "                                        <li>
                                            <a href=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profil", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
                echo "\">
                                                <i class=\"fa fa-user\"></i>
                                               <span>";
                // line 94
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Profile"), "html", null, true);
                echo "</span>
                                            </a>
                                        </li>
                                        ";
            }
            // line 98
            echo "                                        <li>
                                            <a href=\"";
            // line 99
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                                                <i class=\"fa fa-sign-out\"></i>
                                                <span>Déconnexion</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        } else {
            // line 110
            echo "                        <button type=\"button\" class=\"tg-btn\" data-toggle=\"modal\" data-target=\"#loginModal\">Se connecter</button>
                    ";
        }
        // line 112
        echo "                </div>
            </div>
        </div>
    </div>
</header>
<!--************************************
        Header End
*************************************-->


<!--************************************
        Login modal start
*************************************-->

<div class=\"modal tg-modal loginModal fade\" id=\"loginModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog tg-modaldialog\">
        <div class=\"modal-content tg-modalcontent\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\"></span></button>
            <h2>Connectez-vous ou créez un compte</h2>
            <fieldset class=\"tg-formstepone tg-current\">
            ";
        // line 132
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("UserBundle:User:login"));
        echo "
            </fieldset>
            <fieldset class=\"tg-formsteptwo\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-sm-6 col-xs-6\">
                        <a href=\"";
        // line 137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("doctors_new");
        echo "\" style=\"text-decoration: none\">
                            <div class=\"tg-profilewidget tg-recommendation\">
                                <span class=\"tg-profilewidgeticon\">
                                    <img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/physician-icon-png-10.png"), "html", null, true);
        echo "\" alt=\"image description\">
                                </span>
                                <div class=\"tg-percentage\">
                                    ";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Doctors account"), "html", null, true);
        echo "</span>
                                </div>
                                <hr>
                                <div class=\"tg-description\">
                                    <p><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit </b>  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-md-6 col-sm-6 col-xs-6\">
                        <a href=\"";
        // line 153
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("patient_new");
        echo "\" style=\"text-decoration: none\">
                            <div class=\"tg-profilewidget tg-recommendation\">
                                <span class=\"tg-profilewidgeticon\">
                                    <img src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/Icons-Land-Medical-People-Patient-Male.ico"), "html", null, true);
        echo "\" alt=\"image description\">
                                </span>
                                <div class=\"tg-percentage\">
                                    <span>";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Patient account"), "html", null, true);
        echo "</span>
                                </div>
                                <hr>
                                <div class=\"tg-description\">
                                    <p><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit </b>  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
</div>
<!--************************************
        Login modal End
*************************************-->";
        
        $__internal_2101ab99c08887bf60e3dc3eccbf558f5782e7920a3332e33205b133094f722d->leave($__internal_2101ab99c08887bf60e3dc3eccbf558f5782e7920a3332e33205b133094f722d_prof);

        
        $__internal_6e2caab5fdf5f0e7a75cfe65c4224428f2be276d877097cebc644554618a0193->leave($__internal_6e2caab5fdf5f0e7a75cfe65c4224428f2be276d877097cebc644554618a0193_prof);

    }

    public function getTemplateName()
    {
        return "default/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 159,  291 => 156,  285 => 153,  272 => 143,  266 => 140,  260 => 137,  252 => 132,  230 => 112,  226 => 110,  212 => 99,  209 => 98,  202 => 94,  197 => 92,  194 => 91,  187 => 87,  182 => 85,  179 => 84,  177 => 83,  172 => 80,  161 => 77,  150 => 74,  148 => 73,  143 => 70,  138 => 68,  135 => 67,  129 => 64,  126 => 63,  124 => 62,  117 => 57,  115 => 56,  105 => 49,  101 => 48,  95 => 45,  91 => 44,  87 => 43,  83 => 42,  79 => 41,  75 => 40,  71 => 39,  66 => 37,  48 => 22,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--************************************
\t\t\t\tHeader Start
\t\t*************************************-->
<header id=\"tg-header\" class=\"tg-header tg-haslayout\">
    <div class=\"tg-topbar\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-12\">
                    <span class=\"tg-quickadvice\">Obtenez un conseil rapide: <strong>(+33) 05 25 25 25 25</strong></span>
                    <ul class=\"tg-contactinfo\">
                        <li><a href=\"#\">contact@e-zeedoc.com</a></li>
                        <li><address>12 rue des Hetres 31100 Toulouse</address></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-xs-12\">
                <strong class=\"tg-logo\">
                    <a href=\"#\"><img src=\"{{ asset('assets/images/logo.png') }}\" alt=\"image description\"></a>
                </strong>
                <div class=\"tg-navigationarea\">
                    <nav id=\"tg-nav\" class=\"tg-nav\">
                        <div class=\"navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#tg-navigation\" aria-expanded=\"false\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>
                        <div id=\"tg-navigation\" class=\"tg-navigation collapse navbar-collapse\">
                            <ul>
                                <li class=\"tg-hasdropdown\">
                                    <a href=\"#\">{{ 'Categories'|trans}}</a>
                                    <ul class=\"tg-dropdownmenu\">
                                        <li><a href=\"#\">{{ 'Doctors'|trans }}</a></li>
                                        <li><a href=\"#\">{{ 'Hospitals'|trans }}</a></li>
                                        <li><a href=\"#\">{{ 'Spas'|trans }}</a></li>
                                        <li><a href=\"#\">{{ 'Pharmacies'|trans }}</a></li>
                                        <li><a href=\"#\">{{ 'Labs'|trans }}</a></li>
                                        <li><a href=\"#\">{{ 'Fitness'|trans }}</a></li>
                                        <li><a href=\"#\">{{ 'Clinics'|trans }}</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"#\">{{ 'About'|trans }}</a></li>
                                <li><a href=\"#\">{{ 'How It Works'|trans }}?</a></li>
                                <li class=\"tg-hasdropdown\">

                                </li>
                            </ul>
                        </div>
                    </nav>
                    {% if is_granted('ROLE_PATIENT') or is_granted('ROLE_DOCTOR') %}
                    <div class=\"tg-admin\">
                        <div class=\"tg-user\">
                            <div class=\"tg-dropdown\">
                                <figure class=\"tg-adminpic\">
                                    <a href=\"#\">
                                        {% if is_granted('ROLE_PATIENT') %}

                                                <img src=\"{{ asset('assets/images/user.svg') }}\" alt=\"\">

                                        {% elseif is_granted('ROLE_DOCTOR') %}

                                        <img src=\"{{ asset('assets/images/user.svg') }}\" alt=\"\">
                                        {% endif %}
                                    </a>
                                </figure>
                                <a href=\"javascript:void(0);\" class=\"tg-usermenu tg-btndropdown\">
                                    {% if is_granted('ROLE_PATIENT') %}
                                        <em>{% if not (app.user is null)%} {{ render(controller('UserBundle:User:getPatientName', { 'id': app.user.idTable })) }} {% endif %}</em>

                                    {% elseif is_granted('ROLE_DOCTOR') %}
                                        <em>{% if not (app.user is null)%} {{ render(controller('UserBundle:User:getDoctorName', { 'id': app.user.idTable })) }} {% endif %}</em>

                                    {% endif %}
                                </a>
                                <div class=\"dropdown-menu tg-dropdownbox tg-usermenu\">
                                    <ul>
                                        {% if is_granted('ROLE_PATIENT') %}
                                        <li>
                                            <a href=\"{{ path('patient_profil', {'id': app.user.id }) }}\">
                                                <i class=\"fa fa-user\"></i>
                                                <span>{{ 'Profile'|trans }}</span>
                                            </a>
                                        </li>
                                        {% elseif is_granted('ROLE_DOCTOR') %}
                                        <li>
                                            <a href=\"{{ path('user_profil', {'id': app.user.id }) }}\">
                                                <i class=\"fa fa-user\"></i>
                                               <span>{{ 'Profile'|trans }}</span>
                                            </a>
                                        </li>
                                        {% endif %}
                                        <li>
                                            <a href=\"{{ path('fos_user_security_logout') }}\">
                                                <i class=\"fa fa-sign-out\"></i>
                                                <span>Déconnexion</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    {% else %}
                        <button type=\"button\" class=\"tg-btn\" data-toggle=\"modal\" data-target=\"#loginModal\">Se connecter</button>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</header>
<!--************************************
        Header End
*************************************-->


<!--************************************
        Login modal start
*************************************-->

<div class=\"modal tg-modal loginModal fade\" id=\"loginModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog tg-modaldialog\">
        <div class=\"modal-content tg-modalcontent\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\"></span></button>
            <h2>Connectez-vous ou créez un compte</h2>
            <fieldset class=\"tg-formstepone tg-current\">
            {{ render(controller('UserBundle:User:login')) }}
            </fieldset>
            <fieldset class=\"tg-formsteptwo\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-sm-6 col-xs-6\">
                        <a href=\"{{ path('doctors_new') }}\" style=\"text-decoration: none\">
                            <div class=\"tg-profilewidget tg-recommendation\">
                                <span class=\"tg-profilewidgeticon\">
                                    <img src=\"{{ asset('assets/images/physician-icon-png-10.png') }}\" alt=\"image description\">
                                </span>
                                <div class=\"tg-percentage\">
                                    {{ 'Doctors account'|trans }}</span>
                                </div>
                                <hr>
                                <div class=\"tg-description\">
                                    <p><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit </b>  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-md-6 col-sm-6 col-xs-6\">
                        <a href=\"{{ path('patient_new') }}\" style=\"text-decoration: none\">
                            <div class=\"tg-profilewidget tg-recommendation\">
                                <span class=\"tg-profilewidgeticon\">
                                    <img src=\"{{ asset('assets/images/Icons-Land-Medical-People-Patient-Male.ico') }}\" alt=\"image description\">
                                </span>
                                <div class=\"tg-percentage\">
                                    <span>{{ 'Patient account'|trans }}</span>
                                </div>
                                <hr>
                                <div class=\"tg-description\">
                                    <p><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit </b>  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
</div>
<!--************************************
        Login modal End
*************************************-->", "default/header.html.twig", "C:\\xampp\\htdocs\\VaranMedical\\app\\Resources\\views\\default\\header.html.twig");
    }
}
