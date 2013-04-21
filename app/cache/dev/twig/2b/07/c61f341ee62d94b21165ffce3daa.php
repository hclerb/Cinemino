<?php

/* CineminoSiteBundle:Seance:show.html.twig */
class __TwigTemplate_2b07c61f341ee62d94b21165ffce3daa extends Twig_Template
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
        // line 2
        $context["mois"] = array(0 => " ", 1 => "janvier", 2 => "février", 3 => "mars", 4 => "avril", 5 => "mai", 6 => "juin", 7 => "juillet", 8 => "août", 9 => "septembre", 10 => "octobre", 11 => "novembre", 12 => "décembre");
        // line 3
        $context["lejour"] = array(0 => "Dimanche", 1 => "Lundi", 2 => "Mardi", 3 => "Mercredi", 4 => "Jeudi", 5 => "Vendredi", 6 => "Samedi");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Séances
";
    }

    // line 11
    public function block_formulaire($context, array $blocks = array())
    {
        // line 12
        echo "<div id=\"formulaire\" class=\"well\">
<div class=\"page-header\"><h3>Séance du ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lejour"]) ? $context["lejour"] : $this->getContext($context, "lejour")), twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateSeance"), "w"), array(), "array"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateSeance"), "d"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mois"]) ? $context["mois"] : $this->getContext($context, "mois")), twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateSeance"), "n"), array(), "array"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateSeance"), "Y"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "heure"), "H:i"), "html", null, true);
        echo " </h3></div>
<div class=\"row\">
    <div class = \"span2\">
        <div><img class=\"img-polaroid\" style=\"height:150px;\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("affiche/small/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idFilm"), "getAffiche", array(), "method"), "html", null, true);
        echo "\" alt=\"\"/></div>
    </div>
     <div class=\"span4\">
        <table class=\"table\">
            <tbody>
                <tr>
                    <th>Film</th>
                    <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idFilm"), "titreFilm"), "html", null, true);
        echo " Réalisé par ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idFilm"), "realisateur"), "html", null, true);
        echo "</td>
                </tr>                
                <tr>
                    <th>Version</th>
                    <td> ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "version"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td> ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Avant premiere</th>
                    <td>";
        // line 35
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "avantPremiere") == "o")) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "</td>
                </tr>
                <tr>
                    <th>Sortie nationale</th>
                    <td>";
        // line 39
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sortieNationale") == "o")) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<br><br>

      <a class=\"btn\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("seance"), "html", null, true);
        echo "\"><i class=\"icon-arrow-left\"></i> Revenir a la liste</a>
      <a class=\"btn\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("seance_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "#formulaire\"><i class=\"icon-pencil\"></i> Editer</a>

 

</div>
";
    }

    public function getTemplateName()
    {
        return "CineminoSiteBundle:Seance:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 48,  122 => 47,  107 => 39,  96 => 35,  89 => 31,  82 => 27,  73 => 23,  62 => 16,  48 => 13,  45 => 12,  42 => 11,  36 => 6,  33 => 5,  28 => 3,  26 => 2,);
    }
}
