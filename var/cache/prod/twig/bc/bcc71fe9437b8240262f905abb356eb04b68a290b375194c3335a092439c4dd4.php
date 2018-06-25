<?php

/* invoices/index.html.twig */
class __TwigTemplate_7d6a0164d0f53545fdfb6bf76e07b1615739959f694df58a7cd26eb439a1ae22 extends Twig_Template
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
        $__internal_be1414698191ecd06c5c194341cebaf8e28add5d3cbb59da4c0a293357b6c83b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be1414698191ecd06c5c194341cebaf8e28add5d3cbb59da4c0a293357b6c83b->enter($__internal_be1414698191ecd06c5c194341cebaf8e28add5d3cbb59da4c0a293357b6c83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "invoices/index.html.twig"));

        // line 1
        echo "<ul class=\"tg-themelist tg-liststyledot tg-listdatastyle tg-childservices\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["invoices"] ?? $this->getContext($context, "invoices")));
        foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
            // line 3
            echo "        <li> <em>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["invoice"], "subService", array()), "subService", array()), "html", null, true);
            echo "</em> <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["invoice"], "price", array()), "html", null, true);
            echo " €</span> </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</ul>
";
        
        $__internal_be1414698191ecd06c5c194341cebaf8e28add5d3cbb59da4c0a293357b6c83b->leave($__internal_be1414698191ecd06c5c194341cebaf8e28add5d3cbb59da4c0a293357b6c83b_prof);

    }

    public function getTemplateName()
    {
        return "invoices/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  29 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"tg-themelist tg-liststyledot tg-listdatastyle tg-childservices\">
    {% for invoice in invoices %}
        <li> <em>{{ invoice.subService.subService }}</em> <span>{{ invoice.price }} €</span> </li>
    {% endfor %}
</ul>
", "invoices/index.html.twig", "C:\\xampp\\htdocs\\VaranMedical\\app\\Resources\\views\\invoices\\index.html.twig");
    }
}
