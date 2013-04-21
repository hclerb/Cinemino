<?php

namespace Cinemino\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;



class FrontController extends Controller
{   
    public function indexAction()
    {
       return $this->redirect($this->generateUrl('cineminoSite_back')); 
    }
  
         
}
