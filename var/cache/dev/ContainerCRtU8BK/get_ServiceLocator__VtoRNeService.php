<?php

namespace ContainerCRtU8BK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__VtoRNeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..VtoRNe' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..VtoRNe'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categoriaRepository' => ['privates', 'App\\Repository\\CategoriaRepository', 'getCategoriaRepositoryService', true],
        ], [
            'categoriaRepository' => 'App\\Repository\\CategoriaRepository',
        ]);
    }
}