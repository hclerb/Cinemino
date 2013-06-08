<?php

namespace Cinemino\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement")
 * @ORM\Entity(repositoryClass="Cinemino\SiteBundle\Entity\EvenementRepository")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"evenement" = "Evenement", "evenenementassocie"="EvenementAssocie"})
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
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="TITRE_EVENEMENT", type="string", length=25, nullable=true)
     */
    protected $titreEvenement;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION_EVENEMENT", type="string", length=100, nullable=true)
     */
    protected $descriptionEvenement;

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
     * 
     * @ORM\OneToMany(targetEntity="Cinemino\SiteBundle\Entity\MediaEvt", mappedBy="idEvt")
     */
    protected $idMedias;
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     * 
     * @ORM\ManyToMany(targetEntity="Cinemino\SiteBundle\Entity\Intervenant", mappedBy="idEvenements", cascade={"persist"})
     */
    private $idIntervenants;

    /**
     * Constructor
     */
    public function __construct()
    {
      $this->idIntervenants = new \Doctrine\Common\Collections\ArrayCollection();  
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
     * Add idMedia
     *
     * @param \Cinemino\SiteBundle\Entity\MediaEvt $idMedia
     * @return Film
     */
    public function addIdMedia(\Cinemino\SiteBundle\Entity\MediaEvt $idMedia)
    {
        $this->idMedias[] = $idMedia;
        $idMedia->setIdEvt($this);
    
        return $this;
    }

    /**
     * Remove idMedia
     *
     * @param \Cinemino\SiteBundle\Entity\MediaEvt $idMedia
     */
    public function removeIdMedia(\Cinemino\SiteBundle\Entity\MediaEvt $idMedia)
    {
        $this->idMedias->removeElement($idMedia);
    }

    /**
     * Get idMedia
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdMedia()
    {
        return $this->idMedias;
    }
    
    public function __toString() {
        
        return $this->titreEvenement;
    }

    /**
     * Get idMedias
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdMedias()
    {
        return $this->idMedias;
    }

    /**
     * Add idIntervenants
     *
     * @param \Cinemino\SiteBundle\Entity\Intervenant $idIntervenants
     * @return Evenement
     */
    public function addIdIntervenant(\Cinemino\SiteBundle\Entity\Intervenant $idIntervenants)
    {
        $this->idIntervenants[] = $idIntervenants;
        $idIntervenants->addIdEvenement($this);
    
        return $this;
    }

    /**
     * Remove idIntervenants
     *
     * @param \Cinemino\SiteBundle\Entity\Intervenant $idIntervenants
     */
    public function removeIdIntervenant(\Cinemino\SiteBundle\Entity\Intervenant $idIntervenants)
    {
        $this->idIntervenants->removeElement($idIntervenants);
        $idIntervenants->removeIdEvenement($this);
    }

    /**
     * Get idIntervenants
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdIntervenants()
    {
        return $this->idIntervenants;
    }
}