<?php

/* CineminoSiteBundle:Sponsor:edit.html.twig */
class __TwigTemplate_f5af1c1be7ca1e7e1a658fdd9326cf5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CineminoSiteBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'alert' => array($this, 'block_alert'),
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

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "

<div style=\"position:absolute;left:550px;bottom:85px;\"><h4>Logo : </h4><img class=\"img-polaroid\" width=\"350px\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "logo"), "html", null, true);
        echo "\" alt=\"\"/></div>

<div id=\"formulaire\" class=\"well\" style=\"width:800px;\">
    
<div class=\"page-header\"><h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomSponsor"), "html", null, true);
        echo "</h3></div> 
<form action=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sponsor_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "#formulaire\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
    
        <br>
            <button type=\"submit\" class=\"btn btn-primary\">Sauvegarder</button>
            <a class=\"btn\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sponsor"), "html", null, true);
        echo "\"><i class=\"icon-ban-circle\"></i> Annuler</a>
    
</form>

    ";
        // line 27
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 28
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sponsor_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" method=\"post\">
            ";
            // line 29
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
            echo "
            <button class=\"btn btn-danger\" type=\"submit\"><i class=\"icon-remove icon-white\"></i> Supprimer ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomSponsor"), "html", null, true);
            echo "</button>
        </form>
    ";
        }
        // line 33
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "CineminoSiteBundle:Sponsor:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 43,  23 => 3,  97 => 39,  129 => 49,  156 => 62,  377 => 188,  358 => 175,  350 => 173,  344 => 170,  330 => 165,  326 => 164,  322 => 163,  296 => 149,  292 => 148,  288 => 147,  278 => 140,  274 => 139,  270 => 138,  249 => 126,  242 => 122,  238 => 121,  192 => 99,  150 => 79,  137 => 50,  343 => 154,  339 => 153,  335 => 152,  329 => 149,  309 => 156,  305 => 155,  290 => 119,  286 => 118,  276 => 114,  272 => 113,  268 => 112,  262 => 109,  258 => 108,  254 => 107,  224 => 92,  220 => 109,  210 => 84,  206 => 104,  202 => 103,  185 => 71,  174 => 66,  166 => 87,  148 => 64,  124 => 43,  56 => 14,  53 => 28,  140 => 56,  134 => 47,  86 => 28,  77 => 24,  264 => 107,  259 => 103,  253 => 127,  245 => 101,  241 => 100,  237 => 99,  233 => 133,  229 => 132,  188 => 98,  158 => 52,  110 => 36,  87 => 36,  117 => 44,  112 => 42,  90 => 29,  69 => 19,  65 => 16,  49 => 11,  99 => 39,  82 => 27,  62 => 16,  40 => 12,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 205,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 187,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 174,  340 => 169,  336 => 168,  321 => 101,  313 => 157,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 117,  277 => 86,  267 => 85,  263 => 84,  257 => 128,  251 => 80,  246 => 78,  240 => 77,  234 => 120,  228 => 93,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 68,  181 => 70,  176 => 85,  170 => 65,  168 => 85,  146 => 61,  142 => 74,  128 => 50,  125 => 63,  107 => 39,  38 => 7,  144 => 51,  141 => 51,  135 => 48,  126 => 48,  109 => 41,  103 => 40,  67 => 18,  61 => 21,  47 => 10,  105 => 38,  93 => 31,  76 => 23,  72 => 20,  68 => 25,  27 => 7,  91 => 37,  84 => 34,  94 => 30,  88 => 31,  79 => 34,  59 => 17,  21 => 2,  44 => 15,  31 => 3,  28 => 3,  225 => 96,  216 => 108,  212 => 107,  205 => 84,  201 => 69,  196 => 104,  194 => 103,  191 => 71,  189 => 68,  186 => 76,  180 => 61,  172 => 90,  159 => 61,  154 => 51,  147 => 49,  132 => 67,  127 => 46,  121 => 51,  118 => 59,  114 => 47,  104 => 51,  100 => 33,  78 => 26,  75 => 33,  71 => 20,  58 => 15,  34 => 11,  26 => 2,  24 => 3,  25 => 3,  19 => 1,  70 => 23,  63 => 18,  46 => 26,  22 => 1,  163 => 75,  155 => 65,  152 => 53,  149 => 67,  145 => 48,  139 => 48,  131 => 47,  123 => 45,  120 => 45,  115 => 43,  106 => 35,  101 => 40,  96 => 35,  83 => 27,  80 => 29,  74 => 27,  66 => 19,  55 => 14,  52 => 13,  50 => 27,  43 => 17,  41 => 7,  37 => 8,  35 => 4,  32 => 3,  29 => 3,  184 => 97,  178 => 71,  171 => 57,  165 => 56,  162 => 85,  157 => 60,  153 => 61,  151 => 53,  143 => 72,  138 => 49,  136 => 54,  133 => 43,  130 => 44,  122 => 47,  119 => 39,  116 => 39,  111 => 55,  108 => 36,  102 => 34,  98 => 33,  95 => 38,  92 => 31,  89 => 31,  85 => 28,  81 => 29,  73 => 23,  64 => 21,  60 => 17,  57 => 16,  54 => 17,  51 => 13,  48 => 11,  45 => 10,  42 => 11,  39 => 7,  36 => 6,  33 => 4,  30 => 3,);
    }
}
