<?php
    namespace Cinemino\SiteBundle\Service;
    
define("LgPhotoSmall", 319);
define("HtPhotoSmall",213);
define("LgPhotoBig", 720);
define("HtPhotoBig",480);
    
class EnregistreMedia{
        
  public function EnregistrementMedia(&$entity, $typemedia, $container) {
           $resize = $container->get('Cinemino_Site.resizeimg'); // appel du service qui redimensionne les images
           if($entity->getFile()!=NULL){   
             $url = $entity->getFile();
             switch ($entity->getType()) {
                case 'p':                       // C'est une phot, on la redimension et on l'upload
                         $entity->setUrl($resize->UploadPhoto($url,$typemedia . "/photos/big",LgPhotoBig,HtPhotoBig)); 
                         $resize->UploadPhoto($url,$typemedia . "/photos/small",LgPhotoSmall,HtPhotoSmall); 
                   break;
                case 'v': $dest = "medias/" . $typemedia . "/videos";
                          $entity->setUrl($url->getClientOriginalName());      // On stocke le nom et on upload
                          $url->move($dest,$url->getClientOriginalName());
                   break;
                case 's' :$dest = "medias/" . $typemedia . "/sons";
                          $entity->setUrl($url->getClientOriginalName());      // On stocke le nom et on upload
                          $url->move($dest,$url->getClientOriginalName());
                   break;
                case 'd' :$dest = "medias/" . $typemedia . "/documents";
                          $entity->setUrl($url->getClientOriginalName());      // On stocke le nom et on upload
                          $url->move($dest,$url->getClientOriginalName());
                   break;
             }
           }
        
    }         
 }
        
        
        
          
        
          

    
