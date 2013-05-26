<?php

namespace Cinemino\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

define("LgAfficheBig", 151);
define("HtAfficheBig",201);
define("LgAfficheSmall", 75);
define("HtAfficheSmall",100);


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
     * @ORM\Column(name="REALISATEUR", type="string", length=25, nullable=true)
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
     * @ORM\Column(name="AGE_CONSEILLE", type="string", length=25, nullable=true)
     */
    protected $ageConseille;

    /**
     * @var string
     *
     * @ORM\Column(name="ACTEURS", type="string", length=60, nullable=true)
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
     * @ORM\Column(name="CRITIQUE", type="string", length=15, nullable=true)
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
     *
     * @ORM\ManyToOne(targetEntity="Cinemino\SiteBundle\Entity\ProgrammeCourts",inversedBy="lescourts"); 													inversedBy="lesseances")
     * @ORM\JoinColumn(name="PROG_COURTS_id", referencedColumnName="ID")
     */
    protected $progCourts;

    /**
     * @var \Doctrine\Common\Collections\Collection
     * 
     * @ORM\OneToMany(targetEntity="Cinemino\SiteBundle\Entity\MediaFilm", mappedBy="idFilm")
     */
    protected $idMedias;
    
    
    private $file;              //permet de stocker temporairement le fichier affiche

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idMedias = new \Doctrine\Common\Collections\ArrayCollection();
        $this->affiche="";
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
    public function addIdMedias(\Cinemino\SiteBundle\Entity\MediaFilm $idMedia)
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
    public function removeIdMedias(\Cinemino\SiteBundle\Entity\MediaFilm $idMedia)
    {
        $this->idMedias->removeElement($idMedia);
    }

    /**
     * Get idMedia
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