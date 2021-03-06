<?php

namespace Cinemino\SiteBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Cinemino\SiteBundle\Entity\Film;
use Cinemino\SiteBundle\Entity\MediaFilm;

/**
 * MEdiaFilmRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MediaFilmRepository extends EntityRepository
{
  public function findAlltrie()
    {
      $queryBuilder = $this->createQueryBuilder('m') 	 
                   ->orderBy('m.idFilm','ASC'); 
      $query = $queryBuilder->getQuery(); 		 	  
      return $query->getResult();        
    }
    
  public function findAllgroupbyfilm() {
       $queryBuilder = $this->createQueryBuilder('m')
                        ->leftJoin('m.idFilm', 'f')
                        ->addSelect('f')
                        ->orderBy('m.idFilm');
            
       return $queryBuilder->getQuery()
                           ->getArrayResult();
    }
}