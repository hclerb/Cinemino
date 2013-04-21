<?php

namespace Cinemino\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Itinerant
 *
 * @ORM\Table(name="itinerant")
 * @ORM\Entity
 */
class Itinerant
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
     * @var \Cinema
     *
     * @ORM\ManyToOne(targetEntity="Cinema")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_CINEMA", referencedColumnName="ID")
     * })
     */
    private $idCinema;

    /**
     * @var \Cinema
     *
     * @ORM\ManyToOne(targetEntity="Cinema")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CIN_ID_CINEMA", referencedColumnName="ID")
     * })
     */
    private $cinCinema;


}
