<?php

namespace Cinemino\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

define("LgPhotoBig", 151);
define("HtPhotoBig",201);
define("LgPhotoSmall", 75);
define("HtPhotoSmall",100);

define("LgLogoBig", 151);
define("HtLogoBig",201);
define("LgLogoSmall", 75);
define("HtLogoSmall",100);

/**
 * Intervenant
 *
 * @ORM\Table(name="intervenant")
 * @ORM\Entity
 */
class Intervenant
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
     * @ORM\Column(name="NOM_INTERVENANT", type="string", length=25, nullable=true)
     */
    private $nomIntervenant;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION_INTERVENANT", type="string", length=100, nullable=true)
     */
    private $descriptionIntervenant;

    /**
     * @var string
     *
     * @ORM\Column(name="URL_PHOTO_INTERVENANT", type="string", length=50, nullable=true)
     */
    private $urlPhotoIntervenant;

    /**
     * @var string
     *
     * @ORM\Column(name="URL_LOGO", type="string", length=50, nullable=true)
     */
    private $urlLogo;


    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idEvenement;

    private $filephoto;              //permet de stocker temporairement le fichier affiche
    
    private $filelogo;              //permet de stocker temporairement le fichier affiche
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idEvenement = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set nomIntervenant
     *
     * @param string $nomIntervenant
     * @return Intervenant
     */
    public function setNomIntervenant($nomIntervenant)
    {
        $this->nomIntervenant = $nomIntervenant;
    
        return $this;
    }

    /**
     * Get nomIntervenant
     *
     * @return string 
     */
    public function getNomIntervenant()
    {
        return $this->nomIntervenant;
    }

    /**
     * Set descriptionIntervenant
     *
     * @param string $descriptionIntervenant
     * @return Intervenant
     */
    public function setDescriptionIntervenant($descriptionIntervenant)
    {
        $this->descriptionIntervenant = $descriptionIntervenant;
    
        return $this;
    }

    /**
     * Get descriptionIntervenant
     *
     * @return string 
     */
    public function getDescriptionIntervenant()
    {
        return $this->descriptionIntervenant;
    }

    /**
     * Set urlPhotoIntervenant
     *
     * @param string $urlPhotoIntervenant
     * @return Intervenant
     */
    public function setUrlPhotoIntervenant($urlPhotoIntervenant)
    {
        $this->urlPhotoIntervenant = $urlPhotoIntervenant;
    
        return $this;
    }

    /**
     * Get urlPhotoIntervenant
     *
     * @return string 
     */
    public function getUrlPhotoIntervenant()
    {
        return $this->urlPhotoIntervenant;
    }

    /**
     * Set urlLogo
     *
     * @param string $urlLogo
     * @return Intervenant
     */
    public function setUrlLogo($urlLogo)
    {
        $this->urlLogo = $urlLogo;
    
        return $this;
    }

    /**
     * Get urlLogo
     *
     * @return string 
     */
    public function getUrlLogo()
    {
        return $this->urlLogo;
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

    /**
     * Add idEvenement
     *
     * @param \Cinemino\SiteBundle\Entity\Evenement $idEvenement
     * @return Intervenant
     */
    public function addIdEvenement(\Cinemino\SiteBundle\Entity\Evenement $idEvenement)
    {
        $this->idEvenement[] = $idEvenement;
    
        return $this;
    }

    /**
     * Remove idEvenement
     *
     * @param \Cinemino\SiteBundle\Entity\Evenement $idEvenement
     */
    public function removeIdEvenement(\Cinemino\SiteBundle\Entity\Evenement $idEvenement)
    {
        $this->idEvenement->removeElement($idEvenement);
    }

    /**
     * Get idEvenement
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdEvenement()
    {
        return $this->idEvenement;
    }
    
    public function __toString() {
        return $this->nomIntervenant;   
    } 
    // gestion fichier logo   
    public function setFilelogo($file)
    {
        $this->filelogo = $file;
    }

    public function getFilelogo()
    {
        return $this->filelogo;
    } 
    // gestion fichier    
    public function setFilephoto($file)
    {
        $this->filephoto = $file;
    }

    public function getFilephoto()
    {
        return $this->filephoto;
    } 
}