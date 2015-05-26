<?php

/* SensioDistributionBundle:Configurator:form.html.twig */
class __TwigTemplate_3b3eea7e6314d95d783e48f7b3b66af9d6e93383d0538214a553536d48d3d2c2 extends Twig_Template
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 12
    public function block_form_row($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
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
        if (twig_test_empty($this->getContext($context, "label"))) {
            // line 26
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->humanize($this->getContext($context, "name"));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label")), "html", null, true);
        echo "
        ";
        // line 30
        if ($this->getContext($context, "required")) {
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
        return array (  20 => 1,  350 => 327,  308 => 287,  167 => 71,  118 => 49,  357 => 123,  332 => 116,  327 => 114,  324 => 113,  318 => 111,  306 => 286,  297 => 104,  291 => 102,  263 => 95,  231 => 83,  212 => 78,  190 => 76,  174 => 74,  161 => 63,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  660 => 464,  649 => 462,  634 => 456,  629 => 454,  625 => 453,  622 => 452,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  527 => 408,  522 => 406,  517 => 404,  202 => 77,  188 => 76,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  373 => 156,  351 => 141,  348 => 121,  342 => 137,  338 => 119,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  303 => 106,  300 => 105,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  233 => 87,  226 => 84,  207 => 75,  200 => 72,  185 => 75,  181 => 65,  165 => 83,  153 => 69,  150 => 55,  389 => 160,  386 => 159,  380 => 160,  378 => 157,  371 => 156,  367 => 339,  363 => 153,  361 => 125,  358 => 151,  353 => 328,  345 => 120,  343 => 146,  340 => 145,  334 => 117,  331 => 140,  328 => 139,  326 => 138,  321 => 112,  315 => 110,  307 => 128,  302 => 125,  296 => 121,  293 => 120,  290 => 119,  288 => 101,  281 => 114,  276 => 111,  274 => 97,  265 => 96,  259 => 103,  255 => 93,  253 => 100,  248 => 94,  232 => 88,  222 => 83,  216 => 79,  213 => 78,  210 => 77,  197 => 71,  194 => 70,  191 => 77,  184 => 63,  178 => 64,  175 => 58,  172 => 62,  170 => 84,  155 => 47,  152 => 46,  134 => 54,  70 => 19,  34 => 4,  113 => 48,  104 => 31,  100 => 36,  65 => 11,  97 => 41,  127 => 35,  76 => 28,  53 => 11,  23 => 3,  90 => 27,  58 => 13,  84 => 25,  77 => 25,  110 => 22,  81 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 329,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 109,  309 => 108,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 100,  278 => 98,  268 => 85,  264 => 84,  258 => 94,  252 => 80,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 23,  273 => 96,  269 => 107,  254 => 92,  243 => 92,  240 => 86,  238 => 85,  235 => 85,  230 => 82,  227 => 86,  224 => 81,  221 => 77,  219 => 76,  217 => 75,  208 => 76,  204 => 78,  179 => 69,  159 => 61,  143 => 51,  135 => 62,  119 => 40,  102 => 30,  71 => 13,  67 => 16,  63 => 21,  59 => 13,  28 => 3,  93 => 28,  88 => 25,  78 => 18,  94 => 21,  89 => 30,  85 => 26,  75 => 22,  68 => 12,  56 => 12,  27 => 7,  87 => 26,  46 => 12,  44 => 8,  31 => 3,  25 => 35,  21 => 2,  201 => 92,  196 => 92,  183 => 82,  171 => 73,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 63,  142 => 59,  138 => 56,  136 => 48,  121 => 50,  117 => 39,  105 => 34,  91 => 29,  62 => 14,  49 => 14,  38 => 5,  26 => 6,  24 => 3,  19 => 1,  79 => 29,  72 => 18,  69 => 26,  47 => 9,  40 => 8,  37 => 6,  22 => 2,  246 => 136,  157 => 56,  145 => 52,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 43,  111 => 47,  108 => 33,  101 => 43,  98 => 29,  96 => 30,  83 => 35,  74 => 27,  66 => 25,  55 => 12,  52 => 12,  50 => 10,  43 => 12,  41 => 7,  35 => 4,  32 => 7,  29 => 3,  209 => 82,  203 => 73,  199 => 93,  193 => 73,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 70,  162 => 59,  154 => 58,  149 => 51,  147 => 75,  144 => 42,  141 => 73,  133 => 55,  130 => 46,  125 => 51,  122 => 41,  116 => 57,  112 => 36,  109 => 35,  106 => 51,  103 => 32,  99 => 31,  95 => 39,  92 => 28,  86 => 28,  82 => 25,  80 => 24,  73 => 33,  64 => 11,  60 => 20,  57 => 39,  54 => 19,  51 => 37,  48 => 10,  45 => 8,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
