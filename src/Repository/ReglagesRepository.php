<?php

namespace App\Repository;

use App\Entity\Reglages;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Reglages|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reglages|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reglages[]    findAll()
 * @method Reglages[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReglagesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Reglages::class);
    }

    // /**
    //  * @return Reglages[] Returns an array of Reglages objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Reglages
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
