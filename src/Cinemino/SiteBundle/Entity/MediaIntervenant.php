<?php

namespace Cinemino\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Cinemino\SiteBundle\Entity\Media;

/**
 * Media pour les Evenement
 *
 * @ORM\Table(name="mediaintervenant")
 * @ORM\Entity(repositoryClass="Cinemino\SiteBundle\Entity\MediaIntervenantRepository")
 */
class MediaIntervenant extends Media
{

    /**
     * 
     * @ORM\ManyToOne(targetEntity="Cinemino\SiteBundle\Entity\Intervenant", inversedBy="idMedias")
     * @ORM\JoinColumn(name="idIntervenant_id", referencedColumnName="ID")
     */
    protected $idInter;

    
    /**
     * Set idEvt
     *
     * @param \Cinemino\SiteBundle\Entity\Film $idEvt
     * @return Media
     */
    public function setIdInter(\Cinemino\SiteBundle\Entity\Intervenant $idInter)
    {
        $this->idInter = $idInter;
    
        return $this;
    }


    /**
     * Get idInter
     *
     * @return integer 
     */
    public function getIdInter()
    {
        return $this->idInter;
    }

}