<?php

/* AheGsbBundle:Visiteurs:accueilVisiteur.html.twig */
class __TwigTemplate_c80cda8d5de505dc72377fbc683e126a6c08589dcf129a836dc24d4a5620108f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AheGsbBundle::layout.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
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
    public function block_menu($context, array $blocks = array())
    {
        // line 3
        echo "﻿    <!-- Division pour le sommaire -->
<br>

<div class=\"col-md-3\">
     <div class=\"menu\">
        <h3>
            ";
        // line 9
        if (array_key_exists("nom", $context)) {
            // line 10
            echo "                Vous êtes : <br> ";
            echo twig_escape_filter($this->env, $this->getContext($context, "nom"), "html", null, true);
            echo " 
                ";
            // line 11
            echo twig_escape_filter($this->env, $this->getContext($context, "prenom"), "html", null, true);
            echo "
                <br></br>
            ";
        }
        // line 14
        echo "        </h3> 
        <ul class=\"nav\">
        <li> <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("gsb_consultation_frais");
        echo "\"
                 title=\"Consultation\">
                <h4>Consulter mes fiches de frais</h4>
             </a>
        </li>
              
        <li> <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("gsb_saisie_frais");
        echo "\" 
                 title=\"Saisie\">
                <h4>Saisir mes fiches de frais</h4>
             </a> 
        </li>
              
        <li> <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("gsb_visiteurs_deconnexion");
        echo "\" 
                 title=\"Déconnexion\">
                  <h4>Se déconnecter</h4>
             </a> 
        </li>
      </ul>
             

    </div>
  </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "AheGsbBundle:Visiteurs:accueilVisiteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 28,  65 => 22,  56 => 16,  52 => 14,  46 => 11,  41 => 10,  39 => 9,  31 => 3,  28 => 2,);
    }
}
