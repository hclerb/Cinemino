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
class MediaIntervenantController extends MediaController
{
    /**
     * Lists all Media entities.
     *
     */
    
      
    public function __construct()
    {
    }

    
    public function indexAction()
    {
         
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('CineminoSiteBundle:MediaFilm')->findAlltrie();
        $entitiesEvt = $em->getRepository('CineminoSiteBundle:MediaEvt')->findAlltrie();
     
        return $this->render('CineminoSiteBundle:Media:index.html.twig', array(
            'entities' => $entities,
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
            
           $resize = $this->container->get('Cinemino_Site.resizeimg'); // appel du service qui redimensionne les images
           if($entity->getFile()!=NULL){   
            $url = $entity->getFile();
            $dest="medias/Film/sons";           // par défaut on dit que c'est un son
            switch ($entity->getType()) {
                    case 'p':                       // C'est une phot, on la redimension et on l'upload
                             $entity->setUrl($resize->UploadPhoto($url,"Film/photos/big",LgPhotoBig,HtPhotoBig)); 
                             $resize->UploadPhoto($url,"Film/photos/small",LgPhotoSmall,HtPhotoSmall); 
                       break;
                    case 'v': $dest = "medias/Film/videos";
                    default :
                            $entity->setUrl($url->getClientOriginalName());      // On stocke le nom et on upload
                            $url->move($dest,$url->getClientOriginalName());
                 }
            } 
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('media_show', array('id' => $entity->getId())));
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
            $resize = $this->container->get('Cinemino_Site.resizeimg'); // appel du service qui redimensionne les images
            if ($entity->getFile()!=NULL)
              { 
                $url = $entity->getFile();
                $dest="medias/Film/sons";           // par défaut on dit que c'est un son
                switch ($entity->getType()) {
                    case 'p':                       // C'est une phot, on la redimension et on l'upload
                             $entity->setUrl($resize->UploadPhoto($url,"Film/photos/big",LgPhotoBig,HtPhotoBig)); 
                             $resize->UploadPhoto($url,"Film/photos/small",LgPhotoSmall,HtPhotoSmall); 
                       break;
                    case 'v': $dest = "medias/Film/videos";
                    default :
                            $entity->setUrl($url->getClientOriginalName());      // On stocke le nom et on upload
                            $url->move($dest,$url->getClientOriginalName());
                 }
              }
            
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
