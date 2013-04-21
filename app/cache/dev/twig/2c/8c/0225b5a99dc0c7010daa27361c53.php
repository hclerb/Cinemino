<?php

/* CineminoSiteBundle:Film:new.html.twig */
class __TwigTemplate_2c8c0225b5a99dc0c7010daa27361c53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CineminoSiteBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        echo "filmlayout
";
        // line 3
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Film
";
    }

    // line 7
    public function block_titre($context, array $blocks = array())
    {
        echo "Ajouter un film";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "

<div class=\"well\" style=\"width:auto\">
<div class=\"page-header\"><h4>Rechercher un film via allocine</h4></div>
<form id=\"form_recherche\" action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("film_rechercher"), "html", null, true);
        echo "\" method=\"post\">
\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_recherche"]) ? $context["form_recherche"] : $this->getContext($context, "form_recherche")), 'widget');
        echo "
\t<input class=\"btn btn-navbar\" type=\"reset\" value=\"Effacer\" />  
</form>

<div class=\"loading\"></div>
<div id=\"resultats_recherche\"> 
    ";
        // line 22
        $this->env->loadTemplate("CineminoSiteBundle:Film:liste.html.twig")->display(array_merge($context, array("listFilm" => null)));
        // line 23
        echo "</div>

<script>
\$(\".loading\").hide();

\$(\"#form_recherche\").submit(function(){ 
    \$(\".loading\").show();
    var motcle = \$(\"#filmrecherche_motcle\").val();
    var DATA = 'motcle=' + motcle;
    \$.ajax({
        type: \"POST\",
        url: \"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("film_rechercher"), "html", null, true);
        echo "\",
        data: DATA,
        cache: false,
        success: function(data){
           \$('#resultats_recherche').html(data);
           \$(\".loading\").hide();
        }
    });    
    return false;
});


\$('#filmrecherche_motcle').keyup(function(event) {


    \$(\".loading\").show();
    var motcle = \$(\"#filmrecherche_motcle\").val();
    var DATA = 'motcle=' + motcle;
    \$.ajax({
        type: \"POST\",
        url: \"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("film_rechercher"), "html", null, true);
        echo "\",
        data: DATA,
        cache: false,
        success: function(data){
           \$('#resultats_recherche').html(data);
           \$(\".loading\").hide();
        }
    });    
    return false;

});


</script>

</div>
<div id=\"formulaire_film\" class=\"well\" style=\"width:auto\">
<div class=\"page-header\"><h4>Formulaire</h4></div>
<form action=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("film_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    
";
        // line 74
        echo $this->env->getExtension('stfalcon_tinymce')->tinymce_init();
        echo "      
";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
 

    <h5> Titre du film </h5>
    ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titreFilm"), 'errors');
        echo "
    ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titreFilm"), 'widget', array("attr" => array("style" => "width:450px;")));
        echo "
  
 <div style=\"position:absolute;margin-left:750px;margin-top:-80px;\">
    
<h4>Affiche du film</h4>
  ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affiche"), 'label');
        echo "
  ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affiche"), 'errors');
        echo "
  ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affiche"), 'widget', array("attr" => array("style" => "width:350px;")));
        echo "
<br><br>

<img src=\"";
        // line 90
        if (array_key_exists("affiche", $context)) {
            echo twig_escape_filter($this->env, (isset($context["affiche"]) ? $context["affiche"] : $this->getContext($context, "affiche")), "html", null, true);
        }
        echo "\" width=\"350px\">

</div>
    
    <table>
   <tr>
<td>
    ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "realisateur"), 'label');
        echo "
    ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "realisateur"), 'errors');
        echo "
    ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "realisateur"), 'widget');
        echo "
</td>
<td>
    ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "provenance"), 'label');
        echo "
    ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "provenance"), 'errors');
        echo "
    ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "provenance"), 'widget');
        echo "
</td>
<td>
    ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anneeProd"), 'label');
        echo "
    ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anneeProd"), 'errors');
        echo "
    ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anneeProd"), 'widget');
        echo "
</td>

   </tr>
</table>
    

     <table>
   <tr>
       
<td>
    ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ageConseille"), 'label');
        echo "
    ";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ageConseille"), 'errors');
        echo "
    ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ageConseille"), 'widget');
        echo "
</td>     
       
<td>    
    ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duree"), 'label');
        echo "
    ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duree"), 'errors');
        echo "
    ";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duree"), 'widget');
        echo "
</td>  


   </tr>
</table>
     <table>
   <tr>
       
<td>
    ";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "acteurs"), 'label');
        echo "
    ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "acteurs"), 'errors');
        echo "
    ";
        // line 140
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "acteurs"), 'widget', array("attr" => array("style" => "width:650px;")));
        echo "
</td>     
       
   </tr>
</table>
   
    
    ";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "synopsys"), 'label');
        echo "
    ";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "synopsys"), 'errors');
        echo "
    ";
        // line 149
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "synopsys"), 'widget');
        echo "
    
    
           <table>
               
 <td>
    ";
        // line 155
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classementArtEssai"), 'label');
        echo "
    ";
        // line 156
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classementArtEssai"), 'errors');
        echo "
    ";
        // line 157
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classementArtEssai"), 'widget');
        echo "
</td>              
               
   <tr>
       
<td>
    ";
        // line 163
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "couleurTexte"), 'label');
        echo "
    ";
        // line 164
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "couleurTexte"), 'errors');
        echo "
    ";
        // line 165
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "couleurTexte"), 'widget', array("attr" => array("class" => "color")));
        echo "
</td>  
<td>
    ";
        // line 168
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "couleurFondFilm"), 'label');
        echo "
    ";
        // line 169
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "couleurFondFilm"), 'errors');
        echo "
    ";
        // line 170
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "couleurFondFilm"), 'widget', array("attr" => array("class" => "color", "value" => "4164AA")));
        echo "
</td>  
<td>
    ";
        // line 173
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'label');
        echo "
    ";
        // line 174
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'errors');
        echo "
    ";
        // line 175
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'widget');
        echo "
</td>  
       
   </tr>
   <br>
</table>
    
<table>
   <tr>
       
       <td>

    ";
        // line 187
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idMedia"), 'errors');
        echo "
    ";
        // line 188
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idMedia"), 'widget');
        echo "
       </td>

     
   </tr>
       
</table>
    <br>
   
 
     <a class=\"btn btn-info\" href=\"#add_media\" id=\"add_media\"><i class=\"icon-white icon-plus\"></i> Ajouter un média</a>
      <br><br>
      <button class=\"btn btn-primary\" type=\"submit\">Valider l'enregistrement du film</button>

    
</form>

 <a class=\"btn\" href=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("film"), "html", null, true);
        echo "\"><i class=\"icon-arrow-left\"></i> Revenir a la liste</a>

</div>



<!-- On charge la librairie jQuery. Ici, je la prends depuis le
site jquery.com, mais si vous l'avez en local, changez simplement
l'adresse. -->
<script src=\"http://code.jquery.com/jquery-1.6.2.min.js\"></script>
<script type=\"text/javascript\">
    \$(document).ready(function() {
    // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
    var \$container = \$('#cinemino_Sitebundle_filmtype_idMedia');
 
    // On définit une fonction qui va ajouter un champ.
    function add_media() {
        // On définit le numéro du champ (en comptant le nombre de champs déjà ajoutés).
        index = \$container.children().length;
        // On ajoute à la fin de la balise <div> le contenu de l'attribut « data-prototype »,
        // après avoir remplacé la variable \$\$name\$\$ qu'il contient par le numéro du champ.
        \$container.append(
            \$(\$container.attr('data-prototype').replace(/\\__name__label__/g, '<h5>Média n°'+(index+1)+'</h5>'))

        );
              
    }

    // On ajoute un premier champ directement s'il n'en existe pas déjà un.
 
 
    // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
    \$('#add_media').click(function() {
        
        add_media();
             
    });
});

</script>


";
    }

    public function getTemplateName()
    {
        return "CineminoSiteBundle:Film:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 188,  358 => 175,  350 => 173,  344 => 170,  330 => 165,  326 => 164,  322 => 163,  296 => 149,  292 => 148,  288 => 147,  278 => 140,  274 => 139,  270 => 138,  249 => 126,  242 => 122,  238 => 121,  192 => 99,  150 => 80,  137 => 50,  343 => 154,  339 => 153,  335 => 152,  329 => 149,  309 => 156,  305 => 155,  290 => 119,  286 => 118,  276 => 114,  272 => 113,  268 => 112,  262 => 109,  258 => 108,  254 => 107,  224 => 92,  220 => 109,  210 => 84,  206 => 104,  202 => 103,  185 => 71,  174 => 66,  166 => 87,  148 => 52,  124 => 43,  56 => 15,  53 => 12,  140 => 60,  134 => 47,  86 => 25,  77 => 28,  264 => 107,  259 => 103,  253 => 127,  245 => 101,  241 => 100,  237 => 99,  233 => 133,  229 => 132,  188 => 98,  158 => 85,  110 => 36,  87 => 46,  117 => 47,  112 => 42,  90 => 31,  69 => 22,  65 => 15,  49 => 12,  99 => 31,  82 => 24,  62 => 18,  40 => 6,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 205,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 187,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 174,  340 => 169,  336 => 168,  321 => 101,  313 => 157,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 117,  277 => 86,  267 => 85,  263 => 84,  257 => 128,  251 => 80,  246 => 78,  240 => 77,  234 => 120,  228 => 93,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 102,  181 => 70,  176 => 65,  170 => 65,  168 => 85,  146 => 79,  142 => 47,  128 => 72,  125 => 52,  107 => 54,  38 => 14,  144 => 51,  141 => 51,  135 => 74,  126 => 64,  109 => 43,  103 => 43,  67 => 15,  61 => 14,  47 => 10,  105 => 35,  93 => 32,  76 => 28,  72 => 19,  68 => 18,  27 => 4,  91 => 29,  84 => 34,  94 => 32,  88 => 34,  79 => 30,  59 => 21,  21 => 2,  44 => 15,  31 => 2,  28 => 5,  225 => 96,  216 => 108,  212 => 107,  205 => 84,  201 => 107,  196 => 104,  194 => 103,  191 => 78,  189 => 72,  186 => 76,  180 => 72,  172 => 90,  159 => 61,  154 => 59,  147 => 73,  132 => 56,  127 => 46,  121 => 45,  118 => 40,  114 => 37,  104 => 33,  100 => 35,  78 => 27,  75 => 20,  71 => 23,  58 => 13,  34 => 3,  26 => 6,  24 => 3,  25 => 3,  19 => 1,  70 => 20,  63 => 24,  46 => 11,  22 => 1,  163 => 83,  155 => 65,  152 => 53,  149 => 62,  145 => 48,  139 => 75,  131 => 51,  123 => 41,  120 => 42,  115 => 38,  106 => 59,  101 => 32,  96 => 21,  83 => 24,  80 => 29,  74 => 23,  66 => 15,  55 => 20,  52 => 11,  50 => 11,  43 => 17,  41 => 7,  37 => 8,  35 => 3,  32 => 2,  29 => 3,  184 => 97,  178 => 71,  171 => 62,  165 => 58,  162 => 86,  157 => 60,  153 => 54,  151 => 53,  143 => 72,  138 => 48,  136 => 50,  133 => 43,  130 => 44,  122 => 63,  119 => 39,  116 => 41,  111 => 37,  108 => 36,  102 => 39,  98 => 33,  95 => 30,  92 => 35,  89 => 31,  85 => 31,  81 => 29,  73 => 20,  64 => 23,  60 => 16,  57 => 13,  54 => 12,  51 => 19,  48 => 9,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 13,  30 => 2,);
    }
}
