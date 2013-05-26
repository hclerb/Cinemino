<?php

namespace Cinemino\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cinemino\SiteBundle\Entity\Film;
use Cinemino\SiteBundle\Entity\ProgrammeCourts;
use Cinemino\SiteBundle\Form\ProgrammeCourtsType;
use Cinemino\SiteBundle\Form\ProgrammeCourtsCreateType;

/**
 * ProgrammeCourts controller.
 *
 */
class ProgrammeCourtsController extends Controller
{
    /**
     * Lists all ProgrammeCourts entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CineminoSiteBundle:ProgrammeCourts')->findAll();

        return $this->render('CineminoSiteBundle:ProgrammeCourts:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a ProgrammeCourts entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:ProgrammeCourts')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ProgrammeCourts entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CineminoSiteBundle:ProgrammeCourts:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new ProgrammeCourts entity.
     *
     */
    public function newAction()
    {
        $entity = new ProgrammeCourts();
        $entity->setDuree(new \DateTime("1:30"));
        $form   = $this->createForm(new ProgrammeCourtsCreateType(), $entity);

        return $this->render('CineminoSiteBundle:ProgrammeCourts:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new ProgrammeCourts entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new ProgrammeCourts();
        $form = $this->createForm(new ProgrammeCourtsCreateType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
           $em = $this->getDoctrine()->getManager(); 
           $entity->setDuree($entity->getDuree()->format('H'). ':' . $entity->getDuree()->format('i'));
           $resize = $this->container->get('Cinemino_Site.resizeimg'); // appel du service qui redimensionne les images  
           if($entity->getFile()!=NULL){      
            $url = $entity->getFile();
            $entity->setAffiche($resize->UploadPhoto($url,"Film/affiches/big",LgAfficheBig,HtAfficheBig)); 
            $resize->UploadPhoto($url,"Film/affiches/small",LgAfficheSmall,HtAfficheSmall);
           }
           foreach($entity->getIdMedia() as $media)  
            {
              if ($media->getUrl()!=NULL)
              { 
                $url = $media->getUrl(); 
                $type = $media->getType();
                if ($type== 'p')
                  {
                   $media->setUrl($resize->UploadPhoto($url,"Film/photos/big",LgPhotoBig,HtPhotoBig)); 
                   $resize->UploadPhoto($url,"Film/photos/small",LgPhotoSmall,HtPhotoSmall); 
                  }
              else
                 {
                  if ($type== 'v')$dest = "medias/Film/videos";
                    else $dest="medias/Film/sons";
                  $media->setUrl($url->getClientOriginalName());
                  $url->move($dest,$url->getClientOriginalName());
                 }
                $media->setIdFilm($entity);
                $em->persist($media);
              }else $entity->removeIdMedia($media);
            }
            $em->persist($entity);
            // On met les liens entre les courts et le programme de courts
            foreach($entity->getLescourts() as $court)  
            {
                $court->setProgCourts($entity);
                $em->persist($court);
            }
            
            $em->flush();

            return $this->redirect($this->generateUrl('programmecourts_show', array('id' => $entity->getId())));
        }

        return $this->render('CineminoSiteBundle:ProgrammeCourts:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ProgrammeCourts entity.
     *
     */
    public function editAction(\Cinemino\SiteBundle\Entity\ProgrammeCourts $leprogramme)
    {
       
        // on sauvegarde en cas de mis à jour les courts déjà sélectionné
        $leprogramme->setDuree(new \DateTime($leprogramme->getDuree()));
        $editForm = $this->createForm(new ProgrammeCourtsType(), $leprogramme);
        $deleteForm = $this->createDeleteForm($leprogramme->getId());

        return $this->render('CineminoSiteBundle:ProgrammeCourts:edit.html.twig', array(
            'entity'      => $leprogramme,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing ProgrammeCourts entity.
     *
     */
    public function updateAction(Request $request, \Cinemino\SiteBundle\Entity\ProgrammeCourts $leprogramme)
    {
        $em = $this->getDoctrine()->getManager();

        $lescourts = $entities = $em->getRepository('CineminoSiteBundle:Film')->findByprogCourts($leprogramme->getId());
        $leprogramme->setDuree(new \DateTime($leprogramme->getDuree()));
        $deleteForm = $this->createDeleteForm($leprogramme->getId());
        $editForm = $this->createForm(new ProgrammeCourtsType(), $leprogramme);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $leprogramme->setDuree($leprogramme->getDuree()->format('H'). ':' . $leprogramme->getDuree()->format('i'));
            $resize = $this->container->get('Cinemino_Site.resizeimg'); // appel du service qui redimensionne les images  
            if ($leprogramme->getFile()!=NULL) 
            {
              $url = $leprogramme->getFile();
              $leprogramme->setAffiche($resize->UploadPhoto($url,"Film/affiches/big",LgAfficheBig,HtAfficheBig)); 
              $resize->UploadPhoto($url,"Film/affiches/small",LgAfficheSmall,HtAfficheSmall);
            }
            foreach($leprogramme->getIdMedia() as $media)  
            {

              if ($media->getFile()!=NULL)
              { 
                $url = $media->getFile();
                $dest="medias/Film/sons";           // par défaut on dit que c'est un son
                switch ($media->getType()) {
                    case 'p':                       // C'est une phot, on la redimension et on l'upload
                             $media->setUrl($resize->UploadPhoto($url,"Film/photos/big",LgPhotoBig,HtPhotoBig)); 
                             $resize->UploadPhoto($url,"Film/photos/small",LgPhotoSmall,HtPhotoSmall); 
                       break;
                    case 'v': $dest = "medias/Film/videos";
                    default :
                            $media->setUrl($url->getClientOriginalName());      // On stocke le nom et on upload
                            $url->move($dest,$url->getClientOriginalName());
                 }
                $media->setIdFilm($leprogramme);
                $em->persist($media);
              }
            }
            
            $em->persist($leprogramme);
            // on enlève le lien des films avant la mise à jour
            foreach($lescourts as $court)  
            {
                $court->setProgCourts(NULL);
                $em->persist($court);
            }
            // On met les liens entre les courts et le programme de courts
            foreach($leprogramme->getLescourts() as $court)  
            {
                $court->setProgCourts($leprogramme);
                $em->persist($court);
            }            
         
            $em->flush();

            return $this->redirect($this->generateUrl('programmecourts_show', array('id' => $leprogramme->getId())));
        }

        return $this->render('CineminoSiteBundle:ProgrammeCourts:edit.html.twig', array(
            'entity'      => $leprogramme,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ProgrammeCourts entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CineminoSiteBundle:ProgrammeCourts')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ProgrammeCourts entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('programmecourts'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
