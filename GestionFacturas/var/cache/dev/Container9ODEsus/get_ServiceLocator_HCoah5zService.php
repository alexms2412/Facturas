<?php

namespace Container9ODEsus;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HCoah5zService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.HCoah5z' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HCoah5z'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cliente' => ['privates', '.errored..service_locator.HCoah5z.App\\Entity\\Cliente', NULL, 'Cannot autowire service ".service_locator.HCoah5z": it references class "App\\Entity\\Cliente" but no such service exists.'],
        ], [
            'cliente' => 'App\\Entity\\Cliente',
        ]);
    }
}
