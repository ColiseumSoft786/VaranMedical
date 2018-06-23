<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_ac4577b33a1508f28febae67b77f8b093663a6c91b13d448e6865acd42e10dd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_821500a0b39e6bc96772e5c4463f1f574bd041006b959c8c059997abe6ce5964 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_821500a0b39e6bc96772e5c4463f1f574bd041006b959c8c059997abe6ce5964->enter($__internal_821500a0b39e6bc96772e5c4463f1f574bd041006b959c8c059997abe6ce5964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_309b8794a2477b95e8812ad713567dc49bb3ab3f062413e48bff9fbb23d713fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_309b8794a2477b95e8812ad713567dc49bb3ab3f062413e48bff9fbb23d713fa->enter($__internal_309b8794a2477b95e8812ad713567dc49bb3ab3f062413e48bff9fbb23d713fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_821500a0b39e6bc96772e5c4463f1f574bd041006b959c8c059997abe6ce5964->leave($__internal_821500a0b39e6bc96772e5c4463f1f574bd041006b959c8c059997abe6ce5964_prof);

        
        $__internal_309b8794a2477b95e8812ad713567dc49bb3ab3f062413e48bff9fbb23d713fa->leave($__internal_309b8794a2477b95e8812ad713567dc49bb3ab3f062413e48bff9fbb23d713fa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2427b0f474f8946a5f0cc0213b7496746d0fe20b581eb52f069001d9ba513a35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2427b0f474f8946a5f0cc0213b7496746d0fe20b581eb52f069001d9ba513a35->enter($__internal_2427b0f474f8946a5f0cc0213b7496746d0fe20b581eb52f069001d9ba513a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_239898210b29cc2167a19fd28f7398aa7161a68748616d0643841011002333f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_239898210b29cc2167a19fd28f7398aa7161a68748616d0643841011002333f8->enter($__internal_239898210b29cc2167a19fd28f7398aa7161a68748616d0643841011002333f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_239898210b29cc2167a19fd28f7398aa7161a68748616d0643841011002333f8->leave($__internal_239898210b29cc2167a19fd28f7398aa7161a68748616d0643841011002333f8_prof);

        
        $__internal_2427b0f474f8946a5f0cc0213b7496746d0fe20b581eb52f069001d9ba513a35->leave($__internal_2427b0f474f8946a5f0cc0213b7496746d0fe20b581eb52f069001d9ba513a35_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3e568d4bd5336082c2346a1c87a320fb51664e3d0b953a8bc8140d9af2687f26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e568d4bd5336082c2346a1c87a320fb51664e3d0b953a8bc8140d9af2687f26->enter($__internal_3e568d4bd5336082c2346a1c87a320fb51664e3d0b953a8bc8140d9af2687f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_63e5bae5555b27bf260d713341424d6b21e8c3eb716d22768da450850f1b3d3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63e5bae5555b27bf260d713341424d6b21e8c3eb716d22768da450850f1b3d3b->enter($__internal_63e5bae5555b27bf260d713341424d6b21e8c3eb716d22768da450850f1b3d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_63e5bae5555b27bf260d713341424d6b21e8c3eb716d22768da450850f1b3d3b->leave($__internal_63e5bae5555b27bf260d713341424d6b21e8c3eb716d22768da450850f1b3d3b_prof);

        
        $__internal_3e568d4bd5336082c2346a1c87a320fb51664e3d0b953a8bc8140d9af2687f26->leave($__internal_3e568d4bd5336082c2346a1c87a320fb51664e3d0b953a8bc8140d9af2687f26_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad4cf23fb1aa4595a73c20366d9dcf10a62ea460b14df769653ae7f7891aa16b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad4cf23fb1aa4595a73c20366d9dcf10a62ea460b14df769653ae7f7891aa16b->enter($__internal_ad4cf23fb1aa4595a73c20366d9dcf10a62ea460b14df769653ae7f7891aa16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ebaad48dcfd24bb3bd179c340b906edd898d6b810cf423bd4ee5d4c803f6accb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebaad48dcfd24bb3bd179c340b906edd898d6b810cf423bd4ee5d4c803f6accb->enter($__internal_ebaad48dcfd24bb3bd179c340b906edd898d6b810cf423bd4ee5d4c803f6accb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ebaad48dcfd24bb3bd179c340b906edd898d6b810cf423bd4ee5d4c803f6accb->leave($__internal_ebaad48dcfd24bb3bd179c340b906edd898d6b810cf423bd4ee5d4c803f6accb_prof);

        
        $__internal_ad4cf23fb1aa4595a73c20366d9dcf10a62ea460b14df769653ae7f7891aa16b->leave($__internal_ad4cf23fb1aa4595a73c20366d9dcf10a62ea460b14df769653ae7f7891aa16b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\VaranMedical\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
