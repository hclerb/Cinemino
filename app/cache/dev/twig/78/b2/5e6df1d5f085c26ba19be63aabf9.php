<?php

/* CineminoSiteBundle::seancelayout.html.twig */
class __TwigTemplate_78b25e6df1d5f085c26ba19be63aabf9 extends Twig_Template
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
            'formulaire' => array($this, 'block_formulaire'),
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
        echo "
";
    }

    // line 7
    public function block_alert($context, array $blocks = array())
    {
        echo "Gerez vos séances, vous pouvez rechercher et ajouter un film ( les informations sont récupéreés depuis allociné )
 , ainsi que créer et attacher un évènement.
<br> 

";
    }

    // line 13
    public function block_titre($context, array $blocks = array())
    {
        echo "Liste des séances";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "
<a class=\"btn btn-info\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("seance_new"), "html", null, true);
        echo "#formulaire\"><i class=\"icon-white icon-plus\"></i> Créer une séance</a>
<br><br>

";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cinemas"]) ? $context["cinemas"] : $this->getContext($context, "cinemas")));
        foreach ($context['_seq'] as $context["_key"] => $context["cin"]) {
            // line 22
            echo "
<table class=\"table table-bordered table-striped table-hover\">
   <h3><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cinema_show", array("id" => $this->getAttribute((isset($context["cin"]) ? $context["cin"] : $this->getContext($context, "cin")), "getId", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cin"]) ? $context["cin"] : $this->getContext($context, "cin")), "nomCinema"), "html", null, true);
            echo "</a></h3>
    <thead>
        <tr bgcolor=\"#F6FFA3\">
            <th>Date de la séance</th>
            <th>Heure</th>
            <th>Film</th>
            <th>Version</th>
            <th>Type</th>
            <th>Avant premiere</th>
            <th>Sortie nationale</th>
            <th>Evènement</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
            // line 39
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 40
                echo "       ";
                if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idCinema") == (isset($context["cin"]) ? $context["cin"] : $this->getContext($context, "cin")))) {
                    echo "     
          <tr bgcolor=\"white\">
            <td><a href=\"";
                    // line 42
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("seance_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                    echo "#formulaire\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateSeance"), "d/m/Y"), "html", null, true);
                    echo "</a></td>
            <td>";
                    // line 43
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "heure"), "H:i"), "html", null, true);
                    echo "</td>
            <td>";
                    // line 44
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idFilm"), "titreFilm"), "html", null, true);
                    echo " Réalisé par ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idFilm"), "realisateur"), "html", null, true);
                    echo "</td>           
            <td>";
                    // line 45
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "version"), "html", null, true);
                    echo "</td>
            <td>";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type"), "html", null, true);
                    echo "</td>
            <td>";
                    // line 47
                    if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "avantPremiere") == "o")) {
                        echo "Oui";
                    } else {
                        echo "Non";
                    }
                    echo "</td>
            <td>";
                    // line 48
                    if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sortieNationale") == "o")) {
                        echo "Oui";
                    } else {
                        echo "Non";
                    }
                    echo "</td>
            <td>";
                    // line 49
                    if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idEvenement")) {
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idEvenement"), "html", null, true);
                    }
                    echo "</td>
            <td>    
                <a class=\"btn\" href=\"";
                    // line 51
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("seance_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                    echo "#formulaire\"><i class=\"icon icon-search\"></i> Info</a>
                <a class=\"btn btn-info\" href=\"";
                    // line 52
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("seance_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                    echo "#formulaire\"><i class=\"icon-white icon-pencil\"></i> Editer</a>
            </td>
          </tr>
        ";
                }
                // line 56
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 57
            echo "    </tbody>
</table>
     
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cin'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 61
        echo "

<br><br><br>


 

";
        // line 68
        $this->displayBlock('formulaire', $context, $blocks);
        // line 71
        echo "


";
    }

    // line 68
    public function block_formulaire($context, array $blocks = array())
    {
        // line 69
        echo "
";
    }

    public function getTemplateName()
    {
        return "CineminoSiteBundle::seancelayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 69,  198 => 68,  191 => 71,  189 => 68,  180 => 61,  171 => 57,  165 => 56,  158 => 52,  154 => 51,  147 => 49,  139 => 48,  131 => 47,  127 => 46,  123 => 45,  117 => 44,  113 => 43,  107 => 42,  101 => 40,  97 => 39,  77 => 24,  73 => 22,  69 => 21,  63 => 18,  60 => 17,  57 => 16,  51 => 13,  41 => 7,  35 => 4,  32 => 3,);
    }
}
