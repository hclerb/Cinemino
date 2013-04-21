<?php

/* CineminoSiteBundle:Seance:edit.html.twig */
class __TwigTemplate_09a70c6c4c75292fcf0c79db7c5e4f34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CineminoSiteBundle::seancelayout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'formulaire' => array($this, 'block_formulaire'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CineminoSiteBundle::seancelayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Séances
";
    }

    // line 7
    public function block_formulaire($context, array $blocks = array())
    {
        // line 8
        echo "
<div id=\"formulaire\" class=\"well\" style=\"width:800px\">
<div class=\"page-header\"><h3>Modifier séance du ";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateSeance"), "y:m:d"), "html", null, true);
        echo "</h3>


";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "getFlashes", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["flash"]) {
            // line 14
            echo "    <div class=\"alert alert-success\">
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["flash"]) ? $context["flash"] : $this->getContext($context, "flash"))), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 18
        echo "
</div>    
<form action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("seance_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "#formulaire\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        
     <br><br>   
    <p>
        <button class=\"btn btn-primary\" type=\"submit\">Enregistrer</button>
        <a class=\"btn\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("seance"), "html", null, true);
        echo "\"><i class=\"icon-ban-circle\"></i> Annuler</a>
    </p>
</form>


        <form action=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("seance_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
           <button class=\"btn btn-danger\" type=\"submit\">Supprimer la séance</button><i class=\"icon-remove icon-white\"></i>
        </form>
    </li>


</div>    
<script type=\"text/javascript\">
 \$(function(){
  \$(\"#";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateSeance"), "vars"), "id"), "html", null, true);
        echo "\").datepicker({
    language: 'fr',
    weekStart: 3
   });

 });
</script> 

";
    }

    public function getTemplateName()
    {
        return "CineminoSiteBundle:Seance:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 41,  97 => 32,  93 => 31,  85 => 26,  77 => 21,  71 => 20,  67 => 18,  58 => 15,  55 => 14,  51 => 13,  45 => 10,  41 => 8,  38 => 7,  32 => 4,  29 => 3,);
    }
}
