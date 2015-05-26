<?php

namespace Ahe\gsbBundle\Controller;
require_once("include/fct.inc.php");
require_once("include/class.pdogsb.inc.php");
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PdoGsb;

class ComptableController extends Controller
{

     public function accueilComptableAction() {
         return $this->render('AheGsbBundle:Comptable:accueilComptable.html.twig');
     }
}