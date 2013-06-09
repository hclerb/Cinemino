<?php

namespace Cinemino\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cinemino\SiteBundle\Entity\NewsLetter;
use Cinemino\SiteBundle\Form\NewsLetterType;

/**
 * NewsLetter controller.
 *
 */
class NewsLetterController extends Controller
{
    /**
     * Lists all NewsLetter entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CineminoSiteBundle:NewsLetter')->findAll();

        return $this->render('CineminoSiteBundle:NewsLetter:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a NewsLetter entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:NewsLetter')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find NewsLetter entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CineminoSiteBundle:NewsLetter:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new NewsLetter entity.
     *
     */
    public function newAction()
    {
        $entity = new NewsLetter();
        $form   = $this->createForm(new NewsLetterType(), $entity);

        return $this->render('CineminoSiteBundle:NewsLetter:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new NewsLetter entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new NewsLetter();
        $form = $this->createForm(new NewsLetterType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('newsletter_show', array('id' => $entity->getId())));
        }

        return $this->render('CineminoSiteBundle:NewsLetter:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing NewsLetter entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:NewsLetter')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find NewsLetter entity.');
        }

        $editForm = $this->createForm(new NewsLetterType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CineminoSiteBundle:NewsLetter:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing NewsLetter entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:NewsLetter')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find NewsLetter entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new NewsLetterType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('newsletter_edit', array('id' => $id)));
        }

        return $this->render('CineminoSiteBundle:NewsLetter:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a NewsLetter entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CineminoSiteBundle:NewsLetter')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find NewsLetter entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('newsletter'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
