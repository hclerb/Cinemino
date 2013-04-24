<?php

namespace Cinemino\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Cinemino\SiteBundle\Entity\Media;

/**
 * Media pour les films
 *
 * @ORM\Table(name="mediafilm")
 * @ORM\Entity
 */
class MediaFilm extends Media
{

    /**
     * 
     * @ORM\ManyToOne(targetEntity="Cinemino\SiteBundle\Entity\Film", inversedBy="idMedias")
     * @ORM\JoinColumn(name="idFilm_id", referencedColumnName="ID")
     */
    protected $idFilm;

    
    /**
     * Set idFilm
     *
     * @param \Cinemino\SiteBundle\Entity\Film $idFilm
     * @return Media
     */
    public function setIdFilm(\Cinemino\SiteBundle\Entity\Film $idFilm)
    {
        $this->idFilm = $idFilm;
    
        return $this;
    }


    /**
     * Get idFilm
     *
     * @return integer 
     */
    public function getIdFilm()
    {
        return $this->idFilm;
    }

}