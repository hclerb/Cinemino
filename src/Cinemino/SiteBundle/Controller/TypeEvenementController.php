<?php

namespace Cinemino\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;

use Cinemino\SiteBundle\Entity\TypeEvenement;
use Cinemino\SiteBundle\Form\TypeEvenementType;
use Cinemino\SiteBundle\Form\TypeEvenementCreateType;

/**
 * TypeEvenement controller.
 *
 */
class TypeEvenementController extends Controller
{
    /**
     * Lists all TypeEvenement entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CineminoSiteBundle:TypeEvenement')->findAll();

        return $this->render('CineminoSiteBundle:TypeEvenement:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a TypeEvenement entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:TypeEvenement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TypeEvenement entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CineminoSiteBundle:TypeEvenement:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new TypeEvenement entity.
     *
     */
    public function newAction()
    {
        $entity = new TypeEvenement();
        $form   = $this->createForm(new TypeEvenementCreateType(), $entity);

        return $this->render('CineminoSiteBundle:TypeEvenement:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new TypeEvenement entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new TypeEvenement();
        $form = $this->createForm(new TypeEvenementCreateType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $resize = $this->container->get('Cinemino_Site.resizeimg'); // appel du service qui redimensionne les images
           if($entity->getFile()!=NULL){   
            $url = $entity->getFile();
            $ExtensionPresumee = explode('.', $url->getClientOriginalName());
            $ExtensionPresumee = strtolower($ExtensionPresumee[count($ExtensionPresumee)-1]);
                            
            if ($ExtensionPresumee == 'jpg' || $ExtensionPresumee == 'jpeg') 
              {
                $entity->setPicto($resize->UploadPhoto($url,"picto",LgPicto,HtPicto));
                $url->move("medias/picto/brut/",$url->getClientOriginalName());
              }
              else
              {
                  $fs = new Filesystem();
                  $url->move("medias/picto/",$url->getClientOriginalName());
                  $entity->setPicto($url->getClientOriginalName());
                  
                  $fs->copy("medias/picto/".$url->getClientOriginalName(), "medias/picto/brut/".$url->getClientOriginalName());
              }                         
            }
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('typeevenement_show', array('id' => $entity->getId())));
        }

        return $this->render('CineminoSiteBundle:TypeEvenement:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TypeEvenement entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:TypeEvenement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TypeEvenement entity.');
        }

        $editForm = $this->createForm(new TypeEvenementType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CineminoSiteBundle:TypeEvenement:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing TypeEvenement entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:TypeEvenement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TypeEvenement entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new TypeEvenementType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
           $resize = $this->container->get('Cinemino_Site.resizeimg'); // appel du service qui redimensionne les images
           if($entity->getFile()!=NULL){   
            $url = $entity->getFile();
            $ExtensionPresumee = explode('.', $url->getClientOriginalName());
            $ExtensionPresumee = strtolower($ExtensionPresumee[count($ExtensionPresumee)-1]);
                            
            if ($ExtensionPresumee == 'jpg' || $ExtensionPresumee == 'jpeg') 
              {
                $entity->setPicto($resize->UploadPhoto($url,"picto",LgPicto,HtPicto));
                $url->move("medias/picto/brut/",$url->getClientOriginalName());
              }
              else
              {
                  $fs = new Filesystem();
                  $url->move("medias/picto/",$url->getClientOriginalName());
                  $entity->setPicto($url->getClientOriginalName());
                  
                  $fs->copy("medias/picto/".$url->getClientOriginalName(), "medias/picto/brut/".$url->getClientOriginalName());
              }
            
            }
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('typeevenement', array('id' => $id)));
        }

        return $this->render('CineminoSiteBundle:TypeEvenement:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TypeEvenement entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CineminoSiteBundle:TypeEvenement')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TypeEvenement entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('typeevenement'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
