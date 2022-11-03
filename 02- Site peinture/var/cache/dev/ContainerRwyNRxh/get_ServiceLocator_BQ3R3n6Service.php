<?php

namespace ContainerRwyNRxh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BQ3R3n6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BQ3R3n6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BQ3R3n6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categorie' => ['privates', '.errored..service_locator.BQ3R3n6.App\\Entity\\Categorie', NULL, 'Cannot autowire service ".service_locator.BQ3R3n6": it references class "App\\Entity\\Categorie" but no such service exists.'],
            'peintureRepository' => ['privates', 'App\\Repository\\PeintureRepository', 'getPeintureRepositoryService', true],
        ], [
            'categorie' => 'App\\Entity\\Categorie',
            'peintureRepository' => 'App\\Repository\\PeintureRepository',
        ]);
    }
}
