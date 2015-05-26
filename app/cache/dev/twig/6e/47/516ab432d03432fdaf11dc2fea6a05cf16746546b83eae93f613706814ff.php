<?php

/* SensioDistributionBundle:Configurator/Step:doctrine.html.twig */
class __TwigTemplate_6e47516ab432d03432fdaf11dc2fea6a05cf16746546b83eae93f613706814ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Configure database";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form"), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "
    <div class=\"step\">
        ";
        // line 9
        $this->env->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig")->display(array_merge($context, array("index" => $this->getContext($context, "index"), "count" => $this->getContext($context, "count"))));
        // line 10
        echo "
        <h1>Configure your Database</h1>
        <p>If your website needs a database connection, please configure it here.</p>

        <div class=\"symfony-form-errors\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
        </div>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => $this->getContext($context, "index"))), "html", null, true);
        echo "\" method=\"POST\">
            <div class=\"symfony-form-column\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "driver"), 'row');
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "host"), 'row');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'row');
        echo "
            </div>
            <div class=\"symfony-form-column\">
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "user"), 'row');
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "password"), 'row');
        echo "
            </div>

            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:doctrine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1038 => 312,  1029 => 311,  1026 => 310,  1012 => 307,  1006 => 306,  1003 => 305,  981 => 302,  956 => 301,  953 => 300,  945 => 296,  941 => 295,  938 => 294,  929 => 287,  927 => 286,  923 => 285,  920 => 284,  915 => 280,  907 => 278,  903 => 277,  901 => 276,  899 => 275,  896 => 274,  890 => 271,  887 => 270,  883 => 267,  880 => 265,  878 => 264,  875 => 263,  868 => 259,  866 => 258,  844 => 257,  841 => 255,  838 => 253,  836 => 252,  834 => 251,  831 => 250,  827 => 247,  825 => 246,  823 => 245,  820 => 244,  816 => 239,  813 => 238,  809 => 235,  805 => 233,  802 => 232,  798 => 229,  794 => 227,  790 => 225,  787 => 224,  783 => 221,  780 => 216,  755 => 208,  752 => 206,  750 => 205,  747 => 203,  745 => 202,  742 => 200,  740 => 199,  738 => 198,  735 => 197,  731 => 192,  729 => 191,  726 => 190,  722 => 187,  720 => 186,  717 => 185,  707 => 182,  704 => 180,  699 => 178,  695 => 175,  693 => 174,  684 => 169,  681 => 168,  675 => 164,  672 => 163,  667 => 160,  665 => 159,  662 => 158,  658 => 155,  656 => 154,  653 => 153,  647 => 149,  644 => 148,  640 => 145,  637 => 144,  633 => 141,  631 => 140,  628 => 139,  624 => 136,  619 => 133,  614 => 129,  604 => 128,  599 => 127,  597 => 126,  594 => 124,  592 => 123,  589 => 122,  584 => 118,  582 => 116,  581 => 115,  580 => 114,  579 => 113,  575 => 112,  572 => 110,  570 => 109,  562 => 104,  560 => 103,  558 => 102,  556 => 101,  554 => 100,  550 => 99,  547 => 97,  545 => 96,  542 => 95,  528 => 92,  525 => 91,  511 => 88,  508 => 87,  483 => 82,  478 => 79,  476 => 78,  471 => 77,  452 => 75,  445 => 71,  443 => 70,  433 => 65,  418 => 60,  416 => 59,  405 => 57,  400 => 55,  397 => 54,  385 => 48,  376 => 46,  352 => 34,  349 => 33,  333 => 23,  317 => 16,  301 => 12,  271 => 300,  266 => 294,  260 => 291,  250 => 273,  245 => 269,  225 => 238,  215 => 224,  186 => 189,  146 => 147,  129 => 122,  124 => 108,  114 => 91,  20 => 1,  350 => 327,  308 => 287,  167 => 71,  118 => 49,  357 => 123,  332 => 116,  327 => 114,  324 => 18,  318 => 111,  306 => 286,  297 => 104,  291 => 102,  263 => 293,  231 => 83,  212 => 223,  190 => 76,  174 => 173,  161 => 162,  810 => 492,  807 => 234,  796 => 228,  792 => 226,  788 => 486,  775 => 212,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 179,  698 => 471,  694 => 470,  690 => 173,  686 => 170,  682 => 467,  679 => 466,  677 => 165,  660 => 464,  649 => 150,  634 => 456,  629 => 454,  625 => 453,  622 => 135,  620 => 451,  606 => 449,  601 => 446,  567 => 108,  549 => 411,  532 => 410,  529 => 409,  527 => 408,  522 => 406,  517 => 404,  202 => 212,  188 => 76,  462 => 202,  449 => 74,  446 => 197,  441 => 69,  439 => 195,  431 => 64,  429 => 63,  422 => 184,  415 => 180,  408 => 58,  401 => 172,  394 => 168,  373 => 45,  351 => 141,  348 => 121,  342 => 28,  338 => 119,  335 => 134,  329 => 21,  325 => 129,  323 => 128,  320 => 17,  303 => 13,  300 => 105,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  233 => 244,  226 => 84,  207 => 215,  200 => 72,  185 => 75,  181 => 184,  165 => 83,  153 => 69,  150 => 55,  389 => 160,  386 => 159,  380 => 160,  378 => 157,  371 => 156,  367 => 339,  363 => 38,  361 => 125,  358 => 151,  353 => 328,  345 => 30,  343 => 146,  340 => 27,  334 => 117,  331 => 22,  328 => 139,  326 => 19,  321 => 112,  315 => 110,  307 => 128,  302 => 125,  296 => 121,  293 => 7,  290 => 5,  288 => 4,  281 => 310,  276 => 305,  274 => 97,  265 => 96,  259 => 103,  255 => 283,  253 => 274,  248 => 270,  232 => 88,  222 => 237,  216 => 79,  213 => 78,  210 => 216,  197 => 197,  194 => 196,  191 => 194,  184 => 185,  178 => 64,  175 => 58,  172 => 62,  170 => 84,  155 => 47,  152 => 46,  134 => 133,  70 => 19,  34 => 5,  113 => 48,  104 => 74,  100 => 36,  97 => 41,  127 => 35,  110 => 38,  53 => 11,  23 => 3,  65 => 17,  90 => 27,  58 => 14,  84 => 33,  81 => 32,  77 => 25,  126 => 121,  76 => 25,  480 => 80,  474 => 161,  469 => 76,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 66,  430 => 144,  427 => 62,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 56,  398 => 129,  393 => 51,  387 => 49,  384 => 121,  381 => 47,  379 => 119,  374 => 116,  368 => 41,  365 => 39,  362 => 110,  360 => 37,  355 => 329,  341 => 105,  337 => 26,  322 => 101,  314 => 99,  312 => 109,  309 => 108,  305 => 95,  298 => 11,  294 => 90,  285 => 3,  283 => 100,  278 => 309,  268 => 299,  264 => 84,  258 => 284,  252 => 80,  247 => 78,  241 => 90,  229 => 85,  220 => 232,  214 => 69,  177 => 65,  169 => 168,  140 => 55,  132 => 51,  128 => 49,  107 => 37,  61 => 2,  273 => 304,  269 => 107,  254 => 92,  243 => 263,  240 => 262,  238 => 250,  235 => 249,  230 => 243,  227 => 241,  224 => 81,  221 => 77,  219 => 76,  217 => 231,  208 => 76,  204 => 213,  179 => 178,  159 => 158,  143 => 51,  135 => 62,  119 => 95,  102 => 30,  71 => 15,  67 => 18,  63 => 21,  59 => 17,  28 => 3,  93 => 28,  88 => 28,  78 => 24,  94 => 45,  89 => 37,  85 => 26,  75 => 22,  68 => 20,  56 => 12,  27 => 7,  87 => 26,  46 => 12,  44 => 8,  31 => 4,  25 => 35,  21 => 2,  201 => 92,  196 => 92,  183 => 82,  171 => 172,  166 => 167,  163 => 82,  158 => 80,  156 => 157,  151 => 152,  142 => 59,  138 => 56,  136 => 138,  121 => 107,  117 => 39,  105 => 34,  91 => 44,  62 => 16,  49 => 12,  38 => 6,  26 => 6,  24 => 3,  19 => 1,  79 => 26,  72 => 21,  69 => 11,  47 => 10,  40 => 8,  37 => 6,  22 => 2,  246 => 136,  157 => 56,  145 => 52,  139 => 139,  131 => 132,  123 => 61,  120 => 31,  115 => 40,  111 => 90,  108 => 33,  101 => 33,  98 => 29,  96 => 53,  83 => 35,  74 => 22,  66 => 10,  55 => 12,  52 => 12,  50 => 10,  43 => 12,  41 => 7,  35 => 5,  32 => 7,  29 => 3,  209 => 82,  203 => 73,  199 => 211,  193 => 73,  189 => 190,  187 => 75,  182 => 87,  176 => 177,  173 => 85,  168 => 61,  164 => 163,  162 => 59,  154 => 153,  149 => 148,  147 => 75,  144 => 144,  141 => 143,  133 => 55,  130 => 46,  125 => 51,  122 => 41,  116 => 94,  112 => 39,  109 => 87,  106 => 86,  103 => 37,  99 => 54,  95 => 39,  92 => 31,  86 => 36,  82 => 25,  80 => 24,  73 => 33,  64 => 19,  60 => 20,  57 => 39,  54 => 15,  51 => 37,  48 => 10,  45 => 9,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
