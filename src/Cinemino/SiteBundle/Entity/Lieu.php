<?php

namespace Cinemino\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

define("LgPhotoLBig", 500);
define("HtPhotoLBig",282);
define("LgPhotoLSmall", 100);
define("HtPhotoLSmall",60);

define("LgLogoLBig", 500);
define("HtLogoLBig",282);
define("LgLogoLSmall", 100);
define("HtLogoLSmall",60);

/**
 * Lieu
 *
 * @ORM\Table(name="lieu")
 * @ORM\Entity
 */
class Lieu
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM", type="string", length=10, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="PHOTO", type="string", length=250, nullable=true)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="LOGO", type="string", length=250, nullable=true)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="ADRESSE", type="string", length=50, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="ADRESSE_MAIL", type="string", length=50, nullable=true)
     * @Assert\Email(
     *     message = "L'email '{{ value }}' n'est pas une adresse mail valide"
     * )
     */
    private $adresseMail;

    /**
     * @var string
     *
     * @ORM\Column(name="COORDONNEES_TEL", type="string", length=10, nullable=true)
     */
    private $coordonneesTel;

    /**
     * @var string
     *
     * @ORM\Column(name="SITE_WEB", type="string", length=50, nullable=true)
     * @Assert\Url()
     */
    private $siteWeb;
    
    /**
     * @var string
     *
     * @ORM\Column(name="LATITUDE", type="string", length=15, nullable=true)
     */
    private $latitude;

     /**
     * @var string
     *
     * @ORM\Column(name="LONGITUDE", type="string", length=15, nullable=true)
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION", type="string", length=250, nullable=true)
     */
    private $description;

    /**
     *
     * @var file
     * 
     * @Assert\file(
     *     maxSize = "2048k",
     *     mimeTypes = {"image/jpeg"},
     *     mimeTypesMessage = "Attention fichier image de type jpeg"
     *     )
     */    
    private $filePhoto;              //permet de stocker temporairement le fichier photo
    
    /**
     *
     * @var file
     * 
     * @Assert\file(
     *     maxSize = "2048k",
     *     mimeTypes = {"image/jpeg"},
     *     mimeTypesMessage = "Attention fichier image de type jpeg"
     *     )
     */    
    private $fileLogo;              //permet de stocker temporairement le fichier logo
    
    /**
     * Set nom
     *
     * @param string $nom
     * @return Lieu
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Lieu
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    
        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    public function __toString() {    
        return $this->nom;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return Lieu
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    
        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set logo
     *
     * @param string $logo
     * @return Lieu
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    
        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set adresseMail
     *
     * @param string $adresseMail
     * @return Lieu
     */
    public function setAdresseMail($adresseMail)
    {
        $this->adresseMail = $adresseMail;
    
        return $this;
    }

    /**
     * Get adresseMail
     *
     * @return string 
     */
    public function getAdresseMail()
    {
        return $this->adresseMail;
    }

    /**
     * Set coordonneesTel
     *
     * @param string $coordonneesTel
     * @return Lieu
     */
    public function setCoordonneesTel($coordonneesTel)
    {
        $this->coordonneesTel = $coordonneesTel;
    
        return $this;
    }

    /**
     * Get coordonneesTel
     *
     * @return string 
     */
    public function getCoordonneesTel()
    {
        return $this->coordonneesTel;
    }

    /**
     * Set siteWeb
     *
     * @param string $siteWeb
     * @return Lieu
     */
    public function setSiteWeb($siteWeb)
    {
        $this->siteWeb = $siteWeb;
    
        return $this;
    }

    /**
     * Get siteWeb
     *
     * @return string 
     */
    public function getSiteWeb()
    {
        return $this->siteWeb;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     * @return Lieu
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    
        return $this;
    }

    /**
     * Get latitude
     *
     * @return string 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     * @return Lieu
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    
        return $this;
    }

    /**
     * Get longitude
     *
     * @return string 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Lieu
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
       
    // gestion fichier    
    public function setFilePhoto($file)
    {
        $this->filePhoto = $file;
    }

    public function getFilePhoto()
    {
        return $this->filePhoto;
    }  
    
    // gestion fichier    
    public function setFileLogo($file)
    {
        $this->fileLogo = $file;
    }

    public function getFileLogo()
    {
        return $this->fileLogo;
    } 
}