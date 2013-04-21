<?php

/* CineminoSiteBundle:Film:index.html.twig */
class __TwigTemplate_5a3147bba347abc8ac324dea60529893 extends Twig_Template
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
            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idFilm"), "titreFilm"), "html", null, true);
            echo " Réalisé par ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idFilm"), "realisateur"), "html", null, true);
            echo "</td>
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
        return "CineminoSiteBundle:Film:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 50,  343 => 154,  339 => 153,  335 => 152,  329 => 149,  309 => 132,  305 => 131,  290 => 119,  286 => 118,  276 => 114,  272 => 113,  268 => 112,  262 => 109,  258 => 108,  254 => 107,  224 => 92,  220 => 91,  210 => 84,  206 => 83,  202 => 82,  185 => 71,  174 => 66,  166 => 64,  148 => 52,  124 => 43,  56 => 13,  53 => 12,  140 => 60,  134 => 47,  86 => 25,  77 => 28,  264 => 107,  259 => 103,  253 => 5,  245 => 101,  241 => 100,  237 => 99,  233 => 133,  229 => 132,  188 => 99,  158 => 81,  110 => 36,  87 => 46,  117 => 47,  112 => 42,  90 => 31,  69 => 24,  65 => 15,  49 => 12,  99 => 31,  82 => 24,  62 => 18,  40 => 6,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 117,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 93,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 70,  176 => 65,  170 => 65,  168 => 85,  146 => 58,  142 => 47,  128 => 44,  125 => 52,  107 => 44,  38 => 6,  144 => 51,  141 => 51,  135 => 47,  126 => 64,  109 => 43,  103 => 43,  67 => 15,  61 => 14,  47 => 9,  105 => 35,  93 => 32,  76 => 28,  72 => 19,  68 => 18,  27 => 4,  91 => 29,  84 => 30,  94 => 32,  88 => 31,  79 => 23,  59 => 14,  21 => 2,  44 => 15,  31 => 2,  28 => 5,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 107,  196 => 104,  194 => 103,  191 => 78,  189 => 72,  186 => 76,  180 => 72,  172 => 86,  159 => 61,  154 => 59,  147 => 73,  132 => 56,  127 => 46,  121 => 45,  118 => 40,  114 => 37,  104 => 33,  100 => 35,  78 => 27,  75 => 20,  71 => 23,  58 => 13,  34 => 3,  26 => 6,  24 => 3,  25 => 3,  19 => 1,  70 => 20,  63 => 24,  46 => 11,  22 => 1,  163 => 83,  155 => 65,  152 => 53,  149 => 62,  145 => 48,  139 => 71,  131 => 51,  123 => 41,  120 => 42,  115 => 38,  106 => 59,  101 => 32,  96 => 21,  83 => 24,  80 => 29,  74 => 23,  66 => 15,  55 => 12,  52 => 11,  50 => 10,  43 => 7,  41 => 6,  37 => 8,  35 => 3,  32 => 2,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 72,  138 => 48,  136 => 50,  133 => 43,  130 => 44,  122 => 63,  119 => 39,  116 => 41,  111 => 37,  108 => 36,  102 => 39,  98 => 33,  95 => 30,  92 => 35,  89 => 31,  85 => 31,  81 => 29,  73 => 20,  64 => 19,  60 => 14,  57 => 13,  54 => 12,  51 => 14,  48 => 9,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
