<?php

namespace App\Repository;

use App\Entity\AgenceB;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AgenceB|null find($id, $lockMode = null, $lockVersion = null)
 * @method AgenceB|null findOneBy(array $criteria, array $orderBy = null)
 * @method AgenceB[]    findAll()
 * @method AgenceB[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AgenceBRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AgenceB::class);
    }

    // /**
    //  * @return AgenceB[] Returns an array of AgenceB objects
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
    public function findOneBySomeField($value): ?AgenceB
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
