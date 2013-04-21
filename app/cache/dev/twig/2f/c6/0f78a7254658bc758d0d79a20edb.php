<?php

/* CineminoSiteBundle:Film:edit.html.twig */
class __TwigTemplate_2fc60f78a7254658bc758d0d79a20edb extends Twig_Template
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
        echo "Ajouter ou modifier les films présent dans la base de données.
";
    }

    // line 9
    public function block_titre($context, array $blocks = array())
    {
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "

<div id=\"formulaire\" class=\"well\">
<form action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("film_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
 
        
";
        // line 18
        echo $this->env->getExtension('stfalcon_tinymce')->tinymce_init();
        echo "      
";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
 

    <h5> Titre du film </h5>
    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titreFilm"), 'errors');
        echo "
    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titreFilm"), 'widget', array("attr" => array("style" => "width:450px;")));
        echo "
  
 <div style=\"position:absolute;margin-left:750px;margin-top:-80px;\">
    
<h4>Affiche du film</h4>
  ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affiche"), 'label');
        echo "
  ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affiche"), 'errors');
        echo "
  ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "affiche"), 'widget');
        echo "
<br><br>

<img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("affiche/big/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "affiche"), "html", null, true);
        echo "\" width=\"350px\">

</div>
    
    <table>
   <tr>
<td>
    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "realisateur"), 'label');
        echo "
    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "realisateur"), 'errors');
        echo "
    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "realisateur"), 'widget');
        echo "
</td>
<td>
    ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "provenance"), 'label');
        echo "
    ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "provenance"), 'errors');
        echo "
    ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "provenance"), 'widget');
        echo "
</td>
<td>
    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anneeProd"), 'label');
        echo "
    ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anneeProd"), 'errors');
        echo "
    ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anneeProd"), 'widget');
        echo "
</td>

   </tr>
</table>
    

     <table>
   <tr>
       
<td>
    ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ageConseille"), 'label');
        echo "
    ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ageConseille"), 'errors');
        echo "
    ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ageConseille"), 'widget');
        echo "
</td>     
       
<td>    
    ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duree"), 'label');
        echo "
    ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duree"), 'errors');
        echo "
    ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duree"), 'widget');
        echo "
</td>  


   </tr>
</table>
     <table>
   <tr>
       
<td>
    ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "acteurs"), 'label');
        echo "
    ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "acteurs"), 'errors');
        echo "
    ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "acteurs"), 'widget', array("attr" => array("style" => "width:650px;")));
        echo "
</td>     
       
   </tr>
</table>
   
    
    ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "synopsys"), 'label');
        echo "
    ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "synopsys"), 'errors');
        echo "
    ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "synopsys"), 'widget');
        echo "
    
    
           <table>
               
 <td>
    ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classementArtEssai"), 'label');
        echo "
    ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classementArtEssai"), 'errors');
        echo "
    ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classementArtEssai"), 'widget');
        echo "
</td>              
               
   <tr>
       
<td>
    ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "couleurTexte"), 'label');
        echo "
    ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "couleurTexte"), 'errors');
        echo "
    ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "couleurTexte"), 'widget', array("attr" => array("class" => "color")));
        echo "
</td>  
<td>
    ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "couleurFondFilm"), 'label');
        echo "
    ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "couleurFondFilm"), 'errors');
        echo "
    ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "couleurFondFilm"), 'widget', array("attr" => array("class" => "color", "value" => "4164AA")));
        echo "
</td>  
<td>
    ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'label');
        echo "
    ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type"), 'errors');
        echo "
    ";
        // line 119
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
        // line 131
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idMedia"), 'errors');
        echo "
    ";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idMedia"), 'widget');
        echo "
       </td>

     
   </tr>
       
</table>
    <br>
   
 
     <a class=\"btn btn-info\" href=\"#add_media\" id=\"add_media\"><i class=\"icon-white icon-plus\"></i> Ajouter un média</a>
      
     <br><br><br>
        
        
    <p>
          <button class=\"btn btn-primary\" type=\"submit\">Enregistrer</button>
          <a class=\"btn\" href=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("film"), "html", null, true);
        echo "\"><i class=\"icon-ban-circle\"></i> Annuler</a>
    </p>
</form>
        <form action=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("film_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 153
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
            <button class=\"btn btn-danger\" type=\"submit\">Supprimer ";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titreFilm"), "html", null, true);
        echo "</button><i class=\"icon-remove icon-white\"></i>
        </form>
   


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

</div>
";
    }

    public function getTemplateName()
    {
        return "CineminoSiteBundle:Film:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 154,  339 => 153,  335 => 152,  329 => 149,  309 => 132,  305 => 131,  290 => 119,  286 => 118,  276 => 114,  272 => 113,  268 => 112,  262 => 109,  258 => 108,  254 => 107,  224 => 92,  220 => 91,  210 => 84,  206 => 83,  202 => 82,  185 => 71,  174 => 66,  166 => 64,  148 => 52,  124 => 43,  56 => 13,  53 => 12,  140 => 60,  134 => 47,  86 => 25,  77 => 30,  264 => 107,  259 => 103,  253 => 5,  245 => 101,  241 => 100,  237 => 99,  233 => 133,  229 => 132,  188 => 99,  158 => 81,  110 => 36,  87 => 46,  117 => 47,  112 => 42,  90 => 26,  69 => 24,  65 => 15,  49 => 12,  99 => 31,  82 => 24,  62 => 18,  40 => 6,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 117,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 93,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 70,  176 => 65,  170 => 65,  168 => 85,  146 => 58,  142 => 56,  128 => 44,  125 => 52,  107 => 44,  38 => 6,  144 => 51,  141 => 51,  135 => 47,  126 => 64,  109 => 43,  103 => 43,  67 => 15,  61 => 14,  47 => 9,  105 => 34,  93 => 32,  76 => 28,  72 => 19,  68 => 18,  27 => 4,  91 => 29,  84 => 28,  94 => 34,  88 => 31,  79 => 23,  59 => 14,  21 => 2,  44 => 15,  31 => 2,  28 => 5,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 107,  196 => 104,  194 => 103,  191 => 78,  189 => 72,  186 => 76,  180 => 72,  172 => 86,  159 => 61,  154 => 59,  147 => 73,  132 => 56,  127 => 46,  121 => 45,  118 => 40,  114 => 37,  104 => 33,  100 => 35,  78 => 27,  75 => 20,  71 => 23,  58 => 13,  34 => 3,  26 => 6,  24 => 3,  25 => 3,  19 => 1,  70 => 20,  63 => 24,  46 => 11,  22 => 1,  163 => 83,  155 => 65,  152 => 53,  149 => 62,  145 => 61,  139 => 71,  131 => 51,  123 => 41,  120 => 42,  115 => 39,  106 => 59,  101 => 32,  96 => 21,  83 => 24,  80 => 29,  74 => 23,  66 => 15,  55 => 12,  52 => 11,  50 => 10,  43 => 7,  41 => 8,  37 => 8,  35 => 3,  32 => 2,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 72,  138 => 48,  136 => 50,  133 => 43,  130 => 46,  122 => 63,  119 => 42,  116 => 41,  111 => 37,  108 => 36,  102 => 39,  98 => 31,  95 => 30,  92 => 35,  89 => 31,  85 => 31,  81 => 27,  73 => 20,  64 => 19,  60 => 15,  57 => 14,  54 => 13,  51 => 14,  48 => 10,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
