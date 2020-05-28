<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'artist' => [[], ['_controller' => 'App\\Controller\\ArtistController::index'], [], [['text', '/artist']], [], []],
    'artist_show' => [['id'], ['_controller' => 'App\\Controller\\ArtistController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/artist']], [], []],
    'locality_index' => [[], ['_controller' => 'App\\Controller\\LocalityController::index'], [], [['text', '/locality/']], [], []],
    'locality_new' => [[], ['_controller' => 'App\\Controller\\LocalityController::new'], [], [['text', '/locality/new']], [], []],
    'locality_show' => [['id'], ['_controller' => 'App\\Controller\\LocalityController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/locality']], [], []],
    'locality_edit' => [['id'], ['_controller' => 'App\\Controller\\LocalityController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/locality']], [], []],
    'locality_delete' => [['id'], ['_controller' => 'App\\Controller\\LocalityController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/locality']], [], []],
    'representation' => [[], ['_controller' => 'App\\Controller\\RepresentationController::index'], [], [['text', '/representation']], [], []],
    'representation_show' => [['id'], ['_controller' => 'App\\Controller\\RepresentationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/representation']], [], []],
    'reservation_index' => [[], ['_controller' => 'App\\Controller\\ReservationController::index'], [], [['text', '/reservation/']], [], []],
    'reservation_new' => [[], ['_controller' => 'App\\Controller\\ReservationController::new'], [], [['text', '/reservation/new']], [], []],
    'reservation_show' => [['id'], ['_controller' => 'App\\Controller\\ReservationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reservation']], [], []],
    'reservation_edit' => [['id'], ['_controller' => 'App\\Controller\\ReservationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reservation']], [], []],
    'reservation_delete' => [['id'], ['_controller' => 'App\\Controller\\ReservationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reservation']], [], []],
    'role' => [[], ['_controller' => 'App\\Controller\\RoleController::index'], [], [['text', '/role']], [], []],
    'role_show' => [['id'], ['_controller' => 'App\\Controller\\RoleController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/role']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'app_signin' => [[], ['_controller' => 'App\\Controller\\SecurityController::register'], [], [['text', '/signin']], [], []],
    'show' => [[], ['_controller' => 'App\\Controller\\ShowController::index'], [], [['text', '/show']], [], []],
    'show_show' => [['id'], ['_controller' => 'App\\Controller\\ShowController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/show']], [], []],
    'type' => [[], ['_controller' => 'App\\Controller\\TypeController::index'], [], [['text', '/type']], [], []],
    'type_show' => [['id'], ['_controller' => 'App\\Controller\\TypeController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/type']], [], []],
    'user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user/']], [], []],
    'user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/user/new']], [], []],
    'user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], []],
    'user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], []],
    'user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], []],
];
