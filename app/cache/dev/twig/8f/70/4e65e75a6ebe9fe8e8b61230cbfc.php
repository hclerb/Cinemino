<?php

/* SensioDistributionBundle:Configurator:form.html.twig */
class __TwigTemplate_8f704e65e75a6ebe9fe8e8b61230cbfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_rows($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    // line 12
    public function block_form_row($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 24
    public function block_form_label($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 26
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->renderer->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), "html", null, true);
        echo "
        ";
        // line 30
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 31
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 33
        echo "    </label>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 235,  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  686 => 451,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  644 => 443,  633 => 442,  618 => 437,  613 => 435,  609 => 434,  606 => 433,  604 => 432,  590 => 431,  558 => 401,  540 => 398,  523 => 397,  520 => 396,  518 => 395,  513 => 393,  508 => 391,  173 => 85,  161 => 80,  388 => 160,  385 => 159,  379 => 158,  370 => 156,  366 => 155,  362 => 153,  360 => 152,  357 => 151,  352 => 149,  342 => 146,  327 => 139,  320 => 135,  314 => 131,  306 => 128,  301 => 125,  289 => 119,  287 => 118,  280 => 114,  275 => 111,  273 => 110,  247 => 97,  231 => 88,  226 => 86,  221 => 83,  215 => 79,  193 => 68,  190 => 89,  183 => 63,  177 => 59,  169 => 56,  209 => 77,  160 => 59,  204 => 94,  167 => 64,  164 => 63,  356 => 163,  347 => 160,  333 => 141,  325 => 138,  323 => 149,  316 => 145,  302 => 137,  295 => 121,  281 => 125,  252 => 138,  217 => 83,  214 => 82,  211 => 81,  203 => 77,  182 => 64,  20 => 1,  824 => 80,  819 => 76,  813 => 5,  803 => 747,  799 => 746,  795 => 745,  113 => 40,  23 => 3,  97 => 23,  129 => 49,  156 => 77,  377 => 157,  358 => 175,  350 => 173,  344 => 147,  330 => 140,  326 => 164,  322 => 163,  296 => 149,  292 => 120,  288 => 129,  278 => 140,  274 => 121,  270 => 138,  249 => 126,  242 => 122,  238 => 218,  192 => 72,  150 => 75,  137 => 27,  343 => 159,  339 => 145,  335 => 157,  329 => 149,  309 => 141,  305 => 155,  290 => 119,  286 => 118,  276 => 248,  272 => 113,  268 => 107,  262 => 236,  258 => 103,  254 => 101,  224 => 92,  220 => 109,  210 => 84,  206 => 78,  202 => 73,  185 => 68,  174 => 58,  166 => 82,  148 => 74,  124 => 43,  56 => 12,  53 => 17,  140 => 42,  134 => 54,  86 => 29,  77 => 25,  264 => 105,  259 => 109,  253 => 127,  245 => 96,  241 => 100,  237 => 99,  233 => 133,  229 => 132,  188 => 66,  158 => 56,  110 => 38,  87 => 26,  117 => 38,  112 => 39,  90 => 27,  69 => 18,  65 => 17,  49 => 15,  99 => 40,  82 => 26,  62 => 14,  40 => 11,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 205,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 187,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 150,  340 => 158,  336 => 168,  321 => 101,  313 => 157,  311 => 130,  308 => 129,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 115,  277 => 86,  267 => 85,  263 => 84,  257 => 234,  251 => 80,  246 => 78,  240 => 219,  234 => 89,  228 => 87,  223 => 71,  219 => 70,  213 => 69,  207 => 95,  198 => 69,  181 => 87,  176 => 61,  170 => 60,  168 => 85,  146 => 53,  142 => 66,  128 => 45,  125 => 44,  107 => 37,  38 => 5,  144 => 73,  141 => 51,  135 => 47,  126 => 61,  109 => 51,  103 => 25,  67 => 16,  61 => 18,  47 => 9,  105 => 38,  93 => 28,  76 => 34,  72 => 18,  68 => 30,  27 => 5,  91 => 34,  84 => 25,  94 => 30,  88 => 30,  79 => 23,  59 => 13,  21 => 1,  44 => 11,  31 => 6,  28 => 3,  225 => 88,  216 => 108,  212 => 78,  205 => 71,  201 => 69,  196 => 92,  194 => 103,  191 => 70,  189 => 68,  186 => 76,  180 => 61,  172 => 64,  159 => 61,  154 => 48,  147 => 58,  132 => 47,  127 => 52,  121 => 39,  118 => 54,  114 => 40,  104 => 31,  100 => 36,  78 => 24,  75 => 24,  71 => 23,  58 => 14,  34 => 5,  26 => 3,  24 => 2,  25 => 4,  19 => 1,  70 => 13,  63 => 16,  46 => 14,  22 => 2,  163 => 81,  155 => 65,  152 => 53,  149 => 67,  145 => 57,  139 => 71,  131 => 46,  123 => 35,  120 => 50,  115 => 40,  106 => 35,  101 => 33,  96 => 35,  83 => 28,  80 => 32,  74 => 21,  66 => 19,  55 => 13,  52 => 18,  50 => 16,  43 => 7,  41 => 7,  37 => 7,  35 => 4,  32 => 6,  29 => 3,  184 => 88,  178 => 86,  171 => 84,  165 => 54,  162 => 53,  157 => 54,  153 => 62,  151 => 47,  143 => 43,  138 => 55,  136 => 54,  133 => 43,  130 => 39,  122 => 51,  119 => 57,  116 => 31,  111 => 50,  108 => 33,  102 => 30,  98 => 29,  95 => 34,  92 => 31,  89 => 28,  85 => 28,  81 => 24,  73 => 23,  64 => 11,  60 => 20,  57 => 14,  54 => 17,  51 => 11,  48 => 11,  45 => 8,  42 => 8,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}