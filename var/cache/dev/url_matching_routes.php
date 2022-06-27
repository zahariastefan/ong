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
        '/answers/popular' => [[['_route' => 'app_popular_answers', '_controller' => 'App\\Controller\\AnswerController::popularAnswers'], null, null, null, false, false, null]],
        '/donations' => [[['_route' => 'app_donations', '_controller' => 'App\\Controller\\Homepage::donations'], null, null, null, false, false, null]],
        '/checkout' => [[['_route' => 'app_checkout', '_controller' => 'App\\Controller\\Homepage::payment'], null, null, null, false, false, null]],
        '/success' => [[['_route' => 'app_homepage_success', '_controller' => 'App\\Controller\\Homepage::success'], null, null, null, false, false, null]],
        '/cancel' => [[['_route' => 'app_homepage_cancel', '_controller' => 'App\\Controller\\Homepage::cancel'], null, null, null, false, false, null]],
        '/boss' => [[['_route' => 'app_onlyforbests_new', '_controller' => 'App\\Controller\\OnlyForBestsController::new'], null, null, null, false, false, null]],
        '/questions/new' => [[['_route' => 'app_question_new', '_controller' => 'App\\Controller\\QuestionController::new'], null, null, null, false, false, null]],
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
                .'|/answers/([^/]++)/vote(*:29)'
                .'|/(\\d+)?(*:43)'
                .'|/questions/(?'
                    .'|([^/]++)(*:72)'
                    .'|edit/([^/]++)(*:92)'
                    .'|([^/]++)/vote(*:112)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:152)'
                    .'|wdt/([^/]++)(*:172)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:218)'
                            .'|router(*:232)'
                            .'|exception(?'
                                .'|(*:252)'
                                .'|\\.css(*:265)'
                            .')'
                        .')'
                        .'|(*:275)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        29 => [[['_route' => 'answer_vote', '_controller' => 'App\\Controller\\AnswerController::answerVote'], ['id'], ['POST' => 0], null, false, false, null]],
        43 => [[['_route' => 'app_homepage', 'page' => 1, '_controller' => 'App\\Controller\\QuestionController::homepage'], ['page'], null, null, false, true, null]],
        72 => [[['_route' => 'app_question_show', '_controller' => 'App\\Controller\\QuestionController::show'], ['slug'], null, null, false, true, null]],
        92 => [[['_route' => 'app_question_edit', '_controller' => 'App\\Controller\\QuestionController::edit'], ['slug'], null, null, false, true, null]],
        112 => [[['_route' => 'app_question_vote', '_controller' => 'App\\Controller\\QuestionController::questionVote'], ['slug'], ['POST' => 0], null, false, false, null]],
        152 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        172 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        218 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        232 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        252 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        265 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        275 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
