<?php

namespace Cinemino\SiteBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Cinemino\SiteBundle\Entity\Film;
use Cinemino\SiteBundle\Entity\MediaIn;

/**
 * MEdiaInRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MediaInRepository extends EntityRepository
{
   public function thelast()
   {
       $queryBuilder = $this->createQueryBuilder('m');
       $queryBuilder->having($queryBuilder->expr()->max('m.dateFin'));             
       return $queryBuilder->getQuery()
                           ->getArrayResult();
   }
}