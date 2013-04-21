<?php

/* CineminoSiteBundle::layout.html.twig */
class __TwigTemplate_f8121bdfc8b80d6b39da59b4c27ef5c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'info' => array($this, 'block_info'),
            'titre' => array($this, 'block_titre'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_info($context, array $blocks = array())
    {
        // line 9
        echo "
<div class=\"page-header\">
 <h3>";
        // line 11
        $this->displayBlock('titre', $context, $blocks);
        echo "</h3>
 </div>
 
 ";
        // line 16
        echo " ";
        $this->displayBlock('content', $context, $blocks);
    }

    // line 11
    public function block_titre($context, array $blocks = array())
    {
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "CineminoSiteBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  58 => 11,  53 => 16,  47 => 11,  43 => 9,  40 => 8,  34 => 3,  31 => 2,);
    }
}
