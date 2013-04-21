<?php

/* CineminoSiteBundle:film:index.html.twig */
class __TwigTemplate_4e616878339d24226f4b2939b88a8608 extends Twig_Template
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
        echo "Ajouter ou modifier les films.
";
    }

    // line 9
    public function block_titre($context, array $blocks = array())
    {
        echo "Liste des films";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "
<a class=\"btn btn-info\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("film_new"), "html", null, true);
        echo "\"><i class=\"icon-white icon-plus\"></i> Ajouter un film</a>
<br><br>
<table class=\"table table-bordered table-striped table-hover\">
    <thead>
           <tr bgcolor=\"#EAE8FF\">
            <th width=350>Titre du film</th>
            <th>Durée</th>
            <th>Realisateur</th>
            <th>Affiche</th>
            <th>Type</th>
            <th width=180>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 29
            echo "        <tr>
            <td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("film_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titreFilm"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "duree"), "H:i"), "html", null, true);
            echo "</td>
            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "realisateur"), "html", null, true);
            echo "</td>
            <td><img class=\"img-polaroid\" style=\"height:150px;\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("affiche/small/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "affiche"), "html", null, true);
            echo "\" alt=\"\"/></td>
            <!-- big/ ou small/ selon si on veut recuperer l'affiche redimensionné ou non -->
            <td>";
            // line 35
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type") == "n")) {
                echo "Normal";
            } else {
                echo "Court-métrage";
            }
            echo "</td>
            <td>
                      
          <a class=\"btn\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("film_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><i class=\"icon icon-search\"></i> Info</a>
          <a class=\"btn btn-info\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("film_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><i class=\"icon-white icon-pencil\"></i> Editer</a>
      
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 44
        echo "    </tbody>
</table>

";
        // line 47
        $this->displayBlock('formulaire', $context, $blocks);
        // line 50
        echo "
";
    }

    // line 47
    public function block_formulaire($context, array $blocks = array())
    {
        // line 48
        echo "
";
    }

    public function getTemplateName()
    {
        return "CineminoSiteBundle:film:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 48,  141 => 47,  136 => 50,  134 => 47,  129 => 44,  118 => 39,  114 => 38,  104 => 35,  98 => 33,  94 => 32,  90 => 31,  84 => 30,  81 => 29,  77 => 28,  60 => 14,  57 => 13,  54 => 12,  48 => 9,  41 => 6,  35 => 3,  32 => 2,);
    }
}
