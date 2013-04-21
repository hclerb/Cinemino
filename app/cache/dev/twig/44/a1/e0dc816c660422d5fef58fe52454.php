<?php

/* CineminoSiteBundle:ProgrammeCourts:show.html.twig */
class __TwigTemplate_44a1e0dc816c660422d5fef58fe52454 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>ProgrammeCourts</h1>

<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Titrefilm</th>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titreFilm"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Realisateur</th>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "realisateur"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Duree</th>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "duree"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Anneeprod</th>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "anneeProd"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Classementartessai</th>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "classementArtEssai"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Provenance</th>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "provenance"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Interdiction</th>
            <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "interdiction"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Ageconseille</th>
            <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ageConseille"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Acteurs</th>
            <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "acteurs"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Synopsys</th>
            <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "synopsys"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Critique</th>
            <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "critique"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Affiche</th>
            <td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "affiche"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Couleurtexte</th>
            <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "couleurTexte"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Couleurfondfilm</th>
            <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "couleurFondFilm"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Type</th>
            <td>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("programmecourts"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("programmecourts_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("programmecourts_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
            <button type=\"submit\">Delete</button>
        </form>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "CineminoSiteBundle:ProgrammeCourts:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  97 => 47,  129 => 49,  156 => 62,  377 => 188,  358 => 175,  350 => 173,  344 => 170,  330 => 165,  326 => 164,  322 => 163,  296 => 149,  292 => 148,  288 => 147,  278 => 140,  274 => 139,  270 => 138,  249 => 126,  242 => 122,  238 => 121,  192 => 99,  150 => 79,  137 => 50,  343 => 154,  339 => 153,  335 => 152,  329 => 149,  309 => 156,  305 => 155,  290 => 119,  286 => 118,  276 => 114,  272 => 113,  268 => 112,  262 => 109,  258 => 108,  254 => 107,  224 => 92,  220 => 109,  210 => 84,  206 => 104,  202 => 103,  185 => 71,  174 => 66,  166 => 87,  148 => 64,  124 => 43,  56 => 14,  53 => 28,  140 => 56,  134 => 47,  86 => 28,  77 => 27,  264 => 107,  259 => 103,  253 => 127,  245 => 101,  241 => 100,  237 => 99,  233 => 133,  229 => 132,  188 => 98,  158 => 84,  110 => 36,  87 => 36,  117 => 43,  112 => 42,  90 => 43,  69 => 31,  65 => 16,  49 => 11,  99 => 39,  82 => 31,  62 => 27,  40 => 12,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 205,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 187,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 174,  340 => 169,  336 => 168,  321 => 101,  313 => 157,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 117,  277 => 86,  267 => 85,  263 => 84,  257 => 128,  251 => 80,  246 => 78,  240 => 77,  234 => 120,  228 => 93,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 102,  181 => 70,  176 => 85,  170 => 65,  168 => 85,  146 => 61,  142 => 74,  128 => 50,  125 => 63,  107 => 41,  38 => 8,  144 => 51,  141 => 51,  135 => 48,  126 => 48,  109 => 43,  103 => 40,  67 => 31,  61 => 21,  47 => 10,  105 => 38,  93 => 30,  76 => 35,  72 => 20,  68 => 25,  27 => 7,  91 => 37,  84 => 34,  94 => 32,  88 => 31,  79 => 34,  59 => 29,  21 => 2,  44 => 15,  31 => 3,  28 => 5,  225 => 96,  216 => 108,  212 => 107,  205 => 84,  201 => 107,  196 => 104,  194 => 103,  191 => 78,  189 => 72,  186 => 76,  180 => 86,  172 => 90,  159 => 61,  154 => 59,  147 => 61,  132 => 67,  127 => 46,  121 => 51,  118 => 59,  114 => 47,  104 => 51,  100 => 36,  78 => 27,  75 => 33,  71 => 32,  58 => 15,  34 => 11,  26 => 6,  24 => 3,  25 => 3,  19 => 1,  70 => 23,  63 => 30,  46 => 26,  22 => 1,  163 => 75,  155 => 65,  152 => 53,  149 => 67,  145 => 48,  139 => 75,  131 => 51,  123 => 41,  120 => 45,  115 => 43,  106 => 35,  101 => 37,  96 => 34,  83 => 39,  80 => 29,  74 => 27,  66 => 19,  55 => 23,  52 => 18,  50 => 27,  43 => 17,  41 => 15,  37 => 8,  35 => 4,  32 => 4,  29 => 4,  184 => 97,  178 => 71,  171 => 62,  165 => 58,  162 => 85,  157 => 60,  153 => 61,  151 => 53,  143 => 72,  138 => 49,  136 => 54,  133 => 43,  130 => 44,  122 => 47,  119 => 39,  116 => 39,  111 => 55,  108 => 36,  102 => 34,  98 => 33,  95 => 38,  92 => 31,  89 => 31,  85 => 30,  81 => 29,  73 => 21,  64 => 21,  60 => 16,  57 => 13,  54 => 17,  51 => 19,  48 => 19,  45 => 11,  42 => 7,  39 => 9,  36 => 5,  33 => 13,  30 => 2,);
    }
}
