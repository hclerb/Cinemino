<?php

namespace Cinemino\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use Cinemino\SiteBundle\Entity\Cinema;
use Cinemino\SiteBundle\Form\CinemaType;
use Cinemino\SiteBundle\Form\CinemaCreateType;


/**
 * Cinema controller.
 *
 */
class CinemaController extends Controller
{
    /**
     * Lists all Cinema entities.
     *
     */
    
    
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();

        if($this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')){ 
        $entities = $em->getRepository('CineminoSiteBundle:Cinema')->findAll();}
        else{
        $entities = $em->getRepository('CineminoSiteBundle:Cinema')->findByidCompte($user->getId());}

        return $this->render('CineminoSiteBundle:Cinema:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Cinema entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $entity = $em->getRepository('CineminoSiteBundle:Cinema')->find($id);
        
               
    if(($entity->getIdCompte()->getId() != $this->get('security.context')->getToken()->getUser()->getId())
            and !($this->get('security.context')->isGranted('ROLE_ADMIN'))  )
    {
        throw new AccessDeniedException("Vous n'avez pas accès à ce cinema (.");
    }

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cinema entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CineminoSiteBundle:Cinema:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Cinema entity.
     *
     */
    public function newAction()
    {
        
        $entity = new Cinema();
        $form   = $this->createForm(new CinemaCreateType(), $entity);

        return $this->render('CineminoSiteBundle:Cinema:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Cinema entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Cinema();
        $form = $this->createForm(new CinemaCreateType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
             $resize = $this->container->get('Cinemino_Site.resizeimg'); // appel du service qui redimensionne les images
            if($entity->getFilePhoto()!=NULL){   
            $url = $entity->getFilePhoto();
            $entity->setPhoto($resize->UploadPhoto($url,"Cinema/photo/big",LgPhotoCBig,HtPhotoCBig)); 
            $resize->UploadPhoto($url,"Cinema/photo/small",LgPhotoCSmall,HtPhotoCSmall);
            } 
            if($entity->getFileLogo()!=NULL){   
            $url = $entity->getFileLogo();
            $entity->setLogo($resize->UploadPhoto($url,"Cinema/logo/big",LgLogoCBig,HtLogoCBig)); 
            $resize->UploadPhoto($url,"Cinema/logo/small",LgLogoCSmall,HtLogoCSmall);
            } 
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cinema'));
        }

        return $this->render('CineminoSiteBundle:Cinema:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Cinema entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('CineminoSiteBundle:Cinema')->find($id);
        
        
    if(($entity->getIdCompte()->getId() != $this->get('security.context')->getToken()->getUser()->getId())
            and !($this->get('security.context')->isGranted('ROLE_ADMIN'))  )
    {
        throw new AccessDeniedException("Vous n'avez pas le droit de modifier ce cinema (.");
    }
      
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cinema entity.');
        }

        $editForm = $this->createForm(new CinemaType(), $entity);
        $deleteForm = $this->createDeleteForm($id); 

        return $this->render('CineminoSiteBundle:Cinema:edit.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Cinema entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:Cinema')->find($id);

        if(($entity->getIdCompte()->getId() != $this->get('security.context')->getToken()->getUser()->getId())
            and !($this->get('security.context')->isGranted('ROLE_ADMIN'))  )
    {
        throw new AccessDeniedException("Vous n'avez pas le droit de modifier ce cinema (.");
    }
        
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cinema entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new CinemaType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $resize = $this->container->get('Cinemino_Site.resizeimg'); // appel du service qui redimensionne les images
            if($entity->getFilePhoto()!=NULL){   
            $url = $entity->getFilePhoto();
            $entity->setPhoto($resize->UploadPhoto($url,"Cinema/photo/big",LgPhotoCBig,HtPhotoCBig)); 
            $resize->UploadPhoto($url,"Cinema/photo/small",LgPhotoCSmall,HtPhotoCSmall);
            } 
            if($entity->getFileLogo()!=NULL){   
            $url = $entity->getFileLogo();
            $entity->setLogo($resize->UploadPhoto($url,"Cinema/logo/big",LgLogoCBig,HtLogoCBig)); 
            $resize->UploadPhoto($url,"Cinema/logo/small",LgLogoCSmall,HtLogoCSmall);
            } 
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cinema'));
        }

        return $this->render('CineminoSiteBundle:Cinema:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Cinema entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CineminoSiteBundle:Cinema')->find($id);

        if(($entity->getIdCompte()->getId() != $this->get('security.context')->getToken()->getUser()->getId())
            and !($this->get('security.context')->isGranted('ROLE_ADMIN'))  )
    {
        throw new AccessDeniedException("Vous n'avez pas le droit de modifier ce cinema (.");
    }
            
            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Cinema entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cinema'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
