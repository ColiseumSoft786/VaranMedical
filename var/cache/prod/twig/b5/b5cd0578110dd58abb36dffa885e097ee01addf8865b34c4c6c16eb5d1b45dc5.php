<?php

/* calendries/new.html.twig */
class __TwigTemplate_fd6900ae0f526f89a94fd5670647e88a7d3d9ee0d218e0f3ef5a7937e2d5af8e extends Twig_Template
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
        $__internal_185b0411273ed6df96e09f4c605141678f71cd14de49982d24120610ab7f07d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_185b0411273ed6df96e09f4c605141678f71cd14de49982d24120610ab7f07d0->enter($__internal_185b0411273ed6df96e09f4c605141678f71cd14de49982d24120610ab7f07d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "calendries/new.html.twig"));

        // line 1
        echo "<form class=\"tg-formbookappointment\" id=\"formAddCalendrie\">
    <fieldset class=\"tg-formstepone tg-current\">
        <div class=\"row tg-rowmargin\">
            <h3>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Selectionner votre location"), "html", null, true);
        echo "</h3>
            <div class=\"tg-alertmessages\" id=\"successMessage\">
                <div class=\"alert alert-success tg-alertmessage fade in\" id=\"addSuccess\" hidden>
                    <i class=\"fa fa-check\"></i>
                    <span><strong>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("success Message"), "html", null, true);
        echo ".</strong> Adipisicing elit, sed do eiusmod.</span>
                </div>
                <div class=\"alert alert-danger tg-alertmessage fade in\" id=\"addErreur\" hidden>
                    <i class=\"fa fa-bug\"></i>
                    <span><strong>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Error Message"), "html", null, true);
        echo ".</strong> Adipisicing elit, sed do eiusmod.</span>
                </div>
                <div class=\"alert alert-warning tg-alertmessage fade in\" id=\"addExist\" hidden>
                    <i class=\"fa fa-exclamation-triangle\"></i>
                    <span><strong>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("warning Message"), "html", null, true);
        echo ".</strong> Ce jour est déjà planifié .</span>
                </div>
            </div>

            <div class=\"col-lg-6 col-sm-6 col-xs-12 tg-columnpadding\">
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("DoctorsBundle:Locations:getComboLocationByDoctor", array("doctor" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "idTable", array()))));
        echo "
            </div>
            <div class=\"col-lg-6 col-sm-6 col-xs-12 tg-columnpadding\">
                <div class=\"form-group\">
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array("class" => "form-control js-datepicker", "placeholder" => "Date", "mask" => "yyyy-mm-dd\"")));
        echo "
                </div>
            </div>
            <div class=\"col-lg-6 col-sm-6 col-xs-12 tg-columnpadding\">
                <div class=\"form-group\">
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"tg-btnbox\">
            <button type=\"submit\" class=\"tg-btn\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add now"), "html", null, true);
        echo "</button>
        </div>
    </fieldset>
</form>
<script>

    \$('body').on('submit', '#formAddCalendrie', function (e) {
        \$('#addExist').hide();
        \$('#addErreur').hide();
        \$('#addSuccess').hide();
        e.preventDefault();
        e.stopImmediatePropagation();

        var \$form = \$(this);
        var formdata = (window.FormData) ? new FormData(\$form[0]) : null;
        var data = (formdata !== null) ? formdata : \$form.serialize();

        var URL = \"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("calendries_new");
        echo "\";
        console.log(URL);

        \$.ajax({
            url: URL,
            type: \"POST\",
            contentType: false,
            processData: false,
            dataType: 'html',
            data: data,
            success: function (response) {
                if(response == 'success') {
                    \$('#addExist').hide();
                    \$('#addErreur').hide();
                    \$('#addSuccess').show();
                    location.reload();
                }else if (response == 'deja'){
                    \$('#addErreur').hide();
                    \$('#addSuccess').hide();
                    \$('#addExist').show();
                }else {
                    \$('#addSuccess').hide();
                    \$('#addExist').hide();
                    \$('#addErreur').show();
                }
            }
        });


        return false
    });

</script>
";
        
        $__internal_185b0411273ed6df96e09f4c605141678f71cd14de49982d24120610ab7f07d0->leave($__internal_185b0411273ed6df96e09f4c605141678f71cd14de49982d24120610ab7f07d0_prof);

    }

    public function getTemplateName()
    {
        return "calendries/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 52,  79 => 35,  71 => 30,  63 => 25,  56 => 21,  48 => 16,  41 => 12,  34 => 8,  27 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form class=\"tg-formbookappointment\" id=\"formAddCalendrie\">
    <fieldset class=\"tg-formstepone tg-current\">
        <div class=\"row tg-rowmargin\">
            <h3>{{ 'Selectionner votre location'|trans }}</h3>
            <div class=\"tg-alertmessages\" id=\"successMessage\">
                <div class=\"alert alert-success tg-alertmessage fade in\" id=\"addSuccess\" hidden>
                    <i class=\"fa fa-check\"></i>
                    <span><strong>{{ 'success Message'|trans }}.</strong> Adipisicing elit, sed do eiusmod.</span>
                </div>
                <div class=\"alert alert-danger tg-alertmessage fade in\" id=\"addErreur\" hidden>
                    <i class=\"fa fa-bug\"></i>
                    <span><strong>{{ 'Error Message'|trans }}.</strong> Adipisicing elit, sed do eiusmod.</span>
                </div>
                <div class=\"alert alert-warning tg-alertmessage fade in\" id=\"addExist\" hidden>
                    <i class=\"fa fa-exclamation-triangle\"></i>
                    <span><strong>{{ 'warning Message'|trans }}.</strong> Ce jour est déjà planifié .</span>
                </div>
            </div>

            <div class=\"col-lg-6 col-sm-6 col-xs-12 tg-columnpadding\">
                {{ render(controller('DoctorsBundle:Locations:getComboLocationByDoctor', {'doctor':app.user.idTable})) }}
            </div>
            <div class=\"col-lg-6 col-sm-6 col-xs-12 tg-columnpadding\">
                <div class=\"form-group\">
                    {{ form_widget(form.date, {'attr':{'class':'form-control js-datepicker', 'placeholder':'Date', 'mask':'yyyy-mm-dd\"'}}) }}
                </div>
            </div>
            <div class=\"col-lg-6 col-sm-6 col-xs-12 tg-columnpadding\">
                <div class=\"form-group\">
                    {{ form_widget(form._token) }}
                </div>
            </div>
        </div>
        <div class=\"tg-btnbox\">
            <button type=\"submit\" class=\"tg-btn\">{{ 'add now'|trans }}</button>
        </div>
    </fieldset>
</form>
<script>

    \$('body').on('submit', '#formAddCalendrie', function (e) {
        \$('#addExist').hide();
        \$('#addErreur').hide();
        \$('#addSuccess').hide();
        e.preventDefault();
        e.stopImmediatePropagation();

        var \$form = \$(this);
        var formdata = (window.FormData) ? new FormData(\$form[0]) : null;
        var data = (formdata !== null) ? formdata : \$form.serialize();

        var URL = \"{{ path('calendries_new')}}\";
        console.log(URL);

        \$.ajax({
            url: URL,
            type: \"POST\",
            contentType: false,
            processData: false,
            dataType: 'html',
            data: data,
            success: function (response) {
                if(response == 'success') {
                    \$('#addExist').hide();
                    \$('#addErreur').hide();
                    \$('#addSuccess').show();
                    location.reload();
                }else if (response == 'deja'){
                    \$('#addErreur').hide();
                    \$('#addSuccess').hide();
                    \$('#addExist').show();
                }else {
                    \$('#addSuccess').hide();
                    \$('#addExist').hide();
                    \$('#addErreur').show();
                }
            }
        });


        return false
    });

</script>
", "calendries/new.html.twig", "C:\\xampp\\htdocs\\VaranMedical\\app\\Resources\\views\\calendries\\new.html.twig");
    }
}
