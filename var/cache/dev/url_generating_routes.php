<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'admin_dashboard' => [[], ['_controller' => 'App\\Controller\\AdminController::dashboard'], [], [['text', '/admin']], [], [], []],
    'app_admin_adminlogin' => [[], ['_controller' => 'App\\Controller\\AdminController::adminLogin'], [], [['text', '/admin/login']], [], [], []],
    'app_admin_adminanswers' => [[], ['_controller' => 'App\\Controller\\AdminController::adminAnswers'], [], [['text', '/admin/answers']], [], [], []],
    'app_popular_answers' => [[], ['_controller' => 'App\\Controller\\AnswerController::popularAnswers'], [], [['text', '/answers/popular']], [], [], []],
    'answer_vote' => [['id'], ['_controller' => 'App\\Controller\\AnswerController::answerVote'], [], [['text', '/vote'], ['variable', '/', '[^/]++', 'id', true], ['text', '/answers']], [], [], []],
    'app_comment_commentvote' => [['id', 'direction'], ['_controller' => 'App\\Controller\\CommentController::commentVote'], ['direction' => 'up|down'], [['variable', '/', 'up|down', 'direction', true], ['text', '/vote'], ['variable', '/', '[^/]++', 'id', true], ['text', '/comments']], [], [], []],
    'app_donations' => [[], ['_controller' => 'App\\Controller\\Homepage::donations'], [], [['text', '/donations']], [], [], []],
    'app_checkout' => [[], ['_controller' => 'App\\Controller\\Homepage::payment'], [], [['text', '/checkout']], [], [], []],
    'app_homepage_success' => [[], ['_controller' => 'App\\Controller\\Homepage::success'], [], [['text', '/success']], [], [], []],
    'app_homepage_cancel' => [[], ['_controller' => 'App\\Controller\\Homepage::cancel'], [], [['text', '/cancel']], [], [], []],
    'app_onlyforbests_new' => [[], ['_controller' => 'App\\Controller\\OnlyForBestsController::new'], [], [['text', '/boss']], [], [], []],
    'app_homepage' => [['page'], ['page' => 1, '_controller' => 'App\\Controller\\QuestionController::homepage'], ['page' => '\\d+'], [['variable', '/', '\\d+', 'page', true]], [], [], []],
    'app_question_new' => [[], ['_controller' => 'App\\Controller\\QuestionController::new'], [], [['text', '/questions/new']], [], [], []],
    'app_question_show' => [['slug'], ['_controller' => 'App\\Controller\\QuestionController::show'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/questions']], [], [], []],
    'app_question_edit' => [['slug'], ['_controller' => 'App\\Controller\\QuestionController::edit'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/questions/edit']], [], [], []],
    'app_question_vote' => [['slug'], ['_controller' => 'App\\Controller\\QuestionController::questionVote'], [], [['text', '/vote'], ['variable', '/', '[^/]++', 'slug', true], ['text', '/questions']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify']], [], [], []],
    'app_verify_resend_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::resendVerifyEmail'], [], [['text', '/verify/resend']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_2fa_enable' => [[], ['_controller' => 'App\\Controller\\SecurityController::enable2fa'], [], [['text', '/authenticate/2fa/enable']], [], [], []],
    'app_qr_code' => [[], ['_controller' => 'App\\Controller\\SecurityController::displayGoogleAuthenticatorQrCode'], [], [['text', '/authentication/2fa/qr-code']], [], [], []],
    'app_user_api_me' => [[], ['_controller' => 'App\\Controller\\UserController::apiMe'], [], [['text', '/api/me']], [], [], []],
    'user_dashboard' => [[], ['_controller' => 'App\\Controller\\UserController::profile'], [], [['text', '/profile']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '2fa_login' => [[], ['_controller' => 'scheb_two_factor.form_controller::form'], [], [['text', '/2fa']], [], [], []],
    '2fa_login_check' => [[], [], [], [['text', '/2fa_check']], [], [], []],
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
