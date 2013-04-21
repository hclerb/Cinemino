<?php

namespace Cinemino\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sponsor
 *
 * @ORM\Table(name="sponsor")
 * @ORM\Entity
 */
class Sponsor
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
     * @var string
     *
     * @ORM\Column(name="NOM_SPONSOR", type="string", length=50, nullable=true)
     */
    private $nomSponsor;

    /**
     * @var string
     *
     * @ORM\Column(name="LOGO", type="string", length=250, nullable=true)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="ADRESSE", type="string", length=50, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="SITE_WEB", type="string", length=50, nullable=true)
     */
    private $siteWeb;

    /**
     * @var string
     *
     * @ORM\Column(name="ACTIF", type="string", length=1, nullable=true)
     */
    private $actif;



    /**
     * Set nomSponsor
     *
     * @param string $nomSponsor
     * @return Sponsor
     */
    public function setNomSponsor($nomSponsor)
    {
        $this->nomSponsor = $nomSponsor;
    
        return $this;
    }

    /**
     * Get nomSponsor
     *
     * @return string 
     */
    public function getNomSponsor()
    {
        return $this->nomSponsor;
    }

    /**
     * Set logo
     *
     * @param string $logo
     * @return Sponsor
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    
        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Sponsor
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    
        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set siteWeb
     *
     * @param string $siteWeb
     * @return Sponsor
     */
    public function setSiteWeb($siteWeb)
    {
        $this->siteWeb = $siteWeb;
    
        return $this;
    }

    /**
     * Get siteWeb
     *
     * @return string 
     */
    public function getSiteWeb()
    {
        return $this->siteWeb;
    }

    /**
     * Set actif
     *
     * @param string $actif
     * @return Sponsor
     */
    public function setActif($actif)
    {
        $this->actif = $actif;
    
        return $this;
    }

    /**
     * Get actif
     *
     * @return string 
     */
    public function getActif()
    {
        return $this->actif;
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