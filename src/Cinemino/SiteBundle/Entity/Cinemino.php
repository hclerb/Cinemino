<?php

namespace Cinemino\SiteBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

define("LgLogoCoBig", 500);
define("HtLogoCoBig",282);
define("LgLogoCoSmall", 100);
define("HtLogoCoSmall",60);

define("LgAfficheCoBig", 346);
define("HtAfficheCoBig",518);
define("LgAfficheCoSmall", 75);
define("HtAfficheCoSmall",112);

define("LgCouvertureCoBig", 247);
define("HtCouvertureCoBig",376);
define("LgCouvertureCoSmall", 75);
define("HtCouvertureCoSmall",105);
/**
 * Cinema
 *
 * @ORM\Table(name="cinemino")
 * @ORM\Entity(repositoryClass="Cinemino\SiteBundle\Entity\CineminoRepository")
 */
class Cinemino
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
     * @var \Date
     *
     * @ORM\Column(name="DATE_DEBUT", type="date", nullable=true)
     */
    private $dateDebut;

    /**
     * @var \Date
     *
     * @ORM\Column(name="DATE_FIN", type="date", nullable=true)
     */
    private $dateFin;


    /**
     * @var string
     *
     * @ORM\Column(name="AFFICHE", type="string", length=250, nullable=true)
     */
    private $affiche;

    /**
     * @var string
     *
     * @ORM\Column(name="COUVERTURE", type="string", length=250, nullable=true)
     */
    private $couverture;
    
    /**
     * @var string
     *
     * @ORM\Column(name="LOGO", type="string", length=250, nullable=true)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="COULEUR_FOND", type="string", length=15, nullable=true)
     */
    private $couleurFond;

     /**
     * @var string
     *
     * @ORM\Column(name="COULEUR_Typo", type="string", length=15, nullable=true)
     */
    private $couleurTypo;
    
     /**
     * @var string
     *
     * @ORM\Column(name="TARIF_PLEIN", type="string", length=5, nullable=true)
     */
    private $tarifPlein;
     /**
     * @var string
     *
     * @ORM\Column(name="TARIF_ABO", type="string", length=5, nullable=true)
     */
    private $tarifAbo;
     /**
     * @var string
     *
     * @ORM\Column(name="SURCOUT_3D", type="string", length=5, nullable=true)
     */
    private $surcout3D;
    
    /**
     *
     * @var file
     * 
     * @Assert\File(
     *     maxSize = "2048k",
     *     mimeTypes = {"image/jpeg"},
     *     mimeTypesMessage = "Attention fichier image de type jpeg"
     *     )
     */    
    private $fileAffiche;              //permet de stocker temporairement le fichier Affiche
    
    /**
     *
     * @var file
     * 
     * @Assert\File(
     *     maxSize = "2048k",
     *     mimeTypes = {"image/jpeg"},
     *     mimeTypesMessage = "Attention fichier image de type jpeg"
     *     )
     */    
    private $fileLogo;              //permet de stocker temporairement le fichier Logo

    
        /**
     *
     * @var file
     * 
     * @Assert\File(
     *     maxSize = "2048k",
     *     mimeTypes = {"image/jpeg"},
     *     mimeTypesMessage = "Attention fichier image de type jpeg"
     *     )
     */    
    private $fileCouverture;              //permet de stocker temporairement le fichier Couverture
    
    /**
     * Set affiche
     *
     * @param string $photo
     * @return Cinema
     */
    public function setAffiche($photo)
    {
        $this->affiche = $photo;
    
        return $this;
    }

    /**
     * Get affiche
     *
     * @return string 
     */
    public function getAffiche()
    {
        return $this->affiche;
    }

    /**
     * Set logo
     *
     * @param string $logo
     * @return Cinema
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
     * Set couleurFond
     *
     * @param string $couleurFond
     * @return Cinema
     */
    public function setCouleurFond($couleur)
    {
        $this->couleurFond = $couleur;
    
        return $this;
    }

    /**
     * Get couleurtypo
     *
     * @return string 
     */
    public function getCouleurTypo()
    {
        return $this->couleurTypo;
    }

    /**
     * Set couleurTypo
     *
     * @param string $couleurTypo
     * @return Cinema
     */
    public function setCouleurTypo($couleur)
    {
        $this->couleurTypo = $couleur;
    
        return $this;
    }

    /**
     * Get couleurFond
     *
     * @return string 
     */
    public function getCouleurFond()
    {
        return $this->couleurFond;
    }
    
     /**
     * Set dateDebut
     *
     * @param \Date $dateDebut
     * @return Cinemino
     */
    public function setDateDebut($dateEvenement)
    {
        $this->dateDebut = $dateEvenement;
    
        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \Date
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \Date $dateFin
     * @return Evenement
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    
        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \Date
     */
    public function getDateFin()
    {
        return $this->dateFin;
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
    
    
    // gestion fichier    
    public function setFileAffiche($file)
    {
        $this->fileAffiche = $file;
    }

    public function getFileAffiche()
    {
        return $this->fileAffiche;
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

    /**
     * Set tarifPlein
     *
     * @param string $tarifPlein
     * @return Cinemino
     */
    public function setTarifPlein($tarifPlein)
    {
        $this->tarifPlein = $tarifPlein;
    
        return $this;
    }

    /**
     * Get tarifPlein
     *
     * @return string 
     */
    public function getTarifPlein()
    {
        return $this->tarifPlein;
    }

    /**
     * Set tarifAbo
     *
     * @param string $tarifAbo
     * @return Cinemino
     */
    public function setTarifAbo($tarifAbo)
    {
        $this->tarifAbo = $tarifAbo;
    
        return $this;
    }

    /**
     * Get tarifAbo
     *
     * @return string 
     */
    public function getTarifAbo()
    {
        return $this->tarifAbo;
    }

    /**
     * Set surcout3D
     *
     * @param string $surcout3D
     * @return Cinemino
     */
    public function setSurcout3D($surcout3D)
    {
        $this->surcout3D = $surcout3D;
    
        return $this;
    }

    /**
     * Get surcout3D
     *
     * @return string 
     */
    public function getSurcout3D()
    {
        return $this->surcout3D;
    }

    /**
     * Set couverture
     *
     * @param string $couverture
     * @return Cinemino
     */
    public function setCouverture($couverture)
    {
        $this->couverture = $couverture;
    
        return $this;
    }

    /**
     * Get couverture
     *
     * @return string 
     */
    public function getCouverture()
    {
        return $this->couverture;
    }
    
    // gestion fichier    
    public function setFileCouverture($file)
    {
        $this->fileCouverture= $file;
    }

    public function getFileCouverture()
    {
        return $this->fileCouverture;
    }  
}