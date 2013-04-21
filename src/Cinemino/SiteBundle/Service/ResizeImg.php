<?php
    namespace Cinemino\SiteBundle\Service;
    

    
    class ResizeImg{
        
        
        
          public function upload_miniature($url, $directory_big, $directory_small)
        {
            
              
        $ListeExtension = array('jpg' => 'image/jpeg', 'jpeg'=>'image/jpeg');
        $ListeExtensionIE = array('jpg' => 'image/pjpeg', 'jpeg'=>'image/pjpeg');
  
    
  
                            $ExtensionPresumee = explode('.', $url);
                            $ExtensionPresumee = strtolower($ExtensionPresumee[count($ExtensionPresumee)-1]);
                            
                            if ($ExtensionPresumee == 'jpg' || $ExtensionPresumee == 'jpeg')
                            {
  
                                              $ImageChoisie = imagecreatefromjpeg($url);
                                              $TailleImageChoisie = getimagesize($url);
                                              $NouvelleLargeur = 350; //Largeur choisie à 350 px mais modifiable bien sur
  
                                              $NouvelleHauteur = ( ($TailleImageChoisie[1] * (($NouvelleLargeur)/$TailleImageChoisie[0])) );
  
                                              $NouvelleImage = imagecreatetruecolor($NouvelleLargeur , $NouvelleHauteur) or die ("Erreur");
  
                                              imagecopyresampled($NouvelleImage , $ImageChoisie  , 0,0, 0,0, $NouvelleLargeur, $NouvelleHauteur, $TailleImageChoisie[0],$TailleImageChoisie[1]);
                                              //imagedestroy($ImageChoisie);
                                            
                                              $filename = rand(10000000,99999999);
                                            
                                              
                                              imagejpeg($ImageChoisie , $directory_big.$filename.'.'.$ExtensionPresumee, 100);
                                              imagejpeg($NouvelleImage , $directory_small.$filename.'.'.$ExtensionPresumee, 100);
               
                                              return ($filename.'.'.$ExtensionPresumee); // on retourne le nom du fichier pour l'enregistrement dans la bdd ensuite.
                                        }
                                        else
                                        {
                                                // echo 'Le type MIME de l\'image n\'est pas bon';
                                        }
              
              
        }
        
        
        
        
          
    
                               
  
              
              
        }
        
        
        
          
        
          

    
