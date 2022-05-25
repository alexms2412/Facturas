<?php

namespace ContainerZyOIRHL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OXNKN64Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.oXNKN64' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.oXNKN64'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'clienteRepository' => ['privates', 'App\\Repository\\ClienteRepository', 'getClienteRepositoryService', true],
            'empresa' => ['privates', '.errored..service_locator.oXNKN64.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.oXNKN64": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create a class that implements this interface?'],
        ], [
            'clienteRepository' => 'App\\Repository\\ClienteRepository',
            'empresa' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ]);
    }
}
