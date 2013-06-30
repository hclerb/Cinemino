<?php

namespace Cinemino\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cinemino\SiteBundle\Entity\NewsLetter;
use Cinemino\SiteBundle\Form\NewsLetterFrontType;


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
       return $this->render('CineminoSiteBundle:Front:index.html.twig');
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
}
