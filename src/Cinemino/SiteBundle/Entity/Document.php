<?php

namespace Cinemino\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Document
 *
 * @ORM\Table(name="document")
 * @ORM\Entity
 */
class Document
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
     * @ORM\Column(name="NOM_DOCUMENT", type="string", length=25, nullable=true)
     */
    private $nomDocument;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTIF_DOCUMENT", type="string", length=1000, nullable=true)
     */
    private $descriptifDocument;
    
     /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_EVENEMENT", type="datetime", nullable=true)
     */
    private $debutaffichage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_FIN", type="datetime", nullable=true)
     */
    private $finaffichage;

    /**
     * @var string
     *
     * @ORM\Column(name="URL_FICHIER", type="string", length=50, nullable=true)
     */
    private $urlFichier;

    /**
     *
     * @var file
     * 
     * @Assert\file(
     *     maxSize = "4096k"
     *     )
     */    
    private $filefichier;              //permet de stocker temporairement le fichier 

    /**
     * Set nomDocument
     *
     * @param string $nomDocument
     * @return Document
     */
    public function setNomDocument($nomDocument)
    {
        $this->nomDocument = $nomDocument;
    
        return $this;
    }

    /**
     * Get nomDocument
     *
     * @return string 
     */
    public function getNomDocument()
    {
        return $this->nomDocument;
    }

    /**
     * Set descriptifDocument
     *
     * @param string $descriptifDocument
     * @return Document
     */
    public function setDescriptifDocument($descriptifDocument)
    {
        $this->descriptifDocument = $descriptifDocument;
    
        return $this;
    }

    /**
     * Get descriptifDocument
     *
     * @return string 
     */
    public function getDescriptifDocument()
    {
        return $this->descriptifDocument;
    }

    /**
     * Set urlFichier
     *
     * @param string $urlFichier
     * @return Document
     */
    public function setUrlFichier($urlFichier)
    {
        $this->urlFichier = $urlFichier;
    
        return $this;
    }

    /**
     * Get urlFichier
     *
     * @return string 
     */
    public function getUrlFichier()
    {
        return $this->urlFichier;
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
    
        // gestion fichier logo   
    public function setFilefichier($file)
    {
        $this->filefichier = $file;
    }

    public function getFilefichier()
    {
        return $this->filefichier;
    } 

    /**
     * Set debutaffichage
     *
     * @param \DateTime $debutaffichage
     * @return Document
     */
    public function setDebutaffichage($debutaffichage)
    {
        $this->debutaffichage = $debutaffichage;
    
        return $this;
    }

    /**
     * Get debutaffichage
     *
     * @return \DateTime 
     */
    public function getDebutaffichage()
    {
        return $this->debutaffichage;
    }

    /**
     * Set finaffichage
     *
     * @param \DateTime $finaffichage
     * @return Document
     */
    public function setFinaffichage($finaffichage)
    {
        $this->finaffichage = $finaffichage;
    
        return $this;
    }

    /**
     * Get finaffichage
     *
     * @return \DateTime 
     */
    public function getFinaffichage()
    {
        return $this->finaffichage;
    }
}