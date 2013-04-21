<?php

/* CineminoSiteBundle:Evenement:index.html.twig */
class __TwigTemplate_7d44a429c414bf60edea26f86890942a extends Twig_Template
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
        echo "Liste des évènements";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "
<a class=\"btn btn-info\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evenement_new"), "html", null, true);
        echo "\"><i class=\"icon-white icon-plus\"></i> Ajouter un évenement</a>
<br><br>
<table class=\"table table-bordered table-striped table-hover\">
    <thead>
        <tr>
            <th>Titre de l'évènement</th>
            <th>Description de l'évènement</th>
            <th>Date début evenement</th>
            <th>Date de fin</th>
            <th>Priorite</th>
            <th>Actions</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evenement_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titreEvenement"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descriptionEvenement"), "html", null, true);
            echo "</td>
            <td>";
            // line 32
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateEvenement")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateEvenement"), "Y-m-d"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 33
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateFin")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateFin"), "Y-m-d"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "priorite"), "html", null, true);
            echo "</td>
            <td>
          <a class=\"btn\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evenement_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><i class=\"icon icon-search\"></i> Info</a>
          <a class=\"btn btn-info\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evenement_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><i class=\"icon-white icon-pencil\"></i> Editer</a>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 41
        echo "    </tbody>
</table>


";
    }

    public function getTemplateName()
    {
        return "CineminoSiteBundle:Evenement:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 41,  114 => 37,  110 => 36,  105 => 34,  99 => 33,  93 => 32,  89 => 31,  83 => 30,  80 => 29,  76 => 28,  59 => 14,  56 => 13,  53 => 12,  47 => 9,  40 => 6,  34 => 3,  31 => 2,);
    }
}
