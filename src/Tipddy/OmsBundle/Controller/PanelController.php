<?php

namespace Tipddy\OmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class PanelController extends Controller
{
    public function indexAction()
    {
        /*$em = $this->getDoctrine()->getEntityManager();
        
        $organizaciones = $em->getRepository('TipddyOmsBundle:Organizaciones')->findAll();*/
        //Podemos dejar las opciones generales en una tabla
        return $this->render('TipddyOmsBundle:Dashboard:index.html.twig');
    
    }
      

}