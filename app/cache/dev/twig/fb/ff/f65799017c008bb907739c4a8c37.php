<?php

/* CineminoSiteBundle::interlayout.html.twig */
class __TwigTemplate_fbfff65799017c008bb907739c4a8c37 extends Twig_Template
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
        echo "Ici vous pouvez gérer les intervenants qui viennent dans les évènements dont vous avez la charge.<br> 

";
    }

    // line 11
    public function block_titre($context, array $blocks = array())
    {
        echo "Liste des intervenants";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
<table class=\"table table-bordered table-striped table-hover\">
    <thead>
        <tr>
            <th>Nom de l'intervenant</th>
            <th>Description de l'intervenant</th>
            <th>Url photo</th>
            <th>Url logo</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 28
            echo "        <tr>
            <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intervenant_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomIntervenant"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descriptionIntervenant"), "html", null, true);
            echo "</td>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "urlPhotoIntervenant"), "html", null, true);
            echo "</td>
            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "urlLogo"), "html", null, true);
            echo "</td>
            <td>
              
                   
          <a class=\"btn\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intervenant_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "#show\"><i class=\"icon icon-search\"></i> Info</a>
          <a class=\"btn btn-info\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intervenant_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "#formulaire\"><i class=\"icon-white icon-pencil\"></i> Editer</a>
      
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 42
        echo "    </tbody>
</table>

<a class=\"btn btn-info\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intervenant_new"), "html", null, true);
        echo "\"><i class=\"icon-white icon-plus\"></i> Ajouter un intervenant</a>
<br><br>

";
        // line 48
        $this->displayBlock('formulaire', $context, $blocks);
        // line 51
        echo "


";
    }

    // line 48
    public function block_formulaire($context, array $blocks = array())
    {
        // line 49
        echo "
";
    }

    public function getTemplateName()
    {
        return "CineminoSiteBundle::interlayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 49,  135 => 48,  128 => 51,  126 => 48,  120 => 45,  115 => 42,  104 => 37,  100 => 36,  93 => 32,  89 => 31,  85 => 30,  79 => 29,  76 => 28,  72 => 27,  58 => 15,  55 => 14,  49 => 11,  41 => 7,  35 => 4,  32 => 3,);
    }
}
