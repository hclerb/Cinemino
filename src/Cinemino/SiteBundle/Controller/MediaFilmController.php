<?php

namespace Cinemino\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Cinemino\SiteBundle\Controller\MediaController;
use Cinemino\SiteBundle\Entity\MediaFilm;
use Cinemino\SiteBundle\Form\MediaFilmCreateType;
use Cinemino\SiteBundle\Form\MediaFilmType;

/**
 * Media controller.
 *
 */
class MediaFilmController extends MediaController
{
    public function indexAction()
    {
         
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('CineminoSiteBundle:MediaFilm')->findAlltrie();
     
        return $this->render('CineminoSiteBundle:MediaFilm:index.html.twig', array(
            'entities' => $entities
        ));
    }
    
    /**
     * Finds and displays a Media entity.
     *
     */
    public function showAction($id)
    {
                   
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:MediaFilm')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Media entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CineminoSiteBundle:MediaFilm:show.html.twig', array(
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
        $entity = new MediaFilm();
        $form   = $this->createForm(new MediaFilmCreateType('MediaFilm','mediacreatefilm'), $entity);

        return $this->render('CineminoSiteBundle:MediaFilm:new.html.twig', array(
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
        $entity  = new MediaFilm();
        $form = $this->createForm(new MediaFilmCreateType('MediaFilm','mediacreatefilm'), $entity);
        $form->bind($request);

        if ($form->isValid()) {
 
            $Enreg = $this->container->get('Cinemino_Site.enregistremedia');
            $Enreg->EnregistrementMedia($entity, "Film", $this->container);
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('mediaFilm'));
        }

        return $this->render('CineminoSiteBundle:MediaFilm:new.html.twig', array(
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

        $entity = $em->getRepository('CineminoSiteBundle:MediaFilm')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Media entity.');
        }

        $editForm = $this->createForm(new MediaFilmType('MediaFilm','mediafilm'), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CineminoSiteBundle:MediaFilm:edit.html.twig', array(
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

        $entity = $em->getRepository('CineminoSiteBundle:MediaFilm')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Media entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new MediaFilmType('MediaFilm','mediafilm'), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $Enreg = $this->container->get('Cinemino_Site.enregistremedia');
            $Enreg->EnregistrementMedia($entity, "Film", $this->container);   
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('mediaFilm'));
        }

        return $this->render('CineminoSiteBundle:MediaFilm:edit.html.twig', array(
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
            $entity = $em->getRepository('CineminoSiteBundle:MediaFilm')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Media entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('mediaFilm'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    
}
