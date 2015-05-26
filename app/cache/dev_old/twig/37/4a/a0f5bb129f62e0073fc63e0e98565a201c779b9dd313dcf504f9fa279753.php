<?php

/* AheGsbBundle:Visiteurs:consultationFraisForfait.html.twig */
class __TwigTemplate_374aa0f5bb129f62e0073fc63e0e98565a201c779b9dd313dcf504f9fa279753 extends Twig_Template
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
        echo "<h3>Fiche de frais du mois ";
        echo twig_escape_filter($this->env, $this->getContext($context, "numMois"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getContext($context, "numAnnee"), "html", null, true);
        echo " : 
    </h3>
    <div>
    <p>
        Etat : ";
        // line 5
        echo twig_escape_filter($this->env, $this->getContext($context, "libEtat"), "html", null, true);
        echo " depuis le ";
        echo twig_escape_filter($this->env, $this->getContext($context, "dateModif"), "html", null, true);
        echo " <br> Montant validé : ";
        echo twig_escape_filter($this->env, $this->getContext($context, "montantValide"), "html", null, true);
        echo "
   </p>
  \t<table class=\"table\">
  \t   <caption>Eléments forfaitisés </caption>
        <tr>
            ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "lesFraisForfait"));
        foreach ($context['_seq'] as $context["_key"] => $context["unFrais"]) {
            // line 11
            echo "                ";
            $context["libelle"] = $this->getAttribute($this->getContext($context, "unFrais"), "libelle");
            // line 12
            echo "\t\t<th> ";
            echo twig_escape_filter($this->env, $this->getContext($context, "libelle"), "html", null, true);
            echo "</th>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unFrais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "  
\t</tr>
        <tr>
            ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "lesFraisForfait"));
        foreach ($context['_seq'] as $context["_key"] => $context["unFrais"]) {
            // line 17
            echo "                ";
            $context["quantite"] = $this->getAttribute($this->getContext($context, "unFrais"), "quantite");
            // line 18
            echo "                <td >";
            echo twig_escape_filter($this->env, $this->getContext($context, "quantite"), "html", null, true);
            echo " </td>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unFrais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "  
\t</tr>
    </table>
   </div>";
    }

    public function getTemplateName()
    {
        return "AheGsbBundle:Visiteurs:consultationFraisForfait.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 22,  58 => 15,  84 => 21,  77 => 28,  110 => 47,  81 => 26,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 25,  67 => 24,  63 => 13,  59 => 16,  28 => 2,  93 => 25,  88 => 6,  78 => 19,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 22,  56 => 11,  27 => 4,  87 => 25,  46 => 7,  44 => 10,  31 => 3,  25 => 3,  21 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 51,  105 => 40,  91 => 27,  62 => 16,  49 => 7,  38 => 4,  26 => 6,  24 => 3,  19 => 1,  79 => 20,  72 => 16,  69 => 18,  47 => 12,  40 => 5,  37 => 10,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 19,  66 => 17,  55 => 14,  52 => 13,  50 => 13,  43 => 6,  41 => 10,  35 => 5,  32 => 3,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 40,  95 => 28,  92 => 35,  86 => 28,  82 => 22,  80 => 41,  73 => 17,  64 => 17,  60 => 12,  57 => 13,  54 => 11,  51 => 14,  48 => 12,  45 => 11,  42 => 5,  39 => 4,  36 => 5,  33 => 4,  30 => 7,);
    }
}
