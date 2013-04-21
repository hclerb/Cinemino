<?php

/* WebProfilerBundle:Profiler:base_js.html.twig */
class __TwigTemplate_b9ec8fdbd5c636a41ee1ef92da5a68b2 extends Twig_Template
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
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},
            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },
            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },
            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },
            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            };

        return {
            hasClass: hasClass,
            removeClass: removeClass,
            addClass: addClass,
            request: request,
            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },
            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }

        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  59 => 21,  50 => 15,  42 => 12,  30 => 5,  26 => 3,  24 => 2,  19 => 1,  264 => 107,  259 => 103,  253 => 5,  245 => 136,  241 => 135,  237 => 134,  233 => 133,  229 => 132,  201 => 107,  196 => 104,  194 => 103,  188 => 99,  172 => 86,  168 => 85,  163 => 83,  158 => 81,  143 => 72,  139 => 71,  130 => 65,  122 => 63,  118 => 62,  110 => 60,  102 => 58,  89 => 47,  87 => 46,  52 => 17,  48 => 16,  28 => 5,  22 => 1,  117 => 47,  104 => 33,  99 => 47,  93 => 42,  83 => 36,  65 => 23,  61 => 22,  44 => 15,  41 => 8,  32 => 6,  154 => 49,  151 => 48,  147 => 73,  144 => 38,  140 => 28,  137 => 27,  132 => 52,  128 => 50,  126 => 64,  123 => 47,  114 => 61,  112 => 42,  106 => 59,  98 => 29,  96 => 27,  90 => 41,  86 => 22,  84 => 21,  78 => 17,  69 => 24,  66 => 13,  55 => 9,  43 => 6,  37 => 3,  34 => 2,  81 => 33,  75 => 19,  67 => 14,  62 => 12,  58 => 20,  53 => 9,  49 => 12,  46 => 14,  40 => 14,  38 => 4,  35 => 3,  29 => 2,);
    }
}
