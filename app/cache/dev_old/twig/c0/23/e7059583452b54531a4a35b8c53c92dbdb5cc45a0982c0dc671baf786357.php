<?php

/* AheGsbBundle:Visiteurs:consultationFraisForfaitMois.html.twig */
class __TwigTemplate_c023e7059583452b54531a4a35b8c53c92dbdb5cc45a0982c0dc671baf786357 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AheGsbBundle:Default:accueilVisiteur.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AheGsbBundle:Default:accueilVisiteur.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        $this->displayBlock('bloc1', $context, $blocks);
    }

    public function block_bloc1($context, array $blocks = array())
    {
        // line 4
        echo "﻿ <div class=\"col-md-9\">
      <h2>Mes fiches de frais</h2>
      <h3>Mois à sélectionner : </h3>
      <form method=\"post\">
         
\t<div class=\"listeMois\">
                <label class=\"col-md-offset-3\" for=\"lstMois\" accesskey=\"n\">Mois : </label>
                <select name=\"lstMois\">
                    ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "lesMois"));
        foreach ($context['_seq'] as $context["_key"] => $context["unMois"]) {
            // line 13
            echo "                        ";
            $context["mois"] = $this->getAttribute($this->getContext($context, "unMois"), "mois");
            // line 14
            echo "                        ";
            $context["numAnnee"] = $this->getAttribute($this->getContext($context, "unMois"), "numAnnee");
            // line 15
            echo "                        ";
            $context["numMois"] = $this->getAttribute($this->getContext($context, "unMois"), "numMois");
            // line 16
            echo "                        ";
            if (($this->getContext($context, "mois") == $this->getContext($context, "leMois"))) {
                // line 17
                echo "                            <option selected value=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "mois"), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getContext($context, "numMois"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getContext($context, "numAnnee"), "html", null, true);
                echo " </option>
                        ";
            } else {
                // line 19
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "mois"), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getContext($context, "numMois"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getContext($context, "numAnnee"), "html", null, true);
                echo " </option>
                        ";
            }
            // line 21
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unMois'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                </select>
        

        <div class=\"buttonsListeMois\">
                <input class=\"col-md-offset-3\" id=\"ok\" type=\"submit\" value=\"Valider\" size=\"20\" />
                <input id=\"annuler\" type=\"reset\" value=\"Effacer\" size=\"20\" />
        </div>
        </div>
      </form>
   ";
    }

    public function getTemplateName()
    {
        return "AheGsbBundle:Visiteurs:consultationFraisForfaitMois.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 22,  58 => 15,  84 => 21,  77 => 28,  110 => 47,  81 => 26,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 25,  67 => 24,  63 => 13,  59 => 16,  28 => 2,  93 => 25,  88 => 6,  78 => 21,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 22,  56 => 11,  27 => 4,  87 => 25,  46 => 7,  44 => 10,  31 => 3,  25 => 3,  21 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 51,  105 => 40,  91 => 27,  62 => 23,  49 => 7,  38 => 4,  26 => 6,  24 => 3,  19 => 1,  79 => 20,  72 => 16,  69 => 15,  47 => 12,  40 => 5,  37 => 10,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 19,  66 => 14,  55 => 14,  52 => 13,  50 => 13,  43 => 6,  41 => 5,  35 => 5,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 40,  95 => 28,  92 => 35,  86 => 28,  82 => 22,  80 => 41,  73 => 17,  64 => 17,  60 => 12,  57 => 12,  54 => 11,  51 => 14,  48 => 12,  45 => 7,  42 => 5,  39 => 4,  36 => 5,  33 => 4,  30 => 7,);
    }
}
