<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cinemino\SiteBundle\Entity;

/**
 * Description of Semaine
 *
 * @author hcle
 */
class Semaine {
    //put your code hereî
    protected $datedebut;
    protected $datefin;
    function __construct($datedebut, $datefin) {
        $this->datedebut = $datedebut;
        $this->datefin = $datefin;
    }
    public function __toString() {
         $mois = array(' ','janvier','février','mars','avril','mai','juin','juillet','août','septembre','octobre','novembre','décembre');
         $lejour = array ('Dimanche','Lundi', 'Mardi','Mercredi','Jeudi','Vendredi','Samedi');
        return "Du ". $lejour[$this->datedebut->format('w')] . " " . $this->datedebut->format('d') . " " . $mois[$this->datedebut->format('n')] .  " au " . $lejour[$this->datefin->format('w')] . " " . $this->datefin->format('d') . " " . $mois[$this->datefin->format('n')];
    }
    public function getDatedebut() {
        return $this->datedebut;
    }

    public function getDatefin() {
        return $this->datefin;
    }

    public function setDatedebut($datedebut) {
        $this->datedebut = $datedebut;
    }

    public function setDatefin($datefin) {
        $this->datefin = $datefin;
    }


}
