<?php

namespace Cinemino\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cinemino\SiteBundle\Entity\Film;
use Cinemino\SiteBundle\Form\FilmType;
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
         
        return $this->render('CineminoSiteBundle:film:index.html.twig', array(
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

    /**
     * Displays a form to create a new Film entity.
     *
     */
    public function newActionOld()
    {
        $em = $this->getDoctrine()->getManager();
        $films = $em->getRepository('CineminoSiteBundle:film')->findAll();
        $entities = $em->getRepository('CineminoSiteBundle:Film')->findAll();
        $entity = new Film();
        $form   = $this->createForm(new FilmType(), $entity);
        $form_recherche = $this->container->get('form.factory')->create(new FilmRechercheForm());

        return $this->render('CineminoSiteBundle:Film:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'form_recherche'   => $form_recherche->createView(),
            'entities' => $entities,
            'films' => $films,
        ));
    }
    
    public function newAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $entities = $em->getRepository('CineminoSiteBundle:Film')->findAll();
        $entity = new Film();
        
        $form_recherche = $this->container->get('form.factory')->create(new FilmRechercheForm());     
        $form   = $this->createForm(new FilmType(), $entity);

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
        $form = $this->createForm(new FilmType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
         
            $data = $form->getData();
            $url = $data->getAffiche(); // récupère l'url de l'affiche

            $dir = "affiche/big/"; // à renommer pour pouvoir marcher partout avec quelques choses comme  __DIR__.'../../web...
            $dir2 = "affiche/small/";


            $resize = $this->container->get('Cinemino_Site.resizeimg'); // appel du service qui redimensionne les images
            $filename = $resize->upload_miniature($url, $dir, $dir2); // on redimensionne l'image et on upload sur le serveur


   
            $em = $this->getDoctrine()->getManager();
            $entity->setAffiche($filename.'.jpg'); // par defaut, on stocke dans la bdd le chemin vers l'affiche non redimensionné
            $em->persist($entity);                      // l'affiche redimensionné porte le meme nom mais s'enregistre dans le dossier small      
            
            foreach($entity->getIdMedia() as $media)  
            {
                $media->upload();
                $media->setUrl($entity->getWebPath());
                $em->persist($media);
            }
            
            
            $em->flush();

            return $this->redirect($this->generateUrl('film_show', array('id' => $entity->getId())));
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

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new FilmType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            
            foreach($entity->getIdMedia() as $media)  
            {
                $media->upload();
                $media->setUrl($entity->getWebPath());
                $em->persist($media);
            }
            $em->flush();

            return $this->redirect($this->generateUrl('film_edit', array('id' => $id)));
        }

        return $this->render('CineminoSiteBundle:Film:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
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

