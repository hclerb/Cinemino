<?php

namespace Cinemino\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Cinemino\SiteBundle\Entity\Media;

/**
 * Media pour les Evenement
 *
 * @ORM\Table(name="mediaevt")
 * @ORM\Entity(repositoryClass="Cinemino\SiteBundle\Entity\MediaEvtRepository")
 */
class MediaEvt extends Media
{

    /**
     * 
     * @ORM\ManyToOne(targetEntity="Cinemino\SiteBundle\Entity\Evenement", inversedBy="idMedias")
     * @ORM\JoinColumn(name="idEvenement_id", referencedColumnName="ID")
     */
    protected $idEvt;

    
    /**
     * Set idEvt
     *
     * @param \Cinemino\SiteBundle\Entity\Film $idEvt
     * @return Media
     */
    public function setIdEvt(\Cinemino\SiteBundle\Entity\Evenement $idEvt)
    {
        $this->idEvt = $idEvt;
    
        return $this;
    }


    /**
     * Get idEvt
     *
     * @return integer 
     */
    public function getIdEvt()
    {
        return $this->idEvt;
    }

}