<?php

namespace ContainerAZXxBVj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_57pSehjService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.57pSehj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.57pSehj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categorie' => ['privates', '.errored..service_locator.57pSehj.App\\Entity\\Categorie', NULL, 'Cannot autowire service ".service_locator.57pSehj": it references class "App\\Entity\\Categorie" but no such service exists.'],
        ], [
            'categorie' => 'App\\Entity\\Categorie',
        ]);
    }
}
