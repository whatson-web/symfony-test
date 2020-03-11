<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/rendez-vous' => [[['_route' => 'appointments', '_controller' => 'App\\Controller\\AppointmentController::index'], null, null, null, false, false, null]],
        '/clients' => [[['_route' => 'customers', '_controller' => 'App\\Controller\\CustomerController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/dashbord' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\HomeController::dashboard'], null, null, null, false, false, null]],
        '/lieux' => [[['_route' => 'places', '_controller' => 'App\\Controller\\PlaceController::index'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'user_login', '_controller' => 'App\\Controller\\UserController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'user_logout', '_controller' => 'App\\Controller\\UserController::logout'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'registration', '_controller' => 'App\\Controller\\UserController::registration'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/rendez\\-vous/([^/]++)/(?'
                    .'|modification(*:207)'
                    .'|supression(*:225)'
                .')'
                .'|/clients/([^/]++)/(?'
                    .'|modification(*:267)'
                    .'|supression(*:285)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        207 => [[['_route' => 'appointment_edit', '_controller' => 'App\\Controller\\AppointmentController::edit_appointment'], ['id'], null, null, false, false, null]],
        225 => [[['_route' => 'appointment_delete', '_controller' => 'App\\Controller\\AppointmentController::appointment_delete'], ['id'], null, null, false, false, null]],
        267 => [[['_route' => 'customer_edit', '_controller' => 'App\\Controller\\CustomerController::edit_customer'], ['id'], null, null, false, false, null]],
        285 => [
            [['_route' => 'customer_delete', '_controller' => 'App\\Controller\\CustomerController::customer_delete'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
