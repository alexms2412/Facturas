<?php

namespace ContainerKfaTC7z;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoginouthAuthenticatorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Security\LoginouthAuthenticator' shared autowired service.
     *
     * @return \App\Security\LoginouthAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Security\\LoginouthAuthenticator'] = new \App\Security\LoginouthAuthenticator(($container->services['router'] ?? $container->getRouterService()));
    }
}