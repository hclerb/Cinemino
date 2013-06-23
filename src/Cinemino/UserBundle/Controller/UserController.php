<?php

namespace Cinemino\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cinemino\UserBundle\Entity\User;
use Cinemino\UserBundle\Form\UserTypeNew;

/**
 * User controller.
 *
 */
class UserController extends Controller
{
    /**
     * Lists all User entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $user = $this->getUser();
        
        if($this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')) $entities = $em->getRepository('CineminoUserBundle:User')->findAll();
         else 
         {   
             $entity = $em->getRepository('CineminoUserBundle:User')->find($user->getId());
             $entities[0]=$entity;
         }

        return $this->render('CineminoUserBundle::userlayout.html.twig', array(
            'entities' => $entities,
        ));

   }
    


    /**
     * Finds and displays a User entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoUserBundle:User')->find($id);
        if($this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')) $entities = $em->getRepository('CineminoUserBundle:User')->findAll();
         else 
         {   
             $entity = $em->getRepository('CineminoUserBundle:User')->find($id);
             $entities[0]=$entity;
         }
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CineminoUserBundle:User:show.html.twig', array(
            'entity'      => $entity,
            'entities' => $entities,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new User entity.
     *
     */
    public function newAction()
    {   
        $entity = new User();
        $form   = $this->createForm(new \Cinemino\UserBundle\Form\UserTypeNew(), $entity);
        
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        
        if($this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')) $entities = $em->getRepository('CineminoUserBundle:User')->findAll();
         else 
         {   
             $entity = $em->getRepository('CineminoUserBundle:User')->find($user->getId());
             $entities[0]=$entity;
         }

        return $this->render('CineminoUserBundle:User:new.html.twig', array(
            'entity' => $entity,
            'entities' => $entities,
            'form'   => $form->createView(),
            
        ));
    }

    /**
     * Creates a new User entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new User();
        $form = $this->createForm(new \Cinemino\UserBundle\Form\UserTypeNew(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('user', array('id' => $entity->getId())));
        }
        
        $em = $this->getDoctrine()->getManager();
        if($this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')) $entities = $em->getRepository('CineminoUserBundle:User')->findAll();
         else 
         {   
             $entity = $em->getRepository('CineminoUserBundle:User')->find($user->getId());
             $entities[0]=$entity;
         }
         
        return $this->render('CineminoUserBundle:User:new.html.twig', array(
            'entity' => $entity,
            'entities' => $entities,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing User entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoUserBundle:User')->find($id);
        
        if($this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')) 
        {   
            $entities = $em->getRepository('CineminoUserBundle:User')->findAll();
            $editForm = $this->createForm(new \Cinemino\UserBundle\Form\UserTypeNew(), $entity);
        }
         else 
         {   
             $entity = $em->getRepository('CineminoUserBundle:User')->find($id);
             $entities[0]=$entity;
             $editForm = $this->createForm(new \Cinemino\UserBundle\Form\UserType(), $entity);
         }
        
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }


        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CineminoUserBundle:User:edit.html.twig', array(
            'entity'      => $entity,
            'entities' => $entities,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing User entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoUserBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        if($this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')) 
        {  
          $entities = $em->getRepository('CineminoUserBundle:User')->findAll();
          $editForm = $this->createForm(new \Cinemino\UserBundle\Form\UserTypeNew(), $entity);
        }
        else
        {
          $entity = $em->getRepository('CineminoUserBundle:User')->find($id);
          $entities[0]=$entity;
          $editForm = $this->createForm(new \Cinemino\UserBundle\Form\UserType(), $entity);  
        }
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $usermanager = $this->get('fos_user.user_manager');
            $usermanager->updateUser($entity);

            return $this->redirect($this->generateUrl('user'));
        }

        return $this->render('CineminoUserBundle:User:edit.html.twig', array(
            'entity'      => $entity,
            'entities' => $entities,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a User entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CineminoUserBundle:User')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find User entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('user'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
