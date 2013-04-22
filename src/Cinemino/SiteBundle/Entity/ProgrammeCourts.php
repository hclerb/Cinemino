<?php

namespace Cinemino\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Cinemino\SiteBundle\Entity\Film;

/**
 * ProgrammeCourts
 *
 * @ORM\Table(name="programmecourts")
 * @ORM\Entity(repositoryClass="Cinemino\SiteBundle\Entity\ProgrammeCourtsRepository")
 */
class ProgrammeCourts extends Film
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
     *
     * @ORM\OneToMany(targetEntity="Cinemino\SiteBundle\Entity\Film", mappedBy="progCourts")
     */
    protected $lescourts;
  
     
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->lescourts = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add lescourts
     *
     * @param \Cinemino\SiteBundle\Entity\Film $lescourts
     * @return ProgrammeCourts
     */
    public function addLescourt(\Cinemino\SiteBundle\Entity\Film $lescourts)
    {
        $this->lescourts[] = $lescourts;
        $lescourts->setProgCourts($this);
    
        return $this;
    }

    /**
     * Remove lescourts
     *
     * @param \Cinemino\SiteBundle\Entity\Film $lescourts
     */
    public function removeLescourt(\Cinemino\SiteBundle\Entity\Film $lescourts)
    {
        $this->lescourts->removeElement($lescourts);
    }

    /**
     * Get lescourts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLescourts()
    {
        return $this->lescourts;
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
}