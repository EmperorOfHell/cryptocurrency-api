<?php

namespace App\Service;

use App\Entity\BTCEUR;
use App\Entity\BTCGBP;

use App\Entity\BTCUSD;
use Doctrine\ORM\Mapping\Entity;


class CurrencyResolver
{


    public const AVAILABLE_CURRENCY = [
        'USD' =>
        [
            'entity' => BTCUSD::class
        ],
        'EUR' =>
        [
            'entity' => BTCEUR::class
        ],
        'GBP' =>
        [
            'entity' => BTCGBP::class
        ],
    ];

    public static function getEntityClass($currency)
    {
        return self::AVAILABLE_CURRENCY[strtoupper($currency)]['entity'];
    }

    public static function resolve($currency)
    {

        return new (self::getEntityClass($currency));
    }

    public static function isCurrencyAvailable($currency)
    {
        return in_array(strtoupper($currency), array_keys(self::AVAILABLE_CURRENCY));
    }

}
