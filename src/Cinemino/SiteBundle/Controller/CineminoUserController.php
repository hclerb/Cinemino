<?php

namespace Cinemino\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cinemino\SiteBundle\Entity\CineminoUser;
use Cinemino\SiteBundle\Form\CineminoUserType;

/**
 * CineminoUser controller.
 *
 */
class CineminoUserController extends Controller
{
    /**
     * Lists all CineminoUser entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CineminoSiteBundle:CineminoUser')->findAll();

        return $this->render('CineminoSiteBundle:CineminoUser:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a CineminoUser entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:CineminoUser')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CineminoUser entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CineminoSiteBundle:CineminoUser:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new CineminoUser entity.
     *
     */
    public function newAction()
    {
        $entity = new CineminoUser();
        $form   = $this->createForm(new CineminoUserType(), $entity);

        return $this->render('CineminoSiteBundle:CineminoUser:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new CineminoUser entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new CineminoUser();
        $form = $this->createForm(new CineminoUserType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cineminouser_show', array('id' => $entity->getId())));
        }

        return $this->render('CineminoSiteBundle:CineminoUser:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing CineminoUser entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:CineminoUser')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CineminoUser entity.');
        }

        $editForm = $this->createForm(new CineminoUserType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CineminoSiteBundle:CineminoUser:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing CineminoUser entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:CineminoUser')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CineminoUser entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new CineminoUserType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cineminouser_edit', array('id' => $id)));
        }

        return $this->render('CineminoSiteBundle:CineminoUser:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a CineminoUser entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CineminoSiteBundle:CineminoUser')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find CineminoUser entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cineminouser'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
