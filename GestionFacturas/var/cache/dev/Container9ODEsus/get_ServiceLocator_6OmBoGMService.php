<?php

namespace Container9ODEsus;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6OmBoGMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6OmBoGM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6OmBoGM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'detalleRepository' => ['privates', 'App\\Repository\\DetalleRepository', 'getDetalleRepositoryService', true],
            'pedido' => ['privates', '.errored..service_locator.6OmBoGM.App\\Entity\\Pedido', NULL, 'Cannot autowire service ".service_locator.6OmBoGM": it references class "App\\Entity\\Pedido" but no such service exists.'],
            'pedidoRepository' => ['privates', 'App\\Repository\\PedidoRepository', 'getPedidoRepositoryService', true],
        ], [
            'detalleRepository' => 'App\\Repository\\DetalleRepository',
            'pedido' => 'App\\Entity\\Pedido',
            'pedidoRepository' => 'App\\Repository\\PedidoRepository',
        ]);
    }
}
