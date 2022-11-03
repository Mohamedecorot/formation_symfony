<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/a_propos' => [[['_route' => 'a_propos', '_controller' => 'App\\Controller\\AProposController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/actualites' => [[['_route' => 'actualites', '_controller' => 'App\\Controller\\BlogpostController::actualites'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/realisations' => [[['_route' => 'realisations', '_controller' => 'App\\Controller\\PeintureController::realisations'], null, null, null, false, false, null]],
        '/portfolio' => [[['_route' => 'portfolio', '_controller' => 'App\\Controller\\PortfolioController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/actualites/([^/]++)(*:27)'
                .'|/realisations/([^/]++)(*:56)'
                .'|/portfolio/([^/]++)(*:82)'
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:143)'
                    .'|([A-z0-9_-]*)/(.+)(*:169)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        27 => [[['_route' => 'actualites_detail', '_controller' => 'App\\Controller\\BlogpostController::detail'], ['slug'], null, null, false, true, null]],
        56 => [[['_route' => 'realisations_details', '_controller' => 'App\\Controller\\PeintureController::details'], ['slug'], null, null, false, true, null]],
        82 => [[['_route' => 'portfolio_categorie', '_controller' => 'App\\Controller\\PortfolioController::categorie'], ['slug'], null, null, false, true, null]],
        143 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        169 => [
            [['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
