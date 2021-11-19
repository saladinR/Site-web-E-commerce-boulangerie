<?php

namespace App\Repository;

use App\Entity\Sycommerce;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Sycommerce|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sycommerce|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sycommerce[]    findAll()
 * @method Sycommerce[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SycommerceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Sycommerce::class);
    }

    // /**
    //  * @return Sycommerce[] Returns an array of Sycommerce objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Sycommerce
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
