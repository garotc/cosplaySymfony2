<?php

namespace Container5ALC6bQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2wd8YtRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2wd8YtR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2wd8YtR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'inscriptionSolo' => ['privates', '.errored..service_locator.2wd8YtR.App\\Entity\\InscriptionSolo', NULL, 'Cannot autowire service ".service_locator.2wd8YtR": it references class "App\\Entity\\InscriptionSolo" but no such service exists.'],
        ], [
            'inscriptionSolo' => 'App\\Entity\\InscriptionSolo',
        ]);
    }
}
