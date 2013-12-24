<?php

namespace Cinemino\SiteBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Cinemino\SiteBundle\Entity\Film;
use Cinemino\SiteBundle\Entity\Media;
/**
 * FilmRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SeanceRepository extends EntityRepository
{
   public function findFromToday()
   {
      $datejour = new \DateTime('now');
      $queryBuilder = $this->createQueryBuilder('s') 
               ->where('s.dateSeance >= :date1')
               ->setParameter('date1', $datejour->format('Y-m-d H:i:s'))
               ->orderBy('s.dateSeance','ASC');
      
      return $queryBuilder->getQuery()
                           ->getResult();
   }
      
   public function findFromTheday($theday)
   {
      
      $queryBuilder = $this->createQueryBuilder('s') 
               ->where('s.dateSeance >= :date1')
               ->setParameter('date1', $theday->format('Y-m-d'))
               ->orderBy('s.dateSeance','ASC');
      
      return $queryBuilder->getQuery()
                           ->getResult();
   }
   
   public function findFromTodayForFilm($idfilm)
   {
      $datejour = new \DateTime('now');
      $queryBuilder = $this->createQueryBuilder('s') 
               ->where('s.dateSeance >= :date1')
               ->setParameter('date1', $datejour->format('Y-m-d H:i:s'))
               ->andWhere('s.idFilm = :idfilm')
               ->setParameter('idfilm', $idfilm)
               ->orderBy('s.dateSeance','ASC');
      
      return $queryBuilder->getQuery()
                           ->getResult();
   }

      public function findentredate($datedebut,$datefin)
   {
       $queryBuilder = $this->createQueryBuilder('s')
                     ->innerJoin('s.idFilm', 'f')
                      ->innerJoin('s.idCinema', 'c')
                      ->addSelect('f')
                      ->addSelect('c');
       $queryBuilder->where('s.dateSeance >= :date1 ')
                    ->setParameter('date1', $datedebut->format('Y-m-d H:i:s')); 
       $queryBuilder->andWhere('s.dateSeance <= :date2 ')
                    ->setParameter('date2', $datefin->format('Y-m-d H:i:s'))
                     ->orderBy('s.dateSeance','ASC');
              
       return $queryBuilder->getQuery()
                           ->getArrayResult();
   }
   
   public function findRestantToday()
   {
       $datejour = new \DateTime('now');
       $cejourfin = new \DateTime('now');
       $cejourfin->setTime(23, 59, 0);
       $queryBuilder = $this->createQueryBuilder('s')
                     ->innerJoin('s.idFilm', 'f')
                      ->innerJoin('s.idCinema', 'c')
                      ->leftJoin ('s.idEvenements', 'e')
                      ->leftJoin('e.idType', 't')
                      ->leftJoin('s.idEvenementAssocies', 'a')
                      ->leftJoin('a.idType', 'at')
                      ->addSelect('f')
                      ->addSelect('c')
                      ->addSelect('e')
                      ->addSelect('t')
                      ->addSelect('a')
                      ->addSelect('at');
       $queryBuilder->where('s.dateSeance >= :date1 ')
                    ->setParameter('date1', $datejour->format('Y-m-d H:i:s')); 
       $queryBuilder->andWhere('s.dateSeance <= :date2 ')
                    ->setParameter('date2', $cejourfin->format('Y-m-d H:i:s'))
                     ->orderBy('s.dateSeance','ASC');
              
       return $queryBuilder->getQuery()
                           ->getArrayResult();
   }
   
   public function dejaUneAvant($entity)
   {
       $queryBuilder = $this->createQueryBuilder('s')
               ->where('s.dateSeance >= :date1')
               ->setParameter('date1', $entity->getDateSeance()->format('Y-m-d H:i:s'));
       
       $datefin = new \DateTime($entity->getDateSeance()->format('Y-m-d H:i:s'));
       $duree = \explode(":",$entity->getIdFilm()->getDuree());
       $datefin->add(new \DateInterval('PT' . $duree[0] . 'H' . $duree[1] . 'M'));
       
       $queryBuilder->andWhere('s.dateSeance <= :date2')
                    ->setParameter('date2', $datefin->format('Y-m-d H:i:s'));
       $queryBuilder->andWhere('s.idCinema = :idcinema ')
                    ->setParameter('idcinema', $entity->getIdCinema()->getId());
       
       return $queryBuilder->getQuery()
                           ->getResult();
   } 
   
   public function dejaUneApres($entity)
   {
       $queryBuilder = $this->createQueryBuilder('s')
               ->where('s.dateSeance < :date1')
               ->setParameter('date1', $entity->getDateSeance()->format('Y-m-d H:i:s'));
       
       $datefin = new \DateTime($entity->getDateSeance()->format('Y-m-d H:i:s'));
       $datefin->sub(new \DateInterval('PT3H'));
       
       $queryBuilder->andWhere('s.dateSeance > :date2')
                    ->setParameter('date2', $datefin->format('Y-m-d H:i:s'));
       $queryBuilder->andWhere('s.idCinema = :idcinema ')
                    ->setParameter('idcinema', $entity->getIdCinema()->getId())   
                    ->orderBy('s.dateSeance','DESC');
       
            
       $entities = $queryBuilder->getQuery()->getResult();
       if ($entities !=NULL)
        {
          $datefin = new \DateTime($entities[0]->getDateSeance()->format('Y-m-d H:i:s'));
          $duree = \explode(":",$entities[0]->getIdFilm()->getDuree());
          $datefin->add(new \DateInterval('PT' . $duree[0] . 'H' . $duree[1] . 'M'));
          if ($entity->getDateSeance()>$datefin) return true;
          else {return false;}
        }
       return true;
   }
   
   public function dejaUneAvantMaj($entity)
   {
       $queryBuilder = $this->createQueryBuilder('s')
               ->where('s.dateSeance >= :date1')
               ->setParameter('date1', $entity->getDateSeance()->format('Y-m-d H:i:s'));
       
       $datefin = new \DateTime($entity->getDateSeance()->format('Y-m-d H:i:s'));
       $duree = \explode(":",$entity->getIdFilm()->getDuree());
       $datefin->add(new \DateInterval('PT' . $duree[0] . 'H' . $duree[1] . 'M'));
       
       $queryBuilder->andWhere('s.dateSeance <= :date2')
                    ->setParameter('date2', $datefin->format('Y-m-d H:i:s'));
       $queryBuilder->andWhere('s.idCinema = :idcinema ')
                    ->setParameter('idcinema', $entity->getIdCinema()->getId());
       $queryBuilder->andWhere('s.id != :id ')
                    ->setParameter('id', $entity->getId());
       
       return $queryBuilder->getQuery()
                           ->getResult();
   } 
   
   public function dejaUneApresMaj($entity)
   {
       $queryBuilder = $this->createQueryBuilder('s')
               ->where('s.dateSeance < :date1')
               ->setParameter('date1', $entity->getDateSeance()->format('Y-m-d H:i:s'));
       
       $datefin = new \DateTime($entity->getDateSeance()->format('Y-m-d H:i:s'));
       $datefin->sub(new \DateInterval('PT3H'));
       
       $queryBuilder->andWhere('s.dateSeance > :date2')
                    ->setParameter('date2', $datefin->format('Y-m-d H:i:s'));
       $queryBuilder->andWhere('s.idCinema = :idcinema ')
                    ->setParameter('idcinema', $entity->getIdCinema()->getId());
       $queryBuilder->andWhere('s.id != :id ')
                    ->setParameter('id', $entity->getId())       
                    ->orderBy('s.dateSeance','DESC');
       
            
       $entities = $queryBuilder->getQuery()->getResult();
       if ($entities !=NULL)
        {
          $datefin = new \DateTime($entities[0]->getDateSeance()->format('Y-m-d H:i:s'));
          $duree = \explode(":",$entities[0]->getIdFilm()->getDuree());
          $datefin->add(new \DateInterval('PT' . $duree[0] . 'H' . $duree[1] . 'M'));
          if ($entity->getDateSeance()>$datefin) return true;
          else return false;
        }
       return true;
   }
}