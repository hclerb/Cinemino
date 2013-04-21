<?php

/* CineminoSiteBundle:Sponsor:index.html.twig */
class __TwigTemplate_41f8105f7c15878efb9681517a845490 extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo " -  Accueil
";
    }

    // line 7
    public function block_alert($context, array $blocks = array())
    {
        echo "Gérez les sponsors";
    }

    // line 9
    public function block_titre($context, array $blocks = array())
    {
        echo "Liste des sponsor";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "
<table class=\"table table-bordered table-striped table-hover\" style=\"border-collapse: collapse;\">
    <thead>
        <tr>
            <th>Nom sponsor</th>
            <th>Logo</th>
            <th>Site web</th>
            <th>Actif</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 26
            echo "        <tr>
            <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sponsor_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomSponsor"), "html", null, true);
            echo "</a></td>
            <td><img class=\"img-polaroid\" style=\"height:75px;\" src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "logo"), "html", null, true);
            echo "\" alt=\"\"/></td>
            <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "siteWeb"), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "siteWeb"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 30
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "actif") == "o")) {
                echo "<div style=\"color:green\">Oui</div>";
            } else {
                echo "<div style=\"color:red\">Non</div>";
            }
            echo "</td>
            <td width=\"160px\">
                
          <a class=\"btn\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sponsor_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><i class=\"icon icon-search\"></i> Info</a>
          <a class=\"btn btn-info\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sponsor_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "#formulaire\"><i class=\"icon-white icon-pencil\"></i> Editer</a>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 38
        echo "    </tbody>
</table>

<td><a class=\"btn btn-info\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sponsor_new"), "html", null, true);
        echo "#formulaire\"><i class=\"icon-white icon-plus\"></i> Ajouter un Sponsor</a></td>


";
    }

    public function getTemplateName()
    {
        return "CineminoSiteBundle:Sponsor:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 43,  23 => 3,  97 => 39,  129 => 49,  156 => 62,  377 => 188,  358 => 175,  350 => 173,  344 => 170,  330 => 165,  326 => 164,  322 => 163,  296 => 149,  292 => 148,  288 => 147,  278 => 140,  274 => 139,  270 => 138,  249 => 126,  242 => 122,  238 => 121,  192 => 99,  150 => 79,  137 => 50,  343 => 154,  339 => 153,  335 => 152,  329 => 149,  309 => 156,  305 => 155,  290 => 119,  286 => 118,  276 => 114,  272 => 113,  268 => 112,  262 => 109,  258 => 108,  254 => 107,  224 => 92,  220 => 109,  210 => 84,  206 => 104,  202 => 103,  185 => 71,  174 => 66,  166 => 87,  148 => 64,  124 => 43,  56 => 14,  53 => 28,  140 => 56,  134 => 47,  86 => 29,  77 => 24,  264 => 107,  259 => 103,  253 => 127,  245 => 101,  241 => 100,  237 => 99,  233 => 133,  229 => 132,  188 => 98,  158 => 52,  110 => 36,  87 => 36,  117 => 44,  112 => 42,  90 => 29,  69 => 25,  65 => 16,  49 => 11,  99 => 39,  82 => 28,  62 => 16,  40 => 7,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 205,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 187,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 174,  340 => 169,  336 => 168,  321 => 101,  313 => 157,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 117,  277 => 86,  267 => 85,  263 => 84,  257 => 128,  251 => 80,  246 => 78,  240 => 77,  234 => 120,  228 => 93,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 68,  181 => 70,  176 => 85,  170 => 65,  168 => 85,  146 => 61,  142 => 74,  128 => 50,  125 => 63,  107 => 39,  38 => 7,  144 => 51,  141 => 51,  135 => 48,  126 => 48,  109 => 41,  103 => 40,  67 => 18,  61 => 21,  47 => 10,  105 => 38,  93 => 31,  76 => 27,  72 => 20,  68 => 25,  27 => 7,  91 => 37,  84 => 34,  94 => 30,  88 => 31,  79 => 34,  59 => 17,  21 => 2,  44 => 15,  31 => 3,  28 => 3,  225 => 96,  216 => 108,  212 => 107,  205 => 84,  201 => 69,  196 => 104,  194 => 103,  191 => 71,  189 => 68,  186 => 76,  180 => 61,  172 => 90,  159 => 61,  154 => 51,  147 => 49,  132 => 67,  127 => 46,  121 => 41,  118 => 59,  114 => 47,  104 => 51,  100 => 33,  78 => 26,  75 => 33,  71 => 20,  58 => 15,  34 => 4,  26 => 2,  24 => 3,  25 => 3,  19 => 1,  70 => 23,  63 => 18,  46 => 9,  22 => 1,  163 => 75,  155 => 65,  152 => 53,  149 => 67,  145 => 48,  139 => 48,  131 => 47,  123 => 45,  120 => 45,  115 => 43,  106 => 34,  101 => 40,  96 => 35,  83 => 27,  80 => 29,  74 => 27,  66 => 19,  55 => 13,  52 => 12,  50 => 27,  43 => 17,  41 => 7,  37 => 8,  35 => 4,  32 => 3,  29 => 3,  184 => 97,  178 => 71,  171 => 57,  165 => 56,  162 => 85,  157 => 60,  153 => 61,  151 => 53,  143 => 72,  138 => 49,  136 => 54,  133 => 43,  130 => 44,  122 => 47,  119 => 39,  116 => 38,  111 => 55,  108 => 36,  102 => 33,  98 => 33,  95 => 38,  92 => 30,  89 => 31,  85 => 28,  81 => 29,  73 => 26,  64 => 21,  60 => 17,  57 => 16,  54 => 17,  51 => 13,  48 => 11,  45 => 10,  42 => 11,  39 => 7,  36 => 6,  33 => 4,  30 => 3,);
    }
}
