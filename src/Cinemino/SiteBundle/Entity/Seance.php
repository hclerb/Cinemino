<?php

namespace Cinemino\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Seance
 *
 * @ORM\Table(name="seance")
 * @ORM\Entity(repositoryClass="Cinemino\SiteBundle\Entity\SeanceRepository")
 */
class Seance
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
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_SEANCE", type="datetime", nullable=true)
     */
    private $dateSeance;

    /**
     * @var string
     *
     * @ORM\Column(name="VERSION", type="string", length=6, nullable=true)
     */
    private $version;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPE", type="string", length=2, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="AVANT_PREMIERE", type="string", length=1, nullable=true)
     */
    private $avantPremiere;

    /**
     * @var string
     *
     * @ORM\Column(name="SORTIE_NATIONALE", type="string", length=1, nullable=true)
     */
    private $sortieNationale;

    /**
     * @var \Film
     *
     * @ORM\ManyToOne(targetEntity="Film")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_FILM", referencedColumnName="ID")
     * })
     */
    private $idFilm;

    /**
     * @var \Cinema
     *
     * @ORM\ManyToOne(targetEntity="Cinema")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_CINEMA", referencedColumnName="ID")
     * })
     */
    private $idCinema;

    /**
     *
     * @ORM\ManyToMany(targetEntity="Evenement", cascade={"persist"})
     * @ORM\JoinTable(name="seance_evenement",
     *      joinColumns={@ORM\JoinColumn(name="seance_id", referencedColumnName="ID")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="evenement_id", referencedColumnName="ID")}
     *      )
     */
    private $idEvenements;
    
     /**
     *
     * @ORM\ManyToMany(targetEntity="EvenementAssocie", cascade={"persist"})
     * @ORM\JoinTable(name="seance_evenementassocie",
     *      joinColumns={@ORM\JoinColumn(name="seance_id", referencedColumnName="ID")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="evenementassocie_id", referencedColumnName="ID")}
     *      ) 
     */
    private $idEvenementAssocies;
    
    
    protected $finSeance;

    /**
     * Set dateSeance
     *
     * @param \DateTime $dateSeance
     * @return Seance
     */
    public function setDateSeance($dateSeance)
    {
        $this->dateSeance = $dateSeance;
    
        return $this;
    }

    /**
     * Get dateSeance
     *
     * @return \DateTime 
     */
    public function getDateSeance()
    {
        return $this->dateSeance;
    }


    /**
     * Set version
     *
     * @param string $version
     * @return Seance
     */
    public function setVersion($version)
    {
        $this->version = $version;
    
        return $this;
    }

    /**
     * Get version
     *
     * @return string 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Seance
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set avantPremiere
     *
     * @param string $avantPremiere
     * @return Seance
     */
    public function setAvantPremiere($avantPremiere)
    {
        $this->avantPremiere = $avantPremiere;
    
        return $this;
    }

    /**
     * Get avantPremiere
     *
     * @return string 
     */
    public function getAvantPremiere()
    {
        return $this->avantPremiere;
    }

    /**
     * Set sortieNationale
     *
     * @param string $sortieNationale
     * @return Seance
     */
    public function setSortieNationale($sortieNationale)
    {
        $this->sortieNationale = $sortieNationale;
    
        return $this;
    }

    /**
     * Get sortieNationale
     *
     * @return string 
     */
    public function getSortieNationale()
    {
        return $this->sortieNationale;
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
     * Set idCinema
     *
     * @param \Cinemino\SiteBundle\Entity\Cinema $idCinema
     * @return Seance
     */
    public function setIdCinema(\Cinemino\SiteBundle\Entity\Cinema $idCinema = null)
    {
        $this->idCinema = $idCinema;
    
        return $this;
    }

    /**
     * Get idCinema
     *
     * @return \Cinemino\SiteBundle\Entity\Cinema 
     */
    public function getIdCinema()
    {
        return $this->idCinema;
    }

    /**
     * Set idFilm
     *
     * @param \Cinemino\SiteBundle\Entity\Film $idFilm
     * @return Seance
     */
    public function setIdFilm(\Cinemino\SiteBundle\Entity\Film $idFilm = null)
    {
        $this->idFilm = $idFilm;
    
        return $this;
    }

    /**
     * Get idFilm
     *
     * @return \Cinemino\SiteBundle\Entity\Film 
     */
    public function getIdFilm()
    {
        return $this->idFilm;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idEvenements = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idEvenementAssocies = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add idEvenements
     *
     * @param \Cinemino\SiteBundle\Entity\Evenement $idEvenements
     * @return Seance
     */
    public function addIdEvenement(\Cinemino\SiteBundle\Entity\Evenement $idEvenements)
    {
        $this->idEvenements[] = $idEvenements;
    
        return $this;
    }

    /**
     * Remove idEvenements
     *
     * @param \Cinemino\SiteBundle\Entity\Evenement $idEvenements
     */
    public function removeIdEvenement(\Cinemino\SiteBundle\Entity\Evenement $idEvenements)
    {
        $this->idEvenements->removeElement($idEvenements);
    }

    /**
     * Get idEvenements
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdEvenements()
    {
        return $this->idEvenements;
    }

    /**
     * Add idEvenementAssocies
     *
     * @param \Cinemino\SiteBundle\Entity\EvenementAssocie $idEvenementAssocies
     * @return Seance
     */
    public function addIdEvenementAssocie(\Cinemino\SiteBundle\Entity\EvenementAssocie $idEvenementAssocies)
    {
        $this->idEvenementAssocies[] = $idEvenementAssocies;
    
        return $this;
    }

    /**
     * Remove idEvenementAssocies
     *
     * @param \Cinemino\SiteBundle\Entity\EvenementAssocie $idEvenementAssocies
     */
    public function removeIdEvenementAssocie(\Cinemino\SiteBundle\Entity\EvenementAssocie $idEvenementAssocies)
    {
        $this->idEvenementAssocies->removeElement($idEvenementAssocies);
    }

    /**
     * Get idEvenementAssocies
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdEvenementAssocies()
    {
        return $this->idEvenementAssocies;
    }
    

    public function setFinSeance()
    {
      $this->finSeance = new \DateTime($this->getDateSeance()->format('Y-m-d H:i:s'));
      if ($this->getIdFilm()!=NULL)
      {          
       $duree = \explode(":",$this->getIdFilm()->getDuree());
       $this->finSeance->add(new \DateInterval('PT' . $duree[0] . 'H' . $duree[1] . 'M'));
      }
    
      return $this;
    }

    
    public function getFinseance()
    {
        return $this->finSeance;
    }
}