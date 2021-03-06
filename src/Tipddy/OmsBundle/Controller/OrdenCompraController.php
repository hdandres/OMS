<?php

namespace Tipddy\OmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Tipddy\OmsBundle\Entity\OrdenCompra;
use Tipddy\OmsBundle\Form\OrdenCompraType;

/**
 * OrdenCompra controller.
 *
 */
class OrdenCompraController extends Controller
{
    /**
     * Lists all OrdenCompra entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('TipddyOmsBundle:OrdenCompra')->findAll();

        return $this->render('TipddyOmsBundle:OrdenCompra:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a OrdenCompra entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TipddyOmsBundle:OrdenCompra')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find OrdenCompra entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TipddyOmsBundle:OrdenCompra:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new OrdenCompra entity.
     *
     */
    public function newAction()
    {
        $entity = new OrdenCompra();
        $form   = $this->createForm(new OrdenCompraType(), $entity);

        return $this->render('TipddyOmsBundle:OrdenCompra:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new OrdenCompra entity.
     *
     */
    public function createAction()
    {
        $entity  = new OrdenCompra();
        $request = $this->getRequest();
        $form    = $this->createForm(new OrdenCompraType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('purchaseorder_show', array('id' => $entity->getId())));
            
        }

        return $this->render('TipddyOmsBundle:OrdenCompra:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing OrdenCompra entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TipddyOmsBundle:OrdenCompra')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find OrdenCompra entity.');
        }

        $editForm = $this->createForm(new OrdenCompraType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TipddyOmsBundle:OrdenCompra:edit.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing OrdenCompra entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TipddyOmsBundle:OrdenCompra')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find OrdenCompra entity.');
        }

        $editForm   = $this->createForm(new OrdenCompraType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('purchaseorder_edit', array('id' => $id)));
        }

        return $this->render('TipddyOmsBundle:OrdenCompra:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a OrdenCompra entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('TipddyOmsBundle:OrdenCompra')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find OrdenCompra entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('purchaseorder'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
