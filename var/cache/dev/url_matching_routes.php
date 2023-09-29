<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'vat_calculator_form', '_controller' => 'App\\Controller\\VatCalculatorController::submitForm'], null, null, null, false, false, null]],
        '/export' => [[['_route' => 'export_as_csv', '_controller' => 'App\\Controller\\VatCalculatorController::exportHistory'], null, null, null, false, false, null]],
        '/clear' => [[['_route' => 'clear_history', '_controller' => 'App\\Controller\\VatCalculatorController::clear'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
