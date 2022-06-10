<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'admin_dashboard' => [[], ['_controller' => 'App\\Controller\\AdminController::dashboard'], [], [['text', '/admin']], [], [], []],
    'app_admin_adminlogin' => [[], ['_controller' => 'App\\Controller\\AdminController::adminLogin'], [], [['text', '/admin/login']], [], [], []],
    'app_admin_adminanswers' => [[], ['_controller' => 'App\\Controller\\AdminController::adminAnswers'], [], [['text', '/admin/answers']], [], [], []],
    'app_homepage' => [[], ['_controller' => 'App\\Controller\\Homepage::homepage'], [], [['text', '/']], [], [], []],
    'app_checkout' => [[], ['_controller' => 'App\\Controller\\Homepage::payment'], [], [['text', '/checkout']], [], [], []],
    'app_homepage_success' => [[], ['_controller' => 'App\\Controller\\Homepage::success'], [], [['text', '/success']], [], [], []],
    'app_homepage_cancel' => [[], ['_controller' => 'App\\Controller\\Homepage::cancel'], [], [['text', '/cancel']], [], [], []],
    'app_onlyforbests_new' => [[], ['_controller' => 'App\\Controller\\OnlyForBestsController::new'], [], [['text', '/boss']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_user_apime' => [[], ['_controller' => 'App\\Controller\\UserController::apiMe'], [], [['text', '/api/me']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
];
