<?php

/* base.html.twig */
class __TwigTemplate_38cb792de443d48b66d5753f2631a792e57bde47794566b06eb55c07bbf1754c extends Twig_Template
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
        $__internal_2c95c576ccfc09065eeef1425c18a96af73b1d69a873e7b2f0ee741ea4ae4d02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c95c576ccfc09065eeef1425c18a96af73b1d69a873e7b2f0ee741ea4ae4d02->enter($__internal_2c95c576ccfc09065eeef1425c18a96af73b1d69a873e7b2f0ee741ea4ae4d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_2c95c576ccfc09065eeef1425c18a96af73b1d69a873e7b2f0ee741ea4ae4d02->leave($__internal_2c95c576ccfc09065eeef1425c18a96af73b1d69a873e7b2f0ee741ea4ae4d02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8702be3920f2b36cde339fd24e19f2449e0698812c9182bf1d652dc220ef5f88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8702be3920f2b36cde339fd24e19f2449e0698812c9182bf1d652dc220ef5f88->enter($__internal_8702be3920f2b36cde339fd24e19f2449e0698812c9182bf1d652dc220ef5f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8702be3920f2b36cde339fd24e19f2449e0698812c9182bf1d652dc220ef5f88->leave($__internal_8702be3920f2b36cde339fd24e19f2449e0698812c9182bf1d652dc220ef5f88_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eb6a6068aee161aa482be9dc5c8210c8159d607f675d738b19411cf878c8468a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb6a6068aee161aa482be9dc5c8210c8159d607f675d738b19411cf878c8468a->enter($__internal_eb6a6068aee161aa482be9dc5c8210c8159d607f675d738b19411cf878c8468a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $this->loadTemplate("default/stylesheet.html.twig", "base.html.twig", 6)->display($context);
        
        $__internal_eb6a6068aee161aa482be9dc5c8210c8159d607f675d738b19411cf878c8468a->leave($__internal_eb6a6068aee161aa482be9dc5c8210c8159d607f675d738b19411cf878c8468a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_045e990804601b139f49ce2bc5c101f889fc0663070153b88725286aeef5e9f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_045e990804601b139f49ce2bc5c101f889fc0663070153b88725286aeef5e9f2->enter($__internal_045e990804601b139f49ce2bc5c101f889fc0663070153b88725286aeef5e9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
";
        
        $__internal_045e990804601b139f49ce2bc5c101f889fc0663070153b88725286aeef5e9f2->leave($__internal_045e990804601b139f49ce2bc5c101f889fc0663070153b88725286aeef5e9f2_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f79a9639ef3825158076537c1146a4df396fea4edac582b2de4b435408c367e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f79a9639ef3825158076537c1146a4df396fea4edac582b2de4b435408c367e7->enter($__internal_f79a9639ef3825158076537c1146a4df396fea4edac582b2de4b435408c367e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $this->loadTemplate("default/javascripts.html.twig", "base.html.twig", 14)->display($context);
        
        $__internal_f79a9639ef3825158076537c1146a4df396fea4edac582b2de4b435408c367e7->leave($__internal_f79a9639ef3825158076537c1146a4df396fea4edac582b2de4b435408c367e7_prof);

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
        return array (  98 => 14,  90 => 11,  84 => 10,  72 => 6,  60 => 5,  52 => 15,  50 => 14,  47 => 13,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
