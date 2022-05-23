<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_cliente_index' => [[], ['_controller' => 'App\\Controller\\ClienteController::index'], [], [['text', '/cliente/']], [], [], []],
    'app_cliente_new' => [[], ['_controller' => 'App\\Controller\\ClienteController::new'], [], [['text', '/cliente/new']], [], [], []],
    'app_cliente_show' => [['id'], ['_controller' => 'App\\Controller\\ClienteController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cliente']], [], [], []],
    'app_cliente_edit' => [['id'], ['_controller' => 'App\\Controller\\ClienteController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/cliente']], [], [], []],
    'app_cliente_delete' => [['id'], ['_controller' => 'App\\Controller\\ClienteController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cliente']], [], [], []],
    'app_detalle_index' => [[], ['_controller' => 'App\\Controller\\DetalleController::index'], [], [['text', '/detalle/']], [], [], []],
    'app_detalle_new' => [[], ['_controller' => 'App\\Controller\\DetalleController::new'], [], [['text', '/detalle/new']], [], [], []],
    'app_detalle_show' => [['id'], ['_controller' => 'App\\Controller\\DetalleController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/detalle']], [], [], []],
    'app_detalle_edit' => [['id'], ['_controller' => 'App\\Controller\\DetalleController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/detalle']], [], [], []],
    'app_detalle_delete' => [['id'], ['_controller' => 'App\\Controller\\DetalleController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/detalle']], [], [], []],
    'app_empresa_index' => [[], ['_controller' => 'App\\Controller\\EmpresaController::index'], [], [['text', '/empresa/']], [], [], []],
    'app_empresa_new' => [[], ['_controller' => 'App\\Controller\\EmpresaController::new'], [], [['text', '/empresa/new']], [], [], []],
    'app_empresa_show' => [['id'], ['_controller' => 'App\\Controller\\EmpresaController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/empresa']], [], [], []],
    'app_empresa_edit' => [['id'], ['_controller' => 'App\\Controller\\EmpresaController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/empresa']], [], [], []],
    'app_empresa_delete' => [['id'], ['_controller' => 'App\\Controller\\EmpresaController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/empresa']], [], [], []],
    'app_pedido_index' => [[], ['_controller' => 'App\\Controller\\PedidoController::index'], [], [['text', '/pedido/']], [], [], []],
    'app_pedido_facturas' => [[], ['_controller' => 'App\\Controller\\PedidoController::facturas'], [], [['text', '/pedido/facturas']], [], [], []],
    'app_pedido_new' => [[], ['_controller' => 'App\\Controller\\PedidoController::new'], [], [['text', '/pedido/new']], [], [], []],
    'app_pedido_show' => [['id'], ['_controller' => 'App\\Controller\\PedidoController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/pedido']], [], [], []],
    'app_pedido_edit' => [['id'], ['_controller' => 'App\\Controller\\PedidoController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/pedido']], [], [], []],
    'app_pedido_delete' => [['id'], ['_controller' => 'App\\Controller\\PedidoController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/pedido']], [], [], []],
    'app_producto_index' => [[], ['_controller' => 'App\\Controller\\ProductoController::index'], [], [['text', '/producto/']], [], [], []],
    'app_producto_new' => [[], ['_controller' => 'App\\Controller\\ProductoController::new'], [], [['text', '/producto/new']], [], [], []],
    'app_producto_show' => [['id'], ['_controller' => 'App\\Controller\\ProductoController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/producto']], [], [], []],
    'app_producto_edit' => [['id'], ['_controller' => 'App\\Controller\\ProductoController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/producto']], [], [], []],
    'app_producto_delete' => [['id'], ['_controller' => 'App\\Controller\\ProductoController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/producto']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
];