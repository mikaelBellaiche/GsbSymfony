<?php

/* AheGsbBundle:Default:connexion.html.twig */
class __TwigTemplate_68cdf1c4f13b57bb3b9e167ac99cc87f9659899d71442ac542be6f438e919a58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AheGsbBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AheGsbBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo " ";
        $this->displayBlock('bloc1', $context, $blocks);
    }

    public function block_bloc1($context, array $blocks = array())
    {
        // line 4
        echo "  <div id=\"container\" >
      <h1>Identification Visiteur</h1>
      ";
        // line 6
        if (array_key_exists("message", $context)) {
            // line 7
            echo "      <div class=\"erreur\">
          <ul> ";
            // line 8
            echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
            echo " </ul>
      </div>
      ";
        }
        // line 11
        echo "
      <form method=\"POST\" action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("gsb_visiteurs_connexion");
        echo "\">
        <table>
            <tr>
                <td> <label for=\"nom\"><b>Login</b></label></td>
                <td> <input  id=\"login\" type=\"text\" name=\"login\"  size=\"30\" 
                             maxlength=\"45\" required >
                </td>
            </tr>
            <tr>
                <td> <label for=\"mdp\"><b>Mot de passe</b></label> </td>
                <td> <input id=\"mdp\"  type=\"password\"  name=\"mdp\" size=\"30\" 
                            maxlength=\"45\" required>
                </td>
            </tr>
            <tr>
                <td><input class =\"btn-success\" type=\"submit\" value=\"Valider\" 
                           name=\"valider\"></td>
                <td><input class=\"btn-warning\" type=\"reset\" value=\"Annuler\" 
                           name=\"annuler\"></td> 
            </tr>
        </table>
    </form>
  </div>
  
  ";
    }

    public function getTemplateName()
    {
        return "AheGsbBundle:Default:connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 27,  77 => 28,  110 => 47,  81 => 26,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 25,  67 => 24,  63 => 17,  59 => 16,  28 => 2,  93 => 28,  88 => 6,  78 => 21,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 22,  56 => 9,  27 => 4,  87 => 25,  46 => 7,  44 => 10,  31 => 3,  25 => 3,  21 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 51,  105 => 40,  91 => 27,  62 => 23,  49 => 11,  38 => 6,  26 => 6,  24 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 12,  40 => 14,  37 => 10,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 26,  66 => 18,  55 => 14,  52 => 23,  50 => 13,  43 => 6,  41 => 5,  35 => 5,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 40,  95 => 28,  92 => 35,  86 => 28,  82 => 22,  80 => 41,  73 => 19,  64 => 23,  60 => 6,  57 => 12,  54 => 11,  51 => 14,  48 => 8,  45 => 7,  42 => 5,  39 => 4,  36 => 5,  33 => 4,  30 => 7,);
    }
}
