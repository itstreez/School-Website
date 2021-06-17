<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
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
    'home' => [[], ['_controller' => 'App\\Controller\\ControllerBeastController::home'], [], [['text', '/']], [], []],
    'add-classes' => [[], ['_controller' => 'App\\Controller\\ControllerBeastController::addClasses'], [], [['text', '/add/classes']], [], []],
    'list-classes' => [[], ['_controller' => 'App\\Controller\\ControllerBeastController::listClasses'], [], [['text', '/list/classes']], [], []],
    'add-students' => [[], ['_controller' => 'App\\Controller\\ControllerBeastController::addStudents'], [], [['text', '/add/students']], [], []],
    'list-students' => [[], ['_controller' => 'App\\Controller\\ControllerBeastController::listStudents'], [], [['text', '/list/students']], [], []],
    'add-courses' => [[], ['_controller' => 'App\\Controller\\ControllerBeastController::addCourses'], [], [['text', '/add/courses']], [], []],
    'list-courses' => [[], ['_controller' => 'App\\Controller\\ControllerBeastController::listCourses'], [], [['text', '/list/courses']], [], []],
    'delete' => [['id'], ['_controller' => 'App\\Controller\\ControllerBeastController::deleteS'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/student/delete']], [], []],
    'delete-course' => [['id'], ['_controller' => 'App\\Controller\\ControllerBeastController::deleteC'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/course/delete']], [], []],
    'student_edit' => [['id'], ['_controller' => 'App\\Controller\\ControllerBeastController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/student']], [], []],
    'classes_edit' => [['id'], ['_controller' => 'App\\Controller\\ControllerBeastController::editClasses'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/classes']], [], []],
    'delete-classes' => [['id'], ['_controller' => 'App\\Controller\\ControllerBeastController::deleteClasses'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/classes/delete']], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
];
