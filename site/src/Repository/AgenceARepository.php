<?php

namespace App\Repository;

use App\Entity\AgenceA;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AgenceA|null find($id, $lockMode = null, $lockVersion = null)
 * @method AgenceA|null findOneBy(array $criteria, array $orderBy = null)
 * @method AgenceA[]    findAll()
 * @method AgenceA[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AgenceARepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AgenceA::class);
    }

    // /**
    //  * @return AgenceA[] Returns an array of AgenceA objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AgenceA
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
