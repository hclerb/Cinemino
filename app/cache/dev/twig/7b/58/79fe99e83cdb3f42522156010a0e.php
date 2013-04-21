<?php

/* ::layout.html.twig */
class __TwigTemplate_7b5879fe99e83cdb3f42522156010a0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'info' => array($this, 'block_info'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Shades of gunmetal gray.\">
    <meta name=\"author\" content=\"Thomas Park\">

    <!--[if lt IE 9]>
      <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/css/datepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/css/bootswatch.css\" rel=\"stylesheet"), "html", null, true);
        echo "\">
    
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/js/jscolor/jscolor.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    
<script type=\"text/javascript\">
function scrolldown() {
 var h=0;
     
 if (window.innerHeight) h = window.innerHeight;
 else if (document.body && document.body.offsetHeight) h = window.document.body.offsetHeight;
 else if (document.documentElement && document.documentElement.clientHeight) h = document.documentElement.clientHeight;
     
this.scroll(1,h);
}       

</script> 

  </head>

  <body class=\"preview\" data-spy=\"scroll\" data-target=\".subnav\" data-offset=\"80\">


<!-- Navbar
================================================== -->
<section id=\"navbar\">
 <div class=\"row\">
  <div class=\"page-header\">
    <div class=\"offset1 span5\">
        <h1>Backoffice Cinémino</h1>
    </div>
   ";
        // line 48
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 49
            echo "    <div class=\"span6\">
        <br/>
       <div class=\"alert alert-info\">
        <strong>Bonjour </strong> ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo " ! <strong> Votre dernière connexion date du </strong> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "lastlogin"), "d/m/Y"), "html", null, true);
            echo "  
       </div>
    </div>
   ";
        }
        // line 56
        echo "  </div>
</div>
";
        // line 58
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 59
            echo "  <div class=\"navbar navbar-inverse\">
    <div class=\"navbar-inner\">
      <div class=\"container\" style=\"width: auto;\">
        <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </a>
        <a class=\"brand\" href=\"#\">Panel Admin</a>
        <div class=\"nav-collapse\">
          <ul class=\"nav\">
            <li class=\"active\"><a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cineminoSite_back"), "html", null, true);
            echo "\">Accueil</a></li>
            <li id=\"test\"><a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("seance"), "html", null, true);
            echo "\">Ajouter / Modifier une séance</a></li>
            <li><a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("film"), "html", null, true);
            echo "\">Films</a></li>
            <li><a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("programmecourts"), "html", null, true);
            echo "\">Programme de Courts</a></li>
            <li><a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evenement"), "html", null, true);
            echo "\">Evènements</a></li>
            <li><a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intervenant"), "html", null, true);
            echo "\">Gérer les intervenants</a></li>
            <li><a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cinema"), "html", null, true);
            echo "\">Gérer les cinémas</a></li>
            <li><a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user"), "html", null, true);
            echo "\">Administration des utilisateurs</a></li>
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> Autres <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"#\">Cinémino</a></li>
                <li class=\"divider\"></li>
                <li><a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("media"), "html", null, true);
            echo "\">Média</a></li>
                <li><a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sponsor"), "html", null, true);
            echo "\">Sponsor</a></li>
                <li><a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\">Documents</a></li>
              </ul>
            </li>
          </ul>
          <ul class=\"nav pull-right\">
            <li><a href=\"#\">Accéder au site</a></li>
            <li class=\"divider-vertical\"></li>
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> ";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo " <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_show"), "html", null, true);
            echo "\">Modifier Profil</a></li>
                <li class=\"divider\"></li>
                <li>   <a href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\">
                    ";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Déconnexion", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
                </li>
              </ul>
            </li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->

</section>
";
        }
        // line 111
        echo "    <div class=\"container\">

<section id =\"information\">
    
   ";
        // line 115
        $this->displayBlock('info', $context, $blocks);
        // line 116
        echo "    

   
";
        // line 119
        $this->displayBlock('javascripts', $context, $blocks);
        echo "    
    
</section>
   
     <!-- Footer
      ================================================== -->
      <hr>

      <footer id=\"footer\">
        <p class=\"pull-right\"><a href=\"#\">Revenir en haut</a></p>
        <div class=\"links\">
          <a href=\"#\">BackOffice</a>
          <a href=\"#\">Cinemino</a>
        </div>
        Basé sur <a target=\"_blank\" href=\"http://twitter.github.com/bootstrap/\">Bootstrap</a> Icons de <a target=\"_blank\" href=\"http://glyphicons.com/\">Glyphicons</a><br>Web fonts de <a target=\"_blank\" href=\"http://www.google.com/webfonts\">Google</a>.</p>
      </footer>

    </div><!-- /container -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!--<script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/js/application.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/js/bootswatch.js"), "html", null, true);
        echo "\"></script>-->
    <script src=";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/js/bootstrap-datepicker.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/js/bootstrap-datepicker.fr.js"), "html", null, true);
        echo "></script>
 </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Cinémino: Panel Admin ";
    }

    // line 115
    public function block_info($context, array $blocks = array())
    {
    }

    // line 119
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 119,  281 => 115,  275 => 5,  267 => 148,  263 => 147,  259 => 146,  255 => 145,  251 => 144,  223 => 119,  218 => 116,  216 => 115,  210 => 111,  194 => 98,  190 => 97,  185 => 95,  180 => 93,  169 => 85,  165 => 84,  161 => 83,  152 => 77,  148 => 76,  144 => 75,  140 => 74,  136 => 73,  132 => 72,  128 => 71,  124 => 70,  111 => 59,  109 => 58,  105 => 56,  96 => 52,  91 => 49,  89 => 48,  58 => 20,  52 => 17,  48 => 16,  44 => 15,  40 => 14,  28 => 5,  22 => 1,);
    }
}
