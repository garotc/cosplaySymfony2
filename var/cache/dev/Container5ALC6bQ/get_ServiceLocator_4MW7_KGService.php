<?php

namespace Container5ALC6bQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4MW7_KGService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4MW7.KG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4MW7.KG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'solo' => ['privates', '.errored..service_locator.4MW7.KG.App\\Entity\\InscriptionSolo', NULL, 'Cannot autowire service ".service_locator.4MW7.KG": it references class "App\\Entity\\InscriptionSolo" but no such service exists.'],
        ], [
            'solo' => 'App\\Entity\\InscriptionSolo',
        ]);
    }
}