<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api(?'
                    .'|/cryptorate/([^/]++)(?'
                        .'|(*:72)'
                    .')'
                    .'|(.+)\\}(*:86)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        72 => [
            [['_route' => 'app_cryptocurrency_updateexchangerate', '_controller' => 'App\\Controller\\CryptoCurrencyController::updateExchangeRate'], ['currency'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'app_cryptocurrency_getexchangerate', '_controller' => 'App\\Controller\\CryptoCurrencyController::getExchangeRate'], ['currency'], ['GET' => 0], null, false, true, null],
        ],
        86 => [
            [['_route' => 'app_cryptocurrency_default', '_controller' => 'App\\Controller\\CryptoCurrencyController::default'], ['def'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
