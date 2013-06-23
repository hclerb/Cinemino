<?php

namespace Cinemino\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cinemino\SiteBundle\Entity\Document;
use Cinemino\SiteBundle\Form\DocumentCreateType;
use Cinemino\SiteBundle\Form\DocumentType;

/**
 * Document controller.
 *
 */
class DocumentController extends Controller
{
    /**
     * Lists all Document entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CineminoSiteBundle:Document')->findAll();

        return $this->render('CineminoSiteBundle:Document:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Document entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:Document')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Document entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CineminoSiteBundle:Document:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Document entity.
     *
     */
    public function newAction()
    {
        $entity = new Document();
        $form   = $this->createForm(new DocumentCreateType(), $entity);

        return $this->render('CineminoSiteBundle:Document:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Document entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Document();
        $form = $this->createForm(new DocumentCreateType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            if($entity->getFilefichier()!=NULL){   
            $url = $entity->getFilefichier();
            $entity->setUrlFichier($url->getClientOriginalName());      // On stocke le nom et on upload
            $url->move("Documents",$url->getClientOriginalName());
            $em->persist($entity);
            $em->flush();
            } 
            return $this->redirect($this->generateUrl('document', array('id' => $entity->getId())));
        }

        return $this->render('CineminoSiteBundle:Document:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Document entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:Document')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Document entity.');
        }

        $editForm = $this->createForm(new DocumentType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CineminoSiteBundle:Document:edit.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Document entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:Document')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Document entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new DocumentType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            if($entity->getFilefichier()!=NULL){   
             $url = $entity->getFilefichier();
             $entity->setUrlFichier($url->getClientOriginalName());      // On stocke le nom et on upload
             $url->move("Documents",$url->getClientOriginalName());
            } 
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('document', array('id' => $id)));
        }

        return $this->render('CineminoSiteBundle:Document:edit.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Document entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CineminoSiteBundle:Document')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Document entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('document'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
