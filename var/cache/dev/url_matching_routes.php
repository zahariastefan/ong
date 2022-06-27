<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminController::dashboard'], null, null, null, false, false, null]],
        '/admin/login' => [[['_route' => 'app_admin_adminlogin', '_controller' => 'App\\Controller\\AdminController::adminLogin'], null, null, null, false, false, null]],
        '/admin/answers' => [[['_route' => 'app_admin_adminanswers', '_controller' => 'App\\Controller\\AdminController::adminAnswers'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_homepage', '_controller' => 'App\\Controller\\Homepage::homepage'], null, null, null, false, false, null]],
        '/donations' => [[['_route' => 'app_donations', '_controller' => 'App\\Controller\\Homepage::donations'], null, null, null, false, false, null]],
        '/checkout' => [[['_route' => 'app_checkout', '_controller' => 'App\\Controller\\Homepage::payment'], null, null, null, false, false, null]],
        '/success' => [[['_route' => 'app_homepage_success', '_controller' => 'App\\Controller\\Homepage::success'], null, null, null, false, false, null]],
        '/cancel' => [[['_route' => 'app_homepage_cancel', '_controller' => 'App\\Controller\\Homepage::cancel'], null, null, null, false, false, null]],
        '/boss' => [[['_route' => 'app_onlyforbests_new', '_controller' => 'App\\Controller\\OnlyForBestsController::new'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/verify/resend' => [[['_route' => 'app_verify_resend_email', '_controller' => 'App\\Controller\\RegistrationController::resendVerifyEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/authenticate/2fa/enable' => [[['_route' => 'app_2fa_enable', '_controller' => 'App\\Controller\\SecurityController::enable2fa'], null, null, null, false, false, null]],
        '/authentication/2fa/qr-code' => [[['_route' => 'app_qr_code', '_controller' => 'App\\Controller\\SecurityController::displayGoogleAuthenticatorQrCode'], null, null, null, false, false, null]],
        '/api/me' => [[['_route' => 'app_user_api_me', '_controller' => 'App\\Controller\\UserController::apiMe'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'user_dashboard', '_controller' => 'App\\Controller\\UserController::profile'], null, null, null, false, false, null]],
        '/2fa' => [[['_route' => '2fa_login', '_controller' => 'scheb_two_factor.form_controller::form'], null, null, null, false, false, null]],
        '/2fa_check' => [[['_route' => '2fa_login_check'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
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
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
