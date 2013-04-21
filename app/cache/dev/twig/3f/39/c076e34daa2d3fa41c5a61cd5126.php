<?php

/* WebProfilerBundle:Profiler:toolbar_js.html.twig */
class __TwigTemplate_3f39c076e34daa2d3fa41c5a61cd5126 extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("WebProfilerBundle:Profiler:base_js.html.twig")->display($context);
        // line 3
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 21,  50 => 15,  42 => 12,  30 => 5,  26 => 3,  24 => 2,  19 => 1,  264 => 107,  259 => 103,  253 => 5,  245 => 136,  241 => 135,  237 => 134,  233 => 133,  229 => 132,  201 => 107,  196 => 104,  194 => 103,  188 => 99,  172 => 86,  168 => 85,  163 => 83,  158 => 81,  143 => 72,  139 => 71,  130 => 65,  122 => 63,  118 => 62,  110 => 60,  102 => 58,  89 => 47,  87 => 46,  52 => 17,  48 => 16,  28 => 5,  22 => 1,  117 => 47,  104 => 33,  99 => 47,  93 => 42,  83 => 36,  65 => 23,  61 => 22,  44 => 15,  41 => 8,  32 => 6,  154 => 49,  151 => 48,  147 => 73,  144 => 38,  140 => 28,  137 => 27,  132 => 52,  128 => 50,  126 => 64,  123 => 47,  114 => 61,  112 => 42,  106 => 59,  98 => 29,  96 => 27,  90 => 41,  86 => 22,  84 => 21,  78 => 17,  69 => 24,  66 => 13,  55 => 9,  43 => 6,  37 => 3,  34 => 2,  81 => 33,  75 => 19,  67 => 14,  62 => 12,  58 => 20,  53 => 9,  49 => 12,  46 => 14,  40 => 14,  38 => 4,  35 => 3,  29 => 2,);
    }
}
