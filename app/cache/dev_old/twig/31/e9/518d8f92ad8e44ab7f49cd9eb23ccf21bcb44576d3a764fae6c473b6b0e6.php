<?php

/* SensioDistributionBundle:Configurator:final.html.twig */
class __TwigTemplate_31e9518d8f92ad8e44ab7f49cd9eb23ccf21bcb44576d3a764fae6c473b6b0e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'content_class' => array($this, 'block_content_class'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_class($context, array $blocks = array())
    {
        echo "config_done";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"step\">
        <h1>Well done!</h1>
        ";
        // line 7
        if ($this->getContext($context, "is_writable")) {
            // line 8
            echo "        <h2>Your distribution is configured!</h2>
        ";
        } else {
            // line 10
            echo "        <h2 class=\"configure-error\">Your distribution is almost configured but...</h2>
        ";
        }
        // line 12
        echo "        <h3>
            <span>
                ";
        // line 14
        if ($this->getContext($context, "is_writable")) {
            // line 15
            echo "                    Your parameters.yml file has been overwritten with these parameters (in <em>";
            echo twig_escape_filter($this->env, $this->getContext($context, "yml_path"), "html", null, true);
            echo "</em>):
                ";
        } else {
            // line 17
            echo "                    Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>";
            echo twig_escape_filter($this->env, $this->getContext($context, "yml_path"), "html", null, true);
            echo "</em>:
                ";
        }
        // line 19
        echo "            </span>
        </h3>

        <textarea class=\"symfony-configuration\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getContext($context, "parameters"), "html", null, true);
        echo "</textarea>

        ";
        // line 24
        if ($this->getContext($context, "welcome_url")) {
            // line 25
            echo "            <ul>
                <li><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getContext($context, "welcome_url"), "html", null, true);
            echo "\">Go to the Welcome page</a></li>
            </ul>
        ";
        }
        // line 29
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:final.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  350 => 327,  308 => 287,  167 => 71,  118 => 49,  357 => 123,  332 => 116,  327 => 114,  324 => 113,  318 => 111,  306 => 286,  297 => 104,  291 => 102,  263 => 95,  231 => 83,  212 => 78,  190 => 76,  174 => 74,  161 => 63,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  660 => 464,  649 => 462,  634 => 456,  629 => 454,  625 => 453,  622 => 452,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  527 => 408,  522 => 406,  517 => 404,  202 => 77,  188 => 76,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  373 => 156,  351 => 141,  348 => 121,  342 => 137,  338 => 119,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  303 => 106,  300 => 105,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  233 => 87,  226 => 84,  207 => 75,  200 => 72,  185 => 75,  181 => 65,  165 => 83,  153 => 69,  150 => 55,  389 => 160,  386 => 159,  380 => 160,  378 => 157,  371 => 156,  367 => 339,  363 => 153,  361 => 125,  358 => 151,  353 => 328,  345 => 120,  343 => 146,  340 => 145,  334 => 117,  331 => 140,  328 => 139,  326 => 138,  321 => 112,  315 => 110,  307 => 128,  302 => 125,  296 => 121,  293 => 120,  290 => 119,  288 => 101,  281 => 114,  276 => 111,  274 => 97,  265 => 96,  259 => 103,  255 => 93,  253 => 100,  248 => 94,  232 => 88,  222 => 83,  216 => 79,  213 => 78,  210 => 77,  197 => 71,  194 => 70,  191 => 77,  184 => 63,  178 => 64,  175 => 58,  172 => 62,  170 => 84,  155 => 47,  152 => 46,  134 => 54,  70 => 19,  34 => 5,  113 => 48,  104 => 42,  100 => 36,  65 => 11,  97 => 41,  127 => 35,  76 => 28,  53 => 15,  23 => 3,  90 => 37,  58 => 15,  84 => 27,  77 => 25,  110 => 22,  81 => 23,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 329,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 109,  309 => 108,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 100,  278 => 98,  268 => 85,  264 => 84,  258 => 94,  252 => 80,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 23,  273 => 96,  269 => 107,  254 => 92,  243 => 92,  240 => 86,  238 => 85,  235 => 85,  230 => 82,  227 => 86,  224 => 81,  221 => 77,  219 => 76,  217 => 75,  208 => 76,  204 => 78,  179 => 69,  159 => 61,  143 => 51,  135 => 62,  119 => 40,  102 => 33,  71 => 13,  67 => 22,  63 => 21,  59 => 22,  28 => 3,  93 => 38,  88 => 25,  78 => 18,  94 => 21,  89 => 30,  85 => 26,  75 => 22,  68 => 12,  56 => 14,  27 => 7,  87 => 32,  46 => 12,  44 => 8,  31 => 8,  25 => 35,  21 => 2,  201 => 92,  196 => 92,  183 => 82,  171 => 73,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 63,  142 => 59,  138 => 56,  136 => 48,  121 => 50,  117 => 39,  105 => 34,  91 => 29,  62 => 24,  49 => 14,  38 => 5,  26 => 6,  24 => 3,  19 => 1,  79 => 29,  72 => 27,  69 => 26,  47 => 21,  40 => 8,  37 => 6,  22 => 2,  246 => 136,  157 => 56,  145 => 52,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 43,  111 => 47,  108 => 47,  101 => 43,  98 => 34,  96 => 30,  83 => 35,  74 => 27,  66 => 25,  55 => 38,  52 => 12,  50 => 18,  43 => 12,  41 => 8,  35 => 4,  32 => 7,  29 => 3,  209 => 82,  203 => 73,  199 => 93,  193 => 73,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 70,  162 => 59,  154 => 58,  149 => 51,  147 => 75,  144 => 42,  141 => 73,  133 => 55,  130 => 46,  125 => 51,  122 => 41,  116 => 57,  112 => 36,  109 => 35,  106 => 51,  103 => 32,  99 => 31,  95 => 39,  92 => 28,  86 => 28,  82 => 25,  80 => 24,  73 => 33,  64 => 17,  60 => 20,  57 => 39,  54 => 19,  51 => 37,  48 => 10,  45 => 10,  42 => 7,  39 => 10,  36 => 8,  33 => 6,  30 => 5,);
    }
}
