<?php

/* AheGsbBundle:Default:accueilVisiteur.html.twig */
class __TwigTemplate_1493141f6ac1cd1e566432ecabe1934bc7e661417bbbc9009c465c9befb639fb extends Twig_Template
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
        echo "    Accueil
    ";
        // line 5
        echo twig_escape_filter($this->env, $this->getContext($context, "login"), "html", null, true);
        echo "
    ";
        // line 6
        echo twig_escape_filter($this->env, $this->getContext($context, "mdp"), "html", null, true);
        echo "
    ";
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, "nom"), "html", null, true);
        echo "
 ";
    }

    public function getTemplateName()
    {
        return "AheGsbBundle:Default:accueilVisiteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 7,  46 => 6,  42 => 5,  39 => 4,  32 => 3,  29 => 2,);
    }
}
