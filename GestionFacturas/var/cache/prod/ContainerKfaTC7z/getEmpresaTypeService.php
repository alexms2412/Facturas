<?php

namespace ContainerKfaTC7z;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEmpresaTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\EmpresaType' shared autowired service.
     *
     * @return \App\Form\EmpresaType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\EmpresaType'] = new \App\Form\EmpresaType();
    }
}
