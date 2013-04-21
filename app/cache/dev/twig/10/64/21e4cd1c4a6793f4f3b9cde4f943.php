<?php

/* StfalconTinymceBundle:Script:init.html.twig */
class __TwigTemplate_106421e4cd1c4a6793f4f3b9cde4f943 extends Twig_Template
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
        if ((isset($context["include_jquery"]) ? $context["include_jquery"] : $this->getContext($context, "include_jquery"))) {
            // line 2
            echo "    <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
";
        }
        // line 4
        if ((isset($context["tinymce_jquery"]) ? $context["tinymce_jquery"] : $this->getContext($context, "tinymce_jquery"))) {
            // line 5
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => (isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")), 1 => "bundles/stfalcontinymce/vendor/tiny_mce/jquery.tinymce.js"))), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => (isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")), 1 => "bundles/stfalcontinymce/js/init.jquery.js"))), "html", null, true);
            echo "\"></script>
";
        } else {
            // line 8
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => (isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")), 1 => "bundles/stfalcontinymce/vendor/tiny_mce/tiny_mce.js"))), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => (isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")), 1 => "bundles/stfalcontinymce/js/ready.min.js"))), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => (isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")), 1 => "bundles/stfalcontinymce/js/init.standard.js"))), "html", null, true);
            echo "\"></script>
";
        }
        // line 12
        echo "<script type=\"text/javascript\">
//<![CDATA[
    initTinyMCE(";
        // line 14
        echo (isset($context["tinymce_config"]) ? $context["tinymce_config"] : $this->getContext($context, "tinymce_config"));
        echo ");
//]]>
</script>";
    }

    public function getTemplateName()
    {
        return "StfalconTinymceBundle:Script:init.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  824 => 80,  819 => 76,  813 => 5,  803 => 747,  799 => 746,  795 => 745,  113 => 43,  23 => 3,  97 => 42,  129 => 49,  156 => 62,  377 => 188,  358 => 175,  350 => 173,  344 => 170,  330 => 165,  326 => 164,  322 => 163,  296 => 149,  292 => 148,  288 => 147,  278 => 140,  274 => 139,  270 => 138,  249 => 126,  242 => 122,  238 => 121,  192 => 99,  150 => 79,  137 => 27,  343 => 154,  339 => 153,  335 => 152,  329 => 149,  309 => 156,  305 => 155,  290 => 119,  286 => 118,  276 => 114,  272 => 113,  268 => 112,  262 => 109,  258 => 108,  254 => 107,  224 => 92,  220 => 109,  210 => 84,  206 => 104,  202 => 103,  185 => 71,  174 => 66,  166 => 87,  148 => 56,  124 => 43,  56 => 19,  53 => 9,  140 => 28,  134 => 64,  86 => 31,  77 => 29,  264 => 107,  259 => 103,  253 => 127,  245 => 101,  241 => 100,  237 => 99,  233 => 133,  229 => 132,  188 => 98,  158 => 52,  110 => 34,  87 => 30,  117 => 38,  112 => 38,  90 => 38,  69 => 26,  65 => 20,  49 => 14,  99 => 40,  82 => 27,  62 => 22,  40 => 5,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 205,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 187,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 174,  340 => 169,  336 => 168,  321 => 101,  313 => 157,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 117,  277 => 86,  267 => 85,  263 => 84,  257 => 128,  251 => 80,  246 => 78,  240 => 77,  234 => 120,  228 => 93,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 68,  181 => 70,  176 => 85,  170 => 65,  168 => 85,  146 => 53,  142 => 66,  128 => 50,  125 => 58,  107 => 39,  38 => 4,  144 => 38,  141 => 51,  135 => 48,  126 => 48,  109 => 41,  103 => 40,  67 => 14,  61 => 21,  47 => 9,  105 => 38,  93 => 31,  76 => 30,  72 => 24,  68 => 25,  27 => 5,  91 => 35,  84 => 21,  94 => 30,  88 => 31,  79 => 28,  59 => 19,  21 => 2,  44 => 15,  31 => 4,  28 => 3,  225 => 96,  216 => 108,  212 => 107,  205 => 84,  201 => 69,  196 => 104,  194 => 103,  191 => 71,  189 => 68,  186 => 76,  180 => 61,  172 => 90,  159 => 61,  154 => 53,  147 => 39,  132 => 52,  127 => 80,  121 => 39,  118 => 54,  114 => 40,  104 => 46,  100 => 59,  78 => 17,  75 => 19,  71 => 20,  58 => 11,  34 => 5,  26 => 2,  24 => 6,  25 => 4,  19 => 1,  70 => 23,  63 => 19,  46 => 10,  22 => 1,  163 => 75,  155 => 65,  152 => 53,  149 => 67,  145 => 48,  139 => 49,  131 => 47,  123 => 47,  120 => 76,  115 => 43,  106 => 35,  101 => 40,  96 => 33,  83 => 34,  80 => 30,  74 => 27,  66 => 21,  55 => 14,  52 => 12,  50 => 8,  43 => 6,  41 => 7,  37 => 8,  35 => 4,  32 => 6,  29 => 2,  184 => 97,  178 => 71,  171 => 57,  165 => 56,  162 => 85,  157 => 54,  153 => 61,  151 => 48,  143 => 72,  138 => 65,  136 => 54,  133 => 43,  130 => 44,  122 => 77,  119 => 39,  116 => 38,  111 => 50,  108 => 36,  102 => 33,  98 => 29,  95 => 38,  92 => 26,  89 => 25,  85 => 28,  81 => 22,  73 => 28,  64 => 21,  60 => 17,  57 => 14,  54 => 17,  51 => 12,  48 => 10,  45 => 9,  42 => 9,  39 => 8,  36 => 5,  33 => 5,  30 => 4,);
    }
}
