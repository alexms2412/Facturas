<?php

namespace ContainerWmVBStX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QprbrmFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qprbrmF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qprbrmF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ClienteController::delete' => ['privates', '.service_locator.8Qyp059', 'get_ServiceLocator_8Qyp059Service', true],
            'App\\Controller\\ClienteController::edit' => ['privates', '.service_locator.8Qyp059', 'get_ServiceLocator_8Qyp059Service', true],
            'App\\Controller\\ClienteController::index' => ['privates', '.service_locator.oXNKN64', 'get_ServiceLocator_OXNKN64Service', true],
            'App\\Controller\\ClienteController::new' => ['privates', '.service_locator.oXNKN64', 'get_ServiceLocator_OXNKN64Service', true],
            'App\\Controller\\ClienteController::show' => ['privates', '.service_locator.HCoah5z', 'get_ServiceLocator_HCoah5zService', true],
            'App\\Controller\\DetalleController::delete' => ['privates', '.service_locator.ieyI6te', 'get_ServiceLocator_IeyI6teService', true],
            'App\\Controller\\DetalleController::edit' => ['privates', '.service_locator.ieyI6te', 'get_ServiceLocator_IeyI6teService', true],
            'App\\Controller\\DetalleController::index' => ['privates', '.service_locator.8csE_d_', 'get_ServiceLocator_8csEDService', true],
            'App\\Controller\\DetalleController::new' => ['privates', '.service_locator.er9vHzz', 'get_ServiceLocator_Er9vHzzService', true],
            'App\\Controller\\DetalleController::show' => ['privates', '.service_locator.Mp5BfDI', 'get_ServiceLocator_Mp5BfDIService', true],
            'App\\Controller\\EmpresaController::delete' => ['privates', '.service_locator.mT1e0jA', 'get_ServiceLocator_MT1e0jAService', true],
            'App\\Controller\\EmpresaController::edit' => ['privates', '.service_locator.mT1e0jA', 'get_ServiceLocator_MT1e0jAService', true],
            'App\\Controller\\EmpresaController::index' => ['privates', '.service_locator.Bi_wSRO', 'get_ServiceLocator_BiWSROService', true],
            'App\\Controller\\EmpresaController::new' => ['privates', '.service_locator.ZumzI2X', 'get_ServiceLocator_ZumzI2XService', true],
            'App\\Controller\\EmpresaController::show' => ['privates', '.service_locator.f9r8_yo', 'get_ServiceLocator_F9r8YoService', true],
            'App\\Controller\\PedidoController::delete' => ['privates', '.service_locator.EnTD9ox', 'get_ServiceLocator_EnTD9oxService', true],
            'App\\Controller\\PedidoController::edit' => ['privates', '.service_locator.EnTD9ox', 'get_ServiceLocator_EnTD9oxService', true],
            'App\\Controller\\PedidoController::facturas' => ['privates', '.service_locator.K2780Ku', 'get_ServiceLocator_K2780KuService', true],
            'App\\Controller\\PedidoController::index' => ['privates', '.service_locator.K2780Ku', 'get_ServiceLocator_K2780KuService', true],
            'App\\Controller\\PedidoController::new' => ['privates', '.service_locator.IvF_3hN', 'get_ServiceLocator_IvF3hNService', true],
            'App\\Controller\\PedidoController::show' => ['privates', '.service_locator.AOEYXy4', 'get_ServiceLocator_AOEYXy4Service', true],
            'App\\Controller\\ProductoController::delete' => ['privates', '.service_locator.fU4aPQq', 'get_ServiceLocator_FU4aPQqService', true],
            'App\\Controller\\ProductoController::edit' => ['privates', '.service_locator.fU4aPQq', 'get_ServiceLocator_FU4aPQqService', true],
            'App\\Controller\\ProductoController::index' => ['privates', '.service_locator.4sssAUr', 'get_ServiceLocator_4sssAUrService', true],
            'App\\Controller\\ProductoController::new' => ['privates', '.service_locator.4sssAUr', 'get_ServiceLocator_4sssAUrService', true],
            'App\\Controller\\ProductoController::show' => ['privates', '.service_locator.1jRuMKL', 'get_ServiceLocator_1jRuMKLService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.7hOlDLP', 'get_ServiceLocator_7hOlDLPService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\ClienteController:delete' => ['privates', '.service_locator.8Qyp059', 'get_ServiceLocator_8Qyp059Service', true],
            'App\\Controller\\ClienteController:edit' => ['privates', '.service_locator.8Qyp059', 'get_ServiceLocator_8Qyp059Service', true],
            'App\\Controller\\ClienteController:index' => ['privates', '.service_locator.oXNKN64', 'get_ServiceLocator_OXNKN64Service', true],
            'App\\Controller\\ClienteController:new' => ['privates', '.service_locator.oXNKN64', 'get_ServiceLocator_OXNKN64Service', true],
            'App\\Controller\\ClienteController:show' => ['privates', '.service_locator.HCoah5z', 'get_ServiceLocator_HCoah5zService', true],
            'App\\Controller\\DetalleController:delete' => ['privates', '.service_locator.ieyI6te', 'get_ServiceLocator_IeyI6teService', true],
            'App\\Controller\\DetalleController:edit' => ['privates', '.service_locator.ieyI6te', 'get_ServiceLocator_IeyI6teService', true],
            'App\\Controller\\DetalleController:index' => ['privates', '.service_locator.8csE_d_', 'get_ServiceLocator_8csEDService', true],
            'App\\Controller\\DetalleController:new' => ['privates', '.service_locator.er9vHzz', 'get_ServiceLocator_Er9vHzzService', true],
            'App\\Controller\\DetalleController:show' => ['privates', '.service_locator.Mp5BfDI', 'get_ServiceLocator_Mp5BfDIService', true],
            'App\\Controller\\EmpresaController:delete' => ['privates', '.service_locator.mT1e0jA', 'get_ServiceLocator_MT1e0jAService', true],
            'App\\Controller\\EmpresaController:edit' => ['privates', '.service_locator.mT1e0jA', 'get_ServiceLocator_MT1e0jAService', true],
            'App\\Controller\\EmpresaController:index' => ['privates', '.service_locator.Bi_wSRO', 'get_ServiceLocator_BiWSROService', true],
            'App\\Controller\\EmpresaController:new' => ['privates', '.service_locator.ZumzI2X', 'get_ServiceLocator_ZumzI2XService', true],
            'App\\Controller\\EmpresaController:show' => ['privates', '.service_locator.f9r8_yo', 'get_ServiceLocator_F9r8YoService', true],
            'App\\Controller\\PedidoController:delete' => ['privates', '.service_locator.EnTD9ox', 'get_ServiceLocator_EnTD9oxService', true],
            'App\\Controller\\PedidoController:edit' => ['privates', '.service_locator.EnTD9ox', 'get_ServiceLocator_EnTD9oxService', true],
            'App\\Controller\\PedidoController:facturas' => ['privates', '.service_locator.K2780Ku', 'get_ServiceLocator_K2780KuService', true],
            'App\\Controller\\PedidoController:index' => ['privates', '.service_locator.K2780Ku', 'get_ServiceLocator_K2780KuService', true],
            'App\\Controller\\PedidoController:new' => ['privates', '.service_locator.IvF_3hN', 'get_ServiceLocator_IvF3hNService', true],
            'App\\Controller\\PedidoController:show' => ['privates', '.service_locator.AOEYXy4', 'get_ServiceLocator_AOEYXy4Service', true],
            'App\\Controller\\ProductoController:delete' => ['privates', '.service_locator.fU4aPQq', 'get_ServiceLocator_FU4aPQqService', true],
            'App\\Controller\\ProductoController:edit' => ['privates', '.service_locator.fU4aPQq', 'get_ServiceLocator_FU4aPQqService', true],
            'App\\Controller\\ProductoController:index' => ['privates', '.service_locator.4sssAUr', 'get_ServiceLocator_4sssAUrService', true],
            'App\\Controller\\ProductoController:new' => ['privates', '.service_locator.4sssAUr', 'get_ServiceLocator_4sssAUrService', true],
            'App\\Controller\\ProductoController:show' => ['privates', '.service_locator.1jRuMKL', 'get_ServiceLocator_1jRuMKLService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.7hOlDLP', 'get_ServiceLocator_7hOlDLPService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\ClienteController::delete' => '?',
            'App\\Controller\\ClienteController::edit' => '?',
            'App\\Controller\\ClienteController::index' => '?',
            'App\\Controller\\ClienteController::new' => '?',
            'App\\Controller\\ClienteController::show' => '?',
            'App\\Controller\\DetalleController::delete' => '?',
            'App\\Controller\\DetalleController::edit' => '?',
            'App\\Controller\\DetalleController::index' => '?',
            'App\\Controller\\DetalleController::new' => '?',
            'App\\Controller\\DetalleController::show' => '?',
            'App\\Controller\\EmpresaController::delete' => '?',
            'App\\Controller\\EmpresaController::edit' => '?',
            'App\\Controller\\EmpresaController::index' => '?',
            'App\\Controller\\EmpresaController::new' => '?',
            'App\\Controller\\EmpresaController::show' => '?',
            'App\\Controller\\PedidoController::delete' => '?',
            'App\\Controller\\PedidoController::edit' => '?',
            'App\\Controller\\PedidoController::facturas' => '?',
            'App\\Controller\\PedidoController::index' => '?',
            'App\\Controller\\PedidoController::new' => '?',
            'App\\Controller\\PedidoController::show' => '?',
            'App\\Controller\\ProductoController::delete' => '?',
            'App\\Controller\\ProductoController::edit' => '?',
            'App\\Controller\\ProductoController::index' => '?',
            'App\\Controller\\ProductoController::new' => '?',
            'App\\Controller\\ProductoController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\ClienteController:delete' => '?',
            'App\\Controller\\ClienteController:edit' => '?',
            'App\\Controller\\ClienteController:index' => '?',
            'App\\Controller\\ClienteController:new' => '?',
            'App\\Controller\\ClienteController:show' => '?',
            'App\\Controller\\DetalleController:delete' => '?',
            'App\\Controller\\DetalleController:edit' => '?',
            'App\\Controller\\DetalleController:index' => '?',
            'App\\Controller\\DetalleController:new' => '?',
            'App\\Controller\\DetalleController:show' => '?',
            'App\\Controller\\EmpresaController:delete' => '?',
            'App\\Controller\\EmpresaController:edit' => '?',
            'App\\Controller\\EmpresaController:index' => '?',
            'App\\Controller\\EmpresaController:new' => '?',
            'App\\Controller\\EmpresaController:show' => '?',
            'App\\Controller\\PedidoController:delete' => '?',
            'App\\Controller\\PedidoController:edit' => '?',
            'App\\Controller\\PedidoController:facturas' => '?',
            'App\\Controller\\PedidoController:index' => '?',
            'App\\Controller\\PedidoController:new' => '?',
            'App\\Controller\\PedidoController:show' => '?',
            'App\\Controller\\ProductoController:delete' => '?',
            'App\\Controller\\ProductoController:edit' => '?',
            'App\\Controller\\ProductoController:index' => '?',
            'App\\Controller\\ProductoController:new' => '?',
            'App\\Controller\\ProductoController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
