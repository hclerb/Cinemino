<?php

/* CineminoSiteBundle::filmlayout.html.twig */
class __TwigTemplate_0f83bf3bdd306d9569ce08d97195fa54 extends Twig_Template
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
        echo "Ajouter ou modifier vos films ( Vous ne pouvez modifier que les films que vous avez vous même ajouté , mais tous les films sont<br>
accessibles lorsque vous créez une séance.
";
    }

    // line 10
    public function block_titre($context, array $blocks = array())
    {
        echo "Liste des films";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "

<table class=\"table table-bordered table-striped table-hover\">
    <thead>
        <tr>
            <th>Titre du film</th>
            <th>Realisateur</th>
            <th>Durée</th>
            <th>Affiche</th>
            <th>Type</th>
            <th>Associer un film</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 30
            echo "        <tr>
            <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("film_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titreFilm"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "realisateur"), "html", null, true);
            echo "</td>
            <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "duree"), "H:i:s"), "html", null, true);
            echo "</td>
            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "affiche"), "html", null, true);
            echo "</td>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type"), "html", null, true);
            echo "</td>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</td>
            <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("film_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("film_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 49
        echo "    </tbody>
</table>

<ul>
    <li>
        <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("film_new"), "html", null, true);
        echo "\">
            Create a new entry
        </a>
    </li>
</ul>


";
        // line 61
        $this->displayBlock('formulaire', $context, $blocks);
        // line 64
        echo "
";
    }

    // line 61
    public function block_formulaire($context, array $blocks = array())
    {
        // line 62
        echo "
";
    }

    public function getTemplateName()
    {
        return "CineminoSiteBundle::filmlayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 49,  156 => 62,  377 => 188,  358 => 175,  350 => 173,  344 => 170,  330 => 165,  326 => 164,  322 => 163,  296 => 149,  292 => 148,  288 => 147,  278 => 140,  274 => 139,  270 => 138,  249 => 126,  242 => 122,  238 => 121,  192 => 99,  150 => 80,  137 => 50,  343 => 154,  339 => 153,  335 => 152,  329 => 149,  309 => 156,  305 => 155,  290 => 119,  286 => 118,  276 => 114,  272 => 113,  268 => 112,  262 => 109,  258 => 108,  254 => 107,  224 => 92,  220 => 109,  210 => 84,  206 => 104,  202 => 103,  185 => 71,  174 => 66,  166 => 87,  148 => 64,  124 => 43,  56 => 15,  53 => 12,  140 => 60,  134 => 47,  86 => 31,  77 => 28,  264 => 107,  259 => 103,  253 => 127,  245 => 101,  241 => 100,  237 => 99,  233 => 133,  229 => 132,  188 => 98,  158 => 85,  110 => 36,  87 => 46,  117 => 43,  112 => 42,  90 => 31,  69 => 22,  65 => 19,  49 => 10,  99 => 31,  82 => 31,  62 => 18,  40 => 6,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 205,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 187,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 174,  340 => 169,  336 => 168,  321 => 101,  313 => 157,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 117,  277 => 86,  267 => 85,  263 => 84,  257 => 128,  251 => 80,  246 => 78,  240 => 77,  234 => 120,  228 => 93,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 102,  181 => 70,  176 => 85,  170 => 65,  168 => 85,  146 => 61,  142 => 63,  128 => 55,  125 => 52,  107 => 43,  38 => 14,  144 => 51,  141 => 51,  135 => 59,  126 => 64,  109 => 43,  103 => 43,  67 => 15,  61 => 14,  47 => 9,  105 => 35,  93 => 35,  76 => 28,  72 => 23,  68 => 18,  27 => 4,  91 => 29,  84 => 34,  94 => 32,  88 => 32,  79 => 30,  59 => 21,  21 => 2,  44 => 15,  31 => 2,  28 => 5,  225 => 96,  216 => 108,  212 => 107,  205 => 84,  201 => 107,  196 => 104,  194 => 103,  191 => 78,  189 => 72,  186 => 76,  180 => 86,  172 => 90,  159 => 61,  154 => 59,  147 => 73,  132 => 56,  127 => 46,  121 => 51,  118 => 40,  114 => 47,  104 => 36,  100 => 35,  78 => 27,  75 => 29,  71 => 23,  58 => 14,  34 => 3,  26 => 6,  24 => 3,  25 => 3,  19 => 1,  70 => 20,  63 => 24,  46 => 11,  22 => 1,  163 => 75,  155 => 65,  152 => 53,  149 => 67,  145 => 48,  139 => 75,  131 => 51,  123 => 41,  120 => 42,  115 => 38,  106 => 59,  101 => 32,  96 => 34,  83 => 24,  80 => 29,  74 => 23,  66 => 15,  55 => 13,  52 => 11,  50 => 11,  43 => 17,  41 => 6,  37 => 8,  35 => 3,  32 => 2,  29 => 3,  184 => 97,  178 => 71,  171 => 62,  165 => 58,  162 => 86,  157 => 60,  153 => 61,  151 => 53,  143 => 72,  138 => 48,  136 => 54,  133 => 43,  130 => 44,  122 => 63,  119 => 39,  116 => 41,  111 => 40,  108 => 36,  102 => 39,  98 => 33,  95 => 30,  92 => 33,  89 => 31,  85 => 31,  81 => 29,  73 => 20,  64 => 23,  60 => 16,  57 => 13,  54 => 12,  51 => 19,  48 => 9,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 13,  30 => 2,);
    }
}
