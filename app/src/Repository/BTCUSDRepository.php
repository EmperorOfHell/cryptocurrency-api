<?php

namespace App\Repository;

use App\Entity\BTCUSD;
use App\Repository\Traits\DateTrait;
use App\Repository\Traits\TruncateTrait;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BTCUSD>
 *
 * @method BTCUSD|null find($id, $lockMode = null, $lockVersion = null)
 * @method BTCUSD|null findOneBy(array $criteria, array $orderBy = null)
 * @method BTCUSD[]    findAll()
 * @method BTCUSD[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BTCUSDRepository extends ServiceEntityRepository
{
    use TruncateTrait, DateTrait;
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BTCUSD::class);
    }

//    /**
//     * @return BTCUSD[] Returns an array of BTCUSD objects
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

//    public function findOneBySomeField($value): ?BTCUSD
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
