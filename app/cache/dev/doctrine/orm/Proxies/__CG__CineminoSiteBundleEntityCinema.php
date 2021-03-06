<?php

namespace Proxies\__CG__\Cinemino\SiteBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Cinema extends \Cinemino\SiteBundle\Entity\Cinema implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function setNomCinema($nomCinema)
    {
        $this->__load();
        return parent::setNomCinema($nomCinema);
    }

    public function getNomCinema()
    {
        $this->__load();
        return parent::getNomCinema();
    }

    public function setPhoto($photo)
    {
        $this->__load();
        return parent::setPhoto($photo);
    }

    public function getPhoto()
    {
        $this->__load();
        return parent::getPhoto();
    }

    public function setLogo($logo)
    {
        $this->__load();
        return parent::setLogo($logo);
    }

    public function getLogo()
    {
        $this->__load();
        return parent::getLogo();
    }

    public function setAdresse($adresse)
    {
        $this->__load();
        return parent::setAdresse($adresse);
    }

    public function getAdresse()
    {
        $this->__load();
        return parent::getAdresse();
    }

    public function setAdresseMail($adresseMail)
    {
        $this->__load();
        return parent::setAdresseMail($adresseMail);
    }

    public function getAdresseMail()
    {
        $this->__load();
        return parent::getAdresseMail();
    }

    public function setCoordonneesTel($coordonneesTel)
    {
        $this->__load();
        return parent::setCoordonneesTel($coordonneesTel);
    }

    public function getCoordonneesTel()
    {
        $this->__load();
        return parent::getCoordonneesTel();
    }

    public function setSiteWeb($siteWeb)
    {
        $this->__load();
        return parent::setSiteWeb($siteWeb);
    }

    public function getSiteWeb()
    {
        $this->__load();
        return parent::getSiteWeb();
    }

    public function setCouleurFondCinema($couleurFondCinema)
    {
        $this->__load();
        return parent::setCouleurFondCinema($couleurFondCinema);
    }

    public function getCouleurFondCinema()
    {
        $this->__load();
        return parent::getCouleurFondCinema();
    }

    public function setType($type)
    {
        $this->__load();
        return parent::setType($type);
    }

    public function getType()
    {
        $this->__load();
        return parent::getType();
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function addIdSeance(\Cinemino\SiteBundle\Entity\Seance $idSeance)
    {
        $this->__load();
        return parent::addIdSeance($idSeance);
    }

    public function removeIdSeance(\Cinemino\SiteBundle\Entity\Seance $idSeance)
    {
        $this->__load();
        return parent::removeIdSeance($idSeance);
    }

    public function getIdSeance()
    {
        $this->__load();
        return parent::getIdSeance();
    }

    public function setIdCompte(\Cinemino\SiteBundle\Entity\CineminoUser $idCompte)
    {
        $this->__load();
        return parent::setIdCompte($idCompte);
    }

    public function getIdCompte()
    {
        $this->__load();
        return parent::getIdCompte();
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'nomCinema', 'photo', 'logo', 'adresse', 'adresseMail', 'coordonneesTel', 'siteWeb', 'couleurFondCinema', 'type', 'idCompte');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}