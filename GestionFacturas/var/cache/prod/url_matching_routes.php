<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/cliente' => [[['_route' => 'app_cliente_index', '_controller' => 'App\\Controller\\ClienteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/cliente/new' => [[['_route' => 'app_cliente_new', '_controller' => 'App\\Controller\\ClienteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/detalle' => [[['_route' => 'app_detalle_index', '_controller' => 'App\\Controller\\DetalleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/detalle/new' => [[['_route' => 'app_detalle_new', '_controller' => 'App\\Controller\\DetalleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/empresa' => [[['_route' => 'app_empresa_index', '_controller' => 'App\\Controller\\EmpresaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/empresa/new' => [[['_route' => 'app_empresa_new', '_controller' => 'App\\Controller\\EmpresaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/cliente/([^/]++)(?'
                    .'|(*:27)'
                    .'|/edit(*:39)'
                    .'|(*:46)'
                .')'
                .'|/detalle/([^/]++)(?'
                    .'|(*:74)'
                    .'|/edit(*:86)'
                    .'|(*:93)'
                .')'
                .'|/empresa/([^/]++)(?'
                    .'|(*:121)'
                    .'|/edit(*:134)'
                    .'|(*:142)'
                .')'
                .'|/p(?'
                    .'|edido/([^/]++)(?'
                        .'|(*:173)'
                        .'|/edit(*:186)'
                        .'|(*:194)'
                    .')'
                    .'|roducto/([^/]++)(?'
                        .'|(*:222)'
                        .'|/edit(*:235)'
                        .'|(*:243)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        27 => [[['_route' => 'app_cliente_show', '_controller' => 'App\\Controller\\ClienteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        39 => [[['_route' => 'app_cliente_edit', '_controller' => 'App\\Controller\\ClienteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        46 => [[['_route' => 'app_cliente_delete', '_controller' => 'App\\Controller\\ClienteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        74 => [[['_route' => 'app_detalle_show', '_controller' => 'App\\Controller\\DetalleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        86 => [[['_route' => 'app_detalle_edit', '_controller' => 'App\\Controller\\DetalleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        93 => [[['_route' => 'app_detalle_delete', '_controller' => 'App\\Controller\\DetalleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        121 => [[['_route' => 'app_empresa_show', '_controller' => 'App\\Controller\\EmpresaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        134 => [[['_route' => 'app_empresa_edit', '_controller' => 'App\\Controller\\EmpresaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        142 => [[['_route' => 'app_empresa_delete', '_controller' => 'App\\Controller\\EmpresaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        173 => [[['_route' => 'app_pedido_show', '_controller' => 'App\\Controller\\PedidoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        186 => [[['_route' => 'app_pedido_edit', '_controller' => 'App\\Controller\\PedidoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        194 => [[['_route' => 'app_pedido_delete', '_controller' => 'App\\Controller\\PedidoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        222 => [[['_route' => 'app_producto_show', '_controller' => 'App\\Controller\\ProductoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        235 => [[['_route' => 'app_producto_edit', '_controller' => 'App\\Controller\\ProductoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        243 => [
            [['_route' => 'app_producto_delete', '_controller' => 'App\\Controller\\ProductoController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
