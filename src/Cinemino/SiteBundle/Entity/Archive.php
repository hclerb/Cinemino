<?php

namespace Cinemino\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

define("LgAfficheABig", 151);
define("HtAfficheABig",201);
define("LgAfficheASmall", 75);
define("HtAfficheASmall",100);


/**
 * Intervenant
 *
 * @ORM\Table(name="archive")
 * @ORM\Entity(repositoryClass="Cinemino\SiteBundle\Entity\ArchiveRepository")
 */
class Archive
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
     * @ORM\Column(name="ANNEE", type="string", length=5, nullable=true)
     */
    private $annee;

    /**
     * @var string
     *
     * @ORM\Column(name="RAPPORT", type="string", length=1000, nullable=true)
     */
    private $rapport;

    /**
     * @var string
     *
     * @ORM\Column(name="AFFICHE", type="string", length=75, nullable=true)
     */
    private $affiche;

    /**
     * @var string
     *
     * @ORM\Column(name="PROGRAMME", type="string", length=50, nullable=true)
     */
    private $programme;

        /**
     * @var \Doctrine\Common\Collections\Collection
     * 
     * @ORM\OneToMany(targetEntity="Cinemino\SiteBundle\Entity\MediaArchive", mappedBy="idArchive")
     */
    protected $idMedias;

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
    private $fileaffiche;              //permet de stocker temporairement le fichier affiche
    
     /**
     *
     * @var file
     * 
     * @Assert\file(
     *     maxSize = "4096k",
     *     mimeTypes = {"application/pdf"},
     *     mimeTypesMessage = "Attention fichier image de type pdf"
     *     )
     */
    private $fileprogramme;              //permet de stocker temporairement le fichier programme
    

    
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
        return $this->annee;   
    } 
    // gestion fichier logo   
    public function setFileprogramme($file)
    {
        $this->fileprogramme = $file;
    }

    public function getFileprogramme()
    {
        return $this->fileprogramme;
    } 
    // gestion fichier    
    public function setFileaffiche($file)
    {
        $this->fileaffiche = $file;
    }

    public function getFileaffiche()
    {
        return $this->fileaffiche;
    } 

    /**
     * Add idMedia
     *
     * @param \Cinemino\SiteBundle\Entity\MediaArchive $idMedia
     * @return Film
     */
    public function addIdMedia(\Cinemino\SiteBundle\Entity\MediaArchive $idMedia)
    {
        $this->idMedias[] = $idMedia;
        $idMedia->setIdArchive($this);
    
        return $this;
    }

    /**
     * Remove idMedia
     *
     * @param \Cinemino\SiteBundle\Entity\MediaArchive $idMedia
     */
    public function removeIdMedia(\Cinemino\SiteBundle\Entity\MediaArchive $idMedia)
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idMedias = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set annee
     *
     * @param string $annee
     * @return Archive
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;
    
        return $this;
    }

    /**
     * Get annee
     *
     * @return string 
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set rapport
     *
     * @param string $rapport
     * @return Archive
     */
    public function setRapport($rapport)
    {
        $this->rapport = $rapport;
    
        return $this;
    }

    /**
     * Get rapport
     *
     * @return string 
     */
    public function getRapport()
    {
        return $this->rapport;
    }

    /**
     * Set affiche
     *
     * @param string $affiche
     * @return Archive
     */
    public function setAffiche($affiche)
    {
        $this->affiche = $affiche;
    
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
     * Set programme
     *
     * @param string $programme
     * @return Archive
     */
    public function setProgramme($programme)
    {
        $this->programme = $programme;
    
        return $this;
    }

    /**
     * Get programme
     *
     * @return string 
     */
    public function getProgramme()
    {
        return $this->programme;
    }
}