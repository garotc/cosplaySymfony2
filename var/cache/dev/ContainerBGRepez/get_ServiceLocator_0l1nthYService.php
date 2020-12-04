<?php

namespace ContainerBGRepez;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0l1nthYService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0l1nthY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0l1nthY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'repo' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
            'user' => ['privates', '.errored..service_locator.0l1nthY.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.0l1nthY": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'em' => '?',
            'repo' => 'App\\Repository\\UserRepository',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
