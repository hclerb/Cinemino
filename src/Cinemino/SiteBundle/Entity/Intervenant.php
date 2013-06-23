<?php

namespace Cinemino\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

define("LgPhotoIBig", 151);
define("HtPhotoIBig",201);
define("LgPhotoISmall", 75);
define("HtPhotoISmall",100);

define("LgLogoIBig", 151);
define("HtLogoIBig",201);
define("LgLogoISmall", 75);
define("HtLogoISmall",100);

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
     * 
     * @ORM\OneToMany(targetEntity="Cinemino\SiteBundle\Entity\MediaIntervenant", mappedBy="idInter")
     */
    protected $idMedias;

    /**
     * @var \Doctrine\Common\Collections\Collection
     * 
     * @ORM\ManyToMany(targetEntity="Cinemino\SiteBundle\Entity\Evenement", inversedBy="idIntervenants", cascade={"persist"})
     * @ORM\JoinTable(name="intervenant_evenement",
     *      joinColumns={@ORM\JoinColumn(name="intervenant_id", referencedColumnName="ID")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="evenement_id", referencedColumnName="ID")}
     *      ) 
     * 
     */
    private $idEvenements;

    private $filephoto;              //permet de stocker temporairement le fichier affiche
    
    private $filelogo;              //permet de stocker temporairement le fichier affiche
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idEvenements = new \Doctrine\Common\Collections\ArrayCollection();
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

     /**
     * Get idEvt
     *
     * @return \Cinemino\SiteBundle\Entity\Evenement 
     */
    public function getIdEvenements()
    {
        return $this->idEvenements;
    }

    /**
     * Add idEvt
     *
     * @param \Cinemino\SiteBundle\Entity\Evenement $idEvt
     * @return Intervenant
     */
    public function addIdEvenement(\Cinemino\SiteBundle\Entity\Evenement $idEvt)
    {
        $this->idEvenements[] = $idEvt;
        return $this;
    }

    /**
     * Remove idEvt
     *
     * @param \Cinemino\SiteBundle\Entity\Evenement $idEvt
     */
    public function removeIdEvenement(\Cinemino\SiteBundle\Entity\Evenement $idEvt)
    {
        $this->idEvenements->removeElement($idEvt);
    }
    /**
     * Add idMedia
     *
     * @param \Cinemino\SiteBundle\Entity\MediaIntervenant $idMedia
     * @return Film
     */
    public function addIdMedia(\Cinemino\SiteBundle\Entity\MediaIntervenant $idMedia)
    {
        $this->idMedias[] = $idMedia;
        $idMedia->setIdInter($this);
    
        return $this;
    }

    /**
     * Remove idMedia
     *
     * @param \Cinemino\SiteBundle\Entity\MediaIntervenant $idMedia
     */
    public function removeIdMedia(\Cinemino\SiteBundle\Entity\MediaIntervenant $idMedia)
    {
        $this->idMedias->removeElement($idMedia);
    }

    /**
     * Get idMedia
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdMedias()
    {
        return $this->idMedias;
    }
}