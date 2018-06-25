<?php

/* calendries/index.html.twig */
class __TwigTemplate_3e265bfb88ee1bee4c13c92b45b4d686a3ae1496d12b3700cd8ae634c9fb43e7 extends Twig_Template
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
        $__internal_64002517f19542bc15a49e555fc9d65179e970869a309e9d41b7b687a392069e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64002517f19542bc15a49e555fc9d65179e970869a309e9d41b7b687a392069e->enter($__internal_64002517f19542bc15a49e555fc9d65179e970869a309e9d41b7b687a392069e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "calendries/index.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->loadTemplate("base.html.twig", "calendries/index.html.twig", 2)->display($context);
        // line 3
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 4
            echo "    ";
            $this->displayBlock('body', $context, $blocks);
        }
        
        $__internal_64002517f19542bc15a49e555fc9d65179e970869a309e9d41b7b687a392069e->leave($__internal_64002517f19542bc15a49e555fc9d65179e970869a309e9d41b7b687a392069e_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_937e9ed779e8aa67cf0a639a8dc9b7298e9bb04df772616155c466bbdc14d134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_937e9ed779e8aa67cf0a639a8dc9b7298e9bb04df772616155c466bbdc14d134->enter($__internal_937e9ed779e8aa67cf0a639a8dc9b7298e9bb04df772616155c466bbdc14d134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "

        ";
        // line 8
        echo "        <!--[if lt IE 8]>
        <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div id=\"tg-wrapper\" class=\"tg-wrapper tg-haslayout\">
            ";
        // line 13
        $this->loadTemplate("default/header.html.twig", "calendries/index.html.twig", 13)->display($context);
        // line 14
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
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/thumbnails/img-20.jpg"), "html", null, true);
        echo "\" alt=\"image description\"></a>
                                            ";
        // line 26
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "verifier", array()) == 1)) {
            // line 27
            echo "                                                <figcaption>
                                                    <a class=\"tg-usericon tg-iconvarified\" href=\"#\">
                                                        <em class=\"tg-usericonholder\">
                                                            <i class=\"fa fa-shield\"></i>
                                                            <span>";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("verified"), "html", null, true);
            echo "</span>
                                                        </em>
                                                    </a>
                                                </figcaption>
                                            ";
        }
        // line 36
        echo "                                        </figure>
                                        <div class=\"tg-directposthead\">
                                            <h3><a href=\"#\">Dr. ";
        // line 38
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
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profil", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "idTable", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Profile"), "html", null, true);
        echo "</a> </div>
                                    ";
        // line 46
        $this->loadTemplate("profilDoctorNav.html.twig", "calendries/index.html.twig", 46)->display($context);
        // line 47
        echo "                                </div>
                            </div>
                            <div class=\"col-lg-9 col-md-8 col-sm-8 col-xs-12 pull-right\">
                                <div class=\"tg-dashboardappointments\">
                                    <div class=\"tg-dashboardbox\">
                                        <div class=\"tg-dashboardboxtitle\">
                                            <h2>Calendrier</h2>
                                        </div>
                                        <div id=\"searchBar\">
                                            <div class=\"col-md-6\">
                                                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("DoctorsBundle:Locations:getComboLocationByDoctor", array("doctor" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "idTable", array()))));
        echo "
                                            </div>

                                            <div class=\"col-md-3\">
                                                ";
        // line 62
        echo "                                                <button id=\"settings_toggle\" type=\"button\" class=\"tg-btn btn-block\">Calender Entries</button>
                                            </div>
                                            <div class=\"col-md-3\">
                                                <button type=\"button\" class=\"tg-btn btn-block\" style=\"background-color: coral\" data-toggle=\"modal\" data-target=\"#add_absence\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create Absence"), "html", null, true);
        echo "</button>
                                                <button type=\"button\" class=\"tg-btn btn-block\" style=\"background-color: #5293ff\" data-toggle=\"modal\" data-target=\"#dup_days\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicate Period"), "html", null, true);
        echo "</button>
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div id=\"addSeanceFram\"></div>
                                    <div id=\"settings\" style=\"display: none;\">
                                        <form id=\"appform\" action=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("calendries_create_app");
        echo "\" method=\"POST\">
                                            <div class=\"col-md-12\" style=\"margin-top: 10px\">
                                                <div class=\"col-md-4\">
                                                    <label for=\"\">Select Location</label>
                                                    <select name=\"loc\" id=\"loc\" class=\"form-control\">
                                                        <option value=\"\">Select Location</option>
                                                        ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? $this->getContext($context, "locations")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 80
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                                                    </select>
                                                </div>
                                                <div class=\"col-md-4\">
                                                    <label>Start Date</label>
                                                    <input id=\"from\" name=\"sdate\" type=\"date\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\" min=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\" class=\"form-control\">
                                                </div>
                                                <div class=\"col-md-4\">
                                                    <label>End Date</label>
                                                    <input id=\"to\" name=\"edate\" type=\"date\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\" min=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\" class=\"form-control\">
                                                </div>
                                            </div>

                                            ";
        // line 98
        echo "                                            <div class=\"col-md-12\" style=\"margin-top: 10px\">
                                                <div class=\"col-md-offset-2 col-md-4\">
                                                    <label>Start Time</label>
                                                    <input id=\"stime\" type=\"text\" name=\"stime\" placeholder=\"Enter Start Time\" class=\"form-control clockpicker\">
                                                </div>
                                                <div class=\"col-md-4\">
                                                    <label>End Time</label>
                                                    <input id=\"etime\" class=\"form-control clockpicker\" name=\"etime\" placeholder=\"Enter End Time\" type=\"text\">
                                                </div></div>

                                            <div class=\"col-md-12\" style=\"margin-top: 10px\"><div class=\"col-md-6\">
                                                    <label for=\"\">Select Appointment Time</label>
                                                    <select id=\"atime\" name=\"atime\" class=\"form-control\">
                                                        <option value=\"\">Select Appointment Time</option>
                                                        <option value=\"15\">15 min</option>
                                                        <option value=\"20\">20 min</option>
                                                        <option value=\"25\">25 min</option>
                                                        <option value=\"30\">30 min</option>
                                                        <option value=\"35\">35 min</option>
                                                        <option value=\"40\">40 min</option>
                                                        <option value=\"45\">45 min</option>
                                                        <option value=\"50\">50 min</option>
                                                        <option value=\"55\">55 min</option>
                                                        <option value=\"60\">60 min</option>
                                                    </select>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <label for=\"\">Select Pause Time</label>
                                                    <select id=\"ptime\" name=\"ptime\" class=\"form-control\">
                                                        <option value=\"\">Select Pause Time</option>
                                                        <option value=\"5\">5 min</option>
                                                        <option value=\"10\">10 min</option>
                                                        <option value=\"15\">15 min</option>
                                                        <option value=\"20\">20 min</option>
                                                        <option value=\"25\">25 min</option>
                                                        <option value=\"30\">30 min</option>
                                                        <option value=\"35\">35 min</option>
                                                        <option value=\"40\">40 min</option>
                                                        <option value=\"45\">45 min</option>
                                                        <option value=\"50\">50 min</option>
                                                        <option value=\"55\">55 min</option>
                                                        <option value=\"60\">60 min</option>
                                                    </select>
                                                </div></div>


                                            <div class=\"col-md-12\" style=\"margin-top: 10px\"><div class=\"col-md-3\">
                                                    <div style=\"margin-top: 25px\">
                                                        <input checked id=\"break\" name=\"break\" type=\"checkbox\"> I need break
                                                    </div>
                                                </div>
                                                <div class=\"col-md-3\">
                                                    <label>Start of Break</label>
                                                    <input id=\"sbtime\" name=\"sbtime\" class=\"form-control clockpicker\" placeholder=\"Enter Start of break\" type=\"text\">
                                                </div>
                                                <div class=\"col-md-3\">
                                                    <label>End of Break</label>
                                                    <input id=\"ebtime\" name=\"ebtime\" class=\"form-control clockpicker\" type=\"text\" placeholder=\"Enter End of break\">
                                                </div></div>


                                            <script type=\"text/javascript\">
                                                \$('.clockpicker').clockpicker({
                                                    placement: 'top',
                                                    align: 'left',
                                                    donetext: 'Done'
                                                });
                                            </script>
                                            <div class=\"col-md-12\" style=\"margin-top: 10px;margin-bottom: 10px\">
                                                <input type=\"submit\" value=\"Confirm Scheduling\" class=\"btn btn-info btn-block\">
                                            </div>
                                        </form>
                                        <script>
                                            \$('#break').change(function(){
                                                if(!document.getElementById('break').checked) {
                                                    \$('#sbtime').attr(\"disabled\",\"disabled\");
                                                    \$('#ebtime').attr(\"disabled\",\"disabled\");
                                                } else {
                                                    \$('#sbtime').removeAttr('disabled');
                                                    \$('#ebtime').removeAttr('disabled');
                                                }
                                            });
                                            \$('#appform').submit(function(e){
                                                var check = true;
                                                if(\$('#loc').val() == \"\"){
                                                    check = false;
                                                }else if(\$('#from').val() == \"\"){
                                                    check = false;
                                                }else if(\$('#to').val() == \"\"){
                                                    check = false;
                                                }else if(\$('#stime').val() == \"\"){
                                                    check = false;
                                                }else if(\$('#etime').val() == \"\"){
                                                    check = false;
                                                }else if(\$('#atime').val() == \"\"){
                                                    check = false;
                                                }else if(\$('#ptime').val() == \"\"){
                                                    check = false;
                                                }if(document.getElementById('break').checked){
                                                    if(\$('#sbtime').val() == \"\"){
                                                        check = false;
                                                    }else if(\$('#ebtime').val() == \"\"){
                                                        check = false;
                                                    }
                                                }if(check){
                                                    var sdate = new Date(\$('#from').val());
                                                    var edate = new Date(\$('#to').val());
                                                    if(sdate > edate){
                                                        alert(\"Start date should be greater than end date\")
                                                        e.preventDefault();
                                                        return false;
                                                    }
                                                    var check12 = \"01/01/2017 \"+\$('#stime').val()+\":00\";
                                                    var check34 = \"01/01/2017 \"+\$('#etime').val()+\":00\";
                                                    var stime = Date.parse(check12);
                                                    var etime = Date.parse(check34);
                                                    if(stime > etime){
                                                        alert(\"Start time should be greater than end time\");
                                                        e.preventDefault();
                                                        return false;
                                                    }
                                                    if(!confirm(\"Are you sure ? If there are appointments already, they will be overwritten.\")) return false;

                                                }else{
                                                    alert('Fill Everything in this form');
                                                    e.preventDefault();
                                                }
                                            });
                                        </script>
                                    </div>
                                    <script>
                                        \$('#settings_toggle').click(function(){
                                           \$('#settings').toggle();
                                        });
                                    </script>
                                    <div id=\"listeCalendrie\">
                                        ";
        // line 234
        if ((null === ($context["calendrie"] ?? $this->getContext($context, "calendrie")))) {
            // line 235
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppointmentsBundle:Calendries:getCalendriesByLocation", array("location" => 0)));
            echo "
                                        ";
        } else {
            // line 237
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppointmentsBundle:Calendries:getCalendriesByLocation", array("location" => $this->getAttribute(($context["calendrie"] ?? $this->getContext($context, "calendrie")), "location", array()))));
            echo "
                                        ";
        }
        // line 239
        echo "
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
\t\t\t\tLight Box Start
\t*************************************-->
        <div class=\"modal tg-modal tg-appointmentlightbox fade\" id=\"addSeances\" tabindex=\"-1\" role=\"dialog\">
            <div class=\"modal-dialog tg-modaldialog\">
                <div class=\"modal-content tg-modalcontent\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\"></span></button>
                    <div id=\"addSeancesZone\">

                    </div>
                </div>
            </div>
        </div>
        <div class=\"modal tg-modal tg-appointmentlightbox fade\" id=\"tg-appointmentlightbox\" tabindex=\"-1\" role=\"dialog\">
            <div class=\"modal-dialog tg-modaldialog\">
                <div class=\"modal-content tg-modalcontent\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\"></span></button>
                    <h2>";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new job location"), "html", null, true);
        echo "</h2>
                    ";
        // line 269
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppointmentsBundle:Calendries:new"));
        echo "
                </div>

            </div>
        </div>
        <div class=\"modal tg-modal tg-appointmentlightbox fade\" id=\"add_absence\" tabindex=\"-1\" role=\"dialog\">
            <div class=\"modal-dialog tg-modaldialog\">
                <div class=\"modal-content tg-modalcontent\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\"></span></button>
                    <h2>";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create your absence"), "html", null, true);
        echo "</h2>
                    <form id=\"abs\" action=\"";
        // line 279
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("calendries_create_absence");
        echo "\" method=\"post\">
                        <div class=\"col-md-12\">
                            <label for=\"\">Select Location</label>
                            <select name=\"loc\" id=\"location\" class=\"form-control\">
                                <option value=\"\">Select Location</option>
                                ";
        // line 284
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? $this->getContext($context, "locations")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 285
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 287
        echo "                            </select>

                        </div>

                            ";
        // line 292
        echo "                        <div class=\"col-md-6\">
                            <label for=\"\">Select Start Date</label>
                            <input type=\"date\" name=\"date\" value=\"";
        // line 294
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\" min=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\" class=\"form-control\">
                        </div>
                        <div class=\"col-md-6\">
                            <label for=\"\">Select Number of Days</label>
                            <input type=\"number\" name=\"day\" class=\"form-control\" value=\"1\" min=\"1\">
                            <input type=\"submit\" value=\"Confirm\" class=\"tg-btn pull-right\" style=\"margin-top: 10px;background-color: coral\">
                        </div>

                    </form>
                    <script>
                        \$('#abs').submit(function(e){
                            var val = \$('#location option:selected').val();
                            if(val == \"\"){
                                e.preventDefault();
                                alert('Select Your Calender Location');
                            }

                        })
                    </script>
                </div>

            </div>
        </div>
        <div class=\"modal tg-modal tg-appointmentlightbox fade\" id=\"dup_days\" tabindex=\"-1\" role=\"dialog\">
            <div class=\"modal-dialog tg-modaldialog\">
                <div class=\"modal-content tg-modalcontent\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\"></span></button>
                    <h2>";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicate your days"), "html", null, true);
        echo "</h2>
                    <div>
                        <div class=\"col-md-12\">
                            <label for=\"\">Select Location</label>
                            <select name=\"loc\" id=\"location1\" class=\"form-control\">
                                <option value=\"\">Select Location</option>
                                ";
        // line 327
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? $this->getContext($context, "locations")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 328
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 330
        echo "                            </select>
                        </div>

                        <div class=\"col-md-6\">
                            <label for=\"\">Period Start Date</label>
                            <input type=\"date\" onchange=\"updatpeedate()\" id=\"psdate\" name=\"psdate\" value=\"";
        // line 335
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\" min=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\" class=\"form-control\">
                        </div>
                        <div class=\"col-md-6\">
                            <label for=\"\">Period End Date</label>
                            <input onchange=\"calculatedifference()\" type=\"date\" id=\"pedate\" name=\"pedate\" class=\"form-control\" value=\"1\" min=\"1\">
                        </div>
                        <div class=\"col-md-6\">
                            <label for=\"\">Select Start date In which period will copy</label>
                            <input type=\"date\" onchange=\"changecperiod()\" id=\"sdate\" name=\"sdate\" class=\"form-control\" value=\"1\" min=\"1\">
                        </div>
                        <div class=\"col-md-6\">
                            <p style=\"margin-top: 30px\" id=\"todate\"></p>
                        </div>
                        <div class=\"col-md-12\">
                            <button onclick=\"copy()\" style=\"margin-top: 10px\" class=\"btn btn-info\">Copy Now</button>
                        </div>


                    </div>
                    <script>
                        function copy(){
                            if(\$('#location1').val() == \"\" || \$('#psdate').val() == \"\"|| \$('#pedate').val() == \"\"|| \$('#sdate').val() == \"\"){
                                alert('Select All');
                            }else{
                                window.location = '";
        // line 359
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appointments_appointment_copyperiod");
        echo "?loc='+\$('#location1').val()+'&psdate='+\$('#psdate').val()+'&days='+daysdiff+'&sdate='+\$('#sdate').val();
                            }
                        }
                    </script>
                    <script>
                        format = function date2str(x, y) {
                            var z = {
                                M: x.getMonth() + 1,
                                d: x.getDate(),
                                h: x.getHours(),
                                m: x.getMinutes(),
                                s: x.getSeconds()
                            };
                            y = y.replace(/(M+|d+|h+|m+|s+)/g, function(v) {
                                return ((v.length > 1 ? \"0\" : \"\") + eval('z.' + v.slice(-1))).slice(-2)
                            });

                            return y.replace(/(y+)/g, function(v) {
                                return x.getFullYear().toString().slice(-v.length)
                            });
                        }

                        var bdate = new Date(\$('#psdate').val());
                        var bpluone = bdate.getDate() + 1;
                        bdate.setDate(bpluone);
                        \$('#pedate').val(format(bdate,'yyyy-MM-dd'));
                        \$('#pedate').attr('min',format(bdate,'yyyy-MM-dd'));

                        var daysdiff = 0;
                        function updatpeedate(){
                            var date2 = new Date(\$('#psdate').val());
                            var pluone = date2.getDate() + 1;
                            date2.setDate(pluone);
                            \$('#pedate').val(format(date2,'yyyy-MM-dd'));
                            \$('#pedate').attr('min',format(date2,'yyyy-MM-dd'));

                        }
                        function changecperiod(){
                            var date3 = new Date(\$('#sdate').val());
                            \$('#todate').html(\"Appointment will copy from \"+date3.getDate()+\"-\"+(date3.getMonth() + 1)+\"-\"+date3.getFullYear()+\" to \"+daysdiff+\" days onward\");

                        }



                        function calculatedifference(){
                            var date1 = new Date(\$('#psdate').val());
                            var date2 = new Date(\$('#pedate').val());
                            var timeDiff = Math.abs(date2.getTime() - date1.getTime());
                            var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
                            daysdiff = diffDays + 1;
                            var pluone = date2.getDate() + 1;
                            date2.setDate(pluone);
                            \$('#sdate').val(format(date2,'yyyy-MM-dd'));
                            \$('#sdate').attr('min',format(date2,'yyyy-MM-dd'));
                            var date3 = new Date(\$('#sdate').val());
                            \$('#todate').html(\"Appointment will copy from \"+date3.getDate()+\"-\"+(date3.getMonth() + 1)+\"-\"+date3.getFullYear()+\" to \"+daysdiff+\" days onward\");
                        }
                    </script>


                    <script>
                        \$('#abs').submit(function(e){
                            var val = \$('#location option:selected').val();
                            if(val == \"\"){
                                e.preventDefault();
                                alert('Select Your Calender Location');
                            }

                        })
                    </script>
                </div>

            </div>
        </div>

        <!--************************************
                    Light Box End
        *************************************-->
        <script>



            \$(document).ready(function () {
                \$(\"#appointmentsbundle_calendries_location\").change(function () {
                    \$('#dateSearch').val('');

                    var locationId = \$('#appointmentsbundle_calendries_location').val();
                    var URL = \"";
        // line 447
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("calendries_getCalendriesByLocation", array("location" => "sss"));
        echo "\";
                    URL = URL.replace(/sss/g, locationId);
                    \$.ajax({
                        type: \"GET\",
                        url: URL,
                        cache: false,
                        success: function (response) {
                            \$('#addSeanceFram').hide();
                            \$(\"#listeCalendrie\").html(response);
                            return true;
                        }
                    });
                });

            });
        </script>
        </div>
        <!--************************************
                Wrapper End
        *************************************-->
        ";
        // line 467
        $this->loadTemplate("default/footer.html.twig", "calendries/index.html.twig", 467)->display($context);
        // line 468
        echo "    ";
        
        $__internal_937e9ed779e8aa67cf0a639a8dc9b7298e9bb04df772616155c466bbdc14d134->leave($__internal_937e9ed779e8aa67cf0a639a8dc9b7298e9bb04df772616155c466bbdc14d134_prof);

    }

    public function getTemplateName()
    {
        return "calendries/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  644 => 468,  642 => 467,  619 => 447,  528 => 359,  499 => 335,  492 => 330,  481 => 328,  477 => 327,  468 => 321,  436 => 294,  432 => 292,  426 => 287,  415 => 285,  411 => 284,  403 => 279,  399 => 278,  387 => 269,  383 => 268,  352 => 239,  346 => 237,  340 => 235,  338 => 234,  200 => 98,  191 => 90,  182 => 86,  176 => 82,  165 => 80,  161 => 79,  152 => 73,  142 => 66,  138 => 65,  133 => 62,  126 => 57,  114 => 47,  112 => 46,  106 => 45,  94 => 38,  90 => 36,  82 => 31,  76 => 27,  74 => 26,  70 => 25,  57 => 14,  55 => 13,  48 => 8,  44 => 5,  30 => 4,  28 => 3,  26 => 2,  23 => 1,);
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
                                <div class=\"tg-dashboardappointments\">
                                    <div class=\"tg-dashboardbox\">
                                        <div class=\"tg-dashboardboxtitle\">
                                            <h2>Calendrier</h2>
                                        </div>
                                        <div id=\"searchBar\">
                                            <div class=\"col-md-6\">
                                                {{ render(controller('DoctorsBundle:Locations:getComboLocationByDoctor' , { 'doctor': app.user.idTable})) }}
                                            </div>

                                            <div class=\"col-md-3\">
                                                {#<button type=\"button\" class=\"tg-btn btn-block\" data-toggle=\"modal\" data-target=\"#tg-appointmentlightbox\">{{ 'add new'|trans }}</button>#}
                                                <button id=\"settings_toggle\" type=\"button\" class=\"tg-btn btn-block\">Calender Entries</button>
                                            </div>
                                            <div class=\"col-md-3\">
                                                <button type=\"button\" class=\"tg-btn btn-block\" style=\"background-color: coral\" data-toggle=\"modal\" data-target=\"#add_absence\">{{ 'Create Absence'|trans }}</button>
                                                <button type=\"button\" class=\"tg-btn btn-block\" style=\"background-color: #5293ff\" data-toggle=\"modal\" data-target=\"#dup_days\">{{ 'Duplicate Period'|trans }}</button>
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div id=\"addSeanceFram\"></div>
                                    <div id=\"settings\" style=\"display: none;\">
                                        <form id=\"appform\" action=\"{{ path('calendries_create_app') }}\" method=\"POST\">
                                            <div class=\"col-md-12\" style=\"margin-top: 10px\">
                                                <div class=\"col-md-4\">
                                                    <label for=\"\">Select Location</label>
                                                    <select name=\"loc\" id=\"loc\" class=\"form-control\">
                                                        <option value=\"\">Select Location</option>
                                                        {% for item in locations %}
                                                            <option value=\"{{ item.id }}\">{{ item.name }}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                                <div class=\"col-md-4\">
                                                    <label>Start Date</label>
                                                    <input id=\"from\" name=\"sdate\" type=\"date\" value=\"{{ \"now\"|date(\"Y-m-d\") }}\" min=\"{{ \"now\"|date(\"Y-m-d\") }}\" class=\"form-control\">
                                                </div>
                                                <div class=\"col-md-4\">
                                                    <label>End Date</label>
                                                    <input id=\"to\" name=\"edate\" type=\"date\" value=\"{{ \"now\"|date(\"Y-m-d\") }}\" min=\"{{ \"now\"|date(\"Y-m-d\") }}\" class=\"form-control\">
                                                </div>
                                            </div>

                                            {#<script>
                                                \$(\"#from\").datepicker();
                                                \$(\"#to\").datepicker();
                                            </script>#}
                                            <div class=\"col-md-12\" style=\"margin-top: 10px\">
                                                <div class=\"col-md-offset-2 col-md-4\">
                                                    <label>Start Time</label>
                                                    <input id=\"stime\" type=\"text\" name=\"stime\" placeholder=\"Enter Start Time\" class=\"form-control clockpicker\">
                                                </div>
                                                <div class=\"col-md-4\">
                                                    <label>End Time</label>
                                                    <input id=\"etime\" class=\"form-control clockpicker\" name=\"etime\" placeholder=\"Enter End Time\" type=\"text\">
                                                </div></div>

                                            <div class=\"col-md-12\" style=\"margin-top: 10px\"><div class=\"col-md-6\">
                                                    <label for=\"\">Select Appointment Time</label>
                                                    <select id=\"atime\" name=\"atime\" class=\"form-control\">
                                                        <option value=\"\">Select Appointment Time</option>
                                                        <option value=\"15\">15 min</option>
                                                        <option value=\"20\">20 min</option>
                                                        <option value=\"25\">25 min</option>
                                                        <option value=\"30\">30 min</option>
                                                        <option value=\"35\">35 min</option>
                                                        <option value=\"40\">40 min</option>
                                                        <option value=\"45\">45 min</option>
                                                        <option value=\"50\">50 min</option>
                                                        <option value=\"55\">55 min</option>
                                                        <option value=\"60\">60 min</option>
                                                    </select>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <label for=\"\">Select Pause Time</label>
                                                    <select id=\"ptime\" name=\"ptime\" class=\"form-control\">
                                                        <option value=\"\">Select Pause Time</option>
                                                        <option value=\"5\">5 min</option>
                                                        <option value=\"10\">10 min</option>
                                                        <option value=\"15\">15 min</option>
                                                        <option value=\"20\">20 min</option>
                                                        <option value=\"25\">25 min</option>
                                                        <option value=\"30\">30 min</option>
                                                        <option value=\"35\">35 min</option>
                                                        <option value=\"40\">40 min</option>
                                                        <option value=\"45\">45 min</option>
                                                        <option value=\"50\">50 min</option>
                                                        <option value=\"55\">55 min</option>
                                                        <option value=\"60\">60 min</option>
                                                    </select>
                                                </div></div>


                                            <div class=\"col-md-12\" style=\"margin-top: 10px\"><div class=\"col-md-3\">
                                                    <div style=\"margin-top: 25px\">
                                                        <input checked id=\"break\" name=\"break\" type=\"checkbox\"> I need break
                                                    </div>
                                                </div>
                                                <div class=\"col-md-3\">
                                                    <label>Start of Break</label>
                                                    <input id=\"sbtime\" name=\"sbtime\" class=\"form-control clockpicker\" placeholder=\"Enter Start of break\" type=\"text\">
                                                </div>
                                                <div class=\"col-md-3\">
                                                    <label>End of Break</label>
                                                    <input id=\"ebtime\" name=\"ebtime\" class=\"form-control clockpicker\" type=\"text\" placeholder=\"Enter End of break\">
                                                </div></div>


                                            <script type=\"text/javascript\">
                                                \$('.clockpicker').clockpicker({
                                                    placement: 'top',
                                                    align: 'left',
                                                    donetext: 'Done'
                                                });
                                            </script>
                                            <div class=\"col-md-12\" style=\"margin-top: 10px;margin-bottom: 10px\">
                                                <input type=\"submit\" value=\"Confirm Scheduling\" class=\"btn btn-info btn-block\">
                                            </div>
                                        </form>
                                        <script>
                                            \$('#break').change(function(){
                                                if(!document.getElementById('break').checked) {
                                                    \$('#sbtime').attr(\"disabled\",\"disabled\");
                                                    \$('#ebtime').attr(\"disabled\",\"disabled\");
                                                } else {
                                                    \$('#sbtime').removeAttr('disabled');
                                                    \$('#ebtime').removeAttr('disabled');
                                                }
                                            });
                                            \$('#appform').submit(function(e){
                                                var check = true;
                                                if(\$('#loc').val() == \"\"){
                                                    check = false;
                                                }else if(\$('#from').val() == \"\"){
                                                    check = false;
                                                }else if(\$('#to').val() == \"\"){
                                                    check = false;
                                                }else if(\$('#stime').val() == \"\"){
                                                    check = false;
                                                }else if(\$('#etime').val() == \"\"){
                                                    check = false;
                                                }else if(\$('#atime').val() == \"\"){
                                                    check = false;
                                                }else if(\$('#ptime').val() == \"\"){
                                                    check = false;
                                                }if(document.getElementById('break').checked){
                                                    if(\$('#sbtime').val() == \"\"){
                                                        check = false;
                                                    }else if(\$('#ebtime').val() == \"\"){
                                                        check = false;
                                                    }
                                                }if(check){
                                                    var sdate = new Date(\$('#from').val());
                                                    var edate = new Date(\$('#to').val());
                                                    if(sdate > edate){
                                                        alert(\"Start date should be greater than end date\")
                                                        e.preventDefault();
                                                        return false;
                                                    }
                                                    var check12 = \"01/01/2017 \"+\$('#stime').val()+\":00\";
                                                    var check34 = \"01/01/2017 \"+\$('#etime').val()+\":00\";
                                                    var stime = Date.parse(check12);
                                                    var etime = Date.parse(check34);
                                                    if(stime > etime){
                                                        alert(\"Start time should be greater than end time\");
                                                        e.preventDefault();
                                                        return false;
                                                    }
                                                    if(!confirm(\"Are you sure ? If there are appointments already, they will be overwritten.\")) return false;

                                                }else{
                                                    alert('Fill Everything in this form');
                                                    e.preventDefault();
                                                }
                                            });
                                        </script>
                                    </div>
                                    <script>
                                        \$('#settings_toggle').click(function(){
                                           \$('#settings').toggle();
                                        });
                                    </script>
                                    <div id=\"listeCalendrie\">
                                        {% if calendrie is null %}
                                            {{ render(controller('AppointmentsBundle:Calendries:getCalendriesByLocation', {'location': 0})) }}
                                        {% else %}
                                            {{ render(controller('AppointmentsBundle:Calendries:getCalendriesByLocation', {'location': calendrie.location})) }}
                                        {% endif %}

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
\t\t\t\tLight Box Start
\t*************************************-->
        <div class=\"modal tg-modal tg-appointmentlightbox fade\" id=\"addSeances\" tabindex=\"-1\" role=\"dialog\">
            <div class=\"modal-dialog tg-modaldialog\">
                <div class=\"modal-content tg-modalcontent\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\"></span></button>
                    <div id=\"addSeancesZone\">

                    </div>
                </div>
            </div>
        </div>
        <div class=\"modal tg-modal tg-appointmentlightbox fade\" id=\"tg-appointmentlightbox\" tabindex=\"-1\" role=\"dialog\">
            <div class=\"modal-dialog tg-modaldialog\">
                <div class=\"modal-content tg-modalcontent\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\"></span></button>
                    <h2>{{ 'Add new job location'|trans }}</h2>
                    {{ render(controller('AppointmentsBundle:Calendries:new')) }}
                </div>

            </div>
        </div>
        <div class=\"modal tg-modal tg-appointmentlightbox fade\" id=\"add_absence\" tabindex=\"-1\" role=\"dialog\">
            <div class=\"modal-dialog tg-modaldialog\">
                <div class=\"modal-content tg-modalcontent\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\"></span></button>
                    <h2>{{ 'Create your absence'|trans }}</h2>
                    <form id=\"abs\" action=\"{{ path('calendries_create_absence') }}\" method=\"post\">
                        <div class=\"col-md-12\">
                            <label for=\"\">Select Location</label>
                            <select name=\"loc\" id=\"location\" class=\"form-control\">
                                <option value=\"\">Select Location</option>
                                {% for item in locations %}
                                    <option value=\"{{ item.id }}\">{{ item.name }}</option>
                                {% endfor %}
                            </select>

                        </div>

                            {#{{ render(controller('DoctorsBundle:Locations:getComboLocationByDoctor' , { 'doctor': app.user.idTable})) }}#}
                        <div class=\"col-md-6\">
                            <label for=\"\">Select Start Date</label>
                            <input type=\"date\" name=\"date\" value=\"{{ \"now\"|date(\"Y-m-d\") }}\" min=\"{{ \"now\"|date(\"Y-m-d\") }}\" class=\"form-control\">
                        </div>
                        <div class=\"col-md-6\">
                            <label for=\"\">Select Number of Days</label>
                            <input type=\"number\" name=\"day\" class=\"form-control\" value=\"1\" min=\"1\">
                            <input type=\"submit\" value=\"Confirm\" class=\"tg-btn pull-right\" style=\"margin-top: 10px;background-color: coral\">
                        </div>

                    </form>
                    <script>
                        \$('#abs').submit(function(e){
                            var val = \$('#location option:selected').val();
                            if(val == \"\"){
                                e.preventDefault();
                                alert('Select Your Calender Location');
                            }

                        })
                    </script>
                </div>

            </div>
        </div>
        <div class=\"modal tg-modal tg-appointmentlightbox fade\" id=\"dup_days\" tabindex=\"-1\" role=\"dialog\">
            <div class=\"modal-dialog tg-modaldialog\">
                <div class=\"modal-content tg-modalcontent\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\"></span></button>
                    <h2>{{ 'Duplicate your days'|trans }}</h2>
                    <div>
                        <div class=\"col-md-12\">
                            <label for=\"\">Select Location</label>
                            <select name=\"loc\" id=\"location1\" class=\"form-control\">
                                <option value=\"\">Select Location</option>
                                {% for item in locations %}
                                    <option value=\"{{ item.id }}\">{{ item.name }}</option>
                                {% endfor %}
                            </select>
                        </div>

                        <div class=\"col-md-6\">
                            <label for=\"\">Period Start Date</label>
                            <input type=\"date\" onchange=\"updatpeedate()\" id=\"psdate\" name=\"psdate\" value=\"{{ \"now\"|date(\"Y-m-d\") }}\" min=\"{{ \"now\"|date(\"Y-m-d\") }}\" class=\"form-control\">
                        </div>
                        <div class=\"col-md-6\">
                            <label for=\"\">Period End Date</label>
                            <input onchange=\"calculatedifference()\" type=\"date\" id=\"pedate\" name=\"pedate\" class=\"form-control\" value=\"1\" min=\"1\">
                        </div>
                        <div class=\"col-md-6\">
                            <label for=\"\">Select Start date In which period will copy</label>
                            <input type=\"date\" onchange=\"changecperiod()\" id=\"sdate\" name=\"sdate\" class=\"form-control\" value=\"1\" min=\"1\">
                        </div>
                        <div class=\"col-md-6\">
                            <p style=\"margin-top: 30px\" id=\"todate\"></p>
                        </div>
                        <div class=\"col-md-12\">
                            <button onclick=\"copy()\" style=\"margin-top: 10px\" class=\"btn btn-info\">Copy Now</button>
                        </div>


                    </div>
                    <script>
                        function copy(){
                            if(\$('#location1').val() == \"\" || \$('#psdate').val() == \"\"|| \$('#pedate').val() == \"\"|| \$('#sdate').val() == \"\"){
                                alert('Select All');
                            }else{
                                window.location = '{{ path('appointments_appointment_copyperiod') }}?loc='+\$('#location1').val()+'&psdate='+\$('#psdate').val()+'&days='+daysdiff+'&sdate='+\$('#sdate').val();
                            }
                        }
                    </script>
                    <script>
                        format = function date2str(x, y) {
                            var z = {
                                M: x.getMonth() + 1,
                                d: x.getDate(),
                                h: x.getHours(),
                                m: x.getMinutes(),
                                s: x.getSeconds()
                            };
                            y = y.replace(/(M+|d+|h+|m+|s+)/g, function(v) {
                                return ((v.length > 1 ? \"0\" : \"\") + eval('z.' + v.slice(-1))).slice(-2)
                            });

                            return y.replace(/(y+)/g, function(v) {
                                return x.getFullYear().toString().slice(-v.length)
                            });
                        }

                        var bdate = new Date(\$('#psdate').val());
                        var bpluone = bdate.getDate() + 1;
                        bdate.setDate(bpluone);
                        \$('#pedate').val(format(bdate,'yyyy-MM-dd'));
                        \$('#pedate').attr('min',format(bdate,'yyyy-MM-dd'));

                        var daysdiff = 0;
                        function updatpeedate(){
                            var date2 = new Date(\$('#psdate').val());
                            var pluone = date2.getDate() + 1;
                            date2.setDate(pluone);
                            \$('#pedate').val(format(date2,'yyyy-MM-dd'));
                            \$('#pedate').attr('min',format(date2,'yyyy-MM-dd'));

                        }
                        function changecperiod(){
                            var date3 = new Date(\$('#sdate').val());
                            \$('#todate').html(\"Appointment will copy from \"+date3.getDate()+\"-\"+(date3.getMonth() + 1)+\"-\"+date3.getFullYear()+\" to \"+daysdiff+\" days onward\");

                        }



                        function calculatedifference(){
                            var date1 = new Date(\$('#psdate').val());
                            var date2 = new Date(\$('#pedate').val());
                            var timeDiff = Math.abs(date2.getTime() - date1.getTime());
                            var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
                            daysdiff = diffDays + 1;
                            var pluone = date2.getDate() + 1;
                            date2.setDate(pluone);
                            \$('#sdate').val(format(date2,'yyyy-MM-dd'));
                            \$('#sdate').attr('min',format(date2,'yyyy-MM-dd'));
                            var date3 = new Date(\$('#sdate').val());
                            \$('#todate').html(\"Appointment will copy from \"+date3.getDate()+\"-\"+(date3.getMonth() + 1)+\"-\"+date3.getFullYear()+\" to \"+daysdiff+\" days onward\");
                        }
                    </script>


                    <script>
                        \$('#abs').submit(function(e){
                            var val = \$('#location option:selected').val();
                            if(val == \"\"){
                                e.preventDefault();
                                alert('Select Your Calender Location');
                            }

                        })
                    </script>
                </div>

            </div>
        </div>

        <!--************************************
                    Light Box End
        *************************************-->
        <script>



            \$(document).ready(function () {
                \$(\"#appointmentsbundle_calendries_location\").change(function () {
                    \$('#dateSearch').val('');

                    var locationId = \$('#appointmentsbundle_calendries_location').val();
                    var URL = \"{{ path('calendries_getCalendriesByLocation', {'location' : 'sss'}) }}\";
                    URL = URL.replace(/sss/g, locationId);
                    \$.ajax({
                        type: \"GET\",
                        url: URL,
                        cache: false,
                        success: function (response) {
                            \$('#addSeanceFram').hide();
                            \$(\"#listeCalendrie\").html(response);
                            return true;
                        }
                    });
                });

            });
        </script>
        </div>
        <!--************************************
                Wrapper End
        *************************************-->
        {% include ('default/footer.html.twig') %}
    {% endblock %}
{% endif %}", "calendries/index.html.twig", "C:\\xampp\\htdocs\\VaranMedical\\app\\Resources\\views\\calendries\\index.html.twig");
    }
}
