<?php

/* CineminoSiteBundle:Evenement:edit.html.twig */
class __TwigTemplate_62c1aede678dc00cc4732952560bf31d extends Twig_Template
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
        echo "Gérer les évènements lié aux séances.
";
    }

    // line 9
    public function block_titre($context, array $blocks = array())
    {
        echo "Modification : ";
        echo twig_escape_filter($this->env, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "html", null, true);
        echo " ";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "<div class=\"well\" style=\"width:800px\">
<form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evenement_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
 
        <br><br>
        
      <button class=\"btn btn-primary\" type=\"submit\">Editer</button>
      <a class=\"btn\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evenement"), "html", null, true);
        echo "\"><i class=\"icon-ban-circle\"></i> Annuler</a>

</form>

        <form action=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evenement_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
          <button class=\"btn btn-danger\" type=\"submit\">Supprimer ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "html", null, true);
        echo "</button><i class=\"icon-remove icon-white\"></i>
        </form>
</div>


";
    }

    public function getTemplateName()
    {
        return "CineminoSiteBundle:Evenement:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 60,  134 => 47,  86 => 25,  77 => 30,  264 => 107,  259 => 103,  253 => 5,  245 => 136,  241 => 135,  237 => 134,  233 => 133,  229 => 132,  188 => 99,  158 => 81,  110 => 60,  87 => 46,  117 => 47,  112 => 42,  90 => 26,  69 => 24,  65 => 23,  49 => 12,  99 => 47,  82 => 24,  62 => 18,  40 => 6,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 85,  146 => 58,  142 => 56,  128 => 44,  125 => 52,  107 => 36,  38 => 6,  144 => 53,  141 => 51,  135 => 47,  126 => 64,  109 => 43,  103 => 37,  67 => 15,  61 => 14,  47 => 9,  105 => 24,  93 => 42,  76 => 16,  72 => 14,  68 => 19,  27 => 4,  91 => 20,  84 => 28,  94 => 34,  88 => 31,  79 => 17,  59 => 22,  21 => 2,  44 => 15,  31 => 2,  28 => 5,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 107,  196 => 104,  194 => 103,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 86,  159 => 61,  154 => 59,  147 => 73,  132 => 56,  127 => 46,  121 => 45,  118 => 40,  114 => 39,  104 => 33,  100 => 35,  78 => 21,  75 => 20,  71 => 19,  58 => 13,  34 => 3,  26 => 6,  24 => 3,  25 => 3,  19 => 1,  70 => 20,  63 => 24,  46 => 11,  22 => 1,  163 => 83,  155 => 65,  152 => 49,  149 => 62,  145 => 61,  139 => 71,  131 => 51,  123 => 41,  120 => 40,  115 => 39,  106 => 59,  101 => 32,  96 => 21,  83 => 36,  80 => 31,  74 => 23,  66 => 15,  55 => 12,  52 => 17,  50 => 10,  43 => 7,  41 => 8,  37 => 8,  35 => 3,  32 => 2,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 72,  138 => 59,  136 => 50,  133 => 43,  130 => 65,  122 => 63,  119 => 42,  116 => 35,  111 => 37,  108 => 36,  102 => 39,  98 => 31,  95 => 35,  92 => 33,  89 => 47,  85 => 25,  81 => 27,  73 => 29,  64 => 16,  60 => 15,  57 => 14,  54 => 13,  51 => 14,  48 => 10,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
