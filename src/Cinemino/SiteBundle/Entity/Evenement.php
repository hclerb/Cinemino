<?php

namespace Cinemino\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement")
 * @ORM\Entity
 */
class Evenement
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
     * @var integer
     *
     * @ORM\Column(name="ID_SEANCES", type="integer", nullable=true)
     */
    private $idSeances;

    /**
     * @var string
     *
     * @ORM\Column(name="TITRE_EVENEMENT", type="string", length=25, nullable=true)
     */
    private $titreEvenement;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION_EVENEMENT", type="string", length=100, nullable=true)
     */
    private $descriptionEvenement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_EVENEMENT", type="datetime", nullable=true)
     */
    private $dateEvenement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_FIN", type="datetime", nullable=true)
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="PRIORITE", type="string", length=2, nullable=true)
     */
    private $priorite;

    /**
     * @var \Lieu
     *
     * @ORM\ManyToOne(targetEntity="Lieu")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_LIEU", referencedColumnName="ID")
     * })
     */
    private $idLieu;

    /**
     * @var \TypeEvenement
     *
     * @ORM\ManyToOne(targetEntity="TypeEvenement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_TYPE", referencedColumnName="ID")
     * })
     */
    private $idType;


    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idIntervenant;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idIntervenant = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set titreEvenement
     *
     * @param string $titreEvenement
     * @return Evenement
     */
    public function setTitreEvenement($titreEvenement)
    {
        $this->titreEvenement = $titreEvenement;
    
        return $this;
    }

    /**
     * Get titreEvenement
     *
     * @return string 
     */
    public function getTitreEvenement()
    {
        return $this->titreEvenement;
    }

    /**
     * Set descriptionEvenement
     *
     * @param string $descriptionEvenement
     * @return Evenement
     */
    public function setDescriptionEvenement($descriptionEvenement)
    {
        $this->descriptionEvenement = $descriptionEvenement;
    
        return $this;
    }

    /**
     * Get descriptionEvenement
     *
     * @return string 
     */
    public function getDescriptionEvenement()
    {
        return $this->descriptionEvenement;
    }

    /**
     * Set dateEvenement
     *
     * @param \DateTime $dateEvenement
     * @return Evenement
     */
    public function setDateEvenement($dateEvenement)
    {
        $this->dateEvenement = $dateEvenement;
    
        return $this;
    }

    /**
     * Get dateEvenement
     *
     * @return \DateTime 
     */
    public function getDateEvenement()
    {
        return $this->dateEvenement;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
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
     * @return \DateTime 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set priorite
     *
     * @param string $priorite
     * @return Evenement
     */
    public function setPriorite($priorite)
    {
        $this->priorite = $priorite;
    
        return $this;
    }

    /**
     * Get priorite
     *
     * @return string 
     */
    public function getPriorite()
    {
        return $this->priorite;
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
     * Set idType
     *
     * @param \Cinemino\SiteBundle\Entity\TypeEvenement $idType
     * @return Evenement
     */
    public function setIdType(\Cinemino\SiteBundle\Entity\TypeEvenement $idType = null)
    {
        $this->idType = $idType;
    
        return $this;
    }

    /**
     * Get idType
     *
     * @return \Cinemino\SiteBundle\Entity\TypeEvenement 
     */
    public function getIdType()
    {
        return $this->idType;
    }

    /**
     * Set idLieu
     *
     * @param \Cinemino\SiteBundle\Entity\Lieu $idLieu
     * @return Evenement
     */
    public function setIdLieu(\Cinemino\SiteBundle\Entity\Lieu $idLieu = null)
    {
        $this->idLieu = $idLieu;
    
        return $this;
    }

    /**
     * Get idLieu
     *
     * @return \Cinemino\SiteBundle\Entity\Lieu 
     */
    public function getIdLieu()
    {
        return $this->idLieu;
    }

    /**
     * Set idSeances
     *
     * @param \Cinemino\SiteBundle\Entity\Seance $idSeances
     * @return Evenement
     */
    public function setIdSeances(\Cinemino\SiteBundle\Entity\Seance $idSeances = null)
    {
        $this->idSeances = $idSeances;
    
        return $this;
    }

    /**
     * Get idSeances
     *
     * @return \Cinemino\SiteBundle\Entity\Seance 
     */
    public function getIdSeances()
    {
        return $this->idSeances;
    }

    /**
     * Add idIntervenant
     *
     * @param \Cinemino\SiteBundle\Entity\Intervenant $idIntervenant
     * @return Evenement
     */
    public function addIdIntervenant(\Cinemino\SiteBundle\Entity\Intervenant $idIntervenant)
    {
        $this->idIntervenant[] = $idIntervenant;
    
        return $this;
    }

    /**
     * Remove idIntervenant
     *
     * @param \Cinemino\SiteBundle\Entity\Intervenant $idIntervenant
     */
    public function removeIdIntervenant(\Cinemino\SiteBundle\Entity\Intervenant $idIntervenant)
    {
        $this->idIntervenant->removeElement($idIntervenant);
    }

    /**
     * Get idIntervenant
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdIntervenant()
    {
        return $this->idIntervenant;
    }
    
    public function __toString() {
        
        return $this->titreEvenement;
    }
}