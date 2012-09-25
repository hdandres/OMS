<?php

namespace Tipddy\OmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Tipddy\OmsBundle\Entity\LibroClase;
use Tipddy\OmsBundle\Form\LibroClaseType;

/**
 * LibroClase controller.
 *
 */
class LibroClaseController extends Controller
{
    /**
     * Lists all LibroClase entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('TipddyOmsBundle:LibroClase')->findAll();

        return $this->render('TipddyOmsBundle:LibroClase:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a LibroClase entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TipddyOmsBundle:LibroClase')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LibroClase entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TipddyOmsBundle:LibroClase:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new LibroClase entity.
     *
     */
    public function newAction()
    {
        $entity = new LibroClase();
        $form   = $this->createForm(new LibroClaseType(), $entity);

        return $this->render('TipddyOmsBundle:LibroClase:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new LibroClase entity.
     *
     */
    public function createAction()
    {
        $entity  = new LibroClase();
        $request = $this->getRequest();
        $form    = $this->createForm(new LibroClaseType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('classbook_show', array('id' => $entity->getId())));
            
        }

        return $this->render('TipddyOmsBundle:LibroClase:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing LibroClase entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TipddyOmsBundle:LibroClase')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LibroClase entity.');
        }

        $editForm = $this->createForm(new LibroClaseType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TipddyOmsBundle:LibroClase:edit.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing LibroClase entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TipddyOmsBundle:LibroClase')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LibroClase entity.');
        }

        $editForm   = $this->createForm(new LibroClaseType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('classbook_edit', array('id' => $id)));
        }

        return $this->render('TipddyOmsBundle:LibroClase:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a LibroClase entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('TipddyOmsBundle:LibroClase')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find LibroClase entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('classbook'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
