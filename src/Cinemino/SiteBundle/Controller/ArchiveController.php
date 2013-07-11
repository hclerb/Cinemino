<?php

namespace Cinemino\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cinemino\SiteBundle\Entity\Archive;
use Cinemino\SiteBundle\Form\ArchiveType;
use Cinemino\SiteBundle\Form\ArchiveCreateType;

/**
 * Archive controller.
 *
 */
class ArchiveController extends Controller
{
    /**
     * Lists all Archive entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CineminoSiteBundle:Archive')->findAll();

        return $this->render('CineminoSiteBundle:Archive:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Archive entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:Archive')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Archive entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CineminoSiteBundle:Archive:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Archive entity.
     *
     */
    public function newAction()
    {
        $entity = new Archive();
        $form   = $this->createForm(new ArchiveCreateType(), $entity);

        return $this->render('CineminoSiteBundle:Archive:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Archive entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Archive();
        $form = $this->createForm(new ArchiveCreateType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $resize = $this->container->get('Cinemino_Site.resizeimg'); // appel du service qui redimensionne les images
            if($entity->getFileaffiche()!=NULL){   
              $url = $entity->getFileaffiche();
              $entity->setAffiche($resize->UploadPhoto($url,"Archive/affiches/big",LgAfficheABig,HtAfficheABig)); 
              $resize->UploadPhoto($url,"Archive/affiches/small",LgAfficheASmall,HtAfficheASmall);
              $url->move("medias/Archive/affiches/brut",$url->getClientOriginalName());
            }
            if($entity->getFileprogramme()!=NULL){   
              $url = $entity->getFileprogramme();
              $entity->setProgramme($url->getClientOriginalName()); 
              $url->move("medias/Archive/programmes",$url->getClientOriginalName());
            }
            foreach($entity->getIdMedias() as $media)  
            {
              if ($media->getFile()!=NULL)
              { 
                $Enreg = $this->container->get('Cinemino_Site.enregistremedia');
                $Enreg->EnregistrementMedia($media, "Archive", $this->container); 
                $media->setIdArchive($entity);
                $em->persist($media);
              } else $entity->removeIdMedia ($media);
            }
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('archive'));
        }

        return $this->render('CineminoSiteBundle:Archive:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Archive entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:Archive')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Archive entity.');
        }

        $editForm = $this->createForm(new ArchiveType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CineminoSiteBundle:Archive:edit.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Archive entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:Archive')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Archive entity.');
        }

        $originalMedias = array();
    	foreach ($entity->getIdMedias() as $oldmedia) $originalMedias[] = $oldmedia;
        
        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ArchiveType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $resize = $this->container->get('Cinemino_Site.resizeimg'); // appel du service qui redimensionne les images
            if($entity->getFileaffiche()!=NULL){   
              $url = $entity->getFileaffiche();
              $entity->setAffiche($resize->UploadPhoto($url,"Archive/affiches/big",LgAfficheABig,HtAfficheABig)); 
              $resize->UploadPhoto($url,"Archive/affiches/small",LgAfficheASmall,HtAfficheASmall);
              $url->move("medias/Archive/affiches/brut",$url->getClientOriginalName());
            }
            if($entity->getFileprogramme()!=NULL){   
              $url = $entity->getFileprogramme();
              $entity->setProgramme($url->getClientOriginalName()); 
              $url->move("medias/Archive/programmes",$url->getClientOriginalName());
            }
            foreach($entity->getIdMedias() as $media)  
            {
              // Si le médias est toujours actifs on le supprime du tableau de nettoyage  
              foreach ($originalMedias as $key => $toDel) {
    		if ($toDel->getId() === $media->getId()) unset($originalMedias[$key]);
              }
              $Enreg = $this->container->get('Cinemino_Site.enregistremedia');
              $Enreg->EnregistrementMedia($media, "Archive", $this->container); 
              $media->setIdArchive($entity);
              $em->persist($media);
            }
            
            // Supprime les médias qui ont été enlevés dans la mise oà jour
    	    foreach ($originalMedias as $media) {
              $em->remove($media);
    	    }            
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('archive'));
        }

        return $this->render('CineminoSiteBundle:Archive:edit.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Archive entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CineminoSiteBundle:Archive')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Archive entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('archive'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
