<?php

namespace Cinemino\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Cinemino\SiteBundle\Controller\MediaController;
use Cinemino\SiteBundle\Entity\MediaIntervenant;
use Cinemino\SiteBundle\Form\MediaIntervenantCreateType;
use Cinemino\SiteBundle\Form\MediaIntervenantType;

/**
 * Media controller.
 *
 */
class MediaIntervenantController extends MediaController
{
    
    public function indexAction()
    {
         
        $em = $this->getDoctrine()->getManager();
        $entitiesInter = $em->getRepository('CineminoSiteBundle:MediaIntervenant')->findAlltrie();
     
        return $this->render('CineminoSiteBundle:MediaIntervenant:index.html.twig', array(
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

        $entity = $em->getRepository('CineminoSiteBundle:MediaIntervenant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Media entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CineminoSiteBundle:MediaIntervenant:show.html.twig', array(
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
        $entity = new MediaIntervenant();
        $form   = $this->createForm(new MediaIntervenantType('MediaIntervenant','mediaintervenant'), $entity);

        return $this->render('CineminoSiteBundle:MediaIntervenant:new.html.twig', array(
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
        $entity  = new MediaIntervenant();
        $form = $this->createForm(new MediaIntervenantType('MediaIntervenant','mediaintervenant'), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            
           $resize = $this->container->get('Cinemino_Site.resizeimg'); // appel du service qui redimensionne les images
           if($entity->getFile()!=NULL){   
            $url = $entity->getFile();
            $dest="medias/Intervenant/sons";           // par défaut on dit que c'est un son
            switch ($entity->getType()) {
                    case 'p':                       // C'est une phot, on la redimension et on l'upload
                             $entity->setUrl($resize->UploadPhoto($url,"Intervenant/photos/big",LgPhotoMBig,HtPhotoMBig)); 
                             $resize->UploadPhoto($url,"Intervenant/photos/small",LgPhotoMSmall,HtPhotoMSmall); 
                       break;
                    case 'v': $dest = "medias/Intervenant/videos";
                    default :
                            $entity->setUrl($url->getClientOriginalName());      // On stocke le nom et on upload
                            $url->move($dest,$url->getClientOriginalName());
                 }
            } 
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('mediaIntervenant'));
        }

        return $this->render('CineminoSiteBundle:MediaIntervenant:new.html.twig', array(
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

        $entity = $em->getRepository('CineminoSiteBundle:MediaIntervenant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Media entity.');
        }

        $editForm = $this->createForm(new MediaIntervenantType('MediaIntervenant','mediaintervenant'), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CineminoSiteBundle:MediaIntervenant:edit.html.twig', array(
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

        $entity = $em->getRepository('CineminoSiteBundle:MediaIntervenant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Media entity.');
        }
        
        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new MediaIntervenantType('MediaIntervenant','mediaintervenant'), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $resize = $this->container->get('Cinemino_Site.resizeimg'); // appel du service qui redimensionne les images
            if ($entity->getFile()!=NULL)
              { 
                $url = $entity->getFile();
                $dest="medias/Intervenant/sons";           // par défaut on dit que c'est un son
                switch ($entity->getType()) {
                    case 'p':                       // C'est une phot, on la redimension et on l'upload
                             $entity->setUrl($resize->UploadPhoto($url,"Intervenant/photos/big",LgPhotoMBig,HtPhotoMBig)); 
                             $resize->UploadPhoto($url,"Intervenant/photos/small",LgPhotoMSmall,HtPhotoMSmall); 
                       break;
                    case 'v': $dest = "medias/Intervenant/videos";
                    default :
                            $entity->setUrl($url->getClientOriginalName());      // On stocke le nom et on upload
                            $url->move($dest,$url->getClientOriginalName());
                 }
              }
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('mediaIntervenant'));
        }

        return $this->render('CineminoSiteBundle:MediaIntervenant:edit.html.twig', array(
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
            $entity = $em->getRepository('CineminoSiteBundle:MediaIntervenant')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Media entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('mediaIntervenant'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
