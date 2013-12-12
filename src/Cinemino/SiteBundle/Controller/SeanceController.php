<?php

namespace Cinemino\SiteBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;


use Cinemino\SiteBundle\Entity\Seance;
use Cinemino\SiteBundle\Form\SeanceType;

/**
 * Seance controller.
 *
 */
class SeanceController extends Controller
{
    /**
     * Lists all Seance entities.
     *
     */
    function __construct() {
        
        global $dir_url;
        $dir_url = 'affiche/';
        // URL vers le dossier affiche  
        
    }
    
    
    
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        
        if($this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')) $cinemas = $em->getRepository('CineminoSiteBundle:Cinema')->findAll();
          else $cinemas = $em->getRepository('CineminoSiteBundle:Cinema')->findByidCompte($user->getId());

        $entities = $em->getRepository('CineminoSiteBundle:Seance')->findFromToday();
        
        foreach ($entities as $value) {$value->setFinSeance();
            
        }
        return $this->render('CineminoSiteBundle:Seance:index.html.twig', array(
            'entities' => $entities,
            'cinemas' => $cinemas             
        ));
    }

    /**
     * Finds and displays a Seance entity.
     *
     */
    public function showAction($id)
    {
        global $dir_url;
        
        $em = $this->getDoctrine()->getManager();
        
        $entity = $em->getRepository('CineminoSiteBundle:Seance')->find($id);
        
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        if($this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')){ 
            $cinemas = $em->getRepository('CineminoSiteBundle:Cinema')->findAll();}
        else{
           $cinemas = $em->getRepository('CineminoSiteBundle:Cinema')->findByidCompte($user->getId());}

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Seance entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CineminoSiteBundle:Seance:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(), 
            'cinemas' => $cinemas,
            'dir_url' => $dir_url
            
            
            ));
        
    }

    /**
     * Displays a form to create a new Seance entity.
     *
     */
    public function newAction()
    {   
        $erreur = 0;
        $em = $this->getDoctrine()->getManager();
        $entity = new Seance();
        $entity->setDateSeance(new \DateTime);
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        if($this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')){ 
           $cinemas = $em->getRepository('CineminoSiteBundle:Cinema')->findAll();
        }
        else{
           $cinemas = $em->getRepository('CineminoSiteBundle:Cinema')->findByidCompte($user->getId());        
        }
        
        $form   = $this->createForm(new SeanceType($this->getUser()), $entity);

        return $this->render('CineminoSiteBundle:Seance:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'cinemas' => $cinemas,
            'erreur' => $erreur,
        ));
    }

    /**
     * Creates a new Seance entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Seance();
        $erreur = 0;
        $em = $this->getDoctrine()->getManager();  
        $form = $this->createForm(new SeanceType($this->getUser()), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            if ($em->getRepository('CineminoSiteBundle:Seance')->dejaUneAvant($entity)== NULL)
            {
               if ($em->getRepository('CineminoSiteBundle:Seance')->dejaUneApres($entity)== true)
               {
                $em->persist($entity);
                $em->flush();
                $this->get('session')->getFlashBag()->add('info','Séance Ajoutée');
                return $this->redirect($this->generateUrl('seance_new', array('id' => $entity->getId())));
               }
               else $erreur=2;
            }
            else {
                $erreur = 1;
            }
        }
        
        return $this->render('CineminoSiteBundle:Seance:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'erreur' => $erreur,
        ));
    }

    /**
     * Displays a form to edit an existing Seance entity.
     *
     */
    public function editAction($id)
    {
        
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:Seance')->find($id);
        
        $erreur = 0;
           
         if(($entity->getIdCinema()->getIdCompte()->getId() != $this->get('security.context')->getToken()->getUser()->getId())
            and !($this->get('security.context')->isGranted('ROLE_ADMIN'))  )
    {
        throw new AccessDeniedException("Vous n'avez pas accès à cette séance");
    }
        
       
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        if($this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')){ 
        $cinemas = $em->getRepository('CineminoSiteBundle:Cinema')->findAll();}
        else{
        $cinemas = $em->getRepository('CineminoSiteBundle:Cinema')->findByidCompte($user->getId());}
    
    
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Seance entity.');
        }

        $editForm = $this->createForm(new SeanceType($this->getUser()), $entity);
        $deleteForm = $this->createDeleteForm($id);
//        $entities = $em->getRepository('CineminoSiteBundle:Seance')->findAll();
        
        return $this->render('CineminoSiteBundle:Seance:edit.html.twig', array(
//            'entities' => $entities,
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'cinemas' => $cinemas,
            'erreur' => $erreur,
        ));
    }

    /**
     * Edits an existing Seance entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:Seance')->find($id);

        $erreur=0;
                   
         if(($entity->getIdCinema()->getIdCompte()->getId() != $this->get('security.context')->getToken()->getUser()->getId())
            and !($this->get('security.context')->isGranted('ROLE_ADMIN'))  )
        {
            throw new AccessDeniedException("Vous n'avez pas accès à cette séance");
        }
        
        
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Seance entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new SeanceType($this->getUser()), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
           if ($em->getRepository('CineminoSiteBundle:Seance')->dejaUneAvantMaj($entity)== NULL)
            {
               if ($em->getRepository('CineminoSiteBundle:Seance')->dejaUneApresMaj($entity)== true)
               {
                $em->persist($entity);
                $em->flush();
                return $this->redirect($this->generateUrl('seance'));
               }
               else $erreur=2;
            }
            else {
                $erreur = 1;
            }            
        }

        $entities = $em->getRepository('CineminoSiteBundle:Seance')->findAll();
        return $this->render('CineminoSiteBundle:Seance:edit.html.twig', array(
            'entities' => $entities,
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'erreur' => $erreur,
        ));
    }

    /**
     * Deletes a Seance entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CineminoSiteBundle:Seance')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Seance entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('seance'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    
    
}
