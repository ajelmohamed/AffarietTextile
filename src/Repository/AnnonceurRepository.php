<?php

namespace App\Repository;

use App\Entity\Annonceur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Annonceur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Annonceur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Annonceur[]    findAll()
 * @method Annonceur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AnnonceurRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Annonceur::class);
    }

    // /**
    //  * @return Annonceur[] Returns an array of Annonceur objects
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
    public function findOneBySomeField($value): ?Annonceur
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
