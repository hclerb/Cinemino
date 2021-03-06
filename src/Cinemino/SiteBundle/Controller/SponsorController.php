<?php

namespace Cinemino\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cinemino\SiteBundle\Entity\Sponsor;
use Cinemino\SiteBundle\Form\SponsorType;

/**
 * Sponsor controller.
 *
 */
class SponsorController extends Controller
{
    /**
     * Lists all Sponsor entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CineminoSiteBundle:Sponsor')->findAll();

        return $this->render('CineminoSiteBundle:Sponsor:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Sponsor entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:Sponsor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Sponsor entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CineminoSiteBundle:Sponsor:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Sponsor entity.
     *
     */
    public function newAction()
    {
        $entity = new Sponsor();
        $form   = $this->createForm(new SponsorType(), $entity);

        return $this->render('CineminoSiteBundle:Sponsor:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Sponsor entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Sponsor();
        $form = $this->createForm(new SponsorType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            if($entity->getFileLogo()!=NULL){ 
            $resize = $this->container->get('Cinemino_Site.resizeimg'); // appel du service qui redimensionne les images
            $url = $entity->getFileLogo();
            $entity->setLogo($resize->UploadPhoto($url,"Sponsor/big",LgLogoSBig,HtLogoSBig)); 
            $resize->UploadPhoto($url,"Sponsor/small",LgLogoSSmall,HtLogoSSmall);
            $url->move("medias/Sponsor/brut",$url->getClientOriginalName());
            
            }
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('sponsor_show', array('id' => $entity->getId())));
        }

        return $this->render('CineminoSiteBundle:Sponsor:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Sponsor entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:Sponsor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Sponsor entity.');
        }

        $editForm = $this->createForm(new SponsorType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CineminoSiteBundle:Sponsor:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Sponsor entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:Sponsor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Sponsor entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new SponsorType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            if($entity->getFileLogo()!=NULL){
            $resize = $this->container->get('Cinemino_Site.resizeimg'); // appel du service qui redimensionne les images
            $url = $entity->getFileLogo();
            $entity->setLogo($resize->UploadPhoto($url,"Sponsor/big",LgLogoSBig,HtLogoSBig)); 
            $resize->UploadPhoto($url,"Sponsor/small",LgLogoSSmall,HtLogoSSmall);
            $url->move("medias/Sponsor/brut",$url->getClientOriginalName());
            } 
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('sponsor', array('id' => $id)));
        }

        return $this->render('CineminoSiteBundle:Sponsor:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Sponsor entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CineminoSiteBundle:Sponsor')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Sponsor entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('sponsor'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
