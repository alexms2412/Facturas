<?php

namespace ContainerPQZd9tl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8csEDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8csE_d_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8csE_d_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'detalleRepository' => ['privates', 'App\\Repository\\DetalleRepository', 'getDetalleRepositoryService', true],
        ], [
            'detalleRepository' => 'App\\Repository\\DetalleRepository',
        ]);
    }
}
