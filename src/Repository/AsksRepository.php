<?php

namespace App\Repository;

use App\Entity\Asks;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Asks|null find($id, $lockMode = null, $lockVersion = null)
 * @method Asks|null findOneBy(array $criteria, array $orderBy = null)
 * @method Asks[]    findAll()
 * @method Asks[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AsksRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Asks::class);
    }

    // /**
    //  * @return Asks[] Returns an array of Asks objects
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
    public function findOneBySomeField($value): ?Asks
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
