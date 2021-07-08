<?php

namespace App\Repository;

use App\Entity\AgenceC;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AgenceC|null find($id, $lockMode = null, $lockVersion = null)
 * @method AgenceC|null findOneBy(array $criteria, array $orderBy = null)
 * @method AgenceC[]    findAll()
 * @method AgenceC[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AgenceCRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AgenceC::class);
    }

    // /**
    //  * @return AgenceC[] Returns an array of AgenceC objects
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
    public function findOneBySomeField($value): ?AgenceC
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
