<?php

namespace Cinemino\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cinemino\SiteBundle\Entity\MediaFilm;
use Cinemino\SiteBundle\Form\MediaFilmCreateType;
use Cinemino\SiteBundle\Form\MediaFilmType;

/**
 * Media controller.
 *
 */
class MediaController extends Controller
{
    /**
     * Lists all Media entities.
     *
     */
    
    public function indexAction()
    {
         
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('CineminoSiteBundle:MediaFilm')->findAlltrie();
        $entitiesEvt = $em->getRepository('CineminoSiteBundle:MediaEvt')->findAlltrie();
        $entitiesIn = $em->getRepository('CineminoSiteBundle:MediaIn')->findAll();
        $entitiesInter = $em->getRepository('CineminoSiteBundle:MediaIntervenant')->findAll();
     
        return $this->render('CineminoSiteBundle:Media:index.html.twig', array(
            'entities' => $entities,
            'entitiesEvt' => $entitiesEvt,
            'entitiesIn' => $entitiesIn,
            'entitiesInter' => $entitiesInter
        ));
    }

    /**
     * Finds and displays a Media entity.
     *
     */
    public function showAction($id)
    {
                   
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:Media')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Media entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CineminoSiteBundle:Media:show.html.twig', array(
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
        $form   = $this->createForm(new MediaFilmCreateType(), $entity);

        return $this->render('CineminoSiteBundle:Media:new.html.twig', array(
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
        $form = $this->createForm(new MediaFilmCreateType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            
           $this->EnregistrementMedia($entity, "Film"); 
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('media'));
        }

        return $this->render('CineminoSiteBundle:Media:new.html.twig', array(
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

        $editForm = $this->createForm(new MediaFilmType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CineminoSiteBundle:Media:edit.html.twig', array(
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
        $editForm = $this->createForm(new MediaFilmType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $this->EnregistrementMedia($entity, "Film");
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('media', array('id' => $id)));
        }

        return $this->render('CineminoSiteBundle:Media:edit.html.twig', array(
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
            $entity = $em->getRepository('CineminoSiteBundle:Media')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Media entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('media'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    
}
    