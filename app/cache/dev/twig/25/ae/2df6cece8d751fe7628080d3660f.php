<?php

/* CineminoSiteBundle:Media:show.html.twig */
class __TwigTemplate_25ae2df6cece8d751fe7628080d3660f extends Twig_Template
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
        echo "Gérez les médias liés au films. Un média peut etre lié a plusieurs films.<br>
";
    }

    // line 10
    public function block_titre($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "
<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Titre: </th>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Url: </th>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "url"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Type: </th>
            <td>";
        // line 27
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type") == "p")) {
            echo "Photo";
        } else {
            echo "Video";
        }
        echo "</td>
        </tr>
    </tbody>
</table>
";
        // line 31
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type") == "p")) {
            // line 32
            echo "<br><img class=\"img-polaroid\" width=\"450\" src=\"http://localhost/cinemino_symfony2/web/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "url"), "html", null, true);
            echo "\" alt=\"\"/>
";
        }
        // line 34
        echo "
<br><br>

      <a class=\"btn\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("media"), "html", null, true);
        echo "\"><i class=\"icon-arrow-left\"></i> Revenir a la liste</a>
      <a class=\"btn\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("media_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"><i class=\"icon-pencil\"></i> Editer</a>


";
    }

    public function getTemplateName()
    {
        return "CineminoSiteBundle:Media:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 31,  129 => 49,  156 => 62,  377 => 188,  358 => 175,  350 => 173,  344 => 170,  330 => 165,  326 => 164,  322 => 163,  296 => 149,  292 => 148,  288 => 147,  278 => 140,  274 => 139,  270 => 138,  249 => 126,  242 => 122,  238 => 121,  192 => 99,  150 => 80,  137 => 50,  343 => 154,  339 => 153,  335 => 152,  329 => 149,  309 => 156,  305 => 155,  290 => 119,  286 => 118,  276 => 114,  272 => 113,  268 => 112,  262 => 109,  258 => 108,  254 => 107,  224 => 92,  220 => 109,  210 => 84,  206 => 104,  202 => 103,  185 => 71,  174 => 66,  166 => 87,  148 => 64,  124 => 43,  56 => 14,  53 => 13,  140 => 60,  134 => 47,  86 => 28,  77 => 27,  264 => 107,  259 => 103,  253 => 127,  245 => 101,  241 => 100,  237 => 99,  233 => 133,  229 => 132,  188 => 98,  158 => 85,  110 => 36,  87 => 30,  117 => 43,  112 => 42,  90 => 32,  69 => 21,  65 => 16,  49 => 11,  99 => 31,  82 => 31,  62 => 17,  40 => 7,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 205,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 187,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 174,  340 => 169,  336 => 168,  321 => 101,  313 => 157,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 117,  277 => 86,  267 => 85,  263 => 84,  257 => 128,  251 => 80,  246 => 78,  240 => 77,  234 => 120,  228 => 93,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 102,  181 => 70,  176 => 85,  170 => 65,  168 => 85,  146 => 61,  142 => 63,  128 => 51,  125 => 52,  107 => 43,  38 => 8,  144 => 51,  141 => 51,  135 => 48,  126 => 48,  109 => 43,  103 => 34,  67 => 15,  61 => 21,  47 => 10,  105 => 38,  93 => 30,  76 => 28,  72 => 20,  68 => 25,  27 => 4,  91 => 29,  84 => 34,  94 => 32,  88 => 31,  79 => 24,  59 => 15,  21 => 2,  44 => 15,  31 => 3,  28 => 5,  225 => 96,  216 => 108,  212 => 107,  205 => 84,  201 => 107,  196 => 104,  194 => 103,  191 => 78,  189 => 72,  186 => 76,  180 => 86,  172 => 90,  159 => 61,  154 => 59,  147 => 73,  132 => 56,  127 => 46,  121 => 51,  118 => 40,  114 => 47,  104 => 37,  100 => 36,  78 => 27,  75 => 29,  71 => 23,  58 => 15,  34 => 4,  26 => 6,  24 => 3,  25 => 3,  19 => 1,  70 => 23,  63 => 19,  46 => 11,  22 => 1,  163 => 75,  155 => 65,  152 => 53,  149 => 67,  145 => 48,  139 => 75,  131 => 51,  123 => 41,  120 => 45,  115 => 42,  106 => 35,  101 => 37,  96 => 34,  83 => 29,  80 => 29,  74 => 27,  66 => 19,  55 => 14,  52 => 11,  50 => 13,  43 => 17,  41 => 9,  37 => 8,  35 => 4,  32 => 4,  29 => 3,  184 => 97,  178 => 71,  171 => 62,  165 => 58,  162 => 86,  157 => 60,  153 => 61,  151 => 53,  143 => 72,  138 => 49,  136 => 54,  133 => 43,  130 => 44,  122 => 43,  119 => 39,  116 => 39,  111 => 40,  108 => 36,  102 => 34,  98 => 33,  95 => 30,  92 => 31,  89 => 31,  85 => 30,  81 => 29,  73 => 21,  64 => 21,  60 => 16,  57 => 13,  54 => 17,  51 => 19,  48 => 9,  45 => 11,  42 => 7,  39 => 9,  36 => 5,  33 => 13,  30 => 2,);
    }
}
