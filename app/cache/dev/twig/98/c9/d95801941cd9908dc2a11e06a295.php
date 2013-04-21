<?php

/* CineminoUserBundle:User:new.html.twig */
class __TwigTemplate_98c9d95801941cd9908dc2a11e06a295 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CineminoUserBundle::userlayout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'alert' => array($this, 'block_alert'),
            'formulaire' => array($this, 'block_formulaire'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CineminoUserBundle::userlayout.html.twig";
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
        echo "Ici vous pouvez créer un nouveau utilisateur.
";
    }

    // line 13
    public function block_formulaire($context, array $blocks = array())
    {
        // line 14
        echo "<body onLoad=\"scrolldown();\"> 

<div class=\"well\" style=\"width:400px\">
<div class=\"page-header\"><h3>Ajout nouveau utilisateur</h3></div>
 
<form action=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    <p>
        <button class=\"btn btn-primary\" type=\"submit\">Valider</button>
        <a class=\"btn\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user"), "html", null, true);
        echo "\"><i class=\"icon-ban-circle\"></i>Annuler</a>
    </p>
</form>

</div>
";
    }

    public function getTemplateName()
    {
        return "CineminoUserBundle:User:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  824 => 80,  819 => 76,  813 => 5,  803 => 747,  799 => 746,  795 => 745,  113 => 43,  23 => 3,  97 => 39,  129 => 49,  156 => 62,  377 => 188,  358 => 175,  350 => 173,  344 => 170,  330 => 165,  326 => 164,  322 => 163,  296 => 149,  292 => 148,  288 => 147,  278 => 140,  274 => 139,  270 => 138,  249 => 126,  242 => 122,  238 => 121,  192 => 99,  150 => 79,  137 => 27,  343 => 154,  339 => 153,  335 => 152,  329 => 149,  309 => 156,  305 => 155,  290 => 119,  286 => 118,  276 => 114,  272 => 113,  268 => 112,  262 => 109,  258 => 108,  254 => 107,  224 => 92,  220 => 109,  210 => 84,  206 => 104,  202 => 103,  185 => 71,  174 => 66,  166 => 87,  148 => 56,  124 => 43,  56 => 19,  53 => 9,  140 => 28,  134 => 46,  86 => 31,  77 => 29,  264 => 107,  259 => 103,  253 => 127,  245 => 101,  241 => 100,  237 => 99,  233 => 133,  229 => 132,  188 => 98,  158 => 52,  110 => 34,  87 => 30,  117 => 38,  112 => 38,  90 => 32,  69 => 14,  65 => 20,  49 => 14,  99 => 40,  82 => 27,  62 => 20,  40 => 5,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 205,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 187,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 174,  340 => 169,  336 => 168,  321 => 101,  313 => 157,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 117,  277 => 86,  267 => 85,  263 => 84,  257 => 128,  251 => 80,  246 => 78,  240 => 77,  234 => 120,  228 => 93,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 68,  181 => 70,  176 => 85,  170 => 65,  168 => 85,  146 => 53,  142 => 74,  128 => 50,  125 => 63,  107 => 39,  38 => 4,  144 => 38,  141 => 51,  135 => 48,  126 => 48,  109 => 41,  103 => 40,  67 => 14,  61 => 21,  47 => 9,  105 => 38,  93 => 31,  76 => 23,  72 => 24,  68 => 25,  27 => 4,  91 => 35,  84 => 21,  94 => 30,  88 => 31,  79 => 28,  59 => 19,  21 => 2,  44 => 15,  31 => 4,  28 => 3,  225 => 96,  216 => 108,  212 => 107,  205 => 84,  201 => 69,  196 => 104,  194 => 103,  191 => 71,  189 => 68,  186 => 76,  180 => 61,  172 => 90,  159 => 61,  154 => 53,  147 => 39,  132 => 52,  127 => 80,  121 => 39,  118 => 59,  114 => 40,  104 => 51,  100 => 59,  78 => 17,  75 => 19,  71 => 20,  58 => 11,  34 => 5,  26 => 2,  24 => 6,  25 => 3,  19 => 1,  70 => 23,  63 => 19,  46 => 13,  22 => 1,  163 => 75,  155 => 65,  152 => 53,  149 => 67,  145 => 48,  139 => 49,  131 => 47,  123 => 47,  120 => 76,  115 => 43,  106 => 35,  101 => 40,  96 => 33,  83 => 29,  80 => 30,  74 => 27,  66 => 21,  55 => 9,  52 => 12,  50 => 8,  43 => 6,  41 => 7,  37 => 3,  35 => 4,  32 => 3,  29 => 2,  184 => 97,  178 => 71,  171 => 57,  165 => 56,  162 => 85,  157 => 54,  153 => 61,  151 => 48,  143 => 72,  138 => 49,  136 => 54,  133 => 43,  130 => 44,  122 => 77,  119 => 39,  116 => 38,  111 => 55,  108 => 36,  102 => 33,  98 => 29,  95 => 38,  92 => 26,  89 => 25,  85 => 28,  81 => 22,  73 => 28,  64 => 21,  60 => 17,  57 => 14,  54 => 13,  51 => 13,  48 => 10,  45 => 9,  42 => 8,  39 => 7,  36 => 5,  33 => 4,  30 => 3,);
    }
}
