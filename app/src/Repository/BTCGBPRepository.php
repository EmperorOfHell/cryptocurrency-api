<?php

namespace App\Repository;

use App\Entity\BTCGBP;
use App\Repository\Traits\DateTrait;
use App\Repository\Traits\TruncateTrait;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BTCGBP>
 *
 * @method BTCGBP|null find($id, $lockMode = null, $lockVersion = null)
 * @method BTCGBP|null findOneBy(array $criteria, array $orderBy = null)
 * @method BTCGBP[]    findAll()
 * @method BTCGBP[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BTCGBPRepository extends ServiceEntityRepository
{
    use TruncateTrait, DateTrait;
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BTCGBP::class);
    }

//    /**
//     * @return BTCGBP[] Returns an array of BTCGBP objects
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

//    public function findOneBySomeField($value): ?BTCGBP
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
