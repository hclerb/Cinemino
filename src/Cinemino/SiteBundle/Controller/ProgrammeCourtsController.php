<?php

namespace Cinemino\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cinemino\SiteBundle\Entity\ProgrammeCourts;
use Cinemino\SiteBundle\Form\ProgrammeCourtsType;

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
        $form   = $this->createForm(new ProgrammeCourtsType(), $entity);

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
        $form = $this->createForm(new ProgrammeCourtsType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
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
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:ProgrammeCourts')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ProgrammeCourts entity.');
        }

        $editForm = $this->createForm(new ProgrammeCourtsType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CineminoSiteBundle:ProgrammeCourts:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing ProgrammeCourts entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:ProgrammeCourts')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ProgrammeCourts entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ProgrammeCourtsType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('programmecourts_edit', array('id' => $id)));
        }

        return $this->render('CineminoSiteBundle:ProgrammeCourts:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
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
