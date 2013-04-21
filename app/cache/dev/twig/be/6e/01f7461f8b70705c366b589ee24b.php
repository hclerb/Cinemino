<?php

/* CineminoSiteBundle:Cinema:new.html.twig */
class __TwigTemplate_be6e01f7461f8b70705c366b589ee24b extends Twig_Template
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
        echo "
";
    }

    // line 7
    public function block_alert($context, array $blocks = array())
    {
        echo "Ici vous pouvez gérer l'ensemble des cinémas dont vous avez la charge ( modification / visualisation ).<br> 
Seul l'Administrateur peut supprimer ou ajouter un cinéma.
";
    }

    // line 12
    public function block_titre($context, array $blocks = array())
    {
        echo "Ajouter un cinéma";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "

<form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cinema_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
  
        <br>
        
       <button class=\"btn btn-primary\" type=\"submit\">Valider la création</button>
       <a class=\"btn\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cinema"), "html", null, true);
        echo "\"><i class=\"icon-arrow-left\"></i> Revenir a la liste</a>
       
</form>



";
    }

    public function getTemplateName()
    {
        return "CineminoSiteBundle:Cinema:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 49,  134 => 47,  86 => 32,  77 => 30,  264 => 107,  259 => 103,  253 => 5,  245 => 136,  241 => 135,  237 => 134,  233 => 133,  229 => 132,  188 => 99,  158 => 81,  110 => 60,  87 => 46,  117 => 47,  112 => 42,  90 => 33,  69 => 24,  65 => 23,  49 => 12,  99 => 47,  82 => 27,  62 => 18,  40 => 7,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 85,  146 => 58,  142 => 56,  128 => 44,  125 => 44,  107 => 36,  38 => 6,  144 => 53,  141 => 51,  135 => 47,  126 => 64,  109 => 41,  103 => 37,  67 => 18,  61 => 17,  47 => 9,  105 => 24,  93 => 42,  76 => 16,  72 => 14,  68 => 19,  27 => 4,  91 => 20,  84 => 28,  94 => 34,  88 => 6,  79 => 17,  59 => 22,  21 => 2,  44 => 15,  31 => 3,  28 => 5,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 107,  196 => 104,  194 => 103,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 86,  159 => 61,  154 => 59,  147 => 73,  132 => 46,  127 => 46,  121 => 45,  118 => 40,  114 => 39,  104 => 33,  100 => 35,  78 => 21,  75 => 23,  71 => 19,  58 => 20,  34 => 4,  26 => 6,  24 => 3,  25 => 3,  19 => 1,  70 => 20,  63 => 24,  46 => 11,  22 => 1,  163 => 83,  155 => 58,  152 => 49,  149 => 48,  145 => 46,  139 => 71,  131 => 51,  123 => 41,  120 => 40,  115 => 39,  106 => 59,  101 => 32,  96 => 21,  83 => 36,  80 => 31,  74 => 16,  66 => 15,  55 => 15,  52 => 17,  50 => 10,  43 => 7,  41 => 8,  37 => 8,  35 => 3,  32 => 2,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 72,  138 => 51,  136 => 50,  133 => 43,  130 => 65,  122 => 63,  119 => 42,  116 => 35,  111 => 37,  108 => 36,  102 => 58,  98 => 31,  95 => 34,  92 => 33,  89 => 47,  85 => 25,  81 => 33,  73 => 29,  64 => 17,  60 => 23,  57 => 15,  54 => 14,  51 => 14,  48 => 12,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
