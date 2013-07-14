<?php

namespace Cinemino\SiteBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


define("LgPhotoCBig", 500);
define("HtPhotoCBig",282);
define("LgPhotoCSmall", 100);
define("HtPhotoCSmall",60);

define("LgLogoCBig", 500);
define("HtLogoCBig",282);
define("LgLogoCSmall", 100);
define("HtLogoCSmall",60);
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
     * 
     * @Assert\Email(
     *     message = "L' email '{{ value }}' n'est pas une adresse mail valide"
     * )
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
     * @Assert\Url()
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
     * @ORM\Column(name="LATITUDE", type="string", length=15, nullable=true)
     */
    private $latitude;

     /**
     * @var string
     *
     * @ORM\Column(name="LONGITUDE", type="string", length=15, nullable=true)
     */
    private $longitude;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="ZONE", type="smallint", nullable=true)
     */
    private $zone;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="TYPE", type="smallint", nullable=true)
     */
    private $type;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="CDPC", type="boolean", nullable=true)
     */
    private $cdpc;    

    /**
     * @var string
     *
     * @ORM\Column(name="SPECIFICITE", type="string", length=500, nullable=true)
     */
    private $specificite;    
    
    /**
     * @var string
     *
     * @ORM\Column(name="EQUIPE", type="string", length=500, nullable=true)
     */
    private $equipe; 
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
     *
     * @var file
     * 
     * @Assert\file(
     *     maxSize = "2048k",
     *     mimeTypes = {"image/jpeg"},
     *     mimeTypesMessage = "Attention fichier image de type jpeg"
     *     )
     */
    private $filePhoto;              //permet de stocker temporairement le fichier photo
    
     /**
     *
     * @var file
     * 
     * @Assert\file(
     *     maxSize = "2048k",
     *     mimeTypes = {"image/jpeg"},
     *     mimeTypesMessage = "Attention fichier image de type jpeg"
     *     )
     */
    private $fileLogo;              //permet de stocker temporairement le fichier logo

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
    
    // gestion fichier    
    public function setFilePhoto($file)
    {
        $this->filePhoto = $file;
    }

    public function getFilePhoto()
    {
        return $this->filePhoto;
    }  
    
    // gestion fichier    
    public function setFileLogo($file)
    {
        $this->fileLogo = $file;
    }

    public function getFileLogo()
    {
        return $this->fileLogo;
    } 

    /**
     * Set latitude
     *
     * @param string $latitude
     * @return Cinema
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    
        return $this;
    }

    /**
     * Get latitude
     *
     * @return string 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     * @return Cinema
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    
        return $this;
    }

    /**
     * Get longitude
     *
     * @return string 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set zone
     *
     * @param integer $zone
     * @return Cinema
     */
    public function setZone($zone)
    {
        $this->zone = $zone;
    
        return $this;
    }

    /**
     * Get zone
     *
     * @return integer 
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Set cdpc
     *
     * @param boolean $cdpc
     * @return Cinema
     */
    public function setCdpc($cdpc)
    {
        $this->cdpc = $cdpc;
    
        return $this;
    }

    /**
     * Get cdpc
     *
     * @return boolean 
     */
    public function getCdpc()
    {
        return $this->cdpc;
    }

    /**
     * Set specificite
     *
     * @param string $specificite
     * @return Cinema
     */
    public function setSpecificite($specificite)
    {
        $this->specificite = $specificite;
    
        return $this;
    }

    /**
     * Get specificite
     *
     * @return string 
     */
    public function getSpecificite()
    {
        return $this->specificite;
    }

    /**
     * Set equipe
     *
     * @param string $equipe
     * @return Cinema
     */
    public function setEquipe($equipe)
    {
        $this->equipe = $equipe;
    
        return $this;
    }

    /**
     * Get equipe
     *
     * @return string 
     */
    public function getEquipe()
    {
        return $this->equipe;
    }
}