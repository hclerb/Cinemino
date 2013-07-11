<?php

namespace Cinemino\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Cinemino\SiteBundle\Entity\Media;

/**
 * Media pour les Archive
 *
 * @ORM\Table(name="mediaarchive")
 * @ORM\Entity
 */
class MediaArchive extends Media
{

    /**
     * 
     * @ORM\ManyToOne(targetEntity="Cinemino\SiteBundle\Entity\Archive", inversedBy="idMedias")
     * @ORM\JoinColumn(name="idarchive_id", referencedColumnName="ID")
     */
    protected $idArchive;

    
    /**
     * Set idArchive
     *
     * @param \Cinemino\SiteBundle\Entity\Archive $idArchive
     * @return Media
     */
    public function setIdArchive(\Cinemino\SiteBundle\Entity\Archive $idArchive)
    {
        $this->idArchive = $idArchive;
    
        return $this;
    }


    /**
     * Get idArchive
     *
     * @return integer 
     */
    public function getIdArchive()
    {
        return $this->idArchive;
    }

}