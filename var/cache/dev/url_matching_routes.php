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
        '/activity' => [[['_route' => 'activity', '_controller' => 'App\\Controller\\ActivityController::index'], null, null, null, false, false, null]],
        '/admin' => [
            [['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::admin'], null, null, null, false, false, null],
            [['_route' => 'app_admin_dashboard_index', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null],
        ],
        '/' => [
            [['_route' => 'homepage', '_controller' => 'App\\Controller\\DefaultController::homepage'], null, null, null, false, false, null],
            [['_route' => 'questions_list', '_controller' => 'App\\Controller\\QuestionsController::list'], null, null, null, false, false, null],
        ],
        '/message' => [[['_route' => 'message', '_controller' => 'App\\Controller\\MessageController::index'], null, null, null, false, false, null]],
        '/package' => [[['_route' => 'package', '_controller' => 'App\\Controller\\PackageController::index'], null, null, null, false, false, null]],
        '/admin/question/add' => [[['_route' => 'question_add', '_controller' => 'App\\Controller\\QuestionsController::add'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
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
                .'|/user/([^/]++)(*:183)'
                .'|/([^/]++)/edit(*:205)'
                .'|/admin/question/toggle/([^/]++)(*:244)'
                .'|/user/(?'
                    .'|user(*:265)'
                    .'|new(*:276)'
                    .'|([^/]++)(?'
                        .'|(*:295)'
                        .'|/edit(*:308)'
                        .'|(*:316)'
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
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        183 => [[['_route' => 'question_list_by_user', '_controller' => 'App\\Controller\\QuestionsController::list'], ['last_name'], null, null, false, true, null]],
        205 => [[['_route' => 'review_edit', '_controller' => 'App\\Controller\\QuestionsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        244 => [[['_route' => 'admin_question_toggle', '_controller' => 'App\\Controller\\QuestionsController::adminToggle'], ['id'], null, null, false, true, null]],
        265 => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], [], ['GET' => 0], null, false, false, null]],
        276 => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], [], ['GET,POST' => 0], null, false, false, null]],
        295 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        308 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET,POST' => 0], null, false, false, null]],
        316 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
