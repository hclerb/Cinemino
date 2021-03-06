<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_8c45fea27454817ed496bab41dc0029e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->env->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  824 => 80,  819 => 76,  813 => 5,  803 => 747,  799 => 746,  795 => 745,  113 => 43,  23 => 3,  97 => 39,  129 => 49,  156 => 62,  377 => 188,  358 => 175,  350 => 173,  344 => 170,  330 => 165,  326 => 164,  322 => 163,  296 => 149,  292 => 148,  288 => 147,  278 => 140,  274 => 139,  270 => 138,  249 => 126,  242 => 122,  238 => 121,  192 => 99,  150 => 79,  137 => 27,  343 => 154,  339 => 153,  335 => 152,  329 => 149,  309 => 156,  305 => 155,  290 => 119,  286 => 118,  276 => 114,  272 => 113,  268 => 112,  262 => 109,  258 => 108,  254 => 107,  224 => 92,  220 => 109,  210 => 84,  206 => 104,  202 => 103,  185 => 71,  174 => 66,  166 => 87,  148 => 64,  124 => 43,  56 => 14,  53 => 13,  140 => 28,  134 => 47,  86 => 22,  77 => 27,  264 => 107,  259 => 103,  253 => 127,  245 => 101,  241 => 100,  237 => 99,  233 => 133,  229 => 132,  188 => 98,  158 => 52,  110 => 45,  87 => 27,  117 => 44,  112 => 38,  90 => 24,  69 => 14,  65 => 16,  49 => 7,  99 => 40,  82 => 27,  62 => 19,  40 => 11,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 205,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 187,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 174,  340 => 169,  336 => 168,  321 => 101,  313 => 157,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 117,  277 => 86,  267 => 85,  263 => 84,  257 => 128,  251 => 80,  246 => 78,  240 => 77,  234 => 120,  228 => 93,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 68,  181 => 70,  176 => 85,  170 => 65,  168 => 85,  146 => 61,  142 => 74,  128 => 50,  125 => 63,  107 => 39,  38 => 6,  144 => 38,  141 => 51,  135 => 48,  126 => 48,  109 => 41,  103 => 40,  67 => 20,  61 => 21,  47 => 9,  105 => 38,  93 => 31,  76 => 23,  72 => 20,  68 => 25,  27 => 4,  91 => 35,  84 => 21,  94 => 30,  88 => 31,  79 => 44,  59 => 14,  21 => 2,  44 => 15,  31 => 4,  28 => 3,  225 => 96,  216 => 108,  212 => 107,  205 => 84,  201 => 69,  196 => 104,  194 => 103,  191 => 71,  189 => 68,  186 => 76,  180 => 61,  172 => 90,  159 => 61,  154 => 49,  147 => 39,  132 => 52,  127 => 80,  121 => 41,  118 => 59,  114 => 40,  104 => 51,  100 => 59,  78 => 17,  75 => 33,  71 => 20,  58 => 18,  34 => 5,  26 => 11,  24 => 6,  25 => 3,  19 => 1,  70 => 23,  63 => 19,  46 => 14,  22 => 1,  163 => 75,  155 => 65,  152 => 53,  149 => 67,  145 => 48,  139 => 48,  131 => 47,  123 => 47,  120 => 76,  115 => 43,  106 => 35,  101 => 40,  96 => 27,  83 => 27,  80 => 25,  74 => 27,  66 => 13,  55 => 9,  52 => 12,  50 => 8,  43 => 6,  41 => 7,  37 => 3,  35 => 4,  32 => 3,  29 => 8,  184 => 97,  178 => 71,  171 => 57,  165 => 56,  162 => 85,  157 => 60,  153 => 61,  151 => 48,  143 => 72,  138 => 49,  136 => 54,  133 => 43,  130 => 44,  122 => 77,  119 => 39,  116 => 38,  111 => 55,  108 => 36,  102 => 33,  98 => 29,  95 => 38,  92 => 26,  89 => 25,  85 => 28,  81 => 29,  73 => 23,  64 => 21,  60 => 17,  57 => 16,  54 => 16,  51 => 13,  48 => 11,  45 => 9,  42 => 8,  39 => 6,  36 => 5,  33 => 3,  30 => 1,);
    }
}
