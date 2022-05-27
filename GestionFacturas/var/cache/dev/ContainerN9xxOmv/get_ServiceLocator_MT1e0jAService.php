<?php

namespace ContainerN9xxOmv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MT1e0jAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.mT1e0jA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.mT1e0jA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'empresa' => ['privates', '.errored..service_locator.mT1e0jA.App\\Entity\\Empresa', NULL, 'Cannot autowire service ".service_locator.mT1e0jA": it references class "App\\Entity\\Empresa" but no such service exists.'],
            'empresaRepository' => ['privates', 'App\\Repository\\EmpresaRepository', 'getEmpresaRepositoryService', true],
        ], [
            'empresa' => 'App\\Entity\\Empresa',
            'empresaRepository' => 'App\\Repository\\EmpresaRepository',
        ]);
    }
}
