<?php

/* PiGeneralBundle:Default:billets.html.twig */
class __TwigTemplate_f77f7cd6b9c26a9384c71443f426da27b8836d792760c4e01a8acf83ffad602b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PiGeneralBundle:Default:billets.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "GoVoyage | Flights";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "C'est la page des billets
";
    }

    public function getTemplateName()
    {
        return "PiGeneralBundle:Default:billets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}GoVoyage | Flights{% endblock %}*/
/* */
/* {% block body %}*/
/* C'est la page des billets*/
/* {% endblock %}*/
/* */
