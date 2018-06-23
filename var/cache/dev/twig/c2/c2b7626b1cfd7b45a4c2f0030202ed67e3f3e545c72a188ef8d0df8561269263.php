<?php

/* base.html.twig */
class __TwigTemplate_a17f9d7aa975e34f4e0cc44eeab7f33089147d69ffdc6090114c99e26dfbd157 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6234050be6cdb1d557ae064bc114be677626dd07e7bc1172d3489033df703c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6234050be6cdb1d557ae064bc114be677626dd07e7bc1172d3489033df703c7->enter($__internal_e6234050be6cdb1d557ae064bc114be677626dd07e7bc1172d3489033df703c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_d453a034551092dadf14723f493d1af36422aaa43e92f9bc73ea4d50fe7d330f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d453a034551092dadf14723f493d1af36422aaa43e92f9bc73ea4d50fe7d330f->enter($__internal_d453a034551092dadf14723f493d1af36422aaa43e92f9bc73ea4d50fe7d330f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "</body>
";
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "</html>
";
        
        $__internal_e6234050be6cdb1d557ae064bc114be677626dd07e7bc1172d3489033df703c7->leave($__internal_e6234050be6cdb1d557ae064bc114be677626dd07e7bc1172d3489033df703c7_prof);

        
        $__internal_d453a034551092dadf14723f493d1af36422aaa43e92f9bc73ea4d50fe7d330f->leave($__internal_d453a034551092dadf14723f493d1af36422aaa43e92f9bc73ea4d50fe7d330f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0e1d9afca7c59350d85989782a12954b64d6247406291eb1a0fd66415dc51f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0e1d9afca7c59350d85989782a12954b64d6247406291eb1a0fd66415dc51f7->enter($__internal_b0e1d9afca7c59350d85989782a12954b64d6247406291eb1a0fd66415dc51f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_02dcf1e5c06d8a341b014a15cf354a61cee44aacffa25e3f2490d69c647d569b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02dcf1e5c06d8a341b014a15cf354a61cee44aacffa25e3f2490d69c647d569b->enter($__internal_02dcf1e5c06d8a341b014a15cf354a61cee44aacffa25e3f2490d69c647d569b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_02dcf1e5c06d8a341b014a15cf354a61cee44aacffa25e3f2490d69c647d569b->leave($__internal_02dcf1e5c06d8a341b014a15cf354a61cee44aacffa25e3f2490d69c647d569b_prof);

        
        $__internal_b0e1d9afca7c59350d85989782a12954b64d6247406291eb1a0fd66415dc51f7->leave($__internal_b0e1d9afca7c59350d85989782a12954b64d6247406291eb1a0fd66415dc51f7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f0a8690cabeef423fef6b47df619367df57829402d7bc18c0a312ffb5be2da9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0a8690cabeef423fef6b47df619367df57829402d7bc18c0a312ffb5be2da9b->enter($__internal_f0a8690cabeef423fef6b47df619367df57829402d7bc18c0a312ffb5be2da9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9af275f6c0466391155d6a94604553234fa926a76f39437a68aae01508010b20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9af275f6c0466391155d6a94604553234fa926a76f39437a68aae01508010b20->enter($__internal_9af275f6c0466391155d6a94604553234fa926a76f39437a68aae01508010b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $this->loadTemplate("default/stylesheet.html.twig", "base.html.twig", 6)->display($context);
        
        $__internal_9af275f6c0466391155d6a94604553234fa926a76f39437a68aae01508010b20->leave($__internal_9af275f6c0466391155d6a94604553234fa926a76f39437a68aae01508010b20_prof);

        
        $__internal_f0a8690cabeef423fef6b47df619367df57829402d7bc18c0a312ffb5be2da9b->leave($__internal_f0a8690cabeef423fef6b47df619367df57829402d7bc18c0a312ffb5be2da9b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_055b2a8313340a89b5b04ac93801211507b7ff329b964a8bedb2bed824202cbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_055b2a8313340a89b5b04ac93801211507b7ff329b964a8bedb2bed824202cbc->enter($__internal_055b2a8313340a89b5b04ac93801211507b7ff329b964a8bedb2bed824202cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_30cc1ff91c61d51de06e295c17b78d97a16e910484df79f894cf621954564d8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30cc1ff91c61d51de06e295c17b78d97a16e910484df79f894cf621954564d8b->enter($__internal_30cc1ff91c61d51de06e295c17b78d97a16e910484df79f894cf621954564d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
";
        
        $__internal_30cc1ff91c61d51de06e295c17b78d97a16e910484df79f894cf621954564d8b->leave($__internal_30cc1ff91c61d51de06e295c17b78d97a16e910484df79f894cf621954564d8b_prof);

        
        $__internal_055b2a8313340a89b5b04ac93801211507b7ff329b964a8bedb2bed824202cbc->leave($__internal_055b2a8313340a89b5b04ac93801211507b7ff329b964a8bedb2bed824202cbc_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2c1e6fee05b297dc93499f686f0aa7eb7d0a2ba63702f71a51a1cd90a577e045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c1e6fee05b297dc93499f686f0aa7eb7d0a2ba63702f71a51a1cd90a577e045->enter($__internal_2c1e6fee05b297dc93499f686f0aa7eb7d0a2ba63702f71a51a1cd90a577e045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1d4a97650468f5a4a1efadc7e03109638a7ff7e3e50c35b31f089140ae8b9757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d4a97650468f5a4a1efadc7e03109638a7ff7e3e50c35b31f089140ae8b9757->enter($__internal_1d4a97650468f5a4a1efadc7e03109638a7ff7e3e50c35b31f089140ae8b9757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $this->loadTemplate("default/javascripts.html.twig", "base.html.twig", 14)->display($context);
        
        $__internal_1d4a97650468f5a4a1efadc7e03109638a7ff7e3e50c35b31f089140ae8b9757->leave($__internal_1d4a97650468f5a4a1efadc7e03109638a7ff7e3e50c35b31f089140ae8b9757_prof);

        
        $__internal_2c1e6fee05b297dc93499f686f0aa7eb7d0a2ba63702f71a51a1cd90a577e045->leave($__internal_2c1e6fee05b297dc93499f686f0aa7eb7d0a2ba63702f71a51a1cd90a577e045_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 14,  111 => 11,  102 => 10,  84 => 6,  66 => 5,  55 => 15,  53 => 14,  50 => 13,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}{% include ('default/stylesheet.html.twig') %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('assets/images/favicon.ico') }}\" />
</head>
<body>
{% block body %}

{% endblock %}
</body>
{% block javascripts %}{% include ('default/javascripts.html.twig') %}{% endblock %}
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\VaranMedical\\app\\Resources\\views\\base.html.twig");
    }
}
