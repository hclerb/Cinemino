<?php

/* CineminoSiteBundle:Evenement:new.html.twig */
class __TwigTemplate_7e5b8bd15a68158f3c7b2c4519dd9bd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CineminoSiteBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'alert' => array($this, 'block_alert'),
            'titre' => array($this, 'block_titre'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CineminoSiteBundle::layout.html.twig";
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

    // line 6
    public function block_alert($context, array $blocks = array())
    {
        echo "Gérer les évènements lié aux séances.
";
    }

    // line 9
    public function block_titre($context, array $blocks = array())
    {
        echo "Création d'un évènement";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "<div class=\"well\" style=\"width:800px\">
<form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evenement_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
 
        <br><br>
        
         <button class=\"btn btn-primary\" type=\"submit\">Créer l'évènement</button>
         <a class=\"btn\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evenement"), "html", null, true);
        echo "\"><i class=\"icon-ban-circle\"></i> Annuler</a>
        
</form>

</div>
";
    }

    public function getTemplateName()
    {
        return "CineminoSiteBundle:Evenement:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  65 => 15,  59 => 14,  56 => 13,  53 => 12,  47 => 9,  40 => 6,  34 => 3,  31 => 2,);
    }
}
