<?php

namespace Cinemino\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cinemino\SiteBundle\Entity\Evenementassocie;
use Cinemino\SiteBundle\Form\EvenementassocieType;

/**
 * Evenementassocie controller.
 *
 */
class EvenementassocieController extends Controller
{
    /**
     * Lists all Evenementassocie entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entitiesAss = $em->getRepository('CineminoSiteBundle:Evenementassocie')->findAll();
        
        return $this->render('CineminoSiteBundle:EvenementAssocie:index.html.twig', array(
            'entitiesAss' => $entitiesAss,
        ));
    }

    /**
     * Finds and displays a Evenementassocie entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:Evenementassocie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Evenementassocie entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CineminoSiteBundle:Evenementassocie:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Evenementassocie entity.
     *
     */
    public function newAction()
    {
        $entity = new Evenementassocie();
        $form   = $this->createForm(new EvenementassocieType(), $entity);

        return $this->render('CineminoSiteBundle:Evenementassocie:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Evenementassocie entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new EvenementAssocie();
        $form = $this->createForm(new EvenementAssocieType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $resize = $this->container->get('Cinemino_Site.resizeimg'); // appel du service qui redimensionne les images
            $em->persist($entity);
            foreach($entity->getIdMedias() as $media)  
            {
              if ($media->getFile()!=NULL)
              { 
                $url = $media->getFile();
                $dest="medias/Evt/sons";           // par défaut on dit que c'est un son
                switch ($media->getType()) {
                    case 'p':                       // C'est une phot, on la redimension et on l'upload
                             $media->setUrl($resize->UploadPhoto($url,"Evt/photos/big",LgPhotoMBig,HtPhotoMBig)); 
                             $resize->UploadPhoto($url,"Evt/photos/small",LgPhotoMSmall,HtPhotoMSmall); 
                       break;
                    case 'v': $dest = "medias/Evt/videos";
                    default :
                            $media->setUrl($url->getClientOriginalName());      // On stocke le nom et on upload
                            $url->move($dest,$url->getClientOriginalName());
                 }
                $media->setIdEvt($entity);
                $em->persist($media);
              } else $entity->removeIdMedia ($media);
            }
            $em->flush();

            return $this->redirect($this->generateUrl('evenementassocie', array('id' => $entity->getId())));
        }

        return $this->render('CineminoSiteBundle:Evenementassocie:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Evenementassocie entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:Evenementassocie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Evenementassocie entity.');
        }

        $editForm = $this->createForm(new EvenementAssocieType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CineminoSiteBundle:Evenementassocie:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Evenementassocie entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:Evenementassocie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Evenementassocie entity.');
        }
        $lesoldintervenants = array();  	
    	foreach ($entity->getIdIntervenants() as $oldinter) $lesoldintervenants[] = $oldinter;
        
        $originalMedias = array();
    	foreach ($entity->getIdMedias() as $oldmedia) $originalMedias[] = $oldmedia;

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new EvenementassocieType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
         $resize = $this->container->get('Cinemino_Site.resizeimg'); // appel du service qui redimensionne les images
         
         // On s'occupe des intervenants
         foreach($entity->getIdIntervenants() as $ent)  
            {
              // Si le médias est toujours actifs on le supprime du tableau de nettoyage  
              $pasla=true;
              foreach ($lesoldintervenants as $key => $toDel) {
    		if ($toDel->getId() === $ent->getId()) 
                {  
                  unset($lesoldintervenants[$key]);
                  $pasla=false;
                }
              }
              if ($pasla)           // intervenant nouveau ajouté
              {   
               $entity->addIdIntervenant($ent);  
               $em->persist($ent);
              }
            }
                        // Supprime les médias qui ont été enlevés dans la mise oà jour
    	    foreach ($lesoldintervenants as $ent) {
              $entity->removeIdIntervenant($ent);
              $em->persist($ent);
    	    }
            
            // On s'occupe des médias
            foreach($entity->getIdMedias() as $media)  
            {
              // Si le médias est toujours actifs on le supprime du tableau de nettoyage  
              foreach ($originalMedias as $key => $toDel) {
    		if ($toDel->getId() === $media->getId()) unset($originalMedias[$key]);
              }
              if ($media->getFile()!=NULL)
              { 
                $url = $media->getFile();
                $dest="medias/Evt/sons";           // par défaut on dit que c'est un son
                switch ($media->getType()) {
                    case 'p':                       // C'est une phot, on la redimension et on l'upload
                             $media->setUrl($resize->UploadPhoto($url,"Evt/photos/big",LgPhotoMBig,HtPhotoMBig)); 
                             $resize->UploadPhoto($url,"Evt/photos/small",LgPhotoMSmall,HtPhotoMSmall); 
                       break;
                    case 'v': $dest = "medias/Evt/videos";
                    default :
                            $media->setUrl($url->getClientOriginalName());      // On stocke le nom et on upload
                            $url->move($dest,$url->getClientOriginalName());
                 }
              }
              $media->setIdEvt($entity);
              $em->persist($media);
            }
            
            // Supprime les médias qui ont été enlevés dans la mise oà jour
    	    foreach ($originalMedias as $media) {
              $em->remove($media);
    	    }
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('evenementassocie', array('id' => $id)));
        }

        return $this->render('CineminoSiteBundle:Evenementassocie:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Evenementassocie entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CineminoSiteBundle:Evenementassocie')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Evenementassocie entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('evenementassocie'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
