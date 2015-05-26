<?php

/* AheGsbBundle::layout.html.twig */
class __TwigTemplate_ea72fa0660fc792994a3acfaec12ae2605f90228888cf523867bc6afe72c25f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\">
  <head>
    <title>Laboratoire Galaxy-Swiss-Bourdin</title>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ahegsb/css/styles.css"), "html", null, true);
        echo "\" 
          rel=\"stylesheet\" type=\"text/css\" />
  
  </head>
  <body>
      
    <div id=\"entete\">
        <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ahegsb/images/logo.png"), "html", null, true);
        echo "\" 
             id=\"logoGSB\" 
             alt=\"Laboratoire Galaxy-Swiss Bourdin\" 
             title=\"Laboratoire Galaxy-Swiss Bourdin\"
        />
        <h1><br/>Laboratoire Galaxy Swiss-Bourdin</h1>
    </div>

      
     ";
        // line 23
        $this->displayBlock('menu', $context, $blocks);
        // line 25
        echo "     ";
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "        
   
  </body>
</html>";
    }

    // line 23
    public function block_menu($context, array $blocks = array())
    {
        // line 24
        echo "     ";
    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        // line 26
        echo "        ";
        $this->displayBlock('bloc1', $context, $blocks);
        // line 28
        echo "     ";
    }

    // line 26
    public function block_bloc1($context, array $blocks = array())
    {
        // line 27
        echo "        ";
    }

    public function getTemplateName()
    {
        return "AheGsbBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 27,  77 => 28,  71 => 25,  67 => 24,  64 => 23,  57 => 29,  52 => 23,  40 => 14,  30 => 7,  22 => 1,  117 => 51,  110 => 47,  99 => 40,  92 => 35,  81 => 26,  74 => 26,  66 => 18,  63 => 17,  54 => 25,  50 => 13,  47 => 12,  43 => 11,  39 => 4,  32 => 3,  29 => 2,);
    }
}
