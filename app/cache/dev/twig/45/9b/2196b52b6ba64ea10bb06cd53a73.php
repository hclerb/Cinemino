<?php

/* CineminoSiteBundle:Cinema:show.html.twig */
class __TwigTemplate_459b2196b52b6ba64ea10bb06cd53a73 extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo " -  Accueil
";
    }

    // line 7
    public function block_alert($context, array $blocks = array())
    {
        echo "Ici vous pouvez gérer l'ensemble des cinémas dont vous avez la charge ( modification / visualisation ).<br> 
Seul l'Administrateur peut supprimer ou ajouter un cinéma.
";
    }

    // line 10
    public function block_titre($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomCinema"), "html", null, true);
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "
  <td> <img class=\"img-polaroid\" width=\"450\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "photo"), "html", null, true);
        echo "\" alt=\"\"/></td>
  <td> <img class=\"img-polaroid\" width=\"250px\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "logo"), "html", null, true);
        echo "\" alt=\"\"/></td>
<br><br>
<table class=\"record_properties\">
    <tbody>
    
        <tr>
            <th>Adresse :</th>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "adresse"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Adresse mail :</th>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "adresseMail"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Coordonnees tel :</th>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "coordonneesTel"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Site web :</th>
            <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "siteWeb"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Couleur de fond :</th>
            <td style=\"background-color:#";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "couleurFondCinema"), "html", null, true);
        echo "\"></td>
        </tr>
        <tr>
            <th>Type :</th>
            <td>";
        // line 43
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type") == "i")) {
            echo "Itinérant ";
        } else {
            echo "Normal";
        }
        echo "</td>
        </tr>
    </tbody>
</table>

<br><br>


   
        <a class=\"btn\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cinema"), "html", null, true);
        echo "\"><i class=\"icon-arrow-left\"></i> Revenir a la liste</a>
   

        
        <a class=\"btn\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cinema_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"><i class=\"icon-pencil\"></i> Editer</a>
            
<br><br>
    ";
        // line 59
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 60
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cinema_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" method=\"post\">
            ";
            // line 61
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
            echo "
            <button class=\"btn btn-danger\" type=\"submit\"><i class=\"icon-remove icon-white\"></i> Supprimer ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomCinema"), "html", null, true);
            echo "</button>
        </form>
    ";
        }
        // line 65
        echo "

";
    }

    public function getTemplateName()
    {
        return "CineminoSiteBundle:Cinema:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 65,  149 => 62,  145 => 61,  140 => 60,  138 => 59,  132 => 56,  125 => 52,  109 => 43,  102 => 39,  95 => 35,  88 => 31,  81 => 27,  74 => 23,  64 => 16,  60 => 15,  57 => 14,  54 => 13,  48 => 10,  40 => 7,  34 => 4,  31 => 3,);
    }
}
