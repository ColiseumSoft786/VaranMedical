<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_91bdac8014a3e5d1ab3c1012203a42afdf46ffa4cee4cfe6851f41e5121d9389 extends Twig_Template
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
        $__internal_7e784ce37c4d60007b0e06a9ec39fe00a4a791a9d88c5a7e1ba6dbb8b6542f25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e784ce37c4d60007b0e06a9ec39fe00a4a791a9d88c5a7e1ba6dbb8b6542f25->enter($__internal_7e784ce37c4d60007b0e06a9ec39fe00a4a791a9d88c5a7e1ba6dbb8b6542f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_8c6e5520d2878adebee738538fd17403e0d742e1fe5b9c52a4c0ef81fbdb10fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c6e5520d2878adebee738538fd17403e0d742e1fe5b9c52a4c0ef81fbdb10fe->enter($__internal_8c6e5520d2878adebee738538fd17403e0d742e1fe5b9c52a4c0ef81fbdb10fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e784ce37c4d60007b0e06a9ec39fe00a4a791a9d88c5a7e1ba6dbb8b6542f25->leave($__internal_7e784ce37c4d60007b0e06a9ec39fe00a4a791a9d88c5a7e1ba6dbb8b6542f25_prof);

        
        $__internal_8c6e5520d2878adebee738538fd17403e0d742e1fe5b9c52a4c0ef81fbdb10fe->leave($__internal_8c6e5520d2878adebee738538fd17403e0d742e1fe5b9c52a4c0ef81fbdb10fe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_819318c7e8d2a6638c81401dbb96b3fae81e6122667e02f2ac7386cb92633cd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_819318c7e8d2a6638c81401dbb96b3fae81e6122667e02f2ac7386cb92633cd9->enter($__internal_819318c7e8d2a6638c81401dbb96b3fae81e6122667e02f2ac7386cb92633cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fd34e3d3d61cba2a3a7fa38fc797fa0a20618e42e6e46f1a7cd1aa328bb114d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd34e3d3d61cba2a3a7fa38fc797fa0a20618e42e6e46f1a7cd1aa328bb114d5->enter($__internal_fd34e3d3d61cba2a3a7fa38fc797fa0a20618e42e6e46f1a7cd1aa328bb114d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fd34e3d3d61cba2a3a7fa38fc797fa0a20618e42e6e46f1a7cd1aa328bb114d5->leave($__internal_fd34e3d3d61cba2a3a7fa38fc797fa0a20618e42e6e46f1a7cd1aa328bb114d5_prof);

        
        $__internal_819318c7e8d2a6638c81401dbb96b3fae81e6122667e02f2ac7386cb92633cd9->leave($__internal_819318c7e8d2a6638c81401dbb96b3fae81e6122667e02f2ac7386cb92633cd9_prof);

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
        return array (  203 => 132,  201 => 131,  158 => 91,  152 => 87,  146 => 85,  143 => 84,  134 => 78,  126 => 72,  124 => 71,  119 => 69,  71 => 23,  69 => 22,  49 => 4,  40 => 3,  11 => 1,);
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
