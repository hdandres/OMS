<?php

namespace Tipddy\OmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Tipddy\OmsBundle\Entity\Otec;
use Tipddy\OmsBundle\Form\OtecType;

/**
 * Otec controller.
 *
 */
class OtecController extends Controller
{
    /**
     * Lists all Otec entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('TipddyOmsBundle:Otec')->findAll();

        return $this->render('TipddyOmsBundle:Otec:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Otec entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TipddyOmsBundle:Otec')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Otec entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TipddyOmsBundle:Otec:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Otec entity.
     *
     */
    public function newAction()
    {
        $entity = new Otec();
        $form   = $this->createForm(new OtecType(), $entity);

        return $this->render('TipddyOmsBundle:Otec:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Otec entity.
     *
     */
    public function createAction()
    {
        $entity  = new Otec();
        $request = $this->getRequest();
        $form    = $this->createForm(new OtecType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('otec_show', array('id' => $entity->getId())));
            
        }

        return $this->render('TipddyOmsBundle:Otec:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Otec entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TipddyOmsBundle:Otec')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Otec entity.');
        }

        $editForm = $this->createForm(new OtecType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TipddyOmsBundle:Otec:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Otec entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TipddyOmsBundle:Otec')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Otec entity.');
        }

        $editForm   = $this->createForm(new OtecType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('otec_edit', array('id' => $id)));
        }

        return $this->render('TipddyOmsBundle:Otec:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Otec entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('TipddyOmsBundle:Otec')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Otec entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('otec'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
