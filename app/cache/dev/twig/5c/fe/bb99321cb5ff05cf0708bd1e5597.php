<?php

/* CineminoUserBundle::userlayout.html.twig */
class __TwigTemplate_5cfebb99321cb5ff05cf0708bd1e5597 extends Twig_Template
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
        echo " -  Utilisateurs
";
    }

    // line 7
    public function block_alert($context, array $blocks = array())
    {
        echo "Ici vous pouvez gérer l'ensemble des utilisateurs.
";
    }

    // line 10
    public function block_titre($context, array $blocks = array())
    {
        echo "Liste des utilisateurs";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "

<table class=\"table table-bordered table-striped table-hover\" style=\"border-collapse: collapse;\">
    <thead>
        <tr>
            <th>Nom d'utilisateur</th>
            <th>Email</th>
            <th>Dernière connexion</th>
            <th>Activé</th>
            <th>Roles</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
            echo "</td>
            <td>";
            // line 32
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastLogin")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastLogin"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td style=\"color:";
            // line 33
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "locked") == null)) {
                echo "green ";
            } else {
                echo "red";
            }
            echo "\">";
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "locked") == null)) {
                echo "Oui ";
            } else {
                echo " Non ";
            }
            echo "</td>
            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "roles"), 0, array(), "array"), "html", null, true);
            echo "</td>
            <td>
                <ul>
                    
                <a class=\"btn\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><i class=\"icon icon-search\"></i> Info</a>
                <a class=\"btn btn-info\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><i class=\"icon-white icon-pencil\"></i> Editer</a>
                
                   
                </ul>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 46
        echo "    </tbody>
</table>
";
        // line 48
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 49
            echo "   <a class=\"btn btn-info\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_new"), "html", null, true);
            echo "\"><i class=\"icon-white icon-plus\"></i> Ajouter un utilisateur</a>
";
        }
        // line 51
        echo "<br><br>

   
";
        // line 54
        $this->displayBlock('formulaire', $context, $blocks);
        // line 57
        echo "        

";
    }

    // line 54
    public function block_formulaire($context, array $blocks = array())
    {
        // line 55
        echo "
";
    }

    public function getTemplateName()
    {
        return "CineminoUserBundle::userlayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 55,  159 => 54,  153 => 57,  151 => 54,  146 => 51,  140 => 49,  138 => 48,  134 => 46,  121 => 39,  117 => 38,  110 => 34,  96 => 33,  90 => 32,  86 => 31,  80 => 30,  77 => 29,  73 => 28,  57 => 14,  54 => 13,  48 => 10,  41 => 7,  35 => 4,  32 => 3,);
    }
}
