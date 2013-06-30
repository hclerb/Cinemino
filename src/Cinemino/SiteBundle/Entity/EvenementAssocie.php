<?php

namespace Cinemino\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Cinemino\SiteBundle\Entity\Evenement;

/**
 * Evenement
 *
 * @ORM\Table(name="evenementassocie")
 * @ORM\Entity(repositoryClass="Cinemino\SiteBundle\Entity\EvenementAssocieRepository")
 */
class EvenementAssocie extends Evenement
{
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
     * @var \Lieu
     *
     * @ORM\ManyToOne(targetEntity="Lieu")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_LIEU", referencedColumnName="ID")
     * })
     */
    private $idLieu;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="PRIORITE", type="integer", nullable=true)
     */
    protected $priorite;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
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
    
    public function __toString() {
        
        return $this->titreEvenement;
    }
}