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
        '/cliente' => [[['_route' => 'app_cliente_index', '_controller' => 'App\\Controller\\ClienteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/cliente/new' => [[['_route' => 'app_cliente_new', '_controller' => 'App\\Controller\\ClienteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/detalle' => [[['_route' => 'app_detalle_index', '_controller' => 'App\\Controller\\DetalleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/detalle/new' => [[['_route' => 'app_detalle_new', '_controller' => 'App\\Controller\\DetalleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/empresa' => [[['_route' => 'app_empresa', '_controller' => 'App\\Controller\\EmpresaController::index'], null, null, null, false, false, null]],
        '/pedido' => [[['_route' => 'app_pedido_index', '_controller' => 'App\\Controller\\PedidoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/pedido/facturas' => [[['_route' => 'app_pedido_facturas', '_controller' => 'App\\Controller\\PedidoController::facturas'], null, ['GET' => 0], null, false, false, null]],
        '/pedido/new' => [[['_route' => 'app_pedido_new', '_controller' => 'App\\Controller\\PedidoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/producto' => [[['_route' => 'app_producto_index', '_controller' => 'App\\Controller\\ProductoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/producto/new' => [[['_route' => 'app_producto_new', '_controller' => 'App\\Controller\\ProductoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
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
                .'|/cliente/([^/]++)(?'
                    .'|(*:189)'
                    .'|/edit(*:202)'
                    .'|(*:210)'
                .')'
                .'|/detalle/([^/]++)(?'
                    .'|(*:239)'
                    .'|/edit(*:252)'
                    .'|(*:260)'
                .')'
                .'|/p(?'
                    .'|edido/([^/]++)(?'
                        .'|(*:291)'
                        .'|/edit(*:304)'
                        .'|(*:312)'
                    .')'
                    .'|roducto/([^/]++)(?'
                        .'|(*:340)'
                        .'|/edit(*:353)'
                        .'|(*:361)'
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
        189 => [[['_route' => 'app_cliente_show', '_controller' => 'App\\Controller\\ClienteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        202 => [[['_route' => 'app_cliente_edit', '_controller' => 'App\\Controller\\ClienteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        210 => [[['_route' => 'app_cliente_delete', '_controller' => 'App\\Controller\\ClienteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        239 => [[['_route' => 'app_detalle_show', '_controller' => 'App\\Controller\\DetalleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        252 => [[['_route' => 'app_detalle_edit', '_controller' => 'App\\Controller\\DetalleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        260 => [[['_route' => 'app_detalle_delete', '_controller' => 'App\\Controller\\DetalleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        291 => [[['_route' => 'app_pedido_show', '_controller' => 'App\\Controller\\PedidoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        304 => [[['_route' => 'app_pedido_edit', '_controller' => 'App\\Controller\\PedidoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        312 => [[['_route' => 'app_pedido_delete', '_controller' => 'App\\Controller\\PedidoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        340 => [[['_route' => 'app_producto_show', '_controller' => 'App\\Controller\\ProductoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        353 => [[['_route' => 'app_producto_edit', '_controller' => 'App\\Controller\\ProductoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        361 => [
            [['_route' => 'app_producto_delete', '_controller' => 'App\\Controller\\ProductoController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
