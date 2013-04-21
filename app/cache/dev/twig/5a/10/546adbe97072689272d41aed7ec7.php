<?php

/* CineminoUserBundle:User:edit.html.twig */
class __TwigTemplate_5a10546adbe97072689272d41aed7ec7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CineminoUserBundle::userlayout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'alert' => array($this, 'block_alert'),
            'formulaire' => array($this, 'block_formulaire'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CineminoUserBundle::userlayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        $this->displayParentBlock("title", $context, $blocks);
        echo " -  Utilisateurs
";
    }

    // line 8
    public function block_alert($context, array $blocks = array())
    {
        echo "Ici vous pouvez gérer l'ensemble des utilisateurs.
";
    }

    // line 13
    public function block_formulaire($context, array $blocks = array())
    {
        // line 14
        echo "<body onLoad=\"scrolldown();\"> 
    
<div class=\"well\" style=\"width:400px\">
<div class=\"page-header\"><h3>Modification compte : ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username"), "html", null, true);
        echo "</h3></div>   

<form action=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
       <br> 
    <p>
        <button class=\"btn btn-primary\" type=\"submit\">Enregistrer</button>
        <a class=\"btn\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user"), "html", null, true);
        echo "\"><i class=\"icon-ban-circle\"></i> Annuler</a>
    </p>
</form>

        <form action=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
            <button class=\"btn btn-danger\" type=\"submit\">Supprimer le compte ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username"), "html", null, true);
        echo "</button><i class=\"icon-remove icon-white\"></i>
        </form>
 
</div>
";
    }

    public function getTemplateName()
    {
        return "CineminoUserBundle:User:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 30,  83 => 29,  79 => 28,  72 => 24,  65 => 20,  59 => 19,  54 => 17,  49 => 14,  46 => 13,  39 => 8,  33 => 5,  30 => 4,);
    }
}
