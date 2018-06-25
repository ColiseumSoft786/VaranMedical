<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_58c1b038a7d7e288a8f64a71f813c744a5abc43b7f7799e7ff0a5cf2c793f220 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a44a08e7881fc82c835cc6f3d76fa0dac6ca08a8d7eb9e185fa19d933af8a058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a44a08e7881fc82c835cc6f3d76fa0dac6ca08a8d7eb9e185fa19d933af8a058->enter($__internal_a44a08e7881fc82c835cc6f3d76fa0dac6ca08a8d7eb9e185fa19d933af8a058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a44a08e7881fc82c835cc6f3d76fa0dac6ca08a8d7eb9e185fa19d933af8a058->leave($__internal_a44a08e7881fc82c835cc6f3d76fa0dac6ca08a8d7eb9e185fa19d933af8a058_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_92dd9260a1a49ba8e4e1c247274e99907d04e5d1d5b18cce77c82731fcda9b0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92dd9260a1a49ba8e4e1c247274e99907d04e5d1d5b18cce77c82731fcda9b0e->enter($__internal_92dd9260a1a49ba8e4e1c247274e99907d04e5d1d5b18cce77c82731fcda9b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <body class=\"tg-login\">
    <!--[if lt IE 8]>
    <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!--************************************
            Preloader Start
    *************************************-->
    <div class=\"preloader-outer\">
        <div class=\"pin\"></div>
        <div class=\"pulse\"></div>
    </div>
    <!--************************************
            Wrapper Start
    *************************************-->
    <div id=\"tg-wrapper\" class=\"tg-wrapper tg-haslayout\">
        <!--************************************
                Header Start
        *************************************-->
        ";
        // line 22
        $this->loadTemplate("default/header.html.twig", "@FOSUser/Security/login.html.twig", 22)->display($context);
        // line 23
        echo "        <!--************************************
                Header End
        *************************************-->
        <!--************************************
                Home Banner Start
        *************************************-->
        <div class=\"tg-pageinnerbanner tg-haslayout tg-parallaximg\" data-appear-top-offset=\"600\" data-parallax=\"scroll\" data-image-src=\"images/banner/img-02.jpg\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12 col-xs-12\">
                        <div class=\"tg-pageheadcontent\">
                            <div class=\"tg-pagetitle\">
                                <h1>Connexion / Créer un compte</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--************************************
                Home Banner End
        *************************************-->
        <!--************************************
                Main Start
        *************************************-->
        <main id=\"tg-main\" class=\"tg-main tg-haslayout\">
            <div class=\"container\">
                <div class=\"row\">
                    <div id=\"tg-twocolumns\" class=\"tg-twocolumns\">
                        <div class=\"col-md-offset-2 col-sm-offset-2 col-md-8 col-sm-8 col-xs-12\">
                            <div id=\"tg-content\" class=\"tg-content\">
                                <div class=\"tg-signinsignup\">
                                    <div class=\"tg-title\" id=\"titleInscription\">
                                        <h2>Inscrivez-vous dès maintenant</h2>
                                    </div>
                                    <div class=\"tg-title\" id=\"titleConnexion\" hidden>
                                        <h2>Se connecter</h2>
                                    </div>
                                
                                    <div class=\"tg-dashboardtabs\">
                                        <div class=\"tab-content tg-dashboardtabcontent\">
                                            <div role=\"tabpanel\" class=\"tab-pane active\" id=\"overview\">
                                                <div class=\"tg-searchbulder\">
                                                    <div id=\"tg-subcategories\" class=\"tg-subcategories\">
                                                        <div id=\"doctorscategory\" class=\"tg-tabcontent tg-active\">
                                                            <div id=\"formAddDoctor\">
                                                                <form  method=\"post\" action=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" class=\"tg-formtheme tg-formsigninsignup\" autocomplete=\"off\">
                                                                    <fieldset>
                                                                        ";
        // line 71
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 72
            echo "                                                                            <div class=\"row\">
                                                                                <div class=\"col-sm-12 col-xs-12\">
                                                                                    <div class=\"tg-alertmessages\">
                                                                                        <div class=\"alert alert-danger tg-alertmessage fade in\">
                                                                                            <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a>
                                                                                            <i class=\"fa fa-bug\"></i>
                                                                                            <span><strong>Error Message.</strong> ";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        ";
        }
        // line 84
        echo "                                                                        ";
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 85
            echo "                                                                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
                                                                        ";
        }
        // line 87
        echo "                                                                        <br/><br/>
                                                                        <div class=\"row tg-rowmargin\">
                                                                            <div class=\"col-md-12 col-sm-12 col-xs-12 tg-columnpadding\">
                                                                                <div class=\"form-group tg-formgroup\">
                                                                                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\" placeholder=\"Nom d\\'utilisateur\"/>
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"col-md-12 col-sm-12 col-xs-12 tg-columnpadding\">
                                                                                <div class=\"form-group tg-formgroup\">
                                                                                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\"  placeholder=\"Mot de passe\"/>
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"tg-kepploginpassword\">
                                                                                <div class=\"tg-checkbox\">
                                                                                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                                                                    <label for=\"keeplogin\">Garder ma session active</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"col-md-12 col-sm-12 col-xs-12 tg-columnpadding\">
                                                                                <button type=\"submit\" class=\"tg-btn pull-right\" id=\"_submit\" name=\"_submit\">Se connecter</button>
                                                                            </div>
                                                                        </div>
                                                                    </fieldset>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
        <!--************************************
                Footer Start
        *************************************-->
        ";
        // line 131
        $this->loadTemplate("default/footer.html.twig", "@FOSUser/Security/login.html.twig", 131)->display($context);
        // line 132
        echo "        <!--************************************
                Footer End
        *************************************-->
    </div>
    <!--************************************
            Wrapper End
    *************************************-->

    </body>
";
        
        $__internal_92dd9260a1a49ba8e4e1c247274e99907d04e5d1d5b18cce77c82731fcda9b0e->leave($__internal_92dd9260a1a49ba8e4e1c247274e99907d04e5d1d5b18cce77c82731fcda9b0e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 132,  192 => 131,  149 => 91,  143 => 87,  137 => 85,  134 => 84,  125 => 78,  117 => 72,  115 => 71,  110 => 69,  62 => 23,  60 => 22,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <body class=\"tg-login\">
    <!--[if lt IE 8]>
    <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!--************************************
            Preloader Start
    *************************************-->
    <div class=\"preloader-outer\">
        <div class=\"pin\"></div>
        <div class=\"pulse\"></div>
    </div>
    <!--************************************
            Wrapper Start
    *************************************-->
    <div id=\"tg-wrapper\" class=\"tg-wrapper tg-haslayout\">
        <!--************************************
                Header Start
        *************************************-->
        {% include ('default/header.html.twig') %}
        <!--************************************
                Header End
        *************************************-->
        <!--************************************
                Home Banner Start
        *************************************-->
        <div class=\"tg-pageinnerbanner tg-haslayout tg-parallaximg\" data-appear-top-offset=\"600\" data-parallax=\"scroll\" data-image-src=\"images/banner/img-02.jpg\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12 col-xs-12\">
                        <div class=\"tg-pageheadcontent\">
                            <div class=\"tg-pagetitle\">
                                <h1>Connexion / Créer un compte</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--************************************
                Home Banner End
        *************************************-->
        <!--************************************
                Main Start
        *************************************-->
        <main id=\"tg-main\" class=\"tg-main tg-haslayout\">
            <div class=\"container\">
                <div class=\"row\">
                    <div id=\"tg-twocolumns\" class=\"tg-twocolumns\">
                        <div class=\"col-md-offset-2 col-sm-offset-2 col-md-8 col-sm-8 col-xs-12\">
                            <div id=\"tg-content\" class=\"tg-content\">
                                <div class=\"tg-signinsignup\">
                                    <div class=\"tg-title\" id=\"titleInscription\">
                                        <h2>Inscrivez-vous dès maintenant</h2>
                                    </div>
                                    <div class=\"tg-title\" id=\"titleConnexion\" hidden>
                                        <h2>Se connecter</h2>
                                    </div>
                                
                                    <div class=\"tg-dashboardtabs\">
                                        <div class=\"tab-content tg-dashboardtabcontent\">
                                            <div role=\"tabpanel\" class=\"tab-pane active\" id=\"overview\">
                                                <div class=\"tg-searchbulder\">
                                                    <div id=\"tg-subcategories\" class=\"tg-subcategories\">
                                                        <div id=\"doctorscategory\" class=\"tg-tabcontent tg-active\">
                                                            <div id=\"formAddDoctor\">
                                                                <form  method=\"post\" action=\"{{ path(\"fos_user_security_check\") }}\" class=\"tg-formtheme tg-formsigninsignup\" autocomplete=\"off\">
                                                                    <fieldset>
                                                                        {% if error %}
                                                                            <div class=\"row\">
                                                                                <div class=\"col-sm-12 col-xs-12\">
                                                                                    <div class=\"tg-alertmessages\">
                                                                                        <div class=\"alert alert-danger tg-alertmessage fade in\">
                                                                                            <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a>
                                                                                            <i class=\"fa fa-bug\"></i>
                                                                                            <span><strong>Error Message.</strong> {{ error.messageKey|trans(error.messageData, 'security') }}</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        {% endif %}
                                                                        {% if csrf_token %}
                                                                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                                                                        {% endif %}
                                                                        <br/><br/>
                                                                        <div class=\"row tg-rowmargin\">
                                                                            <div class=\"col-md-12 col-sm-12 col-xs-12 tg-columnpadding\">
                                                                                <div class=\"form-group tg-formgroup\">
                                                                                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" class=\"form-control\" placeholder=\"Nom d\\'utilisateur\"/>
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"col-md-12 col-sm-12 col-xs-12 tg-columnpadding\">
                                                                                <div class=\"form-group tg-formgroup\">
                                                                                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\"  placeholder=\"Mot de passe\"/>
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"tg-kepploginpassword\">
                                                                                <div class=\"tg-checkbox\">
                                                                                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                                                                    <label for=\"keeplogin\">Garder ma session active</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"col-md-12 col-sm-12 col-xs-12 tg-columnpadding\">
                                                                                <button type=\"submit\" class=\"tg-btn pull-right\" id=\"_submit\" name=\"_submit\">Se connecter</button>
                                                                            </div>
                                                                        </div>
                                                                    </fieldset>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
        <!--************************************
                Footer Start
        *************************************-->
        {% include ('default/footer.html.twig') %}
        <!--************************************
                Footer End
        *************************************-->
    </div>
    <!--************************************
            Wrapper End
    *************************************-->

    </body>
{% endblock %}
", "@FOSUser/Security/login.html.twig", "C:\\xampp\\htdocs\\VaranMedical\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
