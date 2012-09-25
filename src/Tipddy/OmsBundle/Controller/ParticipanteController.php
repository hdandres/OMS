<?php

namespace Tipddy\OmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Tipddy\OmsBundle\Entity\Participante;
use Tipddy\OmsBundle\Form\ParticipanteType;

/**
 * Participante controller.
 *
 */
class ParticipanteController extends Controller
{
    /**
     * Lists all Participante entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('TipddyOmsBundle:Participante')->findAll();

        return $this->render('TipddyOmsBundle:Participante:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Participante entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TipddyOmsBundle:Participante')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Participante entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TipddyOmsBundle:Participante:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Participante entity.
     *
     */
    public function newAction()
    {
        $entity = new Participante();
        $form   = $this->createForm(new ParticipanteType(), $entity);

        return $this->render('TipddyOmsBundle:Participante:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Participante entity.
     *
     */
    public function createAction()
    {
        $entity  = new Participante();
        $request = $this->getRequest();
        $form    = $this->createForm(new ParticipanteType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('participant_show', array('id' => $entity->getId())));
            
        }

        return $this->render('TipddyOmsBundle:Participante:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Participante entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TipddyOmsBundle:Participante')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Participante entity.');
        }

        $editForm = $this->createForm(new ParticipanteType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TipddyOmsBundle:Participante:edit.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Participante entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TipddyOmsBundle:Participante')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Participante entity.');
        }

        $editForm   = $this->createForm(new ParticipanteType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('participant_edit', array('id' => $id)));
        }

        return $this->render('TipddyOmsBundle:Participante:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Participante entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('TipddyOmsBundle:Participante')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Participante entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('participant'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
