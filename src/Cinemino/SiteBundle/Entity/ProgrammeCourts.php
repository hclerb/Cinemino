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

}