<?php

namespace App\Repository;

use App\Entity\Slova;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Slova|null find($id, $lockMode = null, $lockVersion = null)
 * @method Slova|null findOneBy(array $criteria, array $orderBy = null)
 * @method Slova[]    findAll()
 * @method Slova[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SlovaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Slova::class);
    }

//    /**
//     * @return Slova[] Returns an array of Slova objects
//     */
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
    public function findOneBySomeField($value): ?Slova
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
