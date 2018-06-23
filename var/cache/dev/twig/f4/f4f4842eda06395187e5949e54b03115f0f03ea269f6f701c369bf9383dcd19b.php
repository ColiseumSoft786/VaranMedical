<?php

/* default/homepage.html.twig */
class __TwigTemplate_6cb35296b62ca986a1fbc1babdd4f0b35cc6cff77d4466a88ed6cbbb13f91da8 extends Twig_Template
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
        $__internal_ee6afcaa7cf61457e3d5a4ab71b586b76ba47e401d29edb955ed0a040d8bc06f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee6afcaa7cf61457e3d5a4ab71b586b76ba47e401d29edb955ed0a040d8bc06f->enter($__internal_ee6afcaa7cf61457e3d5a4ab71b586b76ba47e401d29edb955ed0a040d8bc06f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/homepage.html.twig"));

        $__internal_7d4c2d5b3aea8b74543fee1c8068f3f089c2d427628ebd53cb540eea52f9466b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d4c2d5b3aea8b74543fee1c8068f3f089c2d427628ebd53cb540eea52f9466b->enter($__internal_7d4c2d5b3aea8b74543fee1c8068f3f089c2d427628ebd53cb540eea52f9466b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/homepage.html.twig"));

        // line 1
        $this->loadTemplate("base.html.twig", "default/homepage.html.twig", 1)->display($context);
        // line 2
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_ee6afcaa7cf61457e3d5a4ab71b586b76ba47e401d29edb955ed0a040d8bc06f->leave($__internal_ee6afcaa7cf61457e3d5a4ab71b586b76ba47e401d29edb955ed0a040d8bc06f_prof);

        
        $__internal_7d4c2d5b3aea8b74543fee1c8068f3f089c2d427628ebd53cb540eea52f9466b->leave($__internal_7d4c2d5b3aea8b74543fee1c8068f3f089c2d427628ebd53cb540eea52f9466b_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_2bfb7d68a7ab84b7b9fb44b2dd97b01b21752e42e0eab2b3c91ebb70d0f595a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bfb7d68a7ab84b7b9fb44b2dd97b01b21752e42e0eab2b3c91ebb70d0f595a7->enter($__internal_2bfb7d68a7ab84b7b9fb44b2dd97b01b21752e42e0eab2b3c91ebb70d0f595a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0f9c9aa3c79669ceece039dc9a6b88178b1366042bba1f2d5a070cabab7da432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f9c9aa3c79669ceece039dc9a6b88178b1366042bba1f2d5a070cabab7da432->enter($__internal_0f9c9aa3c79669ceece039dc9a6b88178b1366042bba1f2d5a070cabab7da432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<body class=\"tg-home tg-login\">
\t<!--[if lt IE 8]>
\t<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
\t<![endif]-->
\t<!--************************************
\t\t\tPreloader Start
\t*************************************-->

\t<!--************************************
\t\t\tPreloader End
\t*************************************-->

\t<!--************************************
\t\t\tWrapper Start
\t*************************************-->
\t<div id=\"tg-wrapper\" class=\"tg-wrapper tg-haslayout\">
\t\t";
        // line 19
        $this->loadTemplate("default/header.html.twig", "default/homepage.html.twig", 19)->display($context);
        // line 20
        echo "\t\t<!--************************************
\t\t\t\tHome Banner Start
\t\t*************************************-->
\t\t<div id=\"tg-homebanner\" class=\"tg-homebanner tg-haslayout\">
\t\t\t<figure class=\"tg-bannerbg\">
\t\t\t\t<img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/banner/index.jpg"), "html", null, true);
        echo "\" alt=\"image description\">
\t\t\t</figure>
\t\t\t<div class=\"tg-bannercontent\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t<form class=\"tg-formtheme tg-formsearch\" action=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("doctor_search");
        echo "\" method=\"get\">
\t\t\t\t\t\t\t\t<div class=\"tg-sectionhead\">
\t\t\t\t\t\t\t\t\t<div class=\"tg-sectiontitle\">
\t\t\t\t\t\t\t\t\t\t<h1>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Find a Medical Help"), "html", null, true);
        echo "!</h1>
\t\t\t\t\t\t\t\t\t\t<img class=\"tg-svginject\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/sectionline.svg"), "html", null, true);
        echo "\" alt=\"image description\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"mots\" class=\"form-control\" placeholder=\"Specialities, Doctors, Hospitals, Labs, Spas...\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"tg-btnformsearch\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t<div class=\"tg-searchbulder\">
\t\t\t\t\t\t\t\t\t<div id=\"tg-subcategories\" class=\"tg-subcategories\">
\t\t\t\t\t\t\t\t\t\t<div id=\"doctorscategory\" class=\"tg-tabcontent tg-active\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"dentist\" name=\"subcategory\" value=\"Dentist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"dentist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-16.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dentist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ent\" name=\"subcategory\" value=\"Ear-Nose-Throat (ENT)\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-17.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ear-Nose-Throat"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"gastroenterologist\" name=\"subcategory\" value=\"Gastroenterologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"gastroenterologist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-18.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gastroenterologist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"psychiatrist\" name=\"subcategory\" value=\"Psychiatrist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"psychiatrist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-19.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Psychiatrist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"urologist\" name=\"subcategory\" value=\"Urologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"urologist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-20.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Urologist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"homeopath\" name=\"subcategory\" value=\"Homeopath\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"homeopath\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-21.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Homeopath"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ophthalmologist\" name=\"subcategory\" value=\"Ophthalmologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ophthalmologist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-22.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ophthalmologist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ayurveda\" name=\"subcategory\" value=\"Ayurveda\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ayurveda\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-23.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ayurveda"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"dermatologist\" name=\"subcategory\" value=\"Dermatologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"dermatologist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-24.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dermatologist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"neurologist\" name=\"subcategory\" value=\"Neurologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"neurologist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-25.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Neurologist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div id=\"hospitalscategory\" class=\"tg-tabcontent\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"homeopath2\" name=\"subcategory\" value=\"Homeopath\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"homeopath2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-21.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Homeopath"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ophthalmologist2\" name=\"subcategory\" value=\"Ophthalmologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ophthalmologist2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-22.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ophthalmologist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ayurveda2\" name=\"subcategory\" value=\"Ayurveda\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ayurveda2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-23.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ayurveda"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"dermatologist2\" name=\"subcategory\" value=\"Dermatologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"dermatologist2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-24.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dermatologist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"neurologist2\" name=\"subcategory\" value=\"Neurologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"neurologist2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-25.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Neurologist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"dentist2\" name=\"subcategory\" value=\"Dentist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"dentist2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-16.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dentist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ent2\" name=\"subcategory\" value=\"Ear-Nose-Throat (ENT)\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ent2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-17.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ear-Nose-Throat"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"gastroenterologist2\" name=\"subcategory\" value=\"Gastroenterologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"gastroenterologist2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-18.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gastroenterologist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"psychiatrist2\" name=\"subcategory\" value=\"Psychiatrist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"psychiatrist2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-19.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Psychiatrist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"urologist2\" name=\"subcategory\" value=\"Urologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"urologist2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-20.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Urologist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div id=\"spascategory\" class=\"tg-tabcontent\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"dentist3\" name=\"subcategory\" value=\"Dentist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"dentist3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-16.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dentist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ent3\" name=\"subcategory\" value=\"Ear-Nose-Throat (ENT)\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ent3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-17.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ear-Nose-Throat"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"gastroenterologist3\" name=\"subcategory\" value=\"Gastroenterologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"gastroenterologist3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-18.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gastroenterologist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"psychiatrist3\" name=\"subcategory\" value=\"Psychiatrist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"psychiatrist3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-19.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Psychiatrist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"urologist3\" name=\"subcategory\" value=\"Urologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"urologist3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-20.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Urologist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"homeopath3\" name=\"subcategory\" value=\"Homeopath\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"homeopath3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-21.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Homeopath"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ophthalmologist3\" name=\"subcategory\" value=\"Ophthalmologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ophthalmologist3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-22.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ophthalmologist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ayurveda3\" name=\"subcategory\" value=\"Ayurveda\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ayurveda3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-23.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ayurveda"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"dermatologist3\" name=\"subcategory\" value=\"Dermatologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"dermatologist3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-24.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dermatologist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"neurologist3\" name=\"subcategory\" value=\"Neurologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"neurologist3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-25.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Neurologist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div id=\"pharmaciescategory\" class=\"tg-tabcontent\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"homeopath4\" name=\"subcategory\" value=\"Homeopath\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"homeopath4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-21.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Homeopath"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ophthalmologist4\" name=\"subcategory\" value=\"Ophthalmologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ophthalmologist4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-22.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ophthalmologist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ayurveda4\" name=\"subcategory\" value=\"Ayurveda\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ayurveda4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-23.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ayurveda"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"dermatologist4\" name=\"subcategory\" value=\"Dermatologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"dermatologist4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-24.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dermatologist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"neurologist4\" name=\"subcategory\" value=\"Neurologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"neurologist4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-25.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Neurologist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"dentist4\" name=\"subcategory\" value=\"Dentist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"dentist4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-16.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dentist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ent4\" name=\"subcategory\" value=\"Ear-Nose-Throat (ENT)\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ent4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-17.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ear-Nose-Throat"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"gastroenterologist4\" name=\"subcategory\" value=\"Gastroenterologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"gastroenterologist4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-18.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gastroenterologist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"psychiatrist4\" name=\"subcategory\" value=\"Psychiatrist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"psychiatrist4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-19.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Psychiatrist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"urologist4\" name=\"subcategory\" value=\"Urologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"urologist4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-20.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Urologist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div id=\"labscategory\" class=\"tg-tabcontent\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"dentist5\" name=\"subcategory\" value=\"Dentist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"dentist5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-16.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dentist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ent5\" name=\"subcategory\" value=\"Ear-Nose-Throat (ENT)\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ent5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-17.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ear-Nose-Throat"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"gastroenterologist5\" name=\"subcategory\" value=\"Gastroenterologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"gastroenterologist5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-18.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gastroenterologist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"psychiatrist5\" name=\"subcategory\" value=\"Psychiatrist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"psychiatrist5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-19.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Psychiatrist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"urologist5\" name=\"subcategory\" value=\"Urologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"urologist5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-20.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Urologist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"homeopath5\" name=\"subcategory\" value=\"Homeopath\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"homeopath5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-21.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Homeopath"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ophthalmologist5\" name=\"subcategory\" value=\"Ophthalmologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ophthalmologist5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-22.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 379
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ophthalmologist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ayurveda5\" name=\"subcategory\" value=\"Ayurveda\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ayurveda5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-23.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ayurveda"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"dermatologist5\" name=\"subcategory\" value=\"Dermatologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"dermatologist5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-24.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dermatologist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"neurologist5\" name=\"subcategory\" value=\"Neurologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"neurologist5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-25.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 400
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Neurologist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div id=\"fitnesscategory\" class=\"tg-tabcontent\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"homeopath6\" name=\"subcategory\" value=\"Homeopath\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"homeopath6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-21.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 409
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Homeopath"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ophthalmologist6\" name=\"subcategory\" value=\"Ophthalmologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ophthalmologist6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-22.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 416
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ophthalmologist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ayurveda6\" name=\"subcategory\" value=\"Ayurveda\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ayurveda6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-23.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 423
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ayurveda"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"dermatologist6\" name=\"subcategory\" value=\"Dermatologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"dermatologist6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-24.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 430
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dermatologist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"neurologist6\" name=\"subcategory\" value=\"Neurologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"neurologist6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 436
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-25.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 437
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Neurologist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"dentist6\" name=\"subcategory\" value=\"Dentist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"dentist6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 443
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-16.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 444
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dentist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ent6\" name=\"subcategory\" value=\"Ear-Nose-Throat (ENT)\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ent6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 450
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-17.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 451
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ear-Nose-Throat"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"gastroenterologist6\" name=\"subcategory\" value=\"Gastroenterologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"gastroenterologist6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 457
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-18.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 458
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gastroenterologist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"psychiatrist6\" name=\"subcategory\" value=\"Psychiatrist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"psychiatrist6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 464
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-19.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 465
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Psychiatrist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"urologist6\" name=\"subcategory\" value=\"Urologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"urologist6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 471
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-20.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 472
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Urologist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div id=\"bloodbankcategory\" class=\"tg-tabcontent\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"dentist7\" name=\"subcategory\" value=\"Dentist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"dentist7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 480
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-16.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 481
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dentist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ent7\" name=\"subcategory\" value=\"Ear-Nose-Throat (ENT)\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ent7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 487
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-17.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ear-Nose-Throat"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"gastroenterologist7\" name=\"subcategory\" value=\"Gastroenterologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"gastroenterologist7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-18.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 495
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gastroenterologist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"psychiatrist7\" name=\"subcategory\" value=\"Psychiatrist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"psychiatrist7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 501
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-19.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 502
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Psychiatrist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"urologist7\" name=\"subcategory\" value=\"Urologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"urologist7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 508
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-20.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 509
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Urologist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"homeopath7\" name=\"subcategory\" value=\"Homeopath\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"homeopath7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 515
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-21.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 516
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Homeopath"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ophthalmologist7\" name=\"subcategory\" value=\"Ophthalmologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ophthalmologist7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 522
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-22.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 523
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ophthalmologist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ayurveda7\" name=\"subcategory\" value=\"Ayurveda\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ayurveda7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 529
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-23.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 530
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ayurveda"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"dermatologist7\" name=\"subcategory\" value=\"Dermatologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"dermatologist7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 536
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-24.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 537
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dermatologist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"neurologist7\" name=\"subcategory\" value=\"Neurologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"neurologist7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 543
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-25.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 544
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Neurologist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div id=\"clinicscategory\" class=\"tg-tabcontent\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"homeopath8\" name=\"subcategory\" value=\"Homeopath\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"homeopath8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 552
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-21.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 553
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Homeopath"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ophthalmologist8\" name=\"subcategory\" value=\"Ophthalmologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ophthalmologist8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 559
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-22.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 560
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ophthalmologist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ayurveda8\" name=\"subcategory\" value=\"Ayurveda\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ayurveda8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 566
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-23.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 567
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ayurveda"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"dermatologist8\" name=\"subcategory\" value=\"Dermatologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"dermatologist8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 573
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-24.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 574
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dermatologist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"neurologist8\" name=\"subcategory\" value=\"Neurologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"neurologist8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 580
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-25.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 581
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Neurologist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"dentist8\" name=\"subcategory\" value=\"Dentist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"dentist8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 587
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-16.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 588
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dentist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ent8\" name=\"subcategory\" value=\"Ear-Nose-Throat (ENT)\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ent8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 594
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-17.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 595
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ear-Nose-Throat"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"gastroenterologist8\" name=\"subcategory\" value=\"Gastroenterologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"gastroenterologist8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 601
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-18.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 602
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gastroenterologist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"psychiatrist8\" name=\"subcategory\" value=\"Psychiatrist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"psychiatrist8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 608
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-19.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 609
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Psychiatrist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"urologist8\" name=\"subcategory\" value=\"Urologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"urologist8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"";
        // line 615
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-20.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 616
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Urologist"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--************************************
\t\t\t\tHome Banner End
\t\t*************************************-->
\t\t<!--************************************
\t\t\t\tMain Start
\t\t*************************************-->
\t\t<main id=\"tg-main\" class=\"tg-main tg-haslayout\">
\t\t\t<!--************************************
\t\t\t\t\tFeatures Start
\t\t\t*************************************-->
\t\t\t<section class=\"tg-main-section tg-haslayout\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"tg-sectionhead\">
\t\t\t\t\t\t\t\t<div class=\"tg-sectiontitle\">
\t\t\t\t\t\t\t\t\t<h2>";
        // line 644
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("A Complete Medical Portal"), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t\t\t\t<img class=\"tg-svginject\" src=\"";
        // line 645
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/sectionline.svg"), "html", null, true);
        echo "\" alt=\"image description\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tg-features\">
\t\t\t\t\t\t\t<div class=\"col-sm-4 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"tg-feature\">
\t\t\t\t\t\t\t\t\t<figure class=\"tg-featureicon\"><img src=\"";
        // line 652
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-02.png"), "html", null, true);
        echo "\" alt=\"image description\"></figure>
\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">";
        // line 653
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Find Medical Help"), "html", null, true);
        echo "</a></h3>
\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
\t\t\t\t\t\t\t\t\t\t<p>Consectetur adipisicing elit eiusmod tempor incididunt ut labore dolore magna aliqua minim veniam quis nostrud exercitation ullamco laboris.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"tg-feature\">
\t\t\t\t\t\t\t\t\t<figure class=\"tg-featureicon\"><img src=\"";
        // line 661
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-03.png"), "html", null, true);
        echo "\" alt=\"image description\"></figure>
\t\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">";
        // line 662
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Make Appointment"), "html", null, true);
        echo "</a></h3>
\t\t\t\t\t\t\t\t<div class=\"tg-description\">
\t\t\t\t\t\t\t\t\t\t<p>Consectetur adipisicing elit eiusmod tempor incididunt ut labore dolore magna aliqua minim veniam quis nostrud exercitation ullamco laboris.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"tg-feature\">
\t\t\t\t\t\t\t\t\t<figure class=\"tg-featureicon\"><img src=\"";
        // line 670
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-04.png"), "html", null, true);
        echo "\" alt=\"image description\"></figure>
\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">";
        // line 671
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Get Facilitate"), "html", null, true);
        echo "</a></h3>
\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
\t\t\t\t\t\t\t\t\t\t<p>Consectetur adipisicing elit eiusmod tempor incididunt ut labore dolore magna aliqua minim veniam quis nostrud exercitation ullamco laboris.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!--************************************
\t\t\t\t\tFeatures End
\t\t\t*************************************-->
\t\t\t<!--************************************
\t\t\t\t\tStatistics Start
\t\t\t*************************************-->
\t\t\t<section class=\"tg-main-section tg-haslayout tg-parallaximg tg-imgoverlap\" data-bleed=\"-17\" data-appear-top-offset=\"600\" data-parallax=\"scroll\" data-image-src=\"";
        // line 687
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/parallax/bgparallax-02.jpg"), "html", null, true);
        echo "\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"tg-statisticscounters\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"tg-counter\">
\t\t\t\t\t\t\t\t\t\t\t<h2><span data-from=\"0\" data-to=\"36012\" data-speed=\"8000\" data-refresh-interval=\"50\">36012</span></h2>
\t\t\t\t\t\t\t\t\t\t<h3>";
        // line 695
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Happy Customers"), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tg-counter\">
\t\t\t\t\t\t\t\t\t\t<figure><img src=\"";
        // line 698
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-06.png"), "html", null, true);
        echo "\" alt=\"image description\"></figure>
\t\t\t\t\t\t\t\t\t\t<h2><span data-from=\"0\" data-to=\"21067\" data-speed=\"8000\" data-refresh-interval=\"50\">21067</span></h2>
\t\t\t\t\t\t\t\t\t\t<h3>";
        // line 700
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Active Members"), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tg-counter\">
\t\t\t\t\t\t\t\t\t\t<figure><img src=\"";
        // line 703
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-07.png"), "html", null, true);
        echo "\" alt=\"image description\"></figure>
\t\t\t\t\t\t\t\t\t\t<h2><span data-from=\"0\" data-to=\"6954\" data-speed=\"8000\" data-refresh-interval=\"50\">6954</span></h2>
\t\t\t\t\t\t\t\t\t\t<h3>";
        // line 705
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("New Members"), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6 hidden-xs\">
\t\t\t\t\t\t\t<figure class=\"tg-sectionimg\"><img src=\"";
        // line 711
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/img-04.png"), "html", null, true);
        echo "\" alt=\"image description\"></figure>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!--************************************
\t\t\t\t\tStatistics End
\t\t\t*************************************-->
\t\t\t<!--************************************
\t\t\t\t\tFeatured DiretPost Start
\t\t\t*************************************-->
\t\t\t<section class=\"tg-main-section tg-haslayout\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"tg-sectionhead\">
\t\t\t\t\t\t\t\t<div class=\"tg-sectiontitle\">
\t\t\t\t\t\t\t\t\t<h2>";
        // line 728
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Featured Listings"), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t\t\t\t<img class=\"tg-svginject\" src=\"";
        // line 729
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/sectionline.svg"), "html", null, true);
        echo "\" alt=\"image description\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul id=\"tg-filterbalenav\" class=\"tg-filterbalenav option-set\">
\t\t\t\t\t\t\t\t<li><a class=\"tg-active\" data-filter=\"*\" href=\"javascript:void(0);\">all</a></li>
\t\t\t\t\t\t\t\t<li><a data-filter=\".doctors\" href=\"javascript:void(0);\">Doctors</a></li>
\t\t\t\t\t\t\t\t<li><a data-filter=\".hospitals\" href=\"javascript:void(0);\">Hospitals</a></li>
\t\t\t\t\t\t\t\t<li><a data-filter=\".spas\" href=\"javascript:void(0);\">Spas</a></li>
\t\t\t\t\t\t\t\t<li><a data-filter=\".pharmacies\" href=\"javascript:void(0);\">Pharmacies</a></li>
\t\t\t\t\t\t\t\t<li><a data-filter=\".lab\" href=\"javascript:void(0);\">Lab</a></li>
\t\t\t\t\t\t\t\t<li><a data-filter=\".fitnesscenters\" href=\"javascript:void(0);\">Fitness Centers</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div id=\"filter-masonry\" class=\"tg-featureddirectposts tg-searchresult tg-filtermasonry\">
\t\t\t\t\t\t\t\t<div class=\"tg-directpost doctors\">
\t\t\t\t\t\t\t\t\t<figure class=\"tg-directpostimg\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 744
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/directpost/img-01.jpg"), "html", null, true);
        echo "\" alt=\"image description\"></a>
\t\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-usericon tg-iconfeatured\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<em class=\"tg-usericonholder\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bolt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 749
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("featured"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</em>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-usericon tg-iconvarified\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<em class=\"tg-usericonholder\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shield\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 755
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("verified"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</em>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t<div class=\"tg-directinfo\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-leftarea\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-directposthead\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">Dr. Pascal David</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-subjects\">MDS - Paedodontics &amp; Preventive Dentistry</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-contactinfo\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-location-arrow\"></i><address>154 Bayswater Rd, W2 4HP, UK</address></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-phone\"></i><span>+4 235 856843</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-rightarea\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-bookappoinment\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-thumbs-o-up\"></i>99%<span>(1009 votes)</span></a>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"tg-btn\" data-toggle=\"modal\" data-target=\"#tg-appointmentlightbox\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 775
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Book Appointment"), "html", null, true);
        echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-metadata\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><span class=\"tg-stars\"><span></span></span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-heart tg-like\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tg-directpost hospitals\">
\t\t\t\t\t\t\t\t\t<figure class=\"tg-directpostimg\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 786
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/directpost/img-02.jpg"), "html", null, true);
        echo "\" alt=\"image description\"></a>
\t\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-usericon tg-iconfeatured\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<em class=\"tg-usericonholder\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bolt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 791
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("featured"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</em>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-usericon tg-iconvarified\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<em class=\"tg-usericonholder\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shield\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 797
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("verified"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</em>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t<div class=\"tg-directinfo\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-leftarea\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-directposthead\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">Dr. Pascal David</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-subjects\">MDS - Pédiatre&amp; Dentiste</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-contactinfo\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-location-arrow\"></i><address>52 Allée des trois rois 31100 Toulouse</address></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-phone\"></i><span>+4 235 856843</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-rightarea\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-bookappoinment\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-thumbs-o-up\"></i>99%<span>(1009 votes)</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"tg-btn\" data-toggle=\"modal\" data-target=\"#tg-appointmentlightbox\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 817
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Book Appointment"), "html", null, true);
        echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-metadata\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><span class=\"tg-stars\"><span></span></span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-heart tg-like\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tg-directpost spas\">
\t\t\t\t\t\t\t\t\t<figure class=\"tg-directpostimg\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 828
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/directpost/img-03.jpg"), "html", null, true);
        echo "\" alt=\"image description\"></a>
\t\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-usericon tg-iconfeatured\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<em class=\"tg-usericonholder\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bolt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 833
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("featured"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</em>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-usericon tg-iconvarified\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<em class=\"tg-usericonholder\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shield\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 839
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("verified"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</em>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t<div class=\"tg-directinfo\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-leftarea\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-directposthead\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">Dr. Pascal David</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-subjects\">MDS - Pédiatre&amp; Dentiste</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-contactinfo\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-location-arrow\"></i><address>52 Allée des trois rois 31100 Toulouse</address></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-phone\"></i><span>+33 05 25 25 31</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-rightarea\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-bookappoinment\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-thumbs-o-up\"></i>99%<span>(1009 votes)</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"tg-btn\">Available on Call</button>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-metadata\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><span class=\"tg-stars\"><span></span></span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-heart tg-like\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tg-directpost pharmacies\">
\t\t\t\t\t\t\t\t\t<figure class=\"tg-directpostimg\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 869
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/directpost/img-04.jpg"), "html", null, true);
        echo "\" alt=\"image description\"></a>
\t\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-usericon tg-iconfeatured\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<em class=\"tg-usericonholder\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bolt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 874
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("featured"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</em>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-usericon tg-iconvarified\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<em class=\"tg-usericonholder\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shield\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 880
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("verified"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</em>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t<div class=\"tg-directinfo\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-leftarea\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-directposthead\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">Dr. Pascal David</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-subjects\">MDS - Pédiatre&amp; Dentiste</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-contactinfo\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-location-arrow\"></i><address>52 Allée des trois rois 31100 Toulouse</address></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-phone\"></i><span>+33 05 25 25 31</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-rightarea\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-bookappoinment\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-thumbs-o-up\"></i>99%<span>(1009 votes)</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"tg-btn\" data-toggle=\"modal\" data-target=\"#tg-appointmentlightbox\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 900
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Book Appointment"), "html", null, true);
        echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-metadata\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><span class=\"tg-stars\"><span></span></span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-heart tg-like\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tg-directpost lab\">
\t\t\t\t\t\t\t\t\t<figure class=\"tg-directpostimg\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 911
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/directpost/img-05.jpg"), "html", null, true);
        echo "\" alt=\"image description\"></a>
\t\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-usericon tg-iconfeatured\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<em class=\"tg-usericonholder\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bolt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 916
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("featured"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</em>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-usericon tg-iconvarified\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<em class=\"tg-usericonholder\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shield\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 922
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("verified"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</em>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t<div class=\"tg-directinfo\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-leftarea\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-directposthead\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">Dr. Pascal David</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-subjects\">MDS - Pédiatre&amp; Dentiste</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-contactinfo\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-location-arrow\"></i><address>52 Allée des trois rois 31100 Toulouse</address></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-phone\"></i><span>+33 05 25 25 31</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-rightarea\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-bookappoinment\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-thumbs-o-up\"></i>99%<span>(1009 votes)</span></a>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"tg-btn\">";
        // line 941
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Available on Call"), "html", null, true);
        echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-metadata\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><span class=\"tg-stars\"><span></span></span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-heart tg-like\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tg-directpost fitnesscenters\">
\t\t\t\t\t\t\t\t\t<figure class=\"tg-directpostimg\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 952
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/directpost/img-01.jpg"), "html", null, true);
        echo "\" alt=\"image description\"></a>
\t\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-usericon tg-iconfeatured\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<em class=\"tg-usericonholder\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bolt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 957
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("featured"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</em>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-usericon tg-iconvarified\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<em class=\"tg-usericonholder\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shield\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 963
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("verified"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</em>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t<div class=\"tg-directinfo\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-leftarea\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-directposthead\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">Dr. Pascal David</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-subjects\">MDS - Pédiatre&amp; Dentiste</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-contactinfo\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-location-arrow\"></i><address>52 Allée des trois rois 31100 Toulouse</address></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-phone\"></i><span>+33 05 25 25 31</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-rightarea\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-bookappoinment\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-thumbs-o-up\"></i>99%<span>(1009 votes)</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"tg-btn\" data-toggle=\"modal\" data-target=\"#tg-appointmentlightbox\">";
        // line 982
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Book Appointment"), "html", null, true);
        echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-metadata\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><span class=\"tg-stars\"><span></span></span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-heart tg-like\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!--************************************
\t\t\t\t\tFeatured DiretPost End
\t\t\t*************************************-->
\t\t\t<!--************************************
\t\t\t\t\tStudent Review Start
\t\t\t*************************************-->
\t\t\t<section class=\"tg-main-section tg-haslayout tg-parallaximg\" data-position-x=\"center\" data-position-y=\"center\" data-appear-top-offset=\"600\" data-parallax=\"scroll\" data-bleed=\"0\" data-image-src=\"";
        // line 1002
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/parallax/bgparallax-03.jpg"), "html", null, true);
        echo "\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-10 col-md-offset-1 col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"tg-sectionhead\">
\t\t\t\t\t\t\t\t<div class=\"tg-sectiontitle\">
\t\t\t\t\t\t\t\t\t<h2>";
        // line 1008
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Valuable Feedback"), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t\t\t\t<img class=\"tg-svginject\" src=\"";
        // line 1009
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/sectionline.svg"), "html", null, true);
        echo "\" alt=\"image description\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"tg-feedbackslider\" class=\"tg-feedbackslider tg-feedback\">
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<div class=\"tg-feedbackcontent\">
\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t<q>Consectetur adipisicing elit sed do eiusmod tempor incididunt lab doloregna aliqua ut enim ad minim veniam nostrud exercitation liatota ullamco.</q>
\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t<h3>Dr. Pascal David</h3>
\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-metadata\">
\t\t\t\t\t\t\t\t\t\t\t<li><span>MDS - Pédiatre&amp; Dentiste </span></li>
\t\t\t\t\t\t\t\t\t\t\t<li><span class=\"tg-tooltip tg-stars\" data-toggle=\"tooltip\" data-placement=\"top right\" title=\"Moyenne de 4,85 sur la base de 423 avis\"><span></span></span></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<div class=\"tg-feedbackcontent\">
\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t<q>Consectetur adipisicing elit sed do eiusmod tempor incididunt lab doloregna aliqua ut enim ad minim veniam nostrud exercitation liatota ullamco.</q>
\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t<h3>Laurence Delgado</h3>
\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-metadata\">
\t\t\t\t\t\t\t\t\t\t\t<li><span>MDS - Pédiatre&amp; Dentiste </span></li>
\t\t\t\t\t\t\t\t\t\t\t<li><span class=\"tg-tooltip tg-stars\" data-toggle=\"tooltip\" data-placement=\"top right\" title=\"Moyenne de 4,85 sur la base de 423 avis\"><span></span></span></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<div class=\"tg-feedbackcontent\">
\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t<q>Consectetur adipisicing elit sed do eiusmod tempor incididunt lab doloregna aliqua ut enim ad minim veniam nostrud exercitation liatota ullamco.</q>
\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t<h3>Ahmad Carstensen</h3>
\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-metadata\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><span>MDS - Pédiatre&amp; Dentiste </span></li>
\t\t\t\t\t\t\t\t\t\t\t<li><span class=\"tg-tooltip tg-stars\" data-toggle=\"tooltip\" data-placement=\"top right\" title=\"Moyenne de 4,85 sur la base de 423 avis\"><span></span></span></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<div class=\"tg-feedbackcontent\">
\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t<q>Consectetur adipisicing elit sed do eiusmod tempor incididunt lab doloregna aliqua ut enim ad minim veniam nostrud exercitation liatota ullamco.</q>
\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t<h3>Jean Troupe</h3>
\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-metadata\">
\t\t\t\t\t\t\t\t\t\t\t<li><span>MDS - Pédiatre&amp; Dentiste </span></li>
\t\t\t\t\t\t\t\t\t\t\t<li><span class=\"tg-tooltip tg-stars\" data-toggle=\"tooltip\" data-placement=\"top right\" title=\"Moyenne de 4,85 sur la base de 423 avis\"><span></span></span></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<div class=\"tg-feedbackcontent\">
\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t<q>Consectetur adipisicing elit sed do eiusmod tempor incididunt lab doloregna aliqua ut enim ad minim veniam nostrud exercitation liatota ullamco.</q>
\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t<h3>Mégane Marcou</h3>
\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-metadata\">
\t\t\t\t\t\t\t\t\t\t\t<li><span>MDS - Pédiatre&amp; Dentiste </span></li>
\t\t\t\t\t\t\t\t\t\t\t<li><span class=\"tg-tooltip tg-stars\" data-toggle=\"tooltip\" data-placement=\"top right\" title=\"Moyenne de 4,85 sur la base de 423 avis\"><span></span></span></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<div class=\"tg-feedbackcontent\">
\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t<q>Consectetur adipisicing elit sed do eiusmod tempor incididunt lab doloregna aliqua ut enim ad minim veniam nostrud exercitation liatota ullamco.</q>
\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t<h3>Gérard Calvo</h3>
\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-metadata\">
\t\t\t\t\t\t\t\t\t\t\t<li><span>MDS - Pédiatre&amp; Dentiste </span></li>
\t\t\t\t\t\t\t\t\t\t\t<li><span class=\"tg-tooltip tg-stars\" data-toggle=\"tooltip\" data-placement=\"top right\" title=\"Moyenne de 4,85 sur la base de 423 avis\"><span></span></span></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"tg-reviewerdpslider\" class=\"tg-reviewerdpslider tg-reviewerdp\">
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<figure><img src=\"";
        // line 1088
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/thumbnails/img-01.jpg"), "html", null, true);
        echo "\" alt=\"image description\"></figure>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<figure><img src=\"";
        // line 1091
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/thumbnails/img-02.jpg"), "html", null, true);
        echo "\" alt=\"image description\"></figure>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<figure><img src=\"";
        // line 1094
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/thumbnails/img-03.jpg"), "html", null, true);
        echo "\" alt=\"image description\"></figure>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<figure><img src=\"";
        // line 1097
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/thumbnails/img-04.jpg"), "html", null, true);
        echo "\" alt=\"image description\"></figure>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<figure><img src=\"";
        // line 1100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/thumbnails/img-05.jpg"), "html", null, true);
        echo "\" alt=\"image description\"></figure>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<figure><img src=\"";
        // line 1103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/thumbnails/img-06.jpg"), "html", null, true);
        echo "\" alt=\"image description\"></figure>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!--************************************
\t\t\t\t\tStudent Review End
\t\t\t*************************************-->
\t\t\t<!--************************************
\t\t\t\t\tTrusted By Many Start
\t\t\t*************************************-->
\t\t\t<section class=\"tg-main-section tg-haslayout\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"tg-trustedbymany\">
\t\t\t\t\t\t\t\t<div class=\"tg-sectionhead\">
\t\t\t\t\t\t\t\t\t<div class=\"tg-sectiontitle\">
\t\t\t\t\t\t\t\t\t\t<h2>";
        // line 1123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Trusted By Many"), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t\t\t\t\t<img class=\"tg-svginject\" src=\"";
        // line 1124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/sectionline.svg"), "html", null, true);
        echo "\" alt=\"image description\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"tg-brandsslider\" class=\"tg-brandsslider tg-brands\">
\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t<figure><a href=\"#\"><img src=\"";
        // line 1129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/brands/img-01.png"), "html", null, true);
        echo "\" alt=\"image description\"></a></figure>
\t\t\t\t\t\t\t\t\t\t<figure><a href=\"#\"><img src=\"";
        // line 1130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/brands/img-02.png"), "html", null, true);
        echo "\" alt=\"image description\"></a></figure>
\t\t\t\t\t\t\t\t\t\t<figure><a href=\"#\"><img src=\"";
        // line 1131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/brands/img-03.png"), "html", null, true);
        echo "\" alt=\"image description\"></a></figure>
\t\t\t\t\t\t\t\t\t\t<figure><a href=\"#\"><img src=\"";
        // line 1132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/brands/img-04.png"), "html", null, true);
        echo "\" alt=\"image description\"></a></figure>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t<figure><a href=\"#\"><img src=\"";
        // line 1135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/brands/img-01.png"), "html", null, true);
        echo "\" alt=\"image description\"></a></figure>
\t\t\t\t\t\t\t\t\t\t<figure><a href=\"#\"><img src=\"";
        // line 1136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/brands/img-02.png"), "html", null, true);
        echo "\" alt=\"image description\"></a></figure>
\t\t\t\t\t\t\t\t\t\t<figure><a href=\"#\"><img src=\"";
        // line 1137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/brands/img-03.png"), "html", null, true);
        echo "\" alt=\"image description\"></a></figure>
\t\t\t\t\t\t\t\t\t\t<figure><a href=\"#\"><img src=\"";
        // line 1138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/brands/img-04.png"), "html", null, true);
        echo "\" alt=\"image description\"></a></figure>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t<figure><a href=\"#\"><img src=\"";
        // line 1141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/brands/img-01.png"), "html", null, true);
        echo "\" alt=\"image description\"></a></figure>
\t\t\t\t\t\t\t\t\t\t<figure><a href=\"#\"><img src=\"";
        // line 1142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/brands/img-02.png"), "html", null, true);
        echo "\" alt=\"image description\"></a></figure>
\t\t\t\t\t\t\t\t\t\t<figure><a href=\"#\"><img src=\"";
        // line 1143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/brands/img-03.png"), "html", null, true);
        echo "\" alt=\"image description\"></a></figure>
\t\t\t\t\t\t\t\t\t\t<figure><a href=\"#\"><img src=\"";
        // line 1144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/brands/img-04.png"), "html", null, true);
        echo "\" alt=\"image description\"></a></figure>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!--************************************
\t\t\t\t\tTrusted By Many Start
\t\t\t*************************************-->
\t\t\t<!--************************************
\t\t\t\t\tRegister Start
\t\t\t*************************************-->
\t\t\t<section class=\"tg-main-section tg-haslayout tg-parallaximg\" data-position-x=\"center\" data-position-y=\"center\" data-appear-top-offset=\"600\" data-parallax=\"scroll\" data-bleed=\"0\" data-image-src=\"";
        // line 1158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/parallax/bgparallax-04.jpg"), "html", null, true);
        echo "\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"tg-freeregistration\">
\t\t\t\t\t\t\t<div class=\"tg-regleftarea\">
\t\t\t\t\t\t\t\t<h2>";
        // line 1163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Register For Free"), "html", null, true);
        echo "!</h2>
\t\t\t\t\t\t\t\t<div class=\"tg-description\"><p>Consectetur adiaisicine elit eiusmod temtor incididunt ut laborei dolore matna alicua minim veniam.</p></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tg-regrightarea\">
\t\t\t\t\t\t\t\t<a class=\"tg-btn\" href=\"javascript:void(0);\">";
        // line 1167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Register Now"), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!--************************************
\t\t\t\t\tRegister Start
\t\t\t*************************************-->
\t\t\t<!--************************************
\t\t\t\t\tNews Start
\t\t\t*************************************-->
\t\t\t<section class=\"tg-main-section tg-haslayout\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"tg-newstrusted\">
\t\t\t\t\t\t\t<div class=\"tg-sectionhead\">
\t\t\t\t\t\t\t\t<div class=\"tg-sectiontitle\">
\t\t\t\t\t\t\t\t\t<h2>";
        // line 1185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Latest News"), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t\t\t\t<img class=\"tg-svginject\" src=\"";
        // line 1186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/sectionline.svg"), "html", null, true);
        echo "\" alt=\"image description\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tg-latestnews\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t<article class=\"tg-post\">
\t\t\t\t\t\t\t\t\t\t<figure class=\"tg-postimg\"><a href=\"#\"><img src=\"";
        // line 1192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/img-01.jpg"), "html", null, true);
        echo "\" alt=\"image description\"></a></figure>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-postcontent\">
\t\t\t\t\t\t\t\t\t\t\t<time class=\"tg-postdate\" datetime=\"2011-10-10\">Juin <span>27</span></time>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-posttitle\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">";
        // line 1196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Always Take Right Decision"), "html", null, true);
        echo "</a></h3>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-metadata\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<em>";
        // line 1200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Posted By"), "html", null, true);
        echo ": </em>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Pricilla Nader</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\"><p>Consectetur adipisicing elit eiusmod ipor incididunt utreiat.</p></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t<article class=\"tg-post\">
\t\t\t\t\t\t\t\t\t\t<figure class=\"tg-postimg\"><a href=\"#\"><img src=\"";
        // line 1210
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/img-02.jpg"), "html", null, true);
        echo "\" alt=\"image description\"></a></figure>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-postcontent\">
\t\t\t\t\t\t\t\t\t\t\t<time class=\"tg-postdate\" datetime=\"2011-10-10\">Juin <span>27</span></time>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-posttitle\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">";
        // line 1214
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Always Take Right Decision"), "html", null, true);
        echo "</a></h3>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-metadata\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<em>";
        // line 1218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Posted By"), "html", null, true);
        echo ": </em>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Pricilla Nader</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\"><p>Consectetur adipisicing elit eiusmod ipor incididunt utreiat.</p></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t<article class=\"tg-post\">
\t\t\t\t\t\t\t\t\t\t<figure class=\"tg-postimg\"><a href=\"#\"><img src=\"";
        // line 1228
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/img-03.jpg"), "html", null, true);
        echo "\" alt=\"image description\"></a></figure>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-postcontent\">
\t\t\t\t\t\t\t\t\t\t\t<time class=\"tg-postdate\" datetime=\"2011-10-10\">Juin <span>27</span></time>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-posttitle\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">";
        // line 1232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Always Take Right Decision"), "html", null, true);
        echo "</a></h3>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-metadata\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<em>";
        // line 1236
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Posted By"), "html", null, true);
        echo ": </em>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Pricilla Nader</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\"><p>Consectetur adipisicing elit eiusmod ipor incididunt utreiat.</p></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!--************************************
\t\t\t\t\tNews & Trusted End
\t\t\t*************************************-->
\t\t</main>
\t\t<!--************************************
\t\t\t\tMain End
\t\t*************************************-->

\t</div>
\t<!--************************************
\t\t\tWrapper End
\t*************************************-->
\t";
        // line 1261
        $this->loadTemplate("default/footer.html.twig", "default/homepage.html.twig", 1261)->display($context);
        
        $__internal_0f9c9aa3c79669ceece039dc9a6b88178b1366042bba1f2d5a070cabab7da432->leave($__internal_0f9c9aa3c79669ceece039dc9a6b88178b1366042bba1f2d5a070cabab7da432_prof);

        
        $__internal_2bfb7d68a7ab84b7b9fb44b2dd97b01b21752e42e0eab2b3c91ebb70d0f595a7->leave($__internal_2bfb7d68a7ab84b7b9fb44b2dd97b01b21752e42e0eab2b3c91ebb70d0f595a7_prof);

    }

    public function getTemplateName()
    {
        return "default/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2032 => 1261,  2004 => 1236,  1997 => 1232,  1990 => 1228,  1977 => 1218,  1970 => 1214,  1963 => 1210,  1950 => 1200,  1943 => 1196,  1936 => 1192,  1927 => 1186,  1923 => 1185,  1902 => 1167,  1895 => 1163,  1887 => 1158,  1870 => 1144,  1866 => 1143,  1862 => 1142,  1858 => 1141,  1852 => 1138,  1848 => 1137,  1844 => 1136,  1840 => 1135,  1834 => 1132,  1830 => 1131,  1826 => 1130,  1822 => 1129,  1814 => 1124,  1810 => 1123,  1787 => 1103,  1781 => 1100,  1775 => 1097,  1769 => 1094,  1763 => 1091,  1757 => 1088,  1675 => 1009,  1671 => 1008,  1662 => 1002,  1639 => 982,  1617 => 963,  1608 => 957,  1600 => 952,  1586 => 941,  1564 => 922,  1555 => 916,  1547 => 911,  1533 => 900,  1510 => 880,  1501 => 874,  1493 => 869,  1460 => 839,  1451 => 833,  1443 => 828,  1429 => 817,  1406 => 797,  1397 => 791,  1389 => 786,  1375 => 775,  1352 => 755,  1343 => 749,  1335 => 744,  1317 => 729,  1313 => 728,  1293 => 711,  1284 => 705,  1279 => 703,  1273 => 700,  1268 => 698,  1262 => 695,  1251 => 687,  1232 => 671,  1228 => 670,  1217 => 662,  1213 => 661,  1202 => 653,  1198 => 652,  1188 => 645,  1184 => 644,  1153 => 616,  1149 => 615,  1140 => 609,  1136 => 608,  1127 => 602,  1123 => 601,  1114 => 595,  1110 => 594,  1101 => 588,  1097 => 587,  1088 => 581,  1084 => 580,  1075 => 574,  1071 => 573,  1062 => 567,  1058 => 566,  1049 => 560,  1045 => 559,  1036 => 553,  1032 => 552,  1021 => 544,  1017 => 543,  1008 => 537,  1004 => 536,  995 => 530,  991 => 529,  982 => 523,  978 => 522,  969 => 516,  965 => 515,  956 => 509,  952 => 508,  943 => 502,  939 => 501,  930 => 495,  926 => 494,  917 => 488,  913 => 487,  904 => 481,  900 => 480,  889 => 472,  885 => 471,  876 => 465,  872 => 464,  863 => 458,  859 => 457,  850 => 451,  846 => 450,  837 => 444,  833 => 443,  824 => 437,  820 => 436,  811 => 430,  807 => 429,  798 => 423,  794 => 422,  785 => 416,  781 => 415,  772 => 409,  768 => 408,  757 => 400,  753 => 399,  744 => 393,  740 => 392,  731 => 386,  727 => 385,  718 => 379,  714 => 378,  705 => 372,  701 => 371,  692 => 365,  688 => 364,  679 => 358,  675 => 357,  666 => 351,  662 => 350,  653 => 344,  649 => 343,  640 => 337,  636 => 336,  625 => 328,  621 => 327,  612 => 321,  608 => 320,  599 => 314,  595 => 313,  586 => 307,  582 => 306,  573 => 300,  569 => 299,  560 => 293,  556 => 292,  547 => 286,  543 => 285,  534 => 279,  530 => 278,  521 => 272,  517 => 271,  508 => 265,  504 => 264,  493 => 256,  489 => 255,  480 => 249,  476 => 248,  467 => 242,  463 => 241,  454 => 235,  450 => 234,  441 => 228,  437 => 227,  428 => 221,  424 => 220,  415 => 214,  411 => 213,  402 => 207,  398 => 206,  389 => 200,  385 => 199,  376 => 193,  372 => 192,  361 => 184,  357 => 183,  348 => 177,  344 => 176,  335 => 170,  331 => 169,  322 => 163,  318 => 162,  309 => 156,  305 => 155,  296 => 149,  292 => 148,  283 => 142,  279 => 141,  270 => 135,  266 => 134,  257 => 128,  253 => 127,  244 => 121,  240 => 120,  229 => 112,  225 => 111,  216 => 105,  212 => 104,  203 => 98,  199 => 97,  190 => 91,  186 => 90,  177 => 84,  173 => 83,  164 => 77,  160 => 76,  151 => 70,  147 => 69,  138 => 63,  134 => 62,  125 => 56,  121 => 55,  112 => 49,  108 => 48,  92 => 35,  88 => 34,  82 => 31,  73 => 25,  66 => 20,  64 => 19,  46 => 3,  28 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include ('base.html.twig') %}
{% block body %}
\t<body class=\"tg-home tg-login\">
\t<!--[if lt IE 8]>
\t<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
\t<![endif]-->
\t<!--************************************
\t\t\tPreloader Start
\t*************************************-->

\t<!--************************************
\t\t\tPreloader End
\t*************************************-->

\t<!--************************************
\t\t\tWrapper Start
\t*************************************-->
\t<div id=\"tg-wrapper\" class=\"tg-wrapper tg-haslayout\">
\t\t{% include ('default/header.html.twig') %}
\t\t<!--************************************
\t\t\t\tHome Banner Start
\t\t*************************************-->
\t\t<div id=\"tg-homebanner\" class=\"tg-homebanner tg-haslayout\">
\t\t\t<figure class=\"tg-bannerbg\">
\t\t\t\t<img src=\"{{ asset('assets/images/banner/index.jpg') }}\" alt=\"image description\">
\t\t\t</figure>
\t\t\t<div class=\"tg-bannercontent\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t<form class=\"tg-formtheme tg-formsearch\" action=\"{{ path('doctor_search') }}\" method=\"get\">
\t\t\t\t\t\t\t\t<div class=\"tg-sectionhead\">
\t\t\t\t\t\t\t\t\t<div class=\"tg-sectiontitle\">
\t\t\t\t\t\t\t\t\t\t<h1>{{ 'Find a Medical Help'|trans }}!</h1>
\t\t\t\t\t\t\t\t\t\t<img class=\"tg-svginject\" src=\"{{ asset('assets/images/sectionline.svg') }}\" alt=\"image description\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"mots\" class=\"form-control\" placeholder=\"Specialities, Doctors, Hospitals, Labs, Spas...\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"tg-btnformsearch\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t<div class=\"tg-searchbulder\">
\t\t\t\t\t\t\t\t\t<div id=\"tg-subcategories\" class=\"tg-subcategories\">
\t\t\t\t\t\t\t\t\t\t<div id=\"doctorscategory\" class=\"tg-tabcontent tg-active\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"dentist\" name=\"subcategory\" value=\"Dentist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"dentist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-16.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Dentist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ent\" name=\"subcategory\" value=\"Ear-Nose-Throat (ENT)\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-17.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Ear-Nose-Throat'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"gastroenterologist\" name=\"subcategory\" value=\"Gastroenterologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"gastroenterologist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-18.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Gastroenterologist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"psychiatrist\" name=\"subcategory\" value=\"Psychiatrist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"psychiatrist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-19.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Psychiatrist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"urologist\" name=\"subcategory\" value=\"Urologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"urologist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-20.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Urologist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"homeopath\" name=\"subcategory\" value=\"Homeopath\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"homeopath\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-21.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Homeopath'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ophthalmologist\" name=\"subcategory\" value=\"Ophthalmologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ophthalmologist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-22.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Ophthalmologist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ayurveda\" name=\"subcategory\" value=\"Ayurveda\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ayurveda\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-23.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Ayurveda'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"dermatologist\" name=\"subcategory\" value=\"Dermatologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"dermatologist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-24.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Dermatologist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"neurologist\" name=\"subcategory\" value=\"Neurologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"neurologist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-25.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Neurologist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div id=\"hospitalscategory\" class=\"tg-tabcontent\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"homeopath2\" name=\"subcategory\" value=\"Homeopath\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"homeopath2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-21.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Homeopath'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ophthalmologist2\" name=\"subcategory\" value=\"Ophthalmologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ophthalmologist2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-22.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Ophthalmologist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ayurveda2\" name=\"subcategory\" value=\"Ayurveda\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ayurveda2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-23.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Ayurveda'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"dermatologist2\" name=\"subcategory\" value=\"Dermatologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"dermatologist2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-24.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Dermatologist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"neurologist2\" name=\"subcategory\" value=\"Neurologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"neurologist2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-25.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Neurologist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"dentist2\" name=\"subcategory\" value=\"Dentist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"dentist2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-16.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Dentist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ent2\" name=\"subcategory\" value=\"Ear-Nose-Throat (ENT)\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ent2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-17.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Ear-Nose-Throat'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"gastroenterologist2\" name=\"subcategory\" value=\"Gastroenterologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"gastroenterologist2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-18.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Gastroenterologist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"psychiatrist2\" name=\"subcategory\" value=\"Psychiatrist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"psychiatrist2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-19.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Psychiatrist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"urologist2\" name=\"subcategory\" value=\"Urologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"urologist2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-20.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Urologist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div id=\"spascategory\" class=\"tg-tabcontent\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"dentist3\" name=\"subcategory\" value=\"Dentist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"dentist3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-16.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Dentist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ent3\" name=\"subcategory\" value=\"Ear-Nose-Throat (ENT)\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ent3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-17.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Ear-Nose-Throat'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"gastroenterologist3\" name=\"subcategory\" value=\"Gastroenterologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"gastroenterologist3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-18.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Gastroenterologist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"psychiatrist3\" name=\"subcategory\" value=\"Psychiatrist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"psychiatrist3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-19.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Psychiatrist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"urologist3\" name=\"subcategory\" value=\"Urologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"urologist3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-20.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Urologist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"homeopath3\" name=\"subcategory\" value=\"Homeopath\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"homeopath3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-21.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Homeopath'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ophthalmologist3\" name=\"subcategory\" value=\"Ophthalmologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ophthalmologist3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-22.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Ophthalmologist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ayurveda3\" name=\"subcategory\" value=\"Ayurveda\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ayurveda3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-23.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Ayurveda'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"dermatologist3\" name=\"subcategory\" value=\"Dermatologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"dermatologist3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-24.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Dermatologist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"neurologist3\" name=\"subcategory\" value=\"Neurologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"neurologist3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-25.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Neurologist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div id=\"pharmaciescategory\" class=\"tg-tabcontent\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"homeopath4\" name=\"subcategory\" value=\"Homeopath\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"homeopath4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-21.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Homeopath'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ophthalmologist4\" name=\"subcategory\" value=\"Ophthalmologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ophthalmologist4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-22.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Ophthalmologist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ayurveda4\" name=\"subcategory\" value=\"Ayurveda\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ayurveda4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-23.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Ayurveda'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"dermatologist4\" name=\"subcategory\" value=\"Dermatologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"dermatologist4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-24.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Dermatologist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"neurologist4\" name=\"subcategory\" value=\"Neurologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"neurologist4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-25.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Neurologist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"dentist4\" name=\"subcategory\" value=\"Dentist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"dentist4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-16.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Dentist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ent4\" name=\"subcategory\" value=\"Ear-Nose-Throat (ENT)\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ent4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-17.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Ear-Nose-Throat'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"gastroenterologist4\" name=\"subcategory\" value=\"Gastroenterologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"gastroenterologist4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-18.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Gastroenterologist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"psychiatrist4\" name=\"subcategory\" value=\"Psychiatrist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"psychiatrist4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-19.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Psychiatrist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"urologist4\" name=\"subcategory\" value=\"Urologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"urologist4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-20.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Urologist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div id=\"labscategory\" class=\"tg-tabcontent\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"dentist5\" name=\"subcategory\" value=\"Dentist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"dentist5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-16.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Dentist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ent5\" name=\"subcategory\" value=\"Ear-Nose-Throat (ENT)\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ent5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-17.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Ear-Nose-Throat'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"gastroenterologist5\" name=\"subcategory\" value=\"Gastroenterologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"gastroenterologist5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-18.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Gastroenterologist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"psychiatrist5\" name=\"subcategory\" value=\"Psychiatrist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"psychiatrist5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-19.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Psychiatrist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"urologist5\" name=\"subcategory\" value=\"Urologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"urologist5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-20.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Urologist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"homeopath5\" name=\"subcategory\" value=\"Homeopath\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"homeopath5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-21.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Homeopath'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ophthalmologist5\" name=\"subcategory\" value=\"Ophthalmologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ophthalmologist5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-22.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Ophthalmologist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ayurveda5\" name=\"subcategory\" value=\"Ayurveda\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ayurveda5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-23.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Ayurveda'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"dermatologist5\" name=\"subcategory\" value=\"Dermatologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"dermatologist5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-24.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Dermatologist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"neurologist5\" name=\"subcategory\" value=\"Neurologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"neurologist5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-25.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Neurologist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div id=\"fitnesscategory\" class=\"tg-tabcontent\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"homeopath6\" name=\"subcategory\" value=\"Homeopath\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"homeopath6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-21.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Homeopath'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ophthalmologist6\" name=\"subcategory\" value=\"Ophthalmologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ophthalmologist6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-22.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Ophthalmologist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ayurveda6\" name=\"subcategory\" value=\"Ayurveda\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ayurveda6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-23.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Ayurveda'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"dermatologist6\" name=\"subcategory\" value=\"Dermatologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"dermatologist6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-24.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Dermatologist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"neurologist6\" name=\"subcategory\" value=\"Neurologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"neurologist6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-25.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Neurologist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"dentist6\" name=\"subcategory\" value=\"Dentist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"dentist6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-16.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Dentist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ent6\" name=\"subcategory\" value=\"Ear-Nose-Throat (ENT)\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ent6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-17.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Ear-Nose-Throat'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"gastroenterologist6\" name=\"subcategory\" value=\"Gastroenterologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"gastroenterologist6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-18.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Gastroenterologist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"psychiatrist6\" name=\"subcategory\" value=\"Psychiatrist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"psychiatrist6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-19.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Psychiatrist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"urologist6\" name=\"subcategory\" value=\"Urologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"urologist6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-20.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Urologist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div id=\"bloodbankcategory\" class=\"tg-tabcontent\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"dentist7\" name=\"subcategory\" value=\"Dentist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"dentist7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-16.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Dentist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ent7\" name=\"subcategory\" value=\"Ear-Nose-Throat (ENT)\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ent7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-17.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Ear-Nose-Throat'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"gastroenterologist7\" name=\"subcategory\" value=\"Gastroenterologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"gastroenterologist7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-18.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Gastroenterologist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"psychiatrist7\" name=\"subcategory\" value=\"Psychiatrist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"psychiatrist7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-19.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Psychiatrist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"urologist7\" name=\"subcategory\" value=\"Urologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"urologist7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-20.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Urologist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"homeopath7\" name=\"subcategory\" value=\"Homeopath\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"homeopath7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-21.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Homeopath'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ophthalmologist7\" name=\"subcategory\" value=\"Ophthalmologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ophthalmologist7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-22.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Ophthalmologist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ayurveda7\" name=\"subcategory\" value=\"Ayurveda\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ayurveda7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-23.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Ayurveda'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"dermatologist7\" name=\"subcategory\" value=\"Dermatologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"dermatologist7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-24.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Dermatologist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"neurologist7\" name=\"subcategory\" value=\"Neurologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"neurologist7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-25.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Neurologist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div id=\"clinicscategory\" class=\"tg-tabcontent\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"homeopath8\" name=\"subcategory\" value=\"Homeopath\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"homeopath8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-21.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Homeopath'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ophthalmologist8\" name=\"subcategory\" value=\"Ophthalmologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ophthalmologist8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-22.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Ophthalmologist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ayurveda8\" name=\"subcategory\" value=\"Ayurveda\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ayurveda8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-23.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Ayurveda'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"dermatologist8\" name=\"subcategory\" value=\"Dermatologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"dermatologist8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-24.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Dermatologist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"neurologist8\" name=\"subcategory\" value=\"Neurologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"neurologist8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-25.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Neurologist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"dentist8\" name=\"subcategory\" value=\"Dentist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"dentist8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-16.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Dentist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ent8\" name=\"subcategory\" value=\"Ear-Nose-Throat (ENT)\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ent8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-17.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Ear-Nose-Throat'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"gastroenterologist8\" name=\"subcategory\" value=\"Gastroenterologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"gastroenterologist8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-18.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Gastroenterologist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"psychiatrist8\" name=\"subcategory\" value=\"Psychiatrist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"psychiatrist8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-19.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Psychiatrist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tg-checkbox tg-subcategorycheckbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"urologist8\" name=\"subcategory\" value=\"Urologist\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"urologist8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span><img src=\"{{ asset('assets/images/icons/icon-20.png') }}\" alt=\"image description\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'Urologist'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--************************************
\t\t\t\tHome Banner End
\t\t*************************************-->
\t\t<!--************************************
\t\t\t\tMain Start
\t\t*************************************-->
\t\t<main id=\"tg-main\" class=\"tg-main tg-haslayout\">
\t\t\t<!--************************************
\t\t\t\t\tFeatures Start
\t\t\t*************************************-->
\t\t\t<section class=\"tg-main-section tg-haslayout\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"tg-sectionhead\">
\t\t\t\t\t\t\t\t<div class=\"tg-sectiontitle\">
\t\t\t\t\t\t\t\t\t<h2>{{ 'A Complete Medical Portal'|trans }}</h2>
\t\t\t\t\t\t\t\t\t<img class=\"tg-svginject\" src=\"{{ asset('assets/images/sectionline.svg') }}\" alt=\"image description\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tg-features\">
\t\t\t\t\t\t\t<div class=\"col-sm-4 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"tg-feature\">
\t\t\t\t\t\t\t\t\t<figure class=\"tg-featureicon\"><img src=\"{{ asset('assets/images/icons/icon-02.png') }}\" alt=\"image description\"></figure>
\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">{{ 'Find Medical Help'|trans }}</a></h3>
\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
\t\t\t\t\t\t\t\t\t\t<p>Consectetur adipisicing elit eiusmod tempor incididunt ut labore dolore magna aliqua minim veniam quis nostrud exercitation ullamco laboris.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"tg-feature\">
\t\t\t\t\t\t\t\t\t<figure class=\"tg-featureicon\"><img src=\"{{ asset('assets/images/icons/icon-03.png') }}\" alt=\"image description\"></figure>
\t\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">{{ 'Make Appointment'|trans }}</a></h3>
\t\t\t\t\t\t\t\t<div class=\"tg-description\">
\t\t\t\t\t\t\t\t\t\t<p>Consectetur adipisicing elit eiusmod tempor incididunt ut labore dolore magna aliqua minim veniam quis nostrud exercitation ullamco laboris.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"tg-feature\">
\t\t\t\t\t\t\t\t\t<figure class=\"tg-featureicon\"><img src=\"{{ asset('assets/images/icons/icon-04.png') }}\" alt=\"image description\"></figure>
\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">{{ 'Get Facilitate'|trans }}</a></h3>
\t\t\t\t\t\t\t\t\t<div class=\"tg-description\">
\t\t\t\t\t\t\t\t\t\t<p>Consectetur adipisicing elit eiusmod tempor incididunt ut labore dolore magna aliqua minim veniam quis nostrud exercitation ullamco laboris.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!--************************************
\t\t\t\t\tFeatures End
\t\t\t*************************************-->
\t\t\t<!--************************************
\t\t\t\t\tStatistics Start
\t\t\t*************************************-->
\t\t\t<section class=\"tg-main-section tg-haslayout tg-parallaximg tg-imgoverlap\" data-bleed=\"-17\" data-appear-top-offset=\"600\" data-parallax=\"scroll\" data-image-src=\"{{ asset('assets/images/parallax/bgparallax-02.jpg') }}\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"tg-statisticscounters\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"tg-counter\">
\t\t\t\t\t\t\t\t\t\t\t<h2><span data-from=\"0\" data-to=\"36012\" data-speed=\"8000\" data-refresh-interval=\"50\">36012</span></h2>
\t\t\t\t\t\t\t\t\t\t<h3>{{ 'Happy Customers'|trans }}</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tg-counter\">
\t\t\t\t\t\t\t\t\t\t<figure><img src=\"{{ asset('assets/images/icons/icon-06.png') }}\" alt=\"image description\"></figure>
\t\t\t\t\t\t\t\t\t\t<h2><span data-from=\"0\" data-to=\"21067\" data-speed=\"8000\" data-refresh-interval=\"50\">21067</span></h2>
\t\t\t\t\t\t\t\t\t\t<h3>{{ 'Active Members'|trans }}</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tg-counter\">
\t\t\t\t\t\t\t\t\t\t<figure><img src=\"{{ asset('assets/images/icons/icon-07.png') }}\" alt=\"image description\"></figure>
\t\t\t\t\t\t\t\t\t\t<h2><span data-from=\"0\" data-to=\"6954\" data-speed=\"8000\" data-refresh-interval=\"50\">6954</span></h2>
\t\t\t\t\t\t\t\t\t\t<h3>{{ 'New Members'|trans }}</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6 hidden-xs\">
\t\t\t\t\t\t\t<figure class=\"tg-sectionimg\"><img src=\"{{ asset('assets/images/img-04.png') }}\" alt=\"image description\"></figure>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!--************************************
\t\t\t\t\tStatistics End
\t\t\t*************************************-->
\t\t\t<!--************************************
\t\t\t\t\tFeatured DiretPost Start
\t\t\t*************************************-->
\t\t\t<section class=\"tg-main-section tg-haslayout\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"tg-sectionhead\">
\t\t\t\t\t\t\t\t<div class=\"tg-sectiontitle\">
\t\t\t\t\t\t\t\t\t<h2>{{ 'Featured Listings'|trans }}</h2>
\t\t\t\t\t\t\t\t\t<img class=\"tg-svginject\" src=\"{{ asset('assets/images/sectionline.svg') }}\" alt=\"image description\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul id=\"tg-filterbalenav\" class=\"tg-filterbalenav option-set\">
\t\t\t\t\t\t\t\t<li><a class=\"tg-active\" data-filter=\"*\" href=\"javascript:void(0);\">all</a></li>
\t\t\t\t\t\t\t\t<li><a data-filter=\".doctors\" href=\"javascript:void(0);\">Doctors</a></li>
\t\t\t\t\t\t\t\t<li><a data-filter=\".hospitals\" href=\"javascript:void(0);\">Hospitals</a></li>
\t\t\t\t\t\t\t\t<li><a data-filter=\".spas\" href=\"javascript:void(0);\">Spas</a></li>
\t\t\t\t\t\t\t\t<li><a data-filter=\".pharmacies\" href=\"javascript:void(0);\">Pharmacies</a></li>
\t\t\t\t\t\t\t\t<li><a data-filter=\".lab\" href=\"javascript:void(0);\">Lab</a></li>
\t\t\t\t\t\t\t\t<li><a data-filter=\".fitnesscenters\" href=\"javascript:void(0);\">Fitness Centers</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div id=\"filter-masonry\" class=\"tg-featureddirectposts tg-searchresult tg-filtermasonry\">
\t\t\t\t\t\t\t\t<div class=\"tg-directpost doctors\">
\t\t\t\t\t\t\t\t\t<figure class=\"tg-directpostimg\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"{{ asset('assets/images/directpost/img-01.jpg') }}\" alt=\"image description\"></a>
\t\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-usericon tg-iconfeatured\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<em class=\"tg-usericonholder\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bolt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'featured'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</em>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-usericon tg-iconvarified\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<em class=\"tg-usericonholder\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shield\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'verified'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</em>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t<div class=\"tg-directinfo\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-leftarea\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-directposthead\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">Dr. Pascal David</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-subjects\">MDS - Paedodontics &amp; Preventive Dentistry</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-contactinfo\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-location-arrow\"></i><address>154 Bayswater Rd, W2 4HP, UK</address></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-phone\"></i><span>+4 235 856843</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-rightarea\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-bookappoinment\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-thumbs-o-up\"></i>99%<span>(1009 votes)</span></a>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"tg-btn\" data-toggle=\"modal\" data-target=\"#tg-appointmentlightbox\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ 'Book Appointment'|trans }}</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-metadata\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><span class=\"tg-stars\"><span></span></span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-heart tg-like\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tg-directpost hospitals\">
\t\t\t\t\t\t\t\t\t<figure class=\"tg-directpostimg\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"{{ asset('assets/images/directpost/img-02.jpg') }}\" alt=\"image description\"></a>
\t\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-usericon tg-iconfeatured\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<em class=\"tg-usericonholder\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bolt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'featured'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</em>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-usericon tg-iconvarified\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<em class=\"tg-usericonholder\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shield\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'verified'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</em>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t<div class=\"tg-directinfo\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-leftarea\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-directposthead\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">Dr. Pascal David</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-subjects\">MDS - Pédiatre&amp; Dentiste</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-contactinfo\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-location-arrow\"></i><address>52 Allée des trois rois 31100 Toulouse</address></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-phone\"></i><span>+4 235 856843</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-rightarea\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-bookappoinment\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-thumbs-o-up\"></i>99%<span>(1009 votes)</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"tg-btn\" data-toggle=\"modal\" data-target=\"#tg-appointmentlightbox\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ 'Book Appointment'|trans }}</button>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-metadata\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><span class=\"tg-stars\"><span></span></span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-heart tg-like\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tg-directpost spas\">
\t\t\t\t\t\t\t\t\t<figure class=\"tg-directpostimg\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"{{ asset('assets/images/directpost/img-03.jpg') }}\" alt=\"image description\"></a>
\t\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-usericon tg-iconfeatured\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<em class=\"tg-usericonholder\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bolt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'featured'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</em>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-usericon tg-iconvarified\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<em class=\"tg-usericonholder\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shield\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'verified'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</em>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t<div class=\"tg-directinfo\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-leftarea\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-directposthead\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">Dr. Pascal David</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-subjects\">MDS - Pédiatre&amp; Dentiste</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-contactinfo\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-location-arrow\"></i><address>52 Allée des trois rois 31100 Toulouse</address></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-phone\"></i><span>+33 05 25 25 31</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-rightarea\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-bookappoinment\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-thumbs-o-up\"></i>99%<span>(1009 votes)</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"tg-btn\">Available on Call</button>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-metadata\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><span class=\"tg-stars\"><span></span></span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-heart tg-like\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tg-directpost pharmacies\">
\t\t\t\t\t\t\t\t\t<figure class=\"tg-directpostimg\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"{{ asset('assets/images/directpost/img-04.jpg') }}\" alt=\"image description\"></a>
\t\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-usericon tg-iconfeatured\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<em class=\"tg-usericonholder\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bolt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'featured'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</em>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-usericon tg-iconvarified\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<em class=\"tg-usericonholder\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shield\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'verified'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</em>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t<div class=\"tg-directinfo\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-leftarea\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-directposthead\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">Dr. Pascal David</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-subjects\">MDS - Pédiatre&amp; Dentiste</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-contactinfo\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-location-arrow\"></i><address>52 Allée des trois rois 31100 Toulouse</address></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-phone\"></i><span>+33 05 25 25 31</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-rightarea\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-bookappoinment\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-thumbs-o-up\"></i>99%<span>(1009 votes)</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"tg-btn\" data-toggle=\"modal\" data-target=\"#tg-appointmentlightbox\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ 'Book Appointment'|trans }}</button>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-metadata\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><span class=\"tg-stars\"><span></span></span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-heart tg-like\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tg-directpost lab\">
\t\t\t\t\t\t\t\t\t<figure class=\"tg-directpostimg\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"{{ asset('assets/images/directpost/img-05.jpg') }}\" alt=\"image description\"></a>
\t\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-usericon tg-iconfeatured\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<em class=\"tg-usericonholder\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bolt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'featured'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</em>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-usericon tg-iconvarified\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<em class=\"tg-usericonholder\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shield\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'verified'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</em>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t<div class=\"tg-directinfo\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-leftarea\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-directposthead\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">Dr. Pascal David</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-subjects\">MDS - Pédiatre&amp; Dentiste</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-contactinfo\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-location-arrow\"></i><address>52 Allée des trois rois 31100 Toulouse</address></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-phone\"></i><span>+33 05 25 25 31</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-rightarea\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-bookappoinment\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-thumbs-o-up\"></i>99%<span>(1009 votes)</span></a>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"tg-btn\">{{ 'Available on Call'|trans }}</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-metadata\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><span class=\"tg-stars\"><span></span></span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-heart tg-like\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tg-directpost fitnesscenters\">
\t\t\t\t\t\t\t\t\t<figure class=\"tg-directpostimg\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"{{ asset('assets/images/directpost/img-01.jpg') }}\" alt=\"image description\"></a>
\t\t\t\t\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-usericon tg-iconfeatured\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<em class=\"tg-usericonholder\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bolt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'featured'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</em>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"tg-usericon tg-iconvarified\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<em class=\"tg-usericonholder\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shield\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ 'verified'|trans }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</em>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t<div class=\"tg-directinfo\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-leftarea\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-directposthead\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">Dr. Pascal David</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-subjects\">MDS - Pédiatre&amp; Dentiste</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-contactinfo\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-location-arrow\"></i><address>52 Allée des trois rois 31100 Toulouse</address></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-phone\"></i><span>+33 05 25 25 31</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-rightarea\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-bookappoinment\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-thumbs-o-up\"></i>99%<span>(1009 votes)</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"tg-btn\" data-toggle=\"modal\" data-target=\"#tg-appointmentlightbox\">{{ 'Book Appointment'|trans }}</button>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-metadata\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><span class=\"tg-stars\"><span></span></span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-heart tg-like\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!--************************************
\t\t\t\t\tFeatured DiretPost End
\t\t\t*************************************-->
\t\t\t<!--************************************
\t\t\t\t\tStudent Review Start
\t\t\t*************************************-->
\t\t\t<section class=\"tg-main-section tg-haslayout tg-parallaximg\" data-position-x=\"center\" data-position-y=\"center\" data-appear-top-offset=\"600\" data-parallax=\"scroll\" data-bleed=\"0\" data-image-src=\"{{ asset('assets/images/parallax/bgparallax-03.jpg') }}\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-10 col-md-offset-1 col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"tg-sectionhead\">
\t\t\t\t\t\t\t\t<div class=\"tg-sectiontitle\">
\t\t\t\t\t\t\t\t\t<h2>{{ 'Valuable Feedback'|trans }}</h2>
\t\t\t\t\t\t\t\t\t<img class=\"tg-svginject\" src=\"{{ asset('assets/images/sectionline.svg') }}\" alt=\"image description\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"tg-feedbackslider\" class=\"tg-feedbackslider tg-feedback\">
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<div class=\"tg-feedbackcontent\">
\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t<q>Consectetur adipisicing elit sed do eiusmod tempor incididunt lab doloregna aliqua ut enim ad minim veniam nostrud exercitation liatota ullamco.</q>
\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t<h3>Dr. Pascal David</h3>
\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-metadata\">
\t\t\t\t\t\t\t\t\t\t\t<li><span>MDS - Pédiatre&amp; Dentiste </span></li>
\t\t\t\t\t\t\t\t\t\t\t<li><span class=\"tg-tooltip tg-stars\" data-toggle=\"tooltip\" data-placement=\"top right\" title=\"Moyenne de 4,85 sur la base de 423 avis\"><span></span></span></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<div class=\"tg-feedbackcontent\">
\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t<q>Consectetur adipisicing elit sed do eiusmod tempor incididunt lab doloregna aliqua ut enim ad minim veniam nostrud exercitation liatota ullamco.</q>
\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t<h3>Laurence Delgado</h3>
\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-metadata\">
\t\t\t\t\t\t\t\t\t\t\t<li><span>MDS - Pédiatre&amp; Dentiste </span></li>
\t\t\t\t\t\t\t\t\t\t\t<li><span class=\"tg-tooltip tg-stars\" data-toggle=\"tooltip\" data-placement=\"top right\" title=\"Moyenne de 4,85 sur la base de 423 avis\"><span></span></span></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<div class=\"tg-feedbackcontent\">
\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t<q>Consectetur adipisicing elit sed do eiusmod tempor incididunt lab doloregna aliqua ut enim ad minim veniam nostrud exercitation liatota ullamco.</q>
\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t<h3>Ahmad Carstensen</h3>
\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-metadata\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><span>MDS - Pédiatre&amp; Dentiste </span></li>
\t\t\t\t\t\t\t\t\t\t\t<li><span class=\"tg-tooltip tg-stars\" data-toggle=\"tooltip\" data-placement=\"top right\" title=\"Moyenne de 4,85 sur la base de 423 avis\"><span></span></span></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<div class=\"tg-feedbackcontent\">
\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t<q>Consectetur adipisicing elit sed do eiusmod tempor incididunt lab doloregna aliqua ut enim ad minim veniam nostrud exercitation liatota ullamco.</q>
\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t<h3>Jean Troupe</h3>
\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-metadata\">
\t\t\t\t\t\t\t\t\t\t\t<li><span>MDS - Pédiatre&amp; Dentiste </span></li>
\t\t\t\t\t\t\t\t\t\t\t<li><span class=\"tg-tooltip tg-stars\" data-toggle=\"tooltip\" data-placement=\"top right\" title=\"Moyenne de 4,85 sur la base de 423 avis\"><span></span></span></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<div class=\"tg-feedbackcontent\">
\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t<q>Consectetur adipisicing elit sed do eiusmod tempor incididunt lab doloregna aliqua ut enim ad minim veniam nostrud exercitation liatota ullamco.</q>
\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t<h3>Mégane Marcou</h3>
\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-metadata\">
\t\t\t\t\t\t\t\t\t\t\t<li><span>MDS - Pédiatre&amp; Dentiste </span></li>
\t\t\t\t\t\t\t\t\t\t\t<li><span class=\"tg-tooltip tg-stars\" data-toggle=\"tooltip\" data-placement=\"top right\" title=\"Moyenne de 4,85 sur la base de 423 avis\"><span></span></span></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<div class=\"tg-feedbackcontent\">
\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t<q>Consectetur adipisicing elit sed do eiusmod tempor incididunt lab doloregna aliqua ut enim ad minim veniam nostrud exercitation liatota ullamco.</q>
\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t<h3>Gérard Calvo</h3>
\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-metadata\">
\t\t\t\t\t\t\t\t\t\t\t<li><span>MDS - Pédiatre&amp; Dentiste </span></li>
\t\t\t\t\t\t\t\t\t\t\t<li><span class=\"tg-tooltip tg-stars\" data-toggle=\"tooltip\" data-placement=\"top right\" title=\"Moyenne de 4,85 sur la base de 423 avis\"><span></span></span></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"tg-reviewerdpslider\" class=\"tg-reviewerdpslider tg-reviewerdp\">
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<figure><img src=\"{{ asset('assets/images/thumbnails/img-01.jpg') }}\" alt=\"image description\"></figure>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<figure><img src=\"{{ asset('assets/images/thumbnails/img-02.jpg') }}\" alt=\"image description\"></figure>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<figure><img src=\"{{ asset('assets/images/thumbnails/img-03.jpg') }}\" alt=\"image description\"></figure>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<figure><img src=\"{{ asset('assets/images/thumbnails/img-04.jpg') }}\" alt=\"image description\"></figure>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<figure><img src=\"{{ asset('assets/images/thumbnails/img-05.jpg') }}\" alt=\"image description\"></figure>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t<figure><img src=\"{{ asset('assets/images/thumbnails/img-06.jpg') }}\" alt=\"image description\"></figure>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!--************************************
\t\t\t\t\tStudent Review End
\t\t\t*************************************-->
\t\t\t<!--************************************
\t\t\t\t\tTrusted By Many Start
\t\t\t*************************************-->
\t\t\t<section class=\"tg-main-section tg-haslayout\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"tg-trustedbymany\">
\t\t\t\t\t\t\t\t<div class=\"tg-sectionhead\">
\t\t\t\t\t\t\t\t\t<div class=\"tg-sectiontitle\">
\t\t\t\t\t\t\t\t\t\t<h2>{{ 'Trusted By Many'|trans }}</h2>
\t\t\t\t\t\t\t\t\t\t<img class=\"tg-svginject\" src=\"{{ asset('assets/images/sectionline.svg') }}\" alt=\"image description\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"tg-brandsslider\" class=\"tg-brandsslider tg-brands\">
\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t<figure><a href=\"#\"><img src=\"{{ asset('assets/images/brands/img-01.png') }}\" alt=\"image description\"></a></figure>
\t\t\t\t\t\t\t\t\t\t<figure><a href=\"#\"><img src=\"{{ asset('assets/images/brands/img-02.png') }}\" alt=\"image description\"></a></figure>
\t\t\t\t\t\t\t\t\t\t<figure><a href=\"#\"><img src=\"{{ asset('assets/images/brands/img-03.png') }}\" alt=\"image description\"></a></figure>
\t\t\t\t\t\t\t\t\t\t<figure><a href=\"#\"><img src=\"{{ asset('assets/images/brands/img-04.png') }}\" alt=\"image description\"></a></figure>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t<figure><a href=\"#\"><img src=\"{{ asset('assets/images/brands/img-01.png') }}\" alt=\"image description\"></a></figure>
\t\t\t\t\t\t\t\t\t\t<figure><a href=\"#\"><img src=\"{{ asset('assets/images/brands/img-02.png') }}\" alt=\"image description\"></a></figure>
\t\t\t\t\t\t\t\t\t\t<figure><a href=\"#\"><img src=\"{{ asset('assets/images/brands/img-03.png') }}\" alt=\"image description\"></a></figure>
\t\t\t\t\t\t\t\t\t\t<figure><a href=\"#\"><img src=\"{{ asset('assets/images/brands/img-04.png') }}\" alt=\"image description\"></a></figure>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t<figure><a href=\"#\"><img src=\"{{ asset('assets/images/brands/img-01.png') }}\" alt=\"image description\"></a></figure>
\t\t\t\t\t\t\t\t\t\t<figure><a href=\"#\"><img src=\"{{ asset('assets/images/brands/img-02.png') }}\" alt=\"image description\"></a></figure>
\t\t\t\t\t\t\t\t\t\t<figure><a href=\"#\"><img src=\"{{ asset('assets/images/brands/img-03.png') }}\" alt=\"image description\"></a></figure>
\t\t\t\t\t\t\t\t\t\t<figure><a href=\"#\"><img src=\"{{ asset('assets/images/brands/img-04.png') }}\" alt=\"image description\"></a></figure>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!--************************************
\t\t\t\t\tTrusted By Many Start
\t\t\t*************************************-->
\t\t\t<!--************************************
\t\t\t\t\tRegister Start
\t\t\t*************************************-->
\t\t\t<section class=\"tg-main-section tg-haslayout tg-parallaximg\" data-position-x=\"center\" data-position-y=\"center\" data-appear-top-offset=\"600\" data-parallax=\"scroll\" data-bleed=\"0\" data-image-src=\"{{ asset('assets/images/parallax/bgparallax-04.jpg') }}\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"tg-freeregistration\">
\t\t\t\t\t\t\t<div class=\"tg-regleftarea\">
\t\t\t\t\t\t\t\t<h2>{{ 'Register For Free'|trans }}!</h2>
\t\t\t\t\t\t\t\t<div class=\"tg-description\"><p>Consectetur adiaisicine elit eiusmod temtor incididunt ut laborei dolore matna alicua minim veniam.</p></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tg-regrightarea\">
\t\t\t\t\t\t\t\t<a class=\"tg-btn\" href=\"javascript:void(0);\">{{ 'Register Now'|trans }}</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!--************************************
\t\t\t\t\tRegister Start
\t\t\t*************************************-->
\t\t\t<!--************************************
\t\t\t\t\tNews Start
\t\t\t*************************************-->
\t\t\t<section class=\"tg-main-section tg-haslayout\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"tg-newstrusted\">
\t\t\t\t\t\t\t<div class=\"tg-sectionhead\">
\t\t\t\t\t\t\t\t<div class=\"tg-sectiontitle\">
\t\t\t\t\t\t\t\t\t<h2>{{ 'Latest News'|trans }}</h2>
\t\t\t\t\t\t\t\t\t<img class=\"tg-svginject\" src=\"{{ asset('assets/images/sectionline.svg') }}\" alt=\"image description\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tg-latestnews\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t<article class=\"tg-post\">
\t\t\t\t\t\t\t\t\t\t<figure class=\"tg-postimg\"><a href=\"#\"><img src=\"{{ asset('assets/images/post/img-01.jpg') }}\" alt=\"image description\"></a></figure>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-postcontent\">
\t\t\t\t\t\t\t\t\t\t\t<time class=\"tg-postdate\" datetime=\"2011-10-10\">Juin <span>27</span></time>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-posttitle\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">{{ 'Always Take Right Decision'|trans }}</a></h3>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-metadata\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<em>{{ 'Posted By'|trans }}: </em>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Pricilla Nader</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\"><p>Consectetur adipisicing elit eiusmod ipor incididunt utreiat.</p></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t<article class=\"tg-post\">
\t\t\t\t\t\t\t\t\t\t<figure class=\"tg-postimg\"><a href=\"#\"><img src=\"{{ asset('assets/images/post/img-02.jpg') }}\" alt=\"image description\"></a></figure>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-postcontent\">
\t\t\t\t\t\t\t\t\t\t\t<time class=\"tg-postdate\" datetime=\"2011-10-10\">Juin <span>27</span></time>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-posttitle\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">{{ 'Always Take Right Decision'|trans }}</a></h3>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-metadata\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<em>{{ 'Posted By'|trans }}: </em>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Pricilla Nader</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\"><p>Consectetur adipisicing elit eiusmod ipor incididunt utreiat.</p></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t<article class=\"tg-post\">
\t\t\t\t\t\t\t\t\t\t<figure class=\"tg-postimg\"><a href=\"#\"><img src=\"{{ asset('assets/images/post/img-03.jpg') }}\" alt=\"image description\"></a></figure>
\t\t\t\t\t\t\t\t\t\t<div class=\"tg-postcontent\">
\t\t\t\t\t\t\t\t\t\t\t<time class=\"tg-postdate\" datetime=\"2011-10-10\">Juin <span>27</span></time>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-posttitle\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">{{ 'Always Take Right Decision'|trans }}</a></h3>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tg-metadata\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<em>{{ 'Posted By'|trans }}: </em>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Pricilla Nader</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tg-description\"><p>Consectetur adipisicing elit eiusmod ipor incididunt utreiat.</p></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!--************************************
\t\t\t\t\tNews & Trusted End
\t\t\t*************************************-->
\t\t</main>
\t\t<!--************************************
\t\t\t\tMain End
\t\t*************************************-->

\t</div>
\t<!--************************************
\t\t\tWrapper End
\t*************************************-->
\t{% include ('default/footer.html.twig') %}
{% endblock %}", "default/homepage.html.twig", "C:\\xampp\\htdocs\\VaranMedical\\app\\Resources\\views\\default\\homepage.html.twig");
    }
}
