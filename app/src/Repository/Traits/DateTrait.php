<?php

namespace App\Repository\Traits;

trait DateTrait
{
    public function getBetweenDates($start_date, $end_date): array
    {
        $qb = $this->createQueryBuilder('b');
        return $qb
            ->where('b.time BETWEEN :start AND :end')
            ->setParameter('start', $start_date->format(DATE_ATOM))
            ->setParameter('end', $end_date->format(DATE_ATOM))
            ->getQuery()
            ->getResult()
        ;
//        return $qb
//            ->where($qb->expr()->between('b.time', $start_date->format(DATE_ATOM), $end_date->format(DATE_ATOM)))
//            ->getQuery()
//            ->getResult()
//        ;
    }
}