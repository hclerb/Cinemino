<?php

namespace Cinemino\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Cinemino\SiteBundle\Entity\Media;

/**
 * Media fait durant Cinémino
 *
 * @ORM\Table(name="mediain")
 * @ORM\Entity(repositoryClass="Cinemino\SiteBundle\Entity\MediaInRepository")
 */
class MediaIn extends Media
{
    /**
     * @var \Date
     *
     * @ORM\Column(name="DATE_DEBUT", type="datetime", nullable=true)
     */
    private $dateDebut;

    /**
     * @var \Date
     *
     * @ORM\Column(name="DATE_FIN", type="datetime", nullable=true)
     */
    private $dateFin;

 
    /**
     * Set dateDebut
     *
     * @param \Date $dateDebut
     * @return MediaIn
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    
        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime 
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return MediaIn
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

}