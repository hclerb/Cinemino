<?php

namespace Cinemino\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

define("LgPicto", 30);
define("HtPicto", 30);

/**
 * TypeEvenement
 *
 * @ORM\Table(name="type_evenement")
 * @ORM\Entity
 */
class TypeEvenement
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
     * @ORM\Column(name="LABEL", type="string", length=25, nullable=false)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="PICTO", type="string", length=25, nullable=true)
     */
    private $picto;

    private $file;              //permet de stocker temporairement le fichier affiche
    
    /**
     * Set label
     *
     * @param string $label
     * @return TypeEvenement
     */
    public function setLabel($label)
    {
        $this->label = $label;
    
        return $this;
    }

    /**
     * Get label
     *
     * @return string 
     */
    public function getLabel()
    {
        return $this->label;
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
    
    public function __toString() {    
        return $this->label;
    }

    /**
     * Set picto
     *
     * @param string $picto
     * @return TypeEvenement
     */
    public function setPicto($picto)
    {
        $this->picto = $picto;
    
        return $this;
    }

    /**
     * Get picto
     *
     * @return string 
     */
    public function getPicto()
    {
        return $this->picto;
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