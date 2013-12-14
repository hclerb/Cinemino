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
    public function UploadPhoto($filename,$sousrep,$width,$heightf)
        {

          /*$ListeExtension = array('jpg' => 'image/jpeg', 'jpeg'=>'image/jpeg');
          $ListeExtensionIE = array('jpg' => 'image/pjpeg', 'jpeg'=>'image/pjpeg');*/
  
    
  
          $ExtensionPresumee = explode('.', $filename->getClientOriginalName());
          $ExtensionPresumee = strtolower($ExtensionPresumee[count($ExtensionPresumee)-1]);
                            
          if ($ExtensionPresumee == 'jpg' || $ExtensionPresumee == 'jpeg' || $ExtensionPresumee == 'png' || $ExtensionPresumee == 'PNG')
          {
            list($width_orig, $height_orig) = getimagesize($filename);


            $ratio_orig = $width_orig/$height_orig;
            //calcul de la hauteur voulue
            $height = $width/$ratio_orig;

            if ($heightf > $height) $heightf = $height; 

            // Redimensionnement
            $image_p = imagecreatetruecolor($width, $height);
            $image_f = imagecreatetruecolor($width, $heightf);
            if ($ExtensionPresumee == 'png' || $ExtensionPresumee == 'PNG')
            {
                imagesavealpha($image_p, true); 

                // Fill the image with transparent color 
                $color = imagecolorallocatealpha($image_p,0x00,0x00,0x00,127); 
                imagefill($image_p, 0, 0, $color); 
                imagesavealpha($image_p, true); 

                imagesavealpha($image_f, true);
                // Fill the image with transparent color 
                $color = imagecolorallocatealpha($image_f,0x00,0x00,0x00,127); 
                imagefill($image_f, 0, 0, $color); 
            }
            
            if ($ExtensionPresumee == 'jpg' || $ExtensionPresumee == 'jpeg') $image = imagecreatefromjpeg($filename);
            else $image = imagecreatefrompng ($filename);
            imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
            imagecopy($image_f, $image_p, 0, 0, 0, 0, $width, $heightf);

            // enregistrement
            $nom_fichier = $filename->getClientOriginalName();
            if ($ExtensionPresumee == 'jpg' || $ExtensionPresumee == 'jpeg') imagejpeg($image_f, 'medias/'. $sousrep . '/' .$nom_fichier, 200);
            else imagepng($image_f, 'medias/'. $sousrep . '/' .$nom_fichier, 5);
            imagedestroy($image);
            imagedestroy($image_p);
            imagedestroy($image_f);
            return $nom_fichier;
        }  
        else return "fichier image n'est pas en JPG ou PNG";   
    }
}
        
        
        
          
        
          

    
