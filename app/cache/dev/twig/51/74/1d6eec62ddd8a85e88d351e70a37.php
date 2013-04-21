<?php

/* CineminoSiteBundle:Test:index.html.twig */
class __TwigTemplate_51741d6eec62ddd8a85e88d351e70a37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CineminoSiteBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
  <table class=\"table table-bordered table-striped table-hover\">
    <thead>
      <tr>
        <th>Nom cinéma</th>
        <th>Autorisation</th>
      </tr>
    </thead>
    <tbody>
        
  ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCinema"]) ? $context["listCinema"] : $this->getContext($context, "listCinema")));
        foreach ($context['_seq'] as $context["_key"] => $context["cinema"]) {
            // line 19
            echo "       <tr>
        <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cinema"]) ? $context["cinema"] : $this->getContext($context, "cinema")), "nomCinema"), "html", null, true);
            echo "</td>
        <td>";
            // line 21
            if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username") == $this->getAttribute((isset($context["cinema"]) ? $context["cinema"] : $this->getContext($context, "cinema")), "getIdCompte", array(), "method")) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
                echo "<div style=\"color:green\">Oui</div>";
            } else {
                echo "<div style=\"color:red\">Non</div>";
            }
            echo "</td>
      </tr>
      
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cinema'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 25
        echo "
    </tbody>
  </table>



";
    }

    public function getTemplateName()
    {
        return "CineminoSiteBundle:Test:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 25,  64 => 21,  60 => 20,  57 => 19,  53 => 18,  41 => 8,  38 => 7,  32 => 4,  29 => 3,);
    }
}
