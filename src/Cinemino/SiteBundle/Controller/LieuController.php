<?php

namespace Cinemino\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cinemino\SiteBundle\Entity\Lieu;
use Cinemino\SiteBundle\Form\LieuType;
use Cinemino\SiteBundle\Form\LieuCreateType;

/**
 * Lieu controller.
 *
 */
class LieuController extends Controller
{
    /**
     * Lists all Lieu entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CineminoSiteBundle:Lieu')->findAll();

        return $this->render('CineminoSiteBundle:Lieu:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Lieu entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:Lieu')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Lieu entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CineminoSiteBundle:Lieu:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Lieu entity.
     *
     */
    public function newAction()
    {
        $entity = new Lieu();
        $form   = $this->createForm(new LieuCreateType(), $entity);

        return $this->render('CineminoSiteBundle:Lieu:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Lieu entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Lieu();
        $form = $this->createForm(new LieuCreateType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $resize = $this->container->get('Cinemino_Site.resizeimg'); // appel du service qui redimensionne les images
            if($entity->getFilePhoto()!=NULL){   
            $url = $entity->getFilePhoto();
            $entity->setPhoto($resize->UploadPhoto($url,"Lieu/photos/big",LgPhotoLBig,HtPhotoLBig)); 
            $resize->UploadPhoto($url,"Lieu/photos/small",LgPhotoLSmall,HtPhotoLSmall);
            } 
            if($entity->getFileLogo()!=NULL){   
            $url = $entity->getFileLogo();
            $entity->setLogo($resize->UploadPhoto($url,"Lieu/logo/big",LgLogoLBig,HtLogoLBig)); 
            $resize->UploadPhoto($url,"Lieu/logo/small",LgLogoLSmall,HtLogoLSmall);
            }
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('lieu'));
        }

        return $this->render('CineminoSiteBundle:Lieu:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Lieu entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:Lieu')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Lieu entity.');
        }

        $editForm = $this->createForm(new LieuType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CineminoSiteBundle:Lieu:edit.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Lieu entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:Lieu')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Lieu entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new LieuType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $resize = $this->container->get('Cinemino_Site.resizeimg'); // appel du service qui redimensionne les images
            if($entity->getFilePhoto()!=NULL){   
            $url = $entity->getFilePhoto();
            $entity->setPhoto($resize->UploadPhoto($url,"Lieu/photos/big",LgPhotoLBig,HtPhotoLBig)); 
            $resize->UploadPhoto($url,"Lieu/photos/small",LgPhotoLSmall,HtPhotoLSmall);
            } 
            if($entity->getFileLogo()!=NULL){   
            $url = $entity->getFileLogo();
            $entity->setLogo($resize->UploadPhoto($url,"Lieu/logo/big",LgLogoLBig,HtLogoLBig)); 
            $resize->UploadPhoto($url,"Lieu/logo/small",LgLogoLSmall,HtLogoLSmall);
            }
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('lieu'));
        }

        return $this->render('CineminoSiteBundle:Lieu:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Lieu entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CineminoSiteBundle:Lieu')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Lieu entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('lieu'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
