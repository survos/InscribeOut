<?php

namespace App\Repository;

use App\Entity\Sm2MpMedia;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Sm2MpMedia|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sm2MpMedia|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sm2MpMedia[]    findAll()
 * @method Sm2MpMedia[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Sm2MpMediaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Sm2MpMedia::class);
    }

//    /**
//     * @return Sm2MpMedia[] Returns an array of Sm2MpMedia objects
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
    public function findOneBySomeField($value): ?Sm2MpMedia
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
