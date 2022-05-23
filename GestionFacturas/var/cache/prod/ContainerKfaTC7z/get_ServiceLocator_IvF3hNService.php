<?php

namespace ContainerKfaTC7z;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IvF3hNService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.IvF_3hN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.IvF_3hN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'detalleRepository' => ['privates', 'App\\Repository\\DetalleRepository', 'getDetalleRepositoryService', true],
            'empresa' => ['privates', '.errored..service_locator.IvF_3hN.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.IvF_3hN": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create a class that implements this interface?'],
            'pedidoRepository' => ['privates', 'App\\Repository\\PedidoRepository', 'getPedidoRepositoryService', true],
        ], [
            'detalleRepository' => 'App\\Repository\\DetalleRepository',
            'empresa' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
            'pedidoRepository' => 'App\\Repository\\PedidoRepository',
        ]);
    }
}
