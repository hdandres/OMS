<?php

namespace Tipddy\OmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Tipddy\OmsBundle\Entity\MaterialCurso;
use Tipddy\OmsBundle\Form\MaterialCursoType;

/**
 * MaterialCurso controller.
 *
 */
class MaterialCursoController extends Controller
{
    /**
     * Lists all MaterialCurso entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('TipddyOmsBundle:MaterialCurso')->findAll();

        return $this->render('TipddyOmsBundle:MaterialCurso:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a MaterialCurso entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TipddyOmsBundle:MaterialCurso')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MaterialCurso entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TipddyOmsBundle:MaterialCurso:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new MaterialCurso entity.
     *
     */
    public function newAction()
    {
        $entity = new MaterialCurso();
        $form   = $this->createForm(new MaterialCursoType(), $entity);

        return $this->render('TipddyOmsBundle:MaterialCurso:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new MaterialCurso entity.
     *
     */
    public function createAction()
    {
        $entity  = new MaterialCurso();
        $request = $this->getRequest();
        $form    = $this->createForm(new MaterialCursoType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('coursematerial_show', array('id' => $entity->getId())));
            
        }

        return $this->render('TipddyOmsBundle:MaterialCurso:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing MaterialCurso entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TipddyOmsBundle:MaterialCurso')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MaterialCurso entity.');
        }

        $editForm = $this->createForm(new MaterialCursoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TipddyOmsBundle:MaterialCurso:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing MaterialCurso entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TipddyOmsBundle:MaterialCurso')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MaterialCurso entity.');
        }

        $editForm   = $this->createForm(new MaterialCursoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('coursematerial_edit', array('id' => $id)));
        }

        return $this->render('TipddyOmsBundle:MaterialCurso:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a MaterialCurso entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('TipddyOmsBundle:MaterialCurso')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find MaterialCurso entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('coursematerial'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
