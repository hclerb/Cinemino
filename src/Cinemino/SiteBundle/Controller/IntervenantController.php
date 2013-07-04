<?php

namespace Cinemino\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cinemino\SiteBundle\Entity\Intervenant;
use Cinemino\SiteBundle\Entity\MediaIntervenant;
use Cinemino\SiteBundle\Form\IntervenantType;
use Cinemino\SiteBundle\Form\IntervenantCreateType;

/**
 * Intervenant controller.
 *
 */
class IntervenantController extends Controller
{
    /**
     * Lists all Intervenant entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CineminoSiteBundle:Intervenant')->findAll();

        return $this->render('CineminoSiteBundle::interlayout.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Intervenant entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $entities = $em->getRepository('CineminoSiteBundle:Intervenant')->findAll();
        $entity = $em->getRepository('CineminoSiteBundle:Intervenant')->find($id);
        
        //$evenements = $em->getRepository('CineminoSiteBundle:Evenement')->findByidIntervenant($id);
        // recup des évènements lié a l'intervenant

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Intervenant entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CineminoSiteBundle:Intervenant:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
            'entities' => $entities,
           // 'evenements' => $evenements
            )
                );
    }

    /**
     * Displays a form to create a new Intervenant entity.
     *
     */
    public function newAction()
    {
        $entity = new Intervenant();
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('CineminoSiteBundle:Intervenant')->findAll();
        $form   = $this->createForm(new IntervenantCreateType(), $entity);

        return $this->render('CineminoSiteBundle:Intervenant:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'entities' => $entities
        ));
    }

    /**
     * Creates a new Intervenant entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Intervenant();
        $form = $this->createForm(new IntervenantCreateType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $resize = $this->container->get('Cinemino_Site.resizeimg'); // appel du service qui redimensionne les images
            if($entity->getFilelogo()!=NULL){   
              $url = $entity->getFilelogo();
              $entity->setUrlLogo($resize->UploadPhoto($url,"Intervenant/logo/big",LgLogoIBig,HtLogoIBig)); 
              $resize->UploadPhoto($url,"Intervenant/logo/small",LgLogoISmall,HtLogoISmall);
            }
            if($entity->getFilephoto()!=NULL){   
              $url = $entity->getFilephoto();
              $entity->setUrlPhotoIntervenant($resize->UploadPhoto($url,"Intervenant/photos/big",LgPhotoIBig,HtPhotoIBig)); 
              $resize->UploadPhoto($url,"Intervenant/photos/small",LgPhotoISmall,HtPhotoISmall);
            }
            foreach($entity->getIdMedias() as $media)  
            {
              if ($media->getFile()!=NULL)
              { 
                $Enreg = $this->container->get('Cinemino_Site.enregistremedia');
                $Enreg->EnregistrementMedia($media, "Intervenant", $this->container); 
                $media->setIdInter($entity);
                $em->persist($media);
              } else $entity->removeIdMedia ($media);
            }
            
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('intervenant', array('id' => $entity->getId())));
        }

        return $this->render('CineminoSiteBundle:Intervenant:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Intervenant entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('CineminoSiteBundle:Intervenant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Intervenant entity.');
        }

        $editForm = $this->createForm(new IntervenantType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CineminoSiteBundle:Intervenant:edit.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Intervenant entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:Intervenant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Intervenant entity.');
        }

        $originalMedias = array();
    	foreach ($entity->getIdMedias() as $oldmedia) $originalMedias[] = $oldmedia;
        
        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new IntervenantType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $resize = $this->container->get('Cinemino_Site.resizeimg'); // appel du service qui redimensionne les images
            if($entity->getFilelogo()!=NULL){   
              $url = $entity->getFilelogo();
              $entity->setUrlLogo($resize->UploadPhoto($url,"Intervenant/logo/big",LgPhotoIBig,HtPhotoIBig)); 
              $resize->UploadPhoto($url,"Intervenant/logo/small",LgPhotoISmall,HtPhotoISmall);
            }
            if($entity->getFilephoto()!=NULL){   
              $url = $entity->getFilephoto();
              $entity->setUrlPhotoIntervenant($resize->UploadPhoto($url,"Intervenant/photos/big",LgPhotoIBig,HtPhotoIBig)); 
              $resize->UploadPhoto($url,"Intervenant/photos/small",LgPhotoISmall,HtPhotoISmall);
            }
            foreach($entity->getIdMedias() as $media)  
            {
              // Si le médias est toujours actifs on le supprime du tableau de nettoyage  
              foreach ($originalMedias as $key => $toDel) {
    		if ($toDel->getId() === $media->getId()) unset($originalMedias[$key]);
              }
              $Enreg = $this->container->get('Cinemino_Site.enregistremedia');
              $Enreg->EnregistrementMedia($media, "Intervenant", $this->container); 
              $media->setIdInter($entity);
              $em->persist($media);
            }
            
            // Supprime les médias qui ont été enlevés dans la mise oà jour
    	    foreach ($originalMedias as $media) {
              $em->remove($media);
    	    }
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('intervenant', array('id' => $id)));
        }

        return $this->render('CineminoSiteBundle:Intervenant:edit.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Intervenant entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CineminoSiteBundle:Intervenant')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Intervenant entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('intervenant'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
