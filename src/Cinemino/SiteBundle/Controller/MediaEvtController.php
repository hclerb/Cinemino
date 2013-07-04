<?php

namespace Cinemino\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Cinemino\SiteBundle\Controller\MediaController;
use Cinemino\SiteBundle\Entity\MediaEvt;
use Cinemino\SiteBundle\Form\MediaEvtCreateType;
use Cinemino\SiteBundle\Form\MediaEvtType;

/**
 * Media controller.
 *
 */
class MediaEvtController extends MediaController
{
    public function indexAction()
    {
         
        $em = $this->getDoctrine()->getManager();
        $entitiesEvt = $em->getRepository('CineminoSiteBundle:MediaEvt')->findAlltrie();
     
        return $this->render('CineminoSiteBundle:MediaEvt:index.html.twig', array(
            'entitiesEvt' => $entitiesEvt
        ));
    }
    
    /**
     * Finds and displays a Media entity.
     *
     */
    public function showAction($id)
    {
                   
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:MediaEvt')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Media entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CineminoSiteBundle:MediaEvt:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView()
            ));
    }

    /**
     * Displays a form to create a new Media entity.
     *
     */
    public function newAction()
    {
        $entity = new MediaEvt();
        $form   = $this->createForm(new MediaEvtType('MediaEvt','mediacreateevt'), $entity);

        return $this->render('CineminoSiteBundle:MediaEvt:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Media entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new MediaEvt();
        $form = $this->createForm(new MediaEvtType('MediaEvt','mediacreateevt'), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $Enreg = $this->container->get('Cinemino_Site.enregistremedia');
            $Enreg->EnregistrementMedia($entity, "Evt", $this->container);
                        
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('mediaEvt'));
        }

        return $this->render('CineminoSiteBundle:MediaEvt:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Media entity.
     *
     */
    public function editAction($id)
    {
        global $dir_url;
        
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:MediaEvt')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Media entity.');
        }

        $editForm = $this->createForm(new MediaEvtType('MediaEvt','mediaevt'), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CineminoSiteBundle:MediaEvt:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView()
        ));
    }

    /**
     * Edits an existing Media entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:MediaEvt')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Media entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new MediaEvtType('MediaEvt','mediaevt'), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $Enreg = $this->container->get('Cinemino_Site.enregistremedia');
            $Enreg->EnregistrementMedia($entity, "Evt", $this->container);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('mediaEvt'));
        }

        return $this->render('CineminoSiteBundle:MediaEvt:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Media entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CineminoSiteBundle:MediaEvt')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Media entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('mediaEvt'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
