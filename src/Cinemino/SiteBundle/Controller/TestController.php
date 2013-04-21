<?php

namespace Cinemino\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Cinemino\UserBundle\Entity\CineminoUser;



class TestController extends Controller
{
    public function indexAction()
    {
        
        
/* si SUPER ADMIN loggé, on affiche tous les cinéma
 * sinon on affiche seulement les cinémas que peut gérer l'utilisateur avec ses droits
 */
          $repository = $this->getDoctrine()
                             ->getEntityManager()
                             ->getRepository('CineminoSiteBundle:Cinema');
          
          if( ! $this->get('security.context')->isGranted('ROLE_SUPER_ADMIN') )
           {
            $user = $this->container->get('security.context')->getToken()->getUser();
            $idUser = $user->getId();
            $listCinema = $repository->findBy(array('idCompte' => $idUser));
           }
           else
           {
                   
             $listCinema = $repository->findAll();
              
           }
            

              
        return $this->render('CineminoSiteBundle:Test:index.html.twig', array(
            'listCinema' => $listCinema
            ));
    }
    
    
        public function voirAction($id, $tag)
    {
     
           return $this->render('CineminoSiteBundle:Test:voir.html.twig', array('id' => $id, 'tag' => $tag)
                   );
    
    }
    
            public function templateAction()
    {
     
           return $this->render('CineminoSiteBundle:Test:template.html.twig'
                   );
    
    }


    
        
}
