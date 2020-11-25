<?php

namespace ContainerAZXxBVj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9aMSQQNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9aMSQQN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9aMSQQN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categorieRepository' => ['privates', 'App\\Repository\\CategorieRepository', 'getCategorieRepositoryService', true],
        ], [
            'categorieRepository' => 'App\\Repository\\CategorieRepository',
        ]);
    }
}
