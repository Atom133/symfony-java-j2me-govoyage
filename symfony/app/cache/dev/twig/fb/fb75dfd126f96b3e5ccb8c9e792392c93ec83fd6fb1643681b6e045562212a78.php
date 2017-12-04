<?php

/* PiGeneralBundle:Default:hotels.html.twig */
class __TwigTemplate_6aac9c1cb2c4fe0700e791e90dac2663b0b987cb01f1682b9f790cfb62f4b67d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PiGeneralBundle:Default:hotels.html.twig", 1);
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
        echo "GoVoyage | Hotels";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "C'est la page hotels
";
    }

    public function getTemplateName()
    {
        return "PiGeneralBundle:Default:hotels.html.twig";
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
/* {% block title %}GoVoyage | Hotels{% endblock %}*/
/* */
/* {% block body %}*/
/* C'est la page hotels*/
/* {% endblock %}*/
