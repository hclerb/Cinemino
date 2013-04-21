<?php

namespace Cinemino\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Media
 *
 * @ORM\Table(name="media")
 * @ORM\Entity
 */
class Media
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
     * @ORM\Column(name="TITRE", type="string", length=25, nullable=true)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="URL", type="string", length=100, nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPE", type="string", length=1, nullable=true)
     */
    private $type;


    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idFilm;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idFilm = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set titre
     *
     * @param string $titre
     * @return Media
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Media
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Media
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
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
     * Add idFilm
     *
     * @param \Cinemino\SiteBundle\Entity\Film $idFilm
     * @return Media
     */
    public function addIdFilm(\Cinemino\SiteBundle\Entity\Film $idFilm)
    {
        $this->idFilm[] = $idFilm;
    
        return $this;
    }

    /**
     * Remove idFilm
     *
     * @param \Cinemino\SiteBundle\Entity\Film $idFilm
     */
    public function removeIdFilm(\Cinemino\SiteBundle\Entity\Film $idFilm)
    {
        $this->idFilm->removeElement($idFilm);
    }

    /**
     * Get idFilm
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdFilm()
    {
        return $this->idFilm;
    }
}