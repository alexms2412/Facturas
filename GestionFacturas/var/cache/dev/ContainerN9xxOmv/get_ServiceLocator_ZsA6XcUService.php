<?php

namespace ContainerN9xxOmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZsA6XcUService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zsA6XcU' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zsA6XcU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'detalle' => ['privates', '.errored..service_locator.zsA6XcU.App\\Entity\\Detalle', NULL, 'Cannot autowire service ".service_locator.zsA6XcU": it references class "App\\Entity\\Detalle" but no such service exists.'],
            'detalleRepository' => ['privates', 'App\\Repository\\DetalleRepository', 'getDetalleRepositoryService', true],
            'empresa' => ['privates', '.errored..service_locator.zsA6XcU.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.zsA6XcU": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create a class that implements this interface?'],
        ], [
            'detalle' => 'App\\Entity\\Detalle',
            'detalleRepository' => 'App\\Repository\\DetalleRepository',
            'empresa' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ]);
    }
}