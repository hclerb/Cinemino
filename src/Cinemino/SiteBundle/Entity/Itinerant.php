<?php

namespace Cinemino\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Itinerant
 *
 * @ORM\Table(name="itinerant")
 * @ORM\Entity
 */
class Itinerant
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
     * @var \Cinema
     *
     * @ORM\ManyToOne(targetEntity="Cinema")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_CINEMA", referencedColumnName="ID")
     * })
     */
    private $idCinema;

    /**
     * @var \Cinema
     *
     * @ORM\ManyToOne(targetEntity="Cinema")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CIN_ID_CINEMA", referencedColumnName="ID")
     * })
     */
    private $cinCinema;



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
     * @return Itinerant
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
     * Set cinCinema
     *
     * @param \Cinemino\SiteBundle\Entity\Cinema $cinCinema
     * @return Itinerant
     */
    public function setCinCinema(\Cinemino\SiteBundle\Entity\Cinema $cinCinema = null)
    {
        $this->cinCinema = $cinCinema;
    
        return $this;
    }

    /**
     * Get cinCinema
     *
     * @return \Cinemino\SiteBundle\Entity\Cinema 
     */
    public function getCinCinema()
    {
        return $this->cinCinema;
    }
}