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
        '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\AboutController::index'], null, null, null, false, false, null]],
        '/account' => [[['_route' => 'account', '_controller' => 'App\\Controller\\AccountController::index'], null, null, null, true, false, null]],
        '/address' => [[['_route' => 'address_index', '_controller' => 'App\\Controller\\AddressController::index'], null, ['GET' => 0], null, true, false, null]],
        '/address/new' => [[['_route' => 'address_new', '_controller' => 'App\\Controller\\AddressController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/cgu/conditions-generales-utilisations' => [[['_route' => 'cgu_conditions', '_controller' => 'App\\Controller\\CGUController::index'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/checkout' => [[['_route' => 'checkout', '_controller' => 'App\\Controller\\CheckoutController::index'], null, null, null, false, false, null]],
        '/checkout/confim' => [[['_route' => 'checkout_confirm', '_controller' => 'App\\Controller\\CheckoutController::confirm'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/commande' => [[['_route' => 'order', '_controller' => 'App\\Controller\\OrderController::index'], null, null, null, false, false, null]],
        '/commande/recapitulatif' => [[['_route' => 'order_recap', '_controller' => 'App\\Controller\\OrderController::add'], null, ['POST' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password' => [
            [['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null],
            [['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\ResetPasswordController::reset'], null, null, null, false, false, null],
        ],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
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
                .'|/address/([^/]++)(?'
                    .'|/edit(*:193)'
                    .'|(*:201)'
                .')'
                .'|/c(?'
                    .'|art/(?'
                        .'|add/([^/]++)(*:234)'
                        .'|delete(?'
                            .'|/([^/]++)(*:260)'
                            .'|_all/([^/]++)(*:281)'
                        .')'
                    .')'
                    .'|ommande/create\\-session/([^/]++)(*:323)'
                .')'
                .'|/product/([^/]++)(*:349)'
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
        193 => [[['_route' => 'address_edit', '_controller' => 'App\\Controller\\AddressController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        201 => [[['_route' => 'address_delete', '_controller' => 'App\\Controller\\AddressController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        234 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::addToCart'], ['id'], null, null, false, true, null]],
        260 => [[['_route' => 'cart_delete', '_controller' => 'App\\Controller\\CartController::deleteFromCart'], ['id'], null, null, false, true, null]],
        281 => [[['_route' => 'cart_delete_all', '_controller' => 'App\\Controller\\CartController::deleteAllToCard'], ['id'], null, null, false, true, null]],
        323 => [[['_route' => 'stripe_create_session', '_controller' => 'App\\Controller\\StripeController::index'], ['reference'], null, null, false, true, null]],
        349 => [
            [['_route' => 'product_details', '_controller' => 'App\\Controller\\HomeController::show'], ['slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
