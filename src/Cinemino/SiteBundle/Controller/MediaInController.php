<?php

namespace Cinemino\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cinemino\SiteBundle\Entity\MediaIn;
use Cinemino\SiteBundle\Form\MediaInType;
use Cinemino\SiteBundle\Form\MediaInCreateType;
/**
 * MediaIn controller.
 *
 */
class MediaInController extends MediaController
{
    
    public function indexAction()
    {
         
        $em = $this->getDoctrine()->getManager();

        $entitiesIn = $em->getRepository('CineminoSiteBundle:MediaIn')->findAll();
     
        return $this->render('CineminoSiteBundle:MediaIn:index.html.twig', array(
            'entitiesIn' => $entitiesIn
        ));
    }

    /**
     * Finds and displays a MediaIn entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:MediaIn')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MediaIn entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CineminoSiteBundle:MediaIn:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        
            ));
    }

    /**
     * Displays a form to create a new MediaIn entity.
     *
     */
    public function newAction()
    {
        $entity = new MediaIn();
        $form   = $this->createForm(new MediaInCreateType('MediaIn','mediaincreate'), $entity);

        return $this->render('CineminoSiteBundle:MediaIn:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new MediaIn entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new MediaIn();
        $form = $this->createForm(new MediaInCreateType('MediaIn','mediaincreate'), $entity);
        $form->bind($request);
        if ($entity->getDateFin() > $entity->getDateDebut())
        {  
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $Enreg = $this->container->get('Cinemino_Site.enregistremedia');
                $Enreg->EnregistrementMedia($entity, "In", $this->container);
                $em->persist($entity);
                $em->flush();

                return $this->redirect($this->generateUrl('mediain'));
            }
        }

        return $this->render('CineminoSiteBundle:MediaIn:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing MediaIn entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:MediaIn')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MediaIn entity.');
        }

        $editForm = $this->createForm(new MediaInType('MediaIn','mediain'), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CineminoSiteBundle:MediaIn:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing MediaIn entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:MediaIn')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MediaIn entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new MediaInType('MediaIn','mediain'), $entity);
        $editForm->bind($request);
        if ($entity->getDateFin() > $entity->getDateDebut())
        { 
            if ($editForm->isValid()) {
                $Enreg = $this->container->get('Cinemino_Site.enregistremedia');
                $Enreg->EnregistrementMedia($entity, "In", $this->container);
                $em->persist($entity);
                $em->flush();

                return $this->redirect($this->generateUrl('mediain'));
            }
        }
        return $this->render('CineminoSiteBundle:MediaIn:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a MediaIn entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CineminoSiteBundle:MediaIn')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find MediaIn entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('mediain'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
