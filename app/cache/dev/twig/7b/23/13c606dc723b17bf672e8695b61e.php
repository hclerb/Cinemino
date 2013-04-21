<?php

/* FOSUserBundle::profilelayout.html.twig */
class __TwigTemplate_7b2313c606dc723b17bf672e8695b61e extends Twig_Template
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
            'edit_user' => array($this, 'block_edit_user'),
            'edit_password' => array($this, 'block_edit_password'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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
        echo " -  Accueil
";
    }

    // line 6
    public function block_alert($context, array $blocks = array())
    {
        echo "Ici vous pouvez modifier votre email et changer de mdp";
    }

    // line 7
    public function block_titre($context, array $blocks = array())
    {
        echo "Modifier Profil";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "

";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "getFlashes", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["flash"]) {
            // line 13
            echo "    <div class=\"alert alert-success\">
        ";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["flash"]) ? $context["flash"] : $this->getContext($context, "flash"))), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 17
        echo "



  ";
        // line 21
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 22
            echo "<table class=\"table table-bordered table-striped table-hover\">
      <div class=\"well\">
        <h5><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "html", null, true);
            echo "\">Modifier nom d'utilisateur et Email</a></h5>
        
        <div>
            ";
            // line 27
            $this->displayBlock('edit_user', $context, $blocks);
            // line 29
            echo "        </div>
    
      </div>


      <div class=\"well\">
         <h5><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_change_password"), "html", null, true);
            echo "\">Modifier mot de passe</a></h5>
        
        <div>
            ";
            // line 38
            $this->displayBlock('edit_password', $context, $blocks);
            // line 40
            echo "        </div>
    
      </div>

    </table> 
 
";
        } else {
            // line 47
            echo "
 ";
            // line 48
            $this->displayBlock('fos_user_content', $context, $blocks);
            // line 50
            echo "
 ";
        }
        // line 52
        echo "
";
    }

    // line 27
    public function block_edit_user($context, array $blocks = array())
    {
        // line 28
        echo "            ";
    }

    // line 38
    public function block_edit_password($context, array $blocks = array())
    {
        // line 39
        echo "            ";
    }

    // line 48
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 49
        echo " ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::profilelayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 49,  151 => 48,  147 => 39,  144 => 38,  140 => 28,  137 => 27,  132 => 52,  128 => 50,  126 => 48,  123 => 47,  114 => 40,  112 => 38,  106 => 35,  98 => 29,  96 => 27,  90 => 24,  86 => 22,  84 => 21,  78 => 17,  69 => 14,  66 => 13,  55 => 9,  43 => 6,  37 => 3,  34 => 2,  81 => 22,  75 => 19,  67 => 14,  62 => 12,  58 => 10,  53 => 9,  49 => 7,  46 => 7,  40 => 5,  38 => 4,  35 => 3,  29 => 2,);
    }
}
