<?php

namespace Cinemino\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(name="LABEL", type="string", length=25, nullable=true)
     */
    private $label;



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
}