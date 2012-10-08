<?php

namespace Tipddy\OmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Tipddy\OmsBundle\Entity\Otec;
use Tipddy\OmsBundle\Form\OtecType;

class EmpresaController extends Controller{
    
    public function indexAction()
    {
        $rut = '252452';
        //Como enviar rut o dejarlo en archivo de conf.
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TipddyOmsBundle:Otec')->find(1);
                
        if (!$entity) {
            throw $this->createNotFoundException('Error en BD.');
        }
        
        $editForm = $this->createForm(new OtecType(), $entity);
        //$deleteForm = $this->createDeleteForm($rut);
        
        return $this->render('TipddyOmsBundle:Otec:edit.html.twig', array(
            'entity' => $entity,
            'form' => $editForm->createView(),
        ));
    }

}
