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
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\ControllerBeastController::home'], null, null, null, false, false, null]],
        '/add/classes' => [[['_route' => 'add-classes', '_controller' => 'App\\Controller\\ControllerBeastController::addClasses'], null, null, null, false, false, null]],
        '/list/classes' => [[['_route' => 'list-classes', '_controller' => 'App\\Controller\\ControllerBeastController::listClasses'], null, null, null, false, false, null]],
        '/add/students' => [[['_route' => 'add-students', '_controller' => 'App\\Controller\\ControllerBeastController::addStudents'], null, null, null, false, false, null]],
        '/list/students' => [[['_route' => 'list-students', '_controller' => 'App\\Controller\\ControllerBeastController::listStudents'], null, null, null, false, false, null]],
        '/add/courses' => [[['_route' => 'add-courses', '_controller' => 'App\\Controller\\ControllerBeastController::addCourses'], null, null, null, false, false, null]],
        '/list/courses' => [[['_route' => 'list-courses', '_controller' => 'App\\Controller\\ControllerBeastController::listCourses'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/student/(?'
                    .'|delete/([^/]++)(*:195)'
                    .'|([^/]++)/edit(*:216)'
                .')'
                .'|/c(?'
                    .'|ourse/delete/([^/]++)(*:251)'
                    .'|lasses/(?'
                        .'|([^/]++)/edit(*:282)'
                        .'|delete/([^/]++)(*:305)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        195 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\ControllerBeastController::deleteS'], ['id'], ['DELETE' => 0], null, false, true, null]],
        216 => [[['_route' => 'student_edit', '_controller' => 'App\\Controller\\ControllerBeastController::edit'], ['id'], null, null, false, false, null]],
        251 => [[['_route' => 'delete-course', '_controller' => 'App\\Controller\\ControllerBeastController::deleteC'], ['id'], ['DELETE' => 0], null, false, true, null]],
        282 => [[['_route' => 'classes_edit', '_controller' => 'App\\Controller\\ControllerBeastController::editClasses'], ['id'], null, null, false, false, null]],
        305 => [
            [['_route' => 'delete-classes', '_controller' => 'App\\Controller\\ControllerBeastController::deleteClasses'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
