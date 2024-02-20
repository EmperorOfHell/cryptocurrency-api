<?php

namespace App\Repository;

use App\Entity\BTCEUR;
use App\Repository\Traits\DateTrait;
use App\Repository\Traits\TruncateTrait;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BTCEUR>
 *
 * @method BTCEUR|null find($id, $lockMode = null, $lockVersion = null)
 * @method BTCEUR|null findOneBy(array $criteria, array $orderBy = null)
 * @method BTCEUR[]    findAll()
 * @method BTCEUR[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BTCEURRepository extends ServiceEntityRepository
{
    use TruncateTrait, DateTrait;
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BTCEUR::class);
    }

//    /**
//     * @return BTCEUR[] Returns an array of BTCEUR objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?BTCEUR
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
