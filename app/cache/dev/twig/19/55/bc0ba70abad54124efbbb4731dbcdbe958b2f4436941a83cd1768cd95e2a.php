<?php

/* AheGsbBundle:Visiteurs:listeMois.html.twig */
class __TwigTemplate_1955bc0ba70abad54124efbbb4731dbcdbe958b2f4436941a83cd1768cd95e2a extends Twig_Template
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
        $this->displayBlock('bloc1', $context, $blocks);
    }

    public function block_bloc1($context, array $blocks = array())
    {
        // line 4
        echo "<h2>Mes fiches de frais</h2>
<select name=\"lstMois\">
                    ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeMois"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "                        ";
            $context["mois"] = $this->getAttribute($this->getContext($context, "item"), "mois");
            // line 8
            echo "                        ";
            $context["numAnnee"] = $this->getAttribute($this->getContext($context, "item"), "numAnnee");
            // line 9
            echo "                        ";
            $context["numMois"] = $this->getAttribute($this->getContext($context, "item"), "numMois");
            // line 10
            echo "                        
                            <!--option selected value=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getContext($context, "mois"), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getContext($context, "numMois"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getContext($context, "numAnnee"), "html", null, true);
            echo " </option>-->
                        
                            <option value=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getContext($context, "mois"), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getContext($context, "numMois"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getContext($context, "numAnnee"), "html", null, true);
            echo " </option>
                        
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "                </select>
   ";
    }

    public function getTemplateName()
    {
        return "AheGsbBundle:Visiteurs:listeMois.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 16,  67 => 13,  58 => 11,  55 => 10,  52 => 9,  49 => 8,  46 => 7,  42 => 6,  38 => 4,  32 => 3,  29 => 2,);
    }
}
