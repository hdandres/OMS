<?php

namespace Tipddy\OmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Tipddy\OmsBundle\Entity\PersonalExterno;
use Tipddy\OmsBundle\Form\PersonalExternoType;

/**
 * PersonalExterno controller.
 *
 */
class PersonalExternoController extends Controller
{
    /**
     * Lists all PersonalExterno entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('TipddyOmsBundle:PersonalExterno')->findAll();

        return $this->render('TipddyOmsBundle:PersonalExterno:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a PersonalExterno entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TipddyOmsBundle:PersonalExterno')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PersonalExterno entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TipddyOmsBundle:PersonalExterno:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new PersonalExterno entity.
     *
     */
    public function newAction()
    {
        $entity = new PersonalExterno();
        $form   = $this->createForm(new PersonalExternoType(), $entity);

        return $this->render('TipddyOmsBundle:PersonalExterno:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new PersonalExterno entity.
     *
     */
    public function createAction()
    {
        $entity  = new PersonalExterno();
        $request = $this->getRequest();
        $form    = $this->createForm(new PersonalExternoType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('outsidestaff_show', array('id' => $entity->getId())));
            
        }

        return $this->render('TipddyOmsBundle:PersonalExterno:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing PersonalExterno entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TipddyOmsBundle:PersonalExterno')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PersonalExterno entity.');
        }

        $editForm = $this->createForm(new PersonalExternoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TipddyOmsBundle:PersonalExterno:edit.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing PersonalExterno entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TipddyOmsBundle:PersonalExterno')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PersonalExterno entity.');
        }

        $editForm   = $this->createForm(new PersonalExternoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('outsidestaff_edit', array('id' => $id)));
        }

        return $this->render('TipddyOmsBundle:PersonalExterno:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a PersonalExterno entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('TipddyOmsBundle:PersonalExterno')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find PersonalExterno entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('outsidestaff'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
