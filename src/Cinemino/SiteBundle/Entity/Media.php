<?php

namespace Cinemino\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Media
 *
 * @ORM\Table(name="media")
 * @ORM\Entity
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"media" = "Media", "mediafilm"="MediaFilm", "mediaevt"="MediaEvt", "mediain"="MediaIn", "mediaintervenant"="MediaIntervenant", "mediaarchive"="MediaArchive"})
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
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="TITRE", type="string", length=100, nullable=true)
     */
    protected $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="URL", type="string", length=1000, nullable=true)
     */
    protected $url;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPE", type="string", length=1, nullable=true)
     */
    protected $type;
   
     /**
     *
     * @var file
     * 
     * @Assert\file(
     *     maxSize = "4096k"
     * )
     */
    protected $file;              //permet de stocker temporairement le fichier url
    
    
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

// gestion fichier    
    public function setFile($file)
    {
        $this->file = $file;
    }

    public function getFile()
    {
        return $this->file;
    } 
}