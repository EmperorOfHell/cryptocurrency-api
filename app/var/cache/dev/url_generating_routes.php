<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'app_cryptocurrency_updateexchangerate' => [['currency'], ['_controller' => 'App\\Controller\\CryptoCurrencyController::updateExchangeRate'], [], [['variable', '/', '[^/]++', 'currency', true], ['text', '/api/cryptorate']], [], [], []],
    'app_cryptocurrency_getexchangerate' => [['currency'], ['_controller' => 'App\\Controller\\CryptoCurrencyController::getExchangeRate'], [], [['variable', '/', '[^/]++', 'currency', true], ['text', '/api/cryptorate']], [], [], []],
    'App\Controller\CryptoCurrencyController::updateExchangeRate' => [['currency'], ['_controller' => 'App\\Controller\\CryptoCurrencyController::updateExchangeRate'], [], [['variable', '/', '[^/]++', 'currency', true], ['text', '/api/cryptorate']], [], [], []],
    'App\Controller\CryptoCurrencyController::getExchangeRate' => [['currency'], ['_controller' => 'App\\Controller\\CryptoCurrencyController::getExchangeRate'], [], [['variable', '/', '[^/]++', 'currency', true], ['text', '/api/cryptorate']], [], [], []],
];