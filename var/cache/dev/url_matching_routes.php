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
        '/agent' => [[['_route' => 'agent', '_controller' => 'App\\Controller\\AgentController::index'], null, null, null, false, false, null]],
        '/artist' => [[['_route' => 'artist', '_controller' => 'App\\Controller\\ArtistController::index'], null, null, null, false, false, null]],
        '/comment' => [[['_route' => 'comment_index', '_controller' => 'App\\Controller\\CommentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/comment/new' => [[['_route' => 'comment_new', '_controller' => 'App\\Controller\\CommentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/locality' => [[['_route' => 'locality_index', '_controller' => 'App\\Controller\\LocalityController::index'], null, ['GET' => 0], null, true, false, null]],
        '/locality/new' => [[['_route' => 'locality_new', '_controller' => 'App\\Controller\\LocalityController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/representation' => [[['_route' => 'representation', '_controller' => 'App\\Controller\\RepresentationController::index'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/new' => [[['_route' => 'reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/role' => [[['_route' => 'role', '_controller' => 'App\\Controller\\RoleController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/signin' => [[['_route' => 'app_signin', '_controller' => 'App\\Controller\\SecurityController::register'], null, null, null, false, false, null]],
        '/show' => [[['_route' => 'show', '_controller' => 'App\\Controller\\ShowController::index'], null, null, null, false, false, null]],
        '/type' => [[['_route' => 'type', '_controller' => 'App\\Controller\\TypeController::index'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/a(?'
                    .'|gent/([^/]++)/transfert/([^/]++)(*:206)'
                    .'|rtist/([^/]++)(*:228)'
                .')'
                .'|/comment/([^/]++)(?'
                    .'|(*:257)'
                    .'|/edit(*:270)'
                    .'|(*:278)'
                .')'
                .'|/locality/([^/]++)(?'
                    .'|(*:308)'
                    .'|/edit(*:321)'
                    .'|(*:329)'
                .')'
                .'|/r(?'
                    .'|e(?'
                        .'|presentation/([^/]++)(*:368)'
                        .'|servation/([^/]++)(?'
                            .'|(*:397)'
                            .'|/edit(*:410)'
                            .'|(*:418)'
                        .')'
                    .')'
                    .'|ole/([^/]++)(*:440)'
                .')'
                .'|/show/([^/]++)(*:463)'
                .'|/type/([^/]++)(*:485)'
                .'|/user/([^/]++)(?'
                    .'|(*:510)'
                    .'|/edit(*:523)'
                    .'|(*:531)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        206 => [[['_route' => 'agent_transfert', '_controller' => 'App\\Controller\\AgentController::transfert'], ['id', 'artistId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        228 => [[['_route' => 'artist_show', '_controller' => 'App\\Controller\\ArtistController::show'], ['id'], null, null, false, true, null]],
        257 => [[['_route' => 'comment_show', '_controller' => 'App\\Controller\\CommentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        270 => [[['_route' => 'comment_edit', '_controller' => 'App\\Controller\\CommentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        278 => [[['_route' => 'comment_delete', '_controller' => 'App\\Controller\\CommentController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        308 => [[['_route' => 'locality_show', '_controller' => 'App\\Controller\\LocalityController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        321 => [[['_route' => 'locality_edit', '_controller' => 'App\\Controller\\LocalityController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        329 => [[['_route' => 'locality_delete', '_controller' => 'App\\Controller\\LocalityController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        368 => [[['_route' => 'representation_show', '_controller' => 'App\\Controller\\RepresentationController::show'], ['id'], null, null, false, true, null]],
        397 => [[['_route' => 'reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        410 => [[['_route' => 'reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        418 => [[['_route' => 'reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        440 => [[['_route' => 'role_show', '_controller' => 'App\\Controller\\RoleController::show'], ['id'], null, null, false, true, null]],
        463 => [[['_route' => 'show_show', '_controller' => 'App\\Controller\\ShowController::show'], ['id'], null, null, false, true, null]],
        485 => [[['_route' => 'type_show', '_controller' => 'App\\Controller\\TypeController::show'], ['id'], null, null, false, true, null]],
        510 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        523 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        531 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
