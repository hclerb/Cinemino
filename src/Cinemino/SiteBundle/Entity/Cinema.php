<?php

namespace Cinemino\SiteBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Cinema
 *
 * @ORM\Table(name="cinema")
 * @ORM\Entity(repositoryClass="Cinemino\SiteBundle\Entity\CinemaRepository")
 */
class Cinema
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
     * @ORM\Column(name="NOM_CINEMA", type="string", length=25, nullable=false)
     */
    private $nomCinema;

    /**
     * @var string
     *
     * @ORM\Column(name="PHOTO", type="string", length=250, nullable=true)
     */
    private $photo;

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
     * @ORM\Column(name="ADRESSE_MAIL", type="string", length=50, nullable=true)
     */
    private $adresseMail;

    /**
     * @var string
     *
     * @ORM\Column(name="COORDONNEES_TEL", type="string", length=10, nullable=true)
     */
    private $coordonneesTel;

    /**
     * @var string
     *
     * @ORM\Column(name="SITE_WEB", type="string", length=50, nullable=true)
     */
    private $siteWeb;

    /**
     * @var string
     *
     * @ORM\Column(name="COULEUR_FOND_CINEMA", type="string", length=15, nullable=true)
     */
    private $couleurFondCinema;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPE", type="string", length=1, nullable=false)
     */
    private $type;

    /**
     * @var \CineminoUser
     *
     * @ORM\ManyToOne(targetEntity="CineminoUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_COMPTE", referencedColumnName="id")
     * })
     */
    private $idCompte;


    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idSeance;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idSeance = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set nomCinema
     *
     * @param string $nomCinema
     * @return Cinema
     */
    public function setNomCinema($nomCinema)
    {
        $this->nomCinema = $nomCinema;
    
        return $this;
    }

    /**
     * Get nomCinema
     *
     * @return string 
     */
    public function getNomCinema()
    {
        return $this->nomCinema;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return Cinema
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    
        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set logo
     *
     * @param string $logo
     * @return Cinema
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
     * @return Cinema
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
     * Set adresseMail
     *
     * @param string $adresseMail
     * @return Cinema
     */
    public function setAdresseMail($adresseMail)
    {
        $this->adresseMail = $adresseMail;
    
        return $this;
    }

    /**
     * Get adresseMail
     *
     * @return string 
     */
    public function getAdresseMail()
    {
        return $this->adresseMail;
    }

    /**
     * Set coordonneesTel
     *
     * @param string $coordonneesTel
     * @return Cinema
     */
    public function setCoordonneesTel($coordonneesTel)
    {
        $this->coordonneesTel = $coordonneesTel;
    
        return $this;
    }

    /**
     * Get coordonneesTel
     *
     * @return string 
     */
    public function getCoordonneesTel()
    {
        return $this->coordonneesTel;
    }

    /**
     * Set siteWeb
     *
     * @param string $siteWeb
     * @return Cinema
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
     * Set couleurFondCinema
     *
     * @param string $couleurFondCinema
     * @return Cinema
     */
    public function setCouleurFondCinema($couleurFondCinema)
    {
        $this->couleurFondCinema = $couleurFondCinema;
    
        return $this;
    }

    /**
     * Get couleurFondCinema
     *
     * @return string 
     */
    public function getCouleurFondCinema()
    {
        return $this->couleurFondCinema;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Cinema
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
     * Add idSeance
     *
     * @param \Cinemino\SiteBundle\Entity\Seance $idSeance
     * @return Cinema
     */
    public function addIdSeance(\Cinemino\SiteBundle\Entity\Seance $idSeance)
    {
        $this->idSeance[] = $idSeance;
    
        return $this;
    }

    /**
     * Remove idSeance
     *
     * @param \Cinemino\SiteBundle\Entity\Seance $idSeance
     */
    public function removeIdSeance(\Cinemino\SiteBundle\Entity\Seance $idSeance)
    {
        $this->idSeance->removeElement($idSeance);
    }

    /**
     * Get idSeance
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdSeance()
    {
        return $this->idSeance;
    }

    /**
     * Set idCompte
     *
     * @param \Cinemino\SiteBundle\Entity\CineminoUser $idCompte
     * @return Cinema
     */
    public function setIdCompte(\Cinemino\SiteBundle\Entity\CineminoUser $idCompte)
    {
        $this->idCompte = $idCompte;
    
        return $this;
    }

    /**
     * Get idCompte
     *
     * @return \Cinemino\SiteBundle\Entity\CineminoUser
     */
    public function getIdCompte()
    {
        return $this->idCompte;
    }
    
    public function __toString() {     
        return $this->nomCinema;
    }
}