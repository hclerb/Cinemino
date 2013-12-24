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
use Cinemino\SiteBundle\Entity\Sponsor;
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
            'lessponsors' => $this->lesSponsors($em),
        ));
    }

   public function festivalAction()
    {
       $em = $this->getDoctrine()->getManager();
       $semaines = $this->init_menu_seances();
       if (isset($semaines[0])) 
       {   
           foreach ($semaines as $semaine) $stsemaines[] = $semaine->__toString();  
       } else $stsemaines[0] = null;
       return $this->render('CineminoSiteBundle:Front:festival.html.twig', array(
            'semaines' => $stsemaines,
            'lessponsors' => $this->lesSponsors($em),
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
            'lessponsors' => $this->lesSponsors($em),

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
            'lessponsors' => $this->lesSponsors($em),           
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
            'lessponsors' => $this->lesSponsors($em),
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
            'lessponsors' => $this->lesSponsors($em),
            'entities' => $entities,
        ));
    }    
 
   public function animsAction()
    {
       $em = $this->getDoctrine()->getManager();
       $semaines = $this->init_menu_seances();
       if (isset($semaines[0])) 
       {   
           foreach ($semaines as $semaine) $stsemaines[] = $semaine->__toString();  
       } else $stsemaines[0] = null;
       return $this->render('CineminoSiteBundle:Front:animations.html.twig', array(
            'lessponsors' => $this->lesSponsors($em),
            'semaines' => $stsemaines,
        ));
    }
 
    public function animAction($id)
    {
       $em = $this->getDoctrine()->getManager();
       $semaines = $this->init_menu_seances();
       if (isset($semaines[0])) 
       {   
           foreach ($semaines as $semaine) $stsemaines[] = $semaine->__toString();  
       } else $stsemaines[0] = null;
       
       $entity = $em->getRepository('CineminoSiteBundle:Seance')->find($id);
       return $this->render('CineminoSiteBundle:Front:animation.html.twig', array(
            'semaines' => $stsemaines,
            'lessponsors' => $this->lesSponsors($em),
            'entity' => $entity
        ));
    }
    
  public function pfolioAction()
    {
      $em = $this->getDoctrine()->getManager();
       $semaines = $this->init_menu_seances();
       if (isset($semaines[0])) 
       {   
           foreach ($semaines as $semaine) $stsemaines[] = $semaine->__toString();  
       } else $stsemaines[0] = null;
       return $this->render('CineminoSiteBundle:Front:pfolio.html.twig', array(
            'lessponsors' => $this->lesSponsors($em),
            'semaines' => $stsemaines,
        ));
    }

  public function docsAction()
    {
      $em = $this->getDoctrine()->getManager();
       $semaines = $this->init_menu_seances();
       if (isset($semaines[0])) 
       {   
           foreach ($semaines as $semaine) $stsemaines[] = $semaine->__toString();  
       } else $stsemaines[0] = null;
       return $this->render('CineminoSiteBundle:Front:docs.html.twig', array(
            'lessponsors' => $this->lesSponsors($em),
            'semaines' => $stsemaines,
        ));
    }
    
  public function infosAction()
    {
      $em = $this->getDoctrine()->getManager();
       $semaines = $this->init_menu_seances();
       if (isset($semaines[0])) 
       {   
           foreach ($semaines as $semaine) $stsemaines[] = $semaine->__toString();  
       } else $stsemaines[0] = null;
       return $this->render('CineminoSiteBundle:Front:infos.html.twig', array(
            'lessponsors' => $this->lesSponsors($em),
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
            'lessponsors' => $this->lesSponsors($em),
            'entities' => $entities,
           'lasemaine' => $semaines[$id-1],
        ));
    }
 
    public function theseanceAction(){
       
        $request = $this->getRequest();
        $datejour = $request->query->get('datejour');
        $datevoulu = new \DateTime($datejour);
        
       $em = $this->getDoctrine()->getManager();
       $entities = $em->getRepository('CineminoSiteBundle:Seance')->findFromTheday($datevoulu);       
       
       $lesseances="";
       $horaire="";
       $i=0;
       // mise en forme réponse
       foreach ($entities as $laseance) {
           if ($horaire == $laseance->getDateSeance()->format('H:i')) $lesseances = $lesseances . "<p class='sfilm'><a href='" . $this->generateUrl('f_film', array('id' => $laseance->getIdFilm()->getId())). "'>" . $laseance->getIdFilm()->getTitreFilm() . "</a></p><p class='sc'><a style='color:#" . $laseance->getIdCinema()->getCouleurFondCinema() . "' href='" . $this->generateUrl('f_cinema', array('id' => $laseance->getIdCinema()->getId())) . "'>" . $laseance->getIdCinema()->getNomCinema() . "</a></p>";
            else {
              if($i==0) $i++;
               else ($lesseances = $lesseances . "</td></tr>");
              $lesseances = $lesseances . "<tr><td class='hs'>" . $laseance->getDateSeance()->format('H:i') . "</td>" . "<td><p class='sfilm' ><a href='" . $this->generateUrl('f_film', array('id' => $laseance->getIdFilm()->getId())). "'>" . $laseance->getIdFilm()->getTitreFilm() . "</a></p><p class='sc'><a style='color:#" . $laseance->getIdCinema()->getCouleurFondCinema() . "' href='" . $this->generateUrl('f_cinema', array('id' => $laseance->getIdCinema()->getId())) . "'>" . $laseance->getIdCinema()->getNomCinema() . "</a></p>";
              $horaire= $laseance->getDateSeance()->format('H:i');
            }

           }
       

       $response = new \Symfony\Component\HttpFoundation\Response();
       $response->setContent($lesseances);
       return $response; 
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
         $semaines = array();
         $entity = new Cinemino();
         $em = $this->getDoctrine()->getManager();
         $entities = $em->getRepository('CineminoSiteBundle:Cinemino')->findAll();
         $datejour = new \DateTime();
         $datefin = new \DateTime($entities[0]->getDateDebut()->format('d F Y'));
         $derniersemaine = false;   // indique si la dernier semaine est tronquée
         if($datejour < $entities[0]->getDateDebut())
         {
             // affichage de toute les semaines            
            $i=0;
            // Création première semaine si pas début un mercredi
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
                $datefin->add(new \DateInterval($inter));
                $semaines[0]= new Semaine($entities[0]->getDateDebut(),$datefin);
            }
            
            // création des autres semaines
            $unjourdeplus = new \DateInterval("P1D");
            $datefini = new \DateTime($datefin->format('d F Y'));
            if (($entities[0]->getDateDebut()->format('w'))!=3) $datefini->add($unjourdeplus);
            $interval = new \DateInterval('P7D');
            $datefincinemino = new \DateTime($entities[0]->getDateFin()->format('d F Y'));
            // vérification si dernier jour est un mardi
            if (($datefincinemino->format('w'))!=2)
             { 
              // évidemment c'est pas un mardi
              $derniersemaine = true;  
              if (($datefincinemino->format('w'))<2)
                 {
                    $i=5;
                 }
                elseif (($datefincinemino->format('w'))>2) {
                   $i=$datefincinemino->format('w')-3;
                } 
                $inter = "P".$i."D";
                $datefincinemino->sub(new \DateInterval($inter));
             }             
            $period = new \DatePeriod($datefini, $interval, $datefincinemino);
            
           $intersem = new \DateInterval('P6D');
            foreach ($period as $dt)
            {
             $datefin = new \DateTime($dt->format('d F Y')); 
             $datefin->add($intersem);   
             $semaines[]=new Semaine($dt,$datefin);
            }
            if ($derniersemaine)
            {
                // création dernière semaine
                $datefini = new \DateTime($datefin->format('d F Y'));
                $semaines[]= new Semaine($datefini->add($unjourdeplus),$entities[0]->getDateFin());
            }
         }
         elseif ($datejour<$entities[0]->getDateFin()) {
           // affichage du reste des semaines
            $datefin = new \DateTime();
            $i=0;
            // Création première semaine si pas début un mercredi
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
                $datefin->add(new \DateInterval($inter));
                $semaines[0]=new Semaine($datejour,$datefin);
            }
           
            // création des autres semaines
            $unjourdeplus = new \DateInterval("P1D");
            $datefini = new \DateTime($datefin->format('d F Y'));
            if (($entities[0]->getDateDebut()->format('w'))!=3) $datefini->add($unjourdeplus);
            $interval = new \DateInterval('P7D');
            $datefincinemino = new \DateTime($entities[0]->getDateFin()->format('d F Y'));
            // vérification si dernier jour est un mardi
            if (($datefincinemino->format('w'))!=2)
             { 
              // évidemment c'est pas un mardi
              $derniersemaine = true;  
              if (($datefincinemino->format('w'))<2)
                 {
                    $i=5;
                 }
                elseif (($datefincinemino->format('w'))>2) {
                   $i=$datefincinemino->format('w')-3;
                } 
                $inter = "P".$i."D";
                $datefincinemino->sub(new \DateInterval($inter));
             }             
            
           $period = new \DatePeriod($datefini, $interval, $datefincinemino);
            
           $intersem = new \DateInterval('P6D');
            foreach ($period as $dt)
            {
             $datefin = new \DateTime($dt->format('d F Y')); 
             $datefin->add($intersem);   
             $semaines[]=new Semaine($dt,$datefin);
            }
            if ($derniersemaine)
            {
                // création dernière semaine
                $datefini = new \DateTime($datefin->format('d F Y'));
                $semaines[]= new Semaine($datefini->add($unjourdeplus),$entities[0]->getDateFin());
            }
          }
           else {
               // Cinémino est passé
               $semaines[0]=NULL;
           }
         return $semaines;
     }
     
     public function lesSponsors($em)
     {
       return $em->getRepository('CineminoSiteBundle:Sponsor')->findAll();    
     }
}
