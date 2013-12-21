<?php

namespace Cinemino\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

define("LgAfficheFBig", 300);
define("HtAfficheFBig",402);
define("LgAfficheFSmall", 150);
define("HtAfficheFSmall",201);

define("LgPhotoFSmall", 319);
define("HtPhotoFSmall",213);
define("LgPhotoFBig", 720);
define("HtPhotoFBig",480);


/**
 * Film
 *
 * @ORM\Table(name="film")
 * @ORM\Entity(repositoryClass="Cinemino\SiteBundle\Entity\FilmRepository")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"film" = "Film", "programmecourts"="ProgrammeCourts"})
 */
class Film
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
     * @ORM\Column(name="TITRE_FILM", type="string", length=100, nullable=true)
     */
    protected $titreFilm;

    /**
     * @var string
     *
     * @ORM\Column(name="REALISATEUR", type="string", length=55, nullable=true)
     */
    protected $realisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="DUREE", type="string", length=5, nullable=true)
     */
    protected $duree;

    /**
     * @var string
     *
     * @ORM\Column(name="ANNEE_PROD", type="string", length=4, nullable=true)
     */
    protected $anneeProd;

    /**
     * @var string
     *
     * @ORM\Column(name="CLASSEMENT_ART_ESSAI", type="string", length=25, nullable=true)
     */
    protected $classementArtEssai;

    /**
     * @var string
     *
     * @ORM\Column(name="PROVENANCE", type="string", length=25, nullable=true)
     */
    protected $provenance;

    /**
     * @var string
     *
     * @ORM\Column(name="INTERDICTION", type="string", length=25, nullable=true)
     */
    protected $interdiction;

    /**
     * @var string
     *
     * @ORM\Column(name="AGE_CONSEILLE", type="integer", length=25, nullable=true)
     */
    protected $ageConseille;

    /**
     * @var string
     *
     * @ORM\Column(name="ACTEURS", type="string", length=255, nullable=true)
     */
    protected $acteurs;

    /**
     * @var string
     *
     * @ORM\Column(name="SYNOPSYS", type="text", nullable=true)
     */
    protected $synopsys;

    /**
     * @var string
     *
     * @ORM\Column(name="CRITIQUE", type="text", nullable=true)
     */
    protected $critique;

    /**
     * @var string
     *
     * @ORM\Column(name="AFFICHE", type="string", length=150, nullable=true)
     */
    protected $affiche;

     /**
     * @var string
     *
     * @ORM\Column(name="TOTEM", type="string", length=150, nullable=true)
     */
    protected $totem;
    
    /**
     * @var string
     *
     * @ORM\Column(name="COULEUR_TEXTE", type="string", length=15, nullable=true)
     */
    protected $couleurTexte;

    /**
     * @var string
     *
     * @ORM\Column(name="COULEUR_FOND_FILM", type="string", length=15, nullable=true)
     */
    protected $couleurFondFilm;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPE", type="string", length=1, nullable=true)
     */
    protected $type;
    
        /**
     * @var boolean
     *
     * @ORM\Column(name="STOCKE", type="boolean", nullable=true)
     */
    protected $stocke;

     /**
     * @var boolean
     *
     * @ORM\Column(name="ANIMATION", type="boolean", nullable=true)
     */
    protected $animation;   
    
    /**
     * @var string
     *
     * @ORM\Column(name="TYPE_ANIMATION", type="string", length=1, nullable=true)
     */
    protected $typeAnimation;    
    /**
     *
     * @ORM\ManyToOne(targetEntity="Cinemino\SiteBundle\Entity\ProgrammeCourts",inversedBy="lescourts"); 													inversedBy="lesseances")
     * @ORM\JoinColumn(name="PROG_COURTS_id", referencedColumnName="ID")
     */
    protected $progCourts;

    /**
     * @var \Doctrine\Common\Collections\Collection
     * 
     * @ORM\OneToMany(targetEntity="Cinemino\SiteBundle\Entity\MediaFilm", mappedBy="idFilm", cascade={"remove", "persist"})
     */
    protected $idMedias;
    
     /**
     *
     * @var file
     * 
     * @Assert\File(
     *     maxSize = "2048k",
     *     mimeTypes = {"image/jpeg"},
     *     mimeTypesMessage = "Attention fichier image de type jpeg"
     *     )
     */
    private $file;              //permet de stocker temporairement le fichier affiche

     /**
     *
     * @var file
     * 
     * @Assert\File(
     *     maxSize = "100k"
     *     )
     */
    private $filet;              //permet de stocker temporairement le fichier totem
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idMedias = new \Doctrine\Common\Collections\ArrayCollection();
        $this->affiche="";
        $this->totem="";
    }
    
    /**
     * Set titreFilm
     *
     * @param string $titreFilm
     * @return Film
     */
    public function setTitreFilm($titreFilm)
    {
        $this->titreFilm = $titreFilm;
    
        return $this;
    }

    /**
     * Get titreFilm
     *
     * @return string 
     */
    public function getTitreFilm()
    {
        return $this->titreFilm;
    }

    /**
     * Set realisateur
     *
     * @param string $realisateur
     * @return Film
     */
    public function setRealisateur($realisateur)
    {
        $this->realisateur = $realisateur;
    
        return $this;
    }

    /**
     * Get realisateur
     *
     * @return string 
     */
    public function getRealisateur()
    {
        return $this->realisateur;
    }

    /**
     * Set duree
     *
     * @param string $duree
     * @return Film
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;
    
        return $this;
    }

    /**
     * Get duree
     *
     * @return string 
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set anneeProd
     *
     * @param string $anneeProd
     * @return Film
     */
    public function setAnneeProd($anneeProd)
    {
        $this->anneeProd = $anneeProd;
    
        return $this;
    }

    /**
     * Get anneeProd
     *
     * @return string 
     */
    public function getAnneeProd()
    {
        return $this->anneeProd;
    }

    /**
     * Set classementArtEssai
     *
     * @param string $classementArtEssai
     * @return Film
     */
    public function setClassementArtEssai($classementArtEssai)
    {
        $this->classementArtEssai = $classementArtEssai;
    
        return $this;
    }

    /**
     * Get classementArtEssai
     *
     * @return string 
     */
    public function getClassementArtEssai()
    {
        return $this->classementArtEssai;
    }

    /**
     * Set provenance
     *
     * @param string $provenance
     * @return Film
     */
    public function setProvenance($provenance)
    {
        $this->provenance = $provenance;
    
        return $this;
    }

    /**
     * Get provenance
     *
     * @return string 
     */
    public function getProvenance()
    {
        return $this->provenance;
    }

    /**
     * Set interdiction
     *
     * @param string $interdiction
     * @return Film
     */
    public function setInterdiction($interdiction)
    {
        $this->interdiction = $interdiction;
    
        return $this;
    }

    /**
     * Get interdiction
     *
     * @return string 
     */
    public function getInterdiction()
    {
        return $this->interdiction;
    }

    /**
     * Set ageConseille
     *
     * @param string $ageConseille
     * @return Film
     */
    public function setAgeConseille($ageConseille)
    {
        $this->ageConseille = $ageConseille;
    
        return $this;
    }

    /**
     * Get ageConseille
     *
     * @return string 
     */
    public function getAgeConseille()
    {
        return $this->ageConseille;
    }

    /**
     * Set acteurs
     *
     * @param string $acteurs
     * @return Film
     */
    public function setActeurs($acteurs)
    {
        $this->acteurs = $acteurs;
    
        return $this;
    }

    /**
     * Get acteurs
     *
     * @return string 
     */
    public function getActeurs()
    {
        return $this->acteurs;
    }

    /**
     * Set synopsys
     *
     * @param string $synopsys
     * @return Film
     */
    public function setSynopsys($synopsys)
    {
        $this->synopsys = $synopsys;
    
        return $this;
    }

    /**
     * Get synopsys
     *
     * @return string 
     */
    public function getSynopsys()
    {
        return $this->synopsys;
    }

    /**
     * Set critique
     *
     * @param string $critique
     * @return Film
     */
    public function setCritique($critique)
    {
        $this->critique = $critique;
    
        return $this;
    }

    /**
     * Get critique
     *
     * @return string 
     */
    public function getCritique()
    {
        return $this->critique;
    }

    /**
     * Set affiche
     *
     * @param string $affiche
     * @return Film
     */
    public function setAffiche($affiche)
    {
        $this->affiche = $affiche;
    
        return $this;
    }

    /**
     * Get affiche
     *
     * @return string 
     */
    public function getAffiche()
    {
        return $this->affiche;
    }
    
    /**
     * Set totem
     *
     * @param string $affiche
     * @return Film
     */
    public function setTotem($totem)
    {
        $this->totem = $totem;
    
        return $this;
    }

    /**
     * Get totem
     *
     * @return string 
     */
    public function getTotem()
    {
        return $this->totem;
    }

    /**
     * Set couleurTexte
     *
     * @param string $couleurTexte
     * @return Film
     */
    public function setCouleurTexte($couleurTexte)
    {
        $this->couleurTexte = $couleurTexte;
    
        return $this;
    }

    /**
     * Get couleurTexte
     *
     * @return string 
     */
    public function getCouleurTexte()
    {
        return $this->couleurTexte;
    }

    /**
     * Set couleurFondFilm
     *
     * @param string $couleurFondFilm
     * @return Film
     */
    public function setCouleurFondFilm($couleurFondFilm)
    {
        $this->couleurFondFilm = $couleurFondFilm;
    
        return $this;
    }

    /**
     * Get couleurFondFilm
     *
     * @return string 
     */
    public function getCouleurFondFilm()
    {
        return $this->couleurFondFilm;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Film
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
     * Add idMedia
     *
     * @param \Cinemino\SiteBundle\Entity\MediaFilm $idMedia
     * @return Film
     */
    public function addIdMedia(\Cinemino\SiteBundle\Entity\MediaFilm $idMedia)
    {
        $this->idMedias[] = $idMedia;
        $idMedia->setIdFilm($this);
    
        return $this;
    }

    /**
     * Remove idMedia
     *
     * @param \Cinemino\SiteBundle\Entity\MediaFilm $idMedia
     */
    public function removeIdMedia(\Cinemino\SiteBundle\Entity\MediaFilm $idMedia)
    {
        $this->idMedias->removeElement($idMedia);
    }

    /**
     * Get idMedias
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdMedias()
    {
        return $this->idMedias;
    }

    /**
     * Set progCourts
     *
     * @param \Cinemino\SiteBundle\Entity\ProgrammeCourts $progCourts
     * @return Film
     */
    public function setProgCourts(\Cinemino\SiteBundle\Entity\ProgrammeCourts $progCourts = null)
    {
        $this->progCourts = $progCourts;
    
        return $this;
    }

    /**
     * Get progCourts
     *
     * @return \Cinemino\SiteBundle\Entity\ProgrammeCourts 
     */
    public function getProgCourts()
    {
        return $this->progCourts;
    }
    
   public function __toString() {     
        return $this->titreFilm . ' - ' . $this->realisateur;
    }
    
// gestion fichier affiche    
    public function setFile($file)
    {
        $this->file = $file;
    }

    public function getFile()
    {
        return $this->file;
    }    

// gestion fichier totem    
    public function setFilet($file)
    {
        $this->filet = $file;
    }

    public function getFilet()
    {
        return $this->filet;
    } 
    
    /**
     * Set stock
     *
     * @param boolean $range
     * @return Film
     */
    public function setStocke($range)
    {
        $this->stocke = $range;
    
        return $this;
    }

    /**
     * Get stock
     *
     * @return boolean 
     */
    public function getStocke()
    {
        return $this->stocke;
    }

    /**
     * Set animation
     *
     * @param boolean $animation
     * @return Film
     */
    public function setAnimation($animation)
    {
        $this->animation = $animation;
    
        return $this;
    }

    /**
     * Get animation
     *
     * @return boolean 
     */
    public function getAnimation()
    {
        return $this->animation;
    }

    /**
     * Set typeAnimation
     *
     * @param string $typeAnimation
     * @return Film
     */
    public function setTypeAnimation($typeAnimation)
    {
        $this->typeAnimation = $typeAnimation;
    
        return $this;
    }

    /**
     * Get typeAnimation
     *
     * @return string 
     */
    public function getTypeAnimation()
    {
        return $this->typeAnimation;
    }
}