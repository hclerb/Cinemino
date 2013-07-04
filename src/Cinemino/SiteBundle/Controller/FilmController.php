<?php

namespace Cinemino\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cinemino\SiteBundle\Entity\Film;
use Cinemino\SiteBundle\Form\FilmType;
use Cinemino\SiteBundle\Form\FilmCreateType;
use Cinemino\SiteBundle\Form\FilmRechercheForm;

/**
 * Film controller.
 *
 */
class FilmController extends Controller
{
    /**
     * Lists all Film entities.
     *
     */
    
    public function __construct()
    {
        global $dir_url;
        $dir_url = 'affiche/';
        // URL vers le dossier affiche   
    }
    
    
    
    
    public function indexAction()
    {
        
        global $dir_url;
        
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CineminoSiteBundle:Film')->findAll();
         
        return $this->render('CineminoSiteBundle:Film:index.html.twig', array(
            'entities' => $entities,
            'dir_url' => $dir_url
        ));
    }

    /**
     * Finds and displays a Film entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:Film')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Film entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CineminoSiteBundle:Film:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    
    public function newAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $entities = $em->getRepository('CineminoSiteBundle:Film')->findAll();
        $entity = new Film();
        $entity->setDuree(new \DateTime("1:30"));
        $form_recherche = $this->container->get('form.factory')->create(new FilmRechercheForm());     
        $form   = $this->createForm(new FilmCreateType(), $entity);

        return $this->render('CineminoSiteBundle:Film:new.html.twig', array(

            'entity' => $entity,
            'form'   => $form->createView(),
            'form_recherche'   => $form_recherche->createView(),
            'entities' => $entities,

        ));
    }
    /**
     * Creates a new Film entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Film();
        $form = $this->createForm(new FilmCreateType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            //upload de l'affiche
            $entity->setDuree($entity->getDuree()->format('H'). ':' . $entity->getDuree()->format('i'));
            $resize = $this->container->get('Cinemino_Site.resizeimg'); // appel du service qui redimensionne les images
           if($entity->getFile()!=NULL){   
            $url = $entity->getFile();
            $entity->setAffiche($resize->UploadPhoto($url,"Film/affiches/big",LgAfficheFBig,HtAfficheFBig)); 
            $resize->UploadPhoto($url,"Film/affiches/small",LgAfficheFSmall,HtAfficheFSmall);
            } 
            print_r($entity->getIdMedias());              
            foreach($entity->getIdMedias() as $media)  
            {
              if ($media->getFile()!=NULL)
              { 
                $Enreg = $this->container->get('Cinemino_Site.enregistremedia');
                $Enreg->EnregistrementMedia($media, "Film", $this->container); 
                $media->setIdFilm($entity);
                $em->persist($media);
              } else $entity->removeIdMedia ($media);
            }
            $em->persist($entity); 
            
            $em->flush();

            return $this->redirect($this->generateUrl('film'));
        }

        return $this->render('CineminoSiteBundle:Film:new.html.twig', array(
            'entity'  => $entity,
            'form'    => $form->createView(),
 
        ));
    }

    /**
     * Displays a form to edit an existing Film entity.
     *
     */
    public function editAction($id)
    {
        global $dir_url;
         
        $em = $this->getDoctrine()->getManager();
        
        $entities = $em->getRepository('CineminoSiteBundle:Film')->findAll();
        $entity = $em->getRepository('CineminoSiteBundle:Film')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Film entity.');
        }

        $entity->setDuree(new \DateTime($entity->getDuree()));
        $editForm = $this->createForm(new FilmType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CineminoSiteBundle:Film:edit.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'entities' => $entities,
            'dir_url' => $dir_url
        ));
    }

    /**
     * Edits an existing Film entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CineminoSiteBundle:Film')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Film entity.');
        }

        $originalMedias = array();
    	
    	foreach ($entity->getIdMedias() as $oldmedia) $originalMedias[] = $oldmedia;
        $entity->setDuree(new \DateTime($entity->getDuree()));
        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new FilmType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $entity->setDuree($entity->getDuree()->format('H'). ':' . $entity->getDuree()->format('i'));
            $resize = $this->container->get('Cinemino_Site.resizeimg'); // appel du service qui redimensionne les images 
            if ($entity->getFile()!=NULL) 
            {
              $url = $entity->getFile();               
              $entity->setAffiche($resize->UploadPhoto($url,"Film/affiches/big",LgAfficheFBig,HtAfficheFBig)); 
              $resize->UploadPhoto($url,"Film/affiches/small",LgAfficheFSmall,HtAfficheFSmall);
            }
  
            
            foreach($entity->getIdMedias() as $media)  
            {
              // Si le médias est toujours actifs on le supprime du tableau de nettoyage  
              foreach ($originalMedias as $key => $toDel) {
    		if ($toDel->getId() === $media->getId()) unset($originalMedias[$key]);
              }
              $Enreg = $this->container->get('Cinemino_Site.enregistremedia');
              $Enreg->EnregistrementMedia($media, "Film", $this->container);
              $media->setIdFilm($entity);
              $em->persist($media);
            }
            
            // Supprime les médias qui ont été enlevés dans la mise oà jour
    	    foreach ($originalMedias as $media) {
              $em->remove($media);
    	    }
            
            
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('film'));
        }

        return $this->render('CineminoSiteBundle:Film:edit.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Film entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CineminoSiteBundle:Film')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Film entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('film'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    
    
   public function ListerAction() 
    { 
       
       $em = $this->getDoctrine()->getManager();
       $films = $em->getRepository('CineminoSiteBundle:Film')->findAll();

	$form = $this->container->get('form.factory')->create(new FilmRechercheForm());
	
	return $this->container->get('templating')->renderResponse('CineminoSiteBundle:Film:new.html.twig', array(
		'films' => $films,
		'form' => $form->createView()
	));
    } 


public function rechercherAction()
{               
    $request = $this->container->get('request');


        $motsCles = '';
        $motsCles = $request->request->get('motcle');

  
         $allohelper = $this->container->get('Cinemino_Site.allocine');
        

    $page = 1;
    
    try
    {
        // Envoi de la requête avec les paramètres, et enregistrement des résultats dans $donnees.
        print_r($motsCles);
        $donnees = $allohelper->search( $motsCles, $page );
            
        $i = 0;
        $listFilm = array();
       if ( count( $donnees['movie'] ) > 1 )
       {  
           print_r($donnees);   
        foreach ( $donnees['movie'] as $film )
         {
                
           $listFilm[$i] = $film;
           $i++;
         }
       }
    }
    
    // En cas d'erreur.
    catch ( ErrorException $e )
    {
        // Afficher un message d'erreur.
        //echo "Erreur " . $e->getCode() . ": " . $e->getMessage();
    }
       /* if($motcle != '')
        {
               $qb = $em->createQueryBuilder();

               $qb->select('f')
                  ->from('CineminoSiteBundle:Film', 'f')
                  ->where("f.titreFilm LIKE :motcle OR f.realisateur LIKE :motcle")
                  ->orderBy('f.titreFilm', 'ASC')
                  ->setParameter('motcle', '%'.$motcle.'%');

               $query = $qb->getQuery();               
               $films = $query->getResult();
        }
        else {
            $films = $em->getRepository('CineminoSiteBundle:film')->findAll();
        }
*/
        return $this->container->get('templating')->renderResponse('CineminoSiteBundle:Film:liste.html.twig', array(
            'listFilm' => $listFilm,
  
            ));
   
   
     
    
}



    public function ajoutFormulaireAction($code)
    {
       
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        
        $allohelper = $this->container->get('Cinemino_Site.allocine');
        $donnees_film = $allohelper->movie( $code, $profile = 'medium', $url = null );
        
      
        $films= $em->getRepository('CineminoSiteBundle:Film')->findAll();
        $entity = new Film();
        
        $form_recherche = $this->container->get('form.factory')->create(new FilmRechercheForm());     
        $form   = $this->createForm(new FilmType(), $entity);
        $form_param['titreFilm'] = $donnees_film['title'];
        $form_param['realisateur'] = $donnees_film['castingShort']['directors'];
        
    
        $form_param['duree'] = date('h:i', $donnees_film['runtime']);
        
        $form_param['anneeProd'] = $donnees_film['productionYear'];
        $form_param['acteurs'] = $donnees_film['castingShort']['actors'];
        $form_param['synopsys'] = $donnees_film['synopsis'];
        $form_param['critique'] = '';
 
        

            $provenance = '';
            $i = 0;
            if (is_array($donnees_film['nationality'])){
            foreach($donnees_film['nationality'] as $tab ){
            if($i == 0)
            $provenance .= $tab['$'];
            else
            $provenance .= ' ,'.$tab['$'];
            $i++;
            }
            }
        $form_param['provenance'] = $provenance;
        
        if(!isset($donnees_film['movieCertificate']['certificate']['$']))
        $form_param['ageConseille'] = 'Aucune donnée pour ce film';
        else
        $form_param['ageConseille'] = $donnees_film['movieCertificate']['certificate']['$'];
        
        $form_param['interdiction'] = '';
        $form_param['affiche'] = $donnees_film['poster']['href'];
        
                         

            

        $form->bind($form_param);
       
        
        return $this->render('CineminoSiteBundle:Film:new.html.twig', array(

            'entity' => $entity,
            'form'   => $form->createView(),
            'form_recherche'   => $form_recherche->createView(),
            'films' => $films,
            'affiche' => $form_param['affiche']
        ));
    }


}

