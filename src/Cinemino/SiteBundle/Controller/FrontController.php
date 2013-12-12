<?php

namespace Cinemino\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cinemino\SiteBundle\Entity\NewsLetter;
use Cinemino\SiteBundle\Form\NewsLetterFrontType;

use Cinemino\SiteBundle\Entity\Cinemino;
use Cinemino\SiteBundle\Entity\Semaine;
use Cinemino\SiteBundle\Entity\Seance;
use Cinemino\SiteBundle\Entity\SeanceRepository;
use Cinemino\SiteBundle\Entity\Film;
use Cinemino\SiteBundle\Entity\donnees;
use Cinemino\SiteBundle\Entity\MediaIn;

use Cinemino\SiteBundle\Entity\ProgrammeCourts;


class FrontController extends Controller
{   
    public function inscriptionAction()
    {
        $entity = new NewsLetter();
        $form   = $this->createForm(new NewsLetterFrontType(), $entity);

       return $this->render('CineminoSiteBundle:Front:inscription.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'erreur' => "",
        ));
    }
    
   public function indexAction()
    {
       $semaines = $this->init_menu_seances();
       if (isset($semaines[0])) 
       {   
           foreach ($semaines as $semaine) $stsemaines[] = $semaine->__toString();  
       } else $stsemaines[0] = null;

       $em = $this->getDoctrine()->getManager();

      $entities = $em->getRepository('CineminoSiteBundle:Seance')->findRestantToday();
 
       $cineminoinfo = $em->getRepository('CineminoSiteBundle:Cinemino')->findall();
       
       //récupération dernier media cinemino saisit
       $photos = $em->getRepository('CineminoSiteBundle:MediaIn')->findBy(array(), array('id' => 'desc'),1,0);

        if (count($photos)>1) $photo = $photos[count($photos)-1];
            else $photo=null;
        return $this->render('CineminoSiteBundle:Front:index.html.twig', array(
            'semaines' => $stsemaines,
           'entities' => $entities,
           'cinemino' => $cineminoinfo,
           'photo' => $photo,
        ));
    }

   public function festivalAction()
    {
       $semaines = $this->init_menu_seances();
       if (isset($semaines[0])) 
       {   
           foreach ($semaines as $semaine) $stsemaines[] = $semaine->__toString();  
       } else $stsemaines[0] = null;
       return $this->render('CineminoSiteBundle:Front:festival.html.twig', array(
            'semaines' => $stsemaines,
        ));
    }
    
    public function filmAction($id)
    {
       $semaines = $this->init_menu_seances();
       if (isset($semaines[0])) 
       {   
           foreach ($semaines as $semaine) $stsemaines[] = $semaine->__toString();  
       } else $stsemaines[0] = null;
       $em = $this->getDoctrine()->getManager();
       $entity = $em->getRepository('CineminoSiteBundle:Film')->find($id);
       $entitiesC=NULL;
       if ($em->getRepository('CineminoSiteBundle:ProgrammeCourts')->find($id)!= NULL)
       {
           $progcourt = true;
           $entitiesC = $em->getRepository('CineminoSiteBundle:Film')->findByProgCourts($id);
       }
       else $progcourt = false;
//       $entities = $em->getRepository('CineminoSiteBundle:Film')->findall();
       $leseances = $em->getRepository('CineminoSiteBundle:Seance')->findFromTodayForFilm($id);
       
       $cineminoinfo = $em->getRepository('CineminoSiteBundle:Cinemino')->findall();

            
       return $this->render('CineminoSiteBundle:Front:film.html.twig', array(
            'semaines' => $stsemaines,
            'entity' => $entity,
           'lesseances' => $leseances,
           'progcourt' => $progcourt,
           'entitiesC' => $entitiesC,
           'pays' => donnees::$pays,
//            'entities' => $entities,
        ));
    }

        public function filmsAction()
    {
       $semaines = $this->init_menu_seances();
       if (isset($semaines[0])) 
       {   
           foreach ($semaines as $semaine) $stsemaines[] = $semaine->__toString();  
       } else $stsemaines[0] = null;
       $em = $this->getDoctrine()->getManager();
       $entities = $em->getRepository('CineminoSiteBundle:Film')->getlongs();
       

       return $this->render('CineminoSiteBundle:Front:films.html.twig', array(
            'semaines' => $stsemaines,
            'entities' => $entities,
            'pays' => donnees::$pays, 
        ));
    }

public function sallesAction()
    {
       $semaines = $this->init_menu_seances();
       if (isset($semaines[0])) 
       {   
           foreach ($semaines as $semaine) $stsemaines[] = $semaine->__toString();  
       } else $stsemaines[0] = null;
       $em = $this->getDoctrine()->getManager();
       $entities = $em->getRepository('CineminoSiteBundle:Cinema')->findAll();
       return $this->render('CineminoSiteBundle:Front:salles.html.twig', array(
            'semaines' => $stsemaines,
            'entities' => $entities,
        ));
    }
    
public function salleAction($id)
    {
       $semaines = $this->init_menu_seances();
       if (isset($semaines[0])) 
       {   
           foreach ($semaines as $semaine) $stsemaines[] = $semaine->__toString();  
       } else $stsemaines[0] = null;
       $em = $this->getDoctrine()->getManager();
       $entitie = $em->getRepository('CineminoSiteBundle:Cinema')->find($id);
       $entities[0] = $entitie;
       return $this->render('CineminoSiteBundle:Front:salles.html.twig', array(
            'semaines' => $stsemaines,
            'entities' => $entities,
        ));
    }    
 
   public function animsAction()
    {
       $semaines = $this->init_menu_seances();
       if (isset($semaines[0])) 
       {   
           foreach ($semaines as $semaine) $stsemaines[] = $semaine->__toString();  
       } else $stsemaines[0] = null;
       return $this->render('CineminoSiteBundle:Front:animations.html.twig', array(
            'semaines' => $stsemaines,
        ));
    }
 
  public function pfolioAction()
    {
       $semaines = $this->init_menu_seances();
       if (isset($semaines[0])) 
       {   
           foreach ($semaines as $semaine) $stsemaines[] = $semaine->__toString();  
       } else $stsemaines[0] = null;
       return $this->render('CineminoSiteBundle:Front:pfolio.html.twig', array(
            'semaines' => $stsemaines,
        ));
    }

  public function docsAction()
    {
       $semaines = $this->init_menu_seances();
       if (isset($semaines[0])) 
       {   
           foreach ($semaines as $semaine) $stsemaines[] = $semaine->__toString();  
       } else $stsemaines[0] = null;
       return $this->render('CineminoSiteBundle:Front:docs.html.twig', array(
            'semaines' => $stsemaines,
        ));
    }
    
  public function infosAction()
    {
       $semaines = $this->init_menu_seances();
       if (isset($semaines[0])) 
       {   
           foreach ($semaines as $semaine) $stsemaines[] = $semaine->__toString();  
       } else $stsemaines[0] = null;
       return $this->render('CineminoSiteBundle:Front:infos.html.twig', array(
            'semaines' => $stsemaines,
        ));
    }
    
   public function semainesAction($id)
    {
       $semaines = $this->init_menu_seances();
       if (isset($semaines[0])) 
       {   
           foreach ($semaines as $semaine) $stsemaines[] = $semaine->__toString();  
       } else $stsemaines[0] = null;
               
       $em = $this->getDoctrine()->getManager();
       $entities = $em->getRepository('CineminoSiteBundle:Seance')->findentredate($semaines[$id-1]->getDatedebut(),$semaines[$id-1]->getDatefin());
       
       
       
       
       return $this->render('CineminoSiteBundle:Front:semaines.html.twig', array(
            'semaines' => $stsemaines,
            'entities' => $entities,
        ));
    }
 
    public function createnewsletterAction(Request $request)
    {
        $pasderreur="";
        $entity  = new NewsLetter();
        $form = $this->createForm(new NewsLetterFrontType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            if ($entity->getEmail()!= NULL && $this->VerifierAdresseMail($entity->getEmail()))
            {
              $entity2 = $em->getRepository('CineminoSiteBundle:NewsLetter')->findOneByEmail($entity->getEmail());
              if ($entity2 == NULL)
              {
               $entity->setEnabled(true);   
               $em->persist($entity);
               $em->flush();
              }
              return $this->redirect($this->generateUrl('front'));
            }
            $pasderreur="Vous devez indiquer une adresse mail correcte !";
        }
        return $this->render('CineminoSiteBundle:Front:inscription.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'erreur' => $pasderreur,
        ));
    }
   
    public function VerifierAdresseMail($adresse)  
    {  
      $Syntaxe='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';  
      if(preg_match($Syntaxe,$adresse))  
         return true;  
      else  
         return false;  
     }
     
     public function init_menu_seances() {
        
         $entity = new Cinemino();
         $em = $this->getDoctrine()->getManager();
         $entities = $em->getRepository('CineminoSiteBundle:Cinemino')->findAll();
         $datejour = new \DateTime();
         $datefin = new \DateTime($entities[0]->getDateDebut()->format('d F Y'));
         if($datejour < $entities[0]->getDateDebut())
         {
             // affichage de toute les semaines            
            $i=0;
            if (($entities[0]->getDateDebut()->format('w'))!=3)
            {
                if (($entities[0]->getDateDebut()->format('w'))>3)
                 {
                    $i=9 - $entities[0]->getDateDebut()->format('w');
                 }
                elseif (($entities[0]->getDateDebut()->format('w'))<3) {
                   $i=2 - $entities[0]->getDateDebut()->format('w');
                }
                $inter = "P".$i."D";
                $datefin = $datefin->add(new \DateInterval($inter));
                $semaines[0]= new Semaine($entities[0]->getDateDebut(),$datefin);
            }
            
            $unjourdeplus = new \DateInterval("P1D");
            $datefin = $datefin->add($unjourdeplus);
            $interval = new \DateInterval('P7D');
            $period = new \DatePeriod($datefin, $interval, $entities[0]->getDateFin());
            
            $intersem = new \DateInterval('P6D');
            foreach ($period as $dt)
            {
             $datefin = new \DateTime($dt->format('d F Y')); 
             $datefin = $datefin->add($intersem);   
             $semaines[]=new Semaine($dt,$datefin);
            }
         }
         elseif ($datejour<$entities[0]->getDateFin()) {
           // affichage du reste des semaines
            $datefin = new \DateTime();
            $i=0;
            if (($datejour->format('w'))!=3)
            {
                if (($datejour->format('w'))>3)
                 {
                    $i=9 - $datejour->format('w');
                 }
                elseif (($datejour->format('w'))<3) {
                   $i=2 - $datejour->format('w');
                }
                $inter = "P".$i."D";
                $datefin = $datefin->add(new \DateInterval($inter));
                $semaines[0]=new Semaine($datejour,$datefin);
            }
            
            $unjourdeplus = new \DateInterval("P1D");
            $datefin = $datefin->add($unjourdeplus);
            $interval = new \DateInterval('P7D');
            $period = new \DatePeriod($datefin, $interval, $entities[0]->getDateFin());
            
            $intersem = new \DateInterval('P6D');
            foreach ($period as $dt)
            {
             $datefin = new \DateTime($dt->format('d F Y')); 
             $datefin = $datefin->add($intersem);   
             $semaines[]=new Semaine($dt,$datefin);
            }
          }
           else {
               // Cinémino est passé
               $semaines[0]=NULL;
           }
         return $semaines;
     }
}
