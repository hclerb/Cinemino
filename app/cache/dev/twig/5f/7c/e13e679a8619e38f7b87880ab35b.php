<?php

/* CineminoSiteBundle:Cinema:index.html.twig */
class __TwigTemplate_5f7ce13e679a8619e38f7b87880ab35b extends Twig_Template
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

    // line 11
    public function block_titre($context, array $blocks = array())
    {
        echo "Liste des cinémas";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
 <table class=\"table table-bordered table-striped table-hover\" style=\"border-collapse: collapse;\">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Photo</th>
            <th>Logo</th>
            <th>Site web</th>
            <th>Type</th>
            <th>Programmateur</th>
            <th>Actions</th>
        </tr>
    </thead>

    ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 30
            echo "        <tr>
            <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cinema_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomCinema"), "html", null, true);
            echo "</a></td>
            <td><img class=\"img-polaroid\" style=\"height:60px;\" src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "photo"), "html", null, true);
            echo "\" alt=\"\"/></td>
            <td><img class=\"img-polaroid\" style=\"height:60px;\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "logo"), "html", null, true);
            echo "\" alt=\"\"/></td>
            <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "siteWeb"), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "siteWeb"), "html", null, true);
            echo "</a></td>
            <td>  ";
            // line 35
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type") == "i")) {
                echo "Itinérant ";
            } else {
                echo "Normal";
            }
            echo "</td>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idCompte"), "html", null, true);
            echo "</td>
            <td>
            
                    <a class=\"btn btn-info\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cinema_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><i class=\"icon-white icon-info-sign\"></i> Voir</a>
                    <a class=\"btn btn-info\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cinema_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><i class=\"icon-white icon-pencil\"></i> Editer</a>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 44
        echo " 
</table>
";
        // line 46
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 47
            echo "   <td><a class=\"btn btn-info\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cinema_new"), "html", null, true);
            echo "\"><i class=\"icon-white icon-plus\"></i> Ajouter un cinéma</a></td>
";
        }
        // line 49
        echo "   
";
    }

    public function getTemplateName()
    {
        return "CineminoSiteBundle:Cinema:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 49,  134 => 47,  132 => 46,  128 => 44,  118 => 40,  114 => 39,  108 => 36,  100 => 35,  94 => 34,  90 => 33,  86 => 32,  80 => 31,  77 => 30,  73 => 29,  57 => 15,  54 => 14,  48 => 11,  40 => 7,  34 => 4,  31 => 3,);
    }
}
